<?php  

 Class persona{
 	private $pdo;


 	public $ID;
 	public $Nombre;
 	public $Telefono;

 	public function __ CONSTRUCT()
 	{
 		try {
 			
 			$this-&gt;pdo =DB:: StartUp::()
 		} catch (Exception $e) {
 			
 			die($e-&gt;getMessage())
 		}
 	}
	public function Listar()
	{
		try {
			
			$stm = this -&gt;pdo-&gt;prepare("select *from usuario");
			$stm=-&gt;fetchAll(PDO:: FECTH_OBJ);
		} catch (Exception $e) {
			die($e-&gt;getMessage());
		}
	}

	public function obtener()
	{}

 }



?>