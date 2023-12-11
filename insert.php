<?php

include 'conexion.php';

global $conexion;
global $tabla;

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$mail=$_POST['nombre'].".".$_POST['apellido']."@gmail.com";
$tema=$_POST['tema'];
date_default_timezone_set('America/Argentina/Buenos_Aires');
$tiempo=date("Y-m-d H:i:s");

if(isset($_POST)){
    $insertar = "INSERT INTO `$tabla` (`nombre`, `apellido`, `mail`, `tema`, `fecha_alta`) VALUES ('$nombre','$apellido','$mail','$tema',CURRENT_TIMESTAMP)";
    if($conexion->query($insertar)===TRUE){
        include 'consulta.php';
        echo '<h2>REGISTRO AÑADIDO EXITOSAMENTE</h2>';
    } else {
        echo 'ERROR ' . $conexion->error;
    };
} else {
    echo 'NO EXISTE POST';
    echo $_POST;
}

?>