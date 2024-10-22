<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Simular una espera de 6 segundos
    sleep(3);

    // Respuesta simulada desde el servidor
    $response = [
        'error' => false,
        'status' => 'success',
        'message' => 'Datos recibidos después de 6 segundos de espera',
        'data' => [
            'titulo' => 'Canción de ejemplo',
            'artista' => 'Artista de ejemplo',
            'album' => 'Álbum de ejemplo',
            'genero' => 'Género de ejemplo',
            'lanzamiento' => 'Fecha de ejemplo',
            'duracion' => 'Duración de ejemplo'
        ]
    ];

    header('Content-Type: application/json');
    echo json_encode($response);
    exit;
} else {
    header('Content-Type: application/json');
    echo json_encode(['error' => 'Método no permitido']);
}
?>
