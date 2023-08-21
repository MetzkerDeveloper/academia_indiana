 -- INICIO CRIACAO banco de Dados
 
CREATE DATABASE universidades;

USE universidades;

-- Ciracao de tabala

CREATE TABLE cursos(
id INT(11) NOT NULL AUTO_INCREMENT,
nome VARCHAR(255) NOT NULL,
data_criacao DATE,
PRIMARY KEY (id)
);

-- Comando para excluir a tabela
-- DROP TABLE cursos;

CREATE TABLE disciplinas (
id INT NOT NULL AUTO_INCREMENT,
nome VARCHAR(255) NOT NULL,
PRIMARY KEY(id)
)

-- Criação de tabela com referencia a outras tabelas
CREATE TABLE cursos_disciplinas(
id INT NOT NULL AUTO_INCREMENT,
id_curso INT NOT NULL,
id_disciplina INT NOT NULL,
PRIMARY KEY(id),
FOREIGN KEY (id_curso) REFERENCES cursos(id),
FOREIGN KEY (id_disciplina) REFERENCES disciplinas(id)
);

-- Criação de colunos
-- ALTER TABLE cursos ADD carga_horaria VARCHAR(255)

-- ADICIONANDO CURSOS
 
 INSERT INTO cursos (nome,data_criacao) VALUES ('Sistema de Informação', '2023-08-21');
 INSERT INTO cursos (nome,data_criacao) VALUES ('Ciência da Computação', '2023-08-21');

-- ADICIONANDO DISCIPLINAS

INSERT INTO disciplinas (nome) VALUES ('Lógica de Programação');
INSERT INTO disciplinas (nome) VALUES ('Matemática');

SELECT * FROM cursos_disciplinas;

INSERT INTO cursos_disciplinas (id_curso,id_disciplina) VALUES (1,1);
INSERT INTO cursos_disciplinas(id_curso, id_disciplina) VALUES(2,2);

SELECT * FROM cursos_disciplinas WHERE id_curso = 2;