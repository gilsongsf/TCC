<?php
	require_once("../../config.php");
	require_once("../../classes/class-perfil.php");
			
		
			$perfil = new perfil();

			$addperfil = $_POST['perfil'];

			$permissoes = array(
				$_POST['ambiente_visualizar'],$_POST['ambiente_inserir'],$_POST['ambiente_editar'],$_POST['ambiente_excluir'],$_POST['tipovistoria_visualizar'],$_POST['tipovistoria_inserir'],$_POST['tipovistoria_editar'], $_POST['tipovistoria_excluir'], $_POST['estado_visualizar'], $_POST['estado_inserir'], $_POST['estado_editar'], $_POST['estado_excluir'], $_POST['cor_visualizar'], $_POST['cor_inserir'], $_POST['cor_editar'], $_POST['cor_excluir'], $_POST['pintura_visualizar'], $_POST['pintura_inserir'], $_POST['pintura_editar'], $_POST['pintura_excluir'], $_POST['material_visualizar'], $_POST['material_inserir'], $_POST['material_editar'], $_POST['material_excluir'], $_POST['item_visualizar'], $_POST['item_inserir'], $_POST['item_editar'], $_POST['item_excluir'], $_POST['perfil_visualizar'], $_POST['perfil_inserir'], $_POST['perfil_editar'], $_POST['perfil_excluir'], $_POST['usuario_visualizar'], $_POST['usuario_inserir'], $_POST['usuario_editar'], $_POST['usuario_excluir'], $_POST['locador_visualizar'], $_POST['locador_inserir'], $_POST['locador_editar'], $_POST['locador_excluir'], $_POST['imovel_visualizar'], $_POST['imovel_inserir'], $_POST['imovel_editar'], $_POST['imovel_excluir'], $_POST['indisponibilidade_visualizar'], $_POST['indisponibilidade_inserir'], $_POST['indisponibilidade_editar'], $_POST['indisponibilidade_excluir'], $_POST['agenda_visualizar'], $_POST['agenda_inserir'], $_POST['agenda_editar'], $_POST['agenda_excluir'], $_POST['vistoria_visualizar'], $_POST['vistoria_inserir'], $_POST['vistoria_editar'], $_POST['vistoria_excluir']);

				//$permissoes = array($_POST['vistoria_visualizar'], $_POST['vistoria_inserir'], $_POST['vistoria_editar'], $_POST['vistoria_excluir']);

			

			$permissoes = serialize($permissoes);

			var_dump(unserialize($permissoes));

			//$permissoes = unserialize($permissoes);

			/**if(in_array('vistoria_excluir', $permissoes))
			{
				echo "meu cu carai";
			}**/

			//$perfil->setPermissao($permissoes);
			//s$perfil->setPerfil($addperfil);

			# Insert
			//if($perfil->insert()){
			//	header('Location: perfil.php');
			//}

	
?>