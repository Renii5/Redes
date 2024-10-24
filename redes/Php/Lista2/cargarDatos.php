<?php
$dbname = "bknxvwcgeec1sjkbbr9p"; // Cambia por el nombre de tu base de datos
$host = "bknxvwcgeec1sjkbbr9p-mysql.services.clever-cloud.com"; // Cambia por el host (localhost o URL del servidor)
$user = "uvwfqq2hopldsq3w"; // Cambia por el nombre de usuario de la base de datos
$password = "gUKx78dzdU2QB0AxhC1x"; // La contraseña que te proporcionaron

$conn = new mysqli($host, $user, $password, $dbname);

sleep(3);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta a la base de datos
$sql = "SELECT Id, Lanzamiento, Titulo, Album, Artista, Genero FROM musica"; // Cambia 'musica' por el nombre de tu tabla
$result = $conn->query($sql);

// Verificar si la consulta fue exitosa
if ($result === false) {
    die("Error en la consulta: " . $conn->error);
}

// Verificar si hay resultados
if ($result->num_rows > 0) {
    // Salida de cada fila en formato HTML
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['Id'] . "</td>
                <td>" . $row['Lanzamiento'] . "</td>
                <td>" . $row['Titulo'] . "</td>
                <td>" . $row['Album'] . "</td>
                <td>" . $row['Artista'] . "</td>
                <td>" . $row['Genero'] . "</td>
                <td><button onclick='modificarRegistro(" . $row['Id'] . ")'>Modificar</button></td>
                <td><button onclick='eliminarRegistro(" . $row['Id'] . ")'>Eliminar</button></td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='8'>No hay datos disponibles</td></tr>";
}

$conn->close();
?>
