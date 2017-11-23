<?php

define('__TVISTORIA__', dirname(dirname(__FILE__))); 
require_once(__TVISTORIA__.'/../Crud.php'); 

class tipoVistoria extends Crud{
	
	protected $table = 'tipoVistoria';
	private $tipoVistoria;

	public function settipoVistoria($tipoVistoria){
		$this->tipoVistoria = $tipoVistoria;
	}

	public function gettipoVistoria(){
		return $this->tipoVistoria;
	}

	public function insert(){

		$sql  = "INSERT INTO $this->table (tipoVistoria) VALUES (:tipoVistoria)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':tipoVistoria', $this->tipoVistoria);
		return $stmt->execute(); 

	}

	public function update($id){

		$sql  = "UPDATE $this->table SET tipoVistoria = :tipoVistoria WHERE id = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':tipoVistoria', $this->tipoVistoria);
		$stmt->bindParam(':id', $id);
		return $stmt->execute();

	}

}