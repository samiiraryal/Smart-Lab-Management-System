import asyncio
import aiohttp
import json
from computer_expert_system import ComputerExpertSystem

async def send_data():
    computer_expert_system = ComputerExpertSystem()
    computer_expert_system.collect_usage_data()
    computer_expert_system.evaluate_rules()
    data = computer_expert_system.working_memory['local_computer']
    data['status'] = computer_expert_system.status

    async with aiohttp.ClientSession() as session:
        async with session.post('http://18.234.133.60:5000/receive_data', json=data) as response:
            if response.status == 200:
                print("Data sent successfully.")
            else:
                print("Failed to send data.")

async def main():
    while True:
        await send_data()
        await asyncio.sleep(600)

if __name__ == '__main__':
    asyncio.run(main())
