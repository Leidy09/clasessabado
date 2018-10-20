<!DOCTYPE html>
<html lang="es">
<head>
	<title>EJERCICIO ARRAY</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body>

		<nav class="inicio">
			<a href="inicio.html">INICIO</a>
			<a href="castigo1.php">ADICIONAL.1</a>
			<a href="castigo2.php">ADICIONAL.2</a>
			<a href="castigo3.php">ADICIONAL.3</a>
			<a href="castigo4.php">ADICIONAL.4</a>
			<a href="castigo5.php">ADICIONAL.5</a>
		</nav>
<?php 
	function camponumerico($var){
	if (empty($var)) {
			echo "Valor numerico no ingresado";
		}
}

echo "<form><div>";
	$numero1=camponumerico($_POST['n1']);
echo "</div></form>";
echo "<form><div>";
	$numero2=camponumerico($_POST['n2']);
echo "</div></form>";

echo "<form><div>";
	$numero3=camponumerico($_POST['n3']);
echo "</div></form>";


echo "<form><div>";
	$numero4=camponumerico($_POST['n4']);
echo "</div></form>";

echo "<form><div>";
	$numero5=camponumerico($_POST['n5']);
echo "</div></form>";

echo "<form><div>";
	$numero6=camponumerico($_POST['n6']);
echo "</div></form>";

echo "<form><div>";
	$numero7=camponumerico($_POST['n7']);
echo "</div></form>";

echo "<form><div>";
	$numero8=camponumerico($_POST['n8']);
echo "</div></form>";

echo "<form><div>";
	$numero9=camponumerico($_POST['n9']);
echo "</div></form>";

echo "<form><div>";
	$numero10=camponumerico($_POST['n10']);
echo "</div></form>";


	$numero1=$_POST['n1'];
	$numero2=$_POST['n2'];
	$numero3=$_POST['n3'];
	$numero4=$_POST['n4'];
	$numero5=$_POST['n5'];
	$numero6=$_POST['n6'];
	$numero7=$_POST['n7'];
	$numero8=$_POST['n8'];
	$numero9=$_POST['n9'];
	$numero10=$_POST['n10'];

	$numeros=array($numero1,$numero2,$numero3,$numero4,$numero5,$numero6,$numero7,$numero8,$numero9,$numero10);

	$promedio=($numeros[0] + $numeros[1] + $numeros[2] + $numeros[3] + $numeros[4] + $numeros[5] + $numeros[6] + $numeros[7] + $numeros[8] + $numeros[9]);

	echo "<div>";
	echo "<pre>";
	print_r($numeros);
	echo "El promedio es  ".($promedio/10);
 	echo "</pre>";
 	echo "</div>";




		 ?>

</body>
</html>
