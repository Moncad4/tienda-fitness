<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/principal.css">
</head>
<body>
  <?php
  require_once(__DIR__.'/../../controller/productController.php');
  require('../layout/header.php');
  $detailsControllerProduct = new ProductoController();
  $productos = $detailsControllerProduct->viewProductoController();
  foreach($productos as $producto){
    ?>
    <p><?php echo $producto['tittle'] ?></p>
    <p><?php echo $producto['description'] ?></p>
    <p><?php echo $producto['price'] ?></p>
    <p><?php echo $producto['discount'] ?></p>
    <p><?php echo $producto['priceDiscount'] ?></p>
    <p><?php echo $producto['product_id'] ?></p>
    <p><img src="../../imgProduct/<?php echo $producto['image'] ?>" alt=""></p>

    <button onclick="agregarAlCarrito(<?php echo $producto['product_id'];?>, '<?php echo $producto['tittle'];?>', '<?php echo $producto['price'];?>', '<?php echo $producto['discount'];?>', '<?php echo $producto['priceDiscount'];?>')">Agregar al carrito</button>

    <?php
  }
  ?>

<script src="../js/carrito-compra.js"></script>
</body>
</html>