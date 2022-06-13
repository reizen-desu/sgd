-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
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
  `id_usuario` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(45) DEFAULT NULL,
  `nr_acessos` int(3) DEFAULT NULL,
  `nome` varchar(145) NOT NULL,
  `apelido` varchar(45) NOT NULL,
  `img_perfil` varchar(100) DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  `sexo` char(1) DEFAULT 'M',
  `telefone` varchar(20) DEFAULT NULL,
  `especialidade_id_fk` int(11) NOT NULL,
  `tipo_usuario` varchar(45) NOT NULL DEFAULT 'diarista',
  `data_criacao` datetime DEFAULT NULL,
  `localizacao` varchar(145) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

CREATE TABLE `especialidade` (
  `id_especialidade` int(11) NOT NULL,
  `nome_especialidade` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------
CREATE TABLE `solicitacao` (
  `diarista_id_fk` int(11) NOT NULL,
  `visitante_id_fk` int(11) NOT NULL,
  `mensagem` varchar(245) DEFAULT NULL,
  `data_solicitada` datetime DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

CREATE TABLE `visitante` (
  `id_visitante` int(11) NOT NULL,
  `email` varchar(150) DEFAULT NULL,
  `nome` varchar(145) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  `tipo_usuario` varchar(45) DEFAULT 'visitante',
  `apelido` varchar(45) DEFAULT NULL,
  `endereco` varchar(145) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for table `diarista`
--
ALTER TABLE `diarista`
  ADD PRIMARY KEY (`id_usuario`),
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
  ADD PRIMARY KEY (`id_visitante`);

--
-- AUTO_INCREMENT for table `diarista`
--
ALTER TABLE `diarista`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `especialidade`
--
ALTER TABLE `especialidade`
  MODIFY `id_especialidade` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `visitante`
--
ALTER TABLE `visitante`
  MODIFY `id_visitante` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for table `diarista`
--
ALTER TABLE `diarista`
  ADD CONSTRAINT `fk_usuario_especialidade` FOREIGN KEY (`especialidade_id_fk`) REFERENCES `especialidade` (`id_especialidade`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `solicitacao`
--
ALTER TABLE `solicitacao`
  ADD CONSTRAINT `fk_diarista_has_visitante_diarista1` FOREIGN KEY (`diarista_id_fk`) REFERENCES `diarista` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_diarista_has_visitante_visitante1` FOREIGN KEY (`visitante_id_fk`) REFERENCES `visitante` (`id_visitante`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;