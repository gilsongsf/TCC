<?php
	require_once('../../config.php');
	include(HEADER_TEMPLATE);
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
	<form method="POST" action="add.php">
                <div class="row">
                  <div class="form-group col-md-8">
                    <label for="recipient-name" class="control-label">Imóvel:</label>
                    <input name="imovel" type="text" class="form-control" required>
                  </div>
                   <div class="form-group col-md-4">
                    <label for="recipient-name" class="control-label">Tipo Imóvel:</label>
                    <input name="email" type="email" class="form-control" disabled="disable">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-4">
                    <label for="recipient-name" class="control-label">Vistoriador:</label>               
                    <select required="required" name="vistoriador" class="form-control" id="sel1">
                    	<option value="">Selecione</option>                    
                    </select>                    
                  </div>
                  <div class="form-group col-md-4">
                  	<label for="recipient-name" class="control-label">Tipo de Vistoria:</label>               
                    <select required="required" name="tipovistoria" class="form-control" id="sel1">
                    	<option value="">Selecione</option>                    
                    </select>
                  </div>
                  <div class="form-group col-md-4">
                  	<label for="recipient-name" class="control-label">Data da Vistoria:</label>
                  	<div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" />
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