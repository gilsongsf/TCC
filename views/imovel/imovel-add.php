<?php
  require_once('../../config.php');
  require_once('../../controllers/imovel/imovel-controller.php');
  include(HEADER_TEMPLATE);
?>

<link   href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>  

<div class="col-sm-29 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<header>
  <div class="row">
    <div class="col-sm-6">
      <h2>Imóvel | Cadastro</h2>
    </div>
  </div>
</header>

<hr>
  <?php $imovel = new ImovelController();?>

<table class="table table-hover">
<tbody> 

<form method="POST" action="<?php echo CONTROLLERS; ?>imovel/imovel-controller.php">
                <div class="row">
                  <div class="form-group col-md-10">
                    <label for="recipient-name" class="control-label">Endereço:</label>
                    <input name="endereco" type="text" class="form-control" required>
                  </div>
                   <div class="form-group col-md-2">
                    <label for="recipient-name" class="control-label">Número</label>
                    <input name="numero" type="text" class="form-control" required>
                  </div>
                   <div class="form-group col-md-7">
                    <label for="recipient-name" class="control-label">Complemento</label>
                    <input name="complemento" type="text" class="form-control">
                  </div>
                  <div class="form-group col-md-5">
                    <label for="recipient-name" class="control-label">Bairro:</label>
                    <input name="bairro" type="text" class="form-control" required>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="recipient-name" class="control-label">Cidade:</label>
                    <input name="cidade" type="text" class="form-control" required>
                  </div>
                   <div class="form-group col-md-2">
                    <label for="recipient-name" class="control-label">UF:</label>               
                    <select required="required" name="uf" class="form-control" id="sel1">
                    <option value="">Selecione</option>                        
                      <?php foreach($imovel->viewUFAll() as $key => $value): ?>                     
                      <option value="<?php echo $value->uf?>"><?php echo $value->uf ?></option>
                      <?php endforeach; ?>    
                    </select>                    
                  </div>
                  <div class="form-group col-md-4">
                    <label for="recipient-name" class="control-label">Tipo de Imovel:</label>
                    <input name="tipoimovel" type="text" class="form-control" required>
                  </div>
                  <div class="form-group col-md-3">
                    <label for="recipient-name" class="control-label">CEP:</label>
                    <input name="cep" type="text" class="form-control" required>
                  </div>
                  <div class="form-group col-md-9">
                    <label for="recipient-name" class="control-label">Locador:</label>
                    <input id="locador" name="locador" type="text" class="form-control" value="" required>
                    <input id="id_locador" name="id_locador" type="hidden" class="form-control" value="">
                  </div>
                </div>
                <div class="row">
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    <!--<a id="confirm" class="btn btn-primary" href="#">Salvar</a>-->
                    <a id="cancel" class="btn btn-default" href="imovel-view.php">Cancelar</a>
                  </div>
                </div>
              </form>
              </tbody>
</table>
</div>

<script type="text/javascript">
  $(document).ready(function() {

    $( "#locador" ).autocomplete({
        minLength: 1,
        source: 'livesearch.php',
        focus: function( event, ui ) {
            $( "#locador" ).val( ui.item.label );
            return false;
        },
        select: function( event, ui ) {
            $( "#locador" ).val( ui.item.label );
            $( "#id_locador" ).val( ui.item.value );

            return false;
        }
    })
    .autocomplete( "instance" )._renderItem = function( ul, item ) {
      return $( "<li>" )
        .append( "<div>" + item.label + "</div>" )
        .appendTo( ul );
    };
  });

</script>
<?php include(FOOTER_TEMPLATE);?>