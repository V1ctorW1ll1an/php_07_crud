<?php
session_start();

// Verifica se o usuário está autenticado
if (!isset($_SESSION['id_usuario'])) {
  // Redireciona para a página index.php com o parâmetro ?autenticado=0
  header('Location: index.php?autenticado=0');
  exit();
}
