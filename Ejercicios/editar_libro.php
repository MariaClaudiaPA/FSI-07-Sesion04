<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Libro</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container">
        <h2>Editar Libro</h2>
        <?php
        require_once "conexion.php";
        
        if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
            $id = $_GET["id"];
            
            $sql = "SELECT * FROM libros WHERE id = $id";
            $result = $conn->query($sql);
            
            if ($result->num_rows == 1) {
                $row = $result->fetch_assoc();
        ?>
                <form action="actualizar_libro.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $row["nombre"]; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="autor">Autor:</label>
                        <input type="text" class="form-control" id="autor" name="autor" value="<?php echo $row["autor"]; ?>" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </form>
        <?php
            } else {
                echo "Libro no encontrado.";
            }
        } else {
            echo "Parámetros inválidos.";
        }
        
        $conn->close();
        ?>
    </div>
</body>
</html>
