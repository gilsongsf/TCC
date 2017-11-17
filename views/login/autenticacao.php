<?php
	require_once("../../config.php");
	require_once("../../classes/class-usuario.php");
			
		
			$email = $_POST['email'];
			$senha = md5($_POST['senha']);

			$usuario = new Usuario();
			$usuario->setEmail($email);
			$usuario->setSenha($senha);

			if($usuario->login()){
				header('location: ../../models/agenda/agenda.php');
			}
			else
			{
				header('location: login.php');
			}

?>