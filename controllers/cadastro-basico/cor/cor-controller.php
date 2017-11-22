<?php
	require_once("../../../config.php");
	require_once("../../../models/cadastro-basico/cor/cor.php");


		class CorController extends cor{

			public function addCor($descricao){
				$cor = new Cor();
				$cor->setCor($descricao);

				if($cor->insert()){
					header('Location:'.VIEWS.'cadastro-basico/cor/cor-view.php');
				}
			}

			public function editCor($id,$descricao){
				$cor = new Cor();
				$cor->setCor($descricao);

				if($cor->update($id)){
					header('Location:'.VIEWS.'cadastro-basico/cor/cor-view.php');
				}
			}

			public function deleteCor($id){
				$cor = new Cor();
				if($cor->delete($id)){
					header('Location:'.VIEWS.'cadastro-basico/cor/cor-view.php');
				}
			}

			public function viewCorAll(){
				$cor = new Cor();
				$value = 'cor';
				return $cor->selectAllOrderBy($value);
			}




		}
		
		if(isset($_POST['editid'])){
			$cor = new CorController();
			$cor->editCor($_POST['editid'],$_POST['descricao']);
		}

		if(isset($_POST['cor'])){
			$cor = new CorController();
			$cor->addCor($_POST['cor']);
		}

		if(isset($_POST['deleteid'])){
			$cor = new CorController();
			$cor->deleteCor($_POST['deleteid']);
		}

	
?>