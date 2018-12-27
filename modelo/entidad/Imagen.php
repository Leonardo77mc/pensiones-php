<?php
/**
*	Imagen
*/

class Imagen{
	protected $idImagen;
	protected $Habitacion_idImagen;
	protected $nombre;
	protected $url;
	protected $descripcion;

	public function __construct($idImagen, $Habitacion_idImagen, $nombre, $url, $descripcion ){
        $this->idImagen = $idImagen;
		$this->Habitacion_idImagen = $Habitacion_idImagen;
		$this->nombre = $nombre;
		$this->url = $url;
		$this->descripcion = $descripcion;	
    }

    public function getidImagen()
    {
        return $this->idImagen;
    }
    
    public function setidImagen($idImagen)
    {
        $this->idImagen = $idImagen;

        return $this;
    }
    
     public function getHabitacion_idImagen()
    {
        return $this->Habitacion_idImagen;
    }
    
    public function setCc($Habitacion_idImagen)
    {
        $this->Habitacion_idImagen = $Habitacion_idImagen;

        return $this;
    }

	public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }
    
	 public function geturl ()
    {
        return $this->url ;
    }

    
    public function seturl ($url )
    {
        $this->url  = $url ;

        return $this;
    }

     public function descripcion()
    {
        return $this->descripcion;
    }

    
    public function setdescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    } 

    public function toArray() {
        $vars = get_object_vars ( $this );
        $array = array ();
        foreach ( $vars as $key => $value ) {
            $array [ltrim ( $key, '_' )] = $value;
        }
        return $array;
    }
}