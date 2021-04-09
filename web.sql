-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 09-04-2021 a las 22:21:54
-- Versión del servidor: 5.7.24
-- Versión de PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `web`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

DROP TABLE IF EXISTS `alumno`;
CREATE TABLE IF NOT EXISTS `alumno` (
  `nombre` varchar(25) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `correo` varchar(30) DEFAULT NULL,
  `actividad` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`nombre`, `apellido`, `telefono`, `correo`, `actividad`) VALUES
('CARLOS ALEXIS', 'SANTOS RIVERA', '7971119917', 'carlosame116429@gmail.com', 'Futbol'),
('CARLOS ALEXIS', 'SANTOS RIVERA', '7971119917', 'carlosame116429@gmail.com', 'Futbol'),
('CARLOS ALEXIS', 'SANTOS RIVERA', '7971119917', 'carlosame116429@gmail.com', 'BAILE'),
('Kary', 'Farfan', '5573829822', 'Kary@hotmail.com', 'Baile'),
('CARLOS ALEXIS', 'SANTOS RIVERA', '7971119917', 'carlosame116429@gmail.com', 'Futbol'),
('CARLOS ALEXIS', 'SANTOS RIVERA', '7971119917', 'carlosame116429@gmail.com', 'BAILE'),
('Pedro', 'Gutierrez', '5588998899', 'pedrogutierrez@gmail.com', 'Futbol');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
