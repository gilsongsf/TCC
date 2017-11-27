<?php
	require_once("../config.php");
	require_once("../models/usuario/usuario.php");

	class login extends usuario{

		public function realizalogin(){
		$sql = "SELECT * FROM $this->table WHERE email = :email AND senha = :senha";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':email', $this->email);
		$stmt->bindParam(':senha', $this->senha);
		$stmt->execute();
		return $stmt->fetch(PDO::FETCH_ASSOC);

  	}

	}