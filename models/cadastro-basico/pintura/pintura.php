<?php

define('__ROOT__', dirname(dirname(__FILE__))); 
require_once(__ROOT__.'/../Crud.php'); 

class Pintura extends Crud{
	
	protected $table = 'pintura';
	private $pintura;

	public function setpintura($pintura){
		$this->pintura = $pintura;
	}

	public function getpintura(){
		return $this->pintura;
	}

	public function insert(){

		$sql  = "INSERT INTO $this->table (pintura) VALUES (:pintura)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':pintura', $this->pintura);
		return $stmt->execute(); 

	}

	public function update($id){

		$sql  = "UPDATE $this->table SET pintura = :pintura WHERE id = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':pintura', $this->pintura);
		$stmt->bindParam(':id', $id);
		return $stmt->execute();

	}

}