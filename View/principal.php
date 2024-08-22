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
    <?php
    require './layout/header.php';
    ?>
    
    <div class="contenedor-inicio">
      <div class="descripcion-inicio">
        <h1>TRANSFORMA TU <span>CUERPO</span>,TRANSFORMA TU <span>ALMA</span></h1>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas quod quibusdam quas officia
        iusto, aliquam nostrum laborum quasi voluptatem neque facere tempore omnis aspernatur consequatur.</p>
        <button>Comprar</button>
      </div>
      <div class="imagen-inicio">
        <img class="imageninicio-entrenador" src="./img/entrenador.png" alt="">
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
                    <button>AGREGAR AL CARRITO</button>
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
                    <button>AGREGAR AL CARRITO</button>
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
                    <button>AGREGAR AL CARRITO</button>
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
                    <button>AGREGAR AL CARRITO</button>
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
    <a href="./components/tienda.php" class="verMas-Productos">VER MAS PRODUCTOS</a>
  </section>

  <section class="seccion-nosotros">
    <div class="container-seccion-nosotros">
      <img src="./img/nosotros-inicio.jpg" alt="">
    </div>
    <div class="descripcion-seccion-nosotros">
      <h2>Conoce mas sobre nosotros</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore inventore consectetur 
      nisi at ipsam?</p>
      <a href="#">Saber Mas</a>
    </div>
  </section>

  <section class="seccion-ayudas">
    <h2>AYUDAS</h2>
    <div class="container-seccion-ayudas">
      <div class="subContainer-descripcion-ayudas">
        <h3>Tipos de dietas</h3>
        <a href="#">Seleccionar</a>
        <h3>Quemadores de grasa</h3>
        <a href="#">Seleccionar</a>
      </div>
      <div class="subContainer-img-ayudas">
        <img src="./img/seccion-ayudas.gif" alt="">
      </div>
    </div>
  </section>

  <section class="sesion-enviarCorreo">
    <h3>SIGUENOS Y GANA UN 10% DE DESCUENTO EN LA COMPRA DE ALGUN PRODUCTO</h3>
    <div action="" class="div-correo">
      <input type="text" placeholder="Ingresa tu correo">
      <button type="submit">Enviar</button>
    </div>
  </section>

  <?php
  require './layout/footer.php'
  ?>
  
  <script src="./js/carrito-compra.js"></script>
  <script src="./js/inicio.js"></script>
</body>
</html>