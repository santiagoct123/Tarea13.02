<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $conn->query("INSERT INTO usuarios (nombre) VALUES ('$nombre')");
    header("Location: index.php");
}
?>
