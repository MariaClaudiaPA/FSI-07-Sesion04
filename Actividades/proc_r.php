<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "s4a1";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

$fechaIngreso = $_POST['fechaIngreso'];
$noche = $_POST['noche'];
$habitacion = $_POST['habitacion'];
$huespedes = $_POST['huespedes'];

$sql = "INSERT INTO reservas (fechaingreso, noches, habitacion, huespedes) VALUES ('$fechaIngreso', '$noche', '$habitacion', '$huespedes')";

if ($conn->query($sql) === TRUE) {
    // Guardar datos en la sesión
    $_SESSION['nombreReserva'] = $_POST['nombreReserva'];
    $_SESSION['id_usuario'] = $_POST['id_usuario'];
    $_SESSION['fechaIngreso'] = $fechaIngreso;
    $_SESSION['noche'] = $noche;
    $_SESSION['habitacion'] = $habitacion;
    $_SESSION['huespedes'] = $huespedes;

    // Redirigir al usuario a la página de confirmación
    header("Location: confirmacion.php");
    exit();
} else {
    echo "Error al realizar la reserva: " . $conn->error;
}

$conn->close();
?>
