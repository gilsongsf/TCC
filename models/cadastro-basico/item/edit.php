<?php
	require_once("../../../config.php");
	require_once("../../../classes/class-cor.php");
			
		
			$cor = new Cor();

			$id = $_POST['id'];
			$editCor  = $_POST['descricao'];

			$cor->setCor($editCor);

			if($cor->update($id)){
				header('Location: cor.php');
			}

?>