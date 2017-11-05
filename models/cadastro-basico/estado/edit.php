<?php
	require_once("../../../config.php");
	require_once("../../../classes/class-estado.php");
			
		
			$estado = new estado();

			$id = $_POST['id'];
			$editestado  = $_POST['estado'];

			$estado->setestado($editestado);

			if($estado->update($id)){
				header('Location: estado.php');
			}

?>