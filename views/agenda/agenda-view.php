<?php
	require_once('../../config.php');
	include(HEADER_TEMPLATE);
?>

<div class="col-sm-29 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<header>
	<div class="row">
		<div class="col-sm-6">
			<h2>Agenda</h2>
		</div>
		<div class="col-sm-6 text-right h2">
	    	<a class="btn btn-primary" data-toggle="modal" data-target="#modal-insert"><i class="fa fa-plus"></i> Novo</a>
	    	<a class="btn btn-default" href="agenda-view.php"><i class="fa fa-refresh"></i> Atualizar</a>
	    </div>
	</div>
</header>

<hr>

<thead>
	<div id='calendar'></div>
</thead>
<tbody> 

</tbody>
</table>
</div>

<?php include(FOOTER_TEMPLATE);?>