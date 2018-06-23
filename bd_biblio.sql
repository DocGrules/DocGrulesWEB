-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 22-Jun-2018 às 21:53
-- Versão do servidor: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_biblio`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

DROP TABLE IF EXISTS `aluno`;
CREATE TABLE IF NOT EXISTS `aluno` (
  `aluno_id` int(11) NOT NULL AUTO_INCREMENT,
  `matricula` varchar(20) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `periodo` varchar(20) NOT NULL,
  PRIMARY KEY (`aluno_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`aluno_id`, `matricula`, `nome`, `periodo`) VALUES
(2, '12', 'Gustavo', '1'),
(3, '888', 'Teste', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos_apresentacao`
--

DROP TABLE IF EXISTS `alunos_apresentacao`;
CREATE TABLE IF NOT EXISTS `alunos_apresentacao` (
  `aluno_id` varchar(255) NOT NULL,
  `apresentacao_id` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos_evento`
--

DROP TABLE IF EXISTS `alunos_evento`;
CREATE TABLE IF NOT EXISTS `alunos_evento` (
  `aluno_id` varchar(255) NOT NULL,
  `evento_id` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `entretenimento`
--

DROP TABLE IF EXISTS `entretenimento`;
CREATE TABLE IF NOT EXISTS `entretenimento` (
  `entretenimento_id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `musica` varchar(200) NOT NULL,
  PRIMARY KEY (`entretenimento_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `evento`
--

DROP TABLE IF EXISTS `evento`;
CREATE TABLE IF NOT EXISTS `evento` (
  `evento_id` int(11) NOT NULL AUTO_INCREMENT,
  `semestre` varchar(7) NOT NULL,
  `tema` varchar(50) NOT NULL,
  PRIMARY KEY (`evento_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `evento`
--

INSERT INTO `evento` (`evento_id`, `semestre`, `tema`) VALUES
(3, '0/2018', 'Virus');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_autor`
--

DROP TABLE IF EXISTS `tb_autor`;
CREATE TABLE IF NOT EXISTS `tb_autor` (
  `cd_autor` int(11) NOT NULL AUTO_INCREMENT,
  `nm_autor` varchar(200) NOT NULL,
  `dt_nasc` datetime NOT NULL,
  PRIMARY KEY (`cd_autor`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_categoria`
--

DROP TABLE IF EXISTS `tb_categoria`;
CREATE TABLE IF NOT EXISTS `tb_categoria` (
  `cd_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `nm_categoria` varchar(100) NOT NULL,
  PRIMARY KEY (`cd_categoria`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_categoria`
--

INSERT INTO `tb_categoria` (`cd_categoria`, `nm_categoria`) VALUES
(1, 'Romance'),
(2, 'Aventura'),
(3, 'Suspense'),
(4, 'Policial'),
(5, 'Priscila'),
(6, 'doctum');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_editora`
--

DROP TABLE IF EXISTS `tb_editora`;
CREATE TABLE IF NOT EXISTS `tb_editora` (
  `cd_editora` int(11) NOT NULL AUTO_INCREMENT,
  `nm_editora` varchar(150) NOT NULL,
  PRIMARY KEY (`cd_editora`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_editora`
--

INSERT INTO `tb_editora` (`cd_editora`, `nm_editora`) VALUES
(14, 'Ok'),
(13, 'Paulo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_livro`
--

DROP TABLE IF EXISTS `tb_livro`;
CREATE TABLE IF NOT EXISTS `tb_livro` (
  `cd_livro` int(11) NOT NULL AUTO_INCREMENT,
  `nm_livro` varchar(250) NOT NULL,
  `cd_categoria` int(11) NOT NULL,
  `cd_editora` int(11) NOT NULL,
  `nr_paginas` int(11) NOT NULL,
  `cd_autor` int(11) DEFAULT NULL,
  `nm_imagem` varchar(50) DEFAULT NULL,
  `isbn_livro` varchar(50) NOT NULL,
  PRIMARY KEY (`cd_livro`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_livro`
--

INSERT INTO `tb_livro` (`cd_livro`, `nm_livro`, `cd_categoria`, `cd_editora`, `nr_paginas`, `cd_autor`, `nm_imagem`, `isbn_livro`) VALUES
(1, 'Morte no Nilo', 3, 14, 110, NULL, NULL, '1234523412350'),
(2, 'Deitel', 1, 7, 10000, NULL, NULL, '112223334445566777'),
(7, 'Rafaela', 1, 14, 123, NULL, NULL, '123'),
(8, 'Rafaela', 3, 14, 123, NULL, NULL, '123'),
(9, 'Harry Potter', 2, 14, 99, NULL, NULL, '123'),
(11, 'Vinicius', 1, 14, 1, NULL, NULL, 'qewer');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario`
--

DROP TABLE IF EXISTS `tb_usuario`;
CREATE TABLE IF NOT EXISTS `tb_usuario` (
  `cd_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nm_usuario` varchar(100) NOT NULL,
  `ds_usuario` varchar(250) NOT NULL,
  `ds_senha` varchar(250) NOT NULL,
  `dt_cadastro` datetime NOT NULL,
  PRIMARY KEY (`cd_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`cd_usuario`, `nm_usuario`, `ds_usuario`, `ds_senha`, `dt_cadastro`) VALUES
(1, 'Vinicius Andrade Lopes', 'teste@teste.com', '123', '2018-04-26 12:00:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
