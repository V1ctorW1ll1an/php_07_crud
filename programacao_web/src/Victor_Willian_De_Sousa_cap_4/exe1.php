<!-- Construa uma página com uma lista contendo todos os estados brasileiros e um botão verificar. 
Conforme a escolha do estado feita pelo usuário exiba a região do mesmo. Use a estrutura condicional de múltipla escolha Switch Case.  -->

<?php

$region = '';
$show_forms = true;

if( $_SERVER["REQUEST_METHOD"] === "POST"){
  $estado = $_POST['estado'];
  $show_forms = false;

  switch($estado){
    case 'Acre':
    case 'Amapá':
    case 'Amazonas':
    case 'Pará':
    case 'Rondônia':
    case 'Roraima':
    case 'Tocantins':
      $region = 'Norte';
      break;
    case 'Alagoas':
    case 'Bahia':
    case 'Ceará':
    case 'Maranhão':
    case 'Paraíba':
    case 'Pernambuco':
    case 'Piauí':
    case 'Rio Grande do Norte':
    case 'Sergipe':
      $region = 'Nordeste';
      break;
    case 'Distrito Federal':
    case 'Goiás':
    case 'Mato Grosso':
    case 'Mato Grosso do Sul':
      $region = 'Centro-Oeste';
      break;
    case 'Espírito Santo':
    case 'Minas Gerais':
    case 'Rio de Janeiro':
    case 'São Paulo':
      $region = 'Sudeste';
      break;
    case 'Paraná':
    case 'Rio Grande do Sul':
    case 'Santa Catarina':
      $region = 'Sul';
      break;
  }
}
else{
  $show_forms = true;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>cap_4</title>

</head>
<body>
  <?php if($show_forms): ?>
    <form class="d-flex" action="" method="post">
      <label for="estado">Estado: </label>
      <select id="estado" name="estado">
        <option value="Acre">Acre</option>
        <option value="Alagoas">Alagoas</option>
        <option value="Amapá">Amapá</option>
        <option value="Amazonas">Amazonas</option>
        <option value="Bahia">Bahia</option>
        <option value="Ceará">Ceará</option>
        <option value="Distrito Federal">Distrito Federal</option>
        <option value="Espírito Santo">Espírito Santo</option>
        <option value="Goiás">Goiás</option>
        <option value="Maranhão">Maranhão</option>
        <option value="Mato Grosso">Mato Grosso</option>
        <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
        <option value="Minas Gerais">Minas Gerais</option>
        <option value="Pará">Pará</option>
        <option value="Paraíba">Paraíba</option>
        <option value="Paraná">Paraná</option>
        <option value="Pernambuco">Pernambuco</option>
        <option value="Piauí">Piauí</option>
        <option value="Rio de Janeiro">Rio de Janeiro</option>
        <option value="Rio Grande do Norte">Rio Grande do Norte</option>
        <option value="Rio Grande do Sul">Rio Grande do Sul</option>
        <option value="Rondônia">Rondônia</option>
        <option value="Roraima">Roraima</option>
        <option value="Santa Catarina">Santa Catarina</option>
        <option value="São Paulo">São Paulo</option>
        <option value="Sergipe">Sergipe</option>
        <option value="Tocantins">Tocantins</option>
      </select>
      <input type="submit" class="btn btn-primary" value="Verificar">
  </form>

  <?php else: ?>
   <div class="flex">
      <h1>Região: <?= $region ?></h1>
      <form action="" method="get">
        <input class="btn btn-primary" type="submit" value="Voltar">
      </form>
   </div>
  <?php endif; ?>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>

