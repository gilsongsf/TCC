<?php
	require_once("../../config.php");
	require_once("../../classes/class-usuario.php");
			
		
			$usuario = new usuario();

			$id = $_POST['id'];
			$nome = $_POST['editnome'];
			$email = $_POST['editemail'];
			$perfil = $_POST['editperfil'];

			$usuario->setNome($nome);
			$usuario->setEmail($email);
			$usuario->setPerfil($perfil);


			if($usuario->update($id)){
				header('Location: usuario.php');
			}

?>