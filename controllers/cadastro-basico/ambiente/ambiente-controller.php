<?php
	require_once("../../../config.php");
	require_once("../../../models/cadastro-basico/ambiente/ambiente.php");


		class ambienteController extends ambiente{

			public function addambiente($descricao){
				$ambiente = new ambiente();
				$ambiente->setambiente($descricao);

				if($ambiente->insert()){
					header('Location:'.VIEWS.'cadastro-basico/ambiente/ambiente-view.php');
				}
			}

			public function editambiente($id,$descricao){
				$ambiente = new ambiente();
				$ambiente->setambiente($descricao);

				if($ambiente->update($id)){
					header('Location:'.VIEWS.'cadastro-basico/ambiente/ambiente-view.php');
				}
			}

			public function deleteambiente($id){
				$ambiente = new ambiente();
				if($ambiente->delete($id)){
					header('Location:'.VIEWS.'cadastro-basico/ambiente/ambiente-view.php');
				}
			}

			public function viewambienteAll(){
				$ambiente = new ambiente();
				$value = 'ambiente';
				return $ambiente->selectAllOrderBy($value);
			}




		}
		
		if(isset($_POST['editid'])){
			$ambiente = new ambienteController();
			$ambiente->editambiente($_POST['editid'],$_POST['descricao']);
		}

		if(isset($_POST['ambiente'])){
			$ambiente = new ambienteController();
			$ambiente->addambiente($_POST['ambiente']);
		}

		if(isset($_POST['deleteid'])){
			$ambiente = new ambienteController();
			$ambiente->deleteambiente($_POST['deleteid']);
		}

	
?>