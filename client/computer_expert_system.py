import psutil
import shutil
import datetime
import asyncio
import aiohttp
import wmi

class ComputerExpertSystem:
    def __init__(self):
        self.working_memory = {}
        self.maintenance_required = False
        self.status = "Good"

    def get_system_errors(self):
        # Return a random error count for demonstration
        return {'system_errors': 3}

    def get_cpu_usage(self):
        return {'cpu_usage': psutil.cpu_percent()}

    def get_disk_space(self):
        disk_usage = shutil.disk_usage('/')
        return {
            'total_disk_space': disk_usage.total,
            'used_disk_space': disk_usage.used,
            'free_disk_space': disk_usage.free
        }

    def get_ram_usage(self):
        return {'ram_usage': psutil.virtual_memory().percent}

    def get_temperature(self):
        try:
            w = wmi.WMI(namespace="root\\OpenHardwareMonitor")
            temperature_info = w.Sensor()
            cpu_temp = None
            gpu_temp = None
            
            for sensor in temperature_info:
                if sensor.SensorType == 'Temperature':
                    if sensor.Name == 'CPU Package':
                        cpu_temp = float(sensor.Value)
                    elif sensor.Name == 'GPU Core':
                        gpu_temp = float(sensor.Value)
            
            return {'cpu_temperature': cpu_temp, 'gpu_temperature': gpu_temp}

        except Exception as e:
            return {'cpu_temperature': None, 'gpu_temperature': None}

    def get_crash_reports(self):
        return {'crash_reports': 0}

    def get_prolonged_running_periods(self):
        uptime = datetime.datetime.now() - datetime.datetime.fromtimestamp(psutil.boot_time())
        return {'prolonged_running_periods': uptime.days}

    def get_network_usage(self):
        net_io = psutil.net_io_counters()
        return {
            'bytes_sent': net_io.bytes_sent,
            'bytes_recv': net_io.bytes_recv
        }

    def get_intrusion_attempts(self):
        # Placeholder for actual intrusion detection logic
        return {'intrusion_attempts': 0}

    def collect_usage_data(self):
        data = {}
        data.update(self.get_system_errors())
        data.update(self.get_cpu_usage())
        data.update(self.get_disk_space())
        data.update(self.get_ram_usage())
        data.update(self.get_temperature())
        data.update(self.get_crash_reports())
        data.update(self.get_prolonged_running_periods())
        data.update(self.get_network_usage())
        data.update(self.get_intrusion_attempts())
        self.working_memory['local_computer'] = data

    def system_errors_rule(self):
        return self.working_memory['local_computer']['system_errors'] > 5

    def high_cpu_usage_rule(self):
        return self.working_memory['local_computer']['cpu_usage'] > 80

    def low_disk_space_rule(self):
        return self.working_memory['local_computer']['free_disk_space'] < 1024 * 1024 * 1024

    def high_ram_usage_rule(self):
        return self.working_memory['local_computer']['ram_usage'] > 80

    def high_temperature_rule(self):
        temp = self.working_memory['local_computer']['cpu_temperature']
        return temp is not None and temp > 60.0

    def crash_reports_rule(self):
        return self.working_memory['local_computer']['crash_reports'] > 5

    def prolonged_running_periods_rule(self):
        return self.working_memory['local_computer']['prolonged_running_periods'] > 4

    def network_issues_rule(self):
        return self.working_memory['local_computer']['bytes_sent'] == 0 or self.working_memory['local_computer']['bytes_recv'] == 0

    def intrusion_detection_rule(self):
        return self.working_memory['local_computer']['intrusion_attempts'] > 0

    def performance_degradation_rule(self):
        return (self.working_memory['local_computer']['cpu_usage'] > 50 and
                self.working_memory['local_computer']['ram_usage'] > 50)

    def evaluate_rules(self):
        rules = [
            self.system_errors_rule,
            self.high_cpu_usage_rule,
            self.low_disk_space_rule,
            self.high_ram_usage_rule,
            self.high_temperature_rule,
            self.crash_reports_rule,
            self.prolonged_running_periods_rule,
            self.network_issues_rule,
            self.intrusion_detection_rule,
            self.performance_degradation_rule
        ]
        faults = 0
        for rule in rules:
            if rule():
                faults += 1
        if faults >= 3:
            self.maintenance_required = True
            self.status = "Maintenance Needed"
        elif faults >= 1:
            self.status = "Moderate"
        else:
            self.status = "Good"

    async def collect_usage_data_api(self, computer_id):
        async with aiohttp.ClientSession() as session:
            async with session.get(f'https://api.computer_usage_data.com/computers/{computer_id}/usage_data') as response:
                data = await response.json()
                self.working_memory[f'computer_{computer_id}'] = data

# Create an instance of the ComputerExpertSystem
computer_expert_system = ComputerExpertSystem()

# Collect usage data from your local computer
computer_expert_system.collect_usage_data()

# Evaluate rules and get actions
computer_expert_system.evaluate_rules()

if computer_expert_system.maintenance_required:
    print("Maintenance required!")
else:
    print("No maintenance required.")
