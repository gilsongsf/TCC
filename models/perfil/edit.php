<?php
	require_once("../../config.php");
	require_once("../../classes/class-perfil.php");
			
		
			$perfil = new perfil();
			$id = $_POST['id'];
			$editperfil  = $_POST['perfil'];
			$perfil->setPerfil($editperfil);
			if($perfil->update($id)){
				header('Location: perfil.php');
			}
?>