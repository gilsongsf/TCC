<?php

include("../../models/database.php");
include("../../config.php");

$post = $_POST['action'];

	if(strcmp($post,'selectAgendamento') == 0) {

         $sql  = "SELECT * FROM agenda where id = '".$_POST['eventid']."' ";
         $stmt = DB::prepare($sql);
         $stmt->execute();
         while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { 

          $dataReg = substr($row['data_inicio'],0,10);

          $output = array( 
	    	
	    	'id'              => $row['id'],
	        'id_vistoriador'  => $row['id_vistoriador'],
	        'id_imovel'       => $row['id_imovel'],
	        'id_tipovistoria' => $row['id_tipovistoria'],
	        'id_solicitante'  => $row['id_solicitante'],
	        'data'			  => $dataReg,
	        'data_inicio'     => substr($row['data_inicio'],11),
	        'data_fim'        => substr($row['data_fim'],11),

	    	);

   		}

   		echo json_encode($output);

    }


	if(strcmp($post,'add') == 0) {

		$var = $_POST['data'];
	    $date = str_replace('/', '-', $var);
	    $data = date('Y-m-d', strtotime($date));

		$id_vistoriador  = $_POST['id_vistoriador'];
		$id_imovel       = $_POST['id_imovel'];
		$id_tipovistoria = $_POST['id_tipovistoria'];
		$id_solicitante  = $_POST['id_solicitante'];
		$hora_inicio     = $data.' '.$_POST['hora_inicio'];
		$hora_fim        = $data.' '.$_POST['hora_fim'];
		$situacao        = 'fechada'; //$_POST['situacao'];

		$sql  = "INSERT INTO agenda (id_vistoriador, id_imovel, id_tipovistoria, id_solicitante,data_inicio,data_fim,situacao) VALUES ('$id_vistoriador','$id_imovel','$id_tipovistoria', '$id_solicitante', '$hora_inicio', '$hora_fim', '$situacao')";
		$stmt = DB::prepare($sql);
		$stmt->execute();

	}



	if(strcmp($post,'deleteAgendamento') == 0) {

		$id_agenda = $_POST['id'];
		$sql = "DELETE FROM agenda WHERE id = '$id_agenda'";
		$stmt = DB::prepare($sql);
		$stmt->execute();

	}










?>