import React, { useState } from "react";
import { useParams } from "react-router-dom";
import StudentDetailGraph from "./student-detail-graph.js";
import styles from "./student-detail.module.css";

const studentData = [
  { name: "Samir Aryal", attendance: 12, reportDays: 10 },
  { name: "Sandesh Gwachha", attendance: 15, reportDays: 10 },
  { name: "Rashik Joshi", attendance: 8, reportDays: 8 },
  { name: "Prijina Karmacharya", attendance: 20, reportDays: 14 },
];

const StudentDetail = () => {
  const [students, setStudents] = useState(studentData);

  const param = useParams();
  //   const { student } = param;

  const student = students.filter(
    (stu) => stu.name.toLowerCase().replace(/ /g, "-") === param.student
  )[0];

  const totalDays = 25; // Total number of days in the academic period
  const attendancePercentage = ((student.attendance / totalDays) * 100).toFixed(
    2
  );

  return (
    <div className={styles.studentDetail}>
      <h2>{student.name}</h2>
      <div className={styles.detailItem}>
        <span className={styles.label}>Total Days:</span>
        <span>{totalDays}</span>
      </div>
      <div className={styles.detailItem}>
        <span className={styles.label}>Present Days:</span>
        <span>{student.attendance}</span>
      </div>
      <div className={styles.detailItem}>
        <span className={styles.label}>Attendance Percentage:</span>
        <span>{attendancePercentage}%</span>
      </div>
      <div className={styles.detailItem}>
        <span className={styles.label}>Report Provided Days:</span>
        <span>{student.reportDays}</span>
      </div>
      <StudentDetailGraph student={student} />
    </div>
  );
};

export default StudentDetail;
