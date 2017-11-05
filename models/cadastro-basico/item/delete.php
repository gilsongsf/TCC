<?php
	require_once("../../../config.php");
	require_once("../../../classes/class-cor.php");
			
		
			$cor = new Cor();

			$id  = $_POST['id'];

			$id = (int)$_GET['id'];

			if($cor->delete($id)){
				header('Location: cor.php');
			}

	
?>