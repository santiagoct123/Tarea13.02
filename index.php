<?php include 'conexion.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>CRUD en PHP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <h2 class="text-center">CRUD en PHP con MySQL</h2>

    <!-- Formulario para agregar usuario -->
    <form action="crear.php" method="POST" class="mb-3">
        <input type="text" name="nombre" placeholder="Nombre" class="form-control" required>
        <button type="submit" class="btn btn-success mt-2">Agregar</button>
    </form>

    <!-- Tabla para mostrar usuarios -->
    <table class="table table-bordered">
        <thead>
            <tr><th>ID</th><th>Nombre</th><th>Acciones</th></tr>
        </thead>
        <tbody>
            <?php
            $resultado = $conn->query("SELECT * FROM usuarios");
            while ($fila = $resultado->fetch_assoc()) {
                echo "<tr>
                        <td>{$fila['id']}</td>
                        <td>{$fila['nombre']}</td>
                        <td>
                            <a href='editar.php?id={$fila['id']}' class='btn btn-warning'>Editar</a>
                            <a href='eliminar.php?id={$fila['id']}' class='btn btn-danger'>Eliminar</a>
                        </td>
                      </tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
