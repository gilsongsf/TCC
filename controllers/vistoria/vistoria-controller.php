<?php
	require_once("../../config.php");
	require_once("../../models/vistoria/vistoria.php");

	class vistoriaController extends vistoria{

		public function selectVistoria(){
			$vistoria = new vistoria();
			return $vistoria->selectVistoria();
		}

		public function selectAmbienteVistoria($id_vistoria){
			$vistoria = new vistoria();
			return $vistoria->selectAmbienteVistoria($id_vistoria);
		}

		public function selectAmbienteVistoriaItem($id_vistoria_ambiente){
			$vistoria = new vistoria();
			return $vistoria->selectAmbienteVistoriaItem($id_vistoria_ambiente);
		}

		public function addVistoria($id_imovel,$id_vistoriador,$id_tipovistoria,$data_vistoria){
			$vistoria = new vistoria();
			$vistoria->setVistoria($id_imovel,$id_vistoriador,$id_tipovistoria,date("Y-m-d", strtotime($data_vistoria)));
			if($vistoria->insert()){
						$id_vistoria = $vistoria->selectlastID();
						header('Location:'.VIEWS.'vistoria/inserir-ambiente.php?vistoria='.$id_vistoria);
					}
		}

		public function addAmbienteVistoria($id_vistoria,$id_ambiente){
			$vistoria = new vistoria();
			$vistoria->setIDVistoria($id_vistoria);
			$vistoria->setIDAmbiente($id_ambiente);
			if($vistoria->insertAmbienteVistoria()){
				header('Location:'.VIEWS.'vistoria/inserir-ambiente.php?vistoria='.$id_vistoria);
			}
		}

		public function editAmbienteVistoria($id_ambiente,$id_vistoria_ambiente,$id_vistoria){
			$vistoria = new vistoria();
			$vistoria->setIDAmbiente($id_ambiente);
			$vistoria->setIDVistoriaAmbiente($id_vistoria_ambiente);
			if($vistoria->updateAmbienteVistoria($id_vistoria_ambiente)){
					header('Location:'.VIEWS.'vistoria/inserir-ambiente.php?vistoria='.$id_vistoria);
				}
		}

		public function deleteVistoria($id){
			$vistoria = new vistoria();
			if($vistoria->delete($id)){
					header('Location:'.VIEWS.'vistoria/vistoria-view.php');
				}
		}

		public function delVistoriaAmbiente($id,$idvistoria){
			$vistoria = new vistoria();
			if($vistoria->deleteVistoriaAmbiente($id)){
				header('Location:'.VIEWS.'vistoria/inserir-ambiente.php?vistoria='.$idvistoria);
			}
		}

		public function delVistoriaAmbienteItem($id,$idvistoria,$idambiente){
			$vistoria = new vistoria();
			if($vistoria->deleteVistoriaAmbienteItem($id)){
				header('Location:'.VIEWS.'vistoria/vistoria_ambiente_item.php?ambiente='.$idambiente.'&vistoria='.$idvistoria);
			}
		}

		public function addAmbienteVistoriaItem($id_vistoria_ambiente,$id_item,$id_material,$id_pintura,$id_cor,$id_estado,$complemento,$id_vistoria){
			$vistoria = new vistoria();
			if(empty($id_material)){
				$id_material = NULL;
			}
			if(empty($id_pintura)){
				$id_pintura = NULL;
			}
			if(empty($id_cor)){
				$id_cor = NULL;
			}
			if(empty($id_estado)){
				$id_estado = NULL;
			}
			if(empty($complemento)){
				$complemento = NULL;
			}
			$vistoria->setVistoriaAmbienteItem($id_vistoria_ambiente,$id_item,$id_material,$id_pintura,$id_cor,$id_estado,$complemento);
			if($vistoria->insertAmbienteVistoriaItem()){
				header('Location:'.VIEWS.'vistoria/vistoria_ambiente_item.php?ambiente='.$id_vistoria_ambiente.'&vistoria='.$id_vistoria);
			}

		}

	}

	if(!empty($_POST['id_imovel'])){
			$vistoria = new vistoriaController();
			$vistoria->addVistoria($_POST['id_imovel'],$_POST['id_vistoriador'],$_POST['id_tipovistoria'],$_POST['data_vistoria']);
		}

	if(!empty($_POST['update_ambiente'])){
			$vistoria = new vistoriaController();
			$vistoria->editAmbienteVistoria($_POST['update_id_ambiente'],$_POST['update_id_vistoria_ambiente'],$_POST['id_vistoria']);
		}

	if(!empty($_POST['deleteid'])){
			$vistoria = new vistoriaController();
			$vistoria->deletevistoria($_POST['deleteid']);
		}

	if(!empty($_POST['deleteambiente'])){
			$vistoria = new vistoriaController();
			$vistoria->delVistoriaAmbiente($_POST['deleteambiente'],$_POST['idvistoria']);
		}

	if(!empty($_POST['deleteitem'])){
			$vistoria = new vistoriaController();
			$vistoria->delVistoriaAmbienteItem($_POST['deleteitem'],$_POST['idvistoria'],$_POST['idambiente']);
		}

	if(!empty($_POST['id_ambiente'])){
			$vistoria = new vistoriaController();
			$vistoria->addAmbienteVistoria($_POST['id_vistoria'],$_POST['id_ambiente']);
		}

	if(!empty($_POST['id_vistoria_ambiente'])){
		$vistoria = new vistoriaController();
		$vistoria->addAmbienteVistoriaItem($_POST['id_vistoria_ambiente'],$_POST['id_item'],$_POST['id_material'],$_POST['id_pintura'],$_POST['id_cor'],$_POST['id_estado'],$_POST['complemento'],$_POST['id_vistoria']);
	}