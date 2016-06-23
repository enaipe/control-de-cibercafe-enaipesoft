<?php

require_once '../core/db_abstract_model.php';

class Usuarios extends DBAbstractModel {

    public function get_renta($ip = '') {
        $this->query = "SELECT
                SUBTIME(CURRENT_TIME,TIME(renta.Hinicio)) AS tiempo_transcurrido,
                (ROUND(((0.1328*((TIME_TO_SEC(SUBTIME(CURRENT_TIME,TIME(renta.Hinicio)))/60))) + 2.9884),0))+(4*controles - 4) AS total_Actual,
                SUBTIME(CURRENT_TIME,ADDTIME(TIME(renta.Hinicio),(SUBTIME(TIME(renta.Hfinal),TIME(renta.Hinicio))))) AS tiempo_finalizar
                FROM
                 juegos ,
                 renta
                WHERE
                 juegos.id = renta.Usuarios_id AND
                 renta.estatus = 0 AND
                 juegos.jugadores='$ip'";

        $this->get_results_from_query();
        if (count($this->rows) > 0) {
            $this->mensaje = 'PC ACTIVA';
        } else {
            $this->mensaje = 'PC NO ACTIVA';
        }
    }

    function __construct() {
        $this->db_name = 'videogamesdb';
    }

    function __destruct() {
        unset($this);
    }

    protected function add_user() {
        
    }

    protected function autentica() {
        
    }

    protected function delete_user() {
        
    }

    protected function edit_user() {
        
    }

    protected function get_fecha() {
        
    }

    protected function get_user() {
        
    }

    protected function set_rentaextra() {
        
    }

    protected function get_edit() {
        
    }

}
