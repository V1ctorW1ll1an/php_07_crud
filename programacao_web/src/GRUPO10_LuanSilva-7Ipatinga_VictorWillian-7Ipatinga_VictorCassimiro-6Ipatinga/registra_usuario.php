<?php
require_once 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  // protecao contra sql inject
  $nome = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
  $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
  $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

  $query = "INSERT INTO tb_usuario (nome, email, senha) VALUES (?, ?, ?)";
  $stmt = $pdo->prepare($query);
  $stmt->execute([$nome, $email, $senha]);

  if ($stmt->rowCount() > 0) {
    // redireciona para a pagina index.php com um parametro de sucesso
    header('Location: index.php?status=1');
  } else {
    // redireciona para a pagina index.php com um parametro de erro
    header('Location: index.php?status=0');
  }
}
