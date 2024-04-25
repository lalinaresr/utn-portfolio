-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-04-2024 a las 23:28:37
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `crud`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `slug` varchar(60) NOT NULL,
  `description` text NOT NULL,
  `link` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `projects`
--

INSERT INTO `projects` (`id`, `type_id`, `name`, `slug`, `description`, `link`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Curriculum Vitae', 'curriculum vitae', 'Primera práctica la cual consistía en crear un Curriculum Vitae y diseñamos 3 formularios los cuales eran para datos personales, educación y experiencia en ellos solo ingresábamos datos para después solo imprimirlos.', 'http://127.0.0.1:8000/proyectos/practicas/primer-parcial/curriculum-vitae', 'http://127.0.0.1:8000/public/images/projects/cv.png', '2024-04-20 06:12:49', NULL, NULL),
(2, 1, 'Calculadora', 'calculadora', 'Segunda práctica la cual consistía en crear un formulario en el cual pediremos 2 valores numéricos, y con esto realizar las operaciones básicas comúnmente conocidas (Suma, Resta, Producto, División, Residuo, Creciente, Decreciente).', 'http://127.0.0.1:8000/proyectos/practicas/primer-parcial/calculadora', 'http://127.0.0.1:8000/public/images/projects/ob.png', '2024-04-20 06:13:52', NULL, NULL),
(3, 1, 'Apoyos Económicos', 'apoyos económicos', 'Tercera práctica la cual consistía en crear un formulario en el cual damos como opciones 3 tipos de apoyos (Estudiantes, Madres Solteras, Adultos Mayores) y dependiendo del que seleccionara el usuario arrojaría el formulario correspondiente.', 'http://127.0.0.1:8000/proyectos/practicas/primer-parcial/apoyos-economicos', 'http://127.0.0.1:8000/public/images/projects/ae.png', '2024-04-20 06:22:01', NULL, NULL),
(4, 1, 'Agencia de Carros', 'agencia de carros', 'Cuarta práctica la cual consistía en realizar la venta de un carro, y esta depende del tipo de carro, versión y plan de trabajo. El usuario iba proporcionando datos para adquirir su carro a la medida. Al final se le presentaba los detalles de compra.', 'http://127.0.0.1:8000/proyectos/practicas/primer-parcial/agencia-carros', 'http://127.0.0.1:8000/public/images/projects/ac.png', '2024-04-22 04:02:42', NULL, NULL),
(5, 2, 'Tienda Deportiva', 'tienda deportiva', 'Examen tipo A del primer parcial el cual consistía en simular ventas en una tienda deportiva presentando un formulario el cual solicitaba los datos de tipo de producto, marca y cantidad para poder hacer los cálculos pertinentes dependiente el producto la cantidad y agregándole un porcentaje extra por marca.', 'http://127.0.0.1:8000/proyectos/examenes/primer-parcial/tienda-deportiva', 'http://127.0.0.1:8000/public/images/projects/td.png', '2024-04-24 04:48:31', NULL, NULL),
(6, 2, 'Inmobiliaria', 'inmobiliaria', 'Examen tipo B del primer parcial el cual consistía en simular ventas de inmuebles por continentes presentando un formulario el cual solicitaba el continente, tiempo a pagar, sueldo y enganche para poder hacer los cálculos pertinentes validando que el sueldo y enganche sean aptos para obtener el crédito.', 'http://127.0.0.1:8000/proyectos/examenes/primer-parcial/inmobiliaria', 'http://127.0.0.1:8000/public/images/projects/i.png', '2024-04-24 21:26:32', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `types`
--

CREATE TABLE `types` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `slug` varchar(60) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `types`
--

INSERT INTO `types` (`id`, `name`, `slug`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Practica', 'practica', '2024-04-19 06:11:29', NULL, NULL),
(2, 'Examen', 'examen', '2024-04-19 06:11:29', NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_type_project` (`type_id`);

--
-- Indices de la tabla `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `types`
--
ALTER TABLE `types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `fk_type_project` FOREIGN KEY (`type_id`) REFERENCES `types` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
