<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <?php
    include './conexion.php';
    verBaseDeDatos();
    function verBaseDeDatos()
    {
        global $conexion;
        global $tabla;
        $consulta = "SELECT * FROM $tabla";
        $resultado = $conexion->query($consulta);
    ?>
        <table class="table">
            <thead>
                <tr>
                    <?php
                    if ($resultado->num_rows > 0) {
                        $filas = $resultado->fetch_assoc();
                        foreach ($filas as $key => $value) {
                    ?>
                            <th scope="col"><?php echo $key ?></th>
                        <?php
                        }
                        ?>
                </tr>
            </thead>
            <tbody>
                <?php
                        do {
                            echo '<tr>';
                            foreach($filas as $key => $value) {
                                if($key === 'id_orador') {
                                    echo '<th scope="row">' . $value . '</th>';
                                } else {
                                    echo '<td>'.$value.'</td>';
                                }
                            }
                            echo '<td>';
                            ?>
                            <a href="edit.php?id=<?php echo $filas['id_orador']?>">EDITAR</a>
                            <a href="delete.php?id=<?php echo $filas['id_orador']?>">ELIMINAR</a>
                            <?php
                            echo '<td>';
                            echo '</tr>';
                        } while ($filas = $resultado->fetch_assoc());
                    }
                }

        ?>

            </tbody>
        </table>

        <?php
        echo '<a href="./index.php">Regresar</a>';
        ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>