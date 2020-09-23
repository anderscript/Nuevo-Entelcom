-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 23-09-2020 a las 20:27:15
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `entelcom`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenido`
--

CREATE TABLE `contenido` (
  `id` int(11) NOT NULL,
  `valor` varchar(20) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contenido`
--

INSERT INTO `contenido` (`id`, `valor`, `tipo`, `nombre`) VALUES
(1, 'hola como vas', 'texto', 'lolo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lead`
--

CREATE TABLE `lead` (
  `id_cliente` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `telefono` varchar(30) NOT NULL,
  `pais` varchar(50) NOT NULL,
  `creador` varchar(50) NOT NULL,
  `oportunidad` varchar(20) NOT NULL,
  `web` varchar(20) NOT NULL,
  `conpania` varchar(15) NOT NULL,
  `filtro` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `lead`
--

INSERT INTO `lead` (`id_cliente`, `nombre`, `correo`, `telefono`, `pais`, `creador`, `oportunidad`, `web`, `conpania`, `filtro`) VALUES
(1, 'Anderson Quintero', 'and@gmail.com', '3134824554', 'Venezuela', 'brayan', '', '', 'tesla', 'web'),
(2, 'Pancho', 'andersona@gmail.commm', '321', 'venezuela', 'Anderson', '', '', '', 'web'),
(3, 'Gustavo', 'gus@roto.com', '12345', 'Venezuela', 'Anderson', '6666', 'web.com', 'lolo', 'web'),
(4, 'Jenifer', 'jenifer@gmail.com', '', '', 'brayan', '49', '', '', 'web'),
(5, 'Yolo', 'ros@gmail.com', '212332322323', 'Venezuela', 'lirianis', '0', '', 'lolita', 'web'),
(6, 'pedro', 'pedro@gmail.com', '212332322323', 'Canada', 'anderson', '0', 'web.com', '', ''),
(7, 'Juancito', 'loro@gmail.com', '', '', 'anderson', '0', '', '', ''),
(8, 'Gali', 'per', '', '', 'anderson', '0', '', '', ''),
(9, 'Jose Peralta', 'jose@prim.com', '3134853172', 'Canada', 'anderson', '0', '', 'No tiene', ''),
(10, 'Daniel', 'dani@gmail.com', '', 'Venezuela', 'anderson', '0', 'dani.com', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas_gestiones`
--

CREATE TABLE `notas_gestiones` (
  `id` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `comentario` varchar(100) NOT NULL,
  `fecha` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `notas_gestiones`
--

INSERT INTO `notas_gestiones` (`id`, `id_cliente`, `comentario`, `fecha`, `nombre`) VALUES
(163, 3, 'otro ejemplo mas', '29/07/20', 'brayan'),
(164, 3, 'todo tiene ejemplo', '29/07/20', 'brayan'),
(165, 3, 'Listo', '29/07/20', 'brayan'),
(166, 3, 'Esto es una prueba desde dos ordenadores', '29/07/20', 'Anderson'),
(167, 3, 'Esto es otra prueda desde la otra ventana', '29/07/20', 'brayan'),
(168, 4, 'Esto es una gestion de prueba', '29/07/20', 'brayan'),
(173, 4, 'Esto es una prueba numero 40', '3/08/20', 'brayan'),
(174, 3, 'Hola', '8/08/20', 'anderson'),
(175, 3, 'Esto es', '8/08/20', 'anderson'),
(176, 3, 'locochon', '8/08/20', 'anderson'),
(177, 3, 'pedro', '8/08/20', 'anderson'),
(178, 3, 'Devemos', '8/08/20', 'anderson'),
(179, 3, 'Esto es un comentario de los artículos que puedo mencionar.', '8/08/20', 'Anderson'),
(180, 3, 'fa', '9/08/20', 'Anderson'),
(181, 3, 'fa', '9/08/20', 'Anderson'),
(182, 5, 'Llame a esta persona, pero no me atiende lo voy a llamar mas tarde', '11/08/20', 'lirianis'),
(183, 6, 'Esto es una primera gestión', '25/08/20', 'anderson'),
(184, 9, 'Esto es una observacion de un cliente que es banano, no le interesa por nada del mundo lo que vendem', '5/09/20', 'anderson'),
(185, 9, 'Hola Mundo', '7/09/20', 'anderson'),
(186, 1, 'Estoy cambiando toda la gestión', '11/09/20', 'anderson'),
(187, 1, 'Otra Voz', '11/09/20', 'anderson'),
(188, 1, 'Esta es otra gestion\r\n\r\nLo que pasa es quiero insertar algo', '11/09/20', 'anderson'),
(189, 1, 'Gestion online modificada', '11/09/20', 'Anderson');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oportunidad`
--

CREATE TABLE `oportunidad` (
  `id` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `valor` varchar(20) NOT NULL,
  `creador` varchar(20) NOT NULL,
  `tipo` varchar(15) NOT NULL,
  `fecha` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `oportunidad`
--

INSERT INTO `oportunidad` (`id`, `id_cliente`, `valor`, `creador`, `tipo`, `fecha`) VALUES
(3, 3, '1500', 'Anderson', 'Cuota', '2020-08-21'),
(4, 3, '1200', 'Anderson', 'Cuota', '2020-08-21'),
(5, 3, '1500', 'Anderson', 'Cuota', '2020-08-21'),
(6, 3, '1000000', 'Anderson', 'Ganado', '2020-08-11'),
(7, 3, '1500', 'Anderson', 'Cuota', '2020-08-21'),
(8, 3, '1500', 'Anderson', 'Cuota', '2020-08-21'),
(9, 3, '1500', 'Anderson', 'Cuota', '2020-08-21'),
(10, 3, '1500', 'Anderson', 'Cuota', '2020-08-21'),
(11, 3, '1500', 'Anderson', 'Cuota', '2020-08-21'),
(12, 3, '1500', 'Anderson', 'Cuota', '2020-08-21'),
(13, 3, '1500', 'Anderson', 'Cuota', '2020-08-21'),
(14, 3, '1500', 'Anderson', 'Cuota', '2020-08-21'),
(15, 3, '1500', 'Anderson', 'Cuota', '2020-08-21'),
(16, 3, '1500', 'Anderson', 'Cuota', '2020-08-21'),
(17, 3, '1500', 'Anderson', 'Cuota', '2020-08-21'),
(18, 3, '1500', 'Anderson', 'Cuota', '2020-08-21'),
(19, 5, '30000', 'lirianis', 'Compromiso', '2020-08-22'),
(20, 5, '39000', 'lirianis', 'Ganado', '2020-08-29'),
(21, 6, '4000', 'anderson', 'Cuota', '2020-08-21'),
(22, 6, '10000', 'anderson', 'Compromiso', '2020-08-21'),
(23, 1, '1000', 'anderson', 'Cuota', '2020-09-30'),
(24, 1, '1000', 'anderson', 'Cuota', '2020-08-20'),
(25, 1, '20000', 'anderson', 'Cuota', '2020-08-12'),
(26, 9, '7', 'anderson', 'Perdido', '2020-09-18'),
(27, 9, '5000', 'anderson', 'Cuota', ''),
(28, 9, '7777', 'anderson', 'Cuota', '2020-09-16'),
(29, 9, '13000', 'anderson', 'Cuota', '2020-09-18'),
(30, 1, '23', 'Anderson', 'Cuota', '2020-09-16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `contenido` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `post`
--

INSERT INTO `post` (`id`, `titulo`, `contenido`) VALUES
(1, 'Hola Mundo', 'Esto es un contenido de prueba para nuestra web, los mejores contenidos de los demas.....'),
(2, 'Titulo del post prueba', 'para este es el contenido del post de pura prueba no mas'),
(3, 'Esto es otro post', 'Mas contenido para editar'),
(4, 'Parametros numero dos', 'Este es otro contenido numero dos'),
(5, 'Otro mas del ultimo', 'Este es otro mas'),
(6, 'lalalal', 'pedro'),
(7, 'lelolos', 'para\n'),
(8, 'Otro mas de ya', 'Este');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `pass` varchar(150) NOT NULL,
  `nombre_usuario` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `correo`, `pass`, `nombre_usuario`) VALUES
(1, 'Brayan', 'andersonquinteroco@gmail.com', '123456', '0'),
(3, 'Lirianis', 'liri@gmail.com', '123456', '0'),
(5, 'yolo', 'yolo@gmail.com', '$2y$10$8kiIIr8AukTCibW7OhC/ReMDyemzphWSmDT6kdCKyq2KtH4lA0Igy', 'yolo'),
(6, 'nose', 'nos@gmail.com', '$2y$10$8kiIIr8AukTCibW7OhC/ReMDyemzphWSmDT6kdCKyq2KtH4lA0Igy', 'nose'),
(7, 'Anderson', 'andersonquinteroco@gmail.com', '$2y$10$gG4XBvy25y.hyTteiwgPLukFKBeGHzYNg8MDcWMAfDHq6d.9zHtjC', 'Anderson');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contenido`
--
ALTER TABLE `contenido`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `lead`
--
ALTER TABLE `lead`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `notas_gestiones`
--
ALTER TABLE `notas_gestiones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `oportunidad`
--
ALTER TABLE `oportunidad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contenido`
--
ALTER TABLE `contenido`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `lead`
--
ALTER TABLE `lead`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `notas_gestiones`
--
ALTER TABLE `notas_gestiones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=190;

--
-- AUTO_INCREMENT de la tabla `oportunidad`
--
ALTER TABLE `oportunidad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
