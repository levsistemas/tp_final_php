<?php

$servidor='localhost';
$usuario='root';
$credenciales='';
$base_de_datos='integrador_cac';
$puerto=3399;
$tabla='oradores';

$conexion= new mysqli($servidor,$usuario,$credenciales,$base_de_datos,$puerto);

if($conexion->connect_error){
    echo 'Error al conectarse a la base de datos'; 
} else {
    //echo '<h1>CONEXION EXITOSA</h1>';
}

?>