<?php
require_once(__DIR__.'/../model/productModel.php');


class ProductControllerReg{
  public function RegistroProduct(){
      if($_SERVER['REQUEST_METHOD'] === 'POST'){
          $nameProduct = $_POST['product'];
          $descriptionProduct = $_POST['description'];
          $priceProduct = $_POST['price'];
          $discountProduct = $_POST['discount'];
          $priceDiscountProduct = $_POST['priceDiscount'];
          $imageProduct = [];

          for($recorImg = 1; $recorImg <= 2; $recorImg ++){
            if(isset($_FILES['image'. $recorImg]) && $_FILES['image'. $recorImg]['error'] == 0){
              $pathProduct = __DIR__.'/../imgProduct/';
              $extensionProduct = pathinfo($_FILES['image'. $recorImg]['name'], PATHINFO_EXTENSION);
              $nameProductImg = uniqid('image_') . '.' . $extensionProduct;
              $ServerImageProduct = $pathProduct . $nameProductImg;
              if(move_uploaded_file($_FILES['image'. $recorImg]['tmp_name'], $ServerImageProduct)){
                $imageProduct[] = $nameProductImg;
              }
            }
          }

          $userP = new ProductModelReg();
          $registroP =  $userP->SignUpProduct($nameProduct, $descriptionProduct, $priceProduct, $imageProduct, $discountProduct, $priceDiscountProduct);

          if($registroP){
            echo '<script>alert("REGISTRO EXITOSO");
                  window.location.href = "View/components/subComponents-tienda/registerproduct.php#register";
              </script>';
              exit;
          }
          else{
              echo 'ERROR AL REGISTRAR';
          }
      }
  }
}

class ProductoController{
  public function viewProductoController(){
    global $conn;
    $ProductView = new ProductoModel();
    $viewProductTienda = $ProductView->viewProductoModel($conn);
    return $viewProductTienda;
  }
}
?>