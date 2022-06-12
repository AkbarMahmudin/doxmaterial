function editStok(element) {
  const row = element.parentElement.parentElement;
  const columns = row.querySelectorAll('td');
  const stokColumn = columns[2].querySelector('span');
  const formEditStok = columns[2].querySelector('form');
  const btnDelete = element.parentElement.querySelector('#btn-delete');
  const btnSave = element.parentElement.querySelector('#btn-save');
  
  // set value form
  formEditStok.querySelector('#stock').value = stokColumn.innerText;
  
  if (element.innerText === 'Batal') {
    stokColumn.style.display = 'inline-block';
    formEditStok.style.display = 'none';
    btnDelete.style.display = 'inline-block';
    btnSave.style.display = 'none';
    element.innerText = 'Ubah';
  } else {
    stokColumn.style.display = 'none';
    formEditStok.style.display = 'inline-block';
    btnDelete.style.display = 'none';
    btnSave.style.display = 'inline-block';
    element.innerText = 'Batal';
  }
}

function updateStok(element) {
  const row = element.parentElement.parentElement;
  const columns = row.querySelectorAll('td');
  const formEditStok = columns[2].querySelector('form');
  formEditStok.querySelector('button').click();
}

function addStok(element) {
  const form = document.querySelector('#formStok');

  if(element.innerText ==='Tambah Stok'){
    form.style.display = 'block';
    element.innerText = 'Batal';
    window.scrollBy(0,300);
  }
  else{
    form.style.display = 'none';
    element.innerText = 'Tambah Stok';
  }
}