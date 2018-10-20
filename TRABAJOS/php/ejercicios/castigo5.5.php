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
	function campotexto($var){
	if (empty($var)) {
			echo "Ingrese lo requerido";
		}
}

echo "<form><div>";
	$p1=campotexto($_POST['p1']);
echo "</div></form>";

echo "<form><div>";
	$p2=campotexto($_POST['p2']);
echo "</div></form>";

echo "<form><div>";
	$p3=campotexto($_POST['p3']);
echo "</div></form>";

echo "<form><div>";
	$p4=campotexto($_POST['p4']);
echo "</div></form>";

echo "<form><div>";
	$p5=campotexto($_POST['p5']);
echo "</div></form>";

echo "<form><div>";
	$p6=campotexto($_POST['p6']);
echo "</div></form>";



		$p1=$_POST['p1'];
		$p2=$_POST['p2'];
		$p3=$_POST['p3'];

		$M=array($p1,$p2,$p3);

		$p4=$_POST['p4'];
		$p5=$_POST['p5'];
		$p6=$_POST['p6'];

		$N=array($p4,$p5,$p6);

		if ($M ==$N) {

			echo "Son iguales";

		}else if ($M != $N) {

			echo "Son diferentes";                                                                                                                                                                                                                                      
		}

?>

</body>
</html>
