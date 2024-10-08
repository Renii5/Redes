<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['clave']) && !empty($_POST['clave'])) {
        $clave = $_POST['clave'];

        $md5 = md5($clave);
        $sha1 = sha1($clave);

        $result = [
            'clave' => $clave,
            'md5' => $md5,
            'sha1' => $sha1
        ];

        sleep(2); 

        header('Content-Type: application/json');
        echo json_encode($result);
    } else {
        header('Content-Type: application/json');
        echo json_encode(['error' => 'Por favor, introduce una clave válida']);
    }
} else {
    header('Content-Type: application/json');
    echo json_encode(['error' => 'Método no permitido']);
}
?>
