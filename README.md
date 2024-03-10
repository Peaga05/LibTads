
# LibTads - README
Este projeto é uma aplicação desenvolvida utilizando PHP, HTML, CSS, Bootstrap, jQuery e MySQL. O objetivo desta aplicação é gerenciar livros, autores, gêneros, usuários e empréstimos em uma biblioteca.

# Estrutura do Banco de Dados
Para iniciar o uso deste projeto, é necessário criar o banco de dados e suas tabelas. Abaixo está o script SQL para criar o banco de dados LibTadsDb e suas tabelas:

CREATE DATABASE LibTadsDb;

USE LibTadsDb;

CREATE TABLE Autor (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    creationTime DATETIME NOT NULL,
    isDeleted TINYINT(1) NOT NULL
);

CREATE TABLE Genero (
    id INT AUTO_INCREMENT PRIMARY KEY,
    descricao VARCHAR(255) NOT NULL,
    creationTime DATETIME NOT NULL,
    isDeleted TINYINT(1) NOT NULL
);

CREATE TABLE Livro (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    isbn VARCHAR(255),
    quantidade INT NOT NULL,
    quantidadeDisponivel INT NOT NULL,
    qrCode VARCHAR(255) NOT NULL,
    creationTime DATETIME NOT NULL,
    isDeleted TINYINT(1) NOT NULL,
    autorId INT NOT NULL,
    generoId INT NOT NULL,
    FOREIGN KEY (autorId) REFERENCES Autor(id),
    FOREIGN KEY (generoId) REFERENCES Genero(id)
);

CREATE TABLE Usuario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    sobrenome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    senha VARCHAR(255) NOT NULL,
    matricula VARCHAR(255),
    creationTime DATETIME NOT NULL,
    isDeleted TINYINT(1) NOT NULL
);

CREATE TABLE Emprestimo (
    id INT AUTO_INCREMENT PRIMARY KEY,
    dataEmprestimo DATETIME NOT NULL,
    dataDevolucao DATETIME,
    dataPrevisao datetime,
    isDeleted TINYINT(1) NOT NULL,
    livroId INT NOT NULL,
    userId INT NOT NULL,
    FOREIGN KEY (livroId) REFERENCES Livro(id),
    FOREIGN KEY (userId) REFERENCES Usuario(id)
);