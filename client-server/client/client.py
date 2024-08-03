import requests
import psutil
import time
import subprocess
import platform

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

def get_system_metrics():
    # Get the current system metrics
    cpu_usage = psutil.cpu_percent(interval=1)
    ram_usage = psutil.virtual_memory().percent
    gpu_usage = 0  # Assuming no GPU usage for now
    network_latency = measure_network_latency()
    storage_metrics = get_storage_metrics()
    crash_reports = 0  # Assuming no crash reports for now

    return {
        'cpu': cpu_usage,
        'ram': ram_usage,
        'gpu': gpu_usage,
        'network': network_latency,
        'storage': storage_metrics,
        'crash_reports': crash_reports,
        'hostname': platform.node()
    }

def main():
    # Run the code 8 times with a 10-second interval
    for i in range(8):
        # Get the current system metrics
        data = get_system_metrics()

        # Send the data to the server
        response = requests.post('http://127.0.0.1:8080/process', json=data)

        # Check if the response was successful
        if response.status_code == 200:
            result = response.json()['result']
            print(f"Run {i+1}: Result: {result}")
        else:
            print(f"Run {i+1}: Error: {response.text}")

        # Wait for 5 seconds before the next run
        time.sleep(5)

if __name__ == "__main__":
    main()
