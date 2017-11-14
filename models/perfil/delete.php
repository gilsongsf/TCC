<?php
	require_once("../../config.php");
	require_once("../../classes/class-perfil.php");
			
		
			$perfil = new perfil();

			$id  = $_POST['id'];

			$id = (int)$_GET['id'];

			if($perfil->delete($id)){
				header('Location: perfil.php');
			}

	
?>