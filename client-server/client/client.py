import requests
import psutil
import time
import subprocess
import platform
import GPUtil
from datetime import datetime, timedelta
import json

SERVER_URL = "http://127.0.0.1:8080/process"
CRASH_REPORT_URL = "http://127.0.0.1:8080/report_crash"

def measure_network_latency():
    try:
        start_time = time.time()
        subprocess.run(["ping", "-n", "1", "8.8.8.8"], capture_output=True, text=True, timeout=5)
        end_time = time.time()
        return (end_time - start_time) * 1000  # Convert to milliseconds
    except Exception as e:
        print(f"Error measuring network latency: {e}")
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
        print(f"Error getting storage metrics: {e}")
        return {}

def get_computer_uptime():
    return (datetime.now() - datetime.fromtimestamp(psutil.boot_time())).total_seconds() / 3600  # Convert to hours

def get_system_metrics():
    cpu_usage = psutil.cpu_percent(interval=1)
    ram_usage = psutil.virtual_memory().percent
    gpu_usage = 0
    try:
        gpus = GPUtil.getGPUs()
        if gpus:
            gpu_usage = gpus[0].load * 100
    except Exception as e:
        print(f"Error getting GPU usage: {e}")
    
    network_latency = measure_network_latency()
    storage_metrics = get_storage_metrics()
    uptime = get_computer_uptime()
    
    return {
        'cpu': cpu_usage,
        'ram': ram_usage,
        'gpu': gpu_usage,
        'network': network_latency,
        'storage': storage_metrics,
        'uptime': uptime,
        'hostname': platform.node(),
        'boot_time': psutil.boot_time()
    }

def send_metrics_to_server(data):
    try:
        response = requests.post(SERVER_URL, json=data, timeout=10)
        if response.status_code == 200:
            return response.json()
        else:
            print(f"Error: Server returned status code {response.status_code}")
            return None
    except requests.exceptions.RequestException as e:
        print(f"Error sending metrics to server: {e}")
        return None

def main():
    print("Running system monitoring...")
    for i in range(20):
        data = get_system_metrics()
        print(f"\nRun {i+1} - Collected metrics:")
        print(json.dumps(data, indent=2))
        
        result = send_metrics_to_server(data)
        if result:
            print(f"Server response: {result['result']}")
        else:
            print("Failed to get response from server")
        
        time.sleep(5)  # Wait for 5 seconds before the next run

if __name__ == "__main__":
    main()