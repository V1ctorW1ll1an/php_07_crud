<!DOCTYPE html>
<html>
<head>
  <title>Números Pares</title>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
</head>
<body>

  <div class="ui container">
    <h1 class="ui header">Números Pares</h1>
    
    <?php
      $numero1 = $_POST["numero1"];
      $numero2 = $_POST["numero2"];
      
      echo "<h2 class='ui header'>Números Pares Entre $numero1 e $numero2</h2>";
      
      for ($i = $numero1 + 1; $i < $numero2; $i++) {
        if ($i % 2 == 0) {
          echo "<div class='ui label'>$i</div>";
        }
      }
    ?>
    
  </div>

</body>
</html>
