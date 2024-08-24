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
function agregarAlCarrito(product_id, tittle, price, discount, priceDiscount, image) {
  let carrito = JSON.parse(localStorage.getItem('cartTab')) || [];
  
  let producto = {
      product_id: product_id,
      tittle: tittle,
      price: price,
      discount: discount,
      priceDiscount: priceDiscount,
      image: image
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
          <span class="liscart-gridone"><img class="cartshop-img" src="${producto.image}" alt="${producto.tittle}" /></span>
          <span class="listcart-fonts liscart-gridtwo">${producto.tittle}</span>
          <span class="listcart-fonts liscart-price">$${producto.price}</span>
          <span class="liscart-gridthree"> <button class="listcart-deletebtn" onclick="eliminarDelCarrito(${index})">Eliminar</button></span>
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