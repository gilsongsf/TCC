<?php
	require_once("../../../config.php");
	require_once("../../../classes/class-ambientes.php");
			
		
			$ambiente = new ambientes();

			$id  = $_POST['id'];

			$id = (int)$_GET['id'];

			if($ambiente->delete($id)){
				header('Location: ambiente.php');
			}

	
?>