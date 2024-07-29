import os
import sys
import subprocess

def install_packages():
    required_packages = ['psutil', 'GPUtil', 'requests', 'pywin32']
    for package in required_packages:
        subprocess.check_call([sys.executable, "-m", "pip", "install", package])

def create_batch_file():
    batch_content = f'@echo off\n"{sys.executable}" "{os.path.abspath("client_monitor.py")}"\n'
    with open("start_monitor.bat", "w") as batch_file:
        batch_file.write(batch_content)

def create_shortcut():
    import winshell
    from win32com.client import Dispatch

    startup_folder = winshell.startup()
    path = os.path.join(startup_folder, "SystemMonitor.lnk")
    target = os.path.abspath("start_monitor.bat")
    
    shell = Dispatch('WScript.Shell')
    shortcut = shell.CreateShortCut(path)
    shortcut.Targetpath = target
    shortcut.WorkingDirectory = os.path.dirname(target)
    shortcut.save()

def main():
    print("Setting up System Monitor...")
    install_packages()
    create_batch_file()
    create_shortcut()
    print("Setup complete. System Monitor will start automatically on next boot.")
    print("You can also run start_monitor.bat to start it manually.")
    print("To start monitoring now, run: python client_monitor.py")

if __name__ == "__main__":
    main()