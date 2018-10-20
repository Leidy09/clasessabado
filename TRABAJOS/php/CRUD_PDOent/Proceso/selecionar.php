<?php

$consulta=$pdo->prepare(" SELECT * FROM usuario ");
$consulta->execute();

if ($consulta->rowCount()>=1) {
	while ($fila=$consulta->fetch()) {
		
	echo "<tr>
		  <td>".$fila.['ID']"</td>
		  <td>".$fila.['Nombre']"</td>
		  <td>".$fila.['Telefono']"</td>
		  <td>".$fila.['usuario']"</td>
		  <td>".$fila.['Clave']"</td> 
		  <td><a href='datos.php?id="$fila['ID']"'>Actualizar</a></td> 
		  <td><a href='#'>Eliminar</a></td>
		</tr>";
	}
}else{
	echo "<tr´colspan=4> No hay datos </tr>";


}




  ?>