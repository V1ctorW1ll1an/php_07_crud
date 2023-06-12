<?php
require("validar_sessao.php");
require_once("conexao.php");
require_once('./utils/status_code.php');

// caso seja admin, pegar todos os chamados
// caso seja usuario, pegar apenas os chamados do usuario logado
// pegar todos os chamados, a categoria relacionada e o usuario relacionado
$chamados = null;
if ($_SESSION['perfil_id'] === 1) {
  $sql = "SELECT tb_chamado.*, tb_categoria.nome_categoria as nome_categoria, tb_usuario.nome_usuario as nome_usuario FROM tb_chamado JOIN tb_categoria ON tb_chamado.id_categoria = tb_categoria.id_categoria JOIN tb_usuario ON tb_chamado.id_usuario = tb_usuario.id_usuario";
  $stmt = $pdo->query($sql);
  $chamados = $stmt->fetchAll(PDO::FETCH_ASSOC);
} else {
  $sql = "SELECT tb_chamado.*, tb_categoria.nome_categoria as nome_categoria, tb_usuario.nome_usuario as nome_usuario FROM tb_chamado JOIN tb_categoria ON tb_chamado.id_categoria = tb_categoria.id_categoria JOIN tb_usuario ON tb_chamado.id_usuario = tb_usuario.id_usuario WHERE tb_chamado.id_usuario = ?";
  $stmt = $pdo->prepare($sql);
  $stmt->execute([$_SESSION['id']]);
  $chamados = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<?php $title = 'Chamados'; ?>

<?php include_once './components/head.php'; ?>

<body>
  <div class="w-full bg-gray-50 dark:bg-gray-900 min-h-screen flex flex-col">
    <!-- header -->
    <?php include_once './components/header.php'; ?>

    <!-- content -->
    <?php include_once './components/tabela_chamados.php'; ?>

    <!-- footer -->
    <?php include_once './components/footer.php'; ?>
  </div>

</body>

</html>