<?php
require_once "conexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $dni = $_POST["dni"];
    $edad = $_POST["edad"];

    $sql = "INSERT INTO usuario (nombre, dni, edad) VALUES ('$nombre', '$dni', $edad)";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
