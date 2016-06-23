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
        $url_peticion = 'usuarios/' . $value;
        if ((strpos($uri, $url_peticion)) == true) {
            $event = $value;
        }
    }
    $usuarios = set_object();

    switch ($event) {
        case GET_ACCION:
            if ($_POST) {
                if ($_POST['enviar'] == 'Consultar') {
                    $usuarios->get_fecha($tiempoIni, $tiempoFin);
                    $array_fecha = $usuarios->rows;
                    require_once '../sitie_media/views_ventas/ventas_template.php';
                }
            } else {
                $html = retornar_vista($event);
                print $html;
            }

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
