-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-11-2021 a las 23:28:27
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tiendita`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id` int(11) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `edad` int(11) NOT NULL,
  `descripcion` varchar(150) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id`, `nombres`, `apellidos`, `email`, `edad`, `descripcion`, `foto`) VALUES
(56, 'David', 'Ospina', ' david@cesde.net', 32, 'Capitan', 'https://firebasestorage.googleapis.com/v0/b/pruebaproyecto-e1cfe.appspot.com/o/ospina.jpg?alt=media&token=acc4b466-60dd-43b3-a032-30811431d52c'),
(57, 'Juan Guillermo', 'Cuadrado', 'jgcuad@cesde.net', 33, 'Lider', 'https://firebasestorage.googleapis.com/v0/b/pruebaproyecto-e1cfe.appspot.com/o/cuadrado.jpg?alt=media&token=11fcca21-eb5f-4792-b90f-aea21fcfcd8e'),
(58, 'Falcao', 'Garcia', ' radamel@cesde.net', 34, 'Majistral', 'https://firebasestorage.googleapis.com/v0/b/pruebaproyecto-e1cfe.appspot.com/o/falcao.jpg?alt=media&token=3a441337-f77e-426d-ba4e-69d957a1b6bf'),
(59, 'Duvan', 'Zapata', ' duvan@cesde.net', 27, 'Goleador', 'https://firebasestorage.googleapis.com/v0/b/pruebaproyecto-e1cfe.appspot.com/o/zapata.png?alt=media&token=58f90b37-e9a9-4a77-bf99-504081d2222c'),
(61, 'Davinson', 'Sanchez', ' sanchez@cesde.net', 26, 'Disponible', 'https://firebasestorage.googleapis.com/v0/b/pruebaproyecto-e1cfe.appspot.com/o/davinson.jpg?alt=media&token=93e68d8e-9518-49a9-b44b-21bd247b43d0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `nombreProducto` varchar(50) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `precio` int(11) NOT NULL,
  `descripcionProducto` varchar(200) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `nombreProducto`, `marca`, `precio`, `descripcionProducto`, `foto`) VALUES
(38, 'Tetris', 'Atari', 30000, 'Manual', 'https://firebasestorage.googleapis.com/v0/b/productos-1132a.appspot.com/o/atari.jpg?alt=media&token=ce0a88a0-fa56-487f-9797-8bf2d86ed9ed'),
(39, 'Audifonos', 'Huawei', 49900, 'Diadema Gamer', 'https://firebasestorage.googleapis.com/v0/b/productos-1132a.appspot.com/o/audifonos.jpg?alt=media&token=4c12bd75-5566-487a-9281-74b0f0243dda'),
(40, 'Control Xbox', 'xbox', 199900, 'Inalambrico', 'https://firebasestorage.googleapis.com/v0/b/productos-1132a.appspot.com/o/control.jpg?alt=media&token=82b11840-7dde-4161-afa8-7bcdc47a0c10'),
(41, 'Fifa 22', 'Sony', 215000, 'Fisico ps4', 'https://firebasestorage.googleapis.com/v0/b/productos-1132a.appspot.com/o/fifa22.jpg?alt=media&token=79e7f5f4-ce48-4788-8d13-8af383b07bdc'),
(42, 'GameBoy', 'Atari', 23500, 'Movil', 'https://firebasestorage.googleapis.com/v0/b/productos-1132a.appspot.com/o/gameBoy.jpg?alt=media&token=1c9ef29a-b033-494a-a265-22c6e85f727f'),
(43, 'Minecraft', 'Sony', 230000, 'Disco fisico', 'https://firebasestorage.googleapis.com/v0/b/productos-1132a.appspot.com/o/minecraft.jpg?alt=media&token=ccd71456-c77f-4236-b701-d14f3330666b'),
(44, 'Monitor', 'Samsung', 750000, 'Gamer 27\"', 'https://firebasestorage.googleapis.com/v0/b/productos-1132a.appspot.com/o/monitor.jpg?alt=media&token=d1ae291a-e72b-4427-863e-f6a2f2050b23'),
(45, 'Play Station4', 'Sony', 2400000, 'Nuevo', 'https://firebasestorage.googleapis.com/v0/b/productos-1132a.appspot.com/o/play4.jpg?alt=media&token=b7fab9f1-2dce-47b1-8341-28e2d2d88061'),
(46, 'ResidenEvil 8', 'Disney', 215000, 'Disco fisico', 'https://firebasestorage.googleapis.com/v0/b/productos-1132a.appspot.com/o/residentEvil.jpg?alt=media&token=4fa1e726-8637-47c0-aa0f-dfdf1f9b852f'),
(47, 'Teclado', 'HP', 87000, 'Inalmbrico, usb', 'https://firebasestorage.googleapis.com/v0/b/productos-1132a.appspot.com/o/teclado.jpg?alt=media&token=6bf37a19-4970-48cf-bb62-5092f8bce3db');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
