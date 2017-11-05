<?php
	require_once("../../../config.php");
	require_once("../../../classes/class-cor.php");
			
		
			$cor = new Cor();

			$addCor  = $_POST['cor'];

			$cor->setCor($addCor);

			# Insert
			if($cor->insert()){
				header('Location: cor.php');
			}

	
?>