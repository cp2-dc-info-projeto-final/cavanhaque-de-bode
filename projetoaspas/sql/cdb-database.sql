CREATE DATABASE barbearia-cdb;

CREATE USER 'dev'@'localhost' IDENTIFIED BY '123'; 
GRANT ALL PRIVILEGES ON barbearia-cdb.* TO 'dev'@'localhost';

CREATE TABLE cliente ( 
    id int NOT NULL AUTO_INCREMENT, 
    nome varchar(100) NOT NULL, 
    email varchar(100) NOT NULL, 
    senha varchar(255) NOT NULL, 
    primary key(id) 
);

INSERT INTO cliente (nome, email, senha)
VALUES ('admin','admin@admicavanhaque.com.cdb', 'cdb0108');

INSERT INTO cliente (nome, email, senha)
VALUES ('LUIZ','luiz@g.com', '123');

INSERT INTO cliente (nome, email, senha)
VALUES ('teste','teste@g.com', 'teste');