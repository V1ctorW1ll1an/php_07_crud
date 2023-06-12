<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Cadastro de Autor</title>
</head>

<body>
    <form action="inserir_autor.php" method="post">
      <label for="nome">Nome:</label>
      <input type="text" name="nome" id="nome" required><br>
      <label for="nascimento">Nascimento:</label>
      <input type="date" name="nascimento" id="nascimento" required><br>
      <input type="submit" value="Enviar">
    </form>
</body>
</html>
