CREATE DATABASE cavanhaque;

CREATE USER 'dev'@'localhost' IDENTIFIED BY '123'; 
GRANT ALL PRIVILEGES ON cavanhaque.* TO 'dev'@'localhost';

CREATE TABLE usuario ( 
    id int NOT NULL AUTO_INCREMENT, 
    nome varchar(100) NOT NULL, 
    email varchar(100) NOT NULL, 
    senha varchar(50) NOT NULL, 
    primary key(id) 
);

INSERT INTO usuario (nome, email, senha)
VALUES ('admin','admin@admicavanhaque.com.cdb', 'cdb0108');

INSERT INTO usuario (nome, email, senha)
VALUES ('LUIZ','luiz@g.com', '123');