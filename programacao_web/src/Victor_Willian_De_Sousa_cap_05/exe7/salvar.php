<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$idade = $_POST['idade'];
$sexo = $_POST['sexo'];

$dados_pessoais = "$nome|$email|$idade|$sexo\n";

$file = fopen('respostas.txt', 'a');
fwrite($file, $dados_pessoais);
fclose($file);

echo "<h1>Respostas salvas com sucesso!</h1>";

?>
