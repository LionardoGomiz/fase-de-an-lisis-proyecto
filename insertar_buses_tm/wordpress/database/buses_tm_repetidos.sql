-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-04-2017 a las 05:08:28
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `buses_tm_repetidos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE `vehiculos` (
  `Movil` varchar(11) NOT NULL,
  `Operador` varchar(80) NOT NULL,
  `Modelo` varchar(80) NOT NULL,
  `Carroceria` varchar(80) NOT NULL,
  `Marca` varchar(80) NOT NULL,
  `Tipologia` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`Movil`, `Operador`, `Modelo`, `Carroceria`, `Marca`, `Tipologia`) VALUES
('3007', 'Alcapital', 'Urbanuss Pluss', 'Busscar', 'Mercedes Benz of1722', 'Padron'),
('A123', 'Ciudad Movil', 'Gran Viale', 'Marcopolo', 'Volvo B12M', 'Articulado'),
('B125', 'Connexion Movil', 'Gran Viale', 'Marcopolo', 'Volvo B12M', 'Articulado'),
('E064', 'Gmovil', 'Gran Viale', 'Marcopolo', 'Volvo B340M', 'Biarticulado'),
('F042', 'Coobus', 'Gran Viale BRT', 'Marcopolo', 'Volvo B340M', 'Biarticulado'),
('K024', 'Somos K', 'Urbanuss Pluss', 'Busscar', 'Mercedes Benz o500', 'Articulado'),
('K043', 'Somos K', 'Urbanuss Pluss', 'Busscar', 'Mercedes Benz o500', 'Articulado'),
('K066', 'Somos K', 'Urbanuss Pluss', 'Busscar', 'Mercedes Benz  upa400', 'Articulado'),
('K100', 'Somos K', 'Urbanuss Pluss', 'Busscar', 'Mercedes Benz O500', 'Articulado'),
('K157', 'Somos K', 'Urbanuss Pluss S3', 'Busscar', 'Mercedes Benz o500', 'Articulado'),
('KE-150', 'Masivo Capital', 'New Torino', 'Marcopolo', 'Thomas EF 1723', 'Padron'),
('KE-224', 'Masivo Capital', 'Viale', 'Marcopolo', 'Mercdes Benz OF1722', 'Padron'),
('KE229', 'Masivo Capital', 'Via', 'Marcopolo', 'Mercedes Benz of1722', 'Padron'),
('M025', 'Express Del Futuro', 'Viale', 'Marcopolo', 'Volvo B10M', 'Articulado'),
('M091', 'Express del futuro', 'Viale', 'Marcopolo', 'Volvo B10M', 'Articulado'),
('N012', 'Consorcio Express', 'Urbanuss Pluss S3', 'Busscar', 'Volvo B340M', 'Articulado'),
('N190', 'Consorcio Express', 'Urbanuss Pluss S3', 'Busscar', 'Volvo B340M', 'Biarticulado'),
('S174', 'Transmasivo', 'Urbanuss Pluss', 'Busscar', 'Scania K350', 'Articulado'),
('S208', 'Transmasivo', 'Urbanuss Pluss', 'Busscar', 'Volvo B12M', 'Articulado'),
('T081', 'Metrobus', 'Viale', 'Marcopolo', 'Volvo B10M', 'Articulado'),
('T138', 'Metrobus', 'Gran Viale', 'Marcopolo', 'Volvo B12M', 'Articulado'),
('U022', 'SI 99', 'Urbanuss Pluss', 'Busscar', 'Mercedes Benz  OM457', 'Articulado'),
('U155', 'SI 99', 'Urbanuss Pluss', 'Busscar', 'Mercdes Benz OM457', 'Articulado'),
('U227', 'SI 99 ', 'Urbanuss Pluss S3', 'Busscar', 'Volvo B12M', 'Articulado'),
('Z20-2002', 'Masivo Capital', 'Elipse', 'Incolcar', 'Chevrolet Npr', 'Buseta 40'),
('Z20-2005', 'Masivo Capital', 'Ibiza', 'Jgb', 'Chevrolet Npr', 'Buseta 40'),
('Z20-4176', 'Masivo Capital', 'Nuevo Zafiro', 'Indubo', 'Chevrolet Npr', 'Buseta'),
('Z25-4430', 'Masivo Capital', 'Zafiro', 'Indubo', 'Mercedes Benz LO915', 'Buseta');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD PRIMARY KEY (`Movil`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
