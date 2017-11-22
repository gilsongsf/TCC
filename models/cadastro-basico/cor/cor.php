<?php

define('__ROOT__', dirname(dirname(__FILE__))); 
require_once(__ROOT__.'/../Crud.php'); 

class Cor extends Crud{
	
	protected $table = 'cor';
	private $cor;

	public function setCor($cor){
		$this->cor = $cor;
	}

	public function getCor(){
		return $this->cor;
	}

	public function insert(){

		$sql  = "INSERT INTO $this->table (cor) VALUES (:cor)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':cor', $this->cor);
		return $stmt->execute(); 

	}

	public function update($id){

		$sql  = "UPDATE $this->table SET cor = :cor WHERE id = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':cor', $this->cor);
		$stmt->bindParam(':id', $id);
		return $stmt->execute();

	}

}