import React from 'react'
import studentProgressData from "./studentProgress"
import styles from "./studentProgress.module.css";
    

const StudentProgress = () => {
    return (
        <div>
          <h2>Student Progress</h2>
          {studentProgressData.map(student => (
            <div key={student.id}>
              <h3>{student.studentName}</h3>
              {student.courses.map(course => (
                <div key={course.id}>
                  <h4>{course.courseName}</h4>
                  <ul>
                    {course.activities.map(activity => (
                      <li key={activity.id}>
                        {activity.activityName} - {activity.completed ? 'Completed' : 'Incomplete'}
                        {activity.completed && ` - Grade: ${activity.grade}`}
                      </li>
                    ))}
                  </ul>
                </div>
              ))}
            </div>
          ))}
        </div>
      );
}

export default StudentProgress
