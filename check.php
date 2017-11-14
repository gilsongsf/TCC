<?php

require_once('config.php');
require_once('classes/class-perfil.php');

$permissoes = new perfil();

$teste = $permissoes->selectPermissoes();

var_dump($teste);

?>
