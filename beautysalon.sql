-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-11-2023 a las 21:17:38
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `beautysalon`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventoscalendar`
--

CREATE TABLE `eventoscalendar` (
  `id` bigint(20) NOT NULL,
  `evento` bigint(20) DEFAULT NULL,
  `Valor` bigint(20) DEFAULT NULL,
  `color_evento` varchar(20) DEFAULT NULL,
  `fecha_inicio` varchar(20) DEFAULT NULL,
  `fecha_fin` varchar(20) DEFAULT NULL,
  `hora_inicio` varchar(20) DEFAULT NULL,
  `hora_fin` varchar(20) DEFAULT NULL,
  `IdPersonaRol` bigint(20) DEFAULT NULL,
  `Id_Met_Pago` bigint(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `eventoscalendar`
--

INSERT INTO `eventoscalendar` (`id`, `evento`, `Valor`, `color_evento`, `fecha_inicio`, `fecha_fin`, `hora_inicio`, `hora_fin`, `IdPersonaRol`, `Id_Met_Pago`) VALUES
(1, 0, 12000, '#FF5722', '2023-11-07', '1970-01-01', '6:00 am', '7:00 am', 2, 1),
(3, 4, 35000, '#FF5722', '2023-11-10', '2023-11-11', '6:00 am', '7:00 am', 5, 1),
(4, 1, NULL, '#FF5722', '2023-11-22', '2023-11-23', '6:00 am', '7:00 am', 5, 2),
(5, 10, 58000, '#009688', '2023-11-16', '2023-11-17', '6:00 am', '8:00 am', 7, 2),
(6, 2, 30000, '#FF5722', '2023-11-25', '2023-11-24', '6:00 am', '8:00 am', 2, 0),
(7, 4, 25000, '#FF5722', '2023-11-24', '2023-11-25', '6:00 am', '9:00 am', 4, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metodopago`
--

CREATE TABLE `metodopago` (
  `IdMetodoPago` bigint(20) NOT NULL,
  `TipoMetodoPago` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `metodopago`
--

INSERT INTO `metodopago` (`IdMetodoPago`, `TipoMetodoPago`) VALUES
(1, 'Efectivo'),
(2, 'Transacción');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `IdPersona` bigint(20) NOT NULL,
  `NombrePersona` varchar(50) NOT NULL,
  `ApellidoPersona` varchar(50) NOT NULL,
  `Telefono` varchar(50) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Contraseña` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`IdPersona`, `NombrePersona`, `ApellidoPersona`, `Telefono`, `Correo`, `Contraseña`) VALUES
(1, 'Sharon', 'Alvarez', '3125045001', 'sharon@gmail.com', 'sharon123'),
(2, 'Laura', 'Osorio', '32547851254', 'laura@gmail.com', 'laura234'),
(3, 'Ana', 'Restrepo', '312504165', 'ana@gmail.com', 'ana864'),
(4, 'Sharon Yesenia ', ' Barón Alvarez ', ' 313834338', ' alvarez@gmail.com', ' alvarez123'),
(5, 'Marisol ', ' Baron Sanchez ', ' 3138343889', ' marisol@gmail.com', ' marisol1271'),
(6, 'Sofia ', ' Gomez ', ' 32545126586', ' sofia@gmail.com', ' sofia3423'),
(7, 'Ana Lucia  ', ' Rodriguez Perez ', ' 3026445704', ' ana@gmail.com', ' ana123'),
(8, 'Lucia ', ' Restrepo Hernandez ', ' 3012543625', ' restrepo@gmail.com', ' luciah12'),
(9, 'Lucia ', ' Restrepo Hernandez ', ' 3012543625', ' restrepo@gmail.com', ' luciah12'),
(10, 'Lucia ', ' Restrepo Hernandez ', ' 3012543625', ' restrepo@gmail.com', ' luciah12'),
(11, 'Sharon Yesenia ', ' Barón Alvarez ', ' 313834338', ' alvarez@gmail.com', ' alvarez123'),
(12, 'Laura Sofia ', ' Andrade Gomez ', ' 32541526', ' lausa@gmail.com', ' laur123'),
(13, 'Laura Sofia ', ' Andrade Gomez ', ' 32541526', ' lausa@gmail.com', ' laur123'),
(14, 'Lucia Ana ', ' Gomez Lora ', ' 345210548', ' gomezlora@gmail.com', ' gomes543'),
(15, 'Lucia Ana ', ' Gomez Lora ', ' 345210548', ' gomezlora@gmail.com', ' gomes543'),
(16, 'Ana Maria ', ' Lopez Hurtado ', ' 32541525', ' lopezana@gamil.com', ' lopezana'),
(17, 'Daniel ', ' Daza ', ' 3241410014', ' daniel@gmail.com', ' 1234321'),
(18, ' ', ' Alvarez ', ' 245145', ' alvarezsharon@gmail.com', ' alvarez345'),
(19, ' ', ' 	  Barón Alvarez  ', ' 3138343889', ' wcardonaleon@gmail.com', ' sdadad'),
(20, ' ', '  Andrade Gomez ', ' 3012543625', ' restrepo@gmail.com', ' 2541541');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personarol`
--

CREATE TABLE `personarol` (
  `IdPersonaRol` bigint(20) NOT NULL,
  `IdRol` bigint(20) NOT NULL,
  `IdPersona` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `personarol`
--

INSERT INTO `personarol` (`IdPersonaRol`, `IdRol`, `IdPersona`) VALUES
(1, 1, 1),
(2, 2, 2),
(4, 2, 16),
(5, 2, 17),
(6, 2, 18),
(7, 2, 19),
(8, 2, 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promociones`
--

CREATE TABLE `promociones` (
  `IdPromociones` bigint(20) NOT NULL,
  `NombrePromocion` varchar(50) DEFAULT NULL,
  `ValorPromocion` bigint(20) DEFAULT NULL,
  `FechaInicio` date DEFAULT NULL,
  `FechaFin` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `promociones`
--

INSERT INTO `promociones` (`IdPromociones`, `NombrePromocion`, `ValorPromocion`, `FechaInicio`, `FechaFin`) VALUES
(1, 'Trenza + Planchado + Hilos ', 30000, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `IdRol` bigint(20) NOT NULL,
  `NombreRol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`IdRol`, `NombreRol`) VALUES
(1, 'Administrador'),
(2, 'Usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `IdServicio` bigint(20) NOT NULL,
  `NombreServicio` varchar(50) NOT NULL,
  `IdTipoServicio` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`IdServicio`, `NombreServicio`, `IdTipoServicio`) VALUES
(1, 'Trenzas y peinados', 1),
(2, 'Coletas en Kanekalon', 1),
(3, 'Planchados', 1),
(4, 'Crespos y Ondas', 1),
(5, 'Keratinas', 1),
(6, 'Repolarizaciones', 1),
(7, 'Corte de Puntas', 1),
(8, 'Aplicación de tite', 1),
(9, 'Diseño de Cejas', 2),
(10, 'Depilacion en cera', 2),
(11, 'Sombreado Semipermanente', 2),
(12, 'Pestañas punto a punto', 2),
(13, 'Lifting de Pestañas', 2),
(14, 'Maquillaje ', 1),
(15, 'Maquillaje ', 1),
(16, '', 1),
(17, 'Maquillaje 1', 1),
(18, 'Maquillaje 4', 1),
(19, '', 1),
(20, 'Peinado 45', 2),
(21, 'Peinado 45', 2),
(22, 'Trenzas 45', 1),
(23, 'Maquillaje', 2),
(24, 'Peinado 45', 2),
(25, 'hola', 1),
(26, 'hola', 1),
(27, 'Hola2', 1),
(28, 'Hola2', 1),
(29, 'Hola2', 2),
(30, 'yesenia', 2),
(31, 'yeseniam', 2),
(32, 'yeseniam', 2),
(33, 'Hola4', 2),
(34, 'Peinado 4', 1),
(35, 'Peinado 45', 1),
(36, 'Laura', 1),
(37, 'Laura3', 1),
(40, 'Facial', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiposervicio`
--

CREATE TABLE `tiposervicio` (
  `IdTipoServicio` bigint(20) NOT NULL,
  `NombreTipoServicio` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tiposervicio`
--

INSERT INTO `tiposervicio` (`IdTipoServicio`, `NombreTipoServicio`) VALUES
(1, 'Peluqueria'),
(2, 'Estetica Facial');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `eventoscalendar`
--
ALTER TABLE `eventoscalendar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IdPersonaRol` (`IdPersonaRol`) USING BTREE,
  ADD KEY `evento` (`evento`),
  ADD KEY `Id_Met_Pago` (`Id_Met_Pago`);

--
-- Indices de la tabla `metodopago`
--
ALTER TABLE `metodopago`
  ADD PRIMARY KEY (`IdMetodoPago`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`IdPersona`);

--
-- Indices de la tabla `personarol`
--
ALTER TABLE `personarol`
  ADD PRIMARY KEY (`IdPersonaRol`),
  ADD KEY `IdPersona` (`IdPersona`),
  ADD KEY `IdRol` (`IdRol`);

--
-- Indices de la tabla `promociones`
--
ALTER TABLE `promociones`
  ADD PRIMARY KEY (`IdPromociones`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`IdRol`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`IdServicio`),
  ADD KEY `IdTipoServicio` (`IdTipoServicio`);

--
-- Indices de la tabla `tiposervicio`
--
ALTER TABLE `tiposervicio`
  ADD PRIMARY KEY (`IdTipoServicio`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `eventoscalendar`
--
ALTER TABLE `eventoscalendar`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `metodopago`
--
ALTER TABLE `metodopago`
  MODIFY `IdMetodoPago` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `IdPersona` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `personarol`
--
ALTER TABLE `personarol`
  MODIFY `IdPersonaRol` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `promociones`
--
ALTER TABLE `promociones`
  MODIFY `IdPromociones` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `IdRol` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `IdServicio` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de la tabla `tiposervicio`
--
ALTER TABLE `tiposervicio`
  MODIFY `IdTipoServicio` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `personarol`
--
ALTER TABLE `personarol`
  ADD CONSTRAINT `personarol_ibfk_1` FOREIGN KEY (`IdPersona`) REFERENCES `persona` (`IdPersona`),
  ADD CONSTRAINT `personarol_ibfk_2` FOREIGN KEY (`IdRol`) REFERENCES `rol` (`IdRol`);

--
-- Filtros para la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD CONSTRAINT `servicio_ibfk_1` FOREIGN KEY (`IdTipoServicio`) REFERENCES `tiposervicio` (`IdTipoServicio`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
