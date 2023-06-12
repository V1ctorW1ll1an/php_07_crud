<?php

$resultado = '';

if( $_SERVER["REQUEST_METHOD"] === "POST" ){
  if($_POST['numero'] !== ''){

    $numero = $_POST['numero'];
    $operacao = $_POST['operacao'];

    switch($operacao){
      case 'dobro':
        $resultado = "O dobro de $numero é " . $numero * 2 . ".";
        break;
      case 'cubo':
        $resultado = "O cubo de $numero é " . $numero * $numero * $numero . ".";
        break;
      case 'raiz':
        $resultado = "A raiz quadrada de $numero é " . sqrt($numero) . ".";
        break;
    }
  }
  else {
    $resultado = 'Informe um numero';
  }
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

  <form action="" method="post">
    <div class="d-flex">
      <span>Numero: </span>
      <input type="number" name="numero" id="numero">
    </div>
    <div class="mt-3">
      <span>Operacao</span>
      <!-- radio -->
      <div class="d-flex">
        <input type="radio" name="operacao" id="dobro" checked value="dobro" class="me-1">
        <span class="me-3">Dobro</span>

        <input type="radio" name="operacao" id="cubo" value="cubo" class="me-1">
        <span class="me-3">Cubo</span>

        <input type="radio" name="operacao" id="raiz" value="raiz" class="me-1">
        <span class="me-3">Raiz Quadrada </span>
      </div>
    </div>
    <div class="mt-3">
      <input type="submit" class="btn btn-primary" value="Calcular">
    </div>
  </form>

  <?php if($resultado): ?>
    <div class="mt-3">
      <span>Resultado: </span>
      <span><?php echo $resultado; ?></span>
    </div>
  <?php endif; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>

