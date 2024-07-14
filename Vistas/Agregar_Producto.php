<?php
include ('../Conexion/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración</title>
</head>
<body>
    <h1>Administración de Datos</h1>
    <!-- CRUD Operations -->
    <h2>Agregar Producto</h2>
    <form action="./Controladores/Add_producto.php" method="post">
        <label for="product_name">Nombre del Producto:</label>
        <input type="text" id="product_name" name="product_name" required><br>
        <label for="price">Precio:</label>
        <input type="number" id="price" name="price" required><br>
        <button type="submit">Agregar Producto</button>
    </form>

    <h2>Listado de Productos</h2>
    <?php
    $sql = "SELECT * FROM productos";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table><tr><th>ID</th><th>Nombre</th><th>Precio</th><th>Acciones</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["id"]. "</td><td>" . $row["product_name"]. "</td><td>" . $row["price"]. "</td>";
            echo "<td><a href='edit_product.php?id=" . $row["id"] . "'>Editar</a> | <a href='delete_product.php?id=" . $row["id"] . "'>Eliminar</a></td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 resultados";
    }
    $conn->close();
    ?>
</body>
</html>
