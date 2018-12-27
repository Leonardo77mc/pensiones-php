<?php
/**
*	Pago
*/

class Pago{
	protected $idPago;
	protected $fechaPago;
	protected $fechaPagada;
	protected $valor;
	protected $Hospedaje_idHospedaje;

	public function __construct($idPago, $fechaPago, $fechaPagada, $valor, $Hospedaje_idHospedaje ){
        $this->Pago = $idPago;
		$this->fechaPago = $fechaPago;
		$this->fechaPagada = $fechaPagada;
		$this->valor = $valor;
		$this->Hospedaje_idHospedaje = $Hospedaje_idHospedaje;	
    }

    public function getidPago()
    {
        return $this->idPago;
    }
    
    public function setidPago($idPago)
    {
        $this->idPago = $idPago;

        return $this;
    }
    
     public function getfechaPago()
    {
        return $this->fechaPago;
    }
    
    public function setfechaPago($fechaPago)
    {
        $this->fechaPago = $fechaPago;

        return $this;
    }

	public function getfechaPagada()
    {
        return $this->fechaPagada;
    }

    public function setfechaPagada($fechaPagada)
    {
        $this->fechaPagada = $fechaPagada;

        return $this;
    }
    
	 public function getvalor ()
    {
        return $this->valor ;
    }

    
    public function setvalor ($valor)
    {
        $this->valor  = $valor ;

        return $this;
    }

     public function Hospedaje_idHospedaje()
    {
        return $this->Hospedaje_idHospedaje;
    }

    
    public function setHospedaje_idHospedaje($Hospedaje_idHospedaje)
    {
        $this->Hospedaje_idHospedaje = $Hospedaje_idHospedaje;

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