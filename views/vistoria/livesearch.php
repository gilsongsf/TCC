<?php
	require_once('../../config.php');
	require_once('../../models/database.php');

		$search = $_GET['term'];

		$sql  = "SELECT * FROM imovel WHERE endereco LIKE '%$search%' "; 
		$stmt = DB::prepare($sql);
		$stmt->execute();
	
		while($row = $result = $stmt->fetch(PDO::FETCH_ASSOC)){
	     	$json[] = array(
	     		'value'=>$result['id'],
	     		'label'=>$result['endereco'].", ".$result['numero'].", ".$result['complemento']." - ".$result['bairro']." - ".$result['cidade']." - ".$result['uf'],
	     		'teste'=>$result['tipoimovel']);
	     	//$json[] = $result['nome'];
		}
		
		echo json_encode($json);
	
	
		