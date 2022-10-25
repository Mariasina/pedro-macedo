-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25-Out-2022 às 15:49
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
-- Banco de dados: `pedro_macedo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE `empresa` (
  `nome` varchar(100) NOT NULL,
  `proprietarios` varchar(100) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `telefone` varchar(100) NOT NULL,
  `comentario` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`nome`, `proprietarios`, `endereco`, `telefone`, `comentario`) VALUES
('Colégio Estadual Pedro Macedo', 'Maria Carolina', 'Av. Rep. Argentina, 2376 - Portão, Curitiba - PR', '(41) 3345-3993', 'Trabalho multidiciplinar que foi criado visando atingir melhor qualidade ao acessar o portal do colé'),
('', 'Emyli Caroline', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfil_usuario`
--

CREATE TABLE `perfil_usuario` (
  `cod` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `perfil_usuario`
--

INSERT INTO `perfil_usuario` (`cod`, `nome`) VALUES
(1, 'Administrador'),
(2, 'Moderador');

-- --------------------------------------------------------

--
-- Estrutura da tabela `publicacao`
--

CREATE TABLE `publicacao` (
  `cod` int(11) NOT NULL,
  `titulo` varchar(500) NOT NULL,
  `descricao` varchar(10000) NOT NULL,
  `imagem` varchar(200) NOT NULL,
  `data` varchar(100) NOT NULL,
  `hora` varchar(100) NOT NULL,
  `usuario_cod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `publicacao`
--

INSERT INTO `publicacao` (`cod`, `titulo`, `descricao`, `imagem`, `data`, `hora`, `usuario_cod`) VALUES
(20, 'fihu', 'lka', '../img/uploads/img_633b53bd3e9f9.jpg', '03/10/2022', '18:27', 7),
(21, 'fihu', 'lka', '../img/uploads/img_633b5647746f0.png', '03/10/2022', '18:38', 7),
(27, 'fihu', 'lka', '../img/uploads/img_633c334cd4fca.png', '04/10/2022', '10:21', 7),
(33, 'fihu', 'lka', '../img/uploads/img_633d678922e78.png', '05/10/2022', '08:16', 7),
(34, 'fihu', 'lkalo', '../img/uploads/img_633d67d14f810.png', '05/10/2022', '08:17', 7),
(37, 'tui', 'ppp', '../img/uploads/img_633d86522cd00.png', '05/10/2022', '10:27', 7),
(38, 'teste de sauhaush', 'mixuruca esse layout em amigos', '../img/uploads/img_6345e14c473f9.jpg', '11/10/2022', '18:34', 7),
(40, 'muito bom', 'adorei eee', '../img/uploads/img_6357c525da60e.jpg', '25/10/2022', '08:14', 7),
(41, 'legal', 'sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus ', '', '25/10/2022', '09:55', 7),
(42, 'legal sim', 'sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus ', '../img/uploads/img_6357dce634899.jpg', '25/10/2022', '09:56', 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `cod` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `cpf` int(20) NOT NULL,
  `perfil_cod` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`cod`, `nome`, `email`, `senha`, `cpf`, `perfil_cod`) VALUES
(2, 'emyli', 'emyli@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 1),
(5, 'ha', 'ha@gmail.com', '925cc8d2953eba624b2bfedf91a91613', 0, 2),
(7, 'mari', 'mari@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 1),
(6, 'emy', 'emy@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 2),
(8, 'emilia', 'teste@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 2);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `perfil_usuario`
--
ALTER TABLE `perfil_usuario`
  ADD PRIMARY KEY (`cod`);

--
-- Índices para tabela `publicacao`
--
ALTER TABLE `publicacao`
  ADD PRIMARY KEY (`cod`),
  ADD KEY `fk_usuario_cod` (`usuario_cod`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cod`),
  ADD KEY `fk_perfil` (`perfil_cod`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `perfil_usuario`
--
ALTER TABLE `perfil_usuario`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `publicacao`
--
ALTER TABLE `publicacao`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
