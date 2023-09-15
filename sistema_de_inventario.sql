-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 15/09/2023 às 18:12
-- Versão do servidor: 11.1.2-MariaDB
-- Versão do PHP: 8.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sistema_de_inventario`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cabos`
--

CREATE TABLE `cabos` (
  `vga` int(10) NOT NULL,
  `hdmi` int(10) NOT NULL,
  `d-port` int(10) NOT NULL,
  `forca` int(10) NOT NULL,
  `rede` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `maquinas`
--

CREATE TABLE `maquinas` (
  `id` int(10) NOT NULL,
  `tombo` int(10) NOT NULL,
  `maquina` varchar(10) NOT NULL,
  `sistema` varchar(10) NOT NULL,
  `memoria` int(10) NOT NULL,
  `slot` varchar(10) NOT NULL,
  `processador` varchar(15) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `armazenamento` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `maquinas`
--

INSERT INTO `maquinas` (`id`, `tombo`, `maquina`, `sistema`, `memoria`, `slot`, `processador`, `armazenamento`) VALUES
(1, 31242142, 'Desktop', 'Windows', 2, 'DDR1', 'AMD', 'SSD'),
(3, 65669, 'Notebook', 'Linux', 4, 'DDR1', 'Celerom', 'SSD'),
(4, 123455, 'Desktop', 'Linux', 4, 'DDR4', 'i3', 'SSD'),
(5, 1235, 'Desktop', 'Linux', 2, 'DDR2', 'Atom', 'HDD'),
(6, 1254125, 'Desktop', 'Windows', 2, 'DDR1', 'AMD', 'SSD'),
(7, 123566, 'Notebook', 'Windows', 2, 'DDR1', 'AMD', 'SSD'),
(8, 123515, 'Desktop', 'Windows', 2, 'DDR1', 'AMD', 'SSD'),
(9, 15125125, 'Desktop', 'Windows', 2, 'DDR1', 'AMD', 'SSD');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `maquinas`
--
ALTER TABLE `maquinas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `maquinas`
--
ALTER TABLE `maquinas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
