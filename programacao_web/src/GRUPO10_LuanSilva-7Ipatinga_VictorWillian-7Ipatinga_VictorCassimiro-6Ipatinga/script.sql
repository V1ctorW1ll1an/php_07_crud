CREATE TABLE tb_usuario (
  id SERIAL PRIMARY KEY,
  nome VARCHAR(50) NOT NULL,
  email VARCHAR(100) NOT NULL,
  senha VARCHAR(32) NOT NULL
);

INSERT INTO tb_usuario (nome, email, senha) VALUES ('admin', 'admin@admin.com', '123');
