<?php

define('__AMBIENTE__', dirname(dirname(__FILE__))); 
require_once(__AMBIENTE__.'/../Crud.php'); 

class Ambiente extends Crud{
	
	protected $table = 'ambiente';
	private $ambiente;

	public function setAmbiente($ambiente){
		$this->ambiente = $ambiente;
	}

	public function getAmbiente(){
		return $this->ambiente;
	}

	public function insert(){

		$sql  = "INSERT INTO $this->table (ambiente) VALUES (:ambiente)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':ambiente', $this->ambiente);
		return $stmt->execute(); 

	}

	public function update($id){

		$sql  = "UPDATE $this->table SET ambiente = :ambiente WHERE id = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':ambiente', $this->ambiente);
		$stmt->bindParam(':id', $id);
		return $stmt->execute();

	}

}