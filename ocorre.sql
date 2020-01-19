-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19-Jan-2020 às 15:24
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ocorre`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE `alunos` (
  `id` int(11) NOT NULL,
  `matricula` varchar(220) NOT NULL,
  `name` varchar(220) NOT NULL,
  `sexo` int(2) NOT NULL,
  `data_nasc` date NOT NULL,
  `curso_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`id`, `matricula`, `name`, `sexo`, `data_nasc`, `curso_id`, `created`, `modified`) VALUES
(1, '123456', 'Misael Henrique da Silva', 0, '0000-00-00', 3, '0000-00-00 00:00:00', NULL),
(2, '123456', 'Vitor Lima', 0, '0000-00-00', 3, '0000-00-00 00:00:00', NULL),
(3, '123456', 'Denis de Deus', 0, '0000-00-00', 1, '0000-00-00 00:00:00', NULL),
(6, '123456', 'Mario Palhares', 0, '0000-00-00', 2, '0000-00-00 00:00:00', NULL),
(7, '123456', 'Maria Aparecida', 0, '0000-00-00', 2, '0000-00-00 00:00:00', NULL),
(8, '123456', 'Laiali Safa', 0, '0000-00-00', 2, '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

CREATE TABLE `cursos` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`id`, `nome`) VALUES
(1, 'Sistemas Para Internet II'),
(2, 'Analise e Desenvolvimento de Sistemas'),
(3, 'Automação Industrial'),
(4, 'Engenharia Elétrica');

-- --------------------------------------------------------

--
-- Estrutura da tabela `gravidades`
--

CREATE TABLE `gravidades` (
  `id` int(11) NOT NULL,
  `gravidade` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `gravidades`
--

INSERT INTO `gravidades` (`id`, `gravidade`) VALUES
(1, 'branco 1'),
(2, 'amarelo'),
(3, 'cinza');

-- --------------------------------------------------------

--
-- Estrutura da tabela `medidas`
--

CREATE TABLE `medidas` (
  `id` int(11) NOT NULL,
  `medida` varchar(60) NOT NULL,
  `descricao` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `medidas`
--

INSERT INTO `medidas` (`id`, `medida`, `descricao`) VALUES
(1, 'suspensão 5 dias', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(2, 'verbal', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(3, 'Advertencia Verbal', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(4, 'reparar o dano causado ao patrimonio', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ocorrencias`
--

CREATE TABLE `ocorrencias` (
  `id` int(11) NOT NULL,
  `descricao` text NOT NULL,
  `data` datetime NOT NULL,
  `created` datetime NOT NULL,
  `aluno_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tipo_ocorrencia_id` int(11) NOT NULL,
  `gravidade_id` int(11) NOT NULL,
  `turno_id` int(11) NOT NULL,
  `medida_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `ocorrencias`
--

INSERT INTO `ocorrencias` (`id`, `descricao`, `data`, `created`, `aluno_id`, `user_id`, `tipo_ocorrencia_id`, `gravidade_id`, `turno_id`, `medida_id`) VALUES
(1, 'lorem ipsum bla bla bla bla\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', '2020-01-05 23:58:00', '2020-01-05 23:59:58', 3, 2, 1, 1, 1, 1),
(2, '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', '2020-01-06 00:26:00', '2020-01-06 00:26:32', 1, 2, 2, 2, 2, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_ocorrencias`
--

CREATE TABLE `tipo_ocorrencias` (
  `id` int(11) NOT NULL,
  `tipo_ocorrencia` varchar(220) NOT NULL,
  `descricao` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tipo_ocorrencias`
--

INSERT INTO `tipo_ocorrencias` (`id`, `tipo_ocorrencia`, `descricao`) VALUES
(1, 'agressão fisica 1', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(2, 'agressão verbal', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(3, 'Bulling', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(4, 'depredação do patrimonio', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(5, 'Atraso chegada primeira aula', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
(6, 'sem uniforme', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `turnos`
--

CREATE TABLE `turnos` (
  `id` int(11) NOT NULL,
  `turno` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `turnos`
--

INSERT INTO `turnos` (`id`, `turno`) VALUES
(1, 'Noturno'),
(2, 'Vespertino'),
(3, 'Matutino'),
(4, 'Integral'),
(5, 'zero 2');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `matricula` varchar(60) NOT NULL,
  `name` varchar(220) NOT NULL,
  `cargo` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `username` varchar(220) NOT NULL,
  `password` varchar(220) NOT NULL,
  `cod_val_email` varchar(220) DEFAULT NULL,
  `recuperar_senha` varchar(220) DEFAULT NULL,
  `email_val` int(11) DEFAULT NULL,
  `imagem` varchar(220) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `matricula`, `name`, `cargo`, `email`, `username`, `password`, `cod_val_email`, `recuperar_senha`, `email_val`, `imagem`, `created`, `modified`) VALUES
(1, '123457', 'Teste Teste', 'teste', 'teste@teste.com', 'teste@teste.com', '$2y$10$Tbpx3zJShNQdD92ZdF5rKOwycIa6Ao4D.OwkEBHVRTn9wXe7bzkoS', NULL, NULL, NULL, '', '0000-00-00 00:00:00', '2020-01-19 15:50:42'),
(2, '123456', 'Misael Henrique', 'supervisor', 'misael@misael.com', 'misael@misael.com', '$2y$10$xOrQAJd077HhPbAcca96kuesMwNPLl1xL.nsTqrEy7SOIgEa1X0Xm', NULL, NULL, NULL, 'foto-perfil.jpg', '2020-01-05 23:56:51', '2020-01-19 02:17:51'),
(3, '123456', 'Misael Henrique', 'professor', 'misael6@misael.com', '', '123456', NULL, NULL, NULL, 'foto-perfil.jpg', '2020-01-05 23:58:03', '2020-01-05 23:58:03'),
(4, '159753', 'Virginia Santos da Silva', 'assistente de alunos', 'virginia@virginia.com', '', '123456', NULL, NULL, NULL, 'foto-perfil.jpg', '2020-01-07 06:10:28', '2020-01-07 06:10:28'),
(8, '123456', 'Teste4', 'teste4', 'teste4@teste.com', 'tese4@teste.com', '$2y$10$b/jsRZ5fJu0gfkW5tvuMr.HJDCSzkrB8zzrCbeqtwJ8ox8dEChvFC', NULL, NULL, NULL, '', '2020-01-19 04:57:02', '2020-01-19 12:55:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gravidades`
--
ALTER TABLE `gravidades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medidas`
--
ALTER TABLE `medidas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ocorrencias`
--
ALTER TABLE `ocorrencias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipo_ocorrencias`
--
ALTER TABLE `tipo_ocorrencias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `turnos`
--
ALTER TABLE `turnos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alunos`
--
ALTER TABLE `alunos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `gravidades`
--
ALTER TABLE `gravidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `medidas`
--
ALTER TABLE `medidas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ocorrencias`
--
ALTER TABLE `ocorrencias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tipo_ocorrencias`
--
ALTER TABLE `tipo_ocorrencias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `turnos`
--
ALTER TABLE `turnos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
