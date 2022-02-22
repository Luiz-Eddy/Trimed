<?php require_once('head.php'); ?>
	<title>Trimed - Página Inicial</title>
<?php require_once('header.php'); ?>
	<script type="text/javascript">
		function pagina(){
			menu(1);
		}
	</script>
		<section class="conteudo" >
			<div class="principal">
				<div id="beta" class="back oc" onclick="desfazer()">
					<img src="img/logo.png">
					<!-- <div class="recomendados">
						<p>Pesquisas comuns:</p>
						<div class="box-recomendados">
							
						</div>
						<div class="box-recomendados">
							
						</div>
						<div class="box-recomendados">
							
						</div>
						<div class="box-recomendados">
							
						</div>
						<div class="box-recomendados">
							
						</div>
					</div> -->
				</div>
					<h1>O que você procura?</h1>
					<h2 class="cd-headline clip is-full-width" style="margin-top: 10px;">
						<span class="cd-words-wrapper">
							<b class="is-visible">Farmácias do país</b>
							<b>Variação de preço dos medicamentos</b>
						</span>
					</h2>
				<form method="POST" action="pesquisa.php" id="form">
					<input type="text" name="pesquisa" placeholder="Digite aqui seu termo de pesquisa" required="required" onfocus="efeito()" id="campo">
					<input type="submit" name="pesquisar" value="Pesquisar">
				</form>
				<div class="tags-sugeridas" id="sugeridos">
					<small class="tags-su-title">Localize aqui: </small>
					<small>Medicamentos,</small>
					<small>Farmácias</small>
				</div>
			</div>
		</section>
		<section class="infos">
			<div class="sobre">
				<h3>O que é a TRIMED?</h3>
				<p>TRIMED foi fundada em 2019 por alunos do curso Sistemas de Informação da Uni-BH com o objetivo de mostrar a variação de preços de medicamentos que existe no país e ainda auxiliar o usuário na consulta de farmácias, medicamentos e preços. Utilizamos uma grande base de dados disponibilizada pelo governo e entidades de dados para montar nosso sistema e isso faz com que os dados sejam de uma fonte confiável e atualizada. Com um design simples e de fácil entendimento, esperamos que o nosso sistema ajude diversos clientes à tirarem dúvidas e fazer uma localização mais precisa do que deseja.</p>
			</div>
			<div class="box-infos">
				<div class="img-infos">
					<img src="img/remedios.png">
				</div>
				<div class="content-infos">
					<h3>Encontre remédios</h3>
					<p>Encontre informações sobre os remédios desejados</p>
				</div>
			</div>
			<div class="box-infos">
				<div class="img-infos">
					<img src="img/farmacia.png">
				</div>
				<div class="content-infos">
					<h3>Localize farmácias</h3>
					<p>Encontre farmácias mais próximas de você</p>
				</div>
			</div>
			<div class="box-infos">
				<div class="img-infos">
					<img src="img/dinheiro.png">
				</div>
				<div class="content-infos">
					<h3>Conheça diferenças de preço</h3>
					<p>Veja a diferença de preço por medicamento em cada estado e região</p>
				</div>
			</div>
		</section>
<?php require_once('footer.php'); ?>