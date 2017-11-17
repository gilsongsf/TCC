<?php
	require_once('../../../config.php');
	include('modal.php'); 
	include(HEADER_TEMPLATE);

	$ambiente = new ambientes();
	$permissao = new perfil();

	$perfil = 'administrador';

	$permissoes = $permissao->selectPermissoes($perfil);
	$permissoes = unserialize($permissoes);


?>


<div class="col-sm-29 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<header>
	<div class="row">
		<div class="col-sm-6">
			<h2>Ambientes</h2>
		</div>
		<div class="col-sm-6 text-right h2">
	    	<?php if (in_array("ambiente_inserir", $permissoes)) {
	    		echo '<a class="btn btn-primary" data-toggle="modal" data-target="#modal-insert"><i class="fa fa-plus"></i> Novo</a>';
	    		}
	    		else{
	    			echo '<a class="btn btn-primary disabled" role="button" data-toggle="modal" data-target="#modal-insert"><i class="fa fa-plus"></i> Novo</a>';
	    		}?>	    	
	    	<a class="btn btn-default" href="ambiente.php"><i class="fa fa-refresh"></i> Atualizar</a>
	    </div>
	</div>
</header>

<hr>

<table class="table table-hover">
<thead>
	<tr>
		<th>Ambiente</th>
	</tr>
</thead>
<tbody> 
<?php foreach($ambiente->selectAllOrderBy() as $key => $value): ?>
	<tr>
		<td><?php echo $value->ambiente; ?></td>
		<td class="actions text-right">

			<?php if (in_array("ambiente_editar", $permissoes)){
				echo '<a href="#" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modal-edit" data-id="'.$value->id.'" data-descricao="'.$value->ambiente.'"><i class="fa fa-pencil"></i> Editar</a>';				
			}
			else {				
				echo '<a href="#" class="btn btn-sm btn-warning disabled" role="button" data-toggle="modal" data-target="#modal-edit" data-id="'.$value->id.'" data-descricao="'.$value->ambiente.'"><i class="fa fa-pencil"></i> Editar</a>';
			}
				?>

			<?php if (in_array("ambiente_excluir", $permissoes)){
				echo '<a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal-delete" data-id="'.$value->id.'"><i class="fa fa-trash"></i> Excluir</a>';
			}
			else {				
				echo '<a href="#" class="btn btn-sm btn-danger disabled" role="button" data-toggle="modal" data-target="#modal-delete" data-id="'.$value->id.'"><i class="fa fa-trash"></i> Excluir</a>';
			}
				?>
		</td>
	</tr>
<?php endforeach; ?>
</tbody>
</table>
</div>

<?php include(FOOTER_TEMPLATE);?>

