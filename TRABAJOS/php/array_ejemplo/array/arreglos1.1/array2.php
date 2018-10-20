<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>ARREGLOS ARRAY</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="GET">

		<nav class="inicio">

	 	 <a class="fuentes" href="inicio.html">INICIO</a>
		 <a class="fuentes" href="array1.php">EJERCICIOS.1</a>
		 <a class="fuentes" href="array2.php">EJERCICIO.2</a>
		 
	 
		</nav>

<h2>EJERCICIOS</h2>
<p>Ejercicio.2.</p> 
		
<div>

		<label>Ingrese el numero. 1</label>
		<input type="number" name="num1" value="<?php echo $num1 = $_GET['num1']; ?>">

		<label>Ingrese el numero. 2 </label>
		<input type="number" name="num2" value="<?php echo $num2 = $_GET['num2']; ?>">
</div>

<div>

		<label>Ingrese el numero. 3 </label>
		<input type="number" name="num3" value="<?php echo $num3 = $_GET['num3']; ?>">

		<label>Ingrese el numero. 4 </label>
		<input type="number" name="num4" value="<?php echo $num4 = $_GET['num4']; ?>">
</div>

<div>

		<label>Ingrese el numero. 5 </label>
		<input type="number" name="num5" value="<?php echo $num5 = $_GET['num5']; ?>">

		<label>Ingrese el numero. 6 </label>
		<input type="number" name="num6" value="<?php echo $num6 = $_GET['num6']; ?>">
</iv>

<div>		

		<label>Ingrese el numero. 7 </label>
		<input type="number" name="num7" value="<?php echo $num7 = $_GET['num7']; ?>">

		<label>Ingrese el numero. 8 </label>
		<input type="number" name="num8" value="<?php echo $num8 = $_GET['num8']; ?>">

</div>

<div>
		<label>Ingrese el numero. 9 </label>
		<input type="number" name="num9" value="<?php echo $num9 = $_GET['num9']; ?>">

		<label>Ingrese el numero.10 </label>
		<input type="number" name="num10" value="<?php echo $num10 = $_GET['num10']; ?>">

		<input type="submit" value="Enviar">


</div>		

		<?php 

		
			if (isset($_GET['submit'])) {
				$num1 = $_GET['num1'];		
				$num2 = $_GET['num2'];
				$num3 = $_GET['num3'];
				$num4 = $_GET['num4'];	
				$num5 = $_GET['num5'];	
				$num6 = $_GET['num6'];	
				$num7 = $_GET['num7'];	
				$num8 = $_GET['num8'];
				$num9 = $_GET['num9'];	
				$num10 = $_GET['num10'];

			$numeros = array($num1, $num2, $num3, $num4, $num5, $num6, $num7, $num8, $num9, $num10);

				echo "<p> Ordenado, </p>";
				foreach ($numeros as $key => $value) {
				echo "[key]=>value";

			echo "<p> Invertido, </p>";

				}foreach($numeros);
					echo "<pre>";
						print_r($numeros);
					echo "</pre>";
	
	
				
				rsort($numeros);
					echo "<pre>";
						print_r($numeros);
					echo "</pre>";
}
	/*echo "Ordenado";
	sort($numeros);

	echo "<pre>";
		print_r($numeros);
	echo "</pre> </br>";

	// Array desordenado
	echo "</br> Desordenado";
	
	rsort($numeros);

	echo "<pre>";
		print_r($numeros);
	echo "</pre>";*/

?>

	</form>

</body>
</html>