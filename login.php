<?php
include("conexion.php");

$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM usuarios WHERE email='$email' AND password='$password'";
$resultado = mysqli_query($conexion, $query);

if (mysqli_num_rows($resultado) > 0) {
    echo "<h2>¡Bienvenido! Has iniciado sesión correctamente.</h2>";
    echo "<a href='index.html'>Volver a la tienda</a>";
} else {
    echo "<h2>Correo o contraseña incorrectos.</h2>";
    echo "<a href='index.html'>Intentar de nuevo</a>";
}
?>