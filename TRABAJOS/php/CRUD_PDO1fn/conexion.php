<?php 

class Conexion extends PDO {

	private $base="mysql";
	private $host="localshost";
	private$dbname="registro";
	private$user="root";
	private $pass="usbw";

	public function __construct(){
		try {
			
			parent::__construct($this->base.'host='.';dbname='.$this->dbname,$this->user,$this->pass);
		} catch (Exception $e) {
			$e->getmessage();
		}
}
}
	
	



 ?>
