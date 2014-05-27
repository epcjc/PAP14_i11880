-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 27-Fev-2014 às 01:20
-- Versão do servidor: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tomas_db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados`
--

CREATE TABLE IF NOT EXISTS `dados` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL DEFAULT '',
  `cargo` varchar(255) NOT NULL,
  `morada` text NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `sexo` varchar(50) NOT NULL,
  `idade` varchar(50) NOT NULL,
  `estadocivil` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `dados`
--

INSERT INTO `dados` (`id`, `nome`, `cargo`, `morada`, `imagem`, `sexo`, `idade`, `estadocivil`, `email`) VALUES
(3, 'Tomás', 'Gestor', 'fdsfsda', 'cliente-270214011341.jpg', '', '18', 'Solteiro', 'tomas@emaildeteste.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados_galeria`
--

CREATE TABLE IF NOT EXISTS `dados_galeria` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `imagem` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Extraindo dados da tabela `dados_galeria`
--

INSERT INTO `dados_galeria` (`id`, `imagem`) VALUES
(22, 'cliente-270214011852.jpg'),
(21, 'cliente-270214011831.jpg'),
(20, 'cliente-270214011827.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `textosdb`
--

CREATE TABLE IF NOT EXISTS `textosdb` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `texto` text NOT NULL,
  `local` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `textosdb`
--

INSERT INTO `textosdb` (`id`, `texto`, `local`) VALUES
(1, 'Tomás: 912086534\r\n\r\n', 'texto1'),
(2, '*****************************************************\r\n\r\nEste Website destine-se a catalogação de informação de uma lista de pessoas atraves de acesso reservado.\r\nE tambem uma galeria de imagens de acesso publico.\r\n\r\n*****************************************************\r\n\r\n', 'texto2'),
(3, 'Este trabalho foi realizado por:\r\n\r\n     Tomás Ferreira Gonçalves\r\n', 'texto3');

-- --------------------------------------------------------

--
-- Estrutura da tabela `utilizadores`
--

CREATE TABLE IF NOT EXISTS `utilizadores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `utilizadores`
--

INSERT INTO `utilizadores` (`id`, `username`, `password`) VALUES
(1, 'admin', '0000'),
(2, 'tomas', '0000');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
