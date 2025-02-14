<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $conn->query("UPDATE usuarios SET nombre='$nombre' WHERE id=$id");
    header("Location: index.php");
}
?>
