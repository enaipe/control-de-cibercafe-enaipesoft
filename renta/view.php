<?php

require_once 'controller.php';

$diccionario = array(
    'subtitle' => array(
        'Titulo de Pagina' => 'Editar',
        'mensaje' => 'binevenida'
    ),
);

function get_template($form = 'get') {
    $file = '../sitie_media/views_renta/renta_' . $form . '.php';
    $template = file_get_contents($file);
    return $template;
}

function render_dinamic_data($array, $html) {
    foreach ($array as $key => $value) {
        $html = str_replace('{' . $key . '}', $value, $html);
    }
    return $html;
}

function retornar_vista($event = '', $data = array()) {

    global $diccionario;
    $template = '../sitie_media/template.php';
    $html = file_get_contents($template);
    $html = str_replace('{formulario}', get_template($event), $html);
    $html = str_replace('{menu}', get_template('menu'), $html);
    $html = str_replace('{mensaje}', '', $html);
    if($data) {
        $html = render_dinamic_data($data[0], $html);
    }
    return $html;
}
