<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>formulario</title>
</head>
<body>
	<form action="20170818_procesa.php" method="get">
		<input placeholder="edad" type="text" name="edad">
		<input placeholder="nombre" type="text" name="nombre">
		
		<label for="M">Masculino</label><input id="M" value="M" type="radio" name="genero">
		<label for="F">Femenino</label><input id="F" value="F" type="radio" name="genero">
		<input type="submit">
	</form>
</body>
</html>