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

    def collect_usage_data(self):
        data = {}
        data.update(self.get_system_errors())
        data.update(self.get_cpu_usage())
        data.update(self.get_disk_space())
        data.update(self.get_ram_usage())
        data.update(self.get_temperature())
        data.update(self.get_crash_reports())
        data.update(self.get_prolonged_running_periods())
        self.working_memory['local_computer'] = data

    def evaluate_rules(self):
        rules = [self.system_errors_rule, self.high_cpu_usage_rule, self.low_disk_space_rule, self.high_ram_usage_rule, self.high_temperature_rule, self.crash_reports_rule, self.prolonged_running_periods_rule, self.performance_degradation_rule]
        faults = 0
        for rule in rules:
            if rule():
                faults += 1
        if faults >= 3:
            self.maintenance_required = True
            self.status = "Maintenance Needed"
        elif faults >= 1:
            self.status = "Moderate"

    def system_errors_rule(self):
        if self.working_memory['local_computer']['system_errors'] > 5:
            return True
        return False

    def high_cpu_usage_rule(self):
        if self.working_memory['local_computer']['cpu_usage'] > 80:
            return True
        return False

    def low_disk_space_rule(self):
        if self.working_memory['local_computer']['free_disk_space'] < 1024 * 1024 * 1024:
            return True
        return False

    def high_ram_usage_rule(self):
        if self.working_memory['local_computer']['ram_usage'] > 80:
            return True
        return False

    def high_temperature_rule(self):
        if self.working_memory['local_computer']['cpu_temperature'] is not None and self.working_memory['local_computer']['cpu_temperature'] > 60.0:
            return True
        return False

    def crash_reports_rule(self):
        if self.working_memory['local_computer']['crash_reports'] > 5:
            return True
        return False

    def prolonged_running_periods_rule(self):
        if self.working_memory['local_computer']['prolonged_running_periods'] > 4:
            return True
        return False

    def performance_degradation_rule(self):
        if (self.working_memory['local_computer']['cpu_usage'] > 50 and
            self.working_memory['local_computer']['ram_usage'] > 50):
            return True
        return False

    async def send_data(self):
        async with aiohttp.ClientSession() as session:
            async with session.post('http://your_server_address/receive_data', json=self.working_memory['local_computer']) as response:
                if response.status == 200:
                    print("Data sent successfully.")
                else:
                    print(f"Failed to send data. Status code: {response.status}")

    async def run(self):
        while True:
            self.collect_usage_data()
            self.evaluate_rules()
            await self.send_data()
            await asyncio.sleep(600)  # 600 seconds = 10 minutes

if __name__ == '__main__':
    computer_expert_system = ComputerExpertSystem()
    asyncio.run(computer_expert_system.run())
