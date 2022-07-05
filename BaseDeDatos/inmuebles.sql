-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-07-2022 a las 23:15:04
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inmuebles`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cobros`
--

CREATE TABLE `cobros` (
  `Referencia` bigint(25) NOT NULL,
  `Propietario` text NOT NULL,
  `Tipo` text NOT NULL,
  `Cuenta` bigint(25) NOT NULL,
  `Cobro` bigint(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cobros`
--

INSERT INTO `cobros` (`Referencia`, `Propietario`, `Tipo`, `Cuenta`, `Cobro`) VALUES
(3333, 'Juan Alberto Guevara', 'Parqueadero', 223344, 10000000),
(222, 'Carlos Andres', 'Apartamento', 312313, 50000000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inmuebles`
--

CREATE TABLE `inmuebles` (
  `Referencia` int(25) NOT NULL,
  `Propietario` varchar(25) NOT NULL,
  `Direccion` varchar(25) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Tipo` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `inmuebles`
--

INSERT INTO `inmuebles` (`Referencia`, `Propietario`, `Direccion`, `Email`, `Tipo`) VALUES
(1, 'Andres Carlos Grajales', 'cra 8a #12-28', 'andrescarlos@gmail.com', 'Apartamento'),
(222, 'Carlos Andres', 'Cra 8 #12-2', 'Carlos@gmail.com', 'Apartamento'),
(3333, 'Juan Alberto Guevara', 'JuanAlberto@gmail.com', 'Juan@gmail.com', 'Parqueadero');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimientos`
--

CREATE TABLE `movimientos` (
  `Cuenta` bigint(25) NOT NULL,
  `Tipo` text NOT NULL,
  `Cobro` bigint(25) NOT NULL,
  `Fecha` date NOT NULL,
  `Estado` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `movimientos`
--

INSERT INTO `movimientos` (`Cuenta`, `Tipo`, `Cobro`, `Fecha`, `Estado`) VALUES
(112233, 'Apartamento', 200000, '2022-07-05', 'Pagado'),
(1827, 'Apartamento', 120000050, '2022-07-05', 'Pagado');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cobros`
--
ALTER TABLE `cobros`
  ADD PRIMARY KEY (`Cuenta`);

--
-- Indices de la tabla `inmuebles`
--
ALTER TABLE `inmuebles`
  ADD PRIMARY KEY (`Referencia`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
