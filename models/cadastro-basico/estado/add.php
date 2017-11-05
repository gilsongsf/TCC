<?php
	require_once("../../../config.php");
	require_once("../../../classes/class-estado.php");
			
		
			$estado = new Estado();

			$addestado  = $_POST['estado'];

			$estado->setestado($addestado);

			# Insert
			if($estado->insert()){
				header('Location: estado.php');
			}

	
?>