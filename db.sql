CREATE DATABASE meu_banco;
USE meu_banco;

CREATE TABLE respostas_quiz (
    id INT AUTO_INCREMENT PRIMARY KEY,
    professor VARCHAR(50),
    profissao VARCHAR(3),
    faculdade VARCHAR(3),
    concurso VARCHAR(3),
    area TEXT,
    data_resposta TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
