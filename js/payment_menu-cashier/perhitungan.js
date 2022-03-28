
const nominalInput = document.getElementById('nominal');

nominalInput.addEventListener('change', () => {
    const nominal = document.getElementById('nominal').value;
    const total = document.getElementById('total').innerText;
    const kembalian = parseInt(nominal) - parseInt(total);
    document.getElementById('kembalian').innerText = kembalian;
});