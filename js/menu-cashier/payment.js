const data = JSON.parse(sessionStorage.getItem('DATA_ORDER'));
const { orders, totalHarga } = data;

const total = document.getElementById('total');
total.innerText = totalHarga;

// set detail order
const listOrder = document.querySelector('#list-order ul');
for (let order of orders) {
  listOrder.innerHTML += `
        <li>${order.nama} (${order.jumlah}) <span style="float: right;">${order.totalHarga}</span></li>
    `;
}

// metode pembayaran
const methodPayment = document.getElementById('option-payment');
methodPayment.addEventListener('change', () => {
  const cashMethod = document.getElementById('m-cash').checked;
  const eWalletMethod = document.getElementById('m-e-wallet').checked;
  const rekeningMethod = document.getElementById('m-rekening').checked;

  const formCash = document.getElementById('cash');
  const formEWallet = document.getElementById('e-wallet');
  const formRekening = document.getElementById('rekening');

  if (cashMethod) {
    formCash.style.display = 'block';
    formEWallet.style.display = 'none';
    formRekening.style.display = 'none';
  }

  if (eWalletMethod) {
    formCash.style.display = 'none';
    formEWallet.style.display = 'block';
    formRekening.style.display = 'none';
  }

  if (rekeningMethod) {
    formCash.style.display = 'none';
    formEWallet.style.display = 'none';
    formRekening.style.display = 'block';
  }
});

// cek nominal pembayaran
const nominalInput = document.getElementById('nominal');
nominalInput.addEventListener('keyup', () => {
  const nominal = document.getElementById('nominal').value;
  const kembalian = parseInt(nominal) - parseInt(total.innerText);

  if (kembalian >= 0) {
    btnBayar.removeAttribute('disabled');
  } else {
    btnBayar.setAttribute('disabled', true);
  }
  document.getElementById('kembalian').innerText = kembalian;

  if (isNaN(document.getElementById('kembalian').innerText)) {
    document.getElementById('kembalian').innerText = '0';
  }
});

// cari member
const inputSearchMember = document.getElementById('search-member');
inputSearchMember.addEventListener('keyup', async (event) => {
  const nama = event.target.value;
  const response = await getMemberByName(nama);
  const { data } = JSON.parse(response);
  const listMember = document.getElementById('suggest-member');
  listMember.innerHTML = '';

  if (!nama || !data.length) {
    inputSearchMember.dataset.id = '';
    listMember.style.display = 'none';
    return;
  }

  listMember.style.display = 'block';
  for (const member of data) {
    listMember.innerHTML += `
        <div onclick="addMember(this)" data-id="${member.id}">
            ${member.nama_lengkap}
        </div>`;
  }
});

const addMember = (element) => {
  const { id } = element.dataset || '';
  inputSearchMember.value = element.innerText;
  inputSearchMember.dataset.id = id;
  document.getElementById('suggest-member').style.display = 'none';
};

const findOrCreateMember = async () => {
  const memberId = inputSearchMember.dataset.id || null;
  const formAddMember = Array.from(
    document.querySelectorAll('#form-add-member .form-control')
  ).filter((form) => form.value !== '').length;

  // cek form add member
  if (memberId === null && formAddMember >= 2) {
    const nama = document.querySelector('#form-add-member [name="nama"]').value;
    const telepon = document.querySelector(
      '#form-add-member [name="telepon"]'
    ).value;
    const alamat = document.querySelector(
      '#form-add-member [name="alamat"]'
    ).value;
    const jenisKelamin = document.querySelector(
      'input[name="jenis_kelamin"]:checked'
    ).value;

    // create new member
    const newMember = await createMember(nama, telepon, jenisKelamin, alamat);
    return JSON.parse(newMember).data;
  }

  return memberId;
};

const btnBayar = document.getElementById('btn-bayar');
const btnPiutang = document.getElementById('btn-piutang');

// active button payment
const payButtonActive = (element) => {
  element.value && !isNaN(element.value)
    ? btnBayar.removeAttribute('disabled')
    : btnBayar.setAttribute('disabled', true);
};

btnBayar.addEventListener('click', async (event) => {
  event.preventDefault();

  const response = await payment('Lunas');
  const result = JSON.parse(response);
  if (result.status === 'error') {
    toastAlert(result.status, result.message);
  }

  sessionStorage.removeItem('DATA_ORDER');
  window.location.href = `invoice.php?id=${result.orderId}`;
});

btnPiutang.addEventListener('click', async (event) => {
  event.preventDefault();

  const memberId = inputSearchMember.dataset.id || null;
  const formAddMember = Array.from(
    document.querySelectorAll('#form-add-member .form-control')
  ).filter((form) => form.value !== '').length;

  if (memberId === null && formAddMember < 2) {
    return sweetAlert('error', 'Hanya member yang diizinkan memiliki tagihan!', 'Oops...')
  }

  if (nominalInput.value >= totalHarga) {
    return sweetAlert('error', 'Tidak bisa menambahkan ke tagihan! Nominal yang anda masukkan tidak sesuai.', 'Oops...');
  }
  
  const response = await payment('Belum Lunas');
  const result = JSON.parse(response);

  if (result.status === 'error') {
    sweetAlert(result.status, result.message, 'Gagal!');
  }

  sessionStorage.removeItem('DATA_ORDER');
  window.location.href = `invoice.php?id=${result.orderId}`;
});

// proses order
const payment = async (status) => {
  const telepon = document.querySelector('input[name="telepon"]').value || null;
  const rekening =
  document.querySelector('input[name="rekening"]').value || null;
  const memberId = await findOrCreateMember();
  let metode = document.querySelector('input[name="metode"]:checked').value;
  let total = parseInt(totalHarga);

  // cek status
  const nominal = parseInt(nominalInput.value);
  if (status === 'Belum Lunas' && nominal < total) {
    metode = 'cash';
    total -= parseInt(nominal);
  }

  // create new orders
  const dataOrders = orders.map((order) => ({
    stok_id: order.stokId,
    jumlah: order.jumlah,
    total: order.totalHarga,
  }));
  const response = await createOrder(
    memberId,
    metode,
    telepon,
    rekening,
    status,
    total,
    dataOrders
  );

  return response;
};
