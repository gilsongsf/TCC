<?php

define('__ROOT__', dirname(dirname(__FILE__))); 
require_once(__ROOT__.'/Crud.php'); 

class Usuario extends Crud{
	
	protected $table = 'usuario';
	public $nome, $email, $perfil, $senha;

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function setPerfil($perfil){
		$this->perfil = $perfil;
	}

	public function setSenha($senha){
		$this->senha = $senha;
	}

	public function getUsuario(){
		return $this->nome;
	}

	public function getEmail(){
		return $this->email;
	}

	public function getSenha(){
		return $this->senha;
	}

	public function insert(){

		$sql  = "INSERT INTO $this->table (nome, email, senha, perfil) VALUES (:nome,:email,:senha,:perfil)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':email', $this->email);
		$stmt->bindParam(':senha', $this->senha);
		$stmt->bindParam(':perfil', $this->perfil);
		return $stmt->execute(); 

	}

	public function update($id){

		$sql  = "UPDATE $this->table SET nome = :nome , email = :email , perfil = :perfil WHERE id = :id";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':email', $this->email);
		$stmt->bindParam(':perfil', $this->perfil);
		$stmt->bindParam(':id', $id);
		return $stmt->execute();

	}

  	public static function logout() {
		if(isset($_SESSION['logado'])):
			unset($_SESSION['logado']);
			session_destroy();
			header("Location:<?php echo BASEURL; ?>views/login/login.php");
		endif;
	}
}