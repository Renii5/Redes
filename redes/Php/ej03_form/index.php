<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    sleep(2);

    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $isbn = $_POST['isbn'];
    $genero = $_POST['genero'];
    $fecha = $_POST['fecha'];

    $response = array(
        'titulo' => $titulo,
        'autor' => $autor,
        'isbn' => $isbn,
        'genero' => $genero,
        'fecha' => $fecha
    );

    echo json_encode($response);
}
?>
