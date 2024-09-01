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

# Updated RULES with more nuanced conditions
RULES = {
    'maintenance_needed': {
        'conditions': [
            {'high_usage_duration': '>4'},  # High usage for more than 4 hours
        ],
        'weight': 1.0
    },
    'high_usage': {
        'conditions': [
            {'cpu': '>70', 'ram': '>80'},
            {'gpu': '>70'},
            {'storage': '>80'},
            {'usage_score': '>0.7'},
        ],
        'weight': 0.7
    },
    'moderate': {
        'conditions': [
            {'cpu': '>50', 'ram': '>60'},
            {'gpu': '>50'},
            {'storage': '>70'},
            {'usage_score': '>0.5'},
        ],
        'weight': 0.4
    },
    'running_good': {
        'conditions': [
            {'cpu': '<50', 'ram': '<60', 'gpu': '<50', 'storage': '<70'},
            {'usage_score': '<0.4'},
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
    return (cpu * 0.3 + ram * 0.3 + gpu * 0.2 + storage * 0.2) / 100

def analyze_usage_pattern(history, duration):
    # Convert duration from hours to number of entries (assuming 5-minute intervals)
    num_entries = int(float(duration[1:]) * 12)
    relevant_history = history[-num_entries:] if len(history) >= num_entries else history
    
    if not relevant_history:
        return 0
    
    return sum(entry['usage_score'] for entry in relevant_history) / len(relevant_history)

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

# Modify the process_data function to include the new high_usage_duration metric
@app.route('/process', methods=['POST'])
def process_data():
    current_data = request.json
    logger.info(f"Received data: {json.dumps(current_data, indent=2)}")

    history = load_history()
    crash_reports = load_crash_reports()

    result, confidence, scores = infer_result(current_data, history, crash_reports)

    # Update history
    current_usage_score = calculate_usage_score(
        current_data.get('cpu', 0),
        current_data.get('ram', 0),
        current_data.get('gpu', 0),
        current_data.get('storage', {}).get('percent', 0)
    )
    history.append({
        'timestamp': datetime.now().isoformat(),
        'usage_score': current_usage_score,
        'high_usage_duration': current_data.get('high_usage_duration', 0)
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


# Add this global variable to track high usage duration
high_usage_start = None
usage_history = deque(maxlen=720)  # Store 6 hours of data (assuming 30-second intervals)

def infer_result(data, history, crash_reports):
    global high_usage_start, usage_history
    
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
    
    # Update usage history
    current_time = datetime.now()
    usage_history.append((current_time, usage_score))
    
    # Track high usage duration
    if usage_score > 0.7:
        if high_usage_start is None:
            high_usage_start = current_time
    else:
        high_usage_start = None
    
    high_usage_duration = 0
    if high_usage_start:
        high_usage_duration = (current_time - high_usage_start).total_seconds() / 3600  # in hours
    
    data['high_usage_duration'] = high_usage_duration
    
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