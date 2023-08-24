-- CRIANDO DB STUDIOS;

CREATE DATABASE studios;
USE studios;

-- criando tabela atores
CREATE TABLE atores (
id INT(11) NOT NULL AUTO_INCREMENT,
nome VARCHAR(255) NOT NULL,
sobre_nome VARCHAR(255),
ano_nascimento YEAR,
PRIMARY KEY(id) 
);

-- criando tabela filmes
CREATE TABLE filmes(
id INT(11) NOT NULL AUTO_INCREMENT,
nome VARCHAR(255),
ano YEAR,
PRIMARY KEY(id)
);

-- criando tabela generos
CREATE TABLE generos(
id INT(11) NOT NULL AUTO_INCREMENT,
nome VARCHAR(255),
PRIMARY KEY(id)
);


-- criando tabela filmes_generos

CREATE TABLE filmes_generos(
id INT(11) NOT NULL AUTO_INCREMENT,
id_filme INT (11) NOT NULL,
id_genero INT(11) NOT NULL,
PRIMARY KEY(id),
FOREIGN KEY(id_filme) REFERENCES filmes(id),
FOREIGN KEY(id_genero) REFERENCES generos(id)
);

-- criando tabela filmes_atores

CREATE TABLE filmes_atores(
id INT(11) NOT NULL AUTO_INCREMENT,
id_filme INT(11) NOT NULL,
id_ator INT(11) NOT NULL,
PRIMARY KEY (id),
FOREIGN KEY (id_filme) REFERENCES filmes(id),
FOREIGN KEY(id_ator) REFERENCES atores(id)
);


-- comando para inserir os dados dos atores na tabela atores
 
INSERT INTO atores (nome,sobre_nome,ano_nascimento) VALUES ('Vin','Diesel', '1967');-- velozes e furiosos caçador de bruxa
INSERT INTO atores (nome,sobre_nome,ano_nascimento) VALUES ('Dwayne','Johnson', '1972'); -- jumaji
INSERT INTO atores (nome,sobre_nome,ano_nascimento) VALUES ('Paul','Walker', '1973'); -- velozes e furiosos
INSERT INTO atores (nome,sobre_nome,ano_nascimento) VALUES ('Sam','Worthington', '1976'); -- avatar
INSERT INTO atores (nome,sobre_nome,ano_nascimento) VALUES ('Daniel','Radcliffe', '1989'); -- harry potter
INSERT INTO atores (nome,sobre_nome,ano_nascimento) VALUES ('Hayden','Christensen', '1981'); -- star wars
INSERT INTO atores (nome,sobre_nome,ano_nascimento) VALUES ('Chris','Pine', '1980'); -- star track

SELECT * FROM atores;

-- inserindo dados filmes
INSERT INTO filmes(nome,ano) VALUES ('Velozes e furiosos 4 ','2006');
INSERT INTO filmes(nome,ano) VALUES ('Jumanji','2017');
INSERT INTO filmes(nome,ano) VALUES ('Caçador de Bruxa','2015');
INSERT INTO filmes(nome,ano) VALUES ('Avatar','2009');
INSERT INTO filmes(nome,ano) VALUES ('Harry Potter','1999');
INSERT INTO filmes(nome,ano) VALUES ('Star Wars','2015');
INSERT INTO filmes(nome,ano) VALUES ('Star Trek','2016');

SELECT * FROM filmes;

-- inserindo os generos dos filmes
INSERT INTO generos (nome) VALUES('Ação');
INSERT INTO generos (nome) VALUES('Ficção Científica');
INSERT INTO generos (nome) VALUES('Aventura');
INSERT INTO generos (nome) VALUES('Fantasia');

SELECT * FROM generos;

-- inserindo dados na tabela filmes_generos 
INSERT INTO filmes_generos (id_filme,id_genero) VALUES (1,1);
INSERT INTO filmes_generos (id_filme,id_genero) VALUES (2,3);
INSERT INTO filmes_generos (id_filme,id_genero) VALUES (3,1);
INSERT INTO filmes_generos (id_filme,id_genero) VALUES (4,2);
INSERT INTO filmes_generos (id_filme,id_genero) VALUES (5,4);
INSERT INTO filmes_generos (id_filme,id_genero) VALUES (6,2);
INSERT INTO filmes_generos (id_filme,id_genero) VALUES (7,2);

SELECT * FROM filmes_generos;

INSERT INTO filmes_atores (id_filme,id_ator) VALUES (1,1);
INSERT INTO filmes_atores (id_filme,id_ator) VALUES (1,3);
INSERT INTO filmes_atores (id_filme,id_ator) VALUES (2,2);
INSERT INTO filmes_atores (id_filme,id_ator) VALUES (3,1);
INSERT INTO filmes_atores (id_filme,id_ator) VALUES (4,4);
INSERT INTO filmes_atores (id_filme,id_ator) VALUES (5,5);
INSERT INTO filmes_atores (id_filme,id_ator) VALUES (6,6);
INSERT INTO filmes_atores (id_filme,id_ator) VALUES (7,7);

SELECT * FROM filmes_atores;

-- buscando o filme de acordo com que o usuário digita

SELECT * FROM filmes WHERE nome LIKE 'star%';

-- Retornar todos os filmes e genero do filme

SELECT filmes_generos.id_filme, filmes.nome AS nome_filme, filmes_generos.id_genero, generos.nome AS nome_genero FROM filmes_generos
LEFT JOIN filmes ON filmes.id = filmes_generos.id_filme
LEFT JOIN generos ON generos.id = filmes_generos.id_genero;

-- Retornar filmes por genero Ficção Cientifica ou outro

SELECT filmes_generos.id_filme, filmes.nome AS nome_filme, filmes_generos.id_genero, generos.nome AS nome_genero FROM filmes_generos
LEFT JOIN filmes ON filmes.id = filmes_generos.id_filme
LEFT JOIN generos ON generos.id = filmes_generos.id_genero WHERE generos.id = 2;

-- Retornar todos os filmes e genero do filme, ordenando por nome da tabela genero
SELECT filmes_generos.id_filme, filmes.nome AS nome_filme, filmes_generos.id_genero, generos.nome AS nome_genero FROM filmes_generos
LEFT JOIN filmes ON filmes.id = filmes_generos.id_filme
LEFT JOIN generos ON generos.id = filmes_generos.id_genero ORDER BY nome_genero ASC;

-- seleção tabela atores
SELECT * FROM filmes_atores;

SELECT * FROM filmes_atores WHERE id_filme = 1;

SELECT filmes_atores.id_filme,filmes.nome AS nome_filme, filmes_atores.id_ator,  atores.nome AS nome_ator, atores.sobre_nome
FROM filmes_atores
LEFT JOIN filmes ON filmes.id = filmes_atores.id_filme
LEFT JOIN atores ON atores.id = filmes_atores.id_ator
WHERE filmes_atores.id_filme = 1;
