<?php

abstract class DBAbstractModel {
#datos del servidor

    private static $db_host = 'localhost';
    private static $db_user = 'root';
    private static $db_pass = '';
#
    protected $db_name = 'videogamesdb';
    protected $query;
    public $rows = array();
    private $conn;
    public $mensaje = 'Autenticar',$name_user='';

# metodos abstractos para que solo la hereden las clases hijas

    abstract protected function autentica();
    abstract protected function get_fecha();
    abstract protected function get_user();
    abstract protected function get_renta();
    abstract protected function get_edit();
    abstract protected function edit_user();
    abstract protected function add_user();
    abstract protected function delete_user();
    abstract protected function set_rentaextra();
    
    # los siguientes metodos pueden definirse con exactitud y por lo tanto 
    #no son abstractos ejemplo:
    # conectar a la base de datos

    private function open_connection() {
        $this->conn = new mysqli(self::$db_host, self::$db_user, self::$db_pass, $this->db_name);
    }

    private function close_connection() {
        $this->conn->close();
    }
    
    protected function execute_single_query(){
        if($_POST){
            $this->open_connection();
            $this->conn->query($this->query);
            $this->close_connection();
        }else{
            $this->mensaje='Metodo no Permitido';
        }
        
    }

    protected function get_results_from_query() {
        unset($this->rows);
        $this->open_connection();
        $result = $this->conn->query($this->query);
        while ($this->rows[] = $result->fetch_assoc());
        $result->close();
        $this->close_connection();
        array_pop($this->rows);
    }

}
