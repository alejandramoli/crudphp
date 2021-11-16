<?php
error_reporting(0);
include ('funciones.php');
    $vnombre=$_POST['nombre'];
    $vtipo=$_POST['tipo'];

    $conexion=conectar_bd('localhost', 'root', '', 'sena_bd' );
    $resultado=consulta($conexion,"insert into programa(progra_nombre,progra_tipo  )values('{$vnombre}','{$vtipo}')");

    if ($resultado)
    {
        echo"guardado exitoso";
    }
?>
