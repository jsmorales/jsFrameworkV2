<?php 
    include("../conexion/datos.php");
    include("../controller/scripts_cont.php");
?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Nombre App</title>

    <?php 

        $scripts = new scripts_pag();
        $scripts->standarCss();

     ?>

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Nombre App Log In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="../controller/login_autentica.php" method="POST">
                            <fieldset>
                                <div class="form-group">
                                    <input id="username" name="username" class="form-control" placeholder="Usuario" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input id="password" name="password" class="form-control" placeholder="Contraseña" type="password" value="">
                                </div>
                                
                                <!-- Change this to a button or input when using this as a form --> 
                                <button id="btn_login" class="btn btn-lg btn-success btn-block ladda-button" data-style="slide-up"><span class="ladda-label">Ingresar</span></button>                               
                            </fieldset>
                            <div class="form-group text-center">
                                <br>
                                <a href="registro.php">Registrarse <span class="glyphicon glyphicon-log-in"></span> </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php 

        $scripts->standar();
     ?>
    
</body>

</html>
