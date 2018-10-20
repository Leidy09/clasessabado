<!DOCTYPE html>
<html lang="es">
<head>
	<title>EJERCICIO ARRAY</title>
	<meta charset="utf-8">s
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

		
		<nav class="inicio">
			<a href="inicio.html">INICIO</a>
			<a href="solucion1.php">EJERCICIO.1</a>
			<a href="ejer2.php">EJERCICIO.2</a>
			<a href="ejer3.php">EJERCICIO.3</a>
			<a href="ejer4.php">EJERCICIO.4</a>
			<a href="ejer5.php">EJERCICIO.5</a>
			<a href="ejer6.php">EJERCICIO.6</a>
			<a href="adicionales.html">ADICIONALES</a>
			<!--<a href="castigo1.php">CASTIGO.1</a>
			<a href="castigo2.php">CASTIGO.2</a>
			<a href="castigo3.php">CASTIGO.3</a>
			<a href="castigo4.php">CASTIGO.4</a>
			<a href="castigo5.php">CASTIGO.5</a> -->
		</nav>
<?php 
function campoNumerico($var){
	if (empty($var)) {
			echo "Valor numerico no ingresado";
		}
}

echo "<form><div>";
	$nume1=campoNumerico($_POST['posicion1']);
echo "</div></form>";
echo "<form><div>";
	$nume2=campoNumerico($_POST['posicion2']);
echo "</div></form>";
echo "<form><div>";
	$nume3=campoNumerico($_POST['posicion3']);
echo "</div></form>";
echo "<form><div>";
	$nume4=campoNumerico($_POST['posicion4']);
echo "</div></form>";
echo "<form><div>";
	$nume5=campoNumerico($_POST['posicion5']);
echo "</div></form>";
echo "<div><form>";
	


	$nume1 = $_POST['posicion1'];
	$nume2 = $_POST['posicion2'];
	$nume3 = $_POST['posicion3'];
	$nume4 = $_POST['posicion4'];
	$nume5 = $_POST['posicion5'];
	//tabla
$vector = array($nume1,$nume2,$nume3,$nume4,$nume5);
//resultado
$resultado =($vector[0] + $vector[1] + $vector[2] + $vector[3] + $vector[4]);
echo "<form><p>EL numero en la posicion 1 es $vector[0]</p></form>";
echo "<form><p>EL numero en la posicion 2 es $vector[1]</p></form>";
echo "<form><p>EL numero en la posicion 3 es $vector[2]</p></form>";
echo "<form><p>EL numero en la posicion 4 es $vector[3]</p></form>";
echo "<form><p>EL numero en la posicion 5 es $vector[4]</p></form>";

echo "<p>El resultado es $resultado</p>";

 ?>

</body>
</html>