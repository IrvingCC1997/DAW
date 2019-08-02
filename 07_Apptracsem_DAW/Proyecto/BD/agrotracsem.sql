-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-08-2019 a las 21:20:30
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `agrotracsem`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idCategoria` int(11) NOT NULL,
  `nombreCategoria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idCategoria`, `nombreCategoria`) VALUES
(1, 'Insumos agrícolas'),
(2, 'Servicio mecánico'),
(3, 'Refacciones');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `idCiudad` int(11) NOT NULL,
  `nombreCiudad` varchar(80) NOT NULL,
  `idEstadoC` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`idCiudad`, `nombreCiudad`, `idEstadoC`) VALUES
(1, 'Acámbaro', 1),
(2, 'Celaya', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `idCliente` int(11) NOT NULL,
  `nombreCliente` varchar(30) NOT NULL,
  `apellidoCliente` varchar(30) NOT NULL,
  `correoElectronico` varchar(80) NOT NULL,
  `contrasena` blob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`idCliente`, `nombreCliente`, `apellidoCliente`, `correoElectronico`, `contrasena`) VALUES
(1, 'Alberto ', 'León', 'albertoleon@gmail.com', 0x66736664736673667364),
(2, 'Alberto ', 'León', 'albertoleon@gmail.com', 0x61343865373064653261303366303738616262616139376233656637623739643234336231303930633337373662373133323738366533643165373066376130383365383862663137356366366562363235393339333634303436633466613466343135623164646338346333323935323036646134626435633562313365626b553858456e516152474d4236643956594457744b486c6768675a2b30575a6c4e586d774e38677576356f3d),
(3, 'Alberto', 'León', 'albertoleonm21@gmail.com', 0x36313961656661633838626639306564356632343036393430336166313839313532363536653266373262653037393238616536643964623763643038326435656262306331303531646235396537393963366630643837373661646130383738363639326234326266393463643339333630373831313734633536613564664a66304259434a504463724b6c474332476b67446268616937522f4d67772f5454796771636949594b39673d),
(4, 'Alberto', 'Leon', 'albertoleonm@gmai.com', 0x333862366534653539366365666435643539306533313334363337326432633937626431396235336233393934613533636138663064333231666562333330353035333063623930666264376139346132373435383230376538396232613539656263616333313236613737656162623032613765346439656565316662633755536e4d71686b5034744e4269415351413268513554703255657649496e6a6a384d31654c76576e745a593d);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `idContacto` int(11) NOT NULL,
  `nombreContacto` varchar(30) NOT NULL,
  `correoContacto` varchar(50) NOT NULL,
  `mensaje` varchar(150) NOT NULL,
  `idUsuario_contacto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`idContacto`, `nombreContacto`, `correoContacto`, `mensaje`, `idUsuario_contacto`) VALUES
(1, 'Alberto León', 'albertoleon@gmail.com', 'Some', 1001),
(2, 'Alberto León', 'albertoleon@gmail.com', 'Otro mensaje', 1001);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallecompra`
--

CREATE TABLE `detallecompra` (
  `noCompra` int(11) NOT NULL,
  `fechaCompra` date DEFAULT NULL,
  `fechaEnvio` date DEFAULT NULL,
  `direccionEnvio` varchar(50) NOT NULL,
  `coloniaEnvio` varchar(100) NOT NULL,
  `idProductoC` int(11) DEFAULT NULL,
  `idClienteC` int(11) DEFAULT NULL,
  `idCiudadC` int(11) DEFAULT NULL,
  `idMetodoEnvioC` int(11) DEFAULT NULL,
  `idMetodoPagoC` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `idEstado` int(11) NOT NULL,
  `nombreEstado` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`idEstado`, `nombreEstado`) VALUES
(1, 'Guanajuato');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE `imagenes` (
  `idImagen` int(11) NOT NULL,
  `imagen1` varchar(100) NOT NULL,
  `imagen2` varchar(100) DEFAULT NULL,
  `imagen3` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`idImagen`, `imagen1`, `imagen2`, `imagen3`) VALUES
(3, 'cub-SIII15W40.png', 'quaker.png', 'quaker1.png'),
(4, 'Agrolita.jpg', 'Agrolita1.jpg', 'bulto-de-agrolita-perlita-volumen-de-100lts-11-12kg-55556256-D_NQ_NP_3474-MLM4236298283_042013-O.jpg'),
(5, 'peat-moss-turba-paca-grande-de-107-lts-y-25-kilos-D_NQ_NP_658704-MLM31367924838_072019-F.jpg', 'sustrato.jpg', 'peat-moss-turba-paca-grande-de-107-lts-y-25-kilos-D_NQ_NP_658704-MLM31367924838_072019-F1.jpg'),
(6, 'D_NP_3965-MLM4880508082_082013-Q.jpg', 'ABT1280-6-1024x680.jpg', 'recorte-bot.jpg'),
(7, 'semilla-maiz-cb-crm-52-D_NQ_NP_950087-MLM29010021849_122018-F.jpg', 'maiz14agosto1.jpg', 'Campo-Tomate-Maiz-Elote-Agro-4.jpg'),
(8, 'semilla-de-maiz-hibrido-para-siembra-D_NQ_NP_975345-MLM27876160032_072018-F.jpg', 'maiz14agosto11.jpg', 'recorte-bot1.jpg'),
(9, 'banda-tractopodador-12-x-95-38-oregon-75-197-D_NQ_NP_935404-MLM29473493724_022019-Q.jpg', '16.jpeg', '41.jpg'),
(10, '18.jpeg', '24.jpeg', '39.jpeg'),
(11, 'llanta-750-16-goodyear-rib-tractor-8c-f2-cc-msi-D_NQ_NP_677702-MLM31238368372_062019-F.jpg', '13_.jpeg', '38.jpeg'),
(12, 'llanta-1000-16-jk-tyre-tornel-tr-del-rib-king-sc-tl-8c-D_NQ_NP_871685-MLM29618285913_032019-F.jpg', '37.jpeg', '36.jpg'),
(13, '1-llanta-184-30-tractor-12cp-r1-tt-y-camara-D_NQ_NP_963866-MLM31230480398_062019-F.jpg', '20.jpeg', '22.jpeg'),
(16, 'qwertyuiopasdfgg1.jpg', 'twertwertwertwergweggfdfg.jpg', 'qwertyuioplkjhgfds1.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metodoenvio`
--

CREATE TABLE `metodoenvio` (
  `idMetodoEnvio` int(11) NOT NULL,
  `nombreMetodo` varchar(30) NOT NULL,
  `precioEnvio` float NOT NULL,
  `diasEnvio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `metodoenvio`
--

INSERT INTO `metodoenvio` (`idMetodoEnvio`, `nombreMetodo`, `precioEnvio`, `diasEnvio`) VALUES
(1, 'DHL', 110, 5),
(2, 'Estafeta', 100, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metodopago`
--

CREATE TABLE `metodopago` (
  `idMetodoPago` int(11) NOT NULL,
  `nombreMetodoPago` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `metodopago`
--

INSERT INTO `metodopago` (`idMetodoPago`, `nombreMetodoPago`) VALUES
(1, 'Visa y MasterCard'),
(2, 'Oxxo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idProducto` int(11) NOT NULL,
  `nombreProducto` varchar(50) NOT NULL,
  `descripcionProducto` text NOT NULL,
  `precioVenta` float NOT NULL,
  `precioCompra` float NOT NULL,
  `stock` int(11) DEFAULT NULL,
  `noUsuarioP` int(11) DEFAULT NULL,
  `idImagenesP` int(11) DEFAULT NULL,
  `idCategoriaP` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProducto`, `nombreProducto`, `descripcionProducto`, `precioVenta`, `precioCompra`, `stock`, `noUsuarioP`, `idImagenesP`, `idCategoriaP`) VALUES
(1, 'Agrolita Bulto 100 L', '1 Costal de Perlita Expandida Marca Agrolita de 14 Kg 100 Litros. La perlita mineral de origen volcánico.', 450, 410, 11, 1001, 4, 1),
(2, 'Cambio de aceite', 'Servicio de cambio de aceite completo. Marca Quaker State | Diesel', 150, 140, 2, 1001, 3, 2),
(3, 'Peat Moss Turba', 'El peat moss es un material pardo obscuro, con buena retención de humedad, buena aireación y alto contenido de materia orgánica, ideal para germinar plántulas en semilleros, invernaderos, viveros, macetas, jardines, como sustrato para flores. ', 500, 410, 10, 1001, 5, 1),
(4, 'Semilla Maiz Elotero Asgrow ', 'Bulto Cerrado con 50,000 Semillas de maíz elotero ASGROW A7573, tratadas con APRON QUE PROTEGE LA SEMILLAS CONTRA HONGOS Y BACTERIAS.', 2860, 2600, 6, 1001, 6, 1),
(5, 'Semilla Maíz Cb Crm', 'Bulto Cerrado con 60,000 Semillas de maíz CRM-52', 1890, 1730, 12, 1001, 7, 1),
(6, 'Semilla de Maiz Agrocel', 'Semilla de maíz hibrido para siembra saco de 60 mil semillas', 2400, 2150, 12, 1001, 8, 1),
(7, 'Cambio de banda', 'Servicio completo de limpiado y cambio de banda al motor. ', 500, 500, 10, 1001, 9, 2),
(8, 'Servicio completo', 'Servicio de motor completo, cambio de aceite, revisión de preción de llantas.', 1630, 1630, 15, 1001, 10, 2),
(9, 'Llanta 7.50-16 Goodyear Rib Tracto', 'Llanta 7.50-16 Goodyear Rib Tractor 8c F2 C/c Msi. Precio por llanta.', 2500, 2000, 8, 1001, 11, 3),
(10, 'Llanta 10.00-16 Jk Tyre Tornel', 'Llanta 10.00-16 Jk Tyre Tornel Tr Del Rib King S/c Tl 8c. Precio por llanta', 2450, 1800, 8, 1002, 12, 3),
(11, 'Llanta 18.4-30 Tractor 12cp 18.4-30 Tractor 12cp', '1 Llanta 18.4-30 Tractor 12cp R1 Tt Y Camara. Precio por llanta.', 12560, 11300, 4, 1002, 13, 3),
(12, 'Llanta 18.4-30 Alliance 12c ', 'Llanta 18.4-30 Alliance 12c Agri R1 Convencional Trasera 324. Precio por llanta.', 18090, 17600, 8, 1001, 16, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `noUsuario` int(11) NOT NULL,
  `nombreUsuario` varchar(30) NOT NULL,
  `apellidoUsuario` varchar(30) NOT NULL,
  `contrasenaUsuario` blob NOT NULL,
  `permisos` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`noUsuario`, `nombreUsuario`, `apellidoUsuario`, `contrasenaUsuario`, `permisos`) VALUES
(1001, 'Administrador', 'Admon', 0x3737336338613064633233363731336339633235303866323339326565646138366661303137616362663638626365653430313962663630633335303035663534326664346337643934383638613534623262343065393538313265643064313362623738326632653062386631666235306131383439363362373466353539455535627a772b5679687170654c7a51626747755641733272314d727047704f70665959414e326d4c57383d, 1),
(1002, 'Juan', 'León', 0x366464633164326461623861396430633865636239346432306130353035666436366161386439666362346131333463356565313638666235386161303138336438333039303362656339313365633865653731623939643636633965336664623733386561323631346462343136323837653233653634333162333838386372755766796f444e614b782b55455358542f39716f656755544277354b534b33644c44775737595978586f3d, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`idCiudad`),
  ADD KEY `fk_ciudad_estado` (`idEstadoC`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idCliente`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`idContacto`),
  ADD KEY `fk_contacto_usuarios` (`idUsuario_contacto`);

--
-- Indices de la tabla `detallecompra`
--
ALTER TABLE `detallecompra`
  ADD PRIMARY KEY (`noCompra`),
  ADD KEY `fk_detalle_producto` (`idProductoC`),
  ADD KEY `fk_detalle_cliente` (`idClienteC`),
  ADD KEY `fk_detalle_ciudad` (`idCiudadC`),
  ADD KEY `fk_detalle_envio` (`idMetodoEnvioC`),
  ADD KEY `fk_detalle_pago` (`idMetodoPagoC`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`idEstado`);

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`idImagen`);

--
-- Indices de la tabla `metodoenvio`
--
ALTER TABLE `metodoenvio`
  ADD PRIMARY KEY (`idMetodoEnvio`);

--
-- Indices de la tabla `metodopago`
--
ALTER TABLE `metodopago`
  ADD PRIMARY KEY (`idMetodoPago`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idProducto`),
  ADD KEY `fk_productos_usuarios` (`noUsuarioP`),
  ADD KEY `fk_productos_imagenes` (`idImagenesP`),
  ADD KEY `fk_productos_categoria` (`idCategoriaP`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`noUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  MODIFY `idCiudad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `idContacto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `detallecompra`
--
ALTER TABLE `detallecompra`
  MODIFY `noCompra` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `idEstado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `idImagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `metodoenvio`
--
ALTER TABLE `metodoenvio`
  MODIFY `idMetodoEnvio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `metodopago`
--
ALTER TABLE `metodopago`
  MODIFY `idMetodoPago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `noUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1003;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD CONSTRAINT `fk_ciudad_estado` FOREIGN KEY (`idEstadoC`) REFERENCES `estado` (`idEstado`);

--
-- Filtros para la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD CONSTRAINT `fk_contacto_usuarios` FOREIGN KEY (`idUsuario_contacto`) REFERENCES `usuarios` (`noUsuario`);

--
-- Filtros para la tabla `detallecompra`
--
ALTER TABLE `detallecompra`
  ADD CONSTRAINT `fk_detalle_ciudad` FOREIGN KEY (`idCiudadC`) REFERENCES `ciudad` (`idCiudad`),
  ADD CONSTRAINT `fk_detalle_cliente` FOREIGN KEY (`idClienteC`) REFERENCES `clientes` (`idCliente`),
  ADD CONSTRAINT `fk_detalle_envio` FOREIGN KEY (`idMetodoEnvioC`) REFERENCES `metodoenvio` (`idMetodoEnvio`),
  ADD CONSTRAINT `fk_detalle_pago` FOREIGN KEY (`idMetodoPagoC`) REFERENCES `metodopago` (`idMetodoPago`),
  ADD CONSTRAINT `fk_detalle_producto` FOREIGN KEY (`idProductoC`) REFERENCES `productos` (`idProducto`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_productos_categoria` FOREIGN KEY (`idCategoriaP`) REFERENCES `categoria` (`idCategoria`),
  ADD CONSTRAINT `fk_productos_imagenes` FOREIGN KEY (`idImagenesP`) REFERENCES `imagenes` (`idImagen`),
  ADD CONSTRAINT `fk_productos_usuarios` FOREIGN KEY (`noUsuarioP`) REFERENCES `usuarios` (`noUsuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
