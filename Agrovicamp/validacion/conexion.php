<?php
$host = "localhost";      // Servidor de XAMPP
$user = "root";           // Usuario por defecto
$password = "";           // Contraseña por defecto
$dbname = "agrovicamp";   // Base de datos creada

// Crear conexión
$conn = new mysqli($host, $user, $password, $dbname);

// Revisar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
