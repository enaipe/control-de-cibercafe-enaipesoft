<?php

session_start();
$diccionario = array(
    'subtitle' => array(
        'Titulo de Pgina' => 'login',
        'mensaje' => 'binevenida'
    ),
    'links_menu' => array(
        'VIEWS_GET_USER' => '/enaipeVG/gestion/controller.php'
    )
);

function get_template($form = 'get') {
    $file = '../sitie_media/views_user/usuario_' . $form . '.php';
    $template = file_get_contents($file);
    return $template;
}

function render_dinamic_data($array, $html) {
    foreach ($array as $key => $value) {
        $template = str_replace('{' . $key . '}', $value, $html);
        return $template;
    }
}

function retornar_vista($event = '', $user_name = '') {

    global $diccionario;
    $html = file_get_contents('../sitie_media/template.php');
    $form = get_template($event);

    $html = render_dinamic_data($diccionario['subtitle'], $html);
    $html = str_replace('{formulario}', $form, $html);
    $html = str_replace('{mensaje}', $user_name, $html);


    if ($_SESSION) {

        if ($_SESSION['validate'] !== 3) {
            $html = str_replace('{menu}', get_template('menu'), $html);
        }
    }
    $html = str_replace('{menu}', '', $html);
    return $html;
}
