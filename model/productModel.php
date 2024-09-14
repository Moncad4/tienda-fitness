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

      $sql = "INSERT INTO product (tittle, description, price, image, discount, priceDiscount) VALUES (?,?,?,?,?, ?)";
      $stmt = $conn->prepare($sql);
      if(is_array($imageProduct)){
        $imageProduct = implode(",", $imageProduct);
      }
      $stmt->bind_param("ssisii", $nameProduct, $descriptionProduct, $priceProduct, $imageProduct, $discountProduct, $priceDiscountProduct);

      $result = $stmt->execute();
      $stmt->close();
      $conn->close();
      return $result;
  }
}

class ProductoModel{
  public function viewProductoModel($conn){
    $db = new Database();
    $conn = $db->getConnection();
    $sql = "SELECT * FROM product";
    $stmt = $conn->query($sql);
    $vistaDelProducto = array();
    while($row = $stmt->fetch_assoc()){
      $vistaDelProducto[] = $row;
    }
    return $vistaDelProducto;
  }
}

// Total de productos
class ProductConsultingModel {
  public function ConsultingProductoModel() {
      $db = new Database();
      $conn = $db->getConnection();
      
      if (!$conn) {
          die("Error de conexión a la base de datos: ");
      }

      $sql = "SELECT COUNT(*) AS total FROM product";
      $result = $conn->query($sql);
      
      if ($result) {
          if ($result->num_rows > 0) {
              $row = $result->fetch_assoc();
              $totalproducts = $row["total"];
          } else {
              $totalproducts = 0;
          }
      } else {
          $totalproducts = 0;
      }

      $conn->close();

      return $totalproducts;
  }
}

// Total de usuarios
class UserConsultingModel {
  public function ConsultingUserModel() {
      $db = new Database();
      $conn = $db->getConnection();
      
      if (!$conn) {
          die("Error de conexión a la base de datos: ");
      }

      $sql = "SELECT COUNT(*) AS total FROM users";
      $result = $conn->query($sql);
      
      if ($result) {
          if ($result->num_rows > 0) {
              $row = $result->fetch_assoc();
              $totalproducts = $row["total"];
          } else {
              $totalproducts = 0;
          }
      } else {
          $totalproducts = 0;
      }

      $conn->close();

      return $totalproducts;
  }
}

// Esto es para editar los productos

class ProductModelEdict{
  private $db;

  public function __construct(){
      $this->db = new Database();
  }

  public function EdictProduct($productId, $nameProduct, $descriptionProduct, $priceProduct, $imageProduct, $discountProduct, $priceDiscountProduct){
      $conn =  $this->db->getConnection();
      if (!$conn){
          die("Error de conexión a la base de datos: ");
      }

      $sql = "UPDATE product SET tittle = ?, description = ?, price = ?, image = ?, discount = ?, priceDiscount = ? WHERE product_id = ?";
      $stmt = $conn->prepare($sql);

      if(is_array($imageProduct)){
        $imageProduct = implode(",", $imageProduct);
      }
      $stmt->bind_param("ssdsdii", $nameProduct, $descriptionProduct, $priceProduct, $imageProduct, $discountProduct, $priceDiscountProduct, $productId);

      $result = $stmt->execute();
      $stmt->close();
      $conn->close();
      return $result;
  }
}

?>