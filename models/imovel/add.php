<?php
	require_once("../../config.php");
	require_once("../../classes/class-imovel.php");
			
		
			$imovel = new Imovel();

			$endereco = $_POST['endereco'];
			$numero = $_POST['numero'];
			$complemento = $_POST['complemento'];
			$bairro = $_POST['bairro'];
			$cidade = $_POST['cidade'];
			$uf = $_POST['uf'];
			$cep = $_POST['cep'];
			$tipoimovel = $_POST['tipoimovel'];

			$imovel->setImovel($endereco,$numero,$complemento,$bairro,$cidade,$uf,$cep,$tipoimovel);

			# Insert
			if($imovel->insert()){
				header('Location: imovel.php');
			}

	
?>