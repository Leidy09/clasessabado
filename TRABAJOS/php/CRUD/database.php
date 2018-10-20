<?php  
class DB
{
	// public static function StrartUp()
	// {
		// $pdo = new PDO ('mysql:host=localhost;;charset=uft8','root');
		// $pdo-&gt;setAttribute(PDO:: ATTR_ERRMODE,PDO::ERRMODE EXCEPTION);
	// }
	 try {
	 	
	 	 $base= new PDO('mysql:host=localhost;dbname=Registro','root','');
	 	 $base ->setAttribute (PDO::ATTR_RRMODE ,PDO::ERRMODE EXCEPTION);
	 	 $base->exec("SET CHARACTER SET UTF8")
	 } catch (Exception $e) {
	 	die('Error'.$e->getMessage());
	 	echo"Linea de Error".$e->getLine();
	 }

}

?>