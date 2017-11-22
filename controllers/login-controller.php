<?php
	require_once("../config.php");
	require_once("../models/login.php");

		class loginController{

			public function logar(){
				if(isset($_POST['email'])){

					$login = new login();

					$login->setEmail($_POST['email']);
					$login->setSenha(md5($_POST['senha']));				

					if($login->realizalogin()){
						header('location: ../views/vistoria/vistoria-view.php');
					}
					else
					{
						header('location:'.VIEWS.'login.php?erro=1');
					}
				
				}
				else
				{
					header('location:'.VIEWS.'login.php');
				}
			}

		}

		$login = new loginController();
		$login->logar();
			
		
			

?>