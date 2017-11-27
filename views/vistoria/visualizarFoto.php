<?php 
require_once('../../config.php');
require_once('../../models/database.php');

?>

<div class="modal-body">
<?php 

$sql  = "SELECT * FROM vistoria_ambiente_foto WHERE id = ".$_POST['idFoto']." AND id_vistoria = ".$_POST['idVistoria']." AND id_vistoria_ambiente = ".$_POST['idAmbiente']." ";
$stmt = DB::prepare($sql);
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { 
	echo "<img width='800px' height='600px' src='".FOTOS.$row['id_vistoria'].'/'.$row['foto']."' class='img-rounded' ";
}

 ?>
 </div>