<?php
$servidor = "localhost";
$usuario = "root";
$password = "";
$base_datos = "proyecto";

$conexion = mysqli_connect($servidor, $usuario, $password, $base_datos);

// Verificar conexión
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>