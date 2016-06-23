<?php

require_once 'constants.php';
require_once 'view.php';
require_once 'model.php';

function headler() {
    $uri = $_SERVER['REQUEST_URI'];
    $ip = $_SERVER['REMOTE_ADDR'];



    $event = VIEW_MAIN;
    $peticiones = array(GET_LOGIN, LOGOUT);
    foreach ($peticiones as $value) {
        $url_peticion = 'usuarios/' . $value;
        if ((strpos($uri, $url_peticion)) == true) {
            $event = $value;
        }
    }

    $usuario = set_obj();

    switch ($event) {

        case GET_LOGIN:
            // session_start();

            $user = $_POST['usuario'];
            $pass = $_POST['clave'];
            $usuario->autentica($user, $pass);
            $_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
            if (($_SESSION['validate'] == 1) || ($_SESSION['validate'] == 0)) {
                $user_name = $usuario->name_user;
                $html = retornar_vista(VIEW_WELCOME, 'Usuario ' . $user_name);
            } else {
                ?>
                <script type="text/javascript">
                    alert('usuario y/o contraseña no valida');
                </script>
                <?php

                $html = retornar_vista(VIEW_MAIN, $usuario->mensaje);
                session_end();
            }
            print($html);
            break;
        case LOGOUT:
            session_end();
            header('location:/enaipeVG/usuarios/');

            break;

        default:
            $html = retornar_vista($event, $usuario->mensaje);
            print($html);
            if ($_SESSION) {
                session_end();
            }
            break;
    }
}

function set_obj() {
    $obj = new Usuarios();
    return $obj;
}

function session_end() {
    unset($_SESSION);
    session_destroy();
}

headler();
