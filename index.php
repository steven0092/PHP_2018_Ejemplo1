<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>PRUEBA DE PHP CON BOOTSTRAR</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    </head>
    <body style="background-color: grey">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center" style="color: white">EJEMPLO DE INICIO DE SESION EN PHP</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    
                </div>
                <div class="col-4">
                    <br>
                    <br>
                    <form action="">
                    <input id="cajaNombre" class="form-control" type="text" placeholder="Usuario" required="required">
                    <br>
                    <input id="cajaPassword" class="form-control" type="text" placeholder="Contraseña" required="required">
                    <br>
                    <button id="boton1" class="btn btn-primary btn-block" typr="submit">Primary</button>
                    <br>
                    <br>
                    <p>
                        Year (yyyy-mm-dd):
                      <input class="form-control" data-validation="date" data-validation-format="yyyy-mm-dd">
                    </p>
                    </form>
                </div>
                    <div class="col-4"></div>
                    
                </div>
           


        </div>

        <?php
        // put your code here
        ?>
    </body>
    <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>

    <script>
        // document ready se ejecuta cuando toda la pagina se ha cargado correctamente
        $ (document).ready(function(){
           $('#cajanombre').hide();  
        });
        
        $.validate({
            lang: 'es'
        });
  
        $('#boton1').click(function(){
            console .log("aqui si que llega");
            $('#cajaNombre').show(200);
        });
       
    </script>


</html>
