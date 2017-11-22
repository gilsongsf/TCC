<?php
	require_once('../../../config.php');
	require_once('../../../controllers/cadastro-basico/cor/cor-controller.php');
	include('cor-modal.php'); 
	include(HEADER_TEMPLATE);
?>

<?php 
$cor = new CorController();?>

<div class="col-sm-29 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<header>
	<div class="row">
		<div class="col-sm-6">
			<h2>Cor</h2>
		</div>
		<div class="col-sm-6 text-right h2">
	    	<a class="btn btn-primary" data-toggle="modal" data-target="#modal-insert"><i class="fa fa-plus"></i> Novo</a>
	    	<a class="btn btn-default" href="cor-view.php"><i class="fa fa-refresh"></i> Atualizar</a>
	    </div>
	</div>
</header>

<hr>

<table class="table table-hover">
<thead>
	<tr>
		<th>Cor</th>
	</tr>
</thead>
<tbody> 
<?php foreach($cor->viewCorAll() as $key => $value): ?>
	<tr>
		<td><?php echo $value->cor; ?></td>
		<td class="actions text-right">
			<a href="#" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modal-edit" data-id="<?php echo $value->id ?>" data-descricao="<?php echo $value->cor ?>"><i class="fa fa-pencil"></i> Editar</a>
			<a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal-delete" data-deleteid="<?php echo $value->id ?>"><i class="fa fa-trash"></i> Excluir</a>	
		</td>
	</tr>
<?php endforeach; ?>
</tbody>
</table>
</div>

<?php include(FOOTER_TEMPLATE);?>

