from flask import Flask, request, jsonify
from flask_sqlalchemy import SQLAlchemy

app = Flask(__name__)
app.config['SQLALCHEMY_DATABASE_URI'] = 'sqlite:///usage_data.db'
db = SQLAlchemy(app)

class UsageData(db.Model):
    id = db.Column(db.Integer, primary_key=True)
    system_errors = db.Column(db.Integer)
    cpu_usage = db.Column(db.Float)
    total_disk_space = db.Column(db.BigInteger)
    used_disk_space = db.Column(db.BigInteger)
    free_disk_space = db.Column(db.BigInteger)
    ram_usage = db.Column(db.Float)
    cpu_temperature = db.Column(db.Float)
    gpu_temperature = db.Column(db.Float)
    crash_reports = db.Column(db.Integer)
    prolonged_running_periods = db.Column(db.Integer)

db.create_all()

@app.route('/receive_data', methods=['POST'])
def receive_data():
    data = request.json
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
        prolonged_running_periods=data.get('prolonged_running_periods', 0)
    )
    db.session.add(usage_data)
    db.session.commit()
    return jsonify({"status": "success"})

if __name__ == '__main__':
    app.run(host='0.0.0.0', port=5000)
