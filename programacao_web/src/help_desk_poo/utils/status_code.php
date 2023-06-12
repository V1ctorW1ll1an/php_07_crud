<?php

// Define um array com varios codigos e para cada codigo uma mensagem relacionada
// O codigo é a chave do array e a mensagem é o valor

$status_code = [
  // o prefixo s significa sucesso e o prefixo e significa erro

  "e001" => "Erro ao conectar ao banco de dados",
  "e002" => "Erro ao Realizar login. Usuário ou senha inválidos",
  "e003" => "Erro ao cadastrar usuário",
  "e004" => "Erro ao cadastrar chamado",
  "e005" => "Erro ao cadastrar categoria",
  "e006" => "Erro ao atualizar chamado",
  "e007" => "Erro ao atualizar categoria",
  "e008" => "Erro ao atualizar usuário",
  "e009" => "Erro ao deletar chamado",
  "e010" => "Erro ao deletar categoria",
  "e011" => "Erro ao deletar usuário",
  "e012" => "Erro ao acessar páginas internas, acesso negado, por favor realize o login antes de acessar essa página",
  "e013" => "Por favor, preencha todos os campos",
  "e014" => "Somente admin tem acesso a essa página",
  "e015" => "Erro ao excluir usuário, o usuário está sendo referenciado em um chamado",
  "e016" => "Erro ao excluir categoria, a categoria está sendo referenciada em um chamado",

  "s001" => "Usuário cadastrado com sucesso",
  "s002" => "Chamado cadastrado com sucesso",
  "s003" => "Categoria cadastrada com sucesso",
  "s004" => "Chamado atualizado com sucesso",
  "s005" => "Categoria atualizada com sucesso",
  "s006" => "Usuário atualizado com sucesso",
  "s007" => "Chamado deletado com sucesso",
  "s008" => "Categoria deletada com sucesso",
  "s009" => "Usuário deletado com sucesso",
];
