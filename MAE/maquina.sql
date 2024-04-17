-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-04-2024 a las 02:50:16
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
-- Base de datos: `mae`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maquina`
--

CREATE TABLE `maquina` (
  `IDMaquina` int(5) NOT NULL,
  `NoCalentadores` int(2) DEFAULT NULL,
  `NoVentiladores` int(2) DEFAULT NULL,
  `ID` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `maquina`
--

INSERT INTO `maquina` (`IDMaquina`, `NoCalentadores`, `NoVentiladores`, `ID`) VALUES(10001, 4, 6, 1001);
INSERT INTO `maquina` (`IDMaquina`, `NoCalentadores`, `NoVentiladores`, `ID`) VALUES(10002, 4, 6, 1002);
INSERT INTO `maquina` (`IDMaquina`, `NoCalentadores`, `NoVentiladores`, `ID`) VALUES(10003, 4, 6, 1003);
INSERT INTO `maquina` (`IDMaquina`, `NoCalentadores`, `NoVentiladores`, `ID`) VALUES(10004, 4, 6, 1004);
INSERT INTO `maquina` (`IDMaquina`, `NoCalentadores`, `NoVentiladores`, `ID`) VALUES(10005, 4, 6, 1005);
INSERT INTO `maquina` (`IDMaquina`, `NoCalentadores`, `NoVentiladores`, `ID`) VALUES(10006, 4, 6, 1006);
INSERT INTO `maquina` (`IDMaquina`, `NoCalentadores`, `NoVentiladores`, `ID`) VALUES(10007, 4, 6, 1007);
INSERT INTO `maquina` (`IDMaquina`, `NoCalentadores`, `NoVentiladores`, `ID`) VALUES(10008, 4, 6, 1008);
INSERT INTO `maquina` (`IDMaquina`, `NoCalentadores`, `NoVentiladores`, `ID`) VALUES(10009, 4, 6, 1009);
INSERT INTO `maquina` (`IDMaquina`, `NoCalentadores`, `NoVentiladores`, `ID`) VALUES(10010, 4, 6, 1010);
INSERT INTO `maquina` (`IDMaquina`, `NoCalentadores`, `NoVentiladores`, `ID`) VALUES(10011, 4, 6, 1011);
INSERT INTO `maquina` (`IDMaquina`, `NoCalentadores`, `NoVentiladores`, `ID`) VALUES(10012, 4, 6, 1012);
INSERT INTO `maquina` (`IDMaquina`, `NoCalentadores`, `NoVentiladores`, `ID`) VALUES(10013, 4, 6, 1013);
INSERT INTO `maquina` (`IDMaquina`, `NoCalentadores`, `NoVentiladores`, `ID`) VALUES(10014, 4, 6, 1014);
INSERT INTO `maquina` (`IDMaquina`, `NoCalentadores`, `NoVentiladores`, `ID`) VALUES(10015, 4, 6, 1015);
INSERT INTO `maquina` (`IDMaquina`, `NoCalentadores`, `NoVentiladores`, `ID`) VALUES(10016, 4, 6, 1016);
INSERT INTO `maquina` (`IDMaquina`, `NoCalentadores`, `NoVentiladores`, `ID`) VALUES(10017, 4, 6, 1017);
INSERT INTO `maquina` (`IDMaquina`, `NoCalentadores`, `NoVentiladores`, `ID`) VALUES(10018, 4, 6, 1018);
INSERT INTO `maquina` (`IDMaquina`, `NoCalentadores`, `NoVentiladores`, `ID`) VALUES(10019, 4, 6, 1019);
INSERT INTO `maquina` (`IDMaquina`, `NoCalentadores`, `NoVentiladores`, `ID`) VALUES(10020, 4, 6, 1020);
INSERT INTO `maquina` (`IDMaquina`, `NoCalentadores`, `NoVentiladores`, `ID`) VALUES(10021, 4, 6, 1021);
INSERT INTO `maquina` (`IDMaquina`, `NoCalentadores`, `NoVentiladores`, `ID`) VALUES(10022, 4, 6, 1022);
INSERT INTO `maquina` (`IDMaquina`, `NoCalentadores`, `NoVentiladores`, `ID`) VALUES(10023, 4, 6, 1023);
INSERT INTO `maquina` (`IDMaquina`, `NoCalentadores`, `NoVentiladores`, `ID`) VALUES(10024, 4, 6, 1024);
INSERT INTO `maquina` (`IDMaquina`, `NoCalentadores`, `NoVentiladores`, `ID`) VALUES(10025, 4, 6, 1025);
INSERT INTO `maquina` (`IDMaquina`, `NoCalentadores`, `NoVentiladores`, `ID`) VALUES(10026, 4, 6, 1026);
INSERT INTO `maquina` (`IDMaquina`, `NoCalentadores`, `NoVentiladores`, `ID`) VALUES(10027, 4, 6, 1027);
INSERT INTO `maquina` (`IDMaquina`, `NoCalentadores`, `NoVentiladores`, `ID`) VALUES(10028, 4, 6, 1028);
INSERT INTO `maquina` (`IDMaquina`, `NoCalentadores`, `NoVentiladores`, `ID`) VALUES(10029, 4, 6, 1029);
INSERT INTO `maquina` (`IDMaquina`, `NoCalentadores`, `NoVentiladores`, `ID`) VALUES(10030, 4, 6, 1030);
INSERT INTO `maquina` (`IDMaquina`, `NoCalentadores`, `NoVentiladores`, `ID`) VALUES(10031, 4, 6, 1031);
INSERT INTO `maquina` (`IDMaquina`, `NoCalentadores`, `NoVentiladores`, `ID`) VALUES(10032, 4, 6, 1032);
INSERT INTO `maquina` (`IDMaquina`, `NoCalentadores`, `NoVentiladores`, `ID`) VALUES(10033, 4, 6, 1033);
INSERT INTO `maquina` (`IDMaquina`, `NoCalentadores`, `NoVentiladores`, `ID`) VALUES(10034, 4, 6, 1034);
INSERT INTO `maquina` (`IDMaquina`, `NoCalentadores`, `NoVentiladores`, `ID`) VALUES(10035, 4, 6, 1035);
INSERT INTO `maquina` (`IDMaquina`, `NoCalentadores`, `NoVentiladores`, `ID`) VALUES(10036, 4, 6, 1036);
INSERT INTO `maquina` (`IDMaquina`, `NoCalentadores`, `NoVentiladores`, `ID`) VALUES(10037, 4, 6, 1037);
INSERT INTO `maquina` (`IDMaquina`, `NoCalentadores`, `NoVentiladores`, `ID`) VALUES(10038, 4, 6, 1038);
INSERT INTO `maquina` (`IDMaquina`, `NoCalentadores`, `NoVentiladores`, `ID`) VALUES(10039, 4, 6, 1039);
INSERT INTO `maquina` (`IDMaquina`, `NoCalentadores`, `NoVentiladores`, `ID`) VALUES(10040, 4, 6, 1040);
INSERT INTO `maquina` (`IDMaquina`, `NoCalentadores`, `NoVentiladores`, `ID`) VALUES(10041, 4, 6, 1041);
INSERT INTO `maquina` (`IDMaquina`, `NoCalentadores`, `NoVentiladores`, `ID`) VALUES(10042, 4, 6, 1042);
INSERT INTO `maquina` (`IDMaquina`, `NoCalentadores`, `NoVentiladores`, `ID`) VALUES(10043, 4, 6, 1043);
INSERT INTO `maquina` (`IDMaquina`, `NoCalentadores`, `NoVentiladores`, `ID`) VALUES(10044, 4, 6, 1044);
INSERT INTO `maquina` (`IDMaquina`, `NoCalentadores`, `NoVentiladores`, `ID`) VALUES(10045, 4, 6, 1045);
INSERT INTO `maquina` (`IDMaquina`, `NoCalentadores`, `NoVentiladores`, `ID`) VALUES(10046, 4, 6, 1046);
INSERT INTO `maquina` (`IDMaquina`, `NoCalentadores`, `NoVentiladores`, `ID`) VALUES(10047, 4, 6, 1047);
INSERT INTO `maquina` (`IDMaquina`, `NoCalentadores`, `NoVentiladores`, `ID`) VALUES(10048, 4, 6, 1048);
INSERT INTO `maquina` (`IDMaquina`, `NoCalentadores`, `NoVentiladores`, `ID`) VALUES(10049, 4, 6, 1049);
INSERT INTO `maquina` (`IDMaquina`, `NoCalentadores`, `NoVentiladores`, `ID`) VALUES(10050, 4, 6, 1050);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `maquina`
--
ALTER TABLE `maquina`
  ADD PRIMARY KEY (`IDMaquina`),
  ADD KEY `fk_Maquina_Usuarios` (`ID`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `maquina`
--
ALTER TABLE `maquina`
  ADD CONSTRAINT `fk_Maquina_Usuarios` FOREIGN KEY (`ID`) REFERENCES `usuarios` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
