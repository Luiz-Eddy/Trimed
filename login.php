<?php require_once('head.php'); ?>
	<title>Login - Trimed</title>
	<?php require_once('header.php'); ?>
	<script type="text/javascript">
		function pagina(){
			menu(6);
		}
	</script>
	<div class="login-bk">
		<h3>Uma só conta,<br>várias possibilidades</h3>
		<ul>
			<li>Remédios favoritos</li>
			<li>Farmácias favoritas</li>
			<li>Anotações</li>
			<li>Solicitações</li>
		</ul>
		<p>Faça sua conta na TRIMED e garanta novidades no e-mail</p>
	</div>
	<div class="bx-login">
		<form method="POST" action="funcoes/logar.php">
			<div class="loginContent" id="logar">
				<h1>Login</h1>
				<label>Usuário ou E-mail</label>
				<input type="text" name="user" placeholder="Digite seu login aqui" required="required">
				<label>Senha:</label>
				<input type="password" name="senha" placeholder="Digite sua senha aqui" required="required">
				<div class="box-login-left">
					<input type="submit" name="logar" value="Entrar">
				</div>
				<p><a href="#" onclick="recovery()">Esqueci a senha</a>
					<span style="margin: 0px 5px;">Ou</span>
				<a href="cadastro.php">Cadastrar-se</a></p>
			</div>
		</form>
		<div class="recuperar-senha loginContent" id="recuperars">
			<h1>Recuperar Senha</h1>
			<form method="POST" action="">
				<label>Usuário ou E-mail</label>
				<input type="text" name="user" placeholder="Digite seu login aqui">
				<div class="box-login-left">
					<input type="submit" name="recuperar" value="Recuperar">
				</div>
				<a href="#" onclick="login()">Voltar para o Login</a>
			</form>
		</div>
	</div>
</div>
</div>