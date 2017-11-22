<?php
	//require_once("../../config.php");
	//require_once("../../models/perfil/perfil.php");
	define('__PERFILCONTROLLER__', dirname(dirname(__FILE__))); 
	require_once(__PERFILCONTROLLER__.'../../models/perfil/perfil.php');
	require_once(__PERFILCONTROLLER__.'../../config.php');


		class perfilController extends perfil{

			public function viewPerfilAll(){
				$perfil = new perfil();
				$value = 'perfil';
				return $perfil->selectAllOrderBy($value);
			}

			public function addperfil($descricao,$permissoes){

				$perfil = new perfil();
				$permissoes = serialize($permissoes);
			
				$perfil->setPerfil($descricao,$permissoes);

				# Insert
				if($perfil->insert()){
					header('Location:'.VIEWS.'perfil/perfil-view.php');
				}		
		}
			public function editPerfil($id,$editperfil,$editpermissoes){
				$perfil = new perfil();

				$editpermissoes = serialize($editpermissoes);

				$perfil->setPerfil($editperfil,$editpermissoes);

				if($perfil->update($id)){
					header('Location:'.VIEWS.'perfil/perfil-view.php');
				}

			}

			public function deleteperfil($id){
				$perfil = new perfil();
				if($perfil->delete($id)){
					header('Location:'.VIEWS.'perfil/perfil-view.php');
				}
			}

			public function selectPerfil($id){
				$perfil = new perfil();
				return $perfil->select($id);
			}

		}


		if(!empty($_POST['permissoes'])){
			$perfil = new perfilController();
			$perfil->addperfil($_POST['perfil'],$_POST['permissoes']);
		}

		if(!empty($_POST['editpermissoesid'])){
			$perfil = new perfilController();
			$perfil->editperfil($_POST['editpermissoesid'],$_POST['editperfil'],$_POST['editpermissoes']);
		}

		if(!empty($_POST['deleteid'])){
			$perfil = new perfilController();
			$perfil->deleteperfil($_POST['deleteid']);
		}

	
?>