-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-03-2018 a las 07:19:36
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `produccion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plantas`
--

CREATE TABLE `plantas` (
  `id_planta` int(11) NOT NULL,
  `planta` varchar(50) COLLATE utf8_bin NOT NULL,
  `unidades_producidas` int(11) NOT NULL,
  `unidades_defectuosas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `plantas`
--

INSERT INTO `plantas` (`id_planta`, `planta`, `unidades_producidas`, `unidades_defectuosas`) VALUES
(1, 'Hermosillo', 5000, 100),
(2, 'Mexico', 10000, 200),
(3, 'Leon', 20000, 300),
(4, 'Oaxaca', 15000, 150),
(5, 'Veracruz', 17000, 100),
(6, 'Puebla', 18000, 800);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultados`
--

CREATE TABLE `resultados` (
  `id_resultados` int(11) NOT NULL,
  `planta_mayor_produccion` varchar(50) COLLATE utf8_bin NOT NULL,
  `cantidad_mayor_produccion` int(11) NOT NULL,
  `planta_menor_produccion` varchar(50) COLLATE utf8_bin NOT NULL,
  `cantidad_menor_produccion` int(11) NOT NULL,
  `planta_mayor_defecto` varchar(50) COLLATE utf8_bin NOT NULL,
  `cantidad_mayor_defecto` int(11) NOT NULL,
  `planta_menor_defecto` varchar(50) COLLATE utf8_bin NOT NULL,
  `cantidad_menor_defecto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `resultados`
--

INSERT INTO `resultados` (`id_resultados`, `planta_mayor_produccion`, `cantidad_mayor_produccion`, `planta_menor_produccion`, `cantidad_menor_produccion`, `planta_mayor_defecto`, `cantidad_mayor_defecto`, `planta_menor_defecto`, `cantidad_menor_defecto`) VALUES
(1, 'Leon', 20000, 'Oaxaca', 15000, 'Puebla', 4, 'Veracruz', 0),
(2, 'Leon', 20000, 'Oaxaca', 15000, 'Puebla', 4, 'Veracruz', 0),
(3, 'Leon', 20000, 'Oaxaca', 15000, 'Puebla', 4, 'Veracruz', 0),
(4, 'Leon', 20000, 'Oaxaca', 15000, 'Puebla', 4, 'Veracruz', 0),
(5, 'Leon', 20000, 'Oaxaca', 15000, 'Puebla', 4, 'Veracruz', 0),
(6, 'Leon', 20000, 'Oaxaca', 15000, 'Puebla', 4, 'Veracruz', 0),
(7, 'Leon', 20000, 'Oaxaca', 15000, 'Puebla', 4, 'Veracruz', 0),
(8, 'Leon', 20000, 'Oaxaca', 15000, 'Puebla', 4, 'Veracruz', 0),
(9, 'Leon', 20000, '', 0, 'Puebla', 4, 'Veracruz', 0),
(10, 'Leon', 20000, 'Oaxaca', 15000, 'Puebla', 4, 'Veracruz', 0),
(11, 'Leon', 20000, 'Oaxaca', 15000, 'Puebla', 4, 'Veracruz', 0),
(12, 'Leon', 20000, 'Oaxaca', 15000, 'Puebla', 4, 'Veracruz', 0),
(13, 'Leon', 20000, 'Oaxaca', 15000, 'Puebla', 4, 'Veracruz', 0),
(14, 'Leon', 20000, 'Oaxaca', 15000, 'Puebla', 4, 'Veracruz', 0),
(15, 'Leon', 20000, 'Oaxaca', 15000, 'Puebla', 4, 'Veracruz', 0),
(16, 'Leon', 20000, 'Oaxaca', 15000, 'Puebla', 4, 'Veracruz', 0),
(17, 'Leon', 20000, 'Oaxaca', 15000, 'Puebla', 4, 'Veracruz', 0),
(18, 'Leon', 20000, 'Oaxaca', 15000, 'Puebla', 4, 'Veracruz', 0),
(19, 'Leon', 20000, 'Oaxaca', 15000, 'Puebla', 4, 'Veracruz', 0),
(20, 'Leon', 20000, 'Oaxaca', 15000, 'Puebla', 4, 'Veracruz', 0),
(21, 'Leon', 20000, 'Oaxaca', 15000, 'Puebla', 4, 'Veracruz', 0),
(22, 'Leon', 20000, 'Oaxaca', 15000, 'Puebla', 4, 'Veracruz', 0),
(23, 'Leon', 20000, 'Oaxaca', 15000, 'Puebla', 4, 'Veracruz', 0),
(24, 'Leon', 20000, 'Oaxaca', 15000, 'Puebla', 4, 'Veracruz', 0),
(25, 'Leon', 20000, 'Oaxaca', 15000, 'Puebla', 4, 'Veracruz', 0),
(26, 'Leon', 20000, 'Oaxaca', 15000, 'Puebla', 4, 'Veracruz', 0),
(27, 'Leon', 20000, 'Oaxaca', 15000, 'Puebla', 4, 'Veracruz', 0),
(28, 'Leon', 20000, 'Oaxaca', 15000, 'Puebla', 4, 'Veracruz', 0),
(29, 'Leon', 20000, 'Oaxaca', 15000, 'Puebla', 4, 'Veracruz', 0),
(30, 'Leon', 20000, 'Oaxaca', 15000, 'Puebla', 4, 'Veracruz', 0),
(31, 'Leon', 20000, 'Oaxaca', 15000, 'Puebla', 4, 'Veracruz', 0),
(32, 'Leon', 20000, 'Oaxaca', 15000, 'Puebla', 4, 'Veracruz', 0),
(33, 'Leon', 20000, 'Oaxaca', 15000, 'Puebla', 4, 'Veracruz', 0),
(34, 'Leon', 20000, 'Oaxaca', 15000, 'Puebla', 4, 'Veracruz', 0),
(35, 'Leon', 20000, 'Oaxaca', 15000, 'Puebla', 4, 'Veracruz', 0),
(36, 'Leon', 20000, 'Hermosillo', 5000, 'Puebla', 4, 'Veracruz', 0),
(37, 'Leon', 20000, 'Hermosillo', 5000, 'Puebla', 4, 'Veracruz', 0),
(38, 'Leon', 20000, 'Hermosillo', 5000, 'Puebla', 4, 'Veracruz', 0),
(39, 'Leon', 20000, 'Hermosillo', 5000, 'Puebla', 4, 'Veracruz', 0),
(40, 'Leon', 20000, 'Hermosillo', 5000, 'Puebla', 4, 'Veracruz', 0),
(41, 'Leon', 20000, 'Hermosillo', 5000, 'Puebla', 4, 'Veracruz', 0),
(42, 'Leon', 20000, 'Hermosillo', 5000, 'Puebla', 4, 'Veracruz', 0),
(43, 'Leon', 20000, 'Hermosillo', 5000, 'Puebla', 4, 'Veracruz', 0),
(44, 'Leon', 20000, 'Hermosillo', 5000, 'Puebla', 4, 'Veracruz', 0),
(45, 'Leon', 20000, 'Hermosillo', 5000, 'Puebla', 4, 'Veracruz', 0),
(46, 'Leon', 20000, 'Hermosillo', 5000, 'Puebla', 4, 'Veracruz', 0),
(47, 'Leon', 20000, 'Hermosillo', 5000, 'Puebla', 4, 'Veracruz', 0),
(48, 'Leon', 20000, 'Hermosillo', 5000, 'Puebla', 4, 'Veracruz', 0),
(49, 'Leon', 20000, 'Hermosillo', 5000, 'Puebla', 4, 'Veracruz', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `plantas`
--
ALTER TABLE `plantas`
  ADD PRIMARY KEY (`id_planta`);

--
-- Indices de la tabla `resultados`
--
ALTER TABLE `resultados`
  ADD PRIMARY KEY (`id_resultados`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `plantas`
--
ALTER TABLE `plantas`
  MODIFY `id_planta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `resultados`
--
ALTER TABLE `resultados`
  MODIFY `id_resultados` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
