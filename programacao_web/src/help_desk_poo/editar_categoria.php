<?php
$id = $_GET['id'] ?? null;
$title = $id ? 'Editar categoria' : 'Cadastrar categoria';
$categoria = null;
if ($id) {
  require_once("conexao.php");
  $sql = "SELECT * FROM tb_categoria WHERE id_categoria = :id";
  $stmt = $pdo->prepare($sql);
  $stmt->bindParam(':id', $id);
  $stmt->execute();
  $categoria = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>

<?php include_once './components/head.php'; ?>

<body>
  <div class="w-full bg-gray-50 dark:bg-gray-900 min-h-screen flex flex-col">
    <!-- header -->
    <?php include_once './components/header.php'; ?>

    <!-- content -->
    <?php include_once './components/categoria_form.php'; ?>

    <!-- footer -->
    <?php include_once './components/footer.php'; ?>
  </div>
</body>

</html>