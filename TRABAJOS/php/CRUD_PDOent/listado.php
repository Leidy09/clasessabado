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
	
	<table> 
		<tr>
		  <td>ID</td>
		  <td>NOMBRE</td>
		  <td>TELEFONO</td>
		  <td>USUARIO</td>
		  <td>CONTRASEÑA</td> 
		  <td><a href="#">Actualizar</a></td> 
		  <td><a href="#">Eliminar</a></td>
		</tr>
	</table>
	<?php
	require_once'conexion.php';
	require_once'proceso/selecionar.php';
	?>
	<a href="cerrar.php?tk=<?php echo $_SESSION['token']?>">Cerrar sesion</a>
</body>
</html>