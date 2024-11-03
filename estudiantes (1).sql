-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2024 at 11:31 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `estudiantes`
--

-- --------------------------------------------------------

--
-- Table structure for table `docentes`
--

CREATE TABLE `docentes` (
  `id_docente` int(11) NOT NULL,
  `cedula` int(8) NOT NULL,
  `nombres` varchar(45) NOT NULL,
  `apellidos` varchar(45) NOT NULL,
  `edad` int(2) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `id_sexo` int(11) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `telefono` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `docentes`
--

INSERT INTO `docentes` (`id_docente`, `cedula`, `nombres`, `apellidos`, `edad`, `fecha_nacimiento`, `id_sexo`, `correo`, `telefono`) VALUES
(1, 14622737, 'OSWALDO JOSE', 'AVILAN RODRIGUEZ', 42, '1982-06-03', 1, 'yoclens@gmail.com', '04129487984');

-- --------------------------------------------------------

--
-- Table structure for table `estudiantes`
--

CREATE TABLE `estudiantes` (
  `id_estudiantes` int(11) NOT NULL,
  `cedula` varchar(8) NOT NULL,
  `nombres` varchar(45) NOT NULL,
  `apellidos` varchar(45) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `edad` varchar(2) NOT NULL,
  `id_sexo` int(11) NOT NULL,
  `correo` varchar(45) NOT NULL,
  `telefono` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `estudiantes`
--

INSERT INTO `estudiantes` (`id_estudiantes`, `cedula`, `nombres`, `apellidos`, `fecha_nacimiento`, `edad`, `id_sexo`, `correo`, `telefono`) VALUES
(1, '14622737', 'OSWALDO JOSE', 'AVILAN RODRIGUEZ', '1982-06-03', '42', 1, 'yoclens@gmail.com', '04129487984'),
(2, '27809663', 'JUAN JOSE MANUEL', 'AGUILERA GARCIA', '1994-10-20', '29', 1, 'tipo@gmail.com', '04129999999'),
(3, '32568061', 'AMELYS DILIANNYS', 'MORENO HERRERA', '1984-10-25', '39', 2, 'ame@gmail.com', '04148882236'),
(4, '30666666', 'Julio', 'Espinoza', '0000-00-00', '', 1, 'supercorreo@gmail.com', '04244844545');

-- --------------------------------------------------------

--
-- Table structure for table `inscripcion`
--

CREATE TABLE `inscripcion` (
  `id_inscripcion` int(11) NOT NULL,
  `id_estudiante` int(11) NOT NULL,
  `id_materia` int(11) NOT NULL,
  `id_docente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `materias`
--

CREATE TABLE `materias` (
  `id_materias` int(11) NOT NULL,
  `materias` varchar(45) NOT NULL,
  `id_pnf` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `materias`
--

INSERT INTO `materias` (`id_materias`, `materias`, `id_pnf`) VALUES
(14, 'Matemáticas', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pnf`
--

CREATE TABLE `pnf` (
  `id_pnf` int(11) NOT NULL,
  `pnf` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pnf`
--

INSERT INTO `pnf` (`id_pnf`, `pnf`) VALUES
(1, 'Informatica');

-- --------------------------------------------------------

--
-- Table structure for table `sexo`
--

CREATE TABLE `sexo` (
  `id_sexo` int(11) NOT NULL,
  `sexo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sexo`
--

INSERT INTO `sexo` (`id_sexo`, `sexo`) VALUES
(1, 'Masculino'),
(2, 'Femenino');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `docentes`
--
ALTER TABLE `docentes`
  ADD PRIMARY KEY (`id_docente`),
  ADD KEY `id_sexo` (`id_sexo`);

--
-- Indexes for table `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`id_estudiantes`),
  ADD KEY `id_sexo` (`id_sexo`);

--
-- Indexes for table `inscripcion`
--
ALTER TABLE `inscripcion`
  ADD PRIMARY KEY (`id_inscripcion`),
  ADD KEY `id_docente` (`id_docente`),
  ADD KEY `id_materia` (`id_materia`),
  ADD KEY `id_estudiante` (`id_estudiante`);

--
-- Indexes for table `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id_materias`),
  ADD KEY `id_pnf` (`id_pnf`);

--
-- Indexes for table `pnf`
--
ALTER TABLE `pnf`
  ADD PRIMARY KEY (`id_pnf`);

--
-- Indexes for table `sexo`
--
ALTER TABLE `sexo`
  ADD PRIMARY KEY (`id_sexo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `docentes`
--
ALTER TABLE `docentes`
  MODIFY `id_docente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `id_estudiantes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `materias`
--
ALTER TABLE `materias`
  MODIFY `id_materias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pnf`
--
ALTER TABLE `pnf`
  MODIFY `id_pnf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sexo`
--
ALTER TABLE `sexo`
  MODIFY `id_sexo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `docentes`
--
ALTER TABLE `docentes`
  ADD CONSTRAINT `docentes_ibfk_1` FOREIGN KEY (`id_sexo`) REFERENCES `sexo` (`id_sexo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD CONSTRAINT `estudiantes_ibfk_1` FOREIGN KEY (`id_sexo`) REFERENCES `sexo` (`id_sexo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `inscripcion`
--
ALTER TABLE `inscripcion`
  ADD CONSTRAINT `inscripcion_ibfk_1` FOREIGN KEY (`id_docente`) REFERENCES `docentes` (`id_docente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `inscripcion_ibfk_2` FOREIGN KEY (`id_materia`) REFERENCES `materias` (`id_materias`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `inscripcion_ibfk_3` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiantes` (`id_estudiantes`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `materias`
--
ALTER TABLE `materias`
  ADD CONSTRAINT `materias_ibfk_1` FOREIGN KEY (`id_pnf`) REFERENCES `pnf` (`id_pnf`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
