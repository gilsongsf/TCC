<?php
	require_once("../../../config.php");
	require_once("../../../classes/class-estado.php");
			
		
			$estado = new estado();

			$id  = $_POST['id'];

			$id = (int)$_GET['id'];

			if($estado->delete($id)){
				header('Location: estado.php');
			}

	
?>