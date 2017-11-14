<?php
	require_once("../../../config.php");
	require_once("../../../classes/class-pintura.php");
			
		
			$pintura = new Pintura();

			$id = $_POST['id'];
			$editPintura  = $_POST['descricao'];

			$pintura->setPintura($editPintura);

			if($pintura->update($id)){
				header('Location: pintura.php');
			}

?>