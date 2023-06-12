<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Qual é a capital?</title>

    <!-- CSS do Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

  <!-- Biblioteca de sugestão de texto (Awesomplete) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/awesomplete/1.1.2/awesomplete.min.css" />
</head>
<body>
  <div class="container">
  <h1>Qual é a capital?</h1>
  <form method="post" action="capital.php">
    <div class="form-group">
      <label for="estado">Digite o nome do estado</label>
      <input type="text" class="form-control awesomplete" name="estado" id="estado" autocomplete="off">
    </div>
    <button type="submit" class="btn btn-primary">Buscar</button>
  </form>
</div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/awesomplete/1.1.2/awesomplete.min.js"></script>
  <script>
    var estados = [
      "Acre",
      "Alagoas",
      "Amapá",
      "Amazonas",
      "Bahia",
      "Ceará",
      "Distrito Federal",
      "Espírito Santo",
      "Goiás",
      "Maranhão",
      "Mato Grosso",
      "Mato Grosso do Sul",
      "Minas Gerais",
      "Pará",
      "Paraíba",
      "Paraná",
      "Pernambuco",
      "Piauí",
      "Rio de Janeiro",
      "Rio Grande do Norte",
      "Rio Grande do Sul",
      "Rondônia",
      "Roraima",
      "Santa Catarina",
      "São Paulo",
      "Sergipe",
      "Tocantins"
    ];
    
    var inputEstado = document.getElementById("estado");
    new Awesomplete(inputEstado, {
      list: estados
    });
  </script>

</body>
</html>