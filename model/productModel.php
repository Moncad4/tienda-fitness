<?php
require_once(__DIR__.'/../database/DB.php');

class ProductModelReg{
  private $db;

  public function __construct(){
      $this->db = new Database();
  }

  public function SignUpProduct($nameProduct, $descriptionProduct, $priceProduct, $discountProduct, $priceDiscountProduct){
      $conn =  $this->db->getConnection();
      if (!$conn){
          die("Error de conexión a la base de datos: ");
      }

      $sql = "INSERT INTO product (tittle, description, price, discount, priceDiscount) VALUES (?,?,?,?,?)";
      $stmt = $conn->prepare($sql);
      $stmt->bind_param("ssiii", $nameProduct, $descriptionProduct, $priceProduct, $discountProduct, $priceDiscountProduct);

      $result = $stmt->execute();
      $stmt->close();
      $conn->close();
      return $result;
  }
}

// class ProductModelRender {
//   private $db;

//   public function __construct(){
//     $this->db = new Database();
//   }

//   public function getAllProducts() {
//       $conn = $this->db->getConnection();
//       $sql = "SELECT * FROM product";
//       $stmt = $conn->prepare($sql);
//       $stmt->bind_param("ss", $emailAdm, $passAdm);
//       $result = $stmt->execute();
//       $result = $stmt->get_result();
//       $productos = $result->fetch_assoc();

//       $productos = [];

//       while ($row = $result->fetch_assoc()) {
//           $productos[$row['id']] = $row; // Usa el ID como clave
//       }

//       return $productos;
//   }
// }
?>