<?php
	require_once("../../../config.php");
	require_once("../../../models/cadastro-basico/material/material.php");


		class materialController extends material{

			public function addmaterial($descricao){
				$material = new material();
				$material->setmaterial($descricao);

				if($material->insert()){
					header('Location:'.VIEWS.'cadastro-basico/material/material-view.php');
				}
			}

			public function editmaterial($id,$descricao){
				$material = new material();
				$material->setmaterial($descricao);

				if($material->update($id)){
					header('Location:'.VIEWS.'cadastro-basico/material/material-view.php');
				}
			}

			public function deletematerial($id){
				$material = new material();
				if($material->delete($id)){
					header('Location:'.VIEWS.'cadastro-basico/material/material-view.php');
				}
			}

			public function viewmaterialAll(){
				$material = new material();
				$value = 'material';
				return $material->selectAllOrderBy($value);
			}




		}
		
		if(isset($_POST['editid'])){
			$material = new materialController();
			$material->editmaterial($_POST['editid'],$_POST['descricao']);
		}

		if(isset($_POST['material'])){
			$material = new materialController();
			$material->addmaterial($_POST['material']);
		}

		if(isset($_POST['deleteid'])){
			$material = new materialController();
			$material->deletematerial($_POST['deleteid']);
		}

	
?>