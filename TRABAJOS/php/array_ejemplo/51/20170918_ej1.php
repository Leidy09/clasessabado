<?php 
function sumaNumeros($num1, $num2){
	$resultado = $num1 + $num2;
	return $resultado;
}

// echo sumaNumeros(5, 4). "<br>";
// echo sumaNumeros(10, 10). "<br>";
// echo sumaNumeros(8, 3). "<br>";
// echo sumaNumeros(523, 411). "<br>";
$num3 = 10;

function numMayor($num1 , $num2){
	if($num1 > $num2){
		echo "El numero $num1 es mayor que $num2";
	}elseif($num2 > $num1){
		echo "El numero $num2 es mayor que $num1";
	}else{
		echo "los numeros son iguales";
	}
	echo "<br>$num3<br>";

}

numMayor(7, 9);
numMayor(7, 6);
numMayor(10, 10);
 ?>
