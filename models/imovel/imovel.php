<?php

define('__ROOT__', dirname(dirname(__FILE__))); 
require_once(__ROOT__.'/Crud.php'); 

class Imovel extends Crud{
	
	protected $table = 'imovel';
	private $endereco, $numero, $complemento, $bairro, $cidade, $uf, $cep, $tipoimovel, $id_locador;

	public function setImovel($endereco,$numero,$complemento,$bairro,$cidade,$uf,$tipoimovel,$cep,$id_locador){
		$this->endereco = $endereco;
		$this->numero = $numero;
		$this->complemento = $complemento;
		$this->bairro = $bairro;
		$this->cidade = $cidade;
		$this->uf = $uf;
		$this->tipoimovel = $tipoimovel;
		$this->cep = $cep;
		$this->id_locador = $id_locador;		
	}

	public function getImovel(){
		return $this->endereco;
	}

	public function insert(){

		$sql  = "INSERT INTO $this->table (endereco, numero, complemento, bairro, cidade, uf, cep, tipoimovel, id_locador) VALUES (:endereco, :numero, :complemento, :bairro, :cidade, :uf, :cep, :tipoimovel, :id_locador)";
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
}