-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-11-2025 a las 10:29:24
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `portafolio_web`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE `contactos` (
  `id_contacto` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `nombre_completo` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `asunto` varchar(300) NOT NULL,
  `descripcion` text NOT NULL,
  `fecha_envio` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`id_contacto`, `token`, `nombre_completo`, `email`, `asunto`, `descripcion`, `fecha_envio`) VALUES
(1, '', 'hola', 'hola@gmail.com', 'hola que tal', 'como estas', '2025-11-20 00:00:00'),
(2, '7d474fe18007678bb1be37f8a08f51d122aaaa48ea73d7fb7d14b622dd50179f', 'aaaaaa', 'diegoxavierbarros2002@gmail.com', 'hablar aaa', 'sadaddddddddddasa', '2025-11-20 03:57:04'),
(3, 'a8035fdf723063ab0976acb3aa8c869bbcc3eb0a15bb92d129ef65b4c1f8ce15', 'xavier', 'diegoxavier20022020@gmail.com', 'quiero hablar', 'quiero hablar de un proyecto', '2025-11-20 03:59:25'),
(4, '104d88026e6856bb5d0216431105f042cde2fcf34806f0089d34398631d69f53', 'xavier diego', 'diegoxavierbarros2002@gmail.com', 'errores en el formulario', 'quiero hablar del error', '2025-11-20 04:08:43'),
(5, '2e38c85c7bf18132422f323ad6c27eaccb88cf403afd2d39f7a8e02f35650f00', 'diego xavier a', 'diego@gmail.com', 'ultima prueba', 'esta es la ultima prueba', '2025-11-20 04:16:02'),
(6, '28cf219ddca83c13f02c371dfae9338092fcb695db5aee08c96397a63b53b283', 'Diego  Xavier Barros Conde', 'diegoxavierbarros2002@gmail.com', 'errores en el formulario', 'prueba de errores de formulario', '2025-11-20 04:18:54');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id_contacto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id_contacto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
