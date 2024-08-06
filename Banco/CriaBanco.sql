DROP DATABASE IF EXISTS CARROCINHA;
CREATE DATABASE IF NOT EXISTS CARROCINHA;
USE CARROCINHA;

CREATE TABLE Cidade
(
    id INT AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    estado VARCHAR(002),
    PRIMARY KEY(id)
);

CREATE TABLE Pessoa
(
    id INT AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100),
    endereco VARCHAR(100),
    bairro VARCHAR(100),
    id_cidade INT,
    cep VARCHAR(100),
    PRIMARY KEY(id),
    CONSTRAINT FK_PessoaCidade
        FOREIGN KEY(id_cidade) REFERENCES Cidade(id)
);

CREATE TABLE Animal
(
    id INT AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    especie VARCHAR(100),
    raca VARCHAR(100),
    idade VARCHAR(100),
    castrado BOOLEAN,
    id_pessoa INT,
    PRIMARY KEY(id),
    CONSTRAINT FK_AnimalPessoa
        FOREIGN KEY(id_pessoa) REFERENCES Pessoa(id)
);