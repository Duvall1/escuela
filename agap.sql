-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-02-2022 a las 03:35:54
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `agap`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(250) NOT NULL,
  `usuario` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `pass` varchar(200) CHARACTER SET utf32 COLLATE utf32_spanish_ci NOT NULL,
  `nombre` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `cedula` int(67) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id_alumno` int(11) NOT NULL,
  `nombres` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `cedula` int(30) NOT NULL,
  `tlf` int(56) NOT NULL,
  `nacimiento` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `curso` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_rep` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `discapacidad` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `est_p` int(100) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id_alumno`, `nombres`, `apellidos`, `cedula`, `tlf`, `nacimiento`, `curso`, `nombre_rep`, `discapacidad`, `est_p`) VALUES
(1, 'EDSFSD F', 'DSF DS', 27010387, 0, '2022-02-07', 'DSFSDF', 'DSFSDFS ', 'DSFSDF', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `id_curso` int(250) NOT NULL,
  `maestro` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `ano` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `num_alumnos` int(200) NOT NULL,
  `seccion` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `grado` varchar(60) CHARACTER SET utf8 NOT NULL,
  `est_v` int(200) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`id_curso`, `maestro`, `ano`, `num_alumnos`, `seccion`, `grado`, `est_v`) VALUES
(16, 'anderson ASDAD', '', 0, 'D', '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maestro`
--

CREATE TABLE `maestro` (
  `id_maestro` int(250) NOT NULL,
  `nombre` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `cedula` int(200) NOT NULL,
  `correo` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` int(200) NOT NULL,
  `grado` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `est_m` int(200) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `maestro`
--

INSERT INTO `maestro` (`id_maestro`, `nombre`, `apellido`, `cedula`, `correo`, `telefono`, `grado`, `est_m`) VALUES
(1, 'anderson', 'ASDAD', 27010387, 'andersontrabajos2@gmail.com', 54636456, '3er grado', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguridad_p`
--

CREATE TABLE `seguridad_p` (
  `id_seguridad` int(11) NOT NULL,
  `pregunta1` varchar(200) CHARACTER SET utf8 NOT NULL,
  `respuesta1` varchar(200) CHARACTER SET utf8 NOT NULL,
  `pregunta2` varchar(200) CHARACTER SET utf8 NOT NULL,
  `respuesta2` varchar(200) CHARACTER SET utf8 NOT NULL,
  `activacion` int(50) NOT NULL DEFAULT '0',
  `ident_p` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `seguridad_p`
--

INSERT INTO `seguridad_p` (`id_seguridad`, `pregunta1`, `respuesta1`, `pregunta2`, `respuesta2`, `activacion`, `ident_p`) VALUES
(1, 'Â¿Color favorito?', 'aaa', 'Â¿Comida favorita?', 'aaaa', 1, '1292437614');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidad_c`
--

CREATE TABLE `unidad_c` (
  `id_unidad` int(11) NOT NULL,
  `unidad_nom` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_inicio` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_entrega` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `ponderacion` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `materia_p` varchar(150) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombres` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `cedula` int(200) NOT NULL,
  `usuario` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `pass` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(250) CHARACTER SET utf8 NOT NULL,
  `iden_us` varchar(200) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombres`, `apellidos`, `cedula`, `usuario`, `pass`, `correo`, `iden_us`) VALUES
(17, 'alesandro', '', 123456789, 'alesandro', '123456', '', '1292437614');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id_alumno`),
  ADD KEY `curso` (`curso`),
  ADD KEY `curso_2` (`curso`);

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id_curso`);

--
-- Indices de la tabla `maestro`
--
ALTER TABLE `maestro`
  ADD PRIMARY KEY (`id_maestro`),
  ADD UNIQUE KEY `cedula` (`cedula`);

--
-- Indices de la tabla `seguridad_p`
--
ALTER TABLE `seguridad_p`
  ADD PRIMARY KEY (`id_seguridad`);

--
-- Indices de la tabla `unidad_c`
--
ALTER TABLE `unidad_c`
  ADD PRIMARY KEY (`id_unidad`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(250) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id_alumno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `curso`
--
ALTER TABLE `curso`
  MODIFY `id_curso` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `maestro`
--
ALTER TABLE `maestro`
  MODIFY `id_maestro` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `seguridad_p`
--
ALTER TABLE `seguridad_p`
  MODIFY `id_seguridad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `unidad_c`
--
ALTER TABLE `unidad_c`
  MODIFY `id_unidad` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
