-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-07-2018 a las 15:58:18
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nick` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `nick`) VALUES
(2, 'asdf'),
(3, 'asdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `id` int(11) NOT NULL,
  `id_cliente` int(10) NOT NULL,
  `texto` longtext NOT NULL,
  `valoracion` int(2) UNSIGNED ZEROFILL NOT NULL,
  `id_respuesta` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comunidades`
--

CREATE TABLE `comunidades` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `comunidad` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `capital_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `comunidades`
--

INSERT INTO `comunidades` (`id`, `slug`, `comunidad`, `capital_id`) VALUES
(1, 'andalucia', 'Andalucía', 6152),
(2, 'aragon', 'Aragón', 8113),
(3, 'principado-de-asturias', 'Principado de Asturias', 5009),
(4, 'illes-balears', 'Illes Balears', 836),
(5, 'canarias', 'Canarias', 5252),
(6, 'cantabria', 'Cantabria', 5823),
(7, 'castilla-y-leon', 'Castilla y León', 7415),
(8, 'castilla-la-mancha', 'Castilla - La Mancha', 6934),
(9, 'cataluna', 'Cataluña', 881),
(10, 'comunitat-valenciana', 'Comunitat Valenciana', 7219),
(11, 'extremadura', 'Extremadura', 712),
(12, 'galicia', 'Galicia', 2198),
(13, 'comunidad-de-madrid', 'Comunidad de Madrid ', 4356),
(14, 'region-de-murcia', 'Región de Murcia', 4588),
(15, 'comunidad-foral-de-navarra', 'Comunidad Foral de Navarra', 4815),
(16, 'pais-vasco', 'País Vasco', 46),
(17, 'la-rioja', 'La Rioja', 4124),
(18, 'ceuta', 'Ceuta', 8115),
(19, 'melilla', 'Melilla', 8116);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `calle` varchar(100) NOT NULL,
  `cp` int(5) NOT NULL,
  `id_categoria` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localidad`
--

CREATE TABLE `localidad` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `provincia_id` varchar(255) NOT NULL,
  `cp` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincias`
--

CREATE TABLE `provincias` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `provincia` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `comunidad_id` int(10) UNSIGNED NOT NULL,
  `capital_id` int(11) NOT NULL DEFAULT '-1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 CHECKSUM=1 COLLATE=utf8_spanish_ci DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

--
-- Volcado de datos para la tabla `provincias`
--

INSERT INTO `provincias` (`id`, `slug`, `provincia`, `comunidad_id`, `capital_id`) VALUES
(1, 'alava', 'Álava', 16, 46),
(2, 'albacete', 'Albacete', 8, 54),
(3, 'alicante', 'Alicante', 10, 152),
(4, 'almeria', 'Almería', 1, 292),
(5, 'vila', 'Ávila', 7, 395),
(6, 'badajoz', 'Badajoz', 11, 644),
(7, 'illes-balears', 'Illes Balears', 4, 836),
(8, 'barcelona', 'Barcelona', 9, 881),
(9, 'burgos', 'Burgos', 7, 1220),
(10, 'caceres', 'Cáceres', 11, 1580),
(11, 'cadiz', 'Cádiz', 1, 1776),
(12, 'castellon', 'Castellón', 10, 1844),
(13, 'ciudad-real', 'Ciudad Real', 8, 1978),
(14, 'cordoba', 'Córdoba', 1, 2065),
(15, 'a-coruna', 'A Coruña', 12, 2150),
(16, 'cuenca', 'Cuenca', 8, 2285),
(17, 'girona', 'Girona', 9, 2526),
(18, 'granada', 'Granada', 1, 2747),
(19, 'guadalajara', 'Guadalajara', 8, 2947),
(20, 'guipuzcoa', 'Guipúzcoa', 16, 3159),
(21, 'huelva', 'Huelva', 1, 3257),
(22, 'huesca', 'Huesca', 2, 3396),
(23, 'jaen', 'Jaén', 1, 3545),
(24, 'leon', 'León', 7, 3676),
(25, 'lleida', 'Lleida', 9, 3918),
(26, 'la-rioja', 'La Rioja', 17, 4124),
(27, 'lugo', 'Lugo', 12, 4238),
(28, 'madrid', 'Madrid', 13, 4356),
(29, 'malaga', 'Málaga', 1, 4523),
(30, 'murcia', 'Murcia', 14, 4588),
(31, 'navarra', 'Navarra', 15, 4815),
(32, 'ourense', 'Ourense', 12, 4925),
(33, 'asturias', 'Asturias', 3, 5009),
(34, 'palencia', 'Palencia', 7, 5137),
(35, 'las-palmas', 'Las Palmas', 5, 5252),
(36, 'pontevedra', 'Pontevedra', 12, 5312),
(37, 'salamanca', 'Salamanca', 7, 5588),
(38, 'santa-cruz-de-tenerife', 'Santa Cruz de Tenerife', 5, 5732),
(39, 'cantabria', 'Cantabria', 6, 5823),
(40, 'segovia', 'Segovia', 7, 6024),
(41, 'sevilla', 'Sevilla', 1, 6152),
(42, 'soria', 'Soria', 7, 6307),
(43, 'tarragona', 'Tarragona', 9, 6499),
(44, 'teruel', 'Teruel', 2, 6721),
(45, 'toledo', 'Toledo', 8, 6934),
(46, 'valencia', 'Valencia', 10, 7219),
(47, 'valladolid', 'Valladolid', 7, 7415),
(48, 'vizcaya', 'Vizcaya', 16, 7489),
(49, 'zamora', 'Zamora', 7, 7821),
(50, 'zaragoza', 'Zaragoza', 2, 8113),
(51, 'ceuta', 'Ceuta', 18, 8115),
(52, 'melilla', 'Melilla', 19, 8116);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_cliente` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tipo_usuario` enum('administrador','cliente','','') NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comunidades`
--
ALTER TABLE `comunidades`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `IDX_cominidad` (`comunidad`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_empresa` (`id`);

--
-- Indices de la tabla `localidad`
--
ALTER TABLE `localidad`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cp` (`cp`);

--
-- Indices de la tabla `provincias`
--
ALTER TABLE `provincias`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `IDX_provincia` (`provincia`),
  ADD KEY `FK_provincias` (`comunidad_id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_cliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `localidad`
--
ALTER TABLE `localidad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `provincias`
--
ALTER TABLE `provincias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
