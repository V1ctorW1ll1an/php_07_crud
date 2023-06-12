<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Criar novo usuário - App Help Desk</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
	<nav class="navbar navbar-dark bg-dark">
		<a class="navbar-brand" href="#">
			<img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
			App Help Desk
		</a>
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link" href="home.php?logout">Logout</a>
			</li>
		</ul>
	</nav>

	<div class="container my-5">
    <?php if (isset($_GET['cadastro']) && $_GET['cadastro'] === 'sucesso'): ?>
    <div class="alert alert-success" role="alert">
        Usuário cadastrado com sucesso!
    </div>
  <?php elseif (isset($_GET['cadastro']) && $_GET['cadastro'] === 'erro1'): ?>
		<div class="alert alert-danger" role="alert">
				Erro ao cadastrar usuário. 
		</div>
		<?php endif; ?>

		<div class="card">
			<div class="card-header">
				Criar novo usuário
			</div>
			<div class="card-body">
				<form method="POST" action="inserir_novo_usuario.php">
					<div class="form-group">
						<label for="nome">Nome:</label>
						<input type="text" class="form-control" id="nome" name="nome" required>
					</div>
					<div class="form-group">
						<label for="email">E-mail:</label>
						<input type="email" class="form-control" id="email" name="email" required>
					</div>
					<div class="form-group">
						<label for="senha">Senha:</label>
						<input type="password" class="form-control" id="senha" name="senha" required>
					</div>
					<div class="form-group">
						<label for="id_perfil">Perfil:</label>
						<select class="form-control" id="id_perfil" name="id_perfil" required>
							<option value="">Selecione</option>
							<?php
								require_once 'conexao.php';
								$stmt = $pdo->query('SELECT * FROM tb_perfil');
								while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
									echo '<option value="' . $row['id_perfil'] . '">' . $row['nome_perfil'] . '</option>';
								}
							?>
						</select>
					</div>

				<div class="d-flex align-items-start justify-content-start">
						<a href="home.php" class="btn btn-warning">Voltar</a>
						<button type="submit" class="btn btn-primary ml-3">Criar usuário</button>
				</div>
				</form>
			</div>
		</div>
	</div>
 </body>
</html>
