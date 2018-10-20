<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>ARREGLOS ARRAY</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<form action= method="_POST">

		<nav class="inicio">

	 	 <a class="fuentes" href="inicio.html">INICIO</a>
		 <a class="fuentes" href="array1.php">EJERCICIO.1</a>
		 <a class="fuentes" href="array2.php">EJERCICIO.2</a>
		 <a class="fuentes" href="array3.php">EJERCICIO.3</a>
		 <a class="fuentes" href="array4.php">EJERCICIO.4</a>
	 
		</nav>

<h2>EJERCICIOS</h2>
<p>Ejercicio.2.</p> 
		
<div>

		<label>Ingrese el numero. 1</label>
		<input type="number" name="num1" >

		<label>Ingrese el numero. 2 </label>
		<input type="number" name="num2" >
</div>

<div>

		<label>Ingrese el numero. 3 </label>
		<input type="number" name="num3" >

		<label>Ingrese el numero. 4 </label>
		<input type="number" name="num4" >
</div>

<div>

		<label>Ingrese el numero. 5 </label>
		<input type="number" name="num5" >

		<label>Ingrese el numero. 6 </label>
		<input type="number" name="num6" >
</div>

<div>		

		<label>Ingrese el numero. 7 </label>
		<input type="number" name="num7" >

		<label>Ingrese el numero. 8 </label>
		<input type="number" name="num8" >

</div>

<div>
		<label>Ingrese el numero. 9 </label>
		<input type="number" name="num9" >

		<label>Ingrese el numero.10 </label>
		<input type="number" name="num10" >

		<input type="submit" value="Enviar" name="Enviar">


</div>		
<?php 

		
			if (isset($_POST['Enviar'])) {
				$num1 = $_POST['num1'];		
				$num2 = $_POST['num2'];
				$num3 = $_POST['num3'];
				$num4 = $_POST['num4'];	
				$num5 = $_POST['num5'];	
				$num6 = $_POST['num6'];	
				$num7 = $_POST['num7'];	
				$num8 = $_POST['num8'];
				$num9 = $_POST['num9'];	
				$num10 =$_POST['num10'];

			$numeros=array($num1, $num2, $num3, $num4, $num5, $num6, $num7, $num8, $num9, $num10);


			echo "<p>ORDENADO</p>";

			foreach ($numeros as $key => $value) {
				echo "<div>[$key]=>$value</div>";

			}
			echo "<p>DESORDENADO</p>";
			for ($i=0; $i >=0; $i--) { 
				echo "[$i]=>$num[$i]";
			}
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