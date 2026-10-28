<?php
$servidor = "localhost";
$usuario = "root"; // Visto en tu phpMyAdmin
$password = "";     // Sin contraseña por defecto
$bd = "tienda_bd";

$conexion = mysqli_connect($servidor, $usuario, $password, $bd);

if (!$conexion) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}
?>