<?php

include 'conexion.php';
global $conexion;
global $tabla;

if(isset($_POST)){
    include 'consulta.php';
    //echo '<h3>Cargando el archivo consulta.php</h3>';
} else {
    echo 'ERROR FATAL no se pudo cargar el archivo consulta.php';
}
if(isset($_GET['id'])){
    $id_orador=$_GET['id'];
    //echo '<h3>Cargada la variable id_orador '.$id_orador.'</h3>';
} else {
    echo 'No se encuentra la variable id_orador';
}

$consulta_edit="SELECT id_orador,nombre,apellido,mail,tema,fecha_alta FROM $tabla WHERE id_orador=$id_orador";

$resultado=$conexion->query($consulta_edit);


if($resultado->num_rows==1){
    $fila=$resultado->fetch_assoc();
    $nombre=$fila['nombre'];
    $apellido=$fila['apellido'];
    $correo=$fila['mail'];
    $descripcion=$fila['tema'];
}

if(isset($id_orador)){
    $id_orador=$id_orador;
}

?>

<form action="updated.php" method="post">
    <div>
        <input type="text" name="id_orador" value="<?php echo $id_orador?>" hidden>
        <label for="">Nombre:</label>
    </div>
    <div>
        <input type="text" name="nombre" id="" value="<?php echo $nombre?>">
    </div>
    <div>
        <label for="">Apellido:</label>
    </div>
    <div>
        <input type="text" name="apellido" id="" value="<?php echo $apellido?>">
    </div>
    <div>
        <label for="">Correo:</label>
    </div>
    <div>
        <input type="email" name="correo" id="" value="<?php echo $correo?>">
    </div>
    <div>
        <label for="">Descripcion:</label>
    </div>
    <div>
        <textarea name="descripcion" id="" cols="30" rows="10"><?php echo $descripcion?></textarea>
    </div>
    <div>
        <input type="submit" value="Editar">
        <input type="button" value="Cancelar" style="margin-left: 10px;" onclick="window.location.href='consulta.php'";>
    </div>
</form>