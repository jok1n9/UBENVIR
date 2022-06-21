-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21-Jun-2022 às 23:33
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `udbenvir`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrinho`
--

CREATE TABLE `carrinho` (
  `userid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `comments`
--

CREATE TABLE `comments` (
  `question_id` bigint(20) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `companhia`
--

CREATE TABLE `companhia` (
  `Nome` text NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `telemovel` int(9) NOT NULL,
  `endereco` text NOT NULL,
  `banco` int(11) NOT NULL,
  `descricao` text DEFAULT NULL,
  `id` int(11) NOT NULL,
  `imagem` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `companhia` int(11) NOT NULL,
  `preco` decimal(10,0) NOT NULL,
  `comentário` text NOT NULL,
  `nome` text NOT NULL,
  `imagem` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `suporte`
--

CREATE TABLE `suporte` (
  `id` int(11) NOT NULL,
  `nome` text NOT NULL,
  `descricao` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `temporaria`
--

CREATE TABLE `temporaria` (
  `Nome` text NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `telemovel` int(9) NOT NULL,
  `endereco` text NOT NULL,
  `banco` int(11) NOT NULL,
  `descricao` text DEFAULT NULL,
  `id` int(11) NOT NULL,
  `imagem` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `Nome` text NOT NULL,
  `email` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `endereco` text NOT NULL,
  `telemovel` int(11) NOT NULL,
  `nif` int(11) NOT NULL,
  `credito` int(16) DEFAULT NULL,
  `datacc` int(4) DEFAULT NULL,
  `3numcc` int(3) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `companhia`
--
ALTER TABLE `companhia`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `suporte`
--
ALTER TABLE `suporte`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `temporaria`
--
ALTER TABLE `temporaria`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `companhia`
--
ALTER TABLE `companhia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `suporte`
--
ALTER TABLE `suporte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `temporaria`
--
ALTER TABLE `temporaria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
