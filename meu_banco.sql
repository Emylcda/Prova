CREATE DATABASE `meu_banco`;

USE `meu_banco`;

CREATE TABLE `respostas_quiz` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `melhor_professor` VARCHAR(50),
  `continuar_profissao` ENUM('Sim', 'Não'),
  `fazer_faculdade` ENUM('Sim', 'Não'),
  `fazer_concurso_publico` ENUM('Sim', 'Não'),
  `area_atuacao` TEXT,
  `data_envio` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);