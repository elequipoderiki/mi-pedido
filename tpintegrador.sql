-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-06-2026 a las 01:40:42
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tpintegrador`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `id` varchar(100) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `producto` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dni` varchar(50) NOT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `ciudad` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`id`, `nombre`, `producto`, `email`, `dni`, `direccion`, `ciudad`) VALUES
('1', 'Juan Ramon', '6', 'ramon@gmail.com', '29404020', 'calle paraiso 2544', 'La Plata'),
('2', 'Elizabeth Rosas', '4', 'eli@yahoo.com.ar', '40200343', 'calle olavarria 340', 'Avellaneda'),
('3', 'Juan Ramon', '1', 'ramon@gmail.com', '29404020', 'calle paraiso 2544 ', 'La Plata'),
('4', 'Jose Lopez', '4', 'jose@gmail.com', '14032992', 'calle 50 3408', 'Ensenada'),
('5', 'María Mercedes', '2', 'maria@gmail.com', '30239121', 'calle losada 929', 'Quilmes'),
('6', 'Ernesto Farias', '1', 'ernesto@yahoo.com.ar', '50290112', 'calle almirante brown 201', 'Almirante Brown');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` varchar(100) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `precio` decimal(10,2) NOT NULL,
  `stock` int(11) NOT NULL DEFAULT 0,
  `categoria` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `nombre`, `descripcion`, `precio`, `stock`, `categoria`) VALUES
('1', ' papel A4 premium', 'papel de impresora tipo A4', 20.00, 10, 'oficina'),
('2', 'toner HP', 'toner para impresora ', 50.00, 30, 'oficina'),
('3', 'marcador indeleble', 'marcador para pizarra tipo indeleble', 5.00, 14, 'oficina'),
('4', 'laptop HP', 'laptop ultra delgada de fácil traslado', 200.00, 5, 'tecnologia'),
('5', 'camara web HP', 'cámara web de alta resolución', 100.00, 7, 'tecnologia'),
('6', 'bateria HP', 'batería para laptop HP', 50.00, 8, 'tecnologia');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id`),
  ADD KEY `producto_fk` (`producto`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `producto_fk` FOREIGN KEY (`producto`) REFERENCES `producto` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
