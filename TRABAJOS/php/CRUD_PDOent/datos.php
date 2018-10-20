 <?php 

include_once "seguridad.php";

 ?>


<!DOCTYPE html>
<html lang="es">
<head>
	<m eta charset="utf-8">
	<title>LISTA DE REGISTRO</title>

</head>
<body>
<p>Bienvenido<?php echo $_SESSION['Email']?></p>
	
	<?php 

		require_once"conexion.php";
		require_once"proceso/actualiza.php";

	 ?>

	<?php
	require_once'conexion.php';
	require_once'proceso/selecionar.php';
	?>
	<a href="cerrar.php?tk=<?php echo $_SESSION['token']?>">Cerrar sesion</a>
</body>
</html>