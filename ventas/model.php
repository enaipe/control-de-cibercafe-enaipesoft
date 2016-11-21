<?php

require_once '../core/db_abstract_model.php';

class usuarios extends DBAbstractModel {

    public function add_user() {
        
    }

    public function delete_user() {
        
    }

    public function edit_user() {
        
    }

    public function autentica() {
        
    }

    public function get_edit() {
        
    }

    public function set_rentaextra() {
        
    }

    public function get_renta() {
        
    }

    public function get_user($fechaIni = '', $fechaFin = '') {
        $this->query = "SELECT
                            SEC_TO_TIME( SUM( TIME_TO_SEC( cantidadHora) ) ) totalTime,
                            Sum(lineaderenta.pago) AS totalCant
                        FROM
                            lineaderenta
                            WHERE
                            DATE_FORMAT(fecha,'%Y-%m-%d') BETWEEN '$fechaIni' AND '$fechaFin'";
        $this->get_results_from_query();
        if (count($this->rows) > 0) {
            $this->mensaje = 'Sin ventas';
        } else {
            $this->mensaje = 'Ventas Encontradas';
        }
    }

    public function get_fecha($fechaIni = '', $fechaFin = '') {
        $this->query = "SELECT
                    renta.id,
                    juegos.nombre,
                    renta.controles,
                    renta.Hinicio,
                    lineaderenta.fecha,
                    lineaderenta.cantidadHora,
                    lineaderenta.pago
                    FROM
                    renta ,
                    juegos ,
                    lineaderenta
                    WHERE
                    DATE(renta.Hinicio) BETWEEN '$fechaIni' AND '$fechaFin' AND
                    renta.Usuarios_id = juegos.id AND
                    renta.id = lineaderenta.Renta_id
                    ORDER BY
                    renta.Hinicio DESC";

        $this->get_results_from_query();
        if (count($this->rows) > 0) {
            $this->mensaje = 'Fechas Encontradas';
        } else {
            $this->mensaje = 'Fechas No Encontradas';
        }
    }

    public function __construct() {
        $this->db_name = 'videogamesdb';
    }

    public function __destruct() {
        unset($this);
    }

}
