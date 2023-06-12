<?php

require_once("conexao.php");

session_start();
if (!isset($_SESSION['autenticado']) || $_SESSION['perfil_id'] !== 1) {
  header("Location: index.php?login=erro3");
  exit();
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // form
  $nome = $_POST['nome'];
  $id_categoria = $_POST['id_categoria'];

  if (empty($nome) || empty($id_categoria)) {
    header("Location: categorias.php?status_code=e013");
    exit();
  }

  try {

    $sql = "UPDATE tb_categoria SET nome_categoria = ? WHERE id_categoria = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$nome, $id_categoria]);

    header("Location: categorias.php?status_code=s005");
    exit();
  } catch (PDOException $e) {
    die("Erro: " . $e->getMessage());
  }
}
