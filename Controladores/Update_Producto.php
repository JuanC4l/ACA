<?php
include ('../Conexion/config.php');

$id = $_POST['id'];
$product_name = $_POST['product_name'];
$price = $_POST['price'];

$sql = "UPDATE productos SET product_name='$product_name', price='$price' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Producto actualizado exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
