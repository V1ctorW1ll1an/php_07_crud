<?php
require "validar_sessao.php";
session_destroy();
header('Location: index.php?logout=1');
exit();
