<?php
	require_once("../../../config.php");
	require_once("../../../classes/class-pintura.php");
			
		
			$pintura = new Pintura();

			$id  = $_POST['id'];

			$id = (int)$_GET['id'];

			if($pintura->delete($id)){
				header('Location: pintura.php');
			}

	
?>