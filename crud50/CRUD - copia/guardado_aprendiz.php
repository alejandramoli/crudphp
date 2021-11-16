<?php
include('funciones.php');
$vtipoid=$_POST['tipoid'];
$vnumid=$_POST['numid'];
$vnombres=$_POST['nombres'];
$Vapellidos=$_POST['apellidos'];
$vtelefono=$_POST['telefono'];
$vficha=$_POST['ficha'];
$vdireccion=$_POST['direccion'];

$conexion=conectar_bd('', 'sena_bd');
$resultado=consulta($conexion,"insert into aprendices(apre_tipoid,apre_numid,apre_nombres,apre_apellidos,apre_direccion,apre_telefono, apre_ficha) values('{$vtipoid}','{$vnumid}','{$vnombres}','{$Vapellidos}','{$vdireccion}','{$vtelefono}','{$vficha}')");
if($resultado)
 {
    echo "Guardado exitoso";
 }
?> 
