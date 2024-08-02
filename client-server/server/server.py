from flask import Flask, request, jsonify
import psutil
import GPUtil
import platform
import time
import subprocess
import logging
from datetime import datetime, timedelta

app = Flask(__name__)

logging.basicConfig(level=logging.DEBUG, format='%(asctime)s - %(levelname)s - %(message)s')
logger = logging.getLogger(__name__)

# Define the rules with more granularity and a catch-all rule
RULES = [
    {'conditions': {'cpu': '>90', 'ram': '>95', 'duration': '>30'}, 'result': 'maintenance_needed'},
    {'conditions': {'cpu': '>80', 'ram': '>90', 'duration': '>60'}, 'result': 'maintenance_needed'},
    {'conditions': {'gpu': '>80', 'network': '>150', 'duration': '>60'}, 'result': 'maintenance_needed'},
    {'conditions': {'cpu': '>70', 'ram': '>80', 'gpu': '>70', 'duration': '>120'}, 'result': 'maintenance_needed'},
    {'conditions': {'crash_reports': '>5'}, 'result': 'maintenance_needed'},
    {'conditions': {'cpu': '>70', 'ram': '>80', 'gpu': '>70'}, 'result': 'high_usage'},
    {'conditions': {'cpu': '>60', 'ram': '>70', 'gpu': '>50', 'network': '<100'}, 'result': 'moderate'},
    {'conditions': {'cpu': '<70', 'ram': '<80', 'gpu': '<60', 'network': '<100', 'crash_reports': '<5'}, 'result': 'running_good'},
    {'conditions': {}, 'result': 'normal'}  # Catch-all rule
]

crash_reports = []
high_usage_start_time = None
last_boot_time = psutil.boot_time()

def measure_network_latency():
    try:
        start_time = time.time()
        subprocess.run(["ping", "-c", "1", "8.8.8.8"], capture_output=True, text=True, timeout=5)
        end_time = time.time()
        return (end_time - start_time) * 1000  # Convert to milliseconds
    except Exception as e:
        logger.error(f"Error measuring network latency: {e}")
        return 0

def get_crash_reports():
    global crash_reports
    # Remove crash reports older than 1 hour
    crash_reports = [report for report in crash_reports if report > datetime.now() - timedelta(hours=1)]
    return len(crash_reports)

def collect_metrics():
    global high_usage_start_time, last_boot_time
    
    data = {}
    data['cpu'] = psutil.cpu_percent(interval=1)
    data['ram'] = psutil.virtual_memory().percent
    try:
        gpus = GPUtil.getGPUs()
        if gpus:
            data['gpu'] = gpus[0].load * 100
        else:
            data['gpu'] = 0
    except Exception as e:
        data['gpu'] = 0
        logger.error(f"Error getting GPU usage: {e}")
    data['network'] = measure_network_latency()
    data['crash_reports'] = get_crash_reports()
    
    # Check if the system has been rebooted
    current_boot_time = psutil.boot_time()
    if current_boot_time != last_boot_time:
        high_usage_start_time = None
        last_boot_time = current_boot_time
    
    # Track duration of high usage
    if data['cpu'] > 70 or data['ram'] > 80 or data['gpu'] > 70:
        if high_usage_start_time is None:
            high_usage_start_time = datetime.now()
    else:
        high_usage_start_time = None
    
    if high_usage_start_time:
        data['duration'] = (datetime.now() - high_usage_start_time).total_seconds() / 60  # Convert to minutes
    else:
        data['duration'] = 0
    
    logger.info(f"Collected metrics: {data}")
    return data

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
    global high_usage_start_time
    
    # Check if high usage condition is met
    if data.get('cpu', 0) > 70 or data.get('ram', 0) > 80 or data.get('gpu', 0) > 70:
        if high_usage_start_time is None:
            high_usage_start_time = datetime.now()
    else:
        high_usage_start_time = None
    
    # Calculate duration of high usage
    if high_usage_start_time:
        data['duration'] = (datetime.now() - high_usage_start_time).total_seconds() / 60  # Convert to minutes
    else:
        data['duration'] = 0
    
    for rule in RULES:
        conditions_met = all(
            metric not in data or evaluate_condition(metric, condition, data[metric])
            for metric, condition in rule['conditions'].items()
        )
        if conditions_met:
            logger.info(f"Rule matched: {rule['result']}")
            return rule['result']
    
    logger.warning("No rule matched. This should not happen due to the catch-all rule.")
    return 'unknown'

@app.route('/process', methods=['POST'])
def process_data():
    data = request.json
    logger.debug(f"Received data: {data}")
    result = infer_result(data)
    
    response = {'result': result, 'metrics': data}
    logger.info(f"Processed result: {result}")
    return jsonify(response)

@app.route('/report_crash', methods=['POST'])
def report_crash():
    global crash_reports
    crash_reports.append(datetime.now())
    return jsonify({'status': 'Crash reported successfully'}), 200

if __name__ == '__main__':
    app.run(host='127.0.0.1', port=8080, debug=True)