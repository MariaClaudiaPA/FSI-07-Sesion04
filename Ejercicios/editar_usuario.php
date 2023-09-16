<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Usuario</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container">
        <h2>Editar Usuario</h2>
        <?php
        require_once "conexion.php";
        
        if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
            $id = $_GET["id"];
            
            $sql = "SELECT * FROM usuario WHERE id = $id";
            $result = $conn->query($sql);
            
            if ($result->num_rows == 1) {
                $row = $result->fetch_assoc();
        ?>
                <form action="actualizar_usuario.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $row["nombre"]; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="dni">DNI:</label>
                        <input type="text" class="form-control" id="dni" name="dni" value="<?php echo $row["dni"]; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="edad">Edad:</label>
                        <input type="number" class="form-control" id="edad" name="edad" value="<?php echo $row["edad"]; ?>" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </form>
        <?php
            } else {
                echo "Usuario no encontrado.";
            }
        } else {
            echo "Parámetros inválidos.";
        }
        
        $conn->close();
        ?>
    </div>
</body>
</html>
