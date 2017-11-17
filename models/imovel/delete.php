<?php
	require_once("../../config.php");
	require_once("../../classes/class-locador.php");
			
		
			$locador = new locador();

			$id  = $_POST['id'];

			$id = (int)$_GET['id'];

			if($locador->delete($id)){
				header('Location: locador.php');
			}

	
?>