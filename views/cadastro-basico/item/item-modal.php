<?php 
require_once('../../../config.php');
?>


<!-- Inicio Modal Cadastro -->
      <div class="modal fade" id="modal-insert" tabindex="-1" role="dialog" aria-labelledby="ModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title text-center" id="ModalLabel">ITEM | CADASTRO</h4>
            </div>
            <div class="modal-body">
              <form method="POST" action="<?php echo CONTROLLERS; ?>cadastro-basico/item/item-controller.php">
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="item" class="control-label">Descrição:</label>
                    <input name="item" type="text" class="form-control" required>
                  </div>
                </div>
                <div class="row">
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Salvar</button>
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
      <form method="POST" action="<?php echo CONTROLLERS; ?>cadastro-basico/item/item-controller.php">
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
      <div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="ModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title text-center" id="ModalLabel">Item | EDITAR</h4>
            </div>
            <div class="modal-body">
              <form method="POST" action="<?php echo CONTROLLERS; ?>cadastro-basico/item/item-controller.php">
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="descricao" class="control-label">Descrição:</label>
                    <input name="descricao" type="text" class="form-control" id="descricao">
                  </div>
                </div>
                <input name="editid" type="hidden" id="id">
                <div class="row">
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    <a id="cancel" class="btn btn-default" data-dismiss="modal">Cancelar</a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
<!-- Fim -->

