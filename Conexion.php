<?php
// Conexion.php
$servername = "localhost";
$username = "root";  // Ajusta con tu usuario de la base de datos
$password = "";      // Ajusta con tu contraseña de la base de datos
$dbname = "gestion_pacientes";  // Nombre de la base de datos

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname); 

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
