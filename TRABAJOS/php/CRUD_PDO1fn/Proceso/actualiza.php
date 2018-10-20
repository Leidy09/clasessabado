<?php 
//recuperar datos
if (isset($_GET['id'])) {
	$id=$_GET['id'];
	$consulta=$pdo->prepare("SELECT * FROM usuario" WHERE id=:id);
	$consulta->binparam(":id",$ID);
if ($consulta->rowCount()>=1) {
	
	$fila=$consulta->fetch();
	echo '"<form action="" method="POST"
	<input type="hidden" name="id" values="'.$fila.['ID']'">

	<label>Nombre</label><br>
	<input type="text" name="nom"  values="'.$fila.['Nombre']'"><br>
	
	<label>Telefono</label><br>
	<input type="text" name="tel"  values="'.$fila.['Telefono']'"><br>

	<label>Email</label><br>
	<input type="email" name="email"  values="'.$fila.['Email']'"><br>

	<p>para actualizar la clave ingresela dos veces</p>
	
	<label>Clave</label><br>
	<input type="password" name="clave"  values="'.$fila.['Clave']'"><br>

	<label>Clave</label><br>
	<input type="password" name="clave"  values="'.$fila.['Clave']'"><br>


	<input type="submit" name="Enviar">"</form>';
}else{

	echo "ocurrio un ERROR";

}
}else{

	echo "Error, no se puede procesar la informacion";
}















 ?>