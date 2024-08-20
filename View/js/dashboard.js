let PrincipalBtnProducto = document.querySelector('.principalProductoBoton');
let botonAgregarProduct = document.querySelector('.registerProductBoton');
let botonEliminarProduct = document.querySelector('.eliminarProductBoton');
let botonModificarProduct = document.querySelector('.modificarProductBoton');
let gridPrincipalProdt = document.querySelector('.dashboard-principal');
let dashboardPresentacion = document.querySelector('.dashbardpresentacion');
let vistaRegistroProdt = document.querySelector('.dashboardadministrator-add');
let sectionModificarProducto = document.querySelector('.dashboardadministrator-edict');
let sectionElimnarProducto = document.querySelector('.dashboardadministrator-delete');


PrincipalBtnProducto.addEventListener('click', () => {
  gridPrincipalProdt.style.display = "flex";
  dashboardPresentacion.style.display = "none";
})

botonAgregarProduct.addEventListener('click', () => {
  gridPrincipalProdt.style.display = "none";
  dashboardPresentacion.style.display = "flex";
  vistaRegistroProdt.style.display = "flex";
  sectionElimnarProducto.style.display = "none";
  sectionModificarProducto.style.display = "none";
})

botonEliminarProduct.addEventListener('click', () => {
  gridPrincipalProdt.style.display = "none";
  dashboardPresentacion.style.display = "flex";
  vistaRegistroProdt.style.display = "none";
  sectionElimnarProducto.style.display = "flex";
  sectionModificarProducto.style.display = "none";
})

botonModificarProduct.addEventListener('click', () => {
  gridPrincipalProdt.style.display = "none";
  dashboardPresentacion.style.display = "flex";
  vistaRegistroProdt.style.display = "none";
  sectionElimnarProducto.style.display = "none";
  sectionModificarProducto.style.display = "flex";
})