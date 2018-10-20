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
			<a href="ejer1.php">EJERCICIO.1</a>
			<a href="ejer2.php">EJERCICIO.2</a>
			<a href="ejer3.php">EJERCICIO.3</a>
			<a href="ejer4.php">EJERCICIO.4</a>
			<a href="ejer5.php">EJERCICIO.5</a>
			<a href="ejer6.php">EJERCICIO.6</a>
			<a href="adicional.html">ADICIONALES</a>
	</nav>
<?php 

function campoNumerico($var){
	if (empty($var)) {
		echo "Valor numerico no ingresado";
		}
}

echo "<form><div>";
	$operacion=campoNumerico($_POST['campo1']);
echo "</div></form>";
echo "<form><div>";
	$operacion=campoNumerico($_POST['campo2']);
echo "</div></form>";




if (isset($_POST['submit'])) {
$operacion = $_POST['lista'];

switch ($operacion) {
	case 'suma':
		echo "EL RESULTADO DE LA SUMA ES ";
		echo $_POST['campo1'] + $_POST['campo2'];
		break;

	case 'resta':
		echo "LA RESULTADO DE LA RESTA ES ";
		echo $_POST['campo1'] - $_POST['campo2'];	
		break;

	case 'multi':
		echo "LA RESULTADO DE LA MULTIPLICACION ES ";
		echo $_POST['campo1'] * $_POST['campo2'];	
		break;

	case 'divi':
		echo "LA RESULTADO DE LA DIVISION ES ";
		echo $_POST['campo1'] / $_POST['campo2'];	
		break;
	}	
}
 ?>
	</form>

</body>
</html>
