<?php
require_once '../core/db_abstract_model.php';
class usuarios extends DBAbstractModel  {
    public function add_user() {}
    public function delete_user() {}
    public function edit_user() {}
    public function autentica() {}
    public function get_edit() {}
    public function set_rentaextra() {}
    public function get_renta() {}
    public function get_user() {}
    
    
    public function get_fecha($fechaIni='',$fechaFin='') {
        $this->query="SELECT
                        DATE(lineaderenta.fecha)fecha,
                        Count(lineaderenta.cantidadHora) horas,
                        Sum(lineaderenta.pago) utilidad
                       FROM
                        lineaderenta
                       WHERE
                        DATE(fecha) BETWEEN '$fechaIni' AND '$fechaFin'";
        $this->get_results_from_query();
        if(count($this->rows)>0){
            $this->mensaje='Fechas Encontradas';
        }  else {
            $this->mensaje='Fechas No Encontradas';
          }
    }
    
    public function __construct() {
        $this->db_name='videogamesdb';
    }
    
    public function __destruct() {
        unset($this);
    }
}