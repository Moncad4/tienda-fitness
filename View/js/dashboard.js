let botonAgregarProduct = document.querySelector('.registerProductBoton');
let PrincipalProducto = document.querySelector('.principalProductoBoton');
// let botonEliminarProduct = document.querySelector('.eliminarProductBoton');
// let botonModificarProduct = document.querySelector('.modificarProductBoton');
let gridProducto = document.querySelector('.dashboard-principal');
let vistaRegistroProducto = document.querySelector('.containderAdm-view');
let dashboardPresentacion = document.querySelector('.dashbardpresentacion');
// let sectionElimnarProducto = document.querySelector('..dashboardadministrator-delete');
// let sectionModificarProducto = document.querySelector('..dashboardadministrator-edict');


PrincipalProducto.addEventListener('click', () => {
  gridProducto.style.display = "flex"
  vistaRegistroProducto.style.display = "none"
  dashboardPresentacion.style.display = "none"
})

botonAgregarProduct.addEventListener('click', () => {
  vistaRegistroProducto.style.display = "flex"
  dashboardPresentacion.style.display = "flex"
  gridProducto.style.display = "none"
})

// botonEliminarProduct.addEventListener('click', () => {
//   sectionElimnarProducto.style.display = "flex"
//   vistaRegistroProducto.style.display = "none"
//   dashboardPresentacion.style.display = "flex"
//   gridProducto.style.display = "none"
// })

// botonModificarProduct.addEventListener('click', () => {
//   sectionModificarProducto.style.display = "flex"
//   gridProducto.style.display = "none"
//   vistaRegistroProducto.style.display = "none"
//   dashboardPresentacion.style.display = "flex"
//   sectionElimnarProducto.style.display = "none"
// })