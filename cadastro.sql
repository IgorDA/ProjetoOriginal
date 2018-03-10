-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08-Mar-2018 às 01:05
-- Versão do servidor: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `commerce`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `senha` varchar(20) COLLATE utf8_bin NOT NULL,
  `celular` varchar(14) COLLATE utf8_bin NOT NULL,
  `telefonefixo` varchar(14) COLLATE utf8_bin NOT NULL,
  `cpf` int(255) NOT NULL,
  `nascimento` date NOT NULL,
  `sexo` varchar(255) COLLATE utf8_bin NOT NULL,
  `endereco` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id`, `nome`, `email`, `senha`, `celular`, `telefonefixo`, `cpf`, `nascimento`, `sexo`, `endereco`) VALUES
(1, 'joao', 'joao@gmail.com', '', '21955458745', '356488754', 0, '2018-02-24', 'Masculino', 'rua araru'),
(2, 'lucas', 'lucas@gmail.com', '123', '1232434596', '46345312312', 2147483647, '2018-02-23', 'Masculino', 'rua freitas'),
(3, '', '', '', '', '', 0, '0000-00-00', '', ''),
(4, '', '', '', '', '', 0, '0000-00-00', '', ''),
(5, 'Igor', 'igordia@gmail.com', '', '21999999', '336452321', 123124312, '2002-03-04', 'Masculino', 'av '),
(6, 'igor 2', 'igor@gmail.com', '123', '312343312', '123123123', 2131241233, '3211-02-23', 'Masculino', 'av2'),
(7, 'pedro', 'pedro@hotmail.com', '123', '219905582389', '', 13, '0000-00-00', 'Selecione...', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
