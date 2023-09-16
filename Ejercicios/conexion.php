<?php
$servidor = "localhost";
$database = "ejercicios";
$usuario = "root";
$clave = "";

// Crear una conexión a la base de datos
$conn = new mysqli($servidor, $usuario, $clave, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexion falló: " . $conn->connect_error);
}

?>