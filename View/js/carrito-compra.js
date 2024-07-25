let iconCart = document.querySelector('.icon-cart');
let closeCarrito = document.querySelector('.close-carrito')
let body = document.querySelector('body');

iconCart.addEventListener('click', () => {
  body.classList.toggle('showCart')
})

closeCarrito.addEventListener('click', () => {
  body.classList.toggle('showCart')
})