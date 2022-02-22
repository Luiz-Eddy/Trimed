</head>
<body onload="pagina()">
<?php
	session_start();
	//$logado = $_SESSION['user'];
?>
<div class="geral">
	<div class="content">
		<header class="topo">
			<div class="left">
				<img src="img/logo2.png" class="header-logo">
			</div>
			<div class="logo-right">
				<nav class="menu">
					<ul>
						<li><a href="index.php" id="pg">Página Inicial</a></li>
						<li><a href="medicamentos.php" id="rem">Medicamentos</a></li>
						<li><a href="farmacias.php" id="farm">Farmácias</a></li>
						<li><a href="analises.php" id="ana">Análises</a></li>
					</ul>
				</nav>
			</div>
			<!-- <div class="right">
				<nav class="menu">
					<?php
						if($logado == null){
						 	echo '<ul>
									<li><a href="cadastro.php" id="cad">Cadastre-se</a></li>
									<li>ou <a href="login.php" id="login">Faça Login</a></li>
								</ul>';
						}
						else{
							echo '<ul>
									<li><a href="perfil.php" id="perfil">Editar Perfil</a></li>
									<li>ou <a href="funcoes/logout.php" id="logout">Fazer logout</a></li>
								</ul>';
						}
					?>
				</nav>
			</div> -->
		</header>