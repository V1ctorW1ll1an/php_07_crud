<?php
require_once('conexao.php');
require_once('validar_sessao.php');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  $id_chamado = $_GET['id_chamado'];

  try {
    $sql = "DELETE FROM tb_chamado WHERE id_chamado = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id_chamado]);
    header("Location: /help_desk_poo/chamados.php?status_code=s007");
    exit();
  } catch (PDOException $e) {
    die("Erro: " . $e->getMessage());
  }
}
