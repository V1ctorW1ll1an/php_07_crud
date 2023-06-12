<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Resultado da votação</title>
</head>
<body>
  <?php
    $nome = $_POST["nome"];
    $personagem = $_POST["personagem"];
    echo "<h1>Resultado da votação</h1>";
    echo "<p> $nome, você votou em: $personagem </p>";
  ?>
</body>
</html>