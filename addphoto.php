<?php
require_once('ning-api-php/src/NingApi.php');

$parts = array(
    "title" => "Titulo Foto",
    "description" => "Descripcion Foto",
    "file" => "@/Users/devin/Pictures/",
    );
    
// Crear una nueva foto
    $resultado = NingApi::instance()->photo->create($parts);
    
    print_r($resultado);
?>