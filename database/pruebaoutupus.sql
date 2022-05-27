-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-05-2022 a las 13:22:25
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pruebaoutupus`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idRol` int(11) NOT NULL,
  `rol` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idRol`, `rol`) VALUES
(1, 'administrador'),
(2, 'usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `documento` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `apellidos` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `fechaRegistro` date NOT NULL,
  `idRol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`documento`, `nombre`, `apellidos`, `password`, `fechaRegistro`, `idRol`) VALUES
(123456, 'Juan', 'Mendoza', '123456', '2022-05-26', 1),
(1234567, 'henry', 'Mendoza Torres', '1234567', '2022-05-27', 1),
(23192428, 'Alvaro Jose', 'Espinoza Martinez', '123456', '2022-05-27', 1),
(1143378595, 'karen', 'Santana', '123456', '2022-05-26', 2),
(1234578987, 'Maria Isabel', 'GARCIA', 'alORiaNteR', '2022-05-26', 1),
(1324354355, 'Gustavo Martín', 'CASTILLO', '654321', '2022-05-26', 1),
(1453875577, 'Edgardo Leandro', 'LOZANO', '123456', '2022-05-26', 1),
(1457587858, 'Leandro Nicolás', 'SAEZ', 'cdgdfbds2535', '2022-05-26', 1),
(1477545757, 'Luis Simón', 'ROMERO', 'jf7485453', '2022-05-26', 2),
(1557454434, 'Daniela Sabrina', 'MARTINEZ', 'ad98760', '2022-05-26', 2),
(1588785757, 'Sabrina Alicia', 'GONZALEZ', 'fdsfds4557', '2022-05-26', 1),
(1777547875, 'Antonio Juárez', 'SERRANO', 'gfassf5445', '2022-05-26', 2),
(1778574744, 'Martín Alfonso', 'DIAZ', 'hgfhgf5778', '2022-05-26', 1),
(1958874444, 'Emilia Sergio', 'MOLINA', 'a432567', '2022-05-26', 2),
(2147483647, 'Alan Jacinto', 'SANCHEZ', 'ATingYPtOn', '2022-05-26', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idRol`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`documento`),
  ADD KEY `idRol` (`idRol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idRol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`idRol`) REFERENCES `rol` (`idRol`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
