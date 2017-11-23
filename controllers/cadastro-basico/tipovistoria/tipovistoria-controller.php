<?php
	define('__TIPOVISTORIA__', dirname(dirname(__FILE__))); 
	require_once(__TIPOVISTORIA__.'/../../config.php'); 
	require_once(__TIPOVISTORIA__.'/../../models/cadastro-basico/tipovistoria/tipovistoria.php');


		class tipovistoriaController extends tipovistoria{

			public function addtipovistoria($descricao){
				$tipovistoria = new tipovistoria();
				$tipovistoria->settipovistoria($descricao);

				if($tipovistoria->insert()){
					header('Location:'.VIEWS.'cadastro-basico/tipovistoria/tipovistoria-view.php');
				}
			}

			public function edittipovistoria($id,$descricao){
				$tipovistoria = new tipovistoria();
				$tipovistoria->settipovistoria($descricao);

				if($tipovistoria->update($id)){
					header('Location:'.VIEWS.'cadastro-basico/tipovistoria/tipovistoria-view.php');
				}
			}

			public function deletetipovistoria($id){
				$tipovistoria = new tipovistoria();
				if($tipovistoria->delete($id)){
					header('Location:'.VIEWS.'cadastro-basico/tipovistoria/tipovistoria-view.php');
				}
			}

			public function viewtipovistoriaAll(){
				$tipovistoria = new tipovistoria();
				$value = 'tipovistoria';
				return $tipovistoria->selectAllOrderBy($value);
			}




		}
		
		if(isset($_POST['editid'])){
			$tipovistoria = new tipovistoriaController();
			$tipovistoria->edittipovistoria($_POST['editid'],$_POST['descricao']);
		}

		if(isset($_POST['tipovistoria'])){
			$tipovistoria = new tipovistoriaController();
			$tipovistoria->addtipovistoria($_POST['tipovistoria']);
		}

		if(isset($_POST['deleteid'])){
			$tipovistoria = new tipovistoriaController();
			$tipovistoria->deletetipovistoria($_POST['deleteid']);
		}

	
?>