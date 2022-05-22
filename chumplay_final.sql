-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-05-2022 a las 14:09:15
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `chumplay`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_bet`
--

CREATE TABLE `tbl_bet` (
  `id` int(11) NOT NULL,
  `id_cup` varchar(60) NOT NULL,
  `roundmatch` varchar(60) NOT NULL,
  `id_users` varchar(60) NOT NULL,
  `bet` varchar(60) NOT NULL,
  `control_points` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_cup`
--

CREATE TABLE `tbl_cup` (
  `id` int(11) NOT NULL,
  `name_cup` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_cup`
--

INSERT INTO `tbl_cup` (`id`, `name_cup`) VALUES
(1, 'Mundial Qatar 2022');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_match`
--

CREATE TABLE `tbl_match` (
  `id` int(11) NOT NULL,
  `id_cup` int(32) NOT NULL,
  `name_cup` varchar(60) NOT NULL,
  `team_local` varchar(256) NOT NULL,
  `team_visitor` varchar(265) NOT NULL,
  `roundmatch` varchar(60) NOT NULL,
  `result` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_match`
--

INSERT INTO `tbl_match` (`id`, `id_cup`, `name_cup`, `team_local`, `team_visitor`, `roundmatch`, `result`) VALUES
(1, 1, 'MUNDIAL', 'qatar', 'ecuador', 'J1grpA1-2', ''),
(2, 1, 'MUNDIAL', 'senegal', 'paises bajos', 'J1grpA3-4', ''),
(3, 1, 'MUNDIAL', 'PAISES BAJOS', 'ECUADOR', 'J2grpA4-2', ''),
(4, 1, 'MUNDIAL', 'QATAR', 'SENEGAL', 'J2grpA1-3', ''),
(5, 1, 'MUNDIAL', 'ECUADOR', 'SENEGAL', 'J3grpA2-3', ''),
(6, 1, 'MUNDIAL', 'PAISES BAJOS', 'QATAR', 'J3grpA4-1', ''),
(7, 1, 'MUNDIAL', 'inglaterra', 'iran', 'J1grpB1-2', ''),
(8, 1, 'MUNDIAL', 'estados unidos', 'eur play-off', 'J1grpB3-4', ''),
(9, 1, 'MUNDIAL', 'INGLATERRA', 'ESTADOS UNIDOS', 'J2grpB4-2', ''),
(10, 1, 'MUNDIAL', 'EUR PLAY-OFF', 'IRAN', 'J2grpB1-3', ''),
(11, 1, 'MUNDIAL', 'IRAN', 'ESTADOS UNIDOS', 'J3grpB2-3', ''),
(12, 1, 'MUNDIAL', 'EUR PLAY-OFF', 'INGLATERRA', 'J3grpB4-1', ''),
(13, 1, 'MUNDIAL', 'argentina', 'arabia saudi', 'J1grpC1-2', ''),
(14, 1, 'MUNDIAL', 'mexico', 'polonia', 'J1grpC3-4', ''),
(15, 1, 'MUNDIAL', 'ARGENTINA', 'MEXICO', 'J2grpC4-2', ''),
(16, 1, 'MUNDIAL', 'POLONIA', 'ARABIA SAUDI', 'J2grpC1-3', ''),
(17, 1, 'MUNDIAL', 'POLONIA', 'ARGENTINA', 'J3grpC2-3', ''),
(18, 1, 'MUNDIAL', 'ARABIA SAUDI', 'MEXICO', 'J3grpC4-1', ''),
(19, 1, 'MUNDIAL', 'dinamarca', 'tunez', 'J1grpD1-2', ''),
(20, 1, 'MUNDIAL', 'francia', 'afc play-off', 'J1grpD3-4', ''),
(21, 1, 'MUNDIAL', 'FRANCIA', 'DINAMARCA', 'J2grpD4-2', ''),
(22, 1, 'MUNDIAL', 'TUNEZ', 'AFC PLAY-OFF', 'J2grpD1-3', ''),
(23, 1, 'MUNDIAL', 'TUNEZ', 'FRANCIA', 'J3grpD2-3', ''),
(24, 1, 'MUNDIAL', 'AFC PLAY-OFF', 'DINAMARCA', 'J3grpD4-1', ''),
(25, 1, 'MUNDIAL', 'alemania', 'japon', 'J1grpE1-2', ''),
(26, 1, 'MUNDIAL', 'españa', 'concafac play-off', 'J1grpE3-4', ''),
(27, 1, 'MUNDIAL', 'JAPON', 'CONCAFAC PLAY-OFF', 'J2grpE4-2', ''),
(28, 1, 'MUNDIAL', 'ESPAÑA', 'ALEMANIA', 'J2grpE1-3', ''),
(29, 1, 'MUNDIAL', 'JAPON', 'ESPAÑA', 'J3grpE2-3', ''),
(30, 1, 'MUNDIAL', 'CONCAFAC PLAY-OFF', 'ALEMANIA', 'J3grpE4-1', ''),
(31, 1, 'MUNDIAL', 'belgica', 'canada', 'J1grpF1-2', ''),
(32, 1, 'MUNDIAL', 'marruecos', 'croacia', 'J1grpF3-4', ''),
(33, 1, 'MUNDIAL', 'BELGICA', 'MARRUECOS', 'J2grpF4-2', ''),
(34, 1, 'MUNDIAL', 'CROACIA', 'CANADA', 'J2grpF1-3', ''),
(35, 1, 'MUNDIAL', 'CANADA', 'MARRUECOS', 'J3grpF2-3', ''),
(36, 1, 'MUNDIAL', 'CROACIA', 'BELGICA', 'J3grpF4-1', ''),
(37, 1, 'MUNDIAL', 'brasil', 'serbia', 'J1grpG1-2', ''),
(38, 1, 'MUNDIAL', 'suiza', 'camerun', 'J1grpG3-4', ''),
(39, 1, 'MUNDIAL', 'BRASIL', 'SUIZA', 'J2grpG4-2', ''),
(40, 1, 'MUNDIAL', 'CAMERUN', 'SERBIA', 'J2grpG1-3', ''),
(41, 1, 'MUNDIAL', 'CAMERUN', 'BRASIL', 'J3grpG2-3', ''),
(42, 1, 'MUNDIAL', 'SERBIA', 'SUIZA', 'J3grpG4-1', ''),
(43, 1, 'MUNDIAL', 'portugal', 'ghana', 'J1grpH1-2', ''),
(44, 1, 'MUNDIAL', 'uruguay', 'corea del sur', 'J1grpH3-4', ''),
(45, 1, 'MUNDIAL', 'PORTUGAL', 'GHANA', 'J2grpH4-2', ''),
(46, 1, 'MUNDIAL', 'PORTUGAL', 'URUGUAY', 'J2grpH1-3', ''),
(47, 1, 'MUNDIAL', 'GHANA', 'URUGUAY', 'J3grpH2-3', ''),
(48, 1, 'MUNDIAL', 'COREA DEL SUR', 'PORTUGAL', 'J3grpH4-1', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_notices`
--

CREATE TABLE `tbl_notices` (
  `id` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `article` varchar(4000) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_notices`
--

INSERT INTO `tbl_notices` (`id`, `title`, `article`, `created`) VALUES
(1, 'Comenzamos', 'Empieza nuestro torneo. Espero que lo pasamos muy y disfrutemos mucho del mismo. Acordarse de rellenar vuestros pronósticos y mucha suerte a todos.', '2022-05-21 13:55:01'),
(2, 'Jornada 1', 'En la primera jornada de inauguración tenemos un interesante Qatar vs Ecuador.\r\n\r\nSuerte a todos.', '2022-05-21 13:57:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_teams`
--

CREATE TABLE `tbl_teams` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `groups` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellidos` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `pass` varchar(256) NOT NULL,
  `rol` varchar(32) NOT NULL,
  `points` int(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `nombre`, `apellidos`, `email`, `pass`, `rol`, `points`) VALUES
(1, 'Javier', 'Durán', 'admin@chumplay.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '1', 0),
(2, 'Antonio', 'Gonzalez', 'antonio@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '0', 0),
(3, 'Angel', 'Ruiz', 'angel@hotmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '0', 0),
(4, 'Juan', 'Jesus', 'juan13@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '0', 0),
(5, 'Maria', 'Navarro', 'maria@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '0', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_bet`
--
ALTER TABLE `tbl_bet`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_cup`
--
ALTER TABLE `tbl_cup`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_match`
--
ALTER TABLE `tbl_match`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_notices`
--
ALTER TABLE `tbl_notices`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_teams`
--
ALTER TABLE `tbl_teams`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_bet`
--
ALTER TABLE `tbl_bet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_cup`
--
ALTER TABLE `tbl_cup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tbl_match`
--
ALTER TABLE `tbl_match`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT de la tabla `tbl_notices`
--
ALTER TABLE `tbl_notices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tbl_teams`
--
ALTER TABLE `tbl_teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
