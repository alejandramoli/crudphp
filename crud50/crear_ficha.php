<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="css/bootstrap.min.css" rel="stylesheet"/>
        <link href="miscss/estilos.css" rel="stylesheet"/>
        <script src="js/bootstrap.js"></script>
    <title>Crear fichas</title>
</head>
<body>
    <div id="div1" class="container">
    <br>
        <div id="div2">
            <?php session_start(); if(! empty($_SESSION['Tipo_usuario'])) { ?> 
            <img src="IMAGENES/banner3.png" alt=""> <?php } ?>
                <div id="div3">
                    <?php 
                    if ($_SESSION['Tipo_usuario']=='ADMINISTRADOR')
                    { 
                    ?>
                    <form id="formulario" role="form" method="post" action="guardado_fichas.php">
                        <div class="col-md-12">
                            <strong class="lgris">Ingrese los datos de la ficha</strong>
                            <br>
                            <label  class="lgrisfr"> Numero: </label>
                                <input  class="form-control" type="number" name="nombre" min="9999 " max="99999999999 " value="" placeholder="Numero" required/>
                                <Br>

                            <label class="lgris">Elegir programa:</label>
                            <?php 
                                        include 'funciones.php';
                                        $conexion=conectar_bd('localhost', 'root', '', 'sena_bd' );
                                        $consulta="SELECT * FROM programa";
                                        $ejecutar=mysqli_query($conexion, $consulta) or die(mysqli_error($conexion));
                                    ?>
                                <select name="programa" class="lgris"> 
                                    <?php  while ($opciones = $ejecutar -> fetch_object()){ ?>
                                        <option value="<?php echo $opciones-> progra_id ?>"><?php echo $opciones ->progra_nombre?></option>
                                    <?php }?>
                                 
                                </select>

                                <input class="btn btn-primary" type="submit" value="Guardar">
                        </div>
                    
                    </form>
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
    </div>
    
</body>
</html>