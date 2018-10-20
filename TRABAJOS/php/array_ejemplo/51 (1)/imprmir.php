<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>experiencias</title>
	<link rel="stylesheet" href="css/mystyle.css">
</head>
<body>
	<h1>experiencias laborales</h1>
	<?php 
		$num = $_GET['num'];
		$suma = 0;
		for ($i=1; $i <= $num; $i++) { 
	?>
		<div>
			<h3>experiencia <?php echo $i ?>:</h3>
			<span class="experiencia"> <?php echo $_GET['exp'.$i] ?> </span>
			<span> <?php echo "$".$_GET['salario'.$i] ?> </span>	
		</div>
	<?php 
			$suma += $_GET['salario'.$i];
		}
	 ?>
	 <span>el promedio de sueldos es: $<?php echo number_format(round($suma / $num), 2); ?> </span>
</body>
</html>