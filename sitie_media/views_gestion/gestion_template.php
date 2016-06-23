
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
            <h1>Administrador de usuarios</h1>
            <h2><!--{subtitulo}--></h2>
            <h3></h3>
        </div>


        <div id="menu">

            <a href="../gestion/alta" title="Nuevo Usuario">Alta Juegos</a>
            <a href="/enaipeVG/renta/activas" title="Rentas Activas">Rentas Activas</a>
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
        require_once '../sitie_media/views_gestion/gestion_user.php';
        ?>


    </div>

</body>
</html>