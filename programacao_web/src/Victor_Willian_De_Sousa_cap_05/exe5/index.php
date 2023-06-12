<!DOCTYPE html>
<html>
  <head>
    <title>Calculadora de Média da Turma</title>
  </head>
  <body>
    <h1>Calculadora de Média da Turma</h1>
    <form action="calcular_media.php" method="POST">
      <table>
        <thead>
          <tr>
            <th>Nome</th>
            <th>Nota</th>
          </tr>
        </thead>
        <tbody>
          <?php for ($i=1; $i<=10; $i++) { ?>
          <tr>
            <td>
              <input type="text" name="nome[]" placeholder="Nome do Aluno" />
            </td>
            <td>
              <input type="number" name="nota[]" placeholder="Nota do Aluno" />
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
      <button type="submit">Calcular Média</button>
    </form>
  </body>
</html>
