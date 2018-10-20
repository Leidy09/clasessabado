
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
	<title>EJERCICIOS ARRAY</title>
</head>
<body>
	<nav class="inicio">

 	 <a class="fuentes" href="inicio.html">INICIO</a>
		 <a class="fuentes" href="array1.php">EJERCICIO.1</a>
		 <a class="fuentes" href="array2.php">EJERCICIO.2</a>
		 <a class="fuentes" href="array3.php">EJERCICIO.3</a>
		 <a class="fuentes" href="array4.php">EJERCICIO.4</a>
	
	 
	</nav>


<h2>EJERCICIOS</h2>
<p>Ejercicio.4.</p> 

	<form action="array4_1.php" method="POST">
		<label>Primer número</label>
			<div>
				<input type="number" name="nume1">	
			</div>
		<label>Segundo número</label>
			<div>
				<input type="number" name="nume2">
			</div>
		<label>Tercer número</label>
			<div>
				<input type="number" name="nume3">
			</div>
		<label>Cuarto número</label>
			<div>
				<input type="number" name="nume4">
			</div>
		<label>Quinto número</label>
				<div>
					<input type="number" name="nume5">
					<input type="submit" value="Enviar" name="Enviar">
				</div>


	<?php
	//arreglo
	$nume1 = $_POST['nume1'];
	$nume2 = $_POST['nume2'];
	$nume3 = $_POST['nume3'];
	$nume4 = $_POST['nume4'];
	$nume5 = $_POST['nume5'];
	//tabla
$tabla = array($nume1,$nume2,$nume3,$nume4,$nume5);
//resultado
$resultado = ($tabla[0] + $tabla[1] + $tabla[2] + $tabla[3] + $tabla[4]);

?>


	</form>
</body>
</html>