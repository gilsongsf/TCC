<?php
	require_once("../../config.php");
	require_once("../../classes/class-usuario.php");
			
		
			$usuario = new usuario();

			$id  = $_POST['id'];

			$id = (int)$_GET['id'];

			if($usuario->delete($id)){
				header('Location: usuario.php');
			}

	
?>