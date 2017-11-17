<?php
	require_once("../../config.php");
	require_once("../../classes/class-usuario.php");
			
		
			$usuario = new Usuario();

			$id = $_POST['id'];
			$nome = $_POST['editnome'];
			$email = $_POST['editemail'];
			$perfil = $_POST['editperfil'];

			$usuario->setUsuario($nome,$email,$perfil);

			if($usuario->update($id)){
				header('Location: usuario.php');
			}

?>