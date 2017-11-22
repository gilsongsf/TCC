<?php

define('__PERFIL__', dirname(dirname(__FILE__))); 
require_once(__PERFIL__.'/Crud.php'); 


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

		$sql  = "INSERT INTO $this->table (perfil,permissoes) VALUES (:perfil,'$this->permissoes')";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':perfil', $this->perfil);
		return $stmt->execute(); 

	}

	public function update($id){

		$sql  = "UPDATE $this->table SET perfil = :perfil , permissoes = :permissoes WHERE id = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':perfil', $this->perfil);
		$stmt->bindParam(':permissoes', $this->permissoes);
		$stmt->bindParam(':id', $id);
		return $stmt->execute();

	}

	public function selectPermissoes($perfil){
		$sql  = "SELECT permissoes FROM $this->table WHERE perfil = :perfil";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':perfil', $perfil);
		$stmt->execute();
		$result = $stmt->fetch(PDO::FETCH_ASSOC);
		return $result['permissoes'];
	}
}
