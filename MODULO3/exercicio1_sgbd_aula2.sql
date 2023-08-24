-- Criando DB concessionaria

CREATE DATABASE concessionaria;

USE concessionaria;

-- criação da tabela lojas

CREATE TABLE lojas(
id INT(11) NOT NULL AUTO_INCREMENT,
nome VARCHAR(255) NOT NULL,
endereco VARCHAR(255),
PRIMARY KEY(id)
);

-- criação da tabela carros

CREATE TABLE carros (
id INT(11) NOT NULL AUTO_INCREMENT,
nome VARCHAR(255),
cor VARCHAR(255),
portas INT NOT NULL,
potencia INT(11) NOT null,
PRIMARY KEY (id)
);

-- criação da tabela marcas

CREATE TABLE marcas (
id INT(11) NOT NULL AUTO_INCREMENT,
nome VARCHAR(255),
descricao TEXT,
PRIMARY KEY(id)
);

-- criação da tabela carros_marcas

CREATE TABLE carros_marcas (
id INT(11) NOT NULL AUTO_INCREMENT,
id_carro INT(11) NOT NULL,
id_marca INT(11) NOT NULL,
PRIMARY KEY (id),
FOREIGN KEY (id_carro) REFERENCES carros(id),
FOREIGN KEY(id_marca) REFERENCES marcas(id)
);

-- criação da tabela carros_lojas

CREATE TABLE carros_lojas(
id INT(11) NOT NULL AUTO_INCREMENT,
id_carro INT(11) NOT NULL,
id_loja INT(11) NOT NULL,
PRIMARY KEY(id),
FOREIGN KEY(id_carro) REFERENCES carros(id),
FOREIGN KEY (id_loja) REFERENCES lojas(id)
);

-- comando para inserir os dados na tabela carros

INSERT INTO carros (nome,cor,portas,potencia) VALUES ('Camaro','Amarelo','2','461'); -- Chevrolet (marca)
INSERT INTO carros (nome,cor,portas,potencia) VALUES ('Italia','Vermelha','2','562'); -- Ferrari
INSERT INTO carros (nome,cor,portas,potencia) VALUES ('Gol Quadrado','Azul','2','75'); -- Volkswagen
INSERT INTO carros (nome,cor,portas,potencia) VALUES ('Classic','Cinza','4','78'); -- Chevrolet
INSERT INTO carros (nome,cor,portas,potencia) VALUES ('Fiesta','Preto', '4', '130'); -- Ford
INSERT INTO carros (nome,cor,portas,potencia) VALUES ('Golf','Cinza','4','104'); -- Volkswagen

SELECT * FROM carros;

-- inserindo dados na tabela lojas
INSERT INTO lojas(nome,endereco) VALUES ('WM Auto 1', 'Rua um,centro 10,Teofilo Otoni');
INSERT INTO lojas(nome,endereco) VALUES ('WM Auto 2', 'Av. Brasil, 410, Ipatinga');
INSERT INTO lojas(nome,endereco) VALUES ('WM Auto 3', 'Av. Brasil, 1769,Jardim America, Sao Paulo');

SELECT * FROM lojas;


-- inserindo dados na tabela marcas

INSERT INTO marcas (nome,descricao) VALUES ('Chevrolet','A Chevrolet, também conhecida como Chevy, é uma divisão da General Motors Company (GM), conhecida por uma ampla gama de veículos,  desde carros compactos até caminhões de grande porte.');
INSERT INTO marcas (nome,descricao) VALUES ('Ferrari','A Ferrari, fundada em 1947 por Enzo Ferrari, é uma icônica fabricante italiana de supercarros, sinônimo de luxo, velocidade e excelência no automobilismo.');
INSERT INTO marcas (nome,descricao) VALUES ('Ford','A Ford, fundada em 1903 por Henry Ford, é pioneira na produção em massa de automóveis, destacando-se pela inovação e pela icônica linha de veículos.');
INSERT INTO marcas (nome,descricao) VALUES ('Volkswagen','A Volkswagen, fundada em 1937, é uma gigante automobilística alemã, conhecida pelo Fusca e pelo Golf, combinando tradição, inovação e engenharia de ponta.');

SELECT * FROM marcas;

INSERT INTO carros_lojas(id_carro, id_loja) VALUES (1,3);
INSERT INTO carros_lojas(id_carro, id_loja) VALUES (2,3);
INSERT INTO carros_lojas(id_carro, id_loja) VALUES (3,1);
INSERT INTO carros_lojas(id_carro, id_loja) VALUES (4,2);
INSERT INTO carros_lojas(id_carro, id_loja) VALUES (5,2);
INSERT INTO carros_lojas(id_carro, id_loja) VALUES (6,1);

SELECT * FROM carros_lojas;

INSERT INTO carros_marcas(id_carro, id_marca) VALUES (1,1);
INSERT INTO carros_marcas(id_carro, id_marca) VALUES (2,2);
INSERT INTO carros_marcas(id_carro, id_marca) VALUES (3,4);
INSERT INTO carros_marcas(id_carro, id_marca) VALUES (4,1);
INSERT INTO carros_marcas(id_carro, id_marca) VALUES (5,3);
INSERT INTO carros_marcas(id_carro, id_marca) VALUES (6,4);

SELECT * FROM carros_marcas;

-- buscando o carro de acordo com que o usuário digita
SELECT * FROM carros WHERE nome LIKE 'ca%';

-- buscando o carro de acordo a marca que o usuário digita

SELECT carros_marcas.id_carro, carros.nome AS nome_carro, carros_marcas.id_marca, marcas.nome AS nome_marca
FROM carros_marcas LEFT JOIN carros ON carros.id = carros_marcas.id_carro
LEFT JOIN marcas ON marcas.id = carros_marcas.id_marca WHERE marcas.nome LIKE 'vol%';

-- Retornar carros de determinada loja

SELECT carros_lojas.id_carro, carros.nome AS nome_carro, carros_lojas.id_loja, lojas.nome AS nome_loja, lojas.endereco FROM carros_lojas 
LEFT JOIN carros ON carros.id = carros_lojas.id_carro
LEFT JOIN lojas ON lojas.id = carros_lojas.id_loja WHERE lojas.id = 1;

-- Retornar marca de determinado carro

SELECT carros_marcas.id_carro, carros.nome AS nome_carro, carros_marcas.id_marca, marcas.nome AS nome_marca
FROM carros_marcas LEFT JOIN carros ON carros.id = carros_marcas.id_carro
LEFT JOIN marcas ON marcas.id = carros_marcas.id_marca WHERE carros.id = 1;


