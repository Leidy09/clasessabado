<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>SESSION STAR</title>
</head>
<body>

</body>
</html><?php 
function campos($var){
	if (empty($var)) {
			echo "Campo requerido";
		}

}
		echo "<div><form>";
			$Usuario=campos($_POST['Usuario']);
		echo "</div></form>";
		echo "<div><form>";
			$Contraseña=campos($_POST['Contraseña']);
		echo "</div></form>";





session_start();

$Usuario=$_POST['Usuario'];
$Contraseña=$_POST['Contraseña'];

$_session['Usuario']=$Usuario;

$_session['Contraseña']=$Contraseña;

echo "<div><form>El Usuario es $Usuario</div></form>";
echo "<div><form>La Contraseña es $Contraseña</div></form>";

echo "<a href ='menu.php'>Volver</a>";
 ?>