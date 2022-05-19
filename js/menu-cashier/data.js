const cart = [];

function getBarang() {
  return $.get('../../controller/menu-cashier/getBarang.php');
}

function getBarangById(barangId) {  
  return $.get(`../../controller/menu-cashier/getBarangById.php?id=${barangId}`);
}
