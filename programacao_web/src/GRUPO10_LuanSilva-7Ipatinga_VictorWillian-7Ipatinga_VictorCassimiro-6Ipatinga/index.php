<?php
session_start();

// caso o usuario esteja logado redireciona para a pagina home.php
if (isset($_SESSION['id_usuario'])) {
	header('Location: home.php');
	exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
	// pega o parametro status da url
	$status = filter_input(INPUT_GET, 'status', FILTER_SANITIZE_NUMBER_INT);
	$login = filter_input(INPUT_GET, 'login', FILTER_SANITIZE_NUMBER_INT);
	$autenticado = filter_input(INPUT_GET, 'autenticado', FILTER_SANITIZE_NUMBER_INT);
	$logout = filter_input(INPUT_GET, 'logout', FILTER_SANITIZE_NUMBER_INT);
}

?>
<!DOCTYPE HTML>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">

	<title>Twitter clone</title>

	<!-- jquery - link cdn -->
	<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

	<!-- bootstrap - link cdn -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	<script>
		// código javascript						
	</script>
</head>

<body>

	<!-- Static navbar -->
	<nav class="navbar navbar-default navbar-static-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<img src="imagens/icone_twitter.png" />
			</div>

			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="inscrevase.php">Inscrever-se</a></li>
					<li class="">
						<a id="entrar" data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Entrar</a>
						<ul class="dropdown-menu" aria-labelledby="entrar">
							<div class="col-md-12">
								<p>Você possui uma conta?</h3>
									<br />
								<form method="post" action="./validar_acesso.php" id="formLogin">
									<div class="form-group">
										<input type="text" class="form-control" id="campo_usuario" name="usuario" placeholder="Usuário" />
									</div>

									<div class="form-group">
										<input type="password" class="form-control red" id="campo_senha" name="senha" placeholder="Senha" />
									</div>

									<button type="buttom" class="btn btn-primary" id="btn_login">Entrar</button>

									<br /><br />

								</form>
								</form>
						</ul>
					</li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</nav>


	<div class="container">

		<!-- Main component for a primary marketing message or call to action -->
		<div class="jumbotron">
			<h1>Bem vindo ao twitter clone</h1>
			<p>Veja o que está acontecendo agora...</p>

			<!-- Aqui validamos se o usuario foi cadastrado com sucesso -->
			<?php if (isset($status) && $status == 1) : ?>
				<div class="alert alert-success" role="alert">Usuário cadastrado com sucesso! Clique em <b>Entrar</b> e faça seu login.</div>
			<?php elseif (isset($status) && $status == 0) : ?>
				<div class="alert alert-danger" role="alert">Erro ao cadastrar usuário!</div>
			<?php endif; ?>


			<!-- aqui validamos o login -->
			<?php if (isset($login) && $login == 0) : ?>
				<div class="alert alert-danger" role="alert">Usuário ou senha inválido!</div>
			<?php endif; ?>


			<!-- mensagem de usuario nao autenticado -->
			<?php if (isset($autenticado) && $autenticado == 0) : ?>
				<div class="alert alert-danger" role="alert">Você precisa estar logado para acessar as páginas internas!</div>
			<?php endif; ?>

			<!-- Mensagem amigavel para o usuario que acabou de fazer logout -->
			<?php if (isset($logout) && $logout == 1) : ?>
				<div class="alert alert-success" role="alert">Sua sessão foi encerrada com sucesso! Aproveite e volte mais tarde para curtir mais um pouco.</div>
			<?php endif; ?>

		</div>
		<div class="clearfix"></div>
	</div>

	</div>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</body>

</html>