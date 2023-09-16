<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Confirmación de Registro y Reserva de Hotel</title>
    <link rel="stylesheet" type="text/css" href="estilo.css">
</head>

<body>
    <div class="container">
        <div class="confirmacion">
            <h1>Confirmación de Registro y Reserva</h1>
            <h2>Datos del Usuario:</h2>
            <?php
            if (isset($_SESSION['nombres'])) {
                echo "Nombres: " . $_SESSION['nombres'] . "<br>";
                echo "Apellidos: " . $_SESSION['apellidos'] . "<br>";
                echo "DNI: " . $_SESSION['dni'] . "<br>";
                echo "Celular: " . $_SESSION['celular'] . "<br>";
            }
            ?>

            <h2>Datos de la Reserva:</h2>
            <?php
            if (isset($_SESSION['nombreReserva'])) {
                echo "Nombre de la Reserva: " . $_SESSION['nombreReserva'] . "<br>";
                echo "ID de Usuario: " . $_SESSION['id_usuario'] . "<br>";
                echo "Fecha de Ingreso: " . $_SESSION['fechaIngreso'] . "<br>";
                echo "Noches: " . $_SESSION['noche'] . "<br>";
                echo "Habitación: " . $_SESSION['habitacion'] . "<br>";
                echo "Huéspedes: " . $_SESSION['huespedes'] . "<br>";
            }
            ?>
        </div>
    </div>
</body>

</html>

