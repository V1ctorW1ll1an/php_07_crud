CREATE TABLE tb_categoria (
  id_categoria SERIAL PRIMARY KEY,
  nome_categoria VARCHAR(100)
);

CREATE TABLE tb_usuario (
  id_usuario SERIAL PRIMARY KEY,
  nome_usuario VARCHAR(50),
  email_usuario VARCHAR(50),
  senha_usuario VARCHAR(20),
  id_perfil INTEGER,
  FOREIGN KEY (id_perfil) REFERENCES tb_perfil(id_perfil)
);

CREATE TABLE tb_perfil (
  id_perfil SERIAL PRIMARY KEY,
  nome_perfil VARCHAR(20)
);

CREATE TABLE tb_chamado (
  id_chamado SERIAL PRIMARY KEY,
  titulo_chamado VARCHAR(100),
  descricao_chamado VARCHAR(300),
  id_categoria INTEGER,
  id_usuario INTEGER,
  FOREIGN KEY (id_categoria) REFERENCES tb_categoria(id_categoria),
  FOREIGN KEY (id_usuario) REFERENCES tb_usuario(id_usuario)
);


INSERT INTO tb_categoria (nome_categoria) VALUES
  ('Hardware'),
  ('Software');

INSERT INTO tb_perfil (nome_perfil) VALUES
  ('Administrador'),
  ('Usuário');

INSERT INTO tb_usuario (nome_usuario, email_usuario, senha_usuario, id_perfil) VALUES
  ('João', 'joao@email.com', '123456', 1),
  ('Maria', 'maria@email.com', 'abcdef', 2);

INSERT INTO tb_chamado (titulo_chamado, descricao_chamado, id_categoria, id_usuario) VALUES
  ('Problema com impressora', 'A impressora não está imprimindo corretamente', 1, 1),
  ('Erro no sistema', 'O sistema está travando ao realizar determinada operação', 2, 2);
