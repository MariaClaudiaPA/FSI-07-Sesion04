<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>CRUD Usuarios y Libros</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container">
        <h2>Usuarios</h2>
        <a href="crear_usuario.php" class="btn btn-primary">Crear Usuario</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>DNI</th>
                    <th>Edad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once "conexion.php";
                
                $sql = "SELECT * FROM usuario";
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["nombre"] . "</td>";
                        echo "<td>" . $row["dni"] . "</td>";
                        echo "<td>" . $row["edad"] . "</td>";
                        echo "<td>";
                        echo "<a href='editar_usuario.php?id=" . $row["id"] . "' class='btn btn-warning'>Editar</a>";
                        echo "<a href='eliminar_usuario.php?id=" . $row["id"] . "' class='btn btn-danger'>Eliminar</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>No se encontraron usuarios.</td></tr>";
                }
                ?>
            </tbody>
        </table>
        
        <h2>Libros</h2>
        <a href="crear_libro.php" class="btn btn-primary">Crear Libro</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Autor</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM libros";
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["nombre"] . "</td>";
                        echo "<td>" . $row["autor"] . "</td>";
                        echo "<td>";
                        echo "<a href='editar_libro.php?id=" . $row["id"] . "' class='btn btn-warning'>Editar</a>";
                        echo "<a href='eliminar_libro.php?id=" . $row["id"] . "' class='btn btn-danger'>Eliminar</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No se encontraron libros.</td></tr>";
                }
                
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
