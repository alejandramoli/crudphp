<!doctype thml>
<html>
    <head>
        <title>Eliminacion de Aprendices</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="css/bootstrap.min.css" rel="stylesheet"/>
        <link href="miscss.css" rel="stylesheet"/>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
      <div id="divconsulta" class="container">
        <br>
        <div id="div2">
          <div id="div4">
            <from name="formulario" role="from" method="post">
            <div class="col-md-12">
              <strong class="lgris">Ingrese criterio de busqueda</strong>
              <br><br>
              <div class="form-row">
              <div class="form-group col-md-5">
              <input class="from-control" type="number" name="numid" min="9999" max="9999999999999" value="" placeholder="IDENTIFICACION"/>
              </div>
              <div class="form-group col-md-3">
              <input class="btn btn-primary" type="submit" value="Eliminar"/>
            </div>
          </div>
             <br>
        </div>
        </from>
        <br>
      </div>
      <div id="divconsulta2">
      <?php
      if ($_SERVER['REQUEST_METHOD']==='POST')
      {
          include('funciones.php');
          $vnumid=$_POST['numid'];
          $conexion=conectar_bd('1234','sena_bd');
          $resultado=Consulta($conexion, "select * from aprendices where Apre_Numid='{$vnumid}'");
          if($resultado->num_rows>0)
      {
      $fila=$resultado->fetch_object();
      echo $fila->Apre_id." ".$fila->apre_tipoid." ".$fila->apre_numid." ".$fila->apre_nombre." ".$fila->apre_apellidos." ".$fila->apre_direccion." ".$fila->apre_telefono." ".$fila->apre_ficha."<br>";
      if($resultado2)
      echo "<br> Datos borrados exitosamente";
    }
   else{
       echo "No existen registros";
       } 
    $conexion->close();
    }?>
   </div>
   </div>
  </div>
 </body>
</html>  





