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

$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$dni = $_POST['dni'];
$celular = $_POST['celular'];

$sql = "INSERT INTO usuarios (nombres, apellidos, dni, celular) VALUES ('$nombres', '$apellidos', '$dni', '$celular')";

if ($conn->query($sql) === TRUE) {
    // Guardar datos en la sesión
    $_SESSION['nombres'] = $nombres;
    $_SESSION['apellidos'] = $apellidos;
    $_SESSION['dni'] = $dni;
    $_SESSION['celular'] = $celular;

    // Redirigir al usuario a la página de confirmación
    header("Location: confirmacion.php");
    exit();
} else {
    echo "Error al registrar usuario: " . $conn->error;
}

$conn->close();
?>
