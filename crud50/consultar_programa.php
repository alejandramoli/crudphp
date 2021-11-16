<!doctype html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles.css">
    <title>consulta de aprendices</title>
</head>
<body>
    <div id="divconsulta" class="container"> 
        <br>
        <div id="div2"> 
            <div id="div3">
                <form name="formulario" role="form" method="POST">
                    <div class="col-md-12">
                        <strong class="lgris"> Criterio de busqueda</strong>
                        <br><br>
                         <div class="form-group cold-md-3">
                            <input class="form-control" style="text-transform:uppercase;" type="text" name="nombre" value="" placeholder="Nombre" />
                            </div>
                            <br>
                            <div class="form-group cold-md-3">
                                <input class="form-control" style="text-transform: uppercase;" type="text" name="otipo" value="" placeholder="Tipo" />
                            </div>
                            <br>
                            <div class="form-group col-md-3">
                                <input type="submit" class="btn btn-primary" value="consulta">
                            </div>
                        </div>
                        <br>
                    </div>
                </form>
                <br>
            </div>

            <div id="consulta2">
                <?php
                if($_SERVER['REQUEST_METHOD']==='POST')
                {
                    include('funciones.php');
                    $vtipo=$_POST['tipo'];
                    $conexion=conectar_bd('localhost', 'root', '', 'sena_bd');
                    $resultado=consulta($conexion,"select * from programa where trim(progra_nombre) like'%{$vnumid}%' and trim(progra_tipo) like '%{$vnombre}%'");
                    if($resultado->num_rows>0)
                    {
                        while ($fila =$resultado->fetch_object())
                        {
                            echo $fila->progra_id." ".$fila->progra_nombre." ".$fila->progra_tipo."<br>";
                        }
                    }
                    else{
                        echo"No existe registro";
                    }
                    $conexion->close();
                }?>
            </div>
        </div>
    </div>
</body>
</html>
