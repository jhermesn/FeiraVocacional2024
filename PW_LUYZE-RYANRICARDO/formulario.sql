-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27/05/2024 às 01:57
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `formulario`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `chamados`
--
CREATE DATABASE `formulario`;

USE `formulario`;

CREATE TABLE `chamados` (
  `idChamado` int(5) NOT NULL,
  `nome` varchar(25) NOT NULL,
  `email` varchar(155) NOT NULL,
  `fone` int(15) NOT NULL,
  `assunto` text NOT NULL,
  `descricao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `chamados`
--

INSERT INTO `chamados` (`idChamado`, `nome`, `email`, `fone`, `assunto`, `descricao`) VALUES
(1, 'Joel', 'joemiran@gmail.com', 11, 'SUGESTAO', 'teste'),
(2, 'Ryan Ricardo de Souza', 'ryan.rdsouza@aluno.uepa.br', 91, 'Elogio', 'teste'),
(3, 'Luyze Beatriz Marques Cae', 'luyze@gmail.com', 91, 'Informação', 'teste'),
(4, 'João Vitor Machado Cardos', 'joaomachado@aluno.uepa.br', 99, 'Solicitação', 'teste'),
(5, 'Caio Nilson Amaral do Nas', 'caioamaral@aluno.uepa.br', 99, 'Denúncia', 'teste'),
(6, 'Samily Victória Bonfim Me', 'samilybonfim@aluno.uepa.br', 99, 'Outro', 'teste'),
(7, 'Maurício Câncio Cunha', 'maruciocancio@aluno.uepa.br', 99, 'Informação', 'teste'),
(8, 'Gabriel Rodrigues', 'gabrielrodrigues@aluno.uepa.br', 99, 'Elogio', 'teste'),
(9, 'Italo Flexa Di Paolo', 'itflexa@uepa.br', 99, 'Solicitação', 'teste');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `chamados`
--
ALTER TABLE `chamados`
  ADD PRIMARY KEY (`idChamado`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `chamados`
--
ALTER TABLE `chamados`
  MODIFY `idChamado` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
