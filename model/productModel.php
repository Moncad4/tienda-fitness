<?php
require_once(__DIR__.'/../DataBase/DB.php');

class UserModelReg{
  private $db;

  public function __construct(){
      $this->db = new Database();
  }

  public function SignUpUser($Nick, $last, $email, $pass){
      $conn =  $this->db->getConnection();
      if (!$conn){
          die("Error de conexión a la base de datos: ");
      }

      $sql = "INSERT INTO product (tittle, description, price, image) VALUES (?,?,?,?)";
      $stmt = $conn->prepare($sql);
      $stmt->bind_param("ssss", $Nick, $last, $email, $pass);

      $result = $stmt->execute();
      $stmt->close();
      $conn->close();
      return $result;
  }
}
?>