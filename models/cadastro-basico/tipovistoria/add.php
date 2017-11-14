<?php
	require_once("../../../config.php");
	require_once("../../../classes/class-tipovistoria.php");
			
		
			$tipovistoria = new tipoVistoria();

			$addTipovistoria  = $_POST['tipovistoria'];

			$tipovistoria->setTipovistoria($addTipovistoria);

			# Insert
			if($tipovistoria->insert()){
				header('Location: tipovistoria.php');
			}

	
?>