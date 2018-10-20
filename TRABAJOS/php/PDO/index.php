<?php 
require_once'clase.php';
require_once'modelo.php';

$user = new Usuario();
$model = new  UsuarioModel();

if (isset($REQUEST['action'])) {
	
	switch ($_REQUEST['action']) {
		
		case 'Actualizar':
			 $user->__SET('ID',          $_REQUEST['ID']);
			 $user->__SET('Nombre',       $_REQUEST['Nombre']);
			 $user->__SET('Telefono', $_REQUEST['Telefono']);


			 $model->Actualizar($user);
			 header('Location: index.php');

			break;

		case 'Registrar':
			 $user->__SET('ID', $_REQUEST['ID']);
			 $user->__SET('Nombre', $_REQUEST['Nombre']);
			 $user->__SET('Telefono', $_REQUEST['Telefono']);


			 $model->Registrar($user);
			 header('Location: index.php');

			 break;

		case 'Eliminar':
			 $user->__SET('ID', $_REQUEST['ID']);
			 $user->__SET('Nombre', $_REQUEST['Nombre']);
			 $user->__SET('Telefono', $_REQUEST['Telefono']);


			 $model->Eliminar($user);
			 header('Location: index.php');

			 break;

		case 'Editar':
			$user= $model->Obtener($_REQUEST['ID']);
			
			break;
	}
}

 ?>
 <!DOCTYPE html>
 <html lang="es">
 <head>
 	<title> REGISTRO</title>
 </head>
 <body >

        <div class="pure-g">
            <div class="pure-u-1-12">
                
                <form action="?action=<?php echo $UsuarioModel->id > 0 ? 'Actualizar' : 'Registrar'; ?>" method="post" class="pure-form pure-form-stacked" >
                    <input type="hidden" name="ID" value="<?php echo $user->__GET('ID'); ?>" />
                    
                    <table >
                        <tr>
                            <th >Nombre</th>
                            <td><input type="text" name="Nombre" value="<?php echo $user->__GET('Nombre'); ?>"  /></td>
                        </tr>
                        <tr>
                            <th >Telefono</th>
                            <td><input type="text" name="Telefono" value="<?php echo $user->__GET('Telefono'); ?>"  /></td>
                        </tr>
                  
                        <tr>
                            <td colspan="2">
                                <button type="submit" class="pure-button pure-button-primary">Guardar</button>
                            </td>
                        </tr>
                    </table>
                </form>

                <table class="pure-table pure-table-horizontal">
                    <thead>
                        <tr>
                            <th >Nombre</th>
                            <th >Telefono</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <?php foreach($model->Listar() as $r): ?>
                        <tr>
                            <td><?php echo $r->__GET('Nombre'); ?></td>
                            <td><?php echo $r->__GET('Telefono'); ?></td>
                            <td>
                                <a href="?action=editar&id=<?php echo $r->id; ?>">Editar</a>
                            </td>
                            <td>
                                <a href="?action=eliminar&id=<?php echo $r->id; ?>">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>     
              
            </div>
        </div>

    </body>
 </html>