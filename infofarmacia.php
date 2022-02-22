<?php require_once('head.php'); ?>
	<title>Trimed - Página Inicial</title>
<?php require_once('header.php');
require_once('funcoes/infofarmacia.php');
$dado = $con->fetch_array();?>
	<script type="text/javascript">
		function pagina(){
			menu(3);
		}
	</script>
	<section class="conteudonormal" style="line-height: 35px;">
		<h1><?php echo $dado['razao_social']; ?></h1>
		<p>Endereço: <?php echo $dado['endereco'];?></p>
		<p>Bairro: <?php echo $dado['bairro'];?></p>
		<p>Cidade: <?php echo $dado['municipio'];?></p>
		<p>Estado: <?php echo $dado['estado'];?></p>
		<p>Telefone: <?php echo $dado['telefone'];?></p>
	
	<button class="btn-map"><a href="https://www.google.com/maps/search/<?php echo $dado['endereco']; echo ', '; echo $dado['bairro']; echo ', '; echo $dado['municipio'];?>" target="_black">Abrir no Google Maps</a></button>
	</section>

<?php require_once('footer.php'); ?>