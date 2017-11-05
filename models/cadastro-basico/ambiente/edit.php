<?php
	require_once("../../../config.php");
	require_once("../../../classes/class-ambientes.php");
			
		
			$ambiente = new ambientes();

			$id = $_POST['id'];
			$editambiente  = $_POST['ambiente'];

			$ambiente->setAmbiente($editambiente);

			if($ambiente->update($id)){
				header('Location: ambiente.php');
			}

?>