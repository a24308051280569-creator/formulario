<?php
include("conexion.php");

$cliente = $_POST['cliente_nombre'];
$producto = $_POST['producto_nombre'];
$cantidad = $_POST['cantidad'];
$direccion = $_POST['direccion'];

$query = "INSERT INTO pedidos (cliente_nombre, producto_nombre, cantidad, direccion) 
          VALUES ('$cliente', '$producto', '$cantidad', '$direccion')";

if (mysqli_query($conexion, $query)) {
    echo "<h2>¡Pedido guardado con éxito!</h2>";
    echo "<a href='index.html'>Volver a la tienda</a>";
} else {
    echo "Error al realizar el pedido: " . mysqli_error($conexion);
}
?>