<?php
	require_once("../../../config.php");
	require_once("../../../classes/class-pintura.php");
			
		
			$pintura = new Pintura();

			$addPintura  = $_POST['pintura'];

			$pintura->setPintura($addPintura);

			# Insert
			if($pintura->insert()){
				header('Location: pintura.php');
			}

	
?>