
import React from 'react';
import { parse } from 'react-papaparse';

function CsvUpload() {
  const handleUpload = (event) => {
    const file = event.target.files[0];
    if (!file) return;

    parse(file, {
      complete: (results) => {
        // Process the parsed CSV data from results.data
        console.log(results.data);
      },
    });
  };

  return (
    <div>
      <input type="file" accept=".csv" onChange={handleUpload} />
      <button>Upload CSV</button>
    </div>
  );
}

export default CsvUpload;