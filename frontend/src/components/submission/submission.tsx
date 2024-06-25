import React from 'react'
import submissionData from "./submission"
import styles from "./submission.module.css";


const Submission = () => {
  return (
    <div>
      <h2>Submissions</h2>
      <ul>
        {submissionData.map(submission => (
          <li key={submission.id}>
            <strong>{submission.studentName}</strong> - {submission.projectName} ({submission.status})
            <br />
            Submission Date: {submission.submissionDate}
            <br />
            Feedback: {submission.feedback || 'Pending'}
          </li>
        ))}
      </ul>
    </div>
    
  );
}

export default Submission
