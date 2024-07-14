<?php
include ('../Conexion/config.php');

$name = $_POST['name'];
$email = $_POST['email'];

$sql = "INSERT INTO clientes (name, email) VALUES ('$name', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso";
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>
<br>
<br>
<br>
<br>
<br>

<a href="../index.html" class="btn btn-danger"><span>Regresar</span></a>