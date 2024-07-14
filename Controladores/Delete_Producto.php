<?php
include ('../Conexion/config.php');

$id = $_GET['id'];

$sql = "DELETE FROM productos WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Producto eliminado exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
