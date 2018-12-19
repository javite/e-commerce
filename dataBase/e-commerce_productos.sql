-- MySQL dump 10.13  Distrib 5.7.12, for Win32 (AMD64)
--
-- Host: localhost    Database: e-commerce
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.35-MariaDB

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
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `precio` int(11) NOT NULL,
  `marca_id` int(11) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime DEFAULT NULL,
  `categoria_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_productos_marca_idx` (`marca_id`),
  KEY `fk_productos_categoria_idx` (`categoria_id`),
  CONSTRAINT `fk_productos_categoria` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_productos_marca` FOREIGN KEY (`marca_id`) REFERENCES `marcas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` VALUES (0,'Galaxy S9','Producto electronico',46000,9,'2011-12-18 00:00:00','2011-12-18 00:00:00',1),(1,'Iphone Xs','Regalá útima tecnologia. El nuevo lanzamiento de apple incluye entre otras cosas, reconocimiento fac',66500,1,'2011-12-18 00:00:00','2011-12-18 00:00:00',1),(2,'Bose Sound dock III','Sentir la música. El parlante Bose Sound dock ofrece la mejor tecnólogia en sistemas de sonido del m',10000,2,'2011-12-18 00:00:00','2011-12-18 00:00:00',1),(3,'Ipad Pro','Todo nuevo, todo pantalla, todo potencia. El Ipad Pro está completamente rediseñado y viene equipado',35000,1,'2011-12-18 00:00:00','2011-12-18 00:00:00',1),(4,'Cámara  D850','Resolución más alta. Velocidad más rápida. Mayor versatilidad. Regalá una cámara que les permite a l',134000,4,'2011-12-18 00:00:00','2011-12-18 00:00:00',1),(5,'PlayStarion 4 PRO','Más potente. Más PS4. La PS4 definitiva: más rápida, más potente y con resolución en 4K*. Ganadora d',27000,4,'2011-12-18 00:00:00','2011-12-18 00:00:00',1),(6,'Pelota de futbol TELSTAR','Jugá con la ultima pelota de fútbol, la TELSTAR. La última pelota mundialista.',2100,5,'2011-12-18 00:00:00','2011-12-18 00:00:00',2),(7,'Reposera plegable','Reposera Plegable Playa, Jardín, Camping Reclinable. Para llevar a todos lados.',1500,6,'2011-12-18 00:00:00','2011-12-18 00:00:00',2),(8,'Tenis giratorio','Diversión sin límite de edad. Para chicos y grandes. Jugá al tenis en el jardin de tu casa. Incluye ',2500,7,'2011-12-18 00:00:00','2011-12-18 00:00:00',2),(9,' Mesa de Ping Pong','La mejor mesa de Ping Pong. Calidad de primera.',10500,7,'2011-12-18 00:00:00','2011-12-18 00:00:00',2),(10,'Red de volley y pelota','Red de Volley para jugar en todos lados. Playa, jardín, pileta y mucho mas. Viene con pelota incluíd',1800,7,'2011-12-18 00:00:00','2011-12-18 00:00:00',2),(11,'Juego de muebles para galería','Mesa ratona, dos sillones individuales y un sillón largo. Para usar en exteriores, jardín, galería e',12000,8,'2011-12-18 00:00:00','2011-12-18 00:00:00',3),(12,'Mesa con sombrilla','Juego para jardin. Sillas, sillones, mesa y sombrilla.',7000,8,'2011-12-18 00:00:00','2011-12-18 00:00:00',3),(13,'Espejo para interiores','Espejo con marco de madera paraíso maciza 1.20 X 70 Cm',3200,13,'2011-12-18 00:00:00','2011-12-18 00:00:00',3),(14,'Lampara de pie','Lampara de pie moderna led living',999,14,'2011-12-18 00:00:00','2011-12-18 00:00:00',3),(15,'Luces de techo','Colgante 3 Luces Cromo Deco Apto Led Moderno Luz Desing',3500,14,'2011-12-18 00:00:00','2011-12-18 00:00:00',3),(16,'Vestido largo','Vestidos largos para uso diario de tipo casual',600,10,'2011-12-18 00:00:00','2011-12-18 00:00:00',4),(17,'Zapatillas deportivas','Zapatillas para correr hombre.',3099,15,'2011-12-18 00:00:00','2011-12-18 00:00:00',4),(18,'Jean para hombre','Jean azul oscuro para hombres. Todos los detalles',1200,11,'2011-12-18 00:00:00','2011-12-18 00:00:00',4),(19,'Campera de cuero mujer','Campera De Cuero Dama Vacuno Rockera Ramones Rockbell',4100,12,'2011-12-18 00:00:00','2011-12-18 00:00:00',4),(20,'Zapatillas urbanas unisex','Zapatillas adidas superstar para hombre y mujer.',2700,5,'2011-12-18 00:00:00','2011-12-18 00:00:00',4);
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-12-19 15:11:06
