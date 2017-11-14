<?php
	require_once("../../../config.php");
	require_once("../../../classes/class-tipovistoria.php");
			
		
			$tipovistoria = new tipoVistoria();

			$id  = $_POST['id'];

			$id = (int)$_GET['id'];

			if($tipovistoria->delete($id)){
				header('Location: tipovistoria.php');
			}

	
?>