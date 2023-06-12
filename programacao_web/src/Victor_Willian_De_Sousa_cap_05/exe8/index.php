<!DOCTYPE html>
<html>
<head>
	<title>Calculadora de Empréstimo</title>
	<!-- Inclui o Skeleton CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.css" integrity="sha512-5fsy+3xG8N/1PV5MIJz9ZsWpkltijBI48gBzQ/Z2eVATePGHOkMIn+xTDHIfTZFVb9GMpflF2wOWItqxAP2oLQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
	<div class="container">
		<h1>Calculadora de Empréstimo</h1>
		<form action="processa_emprestimo.php" method="POST">
			<label for="nome">Nome:</label>
			<input type="text" name="nome" id="nome" required>

			<label for="idade">Idade:</label>
			<input type="number" name="idade" id="idade" required>

			<label for="salario_anual">Salário Anual:</label>
			<input type="number" name="salario_anual" id="salario_anual" required>

			<input type="submit" value="Calcular">
		</form>
	</div>
</body>
</html>
