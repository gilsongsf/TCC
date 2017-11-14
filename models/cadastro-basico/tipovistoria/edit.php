<?php
	require_once("../../../config.php");
	require_once("../../../classes/class-tipovistoria.php");
			
		
			$tipovistoria = new tipoVistoria();

			$id = $_POST['id'];
			$edittipoVistoria  = $_POST['descricao'];

			$tipovistoria->settipoVistoria($edittipoVistoria);

			if($tipovistoria->update($id)){
				header('Location: tipovistoria.php');
			}

?>