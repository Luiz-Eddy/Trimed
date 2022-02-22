<?php require_once('head.php'); ?>
	<title>Cadastro - Trimed</title>
	<?php require_once('header.php'); ?>
	<script type="text/javascript">
		function pagina(){
			menu(5);
		}
	</script>
	<section class="conteudonormal cadastro">
		<h1>Cadastro</h1>
		<p>Cadastre-se no Trimed para armazenar suas farmácias favoritas, medicamentos, suas anotações e faça solicitações</p>
		<form method="POST" action="funcoes/cadastrar.php">
			<table>
				<tr>
					<td>
						<label>Nome:</label>
						<input type="text" name="nome" required="required">
					</td>
					<td>
						<label>Sobrenome:</label>
						<input type="text" name="sobrenome" required="required">
					</td>
				</tr>
				<tr>
					<td>
						<label>E-mail:</label>
						<input type="text" name="email" required="required">
					</td>
					<td>
						<label>Telefone:</label>
						<input type="text" name="telefone" required="required">
					</td>
				</tr>
				<tr>
					<td>
						<label>Senha:</label>
						<input type="password" name="senha" required="required">
					</td>
					<td>
						<label>Repetir Senha: </label>
						<input type="password" name="r-senha" required="required" onkeydown="validasenha()">
					</td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" name="cadastrar" value="Cadastrar"></td>
				</tr>
			</table>
		</form>
	</section>
<?php require_once('footer.php'); ?>
