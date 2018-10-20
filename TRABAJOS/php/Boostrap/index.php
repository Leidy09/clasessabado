<?php 
require_once'Usuario.php';
require_once'modelo.php';

//Logica 

$user = new Usuario();
$model = new  UsuarioModel();
//faltaba

if(isset($_POST['guardar'])){
    $user->__SET('Nombre',$_POST['Nombre']);
    $user->__SET('Telefono', $_POST['Telefono']);
    $model->Registrar($user);
} 
if(isset($_POST['actualizar'])){
    $user->__SET('ID', $_POST['ID']);
    $user->__SET('Nombre', $_POST['Nombre']);
    $user->__SET('Telefono', $_POST['Telefono']);
    $model->Actualizar($user);
}
if(isset($_POST['borrar'])){    
    $model->Eliminar($_POST['ID']);   
}

/*if (isset($_REQUEST['action'])) {
	
	switch ($_REQUEST['action']) {
		
		case 'Actualizar':
			 $user->__SET('ID',          $_REQUEST['ID']);
			 $user->__SET('Nombre',      $_REQUEST['Nombre']);
			 $user->__SET('Telefono',    $_REQUEST['Telefono']);

 
			 $model->Actualizar($user);
			 header('Location: index.php');

			break;

		case 'Registrar':
			 $user->__SET('ID',          $_REQUEST['ID']);
			 $user->__SET('Nombre',      $_REQUEST['Nombre']);
			 $user->__SET('Telefono',    $_REQUEST['Telefono']);


			 $model->Registrar($user);
			 header('Location: index.php');

			 break;

		case 'Eliminar':
			 $user->__SET('ID',          $_REQUEST['ID']);
			 $user->__SET('Nombre',      $_REQUEST['Nombre']);
			 $user->__SET('Telefono',    $_REQUEST['Telefono']);


			 $model->Eliminar($user);
			 header('Location: index.php');

			 break;

		case 'Editar':
			$user= $model->Obtener($_REQUEST['ID']);
			
			break;
	}
}*/

 ?>

 <!-- ----------------Leidy Rios ---------------- -->

 <!DOCTYPE html>
 <html lang="es">
 <head>
   <title> REGISTRO </title>
   <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    

    <script type="text/javascript">

    function mostrar(usuarioID){
        var nombreID = "nameID" + usuarioID;
        var telefonoID = "telID" + usuarioID;
        
        var nombreDelUsuario = document.getElementById(nombreID).innerHTML;
        var telefonoUsuario = document.getElementById(telefonoID).innerHTML;        
        
            document.getElementById("idInput").value = usuarioID;            
            document.getElementById("nomInput").value = nombreDelUsuario;
            document.getElementById("telInput").value = telefonoUsuario;            
            document.getElementById("borrar").style.display = "block";
            document.getElementById("guardar").disabled = "true";
            document.getElementById("actualizar").style.display = "block";        
    }   

    </script>
 </head>
 <body >

           <header>
                <div class="container">
                    <h2>REGISTRO DE USUARIOS</h2>
                </div>
            </header>       
     
    <div class="container">

        <section class=" main row">


            <form action="" method="post" class="" style="">
                    
                    <input type="hidden" id="idInput" name="ID" value="" />
                    
                <table style="" >
                    
                    <div class="form-group">
                        <tr style=""> 
                            <th  class="lead text-succes"><strong>Nombre</strong></th>
                            <td><input type="text" id="nomInput" name="Nombre" value="" class="form-control"/></td>
                        </tr>
                    </div>

                    <div class="form-group">
                        <tr>
                            <th class="lead text-succes"><strong>Telefono</strong></th>
                            <td><input type="number" id="telInput" name="Telefono" value="" class="form-control"/></td>
                        </tr>
                    </div>
                    <tr>
                        <td colspan="2 ">
                            <input type="submit" value="Guardar" id="guardar" name="guardar" class=" btn btn-primary">

                            <button id="actualizar" style="display: none" name="actualizar" class="btn btn-primary">Actualizar</button>

                            <button id="borrar" style="display: none" name="borrar" class=" btn btn-primary">Borrar</button>
                        </td>

                    </tr>

                </table>
            </form>
        </section>
    </div>
                 <div class="container">

                    <table class="table  table-strped table-bordered table-hover">
                    
                        <thead>
                            
                            <tr>
                                <th>ID</th>
                                <th >Nombre</th>
                                <th >Telefono</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>

                    <?php foreach($model->Listar() as $r){ ?>
                    
                        <tr>
                            <td><?php echo '<span id="'.$r->__GET("ID").'">'.$r->__GET("ID").'</span>'; ?></td>
                            <td><?php echo '<span id="nameID'.$r->__GET("ID").'">'.$r->__GET('Nombre').'</span>'; ?></td>
                            <td><?php echo '<span id="telID'.$r->__GET("ID").'">'.$r->__GET('Telefono').'</span>';?></td>                            
                            <td>
                                <a href="#" id="<?php echo $r->__GET('ID') ?>" onclick="mostrar(this.id)">Editar</a>
                            </td>                            
                        </tr>

                    <?php } ?>

                    </table> 

                </div>

        <script src="js/JQuery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    

    </body>
 </html>