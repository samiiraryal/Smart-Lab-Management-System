import React, { useState } from 'react';
import styles from './computerCondition.module.css';

const computers = [
  { id: 'PC-001', status: 'good', errors: 0, cpuUsage: 20, networkIssue: false },
  { id: 'PC-002', status: 'bad', errors: 5, cpuUsage: 90, networkIssue: true },
  { id: 'PC-003', status: 'bad', errors: 5, cpuUsage: 90, networkIssue: true },
  { id: 'PC-004', status: 'bad', errors: 5, cpuUsage: 70, networkIssue: true },
  // Add more computer objects as needed
];

const ComputerCondition = () => {
  const [selectedComputer, setSelectedComputer] = useState(null);

  const handleComputerClick = (computer) => {
    setSelectedComputer(computer);
  };

  return (
    <div className={styles.computerCondition}>
      <h1>Computer Condition</h1>
      <div className={styles.grid}>
        {computers.map((computer) => (
          <div
            key={computer.id}
            className={`${styles.computer} ${computer.status === 'bad' ? styles.needsMaintenance : ''}`}
            onClick={() => handleComputerClick(computer)}
          >
            {computer.id}
          </div>
        ))}
      </div>
      {selectedComputer && (
        <div className={styles.computerDetails}>
          <h2>Computer Details</h2>
          <p>ID: {selectedComputer.id}</p>
          <p>Status: {selectedComputer.status}</p>
          <p>System Errors: {selectedComputer.errors}</p>
          <p>CPU Usage: {selectedComputer.cpuUsage}%</p>
          <p>Network Issue: {selectedComputer.networkIssue ? 'Yes' : 'No'}</p>
        </div>
      )}
    </div>
  );
};

export default ComputerCondition;
