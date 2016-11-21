<?php

session_start();
require_once 'constants.php';
require_once 'model.php';
require_once 'view.php';

function headler() {
    $uri = $_SERVER['REQUEST_URI'];
    extract($_POST);


    $event = GET_ACCION;
    $peticiones = array(SEARCH_DATE);
    foreach ($peticiones as $value) {
        $url_peticion = 'ventas/' . $value;
        if ((strpos($uri, $url_peticion)) == true) {
            $event = $value;
        }
    }
    $usuarios = set_object();

    switch ($event) {
        case GET_ACCION:
            require_once '../sitie_media/views_ventas/ventas_template.php';
            break;

        case SEARCH_DATE:
            $usuarios->get_fecha($tiempoIni, $tiempoFin);
            $array = $usuarios->rows;

            $usuarios->get_user($tiempoIni, $tiempoFin);
            $total = $usuarios->rows;

            $mensaje = $usuarios->mensaje;
            require_once '../sitie_media/views_ventas/ventas_template.php';
            break;

        default:
            header("location:/enaipeVG/usuarios/");
            break;
    }
}

function set_object() {
    $obj = new Usuarios();
    return $obj;
}

if (!isset($_SESSION['validate'])) {
    header("location:/enaipeVG/usuarios/");
} else {
    headler();
}
