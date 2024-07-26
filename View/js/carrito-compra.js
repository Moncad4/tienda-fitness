let iconCart = document.querySelector('.icon-cart');
let closeCarrito = document.querySelector('.close-carrito');
let body = document.querySelector('body');
let listPcart = document.querySelector('.listPcart');
let listPcart2 = document.querySelector('.listPcart2');
let listPcart3 = document.querySelector('.listPcart3');

let objetProductName = '';
let objetProductPrice = 0;
let objetProductCant = 0;
let objetProductName2 = '';
let objetProductPrice2 = 0;
let objetProductCant2 = 0;
let objetProductName3 = '';
let objetProductPrice3 = 0;
let objetProductCant3 = 0;

iconCart.addEventListener('click', () => {
  body.classList.toggle('showCart');
  alert("puto, quien lee")
})

closeCarrito.addEventListener('click', () => {
  body.classList.toggle('showCart');
})

document.addEventListener('DOMContentLoaded', () => {
  let addCartProduct = document.querySelectorAll('.cartbtn-send');

  addCartProduct.forEach(button => {
    button.addEventListener('click', () => {
      objetProductName = "Proteinon";
      objetProductPrice = 5000;
      objetProductCant = 1;
      objetSent(objetProductName, objetProductPrice, objetProductCant); 

      function objetSent (oPN1, oPP1, oPC1){
        listPcart.innerHTML = `Producto: ${oPN1}, Precio: ${oPP1}, Cantidad: ${oPC1}`;
        alert("puto, moncada es gay y da culo");
      }
      alert("ya dio");
    });
  });
});

document.addEventListener('DOMContentLoaded', () => {
  let addCartProduct2 = document.querySelectorAll('.cartbtn2-send');

  addCartProduct2.forEach(button => {
    button.addEventListener('click', () => {
      objetProductName2 = "Protepeneinon";
      objetProductPrice2 = 10000;
      objetProductCant2 = 1;
      objetSent(objetProductName2, objetProductPrice2, objetProductCant2); 

      function objetSent (oPN2, oPP2, oPC2){
        listPcart2.innerHTML = `Producto: ${oPN2}, Precio: ${oPP2}, Cantidad: ${oPC2}`;
        alert("puto, moncada es gay y da culo");
      }
      alert("ya agrego el 2");
    });
  });
});

document.addEventListener('DOMContentLoaded', () => {
  let addCartProduct3 = document.querySelectorAll('.cartbtn3-send');

  addCartProduct3.forEach(button => {
    button.addEventListener('click', () => {
      objetProductName3 = "Protestor";
      objetProductPrice3 = 310000;
      objetProductCant3 = 1;
      objetSent(objetProductName3, objetProductPrice3, objetProductCant3); 

      function objetSent (oPN3, oPP3, oPC3){
        listPcart3.innerHTML = `Producto: ${oPN3}, Precio: ${oPP3}, Cantidad: ${oPC3}`;
        alert("puto, moncada es gay y da culo");
      }
      alert("ya agrego el 3");
    });
  });
});

