<?php 
require_once('../config.php');
require_once('database.php');

$sql = "SELECT locador.`id`, locador.`nome` from locador inner join imovel on imovel.`id_locador` = locador.`id` where imovel.`id` = '13' order by locador.`nome`";
$stmt = DB::prepare($sql);
$stmt->execute();
var_dump($stmt->fetch(PDO::FETCH_ASSOC));

?>