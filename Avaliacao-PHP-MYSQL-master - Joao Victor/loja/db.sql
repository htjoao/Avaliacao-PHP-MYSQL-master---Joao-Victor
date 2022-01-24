"MYSQL:
1)	Crie DUAS as Tabelas para Produtos e Preço.
2)	Tabela de Produtos, Coluna: IDPROD, NOME, COR;
3)	Tabela de Preço, Coluna: IDPRECO, PRECO ( com 2 casas Decimais);
"

CREATE DATABASE ttloja_tec ;

USE ttloja_tec;

CREATE TABLE ttloja_tec . produtos(
idprod int UNSIGNED NOT NULL PRIMARY KEY,
nome varchar(50) NOT NULL,
cor varchar(10)
);

CREATE TABLE ttloja_tec . preços(
idprecos int UNSIGNED NOT NULL,
preco decimal(10,2) NULL,
PRIMARY KEY (idprecos)
);

INSERT INTO ttloja_tec . produtos(idprod, nome, cor) VALUES
(170, 'Headphone', 'vermelha'),
(171, 'Headphone', 'azul'),
(172, 'Headphone', 'amarela'),

(180, 'Mouse', 'vermelha'),
(181, 'Mouse', 'azul'),
(182, 'Mouse', 'amarela'),

(190, 'Teclado', 'vermelha'),
(191, 'Teclado', 'azul'),
(192, 'Teclado', 'amarela'),

(200, 'Webcam', 'vermelha'),
(201, 'Webcam', 'azul'),
(202, 'Webcam', 'amarela');

INSERT INTO ttloja_tec . preços(idprecos, preco) VALUES

(170, 70.00),
(171, 70.00),
(172, 70.00),

(180, 40.00),
(181, 40.00),
(182, 40.00),

(190, 30.00),
(191, 30.00),
(192, 30.00),

(200, 60.00),
(201, 60.00),
(202, 60.00);