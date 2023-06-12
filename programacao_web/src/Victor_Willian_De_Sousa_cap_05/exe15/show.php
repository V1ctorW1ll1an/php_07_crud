<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário Processado</title>
</head>
<body>
	<h1>Formulário Processado</h1>

	<?php
		$codigo = $_POST['codigo'];
		$nome = $_POST['nome'];
		$faixa_etaria = $_POST['faixa_etaria'];

		echo "<p>Código: $codigo</p>";
		echo "<p>Nome: $nome</p>";
		echo "<p>Faixa etária: $faixa_etaria</p>";
	?>
	
</body>
</html>
