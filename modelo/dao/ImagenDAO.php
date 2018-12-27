<?php


require_once ("DataSource.php");
require_once (__DIR__."/../entidad/Imagen.php");

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
class ImagenDAO {
    
    public function buscarImagenPorId($id){
        $data_source = new DataSource();
        //password_hash("rasmuslerdorf", PASSWORD_DEFAULT)
        $data_table= $data_source->ejecutarConsulta("SELECT * FROM imagen WHERE idImagen = :id", 
                                                    array(':id'=>$id));
        $imagen=null;
        if(count($data_table)==1){
            foreach($data_table as $indice => $valor){
                $imagen = new Imagen(
                        $data_table[$indice]["idImagen"],
                        $data_table[$indice]["Habitacion_idHabitacion"], 
                        $data_table[$indice]["nombre"], 
                        $data_table[$indice]["url"],
                        $data_table[$indice]["descripcion"],
                        );
            }
            return $imagen;
        }else{
            return null;
        }
    }         
    
    public function leerImagenes(){
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta("SELECT * FROM imagen");
        $imagen=null;
        $imagenes=array();
        foreach($data_table as $indice => $valor){
                $imagen = new Imagen(
                        $data_table[$indice]["idImagen"],
                        $data_table[$indice]["Habitacion_idHabitacion"], 
                        $data_table[$indice]["nombre"], 
                        $data_table[$indice]["url"],
                        $data_table[$indice]["descripcion"],
                        );

                array_push($imagenes,$imagen);
        }
        return $imagenes;   
    }
    
    public function insertarImagen(Imagen $imagen){
        $data_source= new DataSource();
        $sql = "INSERT INTO imagen VALUES (:idImagen, :Habitacion_idHabitacion, :nombre, :url, :descripcion)";
        $resultado = $data_source->ejecutarActualizacion($sql, array(
            ':idImagen'=>$imagen->getIdImagen(),
            ':Habitacion_idHabitacion'=>$imagen->getHabitacion_idHabitacion(),
            ':nombre'=>$imagen->getNombre(),
            ':url'=>$imagen->getUrl(),
            ':descripcion'=>$imagen->getDescripcion(),
            )
        );
        
        return $resultado;
    }
    
       
    public function borrarImagen($id){
        $data_source = new DataSource();
        $usuario=  buscarImagenPorId($id);
        $resultado= $data_source->ejecutarActualizacion("DELETE FROM imagen WHERE idImagen = :id", array('id'=>$id));
   
        return $resultado;
    }
    
    
    
}