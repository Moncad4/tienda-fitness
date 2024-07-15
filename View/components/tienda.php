<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/principal.css">
  <link rel="stylesheet" href="../css/tienda.css">
</head>
<body>
<header class="container-header">
  <nav class="navegador">
    <div class="contenedor-logo">
      <a href="./principal.php"><h2>Logo</h2></a>
    </div>
    <div class="div-list-nav">
      <ul class="list-nav">
        <li><a href="#">Inicio</a></li>
        <li><a href="./components/tienda.php">Tienda</a></li>
        <li><a href="#">Nosotros</a></li>
        <li><a href="./components/ayudas.php">Ayudas</a></li>
        <li><a href="#">Contacto</a></li>
        <li class="inicio-sesion">
          <a href="#">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-circle" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
              <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
              <path d="M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
              <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855" />
            </svg>
            Iniciar Sesion</a>
        </li>
        <li>
          <button>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-shopping-cart" width="25" height="25" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
              <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
              <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
              <path d="M17 17h-11v-14h-2" />
              <path d="M6 5l14 1l-1 7h-13" />
            </svg>
          </button>
        </li>
      </ul>
    </div>
  </nav>
</header>
<div class="mainshop-container">
  <aside class="main-shop-aside">
    <h2>Filtrar Productos</h2>
      <div class="main-shop-filter">
          <h3>Precio</h3>
          <label for="price-min">Mínimo:</label>
          <input type="number" id="price-min" name="price-min" min="0">
          
          <label for="price-max">Máximo:</label>
          <input type="number" id="price-max" name="price-max" min="0">
      </div>
      
      <div class="main-shop-filter">
          <h3>Marca</h3>
          <label><input type="checkbox" name="brand" value="marca1"> Marca 1</label>
          <label><input type="checkbox" name="brand" value="marca2"> Marca 2</label>
          <label><input type="checkbox" name="brand" value="marca3"> Marca 3</label>
      </div>
      
      <div class="main-shop-filter">
          <h3>Categoría</h3>
          <label><input type="checkbox" name="category" value="categoria1"> Categoría 1</label>
          <label><input type="checkbox" name="category" value="categoria2"> Categoría 2</label>
          <label><input type="checkbox" name="category" value="categoria3"> Categoría 3</label>
      </div>
      
      <div class="main-shop-filter">
          <h3>Valoración</h3>
          <label><input type="checkbox" name="rating" value="5"> 5 estrellas</label>
          <label><input type="checkbox" name="rating" value="4"> 4 estrellas y más</label>
          <label><input type="checkbox" name="rating" value="3"> 3 estrellas y más</label>
      </div>
      
      <button type="button" class="filter-button">Aplicar Filtros</button>
  </aside>
  <section class="main-shop">
      <div class="main-shop-publicity">
        <img src="../img/bannershop.jpg" alt="">
      </div>
      <div class="main-shop-searchs">Resultados de 
      </div>
      <div class="main-shop-navfilters">
        <p class="mainshop-navfiltertex">Ordenar por
          <button class="main-shop-btnfilters mainshop-btnfilters-efect2">Top ventas</button>
          <button class="main-shop-btnfilters mainshop-btnfilters-efect2">Ultimo agregado</button>
          <button class="main-shop-btnfilters mainshop-btnfilters-efect2">Promociones</button> 
          <select class="mainshop-btnfil main-shop-btnfilters" name="" id="">
            <option value="">Menor precio</option>
            <option value="">Mayor precio</option>
            <option value="">Top ventas</option>
          </select>
        </p>
      </div>
      <article>
        <div class="articleshop-cards">
          <div class="articleshop-maincards artmaincard1">
            <img class="products-shop" src="../img/tienda/product1.jpeg" alt="">
          </div>
          <div class="articleshop-maincards artmaincard2">
          <img class="products-shop" src="../img/tienda/product2.jpg" alt="">
          </div>
          <div class="articleshop-maincards artmaincard3">
          <img class="products-shop" src="../img/tienda/product3.jpg" alt="">
          </div>
          <div class="articleshop-maincards artmaincard4">2</div>
          <div class="articleshop-maincards artmaincard5">3</div>
          <div class="articleshop-maincards artmaincard6">4</div>
          <div class="articleshop-maincards artmaincard7">5</div>
          <div class="articleshop-maincards artmaincard8">6</div>
          <div class="articleshop-maincards artmaincard9">7</div>
        </div>
    </article>
  </section>
</div>  
<footer class="footer">
  <div class="container-footer">
    <div class="logo-footer">
      <h1>Logo</h1>
    </div>
    <div class="menu-footer">
      <h3>Menu</h3>
      <ul>
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Tienda</a></li>
        <li><a href="#">Nosotros</a></li>
        <li><a href="#">Ayudas</a></li>
        <li><a href="#">Contacto</a></li>
      </ul>
    </div>
    <div class="politicas-footer">
      <h3>Politicas</h3>
      <ul>
        <li><a href="#">FAQ</a></li>
        <li><a href="#">Politica de la tienda</a></li>
      </ul>
    </div>
    <div class="contacto-footer">
      <h3>Contacto</h3>
      <ul>
        <li>(+57)3006321011</li>
        <li>Juandavidmoncada7@gmail.com</li>
        <li>2500 Lotes, Pereira, Colombia</li>
      </ul>
    </div>
  </div>
  <div class="derechos-footer">
    <h4>&copy Moncad4 y Jillfeint</h4>
    <p>Todos los derechos reservados</p>
  </div>
</footer>
</body>
