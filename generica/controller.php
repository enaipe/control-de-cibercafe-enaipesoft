<?php

session_start();
require_once 'constants.php';
require_once 'view.php';
require_once 'model.php';

function headler() {
    $uri = $_SERVER['REQUEST_URI'];
    $ipAddress = $_SERVER['REMOTE_ADDR'];
    $dirmac = detectaMac($ipAddress);
    extract($_POST);

    $event = GET_ACCION;
    $peticiones = array(GET_ACCION);

    foreach ($peticiones as $value) {
        $url_peticion = 'generica/' . $value;
        if ((strpos($uri, $url_peticion)) == true) {
            $event = $value;
        }
    }



    $usuario = set_obj();
    switch ($event) {


        case GET_ACCION:
            $usuario->get_renta($dirmac);
            $array = $usuario->rows;
            $mensaje = $usuario->mensaje;
            if (count($array)>0) {
                $html = retornar_vista($event = "activa", $array);
            } else {
                $html = retornar_vista($event = "inactiva", $array);
            }
           
            print $html;
//            require_once '../sitie_media/views_generica/generica_template.php';

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

function detectaMac($ipAddress) {
    #run the external command, break output into lines
    $arp = `arp -a $ipAddress`;
    $lines = explode("\n", $arp);

#look for the output line describing our IP address
    foreach ($lines as $line) {
        $cols = preg_split('/\s+/', trim($line));
        if ($cols[0] == $ipAddress) {
            $macAddr = $cols[1];
        }
    }
    return $macAddr;
}

//if (!isset($_SESSION['validate'])) {
//    header("location:/enaipeVG/usuarios/");
//} else {
//    headler();
//}
headler();
