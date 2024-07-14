<?php
include ('../Conexion/config.php');

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM administradores WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Inicio de sesión exitoso
    echo "Inicio de sesión exitoso";
    // Redirigir a la página de administración
    header("Location: ../Vistas/pagina_principal.php");
} else {
    echo "Nombre de usuario o contraseña incorrectos.";
}
$conn->close();

?>

<br>
<br>
<br>
<br>
<br>

<a href="../index.html" class="btn btn-danger"><span>Regresar</span></a>