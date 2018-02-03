-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 24-01-2018 a las 04:03:53
-- Versión del servidor: 5.7.17-log
-- Versión de PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `reservas`
--

--
-- Volcado de datos para la tabla `t_hcp_especialidad`
--

INSERT INTO `T_HCP_ESPECIALIDAD` (`Codigo`, `Nombre`) VALUES
(1, 'MEDICINA GENERAL'),
(2, 'ODONTOLOGIA'),
(3, 'CIRUJANO'),
(4, 'PERIODONCISTA');

--
-- Volcado de datos para la tabla `t_hcp_medicamento`
--

INSERT INTO `T_HCP_MEDICAMENTO` (`Codigo`, `Nombre`) VALUES
('1', 'ACETAMINOFEN'),
('2', 'HIDROCORTISONA'),
('3', 'DOLEX GRIPA'),
('4', 'ALCOHOL JGB ');

--
-- Volcado de datos para la tabla `t_hcp_paciente`
--

INSERT INTO `T_HCP_PACIENTE` (`Id`, `Estudiante`, `Funcionario`, `Tipo`, `Clave_internet`) VALUES
(1, 121212, 0, 'E', '121212'),
(2, 222222, 0, 'E', '222222'),
(3, 131313, 0, 'E', '131313'),
(4, 0, 141414, 'F', '141414'),
(5, 0, 151515, 'F', '151515');

--
-- Volcado de datos para la tabla `t_hcp_profesional_salud`
--

INSERT INTO `T_HCP_PROFESIONAL_SALUD` (`Identificacion`, `Nombre`, `Tarjeta_profesional`, `Especialidad`, `TIPO_CONSULTA`) VALUES
(1, 'JUAN JOSE LUQUE PARRA', 'QWE12345', 1, 'S'),
(2, 'MARIA FERNANDA BOTERO GUATIRA', 'SSD54321', 2, 'S'),
(3, 'JUAN GUILLERMO LOPEZ SALDARRRIAGA', 'ASD54342', 3, 'S'),
(4, 'MARIA JOSE TENORIO PEREZ', 'QZX123321', 4, 'S');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


