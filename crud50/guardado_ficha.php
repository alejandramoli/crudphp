<?php
error_reporting(0);
include ('funciones.php');
    $vnombre=$_POST['nombre'];
    $vprogra=$_POST['programa'];

    $conexion=conectar_bd('localhost', 'root', '', 'sena_bd' );
    $resultado=consulta($conexion,"insert into ficha( ficha_numero,ficha_programa )values('{$vnombre}','{$vprogra}')");

    if ($resultado)
    {
        echo"guardado exitoso";
    }
?>