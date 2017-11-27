<?php
	require_once("../../config.php");
	require_once("../../models/locador/locador.php");


		class locadorController extends locador{

			public function addlocador($nome,$email,$telefone,$cpfcnpj){
				$locador = new locador();
				$locador->setLocador($nome,$email,$telefone,$cpfcnpj);

				if($locador->insert()){
					header('Location:'.VIEWS.'locador/locador-view.php');
				}
			}

			public function editlocador($id,$nome,$email,$telefone,$cpfcnpj){
				$locador = new locador();
				$locador->setLocador($nome,$email,$telefone,$cpfcnpj);

				if($locador->update($id)){
					header('Location:'.VIEWS.'locador/locador-view.php');
				}
			}

			public function deletelocador($id){
				$locador = new locador();
				if($locador->delete($id)){
					header('Location:'.VIEWS.'locador/locador-view.php');
				}
			}

			public function viewlocadorAll(){
				$locador = new locador();
				$value = 'nome';
				return $locador->selectAllOrderBy($value);
			}

			public function selectLocador($id_locador){
				$locador = new locador();
				return $locador->selectLocador($id_locador);
			}

		}
		
		if(!empty($_POST['editid'])){
			$locador = new locadorController();
			$locador->editlocador($_POST['editid'],$_POST['editnome'],$_POST['editemail'],$_POST['edittelefone'],$_POST['editcpfcnpj']);
		}

		if(!empty($_POST['nome'])){
			$locador = new locadorController();
			$locador->addlocador($_POST['nome'],$_POST['email'],($_POST['telefone']),$_POST['cpfcnpj']);
		}

		if(!empty($_POST['deleteid'])){
			$locador = new locadorController();
			$locador->deletelocador($_POST['deleteid']);
		}

	
?>