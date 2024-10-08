<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Simular un tiempo de espera (2 segundos)
    sleep(2);

    // Recoger los datos enviados desde el formulario de libros
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $isbn = $_POST['isbn'];

    // Crear un array para simular la respuesta en JSON
    $response = array(
        'titulo' => $titulo,
        'autor' => $autor,
        'isbn' => $isbn
    );

    // Devolver la respuesta en formato JSON
    echo json_encode($response);
}
?>
