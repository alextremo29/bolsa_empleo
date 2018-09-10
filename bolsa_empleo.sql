-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 09-09-2018 a las 21:54:54
-- Versión del servidor: 10.1.34-MariaDB-0ubuntu0.18.04.1
-- Versión de PHP: 7.2.7-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bolsa_empleo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `codigo_ciud` varchar(5) NOT NULL,
  `nombre_ciud` varchar(50) DEFAULT NULL,
  `codigo_depa` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `codigo_depa` varchar(5) NOT NULL,
  `nombre_depa` varchar(50) DEFAULT NULL,
  `codigo_pais` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `educacion`
--

CREATE TABLE `educacion` (
  `id_educa` int(11) NOT NULL,
  `area_estudio` varchar(20) DEFAULT NULL,
  `estado` varchar(15) DEFAULT NULL,
  `institucion` varchar(30) DEFAULT NULL,
  `periodo_inicio` varchar(8) DEFAULT NULL,
  `periodo_fin` varchar(8) DEFAULT NULL,
  `tipo_estudio` varchar(20) DEFAULT NULL,
  `titulo_obtenido` varchar(20) DEFAULT NULL,
  `identificacion_perso` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `experiencia`
--

CREATE TABLE `experiencia` (
  `id_expe` int(11) NOT NULL,
  `cargo` varchar(20) DEFAULT NULL,
  `empresa` varchar(30) DEFAULT NULL,
  `fecha_inicio` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_fin` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `funciones` varchar(30) DEFAULT NULL,
  `identificacion_perso` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `idiomas`
--

CREATE TABLE `idiomas` (
  `id_idio` int(11) NOT NULL,
  `capacidad_escritura` int(11) DEFAULT NULL,
  `capacidad_escucha` int(11) DEFAULT NULL,
  `capacidad_habla` int(11) DEFAULT NULL,
  `idioma` varchar(20) DEFAULT NULL,
  `idioma_nativo` tinyint(1) DEFAULT NULL,
  `identificacion_perso` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `codigo_pais` varchar(5) NOT NULL,
  `nombre_pais` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `nombre_pers` varchar(50) DEFAULT NULL,
  `correo` varchar(200) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `rol` int(11) DEFAULT NULL,
  `direccion_persona` varchar(50) DEFAULT NULL,
  `estado_civil` varchar(15) DEFAULT NULL,
  `fecha_nacimiento` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `foto` varchar(60) DEFAULT NULL,
  `genero` varchar(20) DEFAULT NULL,
  `tipo_doc` varchar(10) DEFAULT NULL,
  `identificacion` varchar(15) NOT NULL,
  `telefono` varchar(12) DEFAULT NULL,
  `codigo_depa` varchar(5) DEFAULT NULL,
  `codigo_ciud` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`nombre_pers`, `correo`, `password`, `rol`, `direccion_persona`, `estado_civil`, `fecha_nacimiento`, `foto`, `genero`, `tipo_doc`, `identificacion`, `telefono`, `codigo_depa`, `codigo_ciud`) VALUES
('Alexander Narvaez', 'alexnarfo5@gmail.com', 'alex.159875321', 1, NULL, NULL, '2018-09-09 17:46:10', NULL, NULL, NULL, '', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preferencia_empleo`
--

CREATE TABLE `preferencia_empleo` (
  `id_prefe` int(11) NOT NULL,
  `area` varchar(50) DEFAULT NULL,
  `cambio_residencia` tinyint(1) DEFAULT NULL,
  `salario_deseado` varchar(15) DEFAULT NULL,
  `situacion_actual` varchar(30) DEFAULT NULL,
  `viajar` tinyint(1) DEFAULT NULL,
  `identificacion_perso` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesion`
--

CREATE TABLE `profesion` (
  `codigo_profe` int(11) NOT NULL,
  `area_profesion` varchar(50) DEFAULT NULL,
  `titulo` varchar(50) DEFAULT NULL,
  `identificacion_perso` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesiones`
--

CREATE TABLE `profesiones` (
  `codigo_profe` int(11) NOT NULL,
  `descripcion_profe` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`codigo_ciud`,`codigo_depa`),
  ADD KEY `departamento_fk` (`codigo_depa`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`codigo_depa`),
  ADD KEY `pais_fk` (`codigo_pais`);

--
-- Indices de la tabla `educacion`
--
ALTER TABLE `educacion`
  ADD PRIMARY KEY (`id_educa`),
  ADD KEY `persona_fk_educacion` (`identificacion_perso`);

--
-- Indices de la tabla `experiencia`
--
ALTER TABLE `experiencia`
  ADD PRIMARY KEY (`id_expe`),
  ADD KEY `persona_fk_experiencia` (`identificacion_perso`);

--
-- Indices de la tabla `idiomas`
--
ALTER TABLE `idiomas`
  ADD PRIMARY KEY (`id_idio`),
  ADD KEY `persona_fk_idiomas` (`identificacion_perso`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`codigo_pais`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`identificacion`),
  ADD KEY `ciudad_fk` (`codigo_ciud`);

--
-- Indices de la tabla `preferencia_empleo`
--
ALTER TABLE `preferencia_empleo`
  ADD PRIMARY KEY (`id_prefe`),
  ADD KEY `persona_fk_preferencia_empleo` (`identificacion_perso`);

--
-- Indices de la tabla `profesion`
--
ALTER TABLE `profesion`
  ADD PRIMARY KEY (`codigo_profe`,`identificacion_perso`),
  ADD KEY `persona_fk_profesion` (`identificacion_perso`);

--
-- Indices de la tabla `profesiones`
--
ALTER TABLE `profesiones`
  ADD PRIMARY KEY (`codigo_profe`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `educacion`
--
ALTER TABLE `educacion`
  MODIFY `id_educa` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `experiencia`
--
ALTER TABLE `experiencia`
  MODIFY `id_expe` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `idiomas`
--
ALTER TABLE `idiomas`
  MODIFY `id_idio` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `preferencia_empleo`
--
ALTER TABLE `preferencia_empleo`
  MODIFY `id_prefe` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD CONSTRAINT `departamento_fk` FOREIGN KEY (`codigo_depa`) REFERENCES `departamento` (`codigo_depa`);

--
-- Filtros para la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD CONSTRAINT `pais_fk` FOREIGN KEY (`codigo_pais`) REFERENCES `pais` (`codigo_pais`);

--
-- Filtros para la tabla `educacion`
--
ALTER TABLE `educacion`
  ADD CONSTRAINT `persona_fk_educacion` FOREIGN KEY (`identificacion_perso`) REFERENCES `persona` (`identificacion`);

--
-- Filtros para la tabla `experiencia`
--
ALTER TABLE `experiencia`
  ADD CONSTRAINT `persona_fk_experiencia` FOREIGN KEY (`identificacion_perso`) REFERENCES `persona` (`identificacion`);

--
-- Filtros para la tabla `idiomas`
--
ALTER TABLE `idiomas`
  ADD CONSTRAINT `persona_fk_idiomas` FOREIGN KEY (`identificacion_perso`) REFERENCES `persona` (`identificacion`);

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `ciudad_fk` FOREIGN KEY (`codigo_ciud`) REFERENCES `ciudad` (`codigo_ciud`);

--
-- Filtros para la tabla `preferencia_empleo`
--
ALTER TABLE `preferencia_empleo`
  ADD CONSTRAINT `persona_fk_preferencia_empleo` FOREIGN KEY (`identificacion_perso`) REFERENCES `persona` (`identificacion`);

--
-- Filtros para la tabla `profesion`
--
ALTER TABLE `profesion`
  ADD CONSTRAINT `persona_fk_profesion` FOREIGN KEY (`identificacion_perso`) REFERENCES `persona` (`identificacion`),
  ADD CONSTRAINT `profesiones_fk` FOREIGN KEY (`codigo_profe`) REFERENCES `profesiones` (`codigo_profe`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
