<?php
	require_once("../../../config.php");
	require_once("../../../classes/class-ambientes.php");
			
		
			$ambiente = new ambientes();

			$addambiente  = $_POST['ambiente'];

			$ambiente->setAmbiente($addambiente);

			# Insert
			if($ambiente->insert()){
				header('Location: ambiente.php');
			}

	
?>