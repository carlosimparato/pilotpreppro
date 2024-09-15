<?php
$servidor = 'localhost'; // Cambia si tu servidor no está en localhost
$usuario = 'root';       // Cambia si tu usuario de MySQL es diferente
$contrasena = '';        // Cambia si tienes una contraseña para MySQL
$base_datos = 'login_register_db'; // Cambia por tu nombre de base de datos

$conexion = mysqli_connect($servidor, $usuario, $contrasena, $base_datos);

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>
