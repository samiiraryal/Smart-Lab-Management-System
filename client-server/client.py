import requests  
import psutil  
import time  

def get_system_metrics():  
    # Get the current system metrics  
    cpu_usage = psutil.cpu_percent()  
    ram_usage = psutil.virtual_memory().percent  
    gpu_usage = 0  # Assuming no GPU usage for now  
    network_latency = 0  # Assuming no network latency for now  
    crash_reports = 0  # Assuming no crash reports for now  

    return {  
        'cpu': cpu_usage,  
        'ram': ram_usage,  
        'gpu': gpu_usage,  
        'network': network_latency,  
        'crash_reports': crash_reports  
    }  

def main():  
    # Run the code 15 times with a 10-second interval  
    for i in range(15):  
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

        # Wait for 10 seconds before the next run  
        time.sleep(10)  

if __name__ == "__main__":  
    main()