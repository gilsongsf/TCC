<?php 
ob_start();
session_start(); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="ISO-8859-1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Vistoria</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="<?php echo BASEURL; ?>css/sidebar.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>
    <script src="<?php echo BASEURL; ?>js/autocomplete.js"></script>
    <script type="text/javascript" src="<?php echo BASEURL; ?>js/jquery.mask.js"></script>
    <script src="<?php echo BASEURL;?>js/bootstrap.min.js"></script>

    <link href="<?php echo BASEURL; ?>css/bootstrap-datepicker.css" rel="stylesheet"/>
    <script src="<?php echo BASEURL; ?>js/bootstrap-datepicker.min.js"></script> 
    <script src="<?php echo BASEURL; ?>js/bootstrap-datepicker.pt-BR.min.js" charset="UTF-8"></script>
    <link href="<?php echo BASEURL; ?>css/fullcalendar.css" rel="stylesheet" />
    <link href="<?php echo BASEURL; ?>css/fullcalendar.print.css" rel="stylesheet" media="print" />
    <script src="<?php echo BASEURL; ?>js/moment.min.js"></script>
    <script src="<?php echo BASEURL; ?>js/fullcalendar.js"></script>
    <script src="<?php echo BASEURL; ?>js/pt-br.js" charset="utf-8"></script>

     <style type="text/css">
  
    .ui-autocomplete
    {
      z-index: 99999;
    }

    </style>
    
    <style>
        body {
            padding-top: 50px;
            padding-bottom: 20px;
        }
    </style>    
</head>
<body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="<?php echo BASEURL; ?>index.php" class="navbar-brand">Vistoria</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">          
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['nome'];?><span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo BASEURL; ?>">Alterar Senha</a></li>
                    <li><a href="<?php echo BASEURL; ?>views/logout.php">Logoff</a></li>
                </ul>
            </li>
          </ul>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="<?php echo BASEURL;?>views/vistoria/vistoria-view.php">Vistoria <span class="sr-only">(current)</span></a></li>
            <li><a href="<?php echo BASEURL;?>views/agenda/agenda-view.php">Agenda</a></li>
            <li><a href="<?php echo BASEURL;?>views/imovel/imovel-view.php">Imovel</a></li>
             <li><a href="<?php echo BASEURL;?>views/inquilino/inquilino-view.php">Inquilino</a></li>
            <li><a href="<?php echo BASEURL;?>views/locador/locador-view.php">Locador</a></li>
            <li><a href="<?php echo BASEURL;?>views/usuario/usuario-view.php">Usuário</a></li>
            <li><a href="<?php echo BASEURL;?>views/perfil/perfil-view.php">Perfil</a></li>
            <li data-toggle="collapse" data-target="#cadastrobasico" class="collapsed">
                  <a href="#">Cadastro Básico <span class="arrow"></span></a>
                </li>  
                <ul class="sub-menu collapse" id="cadastrobasico">
                  <li><a href="<?php echo BASEURL; ?>views/cadastro-basico/ambiente/ambiente-view.php">Ambiente</a></li>
                  <li><a href="<?php echo BASEURL; ?>views/cadastro-basico/item/item-view.php">Item</a></li>
                  <li><a href="<?php echo BASEURL; ?>views/cadastro-basico/material/material-view.php">Material</a></li>
                  <li><a href="<?php echo BASEURL; ?>views/cadastro-basico/pintura/pintura-view.php">Pintura</a></li>
                  <li><a href="<?php echo BASEURL; ?>views/cadastro-basico/cor/cor-view.php">Cor</a></li>
                  <li><a href="<?php echo BASEURL; ?>views/cadastro-basico/estado/estado-view.php">Estado</a></li>
                  <li><a href="<?php echo BASEURL; ?>views/cadastro-basico/tipovistoria/tipovistoria-view.php">Tipo vistoria</a></li>
                </ul>
          </ul>
        </div>
      </div>
    </div>

  