<?php

include 'conexion.php';
global $conexion;
global $tabla;

if(isset($_GET['id'])){
    $id_orador=$_GET['id'];
}

if(isset($_POST)){
    $eliminar = "DELETE FROM `$tabla` WHERE id_orador = $id_orador";
    $conexion->query($eliminar);
}
include 'consulta.php';
?>