document.addEventListener('DOMContentLoaded', () => {
  const inputSearch = document.getElementById('input-search');
  const btnSearch = document.getElementById('btn-search');
  
  btnSearch.addEventListener('click', (event) => {
    event.preventDefault();
    if (inputSearch.value !== '') {
      renderMenu(inputSearch.value);
    } else {
      renderMenu();
    }
  });
  renderMenu();
});
