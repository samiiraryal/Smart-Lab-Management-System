import os
import sys
import subprocess
import shutil
from pathlib import Path
import logging

# Set up logging
log_dir = Path.home() / "AppData" / "Local" / "SystemMonitor"
log_dir.mkdir(parents=True, exist_ok=True)
log_file = log_dir / 'setup.log'

logging.basicConfig(level=logging.INFO, 
                    format='%(asctime)s - %(levelname)s - %(message)s',
                    handlers=[
                        logging.FileHandler(log_file),
                        logging.StreamHandler()
                    ])
logger = logging.getLogger(__name__)

def install_packages():
    required_packages = [
        'psutil',
        'GPUtil',
        'requests',
        'pywin32',
        'flask',
        'winshell'
    ]
    for package in required_packages:
        try:
            logger.info(f"Installing {package}...")
            subprocess.check_call([sys.executable, "-m", "pip", "install", package])
        except subprocess.CalledProcessError:
            logger.error(f"Failed to install {package}. Please install it manually.")
            sys.exit(1)

def create_batch_file(filename, script_name):
    batch_content = f'@echo off\n"{sys.executable}" "{os.path.abspath(script_name)}"\n'
    with open(filename, "w") as batch_file:
        batch_file.write(batch_content)
    logger.info(f"Created batch file: {filename}")

def create_shortcut(name, target):
    try:
        import winshell
        from win32com.client import Dispatch

        startup_folder = winshell.startup()
        path = os.path.join(startup_folder, f"{name}.lnk")
        shell = Dispatch('WScript.Shell')
        shortcut = shell.CreateShortCut(path)
        shortcut.Targetpath = target
        shortcut.WorkingDirectory = os.path.dirname(target)
        shortcut.save()
        logger.info(f"Created shortcut: {path}")
    except ImportError:
        logger.error("Failed to create shortcut. Make sure winshell and pywin32 are installed.")

def copy_scripts():
    scripts = ['client_monitor.py', 'server_monitor.py']
    for script in scripts:
        if os.path.exists(script):
            shutil.copy(script, os.path.join(os.path.dirname(__file__), script))
            logger.info(f"Copied {script} to the current directory")
        else:
            logger.warning(f"{script} not found in the current directory")

def main():
    logger.info("Starting System Monitor setup...")

    install_packages()
    copy_scripts()

    create_batch_file("start_client_monitor.bat", "client_monitor.py")
    create_batch_file("start_server_monitor.bat", "server_monitor.py")

    create_shortcut("SystemMonitorClient", os.path.abspath("start_client_monitor.bat"))
    create_shortcut("SystemMonitorServer", os.path.abspath("start_server_monitor.bat"))

    logger.info("Setup complete.")
    logger.info("System Monitor client will start automatically on next boot.")
    logger.info("You can also run start_client_monitor.bat to start the client manually.")
    logger.info("Run start_server_monitor.bat to start the server manually.")
    logger.info("To start monitoring now, run: python client_monitor.py")
    logger.info("To start the server now, run: python server_monitor.py")

if __name__ == "__main__":
    main()