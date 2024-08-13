<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  require_once(__DIR__.'/../../controller/productController.php');
  $detailsControllerProduct = new ProductoController();
  $productos = $detailsControllerProduct->viewProductoController();
  foreach($productos as $producto){
    ?>
    <p><?php echo $producto['tittle'] ?></p>
    <p><?php echo $producto['description'] ?></p>
    <p><?php echo $producto['price'] ?></p>
    <p><?php echo $producto['discount'] ?></p>
    <p><?php echo $producto['priceDiscount'] ?></p>
    <p><img src="../../imgProduct/<?php echo $producto['image'] ?>" alt=""></p>
    <?php
  }
  ?>
</body>
</html>