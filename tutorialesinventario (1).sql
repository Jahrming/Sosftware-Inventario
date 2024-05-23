-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-07-2022 a las 19:08:00
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
-- Base de datos: `tutorialesinventario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `fecha`) VALUES
(1, 'Desarrollo Web modificado', '2022-06-13 18:57:07'),
(2, 'Ecommerce modificado', '2022-06-13 18:57:16'),
(5, 'paginas web', '2022-07-08 16:54:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entradap`
--

CREATE TABLE `entradap` (
  `id` int(11) NOT NULL,
  `codigo` int(11) NOT NULL,
  `descripcion` text NOT NULL,
  `nombrecategoria` int(11) NOT NULL,
  `entrada` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `entradap`
--

INSERT INTO `entradap` (`id`, `codigo`, `descripcion`, `nombrecategoria`, `entrada`, `fecha`) VALUES
(1, 201, 'Alicate', 1, 12, '2022-06-14 15:25:15'),
(2, 201, 'Alicate', 1, 10, '2022-06-14 15:51:25'),
(3, 201, 'Alicate', 1, 10, '2022-06-14 16:02:18'),
(4, 76676878, 'Vamos', 2, 15, '2022-06-14 16:04:23'),
(5, 201, 'Alicate', 1, 10, '2022-06-17 01:42:46'),
(6, 201, 'Alicate', 1, 10, '2022-07-08 16:55:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `idcategoria` int(11) NOT NULL,
  `codigo` text NOT NULL,
  `descripcion` text NOT NULL,
  `stock` int(11) NOT NULL,
  `precio` float NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `idcategoria`, `codigo`, `descripcion`, `stock`, `precio`, `fecha`) VALUES
(1, 1, '201', 'Alicate', 50, 200, '2022-07-08 16:55:33'),
(3, 2, '76676878', 'Vamos', 20, 78, '2022-07-08 16:55:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salidap`
--

CREATE TABLE `salidap` (
  `id` int(11) NOT NULL,
  `codigo` text NOT NULL,
  `descripcion` text NOT NULL,
  `nombrecategoria` text NOT NULL,
  `salida` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `salidap`
--

INSERT INTO `salidap` (`id`, `codigo`, `descripcion`, `nombrecategoria`, `salida`, `fecha`) VALUES
(1, '76676878', 'Vamos', '2', 5, '2022-06-14 16:23:20'),
(2, '76676878', 'Vamos', '2', 10, '2022-06-17 01:43:02'),
(3, '76676878', 'Vamos', '2', 10, '2022-07-08 16:55:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `usuario` text NOT NULL,
  `password` varchar(300) NOT NULL,
  `perfil` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `password`, `perfil`, `fecha`) VALUES
(1, 'Fernando modificado', 'nando', '$2a$07$asxx54ahjppf45sd87a5au1mMwPFOiFOa2BiMswhkNpbB7hBZc6pa', 'Administrador', '2022-06-13 17:12:46'),
(3, 'Luis modifcado', 'admin', '$2a$07$asxx54ahjppf45sd87a5auXBm1Vr2M1NV5t/zNQtGHGpS5fFirrbG', 'Administrador-Cotizador', '2022-06-14 18:17:38'),
(4, 'Ecommerce modificado', 'jose', '$2a$07$asxx54ahjppf45sd87a5au1mMwPFOiFOa2BiMswhkNpbB7hBZc6pa', 'Administrador', '2022-06-13 17:30:58'),
(7, 'siii', 'hola', '$2a$07$asxx54ahjppf45sd87a5auEKl984fID33lyBClW7OSuuQkFCZQT9a', 'Vamos', '2022-06-13 17:31:17');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `entradap`
--
ALTER TABLE `entradap`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `salidap`
--
ALTER TABLE `salidap`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `entradap`
--
ALTER TABLE `entradap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `salidap`
--
ALTER TABLE `salidap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
