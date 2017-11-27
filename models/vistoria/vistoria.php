<?php

define('__ROOT__', dirname(dirname(__FILE__))); 
require_once(__ROOT__.'/Crud.php');

class Vistoria extends Crud{

	protected $table = 'vistoria';
	protected $tblVistoriaAmbiente = 'vistoria_ambiente';
	protected $tblVistoriaAmbienteItem = 'vistoria_ambiente_item';
	protected $tblVistoriaAmbienteFoto = 'vistoria_ambiente_foto';
	public $id_imovel, $id_vistoriador, $id_tipovistoria, $data_vistoria, $id_ambiente, $id_vistoria, $foto;

	public function setVistoria($id_imovel,$id_vistoriador,$id_tipovistoria,$data_vistoria){
		$this->id_imovel = $id_imovel;
		$this->id_vistoriador = $id_vistoriador;
		$this->id_tipovistoria = $id_tipovistoria;
		$this->data_vistoria = $data_vistoria;
	}

	public function setIDVistoria($id_vistoria){
		$this->id_vistoria = $id_vistoria;
	}

	public function setIDAmbiente($id_ambiente){
		$this->id_ambiente = $id_ambiente;
	}

	public function setFoto($foto){
		$this->foto = $foto;
	}

	public function setIDVistoriaAmbiente($id_vistoria_ambiente){
		$this->id_vistoria_ambiente = $id_vistoria_ambiente;
	}

	public function setVistoriaAmbienteItem($id_vistoria_ambiente,$id_vistoria,$id_item,$id_material,$id_pintura,$id_cor,$id_estado,$complemento){
		$this->id_vistoria_ambiente = $id_vistoria_ambiente;
		$this->id_vistoria = $id_vistoria;
		$this->id_item = $id_item;
		$this->id_material = $id_material;
		$this->id_pintura = $id_pintura;
		$this->id_cor = $id_cor;
		$this->id_estado = $id_estado;
		$this->complemento = $complemento;
	}

	public function deleteVistoriaAmbiente($id){
		$sql  = "DELETE FROM $this->tblVistoriaAmbiente WHERE id = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
		return $stmt->execute(); 
	}

	public function deleteVistoriaAmbienteItem($id){
		$sql  = "DELETE FROM $this->tblVistoriaAmbienteItem WHERE id = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
		return $stmt->execute(); 
	}

	public function deleteVistoriaAmbienteFoto($id){
		$sql  = "DELETE FROM $this->tblVistoriaAmbienteFoto WHERE id = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
		return $stmt->execute(); 
	}

	

	public function insert(){

		$sql  = "INSERT INTO $this->table (id_imovel, id_vistoriador, id_tipovistoria, data_vistoria) VALUES (:id_imovel,:id_vistoriador,:id_tipovistoria,:data_vistoria)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':id_imovel', $this->id_imovel);
		$stmt->bindParam(':id_vistoriador', $this->id_vistoriador);
		$stmt->bindParam(':id_tipovistoria', $this->id_tipovistoria);
		$stmt->bindParam(':data_vistoria', $this->data_vistoria);		
		return $stmt->execute();


	}

	public function insertAmbienteVistoria(){
		$sql = "INSERT INTO $this->tblVistoriaAmbiente (id_ambiente,id_vistoria) VALUES (:id_ambiente,:id_vistoria)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':id_ambiente', $this->id_ambiente);
		$stmt->bindParam(':id_vistoria', $this->id_vistoria);		
		return $stmt->execute();
	}

	public function insertAmbienteVistoriaItem(){
		$sql = "INSERT INTO $this->tblVistoriaAmbienteItem (id_vistoria_ambiente,id_vistoria,id_item,id_material,id_pintura,id_cor,id_estado,complemento) VALUES (:id_vistoria_ambiente,:id_vistoria,:id_item,:id_material,:id_pintura,:id_cor,:id_estado,:complemento)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':id_vistoria_ambiente', $this->id_vistoria_ambiente);
		$stmt->bindParam(':id_item', $this->id_item);
		$stmt->bindParam(':id_material', $this->id_material);
		$stmt->bindParam(':id_pintura', $this->id_pintura);
		$stmt->bindParam(':id_cor', $this->id_cor);
		$stmt->bindParam(':id_estado', $this->id_estado);
		$stmt->bindParam(':complemento', $this->complemento);
		$stmt->bindParam(':id_vistoria', $this->id_vistoria);
		return $stmt->execute();
	}

	public function insertAmbienteVistoriaFoto(){
		$sql = "INSERT INTO $this->tblVistoriaAmbienteFoto (foto, id_vistoria, id_vistoria_ambiente) VALUES (:foto, :id_vistoria, :id_vistoria_ambiente)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':foto', $this->foto);
		$stmt->bindParam(':id_vistoria', $this->id_vistoria);
		$stmt->bindParam(':id_vistoria_ambiente', $this->id_vistoria_ambiente);
		return $stmt->execute();
	}

	public function updateAmbienteVistoria($id){
		$sql  = "UPDATE $this->tblVistoriaAmbiente SET id_ambiente = :id_ambiente WHERE id = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':id_ambiente', $this->id_ambiente);
		$stmt->bindParam(':id', $id);
		return $stmt->execute();
	}
	
	public function selectVistoria(){
		$sql = "SELECT vistoria.`id` as 'id_vistoria', imovel.*, tipovistoria.`tipovistoria`, usuario.`nome`, vistoria.`data_vistoria` FROM vistoria INNER JOIN imovel ON vistoria.`id_imovel` = imovel.`id` INNER JOIN tipovistoria ON vistoria.`id_tipovistoria` = tipovistoria.`id` INNER JOIN usuario ON vistoria.`id_vistoriador` = usuario.`id` WHERE perfil = 'vistoriador' ORDER BY vistoria.`data_vistoria` desc";
		$stmt = DB::prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}

	public function selectVistoriaPrint($id_vistoria){
		$sql = "SELECT vistoria.`id` as 'id_vistoria', imovel.*, tipovistoria.`tipovistoria`, usuario.`nome`, vistoria.`data_vistoria` FROM vistoria INNER JOIN imovel ON vistoria.`id_imovel` = imovel.`id` INNER JOIN tipovistoria ON vistoria.`id_tipovistoria` = tipovistoria.`id` INNER JOIN usuario ON vistoria.`id_vistoriador` = usuario.`id` WHERE vistoria.`id` = '$id_vistoria'";
		$stmt = DB::prepare($sql);
		$stmt->execute();
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}

	public function selectLastID(){
		$sql = "SELECT max(id) from vistoria";
		$stmt = DB::prepare($sql);
		$stmt->execute();
		return $stmt->fetchColumn();
	}

	public function selectAmbienteVistoria($id_vistoria){
		$sql = "SELECT ambiente.`ambiente`,ambiente.`id` as id_ambiente ,vistoria_ambiente.`id` as id_vistoria_ambiente FROM vistoria_ambiente INNER JOIN ambiente ON vistoria_ambiente.`id_ambiente` = ambiente.`id` WHERE vistoria_ambiente.`id_vistoria` = '$id_vistoria' ORDER BY ambiente.`ambiente` ";
		$stmt = DB::prepare($sql);
		$stmt->execute();
		$result = $stmt->fetchAll();
		//var_dump($result);
		return $result;
	}

	public function selectAmbienteVistoriaItem($id_vistoria_ambiente){
		$sql = "SELECT item.`item`, material.`material` ,pintura.`pintura` ,cor.`cor` ,estado.`estado`, vistoria_ambiente_item.`complemento`, vistoria_ambiente_item.`id` as id_vistoria_ambiente_item FROM vistoria_ambiente_item LEFT JOIN item ON vistoria_ambiente_item.`id_item` = item.`id` LEFT JOIN material ON vistoria_ambiente_item.`id_material` = material.`id` LEFT JOIN pintura ON vistoria_ambiente_item.`id_pintura` = pintura.`id` LEFT JOIN cor ON vistoria_ambiente_item.`id_cor` = cor.`id` LEFT JOIN estado ON vistoria_ambiente_item.`id_estado` = estado.`id` WHERE vistoria_ambiente_item.`id_vistoria_ambiente` = '$id_vistoria_ambiente' ORDER BY item.`item`";
		$stmt = DB::prepare($sql);
		$stmt->execute();
		$result = $stmt->fetchAll();
		return $result;
	}

	public function selectAmbienteVistoriaFoto($id_vistoria_ambiente){
		$sql = "SELECT * FROM vistoria_ambiente_foto WHERE id_vistoria_ambiente = '$id_vistoria_ambiente'";
		$stmt = DB::prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}

}