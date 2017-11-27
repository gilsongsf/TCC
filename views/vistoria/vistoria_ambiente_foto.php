<?php
  require_once('../../config.php');
  include(HEADER_TEMPLATE);
  require_once('../../controllers/vistoria/vistoria-controller.php');
  require_once('../../controllers/imovel/imovel-controller.php');
  require_once('../../controllers/cadastro-basico/estado/estado-controller.php');
  require_once('../../controllers/usuario/usuario-controller.php');
  include('vistoria-modal.php');

  

  if(isset($_GET['ambiente'])){
    $id_vistoria_ambiente = $_GET['ambiente'];
    $vistoria = new vistoriaController();
    $estado = new estadoController();
    if(isset($_GET['vistoria'])){
      $id_vistoria = $_GET['vistoria'];
    }
  }
?>

<!-- SCRIPT DE VISUALIZAR FOTO -->

<script type="text/javascript">
  
function openFoto(id, $id_vistoria,$id_vistoria_ambiente) {
if(id) {
    $.ajax({
        url: "visualizarFoto.php",
        type: "POST",
        data: {idFoto : id, idVistoria:$id_vistoria, idAmbiente:$id_vistoria_ambiente}, 
          success: function (result) {
          $('#myModal').modal('show'); 
          $("#visualizar_foto").html(result);
        }
    });  
    } else {
        alert("Erro : Carregue a Pagina Novamente!");
    }
}

</script>


<div class="col-sm-29 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<header>
  <div class="row">
    <div class="col-sm-6">
      <h2>Foto | Vistoria</h2>
    </div>
    <div class="col-sm-6 text-right h2">
        <a class="btn btn-primary" data-toggle="modal" data-target="#modal-insert-foto"><i class="fa fa-plus"></i> Nova Foto</a>
        <a class="btn btn-default" href="inserir-ambiente.php?vistoria=<?php echo $id_vistoria?>"><i class="fa fa-refresh"></i> Voltar</a>
        <a class="btn btn-success" href="vistoria-view.php"><i class="fa fa-plus"></i> Concluir</a>
      </div>
  </div>
</header>

<hr>
<?php if (isset($_GET["erro"]) AND ($_GET["erro"]=="1")){?>
      <div class="row">
        <div class="alert alert-danger alert-dismissable">
        <a class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Erro!</strong> Insira um arquivo válido.
    </div>
   </div>
        <?php } ?>

<thead>


      
</thead>
<tbody> 
<table class="table table-striped table-bordered">
<thead>
  <tr>
    <th>Fotos</th>
    <th>Opções</th>
  </tr>
</thead>
<tbody> 
<?php foreach($vistoria->selectAmbienteVistoriaFoto($id_vistoria_ambiente) as $key => $value):
?>
  </div>

  <tr>
    <td><?php echo "<img onclick='openFoto($value->id,$id_vistoria,$id_vistoria_ambiente)' width='80px' height='50px' src='".FOTOS.$id_vistoria.'/'.$value->foto."' class='img-rounded'";?></td>
    <td> <div class="btn-group pull-right">
         <button id="opcoes" type="button" class="btn btn-danger dropdown-toggle opcoes" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Opções <span class="caret"></span>
         </button>
         <ul class="dropdown-menu">
         <li><a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal-delete-foto" data-idvistoria="<?php echo $id_vistoria?>"  data-idambiente="<?php echo $id_vistoria_ambiente ?>" data-foto="<?php echo $value->foto ?>" data-deletefoto="<?php echo $value->id ?>"><span class="glyphicon glyphicon-trash"></span>  Excluir</a></li>
         </ul>
        </div></td>
  </tr>


<?php endforeach; ?>
</tbody>
</table>
</tbody>
</div>

  <!-- MODAL VISUALIZAR FOTO -->

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="text-align:center">Visualizar Foto</h4>
      </div>
     <div style='text-align:center' id="visualizar_foto"></div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal-insert-foto" tabindex="-1" role="dialog" aria-labelledby="ModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title text-center" id="ModalLabel">Foto | Vistoria</h4>
            </div>
            <div class="modal-body">
              <form method="POST" action="<?php echo CONTROLLERS; ?>vistoria/vistoria-controller.php" enctype="multipart/form-data">
              <div class="row">
              <div class="form-group col-md-6">
                    <label for="recipient-name" class="control-label">Foto:</label>
                    <input id="foto" name="foto" type="file" class="custom-file-input" value="" required>
                    <input id="vistoria" name="vistoria" type="text" class="form-control" value="<?php echo $id_vistoria ?>">
                    <input id="vistoria_ambiente" name="vistoria_ambiente" type="hidden" class="form-control" value="<?php echo $id_vistoria_ambiente ?>" required>
                  </div>
              </div>
              <div class="row">
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Enviar Foto</button>
                    <!--<a id="confirm" class="btn btn-primary" href="#">Salvar</a>-->
                    <a id="cancel" class="btn btn-default" data-dismiss="modal">Cancelar</a>
                  </div>
              </form>
            </div>
          </div>
        </div>
      </div>






<?php include(FOOTER_TEMPLATE);?>