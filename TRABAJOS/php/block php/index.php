<!DOCTYPE>
<html lang="es">
<head>

	<meta charset="utf-8">
	<title>Hoja De Vida</title>

	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>


<body>
<form action="proceso.php" method="post">

<div  class="inicio">

	<div>
		<h2>.HOJA DE VIDA</h2>
	</div>
	
	<div>
		<label for="">Ciudad </label><input type="text" name="ciudad">
		<label for=""></label>Fecha<input type="date"  name="fecha1" >
		<label>Empleo solicitado</label><input type="text" name="cargo1">
		<label>Codigo cargo</label><input type="number" name="codigo"  >
	</div>

</div>

	<div class="datos">
		
		<h2> l.DATOS PERSONALES</h2>
		
		<div class="dato">
			<label>Primer apelido</label><input  type="text" name="primerapellido" title="Se necesita un nombre" required/>
			<label>Segundo apellido</label><input type="text" name="segundoapellido">
			<label>Nombres</label><input type= "text" name="nombre"  >
		</div>
		
		<div class="dato"> 
			<label>Profesion ocupacion u oficio</label><input type="text" name="ocupacion"  >
			<label>Años de experiencia laboral</label><input type="number" name="años">

		</div>

		<div class="dato">
			<label>¿cuanto es su inspiracion salarial?</label><input type="number" name="salario">
		</div>

		<div class="dato">
			<label>Lugar de nacimiento</label><input type="text" name="lugar" >
			<label>(*) Fecha de nacimiento</lable><input type="date" name="lugarnacimiento">
			<label>(*)Estado civil</label><input type="text" name="estado"  >

		</div>

		<div class="dato">
			<label>Direccion domicilio</label><input type="text" name="direcciondomicilio"  >
			<label>Barrio</label><input type="text" name="barrio"  >
			<label>Telefono</label><input type="number" name="telefonodomicilio"  >

		</div>

		<div class="dato">

			<label>Cedula de ciudadania N</label><input type="number" name="cedula"  >
			<label>Libreta militar </label><input type="number" name="numero1">
			<label for="Primera">Primera</label>
			<input id="Primera" name="libreta" type="radio" value="Primera" checked>
			<label for="Segunda">Segunda</label>
			<input id="Segunda" name="libreta" type="radio" value="Segunda">
			<label>Expedida en:</label><input type="text" name="expedida">
			<label>Distrito N</label><input type="number" name="distrito">
			
		</div>

		<div class="dato">
			<label>Licencia de conduccion</label><input type="number" name="licencia">
			<label>Vivienda propia</label>
			<input id="SI" name="vivienda" type="radio" value="SI">
            <label for="SI">Si</label>
			<input id="NO" name="vivienda" type="radio" value="NO">
			<label for="NO">No</label>
			<label>Nombre del arrendador</label><input type="text" name="nombrearrendador">
			<label>Telefono</label><input type="number" name="telefonoarrendador">
			<label>Valor del arriendo</label><input type="number" name="valor">
		</div>

		<div class="dato">
			<label>Esta trabajando actualmente</label>
			<input id="si" name="trabajando" type="radio" value="Si">
            <label for="SI">Si</label>
			<input id="no" name="trabajando" type="radio" value="No">
			<label for="ye">No</label>
		</div>

		<div class="dato">
			<label>En que empresa</label>
			<input id="Empleado" name="emp" type="radio" value="Empleado">
            <label for="Empleado">Empleado</label>
			<input id="Independiente" name="emp" type="radio" value="Independiente">
			<label for="Independiente">Independiente</label>

		</div>

	</div>

	<h2 >ll.EDUCACION Y APTITUDES</h2>

		<div class="educuacion" >

			<div class="dato">
				<label>Primaria</label>
				<label>Establecimiento</label>
				<input type="text" name="establecimiento">
				<label>Ciudad</label>
				<input type="text" name="ciudadeduca">
				<label>Ultimo grado cursado</label>
				<input type="text" name="grado">
				<label>Fecha</label><!--falta dato fecha -->
				<input type="date">
			</div>

			<div class="dato">
				<label>Bachilleer</label>
				<label>Establecimiento</label>
				<input type="text" name="establecimiento1">
				<label>Ciudad</label>
				<input type="text" name="ciudadbachi">
				<label>Ultimo grado cursado</label>
				<input type="text" name="grado1">
				<label>Fecha</label>
				<input type="date" name="fechabachiller">
			</div>

			<div class="dato">
				<label>Educacion superior</label>
				<label>Establecimiento</label>
				<input type="text" name="establecimiento2">
				<label>Ciudad</label>
				<input type="text" name="ciudadsuper">
				<label>Ultimo grado cursado</label>
				<input type="text" name="grado2">
				<label>Fecha</label>
				<input type="date" name="fechaeducacion">
			</div>

			<div class="dato">
				<label>Titulo obtenido y/o especialidad</label>
				 <input type="text" name="titulo">
			</div>

			<div class="dato">
				<label>Tipo de formacion</label>
				<input type="radio" name="tipo">Tecnica
				<input type="radio" name="tipo">Tecnologico
				<input type="radio" name="tipo">profesional
			</div>

			<div class="dato">
				<label>Que estudios realiza actualmente?</label>
				<input type="text" name="estudio">
				<label>Horario</label>
				<input type="text" name="horario">
		    </div>

		 </div>

			<div clas="experiencia">

				<h2>lll.EXPERIENCIA LABORAL</h2>

			<div class="dato">
				<label>Nombre  de la ultima o actual empresa</label>
				<input type="text" name="nombreempresa">
				<label>Direccion</label>
				<input type="text" name="empresa">
				<label>Telefono</label>
				<input type="number" name="telefonoempresa">
			</div>
			
			<div class="dato">
				<label>Nombre de su jefe inmediato</label>
				<input type="text" name="nombrejefe">
				<label>Cargo(s) desempenado(s) por usted</label>
				<input type="text" name="cargo">
				<label>Funciones realizadas</label>
				<input type="text" name="funciones">
			</div>

			<div class="dato">
				 <label>Fecha de ingreso </label>	
				 <input type="date" name="ingreso1">
				 <label>Fecha de retiro</label>
				 <input type="date" name="retiro">
				 <label>Sueldo inicial</label>
				 <input type="number" name="inicial">
				 <label>sueldo final</label>
				 <input type="number" name="final">
				 <label>Motivo del retiro</label><input type="text" name="motivo">
			 </div>
			 
		<h2>lV. TRAYECTORIAS POR EMPRESAS</h2>
			
		<div class="dato">
			<div class="empresa">

			 	<input type="checkbox" value="Agricultura">
			    <label>Agricultura</label>
			 	
			 	<input type="checkbox" value="Talleres">
			    <label>Talleres/Confecciones<label>
			 	
			 	<input type="checkbox" value="Metalurgia">
			    <label>Metalurgia</label>
			 	
			 	<input type="checkbox" value="Comercio">
			    <label>Comercio</label>
			 	
			 	<input type="checkbox" value="Salud">
			    <label>Salud</label>
			 	
			 	<input type="checkbox" value="Ganaderia">
			    <label>Ganaderia/Avicultura</label>
			 	
			 	<input type="checkbox" value="Cuero">
			    <label>Cuero/Calzado</label>
			 	
			 	<input type="checkbox" value="Maquinaria">
			    <label>Maquinaria</label>
			 	
			 	<input type="checkbox" value="Hoteles">
			    <label>Hoteles y Restaurantes</label>
			 	
			 	<input type="checkbox" value="Educacion">
			    <label>Educacion</label>
			 	
			 	<input type="checkbox" value="Mineria">
			    <label>Mineria</label>
			 	
			 	<input type="checkbox" value="Papel">
			    <label>Papel/Carton</label>
			 	
			 	<input type="checkbox" value="Automotores">
			    <label>Automotores</label>
			 	
			 	<input type="checkbox" value="Transporte">
			    <label>Transporte</label>
			 	
			 	<input type="checkbox" value="Seguros">
			    <label>Seguros</label>
			 	
			    <input type="checkbox" value="Petroleo">
			 	<label>Petroleo/Gasolina</label>

			 	<input type="checkbox" value="Artes">
			 	<label>Editorial y Artes Graficas</label>
			 	
			    <input type="checkbox" value="Muebles">
			 	<label>Muebles</label>

			    <input type="checkbox" value="Bodegaje">
			 	<label>Bodegaje</label>.

			 	<input type="checkbox" value="vigilancia">
			 	<label>vigilancia</label>
			 	
			    <input type="checkbox" value="Industria">
			 	<label>Industria</label>
			 	
			    <input type="checkbox" value="Quimico">
			 	<label>Quimico y Farmaceutico</label>
			 	
			    <input type="checkbox" value="Reciclaje">
			 	<label>Reciclaje</label>
			 	
			    <input type="checkbox" value="Comunicaciones">
			 	<label>Comunicaciones</label>
			 	
			    <input type="checkbox" value="Alimentos">   
			 	<label>Alimentos/Bebidas</label> 

			    <input type="checkbox" value="Caucho">	
			 	<label>Caucho/plastico</label>
			 	
			    <input type="checkbox" value="Electricidad">
			 	<label>Electricidad/Gas/Agua</label>

			    <input type="checkbox" value="Fincaraiz">
			 	<label>Finca Raiz</label>
			 	
			    <input type="checkbox" value="Tabaco">
			 	<label>Tabaco</label>
			 	
			    <input type="checkbox" value="Vidrio">
			 	<label>Vidrio/Ceramica/Cemento</label>
			 	
			    <input type="checkbox" value="Construccion">
			 	<label>Construccion</label>
			 	
			    <input type="checkbox" value="Informatico">
			 	<label>Informatico</label>
			 	
			    <label>Otro</label>
			    <input type="text" >
			</div>

			</div>
			 	
				
				<div class="informacion">
			    <h2>V. INFORMACION FAMILIAR</h2>
				
			    <div class="dato">
					<label>Cargo actual</label>
					<input type="text" name="cargoactual"  >
					<label>Direccion</label>
					<input type="text" name="direccionfamiliar"  >
					<label>Telefono</label>
					<input type="number" name="telefonofamiliar"  >
					<label>Ciudad</label>
					<input type="text" name="ciudadresidensia"  >
			     </div>


			    <div class="dato">
					<label>N de personas que dependen<br> ecnomicamente del solicitante</label>
					<input type="number" name="personas"  >
					<label>parentesco</label>
					<input type="text" name="parentesco"  >
					<label>Edades</label>
					<input type="number" name="edades"  >
			    </div>

			    <div class="dato">    
					<label>Nombre(s)padre(s)</label>
					<input type="text" name="nombrepadres"  >
					<label>profesion, ocupacion u oficio</label>
					<input type="text" name="profesion"  >
			    </div>

			    </div>

			    	<div class="referencias">
			    		<h2>Vl.REFERENCIAS PERSONALES</h2>
			        <div class="dato">
			    		
			    		<label>Nombre</label>
			    		<input type="text" name="nombrereferencias">
			    		<label>Ocupacion</label>
						<input type="text" name="ocupacionreferencias">
						<label>Direccion</label>
						<input type="text" name="Direccionreferencias">
						<label>Telefono</label>
						<input type="number" name="telefonoreferencias">
			        </div>
			        
			        <div class="dato">

			            <label>Nombre</label>
			    		<input type="text" name="nombrereferencias1">
			    		<label>Ocupacion</label>
						<input type="text" name="ocupacionreferencias1">
						<label>Direccion</label>
						<input type="text" name="Direccionreferencias1">
						<label>Telefono</label>
						<input type="number" name="telefonoreferencias1">
					</div>			        

			        </div>


			    	<div class="adicional">
			       	<h2>Vll.INFORMACION ADICIONAL</h2>
			        <div class="dato">
			    		
			    		<label> ¿Quien le sugirio solicitar<br> empleo en esta empresa?</label>
			    		<input type="radio" name="empleo">Anuncio
			    		<input type="radio" name="empleo">Amigo
			    		<input type="radio" name="empleo">Empresa
			    		<label>Otro</label>
			    		<input type="text" name="empleo">
			         </div>

			        <div class="dato">
			    		<label>¿lo recomienda alguien que trabaja<br> en esta empresa?</label>
			    		<input type="radio" name="Si">Si
			    		<input type="radio" name="Si">No
			        </div>

			        <div class="dato">
			    		<label>Nombre de la persona que lo recomiendan</label>
			    		<input type="text" name="persona_reco">
			    		<label>Division o departamento</label>
			    		<input type="text" name="division">
			        </div>

			        <div class="dato">

			    		<label>Si tiene parientes en esta empresa mensionelos</label>
			    		<input type="text" name="parientes">
			        </div>

			    		<div class="nota">
			            <h2>Nota importante</h2>
			            <div class="dato">
			    		  
			    			<label>Favor no llamar por telefono, ni concurrir a <br>preguntar por el resultado de esta solicitud.<br>Nosotros le avisaremos gracias.</label>
			            </div>
			  			<h2>Certificacion</h2>
			            <div class="dato">
			    			
			    			<label>Para todos los efectos legales certifico que<br> los respuestas e informaciones anotadas<br>por mi en la presente hoja de vida son veraces<br>(C.S.T Art.62 num 1)<br>Regimen laboral<br> colombiano 1057(Legis).</label>
			            </div>

			            <div class="dato">
			    			<label>Firma del solicitante</label>
			    			<input type="text" name="firma">
			            </div>
			    		</div>
						 <input type="submit" name="">

			 
			
</div>
</form>
</body>
</html>

