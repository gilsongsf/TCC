<?php

require_once 'Crud.php';

class Material extends Crud{
	
	protected $table = 'material';
	private $material;

	public function setmaterial($material){
		$this->material = $material;
	}

	public function getmaterial(){
		return $this->material;
	}

	public function insert(){

		$sql  = "INSERT INTO $this->table (material) VALUES (:material)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':material', $this->material);
		return $stmt->execute(); 

	}

	public function update($id){

		$sql  = "UPDATE $this->table SET material = :material WHERE id = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':material', $this->material);
		$stmt->bindParam(':id', $id);
		return $stmt->execute();

	}

	public function selectAllOrderBy(){
		$sql  = "SELECT * FROM $this->table ORDER BY material" ;
		$stmt = DB::prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}

}