-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: e-commerce
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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `sexo` varchar(45) NOT NULL,
  `foto` varchar(200) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `domicilio` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (8,'Silvia','sadecarvalho@hotmail.com','$2y$10$51q/454gYcsB8x8WNZjnKOWLBcd6P7UTjdwWtiU3ULshzpNPZzPJm','f',NULL,'qbubJBP9pZd02HfjTH9r9swMkrLwCbnluEBbPoBQxVyvkzvSsYVlYD35sAE3',NULL,NULL,NULL),(9,'pablo','refugiero@hotmail.com','$2y$10$FHFmt.dE9FIJwFn6.gfk/OREyMwDLiwdB7q9PhRXPhqmgU91kIO/u','m','PxKnmu22avL7nSf6nsa5mNJGfc1Eb7ItVnZ90qj2.png','MrtDh05ZAbH5rjJiAkzSYiRGBGaa57EukLxmVoAbHSoMvqRqWRwcmRFZ1zVB','2018-12-16 13:30:24','2018-12-16 13:30:24','bermejo 33'),(10,'javier','DH@hotmail.com','$2y$10$RASmWBTShLS6oYqNIQW4HOecLJG6Z4tqPQ9bHy9EIJbA7/tp1f7he','m',NULL,'GJdrhT9nUdXlx5RixR165hQQk2GlkZKWuVzINThtVApzCJJruFzkEJvD9QVC','2018-12-16 20:14:14','2018-12-16 20:14:14','wewee'),(11,'admin','jaranda@lixis.com','$2y$10$I30D.tzc7bnjND1PIdM95.vgWK9muIQcLtvRKxuoMuZcw3AiLOGMm','m','SKCfGaLP55YnP3HVwwqGvwjz9C0sXOnyAnOcyFmP.jpeg','1NnRj88bsH7s2tkAeeIYqSFHYLFv1WYIwmGq8OUvQC60JgD2mpn7594B7l1v','2018-12-18 20:34:00','2018-12-18 20:34:00','lllll');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-12-18 20:39:53
