<?php session_start();
session_destroy();
header('Location: /help_desk_poo/index.php');
exit;
