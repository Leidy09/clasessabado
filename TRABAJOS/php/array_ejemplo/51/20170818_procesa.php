<?php 
function validaEdad($variable){
	if (is_numeric($variable) && !empty($variable)) {
		if ($variable >= 0) {
			echo "todo bien";
		}else{
			echo "esta mal";
		}
	}else{
		echo "esta mal";
	}
}
function validaAlpha($variable){
	if (ctype_alpha($variable) && !empty($variable)) {
		echo "nombre correcto";	
	}else{
		echo "nombre incorrecto";
	}
}
function validaRadios($var, $const1, $const2){
	if ($var == $const1 || $var == $const2) {
		return $var;
	}else{
		return "No dice";
	}
}
//trim
//explode
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>valida</title>
</head>
<body>
	<?php 
		if(isset($_GET['edad'])) {echo validaEdad($_GET['edad']);}
		echo "<br>";
		if(isset($_GET['nombre'])) {echo validaAlpha($_GET['nombre']);}
		if(isset($_GET['genero'])) {$genero = validaRadios($_GET['genero'], "M", "F");}
		echo "<hr>genero: $genero<hr>";
	 ?>
</body>
</html>