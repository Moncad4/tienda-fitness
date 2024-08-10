<?php
require_once(__DIR__.'/../model/productModel.php');


class ProductControllerReg{
  public function RegistroProduct(){
      if($_SERVER['REQUEST_METHOD'] === 'POST'){
          $nameProduct = $_POST['product'];
          $descriptionProduct = $_POST['description'];
          $priceProduct = $_POST['price'];
          // $imageProduct = $_POST['image'];
          $discountProduct = $_POST['discount'];
          $priceDiscountProduct = $_POST['priceDiscount'];

          $userP = new ProductModelReg();
          $registroP =  $userP->SignUpProduct($nameProduct, $descriptionProduct, $priceProduct, $discountProduct, $priceDiscountProduct);

          if($registroP){
            echo '<script>alert("REGISTRO EXITOSO");
                  window.location.href = "View/components/subComponents-tienda/registerproduct.php";
              </script>';
              exit;
          }
          else{
              echo 'ERROR AL REGISTRAR';
          }
      }
  }
}
?>