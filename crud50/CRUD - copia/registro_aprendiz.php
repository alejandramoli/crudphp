<!DOCTYPE html >
<html  lang = " en " >
<head>
    <meta  http-equiv = " Content-Type " content = " text / html; charset = UTF-8 " >
    <meta  name = " viewport " content = " width = device-width, initial-scale = 1, shrink-to-fit = no " >
    <Enlace  href = " https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css " rel =" hoja de estilo " integridad =" sha384- + 0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7 + AMvyTG2x " crossorigin = " anónimo " >
    <link  href = " css / boostrap.min.css " rel = " hoja de estilo " />
    <link rel="stylesheet" href="css/cr.css">
    <script  src = " js / bootstrap.js " > </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="estilo.css">
    <title> Registro de aprendices </title>
</head>
<body>
    <center> 
    <div  id="divfr" class="contenedor">
    <Br>
    <h1>formulario de registro de aprendiz</h1>
        <div  id="divfr2">
            <?php  session_start (); if (! empty ( $_SESSION [ 'Tipo_usuario' ])) { ?> 
            <img  src = " IMAGENES / banner3.png " alt = "" >  <?php } ?>
                <div  id="divfr3" >
                    <?php 
                    if ( $_SESSION [ 'Tipo_usuario' ]== 'ADMINISTRADOR' )
                    { 
                    ?>
                    <form style="width: 800px; " class="form-horizontal" id ="formulario" role = " form " method = " post " action = " guardado_aprendiz.php ">
                    <div class="form-group">
                            <strong  class="lgrisfr "> Ingrese los datos del aprendiz </strong >
                            <Br > <br><br> <br>
                            <label  class="lgrisfr">Identificación: </label ><br><br>
                           
                          
                                <div  class = " form-group col-xs-12 " > 
                                <select  class = " form-control " name=" tipoid " >
                                    <option  value=" CC " seleccionado > CC </option >
                                    <option  value = " TI " > TI </option >
                                    <option  value = " RC " > RC </option >
                                    <option  value = " PEP " > PEP </option >
                                    
                                </select ><br>
                                </div>
                           
                                <br> <br>
                                                          
                                
                                <input  class = " form-control " style = " text-transform: uppercase;" type="number " name="numid" min="9999" max="9999999999" value = "" placeholder = "Identificacion" required/>
                                
                    
                                <label  class = " lgrisfr " > Nombres: </label>
                                
                                <input  class = " form-control " style = " text-transform: uppercase; " type = " text " name = " nombres " value = "" placeholder = " Nombres" required/>
                                   <br>

                                <label  class = " lgrisfr " > Apellidos: </label >
                               
                                <input  class = " form-control " style = " text-transform: uppercase; " type = " text " name = " apellidos " value = "" placeholder = " Apellidos " required/>
                    
                                <label  class = " lgrisfr " > Dirección: </label >
                                <input  class = " form-control " style = " text-transform: uppercase; " type = " text " name = " direccion " value = "" placeholder = " Dirección " required/>

                                <label  class = " lgrisfr " > Telefono: </label >
                                <input  class = " form-control " type = " number " name = " telefono " min = " 9999 " max = " 99999999999 " value = "" placeholder = " Telefono " required/>

                                <label  class = " lgrisfr " > Ficha: </label >
                                <input  class = " form-control " type = " number " name = " ficha " min = " 9999 " max = " 99999999999 " value = "" placeholder = " FICHA " required/>
                                <Br >

                                <input  class="btn btn-primary" type="submit" value="Guardar">
                       
                                <div class="form-group">
   
                     </div>
                    </div>    
                    </form >
                <?php
                    }
                    else
                    {
                        echo  "No tiene permisos para realizar esta acción" ;
                    }
                ?>
                <Br >
                </div >
        </div >
    </div >
    </center> 
</body >
</html >