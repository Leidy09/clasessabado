<?php 

class UsuarioModel{

	private $pdo;
	public function __CONSTRUCT(){
		try {
		
			$this->pdo = new PDO('mysql:host=localhost;dbname=registro','root','');
			$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		} catch (Exception $e) {
		
			die($e->getMessage());
			}

		}
	}
 function Listar()
	{

		try 
		{
			
			$result=array();

			$sl = $this->pdo->prepare("SELECT *FROM usuario");
			$sl->execute();


			foreach($sl->fetchAll(PDO::FETCH_OBJ) as $r)
			 {
				
				$user= new $Usuario();

				$user->$__SET('ID',$r->ID);
				$user->$__SET('Nombre',$r->Nombre);
				$user->$__SET('Telefono',$r->Telefono);


				 $result[]= $user;


			}

			return $result;

		} 
		catch (Exception $e)
		 {
			
			die($e->getMessage());

		}

	}
		 function obtener($ID){

		 	try {
		 		
		 		$sl= $this->pdo->prepare("SELECT * FROM usuario WHERE id = ?
		 		");

		 		$sl->execute(array(ID));
		 		$r = $sl->fetch(PDO:: FETCH_OBJ) ;

		 		$user= new $Usuario();

				$user->$__SET('ID',$r->id);
				$user->$__SET('Nombre',$r->Nombre);
				$user->$__SET('Telefono',$r->Telefono);

				return $user;

		 	} catch (Exception $e) {
		 		
		 		die($e->getMessage());
		 	}
		 }

		 function Eliminar($ID){

		 	try {
		 		
		 		$sl=$this->pdo->prepare("DELETE FROM usuario WHERE ID = ?");
		 		$stm->execute(array(ID));

		 	} catch (Exception $e) {

		 		die($e->getMessage());
		 		
		 	}
		 }

		 function Actualizar (Usuario $data){

			try {
				
				$sql= "UPDATE usario SET 

					Nombre = ?,
					Telefono = ?
					WHERE ID =?";

				$this->pdo->prepare($sql)->execute(array(
					$data->__GET('Nombre'),
					$data->__GET('Telefono')
					)
				);

			} catch (Exception $e) {
				
				die($e->getMessage());
			}
		}

		 function Registrar(Usuario $data){

			try {
				
				$sql ="INSERT INTO usuario (Nombre,Telefono) VALUES (?,?)";

				$ths->pdo->prepare($sql)->execute(array(
					$data->__GET('Nombre'),
					$data->__GET('Telefono')
					)
				);

			} catch (Exception $e) {
				die($e->getMessage());	
			}
		}





 ?>