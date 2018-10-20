<!DOCTYPE html>
<html lang="es">
<head>
	<title>EJERCICIO ARRAY</title>
	<meta charset="utf-8">
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
	$n[0]=campoNumerico($_POST['1']);
echo "</div></form>";
echo "<form><div>";
	$n[1]=campoNumerico($_POST['2']);
echo "</div></form>";
echo "<form><div>";
	$n[2]=campoNumerico($_POST['3']);
echo "</div></form>";
echo "<form><div>";
	$n[3]=campoNumerico($_POST['4']);
echo "</div></form>";
echo "<form><div>";
	$n[4]=campoNumerico($_POST['5']);
echo "</div></form>";
echo "<form><div>";
	$n[5]=campoNumerico($_POST['6']);
echo "</div></form>";
echo "<form><div>";
	$n[6]=campoNumerico($_POST['7']);
echo "</div></form>";
echo "<form><div>";
	$n[7]=campoNumerico($_POST['8']);
echo "</div></form>";
echo "<form><div>";
	$n[8]=campoNumerico($_POST['9']);
echo "</div></form>";
echo "<form><div>";
	$n[9]=campoNumerico($_POST['10']);
echo "</div></form>";
echo "<form><div>";
	$n[10]=campoNumerico($_POST['11']);
echo "</div></form>";
echo "<form><div>";
	$n[11]=campoNumerico($_POST['12']);
echo "</div></form>";

		$n=array(12);
		if (isset($_POST['enviar'])) {
			$n[0]=$_POST['1'];
			$n[1]=$_POST['2'];
			$n[2]=$_POST['3'];
			$n[3]=$_POST['4'];
			$n[4]=$_POST['5'];
			$n[5]=$_POST['6'];
			$n[6]=$_POST['7'];
			$n[7]=$_POST['8'];
			$n[8]=$_POST['9'];
			$n[9]=$_POST['10'];
			$n[10]=$_POST['11'];
			$n[11]=$_POST['12'];
			$b=$_POST['buscar'];
			$var=0;

				for ($i=0; $i <12 ; $i++) { 
				$n[$i];
				if ($n[$i]==$b) {
					$var=$i;
				}
		       }
		}

		echo "<p>El numero  esta en la posicion</p>".($var+1);
		 
		 ?>



</body>
</html>