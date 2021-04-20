-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 08/02/2021 às 11:53
-- Versão do servidor: 5.7.31
-- Versão do PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `newsphp`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `news`
--

INSERT INTO `news` (`id`, `title`, `description`) VALUES
(1, 'Title 1', 'news 1'),
(2, 'Title 2', 'news 2'),
(3, 'Title 3', 'news 3'),
(4, 'Title 4', 'news 4'),
(5, 'Title 5', 'news 5'),
(6, 'Title 6', 'news 6'),
(7, 'Title 7', 'news 7'),
(8, 'Title 8', 'news 8'),
(9, 'Title 9', 'news 9');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
