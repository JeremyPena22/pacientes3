<?php
// eliminar_paciente.php
include('conexion.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Eliminar el paciente de la base de datos
    $sql = "DELETE FROM pacientes WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Paciente eliminado correctamente.";
    } else {
        echo "Error al eliminar el paciente: " . $conn->error;
    }

    // Redirigir de vuelta a la página de pacientes
    header("Location: ver_pacientes.php");
}

$conn->close();
?>
