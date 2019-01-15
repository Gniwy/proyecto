-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-01-2019 a las 20:00:59
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

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`) VALUES
(1, 'reponedor'),
(2, 'cajero');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias_trabajos`
--

CREATE TABLE `categorias_trabajos` (
  `id` int(10) NOT NULL,
  `categoria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias_trabajos`
--

INSERT INTO `categorias_trabajos` (`id`, `categoria`) VALUES
(1, 'Administración de empresas'),
(2, 'Administración de empresas y secretariado'),
(3, 'Agricultura, ganadería y pesca'),
(4, 'Atención al cliente y dependientes'),
(5, 'Banca y seguros'),
(6, 'Belleza y deporte'),
(7, 'Calidad, producción E I+D'),
(8, 'Comercial y ventas'),
(9, 'Compras, logística y almacén'),
(10, 'Construcción e Inmobiliaria'),
(11, 'Educación y formación'),
(12, 'Energía y Agua'),
(13, 'Hostelería y Turismo'),
(14, 'Hostelería, restauración y turismo'),
(15, 'Idiomas'),
(16, 'Informática e Internet'),
(17, 'Ingeniería y producción'),
(18, 'Legal'),
(19, 'Limpieza y mantenimiento'),
(20, 'Marketing y comunicación'),
(21, 'Mecánica y automoción'),
(22, 'Medios editoriales y artes gráficas'),
(23, 'Ocio y entretenimiento'),
(24, 'Otras'),
(25, 'Profesionales, artes y oficios'),
(26, 'Recursos Humanos'),
(27, 'Sanidad, salud y servicios sociales'),
(28, 'Transporte');

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
(7, 'prueba3', 0, 0),
(8, 'administrador', 0, 0);

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
(1, 7, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 00, 0, 1, 1, 0, 0),
(2, 7, 'asdfasdf dfse sdfscsdfe asdfasdf dfse sdfscsdfe asdfasdf dfse sdfscsdfe asdfasdf dfse sdfscsdfe .\r\naasdasd  sdfscssd asdas  dasdasd asda  sddddddd ddase sdfscsdfe  asda  sddddddd ddase sdfscsdfe  asda  sddddddd ddase sdfscsdfe  asda  sddddddd ddase sdfscsdfe  asda  sddddddd ddase sdfscsdfe  asda  sddddddd ddase sdfscsdfe  asda  sddddddd ddase sdfscsdfe  asda  sddddddd ddase sdfscsdfe ', 02, 0, 1, 1, 0, 0),
(4, 7, 'rtyerty dfgdfg  f ertertert frrtrtfrtyerty dfgdfg  f ertertert frrtrtfrtyerty dfgdfg  f ertertert frrtrtfrtyerty dfgdfg  f ertertert frrtrtfrtyerty dfgdfg  f ertertert frrtrtfrtyerty dfgdfg  f ertertert frrtrtfrtyerty dfgdfg  f ertertert frrtrtfrtyerty dfgdfg  f ertertert frrtrtfrtyerty dfgdfg  f ertertert frrtrtfrtyerty dfgdfg  f ertertert frrtrtfrtyerty dfgdfg  f ertertert frrtrtfrtyerty dfgdfg  f ertertert frrtrtfrtyerty dfgdfg  f ertertert frrtrtfrtyerty dfgdfg  f ertertert frrtrtfrtyerty dfgdfg  f ertertert frrtrtfrtyerty dfgdfg  f ertertert frrtrtfrtyerty dfgdfg  f ertertert frrtrtfrtyerty dfgdfg  f ertertert frrtrtfrtyerty dfgdfg  f ertertert frrtrtfrtyerty dfgdfg  f ertertert frrtrtfrtyerty dfgdfg  f ertertert frrtrtf', 00, 0, 1, 1, 0, 0);

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
(2, 8, 1),
(2, 8, 0),
(1, 8, 1),
(2, 8, 1),
(4, 8, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `calle` varchar(100) NOT NULL,
  `cp` int(5) NOT NULL,
  `id_categoria` varchar(255) NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '1',
  `lat` varchar(100) NOT NULL,
  `lng` varchar(100) NOT NULL,
  `valoracion_media` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id`, `nombre`, `calle`, `cp`, `id_categoria`, `activo`, `lat`, `lng`, `valoracion_media`) VALUES
(1, 'lidl', 'unica', 29649, '2', 1, '', '', 1),
(2, 'Carrefour', 'asdf', 29649, '2', 1, '', '', 0),
(3, 'asdf', 'sdssd', 29649, '2', 1, '', '', 0),
(4, 'hgjkghjk', 'ghjkghj', 29649, '2', 1, '', '', 0);

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
(7, 'prueba3@asdf.com', 1, '$2y$10$XdOXQUtBcyFtqDRmthRD/eQ9wPF85lubPcop/MquwKKOZUpoUcl3O'),
(8, 'admin@hotmail.com', 2, '$2y$10$/e3d.Ae2TIuRKhsmOm1/ve5VhF8ZoA1bEFgBdOBCXNFTirJU7YnXq');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categorias_trabajos`
--
ALTER TABLE `categorias_trabajos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`),
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
  ADD UNIQUE KEY `id_empresa` (`id`);

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
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `categorias_trabajos`
--
ALTER TABLE `categorias_trabajos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  ADD CONSTRAINT `comentario_ibfk_2` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id`);

--
-- Filtros para la tabla `comentarios_valoracion`
--
ALTER TABLE `comentarios_valoracion`
  ADD CONSTRAINT `comentarios_valoracion_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id`),
  ADD CONSTRAINT `comentarios_valoracion_ibfk_2` FOREIGN KEY (`id_comentario`) REFERENCES `comentario` (`id`);

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
