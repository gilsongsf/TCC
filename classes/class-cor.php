<?php

require_once 'Crud.php';

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

	public function selectAllOrderBy(){
		$sql  = "SELECT * FROM $this->table ORDER BY cor" ;
		$stmt = DB::prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}

}