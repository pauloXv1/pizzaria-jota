-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01/12/2023 às 01:42
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pizzaria`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cliente`
--

CREATE TABLE `cliente` (
  `Id` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `email` varchar(130) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cliente`
--

INSERT INTO `cliente` (`Id`, `nome`, `endereco`, `telefone`, `senha`, `email`) VALUES
(10, 'paulo silvano', 'passagem santa helena', '(91)981111278', 'paulo2004', 'paulosilvano1707@gmail.com'),
(11, 'da pamela', 'rodovia pa 481', '(91)981111278', '33334444', 'victor0102@gmail.com'),
(12, 'demaria', 'parque verde', '91983024525', '154236', 'manoelyuri@gmail.com'),
(13, 'fabricio magalhaes', 'Lauro Sodré', '(91)981111278', '1234567', 'fabricio0414@gmail.com'),
(14, 'dalva lucia alves da silva', 'rua santa helena', '91984041244', 'dalva2004', 'dalvalucia2020@gmail'),
(15, 'henrique', 'rua padre pedofilo', '60606', 'pedro20', 'pedro2005@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `Id` int(11) NOT NULL,
  `nome` varchar(160) NOT NULL,
  `descricao` text NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `imagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`Id`, `nome`, `descricao`, `preco`, `imagem`) VALUES
(20, 'pizza de calabresa', 'calabresa e queijo', 20.00, '../img_update/'),
(21, 'pizza mista', ' queijo muçarela, presunto, cebola, ovo, azeitonas e orégano. Experimente', 25.00, '../img_update/'),
(22, 'pizza de M&M', 'chocolate, m&m e muito açucar', 25.00, '../pizzaria/img_update/'),
(23, 'rick', 'anão', 0.00, '/'),
(24, 'pizza mista', 'mista', 20.00, '/'),
(25, 'pizza de calabresa', 'calabresa e queijo', 25.00, ''),
(26, 'paulo', 'ele é bnt demais', 99.00, ''),
(27, 'khvyuf', '~jbiyy', 0.00, '');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`Id`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
