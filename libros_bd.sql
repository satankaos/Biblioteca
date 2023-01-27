-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-01-2023 a las 16:24:31
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `libros_bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `libros` varchar(255) NOT NULL,
  `id_carrito` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `total` int(255) NOT NULL,
  `id_usuario` varchar(255) DEFAULT NULL,
  `id_libro` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `carrito`
--

INSERT INTO `carrito` (`libros`, `id_carrito`, `correo`, `total`, `id_usuario`, `id_libro`) VALUES
('asdasd', '', 'asd@correo.es', 44, 'mlk', 'hjvljh');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id` int(11) NOT NULL,
  `Titulo` varchar(255) NOT NULL,
  `Autor` varchar(255) NOT NULL,
  `Editorial` varchar(255) NOT NULL,
  `Fecha_publicacion` date NOT NULL,
  `Genero` varchar(255) NOT NULL,
  `Precio` decimal(10,2) NOT NULL,
  `Imagen` varchar(255) NOT NULL,
  `Descripción` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id`, `Titulo`, `Autor`, `Editorial`, `Fecha_publicacion`, `Genero`, `Precio`, `Imagen`, `Descripción`) VALUES
(1, 'la casa del libro ', 'yo', 'paque ', '0000-00-00', 'suspennse', '15.50', 'loquweaea', 'libro maravilloso');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago`
--

CREATE TABLE `pago` (
  `Monto` float(10,2) NOT NULL,
  `Id_pago` int(102) NOT NULL,
  `Fecha` date NOT NULL,
  `Usuario` varchar(255) NOT NULL,
  `Metodo` varchar(255) NOT NULL,
  `Id_usuario` varchar(255) NOT NULL,
  `Id_pedido` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `Id_pedido` bigint(20) NOT NULL,
  `Libros` varchar(255) NOT NULL,
  `Precio` decimal(10,2) NOT NULL,
  `Total` int(255) NOT NULL,
  `Usuario` varchar(255) NOT NULL,
  `Direccion` varchar(255) NOT NULL,
  `Fecha` date NOT NULL,
  `Id_usuario` varchar(255) DEFAULT NULL,
  `Id_carrito` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `Id_admin` int(11) DEFAULT NULL,
  `Id_usiario` bigint(255) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Correo` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `id_libro` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Id_admin`, `Id_usiario`, `Nombre`, `Correo`, `Password`, `id_libro`) VALUES
(0, 1, 'administrador', 'administrador@correo.com', '21232f297a57a5a743894a0e4a801fc3', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`id_carrito`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pago`
--
ALTER TABLE `pago`
  ADD PRIMARY KEY (`Id_pago`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`Id_pedido`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Id_usiario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `Id_pedido` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `Id_usiario` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
