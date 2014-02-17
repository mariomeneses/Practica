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
    <?php
      session_start();
      if(isset($_SESSION['email']))
      {
        ?>

        <a href="login.php?cerrar=session">Cerrar Sesión (<?php echo $_SESSION['email'];?> ) </a>
        <?php

      }else
      echo "Acceso denegado";
    ?>

 <!-- /container -->

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