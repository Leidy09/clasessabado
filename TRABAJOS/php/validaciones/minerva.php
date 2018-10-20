<?php 
	function ValidarTexto ($valor, $texto)
	{
		if (ereg('[^A-Za-zñÑ]', $valor)) {
			$mensaje = $texto."<br>";
			return $mensaje;
			
					}

	}
	function ValidarVacio($campo, $vacio){
		if (empty($campo)) {
		$mensaje = $vacio. "<br>";
		return $mensaje;
		}
	}

	function ValidarNumero($valorNum, $numVacio){
		if (is_numeric($valorNum)) {
			$mensaje = $numVacio."<br>";
			return $mensaje;
	}
	}

	?>
