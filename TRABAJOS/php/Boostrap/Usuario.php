<?php 


class Usuario {

	private $ID;
	public $Nombre;
	public $Telefono;

	public function __GET($k){return $this->$k; }
	public function __SET($k, $v){return $this->$k = $v; }


}








 ?>