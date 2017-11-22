<?php
  require_once('../../config.php');
  require_once('../../controllers/imovel/imovel-controller.php');
  //include(HEADER_TEMPLATE);
?>

<?php 
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $imovel = new imovelcontroller();

    foreach ($imovel->selectLocadorImovel($id) as $key => $value):

      echo $value->nome;
    exit;

      endforeach;

  } 
?>

<link   href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>  

<div class="col-sm-29 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<header>
  <div class="row">
    <div class="col-sm-6">
      <h2>Imóvel | Editar</h2>
    </div>
  </div>
</header>

<hr>

<table class="table table-hover">
<tbody> 
<?php foreach($imovel->selectImovel($id) as $key => $value): ?>
<form method="POST" action="<?php echo CONTROLLERS; ?>imovel/imovel-controller.php">
                <div class="row">
                  <div class="form-group col-md-12">
                    <label for="editendereco" class="control-label">Endereço:</label>
                    <input name="editendereco" type="text" class="form-control" value="<?php echo $value->endereco?>" required>
                  </div>
                   <div class="form-group col-md-3">
                    <label for="editnumero" class="control-label">Número</label>
                    <input name="editnumero" type="text" class="form-control" value="<?php echo $value->numero ?>" required>
                  </div>
                   <div class="form-group col-md-9">
                    <label for="editcomplemento" class="control-label">Complemento</label>
                    <input name="editcomplemento" type="text" id="complemento" class="form-control" value="<?php echo $value->complemento ?>">
                  </div>
                  <div class="form-group col-md-5">
                    <label for="editbairro" class="control-label">Bairro:</label>
                    <input name="editbairro" type="text" class="form-control" value="<?php echo $value->bairro ?>" required>
                  </div>
                  <div class="form-group col-md-7">
                    <label for="editcidade" class="control-label">Cidade:</label>
                    <input name="editcidade" type="text" class="form-control" value="<?php echo $value->cidade ?>" required>
                  </div>
                   <div class="form-group col-md-3">
                    <label for="edituf" class="control-label">UF:</label>               
                    <select required="required" name="edituf" class="form-control">
                    <option value="<?php echo $value->uf ?>"><?php echo $value->uf ?></option>
                    <?php endforeach;?>                        
                     <?php foreach($imovel->viewUFAll() as $key => $value): ?>                     
                      <option value="<?php echo $value->uf?>"><?php echo $value->uf ?></option>
                      <?php endforeach; ?>    
                    </select>                   
                  </div>
                  <?php foreach($imovel->selectImovel($id) as $key => $value): ?>
                  <div class="form-group col-md-9">
                    <label for="edittipoimovel" class="control-label">Tipo de Imóvel:</label>
                    <input name="edittipoimovel" type="text" class="form-control" value="<?php echo $value->tipoimovel ?>" required>
                  </div>
                  <div class="form-group col-md-4">
                    <label for="editcep" class="control-label">CEP:</label>
                    <input name="editcep" type="text" class="form-control" value="<?php echo $value->cep ?>" required>
                  </div>
                  <input name="editid" type="hidden" value="<?php echo $value->id ?>">
                  <?php endforeach;?>
                  <?php foreach ($imovel->selectLocadorImovel($id) as $key => $locador):?>
                  <div class="form-group col-md-8">
                    <label for="recipient-name" class="control-label">Locador:</label>
                    <input id="editlocador" name="editlocador" type="text" class="form-control" value="<?php echo $locador ?>">
                    <input id="edit_id_locador" name="edit_id_locador" type="hidden" class="form-control" value="">
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
              <?php endforeach;?>
              </tbody>
</table>
</div>

<script type="text/javascript">
  $(document).ready(function() {

    $( "#editlocador" ).autocomplete({
        minLength: 1,
        source: 'livesearch.php',
        focus: function( event, ui ) {
            $( "#editlocador" ).val( ui.item.label );
            return false;
        },
        select: function( event, ui ) {
            $( "#editlocador" ).val( ui.item.label );
            $( "#edit_id_locador" ).val( ui.item.value );

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