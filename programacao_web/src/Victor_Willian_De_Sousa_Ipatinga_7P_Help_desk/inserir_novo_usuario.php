<?php

require_once('conexao.php');


session_start();
if (!isset($_SESSION['autenticado']) || $_SESSION['perfil_id'] !== 1) {
    header("Location: index.php?login=erro3");
    exit();
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $perfil_id = $_POST['id_perfil'];


    if (empty($nome) || empty($email) || empty($senha) || empty($perfil_id)) {
        header("Location: inserir_usuario_template.php?cadastro=erro1");
        exit();
    }


    try {
        $sql = "INSERT INTO tb_usuario (nome_usuario, email_usuario, senha_usuario, id_perfil) VALUES (?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$nome, $email, $senha, $perfil_id]);
        header("Location: inserir_usuario_template.php?cadastro=sucesso");
        exit();
    } catch (PDOException $e) {
        header("Location: inserir_usuario_template.php?cadastro=erro2&mensagem=" . $e->getMessage());
        exit();
    }
}


header("Location: home.php");
exit();
?>
