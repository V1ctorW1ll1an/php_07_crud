<?php include 'conexao.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Listando Noticias</title>
</head>

<body>
  <fieldset>
    <legend>Listar Noticias</legend>

    <?php
      try {
        $stmt = $pdo->query('SELECT * FROM tbautor');
        while ($row = $stmt->fetch()) {
          echo $row['id'] . ' - ' . $row['nome'] . ' - ' . $row['nascimento'] . '<br>';
        }
      } 
      catch(PDOException $e) {
        echo 'Erro ao executar SELECT: ' . $e->getMessage();
      }

    ?>

  </fieldset>


  <!-- Link para a pagina Frmcad_autor.php -->
  <a href="Frmcad_autor.php">Novo Autor</a>
</body>