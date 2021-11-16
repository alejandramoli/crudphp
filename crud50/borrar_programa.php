<!doctype thml>
<html>
    <head>
        <title>Eliminacion de programa</title>
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
              <div class="form-group cold-md-3">
                <input type="text" class="form-control" name="program" style="text-transform: uppercase;"  value="" placeholder="nombre del programa ">
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
          $vnumid=$_POST['tipo'];
          $conexion=conectar_bd('','sena_bd');
          $resultado=Consulta($conexion, "select * from programa where progra_nombre='{$vnumid}'");
          if($resultado->num_rows>0)
      {
      $fila=$resultado->fetch_object();
      echo $fila->progra_id." ".$fila->progra_nombre." ".$fila->progra_tipo."<br>";
      if($resultado2)
      echo "<br> programa borrado exitosamente";
    }
   else{
       echo "No existe programa";
       } 
    $conexion->close();
    }?>
   </div>
   </div>
  </div>
 </body>
</html>  