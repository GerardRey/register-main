-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-01-2021 a las 20:48:17
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.34

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
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `id_fila` int(5) NOT NULL,
  `id_personaje` int(11) NOT NULL,
  `cantidad` int(4) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `precio` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

--
-- Volcado de datos para la tabla `carrito_rubon`
--

INSERT INTO `carrito_rubon` (`id_fila`, `id_personaje`, `cantidad`, `nombre`, `precio`) VALUES
(1, 1, 1, 'Yasuo', 1);

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
('Gerari', '$2y$10$0IjxXYj7Td2LyBEV7Fto6umaITkguJXcP5FS2cyvC7FCAoDV3TATK', '47934511G', 'Gerard', 'Mañas', 33, 'gerardreymanyas2@hotmail.es', 1),
('Girltore', '$2y$10$wv3UEhvkUT8QtQda10FMvOSadH64QG0p1bWsHQpQYfhslV8F3cWbG', '71670003W', 'Aida', 'Jesus', 33, 'aidajs@gmail.com', 0),
('Irene', '$2y$10$FMhOsL7WTbb.cSvUuaxA8.mE5MeESY7wtwUwImustUHU0TUITRgWq', '47934511G', 'Irene', 'Sanchez', 18, 'irene@gmail.com', 0),
('Rubon', '$2y$10$3hQrWhiXAl3Og4nzh6GSXOvK77ke8djyCq2QSvornupgmXAV7X.T.', '47904886A', 'Ruben', 'Gracia', 33, 'xxrubenxx@gmail.com', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
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
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `id_fila` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `carrito_rubon`
--
ALTER TABLE `carrito_rubon`
  MODIFY `id_fila` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `personajes`
--
ALTER TABLE `personajes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `carrito_ibfk_1` FOREIGN KEY (`id_personaje`) REFERENCES `personajes` (`id`);

--
-- Filtros para la tabla `carrito_rubon`
--
ALTER TABLE `carrito_rubon`
  ADD CONSTRAINT `carrito_rubon_ibfk_1` FOREIGN KEY (`id_personaje`) REFERENCES `personajes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
