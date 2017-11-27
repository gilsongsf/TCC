<?php
	require_once('../../config.php');
	include(HEADER_TEMPLATE);
	require_once('../../controllers/imovel/imovel-controller.php');
	include('imovel-modal.php'); 	
?>

<div class="col-sm-29 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<header>
	<div class="row">
		<div class="col-sm-6">
			<h2>Imóvel</h2>
		</div>
		<div class="col-sm-6 text-right h2">
	    	<a class="btn btn-primary" href="imovel-add.php"><i class="fa fa-plus"></i> Novo</a>
	    	<a class="btn btn-default" href="imovel-view.php"><i class="fa fa-refresh"></i> Atualizar</a>
	    </div>
	</div>
</header>

<hr>
	<?php $imovel = new ImovelController();?>

<table class="table table-hover">
<thead>
	<tr>
		<th>Endereço</th>
	</tr>
</thead>
<tbody> 
<?php foreach($imovel->viewImovelAll() as $key => $value): ?>
	<tr>
		<td><?php echo $value->endereco.", ".$value->numero;
				  if ($value->complemento == NULL){
				  	echo ", ";
				  }else
				  {
				  	echo ", ".$value->complemento.", ";
				  }

				  echo $value->bairro." - ".$value->cidade." - ".$value->uf; ?></td>
		<td class="actions text-right">
			<a href="imovel-edit.php?id=<?php echo $value->id ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar</a>
			<a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal-delete" data-deleteid="<?php echo $value->id ?>"><i class="fa fa-trash"></i> Excluir</a>	
		</td>
	</tr>
<?php endforeach; ?>
</tbody>
</table>
</div>
<?php include(FOOTER_TEMPLATE);?>

