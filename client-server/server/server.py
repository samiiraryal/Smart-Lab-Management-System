import logging
from flask import Flask, request, jsonify, request_finished  # Import request_finished
from datetime import datetime, timedelta
import json
from pathlib import Path
from collections import deque
import atexit
import signal
from apscheduler.schedulers.background import BackgroundScheduler  # Import BackgroundScheduler

app = Flask(__name__)

# Set up logging
log_dir = Path.home() / "AppData" / "Local" / "SystemMonitorServer"
log_dir.mkdir(parents=True, exist_ok=True)
log_file = log_dir / 'server.log'

logging.basicConfig(level=logging.DEBUG, 
                    format='%(asctime)s - %(levelname)s - %(message)s',
                    handlers=[
                        logging.FileHandler(log_file),
                        logging.StreamHandler()  # Add this line to output logs to console
                    ])
logger = logging.getLogger(__name__)

# File to store historical data
HISTORY_FILE = log_dir / 'system_history.json'

# File to store crash reports
CRASH_REPORT_FILE = log_dir / 'crash_reports.json'

# File to store total high usage duration
HIGH_USAGE_DURATION_FILE = log_dir / 'high_usage_duration.json'

# Global variables
high_usage_events = deque(maxlen=1000)
high_usage_start = None
usage_history = deque(maxlen=720)
total_high_usage_duration = 0
last_process_time = None

# RULES definition (as provided in your original code)
RULES = {
    'maintenance_needed': {
        'conditions': [
            {'high_usage_duration': '>2'},
            {'uptime': '>168'},
            {'network': '>500', 'high_usage_duration': '>2'},
            {'cpu': '>90', 'ram': '>90', 'high_usage_duration': '>1'},
            {'cpu': '>85', 'ram': '>85', 'gpu': '>85', 'high_usage_duration': '>1'},
            {'cpu': '>85', 'ram': '>85', 'frequency': '>3', 'time_frame': '24h'},
            {'cpu': '>90', 'ram': '>90', 'gpu': '>90', 'network': '>700', 'high_usage_duration': '>0.5'}
        ],
        'weight': 1.0
    },
    'high_usage': {
        'conditions': [
            {'cpu': '>80', 'ram': '>80'},
            {'cpu': '>85', 'gpu': '>80'},
            {'ram': '>90', 'gpu': '>80'},
            {'cpu': '>70', 'ram': '>70', 'gpu': '>70'},
            {'storage': '>90'},
            {'usage_score': '>0.75'},
            {'network': '>500'},
            {'frequency': '>3', 'time_frame': '24h'}
        ],
        'weight': 0.77
    },
    'moderate': {
        'conditions': [
            {'cpu': '>50', 'ram': '>50', 'cpu': '<80', 'ram': '<80'},
            {'gpu': '>50', 'gpu': '<80'},
            {'storage': '>70', 'storage': '<90'},
            {'usage_score': '>0.5', 'usage_score': '<0.75'},
            {'network': '>100', 'network': '<500'},
            {'frequency': '>1', 'time_frame': '24h', 'frequency': '<3', 'time_frame': '24h'}
        ],
        'weight': 0.4
    },
    'running_good': {
        'conditions': [
            {'cpu': '<50', 'ram': '<50', 'gpu': '<50', 'storage': '<70', 'network': '<100'},
            {'usage_score': '<0.5'},
        ],
        'weight': 0.1
    }
}

def load_high_usage_duration():
    global total_high_usage_duration
    try:
        if HIGH_USAGE_DURATION_FILE.exists():
            with open(HIGH_USAGE_DURATION_FILE, 'r') as f:
                data = json.load(f)
                total_high_usage_duration = data.get('total_high_usage_duration', 0)
    except json.JSONDecodeError as e:
        logger.error(f"Error loading high usage duration file: {e}")

def save_high_usage_duration():
    with open(HIGH_USAGE_DURATION_FILE, 'w') as f:
        json.dump({'total_high_usage_duration': total_high_usage_duration}, f)

load_high_usage_duration()

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

def evaluate_frequency(condition, time_frame):
    threshold = int(condition[1:])
    hours = int(time_frame[:-1])
    start_time = datetime.now() - timedelta(hours=hours)
    count = sum(1 for event in high_usage_events if event > start_time)
    return count > threshold

def calculate_recent_high_usage(events, duration=timedelta(hours=1)):
    now = datetime.now()
    recent_events = [event for event in events if now - event <= duration]
    return len(recent_events) * (30 / 3600)  # Assuming 30-second intervals, convert to hours

def calculate_usage_score(cpu, ram, gpu, storage, network):
    storage_percent = storage.get('percent', 0) if isinstance(storage, dict) else storage
    normalized_network = min(network / 500, 1)
    
    weighted_score = (
        (cpu / 100) * 0.3 +
        (ram / 100) * 0.3 +
        (gpu / 100) * 0.2 +
        (storage_percent / 100) * 0.1 +
        normalized_network * 0.1
    )
    
    return weighted_score

def format_duration(seconds):
    hours, remainder = divmod(seconds, 3600)
    minutes, seconds = divmod(remainder, 60)
    return f"{int(hours)}h {int(minutes)}m {int(seconds)}s"

def infer_result(data):
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

    if (scores['running_good'] > 1.2 * max(scores.values())) or \
       (scores['running_good'] > 0 and sum(1 for metric in ['cpu', 'ram', 'gpu', 'network'] if data[metric] < 50) >= 3): 
        return 'running_good', 1.0, scores

    result = max(scores, key=scores.get)
    total_score = sum(scores.values())
    confidence = scores[result] / total_score if total_score > 0 else 0

    return result, confidence, scores

# Function to save usage history (with enhanced error handling)
def save_usage_history():
    try:
        # Ensure the directory exists
        Path('usage_history.json').parent.mkdir(parents=True, exist_ok=True)

        logger.debug(f"Current usage history length: {len(usage_history)}")

        with open('usage_history.json', 'w') as f:
            # Convert datetime objects to strings
            serializable_history = [(timestamp.isoformat(), score) for timestamp, score in usage_history]

            # Check if usage_history is empty
            if not serializable_history:
                logger.warning("Usage history is empty. Nothing to save.")
                return

            json.dump(serializable_history, f)
            logger.info(f"Usage history saved successfully. Saved {len(serializable_history)} entries.")
    except Exception as e:
        logger.error(f"Error saving usage history: {e}")

# Function to handle graceful shutdowns
def handle_shutdown(*args):
    logger.info("Graceful shutdown initiated. Saving usage history...")
    save_usage_history()
    exit(0)

# On request finished (for additional safety)
def save_usage_history_on_shutdown(sender, **extra):  # Define the function here
    save_usage_history()

# Register signal handlers
signal.signal(signal.SIGINT, handle_shutdown)
signal.signal(signal.SIGTERM, handle_shutdown)

# Register atexit function
atexit.register(save_usage_history)

# Schedule periodic saving (every 10 minutes)
scheduler = BackgroundScheduler()
scheduler.add_job(save_usage_history, 'interval', minutes=10)
scheduler.start()

@app.route('/process', methods=['POST'])
def process_data():
    global high_usage_start, usage_history, high_usage_events, total_high_usage_duration, last_process_time

    current_time = datetime.now()
    current_data = request.json

    # Calculate usage score
    usage_score = calculate_usage_score(
        current_data.get('cpu', 0),
        current_data.get('ram', 0),
        current_data.get('gpu', 0),
        current_data.get('storage', {}),
        current_data.get('network', 0)
    )
    current_data['usage_score'] = usage_score

    # Append to usage history
    usage_history.append((current_time, usage_score))
    logger.debug(f"Appended to usage history. Current length: {len(usage_history)}")

    is_high_stress = (
        current_data.get('cpu', 0) > 80 or 
        current_data.get('ram', 0) > 75 or
        current_data.get('gpu', 0) > 70 or
        current_data.get('network', 0) > 400 
    )

    if is_high_stress:
        high_usage_events.append(current_time)
        if high_usage_start is None:
            high_usage_start = current_time
    else:
        if high_usage_start is not None:
            duration = (current_time - high_usage_start).total_seconds() / 3600
            total_high_usage_duration += duration
            high_usage_start = None

    if last_process_time is not None:
        time_diff = (current_time - last_process_time).total_seconds() / 3600
        if is_high_stress:
            total_high_usage_duration += time_diff

    last_process_time = current_time

    recent_high_usage_duration = calculate_recent_high_usage(high_usage_events)

    current_data['total_high_usage_duration'] = total_high_usage_duration
    current_data['recent_high_usage_duration'] = recent_high_usage_duration

    result, confidence, scores = infer_result(current_data)

    response = {
        'result': result,
        'confidence': confidence,
        'scores': scores,
        'metrics': current_data
    }

    logger.info(f"Processed data: {json.dumps(response, indent=2)}")
    save_high_usage_duration()

    return jsonify(response)

@app.route('/report_crash', methods=['POST'])
def report_crash():
    crash_data = request.json
    crash_reports = load_crash_reports()
    
    crash_reports.append({
        'timestamp': datetime.now().isoformat(),
        'hostname': crash_data.get('hostname', 'unknown'),
        'app_name': crash_data.get('app_name', 'unknown')
    })
    
    crash_reports = [report for report in crash_reports 
                     if datetime.now() - datetime.fromisoformat(report['timestamp']) <= timedelta(days=30)]
    
    save_crash_reports(crash_reports)
    
    return jsonify({'status': 'Crash reported successfully', 'total_crashes': len(crash_reports)}), 200

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


if __name__ == '__main__':
    logger.info("Starting Flask server...")

    # Load usage history
    try:
        if Path('usage_history.json').exists():
            with open('usage_history.json', 'r') as f:
                loaded_history = json.load(f)
                usage_history = deque([(datetime.fromisoformat(timestamp), score) for timestamp, score in loaded_history], maxlen=720)
        else:
            usage_history = deque(maxlen=720)
    except json.JSONDecodeError as e:
        logger.error(f"Error loading usage history: {e}")
        usage_history = deque(maxlen=720)

    

    app.run(host='0.0.0.0', port=8080, debug=True)
    logger.info("Flask server started.")