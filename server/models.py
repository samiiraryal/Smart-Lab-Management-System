from flask_sqlalchemy import SQLAlchemy

db = SQLAlchemy()

class UsageData(db.Model):
    id = db.Column(db.Integer, primary_key=True)
    timestamp = db.Column(db.DateTime, default=db.func.current_timestamp())
    system_errors = db.Column(db.Integer)
    cpu_usage = db.Column(db.Float)
    total_disk_space = db.Column(db.BigInteger)
    used_disk_space = db.Column(db.BigInteger)
    free_disk_space = db.Column(db.BigInteger)
    ram_usage = db.Column(db.Float)
    cpu_temperature = db.Column(db.Float, nullable=True)
    gpu_temperature = db.Column(db.Float, nullable=True)
    crash_reports = db.Column(db.Integer)
    prolonged_running_periods = db.Column(db.Integer)
    bytes_sent = db.Column(db.BigInteger)
    bytes_recv = db.Column(db.BigInteger)
    intrusion_attempts = db.Column(db.Integer)
    status = db.Column(db.String(20))