-- MySQL dump 10.16  Distrib 10.1.30-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: db_amarcasarv1
-- ------------------------------------------------------
-- Server version	10.1.30-MariaDB

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
-- Table structure for table `tb_addresses`
--

DROP TABLE IF EXISTS `tb_addresses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_addresses` (
  `idaddress` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) NOT NULL,
  `idcart` int(11) NOT NULL,
  `desaddress` varchar(128) NOT NULL,
  `desholderaddress` varchar(128) DEFAULT NULL,
  `desnumber` varchar(16) NOT NULL,
  `desholdernumber` varchar(16) DEFAULT NULL,
  `descomplement` varchar(32) DEFAULT NULL,
  `desholdercomplement` varchar(32) DEFAULT NULL,
  `descity` varchar(32) NOT NULL,
  `desholdercity` varchar(32) DEFAULT NULL,
  `desstate` varchar(32) NOT NULL,
  `desholderstate` varchar(32) DEFAULT NULL,
  `descountry` varchar(32) NOT NULL,
  `desholdercountry` varchar(32) DEFAULT NULL,
  `deszipcode` char(8) NOT NULL,
  `desholderzipcode` char(8) DEFAULT NULL,
  `desdistrict` varchar(32) NOT NULL,
  `desholderdistrict` varchar(32) DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idaddress`)
) ENGINE=InnoDB AUTO_INCREMENT=399 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_addresses`
--

LOCK TABLES `tb_addresses` WRITE;
/*!40000 ALTER TABLE `tb_addresses` DISABLE KEYS */;
INSERT INTO `tb_addresses` VALUES (11,0,0,'Rua Espirito Santo',NULL,'1757',NULL,'de 1641/1642 a 1829/1830',NULL,'Belo Horizonte',NULL,'MG',NULL,'Brasil',NULL,'30160037',NULL,'Lourdes',NULL,'2019-04-24 17:04:00'),(12,0,0,'Rua Espirito Santo',NULL,'1757',NULL,'de 1641/1642 a 1829/1830',NULL,'Belo Horizonte',NULL,'MG',NULL,'Brasil',NULL,'30160037',NULL,'Lourdes',NULL,'2019-05-08 16:47:27'),(13,0,0,'Rua Espirito Santo',NULL,'1757',NULL,'de 1641/1642 a 1829/1830',NULL,'Belo Horizonte',NULL,'MG',NULL,'Brasil',NULL,'30160037',NULL,'Lourdes',NULL,'2019-05-08 16:49:38'),(14,0,0,'Rua Espirito Santo',NULL,'1757',NULL,'de 1641/1642 a 1829/1830',NULL,'Belo Horizonte',NULL,'MG',NULL,'Brasil',NULL,'30160037',NULL,'Lourdes',NULL,'2019-05-08 16:50:42'),(15,0,0,'Rua Espirito Santo',NULL,'1757',NULL,'de 1641/1642 a 1829/1830',NULL,'Belo Horizonte',NULL,'MG',NULL,'Brasil',NULL,'30160037',NULL,'Lourdes',NULL,'2019-05-08 16:51:40'),(16,0,0,'Rua Espirito Santo',NULL,'1757',NULL,'de 1641/1642 a 1829/1830',NULL,'Belo Horizonte',NULL,'MG',NULL,'Brasil',NULL,'30160037',NULL,'Lourdes',NULL,'2019-05-08 16:52:25'),(17,0,0,'Rua Espirito Santo',NULL,'1757',NULL,'de 1641/1642 a 1829/1830',NULL,'Belo Horizonte',NULL,'MG',NULL,'Brasil',NULL,'30160037',NULL,'Lourdes',NULL,'2019-05-08 16:52:41'),(18,0,156,'Rua Espirito Santo',NULL,'1757',NULL,'de 1641/1642 a 1829/1830',NULL,'Belo Horizonte',NULL,'MG',NULL,'Brasil',NULL,'30160037',NULL,'Lourdes',NULL,'2019-05-08 17:39:42'),(19,0,156,'Rua Espirito Santo',NULL,'1757',NULL,'de 1641/1642 a 1829/1830',NULL,'Belo Horizonte',NULL,'MG',NULL,'Brasil',NULL,'30160037',NULL,'Lourdes',NULL,'2019-05-08 17:40:11'),(20,0,156,'Rua Espirito Santo',NULL,'1757',NULL,'de 1641/1642 a 1829/1830',NULL,'Belo Horizonte',NULL,'MG',NULL,'Brasil',NULL,'30160037',NULL,'Lourdes',NULL,'2019-05-08 18:03:47'),(21,0,156,'Rua Espirito Santo',NULL,'1757',NULL,'de 1641/1642 a 1829/1830',NULL,'Belo Horizonte',NULL,'MG',NULL,'Brasil',NULL,'30160037',NULL,'Lourdes',NULL,'2019-05-08 18:03:58'),(22,0,156,'Rua Espirito Santo',NULL,'1757',NULL,'de 1641/1642 a 1829/1830',NULL,'Belo Horizonte',NULL,'MG',NULL,'Brasil',NULL,'30160037',NULL,'Lourdes',NULL,'2019-05-08 18:07:15'),(23,0,156,'Rua Espirito Santo',NULL,'1757',NULL,'de 1641/1642 a 1829/1830',NULL,'Belo Horizonte',NULL,'MG',NULL,'Brasil',NULL,'30160037',NULL,'Lourdes',NULL,'2019-05-08 18:07:34'),(24,0,156,'Rua Espirito Santo',NULL,'1757',NULL,'de 1641/1642 a 1829/1830',NULL,'Belo Horizonte',NULL,'MG',NULL,'Brasil',NULL,'30160037',NULL,'Lourdes',NULL,'2019-05-08 18:07:54'),(25,0,156,'Rua Espirito Santo',NULL,'1757',NULL,'de 1641/1642 a 1829/1830',NULL,'Belo Horizonte',NULL,'MG',NULL,'Brasil',NULL,'30160037',NULL,'Lourdes',NULL,'2019-05-08 18:09:46'),(26,0,156,'Rua Espirito Santo',NULL,'1757',NULL,'de 1641/1642 a 1829/1830',NULL,'Belo Horizonte',NULL,'MG',NULL,'Brasil',NULL,'30160037',NULL,'Lourdes',NULL,'2019-05-08 18:11:29'),(27,0,156,'Rua Espirito Santo',NULL,'1757',NULL,'de 1641/1642 a 1829/1830',NULL,'Belo Horizonte',NULL,'MG',NULL,'Brasil',NULL,'30160037',NULL,'Lourdes',NULL,'2019-05-08 18:11:56'),(28,0,156,'Rua Espirito Santo',NULL,'1757',NULL,'de 1641/1642 a 1829/1830',NULL,'Belo Horizonte',NULL,'MG',NULL,'Brasil',NULL,'30160037',NULL,'Lourdes',NULL,'2019-05-08 18:12:23'),(29,0,156,'Rua Espirito Santo',NULL,'1757',NULL,'de 1641/1642 a 1829/1830',NULL,'Belo Horizonte',NULL,'MG',NULL,'Brasil',NULL,'30160037',NULL,'Lourdes',NULL,'2019-05-08 18:12:37'),(30,0,157,'Rua Alvaro Ribeiro',NULL,'41',NULL,'',NULL,'Americana',NULL,'São Paulo',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-08 19:21:10'),(37,0,157,'Rua Alvaro Ribeiro',NULL,'401',NULL,'',NULL,'Americana',NULL,'São Paulo',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-08 19:28:40'),(40,0,157,'Rua Alvaro Ribeiro',NULL,'41',NULL,'',NULL,'Americana',NULL,'São Paulo',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-08 19:36:26'),(43,0,156,'Rua Espirito Santo',NULL,'1758',NULL,'de 1641/1642 a 1829/1830',NULL,'Belo Horizonte',NULL,'MG',NULL,'Brasil',NULL,'30160037',NULL,'Lourdes',NULL,'2019-05-08 19:43:38'),(45,0,156,'Rua Espirito Santo',NULL,'1759',NULL,'de 1641/1642 a 1829/1830',NULL,'Belo Horizonte',NULL,'MG',NULL,'Brasil',NULL,'30160037',NULL,'Lourdes',NULL,'2019-05-08 19:44:45'),(47,0,156,'Rua Espirito Santo',NULL,'1759',NULL,'de 1641/1642 a 1829/1830',NULL,'Belo Horizonte',NULL,'MG',NULL,'Brasil',NULL,'30160037',NULL,'Lourdes',NULL,'2019-05-08 19:49:16'),(48,11,156,'Rua Espirito Santo',NULL,'1759',NULL,'de 1641/1642 a 1829/1830',NULL,'Belo Horizonte',NULL,'MG',NULL,'Brasil',NULL,'30160037',NULL,'Lourdes',NULL,'2019-05-08 20:03:32'),(49,13,157,'Rua Alvaro Ribeiro',NULL,'401',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-08 20:03:49'),(50,13,157,'Rua Alvaro Ribeiro',NULL,'401',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-08 20:06:07'),(51,13,157,'Rua Alvaro Ribeiro',NULL,'401',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-08 20:06:38'),(52,11,156,'Rua Espirito Santo',NULL,'1757',NULL,'de 1641/1642 a 1829/1830',NULL,'Belo Horizonte',NULL,'MG',NULL,'Brasil',NULL,'30160037',NULL,'Lourdes',NULL,'2019-05-08 20:17:50'),(53,11,156,'Rua Espirito Santo',NULL,'1757',NULL,'de 1641/1642 a 1829/1830',NULL,'Belo Horizonte',NULL,'MG',NULL,'Brasil',NULL,'30160037',NULL,'Lourdes',NULL,'2019-05-08 20:20:00'),(54,11,156,'Rua Espirito Santo',NULL,'1757',NULL,'de 1641/1642 a 1829/1830',NULL,'Belo Horizonte',NULL,'MG',NULL,'Brasil',NULL,'30160037',NULL,'Lourdes',NULL,'2019-05-08 20:22:55'),(55,11,156,'Rua Espirito Santo',NULL,'1757',NULL,'de 1641/1642 a 1829/1830',NULL,'Belo Horizonte',NULL,'MG',NULL,'Brasil',NULL,'30160037',NULL,'Lourdes',NULL,'2019-05-08 20:23:35'),(56,11,156,'Rua Espirito Santo',NULL,'1757',NULL,'de 1641/1642 a 1829/1830',NULL,'Belo Horizonte',NULL,'MG',NULL,'Brasil',NULL,'30160037',NULL,'Lourdes',NULL,'2019-05-08 20:23:57'),(57,11,156,'Rua Espirito Santo',NULL,'1757',NULL,'de 1641/1642 a 1829/1830',NULL,'Belo Horizonte',NULL,'MG',NULL,'Brasil',NULL,'30160037',NULL,'Lourdes',NULL,'2019-05-08 20:25:45'),(58,11,158,'Rua Espirito Santo',NULL,'17598',NULL,'de 1641/1642 a 1829/1830',NULL,'Belo Horizonte',NULL,'MG',NULL,'Brasil',NULL,'30160037',NULL,'Lourdes',NULL,'2019-05-08 20:33:41'),(59,11,158,'Rua Alvaro Ribeiro',NULL,'500',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-08 20:36:59'),(60,11,158,'Rua Alvaro Ribeiro',NULL,'400',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-08 20:40:17'),(61,11,159,'Rua Trinta de Julho',NULL,'455',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465500',NULL,'Centro',NULL,'2019-05-08 20:42:13'),(62,11,160,'Avenida de Cillo',NULL,'100',NULL,'até 701/702',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465100',NULL,'Vila Pavan',NULL,'2019-05-08 20:45:06'),(63,11,160,'Rua Espirito Santo',NULL,'1700',NULL,'de 1641/1642 a 1829/1830',NULL,'Belo Horizonte',NULL,'MG',NULL,'Brasil',NULL,'30160037',NULL,'Lourdes',NULL,'2019-05-08 20:46:39'),(64,11,161,'Rua Espirito Santo',NULL,'1757',NULL,'de 1641/1642 a 1829/1830',NULL,'Belo Horizonte',NULL,'MG',NULL,'Brasil',NULL,'30160037',NULL,'Lourdes',NULL,'2019-05-08 20:47:59'),(65,11,161,'Rua Espirito Santo',NULL,'500',NULL,'de 1641/1642 a 1829/1830',NULL,'Belo Horizonte',NULL,'MG',NULL,'Brasil',NULL,'30160037',NULL,'Lourdes',NULL,'2019-05-08 21:33:12'),(66,11,161,'Rua Espirito Santo',NULL,'500',NULL,'de 1641/1642 a 1829/1830',NULL,'Belo Horizonte',NULL,'MG',NULL,'Brasil',NULL,'30160037',NULL,'Lourdes',NULL,'2019-05-08 21:36:09'),(67,11,161,'Rua Espirito Santo',NULL,'500',NULL,'de 1641/1642 a 1829/1830',NULL,'Belo Horizonte',NULL,'MG',NULL,'Brasil',NULL,'30160037',NULL,'Lourdes',NULL,'2019-05-08 21:37:30'),(68,11,161,'Rua Espirito Santo',NULL,'500',NULL,'de 1641/1642 a 1829/1830',NULL,'Belo Horizonte',NULL,'MG',NULL,'Brasil',NULL,'30160037',NULL,'Lourdes',NULL,'2019-05-08 21:38:35'),(69,11,161,'Rua Espirito Santo',NULL,'500',NULL,'de 1641/1642 a 1829/1830',NULL,'Belo Horizonte',NULL,'MG',NULL,'Brasil',NULL,'30160037',NULL,'Lourdes',NULL,'2019-05-08 21:43:53'),(70,11,161,'Rua Alvaro Ribeiro',NULL,'51',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-08 22:06:10'),(71,11,162,'Rua Espirito Santo',NULL,'200',NULL,'de 1641/1642 a 1829/1830',NULL,'Belo Horizonte',NULL,'MG',NULL,'Brasil',NULL,'30160037',NULL,'Lourdes',NULL,'2019-05-08 22:37:49'),(72,11,163,'Rua Alvaro Ribeiro',NULL,'400',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-08 22:40:40'),(73,11,163,'Rua Alvaro Ribeiro',NULL,'400',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-08 22:41:06'),(74,11,164,'Rua Alvaro Ribeiro',NULL,'400',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-08 22:41:49'),(75,11,164,'Rua Alvaro Ribeiro',NULL,'400',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-08 22:41:57'),(76,11,164,'Rua Alvaro Ribeiro',NULL,'400',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-08 22:44:14'),(77,11,165,'Rua Alvaro Ribeiro',NULL,'400',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-08 22:44:41'),(78,11,165,'Rua Alvaro Ribeiro',NULL,'400',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-08 22:44:56'),(79,11,165,'Rua Alvaro Ribeiro',NULL,'400',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-08 22:45:36'),(80,11,166,'Rua Alvaro Ribeiro',NULL,'400',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-08 22:45:47'),(81,11,166,'Rua Alvaro Ribeiro',NULL,'400',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-08 22:45:59'),(82,11,166,'Rua Alvaro Ribeiro',NULL,'400',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-08 22:47:15'),(83,11,167,'Rua Alvaro Ribeiro',NULL,'400',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-08 22:47:49'),(84,11,167,'Rua Alvaro Ribeiro',NULL,'400',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-08 22:48:17'),(85,11,168,'Rua Alvaro Ribeiro',NULL,'465',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-08 22:50:45'),(86,11,171,'Rua Espirito Santo',NULL,'1800',NULL,'de 1641/1642 a 1829/1830',NULL,'Belo Horizonte',NULL,'MG',NULL,'Brasil',NULL,'30160037',NULL,'Lourdes',NULL,'2019-05-08 22:53:52'),(87,11,172,'Rua Alvaro Ribeiro',NULL,'400',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-08 22:56:42'),(88,11,173,'Rua Alvaro Ribeiro',NULL,'400',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-08 22:58:28'),(89,11,174,'Rua Alvaro Ribeiro',NULL,'400',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-08 23:00:09'),(90,11,175,'Rua Alvaro Ribeiro',NULL,'800',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-08 23:04:50'),(91,11,176,'Rua Alvaro Ribeiro',NULL,'400',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-08 23:07:14'),(92,11,176,'Rua Alvaro Ribeiro',NULL,'400',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-08 23:07:35'),(93,11,176,'Rua Alvaro Ribeiro',NULL,'400',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-08 23:07:49'),(94,11,177,'Rua Alvaro Ribeiro',NULL,'400',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-08 23:08:14'),(95,11,177,'Rua Alvaro Ribeiro',NULL,'400',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-08 23:08:46'),(96,11,178,'Rua Alvaro Ribeiro',NULL,'400',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-08 23:09:14'),(97,11,178,'Rua Alvaro Ribeiro',NULL,'400',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-08 23:09:49'),(98,11,178,'Rua Alvaro Ribeiro',NULL,'400',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-08 23:10:37'),(99,11,179,'Rua Alvaro Ribeiro',NULL,'800',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-08 23:31:45'),(100,11,181,'Rua Alvaro Ribeiro',NULL,'100',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-08 23:35:35'),(101,11,181,'Rua Trinta de Julho',NULL,'31',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465500',NULL,'Centro',NULL,'2019-05-08 23:37:03'),(102,11,182,'Rua Espirito Santo',NULL,'1677',NULL,'de 421/422 a 699/700',NULL,'Belo Horizonte',NULL,'MG',NULL,'Brasil',NULL,'30160031',NULL,'Centro',NULL,'2019-05-08 23:46:22'),(103,11,169,'Rua Alvaro Ribeiro',NULL,'50000',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-08 23:50:11'),(104,11,170,'Rua Alvaro Ribeiro',NULL,'400',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-08 23:52:17'),(105,11,183,'Rua Alvaro Ribeiro',NULL,'500',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-08 23:53:26'),(106,11,184,'Rua Alvaro Ribeiro',NULL,'1000',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-08 23:56:57'),(107,11,185,'Rua Alvaro Ribeiro',NULL,'400',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 00:07:01'),(108,11,186,'Rua Alvaro Ribeiro',NULL,'400',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 00:08:38'),(109,11,187,'Rua Alvaro Ribeiro',NULL,'2',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 00:10:06'),(110,11,188,'Rua Alvaro Ribeiro',NULL,'400',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 00:16:56'),(111,11,189,'Rua Alvaro Ribeiro',NULL,'800',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 00:17:41'),(112,11,190,'Rua Alvaro Ribeiro',NULL,'800',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 00:18:47'),(113,11,190,'Rua Alvaro Ribeiro',NULL,'400',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 00:19:19'),(114,11,191,'Rua Alvaro Ribeiro',NULL,'400',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 00:19:51'),(115,11,192,'Rua Alvaro Ribeiro',NULL,'800',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 00:20:40'),(116,11,193,'Rua Alvaro Ribeiro',NULL,'800',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 00:21:10'),(117,11,194,'Rua Alvaro Ribeiro',NULL,'400',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 00:36:53'),(118,11,195,'Rua Alvaro Ribeiro',NULL,'400',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 00:39:47'),(119,11,196,'Rua Alvaro Ribeiro',NULL,'400',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 00:43:38'),(120,11,197,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 00:45:32'),(121,11,198,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 00:46:55'),(122,11,199,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 00:48:02'),(123,11,200,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 00:49:38'),(124,11,200,'Rua Alvaro Ribeiro',NULL,'8',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 00:50:31'),(125,11,201,'Rua Alvaro Ribeiro',NULL,'8',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 00:50:59'),(126,11,202,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 00:52:43'),(127,11,203,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 00:53:38'),(128,11,204,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 00:58:08'),(129,11,205,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 00:59:01'),(130,11,206,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 01:02:22'),(131,11,207,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 01:02:45'),(132,11,208,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 01:04:13'),(133,11,209,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 01:05:21'),(134,11,210,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 01:05:38'),(135,11,211,'Rua Espirito Santo',NULL,'100',NULL,'de 1641/1642 a 1829/1830',NULL,'Belo Horizonte',NULL,'MG',NULL,'Brasil',NULL,'30160037',NULL,'Lourdes',NULL,'2019-05-09 02:18:44'),(136,11,212,'Rua Alvaro Ribeiro',NULL,'1000',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 02:19:52'),(137,11,213,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 02:21:31'),(138,11,214,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 02:23:55'),(139,11,215,'Rua Alvaro Ribeiro',NULL,'100',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 02:30:14'),(140,11,216,'Rua Alvaro Ribeiro',NULL,'400',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 02:31:22'),(141,11,216,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 02:31:56'),(142,11,216,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 02:32:23'),(143,11,217,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 02:33:52'),(144,11,217,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 02:38:52'),(145,11,218,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 02:41:30'),(146,11,218,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 02:41:43'),(147,11,218,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 02:42:03'),(148,11,219,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 02:43:05'),(149,11,220,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 02:44:09'),(150,11,221,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 03:17:27'),(151,11,222,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 03:19:02'),(152,11,222,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 03:19:50'),(153,11,223,'Rua Alvaro Ribeiro',NULL,'13465400',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 03:29:27'),(154,11,224,'Rua Alvaro Ribeiro',NULL,'400',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 03:33:39'),(155,11,225,'Rua Alvaro Ribeiro',NULL,'10',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 03:41:28'),(156,11,226,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 03:42:30'),(157,11,227,'Rua Alvaro Ribeiro',NULL,'100',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 04:03:27'),(158,11,228,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 04:05:04'),(159,11,229,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 04:07:41'),(160,11,230,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 04:09:02'),(161,11,231,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 04:10:08'),(162,11,232,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 04:12:14'),(163,11,233,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 04:13:50'),(164,11,233,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 04:14:31'),(165,11,234,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 04:16:32'),(166,11,235,'Rua Espirito Santo',NULL,'1',NULL,'de 1641/1642 a 1829/1830',NULL,'Belo Horizonte',NULL,'MG',NULL,'Brasil',NULL,'30160037',NULL,'Lourdes',NULL,'2019-05-09 04:17:25'),(167,11,236,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 04:23:45'),(168,11,237,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 04:26:07'),(169,11,238,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 04:26:58'),(170,11,239,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 04:36:57'),(171,11,240,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 04:39:31'),(172,11,241,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 04:40:20'),(173,11,242,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 04:44:20'),(174,11,243,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 04:45:05'),(175,11,244,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 04:46:07'),(176,11,244,'Rua Alvaro Ribeiro',NULL,'100',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 04:46:30'),(177,11,245,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 04:47:06'),(178,11,246,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 04:48:13'),(179,11,247,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 04:49:13'),(180,11,248,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 04:50:31'),(181,11,249,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 04:56:25'),(182,11,250,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 05:38:13'),(183,11,250,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 05:39:04'),(184,11,251,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 05:41:32'),(185,11,252,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 05:42:41'),(186,11,253,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 05:43:26'),(187,11,254,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 05:45:41'),(188,11,255,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 05:46:39'),(189,11,256,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 05:48:10'),(190,11,257,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 05:53:28'),(191,11,258,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 05:54:17'),(192,11,259,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 05:56:27'),(193,11,260,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 05:57:10'),(194,11,261,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 05:59:06'),(195,11,262,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 05:59:46'),(196,11,263,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 06:03:50'),(197,11,264,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 14:31:22'),(198,11,265,'Rua Alvaro Ribeiro',NULL,'400',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 14:43:02'),(199,11,266,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 14:49:30'),(200,11,266,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 14:50:36'),(201,11,267,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 14:57:59'),(202,11,268,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 14:59:20'),(203,11,269,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 15:00:03'),(204,11,270,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 15:01:23'),(205,11,271,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 19:14:02'),(206,11,271,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 19:14:35'),(207,11,272,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 19:15:12'),(208,11,272,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 19:15:39'),(209,11,273,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 19:16:30'),(210,11,274,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 19:20:34'),(211,11,275,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 19:20:58'),(212,11,276,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 19:21:46'),(213,11,277,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 19:23:33'),(214,11,278,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 19:24:09'),(215,11,279,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 19:25:07'),(216,11,280,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 19:25:42'),(217,11,281,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 19:26:30'),(218,11,282,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 19:27:26'),(219,11,283,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 19:28:28'),(220,11,284,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 19:29:21'),(221,11,285,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 19:30:37'),(222,11,286,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 19:32:44'),(223,11,287,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 19:35:34'),(224,11,288,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 19:37:22'),(225,11,289,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 19:38:19'),(226,11,290,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 20:49:54'),(227,11,291,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 20:51:08'),(228,11,292,'Rua Alvaro Ribeiro',NULL,'1',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 20:51:37'),(229,11,293,'Rua Alvaro Ribeiro',NULL,'13465400',NULL,'',NULL,'Americana',NULL,'SP',NULL,'Brasil',NULL,'13465400',NULL,'Vila Rehder',NULL,'2019-05-09 21:54:15'),(230,11,294,'Rua Espirito Santo','Rua Espirito Santo','1','1','de 1641/1642 a 1829/1830','de 1641/1642 a 1829/1830','Belo Horizonte','Belo Horizonte','MG','MG','Brasil',NULL,'30160037',NULL,'Lourdes','Lourdes','2019-05-10 13:23:44'),(231,11,295,'Rua Espirito Santo','Rua Espirito Santo','1','1','de 1641/1642 a 1829/1830','de 1641/1642 a 1829/1830','Belo Horizonte','Belo Horizonte','MG','MG','Brasil',NULL,'30160037',NULL,'Lourdes','Lourdes','2019-05-10 13:24:07'),(232,11,295,'Rua Espirito Santo','Rua Espirito Santo','1','1','de 1641/1642 a 1829/1830','de 1641/1642 a 1829/1830','Belo Horizonte','Belo Horizonte','MG','MG','Brasil',NULL,'30160037',NULL,'Lourdes','Lourdes','2019-05-10 13:24:23'),(233,11,295,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil',NULL,'13465400',NULL,'Vila Rehder','Vila Rehder','2019-05-10 15:10:22'),(234,11,295,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil',NULL,'13465400',NULL,'Vila Rehder','Vila Rehder','2019-05-10 15:12:42'),(235,11,295,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil',NULL,'13465400',NULL,'Vila Rehder','Vila Rehder','2019-05-10 15:15:24'),(236,11,295,'Rua Espirito Santo','Rua Espirito Santo','51','51','','','BH','BH','MG','MG','Brasil','Brasil','30160037',NULL,'Lourdes','Lourdes','2019-05-10 17:53:25'),(237,11,295,'Rua Espirito Santo','Rua Espirito Santo','51','51','','','BH','BH','MG','MG','Brasil','Brasil','30160037','30160037','Lourdes','Lourdes','2019-05-10 17:57:09'),(238,11,295,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-10 17:59:47'),(239,11,295,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-10 18:01:42'),(240,11,295,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-10 18:04:06'),(241,11,295,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-10 18:05:31'),(242,11,295,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-10 18:09:19'),(243,11,295,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-10 18:32:12'),(244,11,295,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-10 18:35:03'),(245,11,295,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-10 18:52:10'),(246,11,295,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-10 18:53:22'),(247,11,295,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-10 18:54:39'),(248,11,295,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-10 18:55:56'),(249,11,295,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-10 18:58:15'),(250,11,296,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-10 18:59:16'),(251,11,296,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-10 19:00:07'),(252,11,296,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-10 19:01:17'),(253,11,296,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-10 19:02:11'),(254,11,296,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-10 19:03:31'),(255,11,296,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-10 19:04:21'),(256,11,296,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-10 19:05:07'),(257,11,296,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-10 19:06:55'),(258,11,296,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-10 19:07:54'),(259,11,296,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','11','11','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-10 19:39:36'),(260,11,297,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-10 19:41:57'),(261,11,297,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-10 19:52:00'),(262,11,297,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','31','31','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-10 20:01:43'),(263,11,297,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-10 20:11:29'),(264,11,297,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-10 20:12:40'),(265,11,297,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','22','22','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-10 20:19:15'),(266,11,297,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','22','22','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-10 20:20:28'),(267,11,297,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-10 20:22:53'),(268,11,297,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','11','11','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-10 20:25:36'),(269,11,297,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-10 20:27:25'),(270,11,297,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-10 21:12:08'),(271,11,297,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-10 21:16:41'),(272,11,297,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-10 21:21:13'),(273,11,297,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','321','321','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-10 21:22:58'),(274,11,297,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-10 21:51:57'),(275,11,297,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','22','22','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-10 21:53:09'),(276,11,297,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-10 22:03:35'),(277,11,297,'Rua Juscelino Kubitschek de Oliveira','Rua Juscelino Kubitschek de Oliveira','111','111','até 234/235','até 234/235','Santa Bárbara D\'Oeste','Santa Bárbara D\'Oeste','SP','SP','Brasil','Brasil','13456400','13456400','Jardim AmÃ©lia','Jardim AmÃ©lia','2019-05-10 22:06:00'),(278,11,297,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-10 22:09:30'),(279,11,297,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','12121','12121','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-10 22:27:11'),(280,11,297,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-10 22:29:26'),(281,11,297,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-10 22:32:25'),(282,11,297,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-10 22:35:53'),(283,11,298,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-10 22:37:32'),(284,11,298,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-10 22:38:25'),(285,11,298,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-10 22:39:35'),(286,11,298,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-10 22:41:13'),(287,11,298,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','22','22','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-10 22:43:41'),(288,11,298,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-10 22:49:23'),(289,11,298,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-10 22:52:21'),(290,11,298,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-10 22:55:03'),(291,11,298,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','111','111','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-10 22:58:33'),(292,11,298,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-10 23:01:42'),(293,11,298,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-10 23:04:59'),(294,11,298,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-10 23:06:34'),(295,11,298,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-10 23:08:38'),(296,11,298,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-10 23:23:56'),(297,11,298,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-10 23:26:26'),(298,11,298,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','11111','11111','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-10 23:28:06'),(299,11,298,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','11111','11111','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-10 23:29:05'),(300,11,298,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','11111','11111','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 00:29:16'),(301,11,298,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','11111','11111','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 00:32:51'),(302,11,298,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','11111','11111','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 00:33:03'),(303,11,298,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','11111','11111','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 00:33:31'),(304,11,298,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','11111','11111','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 00:35:30'),(305,11,298,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','11111','11111','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 00:36:46'),(306,11,298,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','11111','11111','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 00:39:04'),(307,11,298,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','11111','11111','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 01:05:47'),(308,11,298,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','11111','11111','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 01:10:34'),(309,11,298,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','11111','11111','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 01:11:03'),(310,11,298,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','11111','11111','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 01:11:18'),(311,11,298,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','11111','11111','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 01:11:38'),(312,11,299,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','11111','11111','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 01:12:19'),(313,11,299,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','12121','12121','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 01:18:56'),(314,11,299,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','12121','12121','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 01:36:18'),(315,11,299,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','12121','12121','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 01:36:39'),(316,11,299,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','12121','12121','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 01:36:52'),(317,11,299,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 01:38:13'),(318,11,299,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 01:38:26'),(319,11,299,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1111','1111','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 01:39:27'),(320,11,299,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1111','1111','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 01:40:13'),(321,11,299,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1111','1111','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 01:42:36'),(322,11,299,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 01:46:59'),(323,11,299,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 01:50:22'),(324,11,299,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 01:50:32'),(325,11,299,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 01:50:55'),(326,11,299,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 01:51:52'),(327,11,299,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 01:53:22'),(328,11,300,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 01:55:58'),(329,11,300,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 01:58:38'),(330,11,301,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 02:02:56'),(331,11,301,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 02:05:55'),(332,11,301,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 02:08:10'),(333,11,301,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 02:10:32'),(334,11,301,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 02:11:01'),(335,11,301,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 02:11:45'),(336,11,301,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 02:11:46'),(337,11,301,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 02:12:08'),(338,11,301,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 02:12:40'),(339,11,301,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 02:12:58'),(340,11,301,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 02:14:17'),(341,11,301,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 02:29:17'),(342,11,301,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 02:30:43'),(343,11,301,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 02:31:26'),(344,11,301,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 02:35:04'),(345,11,301,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 02:38:00'),(346,11,301,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 02:39:11'),(347,11,301,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 02:47:48'),(348,11,301,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 02:54:10'),(349,11,301,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 02:56:06'),(350,11,301,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 03:04:07'),(351,11,301,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 03:05:04'),(352,11,301,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 03:06:53'),(353,11,302,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 03:07:22'),(354,11,303,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 03:14:20'),(355,11,303,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 03:16:52'),(356,11,303,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 03:17:29'),(357,11,303,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 03:20:52'),(358,11,303,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 03:21:23'),(359,11,304,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1111','1111','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 03:23:20'),(360,11,304,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1111','1111','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 03:25:44'),(361,11,304,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1111','1111','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 03:26:51'),(362,11,305,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 04:03:19'),(363,11,305,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 04:04:02'),(364,11,305,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 04:04:33'),(365,11,306,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 04:14:15'),(366,11,307,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 04:25:14'),(367,11,307,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1321','1321','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 04:27:49'),(368,11,307,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 04:29:35'),(369,11,307,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 04:29:55'),(370,11,307,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 04:30:58'),(371,11,307,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 04:31:30'),(372,11,307,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 04:31:41'),(373,11,307,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 04:31:57'),(374,11,307,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 04:33:29'),(375,11,307,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 04:33:34'),(376,11,307,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 04:34:21'),(377,11,307,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 04:35:36'),(378,11,307,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 04:37:52'),(379,11,307,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 04:38:08'),(380,11,307,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 04:42:49'),(381,11,307,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 04:47:50'),(382,11,307,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 04:48:15'),(383,11,308,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 04:50:46'),(384,11,308,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 04:51:48'),(385,11,308,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 04:52:28'),(386,11,308,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 04:52:46'),(387,11,308,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 04:53:25'),(388,11,309,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 04:55:35'),(389,11,309,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1111','1111','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 04:56:17'),(390,11,310,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','3800','3800','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 05:00:28'),(391,11,311,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','11111','11111','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 15:22:23'),(392,11,312,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 15:30:31'),(393,11,313,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','111111','111111','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 16:15:09'),(394,13,315,'Rua Espirito Santo','Rua Espirito Santo','1','1','de 1641/1642 a 1829/1830','de 1641/1642 a 1829/1830','Belo Horizonte','Belo Horizonte','MG','MG','Brasil','Brasil','30160037','30160037','Lourdes','Lourdes','2019-05-11 16:49:16'),(395,11,314,'Rua Espirito Santo','Rua Espirito Santo','11111111','11111111','de 421/422 a 699/700','de 421/422 a 699/700','Belo Horizonte','Belo Horizonte','MG','MG','Brasil','Brasil','30160031','30160031','Centro','Centro','2019-05-11 21:06:38'),(396,11,317,'Rua Espirito Santo','Rua Espirito Santo','10000','10000','de 1641/1642 a 1829/1830','de 1641/1642 a 1829/1830','Belo Horizonte','Belo Horizonte','MG','MG','Brasil','Brasil','30160037','30160037','Lourdes','Lourdes','2019-05-11 23:34:03'),(397,13,316,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','1','1','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-11 23:36:45'),(398,13,319,'Rua Alvaro Ribeiro','Rua Alvaro Ribeiro','11111','11111','','','Americana','Americana','SP','SP','Brasil','Brasil','13465400','13465400','Vila Rehder','Vila Rehder','2019-05-12 03:36:57');
/*!40000 ALTER TABLE `tb_addresses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_albuns`
--

DROP TABLE IF EXISTS `tb_albuns`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_albuns` (
  `idalbum` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) NOT NULL,
  `instatus` tinyint(4) NOT NULL DEFAULT '1',
  `inposition` tinyint(4) DEFAULT NULL,
  `inphotosize` int(11) DEFAULT NULL,
  `desalbum` varchar(128) DEFAULT NULL,
  `desdescription` text,
  `descategory` varchar(128) DEFAULT NULL,
  `desphoto` varchar(256) DEFAULT NULL,
  `desextension` varchar(4) DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idalbum`),
  KEY `fk_images_users_idx` (`iduser`),
  CONSTRAINT `fk_images_users` FOREIGN KEY (`iduser`) REFERENCES `tb_users` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_albuns`
--

LOCK TABLES `tb_albuns` WRITE;
/*!40000 ALTER TABLE `tb_albuns` DISABLE KEYS */;
INSERT INTO `tb_albuns` VALUES (14,11,0,11,NULL,'Minha 1','Minha 1',NULL,NULL,NULL,'2019-04-28 01:14:55'),(15,11,0,2,NULL,'Foto 2','foto2',NULL,NULL,NULL,'2019-04-28 17:27:13');
/*!40000 ALTER TABLE `tb_albuns` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_bestfriends`
--

DROP TABLE IF EXISTS `tb_bestfriends`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_bestfriends` (
  `idbestfriend` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) NOT NULL,
  `instatus` tinyint(4) NOT NULL DEFAULT '1',
  `inposition` tinyint(4) DEFAULT NULL,
  `desbestfriend` varchar(128) NOT NULL,
  `desdescription` text,
  `desphoto` varchar(256) DEFAULT NULL,
  `desextension` varchar(4) DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idbestfriend`),
  KEY `fk_bestfriends_users_idx` (`iduser`),
  CONSTRAINT `fk_bestfriends_users` FOREIGN KEY (`iduser`) REFERENCES `tb_users` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=423 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_bestfriends`
--

LOCK TABLES `tb_bestfriends` WRITE;
/*!40000 ALTER TABLE `tb_bestfriends` DISABLE KEYS */;
INSERT INTO `tb_bestfriends` VALUES (422,11,1,2,'MAIS UM','Nos2 conhecemos h? 2 anos enos apaixonamos e hoje finalmente chegou o grande dia de consumar a uni?o','1122422.png','png','2019-05-04 21:47:23');
/*!40000 ALTER TABLE `tb_bestfriends` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_carts`
--

DROP TABLE IF EXISTS `tb_carts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_carts` (
  `idcart` int(11) NOT NULL AUTO_INCREMENT,
  `dessessionid` varchar(64) NOT NULL,
  `iduser` int(11) NOT NULL,
  `incartstatus` tinyint(4) NOT NULL DEFAULT '0',
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idcart`),
  KEY `FK_carts_users_idx` (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=321 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_carts`
--

LOCK TABLES `tb_carts` WRITE;
/*!40000 ALTER TABLE `tb_carts` DISABLE KEYS */;
INSERT INTO `tb_carts` VALUES (314,'vfh3cas5jr4utmt8hs9pofu1p5',11,1,'2019-05-11 16:15:13'),(315,'vfh3cas5jr4utmt8hs9pofu1p5',13,1,'2019-05-11 16:36:00'),(316,'vfh3cas5jr4utmt8hs9pofu1p5',13,1,'2019-05-11 16:50:23'),(317,'vfh3cas5jr4utmt8hs9pofu1p5',11,1,'2019-05-11 21:06:43'),(318,'vfh3cas5jr4utmt8hs9pofu1p5',11,0,'2019-05-11 23:34:07'),(319,'vfh3cas5jr4utmt8hs9pofu1p5',13,1,'2019-05-11 23:36:49'),(320,'vfh3cas5jr4utmt8hs9pofu1p5',13,0,'2019-05-12 03:37:02');
/*!40000 ALTER TABLE `tb_carts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_cartsproducts`
--

DROP TABLE IF EXISTS `tb_cartsproducts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_cartsproducts` (
  `idcartproduct` int(11) NOT NULL AUTO_INCREMENT,
  `idcart` int(11) NOT NULL,
  `idproduct` int(11) NOT NULL,
  `dtremoved` datetime DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idcartproduct`)
) ENGINE=InnoDB AUTO_INCREMENT=474 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_cartsproducts`
--

LOCK TABLES `tb_cartsproducts` WRITE;
/*!40000 ALTER TABLE `tb_cartsproducts` DISABLE KEYS */;
INSERT INTO `tb_cartsproducts` VALUES (464,314,98,NULL,'2019-05-11 23:31:21'),(465,317,112,NULL,'2019-05-11 23:33:04'),(466,317,112,NULL,'2019-05-11 23:33:06'),(467,316,108,NULL,'2019-05-11 23:35:53'),(468,316,108,NULL,'2019-05-11 23:35:54'),(469,316,108,NULL,'2019-05-11 23:35:55'),(470,319,109,NULL,'2019-05-12 03:36:00'),(471,319,108,NULL,'2019-05-12 03:36:06'),(472,319,108,NULL,'2019-05-12 03:36:11'),(473,319,108,NULL,'2019-05-12 03:36:12');
/*!40000 ALTER TABLE `tb_cartsproducts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_categories`
--

DROP TABLE IF EXISTS `tb_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_categories` (
  `idcategory` int(11) NOT NULL AUTO_INCREMENT,
  `descategory` varchar(32) NOT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idcategory`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_categories`
--

LOCK TABLES `tb_categories` WRITE;
/*!40000 ALTER TABLE `tb_categories` DISABLE KEYS */;
INSERT INTO `tb_categories` VALUES (1,'Android','2017-09-21 15:18:08'),(2,'IOS','2017-09-21 15:18:15'),(3,'Samsung','2017-09-21 15:19:14');
/*!40000 ALTER TABLE `tb_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_consorts`
--

DROP TABLE IF EXISTS `tb_consorts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_consorts` (
  `idconsort` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) NOT NULL,
  `desconsort` varchar(128) DEFAULT NULL,
  `desconsortemail` varchar(128) DEFAULT NULL,
  `desconsortphoto` varchar(256) DEFAULT NULL,
  `desconsortextension` varchar(4) DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idconsort`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_consorts`
--

LOCK TABLES `tb_consorts` WRITE;
/*!40000 ALTER TABLE `tb_consorts` DISABLE KEYS */;
INSERT INTO `tb_consorts` VALUES (1,11,'Ludmiila','mila@gmail.com','0.jpg','jpg','2019-05-11 15:40:52'),(2,13,'Ana Lucia','morganaluke@gmail.com','0.jpg','jpg','2019-05-11 16:51:16');
/*!40000 ALTER TABLE `tb_consorts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_customstyle`
--

DROP TABLE IF EXISTS `tb_customstyle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_customstyle` (
  `idcustomstyle` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) NOT NULL,
  `idtemplate` int(11) NOT NULL DEFAULT '1',
  `desbanner` varchar(256) DEFAULT NULL,
  `descolorheader` varchar(10) DEFAULT NULL,
  `descolorheadertext` varchar(10) DEFAULT NULL,
  `descolorheaderhover` varchar(10) DEFAULT NULL,
  `descolorfooter` varchar(10) DEFAULT NULL,
  `descolorfootertext` varchar(10) DEFAULT NULL,
  `descolorfooterhover` varchar(10) DEFAULT NULL,
  `descolorh1` varchar(10) DEFAULT NULL,
  `desfontfamilyh1` varchar(64) DEFAULT NULL,
  `desfontsizeh1` varchar(10) DEFAULT NULL,
  `descolorh2` varchar(10) DEFAULT NULL,
  `desfontfamilyh2` varchar(64) DEFAULT NULL,
  `desfontsizeh2` varchar(10) DEFAULT NULL,
  `descolorh3` varchar(10) DEFAULT NULL,
  `desfontfamilyh3` varchar(64) DEFAULT NULL,
  `desfontsizeh3` varchar(10) DEFAULT NULL,
  `descolortext` varchar(10) DEFAULT NULL,
  `desfontfamilytext` varchar(64) DEFAULT NULL,
  `desfontsizetext` varchar(10) DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idcustomstyle`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_customstyle`
--

LOCK TABLES `tb_customstyle` WRITE;
/*!40000 ALTER TABLE `tb_customstyle` DISABLE KEYS */;
INSERT INTO `tb_customstyle` VALUES (14,11,1,'','#666667','#666667','#666667','#666667','#666667','#666667','#666667','Arial2','32','#666667','Arial2','32','#666667','Arial2','32','#666667','Arial2','32','2019-04-25 13:15:56'),(15,13,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-05-05 02:56:30');
/*!40000 ALTER TABLE `tb_customstyle` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_events`
--

DROP TABLE IF EXISTS `tb_events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_events` (
  `idevent` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) NOT NULL,
  `instatus` tinyint(4) NOT NULL DEFAULT '1',
  `desevent` varchar(128) COLLATE utf8_czech_ci NOT NULL,
  `desdescription` text COLLATE utf8_czech_ci,
  `deslocation` varchar(128) COLLATE utf8_czech_ci NOT NULL,
  `nrphone` bigint(20) DEFAULT NULL,
  `desphoto` varchar(256) COLLATE utf8_czech_ci DEFAULT NULL,
  `dtevent` datetime NOT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idevent`),
  KEY `fk_events_users_idx` (`iduser`),
  CONSTRAINT `fk_events_users` FOREIGN KEY (`iduser`) REFERENCES `tb_users` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_events`
--

LOCK TABLES `tb_events` WRITE;
/*!40000 ALTER TABLE `tb_events` DISABLE KEYS */;
INSERT INTO `tb_events` VALUES (35,11,0,'0000000000000000000','0000000000','00000000000',984050127,NULL,'2019-08-02 12:00:00','2019-05-01 00:20:40'),(37,11,1,'12121212121','12121212121','12121212121',12184050125,NULL,'0000-00-00 00:00:00','2019-05-01 00:21:56'),(38,11,2,'my event','Nos3 conhecemos há 2 anos enos apaixonamos e hoje finalmente chegou o grande dia de consumar a união','desevent',31984050127,NULL,'2020-02-02 12:30:00','2019-05-01 00:28:32'),(39,11,1,'my event','Descrição teste000000000','Avenida2 Afonso Pena, 2000000000',31999887766,NULL,'2017-06-06 18:00:00','2019-05-01 01:45:06');
/*!40000 ALTER TABLE `tb_events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_gifts`
--

DROP TABLE IF EXISTS `tb_gifts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_gifts` (
  `idgift` int(11) NOT NULL AUTO_INCREMENT,
  `desgift` varchar(128) NOT NULL,
  `incategory` tinyint(4) DEFAULT NULL,
  `vlprice` decimal(10,2) NOT NULL,
  `desphoto` varchar(256) DEFAULT NULL,
  `desextension` varchar(4) DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idgift`)
) ENGINE=InnoDB AUTO_INCREMENT=95 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_gifts`
--

LOCK TABLES `tb_gifts` WRITE;
/*!40000 ALTER TABLE `tb_gifts` DISABLE KEYS */;
INSERT INTO `tb_gifts` VALUES (1,'Adega',11,1000.00,'1.jpg','jpg','2019-05-03 01:27:00'),(2,'Adega climatizada',11,2000.00,'2.jpg','jpg','2019-05-03 01:27:00'),(3,'Cachaça Artesanal',11,200.00,'3.jpg','jpg','2019-05-03 01:27:00'),(4,'Cerveja Artesanal',11,150.00,'4.jpg','jpg','2019-05-03 01:27:00'),(5,'Champagne',11,700.00,'5.jpg','jpg','2019-05-03 01:27:00'),(6,'Champanheira de Prata',11,1500.00,'6.jpg','jpg','2019-05-03 01:27:00'),(7,'Espumante',11,500.00,'7.jpg','jpg','2019-05-03 01:27:00'),(8,'Kit Caipirinha',11,100.00,'8.jpg','jpg','2019-05-03 01:27:00'),(9,'Licor',11,250.00,'9.jpg','jpg','2019-05-03 01:27:00'),(10,'Tonel',11,900.00,'10.jpg','jpg','2019-05-03 01:27:00'),(11,'Vinho Argentino',11,350.00,'11.jpg','jpg','2019-05-03 01:27:00'),(12,'Vinho Chileno',11,300.00,'12.jpg','jpg','2019-05-03 01:27:00'),(13,'Vinho Português',11,400.00,'13.jpg','jpg','2019-05-03 01:27:00'),(14,'Whisky Black Label',11,800.00,'14.jpg','jpg','2019-05-03 01:27:00'),(15,'Whisky Red Label',11,600.00,'15.jpg','jpg','2019-05-03 01:27:00'),(16,'Cama King Size',12,100.00,'16.jpg','jpg','2019-05-03 01:27:00'),(17,'Edredom Casal',12,300.00,'17.jpg','jpg','2019-05-03 01:27:00'),(18,'Jacuzzi',12,1500.00,'18.jpg','jpg','2019-05-03 01:27:00'),(19,'Aparelho de Fondue',13,600.00,'19.jpg','jpg','2019-05-03 01:27:00'),(20,'Baixelas de Prata',13,1500.00,'20.jpg','jpg','2019-05-03 01:27:00'),(21,'Churrasqueira',13,900.00,'21.jpg','jpg','2019-05-03 01:27:00'),(22,'Cozinha Completa',13,2000.00,'22.jpg','jpg','2019-05-03 01:27:00'),(23,'Rechaud',13,300.00,'26.jpg','jpg','2019-05-03 01:27:00'),(24,'Taças de Cristal',13,500.00,'27.jpg','jpg','2019-05-03 01:27:00'),(25,'Ar-Condicionado',14,1000.00,'28.jpg','jpg','2019-05-03 01:27:00'),(26,'Aspirador de Pó',14,300.00,'29.jpg','jpg','2019-05-03 01:27:00'),(27,'Cafeteira',14,200.00,'30.jpg','jpg','2019-05-03 01:27:00'),(28,'Cafeteira Expresso',14,450.00,'31.jpg','jpg','2019-05-03 01:27:00'),(29,'Fogão',14,800.00,'32.jpg','jpg','2019-05-03 01:27:00'),(30,'Freezer',14,1400.00,'33.png','png','2019-05-03 01:27:00'),(31,'Frigobar',14,1800.00,'34.jpg','jpg','2019-05-03 01:27:00'),(32,'Juicer',14,250.00,'35.jpg','jpg','2019-05-03 01:27:00'),(33,'Lava-Louças',14,1200.00,'36.jpg','jpg','2019-05-03 01:27:00'),(34,'Lavadora',14,1600.00,'37.jpg','jpg','2019-05-03 01:27:00'),(35,'Liquididicador',14,100.00,'38.jpg','jpg','2019-05-03 01:27:00'),(36,'Microondas',14,500.00,'39.png','png','2019-05-03 01:27:00'),(37,'Panela Elétrica',14,350.00,'40.png','png','2019-05-03 01:27:00'),(38,'Panificadora Doméstica',14,700.00,'41.jpg','jpg','2019-05-03 01:27:00'),(39,'Pipoqueira',14,150.00,'42.jpg','jpg','2019-05-03 01:27:00'),(40,'Refrigerador Frost Free',14,2000.00,'43.jpg','jpg','2019-05-03 01:27:00'),(41,'Blu-Ray 3D',15,500.00,'44.jpg','jpg','2019-05-03 01:27:00'),(42,'Câmera Profissional',15,800.00,'45.jpg','jpg','2019-05-03 01:27:00'),(43,'Celular',15,1100.00,'46.jpg','jpg','2019-05-03 01:27:00'),(44,'Climatizador',15,600.00,'47.png','png','2019-05-03 01:27:00'),(45,'Drone',15,1300.00,'48.jpg','jpg','2019-05-03 01:27:00'),(46,'DVD Player Portátil',15,250.00,'49.jpg','jpg','2019-05-03 01:27:00'),(47,'Home Teather',15,1600.00,'50.jpg','jpg','2019-05-03 01:27:00'),(48,'Impressora',15,400.00,'51.jpg','jpg','2019-05-03 01:27:00'),(49,'Impressora 3D',15,900.00,'52.jpg','jpg','2019-05-03 01:27:00'),(50,'iPod',15,450.00,'53.jpg','jpg','2019-05-03 01:27:00'),(51,'Micro System MP3',15,200.00,'54.jpg','jpg','2019-05-03 01:27:00'),(52,'MP3 Player',15,150.00,'55.jpg','jpg','2019-05-03 01:27:00'),(53,'MP5 Player',15,300.00,'56.jpg','jpg','2019-05-03 01:27:00'),(54,'Notebook',15,1200.00,'57.jpg','jpg','2019-05-03 01:27:00'),(55,'Playstation 4',15,900.00,'58.jpg','jpg','2019-05-03 01:27:00'),(56,'Smart TV LED',15,2000.00,'59.jpg','jpg','2019-05-03 01:27:00'),(57,'Toca-discos de Vinil',15,350.00,'60.jpg','jpg','2019-05-03 01:27:00'),(58,'TV 4K',15,1800.00,'61.jpg','jpg','2019-05-03 01:27:00'),(59,'TV de Plasma',15,1500.00,'62.jpg','jpg','2019-05-03 01:27:00'),(60,'TV Tela Plana',15,700.00,'63.png','png','2019-05-03 01:27:00'),(61,'Ventilador',15,100.00,'64.jpg','jpg','2019-05-03 01:27:00'),(62,'Xbox 360 Arcade',15,1000.00,'65.jpg','jpg','2019-05-03 01:27:00'),(63,'Diárias do Hotel',16,1700.00,'66.jpg','jpg','2019-05-03 01:27:00'),(64,'Ingressos para o Cirque Du Soleil',16,800.00,'67.jpg','jpg','2019-05-03 01:27:00'),(65,'Ingressos para Show',16,400.00,'68.jpg','jpg','2019-05-03 01:27:00'),(66,'Ingressos pra assistir seu time favorito na Europa',16,1400.00,'69.jpg','jpg','2019-05-03 01:27:00'),(67,'Jantar romântico',16,350.00,'70.jpg','jpg','2019-05-03 01:27:00'),(68,'Malas para viajar',16,900.00,'71.jpg','jpg','2019-05-03 01:27:00'),(69,'Mergulho com os golfinhos',16,150.00,'72.jpg','jpg','2019-05-03 01:27:00'),(70,'Mergulho nas cachoeiras',16,200.00,'73.jpg','jpg','2019-05-03 01:27:00'),(71,'Passagens áreas',16,2000.00,'74.jpg','jpg','2019-05-03 01:27:00'),(72,'Passeio de helicóptero',16,700.00,'75.jpg','jpg','2019-05-03 01:27:00'),(73,'Passeio de Jet Ski',16,500.00,'76.jpg','jpg','2019-05-03 01:27:00'),(74,'Passeio de Lancha',16,250.00,'77.jpg','jpg','2019-05-03 01:27:00'),(75,'Passeio de limousine',16,600.00,'78.jpg','jpg','2019-05-03 01:27:00'),(76,'Passeio Ecológico',16,100.00,'79.jpg','jpg','2019-05-03 01:27:00'),(77,'Snorkeling com as tartarugas',16,300.00,'80.jpg','jpg','2019-05-03 01:27:00'),(78,'Uma semana de Cruzeiro marítimo',16,1500.00,'81.jpg','jpg','2019-05-03 01:27:00'),(79,'Viagem a Fernando de Noronha',16,1100.00,'82.jpg','jpg','2019-05-03 01:27:00'),(80,'Viagem para Argentina',16,1000.00,'83.jpg','jpg','2019-05-03 01:27:00'),(81,'Viagem para Europa',16,1900.00,'84.jpg','jpg','2019-05-03 01:27:00'),(82,'Viagem para Nova York',16,1800.00,'85.jpg','jpg','2019-05-03 01:27:00'),(83,'Viagem pela Amazônia',16,1200.00,'86.jpg','jpg','2019-05-03 01:27:00'),(84,'Viagem pela América Latina',16,1600.00,'87.jpg','jpg','2019-05-03 01:27:00'),(85,'Visita às praias do Nordeste',16,1300.00,'88.jpg','jpg','2019-05-03 01:27:00'),(86,'Cadeiras',17,100.00,'89.jpg','jpg','2019-05-03 01:27:00'),(87,'Closet',17,2000.00,'90.jpg','jpg','2019-05-03 01:27:00'),(88,'Mesa de Jantar',17,400.00,'91.jpg','jpg','2019-05-03 01:27:00'),(89,'Mesa de sinuca',17,1000.00,'92.jpg','jpg','2019-05-03 01:27:00'),(90,'Mesa escritório',17,800.00,'93.jpg','jpg','2019-05-03 01:27:00'),(91,'Poltrona',17,300.00,'94.jpg','jpg','2019-05-03 01:27:00'),(92,'Rack',17,200.00,'95.jpg','jpg','2019-05-03 01:27:00'),(93,'Sapateira',17,500.00,'96.jpg','jpg','2019-05-03 01:27:00'),(94,'Sofá',17,1500.00,'97.jpg','jpg','2019-05-03 01:27:00');
/*!40000 ALTER TABLE `tb_gifts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_initialpages`
--

DROP TABLE IF EXISTS `tb_initialpages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_initialpages` (
  `idinitialpage` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `inparty` tinyint(4) DEFAULT NULL,
  `inbestfriends` tinyint(4) DEFAULT NULL,
  `instore` tinyint(4) DEFAULT NULL,
  `inalbum` tinyint(4) DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idinitialpage`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_initialpages`
--

LOCK TABLES `tb_initialpages` WRITE;
/*!40000 ALTER TABLE `tb_initialpages` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_initialpages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_menus`
--

DROP TABLE IF EXISTS `tb_menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_menus` (
  `idmenu` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) NOT NULL,
  `inwedding` tinyint(4) DEFAULT NULL,
  `inparty` tinyint(4) DEFAULT NULL,
  `inbestfriends` tinyint(4) DEFAULT NULL,
  `inrsvp` tinyint(4) DEFAULT NULL,
  `inmessages` tinyint(4) DEFAULT NULL,
  `instore` tinyint(4) DEFAULT NULL,
  `inevents` tinyint(4) DEFAULT NULL,
  `inalbum` tinyint(4) DEFAULT NULL,
  `invideos` tinyint(4) DEFAULT NULL,
  `instakeholders` tinyint(4) DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idmenu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_menus`
--

LOCK TABLES `tb_menus` WRITE;
/*!40000 ALTER TABLE `tb_menus` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_menus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_messages`
--

DROP TABLE IF EXISTS `tb_messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_messages` (
  `idmessage` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) NOT NULL,
  `instatus` tinyint(4) NOT NULL DEFAULT '0',
  `desmessage` varchar(128) NOT NULL,
  `desemail` varchar(128) DEFAULT NULL,
  `desdescription` text NOT NULL,
  `desreply` text,
  `dtmessage` datetime NOT NULL,
  `dtreply` datetime DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idmessage`),
  KEY `fk_messages_users_idx` (`iduser`),
  CONSTRAINT `fk_messages_users` FOREIGN KEY (`iduser`) REFERENCES `tb_users` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_messages`
--

LOCK TABLES `tb_messages` WRITE;
/*!40000 ALTER TABLE `tb_messages` DISABLE KEYS */;
INSERT INTO `tb_messages` VALUES (13,11,0,'Pedro Coimbra','coimbra@gmail.com','Felicitações amigo! Tudo de bom','Obrigado!!! fique com Deus vc e tio XXXxxx','2019-12-25 23:59:59','2020-02-24 18:25:00','2019-04-27 16:25:56');
/*!40000 ALTER TABLE `tb_messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_orders`
--

DROP TABLE IF EXISTS `tb_orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_orders` (
  `idorder` int(11) NOT NULL AUTO_INCREMENT,
  `idcart` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idstatus` int(11) NOT NULL,
  `idaddress` int(11) NOT NULL,
  `vltotal` decimal(10,2) NOT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idorder`),
  KEY `FK_orders_users_idx` (`iduser`),
  KEY `fk_orders_ordersstatus_idx` (`idstatus`),
  KEY `fk_orders_carts_idx` (`idcart`),
  KEY `fk_orders_addresses_idx` (`idaddress`),
  CONSTRAINT `fk_orders_addresses` FOREIGN KEY (`idaddress`) REFERENCES `tb_addresses` (`idaddress`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_orders_carts` FOREIGN KEY (`idcart`) REFERENCES `tb_carts` (`idcart`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_orders_ordersstatus` FOREIGN KEY (`idstatus`) REFERENCES `tb_ordersstatus` (`idstatus`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_orders_users` FOREIGN KEY (`iduser`) REFERENCES `tb_users` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=313 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_orders`
--

LOCK TABLES `tb_orders` WRITE;
/*!40000 ALTER TABLE `tb_orders` DISABLE KEYS */;
INSERT INTO `tb_orders` VALUES (308,315,13,1,394,2500.00,'2019-05-11 16:49:16'),(309,314,11,1,395,10801.50,'2019-05-11 21:06:38'),(310,317,11,1,396,10000.00,'2019-05-11 23:34:03'),(311,316,13,1,397,3000.00,'2019-05-11 23:36:45'),(312,319,13,1,398,5000.00,'2019-05-12 03:36:57');
/*!40000 ALTER TABLE `tb_orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_ordersstatus`
--

DROP TABLE IF EXISTS `tb_ordersstatus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_ordersstatus` (
  `idstatus` int(11) NOT NULL AUTO_INCREMENT,
  `desstatus` varchar(32) NOT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idstatus`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_ordersstatus`
--

LOCK TABLES `tb_ordersstatus` WRITE;
/*!40000 ALTER TABLE `tb_ordersstatus` DISABLE KEYS */;
INSERT INTO `tb_ordersstatus` VALUES (1,'Aguardando pagamento','2017-09-29 14:49:51'),(2,'Em análise','2017-09-29 14:49:51'),(3,'Paga','2017-09-29 14:49:51'),(4,'Disponível','2017-09-29 14:49:51'),(5,'Em disputa','2017-09-29 14:49:51'),(6,'Devolvida','2017-09-29 14:49:51'),(7,'Cancelada','2017-09-29 14:49:51');
/*!40000 ALTER TABLE `tb_ordersstatus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_parties`
--

DROP TABLE IF EXISTS `tb_parties`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_parties` (
  `idparty` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) NOT NULL,
  `instatus` tinyint(4) DEFAULT NULL,
  `despartydescription` text,
  `despartylocation` varchar(128) DEFAULT NULL,
  `despartyphoto` varchar(256) DEFAULT NULL,
  `dtparty` datetime DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idparty`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_parties`
--

LOCK TABLES `tb_parties` WRITE;
/*!40000 ALTER TABLE `tb_parties` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_parties` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_payments`
--

DROP TABLE IF EXISTS `tb_payments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_payments` (
  `idpayment` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idorder` int(11) NOT NULL,
  `descustomercode` varchar(22) DEFAULT NULL,
  `descardcode` varchar(22) DEFAULT NULL,
  `desordercode` varchar(22) DEFAULT NULL,
  `despaymentcode` varchar(22) DEFAULT NULL,
  `desname` varchar(128) DEFAULT NULL,
  `desholdername` varchar(64) DEFAULT NULL,
  `desemail` varchar(128) DEFAULT NULL,
  `intypedocument` tinyint(4) DEFAULT '0',
  `desdocument` varchar(14) DEFAULT NULL,
  `desholderdocument` varchar(14) DEFAULT NULL,
  `nrphone` bigint(20) DEFAULT NULL,
  `nrholderphone` bigint(20) DEFAULT NULL,
  `dtbirth` date DEFAULT NULL,
  `dtholderbirth` date DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idpayment`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_payments`
--

LOCK TABLES `tb_payments` WRITE;
/*!40000 ALTER TABLE `tb_payments` DISABLE KEYS */;
INSERT INTO `tb_payments` VALUES (1,11,299,'CUS-0PUAKSGXXLI2','CRC-YHDOPUXY7HWZ','ORD-MG3HLPT04YXY','PAY-6X9KXTYWYOED','Paulo teste 19.58','JOSE PC','p@p.com',0,'01224202686','01224202686',31123451234,31123451234,'1980-02-23','1980-02-23','2019-05-10 22:58:37'),(2,11,298,'CUS-P9VM9YRFNKKC','CRC-UW8CMFQJ9VNO','ORD-DWX6VSR38GSW','PAY-9WZCIWJ4RTJS','Teste 20.06','JOSE PC','p@p.com',NULL,'01224202686','01224202686',31123451324,31123451324,'1980-02-23','1980-02-23','2019-05-10 23:06:38'),(3,11,298,'CUS-HNV216XN3501','CRC-HWR2FLTVQIKN','ORD-UORN3AETHFBT','PAY-1AOZQP48N80N','Paulo','JHOSE PC','p@p.com',0,'01224202686','01224202686',31987450252,31987450252,'1980-02-23','1980-02-23','2019-05-10 23:08:42'),(4,11,298,'CUS-HIHVAP1K7KSI','CRC-7GMT03TZCQNG','ORD-YPXFG2KTAYCU','PAY-UX8J02WQC03X','Teste','JOSE P','p@p.com',0,'01224202686','01224202686',31123451234,31123451234,'1980-02-23','1980-02-23','2019-05-11 00:35:35'),(5,11,298,'CUS-34TFZ7I0FZDD','CRC-ZXKM7G3FRZC1','ORD-ONRX54AUN113','PAY-0ZR4LTWV84ZZ','Teste','JOSE P','p@p.com',0,'01224202686','01224202686',31123451234,31123451234,'1980-02-23','1980-02-23','2019-05-11 00:39:09'),(6,11,298,'CUS-FEDDHHTQQ0L3','CRC-BY0YTBNUMDPD','ORD-X1G1ZO45X3RE','PAY-5KXGABJST7DQ','Teste','JOSE P','p@p.com',0,'01224202686','01224202686',31123451234,31123451234,'1980-02-23','1980-02-23','2019-05-11 01:10:39'),(7,11,298,'CUS-Q3QOL9RCQ43Q','CRC-AP7B68QM457T','ORD-5DFIBFSSAXXR','PAY-2A6A5TNL9VE9','Teste','JOSE P','p@p.com',0,'01224202686','01224202686',31123451234,31123451234,'1980-02-23','1980-02-23','2019-05-11 01:11:08'),(8,11,298,'CUS-PK8OJSLQ6ZYJ','CRC-ZCZ0U01HCPXK','ORD-8HZAEEQA0I7Q','PAY-JR8CTU9KO08D','Teste','JOSE P','p@p.com',0,'01224202686','01224202686',31123451234,31123451234,'1980-02-23','1980-02-23','2019-05-11 01:11:23'),(9,11,298,'CUS-RQG2ZNU6DI3T','CRC-BPFJZR4ZB2VK','ORD-2LZTQLSJZGQ5','PAY-JMMUP99D4ELT','Teste','JOSE P','p@p.com',0,'01224202686','01224202686',31123451234,31123451234,'1980-02-23','1980-02-23','2019-05-11 01:11:45'),(10,11,301,'CUS-1YIE87XCH7VU','CRC-J2HUDRP5VWFX','ORD-LK7W3E5RYC59','PAY-7UVIMBXCIJFD','Paulo Carvalho','Paulo Carvalho','p@gmail.com',0,'01224202686','01224202686',31123451234,31123451234,'1980-02-23','1980-02-23','2019-05-11 03:05:09'),(11,11,301,'CUS-9UB6LJE4FYHE','CRC-CAHHWHTLS9P0','ORD-HXCGEYUTFHYP','PAY-5UUGOKN6DMMX','Paulo Carvalho','Paulo Carvalho','p@gmail.com',0,'01224202686','01224202686',31123451234,31123451234,'1980-02-23','1980-02-23','2019-05-11 03:06:58'),(12,11,274,'CUS-CBFZRJJRS8VE','CRC-55CC13SHN0R7','ORD-NKR3PJ3AQJYH','PAY-DUZIIQPBWJUT','Paulo C','Paulo C','p@p.com',0,'01224202686','01224202686',31123451324,31123451324,'1980-02-23','1980-02-23','2019-05-11 03:26:55'),(13,11,305,'CUS-RJKG34TB83RZ','CRC-KODN1Y83497Z','ORD-8GHDIYUC24QW','PAY-ICO2PXJ5L7Y9','Pedro Rocha','Pedro Rocha','p@gmail',0,'01224202686','01224202686',31132451324,31132451324,'2000-02-02','2000-02-02','2019-05-11 04:04:06'),(14,11,305,'CUS-XZGT1AKS69JD','CRC-N2ZYS91E55O8','ORD-HALH0V3VFACR','PAY-A6NCJIQBMHI0','Pedro Rocha','Pedro Rocha','p@gmail',0,'01224202686','01224202686',31132451324,31132451324,'2000-02-02','2000-02-02','2019-05-11 04:04:37'),(15,11,278,'CUS-E6JLG9CZHOE4','CRC-Q7AA7Q9NZLCJ','ORD-UYF4GMV4066T','PAY-5OORI55AE6L9','Paulo teste','Paulo teste','p@p.com',0,'01224202686','01224202686',31132451234,31132451234,'1980-02-23','1980-02-23','2019-05-11 04:14:19'),(16,11,297,'CUS-A2KOSDLBSBG8','CRC-EAMBPOV3LMHH','ORD-R80AJS8BYSXV','PAY-K8K0IEVUYUHT','Paulo','Paulo','p@p.com',0,'01224202686','01224202686',13321451234,13321451234,'0980-02-23','0980-02-23','2019-05-11 04:48:20'),(17,11,301,'CUS-ISY3D4HT3DW7','CRC-Q4EWCP9M0F1V','ORD-TN4O46H2YPRR','PAY-FPLUCARYGWAJ','POaulo','POaulo','po@p.com',0,'01224202686','01224202686',31123451324,31123451324,'1980-02-23','1980-02-23','2019-05-11 04:52:51'),(18,11,302,'CUS-2RETY804WB05','CRC-8GW6NKCYAHIK','ORD-E2RT43V9KMTR','PAY-7NJBNUS38ZFN','POaulo','POaulo','po@p.com',0,'01224202686','01224202686',31123451324,31123451324,'1980-02-23','1980-02-23','2019-05-11 04:53:29'),(19,11,303,'CUS-GI4865FIGV80','CRC-YO1OK8BF6UV2','ORD-FFWDV27HI4VB','PAY-JRZFKPA7OMX5','Paulo','Paulo','p@gmail.com',0,'01224202686','01224202686',31123451234,31123451234,'1980-02-23','1980-02-23','2019-05-11 04:56:21'),(20,11,304,'CUS-NO2ZCHYWXEN7','CRC-ANIUQLBQ0325','ORD-HM2PI35E3VX4','PAY-ANNG5B8W2UJP','Paulo 3800','Paulo 3800','p3800@gmail.com',0,'01224202686','01224202686',31123451234,31123451234,'1980-02-23','1980-02-23','2019-05-11 05:00:32'),(21,11,305,'CUS-7N6C31LER6N0','CRC-67B0QMQEJ8VH','ORD-0DM56T86DZER','PAY-PCQITG1NCJ0U','Paulo Teste 1221','Paulo Teste 1221','teste1221@gmail.com',0,'01224202686','01224202686',31123451234,31123451234,'1980-02-23','1980-02-23','2019-05-11 15:22:27'),(22,11,306,'CUS-WH60GPBE6F3Y','CRC-ZZR1DKWMYQCO','ORD-UL7DGGT99BNU','PAY-EGXYXA8UJVJ5','PAULO TESTE 1229','PAULO TESTE 1229','1229@gmail.com',0,'01224202686','01224202686',31123412341,31123412341,'1980-02-23','1980-02-23','2019-05-11 15:30:36'),(23,11,307,'CUS-AIS39G5KHKWK','CRC-YMXCKKNU88ZE','ORD-QIBRWAA780WB','PAY-9IBPGJA5SKFS','Paulo Roberto Cambraia','Paulo Roberto Cambraia','pauloroberto@gmail.com',0,'01224202686','01224202686',31932229822,31932229822,'1951-04-19','1951-04-19','2019-05-11 16:15:13'),(24,13,308,'CUS-YVFRL94W0JS1','CRC-DOVOP3XOBD17','ORD-I018EII8575D','PAY-9WMNI47RFAYI','Pwsecvendas','Pwsecvendas','pwsecvendas@gmail.com',0,'01224202686','01224202686',31123451234,31123451234,'1980-01-01','1980-01-01','2019-05-11 16:49:20'),(25,11,309,'CUS-J3QFX4H5J2MW','CRC-TPZFK0ZFZZH1','ORD-2RFF2VKA1G1Q','PAY-R4I3ARQBHT3H','Maria Ap','Maria Ap','mariacam@gmail.com',0,'01224202686','01224202686',31123451234,31123451234,'1952-02-21','1952-02-21','2019-05-11 21:06:43'),(26,11,310,'CUS-YJQK6ZO7UGJN','CRC-UHZ04P3XTSXP','ORD-NXAXB57FNT8G','PAY-WVZKPJJQ5FIL','Teste 2033','Teste 2033','2033@gmail.com',0,'01224202686','01224202686',12123451234,12123451234,'2000-01-01','2000-01-01','2019-05-11 23:34:07'),(27,13,311,'CUS-QHY34S78GM00','CRC-W5RBJ5HBA78D','ORD-26KM6UTAL0TX','PAY-VFJ8NNRY7JZ9','Teste 2036','Teste 2036','2036@gmail.com',0,'01224202686','01224202686',31123451234,31123451234,'2000-01-01','2000-01-01','2019-05-11 23:36:49'),(28,13,312,'CUS-M1216J8GYOYS','CRC-DKMT88ZBR5DM','ORD-A25JHNUG8SN1','PAY-RDB7ILXK8FMT','Paulo d Carvalho','Paulo d Carvalho','paulo@gmail.com',0,'01224202686','01224202686',31123451234,31123451234,'1980-02-23','1980-02-23','2019-05-12 03:37:01');
/*!40000 ALTER TABLE `tb_payments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_persons`
--

DROP TABLE IF EXISTS `tb_persons`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_persons` (
  `idperson` int(11) NOT NULL AUTO_INCREMENT,
  `desperson` varchar(128) NOT NULL,
  `desemail` varchar(128) DEFAULT NULL,
  `nrphone` bigint(20) DEFAULT NULL,
  `desphoto` varchar(256) DEFAULT NULL,
  `desextension` varchar(4) DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idperson`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_persons`
--

LOCK TABLES `tb_persons` WRITE;
/*!40000 ALTER TABLE `tb_persons` DISABLE KEYS */;
INSERT INTO `tb_persons` VALUES (11,'Jose Paulo de Carvalho','paulowebphp@gmail.com',31984050000,'0.jpg','jpg','2019-04-24 16:59:04'),(12,'Paulo de Carvalho','pwsecvendas@gmail.com',31984050125,'0.jpg','jpg','2019-05-02 20:28:12'),(13,'Maria Aparecida','macambraia@hotmail.com',NULL,'0.jpg','jpg','2019-05-12 22:43:30'),(14,'Maria Aparecida','macambraia@hotmail.com',NULL,'0.jpg','jpg','2019-05-12 22:46:23'),(15,'Maria Aparecida','macambraia@hotmail.com',NULL,'0.jpg','jpg','2019-05-12 22:47:32'),(16,'Maria Aparecida','macambraia@hotmail.com',NULL,'0.jpg','jpg','2019-05-12 22:50:19'),(17,'Maria Aparecida','macambraia@hotmail.com',NULL,'0.jpg','jpg','2019-05-12 23:20:09'),(18,'Maria Apa','macambraia@hotmail.com',NULL,'0.jpg','jpg','2019-05-12 23:21:09'),(19,'Maria Ap','macambraia@hotmail.com',NULL,'0.jpg','jpg','2019-05-12 23:22:26'),(20,'Maria Aparecida','macambraia@hotmail.com',NULL,'0.jpg','jpg','2019-05-12 23:23:12'),(21,'Maria Aparecida','macambraia@hotmail.com',NULL,'0.jpg','jpg','2019-05-12 23:24:11'),(22,'Maria Ap','macambraia@hotmail.com',NULL,'0.jpg','jpg','2019-05-12 23:31:24');
/*!40000 ALTER TABLE `tb_persons` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_plans`
--

DROP TABLE IF EXISTS `tb_plans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_plans` (
  `idplan` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) NOT NULL,
  `idplanaddress` int(11) NOT NULL,
  `idstatus` tinyint(4) NOT NULL,
  `inplan` int(3) NOT NULL,
  `inmigration` tinyint(4) NOT NULL,
  `inperiod` tinyint(2) NOT NULL,
  `vlprice` decimal(10,2) NOT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idplan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_plans`
--

LOCK TABLES `tb_plans` WRITE;
/*!40000 ALTER TABLE `tb_plans` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_plans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_plansaddresses`
--

DROP TABLE IF EXISTS `tb_plansaddresses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_plansaddresses` (
  `idplanaddress` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) NOT NULL,
  `idorder` int(11) NOT NULL,
  `desaddress` varchar(128) NOT NULL,
  `desholderaddress` varchar(128) DEFAULT NULL,
  `desnumber` varchar(16) NOT NULL,
  `desholdernumber` varchar(16) DEFAULT NULL,
  `descomplement` varchar(32) NOT NULL,
  `desholdercomplement` varchar(32) DEFAULT NULL,
  `descity` varchar(32) NOT NULL,
  `desholdercity` varchar(32) DEFAULT NULL,
  `desstate` varchar(32) NOT NULL,
  `desholderstate` varchar(32) DEFAULT NULL,
  `descountry` varchar(32) NOT NULL,
  `desholdercountry` varchar(32) DEFAULT NULL,
  `deszipcode` char(8) NOT NULL,
  `desholderzipcode` char(8) DEFAULT NULL,
  `desdistrict` varchar(32) NOT NULL,
  `desholderdistrict` varchar(32) DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idplanaddress`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_plansaddresses`
--

LOCK TABLES `tb_plansaddresses` WRITE;
/*!40000 ALTER TABLE `tb_plansaddresses` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_plansaddresses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_planspayments`
--

DROP TABLE IF EXISTS `tb_planspayments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_planspayments` (
  `idplanpayment` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) NOT NULL,
  `idplan` varchar(22) NOT NULL,
  `descustomercode` varchar(22) DEFAULT NULL,
  `descardcode` varchar(22) DEFAULT NULL,
  `desordercode` varchar(22) DEFAULT NULL,
  `despaymentcode` varchar(22) DEFAULT NULL,
  `desname` varchar(128) DEFAULT NULL,
  `desholdername` varchar(64) DEFAULT NULL,
  `desemail` varchar(128) DEFAULT NULL,
  `intypedocument` tinyint(4) DEFAULT '0',
  `desdocument` varchar(4) DEFAULT NULL,
  `desholderdocument` varchar(4) DEFAULT NULL,
  `nrphone` bigint(20) DEFAULT NULL,
  `nrholderpohne` bigint(20) DEFAULT NULL,
  `dtbirth` date DEFAULT NULL,
  `dtholderbirth` date DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idplanpayment`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_planspayments`
--

LOCK TABLES `tb_planspayments` WRITE;
/*!40000 ALTER TABLE `tb_planspayments` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_planspayments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_products`
--

DROP TABLE IF EXISTS `tb_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_products` (
  `idproduct` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) DEFAULT NULL,
  `inbought` tinyint(4) DEFAULT NULL,
  `incategory` tinyint(4) DEFAULT NULL,
  `desproduct` varchar(64) NOT NULL,
  `vlprice` decimal(10,2) DEFAULT NULL,
  `vlwidth` decimal(10,2) DEFAULT NULL,
  `vlheight` decimal(10,2) DEFAULT NULL,
  `vllength` decimal(10,2) DEFAULT NULL,
  `vlweight` decimal(10,2) DEFAULT NULL,
  `desphoto` varchar(256) DEFAULT NULL,
  `desextension` varchar(4) DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idproduct`)
) ENGINE=InnoDB AUTO_INCREMENT=113 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_products`
--

LOCK TABLES `tb_products` WRITE;
/*!40000 ALTER TABLE `tb_products` DISABLE KEYS */;
INSERT INTO `tb_products` VALUES (101,13,NULL,11,'Tonel',900.00,NULL,NULL,NULL,NULL,'1311101.jpg','jpg','2019-05-05 02:54:21'),(102,13,NULL,11,'Licor',250.00,NULL,NULL,NULL,NULL,'1311102.jpg','jpg','2019-05-05 02:54:28'),(104,13,NULL,11,'Cacha?a Artesanal',200.00,NULL,NULL,NULL,NULL,'1311104.jpg','jpg','2019-05-07 00:58:36'),(105,11,NULL,11,'Espumante',500.00,NULL,NULL,NULL,NULL,'1111105.jpg','jpg','2019-05-11 04:23:10'),(106,11,NULL,16,'Passeio de helic?ptero',700.00,NULL,NULL,NULL,NULL,'1111106.jpg','jpg','2019-05-11 04:23:18'),(107,13,0,11,'Mestre Yoda',800.00,NULL,NULL,NULL,NULL,'1311107.jpg','jpg','2019-05-11 21:00:07'),(108,13,NULL,15,'Xbox 360 Arcade',1000.00,NULL,NULL,NULL,NULL,'1311108.jpg','jpg','2019-05-11 21:00:39'),(109,13,0,15,'Notebook para Devs',2000.00,NULL,NULL,NULL,NULL,'1311109.jpg','jpg','2019-05-11 21:00:54'),(110,11,0,11,'Mestre Yoda',500.50,NULL,NULL,NULL,NULL,'1111110.jpg','jpg','2019-05-11 21:02:26'),(111,11,NULL,16,'Viagem para Nova York',1800.00,NULL,NULL,NULL,NULL,'1111111.jpg','jpg','2019-05-11 21:02:51'),(112,11,0,16,'Uma semana de Cruzeiro maritimo',5000.00,NULL,NULL,NULL,NULL,'1111112.jpg','jpg','2019-05-11 21:03:23');
/*!40000 ALTER TABLE `tb_products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_productscategories`
--

DROP TABLE IF EXISTS `tb_productscategories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_productscategories` (
  `idcategory` int(11) NOT NULL,
  `idproduct` int(11) NOT NULL,
  PRIMARY KEY (`idcategory`,`idproduct`),
  KEY `fk_productscategories_products_idx` (`idproduct`),
  CONSTRAINT `fk_productscategories_categories` FOREIGN KEY (`idcategory`) REFERENCES `tb_categories` (`idcategory`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_productscategories_products` FOREIGN KEY (`idproduct`) REFERENCES `tb_products` (`idproduct`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_productscategories`
--

LOCK TABLES `tb_productscategories` WRITE;
/*!40000 ALTER TABLE `tb_productscategories` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_productscategories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_rsvp`
--

DROP TABLE IF EXISTS `tb_rsvp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_rsvp` (
  `idrsvp` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) NOT NULL,
  `desname` varchar(128) NOT NULL,
  `desemail` varchar(128) DEFAULT NULL,
  `nrphone` bigint(20) DEFAULT NULL,
  `instatus` tinyint(4) NOT NULL DEFAULT '0',
  `inconfirmed` tinyint(4) DEFAULT NULL,
  `inmaxadults` tinyint(4) DEFAULT NULL,
  `inadultsconfirmed` tinyint(4) DEFAULT NULL,
  `inmaxchildren` tinyint(4) DEFAULT NULL,
  `inchildrenconfirmed` tinyint(4) DEFAULT NULL,
  `dtconfirmed` datetime DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idrsvp`),
  KEY `fk_rsvp_users_idx` (`iduser`),
  CONSTRAINT `fk_rsvp_users` FOREIGN KEY (`iduser`) REFERENCES `tb_users` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_rsvp`
--

LOCK TABLES `tb_rsvp` WRITE;
/*!40000 ALTER TABLE `tb_rsvp` DISABLE KEYS */;
INSERT INTO `tb_rsvp` VALUES (11,11,'24João24 Vicente Dornas','242424@hotmail.com',24998882424,2,0,24,NULL,24,NULL,NULL,'2019-04-27 14:45:32'),(12,11,'Mais um ','paulo@gmail.com',31984050129,1,NULL,1,NULL,10,NULL,NULL,'2019-04-27 15:00:55'),(13,11,'Maria do Rosário','rosario@rosario.com',29888887777,0,NULL,10,NULL,1,NULL,NULL,'2019-04-27 15:01:06'),(15,11,'55555555555555','55555555555555',12123451234,5,NULL,15,NULL,5,NULL,NULL,'2019-05-01 01:19:04');
/*!40000 ALTER TABLE `tb_rsvp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_stakeholders`
--

DROP TABLE IF EXISTS `tb_stakeholders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_stakeholders` (
  `idstakeholder` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) NOT NULL,
  `instatus` tinyint(4) NOT NULL DEFAULT '1',
  `inposition` tinyint(4) DEFAULT NULL,
  `desstakeholder` varchar(128) NOT NULL,
  `desdescription` text,
  `descategory` varchar(128) DEFAULT NULL,
  `deslocation` varchar(128) DEFAULT NULL,
  `desemail` varchar(128) NOT NULL,
  `dessite` varchar(128) NOT NULL,
  `nrphone` bigint(20) DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idstakeholder`),
  KEY `fk_stakeholders_users_idx` (`iduser`),
  CONSTRAINT `fk_stakeholders_users` FOREIGN KEY (`iduser`) REFERENCES `tb_users` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_stakeholders`
--

LOCK TABLES `tb_stakeholders` WRITE;
/*!40000 ALTER TABLE `tb_stakeholders` DISABLE KEYS */;
INSERT INTO `tb_stakeholders` VALUES (11,11,2,2,'Junior Fotografo','Esse2 cara é fera, adoro seus cortes de cabelo','2','Avenida Sergipe, 190','junior2@junior.junior','http://www.youtube2.com',21999998888,'2019-04-26 23:51:09'),(12,11,1,2,'Mais um','Nos 2 conhecemos há 2 anos enos apaixonamos e hoje finalmente chegou o grande dia de consumar a união','2','','rosario@rosario.com','http://www.youtube2.com',31984050126,'2019-05-01 01:11:52'),(13,11,7,1,'Mais um','Descrição teste','2','','rosario@rosario.com','http://www.youtube2.com',31984050129,'2019-05-01 01:47:16');
/*!40000 ALTER TABLE `tb_stakeholders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_users`
--

DROP TABLE IF EXISTS `tb_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_users` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `idperson` int(11) NOT NULL,
  `deslogin` varchar(64) NOT NULL,
  `despassword` varchar(256) NOT NULL,
  `inadmin` tinyint(4) NOT NULL DEFAULT '0',
  `inseller` tinyint(4) DEFAULT '0',
  `inbuyer` tinyint(4) DEFAULT '0',
  `instatus` tinyint(4) NOT NULL DEFAULT '0',
  `inplan` int(3) NOT NULL DEFAULT '0',
  `intypedocument` tinyint(4) DEFAULT '0',
  `desdocument` varchar(14) DEFAULT NULL,
  `destoken` varchar(256) DEFAULT NULL,
  `descustomercode` varchar(22) DEFAULT NULL,
  `descardcode` varchar(22) DEFAULT NULL,
  `desdomain` varchar(128) DEFAULT NULL,
  `dtbirthday` datetime DEFAULT NULL,
  `dtplanbegin` datetime DEFAULT NULL,
  `dtplanend` datetime DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`iduser`),
  KEY `FK_users_persons_idx` (`idperson`),
  CONSTRAINT `fk_users_persons` FOREIGN KEY (`idperson`) REFERENCES `tb_persons` (`idperson`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_users`
--

LOCK TABLES `tb_users` WRITE;
/*!40000 ALTER TABLE `tb_users` DISABLE KEYS */;
INSERT INTO `tb_users` VALUES (11,11,'paulowebphp@gmail.com','$2y$12$jYbcHfoWsKGtdWfB7EVgnu73w/ophUt8xY3GpK.9X7KIEp108zdK.',1,0,0,1,312,0,'01224202686',NULL,NULL,NULL,'paulowebphp','1980-02-23 16:30:00',NULL,'0000-00-00 00:00:00','2019-04-24 17:00:33'),(13,12,'pwsecvendas@gmail.com','$2y$12$jYbcHfoWsKGtdWfB7EVgnu73w/ophUt8xY3GpK.9X7KIEp108zdK.',1,0,0,1,312,0,NULL,NULL,NULL,NULL,'pwsecvendas','1981-02-25 18:30:00',NULL,NULL,'2019-05-02 20:29:22'),(14,13,'macambraia@hotmail.com','$2y$12$sD.W2PhqqvJMfJnqeHSXRO11Ud6arzUykkIRp0F8vLtMgQ0Et2gBS',0,1,0,0,203,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-05-12 22:43:30'),(15,14,'macambraia@hotmail.com','$2y$12$StZ5e7uNIYVYG8uVzOZIgeg3DAeKWdGB7edUteS3SdLJK/V96xcmW',0,1,0,0,203,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-05-12 22:46:23'),(16,15,'macambraia@hotmail.com','$2y$12$Wz1RoOFtIbbZzhKiBuLLq.HnV/k8RA8wHQLSNDI/CYBNiVdDookS6',0,1,0,0,203,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-05-12 22:47:32'),(17,16,'macambraia@hotmail.com','$2y$12$A8U6GuNg9RBKBQH6Q3JUiePRSHNZG.VPvBi1DHXDEF7OuhCF/.QTy',0,1,0,0,203,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-05-12 22:50:19'),(18,17,'macambraia@hotmail.com','$2y$12$liLZ7X/pRiXcUkdleKkstuxYskjCA2zZzPIoo0Gj4r/BgcDgQUelG',0,1,0,0,312,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-05-12 23:20:09'),(19,18,'macambraia@hotmail.com','$2y$12$9wMFz6VZgMC42ZEDU.uw5e0IJtq9J.LWrBuNvzUmmJLQakAEs.YcC',0,1,0,0,206,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-05-12 23:21:09'),(20,19,'macambraia@hotmail.com','$2y$12$nyQer7W31T5aZccMZ87r9uLM56M3k5.UC2GfW8IfKvg1TMQhiV5GK',0,1,0,0,206,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-05-12 23:22:26'),(21,20,'macambraia@hotmail.com','$2y$12$4HD0tO44vkcIY5OMTE9BS.chfcQ3f21W4/GfIogMIVk89kbhNlH6W',0,1,0,0,206,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-05-12 23:23:12'),(22,21,'macambraia@hotmail.com','$2y$12$lOepiUV1D25e204EJDSISeQ45p1TQZpZ6588GqHAsLLHg4t496uoq',0,1,0,0,103,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-05-12 23:24:11'),(23,22,'macambraia@hotmail.com','$2y$12$/YRvatlWdcunyirlQQfZzeTdRUFaJ0k6cmnkhghSHmFlR1lM2iqpy',0,1,0,0,209,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-05-12 23:31:24');
/*!40000 ALTER TABLE `tb_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_userslogs`
--

DROP TABLE IF EXISTS `tb_userslogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_userslogs` (
  `idlog` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) NOT NULL,
  `deslog` varchar(128) NOT NULL,
  `desip` varchar(45) NOT NULL,
  `desuseragent` varchar(128) NOT NULL,
  `dessessionid` varchar(64) NOT NULL,
  `desurl` varchar(128) NOT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idlog`),
  KEY `fk_userslogs_users_idx` (`iduser`),
  CONSTRAINT `fk_userslogs_users` FOREIGN KEY (`iduser`) REFERENCES `tb_users` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_userslogs`
--

LOCK TABLES `tb_userslogs` WRITE;
/*!40000 ALTER TABLE `tb_userslogs` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_userslogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_userspasswordsrecoveries`
--

DROP TABLE IF EXISTS `tb_userspasswordsrecoveries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_userspasswordsrecoveries` (
  `idrecovery` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) NOT NULL,
  `desip` varchar(45) NOT NULL,
  `dtrecovery` datetime DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idrecovery`),
  KEY `fk_userspasswordsrecoveries_users_idx` (`iduser`),
  CONSTRAINT `fk_userspasswordsrecoveries_users` FOREIGN KEY (`iduser`) REFERENCES `tb_users` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_userspasswordsrecoveries`
--

LOCK TABLES `tb_userspasswordsrecoveries` WRITE;
/*!40000 ALTER TABLE `tb_userspasswordsrecoveries` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_userspasswordsrecoveries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_videos`
--

DROP TABLE IF EXISTS `tb_videos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_videos` (
  `idvideo` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) NOT NULL,
  `instatus` tinyint(4) NOT NULL DEFAULT '1',
  `inposition` tinyint(4) DEFAULT NULL,
  `desvideo` varchar(128) DEFAULT NULL,
  `desdescription` text,
  `desthumbnail` varchar(256) DEFAULT NULL,
  `desurl` varchar(128) NOT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idvideo`),
  KEY `fk_videos_users_idx` (`iduser`),
  CONSTRAINT `fk_videos_users` FOREIGN KEY (`iduser`) REFERENCES `tb_users` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_videos`
--

LOCK TABLES `tb_videos` WRITE;
/*!40000 ALTER TABLE `tb_videos` DISABLE KEYS */;
INSERT INTO `tb_videos` VALUES (11,11,2,12,'Vide2o da despedida de solteiro','Vid2eo engraçadissimo sobre a despedida de solteiro que fizemos no Stadt Jever','','http://www.yo2utube.com','2019-04-27 19:17:09'),(12,11,7,1,'Video 1111','video 1111 descr',NULL,'paulowebphp2','2019-05-01 01:18:43');
/*!40000 ALTER TABLE `tb_videos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_weddings`
--

DROP TABLE IF EXISTS `tb_weddings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_weddings` (
  `idwedding` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) NOT NULL,
  `desweddingdescription` text,
  `desweddinglocation` varchar(128) DEFAULT NULL,
  `desweddingphoto` varchar(256) DEFAULT NULL,
  `dtwedding` datetime DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idwedding`),
  KEY `fk_weddings_users_idx` (`iduser`),
  CONSTRAINT `fk_weddings_users` FOREIGN KEY (`iduser`) REFERENCES `tb_users` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_weddings`
--

LOCK TABLES `tb_weddings` WRITE;
/*!40000 ALTER TABLE `tb_weddings` DISABLE KEYS */;
INSERT INTO `tb_weddings` VALUES (11,11,'Casamento vai bombar','Igreja de Boa Lourdes',NULL,'2019-08-30 12:30:00','2019-04-24 18:53:59');
/*!40000 ALTER TABLE `tb_weddings` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-05-12 22:42:12
