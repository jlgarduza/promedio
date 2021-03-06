-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.18-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para calculo
CREATE DATABASE IF NOT EXISTS `calculo` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `calculo`;

-- Volcando estructura para tabla calculo.base
CREATE TABLE IF NOT EXISTS `base` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `anio` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `categoria` text COLLATE utf8_spanish_ci NOT NULL,
  `mes` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `semanas` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `dias` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `numsemana` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `fechas` date NOT NULL,
  `establecimientos` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `producto` text COLLATE utf8_spanish_ci DEFAULT NULL,
  `ventas` double(10,2) DEFAULT NULL,
  `precio_venta` double(10,2) DEFAULT NULL,
  `total` double(10,2) DEFAULT NULL,
  `pan_arabe` int(11) DEFAULT NULL,
  `cebollas_a_las_Brasas` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `carne_pastor` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `carne_arabe` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tortilla_taquera` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `queso_gouda` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `arrachera_marinada` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `frijoles_charros` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `guacamole` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cebolla` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `pimiento_morron` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tocino` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tortilla_totopos` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tortilla_de_harina` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `pinia` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cilantro` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `aceite_de_olivo` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `limon` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `sal` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `aguacate` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `jocoque` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `champinion` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `catsup` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tzatziki` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `papa_delgado` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ajo_sazonador` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `papel_saudi` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `salsa_habanero` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `lechuga_italilana` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `aceituna` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `jitomate` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `queso_feta` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `pepino` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `vinagreta` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `mantequilla` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `pan_hamburguesa` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=65536 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci ROW_FORMAT=DYNAMIC;

-- La exportación de datos fue deseleccionada.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
