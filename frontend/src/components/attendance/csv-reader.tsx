'use client';

import React, { useState } from 'react';
import Papa from 'papaparse';

// Allowed extensions for input file
const allowedExtensions = ['csv'];

const ImportFile = () => {
  // This state will store the parsed data
  const [data, setData] = useState([]);

  // correct file extension is not used
  const [error, setError] = useState('');

  // It will store the file uploaded by the user
  const [file, setFile] = useState<File | null>(null);

  // the file input changes
  const handleFileChange = (e: React.ChangeEvent<HTMLInputElement>) => {
    setError('');

    // Check if user has entered the file
    if (e.target.files && e.target.files.length) {
      const inputFile = e.target.files[0];

      // Extract the file extension from the file name
      const fileExtension = inputFile.name.split('.').pop()?.toLowerCase();

      console.log(fileExtension, 'extension');

      // Check the file extension, if it's not csv, show the error
      if (fileExtension !== allowedExtensions[0]) {
        setError('Please input a csv file');
        return;
      }

      // If input type is correct (CSV), set the state
      setFile(inputFile);
    }
  };

  const handleParse = () => {
    // If user clicks the parse button without a file we show an error
    if (!file) return alert('Enter a valid file');

    // Initialize a reader which allows user to read any file or blob.
    const reader = new FileReader();

    // Event listener on reader when the file loads, we parse it and set the data.
    reader.onload = async ({ target }) => {
      if (target?.result && typeof target.result === 'string') {
        const csv = Papa.parse(target.result, {
          header: true,
          skipEmptyLines: true,
        });
        const parsedData: unknown[] = csv?.data;
        if (parsedData.length > 0) {
          console.log(parsedData);
          setData(parsedData);
        } else {
          alert('The CSV file is empty or only contains headers.');
        }
      } else {
        alert('Failed to read the file content.');
      }
    };

    // Error handling for FileReader
    reader.onerror = () => {
      alert('An error occurred while reading the file.');
      reader.abort();
    };

    reader.readAsText(file);
  };

  return (
    <div className='page-wrapper'>
      <h3>Read CSV file in React</h3>
      <div className='container'>
        <label htmlFor='csvInput' style={{ display: 'block' }}>
          Enter CSV File
        </label>
        <input
          onChange={handleFileChange}
          id='csvInput'
          name='file'
          type='File'
        />
        <div>
          <button onClick={handleParse}>Parse</button>
        </div>
        {data && (
          <div style={{ marginTop: '3rem' }}>
            <table>
              <thead>
                <th>Course</th>
                <th>Date</th>
                <th>Roll</th>
                <th>Student Name</th>
                <th>Present/Absent</th>
              </thead>
              <tbody>
                {data &&
                  data.map((e, i) => (
                    <tr key={i} className='item'>
                      <td>{e.course}</td>
                      <td>{e.date}</td>
                      <td>{e.roll}</td>
                      <td>{e.studentName}</td>
                      <td>{e.isPresent}</td>
                      
                    </tr>
                  ))}
              </tbody>
            </table>
            {error}
          </div>
        )}
      </div>
    </div>
  );
};

export default ImportFile;