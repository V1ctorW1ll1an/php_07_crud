<?php
$id_chamado = $_GET['id_chamado'] ?? null;
$title = $id_chamado ? 'Editar chamado' : 'Cadastrar chamado';
$chamado = null;
if ($id_chamado) {
  require_once("conexao.php");

  $sql = "SELECT * FROM tb_chamado WHERE id_chamado = ?";
  $stmt = $pdo->prepare($sql);
  $stmt->execute([$id_chamado]);
  $chamado = $stmt->fetch();
}
?>

<?php include_once './components/head.php'; ?>

<body>
  <div class="w-full bg-gray-50 dark:bg-gray-900 min-h-screen flex flex-col">
    <!-- header -->
    <?php include_once './components/header.php'; ?>

    <!-- content -->
    <?php include_once './components/chamados_form.php'; ?>

    <!-- footer -->
    <?php include_once './components/footer.php'; ?>
  </div>
</body>

</html>