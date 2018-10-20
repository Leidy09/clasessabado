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
	$n1=camponumerico($_POST['n1']);
echo "</div></form>";
echo "<form><div>";
	$n2=camponumerico($_POST['n2']);
echo "</div></form>";

echo "<form><div>";
	$n3=camponumerico($_POST['n3']);
echo "</div></form>";


echo "<form><div>";
	$n4=camponumerico($_POST['n4']);
echo "</div></form>";

echo "<form><div>";
	$n5=camponumerico($_POST['n5']);
echo "</div></form>";

echo "<form><div>";
	$n6=camponumerico($_POST['n6']);
echo "</div></form>";

echo "<form><div>";
	$n7=camponumerico($_POST['n7']);
echo "</div></form>";

echo "<form><div>";
	$n8=camponumerico($_POST['n8']);
echo "</div></form>";

echo "<form><div>";
	$n9=camponumerico($_POST['n9']);
echo "</div></form>";

echo "<form><div>";
	$n10=camponumerico($_POST['n10']);
echo "</div></form>";


 


$n1=$_POST['n1'];
$n2=$_POST['n2'];
$n3=$_POST['n3'];
$n4=$_POST['n4'];
$n5=$_POST['n5'];
$n6=$_POST['n6'];
$n7=$_POST['n7'];
$n8=$_POST['n8'];
$n9=$_POST['n9'];
$n10=$_POST['n10'];
$ele=0;

$numero=array($n1,$n2,$n3,$n4,$n5,$n6,$n7,$n8,$n9,$n10);

		
for ($i=0; $i < count($numero); $i++) { 
	}
			


echo "<div>EL numero elevado es </div>";
echo "<div>EL numero elevado es".var_dump(pow($n1, 2))."</div>";
echo "<div>EL numero elevado es".var_dump(pow($n2, 2))."</div>";
echo "<div>EL numero elevado es".var_dump(pow($n3, 2))."</div>";
echo "<div>EL numero elevado es".var_dump(pow($n4, 2))."</div>";
echo "<div>EL numero elevado es".var_dump(pow($n5, 2))."</div>";
echo "<div>EL numero elevado es".var_dump(pow($n6, 2))."</div>";
echo "<div>EL numero elevado es".var_dump(pow($n7, 2))."</div>";
echo "<div>EL numero elevado es".var_dump(pow($n8, 2))."</div>";
echo "<div>EL numero elevado es".var_dump(pow($n9, 2))."</div>";
echo "<div>EL numero elevado es".var_dump(pow($n10, 2))."</div>";




?>
</body>
</html>
