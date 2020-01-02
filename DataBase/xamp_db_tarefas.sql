-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 31-Dez-2019 às 03:05
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_tarefas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `usuario_id` int(11) NOT NULL,
  `usuario_nome` varchar(45) COLLATE utf8_bin NOT NULL,
  `usuario_email` varchar(45) COLLATE utf8_bin NOT NULL,
  `usuario_senha` varchar(12) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`usuario_id`, `usuario_nome`, `usuario_email`, `usuario_senha`) VALUES
(1, 'Gelvanne A R Oliveira', 'gelvanne@msn.com', 'gel123456');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
