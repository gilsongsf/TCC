<?php
	require_once('../../config.php');
	require_once('../../controllers/usuario/usuario-controller.php');
	include('usuario-modal.php'); 
	include(HEADER_TEMPLATE);
?>


<div class="col-sm-29 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<header>
	<div class="row">
		<div class="col-sm-6">
			<h2>Usuário</h2>
		</div>
		<div class="col-sm-6 text-right h2">
	    	<a class="btn btn-primary" data-toggle="modal" data-target="#modal-insert"><i class="fa fa-plus"></i> Novo</a>
	    	<a class="btn btn-default" href="usuario-view.php"><i class="fa fa-refresh"></i> Atualizar</a>
	    </div>
	</div>
</header>

<hr>
	<?php $usuario = new UsuarioController()?>

<table class="table table-hover">
<thead>
	<tr>
		<th>Usuario</th>
		<th>E-mail</th>
		<th>Perfil</th>
	</tr>
</thead>
<tbody> 
<?php foreach($usuario->viewUsuarioAll() as $key => $value): ?>
	<tr>
		<td><?php echo $value->nome; ?></td>
		<td><?php echo $value->email; ?></td>
		<td><?php echo $value->perfil; ?></td>
		<td class="actions text-right">
			<a href="#" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modal-edit-usuario" data-id="<?php echo $value->id ?>" data-editnome="<?php echo $value->nome ?>" data-editemail="<?php echo $value->email ?>" data-editperfil="<?php echo $value->perfil ?>"><i class="fa fa-pencil"></i> Editar</a>
			<a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal-delete" data-deleteid="<?php echo $value->id ?>"><i class="fa fa-trash"></i> Excluir</a>	
		</td>
	</tr>
<?php endforeach; ?>
</tbody>
</table>
</div>

<?php include(FOOTER_TEMPLATE);?>

