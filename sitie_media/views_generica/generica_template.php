<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {meta}
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Cyber enaipeSoft</title>

        <!-- Bootstrap -->
        <link href="/enaipeVG/boots_template/css/bootstrap.min.css" rel="stylesheet">


        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script src="/enaipeVG/sitie_media/js/jquery-1.10.1.min.js"></script>
        <script>
            $(document).ready(function () {

                var x1 = $('#tiempo_transcurrido').val();
                var x2 = $('#tiempo_renta').val();
                if (x1.length > 0) {
                    logica(x1, x2);

                }
                function logica(x, y) {
                    var simb = "";
                    if (x >= y) {
                        alert("!! TU TIEMPO HA FINALIZADO ¡¡")
                    }
                    return simb;
                }
            });
        </script>

    </head>
    <body>
        <a class="navbar-brand visible-lg" rel="home" href="#">
            <img class="img-responsive" style="max-width:200px; margin-top: +42px;"
                 src="/enaipeVG/sitie_media/img/enaipe_logo.png">
        </a>
        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron text-center "style="background-color: #FF5722" >
            <h1>Cyber enaipeSoft.net </h1>
            <p>Gracias Por Tu Preferencia</p>
        </div>

        <div id="formulario">
            {formulario}
        </div>

        <div class="panel-footer">
            <p class="">&copy; 2016 realizado por enaipeSoft.</p>
        </div>
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

        <script src="/enaipeVG/boots_template/js/jquery-1.11.2.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->

        <script src="/enaipeVG/boots_template/js/bootstrap.min.js"></script>
    </body>
</html>