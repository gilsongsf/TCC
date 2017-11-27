<?php
	require_once('../../config.php');
	include(HEADER_TEMPLATE);
	require_once('../../controllers/inquilino/inquilino-controller.php');
	include('inquilino-modal.php'); 
	
?>


<div class="col-sm-29 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<header>
	<div class="row">
		<div class="col-sm-6">
			<h2>Inquilino</h2>
		</div>
		<div class="col-sm-6 text-right h2">
	    	<a class="btn btn-primary" data-toggle="modal" data-target="#modal-insert"><i class="fa fa-plus"></i> Novo</a>
	    	<a class="btn btn-default" href="inquilino-view.php"><i class="fa fa-refresh"></i> Atualizar</a>
	    </div>
	</div>
</header>

<hr>
	<?php $inquilino = new inquilinoController()?>

<table class="table table-hover">
<thead>
	<tr>
		<th>Nome</th>
		<th>E-mail</th>
		<th>CPF/CNPJ</th>
	</tr>
</thead>
<tbody> 
<?php foreach($inquilino->viewinquilinoAll() as $key => $value): ?>
	<tr>
		<td><?php echo $value->nome; ?></td>
		<td><?php echo $value->email; ?></td>
		<td><?php echo $value->cpfcnpj; ?></td>
		<td class="actions text-right">
			<a href="#" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modal-edit-inquilino" data-id="<?php echo $value->id ?>" data-inquilinonome="<?php echo $value->nome ?>" data-inquilinoemail="<?php echo $value->email ?>" data-inquilinotelefone="<?php echo $value->telefone ?>" data-inquilinocpfcnpj="<?php echo $value->cpfcnpj ?>"><i class="fa fa-pencil"></i> Editar</a>
			<a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal-delete" data-deleteid="<?php echo $value->id ?>"><i class="fa fa-trash"></i> Excluir</a>	
		</td>
	</tr>
<?php endforeach; ?>
</tbody>
</table>
</div>

<?php include(FOOTER_TEMPLATE);?>

