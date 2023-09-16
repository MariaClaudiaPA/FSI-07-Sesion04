<!DOCTYPE html>
<html>

<head>
    <title>Registro y Reserva de Hotel</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>

<body>
    <div class="container">
        <div class="formulario">
            <h1>Registro de Usuario</h1>
            <img src="logo.jpg" alt="Imagen de Usuario" width="500" height="270">
            <form action="proc.php" method="post">
                <div class="nombres-apellidos">
                    <div>
                        <label for="nombre">Nombres:</label>
                        <input type="text" id="nombre" name="nombres" required><br><br>
                    </div>
                    <div>
                        <label for="apellidos">Apellidos:</label>
                        <input type="text" id="apellidos" name="apellidos" required>
                    </div>
                </div>

                <div class="dni-celular">
                    <div>
                        <label for="dni">DNI:</label>
                        <input type="text" id="dni" name="dni" required>
                    </div>
                    <div>
                        <label for="celular">Celular:</label>
                        <input type="text" id="celular" name="celular" required>
                    </div>
                </div>

                <input type="submit" value="Registrarse">
            </form>
        </div>
    </div>
    <div class="container">
        <div class="formulario">
            <h1>Reserva de Hotel</h1>
            <img src="logo.jpg" alt="Imagen de Usuario" width="300" height="250">
            <form action="proc_r.php" method="post">
                <div class="nombre-id">
                    <label for="nombreReserva">Nombre:</label>
                    <input type="text" id="nombreReserva" name="nombreReserva" required><br><br>
                </div>

                <div class="nombre-id">
                    <label for="id_usuario">ID de Usuario:</label>
                    <input type="text" id="id_usuario" name="id_usuario" required>
                </div>

                <div class="fecha-noche">
                    <label for="fechaIngreso">Fecha de Ingreso:</label>
                    <input type="date" id="fechaIngreso" name="fechaIngreso" required><br><br>

                    <label for="noche">Noches:</label>
                    <input type="number" id="noche" name="noche" required>
                </div>

                <div class="habitacion-huespedes">
                    <label for="habitacion">Habitación:</label>
                    <input type="text" id="habitacion" name="habitacion" required>


                    <label for="huespedes">Huéspedes:</label>
                    <input type="number" id="huespedes" name="huespedes" required>
                </div>

                <input type="submit" value="Reservar">
            </form>
        </div>

    </div>
    
</body>

</html>