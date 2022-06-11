const renderMenu = async (key = null) => {
  const content = document.getElementById('content');
  const response = key ? await getBarang(key) : await getBarang();
  const menus = JSON.parse(response).data;

  clearElement();
  for (const menu of menus) {
    const menuElement = createMenuElement(
      menu.nama,
      menu.harga,
      `../../img/${!menu.gambar ? 'no-img.jpg' : 'barang/' + menu.gambar}`,
      menu.stok_barang
    );
    menuElement['STOK_ID'] = menu.stok_id;
    content.append(menuElement);
  }
};

const clearElement = () => {
  const content = document.querySelectorAll('#content > article')
  for (let elm of content) {
    elm.remove();
  }
}

const createMenuElement = (name, price, img, stock = null) => {
  const card = document.createElement('article');
  card.classList.add('card');
  const imageCard = document.createElement('img');
  imageCard.setAttribute('src', img);
  imageCard.classList.add('img-card');
  const cardBody = document.createElement('div');
  cardBody.classList.add('card-body');
  cardBody.innerHTML = `
  <h2>${name}</h2>
  <h4 class="price">Rp. ${price}</h4>`;
  if (stock) {
    cardBody.innerHTML += `<p class="stock">Stok: ${stock}</p>`;
  }

  card.addEventListener('click', async () => {
    const cartIsDuplicate = checkCartDuplicate(card);

    if (cartIsDuplicate === false) {
      await addToCart(card);
    } else {
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: `${name} sudah dipesan`,
        confirmButtonColor: '#01adb5',
      });
    }
  });
  card.append(imageCard, cardBody);
  return card;
};

const addToCart = async (menuElement) => {
  const cartContainer = document.getElementsByClassName('cart-list')[0];
  const cartItem = await createCartItem(menuElement['STOK_ID']);
  cartContainer.append(cartItem);
};

const createCartItem = async (menuId) => {
  const response = await getBarangById(menuId);
  const menu = JSON.parse(response).data;
  const newCart = {
    nama: menu.nama,
    stokId: parseInt(menu.stok_id),
    jumlah: 1,
    totalHarga: parseInt(menu.harga),
  };
  cart.push(newCart);

  let qty = 1;
  const cartItem = document.createElement('div');
  cartItem.classList.add('cart-item');
  const image = document.createElement('img');
  const imgPath = !menu.gambar ? 'no-img.jpg' : `barang/${menu.gambar}`;
  image.style.maxHeight = '100px';
  image.setAttribute('src', `../../img/${imgPath}`);
  const menuName = document.createElement('h3');
  menuName.innerText = menu.nama;
  const menuPrice = document.createElement('p');
  menuPrice.innerText = `Rp. ${menu.harga}`;

  const counter = document.createElement('div');
  counter.classList.add('counter');
  const counterNum = document.createElement('span');
  counterNum.innerText = qty;
  counter.append(
    decrementHandle(counterNum, parseInt(menu.harga)),
    counterNum,
    incrementHandle(counterNum, parseInt(menu.harga))
  );
  cartItem['CART_ID'] = menuId;
  cartItem.append(image, menuName, counter, menuPrice);

  const totalHargaElm = document.getElementById('total-harga').innerText;
  getTotalHarga(parseInt(totalHargaElm) + parseInt(menu.harga));
  return cartItem;
};

const checkCartDuplicate = (menuItem) => {
  const cartItems = document.querySelectorAll('.cart-list > .cart-item');

  if (cartItems.length) {
    for (const cart of cartItems) {
      if (cart['CART_ID'] === menuItem['STOK_ID']) {
        return true;
      }
    }
  }
  return false;
};

const decrementHandle = (counter, price) => {
  const button = document.createElement('button');
  button.innerText = '-';
  button.classList.add('btn', 'btn-secondary');
  button.addEventListener('click', (event) => {
    if (counter.innerText >= 1) {
      const itemPrice = counter.parentElement.parentElement.querySelector('p');
      counter.innerText--;

      const totalHarga = counter.innerText * price;
      const totalHargaElm = document.getElementById('total-harga').innerText;

      getTotalHarga(parseInt(totalHargaElm) - price);
      itemPrice.innerText = `Rp. ${totalHarga}`;

      // update data cart: arr
      const stokId = counter.parentElement.parentElement['CART_ID'];
      const cartFiltered = cart.filter((c) => c.stokId == stokId)[0];
      cartFiltered.jumlah = parseInt(counter.innerText);
      cartFiltered.totalHarga = parseInt(totalHarga);
    }

    if (counter.innerText < 1) {
      const cartItem = event.target.parentElement.parentElement;
      const cartIndex = cart.findIndex((c) => c.id === cartItem['CART_ID']);
      cart.splice(cartIndex, 1);

      cartItem.remove();
    }
  });
  return button;
};

const incrementHandle = (counter, price) => {
  const button = document.createElement('button');
  button.innerText = '+';
  button.classList.add('btn', 'btn-secondary');
  button.addEventListener('click', () => {
    const itemPrice = counter.parentElement.parentElement.querySelector('p');
    counter.innerText++;

    const totalHarga = counter.innerText * price;
    const totalHargaElm = document.getElementById('total-harga').innerText;

    getTotalHarga(parseInt(totalHargaElm) + price);
    itemPrice.innerText = `Rp. ${totalHarga}`;

    // update data cart: arr
    const stokId = counter.parentElement.parentElement['CART_ID'];
    const cartFiltered = cart.filter((c) => c.stokId == stokId)[0];
    cartFiltered.jumlah = parseInt(counter.innerText);
    cartFiltered.totalHarga = parseInt(totalHarga);
  });
  return button;
};

const getTotalHarga = (value) => {
  const totalHargaElm = document.getElementById('total-harga');
  const buttonNext = document.getElementById('btn-next');

  totalHargaElm.innerText = value;
  if (totalHargaElm.innerText > 0) {
    buttonNext.removeAttribute('disabled');
  } else {
    buttonNext.setAttribute('disabled', true);
  }

  const dataOrder = {
    orders: cart,
    totalHarga: parseInt(totalHargaElm.innerText),
  };

  buttonNext.addEventListener('click', (event) => {
    event.preventDefault();
    sessionStorage.setItem('DATA_ORDER', JSON.stringify(dataOrder));
  });
};
