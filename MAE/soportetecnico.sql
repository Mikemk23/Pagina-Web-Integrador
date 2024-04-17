-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-04-2024 a las 02:50:28
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
-- Estructura de tabla para la tabla `soportetecnico`
--

CREATE TABLE `soportetecnico` (
  `IDSoporte` int(3) NOT NULL,
  `ID` int(4) NOT NULL,
  `IDMaquina` int(5) NOT NULL,
  `Fecha` datetime NOT NULL,
  `Problema` varchar(500) NOT NULL,
  `CorreoElectronico` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `soportetecnico`
--

INSERT INTO `soportetecnico` (`IDSoporte`, `ID`, `IDMaquina`, `Fecha`, `Problema`, `CorreoElectronico`) VALUES(1, 1001, 10001, '2024-03-30 16:09:03', 'No funciona', 'al222211412@gmail.com');
INSERT INTO `soportetecnico` (`IDSoporte`, `ID`, `IDMaquina`, `Fecha`, `Problema`, `CorreoElectronico`) VALUES(2, 1002, 10002, '2024-04-02 08:00:00', 'Problema de conexión', 'usuario1@example.com');
INSERT INTO `soportetecnico` (`IDSoporte`, `ID`, `IDMaquina`, `Fecha`, `Problema`, `CorreoElectronico`) VALUES(3, 1003, 10003, '2024-04-02 08:05:00', 'Error en el sistema operativo', 'usuario2@example.com');
INSERT INTO `soportetecnico` (`IDSoporte`, `ID`, `IDMaquina`, `Fecha`, `Problema`, `CorreoElectronico`) VALUES(4, 1004, 10004, '2024-04-02 08:10:00', 'Problema de hardware', 'usuario3@example.com');
INSERT INTO `soportetecnico` (`IDSoporte`, `ID`, `IDMaquina`, `Fecha`, `Problema`, `CorreoElectronico`) VALUES(5, 1005, 10005, '2024-04-02 08:15:00', 'Problema de software', 'usuario4@example.com');
INSERT INTO `soportetecnico` (`IDSoporte`, `ID`, `IDMaquina`, `Fecha`, `Problema`, `CorreoElectronico`) VALUES(6, 1006, 10006, '2024-04-02 08:20:00', 'Pérdida de datos', 'usuario5@example.com');
INSERT INTO `soportetecnico` (`IDSoporte`, `ID`, `IDMaquina`, `Fecha`, `Problema`, `CorreoElectronico`) VALUES(7, 1007, 10007, '2024-04-02 08:25:00', 'Problema de seguridad', 'usuario6@example.com');
INSERT INTO `soportetecnico` (`IDSoporte`, `ID`, `IDMaquina`, `Fecha`, `Problema`, `CorreoElectronico`) VALUES(8, 1008, 10008, '2024-04-02 08:30:00', 'Configuración incorrecta', 'usuario7@example.com');
INSERT INTO `soportetecnico` (`IDSoporte`, `ID`, `IDMaquina`, `Fecha`, `Problema`, `CorreoElectronico`) VALUES(9, 1009, 10009, '2024-04-02 08:35:00', 'Problema de red', 'usuario8@example.com');
INSERT INTO `soportetecnico` (`IDSoporte`, `ID`, `IDMaquina`, `Fecha`, `Problema`, `CorreoElectronico`) VALUES(10, 1010, 10010, '2024-04-02 08:40:00', 'Problema de impresión', 'usuario9@example.com');
INSERT INTO `soportetecnico` (`IDSoporte`, `ID`, `IDMaquina`, `Fecha`, `Problema`, `CorreoElectronico`) VALUES(11, 1011, 10011, '2024-04-02 08:45:00', 'Error en aplicaciones', 'usuario10@example.com');
INSERT INTO `soportetecnico` (`IDSoporte`, `ID`, `IDMaquina`, `Fecha`, `Problema`, `CorreoElectronico`) VALUES(12, 1012, 10012, '2024-04-02 08:50:00', 'Fallo en el servidor', 'usuario11@example.com');
INSERT INTO `soportetecnico` (`IDSoporte`, `ID`, `IDMaquina`, `Fecha`, `Problema`, `CorreoElectronico`) VALUES(13, 1013, 10013, '2024-04-02 08:55:00', 'Problema de almacenamiento', 'usuario12@example.com');
INSERT INTO `soportetecnico` (`IDSoporte`, `ID`, `IDMaquina`, `Fecha`, `Problema`, `CorreoElectronico`) VALUES(14, 1014, 10014, '2024-04-02 09:00:00', 'Problema de copias de seguridad', 'usuario13@example.com');
INSERT INTO `soportetecnico` (`IDSoporte`, `ID`, `IDMaquina`, `Fecha`, `Problema`, `CorreoElectronico`) VALUES(15, 1015, 10015, '2024-04-02 09:05:00', 'Problema de rendimiento', 'usuario14@example.com');
INSERT INTO `soportetecnico` (`IDSoporte`, `ID`, `IDMaquina`, `Fecha`, `Problema`, `CorreoElectronico`) VALUES(16, 1016, 10016, '2024-04-02 09:10:00', 'Problema de virus', 'usuario15@example.com');
INSERT INTO `soportetecnico` (`IDSoporte`, `ID`, `IDMaquina`, `Fecha`, `Problema`, `CorreoElectronico`) VALUES(17, 1017, 10017, '2024-04-02 09:15:00', 'Acceso no autorizado', 'usuario16@example.com');
INSERT INTO `soportetecnico` (`IDSoporte`, `ID`, `IDMaquina`, `Fecha`, `Problema`, `CorreoElectronico`) VALUES(18, 1018, 10018, '2024-04-02 09:20:00', 'Fallo en la configuración de correo', 'usuario17@example.com');
INSERT INTO `soportetecnico` (`IDSoporte`, `ID`, `IDMaquina`, `Fecha`, `Problema`, `CorreoElectronico`) VALUES(19, 1019, 10019, '2024-04-02 09:25:00', 'Problema de conexión VPN', 'usuario18@example.com');
INSERT INTO `soportetecnico` (`IDSoporte`, `ID`, `IDMaquina`, `Fecha`, `Problema`, `CorreoElectronico`) VALUES(20, 1020, 10020, '2024-04-02 09:30:00', 'Problema de configuración de DNS', 'usuario19@example.com');
INSERT INTO `soportetecnico` (`IDSoporte`, `ID`, `IDMaquina`, `Fecha`, `Problema`, `CorreoElectronico`) VALUES(21, 1021, 10021, '2024-04-02 09:35:00', 'Problema de hardware', 'usuario20@example.com');
INSERT INTO `soportetecnico` (`IDSoporte`, `ID`, `IDMaquina`, `Fecha`, `Problema`, `CorreoElectronico`) VALUES(22, 1022, 10022, '2024-04-02 09:40:00', 'Problema de red', 'usuario21@example.com');
INSERT INTO `soportetecnico` (`IDSoporte`, `ID`, `IDMaquina`, `Fecha`, `Problema`, `CorreoElectronico`) VALUES(23, 1023, 10023, '2024-04-02 09:45:00', 'Error en aplicaciones', 'usuario22@example.com');
INSERT INTO `soportetecnico` (`IDSoporte`, `ID`, `IDMaquina`, `Fecha`, `Problema`, `CorreoElectronico`) VALUES(24, 1024, 10024, '2024-04-02 09:50:00', 'Fallo en el servidor', 'usuario23@example.com');
INSERT INTO `soportetecnico` (`IDSoporte`, `ID`, `IDMaquina`, `Fecha`, `Problema`, `CorreoElectronico`) VALUES(25, 1025, 10025, '2024-04-02 09:55:00', 'Problema de almacenamiento', 'usuario24@example.com');
INSERT INTO `soportetecnico` (`IDSoporte`, `ID`, `IDMaquina`, `Fecha`, `Problema`, `CorreoElectronico`) VALUES(26, 1026, 10026, '2024-04-02 10:00:00', 'Problema de copias de seguridad', 'usuario25@example.com');
INSERT INTO `soportetecnico` (`IDSoporte`, `ID`, `IDMaquina`, `Fecha`, `Problema`, `CorreoElectronico`) VALUES(27, 1027, 10027, '2024-04-02 10:05:00', 'Problema de rendimiento', 'usuario26@example.com');
INSERT INTO `soportetecnico` (`IDSoporte`, `ID`, `IDMaquina`, `Fecha`, `Problema`, `CorreoElectronico`) VALUES(28, 1028, 10028, '2024-04-02 10:10:00', 'Problema de virus', 'usuario27@example.com');
INSERT INTO `soportetecnico` (`IDSoporte`, `ID`, `IDMaquina`, `Fecha`, `Problema`, `CorreoElectronico`) VALUES(29, 1029, 10029, '2024-04-02 10:15:00', 'Acceso no autorizado', 'usuario28@example.com');
INSERT INTO `soportetecnico` (`IDSoporte`, `ID`, `IDMaquina`, `Fecha`, `Problema`, `CorreoElectronico`) VALUES(30, 1030, 10030, '2024-04-02 10:20:00', 'Fallo en la configuración de correo', 'usuario29@example.com');
INSERT INTO `soportetecnico` (`IDSoporte`, `ID`, `IDMaquina`, `Fecha`, `Problema`, `CorreoElectronico`) VALUES(31, 1031, 10031, '2024-04-02 10:25:00', 'Problema de conexión VPN', 'usuario30@example.com');
INSERT INTO `soportetecnico` (`IDSoporte`, `ID`, `IDMaquina`, `Fecha`, `Problema`, `CorreoElectronico`) VALUES(32, 1032, 10032, '2024-04-02 10:30:00', 'Problema de configuración de DNS', 'usuario31@example.com');
INSERT INTO `soportetecnico` (`IDSoporte`, `ID`, `IDMaquina`, `Fecha`, `Problema`, `CorreoElectronico`) VALUES(33, 1033, 10033, '2024-04-02 10:35:00', 'Problema de hardware', 'usuario32@example.com');
INSERT INTO `soportetecnico` (`IDSoporte`, `ID`, `IDMaquina`, `Fecha`, `Problema`, `CorreoElectronico`) VALUES(34, 1034, 10034, '2024-04-02 10:40:00', 'Problema de red', 'usuario33@example.com');
INSERT INTO `soportetecnico` (`IDSoporte`, `ID`, `IDMaquina`, `Fecha`, `Problema`, `CorreoElectronico`) VALUES(35, 1035, 10035, '2024-04-02 10:45:00', 'Error en aplicaciones', 'usuario34@example.com');
INSERT INTO `soportetecnico` (`IDSoporte`, `ID`, `IDMaquina`, `Fecha`, `Problema`, `CorreoElectronico`) VALUES(36, 1036, 10036, '2024-04-02 10:50:00', 'Fallo en el servidor', 'usuario35@example.com');
INSERT INTO `soportetecnico` (`IDSoporte`, `ID`, `IDMaquina`, `Fecha`, `Problema`, `CorreoElectronico`) VALUES(37, 1037, 10037, '2024-04-02 10:55:00', 'Problema de almacenamiento', 'usuario36@example.com');
INSERT INTO `soportetecnico` (`IDSoporte`, `ID`, `IDMaquina`, `Fecha`, `Problema`, `CorreoElectronico`) VALUES(38, 1038, 10038, '2024-04-02 11:00:00', 'Problema de copias de seguridad', 'usuario37@example.com');
INSERT INTO `soportetecnico` (`IDSoporte`, `ID`, `IDMaquina`, `Fecha`, `Problema`, `CorreoElectronico`) VALUES(39, 1039, 10039, '2024-04-02 11:05:00', 'Problema de rendimiento', 'usuario38@example.com');
INSERT INTO `soportetecnico` (`IDSoporte`, `ID`, `IDMaquina`, `Fecha`, `Problema`, `CorreoElectronico`) VALUES(40, 1040, 10040, '2024-04-02 11:10:00', 'Problema de virus', 'usuario39@example.com');
INSERT INTO `soportetecnico` (`IDSoporte`, `ID`, `IDMaquina`, `Fecha`, `Problema`, `CorreoElectronico`) VALUES(41, 1041, 10041, '2024-04-02 11:15:00', 'Acceso no autorizado', 'usuario40@example.com');
INSERT INTO `soportetecnico` (`IDSoporte`, `ID`, `IDMaquina`, `Fecha`, `Problema`, `CorreoElectronico`) VALUES(42, 1042, 10042, '2024-04-02 11:20:00', 'Fallo en la configuración de correo', 'usuario41@example.com');
INSERT INTO `soportetecnico` (`IDSoporte`, `ID`, `IDMaquina`, `Fecha`, `Problema`, `CorreoElectronico`) VALUES(43, 1043, 10043, '2024-04-02 11:25:00', 'Problema de conexión VPN', 'usuario42@example.com');
INSERT INTO `soportetecnico` (`IDSoporte`, `ID`, `IDMaquina`, `Fecha`, `Problema`, `CorreoElectronico`) VALUES(44, 1044, 10044, '2024-04-02 11:30:00', 'Problema de configuración de DNS', 'usuario43@example.com');
INSERT INTO `soportetecnico` (`IDSoporte`, `ID`, `IDMaquina`, `Fecha`, `Problema`, `CorreoElectronico`) VALUES(45, 1045, 10045, '2024-04-02 11:35:00', 'Problema de hardware', 'usuario44@example.com');
INSERT INTO `soportetecnico` (`IDSoporte`, `ID`, `IDMaquina`, `Fecha`, `Problema`, `CorreoElectronico`) VALUES(46, 1046, 10046, '2024-04-02 11:40:00', 'Problema de red', 'usuario45@example.com');
INSERT INTO `soportetecnico` (`IDSoporte`, `ID`, `IDMaquina`, `Fecha`, `Problema`, `CorreoElectronico`) VALUES(47, 1047, 10047, '2024-04-02 11:45:00', 'Error en aplicaciones', 'usuario46@example.com');
INSERT INTO `soportetecnico` (`IDSoporte`, `ID`, `IDMaquina`, `Fecha`, `Problema`, `CorreoElectronico`) VALUES(48, 1048, 10048, '2024-04-02 11:50:00', 'Fallo en el servidor', 'usuario47@example.com');
INSERT INTO `soportetecnico` (`IDSoporte`, `ID`, `IDMaquina`, `Fecha`, `Problema`, `CorreoElectronico`) VALUES(49, 1049, 10049, '2024-04-02 11:55:00', 'Problema de almacenamiento', 'usuario48@example.com');
INSERT INTO `soportetecnico` (`IDSoporte`, `ID`, `IDMaquina`, `Fecha`, `Problema`, `CorreoElectronico`) VALUES(50, 1050, 10050, '2024-04-03 02:38:39', 'No funciona la parte de los sensores', 'javieralatorre01@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `soportetecnico`
--
ALTER TABLE `soportetecnico`
  ADD PRIMARY KEY (`IDSoporte`),
  ADD KEY `fk_SoporteTecnico_Usuarios` (`ID`),
  ADD KEY `fk_SoporteTecnico_Maquina` (`IDMaquina`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `soportetecnico`
--
ALTER TABLE `soportetecnico`
  ADD CONSTRAINT `fk_SoporteTecnico_Maquina` FOREIGN KEY (`IDMaquina`) REFERENCES `maquina` (`IDMaquina`),
  ADD CONSTRAINT `fk_SoporteTecnico_Usuarios` FOREIGN KEY (`ID`) REFERENCES `usuarios` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
