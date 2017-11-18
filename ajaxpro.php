<?php
	
	require_once 'classes/DB.php';
	
		$sql  = "SELECT nome FROM locador WHERE nome LIKE '%".$_GET['query']."%'"; 
		$stmt = DB::prepare($sql);
		$stmt->execute();

		$json = [];		
	
		while($row = $result = $stmt->fetch(PDO::FETCH_ASSOC)){
	     $json[] = $result['nome'];	
		}

		echo json_encode($json);