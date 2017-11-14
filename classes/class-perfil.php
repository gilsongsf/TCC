<?php

require_once 'Crud.php';

class Perfil extends Crud{
	
	protected $table = 'perfil';
	private $perfil;
	private $permissao;

	public function setPerfil($perfil){
		$this->perfil = $perfil;
	}

	public function getPerfil(){
		return $this->perfil;
	}

	public function setPermissao($permissao){
		$this->permissao = $permissao;
	}

	public function getPermissao(){
		return $this->permissao;
	}

	public function insert(){

		$sql  = "INSERT INTO $this->table (perfil,ambiente_visualizar,ambiente_inserir, ambiente_editar, ambiente_excluir, tipovistoria_visualizar, tipovistoria_inserir, tipovistoria_editar, tipovistoria_excluir, estado_visualizar, estado_inserir, estado_editar, estado_excluir, cor_visualizar, cor_inserir, cor_editar, cor_excluir, pintura_visualizar, pintura_inserir, pintura_editar, pintura_excluir, material_visualizar, material_inserir, material_editar, material_excluir, item_visualizar, item_inserir, item_editar, item_excluir, perfil_visualizar, perfil_inserir, perfil_editar, perfil_excluir, usuario_visualizar, usuario_inserir, usuario_editar, usuario_excluir, locador_visualizar, locador_inserir, locador_editar, locador_excluir, imovel_visualizar, imovel_inserir, imovel_editar, imovel_excluir, indisponibilidade_visualizar, indisponibilidade_inserir, indisponibilidade_editar, indisponibilidade_excluir, agenda_visualizar, agenda_inserir, agenda_editar, agenda_excluir, vistoria_visualizar, vistoria_inserir, vistoria_editar, vistoria_excluir) VALUES (:perfil,:permissao)";
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

	public function selectPermissao(){
		$sql  = "SELECT * FROM $this->table WHERE perfil = 'administrador'";
		$stmt = DB::prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	} 

}
