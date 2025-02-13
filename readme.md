This project is a Smart Lab Management System designed to streamline and automate various tasks in a laboratory setting, focusing on attendance management, progress tracking, and predictive maintenance. The system employs a client-server architecture to centralize operations and decision-making.

# Features:

1. Automated Attendance Management

  A web app to mark and manage attendance.

  Tracks punctuality and overall attendance statistics.

2. Student Progress Tracking

  Digital records for tracking academic and practical progress.

3. Predictive Maintenance

  Monitors lab computer conditions using usage data.

  Predicts potential failures to prevent disruptions.

  Notifies concerned authorities before lab sessions.

4. Client-Server Architecture

  Client: Collects usage data from lab computers.

  Server: Processes data and provides maintenance status (e.g., smooth, moderate, needs maintenance).

5. AWS Integration

  Hosted on AWS for centralized data collection and decision-making.

  Ensures data integrity and scalability.

# Project Structure

The project files are organized into the following directories:

1. backend

  Contains server-side logic for processing data and managing system operations.

  Key components include APIs for:

    Attendance management.

    Maintenance predictions.

2. client

  Lightweight scripts for collecting usage data from lab computers.

  Sends data to the server for processing.

3. frontend

  Web application for:

    Attendance tracking.

    Monitoring computer statuses.

    Managing student progress.

4. guides

  Documentation and guides for:

    Setting up the system.

    Deployment on AWS.

5. diagrams

Visual representations of the system architecture and workflows.



Prerequisites

Software:

  Python 3.8+

  Node.js (for frontend)

  AWS CLI (for deployment)

Keys:

  Ensure access to expert-system.pem or equivalent private keys for AWS.

Installation

Clone the repository:

git clone https://github.com/samiiraryal/Smart-Lab-Management-System.git
cd Smart-Lab-Management-System

Backend Setup:

Navigate to the backend folder.

Install dependencies:

pip install -r requirements.txt

Run the server:

python server.py

Frontend Setup:

Navigate to the frontend folder.

Install dependencies:

npm install

Start the frontend server:

npm start

Client Setup:

Configure the client to point to the server's IP address.

Run the client script on each lab computer.

AWS Deployment:

Follow the guide in the guides folder for deploying the system to AWS.

Usage

Attendance Tracking:

Log in to the web app to mark and view attendance records.

Monitoring System Health:

Access the dashboard to check the status of lab computers.

Receive notifications for maintenance predictions.

Student Progress:

View and update student progress records in the web app.

Future Improvements

Enhance the expert system for more accurate predictions using machine learning.

Add a mobile app for easier access.

Integrate with other lab management tools for expanded functionality.

Contribution

Contributions are welcome! Please open an issue or submit a pull request to contribute to this project.

Contact

Samir Aryal

Email: samiraryal29@gmail.com


