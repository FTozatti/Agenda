-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07-Dez-2019 às 00:04
-- Versão do servidor: 10.1.40-MariaDB
-- versão do PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projeto`
--
CREATE DATABASE IF NOT EXISTS `projeto` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `projeto`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `area`
--

DROP TABLE IF EXISTS `area`;
CREATE TABLE `area` (
  `IDArea` int(11) NOT NULL,
  `Nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `area`
--

INSERT INTO `area` (`IDArea`, `Nome`) VALUES
(1, 'Ortopedia Geral'),
(2, 'Cirurgia Coluna'),
(3, 'Cirurgia Mao'),
(4, 'Cirurgia Joelho'),
(5, 'Cirurgia Pes');

-- --------------------------------------------------------

--
-- Estrutura da tabela `consulta`
--

DROP TABLE IF EXISTS `consulta`;
CREATE TABLE `consulta` (
  `IDConsulta` int(11) NOT NULL,
  `Paciente` int(11) NOT NULL,
  `Medico` int(11) NOT NULL,
  `Data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `consulta`
--

INSERT INTO `consulta` (`IDConsulta`, `Paciente`, `Medico`, `Data`) VALUES
(1, 2, 10, '2019-12-31 23:59:59'),
(2, 2, 10, '2019-11-25 20:09:00'),
(6, 2, 10, '2019-11-25 11:00:00'),
(8, 1, 10, '2019-12-07 08:30:00'),
(9, 2, 10, '2019-12-13 15:10:00'),
(10, 3, 10, '2019-12-06 21:30:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `medico`
--

DROP TABLE IF EXISTS `medico`;
CREATE TABLE `medico` (
  `IDMedico` int(11) NOT NULL,
  `Nome` varchar(250) NOT NULL,
  `CRM` varchar(50) NOT NULL,
  `CPF` varchar(11) DEFAULT NULL,
  `Salario` double NOT NULL,
  `Area` int(11) NOT NULL,
  `Usuario` varchar(50) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `medico`
--

INSERT INTO `medico` (`IDMedico`, `Nome`, `CRM`, `CPF`, `Salario`, `Area`, `Usuario`, `Password`) VALUES
(12, 'Wilson Tadao Tachibana', '123456', '20235897389', 10000, 2, 'Wilson', '$2y$10$MsbXuLlIKiPDquVn50IU4OuqIu2XiZfpm6zl/F9t1L5fAyRy7fNhC'),
(13, 'Maione', '156789', '12345678999', 50000, 1, '', '$2y$10$5.0zI2.xs0zo3tdAxl2HD.7cTWedErfsXC383Dr2SNKcxkOeww.Ga'),
(14, 'Maione', '123458', '15555555555', 10000, 3, 'Maione', '$2y$10$YXwkYhE8VmBQ1PYw/3WpaOwwmKh1Gp46eCDLR/zAPkwwmk1WSFt9W');

-- --------------------------------------------------------

--
-- Estrutura da tabela `paciente`
--

DROP TABLE IF EXISTS `paciente`;
CREATE TABLE `paciente` (
  `IDPaciente` int(11) NOT NULL,
  `Nome` varchar(250) NOT NULL,
  `CPF` varchar(11) DEFAULT NULL,
  `Telefone` varchar(11) DEFAULT NULL,
  `Usuario` varchar(50) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Exames` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `paciente`
--


--
-- Indexes for dumped tables
--

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`IDArea`);

--
-- Indexes for table `consulta`
--
ALTER TABLE `consulta`
  ADD PRIMARY KEY (`IDConsulta`),
  ADD KEY `FKPaciente` (`Paciente`),
  ADD KEY `FKMedico` (`Medico`);

--
-- Indexes for table `medico`
--
ALTER TABLE `medico`
  ADD PRIMARY KEY (`IDMedico`),
  ADD UNIQUE KEY `UNUSER` (`Usuario`),
  ADD UNIQUE KEY `UNCPF` (`CPF`),
  ADD KEY `FKArea` (`Area`);

--
-- Indexes for table `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`IDPaciente`),
  ADD UNIQUE KEY `UNUSER` (`Usuario`),
  ADD UNIQUE KEY `UNCPF` (`CPF`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `IDArea` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `consulta`
--
ALTER TABLE `consulta`
  MODIFY `IDConsulta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `medico`
--
ALTER TABLE `medico`
  MODIFY `IDMedico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `paciente`
--
ALTER TABLE `paciente`
  MODIFY `IDPaciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `consulta`
--
ALTER TABLE `consulta`
  ADD CONSTRAINT `FKMedico` FOREIGN KEY (`Medico`) REFERENCES `medico` (`IDMedico`),
  ADD CONSTRAINT `FKPaciente` FOREIGN KEY (`Paciente`) REFERENCES `paciente` (`IDPaciente`);

--
-- Limitadores para a tabela `medico`
--
ALTER TABLE `medico`
  ADD CONSTRAINT `FKArea` FOREIGN KEY (`Area`) REFERENCES `area` (`IDArea`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
