<?php
	require_once('../../config.php');
  include(HEADER_TEMPLATE);
  require_once('../../controllers/vistoria/vistoria-controller.php');
  require_once('../../controllers/imovel/imovel-controller.php');
  require_once('../../controllers/cadastro-basico/tipovistoria/tipovistoria-controller.php');
  require_once('../../controllers/usuario/usuario-controller.php');

	

  $tipovistoria = new tipovistoriaController();
  $vistoriador = new usuarioController();
?> 

<div class="col-sm-29 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<header>
	<div class="row">
		<div class="col-sm-6">
			<h2>Cadastro | Vistoria</h2>
		</div>
	</div>
</header>


 

<hr>

<thead>
	<form method="POST" action="<?php echo CONTROLLERS; ?>vistoria/vistoria-controller.php">
                <div class="row">
                  <div class="form-group col-md-8">
                    <label for="recipient-name" class="control-label">Imóvel:</label>
                    <input id="imovel" name="imovel" type="text" class="form-control" value="" required>
                    <input id="id_imovel" name="id_imovel" type="hidden" class="form-control" value="" required>
                  </div>
                   <div class="form-group col-md-4">
                    <label for="recipient-name" class="control-label">Tipo Imóvel:</label>
                    <input id="tipoimovel" name="tipoimovel" type="text" class="form-control" disabled="disable">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-4">
                    <label for="recipient-name" class="control-label">Vistoriador:</label>               
                    <select required="required" name="id_vistoriador" class="form-control">
                    	<option value="">Selecione</option>                    
                    <?php foreach($vistoriador->selectVistoriadorAll() as $key => $value): ?>                     
                      <option value="<?php echo $value->id?>"><?php echo $value->nome ?></option>
                    <?php endforeach; ?>      
                    </select>                    
                  </div>
                  <div class="form-group col-md-4">
                  	<label for="recipient-name" class="control-label">Tipo de Vistoria:</label>               
                    <select required="required" name="id_tipovistoria" class="form-control">
                    	<option value="">Selecione</option>   
                    <?php foreach($tipovistoria->viewtipovistoriaAll() as $key => $value): ?>                     
                      <option value="<?php echo $value->id?>"><?php echo $value->tipovistoria ?></option>
                    <?php endforeach; ?>      
                    </select>
                  </div>
                  <div class="form-group col-md-4">
                  	<label for="recipient-name" class="control-label">Data da Vistoria:</label>
                  	<div class="input-group date">
                    <input type="text" name="data_vistoria" class="form-control" id="exemplo" required>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
                  </div>
                </div>
                <div class="row">
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Avançar</button>
                    <!--<a id="confirm" class="btn btn-primary" href="#">Salvar</a>-->
                    <a id="cancel" class="btn btn-default" href="vistoria-view.php">Cancelar</a>
                  </div>
                </div>
              </form>
</thead>
<tbody> 

</tbody>
</table>
</div>

<?php include(FOOTER_TEMPLATE);?>