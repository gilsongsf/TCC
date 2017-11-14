<?php 
require_once('../../config.php');
?>


<!-- Inicio Modal Cadastro -->
      <div class="modal fade" id="modal-insert" tabindex="-1" role="dialog" aria-labelledby="ModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title text-center" id="ModalLabel">PERFIL | CADASTRO</h4>
            </div>
            <div class="modal-body">
              <form method="POST" action="add.php">
                <div class="row">
                  <div class="form-group col-md-12">
                    <label for="recipient-name" class="control-label">Descrição:</label>
                    <input name="perfil" type="text" class="form-control" required>
                    <hr><div class="checkbox"></hr>
                    <tr>
                          <th>Permissões</th>
                    </tr>
                    <hr><table id="permissoes" class="table table-striped table-bordered" cellspacing="0" width="100%">
                      <tbody>
                        <tr>
                          <td><label>Vistoria</label></td>
                          <td><label><input name="vistoria_visualizar" type="checkbox" value="vistoria_visualizar">Visualizar</label></td>                         
                          <td><label><input name="vistoria_inserir" type="checkbox" value="vistoria_inserir">Incluir</label></td>                       
                          <td><label><input name="vistoria_editar" type="checkbox" value="vistoria_editar">Editar</label></td>
                          <td><label><input name="vistoria_excluir" type="checkbox" value="vistoria_excluir">Excluir</label></td>
                        </tr>
                        <tr>
                          <td><label>Agenda</label></td>
                          <td><label><input name="agenda_visualizar" type="checkbox" value="1">Visualizar</label></td>                    
                          <td><label><input name="agenda_inserir" type="checkbox" value="1">Incluir</label></td>                   
                          <td><label><input name="agenda_editar" type="checkbox" value="1">Editar</label></td>
                          <td><label><input name="agenda_excluir" type="checkbox" value="1">Excluir</label></td>
                        </tr>
                        <tr>
                          <td><label>Indisponibilidade</label></td>
                          <td><label><input name="indisponibilidade_visualizar" type="checkbox" value="1">Visualizar</label></td>                  
                          <td><label><input name="indisponibilidade_inserir" type="checkbox" value="1">Incluir</label></td>                     
                          <td><label><input name="indisponibilidade_editar" type="checkbox" value="1">Editar</label></td>
                          <td><label><input name="indisponibilidade_excluir" type="checkbox" value="1">Excluir</label></td>
                        </tr>
                        <tr>
                          <td><label>Imovel</label></td>
                          <input name="imovel_visualizar" type="hidden" value="0">
                          <td><label><input name="imovel_visualizar" type="checkbox" value="1">Visualizar</label></td> 
                          <input name="imovel_inserir" type="hidden" value="0">                         
                          <td><label><input name="imovel_inserir" type="checkbox" value="1">Incluir</label></td>  
                          <input name="imovel_editar" type="hidden" value="0">                        
                          <td><label><input name="imovel_editar" type="checkbox" value="1">Editar</label></td>
                          <input name="imovel_excluir" type="hidden" value="0">
                          <td><label><input name="imovel_excluir" type="checkbox" value="1">Excluir</label></td>
                        </tr>
                        <tr>
                          <td><label>Locador</label></td>
                          <input name="locador_visualizar" type="hidden" value="0">
                          <td><label><input name="locador_visualizar" type="checkbox" value="1">Visualizar</label></td> 
                          <input name="locador_inserir" type="hidden" value="0">                         
                          <td><label><input name="locador_inserir" type="checkbox" value="1">Incluir</label></td>  
                          <input name="locador_editar" type="hidden" value="0">                        
                          <td><label><input name="locador_editar" type="checkbox" value="1">Editar</label></td>
                          <input name="locador_excluir" type="hidden" value="0">
                          <td><label><input name="locador_excluir" type="checkbox" value="1">Excluir</label></td>
                        </tr>
                        <tr>
                          <td><label>Usuário</label></td>
                          <input name="usuario_visualizar" type="hidden" value="0">
                          <td><label><input name="usuario_visualizar" type="checkbox" value="1">Visualizar</label></td> 
                          <input name="usuario_inserir" type="hidden" value="0">                         
                          <td><label><input name="usuario_inserir" type="checkbox" value="1">Incluir</label></td>  
                          <input name="usuario_editar" type="hidden" value="0">                        
                          <td><label><input name="usuario_editar" type="checkbox" value="1">Editar</label></td>
                          <input name="usuario_excluir" type="hidden" value="0">
                          <td><label><input name="usuario_excluir" type="checkbox" value="1">Excluir</label></td>
                        </tr>
                        <tr>
                          <td><label>Perfil</label></td>
                          <input name="perfil_visualizar" type="hidden" value="0">
                          <td><label><input name="perfil_visualizar" type="checkbox" value="1">Visualizar</label></td> 
                          <input name="perfil_inserir" type="hidden" value="0">                         
                          <td><label><input name="perfil_inserir" type="checkbox" value="1">Incluir</label></td>  
                          <input name="perfil_editar" type="hidden" value="0">                        
                          <td><label><input name="perfil_editar" type="checkbox" value="1">Editar</label></td>
                          <input name="perfil_excluir" type="hidden" value="0">
                          <td><label><input name="perfil_excluir" type="checkbox" value="1">Excluir</label></td>
                        </tr>
                        <tr>
                          <td><label>Ambiente</label></td>
                          <input name="ambiente_visualizar" type="hidden" value="0">
                          <td><label><input name="ambiente_visualizar" type="checkbox" value="1">Visualizar</label></td> 
                          <input name="ambiente_inserir" type="hidden" value="0">                         
                          <td><label><input name="ambiente_inserir" type="checkbox" value="1">Incluir</label></td>  
                          <input name="ambiente_editar" type="hidden" value="0">                        
                          <td><label><input name="ambiente_editar" type="checkbox" value="1">Editar</label></td>
                          <input name="ambiente_excluir" type="hidden" value="0">
                          <td><label><input name="ambiente_excluir" type="checkbox" value="1">Excluir</label></td>
                        </tr>
                        <tr>
                          <td><label>Item</label></td>
                          <input name="item_visualizar" type="hidden" value="0">
                          <td><label><input name="item_visualizar" type="checkbox" value="1">Visualizar</label></td> 
                          <input name="item_inserir" type="hidden" value="0">                         
                          <td><label><input name="item_inserir" type="checkbox" value="1">Incluir</label></td>  
                          <input name="item_editar" type="hidden" value="0">                        
                          <td><label><input name="item_editar" type="checkbox" value="1">Editar</label></td>
                          <input name="item_excluir" type="hidden" value="0">
                          <td><label><input name="item_excluir" type="checkbox" value="1">Excluir</label></td>
                        </tr>
                        <tr>
                          <td><label>Material</label></td>
                          <input name="material_visualizar" type="hidden" value="0">
                          <td><label><input name="material_visualizar" type="checkbox" value="1">Visualizar</label></td> 
                          <input name="material_inserir" type="hidden" value="0">                         
                          <td><label><input name="material_inserir" type="checkbox" value="1">Incluir</label></td>  
                          <input name="material_editar" type="hidden" value="0">                        
                          <td><label><input name="material_editar" type="checkbox" value="1">Editar</label></td>
                          <input name="material_excluir" type="hidden" value="0">
                          <td><label><input name="material_excluir" type="checkbox" value="1">Excluir</label></td>
                        </tr>
                        <tr>
                          <td><label>Pintura</label></td>
                          <input name="pintura_visualizar" type="hidden" value="0">
                          <td><label><input name="pintura_visualizar" type="checkbox" value="1">Visualizar</label></td> 
                          <input name="pintura_inserir" type="hidden" value="0">                         
                          <td><label><input name="pintura_inserir" type="checkbox" value="1">Incluir</label></td>  
                          <input name="pintura_editar" type="hidden" value="0">                        
                          <td><label><input name="pintura_editar" type="checkbox" value="1">Editar</label></td>
                          <input name="pintura_excluir" type="hidden" value="0">
                          <td><label><input name="pintura_excluir" type="checkbox" value="1">Excluir</label></td>
                        </tr>
                        <tr>
                          <td><label>Cor</label></td>
                          <input name="cor_visualizar" type="hidden" value="0">
                          <td><label><input name="cor_visualizar" type="checkbox" value="1">Visualizar</label></td> 
                          <input name="cor_inserir" type="hidden" value="0">                         
                          <td><label><input name="cor_inserir" type="checkbox" value="1">Incluir</label></td>  
                          <input name="cor_editar" type="hidden" value="0">                        
                          <td><label><input name="cor_editar" type="checkbox" value="1">Editar</label></td>
                          <input name="cor_excluir" type="hidden" value="0">
                          <td><label><input name="cor_excluir" type="checkbox" value="1">Excluir</label></td>
                        </tr>
                        <tr>
                          <td><label>Estado</label></td>
                          <input name="estado_visualizar" type="hidden" value="0">
                          <td><label><input name="estado_visualizar" type="checkbox" value="1">Visualizar</label></td> 
                          <input name="estado_inserir" type="hidden" value="0">                         
                          <td><label><input name="estado_inserir" type="checkbox" value="1">Incluir</label></td>  
                          <input name="estado_editar" type="hidden" value="0">                        
                          <td><label><input name="estado_editar" type="checkbox" value="1">Editar</label></td>
                          <input name="estado_excluir" type="hidden" value="0">
                          <td><label><input name="estado_excluir" type="checkbox" value="1">Excluir</label></td>
                        </tr>
                        <tr>
                          <td><label>Tipo de Vistoria</label></td>
                          <input name="tipovistoria_visualizar" type="hidden" value="0">
                          <td><label><input name="tipovistoria_visualizar" type="checkbox" value="1">Visualizar</label></td> 
                          <input name="tipovistoria_inserir" type="hidden" value="0">                         
                          <td><label><input name="tipovistoria_inserir" type="checkbox" value="1">Incluir</label></td>  
                          <input name="tipovistoria_editar" type="hidden" value="0">                        
                          <td><label><input name="tipovistoria_editar" type="checkbox" value="1">Editar</label></td>
                          <input name="tipovistoria_excluir" type="hidden" value="0">
                          <td><label><input name="tipovistoria_excluir" type="checkbox" value="1">Excluir</label></td>
                        </tr>
                      </tbody>               


                    </table>      
                      
                    </div>
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
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modalLabel">Excluir Perfil</h4>
      </div>
      <div class="modal-body">
        Deseja realmente excluir este perfil?
      </div>
      <div class="modal-footer">
        <a id="confirm" class="btn btn-primary" href="#">Sim</a>
        <a id="cancel" class="btn btn-default" data-dismiss="modal">N&atilde;o</a>
      </div>
    </div>
  </div>
</div> <!-- /.modal -->

<!-- Inicio Modal Edit -->
      <div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="ModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title text-center" id="ModalLabel">PERFIL | EDITAR</h4>
            </div>
            <div class="modal-body">
              <form method="POST" action="edit.php">
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="descricao" class="control-label">Descrição:</label>
                    <input name="perfil" type="text" class="form-control" id="descricao">
                  </div>
                </div>
                <input name="id" type="hidden" id="id">
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

