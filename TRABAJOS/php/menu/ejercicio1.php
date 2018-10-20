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
				<li><a href="inicio.html.html">INICIO</a></li>
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
			</ul>
		</nav>
	</header>
<form action="" method="POST">
	 
	
	<p>Realizar un formulario, que reciba un dato e imprimir del lado del
		servidor, con PHP, la siguiente información:</p>

		<ul>
			<li>Si es número.</li>
			<li>Si es texto.</li> 
			<li>Si tiene espacios.</li>
			<li>Cuantos caracteres tiene el campo ingresado.</li>	
		</ul>
	
	<div>
		<label>Ingrese un dato  de tipo texto,numerico o con espacios</label>
		<input  name="campo" placeholder="numerico,texto,espaciado" >
		<input type="submit" name="Entrar">
	</div>

<?php 

$tipos=$_POST['campo'];

#--------------------saber si es numerico--------------------
if (is_numeric($tipos)) {
	echo "<br>Es numerico".$tipos;

#--------------------saber si es oun campo de texto--------------------
}else if (ctype_alpha($tipos)) {
	echo "<br>Es un texto".$tipos;

}

#--------------------saber si tiene espacios--------------------
if (preg_match('/[\s\t]+/',$tipos)) {

	echo $tipos."<br> y tiene espacios";
	
}

#--------------------cantidad de caracteres--------------------
echo "<br> la cantidad de caracteres es: ".strlen($tipos);



?>
	</form>

</body>
</html>