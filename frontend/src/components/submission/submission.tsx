import React, { useState } from 'react';
import styles from './submission.module.css';

const initialSubmissionData = [
    {
        id: 1,
        studentName: 'mr. X',
        projectName: 'Database',
        submissionDate: '2023-06-01',
        status: 'Submitted',
        feedback: ''
    },
    {
        id: 2,
        studentName: 'mr.Y',
        projectName: 'java',
        submissionDate: '2023-06-02',
        status: 'Pending',
        feedback: ''
    },
    // Add more submissions as needed
];

const Submission = () => {
    const [submissions, setSubmissions] = useState(initialSubmissionData);

    const handleDateChange = (id: any, newDate: any) => {
        setSubmissions(prevSubmissions =>
            prevSubmissions.map(submission =>
                submission.id === id
                    ? { ...submission, submissionDate: newDate }
                    : submission
            )
        );
    };

    const handleStatusChange = (id: any, newStatus: any) => {
        setSubmissions(prevSubmissions =>
            prevSubmissions.map(submission =>
                submission.id === id
                    ? { ...submission, status: newStatus }
                    : submission
            )
        );
    };

    const handleFeedbackChange = (id: any, newFeedback: any) => {
        setSubmissions(prevSubmissions =>
            prevSubmissions.map(submission =>
                submission.id === id
                    ? { ...submission, feedback: newFeedback }
                    : submission
            )
        );
    };

    return (
        <div className={styles.submissionContainer}>
            <h2 className={styles.submissionHeader}>Submissions</h2>
            <ul className={styles.submissionList}>
                {submissions.map(submission => (
                    <li key={submission.id} className={styles.submissionItem}>
                        <strong>{submission.studentName}</strong> - {submission.projectName}
                        <div className="formGroup">
                            <label className={styles.submissionLabel}>Submission Date:</label>
                            <input
                                type="date"
                                className={styles.submissionInput}
                                value={submission.submissionDate}
                                onChange={(e) => handleDateChange(submission.id, e.target.value)}
                            />
                        </div>
                        <div className={styles.formGroup}>
                            <label className={styles.submissionLabel}>Status:</label>
                            <div className={styles.submissionRadioGroup}>
                                <label className={styles.submissionRadioLabel}>
                                    <input
                                        type="radio"
                                        className={styles.submissionRadioInput}
                                        name={`status-${submission.id}`}
                                        value="Submitted"
                                        checked={submission.status === 'Submitted'}
                                        onChange={(e) => handleStatusChange(submission.id, e.target.value)}
                                    />
                                    Submitted
                                </label>
                                <label className={styles.submissionRadioLabel}>
                                    <input
                                        type="radio"
                                        className={styles.submissionRadioInput}
                                        name={`status-${submission.id}`}
                                        value="Partially Submitted"
                                        checked={submission.status === 'Partially Submitted'}
                                        onChange={(e) => handleStatusChange(submission.id, e.target.value)}
                                    />
                                    Partially Submitted
                                </label>
                                <label className={styles.submissionRadioLabel}>
                                    <input
                                        type="radio"
                                        className={styles.submissionRadioInput}
                                        name={`status-${submission.id}`}
                                        value="Not Submitted"
                                        checked={submission.status === 'Not Submitted'}
                                        onChange={(e) => handleStatusChange(submission.id, e.target.value)}
                                    />
                                    Not Submitted
                                </label>
                            </div>
                        </div>
                        <div className={styles.formGroup}>
                            <label className={styles.submissionLabel}>Feedback:</label>
                            <textarea
                                className={styles.submissionTextarea}
                                value={submission.feedback}
                                onChange={(e) => handleFeedbackChange(submission.id, e.target.value)}
                                placeholder="Enter feedback here"
                            />
                        </div>
                    </li>
                ))}
            </ul>
        </div>
    );
};

export default Submission;
