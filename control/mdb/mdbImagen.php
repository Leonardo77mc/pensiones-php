<?php
    //Métodos que se ejecutan en la vista
    function buscarImagenPorId($id){
        require_once(__DIR__."/../../modelo/dao/ImagenDAO.php");
        $dao=new ImagenDAO(); //Se crea una nuevo objeto "ImagenDAO"
        $imagen = $dao->buscarImagenPorId( $id); //Se ejecuta el método buscarImagenPorId, con sus parámetros
        return $imagen; //Retorna un objeto tipo Imagen
    }

  
    function insertarImagen($imagen){
        require_once(__DIR__."/../../modelo/dao/ImagenDAO.php");
        $dao=new ImagenDAO();
        $resultado=$dao->insertarImagen($imagen);
        return $resultado;
    }

    
    function borrarImagen($id){
        require_once(__DIR__."/../../modelo/dao/ImagenDAO.php");
        $dao = new ImagenDAO();
        $resultado=$dao->borrarImagen($id);
        return $resultado;
    }     
    
    function leerImagenes(){
        require_once(__DIR__."/../../modelo/dao/ImagenDAO.php");
        $dao = new ImagenDAO();
        $imagenes=$dao->leerImagenes();
        return $imagenes;
    }     
    
    