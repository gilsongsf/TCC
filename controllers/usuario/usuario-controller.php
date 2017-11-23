<?php
	require_once("../../config.php");
	require_once("../../models/usuario/usuario.php");


		class usuarioController extends usuario{

			public function addusuario($nome,$email,$senha,$perfil){
				$verificacao = new usuarioController();
				$result = $verificacao->verificaUsuario($email);
				if($result != 1){
					$usuario = new usuario();
					$usuario->setNome($nome);
					$usuario->setEmail($email);
					$usuario->setSenha($senha);
					$usuario->setPerfil($perfil);

					if($usuario->insert()){
						header('Location:'.VIEWS.'usuario/usuario-view.php?id=1');
					}					
				}
				else{
					header('Location:'.VIEWS.'usuario/usuario-view.php?id=2');
				}				
			}

			public function verificaUsuario($email){
				$usuario = new usuario();
				$result = $usuario->selectEmailAll();
				if(in_array($email, $result)){
					return true;
				}
				else
				{
					return false;
				}
			}

			public function editusuario($id,$nome,$email,$perfil){
				$usuario = new usuario();
				$usuario->setNome($nome);
				$usuario->setEmail($email);
				$usuario->setPerfil($perfil);

				if($usuario->update($id)){
					header('Location:'.VIEWS.'usuario/usuario-view.php');
				}
			}

			public function deleteusuario($id){
				$usuario = new usuario();
				if($usuario->delete($id)){
					header('Location:'.VIEWS.'usuario/usuario-view.php');
				}
			}

			public function viewUsuarioAll(){
				$usuario = new usuario();
				$value = 'nome';
				return $usuario->selectAllOrderBy($value);
			}

			public function selectVistoriadorAll(){
				$usuario = new usuario();
				return $usuario->selectVistoriadores();
			}

		}
		
		if(isset($_POST['editid'])){
			$usuario = new usuarioController();
			$usuario->editusuario($_POST['editid'],$_POST['editnome'],$_POST['editemail'],$_POST['editperfil']);
		}

		if(isset($_POST['nome'])){
			$usuario = new usuarioController();
			$usuario->addusuario($_POST['nome'],$_POST['email'],md5($_POST['senha']),$_POST['perfil']);
		}

		if(isset($_POST['deleteid'])){
			$usuario = new usuarioController();
			$usuario->deleteusuario($_POST['deleteid']);
		}

	
?>