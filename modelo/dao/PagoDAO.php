<?php


require_once ("DataSource.php");
require_once (__DIR__."/../entidad/Pago.php");

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UsuarioDAO
 *
 * @author Admin
 */
class PagoDAO {
    
    public function buscarPagoPorId($id){
        $data_source = new DataSource();
        //password_hash("rasmuslerdorf", PASSWORD_DEFAULT)
        $data_table= $data_source->ejecutarConsulta("SELECT * FROM pago WHERE idPago = :id", 
                                                    array(':id'=>$id));
        $imagen=null;
        if(count($data_table)==1){
            foreach($data_table as $indice => $valor){
                $pago = new Pago(
                        $data_table[$indice]["idPago"],
                        $data_table[$indice]["fechaPago"], 
                        $data_table[$indice]["fechaPagada"], 
                        $data_table[$indice]["valor"],
                        $data_table[$indice]["Hospedaje_idHospedaje"],
                        );
            }
            return $pago;
        }else{
            return null;
        }
    }    
    
    public function leerPagos(){
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta("SELECT * FROM pago");
        $pago=null;
        $usuarios=array();
        foreach($data_table as $indice=>$valor){
                $pago = new Pago(
                        $data_table[$indice]["idPago"],
                        $data_table[$indice]["fechaPago"], 
                        $data_table[$indice]["fechaPagada"], 
                        $data_table[$indice]["valor"],
                        $data_table[$indice]["Hospedaje_idHospedaje"],
                        );
                array_push($pagos,$pago);
        }
        return $pagos;   
    }
    
     public function insertarPago(Pago $pago){
        $data_source= new DataSource();
        $sql = "INSERT INTO pago VALUES (:idPago, :fechaPago, :fechaPagada, :valor, :Hospedaje_idHospedaje)";
        $resultado = $data_source->ejecutarActualizacion($sql, array(
            ':idPago'=>$pago->getIdPago(),
            ':fechaPago'=>$pago->getFechaPago(),
            ':fechaPagada'=>$pago->getFechaPagada(),
            ':valor'=>$pago->getValor(),
            ':Hospedaje_idHospedaje'=>$pago->getHospedaje_idHospedaje(),
            )
        );
        
        return $resultado;
    }
    
       
    public function borrarPago($id){
        $data_source = new DataSource();
        $pago=  buscarPagoPorId($id);
        $resultado= $data_source->ejecutarActualizacion("DELETE FROM pago WHERE idPago = :id", array('id'=>$id));
   
        return $resultado;
    }
    
    
    public function modificarPago(Pago $pago, $tipomod){
        $data_source= new DataSource();
        $sql = "UPDATE pago SET valor= :valor, "
                . " fechaPago= :fechaPago, "
                . " fechaPagada= :fechaPagada, "
                . " WHERE idPago= :idPago ";
        $resultado = $data_source->ejecutarActualizacion($sql, array(
               	':idPago'=>$pago->getIdPago(),
            	':fechaPago'=>$pago->getFechaPago(),
            	':fechaPagada'=>$pago->getFechaPagada(),
            	':valor'=>$pago->getValor(),
            )
        );
        
       
        return $resultado;
    }
    
    
}