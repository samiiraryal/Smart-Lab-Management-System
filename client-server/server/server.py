import logging
from flask import Flask, request, jsonify, request_finished  # Import request_finished
from datetime import datetime, timedelta
import json
from pathlib import Path
from collections import deque
import atexit
import signal
from apscheduler.schedulers.background import BackgroundScheduler  # Import BackgroundScheduler
import threading
import time
import tempfile
import os
import threading
from queue import Queue
from collections import deque
import threading
from collections import defaultdict
import requests
import traceback
from requests.exceptions import RequestException


app = Flask(__name__)

# Set up logging
log_dir = Path.home() / "AppData" / "Local" / "SystemMonitorServer"
log_dir.mkdir(parents=True, exist_ok=True)
log_file = log_dir / 'server.log'

logging.basicConfig(level=logging.DEBUG, 
                    format='%(asctime)s - %(levelname)s - %(filename)s:%(lineno)d - %(message)s',
                    handlers=[
                        logging.FileHandler(log_file),
                        logging.StreamHandler()
                    ])
logger = logging.getLogger(__name__)

REMOTE_PHP_BACKEND = "https://bc4e-124-41-211-99.ngrok-free.app/store-metrics"

# Create a session with keep-alive
session = requests.Session()
session.keep_alive = True

def send_to_php_backend(data):
    max_retries = 5
    base_timeout = 30

    for attempt in range(max_retries):
        timeout = base_timeout * (2 ** attempt)
        logger.info(f"Attempt {attempt + 1}/{max_retries}: Sending data to PHP backend: {REMOTE_PHP_BACKEND}")
        try:
            logger.debug(f"Sending data: {json.dumps(data, indent=2)}")
            response = requests.post(REMOTE_PHP_BACKEND, json=data, timeout=timeout)
            logger.info(f"Response status code: {response.status_code}")
            logger.info(f"Response content: {response.text}")
            
            if response.status_code == 200:
                logger.info("Data sent successfully to remote PHP backend")
                return response
            else:
                logger.error(f"Failed to send data to remote PHP backend. Status code: {response.status_code}")
        
        except RequestException as e:
            logger.error(f"Error sending data to remote PHP backend: {str(e)}")
            logger.error(f"Traceback: {traceback.format_exc()}")
            
            if attempt == max_retries - 1:
                logger.error("Max retries reached. Giving up.")
                break
            
            wait_time = 2 ** attempt
            logger.info(f"Retrying in {wait_time} seconds...")
            time.sleep(wait_time)
    
    logger.error("Failed to send data to remote PHP backend after all retries.")

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

usage_history_queue = Queue(maxsize=720)
usage_history_lock = threading.Lock()
shutdown_flag = threading.Event()
save_attempt_flag = threading.Event()
client_usage_histories = defaultdict(lambda: Queue(maxsize=720))

HIGH_USAGE_THRESHOLD = {
    'cpu': 80,
    'ram': 75,
    'gpu': 70,
    'network': 400
}

def is_high_stress(data):
    return any(
        data.get(metric, 0) > threshold
        for metric, threshold in HIGH_USAGE_THRESHOLD.items()
    )

def calculate_recent_high_usage(events, duration=timedelta(hours=1)):
    now = datetime.now()
    recent_events = [event for event in events if now - event <= duration]
    total_duration = sum((min(now, event + duration) - event).total_seconds() for event in recent_events)
    return total_duration / 3600  # Convert to hours

# Thread-safe queue for usage history
usage_history_queue = Queue(maxsize=720)

# Lock for thread-safe operations
usage_history_lock = threading.Lock()

# Flag to ensure shutdown happens only once
shutdown_flag = threading.Event()

# RULES definition (as provided in your original code)
RULES = {
    'maintenance_needed': {
        'conditions': [
            {'recent_high_usage': '>2'},
            {'total_high_usage': '>48'},
            {'network': '>500', 'recent_high_usage': '>2'},
            {'cpu': '>90', 'ram': '>90', 'recent_high_usage': '>1'},
            {'cpu': '>85', 'ram': '>85', 'gpu': '>85', 'recent_high_usage': '>1'},
            {'cpu': '>85', 'ram': '>85', 'frequency': '>3', 'time_frame': '24h'},
            {'cpu': '>90', 'ram': '>90', 'gpu': '>90', 'network': '>700', 'recent_high_usage': '>0.5'}
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
            {'recent_high_usage': '>1'},
            {'total_high_usage': '>24'},
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
            {'recent_high_usage': '>0.5', 'recent_high_usage': '<1'},
            {'total_high_usage': '>12', 'total_high_usage': '<24'},
            {'frequency': '>1', 'time_frame': '24h', 'frequency': '<3', 'time_frame': '24h'}
        ],
        'weight': 0.4
    },
    'running_good': {
        'conditions': [
            {'cpu': '<50', 'ram': '<50', 'gpu': '<50', 'storage': '<70', 'network': '<100'},
            {'usage_score': '<0.5'},
            {'recent_high_usage': '<0.5'},
            {'total_high_usage': '<12'}
        ],
        'weight': 0.1
    },
    'logs_no_issue': {  # This is the new rule to add
        'conditions': [
            {'NetBeans': 'no_issues'},
            {'DevC++': 'no_issues'},
            {'MATLAB': 'no_issues'}
        ],
        'weight': 0.05  # Assign lower weight since it's minor but helps overall health evaluation
    }
}

@app.route('/report_error', methods=['POST'])
def report_error():
    error_data = request.json
    app_name = error_data['app_name']
    logs = error_data['logs']
    # Process the logs as needed, e.g., counting errors, storing logs, etc.
    process_error_logs(app_name, logs)
    return jsonify({'status': 'Received and processed error logs successfully'}), 200

def process_error_logs(app_name, logs):
    # Example: Increment a counter for errors for this specific application
    error_count_key = f"{app_name}_errors"
    if error_count_key in client_usage_histories:
        client_usage_histories[error_count_key] += 1
    else:
        client_usage_histories[error_count_key] = 1
    
    # Log this for review
    logger.info(f"Processed error logs for {app_name}: current count {client_usage_histories[error_count_key]}")

    # Implement further logic as needed based on error counts or other criteria


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
    # if metric == 'frequency':
    #     return evaluate_frequency(condition, data.get('time_frame', '24h'))
    if metric in ['NetBeans', 'DevC++', 'MATLAB']:
        return data.get(metric, '') == 'no_issues'
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

def process_logs(logs):
    # Start by assuming all apps have no issues
    software_status = {
        'NetBeans': 'no_issues',
        'DevC++': 'no_issues',
        'MATLAB': 'no_issues'
    }

    logger.info("Processing logs to determine software status.")

    # Process each log entry
    for log in logs:
        logger.info(f"Log entry: {log}")  # Log the current log entry being processed

        # Check for issues in logs
        if "error" in log.lower():  # Example check for an error in logs
            if "NetBeans" in log:
                software_status['NetBeans'] = 'issues'
                logger.info("NetBeans status updated to issues")
            elif "Dev C++" in log:
                software_status['DevC++'] = 'issues'
                logger.info("Dev C++ status updated to issues")
            elif "MATLAB" in log:
                software_status['MATLAB'] = 'issues'
                logger.info("MATLAB status updated to issues")
        elif "No new logs" in log:
            # This log indicates no new issues, but we can skip since we already initialized with no issues
            logger.info(f"No new logs for {log}. Status remains no_issues.")

    logger.info(f"Final software status after processing logs: {software_status}")
    return software_status



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
    total_duration = sum((min(now, event + duration) - event).total_seconds() for event in recent_events)
    return total_duration / 3600  # Convert to hours

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
    # Step 1: Check if there's a critical condition based on the data
    critical_result = check_critical_usage(data)
    if critical_result:
        return critical_result, 1.0, {critical_result: 1.0}

    # Step 2: Initialize a dictionary to store the scores for each rule category
    scores = {}
    for category, rule in RULES.items():
        score = 0
        # Evaluate each condition set within the rule
        for condition_set in rule['conditions']:
            # If all conditions in the set are met, add the rule's weight to the score
            if all(evaluate_condition(metric, condition, data) for metric, condition in condition_set.items()):
                score += rule['weight']
        # Store the weighted score for the current category
        scores[category] = score * rule['weight']

    # Step 3: Incorporate the log status into the 'running_good' category
    if all(data.get(app) == 'no_issues' for app in ['NetBeans', 'DevC++', 'MATLAB']):
        # If all software logs are clean, slightly boost the 'running_good' score
        scores['running_good'] += 0.1

    # Step 4: Check if 'running_good' should be the final result
    if (scores['running_good'] > 1.2 * max(scores.values())) or \
       (scores['running_good'] > 0 and sum(1 for metric in ['cpu', 'ram', 'gpu', 'network'] if data[metric] < 50) >= 3): 
        # If the 'running_good' score is significantly higher than others, return it as the result
        return 'running_good', 1.0, scores

    # Step 5: Otherwise, determine the result based on the highest score
    result = max(scores, key=scores.get)
    total_score = sum(scores.values())
    confidence = scores[result] / total_score if total_score > 0 else 0

    return result, confidence, scores


def load_usage_history():
    global client_usage_histories
    usage_history_file = Path('usage_history.json')
    logger.info(f"Attempting to load usage history from {usage_history_file.absolute()}")

    if not usage_history_file.exists():
        logger.warning(f"usage_history.json does not exist. Initializing empty usage history.")
        return

    try:
        with open(usage_history_file, 'r') as f:
            loaded_history = json.load(f)
            with usage_history_lock:
                for client_id, history in loaded_history.items():
                    client_queue = client_usage_histories[client_id]  # Assumes client_usage_histories is a defaultdict(Queue)
                    for timestamp, score in history:
                        if not client_queue.full():
                            client_queue.put((datetime.fromisoformat(timestamp), score))
                        else:
                            break
        logger.info(f"Loaded history for {len(client_usage_histories)} clients.")
    except json.JSONDecodeError as e:
        logger.error(f"JSON decoding error in usage_history.json: {e}")
    except Exception as e:
        logger.error(f"Unexpected error loading usage history: {e}")

def check_maintenance_needed(client_id):
    # Example function to calculate if maintenance is needed based on historical data
    history = client_usage_histories[client_id]
    average_cpu_usage = sum(data[1]['cpu'] for data in history) / len(history) if history else 0
    return average_cpu_usage > 85  # example threshold


# Add a global lock for usage history
usage_history_lock = threading.Lock()

# Function to save usage history (with enhanced error handling)
def save_usage_history():
    global client_usage_histories
    
    if shutdown_flag.is_set():
        logger.info("Shutdown in progress. Skipping regular save.")
        return

    usage_history_file = Path('usage_history.json')
    logger.info(f"Attempting to save usage history to {usage_history_file.absolute()}")
    
    try:
        with usage_history_lock:
            # Create a temporary copy of the histories
            temp_histories = {
                client_id: list(queue.queue)
                for client_id, queue in client_usage_histories.items()
            }
        
        if not temp_histories:
            logger.warning("Usage history is empty. Nothing to save.")
            return
        
        serializable_histories = {
            client_id: [(timestamp.isoformat(), score) for timestamp, score in history]
            for client_id, history in temp_histories.items()
        }
        
        # Use a temporary file for atomic write
        with tempfile.NamedTemporaryFile('w', delete=False) as tf:
            json.dump(serializable_histories, tf, indent=2)
            tempname = tf.name
        
        # Rename the temporary file to the actual file (atomic operation)
        os.replace(tempname, usage_history_file)
        
        logger.info(f"Usage history saved successfully for {len(serializable_histories)} clients.")
    except Exception as e:
        logger.error(f"Error saving usage history: {e}")

# Function to handle graceful shutdowns
def handle_shutdown(signum, frame):
    global shutdown_flag
    if not shutdown_flag.is_set():
        shutdown_flag.set()
        logger.info("Graceful shutdown initiated. Saving usage history...")
        save_usage_history()
        # Stop the Flask server
        os._exit(0)

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

def update_usage_history(client_id, new_data):
    with usage_history_lock:
        if client_id not in client_usage_histories:
            client_usage_histories[client_id] = deque(maxlen=720)  # Define max length for history
        
        # Assuming new_data is a tuple like (timestamp, usage_score)
        client_usage_histories[client_id].append(new_data)

        # Optionally, you could log this update
        logger.debug(f"Updated usage history for client {client_id}: {new_data}")


@app.route('/process', methods=['POST'])
def process_data():
    global high_usage_events, total_high_usage_duration, last_process_time, client_usage_histories

    current_time = datetime.now()
    current_data = request.json

    # Step 1: Process the logs to determine if they are clean (no issues)
    logs = current_data.get('logs', [])
    software_status = process_logs(logs)  # Process logs to update software status
    current_data.update(software_status)  # Update current data with log status

    logger.info(f"Processed data with software status: {current_data}")

    # Step 2: Proceed with the regular usage processing (NO EARLY EXIT)
    client_id = request.headers.get('Client-ID') or current_data.get('client_id', 'unknown')
    logger.info(f"Extracted client_id: {client_id}")

    # Assume calculate_usage_score can handle units, or adjust it to strip units before processing
    usage_score = calculate_usage_score(
        current_data.get('cpu_percent').rstrip('%'),  # Strip the '%' and convert to float if necessary
        current_data.get('ram_percent').rstrip('%'),
        current_data.get('gpu_percent').rstrip('%'),
        current_data.get('storage')['percent'].rstrip('%'),  # Assuming storage metrics also include units
        current_data.get('network_latency_ms').rstrip(' ms')
    )
    current_data['usage_score'] = f"{usage_score:.2f}"  # Convert score to string if it isn't already

    # Update the client's usage history with the new data
    update_usage_history(client_id, (current_time, usage_score))

    # Retrieve historical data for client to inform decision-making
    with usage_history_lock:
        historical_data = list(client_usage_histories[client_id].queue)
    historical_cpu_averages = [data[1] for data in historical_data]
    if historical_cpu_averages:
        average_cpu_usage = sum(historical_cpu_averages) / len(historical_cpu_averages)
        current_data['average_cpu_usage'] = f"{average_cpu_usage:.2f}%"  # Ensure this is formatted as a string with unit

    is_high_stress = (
        float(current_data.get('cpu_percent').rstrip('%')) > 80 or 
        float(current_data.get('ram_percent').rstrip('%')) > 75 or
        float(current_data.get('gpu_percent').rstrip('%')) > 70 or
        float(current_data.get('network_latency_ms').rstrip(' ms')) > 400
    )

    if is_high_stress:
        high_usage_events.append(current_time)

    if last_process_time is not None:
        time_diff = (current_time - last_process_time).total_seconds() / 3600
        if is_high_stress:
            total_high_usage_duration += time_diff

    last_process_time = current_time

    recent_high_usage_duration = calculate_recent_high_usage(high_usage_events)

    current_data['total_high_usage_duration'] = f"{total_high_usage_duration:.2f} hours"
    current_data['recent_high_usage_duration'] = f"{recent_high_usage_duration:.2f} hours"

    # Step 3: Infer result based on the data (logs + other metrics)
    result, confidence, scores = infer_result(current_data)

    response = {
        'result': result,
        'confidence': confidence,
        'scores': scores,
        'metrics': current_data  # Ensure all metrics sent in response include units
    }

    logger.info("Calling send_to_php_backend function")
    send_to_php_backend(response)
    logger.info("send_to_php_backend function call completed")

    logger.info(f"Processed data with units: {json.dumps(response, indent=2)}")
    save_high_usage_duration()

    return jsonify(response)



def background_save():
    while not shutdown_flag.is_set():
        time.sleep(10)  # Save every minute
        save_usage_history()
        
# Register cleanup function
@atexit.register
def cleanup():
    logger.info("Performing final cleanup...")
    save_usage_history()

# Start the background saving thread
save_thread = threading.Thread(target=background_save, daemon=True)
save_thread.start() 

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
    load_usage_history()

    # # Load usage history
    # try:
    #     if Path('usage_history.json').exists():
    #         with open('usage_history.json', 'r') as f:
    #             loaded_history = json.load(f)
    #             usage_history = deque([(datetime.fromisoformat(timestamp), score) for timestamp, score in loaded_history], maxlen=720)
    #     else:
    #         usage_history = deque(maxlen=720)
    # except json.JSONDecodeError as e:
    #     logger.error(f"Error loading usage history: {e}")
    #     usage_history = deque(maxlen=720)

    
    # Register signal handlers
    signal.signal(signal.SIGINT, handle_shutdown)
    signal.signal(signal.SIGTERM, handle_shutdown)
    
    # Start the background saving thread
    save_thread = threading.Thread(target=background_save, daemon=True)
    save_thread.start()
    
    app.run(host='0.0.0.0', port=8080, debug=True)
    logger.info("Flask server started.")