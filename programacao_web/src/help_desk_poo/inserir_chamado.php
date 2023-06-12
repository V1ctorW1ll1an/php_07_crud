<?php

require_once('conexao.php');

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $titulo_chamado = $_POST['titulo_chamado'];
  $descricao_chamado = $_POST['descricao_chamado'];
  $id_categoria = $_POST['id_categoria'];
  $id_usuario = $_SESSION['id'];

  if (empty($titulo_chamado) || empty($descricao_chamado) || empty($id_categoria)) {
    header("Location: chamados.php?status_code=e013");
    exit();
  }


  try {
    $sql = "INSERT INTO tb_chamado (titulo_chamado, descricao_chamado, id_categoria, id_usuario) VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$titulo_chamado, $descricao_chamado, $id_categoria, $id_usuario]);
    header("Location: chamados.php?status_code=s002");
    exit();
  } catch (PDOException $e) {
    die("Erro: " . $e->getMessage());
  }
}
