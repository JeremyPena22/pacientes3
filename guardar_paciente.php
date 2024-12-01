<?php
// guardar_paciente.php
include('conexion.php'); // Conectar a la base de datos

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recibir los datos del formulario
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    $sexo = $_POST['sexo'];
    $especialidad = $_POST['especialidad'];

    // Preparar la consulta SQL
    $sql = "INSERT INTO pacientes (nombre, apellido, edad, sexo, especialidad) 
            VALUES ('$nombre', '$apellido', '$edad', '$sexo', '$especialidad')";

    if ($conn->query($sql) === TRUE) {
        echo "Paciente registrado correctamente.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Cerrar la conexión
    $conn->close();
}
?>
