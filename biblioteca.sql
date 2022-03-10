-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Jun-2021 às 14:30
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `biblioteca`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE `alunos` (
  `alunos_id` int(5) UNSIGNED NOT NULL,
  `alunos_nome` varchar(50) COLLATE utf8_bin NOT NULL,
  `alunos_email` varchar(50) COLLATE utf8_bin NOT NULL,
  `alunos_fone` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`alunos_id`, `alunos_nome`, `alunos_email`, `alunos_fone`) VALUES
(1, 'Francisco Santos', 'franciscosantos@gmail.com', '+351918369000'),
(2, 'Joana Alves', 'joanaalves@gmail.com', '+351918369123'),
(3, 'Manuel Martins', 'manuelmartins@gmail.com', '+351918369124'),
(4, 'Luís Simões', 'luissimoes@gmail.com', '+351918369125'),
(5, 'André Silva', 'andresilva@gmail.com', '+351918369127');

-- --------------------------------------------------------

--
-- Estrutura da tabela `assuntos`
--

CREATE TABLE `assuntos` (
  `assuntos_id` int(3) UNSIGNED NOT NULL,
  `assuntos_nome` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `assuntos`
--

INSERT INTO `assuntos` (`assuntos_id`, `assuntos_nome`) VALUES
(1, 'Ação '),
(2, 'Terror'),
(5, 'Aventura'),
(6, 'Romance');

-- --------------------------------------------------------

--
-- Estrutura da tabela `emprestimos`
--

CREATE TABLE `emprestimos` (
  `emprestimos_id` int(8) UNSIGNED NOT NULL,
  `emprestimos_dataret` date NOT NULL,
  `emprestimos_dataprev` date NOT NULL,
  `emprestimos_datadev` date NOT NULL,
  `emprestimos_multa` float NOT NULL,
  `alunos_id` int(5) UNSIGNED DEFAULT NULL,
  `livros_id` int(6) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `emprestimos`
--

INSERT INTO `emprestimos` (`emprestimos_id`, `emprestimos_dataret`, `emprestimos_dataprev`, `emprestimos_datadev`, `emprestimos_multa`, `alunos_id`, `livros_id`) VALUES
(1, '2021-06-21', '2021-06-24', '2021-06-24', 2.5, 5, 6),
(2, '2021-05-28', '2021-06-30', '2021-06-01', 2, 1, 4),
(3, '2021-06-01', '2021-06-15', '2021-06-16', 6, 2, 1),
(4, '2021-06-20', '2021-06-22', '2021-06-24', 9, 3, 2),
(5, '2021-06-17', '2021-06-20', '2021-06-20', 1, 4, 3),
(6, '2021-06-16', '2021-06-22', '2021-06-23', 6, 3, 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `livros`
--

CREATE TABLE `livros` (
  `livros_id` int(6) UNSIGNED NOT NULL,
  `livros_titulo` varchar(50) COLLATE utf8_bin NOT NULL,
  `livros_autor` varchar(50) COLLATE utf8_bin NOT NULL,
  `assuntos_id` int(3) UNSIGNED DEFAULT NULL,
  `livros_datalanc` date NOT NULL,
  `livros_copias` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `livros`
--

INSERT INTO `livros` (`livros_id`, `livros_titulo`, `livros_autor`, `assuntos_id`, `livros_datalanc`, `livros_copias`) VALUES
(1, 'Frankenstein', 'Ed Parker', 2, '2011-06-09', 2),
(2, 'Os Jogos da Fome', 'Suzanne Collins', 1, '2021-06-09', 2),
(3, 'Uma Aventura na Casa da Lagoa', 'Isabel Alçada', 5, '2021-06-20', 1),
(4, 'House of Hell\r\n', 'Steve Jackson', 6, '2021-07-20', 1),
(5, 'A Seleção', 'Kiera Cass', 6, '2021-06-02', 1),
(6, 'A Culpa É das Estrelas', 'John Green', 6, '2018-06-07', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `utilizadores`
--

CREATE TABLE `utilizadores` (
  `utl_id` int(10) UNSIGNED NOT NULL,
  `utl_login` varchar(30) COLLATE utf8_bin NOT NULL,
  `utl_pass` varchar(40) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `utilizadores`
--

INSERT INTO `utilizadores` (`utl_id`, `utl_login`, `utl_pass`) VALUES
(1, 'francisco', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`alunos_id`);

--
-- Índices para tabela `assuntos`
--
ALTER TABLE `assuntos`
  ADD PRIMARY KEY (`assuntos_id`);

--
-- Índices para tabela `emprestimos`
--
ALTER TABLE `emprestimos`
  ADD PRIMARY KEY (`emprestimos_id`),
  ADD KEY `FK2` (`alunos_id`),
  ADD KEY `FK3` (`livros_id`);

--
-- Índices para tabela `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`livros_id`),
  ADD KEY `FK1` (`assuntos_id`);

--
-- Índices para tabela `utilizadores`
--
ALTER TABLE `utilizadores`
  ADD PRIMARY KEY (`utl_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `alunos`
--
ALTER TABLE `alunos`
  MODIFY `alunos_id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `assuntos`
--
ALTER TABLE `assuntos`
  MODIFY `assuntos_id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `emprestimos`
--
ALTER TABLE `emprestimos`
  MODIFY `emprestimos_id` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `livros`
--
ALTER TABLE `livros`
  MODIFY `livros_id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `utilizadores`
--
ALTER TABLE `utilizadores`
  MODIFY `utl_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `emprestimos`
--
ALTER TABLE `emprestimos`
  ADD CONSTRAINT `FK2` FOREIGN KEY (`alunos_id`) REFERENCES `alunos` (`alunos_id`),
  ADD CONSTRAINT `FK3` FOREIGN KEY (`livros_id`) REFERENCES `livros` (`livros_id`);

--
-- Limitadores para a tabela `livros`
--
ALTER TABLE `livros`
  ADD CONSTRAINT `FK1` FOREIGN KEY (`assuntos_id`) REFERENCES `assuntos` (`assuntos_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
