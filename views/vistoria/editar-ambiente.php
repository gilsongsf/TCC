<?php
	require_once('../../config.php');
  require_once('../../controllers/vistoria/vistoria-controller.php');
  require_once('../../controllers/imovel/imovel-controller.php');
  require_once('../../controllers/usuario/usuario-controller.php');
  require_once('../../controllers/cadastro-basico/ambiente/ambiente-controller.php');

	include(HEADER_TEMPLATE);

  if(isset($_GET['ambiente'])){
    $id_ambiente = $_GET['ambiente'];
    $vistoria = new vistoriaController();
    $ambiente = new ambienteController();

    if(isset($_GET['vistoria'])){
      $id_vistoria = $_GET['vistoria'];
    }
    if(isset($_GET['vistoria_ambiente'])){
      $id_vistoria_ambiente = $_GET['vistoria_ambiente'];
    }
  }
?>


<div class="col-sm-29 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<header>
	<div class="row">
		<div class="col-sm-6">
			<h2>Editar Ambiente | Vistoria</h2>
		</div>
    <div class="col-sm-6 text-right h2">
        <a class="btn btn-default" href="inserir-ambiente.php?vistoria=<?php echo $id_vistoria ?>"><i class="fa fa-plus"></i> Voltar</a>
        <a class="btn btn-primary" href=""><i class="fa fa-plus"></i> Concluir</a>
      </div>
	</div>
</header>

<hr>

<thead>
<form method="POST" action="<?php echo CONTROLLERS; ?>vistoria/vistoria-controller.php">
                <div class="row">
                  <div class="form-group col-md-4">
                    <label for="recipient-name" class="control-label">Ambiente:</label>
                    <?php foreach($ambiente->select($id_ambiente) as $key => $value):?>
                    <input id="update_ambiente" name="update_ambiente" type="text" class="form-control" value="<?php echo $value->ambiente?>" required>
                    <input id="id_vistoria" name="id_vistoria" type="hidden" class="form-control" value="<?php echo $id_vistoria ?>" required>
                    <input id="update_id_ambiente" name="update_id_ambiente" type="hidden" class="form-control" value="<?php echo $value->id?>" required>
                    <input id="update_id_vistoria_ambiente" name="update_id_vistoria_ambiente" type="hidden" class="form-control" value="<?php echo $id_vistoria_ambiente ?>" required>
                    <button type="submit" class="btn btn-primary">Editar Ambiente</button>
                    <?php endforeach; ?>              
                  </div>
                </div>
              </form>
      
</thead>

</tbody>
</table>
</tbody>
</div>

<?php include(FOOTER_TEMPLATE);?>