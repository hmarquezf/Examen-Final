-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-11-2023 a las 19:40:11
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `globalcars`
--

CREATE DATABASE globalcars;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `indice` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `tipoid` varchar(2) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `telefono` varchar(11) NOT NULL,
  `sexo` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`indice`, `id`, `tipoid`, `nombre`, `email`, `telefono`, `sexo`) VALUES
(1, 1048219647, 'CC', 'Humberto Marquez', 'humberto@pca.edu.co', '3022365534', 'H');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE `genero` (
  `idGen` varchar(2) NOT NULL,
  `Nombre` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `genero`
--

INSERT INTO `genero` (`idGen`, `Nombre`) VALUES
('H', 'HOMBRE'),
('M', 'MUJER'),
('ND', 'OTRO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reportes`
--

CREATE TABLE `reportes` (
  `reportes` int(3) NOT NULL,
  `idCliente` int(11) NOT NULL,
  `contactado` varchar(2) NOT NULL,
  `idAsesor` varchar(2) NOT NULL,
  `idVehiculo` varchar(5) NOT NULL,
  `detalle` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reportes`
--

INSERT INTO `reportes` (`reportes`, `idCliente`, `contactado`, `idAsesor`, `idVehiculo`, `detalle`) VALUES
(1, 1048219647, 'si', 'LP', 'CHE01', 'Inserción de prueba');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE `vehiculos` (
  `id` varchar(5) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `precio` decimal(20,0) NOT NULL,
  `motor` decimal(8,0) NOT NULL,
  `kilometraje` decimal(10,0) NOT NULL,
  `estado` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`id`, `nombre`, `precio`, `motor`, `kilometraje`, `estado`) VALUES
('CHE01', 'Chevrolet Spark 2015', '25000000', '1000', '98000', 'USADO'),
('FOR01', 'Ford Focus', '98000000', '1600', '0', 'NUEVO'),
('HYU01', 'Hyundai Tucson', '47000000', '2600', '250000', 'USADO'),
('MAZ01', 'Mazda MX-5', '172750000', '1998', '0', 'NUEVO'),
('MER01', 'Mercedes Benz Clase ', '353000000', '1440', '0', 'NUEVO'),
('REN01', 'Renault Logan 2018', '41500000', '1600', '150000', 'USADO'),
('TOY01', 'Toyota SW 4', '433856675', '2755', '0', 'NUEVO'),
('VOL01', 'Volkswagen T-Cross', '88990000', '999', '0', 'NUEVO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vendedores`
--

CREATE TABLE `vendedores` (
  `id` varchar(2) NOT NULL,
  `Nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `vendedores`
--

INSERT INTO `vendedores` (`id`, `Nombre`) VALUES
('AD', 'Alberto De La Espriella'),
('JP', 'Juan Peña'),
('LP', 'Luciana Pons'),
('ME', 'María Estrada'),
('NM', 'Nicolás Martinez');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sexo` (`sexo`),
  ADD KEY `indice` (`indice`);

--
-- Indices de la tabla `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`idGen`);

--
-- Indices de la tabla `reportes`
--
ALTER TABLE `reportes`
  ADD PRIMARY KEY (`reportes`),
  ADD KEY `idAsesor` (`idAsesor`),
  ADD KEY `idCliente` (`idCliente`);

--
-- Indices de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vendedores`
--
ALTER TABLE `vendedores`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `indice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `reportes`
--
ALTER TABLE `reportes`
  MODIFY `reportes` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_ibfk_1` FOREIGN KEY (`sexo`) REFERENCES `genero` (`idGen`);

--
-- Filtros para la tabla `reportes`
--
ALTER TABLE `reportes`
  ADD CONSTRAINT `reportes_ibfk_1` FOREIGN KEY (`idAsesor`) REFERENCES `vendedores` (`id`),
  ADD CONSTRAINT `reportes_ibfk_2` FOREIGN KEY (`idCliente`) REFERENCES `clientes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
