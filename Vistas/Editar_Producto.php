<?php
include ('../Conexion/config.php');

$id = $_GET['id'];
$sql = "SELECT * FROM productos WHERE id=$id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    echo "Producto no encontrado";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto</title>
</head>
<body>
    <h1>Editar Producto</h1>
    <form action="update_product.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="product_name">Nombre del Producto:</label>
        <input type="text" id="product_name" name="product_name" value="<?php echo $row['product_name']; ?>" required><br>
        <label for="price">Precio:</label>
        <input type="number" id="price" name="price" value="<?php echo $row['price']; ?>" required><br>
        <button type="submit">Actualizar Producto</button>
    </form>
</body>
</html>
<?php $conn->close(); ?>
