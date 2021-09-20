-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-09-2021 a las 02:19:10
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `consulting_rooms`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doctors`
--

CREATE TABLE `doctors` (
  `ID_doctors` int(11) NOT NULL,
  `ID_specialities` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `schedule` datetime NOT NULL,
  `dr_office` varchar(100) NOT NULL,
  `direction` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `doctors`
--

INSERT INTO `doctors` (`ID_doctors`, `ID_specialities`, `name`, `surname`, `schedule`, `dr_office`, `direction`) VALUES
(2, 2, 'Diego', 'Arreceygor', '2021-09-15 20:30:39', '', ''),
(3, 4, 'Norberto', 'Castaño', '2021-09-05 20:32:16', '', ''),
(6, 2, 'Gregory', 'House', '2021-11-30 21:14:53', 'Princenton Plainsboro', 'Nueva Jersey'),
(7, 2, 'Patch', 'Adams', '2021-10-12 21:14:53', 'Instituto Gesundheit!', 'Virginia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `specialities`
--

CREATE TABLE `specialities` (
  `ID` int(11) NOT NULL,
  `speciality` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `specialities`
--

INSERT INTO `specialities` (`ID`, `speciality`) VALUES
(2, 'Medicina general'),
(3, 'Cirugia general'),
(4, 'Neurocirugia'),
(5, 'Odontologia'),
(6, 'Kinesiologia'),
(7, 'Fonoaudiologia'),
(8, 'Ginecologia'),
(9, 'Nefrologia'),
(10, 'Oftalmologia'),
(11, 'Pediatria'),
(12, 'Psicologia'),
(13, 'Urologia'),
(14, 'Neonatologia'),
(15, 'Cardiologia');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`ID_doctors`),
  ADD KEY `specialities_rel` (`ID_specialities`);

--
-- Indices de la tabla `specialities`
--
ALTER TABLE `specialities`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `doctors`
--
ALTER TABLE `doctors`
  MODIFY `ID_doctors` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `specialities`
--
ALTER TABLE `specialities`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `doctors`
--
ALTER TABLE `doctors`
  ADD CONSTRAINT `specialities_rel` FOREIGN KEY (`ID_specialities`) REFERENCES `specialities` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
