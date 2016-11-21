<?php

require_once '../core/db_abstract_model.php';

class Usuarios extends DBAbstractModel {

    public function autentica() {
        
    }

    public function get_renta() {
        
    }
    
    public function get_fecha() {
        
    }

    public function set_rentaextra() {
        
    }

    public function get_user() {
        $this->query = "SELECT id,nombre,jugadores,genero,costo
                        FROM juegos
                        WHERE estatus='0' ";
        $this->get_results_from_query();
        if (count($this->rows) > 0) {
            $this->mensaje = 'Juegos Actuales';
        } else {
            $this->mensaje = 'Sin Juegos';
        }
    }

    public function get_edit($id = '') {
        $this->query = "SELECT id,nombre,jugadores,genero,costo
                        FROM juegos 
                        where id='$id' and estatus=0";

        $this->get_results_from_query();
        if (count($this->rows) > 0) {
            $this->mensaje = 'Juego Encontrado';
        } else {
            $this->mensaje = 'Juego No Encontrado';
        }
    }

    public function add_user($nom = '', $jug = '', $gen = '', $cost = '') {
        $this->query = "insert into juegos 
                        (nombre,jugadores,genero,costo)
                        values('$nom','$jug','$gen','$cost')";
        $this->execute_single_query();
        $this->mensaje = 'Juego Agregado';
    }
#**************************
    public function edit_user($nom = '', $jug = '', $gen = '', $cost = '',$id='') {
        $this->query = "update juegos "
                . "set nombre='$nom',jugadores='$jug',genero='$gen',costo='$cost'"
                . " where id='$id'";
        $this->execute_single_query();
        $this->mensaje = 'Juego Modificado';
    }

    public function delete_user($id = '') {
        $this->query = "update juegos "
                . "set estatus='1'"
                . " where id='$id'";
        $this->execute_single_query();
        $this->mensaje = 'Juego Eliminado';
    }

    function __construct() {
        $this->db_name = 'videogamesdb';
    }

    function __destruct() {
        unset($this);
    }

}
