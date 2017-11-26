<?php
	require_once('../../config.php');
	require_once('../../controllers/vistoria/vistoria-controller.php');
	include(HEADER_TEMPLATE);
	include('vistoria-modal.php');
	$vistoria = new vistoriaController();
?>

<div class="col-sm-29 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<header>
	<div class="row">
		<div class="col-sm-6">
			<h2>Vistoria</h2>
		</div>
		<div class="col-sm-6 text-right h2">
	    	<a class="btn btn-primary" href="vistoria-add.php"><i class="fa fa-plus"></i> Novo</a>
	    	<a class="btn btn-default" href="vistoria-view.php"><i class="fa fa-refresh"></i> Atualizar</a>
	    </div>
	</div>
</header>

<hr>

<table class="table table-striped table-bordered">
<thead>
	<tr>
		<th width="80px">Código</th>
		<th>Imóvel</th>
		<th width="150px">Vistoriador</th>
		<th width="150px">Tipo de Vistoria</th>
		<th width="100px">Data</th>
		<th width="100px">Opções</th>
	</tr>
</thead>
<tbody> 
<?php foreach($vistoria->selectVistoria() as $key => $value):?>
	<tr>
		<td><?php echo $value->id_vistoria; ?></td>
		<td><?php echo $value->endereco.", ".$value->numero.", ".$value->complemento.", ".$value->bairro.", ".$value->cidade." - ".$value->uf; ?></td>
		<td><?php echo $value->nome; ?></td>
		<td><?php echo $value->tipovistoria; ?></td>
		<td><?php echo date("d-m-Y", strtotime($value->data_vistoria)); ?></td>
		<td> <div class="btn-group pull-right">
         <button id="opcoes" type="button" class="btn btn-danger dropdown-toggle opcoes" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Opções <span class="caret"></span>
         </button>
         <ul class="dropdown-menu">
         <li><a class="dropdown-item" href="#"><span class="glyphicon glyphicon-download-alt"></span>  Download Vistoria</a></li>
         <li><a class="dropdown-item" href="inserir-ambiente.php?vistoria=<?php echo $value->id_vistoria?>"><span class="glyphicon glyphicon-edit"></span>  Editar</a></li>
         <li><a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal-delete" data-deleteid="<?php echo $value->id_vistoria ?>"><span class="glyphicon glyphicon-trash"></span>  Excluir</a></li>
         </ul>
        </div></td>
	</tr>
<?php endforeach; ?>
</tbody>
</table>
</div>

<?php include(FOOTER_TEMPLATE);?>