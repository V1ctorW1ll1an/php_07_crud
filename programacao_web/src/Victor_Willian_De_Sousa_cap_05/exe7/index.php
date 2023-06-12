<!DOCTYPE html>
<html>
<head>
	<title>Questionário sobre dados pessoais</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.6.22/css/uikit.min.css">
</head>
<body>

	<div class="uk-container uk-margin-large-top">
		<h1 class="uk-heading-medium uk-margin-bottom">Questionário sobre dados pessoais</h1>

		<form method="POST" action="salvar.php">
			<fieldset class="uk-fieldset">
				<legend class="uk-legend uk-margin-bottom">Dados pessoais:</legend>

				<div class="uk-margin">
					<label class="uk-form-label" for="nome">Nome:</label>
					<div class="uk-form-controls">
						<input class="uk-input" type="text" id="nome" name="nome" required>
					</div>
				</div>

				<div class="uk-margin">
					<label class="uk-form-label" for="email">E-mail:</label>
					<div class="uk-form-controls">
						<input class="uk-input" type="email" id="email" name="email" required>
					</div>
				</div>

				<div class="uk-margin">
					<label class="uk-form-label" for="idade">Idade:</label>
					<div class="uk-form-controls">
						<input class="uk-input" type="number" id="idade" name="idade" required>
					</div>
				</div>

				<div class="uk-margin">
					<label class="uk-form-label" for="sexo">Sexo:</label>
					<div class="uk-form-controls">
						<select class="uk-select" id="sexo" name="sexo" required>
							<option value="">Selecione uma opção</option>
							<option value="M">Masculino</option>
							<option value="F">Feminino</option>
							<option value="O">Outro</option>
						</select>
					</div>
				</div>

			</fieldset>

			<button class="uk-button uk-button-primary" type="submit">Salvar respostas</button>
		</form>

	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.6.22/js/uikit.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.6.22/js/uikit-icons.min.js"></script>
</body>
</html>
