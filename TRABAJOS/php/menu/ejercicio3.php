
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
			
		</nav>
	</header>
<form action="" method="POST">

<p>Realizar un formulario, con un campo de tipo número e imprimir del
   lado del servidor, con PHP, la siguiente información.
	a. Cuantos caracteres tiene.
	b. Que indique en que número inicia.
	c. Que imprima los tres primeros números
	d. Que imprima los últimos siete dígitos.
	e. Que indique si tiene más de 10 caracteres.<!--Falta-->
	f. Que diga si puede ser un número telefónico o no.</p>	<!--Falta-->

<div>
	<label>Ingrese Un numero</label>
	<input type="number" name="numero">

	<input type="submit" name="Enviar">
</div>

<?php 

$numero=$_POST['numero'];
$inicia=substr($numero,-0,1);
$tresprimeros=substr($numero,0,3 );
$sieteultimos=substr($numero,-7);


echo "<div> EL numero ingresado es : ".$numero."</div>";

#--------------------cantidad de caracteres-------------------------

echo "<div> La cantidad de caracteres es: ".strlen($numero)."</div>";

#--------------------inicio del numero------------------------------

echo "<div>Inicia en el numero".$inicia."</div>";

#--------------------Los tres primeros numeros---------------------

echo "<div>Los tres primeros numeros son: ".$tresprimeros."</div>";

#--------------------los ultumos siete numeros--------------------

echo "<div>Los ultimos siete numeros son: ".$sieteultimos."</div>";


if (strlen($numero)>10) {

	echo "<div>El campo contiene  mas de 10 caracteres </div>";
	
}elseif (strlen($numero)<10) {
	echo "<div>EL campo contiene menos de 10 caracteres: ".($numero)."</div>";
}
if (strlen($numero)<11) {
	echo "<div>El numero ingresado puede ser un numero telefonico: " .$numero. "</div>";
}
else{
	echo "El numero no puede ser un numero de telefono";
}
echo "</div>";



/*$cadenas = array($numero);
foreach ($cadenas as $numero) {
    if (ctype_digit($numero)<11) {
        echo "<div>La campo $numero si puede ser un numero de telefono.\n</div>";

    }if (ctype_digit($numero)<11) {
        echo "<div>La campo $numero no puede ser un numero de telefono.\n</div>";
  	
    } 
            
}
*/
 ?>
	
</form>
</body>
</html>