-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-06-2019 a las 15:11:06
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.3

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
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nick` varchar(20) NOT NULL,
  `bloqueado` tinyint(1) NOT NULL DEFAULT '0',
  `confirmado` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `nick`, `bloqueado`, `confirmado`) VALUES
(8, 'administrador', 0, 0),
(9, 'Gniwy', 0, 0),
(12, 'charlie', 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `id` int(11) NOT NULL,
  `id_cliente` int(10) NOT NULL,
  `texto` longtext NOT NULL,
  `valoracion` int(2) UNSIGNED ZEROFILL NOT NULL,
  `id_respuesta` int(10) NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '1',
  `id_empresa` int(11) NOT NULL,
  `puntos_positivos` int(11) NOT NULL DEFAULT '0',
  `puntos_negativos` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`id`, `id_cliente`, `texto`, `valoracion`, `id_respuesta`, `activo`, `id_empresa`, `puntos_positivos`, `puntos_negativos`) VALUES
(2, 9, '', 05, 0, 1, 2, 0, 0),
(3, 9, '', 02, 0, 1, 3, 0, 0),
(4, 9, 'Es un trabajo duro que requiere mucha paciencia y saber tratar con el público', 02, 0, 1, 1, 0, 0),
(5, 9, 'Tu opinion de la empresa que vas a subir', 04, 0, 1, 4, 0, 0),
(6, 9, 'hola', 04, 0, 1, 2, 0, 0),
(7, 9, 'cacota', 02, 0, 1, 2, 0, 0),
(8, 9, '', 01, 0, 1, 5, 0, 0),
(10, 9, '', 01, 0, 1, 7, 0, 0),
(11, 9, '234', 05, 0, 1, 8, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios_valoracion`
--

CREATE TABLE `comentarios_valoracion` (
  `id_comentario` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `valoracion` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentarios_valoracion`
--

INSERT INTO `comentarios_valoracion` (`id_comentario`, `id_cliente`, `valoracion`) VALUES
(2, 9, 1),
(4, 9, 1),
(6, 9, 1),
(7, 9, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `calle` varchar(100) NOT NULL,
  `cp` int(5) NOT NULL,
  `id_localidad` int(11) NOT NULL,
  `id_categoria` varchar(255) NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '1',
  `lat` varchar(100) NOT NULL,
  `lng` varchar(100) NOT NULL,
  `valoracion_media` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id`, `nombre`, `calle`, `cp`, `id_localidad`, `id_categoria`, `activo`, `lat`, `lng`, `valoracion_media`) VALUES
(1, 'Mercadona', 'avd Mijas', 1234567, 55, '', 1, '36.54181405688182', '-4.6250831868899205', 0),
(2, 'febo', 'calle azul', 123456, 1, '', 1, '52.37372099105639', '4.8926845401986805', 0),
(3, 'hola', '123', 333333, 1, '', 1, '36.543018662984196', '-4.613913869077439', 0),
(4, 'Farmacia', 'w', 123233, 23, '', 1, '52.362602527168704', '4.892354408094946', 0),
(5, 'panaderia', 'calle prueba 1', 123456, 61, '', 1, '52.368472455289265', '4.894414380905956', 0),
(7, '2', '2', 233333, 13, '', 1, '36.84006462037767', '-3.7298028542626804', 0),
(8, '3', '3', 3333333, 29, '', 1, '36.778492404594154', '-4.268142415539485', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localidad`
--

CREATE TABLE `localidad` (
  `id` int(11) NOT NULL,
  `nombre` varchar(70) NOT NULL,
  `provincia_id` int(11) NOT NULL,
  `cp` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `localidad`
--

INSERT INTO `localidad` (`id`, `nombre`, `provincia_id`, `cp`) VALUES
(1, 'Amsterdam', 1, 29649),
(2, 'Haarlem', 1, 29649),
(3, 'Zaanstad', 1, 0),
(4, 'Haarlemmermeer', 1, 0),
(5, 'Alkmaar', 1, 0),
(6, 'Amstelveen', 1, 0),
(7, 'Hilversum', 1, 0),
(8, 'Nissewaard', 1, 0),
(9, 'Purmerend', 1, 0),
(10, 'Hoorn', 1, 0),
(11, 'Velsen', 1, 0),
(12, 'Gooise Meren', 1, 0),
(13, 'Den Helder', 1, 0),
(14, 'Heerhugowaard', 1, 0),
(15, 'Róterdam', 2, 0),
(16, 'La Haya', 2, 0),
(17, 'Rijswijk', 2, 0),
(18, 'Zoetermeer', 2, 0),
(19, 'Leiden', 2, 0),
(20, 'Dordrecht', 2, 0),
(21, 'Alphen aan den Rijn', 2, 0),
(22, 'Westland', 2, 0),
(23, 'Delft', 2, 0),
(24, 'Schiedam', 2, 0),
(25, 'Spijkenisse', 2, 0),
(26, 'Leidschendam-Voorburg', 2, 0),
(27, 'Vlaardingen', 2, 0),
(28, 'Gouda', 2, 0),
(29, 'Capelle aan den IJssel', 2, 0),
(30, 'Katwijk', 2, 0),
(31, 'Lansingerland', 2, 0),
(32, 'Krimpenerwaard', 2, 0),
(33, 'Pijnacker-Nootdorp', 2, 0),
(34, 'Utrecht', 3, 0),
(35, 'Amersfoort', 3, 0),
(36, 'Veenendaal', 3, 0),
(37, 'Zeist', 3, 0),
(38, 'Nieuwegein', 3, 0),
(39, 'Eindhoven', 4, 0),
(40, 'Tilburgo', 4, 0),
(41, 'Breda', 4, 0),
(42, 'Bolduque', 4, 0),
(43, 'Helmond', 4, 0),
(44, 'Oss', 4, 0),
(45, 'Roosendaal', 4, 0),
(46, 'Bergen op Zoom', 4, 0),
(47, 'Oosterhout', 4, 0),
(48, 'Groningen', 5, 0),
(49, 'Almere', 6, 0),
(50, 'Lelystad', 6, 0),
(51, 'Nimega', 7, 0),
(52, 'Apeldoorn', 7, 0),
(53, 'Arnhem', 7, 0),
(54, 'Ede', 7, 0),
(55, 'Doetinchem', 7, 0),
(56, 'Barneveld', 7, 0),
(57, 'Enschede', 8, 0),
(58, 'Zwolle', 8, 0),
(59, 'Deventer', 8, 0),
(60, 'Hengelo', 8, 0),
(61, 'Almelo', 8, 0),
(62, 'Hardenberg', 8, 0),
(63, 'Kampen', 8, 0),
(64, 'Emmen', 9, 0),
(65, 'Assen', 9, 0),
(66, 'Hoogeveen', 9, 0),
(67, 'Terneuzen', 10, 0),
(68, 'Leeuwarden', 11, 0),
(69, 'Smallingerland', 11, 0),
(70, 'De Fryske Marren', 11, 0),
(71, 'Heerenveen', 11, 0),
(72, 'Maastricht', 12, 0),
(73, 'Venlo', 12, 0),
(74, 'Sittard-Geleen', 12, 0),
(75, 'Heerlen', 12, 0),
(76, 'Roermond', 12, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `newsletter`
--

CREATE TABLE `newsletter` (
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincia`
--

CREATE TABLE `provincia` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `provincia`
--

INSERT INTO `provincia` (`id`, `nombre`) VALUES
(4, 'Brabante Septentrional'),
(9, 'Drente'),
(6, 'Flevoland'),
(11, 'Frisia'),
(5, 'Groninga'),
(7, 'Güeldres'),
(2, 'Holanda Meridional'),
(1, 'Holanda Septentrional'),
(12, 'Limburgo'),
(8, 'Overijssel'),
(3, 'Utrecht'),
(10, 'Zelanda');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id` int(11) NOT NULL,
  `tipo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id`, `tipo`) VALUES
(1, 'cliente'),
(2, 'administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_cliente` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tipo_usuario` int(11) NOT NULL DEFAULT '1',
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_cliente`, `email`, `tipo_usuario`, `password`) VALUES
(8, 'admin@hotmail.com', 2, '$2y$10$DcGR0u8AaUVyf8084FIe0uZ9b6EjpwFs82OtdVCEPdzjdot1tQKpm'),
(9, 'asd@gmail.com', 2, '$2y$10$oSmOba6gkBwlbg4Nf0LBqeLmc1g.24AUNlJJo2/08D6RVh.VRU3Sq'),
(12, 'josefueng93@gmail.com', 1, '$2y$10$D/KON2LgxOvUrRt.0NAYYOHUrboLS9aFmD7QW3vplUgSxUbhaNCGS');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nick` (`nick`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_empresa` (`id_empresa`);

--
-- Indices de la tabla `comentarios_valoracion`
--
ALTER TABLE `comentarios_valoracion`
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_comentario` (`id_comentario`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_empresa` (`id`),
  ADD KEY `id_localidad` (`id_localidad`);

--
-- Indices de la tabla `localidad`
--
ALTER TABLE `localidad`
  ADD PRIMARY KEY (`id`),
  ADD KEY `provincia_id` (`provincia_id`);

--
-- Indices de la tabla `provincia`
--
ALTER TABLE `provincia`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_cliente`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `tipo_usuario` (`tipo_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `localidad`
--
ALTER TABLE `localidad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT de la tabla `provincia`
--
ALTER TABLE `provincia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id`),
  ADD CONSTRAINT `comentario_ibfk_2` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `comentarios_valoracion`
--
ALTER TABLE `comentarios_valoracion`
  ADD CONSTRAINT `comentarios_valoracion_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id`),
  ADD CONSTRAINT `comentarios_valoracion_ibfk_2` FOREIGN KEY (`id_comentario`) REFERENCES `comentario` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD CONSTRAINT `empresa_ibfk_1` FOREIGN KEY (`id_localidad`) REFERENCES `localidad` (`id`);

--
-- Filtros para la tabla `localidad`
--
ALTER TABLE `localidad`
  ADD CONSTRAINT `localidad_ibfk_1` FOREIGN KEY (`provincia_id`) REFERENCES `provincia` (`id`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`tipo_usuario`) REFERENCES `tipo_usuario` (`id`),
  ADD CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
