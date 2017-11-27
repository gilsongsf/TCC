<?php

define('__inquilino__', dirname(dirname(__FILE__))); 
require_once(__inquilino__.'/Crud.php'); 

class inquilino extends Crud{
	
	protected $table = 'inquilino';
	private $nome, $email, $telefone, $cpfcnpj;

	public function setinquilino($nome,$email,$telefone,$cpfcnpj){
		$this->nome = $nome;
		$this->email = $email;
		$this->telefone = $telefone;
		$this->cpfcnpj = $cpfcnpj;
	}

	public function getinquilino(){
		return $this->nome;
	}

	public function insert(){

		$sql  = "INSERT INTO $this->table (nome, email, telefone, cpfcnpj) VALUES (:nome,:email,:telefone,:cpfcnpj)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':email', $this->email);
		$stmt->bindParam(':telefone', $this->telefone);
		$stmt->bindParam(':cpfcnpj', $this->cpfcnpj);
		return $stmt->execute(); 

	}

	public function update($id){

		$sql  = "UPDATE $this->table SET nome = :nome , email = :email , telefone = :telefone , cpfcnpj = :cpfcnpj WHERE id = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':email', $this->email);
		$stmt->bindParam(':telefone', $this->telefone);
		$stmt->bindParam(':cpfcnpj', $this->cpfcnpj);
		$stmt->bindParam(':id', $id);
		return $stmt->execute();
	}

	public function selectinquilino($id_inquilino){
		$sql = "SELECT * FROM inquilino WHERE id = '$id_inquilino'";
		$stmt = DB::prepare($sql);
		$stmt->execute();
		return $stmt->fetch(PDO::FETCH_ASSOC);

	}
	
}