<?php

define('__IMOVEL__', dirname(dirname(__FILE__))); 
require_once(__IMOVEL__.'/Crud.php'); 

class Imovel extends Crud{
	
	protected $table = 'imovel';
	private $endereco, $numero, $complemento, $bairro, $cidade, $uf, $cep, $tipoimovel, $id_locador, $id_inquilino;

	public function setImovel($endereco,$numero,$complemento,$bairro,$cidade,$uf,$tipoimovel,$cep,$id_locador,$id_inquilino){
		$this->endereco = $endereco;
		$this->numero = $numero;
		$this->complemento = $complemento;
		$this->bairro = $bairro;
		$this->cidade = $cidade;
		$this->uf = $uf;
		$this->tipoimovel = $tipoimovel;
		$this->cep = $cep;
		$this->id_locador = $id_locador;
		$this->id_inquilino = $id_inquilino;		
	}

	public function getImovel(){
		return $this->endereco;
	}

	public function insert(){

		$sql  = "INSERT INTO $this->table (endereco, numero, complemento, bairro, cidade, uf, cep, tipoimovel, id_locador, id_inquilino) VALUES (:endereco, :numero, :complemento, :bairro, :cidade, :uf, :cep, :tipoimovel, :id_locador, :id_inquilino)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':endereco', $this->endereco);
		$stmt->bindParam(':numero', $this->numero);
		$stmt->bindParam(':complemento', $this->complemento);
		$stmt->bindParam(':bairro', $this->bairro);
		$stmt->bindParam(':cidade', $this->cidade);
		$stmt->bindParam(':uf', $this->uf);
		$stmt->bindParam(':cep', $this->cep);
		$stmt->bindParam(':tipoimovel', $this->tipoimovel);
		$stmt->bindParam(':id_locador', $this->id_locador);
		$stmt->bindParam(':id_inquilino', $this->id_inquilino);
		return $stmt->execute(); 

	}

	public function update($id){

		$sql  = "UPDATE $this->table SET endereco = :endereco , numero = :numero , complemento = :complemento , bairro = :bairro , cidade = :cidade , uf = :uf , cep = :cep , tipoimovel = :tipoimovel , id_locador = :id_locador , id_inquilino = :id_inquilino WHERE id = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':endereco', $this->endereco);
		$stmt->bindParam(':numero', $this->numero);
		$stmt->bindParam(':complemento', $this->complemento);
		$stmt->bindParam(':bairro', $this->bairro);
		$stmt->bindParam(':cidade', $this->cidade);
		$stmt->bindParam(':uf', $this->uf);
		$stmt->bindParam(':cep', $this->cep);
		$stmt->bindParam(':tipoimovel', $this->tipoimovel);
		$stmt->bindParam(':id_locador', $this->id_locador);
		$stmt->bindParam(':id_inquilino', $this->id_inquilino);
		$stmt->bindParam(':id', $id);
		return $stmt->execute();
	}

	public function selectUFAll($value){
		$sql  = "SELECT * FROM UF ORDER BY ($value)" ;
		$stmt = DB::prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}

	public function selectLocadorImovel($id){
		$sql = "SELECT locador.`id`, locador.`nome` from locador inner join imovel on imovel.`id_locador` = locador.`id` where imovel.`id` = ($id) order by locador.`nome`";
		$stmt = DB::prepare($sql);
		$stmt->execute();
		return $stmt->fetch(PDO::FETCH_ASSOC);

	}

	public function selectInquilinoImovel($id){
		$sql = "SELECT inquilino.`id`, inquilino.`nome` from inquilino inner join imovel on imovel.`id_inquilino` = inquilino.`id` where imovel.`id` = ($id) order by inquilino.`nome`";
		$stmt = DB::prepare($sql);
		$stmt->execute();
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}
}