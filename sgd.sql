-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2022 at 05:35 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `sgd`
--

-- --------------------------------------------------------

--
-- Table structure for table `diarista`
--

CREATE TABLE `diarista` (
  `id` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(45) DEFAULT NULL,
  `nr_acessos` int(3) DEFAULT NULL,
  `nome` varchar(145) NOT NULL,
  `apelido` varchar(45) NOT NULL,
  `img_perfil` varchar(250) DEFAULT 'assets/user_images/default.jpg',
  `data_nascimento` date DEFAULT NULL,
  `sexo` char(1) DEFAULT 'M',
  `contacto` varchar(20) DEFAULT NULL,
  `especialidade_id_fk` int(11) NOT NULL DEFAULT 1,
  `tipo_usuario` varchar(45) NOT NULL DEFAULT 'diarista',
  `data_criacao` datetime DEFAULT NULL,
  `morada` varchar(145) DEFAULT NULL,
  `descricao` text NOT NULL,
  `is_public` tinyint(1) NOT NULL,
  `ultimo_acesso` datetime NOT NULL DEFAULT current_timestamp(),
  `likes` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `diarista`
--

INSERT INTO `diarista` (`id`, `email`, `password`, `nr_acessos`, `nome`, `apelido`, `img_perfil`, `data_nascimento`, `sexo`, `contacto`, `especialidade_id_fk`, `tipo_usuario`, `data_criacao`, `morada`, `descricao`, `is_public`, `ultimo_acesso`, `likes`) VALUES
(2, 'reizen.dos.santos@gmail.com', 'hehe', NULL, 'Reizen Dos Santos', 'aaa', 'assets/user_images/default.jpg', '2022-06-20', 'M', '84389853', 1, 'diarista', NULL, 'sasa', 'asasasasdadas', 0, '2022-06-21 05:06:53', 0),
(3, 'diarista1@mail.com', 'hehe', NULL, 'Diarista', 'Numero 1', 'assets/user_images/default.jpg', '2000-06-11', 'F', '840193843', 1, 'diarista', '2022-06-21 05:03:35', 'Zimpeto', 'Me chamo ... e já fiz vários trabalhos. Depois de alguns anos, me destaquei muito mais no trabalho de ... e com isso decidi ser um profissional nessa área. Tenho também conhecimentos básicos noutras áreas.', 1, '2022-06-21 05:06:53', 0);

-- --------------------------------------------------------

--
-- Table structure for table `especialidade`
--

CREATE TABLE `especialidade` (
  `id_especialidade` int(11) NOT NULL,
  `nome_especialidade` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `especialidade`
--

INSERT INTO `especialidade` (`id_especialidade`, `nome_especialidade`) VALUES
(1, 'Limpeza'),
(2, 'Lavar e Secar'),
(3, 'Baba'),
(4, 'Colecta de Lixo');

-- --------------------------------------------------------

--
-- Table structure for table `solicitacao`
--

CREATE TABLE `solicitacao` (
  `diarista_id_fk` int(11) NOT NULL,
  `visitante_id_fk` int(11) NOT NULL,
  `mensagem` varchar(245) DEFAULT NULL,
  `data_solicitada` datetime DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `visitante`
--

CREATE TABLE `visitante` (
  `id` int(11) NOT NULL,
  `email` varchar(150) DEFAULT NULL,
  `nome` varchar(145) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `contacto` varchar(45) DEFAULT NULL,
  `tipo_usuario` varchar(45) DEFAULT 'visitante',
  `apelido` varchar(45) DEFAULT NULL,
  `morada` varchar(145) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visitante`
--

INSERT INTO `visitante` (`id`, `email`, `nome`, `password`, `contacto`, `tipo_usuario`, `apelido`, `morada`) VALUES
(1, 'nokia@mail.com', 'Reizen', 'hehe', '843843', 'visitante', 'ahh', 'Zimpeto'),
(2, 'reizen.dos.santos@gmail.com', 'Reizen Dos Santos', 'hehe', '8438434', 'visitante', 'aa', 'sasa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diarista`
--
ALTER TABLE `diarista`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_usuario_especialidade_idx` (`especialidade_id_fk`);

--
-- Indexes for table `especialidade`
--
ALTER TABLE `especialidade`
  ADD PRIMARY KEY (`id_especialidade`);

--
-- Indexes for table `solicitacao`
--
ALTER TABLE `solicitacao`
  ADD PRIMARY KEY (`diarista_id_fk`,`visitante_id_fk`),
  ADD KEY `fk_diarista_has_visitante_visitante1_idx` (`visitante_id_fk`),
  ADD KEY `fk_diarista_has_visitante_diarista1_idx` (`diarista_id_fk`);

--
-- Indexes for table `visitante`
--
ALTER TABLE `visitante`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diarista`
--
ALTER TABLE `diarista`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `especialidade`
--
ALTER TABLE `especialidade`
  MODIFY `id_especialidade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `visitante`
--
ALTER TABLE `visitante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `diarista`
--
ALTER TABLE `diarista`
  ADD CONSTRAINT `fk_usuario_especialidade` FOREIGN KEY (`especialidade_id_fk`) REFERENCES `especialidade` (`id_especialidade`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `solicitacao`
--
ALTER TABLE `solicitacao`
  ADD CONSTRAINT `fk_diarista_has_visitante_diarista1` FOREIGN KEY (`diarista_id_fk`) REFERENCES `diarista` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_diarista_has_visitante_visitante1` FOREIGN KEY (`visitante_id_fk`) REFERENCES `visitante` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;
