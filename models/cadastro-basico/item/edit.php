<?php
	require_once("../../../config.php");
	require_once("../../../classes/class-item.php");
			
		
			$item = new Item();

			$id = $_POST['id'];
			$editItem  = $_POST['descricao'];

			$item->setItem($editItem);

			if($item->update($id)){
				header('Location: item.php');
			}

?>