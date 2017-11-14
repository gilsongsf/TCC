<?php

require_once 'Crud.php';

class Perfil extends Crud{
	
	protected $table = 'perfil';
	private $perfil;
	private $permissoes;

	public function setPerfil($perfil,$permissoes){
		$this->perfil = $perfil;
		$this->permissoes = $permissoes;
	}

	public function getPerfil(){
		return $this->perfil;
	}

	public function insert(){

		$sql  = "INSERT INTO $this->table (perfil,permissoes) VALUES (:perfil,:permissoes)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':perfil', $this->perfil);
		$stmt->bindParam(':permissoes', $this->permissoes);
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

	public function selectPermissoes(){
		$sql  = "SELECT permissoes FROM $this->table WHERE perfil = 'administrador'";
		$stmt = DB::prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	} 

}
