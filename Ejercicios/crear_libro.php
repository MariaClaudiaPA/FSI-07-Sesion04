<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Libro</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container">
        <h2>Crear Libro</h2>
        <form action="guardar_libro.php" method="POST">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="autor">Autor:</label>
                <input type="text" class="form-control" id="autor" name="autor" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</body>
</html>
