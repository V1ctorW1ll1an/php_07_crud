<?php
session_start();

if (!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] !== true) {
  header('Location: index.php');
  exit;
}

require_once 'conexao.php';

if ($_SESSION['perfil_id'] === 2) {
  $sql = "SELECT tb_chamado.*, tb_categoria.* FROM tb_chamado JOIN tb_categoria ON tb_chamado.id_categoria = tb_categoria.id_categoria WHERE tb_chamado.id_usuario = {$_SESSION['id']}";
} else {
  $sql = "SELECT tb_chamado.*, tb_categoria.* FROM tb_chamado JOIN tb_categoria ON tb_chamado.id_categoria = tb_categoria.id_categoria";
}

$stmt = $pdo->query($sql);
$chamados = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Consultar Chamados - App Help Desk</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
  <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
      <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
      App Help Desk
    </a>
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="logoff.php">Sair</a>
      </li>
    </ul>
  </nav>
  <div class="container mt-3">
    <div class="card">
      <div class="card-header">
        <h5 class="card-title">Consultar Chamados</h5>
      </div>
      <div class="card-body">
        <?php foreach ($chamados as $chamado): ?>
          <div class="card mb-3">
            <div class="card-header">
              <h6 class="card-title">Título: <?= $chamado['titulo_chamado'] ?></h6>
              <span class="badge badge-primary p-2"><?= $chamado['nome_categoria'] ?></span>
            </div>
            <div class="card-body">
              <p class="card-text"><?= $chamado['descricao_chamado'] ?></p>
            </div>
          </div>
        <?php endforeach; ?>
        <?php if (empty($chamados)): ?>
          <div class="alert alert-warning" role="alert">
            Nenhum chamado foi encontrado.
          </div>
        <?php endif; ?>
      </div>
    </div>
    <a href="home.php" class="btn btn-warning mt-3">Voltar para Home</a>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
