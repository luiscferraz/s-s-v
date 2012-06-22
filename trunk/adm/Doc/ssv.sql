-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 06/06/2012 às 03h21min
-- Versão do Servidor: 5.5.16
-- Versão do PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `ssv`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE IF NOT EXISTS `funcionario` (
  `cpf` int(11) NOT NULL,
  `nome` varchar(300) NOT NULL,
  `datanascimento` varchar(20) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `rg` int(7) NOT NULL,
  `celular` int(10) NOT NULL,
  `telefone` int(10) NOT NULL,
  `nivel` int(10) NOT NULL,
  `senha` int(200) NOT NULL,
  PRIMARY KEY (`cpf`),
  KEY `nivel` (`nivel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`cpf`, `nome`, `datanascimento`, `sexo`, `rg`, `celular`, `telefone`, `nivel`, `senha`) VALUES
(111, 'joão', '11111111', 'm', 22222222, 102312093, 109239011, 2, 123),
(123, 'Erick Haendel', '02/06/1990', 'm', 89, 88888888, 99999999, 1, 123);

-- --------------------------------------------------------

--
-- Estrutura da tabela `nivel`
--

CREATE TABLE IF NOT EXISTS `nivel` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nivel` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `nivel`
--

INSERT INTO `nivel` (`id`, `nivel`) VALUES
(1, 'master'),
(2, 'funcionario');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
