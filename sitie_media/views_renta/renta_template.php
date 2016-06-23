
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html lang="es">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="refresh" content="10" >
        <link rel="stylesheet" type="text/css" href="/enaipeVG/sitie_media/css/base_template.css">
        <script src="/enaipeVG/sitie_media/js/funciones.js"></script>
        <script src="/enaipeVG/sitie_media/js/jquery-1.10.1.min.js"></script>
        <script src="/enaipeVG/sitie_media/js/ion.sound.min.js"></script>
        <script src="/enaipeVG/sitie_media/js/ion.sound.js"></script>
        <link rel="stylesheet" type="text/css" href="/enaipeVG/sitie_media/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/enaipeVG/boots_template/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="/enaipeVG/boots_template/css/normalize.css">

        <title>ABM de Usuarios: {subtitulo}</title>
    </head>
    <body>

        <div id="cabecera">
            <h1>Administrador de Rentas</h1>
            <h2><!--{subtitulo}--></h2>
            <h3></h3>
        </div>


        <div id="menu">       

            <a href="/enaipeVG/gestion/user" title="Regresar">Regresar</a>   
            <a href="/enaipeVG/gestion/" title="Rentas">Administar Rentas</a>
            <a href="/enaipeVG/ventas/" title="Ventas">Control de Ventas</a>
            <a href="/enaipeVG/usuarios/logout" title="Salir">Salir de Sesion</a>

        </div>

    </div>

    <div id="mensaje">
        <?php
        require_once 'controller.php';
        echo $mensaje;
        ?>

    </div>

    <div id="formulario">
        <?php
        require_once '../sitie_media/views_renta/renta_activas.php';
        ?>


    </div>

</body>
</html>