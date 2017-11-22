<?php
	require_once("../../../config.php");
	require_once("../../../models/cadastro-basico/pintura/pintura.php");


		class pinturaController extends pintura{

			public function addpintura($descricao){
				$pintura = new pintura();
				$pintura->setpintura($descricao);

				if($pintura->insert()){
					header('Location:'.VIEWS.'cadastro-basico/pintura/pintura-view.php');
				}
			}

			public function editpintura($id,$descricao){
				$pintura = new pintura();
				$pintura->setpintura($descricao);

				if($pintura->update($id)){
					header('Location:'.VIEWS.'cadastro-basico/pintura/pintura-view.php');
				}
			}

			public function deletepintura($id){
				$pintura = new pintura();
				if($pintura->delete($id)){
					header('Location:'.VIEWS.'cadastro-basico/pintura/pintura-view.php');
				}
			}

			public function viewpinturaAll(){
				$pintura = new pintura();
				$value = 'pintura';
				return $pintura->selectAllOrderBy($value);
			}




		}
		
		if(isset($_POST['editid'])){
			$pintura = new pinturaController();
			$pintura->editpintura($_POST['editid'],$_POST['descricao']);
		}

		if(isset($_POST['pintura'])){
			$pintura = new pinturaController();
			$pintura->addpintura($_POST['pintura']);
		}

		if(isset($_POST['deleteid'])){
			$pintura = new pinturaController();
			$pintura->deletepintura($_POST['deleteid']);
		}

	
?>