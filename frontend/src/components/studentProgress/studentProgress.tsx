import React, { useState } from "react";
import { useNavigate } from "react-router-dom";
// import './App.css';
import styles from "./studentProgess.module.css";

const StudentProgress = () => {
  const navigate = useNavigate();
  const [students, setStudents] = useState([
    { name: "Samir Aryal", attendance: 12 },
    { name: "Sandesh Gwachha", attendance: 15 },
    { name: "Rashik Joshi", attendance: 8 },
    { name: "Prijina Karmacharya", attendance: 20 },
  ]);

  const [sortType, setSortType] = useState("name");

  const sortStudents = (type: any) => {
    const sorted = [...students].sort((a, b) => {
      if (type === "name") {
        return a.name.localeCompare(b.name);
      } else {
        return b.attendance - a.attendance;
      }
    });
    setStudents(sorted);
    setSortType(type);
  };

  const saveData = () => {
    // Save data functionality
    alert("Data saved successfully!");
  };

  const handleNavigate = (name: string) => {
    navigate(`/student-progress/${name.toLowerCase().replace(/ /g, "-")}`);
  };

  return (
    <div className={styles.App}>
      <h1>Student Progress</h1>
      <div className={styles.controls}>
        <button onClick={() => sortStudents("name")}>Sort by Name</button>
        <button onClick={() => sortStudents("attendance")}>
          Sort by Attendance
        </button>
      </div>
      <ul className={styles.studentList}>
        {students.map((student, index) => (
          <li
            key={index}
            className={styles.studentItem}
            onClick={() => handleNavigate(student.name)}
          >
            <span>
              {index + 1}. {student.name}
            </span>
            <span>Attendance: {student.attendance}</span>
          </li>
        ))}
      </ul>
      <button className={styles.saveButton} onClick={saveData}>
        Save
      </button>
    </div>
  );
};

export default StudentProgress;
