<!doctype thml>
<html>
    <head>
        <title>Modificacion  de Aprendices</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="css/bootstrap.min.css" rel="stylesheet"/>
        <link href="miscss.css" rel="stylesheet"/>
        <script src="js/bootstrap.js"></script>
    </head>
    <body>
    <div id="divconsulta"class="container">
    <br>
    <div id="div2">
       <div id="div4">
       <from name="formulario"role="from"method="post">
           <div class="col-md-12">
              <strong class="lgris">Ingrese criterio de busqueda</strong>
              <br><br>
              <div class="form-row">
            <div class="form-group col-md-5">
            <input class="from-control"type="number"name="numid" min="9999"max="9999999999999" value="" placeholder="IDENTIFICACION"/>
            <div class="form-group col-md-3">
              <input class="btn btn-primary"type="submit"value="Consultar"/>
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
        session_start();
        $miconexion=conectar_bd('1234','sena_bd');
        $resultado=Consulta($miconexion, "select * from aprendices where Apre_Numid='{$vnumid}'");
        if($resultado->num_rows>0)
          { 
          $fila=$resultado->fetch_object();
          $_SESSION['ide1']=$fila->Apre_id;
           ?>
        <from id="formulario2" role="form" method="post" action="actualizar_aprendiz.php">
            <div class="col-md-12">
               <strong class="lgris">Datos del aprendiz </strong><br>
                 <label class="lgris">Id:</label>
                 <input class="form-control" type="text"  name="ide" disabled="disabled" value="<?php echo $fila->Apre_id ?>" />
                 <label class="lgris">Nombres:</label>
                 <input class="form-control" style="text-transfrom:uppercase;" type="text" name="Nombres"  required value="<?php echo $fila->Apre_Nombres ?>"/>
                 <label class="lgris">Apellidos:</label>
                 <input class="form-control" style="text-transfrom:uppercase;" type="text" name="apellidos" value="<?php echo $fila->Apre_Apellidos ?>"required/>
                 <label class="lgris">Direccion:</label>
                 <input class="form-control" style="text-transfrom:uppercase;" type="text" name="direccion" value="<?php echo $fila->Apre_Direccion ?>" require/>
                 <label class="lgris">Telefono:</label>
                 <input class="form-control"  type="number" name="telefono"  min="9999" max="9999999999999" value="<?php echo $fila->Apre_Telefono ?>" require/>
                 <br>
                 <input class="btn btn-primary" type="submit" value="Actualizar">
                 <br>
                </div>
               </form>
               <?php
            }
            else{
                echo "No existen registros";
                }  
            $miconexion->close();
            }?>
           </div>
           </div>
         </div>
       <body>
      <html>          

      