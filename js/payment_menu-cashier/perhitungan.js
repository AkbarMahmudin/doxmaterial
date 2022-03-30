const nominalInput = document.getElementById('nominal');
const btnBayar = document.getElementById('btn-bayar');
const total = document.getElementById('total');
total.innerText = localStorage.getItem('TOTAL_HARGA');

nominalInput.addEventListener('keyup', () => {
    const nominal = document.getElementById('nominal').value;
    const kembalian = parseInt(nominal) - parseInt(total.innerText);

    if (kembalian > 0) {
        btnBayar.removeAttribute('disabled');
    } else {
        btnBayar.setAttribute('disabled', true);
    }
    document.getElementById('kembalian').innerText = kembalian;
});

btnBayar.addEventListener('click', (event) => {
    event.preventDefault();
    alert('Pembayaran Berhasil!');
    localStorage.setItem('TOTAL_HARGA', 0);
    history.back();
});
