-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Out-2022 às 04:48
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
(17, 'u', '7', '../img/uploads/img_633b503228806.png', '03/10/2022', '18:12', 7),
(18, 'u', '7', '../img/uploads/img_633b51773fcb0.jpg', '03/10/2022', '18:17', 7),
(19, 'u', '7', '../img/uploads/img_633b519e334a6.png', '03/10/2022', '18:18', 7),
(20, 'u', '7', '../img/uploads/img_633b53bd3e9f9.jpg', '03/10/2022', '18:27', 7),
(21, 'u', '7', '../img/uploads/img_633b5647746f0.png', '03/10/2022', '18:38', 7),
(22, 'u', '7', '../img/uploads/img_633b587e7d9c1.', '03/10/2022', '18:47', 7),
(23, 'u', '7', '../img/uploads/img_633b588be6010.', '03/10/2022', '18:47', 7),
(24, 'u', '7', '../img/uploads/img_633b5aa839c60.', '03/10/2022', '18:56', 7),
(25, 'u', '7', '../img/uploads/img_633b5aaeb27d5.', '03/10/2022', '18:57', 7);

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
(6, 'emy', 'emy@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 2);

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
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
