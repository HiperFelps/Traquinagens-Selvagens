create database traquinagens;
use traquinagens;

CREATE TABLE usuario (
    id INT NOT NULL AUTO_INCREMENT,
    email VARCHAR(255) NOT NULL,
    senha VARCHAR(20) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE administrador (
    id INT NOT NULL AUTO_INCREMENT,
    email VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    PRIMARY KEY (id)
);
insert into administrador (email, senha)
values ("adm@gmail.com", "1234");

 
