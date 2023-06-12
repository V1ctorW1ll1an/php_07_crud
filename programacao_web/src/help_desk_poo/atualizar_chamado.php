<?php

require_once('conexao.php');

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $titulo_chamado = $_POST['titulo_chamado'];
  $descricao_chamado = $_POST['descricao_chamado'];
  $id_categoria = $_POST['id_categoria'];
  $id_chamado = $_POST['id_chamado'];
  $id_usuario = $_SESSION['id'];

  if (empty($titulo_chamado) || empty($descricao_chamado) || empty($id_categoria)) {
    header("Location: chamados.php?status_code=e013");
    exit();
  }


  try {
    // atualizar chamado
    $sql = "UPDATE tb_chamado SET titulo_chamado = ?, descricao_chamado = ?, id_categoria = ?, id_usuario = ? WHERE id_chamado = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$titulo_chamado, $descricao_chamado, $id_categoria, $id_usuario, $id_chamado]);
    header("Location: chamados.php?status_code=s004");
    exit();
  } catch (PDOException $e) {
    die("Erro: " . $e->getMessage());
  }
}
