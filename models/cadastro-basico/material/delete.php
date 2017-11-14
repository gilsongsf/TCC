<?php
	require_once("../../../config.php");
	require_once("../../../classes/class-material.php");
			
		
			$material = new Material();

			$id  = $_POST['id'];

			$id = (int)$_GET['id'];

			if($material->delete($id)){
				header('Location: material.php');
			}

	
?>