<?php
if (isset($_POST['clave'])) {
    $clave = $_POST['clave'];
    
    $claveEncriptadaMd5 = md5($clave);
    $claveEncriptadaSha1 = sha1($clave);
    
    echo json_encode([
        'md5' => $claveEncriptadaMd5,
        'sha1' => $claveEncriptadaSha1
    ]);
}
?>
