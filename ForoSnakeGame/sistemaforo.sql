-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-12-2020 a las 02:18:11
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistemaforo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `foro`
--

CREATE TABLE `foro` (
  `id` int(100) UNSIGNED NOT NULL,
  `autor` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `tema` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8_unicode_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `respuestas` int(100) NOT NULL DEFAULT '0',
  `identificador` int(100) NOT NULL DEFAULT '0',
  `ult_respuesta` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `foro`
--

INSERT INTO `foro` (`id`, `autor`, `tema`, `descripcion`, `fecha`, `respuestas`, `identificador`, `ult_respuesta`) VALUES
(39, 'xxx', '', 'ysi mati', '2020-10-18 20:19:46', 0, 0, '2020-10-18 20:19:46'),
(40, 'xxx', '', 'dsa', '2020-10-18 20:21:28', 0, 0, '2020-10-18 20:21:28'),
(41, 'xxx', 'jiji', 'xd', '2020-10-18 20:24:22', 0, 0, '2020-10-18 20:24:22'),
(42, 'Matias', 'Desarrollo', 'sadasdasdasd', '2020-10-18 20:40:27', 3, 0, '2020-10-18 20:39:23'),
(43, 'Matias', '', 'adasdasdasd', '2020-10-18 20:39:42', 0, 42, '2020-10-18 20:39:42'),
(44, 'Matias', '', 'sadasdasdasadads', '2020-10-18 20:40:14', 0, 42, '2020-10-18 20:40:14'),
(45, 'Matias', '', 'lalalalalalala', '2020-10-18 20:40:45', 1, 42, '2020-10-18 20:40:27'),
(46, 'Matias', '', 'asdasdsssssssss', '2020-10-18 20:40:45', 0, 45, '2020-10-18 20:40:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `user` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `pasadmin` varchar(250) NOT NULL,
  `rol` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id`, `user`, `password`, `email`, `pasadmin`, `rol`) VALUES
(1, 'Administrador', '', 'admin@gmail.com', '123456', 1),
(12, 'Matias', '123', 'verdes@gmail.com', '', 2),
(13, 'xxx', 'xxx', 'xxx@gmail.com', '', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `foro`
--
ALTER TABLE `foro`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `foro`
--
ALTER TABLE `foro`
  MODIFY `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
