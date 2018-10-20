<?php  

$Nombre=$_POST['nom'];
$Telefono=$_POST['tel'];
$Usuario=$_POST['usuario'];
$Clave=$_POST['clave'];

$consulta=$pdo->prepare("INSERT INTO usuario (Nombre:,Telefono,Email,Clave) VALUES (?,?,?,?)");

$consulta->bindParam(1,$Nombre);
$consulta->bindParam(2,$Telefono);
$consulta->bindParam(3,$Email);
$consulta->bindParam(4,$Clave);

if ($consulta->execute()) {

	echo "Datos Almacenados";

	}else{
		echo "Error, No se puede guardar los datos";
	}
?>