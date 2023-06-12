<?php
require("validar_sessao.php");
require_once("conexao.php");
require_once('./utils/status_code.php');

$sql = "SELECT * FROM tb_categoria";
$stmt = $pdo->query($sql);
$categorias = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="pt-br">

<?php $title = 'Categorias'; ?>

<?php include_once './components/head.php'; ?>

<body>
  <div class="w-full bg-gray-50 dark:bg-gray-900 min-h-screen flex flex-col">
    <!-- header -->
    <?php include_once './components/header.php'; ?>

    <!-- content -->
    <?php include_once './components/tabela_categorias.php'; ?>

    <!-- footer -->
    <?php include_once './components/footer.php'; ?>
  </div>

</body>

</html>