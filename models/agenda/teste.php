<?php
	require_once('../../config.php');
?>

<link href='<?php echo BASEURL; ?>/views/js/fullcalendar-3.7.0/fullcalendar.min.css' rel='stylesheet' />
<link href='<?php echo BASEURL; ?>/views/js/fullcalendar-3.7.0/fullcalendar.print.min.css' rel='stylesheet' media='print' />
<script src='<?php echo BASEURL; ?>/views/js/fullcalendar-3.7.0/lib/moment.min.js'></script>
<script src='<?php echo BASEURL; ?>/views/js/fullcalendar-3.7.0/lib/jquery.min.js'></script>
<script src='<?php echo BASEURL; ?>/views/js/fullcalendar-3.7.0/fullcalendar.min.js'></script>
<script src='<?php echo BASEURL; ?>/views/js/calendario.js'></script>
<style>

	body {
		margin: 40px 10px;
		padding: 0;
		font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
		font-size: 14px;
	}

	#calendar {
		max-width: 900px;
		margin: 0 auto;
	}

</style>

	<div id='calendar'></div>
