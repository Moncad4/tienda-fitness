<?php
require_once(__DIR__.'/../database/DB.php');

class ProductModelRegister{
  private $db;

  public function __construct(){
      $this->db = new Database();
  }

  public function productRegister($tittle, $description, $price, $img){
      $conn =  $this->db->getConnection();
      if (!$conn){
          die("Error de conexión a la base de datos: ");
      }

      $sql = "INSERT INTO product (tittle, description, price, image) VALUES (?,?,?,?)";
      $stmt = $conn->prepare($sql);
      $stmt->bind_param("ssss", $tittle, $description, $price, $img);

      $result = $stmt->execute();
      $stmt->close();
      $conn->close();
      return $result;
  }
}
?>