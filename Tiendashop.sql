-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-08-2020 a las 23:57:38
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.3.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `id_administrador` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `f_registro` date NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`id_administrador`, `id_usuario`, `f_registro`, `estado`) VALUES
(5, 1, '2020-08-20', 1),
(6, 2, '2020-08-19', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `existencias`
--

CREATE TABLE `existencias` (
  `id_existencias` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `talla` int(3) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `marca` enum('ZARA','MANGO','BOSS','H&M','GOCCO') COLLATE latin1_spanish_ci NOT NULL,
  `categoria` enum('Hombre','Mujer','Niños') COLLATE latin1_spanish_ci NOT NULL,
  `precio` float NOT NULL,
  `descripcion` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `f_registro` datetime NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `nombre`, `marca`, `categoria`, `precio`, `descripcion`, `f_registro`, `estado`) VALUES
(1, 'Playera Smir', 'H&M', 'Mujer', 250, 'Playera tipo polari, con un logotipo de tamaño 50c, estilo Smir.', '2020-08-11 16:35:47', 1),
(2, 'COOFANDY', 'GOCCO', 'Hombre', 400, 'Camisa de vestir de manga larga con estampado floral para hombre ', '2020-08-13 16:35:47', 1),
(3, 'Tommy Hilfiger', 'H&M', 'Mujer', 600, 'Camisa con Botones y lengüeta Camisa de Botones para Mujer ', '2020-08-19 16:37:51', 0),
(4, 'U.S. Polo Assn.', 'ZARA', 'Mujer', 800, 'Blusa de Popelina de Manga Larga para Mujer ', '2020-08-23 16:37:51', 0),
(5, 'Breton', 'MANGO', 'Mujer', 850, 'Playera de Manga 3/4 (100% algodón), diseño de Rayas Camisa para Mujer ', '2020-08-22 16:39:45', 1),
(6, 'Effortless J-Class', 'MANGO', 'Mujer', 1200, 'Jersey de Manga Larga (100% algodón, Cuello en V) Chamarra para Mujer ', '2020-08-23 16:39:45', 1),
(7, 'Honestyivan', 'ZARA', 'Mujer', 2000, 'chamarra de punto suelto casual para mujer, con botones de retazos de colores ', '2020-08-10 16:40:50', 1),
(8, 'BIADANI', 'ZARA', 'Hombre', 1300, 'Cárdigan para Hombre, con frente abierto, ligero y suave ', '2020-08-17 16:40:50', 0),
(9, 'Goodthreads ', 'BOSS', 'Hombre', 450, 'Playera de Manga Larga para Hombre ', '2020-08-18 16:42:13', 1),
(10, 'Deep Ocean', 'ZARA', 'Niños', 840, 'Deep Apparel Camisa de Cuadros de Manga Larga con Botones y Botones, Royal', '2020-08-16 16:42:13', 1),
(11, 'Wrangler', 'H&M', 'Niños', 360, 'Camisa Tipo Vaquera para niños de Manga Larga, Diseño a Cuadros ', '2020-08-18 16:43:44', 0),
(12, 'Hudson Baby', 'BOSS', 'Niños', 623, 'Traje de unión de algodón para bebé, 3 Unidades ', '2020-08-09 16:43:44', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `Nombre` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `a_paterno` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `a_materno` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `email` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `f_nacimiento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `Nombre`, `a_paterno`, `a_materno`, `email`, `f_nacimiento`) VALUES
(1, 'Anais', 'Romero', 'Titla', 'Anais.romero281@gmail.com', '2000-11-02'),
(2, 'Christian', 'Alcantara', 'Flores', 'Chris_pria@gmail.com', '2000-08-23'),
(3, 'Jorge', 'Pacheco', 'Acevedo', 'Jorge_Dyllan@hotmail.com', '2001-08-10'),
(4, 'Ricardo ', 'Tapia', 'Olvera', 'Ricardini@gmail.com', '2010-04-15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id_venta` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `banco` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `no_tarjeta` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `f_compra` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas_producto`
--

CREATE TABLE `ventas_producto` (
  `id_venta` int(11) NOT NULL,
  `id_existencia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id_administrador`),
  ADD KEY `fk_administrador_usuario` (`id_usuario`);

--
-- Indices de la tabla `existencias`
--
ALTER TABLE `existencias`
  ADD PRIMARY KEY (`id_existencias`),
  ADD KEY `fk_existencias_producto` (`id_producto`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id_venta`),
  ADD KEY `fk_venta_usuario` (`id_usuario`);

--
-- Indices de la tabla `ventas_producto`
--
ALTER TABLE `ventas_producto`
  ADD PRIMARY KEY (`id_venta`,`id_existencia`),
  ADD KEY `fk_venta_existencias_1` (`id_existencia`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `id_administrador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `existencias`
--
ALTER TABLE `existencias`
  MODIFY `id_existencias` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD CONSTRAINT `fk_administrador_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `existencias`
--
ALTER TABLE `existencias`
  ADD CONSTRAINT `fk_existencias_producto` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `fk_venta_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ventas_producto`
--
ALTER TABLE `ventas_producto`
  ADD CONSTRAINT `fk_venta_existencias_1` FOREIGN KEY (`id_existencia`) REFERENCES `existencias` (`id_existencias`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_venta_producto_1` FOREIGN KEY (`id_venta`) REFERENCES `ventas` (`id_venta`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
