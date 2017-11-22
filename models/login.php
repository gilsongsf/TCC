<?php
	require_once("../config.php");
	require_once("../models/usuario/usuario.php");

	class login extends usuario{

		public function realizalogin(){
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

	}