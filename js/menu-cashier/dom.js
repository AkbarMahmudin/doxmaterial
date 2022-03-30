const renderMenu = () => {
  const content = document.getElementById('content');
  for (const menu of menus) {
    const menuElement = createMenuElement(menu.name, menu.price, `../img/menu/${menu.id}.png`);
    menuElement['MENU_ID'] = menu.id;
    content.append(menuElement);
  };
};

const createMenuElement = (name, price, img) => {
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
  
  card.addEventListener('click', () => {
    const cartIsDuplicate = checkCartDuplicate(card);

    if (!cartIsDuplicate) {
      addToCart(card);
    } else {
      alert(`${name} sudah ada dipesan`);
    }
  });
  card.append(imageCard, cardBody);
  return card;
}

const addToCart = (menuElement) => {
  const cartContainer = document.getElementById('cart-container');
  const cartItem = createCartItem(menuElement['MENU_ID']);
  cartContainer.append(cartItem);
};

const createCartItem = (menuId) => {
  const menuFiltered = menus.filter((menu) => menu.id == menuId)[0];
  let qty = 1;
  const cartItem = document.createElement('div');
  cartItem.classList.add('cart-item');
  const image = document.createElement('img');
  image.setAttribute('src', `../img/menu/${menuFiltered.id}.png`);
  const menuName = document.createElement('h3');
  menuName.innerText = menuFiltered.name;
  const menuPrice = document.createElement('p');
  menuPrice.innerText = `Rp. ${menuFiltered.price}`;
  
  const counter = document.createElement('div');
  counter.classList.add('counter');
  const counterNum = document.createElement('span');
  counterNum.innerText = qty;
  counter.append(decrementHandle(counterNum, menuFiltered.price), counterNum, incrementHandle(counterNum, menuFiltered.price));
  cartItem['CART_ID'] = menuId;
  cartItem.append(image, menuName, counter, menuPrice);

  const totalHargaElm = document.getElementById('total-harga').innerText;
  getTotalHarga((parseInt(totalHargaElm) + menuFiltered.price));
  return cartItem;
};

const checkCartDuplicate = (menuItem) => {
  const cartItems = document.querySelectorAll('#cart-container > .cart-item');

  if (cartItems.length) {
    for (const cart of cartItems) {
      if (cart['CART_ID'] === menuItem['MENU_ID']) {
        return true;
      }
    }
  }
  return false;
};

const decrementHandle = (counter, price) => {
  const button = document.createElement('button');
  button.innerText = '-'
  button.classList.add('btn', 'btn-secondary');
  button.addEventListener('click', (event) => {
    if (counter.innerText >= 1) {
      const itemPrice = counter.parentElement.parentElement.querySelector('p');
      counter.innerText--;
      
      const totalHarga = counter.innerText * price;
      const totalHargaElm = document.getElementById('total-harga').innerText;
      
      getTotalHarga((parseInt(totalHargaElm) - price));
      itemPrice.innerText = `Rp. ${totalHarga}`;
    }

    if (counter.innerText < 1) {
      const cartItem = event.target.parentElement.parentElement;
      cartItem.remove();
    }
  });
  return button;
};

const incrementHandle = (counter, price) => {
  const button = document.createElement('button');
  button.innerText = '+'
  button.classList.add('btn', 'btn-secondary');
  button.addEventListener('click', () => {
    const itemPrice = counter.parentElement.parentElement.querySelector('p');
    counter.innerText++;

    const totalHarga = counter.innerText * price;
    const totalHargaElm = document.getElementById('total-harga').innerText;

    getTotalHarga((parseInt(totalHargaElm) + price));
    itemPrice.innerText = `Rp. ${totalHarga}`;
  });
  return button;
};

const getTotalHarga = (value) => {
  const totalHargaElm = document.getElementById('total-harga');
  const buttonNext = document.getElementById('btn-next');

  totalHargaElm.innerText = value;
  if (totalHargaElm.innerText > 0) {
    buttonNext.removeAttribute('disabled');
    buttonNext.addEventListener('click', () => window.location.href = '/pages/payment_menu-cashier.html');
  } else {
    buttonNext.setAttribute('disabled', true);
  }
  
  localStorage.setItem('TOTAL_HARGA', parseInt(totalHargaElm.innerText));
};
