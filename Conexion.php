<?php
// Datos de conexión
$anfitrion = "localhost";
$usuario = "root";
$contrasena = "";
$base_datos = "Tarea13_02";

// Crear conexión
$conn = new mysqli($anfitrion, $usuario, $contrasena, $Tarea13_02);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
