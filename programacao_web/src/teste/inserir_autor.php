<?php
// Inclui o arquivo de conexão
include 'conexao.php';

// Obtém os dados do formulário
$nome = $_POST['nome'];
$nascimento = $_POST['nascimento'];

// Insere um novo autor
try {
  $stmt = $pdo->prepare('INSERT INTO tbautor (Nome, Nascimento) VALUES (:nome, :nascimento)');
  $stmt->execute(array(
    ':nome' => $nome,
    ':nascimento' => $nascimento
  ));
  echo 'Autor inserido com sucesso!';
} catch(PDOException $e) {
  echo 'Erro ao inserir autor: ' . $e->getMessage();
}
?>