<?php

require_once('config.php');
require_once('classes/class-perfil.php');

$permissao = new perfil();

$perfil = 'administrador';

$teste = $permissao->selectPermissoes($perfil);

$teste = unserialize($teste);

var_dump($teste);

?>
