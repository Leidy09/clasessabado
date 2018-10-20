<?php 
$mensajetexto ="";
$mensajevacios = "";
$mensajenumero = "";
include 'minerva.php';



/*Validaciones para texto */

$mensajetexto .= ValidarTexto($_POST['ciu'],'ciudad');
$mensajetexto .= ValidarTexto($_POST['Cargo'],'Cargo solicitado');
$mensajetexto .= ValidarTexto($_POST['PriApe'],'Primer Apellido');
$mensajetexto .= ValidarTexto($_POST['SecApe'],'Segundo Apellido');
$mensajetexto .= ValidarTexto($_POST['names'],'Nombres');
$mensajetexto .= ValidarTexto($_POST['oficio'],'Profesion');
$mensajetexto .= ValidarTexto($_POST['DatePlace'],'Lugar de nacimiento');
$mensajetexto .= ValidarTexto($_POST['EstaVil'],'Estado civil');
$mensajetexto .= ValidarTexto($_POST['Militar'],'Libreta Militar');
$mensajetexto .= ValidarTexto($_POST['barrio'],'Barrio');
$mensajetexto .= ValidarTexto($_POST['nombre'],'Nombre del arrendador');
$mensajetexto .= ValidarTexto($_POST['priesta'],'Primaria establecimiento');
$mensajetexto .= ValidarTexto($_POST['priciu'],'Ciudad');
$mensajetexto .= ValidarTexto($_POST['prigrado'],'Ultimo grado cursado en la primaria');
$mensajetexto .= ValidarTexto($_POST['baesta'],'Bachiller establecimiento');
$mensajetexto .= ValidarTexto($_POST['baciu'],'Ciudad bachiller');
$mensajetexto .= ValidarTexto($_POST['bagrado'],'Ultimo grado cursado Bahciller');
$mensajetexto .= ValidarTexto($_POST['superesta'],'Educacion superior');
$mensajetexto .= ValidarTexto($_POST['superciu'],'Ciudad Educacion superior');
$mensajetexto .= ValidarTexto($_POST['supergrado'],'Ultimo grado cursado de eduacion superior');
$mensajetexto .= ValidarTexto($_POST['titulo'],'TItulo obtenido');
$mensajetexto .= ValidarTexto($_POST['estudio'],'estudio realizados');
$mensajetexto .= ValidarTexto($_POST['horario'],'horario');
$mensajetexto .= ValidarTexto($_POST['nombreul'],'ultima o actual empresa');
$mensajetexto .= ValidarTexto($_POST['jefe'],'Nombre de su jefe inmediato');
$mensajetexto .= ValidarTexto($_POST['cargo'],'Cargo desempenado por usted');
$mensajetexto .= ValidarTexto($_POST['funreal'],'Funciones Realizadas');
$mensajetexto .= ValidarTexto($_POST['nomemp'],'nombre de la empresa');
$mensajetexto .= ValidarTexto($_POST['motivo'],'Motivo del retiro');


/* Info familiar */
$mensajetexto .= ValidarTexto($_POST['cargoac'],'cargo actual');
$mensajetexto .= ValidarTexto($_POST['ciudadfa'],'Primer Apellido');
$mensajetexto .= ValidarTexto($_POST['parentezco'],'parentezco');
$mensajetexto .= ValidarTexto($_POST['profesion'],'Profesion, ocupacion u oficio');
 

 /* referencias personales */

$mensajetexto .= ValidarTexto($_POST['nombrere'],'Nombre referencias');
$mensajetexto .= ValidarTexto($_POST['ocupacionre'],'Ocupacion refencias');

/*Nota importante */

$mensajetexto .= ValidarTexto($_POST['firma'],'Firma del solicitante');

/*Fin de validaciones de texto */


/* Validaciones vacias */

$mensajevacios .= ValidarVacio($_POST['fechapersonal'], 'Fecha datos personales');
$mensajevacios .= ValidarVacio($_POST['DateBorn'], 'Fecha de nacimiento');
$mensajevacios .= ValidarVacio($_POST['prifecha'], 'Fecha primaria');
$mensajevacios .= ValidarVacio($_POST['bafecha'], 'Fecha Bachiller');
$mensajevacios .= ValidarVacio($_POST['supfecha'], 'Fecha Educacion Superior');
$mensajevacios .= ValidarVacio($_POST['ciu'],'ciudad');
$mensajevacios .= ValidarVacio($_POST['Cargo'],'Cargo solicitado');
$mensajevacios .= ValidarVacio($_POST['PriApe'],'Primer Apellido');
$mensajevacios .= ValidarVacio($_POST['SecApe'],'Segundo Apellido');
$mensajevacios .= ValidarVacio($_POST['names'],'Nombres');
$mensajevacios .= ValidarVacio($_POST['oficio'],'Profesion');
$mensajevacios .= ValidarVacio($_POST['DatePlace'],'Lugar de nacimiento');
$mensajevacios .= ValidarVacio($_POST['EstaVil'],'Estado civil');
$mensajevacios .= ValidarVacio($_POST['barrio'],'Barrio');
$mensajevacios .= ValidarVacio($_POST['nombre'],'Nombre del arrendador');
$mensajevacios .= ValidarVacio($_POST['empresatraba'],'En que empresa');
$mensajevacios .= ValidarVacio($_POST['priesta'],'Primaria establecimiento');
$mensajevacios .= ValidarVacio($_POST['priciu'],'Ciudad');
$mensajevacios .= ValidarVacio($_POST['prigrado'],'Ultimo grado cursado en la primaria');
$mensajevacios .= ValidarVacio($_POST['baesta'],'Bachiller establecimiento');
$mensajevacios .= ValidarVacio($_POST['baciu'],'Ciudad bachiller');
$mensajevacios .= ValidarVacio($_POST['bagrado'],'Ultimo grado cursado Bahciller');
$mensajevacios .= ValidarVacio($_POST['superesta'],'Educacion superior');
$mensajevacios .= ValidarVacio($_POST['superciu'],'Ciudad Educacion superior');
$mensajevacios .= ValidarVacio($_POST['supergrado'],'Ultimo grado cursado de eduacion superior');
$mensajevacios .= ValidarVacio($_POST['titulo'],'TItulo obtenido');
$mensajevacios .= ValidarVacio($_POST['estudio'],'estudio realizados');
$mensajevacios .= ValidarVacio($_POST['horario'],'horario');
$mensajevacios .= ValidarVacio($_POST['nombreul'],'ultima o actual empresa');
$mensajevacios .= ValidarVacio($_POST['jefe'],'Nombre de su jefe inmediato');
$mensajevacios .= ValidarVacio($_POST['cargo'],'Cargo desempenado por usted');
$mensajevacios .= ValidarVacio($_POST['funreal'],'Funciones Realizadas');
$mensajevacios .= ValidarVacio($_POST['nomemp'],'nombre de la empresa');
$mensajevacios .= ValidarVacio($_POST['motivo'],'Motivo del retiro');
$mensajevacios .= ValidarVacio($_POST['fechain'],'Fecha ingreso');
$mensajevacios .= ValidarVacio($_POST['fechare'],'Fecha retiro');
$mensajevacios .= ValidarVacio($_POST['fechaingre'],'Fecha Ingreso funciones');


/* fin validaciones vacias */

/* Validaciones numericas */

$mensajenumero .= ValidarNumero($_POST['Code'], 'Codigo cargo');
$mensajenumero .= ValidarNumero($_POST['Years'], 'Experiencia Laboral');
$mensajenumero .= ValidarNumero($_POST['telefono'], 'Telefono empresa');
$mensajenumero .= ValidarNumero($_POST['cedula'], 'Cedula de ciudadania');
$mensajenumero .= ValidarNumero($_POST['Distri'], 'Distrito N');
$mensajenumero .= ValidarNumero($_POST['telefod'], 'Nombre del arrendador');
$mensajenumero .= ValidarNumero($_POST['valor'], 'Valor del arriendo');
$mensajenumero .= ValidarNumero($_POST['telefoemp'], 'Telefono Ultima empresa');
$mensajenumero .= ValidarNumero($_POST['sueldo'], 'Sueldo inicial Exp');
$mensajenumero .= ValidarNumero($_POST['final'], 'Sueldo final Exp');
$mensajenumero .= ValidarNumero($_POST['suinicial'], 'Sueldo inicial');
$mensajenumero .= ValidarNumero($_POST['sufinal'], 'Sueldo final');
$mensajevacios .= ValidarVacio($_POST['telefonofami'],'Informacion Familiar');
$mensajevacios .= ValidarVacio($_POST['personas'],'Personas que dependen de usted');
$mensajevacios .= ValidarVacio($_POST['telefonore'],'Telefono referencias');


?>




<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<title>Mostrar</title>
</head>
<body>

<div>
<div id="vacio">
	<?php 

echo "<br> los siguientes campos estan vacios:  <br>";
echo "$mensajevacios";

?>
</div>
<div id="texto">

<?php
echo "<br> los siguientes datos no son texto: <br>";
echo "$mensajetexto";

?>
</div>
<div id="numero">
<?php 
echo "<br> los siguientes datos no son numeros: <br>";
echo "$mensajenumero";

?>
</div>
</div>

<h1>DATOS PERSONALES </h1>
		
	<p> Ciudad: <?php echo $_POST['ciu']; ?> </p>
	<p> Fecha: <?php echo $_POST['fecha']; ?> </p>
	<p> Cargo solicitado: <?php echo $_POST['Cargo']; ?> </p>
	<p> Codigo cargo: <?php echo $_POST['Code']; ?> </p>
	<p> Primer Apellido: <?php echo $_POST['PriApe']; ?> </p>
	<p> Segundo Apellido: <?php echo $_POST['SecApe']; ?> </p>
	<p> Nombres: <?php echo $_POST['names']; ?> </p>
	<p> Profesion: <?php echo $_POST['oficio']; ?> </p>
	<p> Anos de experiencia laboral: <?php echo $_POST['Years']; ?> </p>
	<p> Lugar de nacimiento : <?php echo $_POST['DatePlace']; ?> </p>
	<p> Fecha de nacimiento: <?php echo $_POST['DateBorn']; ?> </p>
	<p> Estado civil: <?php echo $_POST['EstaVil']; ?> </p>
	<p> Direccion Domicilio: <?php echo $_POST['Adress']; ?> </p>
	<p> Barrio : <?php echo $_POST['barrio']; ?> </p>
	<p> Telefono: <?php echo $_POST['telefonodomi']; ?> </p>
	<p> Cedula de ciudadania N: <?php echo $_POST['cedula']; ?> </p>
	<p> Expedida en : <?php echo $_POST['expedicion']; ?> </p>
	<p> Libreta Militar N: <?php echo $_POST['Militar']; ?> </p>
	<p> Distrito N: <?php echo $_POST['Distri']; ?> </p>
	<p> Licencia de Conduccion: <?php echo $_POST['licencia']; ?> </p>
	<p> Nombre del arrendador: <?php echo $_POST['nombre']; ?> </p>
	<p> Telefono: <?php echo $_POST['telefod']; ?> </p>
	<p> Valor del arriendo: <?php echo $_POST['valor']; ?> </p>
	<p> En que empresa?: <?php echo $_POST['empresatraba']; ?> </p>
	
		<br>
		<h2>EDUCACION Y APTITUDES</h2>


	<p> Primaria establecimiento: <?php echo $_POST['priesta']; ?> </p>
	<p> Ciudad: <?php echo $_POST['priciu']; ?> </p>
	<p> Ultimo Grado cursado: <?php echo $_POST['prigrado']; ?> </p>
	<p> Fecha: <?php echo $_POST['prifecha']; ?> </p>
		

	<p>	Bachillerato establecimiento: <?php echo $_POST['baesta']; ?> </p>
	<p> Ciudad: <?php echo $_POST['baciu']; ?> </p>		
	<p> Ultimo grado cursado: <?php echo $_POST['bagrado']; ?> </p>
	<p> Fecha: <?php echo $_POST['bafecha']; ?> </p>
	

	<p> Educacion superior Establecimiento: <?php echo $_POST['superesta']; ?> </p>
	<p> Ciudad: <?php echo $_POST['superciu']; ?> </p>
	<p> Ultimo semestre cursado: <?php echo $_POST['supergrado']; ?> </p>
	<p> Fecha: <?php echo $_POST['supfecha']; ?> </p>
	<p> Titulo obtenido o especialidd: <?php echo $_POST['titulo']; ?> </p>
	<p> Que estudios realiza actualmente?: <?php echo $_POST['estudio']; ?> </p>
	<p> Horario: <?php echo $_POST['horario']; ?> </p>
	
	<br>
	<h2>EXPERIENCIA LABORAL</h2>


	<p> Nombre de la ultima o actual empresa: <?php echo $_POST['nombreul']; ?> </p>
	<p> Direccion: <?php echo $_POST['direemp']; ?> </p>
	<p> Telefono: <?php echo $_POST['telefoemp']; ?> </p>
	<p> Nombre de su jefe inmediato: <?php echo $_POST['jefe']; ?> </p>
	<p> Cargo desempeñado por usted: <?php echo $_POST['cargo']; ?> </p>
	<p> Funciones realizadas: <?php echo $_POST['funreal']; ?> </p>
	<p> Fecha de retiro: <?php echo $_POST['fechare']; ?> </p>
	<p> Fecha de ingreso: <?php echo $_POST['fechain']; ?> </p>
	<p> Sueldo inicial: <?php echo $_POST['sueldo']; ?> </p>
	<p> Sueldo final: <?php echo $_POST['final']; ?> </p>
	<p> Nombre de la empresa: <?php echo $_POST['nomemp']; ?> </p>
	<p> Direccion: <?php echo $_POST['empresa']; ?> </p>
	<p> Telefono: <?php echo $_POST['telefono']; ?> </p>
	<p> Nombre de su jefe inmediato : <?php echo $_POST['nomjefe']; ?> </p>
	<p> Cargo(s) desempeñado(s) por usted: <?php echo $_POST['cargodesem']; ?> </p>
	<p> Funciones realizadas: <?php echo $_POST['funciones']; ?> </p>
	<p> Fecha de ingreso: <?php echo $_POST['fechaingre']; ?> </p>
	<p> Fecha de retiro: <?php echo $_POST['fecharetiro']; ?> </p>
	<p> Sueldo inicial: <?php echo $_POST['suinicial']; ?> </p>
	<p> Sueldo final: <?php echo $_POST['sufinal']; ?> </p>
	<p> Motivo del retiro: <?php echo $_POST['motivo']; ?> </p> <br>
	
	<br>
	
    <h2> INFORMACION FAMILIAR</h2>

	<p> Cargo actual: <?php echo $_POST['cargoac']; ?> </p>
	<p> Direccion: <?php echo $_POST['direccion']; ?> </p>		
	<p> Telefono: <?php echo $_POST['telefonofami']; ?> </p>
	<p> Ciudad: <?php echo $_POST['ciudadfa']; ?> </p>
	<p> Nro de personas que dependen economicamente del solicitante: <?php echo $_POST['personas']; ?> </p>
	<p> Parentezco: <?php echo $_POST['parentezco']; ?> </p>
	<p> Edades: <?php echo $_POST['edades']; ?> </p>
	<p> Nombre(s) padre(s): <?php echo $_POST['nombrepadre']; ?> </p>
	<p> Profesion, ocupacion u oficio: <?php echo $_POST['profesion']; ?> </p>
		<br>

	<h2>REFERENCIAS PERSONALES</h2>


	<p> Nombre: <?php echo $_POST['nombrere']; ?> </p>
	<p> Ocupacion: <?php echo $_POST['ocupacionre']; ?> </p>
	<p> Direccion: <?php echo $_POST['Direccionre']; ?> </p>
	<p> Telefono: <?php echo $_POST['telefonore']; ?> </p>

	<h2> INFORMACION ADICIONAL</h2>
	<p> Nombre de la empresa que lo recomienda: <?php echo $_POST['ciu']; ?> </p>
	<p> Division  o departamento: <?php echo $_POST['ciu']; ?> </p>
	<p> Si tiene parientes en esta empresa, mencionelos: <?php echo $_POST['ciu']; ?> </p>
	<p>NOTA IMPORTANTE<br></p>
    			<label>*Favor no llamar por telefono, ni concurrir a preguntar por el resultado de esta solicitud.Nosotros le avisaremos gracias.</label>
  

    			<h2>Certificacion<br></h2>
    			<label>Para todos los efectos legales certifico que los respuestas e informaciones anotadas por mi en la presente hoja de vida son veraces(C.S.T Art.62 num 1)Regimen laboral colombiano 1057(Legis).</label><hr><br>

    			<p> Fima del solicitante: <?php echo $_POST['firma']; ?> </p>


</body>
</html>