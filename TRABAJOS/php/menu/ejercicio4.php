<!DOCTYPE html>
<html lang="es">
<head>
	<title>EJERCICIO</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="shortcut icon" type="img/x-icon" href="img/img.jpg">

</head>
<body>
	<header>
		<nav>
			<ul>
				<li><a href="inicio.html">INICIO</a></li>
				<li><a href="#">EJERCICIOS</a>
					<div>
						<ul>
							<li><a href="ejercicio1.php" class="titulo">EJERCICIO1</a></li>
							<li><a href="ejercicio2.php" class="titulo">EJERCICIO2</a></li>
							<li><a href="ejercicio3.php" class="titulo">EJERCICIO3</a></li>
							<li><a href="ejercicio4.php" class="titulo">EJERCICIO4</a></li>
							<li><a href="ejercicio5.php" class="titulo">EJERCICIO5</a></li>
						</ul>
					</div>

				</li>
				<li><a href="conclusion.php">CONCLUSIONES</a></li>
			
		</nav>
	</header>
<form action="" method="POST">
	<P>Realizar un formulario, con un campo de tipo date e imprimir del lado
	   del servidor, con PHP, la siguiente información:</P>
	  <li> a. Indicar cuál fue el año ingresado.</li>
	  <li> b. Indicar cuál fue el mes ingresado.</li>
	  <li> c. Indicar cuál fue el día ingresado.</li>
	  <li> d. Convertir en fecha con la función date_date_set().</li><!--Falta-->
	  <li> e. Después de convertir, imprimirla.</li><!--Falta-->

	 <div>
	 	<label>Ingrese una fecha</label>
	 	<input type="date" name="datos">
	 </div>
	 <div>
	 	<input type="submit" name="enviar">
	 </div>
	
<?php 
	if (isset($_POST['enviar'])) {
	$dato=$_POST['datos'];
	$proceso =explode("-", $dato);
	echo "<div id='ejer1'>a. El año es $proceso[0] </div>";
	echo "<div id='ejer1'>a. El mes es $proceso[1]</div>";
	echo "<div id='ejer1'>a. El dia es $proceso[2] </div>";

	$dates = new DateTime($_POST['datos']);
	echo "<div id='ejer1'>d.e La fecha ingresada es: " .$dates->format('Y-m-d') ;
	echo "</div>";
}
/*$año=$_POST['datos'];
	
	$date = strtotime($año);
	
	echo"<div>El año ingresado es:</div>";
	echo date("Y", $date); 
	echo"<div>El mes ingresado es:</div>";
	echo date("m", $date); 
    echo"<div>El dia ingresado es: </div>";
    echo date("d", $date); 

$dats = new DateTime($_POST['datos']);
	echo "<div id='ejer1'>d.e La fecha ingresada es: " .$dats->format('Y-m-d') ;
	echo "</div>";
*/

?>   

	 
</form>
</body>
</html>