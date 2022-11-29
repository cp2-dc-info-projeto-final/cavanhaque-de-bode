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

CREATE TABLE codigos (
    codigo_id int NOT NULL  AUTO_INCREMENT,
    codigo_rec int NOT NULL,
    id_usuario int NOT NULL,
    role_usuario varchar(15),
    PRIMARY KEY(codigo_id)
);

INSERT INTO adm (nome, email, senha)
VALUES ('admin','admin@admin.com', '$2y$10$sN6voC0C.AJvO.yCg.xmU.5knJ3gO6yQmSoizxpt6d.9hXADsXgrW');

INSERT INTO cliente (nome, email, senha)
VALUES ('LUIZ','luiz@g.com', '$2y$10$U1CXan5iXUmIVcIXA2.lsO3eqrBek6cDfgs0minJaBsjpw.80AsfG');

INSERT INTO funcionario (nome, email, senha)
VALUES ('funcionario','fun@g.com', '$2y$10$U1CXan5iXUmIVcIXA2.lsO3eqrBek6cDfgs0minJaBsjpw.80AsfG');

INSERT INTO servico (nome, preco)
VALUES ('servico', 12);