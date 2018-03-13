-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-03-2018 a las 20:25:27
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL COMMENT 'este campo almacena el identificador unico de la tabla admin',
  `nombres` varchar(45) NOT NULL COMMENT 'este campo almacena el nombre del usuario con el cual el administrador ingresa a la aplicacion',
  `clave` varchar(45) NOT NULL COMMENT 'este campo almacena la clave de usuario para permitir al administrador acceder al sistema'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudades`
--

CREATE TABLE `ciudades` (
  `idCiudades` int(11) NOT NULL COMMENT 'campo para almacenar el identificador unico de la tabla ciudades',
  `Paises_Codigo` varchar(2) NOT NULL COMMENT 'campo que hace referencia a los codigos de paises que se encuentran almacenados en la tabla pais\n',
  `Ciudad` varchar(100) NOT NULL COMMENT 'campo para almacenar el nombre de la ciudad'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nivelacademico`
--

CREATE TABLE `nivelacademico` (
  `idnivelacademico` int(11) NOT NULL COMMENT 'campo para almacenar el identificador unico de la tabla nivel academico',
  `descripcion` varchar(45) NOT NULL COMMENT 'campo que almacena la descripcion de los distintos niveles academicos que puedan almecenarse'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paises`
--

CREATE TABLE `paises` (
  `Codigo` varchar(2) NOT NULL COMMENT 'campo para el identificador unico de la tabla paises',
  `Pais` varchar(100) NOT NULL COMMENT 'campo para almacenar el nombre del pais '
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuarios` int(11) NOT NULL COMMENT 'campo que almacena identificador unico de los suscritores',
  `nombres` varchar(45) NOT NULL COMMENT 'este campo almacena el nombre de los suscritores',
  `correo` varchar(45) NOT NULL COMMENT 'campo que almacena el correo electronico del cliente',
  `paises_Codigo` varchar(2) NOT NULL COMMENT 'campo que hace referencia a la llave primaria de la tabla paises',
  `ciudades_idCiudades` int(11) NOT NULL COMMENT 'campo que hace referencia a la llave primaria de la tabla ciudades',
  `nivelacademico_idnivelacademico` int(11) NOT NULL COMMENT 'campo con foranea que hace referencia a la llave primaria de la tabla nivel academico',
  `telefono` varchar(45) NOT NULL COMMENT 'campo necesario para el registro de numero telefonico del suscritor'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indices de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  ADD PRIMARY KEY (`idCiudades`),
  ADD KEY `Paises_Codigo` (`Paises_Codigo`),
  ADD KEY `Ciudad` (`Ciudad`);

--
-- Indices de la tabla `nivelacademico`
--
ALTER TABLE `nivelacademico`
  ADD PRIMARY KEY (`idnivelacademico`);

--
-- Indices de la tabla `paises`
--
ALTER TABLE `paises`
  ADD PRIMARY KEY (`Codigo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuarios`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  MODIFY `idCiudades` int(11) NOT NULL AUTO_INCREMENT COMMENT 'campo para almacenar el identificador unico de la tabla ciudades', AUTO_INCREMENT=269413;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuarios` int(11) NOT NULL AUTO_INCREMENT COMMENT 'campo que almacena identificador unico de los suscritores', AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
