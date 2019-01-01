-- MySQL dump 10.13  Distrib 5.7.24, for Linux (x86_64)
--
-- Host: localhost    Database: csamproject
-- ------------------------------------------------------
-- Server version	5.7.24-0ubuntu0.16.04.1

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
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` char(37) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES ('448f135d-9322-4845-b3bd-a597828e9c01','Processor'),('50a246ac-6f78-46a0-aec3-595670472560','Mouse'),('6b8078dc-19ce-4acc-89a5-167122ca6aa3','Graphics Card');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` char(37) NOT NULL,
  `category_id` char(37) DEFAULT NULL,
  `user_id` char(37) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `price` int(11) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `products_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES ('177dd3cf-dc99-4a2c-9293-d38f8c02415e','6b8078dc-19ce-4acc-89a5-167122ca6aa3','aec156b3-a53a-4755-9a3a-360c1e8df69b','NVidia GeForce GTX 1050Ti GDDR5 4 GB','The revolution is here. NVidia produce GTX version of Graphic card that makes your gaming have well performance.',1650000,7),('c2daec1c-5400-458b-b20a-dfab625a4cc2','50a246ac-6f78-46a0-aec3-595670472560','eee0b333-b360-4145-9467-6746ea3f5d6b','Logitech G103 Prodigy','DPI: 200~6,000\nMax Acceleration: >25G\nMax Speed: >200ips\nUSB Data: 16bit\nPolling Rate: 1,000Hz(1ms)\nClick: 10M Max\nFeet: 250Km\nSize: 116.6x62.15x38.2mm\nWeight: 85g\nCable Length: 2m\nBulk Package',213000,10),('e6e08536-e56c-43e1-b69a-eb7ee934cb8c','448f135d-9322-4845-b3bd-a597828e9c01','5a3cbb78-9aa8-461c-a809-d2df4e680f67','Intel Core i7-8750H','8th Gen has come. Core i7 designed specifically for heavy-weight usage, such as game, video editing, etc.',8250000,5);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` char(37) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES ('7e069b7a-8f50-4e0b-8d3f-fa2334c4196b','Admin'),('dcf1d4c1-90f3-4b92-bd47-567bfd8ff05f','Member'),('e586b774-e4b5-429c-8f37-512fe7cb936e','Superuser');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` char(37) NOT NULL,
  `role` char(37) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address` text,
  `dob` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `role` (`role`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES ('5a3cbb78-9aa8-461c-a809-d2df4e680f67','dcf1d4c1-90f3-4b92-bd47-567bfd8ff05f','arnoldsuperuser@computer.shp','aXRzc3VwZXJ1c2Vy','Arnold Super User','Super Cracking Street R 1','1994-09-01','2018-12-31 17:53:34','0000-00-00 00:00:00'),('aec156b3-a53a-4755-9a3a-360c1e8df69b','e586b774-e4b5-429c-8f37-512fe7cb936e','rwelsh@computer.shp','aSBuZWVkIGFkbWluLCBwbGVhc2UgZ2l2ZSBtZSBhZG1pbg==','Rupert Welsh','Braga Fountain Street','1992-06-17','2018-12-31 17:44:35','0000-00-00 00:00:00'),('eee0b333-b360-4145-9467-6746ea3f5d6b','7e069b7a-8f50-4e0b-8d3f-fa2334c4196b','pcrow@computer.shp','aSBuZWVkIGFkbWluLCBwbGVhc2UgZ2l2ZSBtZSBhZG1pbg==','Porter Crow','Thanatos Lair Street AG 2','1997-11-17','2018-12-31 17:48:28','0000-00-00 00:00:00');
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

-- Dump completed on 2019-01-01 11:53:43
