<?php

include 'conexion.php';
global $conexion;
global $tabla;

if(isset($_POST['id_orador'])){
    $id_orador=$_POST['id_orador'];
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $mail=$_POST['correo'];
    $descripcion=$_POST['descripcion'];
} else {
    echo '<h3>VARIABLE id_orador INEXISTENTE: '.$id_orador.'</h3>';
}

$actualizar="UPDATE `$tabla` SET `nombre`='$nombre', `apellido`='$apellido', `mail`='$mail', `tema`='$descripcion', `fecha_alta`= CURRENT_TIMESTAMP WHERE `$tabla`.`id_orador`=$id_orador";

if(isset($_POST)){
    if($conexion->query($actualizar)){
        include 'consulta.php';
    }
}

?>