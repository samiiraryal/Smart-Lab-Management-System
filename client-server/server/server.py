from flask import Flask, request, jsonify
import logging
from datetime import datetime, timedelta
import json
from pathlib import Path
from collections import deque

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

# File to store total high usage duration
HIGH_USAGE_DURATION_FILE = log_dir / 'high_usage_duration.json'

# Global variables
high_usage_events = deque(maxlen=1000)  # Store recent high usage events
crash_reports = []  # Store crash reports
high_usage_start = None
usage_history = deque(maxlen=720)  # Store 6 hours of data (assuming 30-second intervals)
total_high_usage_duration = 0
last_process_time = None

def format_duration(seconds):
    hours, remainder = divmod(seconds, 3600)
    minutes, seconds = divmod(remainder, 60)
    return f"{int(hours)}h {int(minutes)}m {int(seconds)}s"

# Load total high usage duration
def load_high_usage_duration():
    global total_high_usage_duration
    try:
        if HIGH_USAGE_DURATION_FILE.exists():
            with open(HIGH_USAGE_DURATION_FILE, 'r') as f:
                data = json.load(f)
                total_high_usage_duration = data.get('total_high_usage_duration', 0)
    except json.JSONDecodeError as e:
        logger.error(f"Error loading high usage duration file: {e}")

# Save total high usage duration
def save_high_usage_duration():
    with open(HIGH_USAGE_DURATION_FILE, 'w') as f:
        json.dump({'total_high_usage_duration': total_high_usage_duration}, f)

# Load high usage duration at startup
load_high_usage_duration()

# Updated RULES (as provided)
RULES = {
    'maintenance_needed': {
        'conditions': [
            {'high_usage_duration': '>2'},  # High usage for over 2 hours
            {'uptime': '>168'},  # System has been running for over a week
            {'network': '>500', 'high_usage_duration': '>2'},  # High network usage with prolonged high overall usage
            {'cpu': '>90', 'ram': '>90', 'high_usage_duration': '>1'},  # Critical CPU & RAM usage for over an hour
            {'cpu': '>85', 'ram': '>85', 'gpu': '>85', 'high_usage_duration': '>1'},  # High usage across CPU, RAM, & GPU
            {'cpu': '>85', 'ram': '>85', 'frequency': '>3', 'time_frame': '24h'},  # Frequent high CPU & RAM usage
            {'cpu': '>90', 'ram': '>90', 'gpu': '>90', 'network': '>700', 'high_usage_duration': '>0.5'}  # Extreme usage across all metrics
        ],
        'weight': 1.0  # Highest weight for maintenance_needed
    },
    'high_usage': {
        'conditions': [
            {'cpu': '>80', 'ram': '>80'},  # High CPU & RAM usage
            {'cpu': '>85', 'gpu': '>80'},  # High CPU & GPU usage
            {'ram': '>90', 'gpu': '>80'},  # High RAM & GPU usage
            {'cpu': '>70', 'ram': '>70', 'gpu': '>70'},  # Moderately high usage across CPU, RAM, & GPU
            {'storage': '>90'},  # Very high storage usage
            {'usage_score': '>0.75'},  # High overall usage score
            {'network': '>500'},  # High network usage
            {'frequency': '>3', 'time_frame': '24h'}  # Frequent high usage events
        ],
        'weight': 0.77
    },
    'moderate': {
        'conditions': [
            {'cpu': '>50', 'ram': '>50', 'cpu': '<80', 'ram': '<80'},  # Moderate CPU & RAM usage
            {'gpu': '>50', 'gpu': '<80'},  # Moderate GPU usage
            {'storage': '>70', 'storage': '<90'},  # Moderate storage usage
            {'usage_score': '>0.5', 'usage_score': '<0.75'},  # Moderate overall usage score
            {'network': '>100', 'network': '<500'},  # Moderate network usage
            {'frequency': '>1', 'time_frame': '24h', 'frequency': '<3', 'time_frame': '24h'}  # Occasional high usage events
        ],
        'weight': 0.4
    },
    'running_good': {
        'conditions': [
            {'cpu': '<50', 'ram': '<50', 'gpu': '<50', 'storage': '<70', 'network': '<100'},  # Low usage across all metrics
            {'usage_score': '<0.5'},  # Low overall usage score
        ],
        'weight': 0.1  # Lowest weight for running_good
    }
}

def check_critical_usage(data):
    cpu = data.get('cpu', 0)
    ram = data.get('ram', 0)
    gpu = data.get('gpu', 0)
    high_usage_duration = data.get('high_usage_duration', 0)
    
    if (cpu > 90 and ram > 90) and high_usage_duration > 1:
        return 'maintenance_needed'
    elif (cpu > 85 and ram > 85) or (cpu > 90 or ram > 90 or gpu > 90):
        return 'high_usage'
    return None

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

def calculate_high_usage_time(usage_history, threshold=0.7):
    high_usage_time = timedelta()
    current_high_usage_start = None

    for i, (timestamp, score) in enumerate(usage_history):
        if score > threshold:
            if current_high_usage_start is None:
                current_high_usage_start = timestamp
        else:
            if current_high_usage_start is not None:
                high_usage_time += timestamp - current_high_usage_start
                current_high_usage_start = None

        # Handle the case where high usage continues to the end
        if i == len(usage_history) - 1 and current_high_usage_start is not None:
            high_usage_time += timestamp - current_high_usage_start

    return high_usage_time.total_seconds() / 3600  # Convert to hours

def calculate_usage_score(cpu, ram, gpu, storage, network):
    # Extract storage percentage
    storage_percent = storage.get('percent', 0) if isinstance(storage, dict) else storage
    
    # Normalize network latency (assuming 500ms as the max)
    normalized_network = min(network / 500, 1)
    
    # Calculate individual scores
    cpu_score = cpu / 100
    ram_score = ram / 100
    gpu_score = gpu / 100
    storage_score = storage_percent / 100
    network_score = normalized_network
    
    # Calculate weighted average
    weighted_score = (
        cpu_score * 0.3 +
        ram_score * 0.3 +
        gpu_score * 0.2 +
        storage_score * 0.1 +
        network_score * 0.1
    )
    
    return weighted_score

def evaluate_frequency(condition, time_frame):
    threshold = int(condition[1:])
    hours = int(time_frame[:-1])
    start_time = datetime.now() - timedelta(hours=hours)
    count = sum(1 for event in high_usage_events if event > start_time)
    return count > threshold

def evaluate_condition(metric, condition, data):
    if metric == 'frequency':
        return evaluate_frequency(condition, data.get('time_frame', '24h'))
    elif metric == 'high_usage_duration':
        return float(data.get(metric, 0)) > float(condition[1:])
    elif metric == 'storage':
        storage_value = data.get('storage', 0)
        if isinstance(storage_value, dict):
            storage_percent = storage_value.get('percent', 0)
        else:
            storage_percent = storage_value
        return evaluate_simple_condition(float(storage_percent), condition)
    elif metric in data:
        return evaluate_simple_condition(float(data[metric]), condition)
    return False

def evaluate_simple_condition(value, condition):
    operator, threshold = condition[0], float(condition[1:])
    if operator == '>':
        return value > threshold
    elif operator == '<':
        return value < threshold
    elif operator == '=':
        return value == threshold
    return False

@app.route('/process', methods=['POST'])
def process_data():
    global high_usage_start, usage_history, high_usage_events, total_high_usage_duration, last_process_time

    current_time = datetime.now()
    current_data = request.json
    logger.info(f"Received data: {json.dumps(current_data, indent=2)}")

    history = load_history()
    crash_reports = load_crash_reports()

    # Calculate usage score
    usage_score = calculate_usage_score(
        current_data.get('cpu', 0),
        current_data.get('ram', 0),
        current_data.get('gpu', 0),
        current_data.get('storage', {}),
        current_data.get('network', 0)
    )
    current_data['usage_score'] = usage_score

    # Update usage history and high usage events
    usage_history.append((current_time, usage_score))

    if current_data.get('cpu', 0) > 70 or current_data.get('ram', 0) > 80 or current_data.get('gpu', 0) > 70:
        high_usage_events.append(current_time)

    # Define "high stress" based on multiple metrics and thresholds
    is_high_stress = (
        current_data.get('cpu', 0) > 80 or 
        current_data.get('ram', 0) > 75 or
        current_data.get('gpu', 0) > 70 or
        current_data.get('network', 0) > 400 
    )

    # Track high usage duration
    if last_process_time is not None:
        time_diff = (current_time - last_process_time).total_seconds() / 3600  # Convert to hours
        
        if is_high_stress:
            if high_usage_start is None:
                high_usage_start = current_time
            total_high_usage_duration += time_diff
        else:
            if high_usage_start is not None:
                high_usage_start = None

    last_process_time = current_time

    # Save the updated total high usage duration
    save_high_usage_duration()

    # Update current_data['high_usage_duration'] 
    current_data['high_usage_duration'] = total_high_usage_duration

    # Convert uptime from seconds to hours
    current_data['uptime'] = current_data.get('uptime', 0) / 3600

    result, confidence, scores = infer_result(current_data)

    # Update history
    history.append({
        'timestamp': current_time.isoformat(),
        'usage_score': usage_score,
        'high_usage_duration': format_duration(int(total_high_usage_duration * 3600)),
        'uptime': current_data['uptime']
    })

    # Keep only last 7 days of history
    history = [entry for entry in history
                if current_time - datetime.fromisoformat(entry['timestamp']) <= timedelta(days=7)]

    save_history(history)

    response = {
        'result': result,
        'confidence': confidence,
        'scores': scores,
        'metrics': current_data
    }
    logger.info(f"Processed result: {result} with confidence {confidence:.2f}")
    logger.info(f"Total high usage duration: {format_duration(int(total_high_usage_duration * 3600))}")
    return jsonify(response)

# Add this global variable to track high usage duration
high_usage_start = None
usage_history = deque(maxlen=720)  # Store 6 hours of data (assuming 30-second intervals)

def infer_result(data):
    # First, check for critical usage
    critical_result = check_critical_usage(data)
    if critical_result:
        return critical_result, 1.0, {critical_result: 1.0}

    scores = {}
    for category, rule in RULES.items():
        score = 0
        for condition_set in rule['conditions']:
            if all(evaluate_condition(metric, condition, data) for metric, condition in condition_set.items()):
                score += rule['weight']
        scores[category] = score * rule['weight']

    # Prioritize 'running_good' if its score is significantly higher or if multiple metrics are "good"
    if (scores['running_good'] > 1.2 * max(scores.values())) or \
       (scores['running_good'] > 0 and sum(1 for metric in ['cpu', 'ram', 'gpu', 'network'] if data[metric] < 50) >= 3): 
        return 'running_good', 1.0, scores

    result = max(scores, key=scores.get)
    total_score = sum(scores.values())
    confidence = scores[result] / total_score if total_score > 0 else 0

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

if __name__ == '__main__':
    logger.info("Starting Flask server...")
    app.run(host='0.0.0.0', port=8080, debug=True)
    logger.info("Flask server started.")