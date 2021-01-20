-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Temps de generació: 20-01-2021 a les 21:25:24
-- Versió del servidor: 10.4.17-MariaDB
-- Versió de PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de dades: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de la taula `carrito_gerari`
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
-- Estructura de la taula `carrito_girltore`
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
-- Estructura de la taula `carrito_rubon`
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
-- Estructura de la taula `personajes`
--

CREATE TABLE `personajes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) CHARACTER SET utf8 NOT NULL,
  `combo` varchar(30) CHARACTER SET utf8 NOT NULL,
  `origen` varchar(30) CHARACTER SET utf8 NOT NULL,
  `precio` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Bolcament de dades per a la taula `personajes`
--

INSERT INTO `personajes` (`id`, `nombre`, `combo`, `origen`, `precio`) VALUES
(6, 'Aatrox', 'Vanguard', 'Cultist', 4),
(7, 'Akali', 'Assassin', 'Ninja', 3),
(8, 'Annie', 'Mage', 'Fortune', 2),
(9, 'Aurelion Sol', 'Mage', 'Dragonsoul', 4),
(10, 'Azir', 'Keeper', 'Warlords', 5),
(11, 'Brand', 'Mage', 'Dragonsoul', 1),
(12, 'Braum', 'Vanguard', 'Dragonsoul', 2),
(13, 'Chogath', 'Brawler', 'Fabled', 4),
(14, 'Darius', 'Slayer', 'Fortune', 3),
(15, 'Diana', 'Assassin', 'Spirit', 1),
(16, 'Elise', 'Keeper', 'Cultist', 1),
(17, 'Fiora', 'Duelist', 'Enlightened', 1),
(18, 'Garen', 'Vanguard', 'Warlords', 1),
(19, 'Irelia', 'Adept', 'Divine', 3),
(20, 'Janna', 'Mystic', 'Enlightened', 2),
(21, 'Jarvan IV', 'Keeper', 'Warlords', 2),
(22, 'Jax', 'Duelist', 'Divine', 2),
(23, 'Kalista', 'Duelist', 'Cultist', 3),
(24, 'Katarina', 'Assassin', 'Fortune', 3),
(25, 'Kayle', 'Executioner', 'Divine', 4),
(26, 'Kennen', 'Keeper', 'Ninja', 3),
(27, 'Kindred', 'Executioner', 'Spirit', 3),
(28, 'Lee Sin', 'Duelist', 'Divine', 5),
(29, 'Lulu', 'Mage', 'Elderwood', 2),
(30, 'Maokai', 'Brawler', 'Elderwood', 1),
(31, 'Morgana', 'Syphoner', 'Enlightened', 4),
(32, 'Nasus', 'Syphoner', 'Divine', 1),
(33, 'Nautilus', 'Vanguard', 'Fabled', 2),
(34, 'Neeko', 'Mystic', 'Fabled', 3),
(35, 'Nidalee', 'Sharpshooter', 'Warlords', 1),
(36, 'Nunu', 'Brawler', 'Elderwood', 3),
(37, 'Olaf', 'Slayer', 'Dragonsoul', 4),
(38, 'Ornn', 'Blacksmith', 'Elderwood', 5),
(39, 'Pyke', 'Assassin', 'Cultist', 2),
(40, 'Rakan', 'Keeper', 'Elderwood', 2),
(41, 'Samira', 'Slayer', 'Daredevil', 5),
(42, 'Sejuani', 'Vanguard', 'Fortune', 4),
(43, 'Sett', 'Brawler', 'The Boss', 5),
(44, 'Shen', 'Adept', 'Ninja', 4),
(45, 'Shyvana', 'Brawler', 'Dragonsoul', 3),
(46, 'Sivir', 'Sharpshooter', 'Cultist', 3),
(47, 'Swain', 'Syphoner', 'Dragonsoul', 5),
(48, 'Tahm Kench', 'Brawler', 'Fortune', 1),
(49, 'Talon', 'Assassin', 'Enlightened', 4),
(50, 'Teemo', 'Sharpshooter', 'Spirit', 2),
(51, 'Tristina', 'Sharpshooter', 'Dragonsoul', 1),
(52, 'Trydamere', 'Duelist', 'Warlords', 4),
(53, 'Twisted Fate', 'Mage', 'Cultist', 1),
(54, 'Veigar', 'Mage', 'Elderwood', 3),
(55, 'Vi', 'Brawler', 'Warlords', 2),
(56, 'Vladimir', 'Syphoner', 'Cultist', 2),
(57, 'Wukong', 'Vanguard', 'Divine', 1),
(58, 'Xayah', 'Executioner', 'Elderwood', 4),
(59, 'Yasuo', 'Duelist', 'Exile', 1),
(60, 'Yone', 'Adept', 'Exile', 5),
(61, 'Yummi', 'Mystic', 'Spirit', 3),
(62, 'Zed', 'Slayer', 'Ninja', 2),
(63, 'Zilean', 'Mystic', 'Cultist', 5);

-- --------------------------------------------------------

--
-- Estructura de la taula `usuarios`
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
-- Bolcament de dades per a la taula `usuarios`
--

INSERT INTO `usuarios` (`nick`, `pass`, `dni`, `nombre`, `apellido`, `edad`, `mail`, `admin`) VALUES
('Gerari', '$2y$10$t3i594yiUX3NwlTT9oSaCOE0XcttqvpxVhkDPoUC2eihe.k6bAK9S', '47934511G', 'Gerard', 'Rey', 33, 'gerardreymanyas2@hotmail.es', 1),
('Girltore', '$2y$10$lbfrGB8AFFzSB7v6ia5qL.1Dj8NElN2Ol4uQCuKDJn57h1EjSdtmS', '71670003W', 'Aida', 'Jesus Sora', 33, 'aida@gmail.com', 0),
('Rubon', '$2y$10$GetBA6GF9vC2jbz7T26fpuplvgGMG34JnGqE/ONdsjxXA2T3O8kti', '47904886A', 'Ruben', 'Gracia', 33, 'xxrubenxx@gmail.com', 0);

--
-- Índexs per a les taules bolcades
--

--
-- Índexs per a la taula `carrito_gerari`
--
ALTER TABLE `carrito_gerari`
  ADD PRIMARY KEY (`id_fila`),
  ADD KEY `id_personaje` (`id_personaje`);

--
-- Índexs per a la taula `carrito_girltore`
--
ALTER TABLE `carrito_girltore`
  ADD PRIMARY KEY (`id_fila`),
  ADD KEY `id_personaje` (`id_personaje`);

--
-- Índexs per a la taula `carrito_rubon`
--
ALTER TABLE `carrito_rubon`
  ADD PRIMARY KEY (`id_fila`),
  ADD KEY `id_personaje` (`id_personaje`);

--
-- Índexs per a la taula `personajes`
--
ALTER TABLE `personajes`
  ADD PRIMARY KEY (`id`);

--
-- Índexs per a la taula `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`nick`);

--
-- AUTO_INCREMENT per les taules bolcades
--

--
-- AUTO_INCREMENT per la taula `carrito_gerari`
--
ALTER TABLE `carrito_gerari`
  MODIFY `id_fila` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la taula `carrito_girltore`
--
ALTER TABLE `carrito_girltore`
  MODIFY `id_fila` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la taula `carrito_rubon`
--
ALTER TABLE `carrito_rubon`
  MODIFY `id_fila` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la taula `personajes`
--
ALTER TABLE `personajes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- Restriccions per a les taules bolcades
--

--
-- Restriccions per a la taula `carrito_gerari`
--
ALTER TABLE `carrito_gerari`
  ADD CONSTRAINT `carrito_gerari_ibfk_1` FOREIGN KEY (`id_personaje`) REFERENCES `personajes` (`id`);

--
-- Restriccions per a la taula `carrito_girltore`
--
ALTER TABLE `carrito_girltore`
  ADD CONSTRAINT `carrito_girltore_ibfk_1` FOREIGN KEY (`id_personaje`) REFERENCES `personajes` (`id`);

--
-- Restriccions per a la taula `carrito_rubon`
--
ALTER TABLE `carrito_rubon`
  ADD CONSTRAINT `carrito_rubon_ibfk_1` FOREIGN KEY (`id_personaje`) REFERENCES `personajes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
