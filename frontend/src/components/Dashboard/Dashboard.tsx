import React, { useState } from 'react';
import styles from './Dashboard.module.css';

const Dashboard = () => {
  const [selectedCourse, setSelectedCourse] = useState('');
  const [date, setDate] = useState('');
  const [time, setTime] = useState('');
  const [isButtonVisible, setIsButtonVisible] = useState(true);

  const handleCourseChange = (e:any) => {
    setSelectedCourse(e.target.value);
  };

  const handleDateChange = (e:any) => {
    setDate(e.target.value);
  };

  const handleTimeChange = (e:any) => {
    setTime(e.target.value);
  };

  const handleButtonClick = (action:any) => {
    console.log(`${action} button clicked`);
  };

  const toggleButtonVisibility = () => {
    setIsButtonVisible(!isButtonVisible);
  };

  return (
    <div className={styles.dashboardContainer}>
      
      <div className={styles.buttonGroup}>
      <h1 className={styles.title}>Admin Dashboard</h1>
        {isButtonVisible && (
          <button className={styles.button} onClick={() => handleButtonClick('Attendance')}>Attendance</button>
        )}
        <button className={styles.button} onClick={() => handleButtonClick('Submission')}>Submission</button>
        <button className={styles.button} onClick={() => handleButtonClick('Computer Condition')}>Computer Condition</button>
        <button className={styles.button} onClick={() => handleButtonClick('Student Progress')}>Student Progress</button>
      </div>
      <div className={styles.formContainer}>
        
        <div className={styles.formGroup}>
          <label className={styles.label} htmlFor="courseSelect">Select course:</label>
          <select id="courseSelect" className={styles.select} value={selectedCourse} onChange={handleCourseChange}>
            <option value="">--Select Course--</option>
            <option value="course1">Course 1</option>
            <option value="course2">Course 2</option>
            <option value="course3">Course 3</option>
          </select>
        </div>
        <div className={styles.formGroup}>
          <label className={styles.label} htmlFor="date">Date:</label>
          <input type="date" id="date" className={styles.input} value={date} onChange={handleDateChange} />
        </div>
        <div className={styles.formGroup}>
          <label className={styles.label} htmlFor="time">Time:</label>
          <input type="time" id="time" className={styles.input} value={time} onChange={handleTimeChange} />
        </div>

      </div>
    </div>
  );
};

export default Dashboard;
