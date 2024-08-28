from flask import Flask, request, jsonify
import psutil
import GPUtil
import platform
import time
import logging
from datetime import datetime, timedelta
import json
from pathlib import Path


app = Flask(__name__)

# Set up logging
log_dir = Path.home() / "AppData" / "Local" / "SystemMonitorServer"
log_dir.mkdir(parents=True, exist_ok=True)
log_file = log_dir / 'server.log'

logging.basicConfig(level=logging.DEBUG, 
                    format='%(asctime)s - %(levelname)s - %(message)s',
                    handlers=[
                        logging.FileHandler(log_file),
                        logging.StreamHandler()
                    ])
logger = logging.getLogger(__name__)

# File to store historical data
HISTORY_FILE = log_dir / 'system_history.json'

# File to store crash reports
CRASH_REPORT_FILE = log_dir / 'crash_reports.json'

# Improved RULES with more nuanced conditions
RULES = {
    'maintenance_needed': {
        'conditions': [
            {'cpu': '>90', 'ram': '>90', 'storage': '>90', 'duration': '>2'},
            {'cpu': '>80', 'ram': '>85', 'gpu': '>80', 'storage': '>85', 'duration': '>4'},
            {'crash_reports': '>10', 'duration': '>24'},
            {'uptime': '>336'},  # More than 14 days uptime
            {'usage_score': '>0.8', 'uptime': '>168'},  # High usage for over a week
        ],
        'weight': 1.0
    },
    'high_usage': {
        'conditions': [
            {'cpu': '>70', 'ram': '>80', 'duration': '>1'},
            {'gpu': '>70', 'duration': '>2'},
            {'storage': '>80', 'duration': '>24'},
            {'usage_score': '>0.7', 'duration': '>12'},  # High usage for over 12 hours
            {'uptime': '>168', 'usage_score': '>0.6'},  # Moderate-high usage for over a week
        ],
        'weight': 0.7
    },
    'moderate': {
        'conditions': [
            {'cpu': '>50', 'ram': '>60', 'duration': '>0.5'},
            {'gpu': '>50', 'duration': '>1'},
            {'storage': '>70'},
            {'usage_score': '>0.5', 'duration': '>6'},  # Moderate usage for over 6 hours
            {'crash_reports': '>5', 'duration': '>24'},  # More than 5 crashes in 24 hours
        ],
        'weight': 0.4
    },
    'running_good': {
        'conditions': [
            {'cpu': '<50', 'ram': '<60', 'gpu': '<50', 'storage': '<70', 'crash_reports': '<3', 'uptime': '<72'},
            {'usage_score': '<0.4', 'duration': '>12', 'crash_reports': '0'},  # Low usage for over 12 hours, no crashes
        ],
        'weight': 0.1
    }
}

def load_history():
    try:
        if HISTORY_FILE.exists():
            with open(HISTORY_FILE, 'r') as f:
                return json.load(f)
    except json.JSONDecodeError as e:
        logger.error(f"Error loading history file: {e}")
    return []

def save_history(history):
    with open(HISTORY_FILE, 'w') as f:
        json.dump(history, f)

def load_crash_reports():
    try:
        if CRASH_REPORT_FILE.exists():
            with open(CRASH_REPORT_FILE, 'r') as f:
                return json.load(f)
    except json.JSONDecodeError as e:
        logger.error(f"Error loading crash reports file: {e}")
    return []

def save_crash_reports(reports):
    with open(CRASH_REPORT_FILE, 'w') as f:
        json.dump(reports, f)

def calculate_usage_score(cpu, ram, gpu, storage):
    return (cpu * 0.4 + ram * 0.3 + gpu * 0.2 + storage * 0.1) / 100

def analyze_usage_pattern(history):
    if not history:
        return 0
    
    recent_scores = [entry['usage_score'] for entry in history[-24:]]  # Last 24 entries (assuming hourly data)
    avg_score = sum(recent_scores) / len(recent_scores)
    return avg_score

def evaluate_condition(metric, condition, value):
    operator, threshold = condition[0], float(condition[1:])
    if operator == '>':
        return value > threshold
    elif operator == '<':
        return value < threshold
    elif operator == '=':
        return value == threshold
    else:
        logger.warning(f"Unknown operator in condition: {condition}")
        return False

@app.route('/process', methods=['POST'])
def process_data():
    current_data = request.json
    
    # Convert uptime from seconds to hours
    uptime_hours = current_data.get('uptime', 0) / 3600
    
    # Format the received data for logging
    formatted_data = {
        "cpu": f"{current_data.get('cpu', 0):.2f}%",
        "ram": f"{current_data.get('ram', 0):.2f}%",
        "gpu": f"{current_data.get('gpu', 0):.2f}%",
        "network": f"{current_data.get('network', 0):.2f} Mbps",
        "storage": {
            "total": f"{current_data.get('storage', {}).get('total', 0):.2f} GB",
            "used": f"{current_data.get('storage', {}).get('used', 0):.2f} GB",
            "free": f"{current_data.get('storage', {}).get('free', 0):.2f} GB",
            "percent": f"{current_data.get('storage', {}).get('percent', 0):.2f}%"
        },
        "uptime": f"{uptime_hours:.2f} hours",
        "hostname": current_data.get('hostname', 'unknown'),
        "boot_time": datetime.fromtimestamp(current_data.get('boot_time', 0)).strftime('%Y-%m-%d %H:%M:%S')
    }
    
    logger.info(f"Received data: {json.dumps(formatted_data, indent=2)}")

    history = load_history()
    crash_reports = load_crash_reports()

    result, confidence, scores = infer_result(current_data, history, crash_reports)

    # Update history
    history.append({
        'timestamp': datetime.now().isoformat(),
        'usage_score': current_data['usage_score']
    })
    
    # Keep only last 7 days of history
    history = [entry for entry in history 
               if datetime.now() - datetime.fromisoformat(entry['timestamp']) <= timedelta(days=7)]
    
    save_history(history)

    response = {
        'result': result,
        'confidence': confidence,
        'scores': scores,
        'metrics': current_data
    }
    logger.info(f"Processed result: {result} with confidence {confidence:.2f}")
    return jsonify(response)

def infer_result(data, history, crash_reports):
    # Extract storage percentage safely
    storage_percent = data.get('storage', {}).get('percent', 0)
    if isinstance(storage_percent, dict):
        storage_percent = storage_percent.get('percent', 0)

    usage_score = calculate_usage_score(
        data.get('cpu', 0),
        data.get('ram', 0),
        data.get('gpu', 0),
        storage_percent
    )
    data['usage_score'] = usage_score
    data['uptime'] = data.get('uptime', 0) / 3600  # Convert to hours
    
    # Get crash reports count for the last 24 hours
    data['crash_reports'] = sum(1 for report in crash_reports 
                                if datetime.now() - datetime.fromisoformat(report['timestamp']) <= timedelta(days=1))
    
    # Calculate the score for each category
    scores = {}
    for category, rule in RULES.items():
        score = 0
        for condition_set in rule['conditions']:
            if all(evaluate_condition(metric, condition, data.get(metric, 0) if metric != 'storage' else storage_percent)
                   for metric, condition in condition_set.items()):
                score += rule['weight']
        scores[category] = score
    
    # Determine the result based on the highest score
    result = max(scores, key=scores.get)
    confidence = scores[result]
    
    return result, confidence, scores

@app.route('/report_crash', methods=['POST'])
def report_crash():
    crash_data = request.json
    crash_reports = load_crash_reports()
    
    crash_reports.append({
        'timestamp': datetime.now().isoformat(),
        'hostname': crash_data.get('hostname', 'unknown'),
        'app_name': crash_data.get('app_name', 'unknown')
    })
    
    # Remove crash reports older than 30 days
    crash_reports = [report for report in crash_reports 
                     if datetime.now() - datetime.fromisoformat(report['timestamp']) <= timedelta(days=30)]
    
    save_crash_reports(crash_reports)
    
    return jsonify({'status': 'Crash reported successfully', 'total_crashes': len(crash_reports)}), 200

@app.route('/system_info', methods=['GET'])
def get_system_info():
    cpu_freq = psutil.cpu_freq()
    mem = psutil.virtual_memory()
    disk = psutil.disk_usage('/')
    
    try:
        gpus = GPUtil.getGPUs()
        gpu_info = [{
            'name': gpu.name,
            'load': f"{gpu.load * 100:.2f}%",
            'memory': {
                'total': f"{gpu.memoryTotal / 1024:.2f} GB",
                'used': f"{gpu.memoryUsed / 1024:.2f} GB",
                'free': f"{gpu.memoryFree / 1024:.2f} GB"
            }
        } for gpu in gpus]
    except:
        gpu_info = []

    boot_time = psutil.boot_time()
    current_time = time.time()
    uptime = current_time - boot_time

    system_info = {
        'hostname': platform.node(),
        'os': platform.system(),
        'os_version': platform.version(),
        'cpu': {
            'physical_cores': psutil.cpu_count(logical=False),
            'total_cores': psutil.cpu_count(logical=True),
            'max_frequency': f"{cpu_freq.max / 1000:.2f} GHz",
            'current_frequency': f"{cpu_freq.current / 1000:.2f} GHz"
        },
        'memory': {
            'total': f"{mem.total / (1024**3):.2f} GB",
            'available': f"{mem.available / (1024**3):.2f} GB",
            'used': f"{mem.used / (1024**3):.2f} GB",
            'percent': f"{mem.percent:.2f}%"
        },
        'disk': {
            'total': f"{disk.total / (1024**3):.2f} GB",
            'used': f"{disk.used / (1024**3):.2f} GB",
            'free': f"{disk.free / (1024**3):.2f} GB",
            'percent': f"{disk.percent:.2f}%"
        },
        'gpu': gpu_info,
        'boot_time': f"{int(boot_time)} seconds since epoch",
        'boot_time_formatted': datetime.fromtimestamp(boot_time).strftime('%Y-%m-%d %H:%M:%S'),
        'uptime': f"{uptime / 3600:.2f} hours"
    }
    
    logger.info(f"System info retrieved: {json.dumps(system_info, indent=2)}")
    return jsonify(system_info)

if __name__ == '__main__':
    logger.info("Starting Flask server...")
    app.run(host='0.0.0.0', port=8080, debug=True)
    logger.info("Flask server started.")