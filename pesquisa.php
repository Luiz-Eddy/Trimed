<?php require_once('funcoes/pesquisa.php');
include('head.php'); 
?>
	<title>Trimed - Página Inicial</title>
<?php include('header.php'); ?>
	<section class="conteudonormal">
		<h1>Resultados para: <?php echo $pesquisa; ?></h1>
		<?php if($row >= 1){ ?>
		<br>
		<h2 style="font-size: 20px; text-align: center;">Medicamentos localizados</h2>
		<br>
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
		<?php
		}
			if($row1 >= 1){
		?>
		<hr>
		<br>
		<h2 style="font-size: 20px; text-align: center;">Farmácias localizadas</h2>
		<br>
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
				while($dado = $con1->fetch_array()){
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
		<?php
			}
			if($row == 0 and $row1 == 0){
		?>
			<p>Nenhum resultado</p>
		<?php
			}
		?>
	</section>
<?php include('footer.php'); ?>