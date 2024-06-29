// src/Attendance.tsx
import React, { useState } from "react";
import styles from "./attendance.module.css";
import ImportFile from "./csv-reader.js";

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
    const { name, value, type, checked} = event.target;
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

  console.log("All data", allData);

  return (
    <>
      <div className={styles.attendanceContainer}>
        <h2>Attendance Form</h2>
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
        <button onClick={handleSave} style={{ color: "black" }}>
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
            upload
          </button>

      </div>
      <ImportFile/>
    </>
  );
};

export default Attendance;
