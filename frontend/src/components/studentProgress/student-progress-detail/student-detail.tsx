import React, { useState } from "react";
import { useParams } from "react-router-dom";
import BackButton from "../../../utils/back-button.js";
import StudentDetailGraph, {
  StudentLabReportDetailGraph,
} from "./student-detail-graph.js";
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
  const TotalLabReport = 100; // Total number of lab report
  const LabReportPercentage = (
    (student.attendance / TotalLabReport) *
    100
  ).toFixed(2);

  return (
    <div className={styles.studentDetail}>
      <div className={styles.headingContainer}>
        <BackButton href="/student-progress" />
        <h2>{student.name}</h2>
        <div></div>
      </div>
      <div className={styles.attendanceLabContainer}>
        <aside>
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
          <StudentDetailGraph student={student} />
        </aside>
        <div className={styles.separator} />
        <aside>
          <div className={styles.detailItem}>
            <span className={styles.label}>Total Lab Report:</span>
            <span>{TotalLabReport}</span>
          </div>
          <div className={styles.detailItem}>
            <span className={styles.label}>Report Provided:</span>
            <span>{student.reportDays}</span>
          </div>
          <div className={styles.detailItem}>
            <span className={styles.label}>Lab Report Percentage:</span>
            <span>{LabReportPercentage}%</span>
          </div>
          <StudentLabReportDetailGraph student={student} />
        </aside>
      </div>
    </div>
  );
};

export default StudentDetail;
