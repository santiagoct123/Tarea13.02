<?php
include 'conexion.php';
$id = $_GET["id"];
$resultado = $conn->query("SELECT * FROM usuarios WHERE id = $id");
$fila = $resultado->fetch_assoc();
?>

<form action="actualizar.php" method="POST">
    <input type="hidden" name="id" value="<?= $fila['id'] ?>">
    <input type="text" name="nombre" value="<?= $fila['nombre'] ?>" required>
    <button type="submit">Actualizar</button>
</form>
