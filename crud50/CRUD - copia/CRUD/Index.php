<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta http-equiv="contet-Type"content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="miscss/estilos.css" rel="stylesheet"/>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
       
    </head>
    <body>
        <div id="div1"class="container">
            <br>
            <div id="div2" class="container">
                <img src="IMAGENES/banner.jpg">
                <div id="div3">
                    <form id="formulario" method="post" action="menu.php">
                        <br>
                        <strong class="lgris" >Ingrese su usuario y contraseña para iniciar sesion</strong>
                        <br>
                        <label class="lgris"> Nombre de usuario:</label>
                        <br>
                        <input style="text-transform: uppercase;" type="text" name="usuario" value="" required/>
                        <br>
                        <label class="lgris">Contraseña:</label>
                        <br>
                        <input type="password" name="Clave" value="" required/>
                        <br><br>
                        <input class="btn btn-primary" type="submit" value="Iniciar">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>