<?php 
require_once('../../config.php');
require_once('../../controllers/vistoria/vistoria-controller.php');
require_once('../../controllers/locador/locador-controller.php');
require_once('../../controllers/inquilino/inquilino-controller.php');


	 if(isset($_GET['vistoria'])){
    	$id_vistoria = $_GET['vistoria'];
    	$vistoria = new vistoriaController();
    	$locador = new locadorController();
    	$inquilino = new inquilinoController();


    	$print = $vistoria->selectVistoriaPrint($id_vistoria);
    	$printLocador = $locador->selectLocador($print['id_locador']);
    	$printInquilino = $inquilino->selectInquilino($print['id_inquilino']);
    	

  }

?>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" media="all">

<html>
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<?php ?>
			</div>
			<div class="col-sm-4 text-center">
				<h2>Laudo de Vistoria</h2>
			</div>
			<div class="col-sm-4 text-right">
				<p><text style="font-weight:bolder">Código:</text> <?php echo $print['id_vistoria']?></p>
				<p><text style="font-weight:bolder">Data:</text> <?php echo date("d-m-Y", strtotime($print['data_vistoria'])); ?></p>
				<p><text style="font-weight:bolder">Vistoriador:</text> <?php echo $print['nome'];?></p>
			</div>
		</div>
		
		<div class="row">
			<div class="col-sm-12 text-center" style="background-color:#dcdcdc">
				<h4 style="font-weight:bolder">Dados do Locador</h4>
			</div>
			<div class="col-sm-6">
				<text style="font-weight:bolder">Locador:</text> <?php echo $printLocador['nome'];?>
			</div>
			<div class="col-sm-6">
				<text style="font-weight:bolder">CPF/CNPJ:</text> <?php echo $printLocador['cpfcnpj'];?>
			</div>
			<div class="col-sm-6">
				<text style="font-weight:bolder">Email:</text> <?php echo $printLocador['email'];?>
			</div>
			<div class="col-sm-6">
				<text style="font-weight:bolder">Telefone:</text> <?php echo $printLocador['telefone'];?>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12 text-center" style="background-color:#dcdcdc">
				<h4 style="font-weight:bolder">Dados do Inquilino</h4>
			</div>
			<div class="col-sm-6">
				<text style="font-weight:bolder">Inquilino:</text> <?php echo $printInquilino['nome'];?>
			</div>
			<div class="col-sm-6">
				<text style="font-weight:bolder">CPF/CNPJ:</text> <?php echo $printInquilino['cpfcnpj'];?>
			</div>
			<div class="col-sm-6">
				<text style="font-weight:bolder">Email:</text> <?php echo $printInquilino['email'];?>
			</div>
			<div class="col-sm-6">
				<text style="font-weight:bolder">Telefone:</text> <?php echo $printInquilino['telefone'];?>
			</div>
		</div>
		
		
		<div class="row">
			<div class="col-sm-12 text-center" style="background-color:#dcdcdc">
				<h4 style="font-weight:bolder">Dados do imóvel</h4>
			</div>
			<div class="col-sm-6">
				<text style="font-weight:bolder">Tipo de vistoria:</text> <?php echo $print['tipovistoria'];?> 
			</div>
			<div class="col-sm-6">
				<text style="font-weight:bolder">Tipo de imóvel:</text> <?php echo $print['tipoimovel'];?> 
			</div>
			<div class="col-sm-12">
				<text style="font-weight:bolder">Imóvel:</text> <?php echo $print['endereco'].", ".$print['numero'].", ".$print['complemento'].", ".$print['bairro'].", ".$print['cidade']." - ".$print['uf']; ?>
			</div>
		</div>
		
		<div class="row">
			<div class="col-sm-12 text-center" style="background-color:#dcdcdc">
				<h4 style="font-weight:bolder">Ambientes</h4>
			</div>

			<?php foreach($vistoria->selectAmbienteVistoria($id_vistoria) as $key => $value){?>
					<div class="col-sm-12">
						<text style="font-weight:bolder"><?php echo '- '.$value->ambiente; ?><br></text>
					</div>
			<?php foreach ($vistoria->selectAmbienteVistoriaItem($value->id_vistoria_ambiente) as $key1 => $value1) {?>
					<div class="col-sm-12">
						&nbsp&nbsp&nbsp<text><?php echo '- '.$value1->item;
    					if ($value1->material != NULL){
      						echo " de ".$value1->material;
    					}
    					if ($value1->pintura != NULL){
      						echo " com Pintura ".$value1->pintura;
    					}
    					if ($value1->cor != NULL){
      						echo " na Cor ".$value1->cor;
    					}
    					if ($value1->estado != NULL){
      						echo ", ".$value1->estado;
    					}
    					if ($value1->complemento != NULL){
      						echo ". ".$value1->complemento;
    					}?><br></text>
					</div>
			<?php foreach ($vistoria->selectAmbienteVistoriaFoto($value->id_vistoria_ambiente) as $key2 => $value2) {?>
						<div class="col-sm-2">
							&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo "<img width='170px' height='170px' src='".FOTOS.$id_vistoria.'/'.$value2->foto."' class='img-rounded'"; ?><br>
						</div>
				<?php }	?>	
				<?php	}
					
				}?>	
			
			
			
		</div>
		
		<div class="row">
			<div class="col-sm-12 pull-right">
				RECIFE, 24 de Novembro de 2017
			</div>
		</div>
		
		<div class="row">
			<div class="col-sm-6 text-center">
				<hr style="color:#000">
				Locador(a): <?php echo $printLocador['nome'];?>
			</div>
			<div class="col-sm-6 text-center">
				<hr style="color:#000">
				Vistoriador(a): <?php echo $print['nome'];?>
			</div>
			<div class="col-sm-6 text-center">
				<hr style="color:#000">
				Testemunha1 CPF:
				<br>
				Nome:
			</div>
			<div class="col-sm-6 text-center">
				<hr style="color:#000">
				Testemunha2 CPF:
				<br>
				Nome:
			</div>
		</div>
		
	</div>
</html>