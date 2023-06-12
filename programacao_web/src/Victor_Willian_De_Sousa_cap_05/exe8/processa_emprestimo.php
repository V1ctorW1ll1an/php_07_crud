<?php
// Recebe as informações do formulário
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$salario_anual = $_POST['salario_anual'];

// Calcula a meta idade
$meta_idade = floor($idade / 10) - 1;

// Verifica se a meta idade é menor que 0
if ($meta_idade < 0) {
  echo "Desculpe, você é muito jovem para obter um empréstimo.";
} else {
  // Calcula as metas de salário e empréstimo
  $meta_salario = $salario_anual / 5;
  $meta_emprestimo = $meta_idade * $meta_salario;

  // Exibe o resultado
  echo "Olá $nome, o valor máximo que você pode obter em um empréstimo é R$" . number_format($meta_emprestimo, 2, ',', '.');
}
?>
