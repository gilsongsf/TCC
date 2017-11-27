<?php
	require_once("../../config.php");
	require_once("../../models/inquilino/inquilino.php");


		class inquilinoController extends inquilino{

			public function addinquilino($nome,$email,$telefone,$cpfcnpj){
				$inquilino = new inquilino();
				$inquilino->setinquilino($nome,$email,$telefone,$cpfcnpj);

				if($inquilino->insert()){
					header('Location:'.VIEWS.'inquilino/inquilino-view.php');
				}
			}

			public function editinquilino($id,$nome,$email,$telefone,$cpfcnpj){
				$inquilino = new inquilino();
				$inquilino->setinquilino($nome,$email,$telefone,$cpfcnpj);

				if($inquilino->update($id)){
					header('Location:'.VIEWS.'inquilino/inquilino-view.php');
				}
			}

			public function deleteinquilino($id){
				$inquilino = new inquilino();
				if($inquilino->delete($id)){
					header('Location:'.VIEWS.'inquilino/inquilino-view.php');
				}
			}

			public function viewinquilinoAll(){
				$inquilino = new inquilino();
				$value = 'nome';
				return $inquilino->selectAllOrderBy($value);
			}

			public function selectInquilno($id_inquilino){
				$inquilino = new inquilino();
				return $inquilino->selectinquilino($id_inquilino);
			}

		}
		
		if(!empty($_POST['editid'])){
			$inquilino = new inquilinoController();
			$inquilino->editinquilino($_POST['editid'],$_POST['editnome'],$_POST['editemail'],$_POST['edittelefone'],$_POST['editcpfcnpj']);
		}

		if(!empty($_POST['nome'])){
			$inquilino = new inquilinoController();
			$inquilino->addinquilino($_POST['nome'],$_POST['email'],($_POST['telefone']),$_POST['cpfcnpj']);
		}

		if(!empty($_POST['deleteid'])){
			$inquilino = new inquilinoController();
			$inquilino->deleteinquilino($_POST['deleteid']);
		}

	
?>