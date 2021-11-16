<!doctype thml>
<html>
    <head>
        <title>Registro de Aprendices</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="css/bootstrap.min.css" rel="stylesheet"/>
        <link href="miscss.css" rel="stylesheet"/>
        <script src="js/bootstrap.js"></script>
    </head>
    <body>
        <div id="div1" class="container">
        <br>
        <div di="div2">
        <?php session_start(); if(!empty($_SESSION['Tipo_usuario'])){?> <img src="IMAGENES/banner.png"> <?php} ?>
        <div id="div3">
        <?php
        if($_SESSION['Tipo_usuario']=='ADMINSTRADOR')
        {
            ?>
            <from id="formulario" role="from" method="post" action="guardado_aprendiz.php">
            <div class="col-md-12">
               <strong class="lgris">Ingrese los datos del aprendiz </strong>
               <br>
               <label class="lgris">Identificacion:</label>
               <div class="form-row">
               <div class="form-group col-xs-2">
               <selecte class="from-control" name="tipoid">
               <option value="CC" selected>CC</option>
               <option value="TI">TI</option>
               <option value="RC">RC</option>
               <option value="PEP">PEP</option>
            </select>   
            </div>
            <div class="form-group col-md-6">
            <input class="form-control input-lg" type="number" name="numid" min="9999" max="99999999999999" value="" placeholder="IDENTIFICACION" required/>
        </div>
        </div>
        <label class="lgris">Nombres:</label>
        <input class="form-control" style="text-transfrom:uppercase;" type="text" name="Nombres" value=""placeholder="Nombres" require/>
        <label class="lgris">Apellidos:</label>
        <input class="form-control" style="text-transfrom:uppercase;" type="text" name="apellidos" value=""placeholder="Apellidos" require/>
        <label class="lgris">Direccion:</label>
        <input class="form-control" style="text-transfrom:uppercase;" type="text" name="direccion" value=""placeholder="Direccion" require/>
        <label class="lgris">Telefono:</label>
        <input class="form-control"  type="number" name="telefono"  min="9999" max="9999999999999"value=""placeholder="Telefono" require/>
        <label class="lgris">Ficha:</label>
        <input class="form-control"  type="number" name="telefono"  min="9999" max="9999999999999"value=""placeholder="Ficha" require/>
        <br>
        <input class="btn btn-primary" type="submit" value="Guardar">
        </div>
        </from>
        <?php
        }
        else
        {
            echo "No tiene permisos para realizar esta accion";
        }
        ?>
        <br>
     </div>
    </div>
  </body>    
</html>

