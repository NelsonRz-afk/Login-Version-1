<?php
$servidor = 'localhost';
$usuario = 'root';
$password = '';
$base_datos = 'registros';
$conexion = new mysqli($servidor, $usuario, $password,
$base_datos);
if ($conexion->connect_error) {
die('Error de conexi´on: ' . $conexion->connect_error);
}
?>
