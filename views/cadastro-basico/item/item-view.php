<?php
	require_once('../../../config.php');
	require_once('../../../controllers/cadastro-basico/item/item-controller.php');
	include('item-modal.php'); 
	include(HEADER_TEMPLATE);
?>

<div class="col-sm-29 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<header>
	<div class="row">
		<div class="col-sm-6">
			<h2>Item</h2>
		</div>
		<div class="col-sm-6 text-right h2">
	    	<a class="btn btn-primary" data-toggle="modal" data-target="#modal-insert"><i class="fa fa-plus"></i> Novo</a>
	    	<a class="btn btn-default" href="item.php"><i class="fa fa-refresh"></i> Atualizar</a>
	    </div>
	</div>
</header>

<hr>
	<?php $item = new itemController()?>

<table class="table table-hover">
<thead>
	<tr>
		<th>Item</th>
	</tr>
</thead>
<tbody> 
<?php foreach($item->viewItemAll() as $key => $value): ?>
	<tr>
		<td><?php echo $value->item; ?></td>
		<td class="actions text-right">
			<a href="#" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modal-edit" data-id="<?php echo $value->id ?>" data-descricao="<?php echo $value->item ?>"><i class="fa fa-pencil"></i> Editar</a>
			<a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal-delete" data-deleteid="<?php echo $value->id ?>"><i class="fa fa-trash"></i> Excluir</a>	
		</td>
	</tr>
<?php endforeach; ?>
</tbody>
</table>
</div>

<?php include(FOOTER_TEMPLATE);?>

