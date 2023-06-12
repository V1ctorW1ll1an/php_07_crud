<?php
  $numero = $_POST['numero'];
  $funcoes = $_POST['funcoes'];

  if (in_array('par', $funcoes)) {
    if ($numero % 2 == 0) {
      echo "<p>O número $numero é par.</p>";
    } else {
      echo "<p>O número $numero é ímpar.</p>";
    }
  }

  if (in_array('fatorial', $funcoes)) {
    $fatorial = 1;
    for ($i = 1; $i <= $numero; $i++) {
      $fatorial *= $i;
    }
    echo "<p>O fatorial de $numero é $fatorial.</p>";
  }
?>
