
<?php
  require_once('../../config.php'); 
?>

<?php include(HEADER_TEMPLATE);?>

<link   href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>  


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
<form method="POST" action="">
                <div class="row">
                  <div class="form-group col-md-8">
                    <label for="recipient-name" class="control-label">Locador:</label>
                    <input id="locador" name="locador" type="text" class="form-control" value="">
                    <input id="id_locador" name="id_locador" type="text" class="form-control" value="">
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
</tbody>
</table>
</div>