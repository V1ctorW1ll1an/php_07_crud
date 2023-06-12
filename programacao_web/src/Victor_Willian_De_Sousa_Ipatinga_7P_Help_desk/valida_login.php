<?php
require_once 'conexao.php';

$usuario_autenticado = false;
$usuario_id = null;
$usuario_perfil_id = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = $_POST['email'];
  $senha = $_POST['senha'];

  if (empty($email) || empty($senha)) {
    header("Location: index.php?login=erro2");
    exit();
  }

  try {
    $stmt = $pdo->prepare("SELECT * FROM tb_usuario WHERE email_usuario = :email AND senha_usuario = :senha");
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senha);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($result) {
      $usuario_autenticado = true;
      $usuario_id = $result['id_usuario'];
      $usuario_perfil_id = $result['id_perfil'];
    }

  } catch(PDOException $e) {
    die("Erro ao buscar usuário: " . $e->getMessage());
  }
}

if ($usuario_autenticado) {
  session_start();
  $_SESSION['autenticado'] = true;
  $_SESSION['id'] = $usuario_id;
  $_SESSION['perfil_id'] = $usuario_perfil_id;
  header("Location: home.php");
} else {
  header('Location: index.php?login=erro');
}
