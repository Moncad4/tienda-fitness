<?php
require_once(__DIR__.'/../database/DB.php');

$database = new Database();
$conn = $database->getConnection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['product_id'])) {
        $product_id = intval($_POST['product_id']);

        $query = "DELETE FROM product WHERE product_id = ?";
        $stmt = $conn->prepare($query);

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
        }
    } else {
        echo "ID del producto no proporcionado.";
    }
} else {
    echo "Método de solicitud no válido.";
}

$conn->close();
?>
