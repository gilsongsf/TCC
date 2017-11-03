<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Vistoria</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?php echo BASEURL; ?>views/css/bootstrap.min.css">
    <link href="<?php echo BASEURL; ?>views/css/sidebar.css" rel="stylesheet">
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
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    Opções <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo BASEURL; ?>">Alterar Senha</a></li>
                    <li><a href="<?php echo BASEURL; ?>">Logoff</a></li>
                </ul>
            </li>
          </ul>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Vistoria <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Agenda</a></li>
            <li><a href="#">Imovel</a></li>
            <li><a href="#">Locador</a></li>
            <li><a href="#">Usuário</a></li>
            <li><a href="#">Perfil</a></li>
            <li data-toggle="collapse" data-target="#cadastrobasico" class="collapsed">
                  <a href="#">Cadastro Básico <span class="arrow"></span></a>
                </li>  
                <ul class="sub-menu collapse" id="cadastrobasico">
                  <li><a href="#">Ambiente</a></li>
                  <li><a href="#">Item</a></li>
                  <li><a href="#">Material</a></li>
                  <li><a href="#">Pintura</a></li>
                  <li><a href="#">Cor</a></li>
                  <li><a href="#">Estado</a></li>
                  <li><a href="#">Tipo vistoria</a></li>
                </ul>
          </ul>
        </div>
      </div>
    </div>

    <main class="container">