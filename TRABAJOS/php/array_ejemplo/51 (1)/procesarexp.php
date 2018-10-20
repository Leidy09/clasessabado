<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<h1>experiencias laborales</h1>
	<form action="imprmir.php">
	<?php 
		$num = $_GET['num'];
	?>
	<input type="hidden" value="<?php echo $num; ?>" name="num">
	<?php
		for ($i=1; $i <= $num; $i++) { ?>
			<div>
				<input type="text" placeholder="Experiencia <?php echo $i ?> " name="exp<?php echo $i ?>" >
				<input type="number" placeholder="Salario" name="salario<?php echo $i ?>" >
			</div>

	<?php 
		}
	?>
		<input type="submit" value="imprimir">
	</form>
</body>
</html>