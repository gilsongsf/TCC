<?php
	include("../../models/database.php");
	require_once('../../config.php');
  require_once('../../controllers/usuario/usuario-controller.php');
  require_once('../../controllers/cadastro-basico/tipovistoria/tipovistoria-controller.php');
	include(HEADER_TEMPLATE);

  $tipovistoria = new tipovistoriaController();
  $vistoriador = new usuarioController();
?>
<html lang="en"><head>
    <title>FullCallendar</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <style type="text/css">
    
      img {border-width: 0}
      * {font-family:'Lucida Grande', sans-serif;}
    </style>
  </head>
  <body>

    <style type="text/css">
        .block a:hover{
            color: silver;
        }
        .block a{
            color: #fff;
        }
        .block {
            position: fixed;
            background: #2184cd;
            padding: 20px;
            z-index: 1;
            top: 240px;
        }
    </style>
  



<script type="text/javascript">
    
$(document).ready(function(){
        var calendar = $('#calendar').fullCalendar({
            header:{
                left: 'prev,next today',
                center: 'title',
                right: 'month'//,agendaWeek,agendaDay'
            },
            defaultView: 'month',
            selectable: true,
            allDaySlot: false,
            locale:'pt-br',
            defaultDate: '<?=date('Y-m-d')?>',
            allDaySlot :false,
            editable: true,
            eventLimit: true, // allow "more" link when too many events
            slotLabelFormat:'HH:mm',
            views: {
              week: 
               {
                 titleFormat: 'D MMMM',
               },
               month: 
                {
                  timeFormat : 'HH:mm'
               },
            },
            
            events: [
            <?php
             $sql  = "SELECT * FROM agenda";
             $stmt = DB::prepare($sql);
             $stmt->execute();
             while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>

                {
                    id:     <?=$row['id']?>, 
                    start: '<?=$row['data_inicio']?>',
                    end:   '<?=$row['data_fim']?>',
                    title: '<?=$row['situacao']?>'
               },

            <?php } ?>
            
            ],

            eventClick: function(calEvent, jsEvent, view) {
             
             $('#calendarModal').modal();

             $.ajax({
                url: 'actions.php',
                type: 'POST',
                data: 'action=selectAgendamento&eventid='+calEvent.id,
                dataType: 'json',
                success:function(response) {

                     $('#eventID').val(response.id); 
                     $('#viewVistoriador').val(response.id_vistoriador); 
                     $('#viewImovel').val(response.id_imovel); 
                     $('#viewTipoVistoria').val(response.id_tipovistoria); 
                     $('#viewSolicitante').val(response.id_solicitante); 
                     $('#viewData').val(response.data); 
                     $('#viewHrInicio').val(response.data_inicio); 
                     $('#viewHrFim').val(response.data_fim); 

                    }
                
                });
             }
        });
               
       $("#novaVistoria").click(function(){
            $.ajax({
                    url: 'actions.php',
                    type: 'POST',
                    data: $('#formVistoria').serialize(),
                    success: function(data) {
                        window.location.href = 'agenda-view.php';
                        //alert(data);
                 }, 
                 error:function(){
                    alert("Erro na Inclusão");
                  } 
            });
        });
       
       // função de delete do agendamento no modal
     
      $('#deleteButton').on('click', function(){
         
         var eventID = $('#eventID').val();

         $.ajax({
             url: 'actions.php',
             data: 'action=deleteAgendamento&id='+eventID,
             type: "POST",
             success: function() {
                $("#calendar").fullCalendar('removeEvents',eventID);
                  $("#calendarModal").modal('hide');
                  preventDefault();
               },
               error:function(){
                alert("Erro na Exclusão");
            }
           });
       });
    
    });


</script>

<div class="col-sm-29 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<header>
	<div class="row">
		<div class="col-sm-6">
			<h2>Agenda</h2>
		</div>
		<div class="col-sm-6 text-right h2">
	    	<button type="button" data-toggle="modal" data-target="#createEventModal" class="btn btn-success">Novo Agendamento</button>
	    	<a class="btn btn-default" href="agenda-view.php"><i class="fa fa-refresh"></i> Atualizar</a>
	    </div>
	</div>
</header>

<hr>
<!-- add calander in this div -->
<div class="container" style="padding-top:30px">
<br>
  <div class="row">
    <div style="width: 80%" id="calendar"></div>
 </div>
</div>

<div id="createEventModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"  align="center">Nova Vistoria</h4>

      </div>
      <div class="modal-body">
        <form id="formVistoria" name="formVistoria">
            <input type="hidden" name="action" value="add">
            <div class="control-group">
                <label class="control-label" for="inputPatient">Vistoriador</label>
                <div class="field desc">
                    <div class="form-group">
                      <select required="required" id="id_vistoriador" name="id_vistoriador" class="form-control">
                      <option value="">Selecione</option>                    
                        <?php foreach($vistoriador->selectVistoriadorAll() as $key => $value): ?>                     
                      <option value="<?php echo $value->id?>"><?php echo $value->nome ?></option>
                    <?php endforeach; ?>      
                    </select>
                    </div>
                </div>
            </div>
             <div class="control-group">
                <label class="control-label" for="inputPatient">Imovel</label>
                <div class="field desc">
                    <div class="form-group">
                      <select class="form-control" id="id_imovel" name="id_imovel" required="required">
                        <option value="1">Imovel 1</option>
                        <option value="2">Imovel 2</option>
                        <option value="3">Imovel 3</option>
                      </select>
                    </div>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputPatient">Tipo Vistoria</label>
                <div class="field desc">
                    <div class="form-group">
                      <select required="required" id="id_tipovistoria" name="id_tipovistoria" class="form-control">
                      <option value="">Selecione</option>   
                        <?php foreach($tipovistoria->viewtipovistoriaAll() as $key => $value): ?>                     
                          <option value="<?php echo $value->id?>"><?php echo $value->tipovistoria ?></option>
                        <?php endforeach; ?>      
                    </select>
                    </div>
                </div>
            </div>
             <div class="control-group">
                <label class="control-label" for="inputPatient">Solicitante</label>
                <div class="field desc">
                    <div class="form-group">
                      <input class="form-control" id="solicitante" name="solicitante" type="text" readonly="readonly" value="<?php echo $_SESSION['nome']; ?>">
                       <input class="form-control" id="id_solicitante" name="id_solicitante" type="hidden" readonly="readonly" value="<?php echo $_SESSION['id']; ?>">
                    </div>
                </div>
            </div>
            <div class="row">
            <div class="col-sm-4">
                    <div class="form-group">
                        <label for="idtitulo">Data</label>
                        <input name="data" type="text" class="form-control" data-provide="datepicker" id="data" placeholder="Data do Cadastro" value="<?=date('d/m/Y')?>">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="horaInicio">Hr.Inicio</label>
                        <input name="hora_inicio" type="time" class="form-control" id="horaInicio" placeholder="Inicio" value="00:00">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="horaFim">Hr.Fim</label>
                        <input name="hora_fim" type="time" class="form-control" id="horaFim" placeholder="Final" value="00:00">
                    </div>
                </div>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
        <button type="submit" class="btn btn-primary" id="novaVistoria">Cadastrar</button>
    </div>
    </div>
  </div>
</div>


<div id="calendarModal" class="modal fade">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title" align="center">Detalhes do Agendamento</h4>
        </div>
        <div class="modal-body">
                <div class="control-group">
                    <label class="control-label" for="inputPatient">Vistoriador</label>
                    <div class="field desc">
                        <div class="form-group">
                          <input readonly="readonly" type="text" name="" id="viewVistoriador" class="form-control">
                        </div>
                    </div>
                </div>
                 <div class="control-group">
                    <label class="control-label" for="inputPatient">Imovel</label>
                    <div class="field desc">
                        <div class="form-group">
                         <input readonly="readonly" type="text" name="" id="viewImovel" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputPatient">Tipo Vistoria</label>
                    <div class="field desc">
                        <div class="form-group">
                         <input readonly="readonly" type="text" name="" id="viewTipoVistoria" class="form-control">
                        </div>
                    </div>
                </div>
                 <div class="control-group">
                    <label class="control-label" for="inputPatient">Solicitante</label>
                    <div class="field desc">
                        <div class="form-group">
                            <input readonly="readonly" type="text" name="" id="viewSolicitante" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="col-sm-4">
                        <div class="form-group">
                            <label for="idtitulo">Data</label>
                            <input name="data" type="text" class="form-control" data-provide="datepicker" id="viewData" placeholder="Data do Cadastro" >
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="horaInicio">Hr.Inicio</label>
                           <input readonly="readonly" type="text" name="" id="viewHrInicio" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="horaFim">Hr.Fim</label>
                            <input readonly="readonly" type="text" name="" id="viewHrFim" class="form-control">
                        </div>
                    </div>
                </div>
            </form>
          </div>
        <input type="hidden" id="eventID"/>
        <div class="modal-footer">
            <button type="button" class="btn btn-warning pull-left" id="updateButton">Editar</button>
            <button type="button" class="btn btn-danger" id="deleteButton">Deletar</button>
            <button class="btn pull-left" data-dismiss="modal" aria-hidden="true">Cancelar</button>
        </div>
    </div>
</div>
</div>

  </body>
</html>
</div>