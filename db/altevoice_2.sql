-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-08-2019 a las 07:11:33
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `altevoice_2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peticiones`
--

CREATE TABLE `peticiones` (
  `id` int(255) NOT NULL,
  `usuario_id` int(10) NOT NULL,
  `texto` varchar(255) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `peticiones`
--

INSERT INTO `peticiones` (`id`, `usuario_id`, `texto`, `fecha`) VALUES
(1, 1, 'CTRL+O', '2019-08-06 03:40:39'),
(2, 2, 'Windows+R', '2019-08-06 03:40:39'),
(3, 1, '', '2019-08-06 03:59:58'),
(4, 1, '', '2019-08-06 04:00:39'),
(5, 1, '', '2019-08-06 04:00:59'),
(6, 1, '', '2019-08-06 04:03:14'),
(7, 1, '', '2019-08-06 04:04:32'),
(8, 1, 'hola', '2019-08-06 04:53:41'),
(9, 1, 'ctrl+z', '2019-08-06 05:03:36'),
(10, 1, 'ctrl + y', '2019-08-06 05:05:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `redes`
--

CREATE TABLE `redes` (
  `id` int(255) NOT NULL,
  `usuario_id` int(10) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `redes`
--

INSERT INTO `redes` (`id`, `usuario_id`, `nombre`, `password`, `fecha`) VALUES
(1, 1, 'INFINITUMFFMV', 'DMLsuisflmGA', '2019-07-17'),
(2, 2, 'INFINITUMBUBIN2', 'FBHSFBNSFJIUJJD', '2019-07-17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(255) NOT NULL,
  `nombre` varchar(120) NOT NULL,
  `apellidos` varchar(120) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fecha` date DEFAULT NULL,
  `rol` varchar(100) NOT NULL,
  `imagen` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellidos`, `email`, `password`, `fecha`, `rol`, `imagen`) VALUES
(1, 'Juan ', 'Hernández Antopia', 'juan_27angel@hotmail.com', '$2y$04$VWy2QM90biCBHHZIHZ2E9.1.PdsNdtch1Km27BiDOenjiT.g5QDO.', '2019-07-17', 'admin', NULL),
(2, 'Juan', 'Castro Pérez', 'thalia@thalia.com', '$2y$04$7zeZdwX9N0nCn9z51RIwMuw2SXd0fk9tnt5S1BVXCCI00JaY35k76', '2019-07-17', 'admin', NULL),
(3, 'Antonio', 'López Quesada', 'antonio@antonio.com', '$2y$04$UQBesGzVzpF3SlTGl39lcOzkx9IpiN6lMJoTgrYt1dwPknwkEyep.', '2019-07-28', 'admin', NULL),
(4, 'Mario', 'Santillán Pérez', 'mario@mario.com', '$2y$04$8lLE4CD96Al2ACj85yGVSehTbCOG3438y32cdREgUoXAz0yEXkz/u', '2019-07-28', 'admin', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `peticiones`
--
ALTER TABLE `peticiones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_peticion_usuario` (`usuario_id`);

--
-- Indices de la tabla `redes`
--
ALTER TABLE `redes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_red_usuario` (`usuario_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uq_email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `peticiones`
--
ALTER TABLE `peticiones`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `redes`
--
ALTER TABLE `redes`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `peticiones`
--
ALTER TABLE `peticiones`
  ADD CONSTRAINT `fk_peticion_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `redes`
--
ALTER TABLE `redes`
  ADD CONSTRAINT `fk_red_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
