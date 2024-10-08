<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/principal.css">
  <link rel="stylesheet" href="../css/tienda.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
  
  <?php
    require_once(__DIR__.'/../../controller/productController.php');
    require '../layout/header.php';
  ?>

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
          <div class="days-btn-container">
            <input class="day-btn" id="onestars" type="checkbox" checked="true" />
            <label class="day-label2" for="onestars">1</label>

            <input class="day-btn" id="twostars" type="checkbox" checked="true" />
            <label class="day-label2" for="twostars">2</label>

            <input class="day-btn" id="threestars" type="checkbox" checked="true" />
            <label class="day-label2" for="threestars">3</label>

            <input class="day-btn" id="fourstars" type="checkbox" checked="true" />
            <label class="day-label2" for="fourstars">4</label>

            <input class="day-btn" id="fivestar" type="checkbox" checked="true" />
            <label class="day-label2" for="fivestar">5</label>
          </div>
      </div>
      
      <button type="button" class="filter-button">Aplicar Filtros</button>
  </aside>

  <section class="main-shop">
<!-- banner de publicidad -->
    <div class="main-shop-publicity">
      <img src="../img/bannershop.jpg" alt="">
    </div>

<!-- filtros del main -->
    <div class="main-shop-searchs">Resultados de 
    </div>


<!-- Botones y menu desplegable de los filtros -->
    <div class="main-shop-navfilters">
      <p class="mainshop-navfiltertex">Ordenar por
        <button class="main-shop-btnfilters mainshop-btnfilters-efect2">Top ventas</button>
        <button class="main-shop-btnfilters mainshop-btnfilters-efect2">Ultimo agregado</button>
        <button class="main-shop-btnfilters mainshop-btnfilters-efect2">Promociones</button> 
        <select class="mainshop-btnfil main-shop-btnfilters" name="" id="">
          <option value="1">Menor precio</option>
          <option value="2">Mayor precio</option>
          <option value="3">Top ventas</option>
        </select>
      </p>
    </div>

    <!-- Grid con su foreach de auto llenado de los productos -->
    <?php
      $detailsControllerProduct = new ProductoController();
      $productos = $detailsControllerProduct->viewProductoController();
    ?>
    
    <div class="containergridshop-articles">
      <?php foreach($productos as $producto){ ?>  
        <div class="cardsartice-shop">
            <h2><?php echo $producto['tittle'] ?></h2>
            <img class="imgproducts-shop" src="../../imgProduct/<?php echo $producto['image'] ?>" alt="">
            <!-- <p><?php echo $producto['product_id'] ?></p> -->
            <div class="gridshop-botonbuyandetails">
              <button class="cart-btn" onclick="agregarAlCarrito(
                <?php echo $producto['product_id'];?>, 
              '<?= $producto['tittle'];?>', '<?php echo $producto['price'];?>', 
              '<?= $producto['discount'];?>', '<?php echo $producto['priceDiscount'];?>', 
              '<?= BASE_URL . "imgProduct/" . $producto['image']; ?>')">
                <span class="icon-container"> 
                  <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="cart"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
                </span>
                <p class="addcart-text">
                  Add to Cart
                </p>
              </button> 

              <a href="#modal-<?php echo $producto['product_id']; ?>" class="addcart-text detailsproducts-link">Detalles...</a>

              <div id="modal-<?php echo $producto['product_id']; ?>" class="detailsproducts-modal">

              <div class="detailsproductsmodal-content">
                <div class="detailsproducts-header">
                <span class="detailsproducts-x"><a href="#" class="">
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                  <path d="M18 6l-12 12" />
                  <path d="M6 6l12 12" />
                  </svg>
                </a></span> 
                <h2><?php echo $producto['tittle'] ?></h2>
                </div>

                <div class="detailsproductsmodal-containerimgproducts">
                  <img class="detailsproductsmodal-imgproducts" src="../../imgProduct/<?php echo $producto['image'] ?>" alt=""></p> 
                </div>

                <p class="detailsmodal-productdescription"><?php echo $producto['description'] ?>
                <p class="detailsmodal-productdescription"> 
                  <br><span class="detailsmodal-producttittles">Precio: </span><?php echo $producto['price'] ?>
                  <br><span class="detailsmodal-producttittles">Descuento: </span><?php echo $producto['discount'] ?>
                  <br><span class="detailsmodal-producttittles">Precio con descuento: </span><?php echo $producto['priceDiscount'] ?></p>

                  <button class="cart-btn" onclick="agregarAlCarrito(<?php echo $producto['product_id'];?>, '<?php echo $producto['tittle'];?>', '<?php echo $producto['price'];?>', '<?php echo $producto['discount'];?>', '<?php echo $producto['priceDiscount'];?>', '<?php echo "../../imgProduct/" . $producto['image']; ?>')">
                  <span class="icon-container"> 
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512" fill="rgb(17, 17, 17)" class="cart"><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"></path></svg>
                  </span>
                  <p class="addcart-text">
                    Add to Cart
                  </p>
                </button> 

              </div>
              
            </div>
            </div>
        </div>
      <?php } ?>
    </div>

  </section>
</div>
    
  <?php
  require '../layout/footer.php';
  ?>

  <script src="../js/carrito-compra.js"></script>

</body>

