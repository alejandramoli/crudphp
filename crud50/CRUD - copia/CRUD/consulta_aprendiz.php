<!doctype thml>
<html>
    <head>
        <title>Consulta de Aprendices</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="css/bootstrap.min.css" rel="stylesheet"/>
        <link href="miscss.css" rel="stylesheet"/>
        <script src="js/bootstrap.js"></script>
    </head>
    <body>
    <div id="divconsulta" class="container">
    <br>
    <div id="div2">
     <div id="div4">
           <from name="formulario"role="from"method="post">
           <div class="col-md-12">
              <strong class="lgris">Ingrese criterio de busqueda</strong>
              <br><br>
              <div class="from-row">
              <div class="form-group col-md-3">
              <input class="from-control"type="number"name="numid" min="9999"max="9999999999999" value="" placeholder="IDENTIFICACION"/>
              </div>
              <div class="form-group col-md-3">
              <input class="form-control"style="text-transform:uppercase;"type="text"name="nombres"value=""placeholder="Nombres"/>
              </div>
              <div class="form-group col-md-3">
              <input class="form-control"style="text-transform:uppercase;"type="text"name="apellidos"value=""placeholder="Apellidos"/>
              </div>
              <div class="form-group col-md-3">
              <input class="form-control"type="submit"value="Consultar"/>
              </div>
            </div>
            <br>
        </div>
    </from> 
    <br>
   </div>

   <div id="divconsulta2">
   <?php
   if($_SERVER['REQUEST_METHOD']==='POST')
   {
       include('funciones.php')
       $vnumid=$_POST['numid'];
       $vnombres=$_POST['nombres'];
       $Vapellidos=$_POST['apellidos'];
       $miconexion=conectar_bd('','sena_bd');
       $resultado=Consulta($miconexion, "select * from aprendices where trim(APRE_Numid) like '%{$Vapellidos}%' and (trim(Apre_Nombres) like'%{$vnombres}%'and trim(Apre_Apellidos)like'%{$Vapellidos}%')");
       if($resultado->num_rows>0)
       {
           echo $fila->Apre_id." ".$fila->Apre_Tipoid." ".$fila->Apre_Numid." ".$fila->Apre_Nombre." ".$fila->Apre_Apellidos." ".$fila->Apre_Direccion." ".$fila->Apre_Telefono." ".$fila->Apre_ficha."<br>";
       }
   }
   else{
       echo "No existe registros";
   }
   $miconexion->close();
}?>
   </div>
  </div>
</div>
</body>
</html>