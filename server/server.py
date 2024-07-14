from flask import Flask, request, jsonify
from flask_sqlalchemy import SQLAlchemy
from models import db, UsageData
from config import Config
import joblib
import logging

app = Flask(__name__)
app.config.from_object(Config)
db.init_app(app)

#configure logging
logging.basicConfig(level=logging.DEBUG)

class InferenceEngine:
    @staticmethod
    def evaluate(data):
        # Rule-based thresholds
        faults = 0
        thresholds = {
            'system_errors': 3,
            'cpu_usage': 70,
            'free_disk_space': 2 * 1024 * 1024 * 1024,
            'ram_usage': 75,
            'cpu_temperature': 55.0,
            'crash_reports': 3,
            'prolonged_running_periods': 3,
            'intrusion_attempts': 1,
            'network_issues': True
        }
        if data['system_errors'] > thresholds['system_errors']:
            faults += 1
        if data['cpu_usage'] > thresholds['cpu_usage']:
            faults += 1
        if data['free_disk_space'] < thresholds['free_disk_space']:
            faults += 1
        if data['ram_usage'] > thresholds['ram_usage']:
            faults += 1
        if data['cpu_temperature'] is not None and data['cpu_temperature'] > thresholds['cpu_temperature']:
            faults += 1
        if data['crash_reports'] > thresholds['crash_reports']:
            faults += 1
        if data['prolonged_running_periods'] > thresholds['prolonged_running_periods']:
            faults += 1
        if data['intrusion_attempts'] > thresholds['intrusion_attempts']:
            faults += 1
        if faults >= 3:
            return "Maintenance Needed"
        elif faults >= 1:
            return "Moderate"
        return "Good"

    @staticmethod
    def ml_evaluate(data):
        # Load the trained machine learning model
        model = joblib.load('model.joblib')
        # Prepare data for prediction
        features = [
            data['system_errors'],
            data['cpu_usage'],
            data['total_disk_space'],
            data['used_disk_space'],
            data['free_disk_space'],
            data['ram_usage'],
            data['cpu_temperature'],
            data['gpu_temperature'],
            data['crash_reports'],
            data['prolonged_running_periods'],
            data['bytes_sent'],
            data['bytes_recv'],
            data['intrusion_attempts']
        ]
        prediction = model.predict([features])
        return prediction[0]

@app.route('/receive_data', methods=['POST'])
def receive_data():
    app.logger.info("Received data")
    data = request.json
    app.logger.debug(f"Received data: {data}")

    status = InferenceEngine.evaluate(data)
    app.logger.info(f"Rule-based evaluation result: {status}")

    ml_status = InferenceEngine.ml_evaluate(data)
    app.logger.info(f"Machine learning evaluation result: {ml_status}")

    usage_data = UsageData(
        system_errors=data.get('system_errors', 0),
        cpu_usage=data.get('cpu_usage', 0.0),
        total_disk_space=data.get('total_disk_space', 0),
        used_disk_space=data.get('used_disk_space', 0),
        free_disk_space=data.get('free_disk_space', 0),
        ram_usage=data.get('ram_usage', 0.0),
        cpu_temperature=data.get('cpu_temperature'),
        gpu_temperature=data.get('gpu_temperature'),
        crash_reports=data.get('crash_reports', 0),
        prolonged_running_periods=data.get('prolonged_running_periods', 0),
        bytes_sent=data.get('bytes_sent', 0),
        bytes_recv=data.get('bytes_recv', 0),
        intrusion_attempts=data.get('intrusion_attempts', 0),
        status=status
    )
    db.session.add(usage_data)
    db.session.commit()
    app.logger.info("Data saved to database")

    return jsonify({"status": status, "ml_status": ml_status})

if __name__ == '__main__':
    app.logger.info("Starting the server")
    with app.app_context():
        db.create_all()
    app.run(host='0.0.0.0', port=8080, debug=True)
