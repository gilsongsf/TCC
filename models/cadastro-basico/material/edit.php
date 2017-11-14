<?php
	require_once("../../../config.php");
	require_once("../../../classes/class-material.php");
			
		
			$material = new Material();

			$id = $_POST['id'];
			$editMaterial  = $_POST['descricao'];

			$material->setMaterial($editMaterial);

			if($material->update($id)){
				header('Location: material.php');
			}

?>