<?php

session_start();
require_once 'constants.php';
require_once 'view.php';
require_once 'model.php';

function headler() {
    $uri = $_SERVER['REQUEST_URI'];
    extract($_POST);

    $event = GET_ACCION;
    $peticiones = array(GET_LOGIN, GET_EDIT, SET_DELETE, SET_USER, GET_ALTA, GET_RENTAR);

    foreach ($peticiones as $value) {
        $url_peticion = 'gestion/' . $value;
        if ((strpos($uri, $url_peticion)) == true) {
            $event = $value;
        }
    }

    $usuario = set_obj();
    switch ($event) {

        case GET_ALTA:

            if (isset($_POST['enviar'])) {
                $usuario->add_user($nombre, $jugadores, $genero, $costo);
                header("location:/enaipeVG/gestion/");
            } else {
                $html = retornar_vista($event);
                print $html;
            }

            break;

        case GET_ACCION:
            $usuario->get_user();
            $array_user = $usuario->rows;
            $mensaje = $usuario->mensaje;
            require_once '../sitie_media/views_gestion/gestion_template.php';
            break;

        case GET_EDIT:
            $id = $_POST['id_user_edit'];
            $usuario->get_edit($id);
            $array_user = $usuario->rows;
            $html = retornar_vista($event, $array_user);
            print $html;
            break;

        case SET_DELETE:
            $id = $_POST['id_user_delete'];
            $usuario->delete_user($id);
            header("location:/enaipeVG/gestion/");
            break;

        case SET_USER:
            $usuario->edit_user($nombre, $jugadores, $genero, $costo,$id);
            header("location:/enaipeVG/gestion/");
            break;

        default:
            header("location:/enaipeVG/usuarios/");
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