<?php
require_once("conexao.php");

session_start();
if (!isset($_SESSION['autenticado']) || $_SESSION['perfil_id'] !== 1) {
  header("Location: index.php?status_code=e014");
  exit();
}


if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  $id_usuario = intval($_GET['id']);

  try {
    // verificar se o usuario ja esta sendo referenciado nos chamados tb_chamado
    $sql = "SELECT * FROM tb_chamado WHERE id_usuario = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id_usuario]);
    $chamados = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (count($chamados) > 0) {
      header("Location: /help_desk_poo/usuarios.php?status_code=e015");
      exit();
    }

    // deletar o usuario
    $sql = "DELETE FROM tb_usuario WHERE id_usuario = :id_usuario";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id_usuario', $id_usuario);
    $stmt->execute();
    if ($stmt->rowCount() == 0) {
      header("Location: /help_desk_poo/usuarios.php?status_code=e015");
    } else {
      header("Location: /help_desk_poo/usuarios.php?status_code=s009");
    }
  } catch (PDOException $e) {
    die("Erro: " . $e->getMessage());
  }
}
