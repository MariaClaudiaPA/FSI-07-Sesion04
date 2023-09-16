<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Usuario</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container">
        <h2>Crear Usuario</h2>
        <form action="guardar_usuario.php" method="POST">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="dni">DNI:</label>
                <input type="text" class="form-control" id="dni" name="dni" required>
            </div>
            <div class="form-group">
                <label for="edad">Edad:</label>
                <input type="number" class="form-control" id="edad" name="edad" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</body>
</html>
