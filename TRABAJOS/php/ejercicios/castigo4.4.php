<!DOCtype="number" html>
<html lang="es">
<head>
	<title>EJERCICIO ARRAY</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type=
	"text/css" href="style.css">

</head>
<body>
	<<nav class="inicio">
			<a href="inicio.html">INICIO</a>
			<a href="castigo1.php">ADICIONAL.1</a>
			<a href="castigo2.php">ADICIONAL.2</a>
			<a href="castigo3.php">ADICIONAL.3</a>
			<a href="castigo4.php">ADICIONAL.4</a>
			<a href="castigo5.php">ADICIONAL.5</a>
		</nav>
<?php 

function campoNumerico($var){
	if (empty($var)) {
			echo "Valor numerico no ingresado";
		}
}

echo "<form><div>";
	$n1=campoNumerico($_POST['n1']);
echo "</div></form>";
echo "<form><div>";
	$n2=campoNumerico($_POST['n2']);
echo "</div></form>";
echo "<form><div>";
	$n3=campoNumerico($_POST['n3']);
echo "</div></form>";
echo "<form><div>";
	$n4=campoNumerico($_POST['n4']);
echo "</div></form>";
echo "<form><div>";
	$n5=campoNumerico($_POST['n5']);
echo "</div></form>";
echo "<form><div>";
	$n6=campoNumerico($_POST['n6']);
echo "</div></form>";
echo "<form><div>";
	$n7=campoNumerico($_POST['n7']);
echo "</div></form>";
echo "<form><div>";
	$n8=campoNumerico($_POST['n8']);
echo "</div></form>";
echo "<form><div>";
	$n9=campoNumerico($_POST['n9']);
echo "</div></form>";
echo "<form><div>";
	$n10=campoNumerico($_POST['n10']);
echo "</div></form>";

  $n1=$_POST['n1'];
  $n2=$_POST['n2'];
  $n3=$_POST['n3'];
  $n4=$_POST['n4'];
  $n5=$_POST['n5'];

  $A=array($n1,$n2,$n3,$n4,$n5);

  $n6=$_POST['n6'];
  $n7=$_POST['n7'];
  $n8=$_POST['n8'];
  $nu9=$_POST['n9'];
  $n10=$_POST['n10'];

  $B=array($n6,$n7,$n8,$n9,$n10);
   
  ?>


 </form>
 </body>
 </html>