<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">       
        <title>Cyber enaipeSoft</title>
        <link rel="stylesheet" type="text/css" href="/enaipeVG/sitie_media/css/base_template.css">

        <!-- Bootstrap -->
        <link href="/enaipeVG/boots_template/css/bootstrap.min.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script src="/enaipeVG/sitie_media/js/jquery-1.10.1.min.js"></script>
    </head>
    <body>

        <div id="cabecera">
            <h1>SISTEMA VIDEO GAMES</h1>
            <h2><!--{subtitulo}--></h2>
            <h3></h3>
        </div>


        <div id="menu">
            <?php
            require_once '../sitie_media/views_ventas/ventas_menu.php';
            ?>

        </div>

        <div id="mensaje">
             <?php
            require_once '../sitie_media/views_ventas/ventas_fecha.php';
            ?>
        </div>

        <div id="formulario">
            <?php
            require_once '../sitie_media/views_ventas/ventas_tabla.php';
            ?>
        </div>


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="/enaipeVG/boots_template/js/jquery-1.11.2.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="/enaipeVG/boots_template/js/bootstrap.min.js"></script>
    </body>
</html>