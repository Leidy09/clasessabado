<?php 
include_once "seguridad.php";
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>REGISTRAR DATOS</title>
</head>
<body>
	<form action="" method="POST">

	<label>Nombre</label><br>
	<input type="text" name="nom"><br>


	<label>Telefono</label><br>
	<input type="text" name="tel"><br>

	<label>Email</label><br>
	<input type="email" name="email"><br>


	<label>Clave</label><br>
	<input type="password" name="clave"><br>

	<input type="submit" name="Enviar">
</form>
<?php 
if (isset($_POST['nom'])&& isset($_POST['tel'])&&isset($_POST['email'])&&isset($_POST['clave'])) {
	
	require_once "conexion.php";
	require_once "proceso/guardar.php";
}

 ?>
</body>
</html>