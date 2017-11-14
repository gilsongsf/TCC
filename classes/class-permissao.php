<?php

require_once 'Crud.php';

class Permissao extends Crud{
	
	protected $table = 'perfil';
	private $perfil;

	public function setPerfil($perfil){
		$this->perfil = $perfil;
	}

	public function getPerfil(){
		return $this->perfil;
	}

	public function insert(){

		$sql  = "INSERT INTO $this->table (perfil) VALUES (:perfil)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':perfil', $this->perfil);
		return $stmt->execute(); 

	}

	public function update($id){

		$sql  = "UPDATE $this->table SET perfil = :perfil WHERE id = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':perfil', $this->perfil);
		$stmt->bindParam(':id', $id);
		return $stmt->execute();

	}

	public function selectAllOrderBy(){
		$sql  = "SELECT * FROM $this->table ORDER BY perfil" ;
		$stmt = DB::prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}

}