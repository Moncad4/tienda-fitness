<?php
require_once(__DIR__.'/../model/dashboardeleteproductModel.php');


if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (isset($_POST['product_id'])) {
      $product_id = intval($_POST['product_id']);
      $deleteproduct = new DeleteProduct();
      $ideleteproductsend =  $deleteproduct->DelectEjecutionProduct($product_id);
    }

  } else {
    echo "Método de solicitud no válido.";
  }