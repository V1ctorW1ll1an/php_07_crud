<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário Processado</title>
</head>
<body>
	<h1>Formulário Processado</h1>

	<?php
		// Define o fuso horário de Brasília
		date_default_timezone_set('America/Sao_Paulo');

		// Verifica se os campos foram preenchidos
		if (!empty($_POST['codigo']) && !empty($_POST['nome']) && !empty($_POST['faixa_etaria'])) {

			// Atribui os valores enviados para variáveis
			$codigo = $_POST['codigo'];
			$nome = $_POST['nome'];
			$faixa_etaria = $_POST['faixa_etaria'];

			// Mostra a data e a hora
			echo "<p>Data: " . date('d/m/Y') . "</p>";
			echo "<p>Hora: " . date('H:i:s') . "</p>";

			// Mostra os valores enviados
			echo "<p>Código: $codigo</p>";
			echo "<p>Nome: $nome</p>";
			echo "<p>Faixa etária: $faixa_etaria</p>";
			
		} else {
			// Caso algum campo esteja vazio, mostra um erro
			echo "<p>Erro: Todos os campos são obrigatórios.</p>";
		}
	?>
	
</body>
</html>
