<?php
	require_once("../../config.php");
	require_once("../../classes/class-locador.php");
			
		
			$locador = new locador();

			$id = $_POST['id'];
			$nome = $_POST['locadornome'];
			$email = $_POST['locadoremail'];
			$telefone = $_POST['locadortelefone'];
			$cpfcnpj = $_POST['locadorcpfcnpj'];

			$locador->setLocador($nome,$email,$telefone,$cpfcnpj);

			if($locador->update($id)){
				header('Location: locador.php');
			}

?>