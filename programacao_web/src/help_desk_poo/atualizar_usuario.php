<?php

require_once("conexao.php");


session_start();
if (!isset($_SESSION['autenticado']) || $_SESSION['perfil_id'] !== 1) {
  header("Location: index.php?status_code=e014");
  exit();
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  $perfil_id = intval($_POST['id_perfil']);
  $id_usuario = intval($_POST['id_usuario']);

  if (empty($nome) || empty($email) || empty($senha) || empty($perfil_id)) {
    header("Location: cadastrar_usuario.php?status_code=e013");
    die();
  }

  try {
    $sql = "UPDATE tb_usuario SET id_usuario = :id_usuario, nome_usuario = :nome, email_usuario = :email, senha_usuario = :senha, id_perfil = :id_perfil WHERE id_usuario = :id_usuario";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senha);
    $stmt->bindParam(':id_perfil', $perfil_id);
    $stmt->bindParam(':id_usuario', $id_usuario);
    $stmt->execute();
    header("Location: usuarios.php?status_code=s006");
    exit();
  } catch (PDOException $e) {
    die("Erro: " . $e->getMessage());
  }
}
