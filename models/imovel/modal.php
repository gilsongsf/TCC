<?php 
require_once('../../config.php');
?>


<!-- Inicio Modal Cadastro -->
      <div class="modal fade" id="modal-insert" tabindex="-1" role="dialog" aria-labelledby="ModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title text-center" id="ModalLabel">IMOVEL | CADASTRO</h4>
            </div>
            <div class="modal-body">
              <form method="POST" action="add.php">
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
                      <option value="AC">AC</option> 
                      <option value="AL">AL</option>
                      <option value="AM">AM</option>
                      <option value="AP">AP</option>
                      <option value="BA">BA</option>
                      <option value="CE">CE</option>
                      <option value="DF">DF</option>
                      <option value="ES">ES</option>
                      <option value="GO">GO</option>
                      <option value="MA">MA</option>
                      <option value="MG">MG</option>
                      <option value="MS">MS</option>
                      <option value="MT">MT</option>
                      <option value="PA">PA</option>
                      <option value="PB">PB</option>
                      <option value="PE">PE</option>
                      <option value="PI">PI</option>
                      <option value="RR">RR</option>
                      <option value="RJ">RJ</option>
                      <option value="RN">RN</option>
                      <option value="RO">RO</option>
                      <option value="RR">RR</option>
                      <option value="RS">RS</option>
                      <option value="SC">SC</option>
                      <option value="SE">SE</option>
                      <option value="SP">SP</option>
                      <option value="TO">TO</option>    
                    </select>                    
                  </div>
                  <div class="form-group col-md-9">
                    <label for="recipient-name" class="control-label">Tipo de Imovel:</label>
                    <input name="tipoimovel" type="text" class="form-control" required>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="recipient-name" class="control-label">CEP:</label>
                    <input name="cep" type="text" class="form-control" required>
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
        <h4 class="modal-title" id="modalLabel">Excluir Item</h4>
      </div>
      <div class="modal-body">
        Deseja realmente excluir este item?
      </div>
      <div class="modal-footer">
        <a id="confirm" class="btn btn-primary" href="#">Sim</a>
        <a id="cancel" class="btn btn-default" data-dismiss="modal">N&atilde;o</a>
      </div>
    </div>
  </div>
</div> <!-- /.modal -->

<!-- Inicio Modal Edit -->
      <div class="modal fade" id="modal-edit-locador" tabindex="-1" role="dialog" aria-labelledby="ModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title text-center" id="ModalLabel">LOCADOR | EDITAR</h4>
            </div>
            <div class="modal-body">
              <form method="POST" action="edit.php">
                <div class="row">
                  <div class="form-group col-md-12">
                    <label for="locadornome" class="control-label">Nome:</label>
                    <input name="locadornome" type="text" class="form-control" id="locadornome">
                  </div>
                   <div class="form-group col-md-6">
                    <label for="locadoremail" class="control-label">E-mail:</label>
                    <input name="locadoremail" type="email" class="form-control" id="locadoremail">
                  </div>
                   <div class="form-group col-md-6">
                    <label for="locadortelefone" class="control-label">Telefone:</label>
                    <input name="locadortelefone" type="text" class="form-control" id="locadortelefone">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="locadorcpfcnpj" class="control-label">CPF/CNPJ:</label>
                    <input name="locadorcpfcnpj" type="text" class="form-control" id="locadorcpfcnpj">
                  </div>
                </div>
                <input name="id" type="hidden" id="id">
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

