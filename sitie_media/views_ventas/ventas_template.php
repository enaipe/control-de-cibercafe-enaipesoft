
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" type="text/css" href="/enaipeVG/sitie_media/css/base_template.css">
        <script src="/enaipeVG/sitie_media/js/funciones.js"></script>


        <title>ABM de Usuarios: {subtitulo}</title>
    </head>
    <body>

        <div id="cabecera">
            <h1>Control Ventas</h1>
            <h2><!--{subtitulo}--></h2>
            <h3></h3>
        </div>


        <div id="menu">       
        <?php
        require_once '../sitie_media/views_ventas/ventas_menu.php';
        ?>


        </div>

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

</body>
</html>