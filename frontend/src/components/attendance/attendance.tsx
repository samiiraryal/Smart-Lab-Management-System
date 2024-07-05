import React, { useState, useEffect } from "react";
import styles from "./attendance.module.css";
import ImportFile from "../csvReader/csv-reader.js";
import BackButton from "../../utils/back-button.js";

const Attendance = () => {
  const [attendanceData, setAttendanceData] = useState({
    rollNumber: "",
    studentName: "",
    present: false,
    course: "",
    date: "",
  });

  const [allData, setAllData] = useState<any[]>([]);
  const [timer, setTimer] = useState(900); // 15 minutes in seconds
  const [currentDate, setCurrentDate] = useState(new Date());

  const courses = [
    "programming in java",
    "database",
    "applied operating system",
    "c++",
    "c",
  ];

  useEffect(() => {
    const startTime = localStorage.getItem("attendanceStartTime");
    const currentTime = new Date().getTime();

    if (startTime) {
      const elapsedTime = Math.floor((currentTime - parseInt(startTime)) / 1000);
      const remainingTime = Math.max(900 - elapsedTime, 0);
      setTimer(remainingTime);

      if (remainingTime === 0) {
        handleMarkAbsent();
        localStorage.removeItem("attendanceStartTime");
      }
    } else {
      localStorage.setItem("attendanceStartTime", currentTime.toString());
    }

    const intervalId = setInterval(() => {
      setTimer((prevTimer) => {
        if (prevTimer > 0) {
          const newTime = prevTimer - 1;
          localStorage.setItem("attendanceTimer", newTime.toString());
          return newTime;
        } else {
          clearInterval(intervalId);
          alert("15 minutes have passed. Marking students as absent.");
          handleMarkAbsent();
          localStorage.removeItem("attendanceStartTime");
          localStorage.removeItem("attendanceTimer");
          return 0;
        }
      });
    }, 1000);

    return () => clearInterval(intervalId);
  }, []);

  useEffect(() => {
    const dateIntervalId = setInterval(() => {
      setCurrentDate(new Date());
    }, 1000);

    return () => clearInterval(dateIntervalId);
  }, []);

  const handleMarkAbsent = () => {
    setAllData((prevData) =>
      prevData.map((data) => ({
        ...data,
        present: false,
      }))
    );
  };

  const formatDate = (date: Date) => {
    return date.toISOString().split('T')[0];
  };

  const handleChange = (
    event: React.ChangeEvent<HTMLInputElement | HTMLSelectElement>
  ) => {
    const { name, value, type, checked } = event.target;
    setAttendanceData((prevData) => ({
      ...prevData,
      [name]: type === "checkbox" ? checked : value,
    }));
  };

  const handleSave = () => {
    const updatedAttendanceData = {
      ...attendanceData,
      date: formatDate(new Date()),
    };
    console.log("Attendance Data:", updatedAttendanceData);
    setAllData((prevData) => [...prevData, updatedAttendanceData]);
    // Clear form fields
    setAttendanceData({
      rollNumber: "",
      studentName: "",
      present: false,
      course: "",
      date: "",
    });
  };

  return (
    <>
      <div className={styles.attendanceContainer}>
        <div className={styles.headingContainer}>
          <BackButton />
          <div className={styles.titleContainer}>
            <h2>Attendance Form</h2>
          </div>
          <div className={styles.dateTimeContainer}>
            <div><b>Date:</b> {formatDate(currentDate)}</div>
            <div><b>Time Remaining:</b> {Math.floor(timer / 60)}:{('0' + timer % 60).slice(-2)}</div>
          </div>
        </div>
        <div className={styles.formGroup}>
          <label htmlFor="course"><b>Select Course:</b></label>
          <select
            id="course"
            name="course"
            value={attendanceData.course}
            onChange={handleChange}
          >
            <option value="">Select Course</option>
            {courses.map((course, index) => (
              <option key={index} value={course}>
                {course}
              </option>
            ))}
          </select>
        </div>
        <div className={styles.studentGroup}>
          <input
            type="text"
            name="rollNumber"
            placeholder="Roll Number"
            value={attendanceData.rollNumber}
            onChange={handleChange}
          />
          <input
            type="text"
            name="studentName"
            placeholder="Student Name"
            value={attendanceData.studentName}
            onChange={handleChange}
          />
          <label>
            <input
              type="checkbox"
              name="present"
              checked={attendanceData.present}
              onChange={handleChange}
            />
            Present
          </label>
          <label>
            <input
              type="checkbox"
              name="absent"
              checked={!attendanceData.present}
              onChange={(event) =>
                handleChange({
                  target: {
                    name: "present",
                    checked: !event.target.checked,
                  } as any,
                } as React.ChangeEvent<HTMLInputElement>)
              }
            />
            Absent
          </label>
        </div>
        <button onClick={handleSave} className={styles.button}>
          Save Attendance
        </button>
        <table>
          <thead>
            <tr>
              <th>Roll Number</th>
              <th>Student Name</th>
              <th>Course</th>
              <th>Date</th>
              <th>Present/Absent</th>
            </tr>
          </thead>
          <tbody>
            {allData.map((data, index) => (
              <tr key={index}>
                <td>{data.rollNumber}</td>
                <td>{data.studentName}</td>
                <td>{data.course}</td>
                <td>{data.date}</td>
                <td>{data.present ? "Present" : "Absent"}</td>
              </tr>
            ))}
          </tbody>
        </table>
        <button type="button" className={styles.button}>
          Import From CSV File
        </button>
      </div>
      <ImportFile />
    </>
  );
};

export default Attendance;
