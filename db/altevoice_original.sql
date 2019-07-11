-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-06-2019 a las 22:04:37
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
-- Base de datos: `altevoice_original`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peticiones`
--

CREATE TABLE `peticiones` (
  `id` int(10) NOT NULL,
  `usuario_id` int(10) NOT NULL,
  `texto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `peticiones`
--

INSERT INTO `peticiones` (`id`, `usuario_id`, `texto`) VALUES
(1, 7, 'Ctrl + Shift +Alt'),
(2, 7, 'Ctrl+Pause');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `redes`
--

CREATE TABLE `redes` (
  `id` int(10) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `redes`
--

INSERT INTO `redes` (`id`, `nombre`, `password`, `fecha`) VALUES
(1, 'INFINITUMXFFFD', 'fmsjdsifnopsfnsff', '2019-06-19'),
(2, 'INFINITUMV52352F', 'udnbjbnnnd', '2019-06-19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) NOT NULL,
  `red_id` int(10) DEFAULT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fecha` date DEFAULT NULL,
  `rol` varchar(255) NOT NULL,
  `imagen` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `red_id`, `nombre`, `apellidos`, `email`, `password`, `fecha`, `rol`, `imagen`) VALUES
(1, NULL, 'juan', 'hernandez', 'juan@juan.com', '$2y$04$3.iN/qOTMb1FohGL6xn1/e6wgaVmRq5Fwf2wYV7B327iDaPI12bkS', '2019-06-12', 'user', NULL),
(2, NULL, 'Clara', 'Pérez Prado', 'clara@clara.com', '$2y$04$s.FT3EgrOyoVXDa1vLjffupS13M/vi.rmoDd.y2YweLkUTqJ2uCgK', '2019-06-16', 'user', NULL),
(3, NULL, 'Jerry', 'Antopia Jimenez', 'jerry@jerry.com', '$2y$04$5VhucP0rUBUlukAHVdsVXuZIgLHH3gpwmFRxHx1pabvUuNTM3dmIS', '2019-06-16', 'user', NULL),
(4, NULL, 'ju4', 'c25c1c', 'lucero@gmail.com', '$2y$04$OKDNsnPDbKB23e6Wy2wd0OKyxYmVwEG4q7HRe8KccV5dghWpHCD7K', '2019-06-18', 'user', NULL),
(5, NULL, 'Jack', 'Nicholson', 'jacj@hotmail.com', '$2y$04$Ik/kvs80tz2m/ym47WuQeeG8gfZQxBQtdZYizh4SaqtZX8nlu5yTu', '2019-06-19', 'user', NULL),
(6, NULL, 'juan', 'Hernández Antopia', 'russo@gmail.com', '$2y$04$rRfGEwewnSBJX5aezRFFauo4GcfYSU1ZsBfeMyfdWtLbQrEpu64sW', '2019-06-19', 'user', NULL),
(7, NULL, 'Jay', 'Salomon', 'jay@hotmail.com', '$2y$04$W8MwDB8cL4wDx7EhOrUF5Ojvpl95.5Ste4cxq2pWtRbmwVwZeFm9e', '2019-06-19', 'admin', NULL);

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
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uq_email` (`email`),
  ADD KEY `fk_usuario_red` (`red_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `peticiones`
--
ALTER TABLE `peticiones`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `redes`
--
ALTER TABLE `redes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `peticiones`
--
ALTER TABLE `peticiones`
  ADD CONSTRAINT `fk_peticion_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_usuario_red` FOREIGN KEY (`red_id`) REFERENCES `redes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
