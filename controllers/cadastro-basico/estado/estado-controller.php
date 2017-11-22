<?php
	require_once("../../../config.php");
	require_once("../../../models/cadastro-basico/estado/estado.php");


		class EstadoController extends estado{

			public function addEstado($descricao){
				$estado = new Estado();
				$estado->setEstado($descricao);

				if($estado->insert()){
					header('Location:'.VIEWS.'cadastro-basico/estado/estado-view.php');
				}
			}

			public function editEstado($id,$descricao){
				$estado = new Estado();
				$estado->setEstado($descricao);

				if($estado->update($id)){
					header('Location:'.VIEWS.'cadastro-basico/estado/estado-view.php');
				}
			}

			public function deleteEstado($id){
				$estado = new Estado();
				if($estado->delete($id)){
					header('Location:'.VIEWS.'cadastro-basico/estado/estado-view.php');
				}
			}

			public function viewEstadoAll(){
				$estado = new Estado();
				$value = 'estado';
				return $estado->selectAllOrderBy($value);
			}




		}
		
		if(isset($_POST['editid'])){
			$estado = new EstadoController();
			$estado->editEstado($_POST['editid'],$_POST['descricao']);
		}

		if(isset($_POST['estado'])){
			$estado = new EstadoController();
			$estado->addEstado($_POST['estado']);
		}

		if(isset($_POST['deleteid'])){
			$estado = new EstadoController();
			$estado->deleteEstado($_POST['deleteid']);
		}

	
?>