<?php 
require_once('../../config.php');
require_once('../../controllers/imovel/imovel-controller.php');
$imovel = new imovelController();
?>
 
<script src="<?php echo BASEURL; ?>js/jquery.js" type="text/javascript"></script>
<script src="<?php echo BASEURL; ?>js/bootstrap3-typeahead.min.js"></script>

<!-- Inicio Modal Cadastro -->
      <div class="modal fade" id="modal-insert" tabindex="-1" role="dialog" aria-labelledby="ModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title text-center" id="ModalLabel">IMOVEL | CADASTRO</h4>
            </div>
            <div class="modal-body">
              <form method="POST" action="<?php echo CONTROLLERS; ?>imovel/imovel-controller.php">
                <div class="row">
                  <div class="form-group col-md-12">
                    <label for="recipient-name" class="control-label">Endereço:</label>
                    <input name="endereco" type="text" class="form-control" required>
                  </div>
                   <div class="form-group col-md-3">
                    <label for="recipient-name" class="control-label">Número</label>
                    <input name="numero" type="text" class="form-control" required>
                  </div>
                   <div class="form-group col-md-9">
                    <label for="recipient-name" class="control-label">Complemento</label>
                    <input name="complemento" type="text" class="form-control">
                  </div>
                  <div class="form-group col-md-5">
                    <label for="recipient-name" class="control-label">Bairro:</label>
                    <input name="bairro" type="text" class="form-control" required>
                  </div>
                  <div class="form-group col-md-7">
                    <label for="recipient-name" class="control-label">Cidade:</label>
                    <input name="cidade" type="text" class="form-control" required>
                  </div>
                   <div class="form-group col-md-3">
                    <label for="recipient-name" class="control-label">UF:</label>               
                    <select required="required" name="uf" class="form-control" id="sel1">
                    <option value="">Selecione</option>                        
                      <?php foreach($imovel->viewUFAll() as $key => $value): ?>                     
                      <option value="<?php echo $value->uf?>"><?php echo $value->uf ?></option>
                      <?php endforeach; ?>    
                    </select>                    
                  </div>
                  <div class="form-group col-md-9">
                    <label for="recipient-name" class="control-label">Tipo de Imovel:</label>
                    <input name="tipoimovel" type="text" class="form-control" required>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="recipient-name" class="control-label">CEP:</label>
                    <input name="cep" type="text" class="form-control" required>
                  </div>
                  <div class="form-group col-md-8">
                    <label for="recipient-name" class="control-label">Locador:</label>
                    <input id="locador" name="locador" type="text" class="typeahead form-control" value="">
                    <input id="id_locador" name="id_locador" type="hidden" class="typeahead form-control" value="">
                  </div>
                </div>
                <div class="row">
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    <!--<a id="confirm" class="btn btn-primary" href="#">Salvar</a>-->
                    <a id="cancel" class="btn btn-default" data-dismiss="modal">Cancelar</a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
<!-- Fim Modal Cadastro -->

<!-- Modal de Delete-->
<div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <form method="POST" action="<?php echo CONTROLLERS; ?>imovel/imovel-controller.php">
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modalLabel">Excluir Item</h4>
      </div>
      <div class="modal-body">
        Deseja realmente excluir este item?
      </div>
      <input name="deleteid" type="hidden" id="deleteid" value="">
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Sim</button>
        <a id="cancel" class="btn btn-default" data-dismiss="modal">N&atilde;o</a>
      </div>
      </form>
    </div>
  </div>
</div> <!-- /.modal -->

<!-- Inicio Modal Edit -->
      <div class="modal fade" id="modal-edit-imovel" tabindex="-1" role="dialog" aria-labelledby="ModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title text-center" id="ModalLabel">LOCADOR | EDITAR</h4>
            </div>
            <div class="modal-body">
              <form method="POST" action="<?php echo CONTROLLERS; ?>imovel/imovel-controller.php">
                <div class="row">
                  <div class="form-group col-md-12">
                    <label for="editendereco" class="control-label">Endereço:</label>
                    <input name="editendereco" type="text" class="form-control" id="endereco" required>
                  </div>
                   <div class="form-group col-md-3">
                    <label for="editnumero" class="control-label">Número</label>
                    <input name="editnumero" type="text" class="form-control" id="numero" required>
                  </div>
                   <div class="form-group col-md-9">
                    <label for="editcomplemento" class="control-label">Complemento</label>
                    <input name="editcomplemento" type="text" id="complemento" class="form-control">
                  </div>
                  <div class="form-group col-md-5">
                    <label for="editbairro" class="control-label">Bairro:</label>
                    <input name="editbairro" type="text" class="form-control" id="bairro" required>
                  </div>
                  <div class="form-group col-md-7">
                    <label for="editcidade" class="control-label">Cidade:</label>
                    <input name="editcidade" type="text" class="form-control" id="cidade" required>
                  </div>
                   <div class="form-group col-md-3">
                    <label for="edituf" class="control-label">UF:</label>               
                    <select required="required" name="edituf" class="form-control" id="uf">
                    <option value="">Selecione</option>                        
                      <?php foreach($imovel->viewUFAll() as $key => $value): ?>                     
                      <option value="<?php echo $value->uf?>"><?php echo $value->uf ?></option>
                      <?php endforeach; ?>    
                    </select>                   
                  </div>
                  <div class="form-group col-md-9">
                    <label for="edittipoimovel" class="control-label">Tipo de Imovel:</label>
                    <input name="edittipoimovel" type="text" class="form-control" id="tipoimovel" required>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="editcep" class="control-label">CEP:</label>
                    <input name="editcep" type="text" class="form-control" id="cep" required>
                  </div>
                  <div class="form-group col-md-8">
                    <label for="recipient-name" class="control-label">Locador:</label>
                    <input id="locador" name="locador" type="text" class="typeahead form-control" value="">
                    <input id="id_locador" name="id_locador" type="hidden" class="typeahead form-control" value="">
                  </div>
                </div>
                <input name="editid" type="hidden" id="id">
                <div class="row">
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    <!--<a id="confirm" class="btn btn-primary" href="#">Salvar</a>-->
                    <a id="cancel" class="btn btn-default" data-dismiss="modal">Cancelar</a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
<!-- Fim -->

<script type="text/javascript">
  $('input.typeahead').typeahead({
      source:  function (query, process) {
        return $.get('livesearch.php', { query: query }, function (data) {
            console.log(data);
            data = $.parseJSON(data);
            //$("#id_locador").val(data.id_locador);
            //document.write(data.nome);
            return process(data);
          });
      }
  });
</script>