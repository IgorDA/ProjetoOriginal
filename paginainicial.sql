-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26-Fev-2018 às 23:57
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
-- Estrutura da tabela `paginainicial`
--

CREATE TABLE `paginainicial` (
  `id` int(2) NOT NULL,
  `foto` varchar(255) COLLATE utf8_bin NOT NULL,
  `preco` int(255) NOT NULL,
  `nome` varchar(255) COLLATE utf8_bin NOT NULL,
  `categoria` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `paginainicial`
--

INSERT INTO `paginainicial` (`id`, `foto`, `preco`, `nome`, `categoria`) VALUES
(1, 'eletronicostelevisaophilips43.png', 1600, 'Televisao Philips 43', 'eletronicos'),
(2, 'celularesmotorolag5.png', 1000, 'Moto G 5', 'celulares'),
(3, 'celularesiphone6s.jpg', 2000, 'iPhone 6s Plus ', 'celulares'),
(4, 'celulareszenfone3.png', 1800, 'ZenFone 3', 'celulares'),
(5, 'eletronicospurificadordeagua.jpg', 400, 'Purificador de agua', 'eletronicos'),
(6, 'eletronicosarcondicionado.jpg', 1500, 'Ar Condicionado', 'eletronicos'),
(7, 'gamesfarcry.png', 200, 'FarCry Primal Ps4', 'games'),
(8, 'gamesgodofwar4.jpg', 300, 'God of War Ps4', 'games'),
(9, 'gamesmadmax.png', 150, 'Mad Max Ps4', 'games'),
(10, 'informaticamonitor.jpg', 600, 'Monitor ', 'informatica'),
(11, 'informaticanotebook.jpg', 5000, 'Notebook Gamer', 'informatica'),
(12, 'informaticapcgtx1060.jpg', 2400, 'Computador gamer ', 'informatica'),
(13, 'livroaartedaguerra.png', 30, 'Livro As Cronicas de narnia', 'livros'),
(14, 'livromitologianordica.jpg', 40, 'Livro Mitologia Nordica', 'livros'),
(15, 'roupasbermudatn.jpg', 110, 'Bermuda Thug Nine ', 'roupas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `paginainicial`
--
ALTER TABLE `paginainicial`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `paginainicial`
--
ALTER TABLE `paginainicial`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
