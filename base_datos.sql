-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-01-2018 a las 03:27:31
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `test_updateprod`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblprod`
--

CREATE TABLE `tblprod` (
  `id` int(10) UNSIGNED NOT NULL,
  `prod_code` varchar(20) NOT NULL,
  `prod_name` varchar(50) NOT NULL,
  `prod_ctry` varchar(50) NOT NULL,
  `prod_qty` int(20) NOT NULL,
  `price` decimal(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tblprod`
--

INSERT INTO `tblprod` (`id`, `prod_code`, `prod_name`, `prod_ctry`, `prod_qty`, `price`) VALUES
(8, '002', 'Gardenia', 'PanaderÃ­a', 25, '2.50'),
(9, '003', 'Coco Crunch', 'Cereales', 15, '5.25'),
(10, '0001', 'Red Bull', 'Bebidas', 50, '1.25'),
(11, '004', 'Queso Eden', 'LÃ¡cteos', 30, '3.25'),
(12, '005', 'Kiwi', 'Frutas', 20, '2.00'),
(13, '006', 'Porkchop', 'Carnes', 60, '4.25'),
(14, '007', 'Pimienta negra', 'Especies', 5, '1.25'),
(15, '008', 'Miel de aveja', 'Edulcorantes', 40, '3.00'),
(16, '009', 'Coliflor', 'Vegetales', 15, '1.50'),
(18, '0011', 'Uva  ', 'Bebidas', 22, '0.50'),
(19, '001', 'Quaker Oats', 'Cereales', 98, '3.25'),
(21, '0015', 'Avena quaker', 'Cereales', 49, '4.25');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tblprod`
--
ALTER TABLE `tblprod`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `book_id` (`prod_code`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tblprod`
--
ALTER TABLE `tblprod`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



-------------------------EJEMPLO_FACTURA-------------------------
  CREATE TABLE cliente(
    id_cli INT PRIMARY KEY AUTO_INCREMENT,
    nombre_cli VARCHAR(480) NOT NULL
  );
  CREATE TABLE recolector(
    id_rec INT PRIMARY KEY AUTO_INCREMENT,
    nombre_rec VARCHAR(480) NOT NULL
  );
  CREATE TABLE producto(
    id_pro INT PRIMARY KEY AUTO_INCREMENT,
    nombre_pro VARCHAR(480) NOT NULL
  );
  CREATE TABLE orden(
    id_ord INT PRIMARY KEY AUTO_INCREMENT,
    id_cli INT NOT NULL,
    id_rec INT NOT NULL,
    serie_ord VARCHAR(20) NOT NULL
  );
  CREATE TABLE products_orden(
    id_po INT PRIMARY KEY AUTO_INCREMENT,
    id_ord INT NOT NULL,
    id_pro INT NOT NULL
  );
/*-------------------------INSERTS-------------------------*/
  INSERT INTO cliente (nombre_cli) VALUES
    ('cliente 1'),
    ('cliente 2'),
    ('cliente 3'),
    ('cliente 4')
  ;
  INSERT INTO recolector (nombre_rec) VALUES
    ('empleado 1'),
    ('empleado 2'),
    ('empleado 3'),
    ('empleado 4')
  ;
  INSERT INTO producto (nombre_pro) VALUES
    ('producto 1'),
    ('producto 2'),
    ('producto 3'),
    ('producto 4')
  ;