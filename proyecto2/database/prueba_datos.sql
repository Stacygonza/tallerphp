-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-03-2025 a las 18:06:16
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba_datos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudades`
--

CREATE TABLE `ciudades` (
  `id` int(5) NOT NULL,
  `nombre` varchar(32) NOT NULL,
  `dto_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ciudades`
--

INSERT INTO `ciudades` (`id`, `nombre`, `dto_id`) VALUES
(1, 'Leticia', 1),
(2, 'Medellín', 2),
(3, 'Arauca', 3),
(4, 'Barranquilla', 4),
(5, 'Cartagena', 5),
(6, 'Tunja', 6),
(7, 'Manizales', 7),
(8, 'Florencia', 8),
(9, 'Yopal', 9),
(10, 'Popayán', 10),
(11, 'Valledupar', 11),
(12, 'Quibdó', 12),
(13, 'Montería', 13),
(14, 'Bogotá', 14),
(15, 'Inírida', 15),
(16, 'San José del Guaviare', 16),
(17, 'Neiva', 17),
(18, 'Riohacha', 18),
(19, 'Santa Marta', 19),
(20, 'Villavicencio', 20),
(21, 'Pasto', 21),
(22, 'Cúcuta', 22),
(23, 'Mocoa', 23),
(24, 'Armenia', 24),
(25, 'Pereira', 25),
(26, 'San Andrés', 26),
(27, 'Bucaramanga', 27),
(28, 'Sincelejo', 28),
(29, 'Ibagué', 29),
(30, 'Cali', 30),
(31, 'Mitú', 31),
(32, 'Puerto Carreño', 32),
(33, 'Rioblanco', 29);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `documento` int(11) NOT NULL,
  `nombre` varchar(32) NOT NULL,
  `apellido` varchar(64) NOT NULL,
  `ciudad_id` int(5) NOT NULL,
  `creado` timestamp NOT NULL DEFAULT current_timestamp(),
  `activo` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`documento`, `nombre`, `apellido`, `ciudad_id`, `creado`, `activo`) VALUES
(7654213, 'Reinaldo', 'Ricaurte', 33, '2025-03-13 02:10:09', 1),
(25522663, 'Sara Camila ', 'Lopez Barreto', 14, '2025-03-13 01:21:25', 1),
(63987787, 'Felipe', 'Fernadez', 11, '2025-03-13 02:32:04', 1),
(369852147, 'Juan Esteban', 'Moncada Olarte', 14, '2025-03-13 16:30:22', 1),
(639877441, 'stacy', 'Lopez Rico', 2, '2025-03-13 01:38:04', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `id` int(2) NOT NULL,
  `nombre` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`id`, `nombre`) VALUES
(1, 'Amazonas'),
(2, 'Antioquia'),
(3, 'Arauca'),
(4, 'Atlántico'),
(5, 'Bolívar'),
(6, 'Boyacá'),
(7, 'Caldas'),
(8, 'Caquetá'),
(9, 'Casanare'),
(10, 'Cauca'),
(11, 'Cesar'),
(12, 'Chocó'),
(13, 'Córdoba'),
(14, 'Cundinamarca'),
(15, 'Guainía'),
(16, 'Guaviare'),
(17, 'Huila'),
(18, 'La Guajira'),
(19, 'Magdalena'),
(20, 'Meta'),
(21, 'Nariño'),
(22, 'Norte de Santander'),
(23, 'Putumayo'),
(24, 'Quindío'),
(25, 'Risaralda'),
(26, 'San Andrés y Providencia'),
(27, 'Santander'),
(28, 'Sucre'),
(29, 'Tolima'),
(30, 'Valle del Cauca'),
(31, 'Vaupés'),
(32, 'Vichada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(32) NOT NULL,
  `correo` varchar(64) NOT NULL,
  `clave` varchar(100) NOT NULL,
  `creado` timestamp NOT NULL DEFAULT current_timestamp(),
  `activo` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ciudades_ibfk_1` (`dto_id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`documento`),
  ADD KEY `clientes_ibfk_1` (`ciudad_id`);

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ciudades`
--
ALTER TABLE `ciudades`
  ADD CONSTRAINT `ciudades_ibfk_1` FOREIGN KEY (`dto_id`) REFERENCES `departamentos` (`id`);

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_ibfk_1` FOREIGN KEY (`ciudad_id`) REFERENCES `ciudades` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
