<?php 
require_once 'guardar.php';

$usuario = new Usuario();

if (isset($_POST['INSERTAR'])) {
	$usuario->Nombre = $_POST['nom'];
	$usuario->Telefono = $_POST['tel'];
	$usuario->Insertar();
}
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>REGISTRAR DATOS</title>
</head>
<body>
		<form action="" method="POST">
			<table>
			<tr>
				<label>Nombre</label><br>
				<input type="text" name="nom"><br>
			</tr>

			<tr>
				<label>Telefono</label><br>
				<input type="text" name="tel"><br>
			</tr>
			</table>

			<input type="submit" name="INSERTAR">
				
		</form>

</body>
</html>