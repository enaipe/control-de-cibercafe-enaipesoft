<?php

require_once '../core/db_abstract_model.php';

class Usuarios extends DBAbstractModel {

    public function autentica() {
        
    }

    public function get_fecha() {
        
    }

#incrementar hora de inicio en renta actual
//    public function set_rentaextra($id = '',$Hinicio='',$Hfinal='', $controls = '', $hora = '00', $min = '00') {
//        $this->query = "UPDATE renta
//                       SET Hfinal=(SELECT ADDTIME((time('$Hinicio')),(SUM((time('$Hfinal'))-(time('$Hinicio'))+TIME('$hora:$min:00'))))),
//                       controles='$controls'
//                       WHERE id='$id';";
//        $this->execute_single_query();
//        $this->mensaje = 'Renta Modificada';
//    }

    public function set_rentaextra($id = '', $Hinicio = '', $Hfinal = '', $controls = '', $hora = '00', $min = '00') {
        $this->query = "UPDATE renta
                        SET Hfinal=(SELECT ADDTIME((time('$Hfinal')),(TIME('$hora:$min:00')))),
                        controles='$controls',
                        pago='0'    
                        WHERE id='$id'";
        // print_r($this->query);
        $this->execute_single_query();
        $this->mensaje = 'Renta Modificada';
    }

#traer datos de renta por ID

    public function get_user($id = '') {
        $this->query = "SELECT  renta.id, TIME(renta.Hinicio)Hinicio,TIME(renta.Hfinal)Hfinal,juegos.nombre,
                                renta.controles,costorenta.costoHora,renta.estatus
                        FROM    renta ,costorenta ,juegos
                        WHERE
                                renta.Costorenta_id = costorenta.id AND
                                renta.Usuarios_id = juegos.id AND
                                renta.id = '$id' ";


        $this->get_results_from_query();
        if (count($this->rows) > 0) {
            $this->mensaje = 'Renta  Encontrado';
        } else {
            $this->mensaje = 'Renta No Encontrado';
        }
    }

#traer datos de rentas activas

    public function get_renta() {
        $this->query = "SELECT renta.id, juegos.nombre,
                            TIME(renta.Hinicio) AS Hinicio,
                            TIME(renta.Hfinal) AS Hfinal,
                            renta.controles,
                            (ROUND(((0.1328*((TIME_TO_SEC(SUBTIME(TIME(renta.Hfinal),TIME(renta.Hinicio)))/60))) + 2.9884),0))+(4*controles - 4) AS total,
                            (ROUND(((0.1328*((TIME_TO_SEC(SUBTIME(CURRENT_TIME,TIME(renta.Hinicio)))/60))) + 2.9884),0))+(4*controles - 4) AS total_Actual,
                            SUBTIME(TIME(renta.Hfinal),TIME(renta.Hinicio)) AS tiempo_total,
                            SUBTIME(CURRENT_TIME,ADDTIME(TIME(renta.Hinicio),(SUBTIME(TIME(renta.Hfinal),TIME(renta.Hinicio))))) AS tiempo_finalizar,
                            SUBTIME(CURRENT_TIME,TIME(renta.Hinicio)) AS tiempo_transcurrido,
                            renta.estatus,
                            renta.pago
                    FROM
                            juegos ,
                            renta
                    WHERE
                            juegos.id = renta.Usuarios_id AND
                            renta.estatus = 0";
        $this->get_results_from_query();
        if (count($this->rows) > 0) {
            $this->mensaje = 'Rentas Activas';
        } else {
            $this->mensaje = 'Sin Rentas';
        }
    }

# Traer datos de usuario por ID

    public function get_edit($id = '') {
        $this->query = "SELECT "
                . "id,nombre,jugadores,genero,costo "
                . "FROM juegos "
                . "where id='$id' and estatus=0";

        $this->get_results_from_query();
        if (count($this->rows) > 0) {
            $this->mensaje = 'Usuarios Encontrado';
        } else {
            $this->mensaje = 'Usuario No Encontrado';
        }
    }

#Insertar datos de la renta actual

    public function add_user($id = '', $hora = '', $min = '', $controles = '') {
        $this->query = "insert into renta (Usuarios_id,Hinicio,Hfinal,controles) "
                . "values('$id' ,(select current_timestamp()),(SELECT ADDTIME((select current_timestamp()), '0 $hora:$min:00')),'$controles' )";
        print_r($this->query);
        $this->execute_single_query();
        $this->mensaje = 'Usuario Agregado';
    }

#finalizar rentas*************

    public function edit_user($id = '') {
        $this->query = "UPDATE renta SET estatus='1'  WHERE id='$id'";
        $this->execute_single_query();
        $this->mensaje = 'Renta Modificado';
    }

# renta pagada

    public function pay_user($id = '') {
        $this->query = "UPDATE renta SET pago='1'  WHERE id='$id'";
        $this->execute_single_query();
        $this->mensaje = 'Renta Modificada';
    }

#eliminar renta activa por id***********

    public function delete_user($id = '', $cant = '', $pago = '') {
        $this->query = "INSERT INTO lineaderenta (Renta_id,cantidadHora,pago)
                        VALUES('$id','$cant','$pago')";
        $this->execute_single_query();
        $this->mensaje = 'Renta Modificado';
    }

    function __construct() {
        $this->db_name = 'videogamesdb';
    }

    function __destruct() {
        unset($this);
    }

}
