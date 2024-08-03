<?php
require_once(__DIR__.'/../database/DB.php');

class ProductModelReg{
  private $db;

  public function __construct(){
      $this->db = new Database();
  }

  public function SignUpProduct($nameProduct, $descriptionProduct, $priceProduct, $imageProduct, $discountProduct, $priceDiscountProduct){
      $conn =  $this->db->getConnection();
      if (!$conn){
          die("Error de conexión a la base de datos: ");
      }

      $sql = "INSERT INTO product (tittle, description, price, image, discount, priceDiscount) VALUES (?,?,?,?,?,?)";
      $stmt = $conn->prepare($sql);
      $stmt->bind_param("ssisii", $nameProduct, $descriptionProduct, $priceProduct, $imageProduct, $discountProduct, $priceDiscountProduct);

      $result = $stmt->execute();
      $stmt->close();
      $conn->close();
      return $result;
  }
}
?>