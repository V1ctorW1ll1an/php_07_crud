<?php
	$nome = $_POST['nome'];
	$idade = $_POST['idade'];
	$mensagem = "";

	if ($idade >= 16) {
		$mensagem = "$nome, você pode votar.";
	} else {
		$mensagem = "$nome, você não pode votar.";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Verificar idade para votar</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<h1><?php echo $mensagem; ?></h1>
		<a class="btn waves-effect waves-light" href="index.php">Voltar</a>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
