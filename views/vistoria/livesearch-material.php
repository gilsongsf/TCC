<?php
	require_once('../../config.php');
	require_once('../../models/database.php');

		$search = $_GET['term'];

		$sql  = "SELECT * FROM material WHERE material LIKE '%$search%' "; 
		$stmt = DB::prepare($sql);
		$stmt->execute();
	
		while($row = $result = $stmt->fetch(PDO::FETCH_ASSOC)){
	     	$json[] = array(
	     		'value'=>$result['id'],
	     		'label'=>$result['material']);
	     	//$json[] = $result['nome'];
		}
		
		echo json_encode($json);
	
	
		