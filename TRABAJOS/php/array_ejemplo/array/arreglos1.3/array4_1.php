
<?php

/*Arreglo*/
	$num1 = $_POST['nume1'];
	$num2 = $_POST['nume2'];
	$num3 = $_POST['nume3'];
	$num4 = $_POST['nume4'];
	$num5 = $_POST['nume5'];
$tabla = array($nume1,$nume2,$nume3,$nume4,$nume5);
$resultado = ($tabla[0] + $tabla[1] + $tabla[2] + $tabla[3] + $tabla[4]);
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
	<title> Array 4 </title>
</head>

<body>
		
<h2>EJERCICIOS</h2>
<p>Ejercicio.4.</p> 

	
	
	<form action="array4_1.php" method="GET">

		<label>Primer número</label>
			<div>
				<input type="number" name="num1">	
			</div>
		<label>Segundo número</label>
			<div>
				<input type="number" name="num2">
			</div>
		<label>Tercer número</label>
			<div>
				<input type="number" name="num3">
			</div>
		<label>Cuarto número</label>
			<div>
				<input type="number" name="num4">
			</div>
		<label>Quinto número</label>
			<div>
				<input type="number" name="num5">
				<input type="submit" value="Enviar" name="Enviar">
			</div>
	</form>
</body>
</html>