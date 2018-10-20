<?php  

require_once 'conexion.php';
class  Usuario{

public $ID;
public $Nombre;
public $Telefono;


 public function Insertar(){

 	$Conexion= new Conexion();
 	$registro="INSERT INTO usuario(Nombre,Telefono) VALUES (?,?)";
 	$consulta=$Conexion->prepare($registro);
 	$consulta->execute(
 		array(
 			$this->Nombre,
 			$this->Telefono
 			));
 }

}










// 




?>