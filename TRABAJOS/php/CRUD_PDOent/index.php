<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>REGISTRAR DATOS</title>
</head>
<body>
	<form action="" method="POST">


	<label>Email</label><br>
	<input type="email" name="email"><br>


	<label>Clave</label><br>
	<input type="password" name="clave"><br>

	<input type="submit" name="INGRESAR">
</form>
<?php 
if (isset($_POST['email']) &isset($_POST['clave'])) {
	
	require_once'conexion.php';
	require_once'Proceso/login.php';
}

 ?>
</body>
</html>