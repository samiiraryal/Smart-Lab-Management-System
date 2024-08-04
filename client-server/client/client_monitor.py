import os
import sys
import subprocess
import time
import logging
import platform
import requests
import json
import winreg as reg
from pathlib import Path
import argparse
import psutil
import GPUtil
import ctypes

# Set up logging in user's home directory
log_dir = Path.home() / "AppData" / "Local" / "SystemMonitor"
log_dir.mkdir(parents=True, exist_ok=True)
log_file = log_dir / 'system_monitor.log'

logging.basicConfig(level=logging.DEBUG, 
                    format='%(asctime)s - %(levelname)s - %(message)s',
                    filename=log_file,
                    filemode='a')
logger = logging.getLogger(__name__)

SERVER_URL = "http://127.0.0.1:8080/process"  # Replace with your server's IP and port

def measure_network_latency():
    try:
        start_time = time.time()
        subprocess.run(["ping", "-n", "1", "8.8.8.8"], capture_output=True, text=True, timeout=5)
        end_time = time.time()
        return (end_time - start_time) * 1000  # Convert to milliseconds
    except Exception as e:
        logger.error(f"Error measuring network latency: {e}")
        return 0

def get_storage_metrics():
    try:
        storage = psutil.disk_usage('/')
        return {
            'total': storage.total / (1024 ** 3),  # Convert to GB
            'used': storage.used / (1024 ** 3),
            'free': storage.free / (1024 ** 3),
            'percent': storage.percent
        }
    except Exception as e:
        logger.error(f"Error getting storage metrics: {e}")
        return {}

def check_for_crashes():
    try:
        # Get the process ID of the script
        script_process_id = os.getpid()
        
        # Check if the process is still running
        if psutil.pid_exists(script_process_id):
            return 0  # No crash detected
        else:
            return 1  # Crash detected
    except Exception as e:
        logger.error(f"Error checking for crashes: {e}")
        return 0
def collect_metrics():
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
    data['storage'] = get_storage_metrics()
    data['hostname'] = platform.node()
    data['crash_reports'] = check_for_crashes()
    logger.debug(f"Collected metrics: {json.dumps(data, indent=2)}")
    return data

def send_metrics_to_server(data):
    try:
        response = requests.post(SERVER_URL, json=data, timeout=10)
        if response.status_code == 200:
            result = response.json()
            logger.info(f"Metrics sent successfully. Server response: {json.dumps(result, indent=2)}")
            return result
        else:
            logger.error(f"Failed to send metrics. Status code: {response.status_code}")
            return None
    except requests.exceptions.RequestException as e:
        logger.error(f"Error sending metrics to server: {e}")
        return None

def add_to_startup():
    key_path = r"Software\Microsoft\Windows\CurrentVersion\Run"
    try:
        key = reg.OpenKey(reg.HKEY_CURRENT_USER, key_path, 0, reg.KEY_ALL_ACCESS)
        reg.SetValueEx(key, "SystemMonitor", 0, reg.REG_SZ, f'"{sys.executable}" "{os.path.abspath(__file__)}" --minimized')
        reg.CloseKey(key)
        logger.info("Added to startup successfully")
    except WindowsError as e:
        logger.error(f"Failed to add to startup: {e}")

def run_minimized():
    if sys.platform.startswith('win'):
        ctypes.windll.user32.ShowWindow(ctypes.windll.kernel32.GetConsoleWindow(), 6)  # SW_MINIMIZE = 6

def display_info_message():
    ctypes.windll.user32.MessageBoxW(0, "This is a tool to measure system metrics and suggest maintenance. The window will be minimized to prevent accidental closing.", "System Monitor", 0x40)

def parse_arguments():
    parser = argparse.ArgumentParser(description="System Monitor Client")
    parser.add_argument("--test", action="store_true", help="Run in test mode (8 iterations)")
    parser.add_argument("--minimized", action="store_true", help="Run the script minimized")
    return parser.parse_args()

def run_continuous_monitoring():
    while True:
        metrics = collect_metrics()
        result = send_metrics_to_server(metrics)
        if result:
            logger.info(f"Result: {result['result']}")
            logger.info(f"Metrics: {json.dumps(result['metrics'], indent=2)}")
        time.sleep(10)  # Wait for 10 seconds before the next collection

def run_test_mode():
    print("Running in test mode (8 iterations)")
    for i in range(8):
        metrics = collect_metrics()
        result = send_metrics_to_server(metrics)
        if result:
            print(f"Run {i+1}: Result: {result['result']}")
            print(f"Metrics: {json.dumps(result['metrics'], indent=2)}")
        time.sleep(5)  # Wait for 5 seconds before the next run

def main():
    args = parse_arguments()
    logger.info("Starting System Monitor Client")
    
    if not args.minimized:
        display_info_message()
    
    run_minimized()
    
    if not args.test:
        add_to_startup()
        run_continuous_monitoring()
    else:
        run_test_mode()

if __name__ == "__main__":
    main()
