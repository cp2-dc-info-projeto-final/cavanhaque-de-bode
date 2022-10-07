-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06-Out-2022 às 18:47
-- Versão do servidor: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ds302`
--
CREATE DATABASE IF NOT EXISTS `ds302` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ds302`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE `cliente` (
  `cod_cliente` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `data_nasc` varchar(10) NOT NULL,
  `cartao` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`cod_cliente`, `nome`, `email`, `data_nasc`, `cartao`) VALUES
(1, 'luizin peito de aÃ§o', 'luiz@felpe.com', '2022-09-06', 'Visa'),
(2, 'xavaqueiro 69', 'dsf@gmail.com', '2022-09-05', 'MasterCard'),
(3, 'bas 56', 'ds@gmail.com', '2022-09-05', 'MasterCard'),
(4, 'luiz carlos', 'luiz@fee.com', '2022-09-06', 'Visa'),
(5, 'comedor de manga', 'came@gmai.com', '2022-09-05', 'Visa Electron'),
(6, 'joao frango', 'joaofrango@gmail.com', '2003-01-22', 'MasterCard');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cod_cliente`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `cod_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
