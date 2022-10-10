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

CREATE TABLE servico ( 
    id_servico int NOT NULL AUTO_INCREMENT, 
    nome varchar(100) NOT NULL, 
    preco int NOT NULL, 
    primary key(id_servico) 
);

INSERT INTO adm (nome, email, senha)
VALUES ('admin','admin@admin.com', 'admincdb');

INSERT INTO cliente (nome, email, senha)
VALUES ('LUIZ','luiz@g.com', '123');

INSERT INTO funcionario (nome, email, senha)
VALUES ('funcionario','fun@g.com', '123');