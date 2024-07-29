import os
import sys
import subprocess
import time
import logging
import platform
import requests
import winreg as reg
from pathlib import Path

# Check if psutil and GPUtil are installed, if not, install them
required_packages = ['psutil', 'GPUtil']
for package in required_packages:
    try:
        __import__(package)
    except ImportError:
        subprocess.check_call([sys.executable, "-m", "pip", "install", package])

import psutil
import GPUtil

# Set up logging in user's home directory
log_dir = Path.home() / "AppData" / "Local" / "SystemMonitor"
log_dir.mkdir(parents=True, exist_ok=True)
log_file = log_dir / 'system_monitor.log'

logging.basicConfig(level=logging.INFO, 
                    format='%(asctime)s - %(levelname)s - %(message)s',
                    filename=log_file,
                    filemode='a')
logger = logging.getLogger(__name__)

SERVER_URL = "127.0.0.1:8080"  # Replace with your server's IP and port

def measure_network_latency():
    try:
        start_time = time.time()
        subprocess.run(["ping", "-n", "1", "8.8.8.8"], capture_output=True, text=True, timeout=5)
        end_time = time.time()
        return (end_time - start_time) * 1000  # Convert to milliseconds
    except Exception as e:
        logger.error(f"Error measuring network latency: {e}")
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
    data['hostname'] = platform.node()
    logger.info(f"Collected metrics: {data}")
    return data

def send_metrics_to_server(data):
    try:
        response = requests.post(SERVER_URL, json=data)
        if response.status_code == 200:
            logger.info("Metrics sent successfully")
        else:
            logger.error(f"Failed to send metrics. Status code: {response.status_code}")
    except Exception as e:
        logger.error(f"Error sending metrics to server: {e}")

def add_to_startup():
    key_path = r"Software\Microsoft\Windows\CurrentVersion\Run"
    try:
        key = reg.OpenKey(reg.HKEY_CURRENT_USER, key_path, 0, reg.KEY_ALL_ACCESS)
        reg.SetValueEx(key, "SystemMonitor", 0, reg.REG_SZ, f'"{sys.executable}" "{os.path.abspath(__file__)}"')
        reg.CloseKey(key)
        logger.info("Added to startup successfully")
    except WindowsError as e:
        logger.error(f"Failed to add to startup: {e}")

def main():
    logger.info("Starting System Monitor Client")
    add_to_startup()
    while True:
        metrics = collect_metrics()
        send_metrics_to_server(metrics)
        time.sleep(60)  # Wait for 60 seconds before the next collection

if __name__ == "__main__":
    main()