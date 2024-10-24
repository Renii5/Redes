<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tu_base_de_datos";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Recibir datos del formulario de alta (puedes implementar un formulario aparte para esto)
$titulo = $_POST['titulo'];
$album = $_POST['album'];
$artista = $_POST['artista'];
$genero = $_POST['genero'];
$lanzamiento = $_POST['lanzamiento'];

// Insertar en la base de datos
$sql = "INSERT INTO tu_tabla (titulo, album, artista, genero, lanzamiento) 
        VALUES ('$titulo', '$album', '$artista', '$genero', '$lanzamiento')";

if ($conn->query($sql) === TRUE) {
    echo "Registro insertado correctamente.";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
