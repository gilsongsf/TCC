<?php 
require_once('../../config.php');
require_once('../../controllers/perfil/perfil-controller.php');
$perfil = new perfilController();
?>


<!-- Inicio Modal Cadastro -->
      <div class="modal fade" id="modal-insert" tabindex="-1" role="dialog" aria-labelledby="ModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title text-center" id="ModalLabel">USUARIO | CADASTRO</h4>
            </div>
            <div class="modal-body">
              <form method="POST" action="<?php echo CONTROLLERS; ?>usuario/usuario-controller.php">
                <div class="row">
                  <div class="form-group col-md-12">
                    <label for="recipient-name" class="control-label">Nome:</label>
                    <input name="nome" type="text" class="form-control" required>
                  </div>
                   <div class="form-group col-md-6">
                    <label for="recipient-name" class="control-label">E-mail:</label>
                    <input name="email" type="email" class="form-control" required>
                  </div>
                   <div class="form-group col-md-6">
                    <label for="recipient-name" class="control-label">Senha:</label>
                    <input name="senha" type="password" class="form-control" required>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="recipient-name" class="control-label">Perfil:</label>               
                    <select required="required" name="perfil" class="form-control" id="sel1">
                    <option value="">Selecione</option>   
                    <?php foreach($perfil->viewPerfilAll() as $key => $value): ?>                     
                      <option value="<?php echo $value->perfil?>"><?php echo $value->perfil ?></option>
                    <?php endforeach; ?>      
                    </select>                    
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

<!-- Inicio Modal Edit -->
      <div class="modal fade" id="modal-edit-usuario" tabindex="-1" role="dialog" aria-labelledby="ModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title text-center" id="ModalLabel">USUARIO | EDITAR</h4>
            </div>
            <div class="modal-body">
              <form method="POST" action="<?php echo CONTROLLERS; ?>usuario/usuario-controller.php">
                <div class="row">
                  <div class="form-group col-md-12">
                    <label for="editnome" class="control-label">Nome:</label>
                    <input name="editnome" type="text" class="form-control" id="editnome">
                  </div>
                   <div class="form-group col-md-6">
                    <label for="editemail" class="control-label">E-mail:</label>
                    <input name="editemail" type="email" class="form-control" id="editemail">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="editperfil" class="control-label">Perfil:</label>               
                    <select name="editperfil" class="form-control" id="editperfil">
                    <option value="">Selecione</option>   
                    <?php foreach($perfil->viewPerfilAll() as $key => $value): ?>                     
                      <option value="<?php echo $value->perfil?>"><?php echo $value->perfil ?></option>
                    <?php endforeach; ?>      
                    </select>                    
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


<!-- Modal de Delete-->
<div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <form method="POST" action="<?php echo CONTROLLERS; ?>usuario/usuario-controller.php">
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


