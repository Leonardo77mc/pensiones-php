<?php
    //Métodos que se ejecutan en la vista
    function buscarPagoPorId($id){
        require_once(__DIR__."/../../modelo/dao/PagoDAO.php");
        $dao=new PagoDAO(); //Se crea una nuevo objeto "PagoDAO"
        $pago = $dao->buscarPagoPorId( $id); //Se ejecuta el método buscarImagenPorId, con sus parámetros
        return $pago; //Retorna un objeto tipo Pago
    }

  
    function insertarPago($pago){
        require_once(__DIR__."/../../modelo/dao/ImagenDAO.php");
        $dao=new PagoDAO();
        $resultado=$dao->insertarPago($imagen);
        return $resultado;
    }

    
    function borrarPago($id){
        require_once(__DIR__."/../../modelo/dao/pagoDAO.php");
        $dao = new PagoDAO();
        $resultado=$dao->borrarPago($id);
        return $resultado;
    }

    function modificarPago($pago, $tipomod){
        require_once(__DIR__."/../../modelo/dao/PagoDAO.php");
        $dao=new PagoDAO();
        $resultado=$dao->modificarPago($pago, $tipomod);
        return $resultado;
    }     
    
    function leerPagos(){
        require_once(__DIR__."/../../modelo/dao/PagoDAO.php");
        $dao = new PagoDAO();
        $pagos=$dao->leerPagos();
        return $pagos;
    } 