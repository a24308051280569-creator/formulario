<?php
include("conexion.php");

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$password = $_POST['password'];

$query = "INSERT INTO usuarios (nombre, email, password) VALUES ('$nombre', '$email', '$password')";

if (mysqli_query($conexion, $query)) {
    echo "<h2>¡Usuario registrado exitosamente en la base de datos!</h2>";
    echo "<a href='index.html'>Volver a la tienda</a>";
} else {
    echo "Error al registrar: " . mysqli_error($conexion);
}
?>