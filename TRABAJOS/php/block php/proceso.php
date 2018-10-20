<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Hoja de vida</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<form method="Post"></form>
<?php  

function camposNoRequeridos($var){
	if (empty($var)) {
			echo "No dijo";
		}else{
			if (is_numeric($var)) {
				echo "Error, valor numerico ingresado";
			}else{
			echo "$var";
			}
		}
}

function camposRequeridos($var){
	if (!isset($var)) {
			echo "Error, campo no declarado";
		}else{

			if(empty($var)) {
				echo "Error, campo vacio";	
			}
			else if(is_numeric($var)) {
				echo "Error, valor numerico ingresado";
			}else{
				echo "$var";
			}
		}
}

function campoNumerico($var){
	if (empty($var)) {
			echo "No dijo";
		}else{
			if (is_numeric($var)) {
				echo "$var";
			}else{
				echo "Error,Digite lo pedido";
			}
		}
		
}

function validaRadios($var, $const1, $const2){
	if ($var == $const1 || $var == $const2) {
		$respuesta = $var;
	}else{
		$respuesta = "no dice";
	}
	return $respuesta;
}
	

	echo "<div  class='inicio'>
		
		<div>
			<h2>.HOJA DE VIDA</h2>
		</div>";

		echo "<div class='l'>";
		
			$ciudad=camposRequeridos($_POST['ciudad']);
		
		echo "</div>";

		echo "<div class='l'>";

			$cargo1=camposNoRequeridos($_POST['cargo1']);
		
		echo "</div>";

		echo "<div class='l'>";

			$codigo=campoNumerico($_POST['codigo']);

		echo "</div>";
	
	echo "</div>";

	echo "<h2> l.DATOS PERSONALES</h2>";

			echo "<div class='datos'>";
			
				echo "<div class='l'>";

					$primerapellido=camposRequeridos($_POST['primerapellido']);

				echo "</div>";	

				echo "<div class='l'>";

					$segundoapellido=camposNoRequeridos($_POST['segundoapellido']);

				echo "</div>";

				echo "<div class='l'>";

					$nombre=camposRequeridos($_POST['nombre']);

				echo "</div>";		

			echo "</div>";

			echo "<div class='datos'>";

				echo "<div class='l'>";

					$ocupacion=camposRequeridos($_POST['ocupacion']);

				echo "</div>";

				echo "<div class='l'>";

					$años=campoNumerico($_POST['años']);

				echo "</div>";

				echo "<div class='l'>";

					$salario=campoNumerico($_POST['salario']);

				echo "</div>";

				echo "<div class='l'>";

					$lugar=camposNoRequeridos($_POST['lugar']);

				echo "</div>";

				echo "<div class='l'>";

					$lugarnacimiento=camposRequeridos($_POST['lugarnacimiento']);

				echo "</div>";


			echo "</div>";


			echo "<div class='datos'>";

				echo "<div class='l'>";

					$estado=camposRequeridos($_POST['estado']);

				echo "</div>";

				echo "<div class='l'>";

					$direcciondomicilio=camposRequeridos($_POST['direcciondomicilio']);

				echo "</div>";

				echo "<div class='l'>";

					$barrio=camposRequeridos($_POST['barrio']);

				echo "</div>";

				echo "<div class='l'>";

					$telefonodomicilio=campoNumerico($_POST['telefonodomicilio']);

				echo "</div>";

				echo "<div class='l'>";

					$cedula=campoNumerico($_POST['cedula']);

				echo "</div>";

			echo "</div>";

			echo "<div class='datos'>";

				echo "<div class='l'>";

					$numero1=campoNumerico($_POST['numero1']);

				echo "</div>";

				echo "<div class='l'>";

					$libreta =(isset($_POST['libreta']))?validaRadios($_POST['libreta'], "Primera", "Segunda"):"error";
					echo "$libreta";

				echo "</div>";

				echo "<div class='l'>";

					$expedida=camposNoRequeridos($_POST['expedida']);

				echo "</div>";

				echo "<div class='l'>";

					$distrito=campoNumerico($_POST['distrito']);

				echo "</div>";

				echo "<div class='l'>";

					$licencia=campoNumerico($_POST['licencia']);

				echo "</div>";

				echo "<div class='l'>";

					$vivienda=(isset($_POST['vivienda']))?validaRadios($_POST['vivienda'], "SI", "NO"):"error";
					echo "$vivienda";

				echo "</div>";

			echo "</div>";

			echo "<div class='datos'>";

				echo "<div class='l'>";

					$nombrearrendador=camposNoRequeridos($_POST['nombrearrendador']);

				echo "</div>";

				echo "<div class='l'>";

					$telefonoarrendador=campoNumerico($_POST['telefonoarrendador']);

				echo "</div>";

				echo "<div class='l'>";

					$valor=campoNumerico($_POST['valor']);

				echo "</div>";

				echo "<div class='l'>";

					$trabajando=(isset($_POST['trabajando']))?validaRadios($_POST['trabajando'], "si", "no"):"error";
					echo "$trabajando";

				echo "</div>";

				echo "<div class='l'>";

					$emp=(isset($_POST['emp']))?validaRadios($_POST['emp'], "Empleado", "Independiente"):"error";
					echo "$emp";

				echo "</div>";

			echo "</div>";

	echo "<h2 >ll.EDUCACION Y APTITUDES</h2>";

			echo "<div class='datos'>";

				echo "<div class='l'>";

					echo "<label>Primaria</label>";

					$establecimiento=camposNoRequeridos($_POST['establecimiento']);

				echo "</div>";

				echo "<div class='l'>";
				
					$ciudadeduca=camposNoRequeridos($_POST['ciudadeduca']);

				echo "</div>";

				echo "<div class='l'>";
				
					$grado=camposNoRequeridos($_POST['grado']);

				echo "</div>";


			echo "</div>";

			echo "<div class='datos'>";

				echo "<div class='l'>";

					echo "<label>Bachilleer</label>";
				
					$establecimiento1=camposNoRequeridos($_POST['establecimiento1']);

				echo "</div>";

				echo "<div class='l'>";
				
					$ciudadbachi=camposNoRequeridos($_POST['ciudadbachi']);

				echo "</div>";

				echo "<div class='l'>";
				
					$grado1=camposNoRequeridos($_POST['grado1']);

				echo "</div>";

			echo "</div>";

			echo "<div class='datos'>";

				echo "<div class='l'>";

					echo "<label>Educacion superior</label>";
				
					$establecimiento2=camposNoRequeridos($_POST['establecimiento2']);

				echo "</div>";

				echo "<div class='l'>";
				
					$ciudadsuper=camposNoRequeridos($_POST['ciudadsuper']);

				echo "</div>";

				echo "<div class='l'>";
				
					$grado2=camposNoRequeridos($_POST['grado2']);

				echo "</div>";

			
			echo "</div>";

			echo "<div class='datos'>";

				echo "<div class='l'>";
				
					$titulo=camposNoRequeridos($_POST['titulo']);

				echo "</div>";

				echo "<div class='l'>";
				
					$titulo=camposNoRequeridos($_POST['titulo']);

				echo "</div>";

				echo "<div class='l'>";
				
					$estudio=camposNoRequeridos($_POST['estudio']);

				echo "</div>";

				echo "<div class='l'>";
				
					$horario=camposNoRequeridos($_POST['horario']);

				echo "</div>";

			echo "</div>";

		echo "<h2>lll.EXPERIENCIA LABORAL</h2>";

			echo "<div class='datos'>";

				echo "<div class='l'>";
				
					$nombreempresa=camposNoRequeridos($_POST['nombreempresa']);

				echo "</div>";

				echo "<div class='l'>";
				
					$empresa=camposNoRequeridos($_POST['empresa']);

				echo "</div>";

				echo "<div class='l'>";
				
					$telefonoempresa=campoNumerico($_POST['telefonoempresa']);

				echo "</div>";

				echo "<div class='l'>";
				
					$nombrejefe=camposNoRequeridos($_POST['nombrejefe']);

				echo "</div>";

				echo "<div class='l'>";
				
					$cargo=camposNoRequeridos($_POST['cargo']);

				echo "</div>";

				echo "<div class='l'>";
				
					$funciones=camposNoRequeridos($_POST['funciones']);

				echo "</div>";

			echo "</div>";


			echo "<div class='datos'>";

				echo "<div class='l'>";
				
					$inicial=camposNoRequeridos($_POST['inicial']);

				echo "</div>";

				echo "<div class='l'>";
				
					$final=camposNoRequeridos($_POST['final']);

				echo "</div>";

				echo "<div class='l'>";
				
					$motivo=camposNoRequeridos($_POST['motivo']);

				echo "</div>";

			echo "</div>";

		echo "<h2>lV. TRAYECTORIAS POR EMPRESAS</h2>";


		echo "<h2>V. INFORMACION FAMILIAR</h2>";


			echo "<div class='datos'>";

				echo "<div class='l'>";
				
					$cargoactual=camposNoRequeridos($_POST['cargoactual']);

				echo "</div>";

				echo "<div class='l'>";
				
					$direccionfamiliar=camposNoRequeridos($_POST['direccionfamiliar']);

				echo "</div>";

				echo "<div class='l'>";
				
					$telefonofamiliar=campoNumerico($_POST['telefonofamiliar']);

				echo "</div>";

				echo "<div class='l'>";
				
					$ciudadresidensia=camposNoRequeridos($_POST['ciudadresidensia']);

				echo "</div>";

				


			echo "</div>";


			echo "<div class='datos'>";

				echo "<div class='l'>";
				
					$personas=campoNumerico($_POST['personas']);

				echo "</div>";

				echo "<div class='l'>";
				
					$parentesco=camposNoRequeridos($_POST['parentesco']);

				echo "</div>";

				echo "<div class='l'>";
				
					$edades=camposNoRequeridos($_POST['edades']);

				echo "</div>";

				echo "<div class='l'>";
				
					$nombrepadres=camposNoRequeridos($_POST['nombrepadres']);

				echo "</div>";

				echo "<div class='l'>";
				
					$profesion=camposNoRequeridos($_POST['profesion']);

				echo "</div>";

			echo "</div>";

		echo "<h2>Vl.REFERENCIAS PERSONALES</h2>";

			echo "<div class='datos'>";

				echo "<div class='l'>";
				
					$nombrereferencias=camposNoRequeridos($_POST['nombrereferencias']);

				echo "</div>";

				echo "<div class='l'>";
				
					$ocupacionreferencias=camposNoRequeridos($_POST['ocupacionreferencias']);

				echo "</div>";

				echo "<div class='l'>";
				
					$Direccionreferencias=camposNoRequeridos($_POST['Direccionreferencias']);

				echo "</div>";

				echo "<div class='l'>";
				
					$telefonoreferencias=campoNumerico($_POST['telefonoreferencias']);

				echo "</div>";

			echo "</div>";

			echo "<div class='datos'>";

				echo "<div class='l'>";
				
					$nombrereferenciasa=camposNoRequeridos($_POST['nombrereferencias1']);

				echo "</div>";

				echo "<div class='l'>";
				
					$ocupacionreferenciasa=camposNoRequeridos($_POST['ocupacionreferencias1']);

				echo "</div>";

				echo "<div class='l'>";
				
					$Direccionreferenciasa=camposNoRequeridos($_POST['Direccionreferencias1']);

				echo "</div>";

				echo "<div class='l'>";
				
					$telefonoreferenciasa=campoNumerico($_POST['telefonoreferencias1']);

				echo "</div>";

			echo "</div>";

		echo "<h2>Vll.INFORMACION ADICIONAL</h2>";

			echo "<div class='datos'>";

				echo "<div class='l'>";
				
					$empleo=camposNoRequeridos($_POST['empleo']);

				echo "</div>";

				echo "<div class='l'>";
				
					$persona_reco=camposNoRequeridos($_POST['persona_reco']);

				echo "</div>";

				echo "<div class='l'>";
				
					$division=camposNoRequeridos($_POST['division']);

				echo "</div>";

				echo "<div class='l'>";
				
					$parientes=camposNoRequeridos($_POST['parientes']);

				echo "</div>";

			echo "</div";

		
			

			
				
				
			echo "<div class=datos>";
				
					echo "<h2>Nota importante</h2>";

						echo "<label>Favor no llamar por telefono, ni concurrir a <br>preguntar por el resultado de esta solicitud.<br>Nosotros le avisaremos gracias.</label>";

			
		
		echo "</div>";
		
			echo "<h2>Certificacion</h2>";
		
		echo "<div class='dato'>";
				
				echo "<div class='l'>";

					
			    		echo "<label>Para todos los efectos legales certifico que<br> los respuestas e informaciones anotadas<br>por mi en la presente hoja de vida son veraces<br>(C.S.T Art.62 num 1)<br>Regimen laboral<br> colombiano 1057(Legis).</label>";

			    echo "</div>";

			   echo "<div class='dato'>";
				
					$firma=camposNoRequeridos($_POST['firma']);

				echo "</div>";

		echo "</div>";


			

?>
</body>
</html>