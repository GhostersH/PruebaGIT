<?php
 
function conectarDB() : mysqli {
    $db = mysqli_connect('localhost', 'root', 'root', 'carsell_crud');
    $db->set_charset("utf8");
 
    if(!$db) {
        echo "Error no se pudo conectar";
        exit;
    } 
 
    return $db;
}