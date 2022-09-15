-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 15-09-2022 a las 20:40:30
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `programa_inj`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dato_programa`
--

CREATE TABLE `dato_programa` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `apellido` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `genero` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `edad` int(11) NOT NULL,
  `procedencia` varchar(72) CHARACTER SET utf8mb4 NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `tema1` varchar(500) CHARACTER SET utf8mb4 DEFAULT NULL,
  `tema2` varchar(500) CHARACTER SET utf8mb4 DEFAULT NULL,
  `tema3` varchar(500) CHARACTER SET utf8mb4 DEFAULT NULL,
  `tema4` varchar(500) CHARACTER SET utf8mb4 DEFAULT NULL,
  `tema5` varchar(500) CHARACTER SET utf8mb4 DEFAULT NULL,
  `tema6` varchar(500) CHARACTER SET utf8mb4 DEFAULT NULL,
  `tema7` varchar(500) CHARACTER SET utf8mb4 DEFAULT NULL,
  `fechahora` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `dato_programa`
--

INSERT INTO `dato_programa` (`id`, `nombre`, `apellido`, `genero`, `edad`, `procedencia`, `email`, `tema1`, `tema2`, `tema3`, `tema4`, `tema5`, `tema6`, `tema7`, `fechahora`) VALUES
(1, 'Jesus Rodolfo', 'LEAÑOS VILLEGAS', 'Hombre', 2, 'Zacatecas', 'jesusrlv_rojo@hotmail.com', 's', 's', 's', 's', 's', 's', 's', '2022-09-09 16:02:32'),
(2, 'JESUS RODOLFO', 'LEAÑOS VILLEGAS', 'Hombre', 40, 'San Francisco', 'jesusrlv_rojo@hotmail.com', 'Propuesta 1', '', 'Propuesta 3', '', '', 'Propuesta 5', '', '2022-09-14 09:25:57'),
(3, 'ae', 'bp', 'Mujer', 39, 'Teúl de González Ortega', 'gold.axs.systems@gmail.com', '', 'Propuesta 2', '', '', 'Propuesta 4', '', 'Propuesta 7', '2022-09-14 09:29:21'),
(4, 'Jesus Rodolfo', 'LEAÑOS VILLEGAS', 'Hombre', 39, 'Susticacán', 'ee@dsd.net', '1', '1', '2', '2', '3', '3', '4', '2022-09-14 12:43:35'),
(5, 'Jesus Rodolfo', 'LEAÑOS VILLEGAS', 'Hombre', 39, 'Susticacán', 'ee@dsd.net', '1', '1', '2', '2', '3', '3', '4', '2022-09-14 12:43:48'),
(6, 'Jesus Rodolfo', 'LEAÑOS VILLEGAS', 'Hombre', 39, 'Susticacán', 'ee@dsd.net', '1', '1', '2', '2', '3', '3', '4', '2022-09-14 12:47:19'),
(7, 'Jesus Rodolfo', 'LEAÑOS VILLEGAS', 'Hombre', 40, 'Apozol', 'jesusrlvrojo@gmail.com', '2', '2', '3', '', '', '', '', '2022-09-14 13:13:25'),
(8, 'Jesus Rodolfo', 'bp', 'Hombre', 2, 'Trinidad García de la Cadena', 'franbavi@gmail.com', 's', '', '', '', '', '', '', '2022-09-14 13:15:07'),
(9, 'JESUS RODOLFO', 'LEAÑOS VILLEGAS', 'Hombre', 40, 'Jalpa', 'jesusrlvrojo@gmail.com', '1', '2', '3', '4', '5', '6', '7', '2022-09-14 13:16:40'),
(10, 'Jesus Rodolfo', 'LEAÑOS VILLEGAS', 'Hombre', 40, 'Zacatecas', 'jesusrlv_rojo@hotmail.com', 'xxc', 'cx', 'cxcx', 'cxcxcx', 'cxcx', '', 'cxcx', '2022-09-15 13:35:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipio`
--

CREATE TABLE `municipio` (
  `id` int(11) NOT NULL,
  `municipio` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `municipio`
--

INSERT INTO `municipio` (`id`, `municipio`) VALUES
(1, 'Apozol'),
(2, 'Apulco'),
(3, 'Atolinga'),
(4, 'Benito Juárez'),
(5, 'Calera'),
(6, 'Cañitas de Felipe Pescador'),
(7, 'Concepción del Oro'),
(8, 'Cuauhtémoc'),
(9, 'Chalchihuites'),
(10, 'Fresnillo'),
(11, 'Trinidad García de la Cadena'),
(12, 'Genaro Codina'),
(13, 'General Enrique Estrada'),
(14, 'General Francisco R. Murguía'),
(15, 'El Plateado de Joaquín Amaro'),
(16, 'General Pánfilo Natera'),
(17, 'Guadalupe'),
(18, 'Huanusco'),
(19, 'Jalpa'),
(20, 'Jerez'),
(21, 'Jiménez del Teul'),
(22, 'Juan Aldama'),
(23, 'Juchipila'),
(24, 'Loreto'),
(25, 'Luis Moya'),
(26, 'Mazapil'),
(27, 'Melchor Ocampo'),
(28, 'Mezquital del Oro'),
(29, 'Miguel Auza'),
(30, 'Momax'),
(31, 'Monte Escobedo'),
(32, 'Morelos'),
(33, 'Moyahua de Estrada'),
(34, 'Nochistlán de Mejía'),
(35, 'Noria de Ángeles'),
(36, 'Ojocaliente'),
(37, 'Pánuco'),
(38, 'Pinos'),
(39, 'Río Grande'),
(40, 'Sain Alto'),
(41, 'El Salvador'),
(42, 'Sombrerete'),
(43, 'Susticacán'),
(44, 'Tabasco'),
(45, 'Tepechitlán'),
(46, 'Tepetongo'),
(47, 'Teúl de González Ortega'),
(48, 'Tlaltenango de Sánchez Román'),
(49, 'Valparaíso'),
(50, 'Vetagrande'),
(51, 'Villa de Cos'),
(52, 'Villa García'),
(53, 'Villa González Ortega'),
(54, 'Villa Hidalgo'),
(55, 'Villanueva'),
(56, 'Zacatecas'),
(57, 'Trancoso'),
(58, 'Santa María de la Paz');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usr`
--

CREATE TABLE `usr` (
  `id` int(11) NOT NULL,
  `usr` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `pwd` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `perfil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usr`
--

INSERT INTO `usr` (`id`, `usr`, `pwd`, `perfil`) VALUES
(1, 'admin', '123456789', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `dato_programa`
--
ALTER TABLE `dato_programa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `municipio`
--
ALTER TABLE `municipio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usr`
--
ALTER TABLE `usr`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `dato_programa`
--
ALTER TABLE `dato_programa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `municipio`
--
ALTER TABLE `municipio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT de la tabla `usr`
--
ALTER TABLE `usr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
