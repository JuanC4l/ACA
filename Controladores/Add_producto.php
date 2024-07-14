<?php
include ('../Conexion/config.php');

$product_name = $_POST['product_name'];
$price = $_POST['price'];

$sql = "INSERT INTO productos (product_name, price) VALUES ('$product_name', '$price')";

if ($conn->query($sql) === TRUE) {
    echo "Producto agregado exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
