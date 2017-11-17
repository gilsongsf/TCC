<?php

require_once 'Crud.php';

class Imovel extends Crud{
	
	protected $table = 'imovel';
	private $endereco, $numero, $complemento, $bairro, $cidade, $uf, $cep, $tipoimovel;

	public function setImovel($endereco,$numero,$complemento,$bairro,$cidade,$uf,$cep,$tipoimovel){
		$this->endereco = $endereco;
		$this->numero = $numero;
		$this->complemento = $complemento;
		$this->bairro = $bairro;
		$this->cidade = $cidade;
		$this->uf = $uf;
		$this->cep = $cep;
		$this->tipoimovel = $tipoimovel;
	}

	public function getImovel(){
		return $this->endereco;
	}

	public function insert(){

		$sql  = "INSERT INTO $this->table (endereco, numero, complemento, bairro, cidade, uf, cep, tipoimovel) VALUES (:endereco, :numero, :complemento, :bairro, :cidade, :uf, :cep, :tipoimovel)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':endereco', $this->endereco);
		$stmt->bindParam(':numero', $this->numero);
		$stmt->bindParam(':complemento', $this->complemento);
		$stmt->bindParam(':bairro', $this->bairro);
		$stmt->bindParam(':cidade', $this->cidade);
		$stmt->bindParam(':uf', $this->uf);
		$stmt->bindParam(':cep', $this->cep);
		$stmt->bindParam(':tipoimovel', $this->tipoimovel);
		return $stmt->execute(); 

	}

	public function update($id){

		$sql  = "UPDATE $this->table SET endereco = :endereco , numero = :numero , complemento = :complemento , bairro = :bairro , cidade = :cidade , uf = :uf , cep = :cep , tipoimovel = :tipoimovel WHERE id = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':endereco', $this->endereco);
		$stmt->bindParam(':numero', $this->numero);
		$stmt->bindParam(':complemento', $this->complemento);
		$stmt->bindParam(':bairro', $this->bairro);
		$stmt->bindParam(':cidade', $this->cidade);
		$stmt->bindParam(':uf', $this->uf);
		$stmt->bindParam(':cep', $this->cep);
		$stmt->bindParam(':tipoimovel', $this->tipoimovel);
		$stmt->bindParam(':id', $id);
		return $stmt->execute();
	}

	public function selectAllOrderBy(){
		$sql  = "SELECT * FROM $this->table ORDER BY endereco" ;
		$stmt = DB::prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}
}