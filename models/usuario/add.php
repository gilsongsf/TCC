<?php
	require_once("../../config.php");
	require_once("../../classes/class-usuario.php");
			
		
			$usuario = new Usuario();

			$nome = $_POST['nome'];
			$email = $_POST['email'];
			$senha = md5($_POST['senha']);
			$perfil = $_POST['perfil'];

			$usuario->setNome($nome);
			$usuario->setEmail($email);
			$usuario->setPerfil($perfil);
			$usuario->setSenha($senha);

			# Insert
			if($usuario->insert()){
				header('Location: usuario.php');
			}

	
?>