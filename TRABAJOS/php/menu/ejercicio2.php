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
<form action="ejercicio2.php" method="POST">


	 <p>Realizar un formulario, con un campo de tipo texto que reciba una frase o una palabra, cada palabra se asigne un campo en un array</p>
	 
	<div>
	 	<label>Ingrese una frase o una palabra</label>
    </div>
	<div>
	 	<input type="text" name="texto" placeholder="Escriba una palabra o frase">
	 	<input type="submit" name="Enviar" value="Enviar">
	 	<input type="delete" name="Eliminar" value="Eliminar">

	</div>

<?php 
$Texto=$_POST['texto'];

$frase=array($Texto);




if (ctype_alpha($frase)) {

	echo $frase."es un campo de text;o"
}
echo "<pre>";
print_r($frase);
echo "</pre>";
echo "";
 ?>
</form>
</body>
</html>