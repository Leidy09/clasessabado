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
	$num[0]=campoNumerico($_POST['n1']);
echo "</div></form>";
echo "<form><div>";
	$num[1]=campoNumerico($_POST['n2']);
echo "</div></form>";
echo "<form><div>";
	$num[2]=campoNumerico($_POST['n3']);
echo "</div></form>";
echo "<form><div>";
	$num[3]=campoNumerico($_POST['n4']);
echo "</div></form>";
echo "<form><div>";
	$num[4]=campoNumerico($_POST['n5']);
echo "</div></form>";
echo "<form><div>";
	$num[5]=campoNumerico($_POST['n6']);
echo "</div></form>";
echo "<form><div>";
	$num[6]=campoNumerico($_POST['n7']);
echo "</div></form>";
echo "<form><div>";
	$num[7]=campoNumerico($_POST['n8']);
echo "</div></form>";
echo "<form><div>";
	$num[8]=campoNumerico($_POST['n9']);
echo "</div></form>";
echo "<form><div>";
	$num[9]=campoNumerico($_POST['n10']);
echo "</div></form>";

	

	$num[0]=$_POST['n1'];
	$num[1]=$_POST['n2'];
	$num[2]=$_POST['n3'];
	$num[3]=$_POST['n4'];
	$num[4]=$_POST['n5'];
	$num[5]=$_POST['n6'];
	$num[6]=$_POST['n7'];
	$num[7]=$_POST['n8'];
	$num[8]=$_POST['n9'];
	$num[9]=$_POST['n10'];

	echo "<p>ORDENADO</p>";
	foreach ($num as $key => $value) {
		echo "<div>[key]=>$value</div>";
	}
	echo "<p>INVERSO</p>";
	for ($i=9; $i >=0 ; $i--) { 
		echo "<div>[$i]=>$num[$i]</div>";
	}





 ?>








?>		
</body>
</html>
