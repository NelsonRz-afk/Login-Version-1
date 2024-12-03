<?php
$servidor = 'localhost';
$usuario = 'root';
$contrase~na = '';
$base_datos = 'registros';
$conexion = new mysqli($servidor, $usuario, $contrase~na,
$base_datos);
if ($conexion->connect_error) {
die('Error de conexi´on: ' . $conexion->connect_error);
}
?>