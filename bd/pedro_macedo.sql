-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Nov-2022 às 15:14
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
  `comentario` varchar(100) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`nome`, `proprietarios`, `endereco`, `telefone`, `comentario`, `id`) VALUES
('Colégio Estadual Pedro Macedo', 'Maria Carolina', 'Av. Rep. Argentina, 2376 - Portão, Curitiba - PR', '(41) 3345-3993', 'Trabalho multidiciplinar que foi criado visando atingir melhor qualidade ao acessar o portal do colé', 1),
('', 'Emyli Caroline', '', '', '', 2);

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
  `usuario_cod` int(11) NOT NULL,
  `pagina` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `publicacao`
--

INSERT INTO `publicacao` (`cod`, `titulo`, `descricao`, `imagem`, `data`, `hora`, `usuario_cod`, `pagina`) VALUES
(20, 'fihu', 'lka nha\r\n', '../img/uploads/img_633b53bd3e9f9.jpg', '03/10/2022', '18:27', 7, 0),
(21, 'fihu', 'lka', '../img/uploads/img_633b5647746f0.png', '03/10/2022', '18:38', 7, 0),
(27, 'fihu', 'lka', '../img/uploads/img_633c334cd4fca.png', '04/10/2022', '10:21', 7, 0),
(33, 'fihu', 'lka', '../img/uploads/img_633d678922e78.png', '05/10/2022', '08:16', 7, 0),
(34, 'fihu', 'lkalo', '../img/uploads/img_633d67d14f810.png', '05/10/2022', '08:17', 7, 0),
(37, 'tui', 'ppp', '../img/uploads/img_633d86522cd00.png', '05/10/2022', '10:27', 7, 0),
(38, 'teste de sauhaush', 'mixuruca esse layout em amigos', '../img/uploads/img_6345e14c473f9.jpg', '11/10/2022', '18:34', 7, 0),
(40, 'muito bom', 'adorei eee', '../img/uploads/img_6357c525da60e.jpg', '25/10/2022', '08:14', 7, 0),
(41, 'legal', 'sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus ', '', '25/10/2022', '09:55', 7, 0),
(42, 'legal sim', 'sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus sus ', '../img/uploads/img_6357dce634899.jpg', '25/10/2022', '09:56', 7, 0),
(43, '', '', '', '16/11/2022', '10:46', 7, 0),
(44, 'tentando', '', '', '16/11/2022', '10:52', 7, 0),
(45, 'a', '', '', '16/11/2022', '10:52', 7, 0),
(46, '', 'D', '', '16/11/2022', '10:57', 7, 0),
(47, '', '', '', '16/11/2022', '10:58', 7, 0),
(48, 'tilt', 'dd', '', '16/11/2022', '11:02', 7, 0),
(49, 'tilt', 'dd', '', '16/11/2022', '11:04', 7, 0),
(50, 'tilt', 'dd', '', '16/11/2022', '11:05', 7, 1),
(51, 'tilt', 'dd', '', '16/11/2022', '11:06', 7, 1),
(52, 'tiltuuuu', 'ddiii', '', '16/11/2022', '11:08', 7, 1),
(53, 'tiltuuuu', 'ddiii', '', '16/11/2022', '11:10', 7, 1),
(54, '1', '1', '', '16/11/2022', '11:12', 7, 0),
(55, '1 sim', '1', '', '16/11/2022', '11:12', 7, 1),
(56, '4', '', '', '16/11/2022', '11:18', 7, 4);

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
  `perfil_cod` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`cod`, `nome`, `email`, `senha`, `cpf`, `perfil_cod`, `id_empresa`) VALUES
(2, 'emyli', 'emyli@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 1, 0),
(5, 'ha', 'ha@gmail.com', '925cc8d2953eba624b2bfedf91a91613', 0, 2, 0),
(7, 'mari', 'mari@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 1, 0),
(6, 'emy', 'emy@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 2, 0),
(8, 'emilia', 'teste@gmail.com', '202cb962ac59075b964b07152d234b70', 0, 2, 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id`);

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
  ADD KEY `fk_perfil` (`perfil_cod`),
  ADD KEY `fk_empresa` (`id_empresa`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `perfil_usuario`
--
ALTER TABLE `perfil_usuario`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `publicacao`
--
ALTER TABLE `publicacao`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
