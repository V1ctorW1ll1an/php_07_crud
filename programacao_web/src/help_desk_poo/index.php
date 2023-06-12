<?php
session_start();
require_once('./utils/status_code.php');
if (isset($_SESSION['autenticado'])) {
  header('Location: ./home.php');
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<?php
$title = 'Home';
?>

<?php include_once './components/head.php'; ?>

<body>

  <?php include_once './components/login_form.php'; ?>

</body>

</html>