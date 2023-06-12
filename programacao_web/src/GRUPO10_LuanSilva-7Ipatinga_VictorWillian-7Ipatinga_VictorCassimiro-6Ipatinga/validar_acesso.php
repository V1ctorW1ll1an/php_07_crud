<?php
session_start();

require_once('conexao.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $usuario = $_POST['usuario'];
  $senha = $_POST['senha'];

  // Verifica se o usuário e a senha são válidos no banco de dados
  // estamos utilizando o nome do usuario para identificar-lo
  // mas poderiamos utilizar o email ou qualquer outro campo desde que seja unico
  $sql = "SELECT * FROM tb_usuario WHERE nome = :usuario AND senha = :senha";
  $stmt = $pdo->prepare($sql);
  $stmt->bindValue(':usuario', $usuario);
  $stmt->bindValue(':senha', $senha);
  $stmt->execute();

  $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

  if ($usuario) {
    // seta a variavel de sessão do usuario, vamos utilizar a id_usuario para identificar o usuário 
    // logado e poupar uso desnecessário de memoria e banco de dados
    $_SESSION['id_usuario'] = $usuario['id'];
    $_SESSION['nome_usuario'] = $usuario['nome'];

    // Redireciona para a página home.php
    header('Location: home.php');
    exit();
  } else {
    // Caso o usuário e senha não sejam válidos redireciona para a página index.php 
    // o parametro ?login=0 indica que o login falhou
    header('Location: index.php?login=0');
  }
}
