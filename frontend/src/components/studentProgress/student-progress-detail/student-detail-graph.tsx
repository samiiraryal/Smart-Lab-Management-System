import React from "react";
import { Bar } from "react-chartjs-2";
import {
  Chart as ChartJS,
  CategoryScale,
  LinearScale,
  BarElement,
  Title,
  Tooltip,
  Legend,
} from "chart.js";

ChartJS.register(
  CategoryScale,
  LinearScale,
  BarElement,
  Title,
  Tooltip,
  Legend
);

const getBgColor = (days: number) => {
  if (days > 9 && days < 16) {
    return "#02c436";
  } else if (days > 4 && days < 10) {
    return "#cef522";
  } else {
    return "#f58822";
  }
};

const StudentDetailGraph = ({ student }: { student: any }) => {
  const totalDays = 25;
  const data = {
    labels: ["Present Days"],
    datasets: [
      {
        label: "Days",
        data: [student.attendance, totalDays],
        backgroundColor: [
          getBgColor(student.attendance),
        ],
        borderColor: [getBgColor(student.attendance)],
        borderWidth: 1,
      },
    ],
  };

  const options = {
    scales: {
      y: {
        beginAtZero: true,
        min: 0,
        max: totalDays, // Set max to total number of days in the academic period
        ticks: {
          stepSize: 5 // Customize the step size as needed
        }
      },
    },
  };

  return (
    <div>
      <Bar data={data} options={options} />
    </div>
  );
};

export default StudentDetailGraph;

export const StudentLabReportDetailGraph = ({ student }: { student: any }) => {
    const totalDays = 15;
    const data = {
      labels: ["Lab Report Days"],
      datasets: [
        {
          label: "Lab Report Days",
          data: [student.attendance, totalDays],
          backgroundColor: [
            getBgColor(student.attendance),
          ],
          borderColor: [getBgColor(student.attendance)],
          borderWidth: 1,
        },
      ],
    };
  
    const options = {
      scales: {
        y: {
          beginAtZero: true,
          min: 0,
          max: totalDays, // Set max to total number of days in the academic period
          ticks: {
            stepSize: 5 // Customize the step size as needed
          }
        },
      },
    };
  
    return (
      <div>
        <Bar data={data} options={options} />
      </div>
    );
  };
