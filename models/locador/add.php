<?php
	require_once("../../config.php");
	require_once("../../classes/class-locador.php");
			
		
			$locador = new locador();

			$nome = $_POST['nome'];
			$email = $_POST['email'];
			$telefone = $_POST['telefone'];
			$cpfcnpj = $_POST['cpfcnpj'];

			$locador->setLocador($nome,$email,$telefone,$cpfcnpj);

			# Insert
			if($locador->insert()){
				header('Location: locador.php');
			}

	
?>