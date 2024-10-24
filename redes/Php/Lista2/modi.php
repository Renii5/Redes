<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tu_base_de_datos";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$id = $_POST['id'];
$nuevoValor = $_POST['nuevoValor'];

// Actualizar el registro
$sql = "UPDATE tu_tabla SET titulo='$nuevoValor' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Registro actualizado correctamente.";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
