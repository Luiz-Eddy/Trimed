<?php require_once('head.php'); ?>
	<title>Trimed - Página Inicial</title>
<?php require_once('header.php'); ?>
	<script type="text/javascript">
		function pagina(){
			menu(2);
		}
	</script>
	<section class="conteudonormal">
		<h1>Medicamentos Cadastradas</h1>
		<table id="medicamentos">
			<thead>
				<tr>
					<th>Estado</th>
					<th>Região</th>
					<th>Medicamento</th>
					<th>Preço</th>
					<th>Variação</th>
				</tr>
			</thead>
			<tbody>
			<?php
				include("funcoes/listarmedicamentos.php");
				while($dado = $con->fetch_array()){
			?>
				<tr>
					<td><?php echo $dado['estado'] ?></td>
					<td><?php echo $dado['regiao'] ?></td>
					<td><?php echo $dado['medicamento'] ?></td>
					<td><?php echo $dado['preco'] ?></td>
					<td><?php echo $dado['variacao'] ?></td>
				</tr>
			<?php
				}
			?>
			</tbody>
		</table>
	</section>
<?php require_once('footer.php'); ?>