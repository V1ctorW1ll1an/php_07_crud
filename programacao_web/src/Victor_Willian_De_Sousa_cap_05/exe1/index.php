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
		<h1>Verificar idade para votar</h1>
		<form action="verificar_idade.php" method="post">
			<div class="input-field">
				<input type="text" id="nome" name="nome" required>
				<label for="nome">Nome:</label>
			</div>
			<div class="input-field">
				<input type="number" id="idade" name="idade" required>
				<label for="idade">Idade:</label>
			</div>
			<button class="btn waves-effect waves-light" type="submit">Verificar</button>
		</form>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>