<!DOCTYPE html>
<html lang="es">
<head>

			<title>EJERCICIO ARRAY</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>

<form method="POST"></form>
		
	<nav class="inicio">
		<a href="inicio.html">INICIO</a>
		<a href="ejer1.php">EJERCICIO.1</a>
		<a href="ejer2.php">EJERCICIO.2</a>
		<a href="ejer3.php">EJERCICIO.3</a>
		<a href="ejer4.php">EJERCICIO.4</a>
		<a href="ejer5.php">EJERCICIO.5</a>
		<a href="ejer6.php">EJERCICIO.6</a>
		<a href="adicionales.html">ADICIONALES</a>
	</nav>
			
<?php

function campoNumerico($var){
	if (empty($var)) {
			echo "Valor numerico no ingresado";
		}
}

echo "<form><div>";
	$num1=campoNumerico($_POST['num1']);
echo "</div></form>";
echo "<form><div>";
	$num2=campoNumerico($_POST['num2']);
echo "</div></form>";
echo "<form><div>";
	$num3=campoNumerico($_POST['num3']);
echo "</div></form>";
echo "<form><div>";
	$num4=campoNumerico($_POST['num4']);
echo "</div></form>";
echo "<form><div>";
	$num5=campoNumerico($_POST['num5']);
echo "</div></form>";




		$num1=$_POST['num1'];
		$num2=$_POST['num2'];
		$num3=$_POST['num3'];
		$num4=$_POST['num4'];
		$num5=$_POST['num5'];
		$mayor=0;

		$numero = array($num1,$num2,$num3,$num4,$num5);

		for ($i=0; $i<count($numero); $i++) { 
			if ($numero[$i]>$mayor) {
				$mayor=$numero[$i];
			}
		}

		echo "<div>";
		echo "<pre>";
		echo "<p>El array en la posicion mayor es:</p>";
		echo "<p>$mayor</p>";
		echo "</pre>";
		echo "</div>";







		/*$num1=$_POST['n1'];
		$num2=$_POST['n2'];
		$num3=$_POST['n3'];
		$num4=$_POST['n4'];
		$num5=$_POST['n5'];
		$num6=$_POST['n6'];
		$num7=$_POST['n7'];
		$num8=$_POST['n8'];
		$num9=$_POST['n9'];
		$num10=$_POST['n10'];

		$numeros = array($num1,$num2,$num3,$num4,$num5,$num6,$num7,$num8,$num9,$num10);

		$prom= ($num1 + $num2 + $num3 + $num4 + $num5 + $num6 + $num7 + $num8 + $num9 + $num10)/10;
		$suma=0;

for ($i=0; $i <count($numeros) ; $i++) { 
	$suma = $prom;
}
		echo "<p>El Promedio de los numeros ingresados es$suma</p>";
		

		*/
		
		
?>		
</body>
</html>
