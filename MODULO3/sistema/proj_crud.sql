-- Preciso criar um DB onde tenha o id, nome, marca, ano, data_inc

CREATE DATABASE concessionarias2;

USE concessionarias2;


CREATE TABLE carros (
 id INT(11) NOT NULL AUTO_INCREMENT,
    nome VARCHAR(50),
    marca VARCHAR(50),
    ano CHAR(4),
    data_inc TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY(id)
);

SELECT * FROM carros;
SELECT * FROM carros WHERE marca LIKE 'je%';