const cart = [];

// barang
function getBarang() {
  return $.get('../../controller/menu-cashier/getBarang.php');
}

function getBarangById(barangId) {
  return $.get(`../../controller/menu-cashier/getBarangById.php?id=${barangId}`);
}

function getMemberByName(name) {
  return $.get(`../../controller/menu-cashier/getMemberByNama.php?nama=${name}`);
}

// order
function createOrder(memberId, metode, telepon, rekening, status, total, dataOrders) {
  return $.ajax({
    type: 'POST',
    url: '../../controller/menu-cashier/createOrder.php',
    data: {
      member_id: memberId,
      metode,
      telepon,
      rekening,
      status,
      total,
      data_order: dataOrders,
    },
  });
}

// member
function createMember(nama, telepon, jenisKelamin, alamat) {
  return $.ajax({
    type: 'POST',
    url: '../../controller/menu-cashier/createMember.php',
    data: {
      nama,
      telepon,
      jenis_kelamin: jenisKelamin,
      alamat,
    },
  });
}
