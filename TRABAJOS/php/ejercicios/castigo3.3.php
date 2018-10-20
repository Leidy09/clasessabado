<!DOCTYPE html>
<html lang="es">
<head>
	<title>EJERCICIO ARRAY</title>
	<link rel="stylesheet" type="text/css" href="Style.css">
	<meta charset="uft-8">
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
echo "<form><div>";
	$n11=campoNumerico($_POST['n11']);
echo "</div></form>";
echo "<form><div>";
	$n12=campoNumerico($_POST['n12']);
echo "</div></form>";
echo "<form><div>";
	$n13=campoNumerico($_POST['n13']);
echo "</div></form>";
echo "<form><div>";
	$n14=campoNumerico($_POST['n14']);
echo "</div></form>";
echo "<form><div>";
	$n15=campoNumerico($_POST['n15']);
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
		$n11=$_POST['n11'];
		$n12=$_POST['n12'];
		$n13=$_POST['n13'];
		$n14=$_POST['n14'];
		$n15=$_POST['n15'];

		$ns= array($n1,$n2,$n3,$n4,$n5,$n6,$n7,$n8,$n9,$n10,$n11,$n12,$n13,$n14,$n15);

		$pos=0;
		$neg=0;
		$cero=0;
		$res=0;

		for ($i=0; $i <15 ; $i++) { 
			
			if($ns >0) {
				$pos=$pos+1;

			}if ($ns<0) {
				$neg=$neg+1;

			}if ($ns == 0) {
				$cero =$cero+1;
			}
		}
		echo "<div>Los numeros mayores que cero son $pos</div>";
		echo "<div>Los numeros menores que  cero son $neg</div>";
		echo "<div>Los numeros igual a cero son $cero</div>"



	

		

		/*  if($ns >0) {
				$pos=$pos+1;

			}if ($ns<0) {
				$neg=$neg+1;

			}if ($ns == 0) {
				$cero =$cero+1;
			}
		}
		echo "Los ns mayores que cero son $pos";
		echo "Los ns menores que  cero son $neg";
		echo "Los ns igual a cero son $cero"

		;for ($i=1; $i <count($ns) ; $i++) { 
		 if ($ns > 0) {
		 	$pos+=+1;
		 }else if ($ns < 0) {
			$neg+1;

		}else if ($ns == 0) {
			$cero +1;
		}
	}

		echo "<div>Los ns mayor que cero son $pos</div>";
		echo "<div>Los ns menor que cero son $neg</div>";
		echo "<div>Los ns igual que cero son $cero</div>";
		
*/
 ?>
		
</form>
</body>
</html>
