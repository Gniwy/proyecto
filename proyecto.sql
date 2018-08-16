-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-08-2018 a las 18:39:48
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
  `activo` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `calle` varchar(100) NOT NULL,
  `cp` int(5) NOT NULL,
  `id_categoria` int(10) NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id`, `nombre`, `calle`, `cp`, `id_categoria`, `activo`) VALUES
(1, 'lidl', 'unica', 29640, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localidad`
--

CREATE TABLE `localidad` (
  `id` int(11) NOT NULL,
  `nombre` varchar(70) NOT NULL,
  `provincia_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `localidad`
--

INSERT INTO `localidad` (`id`, `nombre`, `provincia_id`) VALUES
(1, 'Amsterdam', 1),
(2, 'Haarlem', 1),
(3, 'Zaanstad', 1),
(4, 'Haarlemmermeer', 1),
(5, 'Alkmaar', 1),
(6, 'Amstelveen', 1),
(7, 'Hilversum', 1),
(8, 'Nissewaard', 1),
(9, 'Purmerend', 1),
(10, 'Hoorn', 1),
(11, 'Velsen', 1),
(12, 'Gooise Meren', 1),
(13, 'Den Helder', 1),
(14, 'Heerhugowaard', 1),
(15, 'Róterdam', 2),
(16, 'La Haya', 2),
(17, 'Rijswijk', 2),
(18, 'Zoetermeer', 2),
(19, 'Leiden', 2),
(20, 'Dordrecht', 2),
(21, 'Alphen aan den Rijn', 2),
(22, 'Westland', 2),
(23, 'Delft', 2),
(24, 'Schiedam', 2),
(25, 'Spijkenisse', 2),
(26, 'Leidschendam-Voorburg', 2),
(27, 'Vlaardingen', 2),
(28, 'Gouda', 2),
(29, 'Capelle aan den IJssel', 2),
(30, 'Katwijk', 2),
(31, 'Lansingerland', 2),
(32, 'Krimpenerwaard', 2),
(33, 'Pijnacker-Nootdorp', 2),
(34, 'Utrecht', 3),
(35, 'Amersfoort', 3),
(36, 'Veenendaal', 3),
(37, 'Zeist', 3),
(38, 'Nieuwegein', 3),
(39, 'Eindhoven', 4),
(40, 'Tilburgo', 4),
(41, 'Breda', 4),
(42, 'Bolduque', 4),
(43, 'Helmond', 4),
(44, 'Oss', 4),
(45, 'Roosendaal', 4),
(46, 'Bergen op Zoom', 4),
(47, 'Oosterhout', 4),
(48, 'Groningen', 5),
(49, 'Almere', 6),
(50, 'Lelystad', 6),
(51, 'Nimega', 7),
(52, 'Apeldoorn', 7),
(53, 'Arnhem', 7),
(54, 'Ede', 7),
(55, 'Doetinchem', 7),
(56, 'Barneveld', 7),
(57, 'Enschede', 8),
(58, 'Zwolle', 8),
(59, 'Deventer', 8),
(60, 'Hengelo', 8),
(61, 'Almelo', 8),
(62, 'Hardenberg', 8),
(63, 'Kampen', 8),
(64, 'Emmen', 9),
(65, 'Assen', 9),
(66, 'Hoogeveen', 9),
(67, 'Terneuzen', 10),
(68, 'Leeuwarden', 11),
(69, 'Smallingerland', 11),
(70, 'De Fryske Marren', 11),
(71, 'Heerenveen', 11),
(72, 'Maastricht', 12),
(73, 'Venlo', 12),
(74, 'Sittard-Geleen', 12),
(75, 'Heerlen', 12),
(76, 'Roermond', 12);

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
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
