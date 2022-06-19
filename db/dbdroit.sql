-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2022 at 11:47 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbdroit`
--

-- --------------------------------------------------------

--
-- Table structure for table `cour`
--

CREATE TABLE `cour` (
  `id_cour` int(11) NOT NULL,
  `name_cour` varchar(255) NOT NULL,
  `contenue_cour` mediumtext NOT NULL,
  `id_mod` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=hp8;

-- --------------------------------------------------------

--
-- Table structure for table `module`
--

CREATE TABLE `module` (
  `id_mod` varchar(50) NOT NULL,
  `name_mod` varchar(255) NOT NULL,
  `id_sems` varchar(50) NOT NULL,
  `id_spec` varchar(50) NOT NULL,
  `id_niv` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=hp8;

-- --------------------------------------------------------

--
-- Table structure for table `niveaux`
--

CREATE TABLE `niveaux` (
  `id_niv` varchar(50) NOT NULL,
  `name_niv` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=hp8;

--
-- Dumping data for table `niveaux`
--

INSERT INTO `niveaux` (`id_niv`, `name_niv`) VALUES
('D', 'Doctorat'),
('L1', 'Licence 1'),
('L2', 'Licence 2'),
('L3', 'Licence 3'),
('M1', 'Master 1'),
('M2', 'Master 2');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id` int(11) NOT NULL,
  `username` varchar(50) CHARACTER SET latin1 NOT NULL,
  `password` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=hp8;

-- --------------------------------------------------------

--
-- Table structure for table `semestre`
--

CREATE TABLE `semestre` (
  `id_sems` varchar(50) NOT NULL,
  `name_sems` varchar(255) NOT NULL,
  `id_spec` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=hp8;

--
-- Dumping data for table `semestre`
--

INSERT INTO `semestre` (`id_sems`, `name_sems`, `id_spec`) VALUES
('s1', 'Semestre 1', NULL),
('s2', 'Semestre 2', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `specialite`
--

CREATE TABLE `specialite` (
  `id_spec` varchar(50) NOT NULL,
  `name_spec` varchar(255) NOT NULL,
  `id_niv` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=hp8;

--
-- Dumping data for table `specialite`
--

INSERT INTO `specialite` (`id_spec`, `name_spec`, `id_niv`) VALUES
('ddadm', 'Droit Administrative', 'D'),
('ddcsc', 'Droit Criminel et Sciences Criminelles', 'D'),
('ddprv', 'Droit Privé', 'D'),
('l1d', 'L1 Droit ', 'L1'),
('l1spol', 'Organisation Politique et Administrative', 'L1'),
('l2d', 'L2 Droit ', 'L2'),
('l2spol', 'Organisation Politique et Administrative', 'L2'),
('l3dprv', 'Droit Privé', 'L3'),
('l3dpub', 'Droit Public', 'L3'),
('l3spol', 'Organisation Politique et Administrative', 'L3'),
('m1al', 'Administration Locale', 'M1'),
('m1dadm', 'Droit Administrative', 'M1'),
('m1dcsc', 'Droit Criminel et Sciences Criminelles', 'M1'),
('m1dprv', 'Droit Privé', 'M1'),
('m2al', 'Administration Locale', 'M2'),
('m2dadm', 'Droit Administrative', 'M2'),
('m2dcsc', 'Droit Criminel et Sciences Criminelles', 'M2'),
('m2dprv', 'Droit Privé', 'M2');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `name`) VALUES
(1, 'ismailzrg', 'ismail2001', 'Ismail'),
(2, 'rouabah', 'rouabah00', 'Amine'),
(3, 'yaagoub', 'yaagoub00', 'Benouda');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cour`
--
ALTER TABLE `cour`
  ADD PRIMARY KEY (`id_cour`),
  ADD KEY `id_mod` (`id_mod`);

--
-- Indexes for table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`id_mod`),
  ADD KEY `id_niv` (`id_niv`),
  ADD KEY `id_spec` (`id_spec`),
  ADD KEY `id_sems` (`id_sems`);

--
-- Indexes for table `niveaux`
--
ALTER TABLE `niveaux`
  ADD PRIMARY KEY (`id_niv`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `password` (`password`) USING BTREE;

--
-- Indexes for table `semestre`
--
ALTER TABLE `semestre`
  ADD PRIMARY KEY (`id_sems`),
  ADD KEY `id_spec` (`id_spec`);

--
-- Indexes for table `specialite`
--
ALTER TABLE `specialite`
  ADD PRIMARY KEY (`id_spec`),
  ADD KEY `id_niv` (`id_niv`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cour`
--
ALTER TABLE `cour`
  MODIFY `id_cour` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cour`
--
ALTER TABLE `cour`
  ADD CONSTRAINT `cour_ibfk_1` FOREIGN KEY (`id_mod`) REFERENCES `module` (`id_mod`);

--
-- Constraints for table `module`
--
ALTER TABLE `module`
  ADD CONSTRAINT `module_ibfk_1` FOREIGN KEY (`id_niv`) REFERENCES `niveaux` (`id_niv`),
  ADD CONSTRAINT `module_ibfk_2` FOREIGN KEY (`id_spec`) REFERENCES `specialite` (`id_spec`),
  ADD CONSTRAINT `module_ibfk_3` FOREIGN KEY (`id_sems`) REFERENCES `semestre` (`id_sems`);

--
-- Constraints for table `semestre`
--
ALTER TABLE `semestre`
  ADD CONSTRAINT `semestre_ibfk_1` FOREIGN KEY (`id_spec`) REFERENCES `specialite` (`id_spec`);

--
-- Constraints for table `specialite`
--
ALTER TABLE `specialite`
  ADD CONSTRAINT `specialite_ibfk_1` FOREIGN KEY (`id_niv`) REFERENCES `niveaux` (`id_niv`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
