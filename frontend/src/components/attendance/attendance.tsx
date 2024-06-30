// src/Attendance.tsx
import React, { useState } from "react";
import styles from "./attendance.module.css";
import ImportFile from "./csv-reader.js";
import CsvUpload from "./csv-upload.js";
import { IoMdArrowRoundBack } from "react-icons/io";
import { useNavigate } from "react-router-dom";
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

  const courses = [
    "programming in java",
    "database",
    "applied operating system",
    "c++",
    "c",
  ];

  const handleChange = (
    event: React.ChangeEvent<HTMLInputElement | HTMLSelectElement>
  ) => {
    // @ts-ignore
    const { name, value, type, checked } = event.target;
    setAttendanceData((prevData) => ({
      ...prevData,
      [name]: type === "checkbox" ? checked : value,
    }));
  };

  const handleSave = () => {
    console.log("Attendance Data:", attendanceData);
    setAllData((prevData) => [...prevData, attendanceData]);
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
          <h2>Attendance Form</h2>
          <div></div>
        </div>
        <div className={styles.formGroup}>
          <label htmlFor="course">Select Course:</label>
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
          <div></div>
        </div>
        <div className={styles.formGroup}>
          <label htmlFor="date">Select Date:</label>
          <input
            type="date"
            id="date"
            name="date"
            value={attendanceData.date}
            onChange={handleChange}
            />
            <div></div>
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
              <th>Course</th>
              <th>Date</th>
              <th>Roll</th>
              <th>Student Name</th>
              <th>Present/Absent</th>
            </tr>
          </thead>
          <tbody>
            {allData.map((data, index) => (
              <tr key={index}>
                <td>{data.course}</td>
                <td>{data.date}</td>
                <td>{data.rollNumber}</td>
                <td>{data.studentName}</td>
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
