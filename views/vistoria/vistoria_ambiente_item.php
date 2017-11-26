<?php
	require_once('../../config.php');
  require_once('../../controllers/vistoria/vistoria-controller.php');
  require_once('../../controllers/imovel/imovel-controller.php');
  require_once('../../controllers/cadastro-basico/estado/estado-controller.php');
  require_once('../../controllers/usuario/usuario-controller.php');
  include('vistoria-modal.php');

	include(HEADER_TEMPLATE);

  if(isset($_GET['ambiente'])){
    $id_vistoria_ambiente = $_GET['ambiente'];
    $vistoria = new vistoriaController();
    $estado = new estadoController();
    if(isset($_GET['vistoria'])){
      $id_vistoria = $_GET['vistoria'];
    }
  }
?>


<div class="col-sm-29 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<header>
	<div class="row">
		<div class="col-sm-6">
			<h2>Item | Vistoria</h2>
		</div>
    <div class="col-sm-6 text-right h2">
        <a class="btn btn-default" href="inserir-ambiente.php?vistoria=<?php echo $id_vistoria?>"><i class="fa fa-refresh"></i> Voltar</a>
        <a class="btn btn-primary" href="vistoria-view.php"><i class="fa fa-plus"></i> Concluir</a>
      </div>
	</div>
</header>


 

<hr>

<thead>
<form method="POST" action="<?php echo CONTROLLERS; ?>vistoria/vistoria-controller.php">
                <div class="row">
                  <div class="form-group col-md-3">
                    <label for="recipient-name" class="control-label">Item:</label>
                    <input id="item" name="item" type="text" class="form-control" value="" required>
                    <input id="id_item" name="id_item" type="hidden" class="form-control" value="" required>
                    <input id="id_vistoria" name="id_vistoria" type="hidden" class="form-control" value="<?php echo $id_vistoria ?>">
                    <input id="id_vistoria_ambiente" name="id_vistoria_ambiente" type="hidden" class="form-control" value="<?php echo $id_vistoria_ambiente ?>" required>
                  </div>
                  <div class="form-group col-md-3">
                    <label for="recipient-name" class="control-label">Material:</label>
                    <input id="material" name="material" type="text" class="form-control" value="">
                    <input id="id_material" name="id_material" type="hidden" class="form-control" value="">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="recipient-name" class="control-label">Pintura:</label>
                    <input id="pintura" name="pintura" type="text" class="form-control" value="">
                    <input id="id_pintura" name="id_pintura" type="hidden" class="form-control" value="">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="recipient-name" class="control-label">Cor:</label>
                    <input id="cor" name="cor" type="text" class="form-control" value="">
                     <input id="id_cor" name="id_cor" type="hidden" class="form-control" value="">
                  </div>
              </div>
              <div class="row">
                  <div class="form-group col-md-3">
                    <label for="recipient-name" class="control-label">Estado:</label>               
                    <select name="id_estado" class="form-control">
                      <option value="">Selecione</option>   
                    <?php foreach($estado->viewestadoAll() as $key => $value): ?>                     
                      <option value="<?php echo $value->id?>"><?php echo $value->estado ?></option>
                    <?php endforeach; ?>      
                    </select>
                  </div>
                  <div class="form-group col-md-9">
                    <label for="recipient-name" class="control-label">Complemento:</label>
                    <input id="complemento" name="complemento" type="text" class="form-control" value="">
                  </div>
              </div>
              <div class="col-md-12 text-left h2">
                <button type="submit" class="btn btn-primary">Adicionar Item</button>
              </div>
              </form>
      
</thead>
<tbody> 
<table class="table table-striped table-bordered">
<thead>
  <tr>
    <th>Item</th>
    <th>Descrição</th>
    <th>Opções</th>
  </tr>
</thead>
<tbody> 
<?php foreach($vistoria->selectAmbienteVistoriaItem($id_vistoria_ambiente) as $key => $value):
?>
  <tr>
    <td><?php echo $value->item; ?></td>
    <td><?php echo $value->item;
    if ($value->material != NULL){
      echo " de ".$value->material;
    }
    if ($value->pintura != NULL){
      echo " com Pintura ".$value->pintura;
    }
    if ($value->cor != NULL){
      echo " na Cor ".$value->cor;
    }
    if ($value->estado != NULL){
      echo ", ".$value->estado;
    }
    if ($value->complemento != NULL){
      echo ". ".$value->complemento;
    }?></td>
    <td> <div class="btn-group pull-right">
         <button id="opcoes" type="button" class="btn btn-danger dropdown-toggle opcoes" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Opções <span class="caret"></span>
         </button>
         <ul class="dropdown-menu">
         <li><a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal-delete-item" data-idvistoria="<?php echo $id_vistoria?>"  data-idambiente="<?php echo $id_vistoria_ambiente ?>" data-deleteitem="<?php echo $value->id_vistoria_ambiente_item ?>"><span class="glyphicon glyphicon-trash"></span>  Excluir</a></li>
         </ul>
        </div></td>
  </tr>
<?php endforeach; ?>
</tbody>
</table>
</tbody>
</div>

<?php include(FOOTER_TEMPLATE);?>