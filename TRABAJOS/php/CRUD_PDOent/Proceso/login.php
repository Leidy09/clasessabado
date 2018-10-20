<?php 

$email=$_POST['email'];
$clave=$_POST['clave'];

$consulta=$pdo->prepare("SELECT * FROM usuario WHERE Email =:email AND Clave=:clave");

$consulta->bind_param('email',$email);
$consulta->bind_param('clave',$clave);

$consulta->execute();

if ($consulta->rowCount()>=1) {
	session_start();
	$fila=$consulta->fetch();
	$_SESSION['Nombre']=$fila['Nombre'];
	$_SESSION['Email']=$fila['Email'];
	$_SESSION['Token']=md5(uniqid(mt_rand(),true));
	header("location: listado.php")
}else{

echo "ERROR datos no correctos";
}





 ?>