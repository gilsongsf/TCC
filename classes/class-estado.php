<?php

require_once 'Crud.php';

class Estado extends Crud{
	
	protected $table = 'estado';
	private $estado;

	public function setestado($estado){
		$this->estado = $estado;
	}

	public function getestado(){
		return $this->estado;
	}

	public function insert(){

		$sql  = "INSERT INTO $this->table (estado) VALUES (:estado)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':estado', $this->estado);
		return $stmt->execute(); 

	}

	public function update($id){

		$sql  = "UPDATE $this->table SET estado = :estado WHERE id = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':estado', $this->estado);
		$stmt->bindParam(':id', $id);
		return $stmt->execute();

	}

	public function selectAllOrderBy(){
		$sql  = "SELECT * FROM $this->table ORDER BY estado" ;
		$stmt = DB::prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}

}