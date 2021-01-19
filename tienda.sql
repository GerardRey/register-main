-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-01-2021 a las 19:00:09
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
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito_gerari`
--

CREATE TABLE `carrito_gerari` (
  `id_fila` int(5) NOT NULL,
  `id_personaje` int(11) NOT NULL,
  `cantidad` int(4) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `precio` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito_girltore`
--

CREATE TABLE `carrito_girltore` (
  `id_fila` int(5) NOT NULL,
  `id_personaje` int(11) NOT NULL,
  `cantidad` int(4) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `precio` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito_rubon`
--

CREATE TABLE `carrito_rubon` (
  `id_fila` int(5) NOT NULL,
  `id_personaje` int(11) NOT NULL,
  `cantidad` int(4) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `precio` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personajes`
--

CREATE TABLE `personajes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) CHARACTER SET utf8 NOT NULL,
  `combo` varchar(30) CHARACTER SET utf8 NOT NULL,
  `origen` varchar(30) CHARACTER SET utf8 NOT NULL,
  `precio` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `personajes`
--

INSERT INTO `personajes` (`id`, `nombre`, `combo`, `origen`, `precio`) VALUES
(1, 'Yasuo', 'Duelista', 'Exiliado', 1),
(2, 'Wukong', 'Vanguardia', 'Divino', 1),
(5, 'Kalista', 'Duelista', 'Sectario', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nick` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `pass` varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `dni` varchar(13) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(40) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `edad` int(2) NOT NULL,
  `mail` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nick`, `pass`, `dni`, `nombre`, `apellido`, `edad`, `mail`, `admin`) VALUES
('Gerari', '$2y$10$t3i594yiUX3NwlTT9oSaCOE0XcttqvpxVhkDPoUC2eihe.k6bAK9S', '47934511G', 'Gerard', 'Rey', 33, 'gerardreymanyas2@hotmail.es', 1),
('Girltore', '$2y$10$lbfrGB8AFFzSB7v6ia5qL.1Dj8NElN2Ol4uQCuKDJn57h1EjSdtmS', '71670003W', 'Aida', 'Jesus Sora', 33, 'aida@gmail.com', 0),
('Rubon', '$2y$10$GetBA6GF9vC2jbz7T26fpuplvgGMG34JnGqE/ONdsjxXA2T3O8kti', '47904886A', 'Ruben', 'Gracia', 33, 'xxrubenxx@gmail.com', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito_gerari`
--
ALTER TABLE `carrito_gerari`
  ADD PRIMARY KEY (`id_fila`),
  ADD KEY `id_personaje` (`id_personaje`);

--
-- Indices de la tabla `carrito_girltore`
--
ALTER TABLE `carrito_girltore`
  ADD PRIMARY KEY (`id_fila`),
  ADD KEY `id_personaje` (`id_personaje`);

--
-- Indices de la tabla `carrito_rubon`
--
ALTER TABLE `carrito_rubon`
  ADD PRIMARY KEY (`id_fila`),
  ADD KEY `id_personaje` (`id_personaje`);

--
-- Indices de la tabla `personajes`
--
ALTER TABLE `personajes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`nick`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrito_gerari`
--
ALTER TABLE `carrito_gerari`
  MODIFY `id_fila` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `carrito_girltore`
--
ALTER TABLE `carrito_girltore`
  MODIFY `id_fila` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `carrito_rubon`
--
ALTER TABLE `carrito_rubon`
  MODIFY `id_fila` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `personajes`
--
ALTER TABLE `personajes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrito_gerari`
--
ALTER TABLE `carrito_gerari`
  ADD CONSTRAINT `carrito_gerari_ibfk_1` FOREIGN KEY (`id_personaje`) REFERENCES `personajes` (`id`);

--
-- Filtros para la tabla `carrito_girltore`
--
ALTER TABLE `carrito_girltore`
  ADD CONSTRAINT `carrito_girltore_ibfk_1` FOREIGN KEY (`id_personaje`) REFERENCES `personajes` (`id`);

--
-- Filtros para la tabla `carrito_rubon`
--
ALTER TABLE `carrito_rubon`
  ADD CONSTRAINT `carrito_rubon_ibfk_1` FOREIGN KEY (`id_personaje`) REFERENCES `personajes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
