-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-09-2020 a las 05:49:02
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `maranata`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diaconos`
--

CREATE TABLE `diaconos` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `last_name` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `diaconos`
--

INSERT INTO `diaconos` (`id`, `name`, `last_name`) VALUES
(1, '1', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `user` varchar(10) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `user`, `pass`, `name`) VALUES
(1, 'sura', 'sura2020', 'Rene Alexander Sura Duran'),
(2, 'cortez', 'cortez2020', 'Eduardo Cortez'),
(3, 'zulma', 'zulma2020', 'Zulma Beatriz de Beltran');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `votaciones`
--

CREATE TABLE `votaciones` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_nominado` int(11) NOT NULL,
  `nomina` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `votaciones`
--

INSERT INTO `votaciones` (`id`, `id_user`, `id_nominado`, `nomina`) VALUES
(1, 1, 3, 'diaconos'),
(2, 1, 4, 'diaconos'),
(3, 1, 6, 'diaconos'),
(4, 1, 7, 'diaconos'),
(5, 1, 8, 'diaconos'),
(6, 1, 9, 'diaconos'),
(7, 1, 10, 'diaconos'),
(8, 1, 11, 'diaconos'),
(9, 1, 12, 'diaconos'),
(10, 1, 2, 'diaconizas'),
(11, 1, 3, 'diaconizas'),
(12, 1, 4, 'diaconizas'),
(13, 1, 7, 'diaconizas'),
(14, 1, 8, 'diaconizas'),
(15, 1, 9, 'diaconizas'),
(16, 1, 10, 'diaconizas'),
(17, 1, 11, 'diaconizas'),
(18, 1, 12, 'diaconizas'),
(19, 1, 1, 'fraternidad'),
(20, 1, 4, 'fraternidad'),
(21, 1, 6, 'fraternidad'),
(22, 1, 7, 'fraternidad'),
(23, 1, 2, 'concilio'),
(24, 1, 4, 'concilio'),
(25, 1, 5, 'concilio'),
(26, 1, 7, 'concilio');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `diaconos`
--
ALTER TABLE `diaconos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `votaciones`
--
ALTER TABLE `votaciones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `diaconos`
--
ALTER TABLE `diaconos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `votaciones`
--
ALTER TABLE `votaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
