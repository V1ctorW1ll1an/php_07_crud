<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Funções Matemáticas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css" integrity="sha512-CQw8fBrTrIafAzH3rPnvche6JJfBur5Y//Ea1iBJW9IJNbdgfIFgH11jSmIy1offAIB+Z1s9bgNocphhgDJSrQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
    <div class="container">
      <h1>Funções Matemáticas</h1>
      <form action="funcao.php" method="POST">
        <label for="numero">Digite um número:</label>
        <input type="number" name="numero" id="numero" required>

        <label for="funcoes[]">Selecione as funções desejadas:</label>
        <select name="funcoes[]" id="funcoes" multiple>
          <option value="par">Testar se o número é par</option>
          <option value="fatorial">Calcular o fatorial</option>
        </select>

        <input type="submit" value="Calcular">
      </form>
    </div>
  </body>
</html>
