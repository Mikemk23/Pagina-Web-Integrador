-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-04-2024 a las 02:50:38
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
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(4) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Apellido_P` varchar(20) DEFAULT NULL,
  `Apellido_M` varchar(20) DEFAULT NULL,
  `Edad` int(2) DEFAULT NULL,
  `NumeroTelefonico` varchar(10) DEFAULT NULL,
  `Localidad` varchar(100) DEFAULT NULL,
  `IDMaquina` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID`, `Nombre`, `Apellido_P`, `Apellido_M`, `Edad`, `NumeroTelefonico`, `Localidad`, `IDMaquina`) VALUES
(1001, 'Jorge Alberto', 'Sánchez', 'Cobos', 20, '7222332608', 'Infonavit San Francisco 8 C', 10001),
(1002, 'Juan', 'Perez', 'Gomez', 30, '1234567890', 'Ciudad de Mexico', 10002),
(1003, 'Maria', 'Gonzalez', 'Lopez', 25, '0987654321', 'Guadalajara', 10003),
(1004, 'Pedro', 'Rodriguez', 'Sanchez', 35, '1357908642', 'Monterrey', 10004),
(1005, 'Ana', 'Martinez', 'Hernandez', 28, '2468013579', 'Puebla', 10005),
(1006, 'Carlos', 'Lopez', 'Diaz', 40, '9876543210', 'Toluca', 10006),
(1007, 'Laura', 'Sanchez', 'Garcia', 22, '5678901234', 'Queretaro', 10007),
(1008, 'Fernando', 'Gomez', 'Ramirez', 32, '6789012345', 'Acapulco', 10008),
(1009, 'Diana', 'Hernandez', 'Fernandez', 29, '8901234567', 'Cancun', 10009),
(1010, 'Alejandro', 'Diaz', 'Torres', 37, '0123456789', 'Veracruz', 10010),
(1011, 'Sofia', 'Ramirez', 'Vazquez', 27, '4321098765', 'Merida', 10011),
(1012, 'Jorge', 'Garcia', 'Jimenez', 33, '9876543210', 'Tijuana', 10012),
(1013, 'Patricia', 'Torres', 'Lopez', 26, '8765432109', 'Hermosillo', 10013),
(1014, 'Roberto', 'Vazquez', 'Perez', 34, '7654321098', 'Chihuahua', 10014),
(1015, 'Gabriela', 'Jimenez', 'Sanchez', 31, '6543210987', 'Oaxaca', 10015),
(1016, 'Raul', 'Perez', 'Gutierrez', 29, '5432109876', 'Morelia', 10016),
(1017, 'Veronica', 'Mendoza', 'Gomez', 36, '4321098765', 'Zacatecas', 10017),
(1018, 'Mario', 'Gutierrez', 'Gonzalez', 24, '3210987654', 'Leon', 10018),
(1019, 'Natalia', 'Lopez', 'Fernandez', 39, '2109876543', 'Culiacan', 10019),
(1020, 'Guillermo', 'Gonzalez', 'Martinez', 28, '1098765432', 'Ciudad Juarez', 10020),
(1021, 'Elena', 'Martinez', 'Perez', 35, '0987654321', 'Celaya', 10021),
(1022, 'Francisco', 'Fernandez', 'Lopez', 23, '9876543210', 'Campeche', 10022),
(1023, 'Adriana', 'Hernandez', 'Garcia', 38, '8765432109', 'Tampico', 10023),
(1024, 'Luis', 'Perez', 'Gutierrez', 27, '7654321098', 'Cuernavaca', 10024),
(1025, 'Marisol', 'Gomez', 'Diaz', 33, '6543210987', 'Saltillo', 10025),
(1026, 'Ricardo', 'Diaz', 'Sanchez', 26, '5432109876', 'Tuxtla Gutierrez', 10026),
(1027, 'Paula', 'Sanchez', 'Hernandez', 40, '4321098765', 'Durango', 10027),
(1028, 'Oscar', 'Hernandez', 'Martinez', 25, '3210987654', 'Pachuca', 10028),
(1029, 'Monica', 'Martinez', 'Gomez', 31, '2109876543', 'Villahermosa', 10029),
(1030, 'Diego', 'Gomez', 'Fernandez', 29, '1098765432', 'Mexicali', 10030),
(1031, 'Carmen', 'Fernandez', 'Lopez', 36, '0987654321', 'Colima', 10031),
(1032, 'Martin', 'Lopez', 'Gonzalez', 22, '9876543210', 'Tlaxcala', 10032),
(1033, 'Teresa', 'Gonzalez', 'Sanchez', 38, '8765432109', 'Chetumal', 10033),
(1034, 'Arturo', 'Sanchez', 'Garcia', 27, '7654321098', 'La Paz', 10034),
(1035, 'Silvia', 'Garcia', 'Hernandez', 34, '6543210987', 'Navojoa', 10035),
(1036, 'Eduardo', 'Hernandez', 'Perez', 23, '5432109876', 'Ojinaga', 10036),
(1037, 'Lucia', 'Perez', 'Sanchez', 39, '4321098765', 'Tapachula', 10037),
(1038, 'Ramon', 'Sanchez', 'Gomez', 28, '3210987654', 'Playa del Carmen', 10038),
(1039, 'Alicia', 'Gomez', 'Fernandez', 32, '2109876543', 'Ciudad Victoria', 10039),
(1040, 'Emilio', 'Fernandez', 'Lopez', 25, '1098765432', 'Tepic', 10040),
(1041, 'Martha', 'Lopez', 'Martinez', 37, '0987654321', 'Tecomán', 10041),
(1042, 'Hector', 'Martinez', 'Gomez', 26, '9876543210', 'Poza Rica', 10042),
(1043, 'Norma', 'Gomez', 'Hernandez', 33, '8765432109', 'Reynosa', 10043),
(1044, 'Gerardo', 'Hernandez', 'Sanchez', 24, '7654321098', 'San Luis Potosi', 10044),
(1045, 'Alejandra', 'Sanchez', 'Lopez', 31, '6543210987', 'Guaymas', 10045),
(1046, 'Roberto', 'Lopez', 'Garcia', 29, '5432109876', 'Irapuato', 10046),
(1047, 'Ana', 'Garcia', 'Martinez', 38, '4321098765', 'Aguascalientes', 10047),
(1048, 'Erick', 'Martinez', 'Sanchez', 27, '3210987654', 'Cozumel', 10048),
(1049, 'Liliana', 'Sanchez', 'Lopez', 34, '2109876543', 'Tampico', 10049),
(1050, 'Javier', 'Lopez', 'Gomez', 25, '1098765432', 'Ciudad Madero', 10050);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_Usuarios_Maquina` (`IDMaquina`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_Usuarios_Maquina` FOREIGN KEY (`IDMaquina`) REFERENCES `maquina` (`IDMaquina`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
