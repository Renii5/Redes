// traeBinario.php
<?php
include 'conexion.php'; // Asegúrate de incluir tu conexión a la base de datos

$campo = $_POST['campo'];

// Asegúrate de que el campo no esté vacío antes de realizar la consulta
if (!empty($campo)) {
    $sql = "SELECT * FROM tuTabla WHERE Titulo LIKE '%$campo%'"; // Ajusta según tu tabla
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row['Id'] . "</td>
                    <td>" . $row['Titulo'] . "</td>
                    <td>" . $row['Album'] . "</td>
                    <td>" . $row['Artista'] . "</td>
                    <td>" . $row['Genero'] . "</td>
                    <td>" . $row['Lanzamiento'] . "</td>
                    <td><button onclick='modificarRegistro(" . $row['Id'] . ")'>Modificar</button></td>
                    <td><button onclick='eliminarRegistro(" . $row['Id'] . ")'>Eliminar</button></td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='8'>No hay datos disponibles.</td></tr>";
    }
} else {
    echo "<tr><td colspan='8'>Por favor ingresa un valor para buscar.</td></tr>";
}
$conn->close();
