-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-04-2024 a las 02:49:32
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
-- Estructura de tabla para la tabla `dht11`
--

CREATE TABLE `dht11` (
  `ID` bigint(20) NOT NULL,
  `humidity` float NOT NULL,
  `temperature` float NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `dht11`
--

INSERT INTO `dht11` (`ID`, `humidity`, `temperature`, `fecha`) VALUES(0, 68, 34, '2024-03-23 14:18:57');
INSERT INTO `dht11` (`ID`, `humidity`, `temperature`, `fecha`) VALUES(1, 45.6, 25.3, '2024-04-02 14:00:00');
INSERT INTO `dht11` (`ID`, `humidity`, `temperature`, `fecha`) VALUES(2, 46.2, 25.7, '2024-04-02 14:05:00');
INSERT INTO `dht11` (`ID`, `humidity`, `temperature`, `fecha`) VALUES(3, 44.8, 24.9, '2024-04-02 14:10:00');
INSERT INTO `dht11` (`ID`, `humidity`, `temperature`, `fecha`) VALUES(4, 45.1, 25.1, '2024-04-02 14:15:00');
INSERT INTO `dht11` (`ID`, `humidity`, `temperature`, `fecha`) VALUES(5, 45.3, 25.4, '2024-04-02 14:20:00');
INSERT INTO `dht11` (`ID`, `humidity`, `temperature`, `fecha`) VALUES(6, 45.7, 25.8, '2024-04-02 14:25:00');
INSERT INTO `dht11` (`ID`, `humidity`, `temperature`, `fecha`) VALUES(7, 46, 26, '2024-04-02 14:30:00');
INSERT INTO `dht11` (`ID`, `humidity`, `temperature`, `fecha`) VALUES(8, 46.2, 26.2, '2024-04-02 14:35:00');
INSERT INTO `dht11` (`ID`, `humidity`, `temperature`, `fecha`) VALUES(9, 46.5, 26.5, '2024-04-02 14:40:00');
INSERT INTO `dht11` (`ID`, `humidity`, `temperature`, `fecha`) VALUES(10, 46.8, 26.7, '2024-04-02 14:45:00');
INSERT INTO `dht11` (`ID`, `humidity`, `temperature`, `fecha`) VALUES(11, 47.1, 26.9, '2024-04-02 14:50:00');
INSERT INTO `dht11` (`ID`, `humidity`, `temperature`, `fecha`) VALUES(12, 47.4, 27.2, '2024-04-02 14:55:00');
INSERT INTO `dht11` (`ID`, `humidity`, `temperature`, `fecha`) VALUES(13, 47.6, 27.4, '2024-04-02 15:00:00');
INSERT INTO `dht11` (`ID`, `humidity`, `temperature`, `fecha`) VALUES(14, 47.9, 27.7, '2024-04-02 15:05:00');
INSERT INTO `dht11` (`ID`, `humidity`, `temperature`, `fecha`) VALUES(15, 48.1, 27.9, '2024-04-02 15:10:00');
INSERT INTO `dht11` (`ID`, `humidity`, `temperature`, `fecha`) VALUES(16, 48.3, 28.1, '2024-04-02 15:15:00');
INSERT INTO `dht11` (`ID`, `humidity`, `temperature`, `fecha`) VALUES(17, 48.6, 28.4, '2024-04-02 15:20:00');
INSERT INTO `dht11` (`ID`, `humidity`, `temperature`, `fecha`) VALUES(18, 48.8, 28.6, '2024-04-02 15:25:00');
INSERT INTO `dht11` (`ID`, `humidity`, `temperature`, `fecha`) VALUES(19, 49.1, 28.9, '2024-04-02 15:30:00');
INSERT INTO `dht11` (`ID`, `humidity`, `temperature`, `fecha`) VALUES(20, 49.4, 29.2, '2024-04-02 15:35:00');
INSERT INTO `dht11` (`ID`, `humidity`, `temperature`, `fecha`) VALUES(21, 49.6, 29.4, '2024-04-02 15:40:00');
INSERT INTO `dht11` (`ID`, `humidity`, `temperature`, `fecha`) VALUES(22, 49.8, 29.6, '2024-04-02 15:45:00');
INSERT INTO `dht11` (`ID`, `humidity`, `temperature`, `fecha`) VALUES(23, 50.1, 29.9, '2024-04-02 15:50:00');
INSERT INTO `dht11` (`ID`, `humidity`, `temperature`, `fecha`) VALUES(24, 50.3, 30.1, '2024-04-02 15:55:00');
INSERT INTO `dht11` (`ID`, `humidity`, `temperature`, `fecha`) VALUES(25, 50.5, 30.3, '2024-04-02 16:00:00');
INSERT INTO `dht11` (`ID`, `humidity`, `temperature`, `fecha`) VALUES(26, 50.8, 30.6, '2024-04-02 16:05:00');
INSERT INTO `dht11` (`ID`, `humidity`, `temperature`, `fecha`) VALUES(27, 51, 30.8, '2024-04-02 16:10:00');
INSERT INTO `dht11` (`ID`, `humidity`, `temperature`, `fecha`) VALUES(28, 51.2, 31, '2024-04-02 16:15:00');
INSERT INTO `dht11` (`ID`, `humidity`, `temperature`, `fecha`) VALUES(29, 51.4, 31.2, '2024-04-02 16:20:00');
INSERT INTO `dht11` (`ID`, `humidity`, `temperature`, `fecha`) VALUES(30, 51.7, 31.5, '2024-04-02 16:25:00');
INSERT INTO `dht11` (`ID`, `humidity`, `temperature`, `fecha`) VALUES(31, 51.9, 31.7, '2024-04-02 16:30:00');
INSERT INTO `dht11` (`ID`, `humidity`, `temperature`, `fecha`) VALUES(32, 52.1, 31.9, '2024-04-02 16:35:00');
INSERT INTO `dht11` (`ID`, `humidity`, `temperature`, `fecha`) VALUES(33, 52.3, 32.1, '2024-04-02 16:40:00');
INSERT INTO `dht11` (`ID`, `humidity`, `temperature`, `fecha`) VALUES(34, 52.5, 32.3, '2024-04-02 16:45:00');
INSERT INTO `dht11` (`ID`, `humidity`, `temperature`, `fecha`) VALUES(35, 52.7, 32.5, '2024-04-02 16:50:00');
INSERT INTO `dht11` (`ID`, `humidity`, `temperature`, `fecha`) VALUES(36, 52.9, 32.7, '2024-04-02 16:55:00');
INSERT INTO `dht11` (`ID`, `humidity`, `temperature`, `fecha`) VALUES(37, 53.1, 32.9, '2024-04-02 17:00:00');
INSERT INTO `dht11` (`ID`, `humidity`, `temperature`, `fecha`) VALUES(38, 53.3, 33.1, '2024-04-02 17:05:00');
INSERT INTO `dht11` (`ID`, `humidity`, `temperature`, `fecha`) VALUES(39, 53.5, 33.3, '2024-04-02 17:10:00');
INSERT INTO `dht11` (`ID`, `humidity`, `temperature`, `fecha`) VALUES(40, 53.7, 33.5, '2024-04-02 17:15:00');
INSERT INTO `dht11` (`ID`, `humidity`, `temperature`, `fecha`) VALUES(41, 53.9, 33.7, '2024-04-02 17:20:00');
INSERT INTO `dht11` (`ID`, `humidity`, `temperature`, `fecha`) VALUES(42, 54.1, 33.9, '2024-04-02 17:25:00');
INSERT INTO `dht11` (`ID`, `humidity`, `temperature`, `fecha`) VALUES(43, 54.3, 34.1, '2024-04-02 17:30:00');
INSERT INTO `dht11` (`ID`, `humidity`, `temperature`, `fecha`) VALUES(44, 54.5, 34.3, '2024-04-02 17:35:00');
INSERT INTO `dht11` (`ID`, `humidity`, `temperature`, `fecha`) VALUES(45, 54.7, 34.5, '2024-04-02 17:40:00');
INSERT INTO `dht11` (`ID`, `humidity`, `temperature`, `fecha`) VALUES(46, 54.9, 34.7, '2024-04-02 17:45:00');
INSERT INTO `dht11` (`ID`, `humidity`, `temperature`, `fecha`) VALUES(47, 55.1, 34.9, '2024-04-02 17:50:00');
INSERT INTO `dht11` (`ID`, `humidity`, `temperature`, `fecha`) VALUES(48, 55.3, 35.1, '2024-04-02 17:55:00');
INSERT INTO `dht11` (`ID`, `humidity`, `temperature`, `fecha`) VALUES(49, 55.5, 35.3, '2024-04-02 18:00:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
