-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01/12/2021 às 23:04
-- Versão do servidor: 10.4.21-MariaDB
-- Versão do PHP: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `filmes_db`
--
CREATE DATABASE IF NOT EXISTS `filmes_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `filmes_db`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `filmes_tb`
--

CREATE TABLE `filmes_tb` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genero` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ano` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `filmes_tb`
--

INSERT INTO `filmes_tb` (`id`, `nome`, `genero`, `ano`) VALUES
(14, 'Toy Story 3', 'Desenho', 2010),
(15, 'Harry Potter e as Relíquias da Morte: Parte 1', 'Ficção/ Aventura', 2010),
(16, 'Avatar', 'Aventura', 2009),
(17, 'A Saga Crepúsculo', 'Romance', 2012),
(18, 'Mercenários 2', 'Ação', 2012),
(19, 'A Volta Dos que Não Foram', 'Drama', 2018),
(20, 'Bird Box', 'Suspense', 2019),
(21, 'A Barraca do Beijo', 'Romance', 2017),
(22, 'Ana Linda', 'Coméda', 2020);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios_tb`
--

CREATE TABLE `usuarios_tb` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `usuarios_tb`
--

INSERT INTO `usuarios_tb` (`id_usuario`, `usuario`, `senha`) VALUES
(1, 'anachaves', 'ana@filmes');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `filmes_tb`
--
ALTER TABLE `filmes_tb`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios_tb`
--
ALTER TABLE `usuarios_tb`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `filmes_tb`
--
ALTER TABLE `filmes_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de tabela `usuarios_tb`
--
ALTER TABLE `usuarios_tb`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
