<?php
session_start();
if (!isset($_SESSION['autenticado'])) {
  header("Location: index.php?status_code=e012");
  exit();
}
