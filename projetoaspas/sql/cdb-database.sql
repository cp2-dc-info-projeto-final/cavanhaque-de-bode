CREATE DATABASE barbearia_cdb;

CREATE USER 'dev'@'localhost' IDENTIFIED BY '123'; 
GRANT ALL PRIVILEGES ON barbearia_cdb.* TO 'dev'@'localhost';

CREATE TABLE cliente ( 
    id_cliente int NOT NULL AUTO_INCREMENT, 
    nome varchar(100) NOT NULL, 
    email varchar(100) NOT NULL, 
    senha varchar(255) NOT NULL, 
    primary key(id_cliente) 
);

CREATE TABLE funcionario ( 
    id_funcionario int NOT NULL AUTO_INCREMENT, 
    nome varchar(100) NOT NULL, 
    email varchar(100) NOT NULL, 
    senha varchar(255) NOT NULL, 
    primary key(id_funcionario) 
);

CREATE TABLE adm ( 
    id_adm int NOT NULL AUTO_INCREMENT, 
    nome varchar(100) NOT NULL, 
    email varchar(100) NOT NULL, 
    senha varchar(255) NOT NULL, 
    primary key(id_adm) 
);

INSERT INTO cliente (nome, email, senha)
VALUES ('admin','admin@admicavanhaque.com.cdb', 'cdb0108');

INSERT INTO cliente (nome, email, senha)
VALUES ('LUIZ','luiz@g.com', '123');

INSERT INTO cliente (nome, email, senha)
VALUES ('teste','teste@g.com', 'teste');