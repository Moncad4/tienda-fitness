<?php
require_once(__DIR__.'/../database/DB.php');

class DeleteProduct {
  private $db;

  public function __construct(){
      $this->db = new Database();
  }

  public function DelectEjecutionProduct($product_id) {
    $conn =  $this->db->getConnection();
    if (!$conn){
      die("Error de conexión a la base de datos: ");
    }

    $sql = "DELETE FROM product WHERE product_id = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("i", $product_id);
        if ($stmt->execute()) {
            header("Location: /tienda-fitness/View/components/subComponents-tienda/registerproduct.php");
            exit();
        } else {
            echo "Error al eliminar el producto: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Error en la preparación de la consulta: " . $conn->error;
        $conn->close();
    }
    } 
} 
?>
