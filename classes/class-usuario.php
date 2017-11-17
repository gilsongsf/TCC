<?php

require_once 'Crud.php';

class Usuario extends Crud{
	
	protected $table = 'usuario';
	private $nome, $senha, $email, $perfil;

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

	public function selectAllOrderBy(){
		$sql  = "SELECT * FROM $this->table ORDER BY nome" ;
		$stmt = DB::prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}

	public function login(){
		$sql = "SELECT nome, email, perfil FROM $this->table WHERE email = :email AND senha = :senha";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':email', $this->email);
		$stmt->bindParam(':senha', $this->senha);
		$stmt->execute();
		$result = $stmt->fetch(PDO::FETCH_ASSOC);

    	if ($result == NULL) {
    		return false;
   		}
   		else{
    		$_SESSION['logado'] = true;
    		$_SESSION['username'] = $result['nome'];
    		$_SESSION['useremail'] = $result['email'];
    		$_SESSION['userperfil'] = $result['perfil'];
    		return true;
   		}
  	}

  	public static function logout() {
		if(isset($_SESSION['logado'])):
			unset($_SESSION['logado']);
			session_destroy();
			header("Location:<?php echo BASEURL; ?>views/login/login.php");
		endif;
	}
}