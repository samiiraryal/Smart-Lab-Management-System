import React, { useState } from "react";
import { useNavigate, useParams, useSearchParams } from "react-router-dom";
import { FaBars } from "react-icons/fa";
import styles from "./Dashboard.module.css";
import Submission from "../submission/submission.js";
import Attendance from "../attendance/attendance.js";
import ComputerCondition from "../computerCondition/computerCondition.js";
import StudentProgress from "../studentProgress/studentProgress.js";
import PasswordRequest from "../passwordRequest/passwordRequest.js";
// clear
const Dashboard = () => {
  const [selectedCourse, setSelectedCourse] = useState("");
  const [date, setDate] = useState("");
  const [time, setTime] = useState("");
  const [isMenuVisible, setIsMenuVisible] = useState(false);
  const navigate = useNavigate();
  const [searchParams] = useSearchParams();

  const refParam = searchParams.get("ref");

  const handleCourseChange = (e) => {
    setSelectedCourse(e.target.value);
  };

  const handleDateChange = (e) => {
    setDate(e.target.value);
  };

  const handleTimeChange = (e) => {
    setTime(e.target.value);
  };

  const handleButtonClick = (action) => {
    console.log(`${action} button clicked`);
    navigate(`/dashboard?ref=${action.toLowerCase().replace(' ', '-')}`);
  };

  const toggleMenuVisibility = () => {
    setIsMenuVisible(!isMenuVisible);
  };

  return (
    <div className={styles.dashboardContainer}>
      <div className={styles.header}>
        <h1 className={styles.title}>Admin Dashboard</h1>
        {/* <div className={styles.hamburger}>
          <FaBars onClick={toggleMenuVisibility} />
        </div> */}
      </div>
      <div className={styles.content}>
        {/* {isMenuVisible && ( */}
        <div className={styles.menuContainer}>
          <div className={styles.buttonGroup}>
            <button
              className={styles.button}
              onClick={() => handleButtonClick("Attendance")}
            >
              Attendance
            </button>
            <button
              className={styles.button}
              onClick={() => handleButtonClick("Submission")}
            >
              Submission
            </button>
            <button
              className={styles.button}
              onClick={() => handleButtonClick("Computer Condition")}
            >
              Computer Condition
            </button>
            <button
              className={styles.button}
              onClick={() => handleButtonClick("Student Progress")}
            >
              Student Progress
            </button>
            <button
              className={styles.button}
              onClick={() => handleButtonClick("Password Request")}
            >
              Password Request
            </button>
            <button
              className={styles.button}
              onClick={() => handleButtonClick("CSV Reader")}
            >
              CSV Reader
            </button>
          </div>
        </div>
        {/* )} */}
        <div className={styles.formContainer}>
          {refParam === "submission" ? (
            <Submission />
          ) : refParam === "attendance" ? (
            <Attendance />
          ) : refParam === "computer-condition" ? (
            <ComputerCondition />
          ) : refParam === "student-progress" ? (
            <StudentProgress />
          ) : refParam === "password-request" ? (
            <PasswordRequest />
          ) : refParam === "csv-reader" ? (
            <CSVReader />
          ) : (
            <>
              <div className={styles.formGroup}>
                <label className={styles.label} htmlFor="courseSelect">
                  Select course:
                </label>
                <select
                  id="courseSelect"
                  className={styles.select}
                  value={selectedCourse}
                  onChange={handleCourseChange}
                >
                  <option value="">--Select Course--</option>
                  <option value="course1">Course 1</option>
                  <option value="course2">Course 2</option>
                  <option value="course3">Course 3</option>
                </select>
              </div>
              <div className={styles.formGroup}>
                <label className={styles.label} htmlFor="date">
                  Date:
                </label>
                <input
                  type="date"
                  id="date"
                  className={styles.input}
                  value={date}
                  onChange={handleDateChange}
                />
              </div>
              <div className={styles.formGroup}>
                <label className={styles.label} htmlFor="time">
                  Time:
                </label>
                <input
                  type="time"
                  id="time"
                  className={styles.input}
                  value={time}
                  onChange={handleTimeChange}
                />
              </div>
            </>
          )}
        </div>
      </div>
    </div>
  );
};

export default Dashboard;
