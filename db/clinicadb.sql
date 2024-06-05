-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.0.30 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Volcando estructura para tabla clinicadb.departamentos
CREATE TABLE IF NOT EXISTS `departamentos` (
  `DepartamentoID` int DEFAULT NULL,
  `Descripcion` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla clinicadb.departamentos: ~4 rows (aproximadamente)
INSERT INTO `departamentos` (`DepartamentoID`, `Descripcion`) VALUES
	(5, 'Antioquia'),
	(8, 'Atlántico'),
	(13, 'Bolívar'),
	(15, 'Boyacá');

-- Volcando estructura para tabla clinicadb.municipios
CREATE TABLE IF NOT EXISTS `municipios` (
  `MunicipioID` int DEFAULT NULL,
  `Descripcion` varchar(50) DEFAULT NULL,
  `DepartamentoID` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla clinicadb.municipios: ~20 rows (aproximadamente)
INSERT INTO `municipios` (`MunicipioID`, `Descripcion`, `DepartamentoID`) VALUES
	(501, 'Medellín', 5),
	(502, 'Bello', 5),
	(503, 'Itagüí', 5),
	(504, 'Envigado', 5),
	(505, 'Rionegro', 5),
	(801, 'Barranquilla', 8),
	(802, 'Soledad', 8),
	(803, 'Malambo', 8),
	(804, 'Sabanalarga', 8),
	(805, 'Puerto Colombia', 8),
	(1301, 'Cartagena', 13),
	(1302, 'Magangué', 13),
	(1303, 'Turbaco', 13),
	(1304, 'Arjona', 13),
	(1305, 'El Carmen de Bolívar', 13),
	(1501, 'Tunja', 15),
	(1502, 'Duitama', 15),
	(1503, 'Sogamoso', 15),
	(1504, 'Chiquinquirá', 15),
	(1505, 'Puerto Boyacá', 15);

-- Volcando estructura para tabla clinicadb.pacientes
CREATE TABLE IF NOT EXISTS `pacientes` (
  `PacienteID` int NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) DEFAULT NULL,
  `Edad` varchar(50) DEFAULT NULL,
  `Genero` varchar(50) DEFAULT NULL,
  `DepartamentoID` int DEFAULT NULL,
  `MunicipioID` int DEFAULT NULL,
  PRIMARY KEY (`PacienteID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla clinicadb.pacientes: ~3 rows (aproximadamente)
INSERT INTO `pacientes` (`PacienteID`, `Nombre`, `Edad`, `Genero`, `DepartamentoID`, `MunicipioID`) VALUES
	(1, 'ruben', '12', 'M', 5, 503),
	(2, 'enrique ', '121', 'M', 5, 504),
	(3, 'jose', '23', 'M', 13, 1304);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
