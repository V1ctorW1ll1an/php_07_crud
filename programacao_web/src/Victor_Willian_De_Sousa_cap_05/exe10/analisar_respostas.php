<!DOCTYPE html>
<html>
<head>
	<title>Relatório de respostas</title>
</head>
<body>

	<h1>Relatório de respostas</h1>

	<?php

		// Função para verificar se a resposta está correta
		function verificar_resposta($resposta_correta, $resposta_usuario) {
			if ($resposta_correta == $resposta_usuario) {
				return true;
			} else {
				return false;
			}
		}

		// Array com as respostas corretas
		$respostas_corretas = array("c", "a", "b", "b", "d");

		// Inicializa as variáveis de contagem
		$acertos = 0;
		$erros = 0;
		$nao_respondidas = 0;

		// Verifica as respostas do usuário
		for ($i=1; $i<=5; $i++) {
			if (isset($_POST["q".$i])) {
				$resposta_usuario = $_POST["q".$i];
				if (verificar_resposta($respostas_corretas[$i-1], $resposta_usuario)) {
					$acertos++;
				} else {
					$erros++;
				}
			} else {
				$nao_respondidas++;
			}
		}

		// Exibe o relatório de respostas
		echo "<p>Acertos: ".$acertos."</p>";
		echo "<p>Erros: ".$erros."</p>";
		echo "<p>Não respondidas: ".$nao_respondidas."</p>";

		// Calcula a porcentagem de acertos
		$porcentagem = ($acertos / 5) * 100;

		// Exibe a porcentagem de acertos
		echo "<p>Porcentagem de acertos: ".number_format($porcentagem, 2)."%</p>";

	?>

</body>
</html>
