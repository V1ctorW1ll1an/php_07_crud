<!DOCTYPE html>
<html>
<head>
	<title>Resultado da Calculadora de Média da Turma</title>
</head>
<body>
	<h1>Resultado da Calculadora de Média da Turma</h1>

	<?php
		$nomes = $_POST['nome'];
		$notas = $_POST['nota'];
		$total_notas = array_sum($notas);
		$media = $total_notas / count($notas);

		echo "<p>A média da turma é: " . round($media, 2) . "</p>";

		echo "<p>Alunos com nota abaixo da média:</p>";
		echo "<ul>";
		for ($i=0; $i<count($notas); $i++) {
			if ($notas[$i] < $media) {
				echo "<li>" . $nomes[$i] . "</li>";
			}
		}
		echo "</ul>";
	?>
</body>
</html>
