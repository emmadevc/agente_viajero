-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.1.40-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para viajero
CREATE DATABASE IF NOT EXISTS `viajero` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `viajero`;

-- Volcando estructura para tabla viajero.estados
CREATE TABLE IF NOT EXISTS `estados` (
  `nombre` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bc` int(11) DEFAULT NULL,
  `nl` int(11) DEFAULT NULL,
  `slp` int(11) DEFAULT NULL,
  `nay` int(11) DEFAULT NULL,
  `gdl` int(11) DEFAULT NULL,
  `qrt` int(11) DEFAULT NULL,
  `hid` int(11) DEFAULT NULL,
  `cdmx` int(11) DEFAULT NULL,
  `oax` int(11) DEFAULT NULL,
  `qroo` int(11) DEFAULT NULL,
  `flag` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla viajero.estados: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `estados` DISABLE KEYS */;
INSERT INTO `estados` (`nombre`, `bc`, `nl`, `slp`, `nay`, `gdl`, `qrt`, `hid`, `cdmx`, `oax`, `qroo`, `flag`) VALUES
	('bc', 0, 1995, 2389, 1896, 2099, 2600, 2457, 2809, 3259, 4120, 0),
	('nl', 2178, 0, 516, 1048, 796, 707, 922, 909, 1362, 2221, 0),
	('slp', 2389, 516, 0, 534, 333, 213, 428, 415, 868, 1727, 0),
	('nay', 1846, 993, 536, 0, 206, 586, 763, 740, 1203, 2061, 0),
	('gdl', 2051, 793, 340, 206, 0, 386, 564, 541, 1003, 1862, 0),
	('qrt', 2603, 704, 213, 585, 386, 0, 227, 214, 666, 1525, 0),
	('hid', 2409, 922, 429, 765, 564, 229, 0, 96, 480, 1339, 0),
	('cdmx', 2623, 910, 417, 740, 541, 218, 94, 0, 465, 1325, 0),
	('oax', 3043, 1358, 864, 1200, 1002, 665, 480, 463, 0, 1376, 0),
	('qroo', 3914, 2226, 1733, 2069, 1870, 1533, 1348, 1331, 1386, 0, 0);
/*!40000 ALTER TABLE `estados` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
