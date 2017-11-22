<?php
	
	include_once ("../../classes/DB.php");

		$sql  = "SELECT id, nome FROM locador WHERE nome LIKE '%".$_GET['query']."%'"; 
		$stmt = DB::prepare($sql);
		$stmt->execute();

		$json = [];
	
		while($row = $result = $stmt->fetch(PDO::FETCH_ASSOC)){
	     	$json = array('nome'=>$result['nome'],'id_locador'=>$result['id']);
	     	//$json[] = $result['nome'];
		}
		/*$json[] = array(
				while($row = $result = $stmt->fetch(PDO::FETCH_ASSOC)){
					{'nome'=>$result['nome'],'id_locador'=>$result['id']},
				}
		 );
		while($row = $result = $stmt->fetch(PDO::FETCH_ASSOC)){
	     	//$json = array('nome'=>$result['nome'],'id_locador'=>$result['id']);
	     	//$json[] = $result['nome'];
		}*/
		echo json_encode($json);
	
	
		