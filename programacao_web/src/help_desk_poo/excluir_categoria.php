<?php
require_once('conexao.php');
require_once('validar_sessao.php');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  $id = $_GET['id'];

  try {

    // verificar se a categoria ja esta sendo referenciada nos chamados tb_chamado
    $sql = "SELECT * FROM tb_chamado WHERE id_categoria = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    $chamados = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (count($chamados) > 0) {
      header("Location: /help_desk_poo/categorias.php?status_code=e016");
      exit();
    }

    $sql = "DELETE FROM tb_categoria WHERE id_categoria = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    header("Location: /help_desk_poo/categorias.php?status_code=s008");
    exit();
  } catch (PDOException $e) {
    die("Erro: " . $e->getMessage());
  }
}
