<?php require_once('head.php'); ?>
	<title>Trimed - Página Inicial</title>
<?php require_once('header.php'); ?>
	<script type="text/javascript">
		function pagina(){
			menu(3);
		}
	</script>
	<section class="conteudonormal">
		<h1>Farmácias Cadastradas</h1>
		<table id="farmacias">
			<thead>
				<tr>
					<th>Estado</th>
					<th>Municipio</th>
					<th>Bairro</th>
					<th>Razão Social</th>
					<th>Ação</th>
				</tr>
			</thead>
			<tbody>
			<?php
				include("funcoes/listarfarmacias.php");
				while($dado = $con->fetch_array()){
			?>
				<tr>
					<td><?php echo $dado['estado'] ?></td>
					<td><?php echo $dado['municipio'] ?></td>
					<td><?php echo $dado['bairro'] ?></td>
					<td><?php echo $dado['razao_social'] ?></td>
					<td><a href="infofarmacia.php?id=<?php echo $dado['id'] ?>">Detalhes</a></td>
				</tr>
			<?php
				}
			?>
			</tbody>
		</table>
	</section>
<?php require_once('footer.php'); ?>