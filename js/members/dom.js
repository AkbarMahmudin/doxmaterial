const formBayar = document.getElementById('form-bayar');
const btnBayar = document.getElementById('btn-bayar');
const btnCancel = document.getElementById('btn-cancel');
const inputNominal = document.getElementById('nominal');

function actBayar(element) {
  const { parentElement } = element;
  const formBayar = parentElement.querySelector('#form-bayar');

  formBayar.style.display = 'inline-block';
  element.style.display = 'none';
}

function cancelBayar(element) {
  const { parentElement } = element.parentElement;
  const formBayar = parentElement.querySelector('#form-bayar');
  const btnBayar = parentElement.querySelector('#btn-bayar');

  formBayar.style.display = 'none';
  btnBayar.style.display = 'inline-block';
}

function submitBayar(element) {
  const { parentElement } = element;
  const btnSubmit = parentElement.querySelector('#btn-submit');

  if (event.key === 'Enter') {
    btnSubmit.click();
  }
}

// Chart
function getSumOrderBarang(memberId) {
  return $.get(
    `../../controller/members/getSumOrderBarang.php?memberId=${memberId}`
  );
}

async function createChart() {
  const params = new Proxy(new URLSearchParams(window.location.search), {
    get: (searchParams, prop) => searchParams.get(prop),
  });
  const { id } = params;
  const response = await getSumOrderBarang(id);
  const { data: orders } = JSON.parse(response);

  const labels = [];
  const totalBarang = [];
  const backgroundColor = [];
  const borderColor = [];

  if (!orders) {
    console.log('Tidak ada order');
    return;
  }

  orders.map((order) => {
    labels.push(order.nama);
    totalBarang.push(order.barang_order);
  });
  for (let i = 0; i < labels.length; i++) {
    const r = Math.floor(Math.random() * 255);
    const g = Math.floor(Math.random() * 255);
    const b = Math.floor(Math.random() * 255);
    backgroundColor.push(`rgba(${r}, ${g}, ${b}, 0.5)`);
    borderColor.push(`rgba(${r}, ${g}, ${b}, 1)`);
  }

  const data = {
    labels,
    datasets: [
      {
        label: 'Jumlah Barang Order',
        backgroundColor,
        borderColor,
        data: totalBarang,
      },
    ],
  };

  const config = {
    type: 'pie',
    data: data,
    options: {},
  };

  const myChart = new Chart(document.getElementById('myChart'), config);
}
