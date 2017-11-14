<?php
	require_once("../../../config.php");
	require_once("../../../classes/class-item.php");
			
		
			$item = new Item();

			$addItem  = $_POST['item'];

			$item->setItem($addItem);

			# Insert
			if($item->insert()){
				header('Location: item.php');
			}

	
?>