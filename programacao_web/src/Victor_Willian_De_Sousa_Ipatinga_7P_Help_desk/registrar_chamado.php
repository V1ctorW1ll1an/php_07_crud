<?php
require_once 'conexao.php';

try {
    session_start();
    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = $_POST['categoria'];
    $descricao = str_replace('#', '-', $_POST['descricao']);
    $id = $_SESSION['id'];


    $stmt = $pdo->prepare('INSERT INTO tb_chamado (titulo_chamado, descricao_chamado, id_categoria, id_usuario) VALUES (:titulo, :descricao, :categoria, :usuario)');
    $stmt->bindParam(':titulo', $titulo);
    $stmt->bindParam(':descricao', $descricao);
    $stmt->bindParam(':categoria', $categoria);
    $stmt->bindValue(':usuario', $id);
    $stmt->execute();

    header('Location: abrir_chamado.php?msg=sucesso');
}
catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
}
?>
