import pandas as pd
import numpy as np
from sklearn.ensemble import RandomForestClassifier
from sklearn.model_selection import train_test_split
from sklearn.metrics import classification_report
from sklearn.pipeline import Pipeline
from sklearn.impute import SimpleImputer
from sklearn.preprocessing import StandardScaler
import joblib
from pathlib import Path
import logging
from datetime import datetime, timedelta
import json

# Configure logging
logging.basicConfig(level=logging.INFO,
                    format='%(asctime)s - %(levelname)s - %(message)s')
logger = logging.getLogger(__name__)

def combine_training_data(training_file, history_file, output_file):
    try:
        training_df = pd.read_csv(training_file)
    except FileNotFoundError:
        training_df = pd.DataFrame(columns=['client_id', 'timestamp', 'cpu', 'ram', 'gpu', 'network', 'storage_percent', 'usage_score', 'high_usage_duration', 'maintenance_needed'])

    try:
        with open(history_file, 'r') as f:
            history_data = json.load(f)
    except FileNotFoundError:
        history_data = {}

    history_rows = []
    for client_id, history in history_data.items():
        for timestamp, usage_score in history:
            history_rows.append({
                'client_id': client_id,
                'timestamp': timestamp,
                'usage_score': usage_score,
                # Add other metrics if available in history
                'cpu': None,  # You might not have all the metrics in history
                'ram': None,
                'gpu': None,
                'network': None,
                'storage_percent': None,
                'high_usage_duration': None,
                'maintenance_needed': None  # You won't have the target in historical data
            })

    history_df = pd.DataFrame(history_rows)
    combined_df = pd.concat([training_df, history_df], ignore_index=True)
    combined_df.dropna(subset=['maintenance_needed'], inplace=True)  # Drop rows with NaN in target
    combined_df.to_csv(output_file, index=False)

# Example usage:
log_dir = Path.home() / "AppData" / "Local" / "SystemMonitorServer"
training_file = log_dir / 'training_data.csv'
history_file = Path('usage_history.json')
output_file = log_dir / 'training_data_combined.csv' # New combined file

combine_training_data(training_file, history_file, output_file)

def train_maintenance_model():
    log_dir = Path.home() / "AppData" / "Local" / "SystemMonitorServer"
    training_file = log_dir / 'training_data.csv'
    history_file = Path('usage_history.json')  # Or log_dir / 'usage_history.json' if it's there
    output_file = log_dir / 'training_data_combined.csv'

    combine_training_data(training_file, history_file, output_file)  # Combine data FIRST

    
    if not output_file.exists():
        logger.error("No training data found")
        return

    # Load the COMBINED data
    df = pd.read_csv(output_file) # Changed to output_file
    # df = pd.read_csv(data_file)
    
    # Feature engineering
    features = ['cpu', 'ram', 'gpu', 'network', 'storage_percent', 
                'usage_score', 'high_usage_duration']
    target = 'maintenance_needed'
    
    # Create rolling window features
    window_size = 5
    for feat in features:
        df[f'{feat}_mean'] = df.groupby('client_id')[feat].transform(
            lambda x: x.rolling(window_size, min_periods=1).mean())
        df[f'{feat}_std'] = df.groupby('client_id')[feat].transform(
            lambda x: x.rolling(window_size, min_periods=1).std())
    
    # Split data
    X = df.drop(['client_id', 'timestamp', target], axis=1)
    y = df[target]
    
    # Handle class imbalance
    class_weights = {0: 1, 1: 5}  # Give more weight to maintenance cases
    
    # Create pipeline
    model = Pipeline([
        ('imputer', SimpleImputer(strategy='mean')),
        ('scaler', StandardScaler()),
        ('classifier', RandomForestClassifier(
            n_estimators=100,
            class_weight=class_weights,
            random_state=42,
            n_jobs=-1
        ))
    ])
    
    # Train model
    X_train, X_test, y_train, y_test = train_test_split(
        X, y, test_size=0.2, random_state=42, stratify=y)
    
    model.fit(X_train, y_train)
    
    # Evaluate
    y_pred = model.predict(X_test)
    logger.info("Model evaluation:\n" + classification_report(y_test, y_pred))
    
    # Save model
    model_file = log_dir / 'maintenance_model.pkl'
    joblib.dump(model, model_file)
    logger.info(f"Model saved to {model_file}")

if __name__ == '__main__':
    train_maintenance_model()