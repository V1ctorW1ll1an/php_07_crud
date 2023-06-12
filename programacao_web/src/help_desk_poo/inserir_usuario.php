<?php

require_once('conexao.php');


session_start();
if (!isset($_SESSION['autenticado']) || $_SESSION['perfil_id'] !== 1) {
  header("Location: /help_desk_poo/index.php");
  exit();
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  $perfil_id = $_POST['id_perfil'];

  if (empty($nome) || empty($email) || empty($senha) || empty($perfil_id)) {
    header("Location: cadastrar_usuario.php?status_code=e013");
    exit();
  }


  try {
    $sql = "INSERT INTO tb_usuario (nome_usuario, email_usuario, senha_usuario, id_perfil) VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$nome, $email, $senha, $perfil_id]);
    header("Location: usuarios.php?status_code=s001");
    exit();
  } catch (PDOException $e) {
    die("Erro ao cadastrar usuário: " . $e->getMessage());
  }
}
