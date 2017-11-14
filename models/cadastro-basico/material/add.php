<?php
	require_once("../../../config.php");
	require_once("../../../classes/class-material.php");
			
		
			$material = new Material();

			$addMaterial  = $_POST['material'];

			$material->setMaterial($addMaterial);

			# Insert
			if($material->insert()){
				header('Location: material.php');
			}

	
?>