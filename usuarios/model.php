<?php

require_once '../core/db_abstract_model.php';

class Usuarios extends DBAbstractModel {

    public function autentica($user = '', $pass = '') {
        $this->query = "SELECT usuario,tipousuario as tipoUser
                        FROM autenticar
                        WHERE usuario='$user'
                        AND 
                        contrasena='$pass'";


        $this->get_results_from_query();
        if (count($this->rows) === 1) {
            $_SESSION['validate'] = $this->rows[0]['tipoUser'];

            $this->name_user = $this->rows[0]['usuario'];
            $this->mensaje = 'Usuario Correcto';
        } else {
            $this->mensaje = 'Usuario No Encontrado';
            $_SESSION['validate'] = 3;
        }
    }
    public function delete_user(){}
    public function get_user() {}  
    public function get_renta() {}
    public function edit_user() {}
    public function add_user(){}
    public function get_edit() {}
    public function set_rentaextra() {}    
    public function get_fecha() {}

    function __construct() {
        $this->db_name = 'videogamesdb';
    }

    function __destruct() {
        unset($this);
    }

}
