<?php 

require_once('../config.php');

?>

<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Vistoria</title>

    <link href="<?php echo BASEURL;?>css/bootstrap.min.css" rel="stylesheet">

    <link href="<?php echo BASEURL;?>css/login.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">

      <form class="form-signin" method="POST" action="<?php echo BASEURL;?>controllers/login-controller.php">
        <h2 class="form-signin-heading">Vistoria</h2></br>
        <label for="email" class="sr-only">Usuário</label>
        <input name="email" type="email" id="email" class="form-control" placeholder="E-mail" required autofocus>
        <label for="senha" class="sr-only">Senha</label>
        <input name="senha" type="password" id="senha" class="form-control" placeholder="Senha" required>
        <div class="checkbox">
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
      </form>
      <?php if(isset($_GET['erro']) == 1){?>
      <div class="row">
      <div class="col-sm-4"></div>
      	<div class="alert alert-danger col-sm-4" align="center">
  			<strong>Erro!</strong> Usuário ou Senha Incorreto.
	  	</div>
	  	<div class="col-sm-4"></div>
	 </div>
      	<?php } ?>
    </div> <!-- /container -->
  </body>
</html>