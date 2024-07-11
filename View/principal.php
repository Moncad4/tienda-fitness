<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./css/principal.css">
</head>
<body>
  <div class="img-container">
    <header class="container-header">
      <nav class="navegador">
        <div class="contenedor-logo">
          <a href="./principal.php"><h2>Logo</h2></a>
        </div>
        <div class="div-list-nav">
          <ul class="list-nav">
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Tienda</a></li>
            <li><a href="#">Nosotros</a></li>
            <li><a href="#">Ayudas</a></li>
            <li><a href="#">Contacto</a></li>
            <li class="inicio-sesion">
              <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-circle" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                  <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                  <path d="M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                  <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855" />
                </svg>
              <a href="#">Iniciar Sesion</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <div class="contenedor-inicio">
      <div class="descripcion-inicio">
        <h1>TRANSFORMA TU <span>CUERPO</span>,TRANSFORMA TU <span>ALMA</span></h1>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas quod quibusdam quas officia
        iusto, aliquam nostrum laborum quasi voluptatem neque facere tempore omnis aspernatur consequatur.</p>
        <button>Comprar</button>
      </div>
      <div class="imagen-inicio">
        <img src="./img/entrenador.png" alt="">
      </div>
    </div>
  </div>

  <!-- seccion productos -->
  <section class="seccion-producto">
    <H2 class="titulo-productos">Productos</H2>
    <div class="slider">
      <div class="list">
        <div class="item">
            <img src="./img/productos/suplemento1.PNG" alt="">
            <div class="content">
                <div class="title">MAGIC SLIDER</div>
                <div class="type">FLOWER</div>
                <div class="description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti temporibus quis eum consequuntur voluptate quae doloribus distinctio. Possimus, sed recusandae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, aut.
                </div>
                <div class="boton-producto">
                    <button>SEE MORE</button>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="./img/productos/suplemento2.PNG" alt="">
            <div class="content">
                <div class="title">MAGIC SLIDER</div>
                <div class="type">NATURE</div>
                <div class="description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti temporibus quis eum consequuntur voluptate quae doloribus distinctio. Possimus, sed recusandae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, aut.
                </div>
                <div class="boton-producto">
                    <button>SEE MORE</button>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="./img/productos/suplemento4.PNG" alt="">
            <div class="content">
                <div class="title">MAGIC SLIDER</div>
                <div class="type">PLANT</div>
                <div class="description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti temporibus quis eum consequuntur voluptate quae doloribus distinctio. Possimus, sed recusandae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, aut.
                </div>
                <div class="boton-producto">
                    <button>SEE MORE</button>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="./img/productos/suplemento3.PNG" alt="">
            <div class="content">
                <div class="title">MAGIC SLIDER</div>
                <div class="type">NATURE</div>
                <div class="description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti temporibus quis eum consequuntur voluptate quae doloribus distinctio. Possimus, sed recusandae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, aut.
                </div>
                <div class="boton-producto">
                    <button>SEE MORE</button>
                </div>
            </div>
        </div>
      </div>

      <div class="thumbnail">
        <div class="item">
            <img src="./img/productos/suplemento1.PNG" alt="">
        </div>
        <div class="item">
            <img src="./img/productos/suplemento2.PNG" alt="">
        </div>
        <div class="item">
            <img src="./img/productos/suplemento4.PNG" alt="">
        </div>
        <div class="item">
            <img src="./img/productos/suplemento3.PNG" alt="">
        </div>
      </div>

      <div class="nextPrevArrows">
        <button class="prev"> < </button>
        <button class="next"> > </button>
      </div>
    </div>
  </section>
  <script src="./js/inicio.js"></script>
</body>
</html>