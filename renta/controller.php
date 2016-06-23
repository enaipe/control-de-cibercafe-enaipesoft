<?php

session_start();
require_once 'constants.php';
require_once 'view.php';
require_once 'model.php';

function headler() {
    $uri = $_SERVER['REQUEST_URI'];
    (extract($_POST));

    $event = GET_ACCION;
    $peticiones = array(SET_RENTA_EXT, GET_ACTIVE, SET_DELETE, SET_RENTA, GET_RENTA, SET_FINALIZAR, SET_PAGO);

    foreach ($peticiones as $value) {
        $url_peticion = 'renta/' . $value;
        if ((strpos($uri, $url_peticion)) == true) {
            $event = $value;
        }
    }

    $usuario = set_obj();
    switch ($event) {

        case GET_RENTA:
            if ($_POST) {
                if ($_POST['enviar'] == 'Guardar') {
                    $usuario->add_user($id, $hora, $min, $controles);
                    header("location:../renta/activas/");
                }
            } else {
                header("location:/enaipeVG/usuarios/");
            }

            break;

        case GET_ACCION:
            $id = $_POST['id_user_rentar'];
            $usuario->get_edit($id);
            $id = $usuario->rows;
            $html = retornar_vista($event, $id);
            print $html;
            break;

        case SET_RENTA:
            $id = $_POST['id_user_rentar'];
            $usuario->get_user($id);
            $id = $usuario->rows;
            $html = retornar_vista($event, $id);
            print $html;
            break;

        case SET_RENTA_EXT:
            $usuario->set_rentaextra($id, $Hinicio, $Hfinal, $controles, $hora, $min);
            header("location:../renta/activas/");
            break;

        case GET_ACTIVE:

            $usuario->get_renta();
            $array = $usuario->rows;
            $mensaje = $usuario->mensaje;
            require_once '../sitie_media/views_renta/renta_template.php';
            break;

        case SET_FINALIZAR:
            $index = $_POST['form'];
            $pago = $_POST[$index]['total_Actual'];
            $cant = $_POST[$index]['tiempo_total'];
            $id = $_POST[$index]['id'];
            $usuario->edit_user($id);
            $usuario->delete_user($id, $cant, $pago);
            header("location:../renta/activas/");
            break;

        case SET_PAGO:
            print_r($index = $_POST['id_pagado']);
            $usuario->pay_user($index);
            header("location:../renta/activas/");
            break;


        default:
            header("location:/enaipeVG/gestion/");
            break;
    }
}

function set_obj() {
    $obj = new Usuarios();
    return $obj;
}

if (!isset($_SESSION['validate'])) {
    header("location:/enaipeVG/usuarios/");
} else {
    headler();
}
