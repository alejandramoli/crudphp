<?php
include('funciones_php');
session_start();
$vide=$_SESSION['ide1'];
$vnombres=$_POST['nombres'];
$Vapellidos=$_POST['apellidos'];
$vtelefono=$_POST['telefono'];
$vdireccion=$_POST['direccion'];

$miconexion=conectar_bd('', 'sena_bd');
$resultado=consulta($miconexion,"update aprendices set ,apre_nombres='{$vnombres}',apre_apellidos='{$Vapellidos}',apre_direccion='{$vdireccion}',apre_telefono={'$vtelefono}'where Apre-id='{$vide)')");
if($miconexion->affected_rows>0)
 {
    echo " exitosa";
 }
?> 
