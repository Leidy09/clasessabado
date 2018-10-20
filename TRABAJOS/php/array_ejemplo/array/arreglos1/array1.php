<!DOCTYPE html>
<html lang="es">
<head>
	<title>EJERCICIO.1</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Style.css">
	
</head>
<body>


<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="GET" >

	<nav class="inicio">

 	 <a class="fuentes" href="inicio.html">INICIO</a>
	 <a class="fuentes" href="array1.php">EJERCICIOS.1</a>
	 <a class="fuentes" href="array2.php">EJERCICIO.2</a>
	 
	
	 
	</nav>


<h2>EJERCICIOS</h2>
<p>Ejercicio.1.</p> 



	<p>1.Llenar un arreglo de 5 elementos, imprimir la posición y el valor del elemento mayor almacenado en el arreglo. Tenga en cuenta que todos los elementos del arreglo son
	diferentes.</p>
					

<div>	
	<label for="">El numero en la posicion 1. es =</label>
		<input type="number" name="num0">

		<label for="">El numero en la posicion 2. es =</label>
	    <input type="number" name="num1">

		<label for="">El numero en la posicion 3. es =</label>
		<input type="number" name="num2">
						
</div>

<div >

		<label for="">El numero en la posicion 4. es =</label>
		<input type="number" name="num3">

		<label for="">El numero en la posicion 5. es =</label>
		<input type="number" name="num4">

		<input type="submit" value="enviar">
</div>




<?php

	 $num1=$_GET['num0'];
	 $num2=$_GET['num1'];
	 $num3=$_GET['num2'];
	 $num4=$_GET['num3'];
	 $num5=$_GET['num4'];
	 $mayor=0;

$numero=array($num1,$num2,$num3,$num4,$num5);
for ($i=0; $i <count($numero) ; $i++) { 
	if ($numero[$i]>$mayor) {
		$mayor=$numero[$i];
	}
}
	echo "<div>";
	echo "<pre>";
	echo "<p class=>El array en la posicion mayor es:</p>";
	echo "<p>$mayor</p>";
	echo "</pre>";
	echo "</div>";


 ?>


</form>
</body>
</html>


 