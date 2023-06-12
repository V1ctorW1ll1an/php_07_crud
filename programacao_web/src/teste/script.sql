
-- Cria o banco de dados "exemplo01"
CREATE DATABASE exemplo01;


-- Cria a tabela "tbautor"
CREATE TABLE tbautor (
  Id SERIAL PRIMARY KEY,
  Nome VARCHAR(200) NOT NULL,
  Nascimento DATE NULL
);

INSERT INTO tbautor (Nome, Nascimento)
VALUES ('kaka gaucho', '1980-01-01');

