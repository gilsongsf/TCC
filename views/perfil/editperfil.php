<?php
  require_once('../../config.php'); 
  require_once('../../controllers/perfil/perfil-controller.php');
?>

<?php include(HEADER_TEMPLATE); 

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $perfil = new perfilcontroller();
  } 

  foreach($perfil->selectPerfil($id) as $key => $value):
    $permissoes = unserialize($value->permissoes);
?>

<div class="col-sm-29 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<header>
	<div class="row">
		<div class="col-sm-6">
			<h2>Perfil | Cadastro</h2>
		</div>
	</div>
</header>

<hr>
<tbody> 
<form method="POST" action="<?php echo CONTROLLERS; ?>perfil/perfil-controller.php">
                <div class="row">
                  <div class="form-group col-md-12">
                    <label for="recipient-name" class="control-label">Descrição:</label>
                    <input name="editperfil" type="text" class="form-control" value="<?php echo $value->perfil?>" required>
                    <hr><div class="checkbox"></hr>
                    <tr>
                          <th>Permissões</th>
                    </tr>
                    <hr><table id="permissoes" class="table table-striped table-bordered" cellspacing="0" width="100%">
                      <tbody>
                        <tr>
                          <td><label>Vistoria</label></td>
                          <td><label><input <?php if(in_array("vistoria_visualizar",$permissoes)){ echo "checked";}?> name="editpermissoes[]" type="checkbox" value="vistoria_visualizar">Visualizar</label></td>                       
                          <td><label><input <?php if(in_array("vistoria_inserir",$permissoes)){ echo "checked";}?> name="editpermissoes[]" type="checkbox" value="vistoria_inserir">Incluir</label></td>                     
                          <td><label><input <?php if(in_array("vistoria_editar",$permissoes)){ echo "checked";}?> name="editpermissoes[]" type="checkbox" value="vistoria_editar">Editar</label></td>
                          <td><label><input <?php if(in_array("vistoria_excluir",$permissoes)){ echo "checked";}?> name="editpermissoes[]" type="checkbox" value="vistoria_excluir">Excluir</label></td>
                        </tr>
                        <tr>
                          <td><label>Agenda</label></td>
                          <td><label><input <?php if(in_array("agenda_visualizar",$permissoes)){ echo "checked";}?> name="editpermissoes[]" type="checkbox" value="agenda_visualizar">Visualizar</label></td>                      
                          <td><label><input <?php if(in_array("agenda_inserir",$permissoes)){ echo "checked";}?> name="editpermissoes[]" type="checkbox" value="agenda_inserir">Incluir</label></td>                      
                          <td><label><input <?php if(in_array("agenda_editar",$permissoes)){ echo "checked";}?> name="editpermissoes[]" type="checkbox" value="agenda_editar">Editar</label></td>
                          <td><label><input <?php if(in_array("agenda_excluir",$permissoes)){ echo "checked";}?> name="editpermissoes[]" type="checkbox" value="agenda_excluir">Excluir</label></td>
                        </tr>
                        <tr>
                          <td><label>Indisponibilidade</label></td>
                          <td><label><input <?php if(in_array("indisponibilidade_visualizar",$permissoes)){ echo "checked";}?> name="editpermissoes[]" type="checkbox" value="indisponibilidade_visualizar">Visualizar</label></td>                         
                          <td><label><input <?php if(in_array("indisponibilidade_inserir",$permissoes)){ echo "checked";}?> name="editpermissoes[]" type="checkbox" value="indisponibilidade_inserir">Incluir</label></td>                        
                          <td><label><input <?php if(in_array("indisponibilidade_editar",$permissoes)){ echo "checked";}?> name="editpermissoes[]" type="checkbox" value="indisponibilidade_editar">Editar</label></td>
                          <td><label><input <?php if(in_array("indisponibilidade_excluir",$permissoes)){ echo "checked";}?> name="editpermissoes[]" type="checkbox" value="indisponibilidade_excluir">Excluir</label></td>
                        </tr>
                        <tr>
                          <td><label>Imovel</label></td>
                          <td><label><input <?php if(in_array("imovel_visualizar",$permissoes)){ echo "checked";}?> name="editpermissoes[]" type="checkbox" value="imovel_visualizar">Visualizar</label></td>                       
                          <td><label><input <?php if(in_array("imovel_inserir",$permissoes)){ echo "checked";}?> name="editpermissoes[]" type="checkbox" value="imovel_inserir">Incluir</label></td>                       
                          <td><label><input <?php if(in_array("imovel_editar",$permissoes)){ echo "checked";}?> name="editpermissoes[]" type="checkbox" value="imovel_editar">Editar</label></td>
                          <td><label><input <?php if(in_array("imovel_excluir",$permissoes)){ echo "checked";}?> name="editpermissoes[]" type="checkbox" value="imovel_excluir">Excluir</label></td>
                        </tr>
                        <tr>
                          <td><label>Locador</label></td>
                          <td><label><input <?php if(in_array("locador_visualizar",$permissoes)){ echo "checked";}?> name="editpermissoes[]" type="checkbox" value="locador_visualizar">Visualizar</label></td>                          
                          <td><label><input <?php if(in_array("locador_inserir",$permissoes)){ echo "checked";}?> name="editpermissoes[]" type="checkbox" value="locador_inserir">Incluir</label></td>                        
                          <td><label><input <?php if(in_array("locador_editar",$permissoes)){ echo "checked";}?> name="editpermissoes[]" type="checkbox" value="locador_editar">Editar</label></td>
                          <td><label><input <?php if(in_array("locador_excluir",$permissoes)){ echo "checked";}?> name="editpermissoes[]" type="checkbox" value="locador_excluir">Excluir</label></td>
                        </tr>
                        <tr>
                          <td><label>Usuário</label></td>
                          <td><label><input <?php if(in_array("usuario_visualizar",$permissoes)){ echo "checked";}?> name="editpermissoes[]" type="checkbox" value="usuario_visualizar">Visualizar</label></td>                        
                          <td><label><input <?php if(in_array("usuario_inserir",$permissoes)){ echo "checked";}?> name="editpermissoes[]" type="checkbox" value="usuario_inserir">Incluir</label></td>                       
                          <td><label><input <?php if(in_array("usuario_editar",$permissoes)){ echo "checked";}?> name="editpermissoes[]" type="checkbox" value="usuario_editar">Editar</label></td>
                          <td><label><input <?php if(in_array("usuario_excluir",$permissoes)){ echo "checked";}?> name="editpermissoes[]" type="checkbox" value="usuario_excluir">Excluir</label></td>
                        </tr>
                        <tr>
                          <td><label>Perfil</label></td>
                          <td><label><input <?php if(in_array("perfil_visualizar",$permissoes)){ echo "checked";}?> name="editpermissoes[]" type="checkbox" value="perfil_visualizar">Visualizar</label></td>                        
                          <td><label><input <?php if(in_array("perfil_inserir",$permissoes)){ echo "checked";}?> name="editpermissoes[]" type="checkbox" value="perfil_inserir">Incluir</label></td>                       
                          <td><label><input <?php if(in_array("perfil_editar",$permissoes)){ echo "checked";}?> name="editpermissoes[]" type="checkbox" value="perfil_editar">Editar</label></td>
                          <td><label><input <?php if(in_array("perfil_excluir",$permissoes)){ echo "checked";}?> name="editpermissoes[]" type="checkbox" value="perfil_excluir">Excluir</label></td>
                        </tr>
                        <tr>
                          <td><label>Ambiente</label></td>
                          <td><label><input <?php if(in_array("ambiente_visualizar",$permissoes)){ echo "checked";}?> name="editpermissoes[]" type="checkbox" value="ambiente_visualizar">Visualizar</label></td>                      
                          <td><label><input <?php if(in_array("ambiente_inserir",$permissoes)){ echo "checked";}?> name="editpermissoes[]" type="checkbox" value="ambiente_inserir">Incluir</label></td>                        
                          <td><label><input <?php if(in_array("ambiente_editar",$permissoes)){ echo "checked";}?> name="editpermissoes[]" type="checkbox" value="ambiente_editar">Editar</label></td>
                          <td><label><input <?php if(in_array("ambiente_excluir",$permissoes)){ echo "checked";}?> name="editpermissoes[]" type="checkbox" value="ambiente_excluir">Excluir</label></td>
                        </tr>
                        <tr>
                          <td><label>Item</label></td>
                          <td><label><input <?php if(in_array("item_visualizar",$permissoes)){ echo "checked";}?> name="editpermissoes[]" type="checkbox" value="item_visualizar">Visualizar</label></td>                    
                          <td><label><input <?php if(in_array("item_inserir",$permissoes)){ echo "checked";}?> name="editpermissoes[]" type="checkbox" value="item_inserir">Incluir</label></td>                         
                          <td><label><input <?php if(in_array("item_editar",$permissoes)){ echo "checked";}?> name="editpermissoes[]" type="checkbox" value="item_editar">Editar</label></td>
                          <td><label><input <?php if(in_array("item_excluir",$permissoes)){ echo "checked";}?> name="editpermissoes[]" type="checkbox" value="item_excluir">Excluir</label></td>
                        </tr>
                        <tr>
                          <td><label>Material</label></td>
                          <td><label><input <?php if(in_array("material_visualizar",$permissoes)){ echo "checked";}?> name="editpermissoes[]" type="checkbox" value="material_visualizar">Visualizar</label></td>                      
                          <td><label><input <?php if(in_array("material_inserir",$permissoes)){ echo "checked";}?> name="editpermissoes[]" type="checkbox" value="material_inserir">Incluir</label></td>                         
                          <td><label><input <?php if(in_array("material_editar",$permissoes)){ echo "checked";}?> name="editpermissoes[]" type="checkbox" value="material_editar">Editar</label></td>
                          <td><label><input <?php if(in_array("material_excluir",$permissoes)){ echo "checked";}?> name="editpermissoes[]" type="checkbox" value="material_excluir">Excluir</label></td>
                        </tr>
                        <tr>
                          <td><label>Pintura</label></td>
                          <td><label><input <?php if(in_array("pintura_visualizar",$permissoes)){ echo "checked";}?> name="editpermissoes[]" type="checkbox" value="pintura_visualizar">Visualizar</label></td>                        
                          <td><label><input <?php if(in_array("pintura_inserir",$permissoes)){ echo "checked";}?> name="editpermissoes[]" type="checkbox" value="pintura_inserir">Incluir</label></td>                         
                          <td><label><input <?php if(in_array("pintura_editar",$permissoes)){ echo "checked";}?> name="editpermissoes[]" type="checkbox" value="pintura_editar">Editar</label></td>
                          <td><label><input <?php if(in_array("pintura_excluir",$permissoes)){ echo "checked";}?> name="editpermissoes[]" type="checkbox" value="pintura_excluir">Excluir</label></td>
                        </tr>
                        <tr>
                          <td><label>Cor</label></td>
                          <td><label><input <?php if(in_array("cor_visualizar",$permissoes)){ echo "checked";}?> name="editpermissoes[]" type="checkbox" value="cor_visualizar">Visualizar</label></td>                         
                          <td><label><input <?php if(in_array("cor_inserir",$permissoes)){ echo "checked";}?> name="editpermissoes[]" type="checkbox" value="cor_inserir">Incluir</label></td>                       
                          <td><label><input <?php if(in_array("cor_editar",$permissoes)){ echo "checked";}?> name="editpermissoes[]" type="checkbox" value="cor_editar">Editar</label></td>
                          <td><label><input <?php if(in_array("cor_excluir",$permissoes)){ echo "checked";}?> name="editpermissoes[]" type="checkbox" value="cor_excluir">Excluir</label></td>
                        </tr>
                        <tr>
                          <td><label>Estado</label></td>
                          <td><label><input <?php if(in_array("estado_visualizar",$permissoes)){ echo "checked";}?> name="editpermissoes[]" type="checkbox" value="estado_visualizar">Visualizar</label></td>                         
                          <td><label><input <?php if(in_array("estado_inserir",$permissoes)){ echo "checked";}?> name="editpermissoes[]" type="checkbox" value="estado_inserir">Incluir</label></td>                       
                          <td><label><input <?php if(in_array("estado_editar",$permissoes)){ echo "checked";}?> name="editpermissoes[]" type="checkbox" value="estado_editar">Editar</label></td>
                          <td><label><input <?php if(in_array("estado_excluir",$permissoes)){ echo "checked";}?> name="editpermissoes[]" type="checkbox" value="estado_excluir">Excluir</label></td>
                        </tr>
                        <tr>
                          <td><label>Tipo de Vistoria</label></td>
                          <td><label><input <?php if(in_array("tipovistoria_visualizar",$permissoes)){ echo "checked";}?> name="editpermissoes[]" type="checkbox" value="tipovistoria_visualizar">Visualizar</label></td>                   
                          <td><label><input <?php if(in_array("tipovistoria_inserir",$permissoes)){ echo "checked";}?> name="editpermissoes[]" type="checkbox" value="tipovistoria_inserir">Incluir</label></td>                      
                          <td><label><input <?php if(in_array("tipovistoria_editar",$permissoes)){ echo "checked";}?> name="editpermissoes[]" type="checkbox" value="tipovistoria_editar">Editar</label></td>
                          <td><label><input <?php if(in_array("tipovistoria_excluir",$permissoes)){ echo "checked";}?> name="editpermissoes[]" type="checkbox" value="tipovistoria_excluir">Excluir</label></td>
                        </tr>
                      </tbody>               


                    </table>      
                      
                    </div>
                  </div>
                </div>
                <input name="editpermissoesid" type="hidden" value="<?php echo $value->id?>">
                <div class="row">
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    <a id="cancel" class="btn btn-default" href="perfil-view.php">Cancelar</a>
                  </div>
                </div>
              </form>
              <?php endforeach;?>
</tbody>
</table>
</div>

<?php include(FOOTER_TEMPLATE);?>