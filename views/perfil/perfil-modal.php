<?php 
require_once('../../config.php');
?>

<!-- Modal de Delete-->
<div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <form method="POST" action="<?php echo CONTROLLERS; ?>perfil/perfil-controller.php">
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modalLabel">Excluir Perfil</h4>
      </div>
      <div class="modal-body">
        Deseja realmente excluir este perfil?
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