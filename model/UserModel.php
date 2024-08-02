<?php
require_once(__DIR__.'/../database/DB.php');

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

      $sql = "INSERT INTO users (NickName, LastName, Email, Passwords) VALUES (?,?,?,?)";
      $stmt = $conn->prepare($sql);
      $stmt->bind_param("ssss", $Nick, $last, $email, $pass);

      $result = $stmt->execute();
      $stmt->close();
      $conn->close();
      return $result;
  }
}

class UserModelLogIn{
  private $db;

  public function __construct(){
    $this->db = new Database();
}

  public function VerificarCredenciales($email, $pass){
    $conn = $this->db->getConnection();
    $sql = "SELECT * FROM users WHERE Email = ? AND Passwords = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $pass);
    $result = $stmt->execute();

    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user){
      return $user;
    }else{
      return false;
    }
    $stmt->close();
    $conn->close();
  }
}

// user_information
class userModel{
  public function getUserById($user_id){
    $db = new Database();
    $conn = $db->getConnection();
    $sql = "SELECT * FROM users WHERE id = $user_id";
    $result = $conn->query($sql);
    return $result->fetch_assoc();
  }
}
?>