<?php
require './validar_sessao.php';
require_once('./utils/status_code.php');
?>

<!DOCTYPE html>
<html lang="pt-br">


<?php $title = 'Home'; ?>

<?php include_once './components/head.php'; ?>

<body>
  <div class="w-full bg-gray-50 dark:bg-gray-900 min-h-screen flex flex-col">
    <!-- header -->
    <?php include_once './components/header.php'; ?>

    <!-- content -->
    <?php include_once './components/options.php'; ?>

    <!-- footer -->
    <?php include_once './components/footer.php'; ?>
  </div>
</body>

</html>