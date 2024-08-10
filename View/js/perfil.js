let botonPerfil = document.querySelector('.boton-perfil');
let botonPedido = document.querySelector('.boton-pedidos');
let botonHistorial = document.querySelector('.boton-historial');
let contenedorPerfil = document.querySelector('.subContainer-perfil');
let contenedorPedidos = document.querySelector('.subContainer-perfil2');
let contenedorHistorial = document.querySelector('.subContainer-perfil3');


botonPerfil.addEventListener('click', () => {
  contenedorPerfil.style.display = "flex"
  contenedorPedidos.style.display = "none"
  contenedorHistorial.style.display = "none"
})

botonPedido.addEventListener('click', () => {
  contenedorPedidos.style.display = "flex"
  contenedorPerfil.style.display = "none"
  contenedorHistorial.style.display = "none"
})

botonHistorial.addEventListener('click', () => {
  contenedorHistorial.style.display = "flex"
  contenedorPerfil.style.display = "none"
  contenedorPedidos.style.display = "none"
})

