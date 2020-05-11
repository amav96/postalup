-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.1.38-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win32
-- HeidiSQL Versión:             10.3.0.5771
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para formulario
CREATE DATABASE IF NOT EXISTS `formulario` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `formulario`;

-- Volcando estructura para tabla formulario.autorizar
CREATE TABLE IF NOT EXISTS `autorizar` (
  `id` varchar(50) DEFAULT NULL,
  `id_orden` varchar(50) DEFAULT NULL,
  `serie` varchar(50) DEFAULT NULL,
  `identificacion` varchar(50) DEFAULT NULL,
  `tarjeta` varchar(50) DEFAULT NULL,
  `nombre_cliente` varchar(50) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `localidad` varchar(50) DEFAULT NULL,
  `horario_rec` varchar(50) DEFAULT NULL,
  `estado_rec` varchar(50) DEFAULT NULL,
  `empresa` varchar(50) DEFAULT NULL,
  `cable_hdmi` varchar(50) DEFAULT NULL,
  `cable_av` varchar(50) DEFAULT NULL,
  `fuente` varchar(50) DEFAULT NULL,
  `control_1` varchar(50) DEFAULT NULL,
  `adicional` varchar(50) DEFAULT NULL,
  `id_recolector_2` varchar(50) DEFAULT NULL,
  `equipo` varchar(50) DEFAULT NULL,
  `password_rec` varchar(50) DEFAULT NULL,
  `otrosaccesorios` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla formulario.express
CREATE TABLE IF NOT EXISTS `express` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cod_empresa` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tipo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `empresa` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `equipo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tarjeta` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `serie` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idd` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_orden` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_actividad` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `identificacion` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nombre_cliente` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `direccion` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `localidad` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `codigo_postal` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `provincia` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fecha_creacion` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefono1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefono2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fecha_de_envio` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cartera` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `baja` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_recolector` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_fecha_recolector` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remito_rend` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remito_cv` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fecha_rend_cv` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_operador_ren` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_motivo_ren` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `master_box` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_operador` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fecha` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_motivo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tabla_oper` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `multiples` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cable_hdmi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cable_av` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fuente` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `control_1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `otros` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remito_sub` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fecha_remito_sub` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fecha_asignado` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sub_asignado` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ciclo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zona` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fecha_premio` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mes_base` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `R1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `R2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `R3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `operador` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tipo_de_recupero` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `semanas` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ano_semana` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fecha_de_liquidacion` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hist_pactado` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `estado_rec` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `horario_rec` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `estado_pac` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `horario_pac` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_recolector_2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_rec` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emailcliente` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `otrosaccesorios` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `IDENTIFICACION` (`identificacion`),
  KEY `SERIE` (`serie`)
) ENGINE=InnoDB AUTO_INCREMENT=1213 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla formulario.ordenes
CREATE TABLE IF NOT EXISTS `ordenes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_recolector` varchar(50) DEFAULT NULL,
  `fecha_orden` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=170 DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla formulario.recolectores
CREATE TABLE IF NOT EXISTS `recolectores` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `codigo_postal` varchar(255) DEFAULT NULL,
  `localidad` varchar(255) DEFAULT NULL,
  `id_recolector` varchar(255) DEFAULT NULL,
  `nombre_recolector` varchar(255) DEFAULT NULL,
  `dias` varchar(255) DEFAULT NULL,
  `horarios` varchar(255) DEFAULT NULL,
  `dia_extra` varchar(255) DEFAULT NULL,
  `horario_dia_extra` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=350 DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla formulario.solocliente
CREATE TABLE IF NOT EXISTS `solocliente` (
  `id` int(11) NOT NULL,
  `empresa` varchar(25) NOT NULL,
  `codigo_postal` int(11) NOT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `identificacion` varchar(255) DEFAULT NULL,
  `nombre_cliente` varchar(45) DEFAULT NULL,
  `baja` int(11) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `email2` varchar(255) DEFAULT NULL,
  `fecha_creacion` varchar(255) DEFAULT NULL,
  `obs_ems` varchar(255) DEFAULT NULL,
  `entre_calles` varchar(25) DEFAULT NULL,
  `horarios` varchar(255) DEFAULT NULL,
  `nvo_domicilio` varchar(255) DEFAULT NULL,
  `carta` varchar(255) DEFAULT NULL,
  `sms` varchar(255) DEFAULT NULL,
  `carta_rec` tinyint(1) DEFAULT NULL,
  `dia_pactado` datetime DEFAULT NULL,
  `despacho_a_sub` varchar(255) DEFAULT NULL,
  `sub_asig` int(11) NOT NULL,
  `peso` varchar(255) DEFAULT NULL,
  `sms_rec` tinyint(1) DEFAULT NULL,
  `mail_rec` tinyint(1) DEFAULT NULL,
  `ws_rec` tinyint(1) DEFAULT NULL,
  `reco_asig` int(11) NOT NULL,
  `fecha_asig` varchar(255) DEFAULT NULL,
  `fecha_de_envio_base` varchar(255) DEFAULT NULL,
  KEY `IDENTIFICACION` (`identificacion`),
  KEY `EMAIL` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
