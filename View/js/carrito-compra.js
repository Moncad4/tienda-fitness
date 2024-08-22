let iconCart = document.querySelector('.icon-cart');
let closeCarrito = document.querySelector('.close-carrito')
let body = document.querySelector('body');

iconCart.addEventListener('click', () => {
  body.classList.toggle('showCart')
})

closeCarrito.addEventListener('click', () => {
  body.classList.toggle('showCart')
})

// ver productos en el carrito
function agregarAlCarrito(product_id, tittle, price, discount, priceDiscount) {
  let carrito = JSON.parse(localStorage.getItem('cartTab')) || [];
  
  let producto = {
      product_id: product_id,
      tittle: tittle,
      price: price,
      discount: discount,
      priceDiscount: priceDiscount
      // imagen: imagen
  };
  
  carrito.push(producto);
  localStorage.setItem('cartTab', JSON.stringify(carrito));
  
  actualizarCarrito();
}

function actualizarCarrito() {
  let carrito = JSON.parse(localStorage.getItem('cartTab')) || [];
  let carritoHTML = '';
  
  carrito.forEach((producto, index) => {
      carritoHTML += `
        
        <div class="listcart">
          <span>${producto.tittle}</span>
          <span>$${producto.price}</span>
          <button onclick="eliminarDelCarrito(${index})">Eliminar</button>
        </div>
        
      `;
  });
  
  document.getElementById('cartTab').innerHTML = carritoHTML;
}

function eliminarDelCarrito(index) {
  let carrito = JSON.parse(localStorage.getItem('cartTab')) || [];
  carrito.splice(index, 1);
  localStorage.setItem('cartTab', JSON.stringify(carrito));
  actualizarCarrito();
}

window.onload = function() {
  actualizarCarrito();
};