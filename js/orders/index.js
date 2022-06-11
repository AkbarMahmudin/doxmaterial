const formFilter = document.getElementById('form-filter');

function showFilter() {
  if (formFilter.style.display === 'none') {
    formFilter.style.display = 'flex';
  } else {
    formFilter.style.display = 'none';
  }
}

function clearFilter() {
  const inputDate = formFilter.getElementsByClassName('form-control');
  for (let date of inputDate) {
    date.value = '';
  }
  formFilter.querySelector('button[type=submit]').click();
}

function exportToPdf(filename) {
  const element = document.getElementById('myTable');
  const saveFile = `${filename}-${Date.now()}`;
  html2pdf().from(element).save(saveFile);
}

function downloadCSV(csv, filename) {
  // CSV file
  const csvFile = new Blob([csv], { type: 'text/csv' });
  
  let downloadLink;
  // Download link
  downloadLink = document.createElement('a');

  // File name
  downloadLink.download = `${filename}-${Date.now()}`;

  // Create a link to the file
  downloadLink.href = window.URL.createObjectURL(csvFile);

  // Hide download link
  downloadLink.style.display = 'none';

  // Add the link to DOM
  document.body.appendChild(downloadLink);

  // Click download link
  downloadLink.click();
}

function exportToCsv(filename) {
  const csv = [];
  const rows = document.querySelectorAll('table tr');

  for (let i = 0; i < rows.length; i++) {
    let row = [],
      cols = rows[i].querySelectorAll('td, th');

    for (let j = 0; j < cols.length; j++) row.push(cols[j].innerText);

    csv.push(row.join(','));
  }

  // Download CSV file
  downloadCSV(csv.join('\n'), filename);
}
