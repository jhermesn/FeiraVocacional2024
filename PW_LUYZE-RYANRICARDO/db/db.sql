CREATE DATABASE formulario_db;

USE formulario_db;

CREATE TABLE chamados (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    fone VARCHAR(15) NOT NULL,
    assunto VARCHAR(50) NOT NULL,
    descricao TEXT NOT NULL,
    data_envio TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
