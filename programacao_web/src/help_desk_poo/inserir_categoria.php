<?php
require_once('conexao.php');

session_start();
if (!isset($_SESSION['autenticado']) || $_SESSION['perfil_id'] !== 1) {
  header("Location: /help_desk_poo/index.php?status_code=e014");
  exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nome = $_POST['nome'];

  if (empty($nome)) {
    header("Location: cadastrar_categoria.php?status_code=e013");
    exit();
  }

  try {
    $sql = "INSERT INTO tb_categoria (nome_categoria) VALUES (?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$nome]);
    header("Location: categorias.php?status_code=s003");
    exit();
  } catch (PDOException $e) {
    die("Erro: " . $e->getMessage());
  }
}
