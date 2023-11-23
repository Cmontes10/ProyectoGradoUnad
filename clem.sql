-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.28-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Volcando estructura para tabla clem.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL DEFAULT '',
  `Apellido` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `Usuario` varchar(50) NOT NULL DEFAULT '',
  `Clave` varchar(50) NOT NULL DEFAULT '',
  `Rep_contrasena` varchar(50) NOT NULL,
  `Sexo` varchar(50) NOT NULL,
  `Fecha` date DEFAULT NULL,
  `random` int(11) NOT NULL,
  `validacion` varchar(10) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Volcando datos para la tabla clem.usuario: ~4 rows (aproximadamente)
INSERT INTO `usuario` (`id`, `Nombre`, `Apellido`, `email`, `Usuario`, `Clave`, `Rep_contrasena`, `Sexo`, `Fecha`, `random`, `validacion`) VALUES
	(1, 'sebastian', 'Correa Marin', '', 'sebastian.correa@elogim.com', 'd3c0ntr0l', 'd3c0ntr0l', 'Hombre', '2023-10-21', 2147483647, '1'),
	(2, 'lorena', 'londoño aguirre', '', 'london.19@hotmail.com', 'd3c0ntr0l', 'd3c0ntr0l', 'Mujer', '2023-10-21', 2147483647, '0'),
	(3, 'silvna', 'silvana', '', 'silvana@elogim.com', 'd3c0ntr0l', 'd3c0ntr0l', 'Mujer', '0000-00-00', 2147483647, '0'),
	(8, 'Cesar Augusto', 'Montes', '', 'cesara@elogim.com', 'd3c0ntr0l', 'd3c0ntr0l', 'Hombre', '2023-11-22', 1649927838, '0'),
	(9, 'sergio', 'marin', '', 'sergio@elogim.com', 'd3c0ntr0l', 'd3c0ntr0l', 'Hombre', '2023-11-22', 2147483647, '0');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
