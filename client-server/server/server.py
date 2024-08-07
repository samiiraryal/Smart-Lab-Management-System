from flask import Flask, request, jsonify
import psutil
import GPUtil
import platform
import time
import subprocess
import logging
from datetime import datetime, timedelta
import json
from pathlib import Path

app = Flask(__name__)

# Set up logging
log_dir = Path.home() / "AppData" / "Local" / "SystemMonitorServer"
log_dir.mkdir(parents=True, exist_ok=True)
log_file = log_dir / 'server.log'

# Configure logging to both file and console
logging.basicConfig(level=logging.DEBUG, 
                    format='%(asctime)s - %(levelname)s - %(message)s',
                    handlers=[
                        logging.FileHandler(log_file),
                        logging.StreamHandler()
                    ])
logger = logging.getLogger(__name__)

# Define the rules with more sophisticated logic
RULES = {
    'maintenance_needed': {
        'conditions': [
            {'cpu': '>90', 'ram': '>90', 'storage': '>90', 'duration': '>60'},
            {'cpu': '>80', 'ram': '>85', 'gpu': '>80', 'storage': '>85', 'duration': '>120'},
            {'crash_reports': '>10', 'duration': '>1440'},  # More than 10 crashes in 24 hours
            {'uptime': '>336'}  # More than 14 days uptime
        ],
        'weight': 1.0
    },
    'high_usage': {
        'conditions': [
            {'cpu': '>70', 'ram': '>80', 'duration': '>30'},
            {'gpu': '>70', 'duration': '>60'},
            {'storage': '>80'}
        ],
        'weight': 0.6
    },
    'moderate': {
        'conditions': [
            {'cpu': '>50', 'ram': '>60', 'duration': '>60'},
            {'gpu': '>50', 'duration': '>120'},
            {'storage': '>70'}
        ],
        'weight': 0.3
    },
    'running_good': {
        'conditions': [
            {'cpu': '<50', 'ram': '<60', 'gpu': '<50', 'storage': '<70', 'crash_reports': '<5'}
        ],
        'weight': 0.0
    }
}

high_usage_start_time = None
last_boot_time = psutil.boot_time()

# File to store crash reports
CRASH_REPORT_FILE = log_dir / 'crash_reports.json'

def load_crash_reports():
    if CRASH_REPORT_FILE.exists():
        with open(CRASH_REPORT_FILE, 'r') as f:
            return json.load(f)
    return []

def save_crash_reports(reports):
    with open(CRASH_REPORT_FILE, 'w') as f:
        json.dump(reports, f)

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

def infer_result(data):
    global high_usage_start_time, last_boot_time
    
    # Check if the system has been rebooted
    current_boot_time = data.get('boot_time', last_boot_time)
    if current_boot_time != last_boot_time:
        high_usage_start_time = None
        last_boot_time = current_boot_time
    
    # Check if high usage condition is met
    if (data.get('cpu', 0) > 70 or data.get('ram', 0) > 80 or 
        data.get('gpu', 0) > 70 or data.get('storage', {}).get('percent', 0) > 80):
        if high_usage_start_time is None:
            high_usage_start_time = datetime.now()
    else:
        high_usage_start_time = None
    
    # Calculate duration of high usage
    if high_usage_start_time:
        data['duration'] = (datetime.now() - high_usage_start_time).total_seconds() / 60  # Convert to minutes
    else:
        data['duration'] = 0
    
    # Calculate the score for each category
    scores = {}
    for category, rule in RULES.items():
        score = 0
        for condition_set in rule['conditions']:
            if all(evaluate_condition(metric, condition, 
                    data.get(metric, 0) if metric != 'storage' else data.get('storage', {}).get('percent', 0))
                   for metric, condition in condition_set.items()):
                score += rule['weight']
        scores[category] = score
    
    # Determine the result based on the highest score
    result = max(scores, key=scores.get)
    
    # Log detailed information about the decision
    logger.info(f"Scores: {json.dumps(scores, indent=2)}")
    logger.info(f"Inferred result: {result}")
    
    return result, scores

@app.route('/process', methods=['POST'])
def process_data():
    data = request.json
    logger.info(f"Received data: {json.dumps(data, indent=2)}")
    result, scores = infer_result(data)
    
    response = {
        'result': result,
        'scores': scores,
        'metrics': data
    }
    logger.info(f"Processed result: {result}")
    return jsonify(response)

@app.route('/report_crash', methods=['POST'])
def report_crash():
    crash_data = request.json
    crash_reports = load_crash_reports()
    
    # Add new crash report
    crash_reports.append({
        'timestamp': datetime.now().isoformat(),
        'hostname': crash_data.get('hostname', 'unknown'),
        'app_name': crash_data.get('app_name', 'unknown')
    })
    
    # Remove crash reports older than 7 days
    current_time = datetime.now()
    crash_reports = [report for report in crash_reports 
                     if current_time - datetime.fromisoformat(report['timestamp']) <= timedelta(days=7)]
    
    save_crash_reports(crash_reports)
    
    return jsonify({'status': 'Crash reported successfully', 'total_crashes': len(crash_reports)}), 200

if __name__ == '__main__':
    logger.info("Starting Flask server...")
    app.run(host='127.0.0.1', port=8080, debug=True)
    logger.info("Flask server started.")