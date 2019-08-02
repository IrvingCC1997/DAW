-- MySQL dump 10.16  Distrib 10.1.37-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: agrotracsem
-- ------------------------------------------------------
-- Server version	10.1.37-MariaDB-0+deb9u1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `categoria`
--

DROP TABLE IF EXISTS `categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categoria` (
  `idCategoria` int(11) NOT NULL AUTO_INCREMENT,
  `nombreCategoria` varchar(50) NOT NULL,
  PRIMARY KEY (`idCategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categoria`
--

LOCK TABLES `categoria` WRITE;
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
INSERT INTO `categoria` VALUES (1,'Insumos agrícolas'),(2,'Servicio mecánico'),(3,'Refacciones');
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ciudad`
--

DROP TABLE IF EXISTS `ciudad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ciudad` (
  `idCiudad` int(11) NOT NULL AUTO_INCREMENT,
  `nombreCiudad` varchar(80) NOT NULL,
  `idEstadoC` int(11) NOT NULL,
  PRIMARY KEY (`idCiudad`),
  KEY `fk_ciudad_estado` (`idEstadoC`),
  CONSTRAINT `fk_ciudad_estado` FOREIGN KEY (`idEstadoC`) REFERENCES `estado` (`idEstado`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ciudad`
--

LOCK TABLES `ciudad` WRITE;
/*!40000 ALTER TABLE `ciudad` DISABLE KEYS */;
INSERT INTO `ciudad` VALUES (1,'Acámbaro',1),(2,'Celaya',1);
/*!40000 ALTER TABLE `ciudad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clientes` (
  `idCliente` int(11) NOT NULL AUTO_INCREMENT,
  `nombreCliente` varchar(30) NOT NULL,
  `apellidoCliente` varchar(30) NOT NULL,
  `correoElectronico` varchar(80) NOT NULL,
  `contrasena` blob,
  PRIMARY KEY (`idCliente`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES (1,'Alberto ','León','albertoleon@gmail.com','fsfdsfsfsd'),(2,'Alberto ','León','albertoleon@gmail.com','a48e70de2a03f078abbaa97b3ef7b79d243b1090c3776b7132786e3d1e70f7a083e88bf175cf6eb625939364046c4fa4f415b1ddc84c3295206da4bd5c5b13ebkU8XEnQaRGMB6d9VYDWtKHlghgZ+0WZlNXmwN8guv5o='),(3,'Alberto','León','albertoleonm21@gmail.com','619aefac88bf90ed5f24069403af189152656e2f72be07928ae6d9db7cd082d5ebb0c1051db59e799c6f0d8776ada08786692b42bf94cd39360781174c56a5dfJf0BYCJPDcrKlGC2GkgDbhai7R/Mgw/TTygqciIYK9g='),(4,'Alberto','Leon','albertoleonm@gmai.com','38b6e4e596cefd5d590e31346372d2c97bd19b53b3994a53ca8f0d321feb33050530cb90fbd7a94a27458207e89b2a59ebcac3126a77eabb02a7e4d9eee1fbc7USnMqhkP4tNBiASQA2hQ5Tp2UevIInjj8M1eLvWntZY='),(5,'Goretti','Medina','gorettiMedina@gmail.com','7c3977cb0dfa723d87ac648a6beddef8d7358ab50d8a7c3ee8557103177672d8beb610ca218bd842b1104d04656b5e24be9b36b142b9c1e47397bc0122701093Olf+rvneixfaH+SOxW2xs5v7t3xtru5MCmj3V2pbQ28='),(6,'Luis','Soto','luisSoto@gmail.com','aac49890692aec21022a64bd9c240ff5214b26026c84558c6b1995d7f0b0c0b20f4510ba8d268003cfa5defb10c1b9083b24a0e00a7770c1425536b6aacb8b9dvdXGSuf3cEohVsaGbWEoZtV6H+HYM/aUdRnvNthAq6U='),(7,'Luis','Soto','luisSoto@gmail.com','15d4d122937f6e2bcc1d3357a6daf68bb2f5162fe054e72f014cfb4a1f01176f408ade810241d2d41b11f37c66dfe007a2d3310d7832a861d5016ac2b7979d6eZjczUGRwYCqkQY9pn6gbTC9i+u5kQbluaJ77vKzZNNA=');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacto`
--

DROP TABLE IF EXISTS `contacto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contacto` (
  `idContacto` int(11) NOT NULL AUTO_INCREMENT,
  `nombreContacto` varchar(30) NOT NULL,
  `correoContacto` varchar(50) NOT NULL,
  `mensaje` varchar(150) NOT NULL,
  `idUsuario_contacto` int(11) DEFAULT NULL,
  PRIMARY KEY (`idContacto`),
  KEY `fk_contacto_usuarios` (`idUsuario_contacto`),
  CONSTRAINT `fk_contacto_usuarios` FOREIGN KEY (`idUsuario_contacto`) REFERENCES `usuarios` (`noUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacto`
--

LOCK TABLES `contacto` WRITE;
/*!40000 ALTER TABLE `contacto` DISABLE KEYS */;
INSERT INTO `contacto` VALUES (1,'Alberto León','albertoleon@gmail.com','Some',1001),(2,'Alberto León','albertoleon@gmail.com','Otro mensaje',1001);
/*!40000 ALTER TABLE `contacto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detallecompra`
--

DROP TABLE IF EXISTS `detallecompra`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detallecompra` (
  `noCompra` int(11) NOT NULL AUTO_INCREMENT,
  `fechaCompra` date DEFAULT NULL,
  `fechaEnvio` date DEFAULT NULL,
  `direccionEnvio` varchar(50) NOT NULL,
  `coloniaEnvio` varchar(100) NOT NULL,
  `idProductoC` int(11) DEFAULT NULL,
  `idClienteC` int(11) DEFAULT NULL,
  `idCiudadC` int(11) DEFAULT NULL,
  `idMetodoEnvioC` int(11) DEFAULT NULL,
  `idMetodoPagoC` int(11) DEFAULT NULL,
  PRIMARY KEY (`noCompra`),
  KEY `fk_detalle_producto` (`idProductoC`),
  KEY `fk_detalle_cliente` (`idClienteC`),
  KEY `fk_detalle_ciudad` (`idCiudadC`),
  KEY `fk_detalle_envio` (`idMetodoEnvioC`),
  KEY `fk_detalle_pago` (`idMetodoPagoC`),
  CONSTRAINT `fk_detalle_ciudad` FOREIGN KEY (`idCiudadC`) REFERENCES `ciudad` (`idCiudad`),
  CONSTRAINT `fk_detalle_cliente` FOREIGN KEY (`idClienteC`) REFERENCES `clientes` (`idCliente`),
  CONSTRAINT `fk_detalle_envio` FOREIGN KEY (`idMetodoEnvioC`) REFERENCES `metodoenvio` (`idMetodoEnvio`),
  CONSTRAINT `fk_detalle_pago` FOREIGN KEY (`idMetodoPagoC`) REFERENCES `metodopago` (`idMetodoPago`),
  CONSTRAINT `fk_detalle_producto` FOREIGN KEY (`idProductoC`) REFERENCES `productos` (`idProducto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detallecompra`
--

LOCK TABLES `detallecompra` WRITE;
/*!40000 ALTER TABLE `detallecompra` DISABLE KEYS */;
/*!40000 ALTER TABLE `detallecompra` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estado`
--

DROP TABLE IF EXISTS `estado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estado` (
  `idEstado` int(11) NOT NULL AUTO_INCREMENT,
  `nombreEstado` varchar(80) NOT NULL,
  PRIMARY KEY (`idEstado`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estado`
--

LOCK TABLES `estado` WRITE;
/*!40000 ALTER TABLE `estado` DISABLE KEYS */;
INSERT INTO `estado` VALUES (1,'Guanajuato');
/*!40000 ALTER TABLE `estado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `imagenes`
--

DROP TABLE IF EXISTS `imagenes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `imagenes` (
  `idImagen` int(11) NOT NULL AUTO_INCREMENT,
  `imagen1` varchar(100) NOT NULL,
  `imagen2` varchar(100) DEFAULT NULL,
  `imagen3` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idImagen`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `imagenes`
--

LOCK TABLES `imagenes` WRITE;
/*!40000 ALTER TABLE `imagenes` DISABLE KEYS */;
INSERT INTO `imagenes` VALUES (2,'dasd1.png','images1.png','unnamed1.jpg'),(3,'unnammnved_(1).png','mhvuhjvl_(1).png','unnamed.png');
/*!40000 ALTER TABLE `imagenes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `metodoenvio`
--

DROP TABLE IF EXISTS `metodoenvio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `metodoenvio` (
  `idMetodoEnvio` int(11) NOT NULL AUTO_INCREMENT,
  `nombreMetodo` varchar(30) NOT NULL,
  `precioEnvio` float NOT NULL,
  `diasEnvio` int(11) DEFAULT NULL,
  PRIMARY KEY (`idMetodoEnvio`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `metodoenvio`
--

LOCK TABLES `metodoenvio` WRITE;
/*!40000 ALTER TABLE `metodoenvio` DISABLE KEYS */;
INSERT INTO `metodoenvio` VALUES (1,'DHL',110,5),(2,'Estafeta',100,6);
/*!40000 ALTER TABLE `metodoenvio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `metodopago`
--

DROP TABLE IF EXISTS `metodopago`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `metodopago` (
  `idMetodoPago` int(11) NOT NULL AUTO_INCREMENT,
  `nombreMetodoPago` varchar(30) NOT NULL,
  PRIMARY KEY (`idMetodoPago`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `metodopago`
--

LOCK TABLES `metodopago` WRITE;
/*!40000 ALTER TABLE `metodopago` DISABLE KEYS */;
INSERT INTO `metodopago` VALUES (1,'Visa y MasterCard'),(2,'Oxxo');
/*!40000 ALTER TABLE `metodopago` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `productos` (
  `idProducto` int(11) NOT NULL AUTO_INCREMENT,
  `nombreProducto` varchar(50) NOT NULL,
  `descripcionProducto` text NOT NULL,
  `precioVenta` float NOT NULL,
  `precioCompra` float NOT NULL,
  `stock` int(11) DEFAULT NULL,
  `noUsuarioP` int(11) DEFAULT NULL,
  `idImagenesP` int(11) DEFAULT NULL,
  `idCategoriaP` int(11) DEFAULT NULL,
  PRIMARY KEY (`idProducto`),
  KEY `fk_productos_usuarios` (`noUsuarioP`),
  KEY `fk_productos_imagenes` (`idImagenesP`),
  KEY `fk_productos_categoria` (`idCategoriaP`),
  CONSTRAINT `fk_productos_categoria` FOREIGN KEY (`idCategoriaP`) REFERENCES `categoria` (`idCategoria`),
  CONSTRAINT `fk_productos_imagenes` FOREIGN KEY (`idImagenesP`) REFERENCES `imagenes` (`idImagen`),
  CONSTRAINT `fk_productos_usuarios` FOREIGN KEY (`noUsuarioP`) REFERENCES `usuarios` (`noUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` VALUES (1,'Tractor','Es un tractor',12354,12356.3,1,1001,2,2),(2,'Prueba','nkjnkjugvkhg',1235,1000,5,1001,3,3);
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `noUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombreUsuario` varchar(30) NOT NULL,
  `apellidoUsuario` varchar(30) NOT NULL,
  `contrasenaUsuario` blob NOT NULL,
  `permisos` tinyint(1) NOT NULL,
  PRIMARY KEY (`noUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=1003 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1001,'Administrador','Admon','773c8a0dc236713c9c2508f2392eeda86fa017acbf68bcee4019bf60c35005f542fd4c7d94868a54b2b40e95812ed0d13bb782f2e0b8f1fb50a184963b74f559EU5bzw+VyhqpeLzQbgGuVAs2r1MrpGpOpfYYAN2mLW8=',1),(1002,'Alberto ','León','105585bc7d0f10f309ca9ba36d4b4d588992518edc30cbc340d7a9e9684792f7ad1602b512c83505dc80e76efd74c77f13dd5aaeb9c58418339e3c32a049cbd7Opb5iBvA9cMRQDyhiFsJB5BVV1ve4QSscAVd/i2rBQg=',2);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-08-01 23:34:39
