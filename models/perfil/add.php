<?php
	require_once("../../config.php");
	require_once("../../classes/class-perfil.php");
			
		
			$perfil = new perfil();
			$addperfil = $_POST['perfil'];
			$addpermissoes = $_POST['permissoes'];
			$addpermissoes = serialize($addpermissoes);
			
			$perfil->setPerfil($addperfil,$addpermissoes);
			# Insert
			if($perfil->insert()){
				header('Location: perfil.php');
			}
	
?>