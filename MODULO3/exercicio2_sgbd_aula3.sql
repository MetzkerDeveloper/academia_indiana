-- Vamos pensar como seria o MER e a criação do SQL de um banco de dados,
-- no caso somos uma empresa de recursos humanos que administra diversas 
-- empresas e seus funcionários.
-- Preciso ter os endereços das empresas e de seus funcionários e também preciso 
-- ter os cargos de cada funcionário.

-- criando banco de dados
CREATE DATABASE controle_empresas;

-- selecionando o banco de dados
USE controle_empresas;

-- tabela empresas

CREATE TABLE empresas(
id INT(11) NOT NULL AUTO_INCREMENT,
nome VARCHAR(255),
cnpj CHAR(14), -- 25102146000179
ddd CHAR(2),
telefone VARCHAR(30),
endereco VARCHAR(255),
bairro VARCHAR(255),
numero INT(11) NOT NULL,
estado CHAR(2),
PRIMARY KEY (id)
);

ALTER TABLE empresas ADD UNIQUE (cnpj); -- Chave unica para o CNPJ  pois posso ter apenas 1 CNPJ por empresa

INSERT INTO empresas (nome,cnpj,ddd,telefone,endereco,bairro,numero,estado) VALUES ('Farmacia Indiana','25102146000179','33','35291300', 'Av Mario Cordeiro',
'Jardim Serra Verde','1910','MG');

SELECT * FROM empresas;
-- tabela funcionarios

CREATE TABLE funcionarios (
id INT(11) NOT NULL AUTO_INCREMENT,
nome VARCHAR(255),
cpf CHAR(11)
idade INT(2),
ddd CHAR(2),
telefone VARCHAR(30),
endereco VARCHAR(255),
bairro VARCHAR(255),
numero INT(11) NOT NULL,
estado CHAR(2),
situacao INT(2) NOT NULL CHECK (situacao = 1 OR situacao = 0), -- situacao 0 = funcionario demitido e 1 funcionario ativo
PRIMARY KEY (id),
);
ALTER TABLE funcionarios ADD UNIQUE (cpf); -- Chave unica para o CPF do funcionario pois posso ter apenas 1 CPF por pessoa

INSERT INTO funcionarios (nome, cpf,idade,ddd,telefone,endereco,bairro,numero,estado, situacao) VALUES ('Elon Musk','12345678910','43','33','999990000',
'Av Visconde do Rio Branco','Centro','10','SP','1');
INSERT INTO funcionarios (nome, cpf,idade,ddd,telefone,endereco,bairro,numero,estado, situacao) VALUES ('Mark Zuckemberg','10987654321','45','33','999991111',
'Av Brasil','Centro','1150','SP','1');
INSERT INTO funcionarios (nome, cpf,idade,ddd,telefone,endereco,bairro,numero,estado, situacao) VALUES ('Nicolas Tesla','25814736910','70','73','999992222',
'Av Brasil','Centro','1150','BA','1');


SELECT * FROM funcionarios;
-- tabela cargos

CREATE TABLE cargos (
id INT(11) NOT NULL AUTO_INCREMENT,
nome VARCHAR(255),
setor VARCHAR(255),
salario VARCHAR(255),
descricao VARCHAR(255),
PRIMARY KEY (id)
);

INSERT INTO cargos (nome, setor,salario, descricao) VALUES ('Gerente','Tecnologia da Informacao','20000','Gerente geral da area de TI');
INSERT INTO cargos (nome, setor,salario, descricao) VALUES ('Desenvolvedor Senior','Tecnologia da Informacao','15000','Desenvolve sistemas e coordena equipe');
INSERT INTO cargos (nome, setor,salario, descricao) VALUES ('Desenvolvedor Junior','Tecnologia da Informacao','4500','Desenvolvedor de sistemas');

SELECT * FROM cargos;

-- tabela funcionarios_empresas

CREATE TABLE funcionarios_empresas (
id INT(11) NOT NULL AUTO_INCREMENT,
id_funcionario INT(11) NOT NULL,
id_empresa INT(11) NOT NULL,
PRIMARY KEY(id),
FOREIGN KEY (id_funcionario) REFERENCES funcionarios(id),
FOREIGN KEY (id_empresa) REFERENCES empresas(id)
);

INSERT INTO funcionarios_empresas (id_funcionario,id_empresa) VALUES (1,1);
INSERT INTO funcionarios_empresas (id_funcionario,id_empresa) VALUES (2,1);
INSERT INTO funcionarios_empresas (id_funcionario,id_empresa) VALUES (3,1);

SELECT * FROM funcionarios_empresas;


-- tabela cargos_funcionarios

CREATE TABLE cargos_funcionarios (
id INT(11) NOT NULL AUTO_INCREMENT,
id_funcionario INT(11) NOT NULL,
id_cargo INT(11) NOT NULL,
PRIMARY KEY(id),
FOREIGN KEY (id_funcionario) REFERENCES funcionarios(id),
FOREIGN KEY (id_cargo) REFERENCES cargos(id)
);

INSERT INTO cargos_funcionarios (id_funcionario,id_cargo) VALUES (1,1);
INSERT INTO cargos_funcionarios (id_funcionario,id_cargo) VALUES (2,3);
INSERT INTO cargos_funcionarios (id_funcionario,id_cargo) VALUES (3,2);

SELECT * FROM cargos_funcionarios;

-- selecionando funcionarios por empresa

SELECT funcionarios_empresas.id_funcionario, funcionarios.nome AS nome_funcionario, empresas.nome AS nome_empresa FROM funcionarios_empresas
LEFT JOIN funcionarios ON funcionarios.id = funcionarios_empresas.id_funcionario 
LEFT JOIN empresas ON empresas.id = funcionarios_empresas.id_empresa WHERE empresas.nome LIKE 'Far%';

-- selecionando funcionario por cargo
SELECT cargos_funcionarios.id_funcionario, funcionarios.nome AS nome_funcionario, cargos_funcionarios.id_cargo, cargos.nome AS cargo_funcionario
FROM cargos_funcionarios LEFT JOIN funcionarios ON funcionarios.id = cargos_funcionarios.id_funcionario
LEFT JOIN cargos ON cargos.id = cargos_funcionarios.id_cargo WHERE cargos.nome LIKE 'Dese%';

-- contando quantidades de funcionarios da empresa
SELECT COUNT(id_funcionario) FROM funcionarios_empresas WHERE id_empresa = 1;