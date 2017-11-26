<?php
	define('__ITEM__', dirname(dirname(__FILE__))); 
	require_once(__ITEM__.'/../../config.php'); 
	require_once(__ITEM__.'/../../models/cadastro-basico/item/item.php');


		class itemController extends item{

			public function additem($descricao){
				$item = new item();
				$item->setitem($descricao);

				if($item->insert()){
					header('Location:'.VIEWS.'cadastro-basico/item/item-view.php');
				}
			}

			public function edititem($id,$descricao){
				$item = new item();
				$item->setitem($descricao);

				if($item->update($id)){
					header('Location:'.VIEWS.'cadastro-basico/item/item-view.php');
				}
			}

			public function deleteitem($id){
				$item = new item();
				if($item->delete($id)){
					header('Location:'.VIEWS.'cadastro-basico/item/item-view.php');
				}
			}

			public function viewitemAll(){
				$item = new item();
				$value = 'item';
				return $item->selectAllOrderBy($value);
			}




		}
		
		if(isset($_POST['editid'])){
			$item = new itemController();
			$item->edititem($_POST['editid'],$_POST['descricao']);
		}

		if(isset($_POST['item'])){
			$item = new itemController();
			$item->additem($_POST['item']);
		}

		if(isset($_POST['deleteid'])){
			$item = new itemController();
			$item->deleteitem($_POST['deleteid']);
		}

	
?>