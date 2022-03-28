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
    addToCart(card);
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
  cartItem.append(image, menuName, counter, menuPrice);

  const totalHargaElm = document.getElementById('total-harga').innerText;
  getTotalHarga((parseInt(totalHargaElm) + menuFiltered.price));
  return cartItem;
};

const decrementHandle = (counter, price) => {
  const button = document.createElement('button');
  button.innerText = '-'
  button.classList.add('btn', 'btn-secondary');
  button.addEventListener('click', () => {
    if (counter.innerText > 1) {
      counter.innerText--;
      const itemPrice = counter.parentElement.parentElement.querySelector('p');
      const totalHarga = counter.innerText * price;
      const totalHargaElm = document.getElementById('total-harga').innerText;
      getTotalHarga((parseInt(totalHargaElm) - price));
      itemPrice.innerText = `Rp. ${totalHarga}`;
    }
  });
  return button;
};

const incrementHandle = (counter, price) => {
  const button = document.createElement('button');
  button.innerText = '+'
  button.classList.add('btn', 'btn-secondary');
  button.addEventListener('click', () => {
    counter.innerText++;
    const itemPrice = counter.parentElement.parentElement.querySelector('p');
    const totalHarga = counter.innerText * price;
    const totalHargaElm = document.getElementById('total-harga').innerText;
    getTotalHarga((parseInt(totalHargaElm) + price));
    itemPrice.innerText = `Rp. ${totalHarga}`;
  });
  return button;
};

const getTotalHarga = (value) => {
  const totalHargaElm = document.getElementById('total-harga');
  totalHargaElm.innerText = value;
  localStorage.setItem('TOTAL_HARGA', parseInt(totalHargaElm.innerText));
};
