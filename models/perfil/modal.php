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
                          <td><label><input name="permissoes[]" type="checkbox" value="vistoria_visualizar">Visualizar</label></td>                       
                          <td><label><input name="permissoes[]" type="checkbox" value="vistoria_inserir">Incluir</label></td>                     
                          <td><label><input name="permissoes[]" type="checkbox" value="vistoria_editar">Editar</label></td>
                          <td><label><input name="permissoes[]" type="checkbox" value="vistoria_excluir">Excluir</label></td>
                        </tr>
                        <tr>
                          <td><label>Agenda</label></td>
                          <td><label><input name="permissoes[]" type="checkbox" value="agenda_visualizar">Visualizar</label></td>                      
                          <td><label><input name="permissoes[]" type="checkbox" value="agenda_inserir">Incluir</label></td>                      
                          <td><label><input name="permissoes[]" type="checkbox" value="agenda_editar">Editar</label></td>
                          <td><label><input name="permissoes[]" type="checkbox" value="agenda_excluir">Excluir</label></td>
                        </tr>
                        <tr>
                          <td><label>Indisponibilidade</label></td>
                          <td><label><input name="permissoes[]" type="checkbox" value="indisponibilidade_visualizar">Visualizar</label></td>                         
                          <td><label><input name="permissoes[]" type="checkbox" value="indisponibilidade_inserir">Incluir</label></td>                        
                          <td><label><input name="permissoes[]" type="checkbox" value="indisponibilidade_editar">Editar</label></td>
                          <td><label><input name="permissoes[]" type="checkbox" value="indisponibilidade_excluir">Excluir</label></td>
                        </tr>
                        <tr>
                          <td><label>Imovel</label></td>
                          <td><label><input name="permissoes[]" type="checkbox" value="imovel_visualizar">Visualizar</label></td>                       
                          <td><label><input name="permissoes[]" type="checkbox" value="imovel_inserir">Incluir</label></td>                       
                          <td><label><input name="permissoes[]" type="checkbox" value="imovel_editar">Editar</label></td>
                          <td><label><input name="permissoes[]" type="checkbox" value="imovel_excluir">Excluir</label></td>
                        </tr>
                        <tr>
                          <td><label>Locador</label></td>
                          <td><label><input name="permissoes[]" type="checkbox" value="locador_visualizar">Visualizar</label></td>                          
                          <td><label><input name="permissoes[]" type="checkbox" value="locador_inserir">Incluir</label></td>                        
                          <td><label><input name="permissoes[]" type="checkbox" value="locador_editar">Editar</label></td>
                          <td><label><input name="permissoes[]" type="checkbox" value="locador_excluir">Excluir</label></td>
                        </tr>
                        <tr>
                          <td><label>Usuário</label></td>
                          <td><label><input name="permissoes[]" type="checkbox" value="usuario_visualizar">Visualizar</label></td>                        
                          <td><label><input name="permissoes[]" type="checkbox" value="usuario_inserir">Incluir</label></td>                       
                          <td><label><input name="permissoes[]" type="checkbox" value="usuario_editar">Editar</label></td>
                          <td><label><input name="permissoes[]" type="checkbox" value="usuario_excluir">Excluir</label></td>
                        </tr>
                        <tr>
                          <td><label>Perfil</label></td>
                          <td><label><input name="permissoes[]" type="checkbox" value="perfil_visualizar">Visualizar</label></td>                        
                          <td><label><input name="permissoes[]" type="checkbox" value="perfil_inserir">Incluir</label></td>                       
                          <td><label><input name="permissoes[]" type="checkbox" value="perfil_editar">Editar</label></td>
                          <td><label><input name="permissoes[]" type="checkbox" value="perfil_excluir">Excluir</label></td>
                        </tr>
                        <tr>
                          <td><label>Ambiente</label></td>
                          <td><label><input name="permissoes[]" type="checkbox" value="ambiente_visualizar">Visualizar</label></td>                      
                          <td><label><input name="permissoes[]" type="checkbox" value="ambiente_inserir">Incluir</label></td>                        
                          <td><label><input name="permissoes[]" type="checkbox" value="ambiente_editar">Editar</label></td>
                          <td><label><input name="permissoes[]" type="checkbox" value="ambiente_excluir">Excluir</label></td>
                        </tr>
                        <tr>
                          <td><label>Item</label></td>
                          <td><label><input name="permissoes[]" type="checkbox" value="item_visualizar">Visualizar</label></td>                    
                          <td><label><input name="permissoes[]" type="checkbox" value="item_inserir">Incluir</label></td>                         
                          <td><label><input name="permissoes[]" type="checkbox" value="item_editar">Editar</label></td>
                          <td><label><input name="permissoes[]" type="checkbox" value="item_excluir">Excluir</label></td>
                        </tr>
                        <tr>
                          <td><label>Material</label></td>
                          <td><label><input name="permissoes[]" type="checkbox" value="material_visualizar">Visualizar</label></td>                      
                          <td><label><input name="permissoes[]" type="checkbox" value="material_inserir">Incluir</label></td>                         
                          <td><label><input name="permissoes[]" type="checkbox" value="material_editar">Editar</label></td>
                          <td><label><input name="permissoes[]" type="checkbox" value="material_excluir">Excluir</label></td>
                        </tr>
                        <tr>
                          <td><label>Pintura</label></td>
                          <td><label><input name="permissoes[]" type="checkbox" value="pintura_visualizar">Visualizar</label></td>                        
                          <td><label><input name="permissoes[]" type="checkbox" value="pintura_inserir">Incluir</label></td>                         
                          <td><label><input name="permissoes[]" type="checkbox" value="pintura_editar">Editar</label></td>
                          <td><label><input name="permissoes[]" type="checkbox" value="pintura_excluir">Excluir</label></td>
                        </tr>
                        <tr>
                          <td><label>Cor</label></td>
                          <td><label><input name="permissoes[]" type="checkbox" value="cor_visualizar">Visualizar</label></td>                         
                          <td><label><input name="permissoes[]" type="checkbox" value="cor_inserir">Incluir</label></td>                       
                          <td><label><input name="permissoes[]" type="checkbox" value="cor_editar">Editar</label></td>
                          <td><label><input name="permissoes[]" type="checkbox" value="cor_excluir">Excluir</label></td>
                        </tr>
                        <tr>
                          <td><label>Estado</label></td>
                          <td><label><input name="permissoes[]" type="checkbox" value="estado_visualizar">Visualizar</label></td>                         
                          <td><label><input name="permissoes[]" type="checkbox" value="estado_inserir">Incluir</label></td>                       
                          <td><label><input name="permissoes[]" type="checkbox" value="estado_editar">Editar</label></td>
                          <td><label><input name="permissoes[]" type="checkbox" value="estado_excluir">Excluir</label></td>
                        </tr>
                        <tr>
                          <td><label>Tipo de Vistoria</label></td>
                          <td><label><input name="permissoes[]" type="checkbox" value="tipovistoria_visualizar">Visualizar</label></td>                   
                          <td><label><input name="permissoes[]" type="checkbox" value="tipovistoria_inserir">Incluir</label></td>                      
                          <td><label><input name="permissoes[]" type="checkbox" value="tipovistoria_editar">Editar</label></td>
                          <td><label><input name="permissoes[]" type="checkbox" value="tipovistoria_excluir">Excluir</label></td>
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
      <div class="modal fade" id="modal-edit-perfil" tabindex="-1" role="dialog" aria-labelledby="ModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title text-center" id="ModalLabel">PERFIL | EDITAR</h4>
            </div>
            <div class="modal-body">
              <form method="POST" action="edit.php">
                <div class="row">
                  <div class="form-group col-md-12">
                    <label for="editperfil" class="control-label">Descrição:</label>
                    <input name="perfil" type="text" class="form-control" id="editperfil">
                    <hr><div class="checkbox"></hr>
                    <tr>
                          <th>Permissões</th>
                    </tr>
                    <hr><table id="permissoes" class="table table-striped table-bordered" cellspacing="0" width="100%">
                      <tbody>
                        <tr>
                          <td><label>Vistoria</label></td>
                          <td><label><input name="permissoes[]" type="checkbox" value="vistoria_visualizar">Visualizar</label></td>                       
                          <td><label><input name="permissoes[]" type="checkbox" value="vistoria_inserir">Incluir</label></td>                     
                          <td><label><input name="permissoes[]" type="checkbox" value="vistoria_editar">Editar</label></td>
                          <td><label><input name="permissoes[]" type="checkbox" value="vistoria_excluir">Excluir</label></td>
                        </tr>
                        <tr>
                          <td><label>Agenda</label></td>
                          <td><label><input name="permissoes[]" type="checkbox" value="agenda_visualizar">Visualizar</label></td>                      
                          <td><label><input name="permissoes[]" type="checkbox" value="agenda_inserir">Incluir</label></td>                      
                          <td><label><input name="permissoes[]" type="checkbox" value="agenda_editar">Editar</label></td>
                          <td><label><input name="permissoes[]" type="checkbox" value="agenda_excluir">Excluir</label></td>
                        </tr>
                        <tr>
                          <td><label>Indisponibilidade</label></td>
                          <td><label><input name="permissoes[]" type="checkbox" value="indisponibilidade_visualizar">Visualizar</label></td>                         
                          <td><label><input name="permissoes[]" type="checkbox" value="indisponibilidade_inserir">Incluir</label></td>                        
                          <td><label><input name="permissoes[]" type="checkbox" value="indisponibilidade_editar">Editar</label></td>
                          <td><label><input name="permissoes[]" type="checkbox" value="indisponibilidade_excluir">Excluir</label></td>
                        </tr>
                        <tr>
                          <td><label>Imovel</label></td>
                          <td><label><input name="permissoes[]" type="checkbox" value="imovel_visualizar">Visualizar</label></td>                       
                          <td><label><input name="permissoes[]" type="checkbox" value="imovel_inserir">Incluir</label></td>                       
                          <td><label><input name="permissoes[]" type="checkbox" value="imovel_editar">Editar</label></td>
                          <td><label><input name="permissoes[]" type="checkbox" value="imovel_excluir">Excluir</label></td>
                        </tr>
                        <tr>
                          <td><label>Locador</label></td>
                          <td><label><input name="permissoes[]" type="checkbox" value="locador_visualizar">Visualizar</label></td>                          
                          <td><label><input name="permissoes[]" type="checkbox" value="locador_inserir">Incluir</label></td>                        
                          <td><label><input name="permissoes[]" type="checkbox" value="locador_editar">Editar</label></td>
                          <td><label><input name="permissoes[]" type="checkbox" value="locador_excluir">Excluir</label></td>
                        </tr>
                        <tr>
                          <td><label>Usuário</label></td>
                          <td><label><input name="permissoes[]" type="checkbox" value="usuario_visualizar">Visualizar</label></td>                        
                          <td><label><input name="permissoes[]" type="checkbox" value="usuario_inserir">Incluir</label></td>                       
                          <td><label><input name="permissoes[]" type="checkbox" value="usuario_editar">Editar</label></td>
                          <td><label><input name="permissoes[]" type="checkbox" value="usuario_excluir">Excluir</label></td>
                        </tr>
                        <tr>
                          <td><label>Perfil</label></td>
                          <td><label><input name="permissoes[]" type="checkbox" value="perfil_visualizar">Visualizar</label></td>                        
                          <td><label><input name="permissoes[]" type="checkbox" value="perfil_inserir">Incluir</label></td>                       
                          <td><label><input name="permissoes[]" type="checkbox" value="perfil_editar">Editar</label></td>
                          <td><label><input name="permissoes[]" type="checkbox" value="perfil_excluir">Excluir</label></td>
                        </tr>
                        <tr>
                          <td><label>Ambiente</label></td>
                          <td><label><input name="permissoes[]" type="checkbox" value="ambiente_visualizar">Visualizar</label></td>                      
                          <td><label><input name="permissoes[]" type="checkbox" value="ambiente_inserir">Incluir</label></td>                        
                          <td><label><input name="permissoes[]" type="checkbox" value="ambiente_editar">Editar</label></td>
                          <td><label><input name="permissoes[]" type="checkbox" value="ambiente_excluir">Excluir</label></td>
                        </tr>
                        <tr>
                          <td><label>Item</label></td>
                          <td><label><input name="permissoes[]" type="checkbox" value="item_visualizar">Visualizar</label></td>                    
                          <td><label><input name="permissoes[]" type="checkbox" value="item_inserir">Incluir</label></td>                         
                          <td><label><input name="permissoes[]" type="checkbox" value="item_editar">Editar</label></td>
                          <td><label><input name="permissoes[]" type="checkbox" value="item_excluir">Excluir</label></td>
                        </tr>
                        <tr>
                          <td><label>Material</label></td>
                          <td><label><input name="permissoes[]" type="checkbox" value="material_visualizar">Visualizar</label></td>                      
                          <td><label><input name="permissoes[]" type="checkbox" value="material_inserir">Incluir</label></td>                         
                          <td><label><input name="permissoes[]" type="checkbox" value="material_editar">Editar</label></td>
                          <td><label><input name="permissoes[]" type="checkbox" value="material_excluir">Excluir</label></td>
                        </tr>
                        <tr>
                          <td><label>Pintura</label></td>
                          <td><label><input name="permissoes[]" type="checkbox" value="pintura_visualizar">Visualizar</label></td>                        
                          <td><label><input name="permissoes[]" type="checkbox" value="pintura_inserir">Incluir</label></td>                         
                          <td><label><input name="permissoes[]" type="checkbox" value="pintura_editar">Editar</label></td>
                          <td><label><input name="permissoes[]" type="checkbox" value="pintura_excluir">Excluir</label></td>
                        </tr>
                        <tr>
                          <td><label>Cor</label></td>
                          <td><label><input name="permissoes[]" type="checkbox" value="cor_visualizar">Visualizar</label></td>                         
                          <td><label><input name="permissoes[]" type="checkbox" value="cor_inserir">Incluir</label></td>                       
                          <td><label><input name="permissoes[]" type="checkbox" value="cor_editar">Editar</label></td>
                          <td><label><input name="permissoes[]" type="checkbox" value="cor_excluir">Excluir</label></td>
                        </tr>
                        <tr>
                          <td><label>Estado</label></td>
                          <td><label><input name="permissoes[]" type="checkbox" value="estado_visualizar">Visualizar</label></td>                         
                          <td><label><input name="permissoes[]" type="checkbox" value="estado_inserir">Incluir</label></td>                       
                          <td><label><input name="permissoes[]" type="checkbox" value="estado_editar">Editar</label></td>
                          <td><label><input name="permissoes[]" type="checkbox" value="estado_excluir">Excluir</label></td>
                        </tr>
                        <tr>
                          <td><label>Tipo de Vistoria</label></td>
                          <td><label><input name="permissoes[]" type="checkbox" value="tipovistoria_visualizar">Visualizar</label></td>                   
                          <td><label><input name="permissoes[]" type="checkbox" value="tipovistoria_inserir">Incluir</label></td>                      
                          <td><label><input name="permissoes[]" type="checkbox" value="tipovistoria_editar">Editar</label></td>
                          <td><label><input name="permissoes[]" type="checkbox" value="tipovistoria_excluir">Excluir</label></td>
                        </tr>
                      </tbody>               


                    </table>      
                      
                    </div>
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
