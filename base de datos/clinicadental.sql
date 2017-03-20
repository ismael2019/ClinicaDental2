-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-05-2016 a las 21:29:38
-- Versión del servidor: 10.1.10-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `clinicadental`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `c_i` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `sex` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `phone` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suggestions`
--

CREATE TABLE `suggestions` (
  `id` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `suggestion` text COLLATE utf8_spanish_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `suggestions`
--

INSERT INTO `suggestions` (`id`, `username`, `last_name`, `email`, `phone`, `suggestion`, `created`, `modified`) VALUES
(1, 'Usuario', 'Apellido Usuario', 'usuario@hotmail.com', '72217540', 'Sugerencia1', '2016-05-03 00:06:26', '2016-05-03 00:06:26'),
(2, 'Mario', 'mario ', 'mario@hotmail.com', '751489', 'sugerencia2', '2016-05-10 14:03:58', '2016-05-10 14:03:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `c_i` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `role` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `c_i`, `password`, `role`, `created`, `modified`) VALUES
(1, 'dentista', '52165578', '$2y$10$UNzLBc3luoe2EglDokY4NOr9Q.H96wcen3Fsud61oJseEFe9BuGem', 'dentista', '2016-04-22 18:01:35', '2016-04-22 18:01:35'),
(2, 'protesista', '5869321', '$2y$10$RiWhEPN8mzUvwlaQzYp9LO4t99v7oRNJg0R1N2cHM1q1rVg4325py', 'protesista', '2016-04-22 18:02:00', '2016-04-22 18:02:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `suggestions`
--
ALTER TABLE `suggestions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `suggestions`
--
ALTER TABLE `suggestions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
