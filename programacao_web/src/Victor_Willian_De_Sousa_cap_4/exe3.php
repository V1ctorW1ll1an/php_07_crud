<!-- tabuada -->


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
      <span class="me-3">Escolha um valor: </span>
      <select name="numero" id="numero" class="me-3">
        <?php for($i = 1; $i <= 10; $i++): ?>
          <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
        <?php endfor; ?>
      </select>

      <input class="me-2" type="submit" value="Tabuada">
    </div>
  </form>

  <?php if($resultado): ?>
    <div class="mt-3">
      <span>Resultado: </span>
      <span><?php echo $resultado; ?></span>
    </div>
  <?php endif; ?>

<?php

if( $_SERVER["REQUEST_METHOD"] === "POST" ){
    $numero = $_POST['numero'];

    echo "<h3>Tabuada do $numero</h3>";

    for($i = 1; $i <= 10; $i++){
      echo "<span>$numero x $i = " . $numero * $i . "</span><br>";
    }
}
?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>

