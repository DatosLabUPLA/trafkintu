-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-12-2022 a las 21:29:14
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `adivinadorlab`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `arbol`
--

CREATE TABLE `arbol` (
  `nodo` int(11) NOT NULL,
  `texto` varchar(500) DEFAULT NULL,
  `pregunta` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `arbol`
--

INSERT INTO `arbol` (`nodo`, `texto`, `pregunta`) VALUES
(1, 'Bienvenido a la aplicación TRAFKIN-U. Quieres conocer sobre el proyecto ⇦ u otras experiencias de intercambio virtual ⇨', 1),
(2, 'Trafkin ⇦ - Memoria Valpo ⇨', 1),
(3, 'Bancos de tiempo ⇦ - Moneda complementaria ⇨', 1),
(4, 'Copia el siguiente enlace y visita Trafkin https://communities.cyclos.org/sed/trafkin\n', 0),
(5, 'Copia el siguiente enlace para acceder a la Memoria Valpo https://memoriavalpo.labsed.cl/', 0),
(6, 'En los siguientes enlaces encontraras información sobre los Bancos de Tiempo https://bancotiempo.cl/ Banco de Tiempo Universitario https://bancodetiempouniversitario.cl/', 0),
(7, 'Moneda Comunitaria (Crédito Mutuo) ⇦ - Moneda Local (Municipal) ⇨', 1),
(8, 'respuesta 8', 0),
(9, 'respuesta 9', 0),
(10, 'respuesta 10', 0),
(11, 'respuesta 11', 0),
(12, 'respuesta 12', 0),
(13, 'respuesta 13', 0),
(14, 'LATAM ⇦ - Resto del Mundo ⇨', 1),
(15, 'LATAM ⇦ - Resto del Mundo ⇨', 1),
(16, 'respuesta 16', 0),
(17, 'respuesta 17', 0),
(18, 'respuesta 18', 0),
(19, 'respuesta 19', 0),
(20, 'respuesta 20', 0),
(21, 'respuesta 21', 0),
(22, 'respuesta 22', 0),
(23, 'respuesta 23', 0),
(24, 'respuesta 24', 0),
(25, 'respuesta 25', 0),
(26, 'respuesta 26', 0),
(27, 'respuesta 27', 0),
(28, 'Moneda Comunitaria LATAM: Valpo (Chile), PAR (Argentina), Sol (Uruguay), Luna (Colombia), Jurupi (Ecuador), Muyu (Ecuador), Mixuxa (Mexico), Tumin (México).', 0),
(29, 'Moneda Comunitaria resto del mundo: Turuta, Puma.', 0),
(30, 'Moneda Local Municipal LATAM: NA', 0),
(31, 'Moneda Local resto del mundo: BristolPound (Reino Unido), SolViolette (Francia).', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `arbol`
--
ALTER TABLE `arbol`
  ADD PRIMARY KEY (`nodo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
