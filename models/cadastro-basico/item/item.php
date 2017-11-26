<?php

define('__ITEMCRUD__', dirname(dirname(__FILE__))); 
require_once(__ITEMCRUD__.'/../Crud.php'); 

class Item extends Crud{
	
	protected $table = 'item';
	private $item;

	public function setitem($item){
		$this->item = $item;
	}

	public function getitem(){
		return $this->item;
	}

	public function insert(){

		$sql  = "INSERT INTO $this->table (item) VALUES (:item)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':item', $this->item);
		return $stmt->execute(); 

	}

	public function update($id){

		$sql  = "UPDATE $this->table SET item = :item WHERE id = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':item', $this->item);
		$stmt->bindParam(':id', $id);
		return $stmt->execute();

	}

}