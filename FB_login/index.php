<?php
  include_once 'function/conexion.php';
  include_once 'function/mensajes.php';

?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    

    <title>Probando con less+bootstrap</title>

    <!--Aca van los estilos correspondientes al LESS-->

 <link rel="stylesheet/less" type="text/css" href="less/bootstrap.less">


    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>

  <body>

    <div class="container">
      <div class="col-md-2">
      <form class="form-signin" action="index.php" method="POST" role="form">
        <h2 class="form-signin-heading">Login</h2>
        <input type="email" class="form-control" name="email" placeholder="E-mail" required autofocus>
        <input type="password" class="form-control" name="pass" placeholder="Password" required>
        <br>
        <button class="btn btn-md btn-primary btn-block" name="login" value="enviar" type="submit">Ingresa</button>
      </form>

    </div>
  </div>
  <p></p>

  <div class="container">
    <div class="col-md-2">
        <h2 class="form-signing-heading">Registro</h2>
      <form action="function/registro.php" method="POST">
        <input type="text" class="form-control" name="nombre" placeholder="Nombre" required autofocus>
        <input type="email" class="form-control" name="email" placeholder="E-mail" required autofocus>
        <input type="password" class="form-control" name="pass" placeholder="Password" required>
        <br>
        <button class="btn btn-md btn-primary btn-block" value="enviar" type="submit">Registro</button>
      </form>
      <?php 
              if (@$_GET['err']) {
              
                  $mensaje = mensaje($_GET['err']);
                  echo  "<div class=\"txt_ctr txt_error alerta\">";
                  echo $mensaje;
                  echo  "</div>";
              
              } 
            ?>    </div>
    </div> <!-- /container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    
    <!-- LLAMANDO JQUERY-->
    <script src="js/jquery-1.10.2.min.js"> </script>
    <script src="js/efectos.js"></script>
    <!--Aca van los script de LESS-->
    <!--primero debes llamar la configiracion de LESS-->
    <script>
      less = {
        env: "development",
        logLevel: 2,
        async: true,
        fileAsync: true,
        poll: 1000,
        functions: {},
        dumpLineNumbers: "comments",
        //relativeUrls: false,
        //rootpath: ":/a.com/"
      };
    </script>
    <!--Luego el script de LESS-->
    <script src="js/less.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
