<!DOCTYPE html>
<html>
<head>
  <title>Resultado das Notas</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h1>Resultado das Notas</h1>
    <?php

      $nome = $_POST['nome'];
      $nota1 = $_POST['nota1'];
      $nota2 = $_POST['nota2'];
      $nota3 = $_POST['nota3'];


      $media = ($nota1 + $nota2 + $nota3) / 3;


      $maiorNota = max($nota1, $nota2, $nota3);


      $menorNota = min($nota1, $nota2, $nota3);

      // Exibe os resultados
      echo "<p><strong>Nome do Aluno:</strong> $nome</p>";
      echo "<p><strong>Média:</strong> $media</p>";
      echo "<p><strong>Maior Nota:</strong> $maiorNota</p>";
      echo "<p><strong>Menor Nota:</strong> $menorNota</p>";
   
    ?>
  </div>
</body>
</html>