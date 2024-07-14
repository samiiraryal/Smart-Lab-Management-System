import asyncio
import aiohttp
import json
import logging
from computer_expert_system import ComputerExpertSystem

#  server's public IP and port
SERVER_URL = 'http://13.215.254.7:5000/receive_data'

async def send_data():
    computer_expert_system = ComputerExpertSystem()
    computer_expert_system.collect_usage_data()
    computer_expert_system.evaluate_rules()
    data = computer_expert_system.working_memory['local_computer']
    data['status'] = computer_expert_system.status
    
    logging.info("Preparing to send data to server")
    logging.debug(f"Data to be sent: {json.dumps(data, indent=2)}")


    pythonCopyimport asyncio
import aiohttp
import json
import logging
from computer_expert_system import ComputerExpertSystem

# Configure logging
logging.basicConfig(level=logging.INFO, format='%(asctime)s - %(levelname)s - %(message)s')

# Server's public IP and port
SERVER_URL = 'http://13.215.254.7:5000/receive_data'

async def send_data():
    computer_expert_system = ComputerExpertSystem()
    computer_expert_system.collect_usage_data()
    computer_expert_system.evaluate_rules()
    data = computer_expert_system.working_memory['local_computer']
    data['status'] = computer_expert_system.status

    logging.info("Preparing to send data to server")
    logging.debug(f"Data to be sent: {json.dumps(data, indent=2)}")

    try:
        async with aiohttp.ClientSession() as session:
            async with session.post(SERVER_URL, json=data) as response:
                if response.status == 200:
                    result = await response.json()
                    logging.info(f"Data sent successfully. Server status: {result['status']}, ML status: {result['ml_status']}")
                else:
                    logging.error(f"Failed to send data. Status code: {response.status}")
                    response_text = await response.text()
                    logging.error(f"Response content: {response_text}")
    except aiohttp.ClientError as e:
        logging.error(f"Network error while sending data: {str(e)}")
    except json.JSONDecodeError as e:
        logging.error(f"Error decoding JSON response: {str(e)}")
    except Exception as e:
        logging.error(f"Unexpected error sending data: {str(e)}")

async def main():
    while True:
        try:
            await send_data()
        except Exception as e:
            logging.error(f"Error in main loop: {str(e)}")
        
        logging.info("Waiting for 10 minutes before next data send")
        await asyncio.sleep(600)

if __name__ == '__main__':
    logging.info("Starting the client application")
    asyncio.run(main())