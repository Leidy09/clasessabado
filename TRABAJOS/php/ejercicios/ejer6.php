html<!DOCTYPE html>
<html lang="es">
<head>
	<title>EJERCICIO ARRAY</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body>
	<nav class="inicio">
			<a href="inicio.html">INICIO</a>
			<a href="ejer1.php">EJERCICIO.1</a>
			<a href="ejer2.php">EJERCICIO.2</a>
			<a href="ejer3.php">EJERCICIO.3</a>
			<a href="ejer4.php">EJERCICIO.4</a>
			<a href="ejer5.php">EJERCICIO.5</a>
			<a href="ejer6.php">EJERCICIO.6</a>
			<a href="adicional.html">ADICIONALES</a>
	</nav>
	<form action="solucion6.php" method="POST">
		
	<h2>EJERCICIO.6</h2>
<p>Escribe dos numeros</p>
	<div>
		<label>Ingrese numero 1</label>
		<input type="number" name="campo1" placeholder="Campo 1">

		<select name="lista">
			<option value="Vacio">  </option>
			<option value="suma">+</option>
			<option value="resta">-</option>
			<option value="multi">*</option>
			<option value="divi">/</option>
		</select>
		<label>Ingrese numero 1</label>
		<input type="number" name="campo2" placeholder="Campo 2">
	</div>

	<div>
		<input type="submit" name="submit" value="Enviar">
	</div>
</form>

</body>
</html>