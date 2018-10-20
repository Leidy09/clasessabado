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
	
<form action="ejercicio5.php" method="POST">

<p>Realizar un formulario, con un campo de tipo email e imprimir del
lado del servidor, con PHP, la siguiente información:</p>

<li>a. Si tiene un @ o varios @ en el dato ingresado.</li>
<li>b. Cuál es el dominio del correo.</li>
<li>c. Cuál es el nombre del correo (antes del @).</li>
<li>d. Imprimir cuál es la extensión del dominio.</li>



		<div>
			<label>Correo @</label>	
		</div>
		<div>		
			<input type="email" name="email" value="" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}">
		</div>
		<div>
			<label>contraseña</label>
		</div>
		<div>
			<input type="password" name="contraseña">
	
			<input type="submit" name="enviar">
		</div>
<?php 

$email=$_POST['email'];

if ($_POST['email']){
	
	echo "tu email es: " .$_POST['email'];
}

$email=$_POST['correo'];
$contraseña=$_POST['contraseña'];



$dominio = explode('@', $email);   
if (checkdnsrr($dominio));
 echo "Dominio de la dirección válida";

// verificamos que no exista un error
if ( !empty($error) ) {
	echo "Dominio de la dirección inválida";
}

 ?>


</form>
</body>
</html>