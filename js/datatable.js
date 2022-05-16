// DataTable
$(document).ready( function () {
    $('#myTable').DataTable();

    const inputSearch = document.querySelector('#myTable_filter input');
    inputSearch.classList.add('form-control');
    inputSearch.style.width = '75%';
    inputSearch.style.padding = '10px 5px';
    
    const showOption = document.querySelector('#myTable_length select');
    showOption.classList.add('form-control');
    showOption.style.width = '35%';
    showOption.style.padding = '10px 5px';
} );