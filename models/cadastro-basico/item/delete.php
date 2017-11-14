<?php
	require_once("../../../config.php");
	require_once("../../../classes/class-item.php");
			
		
			$item = new Item();

			$id  = $_POST['id'];

			$id = (int)$_GET['id'];

			if($item->delete($id)){
				header('Location: item.php');
			}

	
?>