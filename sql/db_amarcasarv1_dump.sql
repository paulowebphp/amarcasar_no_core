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
-- Table structure for table `tb_accounts`
--

DROP TABLE IF EXISTS `tb_accounts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_accounts` (
  `idaccount` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) NOT NULL,
  `desaccountcode` varchar(22) CHARACTER SET latin1 DEFAULT NULL,
  `desaccesstoken` varchar(128) CHARACTER SET latin1 DEFAULT NULL,
  `deschannelid` varchar(22) DEFAULT NULL,
  `desname` varchar(128) DEFAULT NULL,
  `desemail` varchar(128) DEFAULT NULL,
  `nrcountryarea` int(4) DEFAULT NULL,
  `nrddd` int(2) DEFAULT NULL,
  `nrphone` bigint(20) DEFAULT NULL,
  `intypedoc` tinyint(4) DEFAULT NULL,
  `desdocument` varchar(14) DEFAULT NULL,
  `deszipcode` char(8) CHARACTER SET latin1 DEFAULT NULL,
  `desaddress` varchar(128) CHARACTER SET latin1 DEFAULT NULL,
  `desnumber` varchar(16) CHARACTER SET latin1 DEFAULT NULL,
  `descomplement` varchar(32) CHARACTER SET latin1 DEFAULT NULL,
  `desdistrict` varchar(32) CHARACTER SET latin1 DEFAULT NULL,
  `descity` varchar(32) CHARACTER SET latin1 DEFAULT NULL,
  `desstate` varchar(32) CHARACTER SET latin1 DEFAULT NULL,
  `descountry` varchar(4) DEFAULT NULL,
  `dtbirth` date DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idaccount`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_accounts`
--

LOCK TABLES `tb_accounts` WRITE;
/*!40000 ALTER TABLE `tb_accounts` DISABLE KEYS */;
INSERT INTO `tb_accounts` VALUES (1,30,'MPA-A0ACF142CF4F','cc460510ee004a3e9568a3787de9167b_v2',NULL,'Luiz Cambraia','luiz@hotmail.com',NULL,31,984050125,0,'01224202686','30160037','Rua Espirito','1757','401','Lourdes','Belo Horizonte','MG','BRA','1980-02-23','2019-05-21 16:11:22'),(2,30,'MPA-44061B0ADA72','d5123210ee874aff8a60df703460616b_v2','APP-MSL2111M3D69','Luiz Cambraia','luiz@hotmail.com',NULL,31,984050125,0,'01224202686','30160037','Rua Espirito','1757','401','Lourdes','Belo Horizonte','MG','BRA','1980-02-23','2019-05-21 16:13:01'),(3,30,'MPA-305F49FF2BFB','2a586942b1b047ffa1cd73041cb20dac_v2','APP-MSL2111M3D69','Luiz Cambraia','luiz@hotmail.com',NULL,31,984050125,0,'01224202686','30160037','Rua Espirito','1757','401','Lourdes','Belo Horizonte','MG','BRA','1980-02-23','2019-05-21 16:14:02'),(4,30,'MPA-CC31F9A74785','9093b3828f0040089e113c88b36159a9_v2','APP-MSL2111M3D69','Luiz Cambraia','luiz@hotmail.com',NULL,31,984050125,0,'01224202686','30160037','Rua Espirito','1757','401','Lourdes','Belo Horizonte','MG','BRA','1980-02-23','2019-05-21 16:14:28'),(5,30,'MPA-8C52E57845B2','68ddd62f4ae843ce9827cfda5c3daca3_v2','APP-MSL2111M3D69','Luiz Cambraia','luiz@hotmail.com',NULL,31,984050125,0,'01224202686','30160037','Rua Espirito','1757','401','Lourdes','Belo Horizonte','MG','BRA','1980-02-23','2019-05-21 16:15:18'),(6,30,'MPA-E0D87E26C3BA','3839543a7bf442c9aac17fce5c314597_v2','APP-MSL2111M3D69','Luiz Cambraia','luiz@hotmail.com',NULL,31,984050125,0,'01224202686','30160037','Rua Espirito','1757','401','Lourdes','Belo Horizonte','MG','BRA','1980-02-23','2019-05-21 16:15:48'),(7,30,'MPA-DBC857C714B3','fa9bcba752854fe899cf4ce4b4e884ad_v2','APP-MSL2111M3D69','Luiz Cambraia','luiz@hotmail.com',NULL,31,984050125,0,'01224202686','30160037','Rua Espirito','1757','401','Lourdes','Belo Horizonte','MG','BRA','1980-02-23','2019-05-21 16:16:06'),(8,31,'MPA-E5EC221D875D','b7dfdc15eece491984537f81152a6b2f_v2','APP-MSL2111M3D69','Cesar Maciel','maciel@gmail.com',NULL,12,123456789,NULL,'01224202686','13465400','Rua Alvaro','401','54','Vila Rehder','Americana','SP','BRA','1980-02-02','2019-05-21 17:32:27'),(9,32,'MPA-867714CC0774','f8129d1b083444e6a7ae85f3b244f2cf_v2','APP-MSL2111M3D69','Geromel Santos','geromel@hotmail.com',NULL,12,123456789,NULL,'01224202686','30160037','Alvaro','500','41','Lourdes','Belo Horizonte','MG','BRA','1980-02-02','2019-05-21 18:16:37'),(10,33,'MPA-7CCA20DF5C05','67001a60c6f348e9a2af40ff271ce5a0_v2','APP-MSL2111M3D69','Lucio Moraes','lucio@hotmail.com',NULL,31,123456789,NULL,'01224202686','30160037','Rua Alvares Maciel','1756','123456','Luan','Belo Horizonte','MG','BRA','1984-12-12','2019-05-21 20:05:02'),(11,33,'MPA-E6E6D4A603CF','664fcb2bf44f4fe1b06d45945a7bdb48_v2','APP-MSL2111M3D69','Lucio Moraes','lucio@hotmail.com',NULL,31,123456789,NULL,'01224202686','30160037','Rua Alvares Maciel','1756','123456','Luan','Belo Horizonte','MG','BRA','1984-12-12','2019-05-21 20:05:32'),(12,33,'MPA-AAD979840C94','fb4cb6c4523c42bf89ecef84e45c6fb7_v2','APP-MSL2111M3D69','Lucio Moraes','lucio@hotmail.com',NULL,31,123456789,NULL,'01224202686','30160037','Rua Alvares Maciel','1756','123456','Luan','Belo Horizonte','MG','BRA','1984-12-12','2019-05-21 20:06:17'),(13,33,'MPA-6210039C305A','655673b4d61e48af8ac8127bce5252fa_v2','APP-MSL2111M3D69','Lucio Moraes','lucio@hotmail.com',NULL,31,123456789,NULL,'01224202686','30160037','Rua Alvares Maciel','1756','123456','Luan','Belo Horizonte','MG','BRA','1984-12-12','2019-05-21 20:06:47'),(14,33,'MPA-63DC035ED47E','b8ff08e7149443a8b82ca97956192b28_v2','APP-MSL2111M3D69','Lucio Moraes','lucio@hotmail.com',NULL,31,123456789,NULL,'01224202686','30160037','Rua Alvares Maciel','1756','123456','Luan','Belo Horizonte','MG','BRA','1984-12-12','2019-05-21 20:08:06'),(15,33,'MPA-504EEE246CAA','3aeb9a668cff456480d3d1ae48251344_v2','APP-MSL2111M3D69','Lucio Moraes','lucio@hotmail.com',NULL,31,123456789,NULL,'01224202686','30160037','Rua Alvares Maciel','1756','123456','Luan','Belo Horizonte','MG','BRA','1984-12-12','2019-05-21 20:08:43'),(16,33,'MPA-06068178AA45','9d303fc03e0347a6adad0da86719aae7_v2','APP-MSL2111M3D69','Lucio Moraes','lucio@hotmail.com',NULL,31,123456789,NULL,'01224202686','30160037','Rua Alvares Maciel','1756','123456','Luan','Belo Horizonte','MG','BRA','1984-12-12','2019-05-21 20:09:00'),(17,33,'MPA-FD1D3BF7FF7A','eb6e9bbc14114d1b902144a74be73cf4_v2','APP-MSL2111M3D69','Lucio Moraes','lucio@hotmail.com',NULL,31,123456789,NULL,'01224202686','30160037','Rua Alvares Maciel','1756','123456','Luan','Belo Horizonte','MG','BRA','1984-12-12','2019-05-21 20:09:27'),(18,35,'MPA-A50DBB885BAC','d136e7eb14604a71a80ccce3b07e147c_v2','APP-MSL2111M3D69','Joao Cesar','joao@gmail.com',55,31,984050125,0,'01224202686','13465400','Rua Alvaro Ribeiro','1757','401','Major','Americana','SP','BRA','1970-02-02','2019-05-21 21:26:42'),(19,35,'MPA-525227958980','e84f30d5e81746c29ff19ce5b50a9e18_v2','APP-MSL2111M3D69','Joao Cesar','joao@gmail.com',55,31,984050125,0,'01224202686','13465400','Rua Alvaro Ribeiro','1757','401','Major','Americana','SP','BRA','1970-02-02','2019-05-21 21:29:38'),(20,35,'MPA-BB095AA1129C','a09ca4b21e6145f99286a53c0d7ad090_v2','APP-MSL2111M3D69','Joao Cesar','joao@gmail.com',55,31,984050125,0,'01224202686','13465400','Rua Alvaro Ribeiro','1757','401','Major','Americana','SP','BRA','1970-02-02','2019-05-21 21:30:06'),(21,35,'MPA-4ACD92D66954','f3c520c56c1b49b6832125cf30fe8fd2_v2','APP-MSL2111M3D69','Joao Cesar','joao@gmail.com',55,31,984050125,0,'01224202686','13465400','Rua Alvaro Ribeiro','1757','401','Major','Americana','SP','BRA','1970-02-02','2019-05-21 21:30:38'),(22,35,'MPA-4131AD351BA1','ddf5d7ed8b404859b69673424311b3e2_v2','APP-MSL2111M3D69','Joao Cesar','joao@gmail.com',55,31,984050125,0,'01224202686','13465400','Rua Alvaro Ribeiro','1757','401','Major','Americana','SP','BRA','1970-02-02','2019-05-21 21:31:31');
/*!40000 ALTER TABLE `tb_accounts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_addresses`
--

DROP TABLE IF EXISTS `tb_addresses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_addresses` (
  `idaddress` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) NOT NULL,
  `deszipcode` char(8) NOT NULL,
  `desaddress` varchar(128) NOT NULL,
  `desnumber` varchar(16) NOT NULL,
  `descomplement` varchar(32) DEFAULT NULL,
  `desdistrict` varchar(32) NOT NULL,
  `descity` varchar(32) NOT NULL,
  `desstate` varchar(32) NOT NULL,
  `descountry` varchar(32) NOT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idaddress`)
) ENGINE=InnoDB AUTO_INCREMENT=466 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_addresses`
--

LOCK TABLES `tb_addresses` WRITE;
/*!40000 ALTER TABLE `tb_addresses` DISABLE KEYS */;
INSERT INTO `tb_addresses` VALUES (11,0,'30160037','Rua Espirito Santo','1757','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-04-24 17:04:00'),(12,0,'30160037','Rua Espirito Santo','1757','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-08 16:47:27'),(13,0,'30160037','Rua Espirito Santo','1757','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-08 16:49:38'),(14,0,'30160037','Rua Espirito Santo','1757','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-08 16:50:42'),(15,0,'30160037','Rua Espirito Santo','1757','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-08 16:51:40'),(16,0,'30160037','Rua Espirito Santo','1757','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-08 16:52:25'),(17,0,'30160037','Rua Espirito Santo','1757','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-08 16:52:41'),(18,0,'30160037','Rua Espirito Santo','1757','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-08 17:39:42'),(19,0,'30160037','Rua Espirito Santo','1757','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-08 17:40:11'),(20,0,'30160037','Rua Espirito Santo','1757','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-08 18:03:47'),(21,0,'30160037','Rua Espirito Santo','1757','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-08 18:03:58'),(22,0,'30160037','Rua Espirito Santo','1757','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-08 18:07:15'),(23,0,'30160037','Rua Espirito Santo','1757','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-08 18:07:34'),(24,0,'30160037','Rua Espirito Santo','1757','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-08 18:07:54'),(25,0,'30160037','Rua Espirito Santo','1757','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-08 18:09:46'),(26,0,'30160037','Rua Espirito Santo','1757','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-08 18:11:29'),(27,0,'30160037','Rua Espirito Santo','1757','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-08 18:11:56'),(28,0,'30160037','Rua Espirito Santo','1757','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-08 18:12:23'),(29,0,'30160037','Rua Espirito Santo','1757','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-08 18:12:37'),(30,0,'13465400','Rua Alvaro Ribeiro','41','','Vila Rehder','Americana','São Paulo','Brasil','2019-05-08 19:21:10'),(37,0,'13465400','Rua Alvaro Ribeiro','401','','Vila Rehder','Americana','São Paulo','Brasil','2019-05-08 19:28:40'),(40,0,'13465400','Rua Alvaro Ribeiro','41','','Vila Rehder','Americana','São Paulo','Brasil','2019-05-08 19:36:26'),(43,0,'30160037','Rua Espirito Santo','1758','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-08 19:43:38'),(45,0,'30160037','Rua Espirito Santo','1759','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-08 19:44:45'),(47,0,'30160037','Rua Espirito Santo','1759','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-08 19:49:16'),(48,11,'30160037','Rua Espirito Santo','1759','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-08 20:03:32'),(49,13,'13465400','Rua Alvaro Ribeiro','401','','Vila Rehder','Americana','SP','Brasil','2019-05-08 20:03:49'),(50,13,'13465400','Rua Alvaro Ribeiro','401','','Vila Rehder','Americana','SP','Brasil','2019-05-08 20:06:07'),(51,13,'13465400','Rua Alvaro Ribeiro','401','','Vila Rehder','Americana','SP','Brasil','2019-05-08 20:06:38'),(52,11,'30160037','Rua Espirito Santo','1757','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-08 20:17:50'),(53,11,'30160037','Rua Espirito Santo','1757','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-08 20:20:00'),(54,11,'30160037','Rua Espirito Santo','1757','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-08 20:22:55'),(55,11,'30160037','Rua Espirito Santo','1757','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-08 20:23:35'),(56,11,'30160037','Rua Espirito Santo','1757','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-08 20:23:57'),(57,11,'30160037','Rua Espirito Santo','1757','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-08 20:25:45'),(58,11,'30160037','Rua Espirito Santo','17598','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-08 20:33:41'),(59,11,'13465400','Rua Alvaro Ribeiro','500','','Vila Rehder','Americana','SP','Brasil','2019-05-08 20:36:59'),(60,11,'13465400','Rua Alvaro Ribeiro','400','','Vila Rehder','Americana','SP','Brasil','2019-05-08 20:40:17'),(61,11,'13465500','Rua Trinta de Julho','455','','Centro','Americana','SP','Brasil','2019-05-08 20:42:13'),(62,11,'13465100','Avenida de Cillo','100','até 701/702','Vila Pavan','Americana','SP','Brasil','2019-05-08 20:45:06'),(63,11,'30160037','Rua Espirito Santo','1700','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-08 20:46:39'),(64,11,'30160037','Rua Espirito Santo','1757','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-08 20:47:59'),(65,11,'30160037','Rua Espirito Santo','500','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-08 21:33:12'),(66,11,'30160037','Rua Espirito Santo','500','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-08 21:36:09'),(67,11,'30160037','Rua Espirito Santo','500','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-08 21:37:30'),(68,11,'30160037','Rua Espirito Santo','500','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-08 21:38:35'),(69,11,'30160037','Rua Espirito Santo','500','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-08 21:43:53'),(70,11,'13465400','Rua Alvaro Ribeiro','51','','Vila Rehder','Americana','SP','Brasil','2019-05-08 22:06:10'),(71,11,'30160037','Rua Espirito Santo','200','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-08 22:37:49'),(72,11,'13465400','Rua Alvaro Ribeiro','400','','Vila Rehder','Americana','SP','Brasil','2019-05-08 22:40:40'),(73,11,'13465400','Rua Alvaro Ribeiro','400','','Vila Rehder','Americana','SP','Brasil','2019-05-08 22:41:06'),(74,11,'13465400','Rua Alvaro Ribeiro','400','','Vila Rehder','Americana','SP','Brasil','2019-05-08 22:41:49'),(75,11,'13465400','Rua Alvaro Ribeiro','400','','Vila Rehder','Americana','SP','Brasil','2019-05-08 22:41:57'),(76,11,'13465400','Rua Alvaro Ribeiro','400','','Vila Rehder','Americana','SP','Brasil','2019-05-08 22:44:14'),(77,11,'13465400','Rua Alvaro Ribeiro','400','','Vila Rehder','Americana','SP','Brasil','2019-05-08 22:44:41'),(78,11,'13465400','Rua Alvaro Ribeiro','400','','Vila Rehder','Americana','SP','Brasil','2019-05-08 22:44:56'),(79,11,'13465400','Rua Alvaro Ribeiro','400','','Vila Rehder','Americana','SP','Brasil','2019-05-08 22:45:36'),(80,11,'13465400','Rua Alvaro Ribeiro','400','','Vila Rehder','Americana','SP','Brasil','2019-05-08 22:45:47'),(81,11,'13465400','Rua Alvaro Ribeiro','400','','Vila Rehder','Americana','SP','Brasil','2019-05-08 22:45:59'),(82,11,'13465400','Rua Alvaro Ribeiro','400','','Vila Rehder','Americana','SP','Brasil','2019-05-08 22:47:15'),(83,11,'13465400','Rua Alvaro Ribeiro','400','','Vila Rehder','Americana','SP','Brasil','2019-05-08 22:47:49'),(84,11,'13465400','Rua Alvaro Ribeiro','400','','Vila Rehder','Americana','SP','Brasil','2019-05-08 22:48:17'),(85,11,'13465400','Rua Alvaro Ribeiro','465','','Vila Rehder','Americana','SP','Brasil','2019-05-08 22:50:45'),(86,11,'30160037','Rua Espirito Santo','1800','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-08 22:53:52'),(87,11,'13465400','Rua Alvaro Ribeiro','400','','Vila Rehder','Americana','SP','Brasil','2019-05-08 22:56:42'),(88,11,'13465400','Rua Alvaro Ribeiro','400','','Vila Rehder','Americana','SP','Brasil','2019-05-08 22:58:28'),(89,11,'13465400','Rua Alvaro Ribeiro','400','','Vila Rehder','Americana','SP','Brasil','2019-05-08 23:00:09'),(90,11,'13465400','Rua Alvaro Ribeiro','800','','Vila Rehder','Americana','SP','Brasil','2019-05-08 23:04:50'),(91,11,'13465400','Rua Alvaro Ribeiro','400','','Vila Rehder','Americana','SP','Brasil','2019-05-08 23:07:14'),(92,11,'13465400','Rua Alvaro Ribeiro','400','','Vila Rehder','Americana','SP','Brasil','2019-05-08 23:07:35'),(93,11,'13465400','Rua Alvaro Ribeiro','400','','Vila Rehder','Americana','SP','Brasil','2019-05-08 23:07:49'),(94,11,'13465400','Rua Alvaro Ribeiro','400','','Vila Rehder','Americana','SP','Brasil','2019-05-08 23:08:14'),(95,11,'13465400','Rua Alvaro Ribeiro','400','','Vila Rehder','Americana','SP','Brasil','2019-05-08 23:08:46'),(96,11,'13465400','Rua Alvaro Ribeiro','400','','Vila Rehder','Americana','SP','Brasil','2019-05-08 23:09:14'),(97,11,'13465400','Rua Alvaro Ribeiro','400','','Vila Rehder','Americana','SP','Brasil','2019-05-08 23:09:49'),(98,11,'13465400','Rua Alvaro Ribeiro','400','','Vila Rehder','Americana','SP','Brasil','2019-05-08 23:10:37'),(99,11,'13465400','Rua Alvaro Ribeiro','800','','Vila Rehder','Americana','SP','Brasil','2019-05-08 23:31:45'),(100,11,'13465400','Rua Alvaro Ribeiro','100','','Vila Rehder','Americana','SP','Brasil','2019-05-08 23:35:35'),(101,11,'13465500','Rua Trinta de Julho','31','','Centro','Americana','SP','Brasil','2019-05-08 23:37:03'),(102,11,'30160031','Rua Espirito Santo','1677','de 421/422 a 699/700','Centro','Belo Horizonte','MG','Brasil','2019-05-08 23:46:22'),(103,11,'13465400','Rua Alvaro Ribeiro','50000','','Vila Rehder','Americana','SP','Brasil','2019-05-08 23:50:11'),(104,11,'13465400','Rua Alvaro Ribeiro','400','','Vila Rehder','Americana','SP','Brasil','2019-05-08 23:52:17'),(105,11,'13465400','Rua Alvaro Ribeiro','500','','Vila Rehder','Americana','SP','Brasil','2019-05-08 23:53:26'),(106,11,'13465400','Rua Alvaro Ribeiro','1000','','Vila Rehder','Americana','SP','Brasil','2019-05-08 23:56:57'),(107,11,'13465400','Rua Alvaro Ribeiro','400','','Vila Rehder','Americana','SP','Brasil','2019-05-09 00:07:01'),(108,11,'13465400','Rua Alvaro Ribeiro','400','','Vila Rehder','Americana','SP','Brasil','2019-05-09 00:08:38'),(109,11,'13465400','Rua Alvaro Ribeiro','2','','Vila Rehder','Americana','SP','Brasil','2019-05-09 00:10:06'),(110,11,'13465400','Rua Alvaro Ribeiro','400','','Vila Rehder','Americana','SP','Brasil','2019-05-09 00:16:56'),(111,11,'13465400','Rua Alvaro Ribeiro','800','','Vila Rehder','Americana','SP','Brasil','2019-05-09 00:17:41'),(112,11,'13465400','Rua Alvaro Ribeiro','800','','Vila Rehder','Americana','SP','Brasil','2019-05-09 00:18:47'),(113,11,'13465400','Rua Alvaro Ribeiro','400','','Vila Rehder','Americana','SP','Brasil','2019-05-09 00:19:19'),(114,11,'13465400','Rua Alvaro Ribeiro','400','','Vila Rehder','Americana','SP','Brasil','2019-05-09 00:19:51'),(115,11,'13465400','Rua Alvaro Ribeiro','800','','Vila Rehder','Americana','SP','Brasil','2019-05-09 00:20:40'),(116,11,'13465400','Rua Alvaro Ribeiro','800','','Vila Rehder','Americana','SP','Brasil','2019-05-09 00:21:10'),(117,11,'13465400','Rua Alvaro Ribeiro','400','','Vila Rehder','Americana','SP','Brasil','2019-05-09 00:36:53'),(118,11,'13465400','Rua Alvaro Ribeiro','400','','Vila Rehder','Americana','SP','Brasil','2019-05-09 00:39:47'),(119,11,'13465400','Rua Alvaro Ribeiro','400','','Vila Rehder','Americana','SP','Brasil','2019-05-09 00:43:38'),(120,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 00:45:32'),(121,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 00:46:55'),(122,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 00:48:02'),(123,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 00:49:38'),(124,11,'13465400','Rua Alvaro Ribeiro','8','','Vila Rehder','Americana','SP','Brasil','2019-05-09 00:50:31'),(125,11,'13465400','Rua Alvaro Ribeiro','8','','Vila Rehder','Americana','SP','Brasil','2019-05-09 00:50:59'),(126,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 00:52:43'),(127,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 00:53:38'),(128,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 00:58:08'),(129,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 00:59:01'),(130,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 01:02:22'),(131,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 01:02:45'),(132,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 01:04:13'),(133,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 01:05:21'),(134,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 01:05:38'),(135,11,'30160037','Rua Espirito Santo','100','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-09 02:18:44'),(136,11,'13465400','Rua Alvaro Ribeiro','1000','','Vila Rehder','Americana','SP','Brasil','2019-05-09 02:19:52'),(137,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 02:21:31'),(138,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 02:23:55'),(139,11,'13465400','Rua Alvaro Ribeiro','100','','Vila Rehder','Americana','SP','Brasil','2019-05-09 02:30:14'),(140,11,'13465400','Rua Alvaro Ribeiro','400','','Vila Rehder','Americana','SP','Brasil','2019-05-09 02:31:22'),(141,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 02:31:56'),(142,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 02:32:23'),(143,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 02:33:52'),(144,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 02:38:52'),(145,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 02:41:30'),(146,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 02:41:43'),(147,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 02:42:03'),(148,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 02:43:05'),(149,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 02:44:09'),(150,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 03:17:27'),(151,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 03:19:02'),(152,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 03:19:50'),(153,11,'13465400','Rua Alvaro Ribeiro','13465400','','Vila Rehder','Americana','SP','Brasil','2019-05-09 03:29:27'),(154,11,'13465400','Rua Alvaro Ribeiro','400','','Vila Rehder','Americana','SP','Brasil','2019-05-09 03:33:39'),(155,11,'13465400','Rua Alvaro Ribeiro','10','','Vila Rehder','Americana','SP','Brasil','2019-05-09 03:41:28'),(156,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 03:42:30'),(157,11,'13465400','Rua Alvaro Ribeiro','100','','Vila Rehder','Americana','SP','Brasil','2019-05-09 04:03:27'),(158,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 04:05:04'),(159,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 04:07:41'),(160,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 04:09:02'),(161,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 04:10:08'),(162,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 04:12:14'),(163,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 04:13:50'),(164,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 04:14:31'),(165,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 04:16:32'),(166,11,'30160037','Rua Espirito Santo','1','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-09 04:17:25'),(167,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 04:23:45'),(168,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 04:26:07'),(169,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 04:26:58'),(170,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 04:36:57'),(171,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 04:39:31'),(172,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 04:40:20'),(173,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 04:44:20'),(174,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 04:45:05'),(175,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 04:46:07'),(176,11,'13465400','Rua Alvaro Ribeiro','100','','Vila Rehder','Americana','SP','Brasil','2019-05-09 04:46:30'),(177,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 04:47:06'),(178,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 04:48:13'),(179,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 04:49:13'),(180,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 04:50:31'),(181,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 04:56:25'),(182,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 05:38:13'),(183,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 05:39:04'),(184,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 05:41:32'),(185,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 05:42:41'),(186,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 05:43:26'),(187,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 05:45:41'),(188,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 05:46:39'),(189,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 05:48:10'),(190,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 05:53:28'),(191,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 05:54:17'),(192,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 05:56:27'),(193,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 05:57:10'),(194,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 05:59:06'),(195,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 05:59:46'),(196,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 06:03:50'),(197,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 14:31:22'),(198,11,'13465400','Rua Alvaro Ribeiro','400','','Vila Rehder','Americana','SP','Brasil','2019-05-09 14:43:02'),(199,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 14:49:30'),(200,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 14:50:36'),(201,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 14:57:59'),(202,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 14:59:20'),(203,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 15:00:03'),(204,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 15:01:23'),(205,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 19:14:02'),(206,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 19:14:35'),(207,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 19:15:12'),(208,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 19:15:39'),(209,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 19:16:30'),(210,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 19:20:34'),(211,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 19:20:58'),(212,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 19:21:46'),(213,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 19:23:33'),(214,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 19:24:09'),(215,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 19:25:07'),(216,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 19:25:42'),(217,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 19:26:30'),(218,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 19:27:26'),(219,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 19:28:28'),(220,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 19:29:21'),(221,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 19:30:37'),(222,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 19:32:44'),(223,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 19:35:34'),(224,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 19:37:22'),(225,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 19:38:19'),(226,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 20:49:54'),(227,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 20:51:08'),(228,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 20:51:37'),(229,11,'13465400','Rua Alvaro Ribeiro','13465400','','Vila Rehder','Americana','SP','Brasil','2019-05-09 21:54:15'),(230,11,'30160037','Rua Espirito Santo','1','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-10 13:23:44'),(231,11,'30160037','Rua Espirito Santo','1','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-10 13:24:07'),(232,11,'30160037','Rua Espirito Santo','1','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-10 13:24:23'),(233,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 15:10:22'),(234,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 15:12:42'),(235,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 15:15:24'),(236,11,'30160037','Rua Espirito Santo','51','','Lourdes','BH','MG','Brasil','2019-05-10 17:53:25'),(237,11,'30160037','Rua Espirito Santo','51','','Lourdes','BH','MG','Brasil','2019-05-10 17:57:09'),(238,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 17:59:47'),(239,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 18:01:42'),(240,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 18:04:06'),(241,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 18:05:31'),(242,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 18:09:19'),(243,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 18:32:12'),(244,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 18:35:03'),(245,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 18:52:10'),(246,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 18:53:22'),(247,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 18:54:39'),(248,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 18:55:56'),(249,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 18:58:15'),(250,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 18:59:16'),(251,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 19:00:07'),(252,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 19:01:17'),(253,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 19:02:11'),(254,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 19:03:31'),(255,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 19:04:21'),(256,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 19:05:07'),(257,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 19:06:55'),(258,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 19:07:54'),(259,11,'13465400','Rua Alvaro Ribeiro','11','','Vila Rehder','Americana','SP','Brasil','2019-05-10 19:39:36'),(260,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 19:41:57'),(261,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 19:52:00'),(262,11,'13465400','Rua Alvaro Ribeiro','31','','Vila Rehder','Americana','SP','Brasil','2019-05-10 20:01:43'),(263,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 20:11:29'),(264,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 20:12:40'),(265,11,'13465400','Rua Alvaro Ribeiro','22','','Vila Rehder','Americana','SP','Brasil','2019-05-10 20:19:15'),(266,11,'13465400','Rua Alvaro Ribeiro','22','','Vila Rehder','Americana','SP','Brasil','2019-05-10 20:20:28'),(267,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 20:22:53'),(268,11,'13465400','Rua Alvaro Ribeiro','11','','Vila Rehder','Americana','SP','Brasil','2019-05-10 20:25:36'),(269,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 20:27:25'),(270,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 21:12:08'),(271,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 21:16:41'),(272,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 21:21:13'),(273,11,'13465400','Rua Alvaro Ribeiro','321','','Vila Rehder','Americana','SP','Brasil','2019-05-10 21:22:58'),(274,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 21:51:57'),(275,11,'13465400','Rua Alvaro Ribeiro','22','','Vila Rehder','Americana','SP','Brasil','2019-05-10 21:53:09'),(276,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 22:03:35'),(277,11,'13456400','Rua Juscelino Kubitschek de Oliveira','111','até 234/235','Jardim AmÃ©lia','Santa Bárbara D\'Oeste','SP','Brasil','2019-05-10 22:06:00'),(278,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 22:09:30'),(279,11,'13465400','Rua Alvaro Ribeiro','12121','','Vila Rehder','Americana','SP','Brasil','2019-05-10 22:27:11'),(280,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 22:29:26'),(281,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 22:32:25'),(282,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 22:35:53'),(283,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 22:37:32'),(284,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 22:38:25'),(285,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 22:39:35'),(286,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 22:41:13'),(287,11,'13465400','Rua Alvaro Ribeiro','22','','Vila Rehder','Americana','SP','Brasil','2019-05-10 22:43:41'),(288,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 22:49:23'),(289,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 22:52:21'),(290,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 22:55:03'),(291,11,'13465400','Rua Alvaro Ribeiro','111','','Vila Rehder','Americana','SP','Brasil','2019-05-10 22:58:33'),(292,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 23:01:42'),(293,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 23:04:59'),(294,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 23:06:34'),(295,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 23:08:38'),(296,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 23:23:56'),(297,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 23:26:26'),(298,11,'13465400','Rua Alvaro Ribeiro','11111','','Vila Rehder','Americana','SP','Brasil','2019-05-10 23:28:06'),(299,11,'13465400','Rua Alvaro Ribeiro','11111','','Vila Rehder','Americana','SP','Brasil','2019-05-10 23:29:05'),(300,11,'13465400','Rua Alvaro Ribeiro','11111','','Vila Rehder','Americana','SP','Brasil','2019-05-11 00:29:16'),(301,11,'13465400','Rua Alvaro Ribeiro','11111','','Vila Rehder','Americana','SP','Brasil','2019-05-11 00:32:51'),(302,11,'13465400','Rua Alvaro Ribeiro','11111','','Vila Rehder','Americana','SP','Brasil','2019-05-11 00:33:03'),(303,11,'13465400','Rua Alvaro Ribeiro','11111','','Vila Rehder','Americana','SP','Brasil','2019-05-11 00:33:31'),(304,11,'13465400','Rua Alvaro Ribeiro','11111','','Vila Rehder','Americana','SP','Brasil','2019-05-11 00:35:30'),(305,11,'13465400','Rua Alvaro Ribeiro','11111','','Vila Rehder','Americana','SP','Brasil','2019-05-11 00:36:46'),(306,11,'13465400','Rua Alvaro Ribeiro','11111','','Vila Rehder','Americana','SP','Brasil','2019-05-11 00:39:04'),(307,11,'13465400','Rua Alvaro Ribeiro','11111','','Vila Rehder','Americana','SP','Brasil','2019-05-11 01:05:47'),(308,11,'13465400','Rua Alvaro Ribeiro','11111','','Vila Rehder','Americana','SP','Brasil','2019-05-11 01:10:34'),(309,11,'13465400','Rua Alvaro Ribeiro','11111','','Vila Rehder','Americana','SP','Brasil','2019-05-11 01:11:03'),(310,11,'13465400','Rua Alvaro Ribeiro','11111','','Vila Rehder','Americana','SP','Brasil','2019-05-11 01:11:18'),(311,11,'13465400','Rua Alvaro Ribeiro','11111','','Vila Rehder','Americana','SP','Brasil','2019-05-11 01:11:38'),(312,11,'13465400','Rua Alvaro Ribeiro','11111','','Vila Rehder','Americana','SP','Brasil','2019-05-11 01:12:19'),(313,11,'13465400','Rua Alvaro Ribeiro','12121','','Vila Rehder','Americana','SP','Brasil','2019-05-11 01:18:56'),(314,11,'13465400','Rua Alvaro Ribeiro','12121','','Vila Rehder','Americana','SP','Brasil','2019-05-11 01:36:18'),(315,11,'13465400','Rua Alvaro Ribeiro','12121','','Vila Rehder','Americana','SP','Brasil','2019-05-11 01:36:39'),(316,11,'13465400','Rua Alvaro Ribeiro','12121','','Vila Rehder','Americana','SP','Brasil','2019-05-11 01:36:52'),(317,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 01:38:13'),(318,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 01:38:26'),(319,11,'13465400','Rua Alvaro Ribeiro','1111','','Vila Rehder','Americana','SP','Brasil','2019-05-11 01:39:27'),(320,11,'13465400','Rua Alvaro Ribeiro','1111','','Vila Rehder','Americana','SP','Brasil','2019-05-11 01:40:13'),(321,11,'13465400','Rua Alvaro Ribeiro','1111','','Vila Rehder','Americana','SP','Brasil','2019-05-11 01:42:36'),(322,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 01:46:59'),(323,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 01:50:22'),(324,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 01:50:32'),(325,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 01:50:55'),(326,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 01:51:52'),(327,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 01:53:22'),(328,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 01:55:58'),(329,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 01:58:38'),(330,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 02:02:56'),(331,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 02:05:55'),(332,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 02:08:10'),(333,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 02:10:32'),(334,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 02:11:01'),(335,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 02:11:45'),(336,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 02:11:46'),(337,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 02:12:08'),(338,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 02:12:40'),(339,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 02:12:58'),(340,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 02:14:17'),(341,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 02:29:17'),(342,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 02:30:43'),(343,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 02:31:26'),(344,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 02:35:04'),(345,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 02:38:00'),(346,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 02:39:11'),(347,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 02:47:48'),(348,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 02:54:10'),(349,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 02:56:06'),(350,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 03:04:07'),(351,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 03:05:04'),(352,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 03:06:53'),(353,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 03:07:22'),(354,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 03:14:20'),(355,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 03:16:52'),(356,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 03:17:29'),(357,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 03:20:52'),(358,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 03:21:23'),(359,11,'13465400','Rua Alvaro Ribeiro','1111','','Vila Rehder','Americana','SP','Brasil','2019-05-11 03:23:20'),(360,11,'13465400','Rua Alvaro Ribeiro','1111','','Vila Rehder','Americana','SP','Brasil','2019-05-11 03:25:44'),(361,11,'13465400','Rua Alvaro Ribeiro','1111','','Vila Rehder','Americana','SP','Brasil','2019-05-11 03:26:51'),(362,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 04:03:19'),(363,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 04:04:02'),(364,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 04:04:33'),(365,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 04:14:15'),(366,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 04:25:14'),(367,11,'13465400','Rua Alvaro Ribeiro','1321','','Vila Rehder','Americana','SP','Brasil','2019-05-11 04:27:49'),(368,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 04:29:35'),(369,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 04:29:55'),(370,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 04:30:58'),(371,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 04:31:30'),(372,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 04:31:41'),(373,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 04:31:57'),(374,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 04:33:29'),(375,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 04:33:34'),(376,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 04:34:21'),(377,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 04:35:36'),(378,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 04:37:52'),(379,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 04:38:08'),(380,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 04:42:49'),(381,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 04:47:50'),(382,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 04:48:15'),(383,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 04:50:46'),(384,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 04:51:48'),(385,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 04:52:28'),(386,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 04:52:46'),(387,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 04:53:25'),(388,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 04:55:35'),(389,11,'13465400','Rua Alvaro Ribeiro','1111','','Vila Rehder','Americana','SP','Brasil','2019-05-11 04:56:17'),(390,11,'13465400','Rua Alvaro Ribeiro','3800','','Vila Rehder','Americana','SP','Brasil','2019-05-11 05:00:28'),(391,11,'13465400','Rua Alvaro Ribeiro','11111','','Vila Rehder','Americana','SP','Brasil','2019-05-11 15:22:23'),(392,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 15:30:31'),(393,11,'13465400','Rua Alvaro Ribeiro','111111','','Vila Rehder','Americana','SP','Brasil','2019-05-11 16:15:09'),(394,13,'30160037','Rua Espirito Santo','1','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-11 16:49:16'),(395,11,'30160031','Rua Espirito Santo','11111111','de 421/422 a 699/700','Centro','Belo Horizonte','MG','Brasil','2019-05-11 21:06:38'),(396,11,'30160037','Rua Espirito Santo','10000','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-11 23:34:03'),(397,13,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 23:36:45'),(398,13,'13465400','Rua Alvaro Ribeiro','11111','','Vila Rehder','Americana','SP','Brasil','2019-05-12 03:36:57'),(399,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 19:36:10'),(400,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 19:36:48'),(401,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 19:37:16'),(402,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 19:38:03'),(403,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 19:40:43'),(404,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 19:41:01'),(405,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 19:46:38'),(406,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 19:46:49'),(407,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 19:46:59'),(408,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 19:50:31'),(409,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 19:52:53'),(410,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 19:53:36'),(411,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 19:57:07'),(412,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 19:58:12'),(413,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 20:00:03'),(414,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 20:00:17'),(415,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 20:00:27'),(416,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 20:33:34'),(417,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 20:34:05'),(418,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 20:34:38'),(419,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 20:35:45'),(420,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 20:36:23'),(421,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 20:44:34'),(422,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 20:44:43'),(423,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 20:44:59'),(424,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 20:45:38'),(425,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 20:46:04'),(426,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 20:46:55'),(427,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 20:47:13'),(428,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 20:47:39'),(429,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 20:47:54'),(430,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 20:48:02'),(431,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 20:48:14'),(432,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 20:48:27'),(433,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 20:48:52'),(434,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 20:49:02'),(435,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 20:56:41'),(436,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 20:57:48'),(437,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 20:59:41'),(438,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 21:00:19'),(439,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 21:01:46'),(440,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 21:01:59'),(441,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 21:02:23'),(442,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 21:04:05'),(443,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 21:05:51'),(444,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 21:06:21'),(445,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 21:07:26'),(446,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 21:07:55'),(447,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 21:09:00'),(448,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 21:09:39'),(449,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 21:11:43'),(450,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 21:12:09'),(451,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 21:14:10'),(452,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 21:14:53'),(453,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 21:15:08'),(454,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 21:15:44'),(455,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 21:39:17'),(456,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 21:43:30'),(457,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 21:48:21'),(458,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 21:48:48'),(459,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 21:50:11'),(460,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 21:53:08'),(461,26,'13465400','Rua Alvaro Ribeiro','111111','','Vila Rehder','Americana','SP','BRA','2019-05-14 21:56:33'),(462,26,'30160037','Rua Espirito Santo','1757','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','BRA','2019-05-14 22:15:15'),(463,26,'13465400','Rua Alvaro Ribeiro','1000','','Vila Rehder','Americana','SP','BRA','2019-05-14 22:27:50'),(464,28,'30160037','Rua Espirito Santo','111111111','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','BRA','2019-05-15 14:32:37'),(465,28,'30160037','Rua Espirito Santo','11111','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','BRA','2019-05-15 14:41:46');
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
-- Table structure for table `tb_banks`
--

DROP TABLE IF EXISTS `tb_banks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_banks` (
  `idbank` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) NOT NULL,
  `desbankcode` varchar(22) CHARACTER SET latin1 DEFAULT NULL,
  `desbanknumber` varchar(4) CHARACTER SET latin1 DEFAULT NULL,
  `desagencynumber` varchar(11) CHARACTER SET latin1 DEFAULT NULL,
  `desagencycheck` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `desaccounttype` varchar(11) CHARACTER SET latin1 DEFAULT NULL,
  `desaccountnumber` varchar(11) CHARACTER SET latin1 DEFAULT NULL,
  `desaccountcheck` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idbank`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_banks`
--

LOCK TABLES `tb_banks` WRITE;
/*!40000 ALTER TABLE `tb_banks` DISABLE KEYS */;
INSERT INTO `tb_banks` VALUES (1,26,'BKA-KKANWJ3D58E4','027','123456','5','CHECKING','123146','6','2019-05-15 19:29:41');
/*!40000 ALTER TABLE `tb_banks` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=328 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_carts`
--

LOCK TABLES `tb_carts` WRITE;
/*!40000 ALTER TABLE `tb_carts` DISABLE KEYS */;
INSERT INTO `tb_carts` VALUES (314,'vfh3cas5jr4utmt8hs9pofu1p5',11,1,'2019-05-11 16:15:13'),(315,'vfh3cas5jr4utmt8hs9pofu1p5',13,1,'2019-05-11 16:36:00'),(316,'vfh3cas5jr4utmt8hs9pofu1p5',13,1,'2019-05-11 16:50:23'),(317,'vfh3cas5jr4utmt8hs9pofu1p5',11,1,'2019-05-11 21:06:43'),(318,'vfh3cas5jr4utmt8hs9pofu1p5',11,0,'2019-05-11 23:34:07'),(319,'vfh3cas5jr4utmt8hs9pofu1p5',13,1,'2019-05-11 23:36:49'),(320,'vfh3cas5jr4utmt8hs9pofu1p5',13,0,'2019-05-12 03:37:02'),(321,'vfh3cas5jr4utmt8hs9pofu1p5',26,1,'2019-05-14 17:18:18'),(322,'vfh3cas5jr4utmt8hs9pofu1p5',26,1,'2019-05-14 21:56:37'),(323,'vfh3cas5jr4utmt8hs9pofu1p5',26,1,'2019-05-14 22:15:19'),(324,'vfh3cas5jr4utmt8hs9pofu1p5',26,0,'2019-05-14 22:27:55'),(325,'vfh3cas5jr4utmt8hs9pofu1p5',28,1,'2019-05-15 14:31:45'),(326,'vfh3cas5jr4utmt8hs9pofu1p5',28,0,'2019-05-15 14:32:42'),(327,'qokfr6alq9ah4omseooi3e4k3c',11,0,'2019-05-16 00:58:12');
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
) ENGINE=InnoDB AUTO_INCREMENT=488 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_cartsproducts`
--

LOCK TABLES `tb_cartsproducts` WRITE;
/*!40000 ALTER TABLE `tb_cartsproducts` DISABLE KEYS */;
INSERT INTO `tb_cartsproducts` VALUES (464,314,98,NULL,'2019-05-11 23:31:21'),(465,317,112,NULL,'2019-05-11 23:33:04'),(466,317,112,NULL,'2019-05-11 23:33:06'),(467,316,108,NULL,'2019-05-11 23:35:53'),(468,316,108,NULL,'2019-05-11 23:35:54'),(469,316,108,NULL,'2019-05-11 23:35:55'),(470,319,109,NULL,'2019-05-12 03:36:00'),(471,319,108,NULL,'2019-05-12 03:36:06'),(472,319,108,NULL,'2019-05-12 03:36:11'),(473,319,108,NULL,'2019-05-12 03:36:12'),(474,321,114,NULL,'2019-05-14 19:34:43'),(475,321,114,NULL,'2019-05-14 19:34:45'),(476,321,113,NULL,'2019-05-14 19:34:52'),(477,321,114,NULL,'2019-05-14 21:55:47'),(478,322,116,NULL,'2019-05-14 22:13:41'),(479,322,115,NULL,'2019-05-14 22:13:52'),(480,322,116,NULL,'2019-05-14 22:13:56'),(481,323,118,NULL,'2019-05-14 22:26:05'),(482,323,117,NULL,'2019-05-14 22:26:10'),(483,323,118,NULL,'2019-05-14 22:26:14'),(484,325,119,NULL,'2019-05-15 14:31:53'),(485,325,119,NULL,'2019-05-15 14:31:55'),(486,326,119,NULL,'2019-05-15 14:41:06'),(487,326,119,NULL,'2019-05-15 14:41:08');
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
  `desconsort` varchar(128) CHARACTER SET latin1 DEFAULT 'Meu Cônjuge',
  `desconsortemail` varchar(128) CHARACTER SET latin1 DEFAULT NULL,
  `desconsortphoto` varchar(256) CHARACTER SET latin1 DEFAULT NULL,
  `desconsortextension` varchar(4) CHARACTER SET latin1 DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idconsort`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_consorts`
--

LOCK TABLES `tb_consorts` WRITE;
/*!40000 ALTER TABLE `tb_consorts` DISABLE KEYS */;
INSERT INTO `tb_consorts` VALUES (1,11,'Ludmiila','mila@gmail.com','0.jpg','jpg','2019-05-11 15:40:52'),(2,13,'Ana Lucia','morganaluke@gmail.com','0.jpg','jpg','2019-05-11 16:51:16'),(3,26,'Jose Paulo','jpccambraia@gmail.com','0.jpg','jpg','2019-05-14 22:01:12'),(4,28,'Maria','maria@gmail.com','0.jpg','jpg','2019-05-15 14:33:07');
/*!40000 ALTER TABLE `tb_consorts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_customers`
--

DROP TABLE IF EXISTS `tb_customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_customers` (
  `idcustomer` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) NOT NULL,
  `descustomercode` varchar(22) CHARACTER SET latin1 DEFAULT NULL,
  `desname` varchar(128) DEFAULT NULL,
  `desemail` varchar(128) CHARACTER SET latin1 DEFAULT NULL,
  `nrddd` int(2) DEFAULT NULL,
  `nrphone` bigint(20) DEFAULT NULL,
  `intypedoc` tinyint(4) DEFAULT NULL,
  `desdocument` varchar(14) CHARACTER SET latin1 DEFAULT NULL,
  `deszipcode` char(8) DEFAULT NULL,
  `desaddress` varchar(128) DEFAULT NULL,
  `desnumber` varchar(16) DEFAULT NULL,
  `descomplement` varchar(32) DEFAULT NULL,
  `desdistrict` varchar(32) DEFAULT NULL,
  `descity` varchar(32) DEFAULT NULL,
  `desstate` varchar(32) DEFAULT NULL,
  `descountry` varchar(32) DEFAULT NULL,
  `descardcode` varchar(22) DEFAULT NULL,
  `desbrand` varchar(8) DEFAULT NULL,
  `infirst6` varchar(6) DEFAULT NULL,
  `inlast4` varchar(4) DEFAULT NULL,
  `dtbirth` date DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idcustomer`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_customers`
--

LOCK TABLES `tb_customers` WRITE;
/*!40000 ALTER TABLE `tb_customers` DISABLE KEYS */;
INSERT INTO `tb_customers` VALUES (1,35,'CUS-7XG8M9SYKMJ9','Joao Cesar','joao@gmail.com',31,984050125,0,'01224202686','13465400','Rua Alvaro Ribeiro','1757','401','Major','Americana','SP','BRA','CRC-SBIMKU7Z4JUG','VISA','411111','1111','1970-02-02','2019-05-21 23:07:57'),(2,35,'CUS-BY0J4LGEYF71','Joao Cesar','joao@gmail.com',31,984050125,0,'01224202686','13465400','Rua Alvaro Ribeiro','1757','401','Major','Americana','SP','BRA','CRC-5SY18LDZ1DX7','VISA','411111','1111','1970-02-02','2019-05-21 23:09:05'),(3,35,'CUS-VGCYYE27CQ9F','Joao Cesar','joao@gmail.com',31,984050125,0,'01224202686','13465400','Rua Alvaro Ribeiro','1757','401','Major','Americana','SP','BRA','CRC-XN5E697G2DNP','VISA','411111','1111','1970-02-02','2019-05-22 01:01:49'),(4,35,'CUS-HCSO04GY4TU7','Joao Cesar','joao@gmail.com',31,984050125,0,'01224202686','13465400','Rua Alvaro Ribeiro','1757','401','Major','Americana','SP','BRA','CRC-854UCELWQ2XV','VISA','411111','1111','1970-02-02','2019-05-22 01:02:05'),(5,35,'CUS-16KLOCDWVDQ1','Joao Cesar','joao@gmail.com',31,984050125,0,'01224202686','13465400','Rua Alvaro Ribeiro','1757','401','Major','Americana','SP','BRA','CRC-5P725EK2HR8X','VISA','411111','1111','1970-02-02','2019-05-22 01:02:37'),(6,35,'CUS-E30R0KVN2C6M','Joao Cesar','joao@gmail.com',31,984050125,0,'01224202686','13465400','Rua Alvaro Ribeiro','1757','401','Major','Americana','SP','BRA','CRC-PZFEXETRT7AX','VISA','411111','1111','1970-02-02','2019-05-22 01:02:57'),(7,35,'CUS-8ZSSQBNQ1MPN','Joao Cesar','joao@gmail.com',31,984050125,0,'01224202686','13465400','Rua Alvaro Ribeiro','1757','401','Major','Americana','SP','BRA','CRC-DN9R31MUQ72V','VISA','411111','1111','1970-02-02','2019-05-22 01:03:38'),(8,35,'CUS-TY4C88XMTNE7','Joao Cesar','joao@gmail.com',31,984050125,0,'01224202686','13465400','Rua Alvaro Ribeiro','1757','401','Major','Americana','SP','BRA','CRC-1THZYDDDTDE3','VISA','411111','1111','1970-02-02','2019-05-22 01:04:15'),(9,35,'CUS-S2IUHP1VH5TX','Joao Cesar','joao@gmail.com',31,984050125,0,'01224202686','13465400','Rua Alvaro Ribeiro','1757','401','Major','Americana','SP','BRA','CRC-EN5T7491OK4H','VISA','411111','1111','1970-02-02','2019-05-22 01:43:20'),(10,35,'CUS-NDCF1BPDJ8YJ','Joao Cesar','joao@gmail.com',31,984050125,0,'01224202686','13465400','Rua Alvaro Ribeiro','1757','401','Major','Americana','SP','BRA','CRC-B2SI0BERS2JL','VISA','411111','1111','1970-02-02','2019-05-22 01:43:46'),(11,35,'CUS-54W1V4JZ8UGU','Joao Cesar','joao@gmail.com',31,984050125,0,'01224202686','13465400','Rua Alvaro Ribeiro','1757','401','Major','Americana','SP','BRA','CRC-1L45E847R74B','VISA','411111','1111','1970-02-02','2019-05-22 01:44:42'),(12,35,'CUS-392ALWJ5QCCR','Joao Cesar','joao@gmail.com',31,984050125,0,'01224202686','13465400','Rua Alvaro Ribeiro','1757','401','Major','Americana','SP','BRA','CRC-GLSJO0E0SLOP','VISA','411111','1111','1970-02-02','2019-05-22 01:45:04'),(13,35,'CUS-SJ74MRBUMRF3','Joao Cesar','joao@gmail.com',31,984050125,0,'01224202686','13465400','Rua Alvaro Ribeiro','1757','401','Major','Americana','SP','BRA','CRC-CH11MC9QAUDI','VISA','411111','1111','1970-02-02','2019-05-22 01:45:31'),(14,35,'CUS-EMRVG6HYFL7M','Joao Cesar','joao@gmail.com',31,984050125,0,'01224202686','13465400','Rua Alvaro Ribeiro','1757','401','Major','Americana','SP','BRA','CRC-DIVPZY8R6E3Q','VISA','411111','1111','1970-02-02','2019-05-22 01:45:53'),(15,35,'CUS-RBBRPITZ7XPP','Joao Cesar','joao@gmail.com',31,984050125,0,'01224202686','13465400','Rua Alvaro Ribeiro','1757','401','Major','Americana','SP','BRA','CRC-UDZ8QN8AF0HG','VISA','411111','1111','1970-02-02','2019-05-22 01:47:06'),(16,35,'CUS-LS8PEJ3TH2TH','Joao Cesar','joao@gmail.com',31,984050125,0,'01224202686','13465400','Rua Alvaro Ribeiro','1757','401','Major','Americana','SP','BRA','CRC-JTBWN2GL9UMZ','VISA','411111','1111','1970-02-02','2019-05-22 01:47:31'),(17,35,'CUS-YTYGLNM2KM1K','Joao Cesar','joao@gmail.com',31,984050125,0,'01224202686','13465400','Rua Alvaro Ribeiro','1757','401','Major','Americana','SP','BRA','CRC-BUO9BNO5ZDKW','VISA','411111','1111','1970-02-02','2019-05-22 01:48:44'),(18,35,'CUS-EEH8EL9L13VQ','Joao Cesar','joao@gmail.com',31,984050125,0,'01224202686','13465400','Rua Alvaro Ribeiro','1757','401','Major','Americana','SP','BRA','CRC-XLJQ7RK3WOWH','VISA','411111','1111','1970-02-02','2019-05-22 01:49:23'),(19,35,'CUS-E65SMRS9Q4OS','Joao Cesar','joao@gmail.com',31,984050125,0,'01224202686','13465400','Rua Alvaro Ribeiro','1757','401','Major','Americana','SP','BRA','CRC-0E5L0LQCUQG7','VISA','411111','1111','1970-02-02','2019-05-22 01:49:40'),(20,35,'CUS-MVNKXK0GA99K','Joao Cesar','joao@gmail.com',31,984050125,0,'01224202686','13465400','Rua Alvaro Ribeiro','1757','401','Major','Americana','SP','BRA','CRC-RD41Z3LJ6BP1','VISA','411111','1111','1970-02-02','2019-05-22 01:53:59'),(21,35,'CUS-0T6B5U7MW97Q','Joao Cesar','joao@gmail.com',31,984050125,0,'01224202686','13465400','Rua Alvaro Ribeiro','1757','401','Major','Americana','SP','BRA','CRC-Z1AS69W80CQL','VISA','411111','1111','1970-02-02','2019-05-22 01:54:22'),(22,35,'CUS-TXPQ3VW4LJ13','Joao Cesar','joao@gmail.com',31,984050125,0,'01224202686','13465400','Rua Alvaro Ribeiro','1757','401','Major','Americana','SP','BRA','CRC-VTJKP69JZ6O7','VISA','411111','1111','1970-02-02','2019-05-22 01:56:13'),(23,35,'CUS-M7C3BBILQM0J','Joao Cesar','joao@gmail.com',31,984050125,0,'01224202686','13465400','Rua Alvaro Ribeiro','1757','401','Major','Americana','SP','BRA','CRC-D8LZP6Y5WOA4','VISA','411111','1111','1970-02-02','2019-05-22 01:57:40'),(24,35,'CUS-XBDBVAQ1SO72','Joao Cesar','joao@gmail.com',31,984050125,0,'01224202686','13465400','Rua Alvaro Ribeiro','1757','401','Major','Americana','SP','BRA','CRC-THYU22W28NRC','VISA','411111','1111','1970-02-02','2019-05-22 01:58:33'),(25,35,'CUS-54WA7HYMZHDF','Joao Cesar','joao@gmail.com',31,984050125,0,'01224202686','13465400','Rua Alvaro Ribeiro','1757','401','Major','Americana','SP','BRA','CRC-QVZL91C9EAO5','VISA','411111','1111','1970-02-02','2019-05-22 01:59:57');
/*!40000 ALTER TABLE `tb_customers` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_customstyle`
--

LOCK TABLES `tb_customstyle` WRITE;
/*!40000 ALTER TABLE `tb_customstyle` DISABLE KEYS */;
INSERT INTO `tb_customstyle` VALUES (14,11,1,'','#666667','#666667','#666667','#666667','#666667','#666667','#666667','Arial2','32','#666667','Arial2','32','#666667','Arial2','32','#666667','Arial2','32','2019-04-25 13:15:56'),(15,13,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-05-05 02:56:30'),(16,26,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-05-14 17:18:13'),(17,28,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-05-15 14:31:41');
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
  `desevent` varchar(128) CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  `desdescription` text CHARACTER SET utf8 COLLATE utf8_czech_ci,
  `deslocation` varchar(128) CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  `nrphone` bigint(20) DEFAULT NULL,
  `desphoto` varchar(256) CHARACTER SET utf8 COLLATE utf8_czech_ci DEFAULT NULL,
  `dtevent` datetime NOT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idevent`),
  KEY `fk_events_users_idx` (`iduser`),
  CONSTRAINT `fk_events_users` FOREIGN KEY (`iduser`) REFERENCES `tb_users` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;
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
  `idinitialpage` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) NOT NULL,
  `inparty` tinyint(4) DEFAULT NULL,
  `inbestfriends` tinyint(4) DEFAULT NULL,
  `instore` tinyint(4) DEFAULT NULL,
  `inalbum` tinyint(4) DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idinitialpage`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
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
  `inmessagestatus` tinyint(4) DEFAULT '0',
  `desmessage` varchar(128) DEFAULT NULL,
  `desemail` varchar(128) DEFAULT NULL,
  `desdescription` text,
  `inreply` tinyint(4) DEFAULT NULL,
  `desreply` text,
  `dtreply` datetime DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idmessage`),
  KEY `fk_messages_users_idx` (`iduser`),
  CONSTRAINT `fk_messages_users` FOREIGN KEY (`iduser`) REFERENCES `tb_users` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_messages`
--

LOCK TABLES `tb_messages` WRITE;
/*!40000 ALTER TABLE `tb_messages` DISABLE KEYS */;
INSERT INTO `tb_messages` VALUES (13,11,0,'Pedro Coimbra','coimbra@gmail.com','Felicitações amigo! Tudo de bom',NULL,'Obrigado!!! fique com Deus vc e tio XXXxxx','2020-02-24 18:25:00','2019-04-27 16:25:56'),(15,26,0,'Jose Paulo','jpccambraia@gmail.com','Parabens e felicidade aos noivos!',NULL,'',NULL,'2019-05-17 20:30:32');
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
) ENGINE=InnoDB AUTO_INCREMENT=380 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_orders`
--

LOCK TABLES `tb_orders` WRITE;
/*!40000 ALTER TABLE `tb_orders` DISABLE KEYS */;
INSERT INTO `tb_orders` VALUES (308,315,13,1,394,2500.00,'2019-05-11 16:49:16'),(309,314,11,1,395,10801.50,'2019-05-11 21:06:38'),(310,317,11,1,396,10000.00,'2019-05-11 23:34:03'),(311,316,13,1,397,3000.00,'2019-05-11 23:36:45'),(312,319,13,1,398,5000.00,'2019-05-12 03:36:57'),(313,321,26,1,399,4000.00,'2019-05-14 19:36:10'),(314,321,26,1,400,4000.00,'2019-05-14 19:36:48'),(315,321,26,1,401,4000.00,'2019-05-14 19:37:16'),(316,321,26,1,402,4000.00,'2019-05-14 19:38:03'),(317,321,26,1,403,4000.00,'2019-05-14 19:40:43'),(318,321,26,1,404,4000.00,'2019-05-14 19:41:01'),(319,321,26,1,405,4000.00,'2019-05-14 19:46:38'),(320,321,26,1,406,4000.00,'2019-05-14 19:46:49'),(321,321,26,1,407,4000.00,'2019-05-14 19:46:59'),(322,321,26,1,408,4000.00,'2019-05-14 19:50:31'),(323,321,26,1,409,4000.00,'2019-05-14 19:52:53'),(324,321,26,1,410,4000.00,'2019-05-14 19:53:36'),(325,321,26,1,411,4000.00,'2019-05-14 19:57:07'),(326,321,26,1,412,4000.00,'2019-05-14 19:58:12'),(327,321,26,1,413,4000.00,'2019-05-14 20:00:03'),(328,321,26,1,414,4000.00,'2019-05-14 20:00:17'),(329,321,26,1,415,4000.00,'2019-05-14 20:00:27'),(330,321,26,1,416,4000.00,'2019-05-14 20:33:34'),(331,321,26,1,417,4000.00,'2019-05-14 20:34:05'),(332,321,26,1,418,4000.00,'2019-05-14 20:34:39'),(333,321,26,1,419,4000.00,'2019-05-14 20:35:45'),(334,321,26,1,420,4000.00,'2019-05-14 20:36:23'),(335,321,26,1,421,4000.00,'2019-05-14 20:44:34'),(336,321,26,1,422,4000.00,'2019-05-14 20:44:43'),(337,321,26,1,423,4000.00,'2019-05-14 20:44:59'),(338,321,26,1,424,4000.00,'2019-05-14 20:45:38'),(339,321,26,1,425,4000.00,'2019-05-14 20:46:04'),(340,321,26,1,426,4000.00,'2019-05-14 20:46:55'),(341,321,26,1,427,4000.00,'2019-05-14 20:47:13'),(342,321,26,1,428,4000.00,'2019-05-14 20:47:39'),(343,321,26,1,429,4000.00,'2019-05-14 20:47:54'),(344,321,26,1,430,4000.00,'2019-05-14 20:48:02'),(345,321,26,1,431,4000.00,'2019-05-14 20:48:14'),(346,321,26,1,432,4000.00,'2019-05-14 20:48:27'),(347,321,26,1,433,4000.00,'2019-05-14 20:48:52'),(348,321,26,1,434,4000.00,'2019-05-14 20:49:02'),(349,321,26,1,435,4000.00,'2019-05-14 20:56:41'),(350,321,26,1,436,4000.00,'2019-05-14 20:57:48'),(351,321,26,1,437,4000.00,'2019-05-14 20:59:41'),(352,321,26,1,438,4000.00,'2019-05-14 21:00:19'),(353,321,26,1,439,4000.00,'2019-05-14 21:01:46'),(354,321,26,1,440,4000.00,'2019-05-14 21:01:59'),(355,321,26,1,441,4000.00,'2019-05-14 21:02:23'),(356,321,26,1,442,4000.00,'2019-05-14 21:04:05'),(357,321,26,1,443,4000.00,'2019-05-14 21:05:52'),(358,321,26,1,444,4000.00,'2019-05-14 21:06:21'),(359,321,26,1,445,4000.00,'2019-05-14 21:07:26'),(360,321,26,1,446,4000.00,'2019-05-14 21:07:55'),(361,321,26,1,447,4000.00,'2019-05-14 21:09:00'),(362,321,26,1,448,4000.00,'2019-05-14 21:09:39'),(363,321,26,1,449,4000.00,'2019-05-14 21:11:43'),(364,321,26,1,450,4000.00,'2019-05-14 21:12:09'),(365,321,26,1,451,4000.00,'2019-05-14 21:14:10'),(366,321,26,1,452,4000.00,'2019-05-14 21:14:53'),(367,321,26,1,453,4000.00,'2019-05-14 21:15:08'),(368,321,26,1,454,4000.00,'2019-05-14 21:15:44'),(369,321,26,1,455,4000.00,'2019-05-14 21:39:17'),(370,321,26,1,456,4000.00,'2019-05-14 21:43:30'),(371,321,26,1,457,4000.00,'2019-05-14 21:48:21'),(372,321,26,1,458,4000.00,'2019-05-14 21:48:48'),(373,321,26,1,459,4000.00,'2019-05-14 21:50:11'),(374,321,26,1,460,4000.00,'2019-05-14 21:53:08'),(375,321,26,1,461,5500.00,'2019-05-14 21:56:33'),(376,322,26,1,462,2400.00,'2019-05-14 22:15:15'),(377,323,26,1,463,3200.00,'2019-05-14 22:27:51'),(378,325,28,1,464,1400.00,'2019-05-15 14:32:37'),(379,326,28,1,465,1400.00,'2019-05-15 14:41:46');
/*!40000 ALTER TABLE `tb_orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_orderssellers`
--

DROP TABLE IF EXISTS `tb_orderssellers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_orderssellers` (
  `idorderseller` int(11) NOT NULL AUTO_INCREMENT,
  `idproductseller` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idpayment` int(11) DEFAULT NULL,
  `iddiscount` int(11) DEFAULT NULL,
  `idcupom` int(11) DEFAULT NULL,
  `incupom` tinyint(4) DEFAULT NULL,
  `indiscount` tinyint(4) DEFAULT '0',
  `desordercode` varchar(22) CHARACTER SET latin1 DEFAULT NULL,
  `vlregulartotal` decimal(10,2) DEFAULT NULL,
  `vlsaletotal` decimal(10,2) DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idorderseller`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_orderssellers`
--

LOCK TABLES `tb_orderssellers` WRITE;
/*!40000 ALTER TABLE `tb_orderssellers` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_orderssellers` ENABLE KEYS */;
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
  `despartydescription` text CHARACTER SET latin1,
  `despartylocation` varchar(128) CHARACTER SET latin1 DEFAULT NULL,
  `despartyphoto` varchar(256) CHARACTER SET latin1 DEFAULT NULL,
  `dtparty` datetime DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idparty`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
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
  `idcustomer` int(11) DEFAULT NULL,
  `desstatus` varchar(16) DEFAULT NULL,
  `despaymentcode` varchar(22) DEFAULT NULL,
  `desholdername` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `nrholdercountryarea` varchar(4) CHARACTER SET latin1 DEFAULT NULL,
  `nrholderddd` int(2) DEFAULT NULL,
  `nrholderphone` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `inholdertypedoc` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `desholderdocument` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `desholderzipcode` char(8) CHARACTER SET latin1 DEFAULT NULL,
  `desholderaddress` varchar(128) CHARACTER SET latin1 DEFAULT NULL,
  `desholdernumber` varchar(16) CHARACTER SET latin1 DEFAULT NULL,
  `desholdercomplement` varchar(32) CHARACTER SET latin1 DEFAULT NULL,
  `desholderdistrict` varchar(32) CHARACTER SET latin1 DEFAULT NULL,
  `desholdercity` varchar(32) CHARACTER SET latin1 DEFAULT NULL,
  `desholderstate` varchar(32) CHARACTER SET latin1 DEFAULT NULL,
  `dtholderbirth` date DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idpayment`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_payments`
--

LOCK TABLES `tb_payments` WRITE;
/*!40000 ALTER TABLE `tb_payments` DISABLE KEYS */;
INSERT INTO `tb_payments` VALUES (128,24,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,'13465400','Rua Alvaro Ribeiro','401','','Vila Rehder','Americana','SP',NULL,'2019-05-14 02:37:18'),(144,26,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,'30160037','Rua Espirito Santo','1757','401','Lourdes','Belo Horizonte','MG',NULL,'2019-05-14 13:03:05'),(147,27,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,'13465400','Rua Alvaro','401','','Rehder','Americana','SP',NULL,'2019-05-15 00:58:30'),(148,28,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,'13465400','Rua Alvaro','400','','Rehder','Americana','SP',NULL,'2019-05-15 01:11:21');
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
  `desnick` varchar(128) DEFAULT NULL,
  `desemail` varchar(128) DEFAULT NULL,
  `nrcountryarea` int(4) DEFAULT NULL,
  `nrddd` int(2) DEFAULT NULL,
  `nrphone` bigint(20) DEFAULT NULL,
  `intypedoc` tinyint(4) DEFAULT NULL,
  `desdocument` varchar(14) DEFAULT NULL,
  `desphoto` varchar(256) DEFAULT NULL,
  `desextension` varchar(4) DEFAULT NULL,
  `dtbirth` date DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idperson`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_persons`
--

LOCK TABLES `tb_persons` WRITE;
/*!40000 ALTER TABLE `tb_persons` DISABLE KEYS */;
INSERT INTO `tb_persons` VALUES (11,'Jose Paulo de Carvalho',NULL,'paulowebphp@gmail.com',NULL,NULL,31984050000,0,NULL,'0.jpg','jpg',NULL,'2019-04-24 16:59:04'),(12,'Paulo de Carvalho',NULL,'pwsecvendas@gmail.com',NULL,NULL,31984050125,0,NULL,'0.jpg','jpg',NULL,'2019-05-02 20:28:12'),(13,'Maria Aparecida',NULL,'macambraia@hotmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-12 22:43:30'),(14,'Maria Aparecida',NULL,'macambraia@hotmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-12 22:46:23'),(15,'Maria Aparecida',NULL,'macambraia@hotmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-12 22:47:32'),(16,'Maria Aparecida',NULL,'macambraia@hotmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-12 22:50:19'),(17,'Maria Aparecida',NULL,'macambraia@hotmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-12 23:20:09'),(18,'Maria Apa',NULL,'macambraia@hotmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-12 23:21:09'),(19,'Maria Ap',NULL,'macambraia@hotmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-12 23:22:26'),(20,'Maria Aparecida',NULL,'macambraia@hotmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-12 23:23:12'),(21,'Maria Aparecida',NULL,'macambraia@hotmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-12 23:24:11'),(22,'Maria Ap',NULL,'macambraia@hotmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-12 23:31:24'),(23,'Maria Aparecida',NULL,'macambraia@hotmail.com',NULL,NULL,31123451234,0,NULL,'0.jpg','jpg',NULL,'2019-05-13 13:00:45'),(24,'Maria Aparecida Seabra',NULL,'macambraia@hotmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-14 12:33:05'),(25,'Maria Aparecida Seabra',NULL,'macambraia@hotmail.com',NULL,NULL,31123451234,0,NULL,'0.jpg','jpg',NULL,'2019-05-14 12:33:16'),(26,'Jose Cambraia',NULL,'jpccambraia@gmail.com',NULL,NULL,31123451234,0,NULL,'0.jpg','jpg',NULL,'2019-05-15 00:38:59'),(27,'Paulo Roberto',NULL,'paulornc@yahoo.com',NULL,NULL,31123451324,0,NULL,'0.jpg','jpg',NULL,'2019-05-15 01:10:41'),(28,'Luiz Cambraia','Luiz Cambraia','luiz@hotmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-21 13:05:12'),(29,'Luiz Cambraia','Luiz','luiz@hotmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-21 13:10:35'),(30,'Cesar Maciel','Cesar','maciel@gmail.com',NULL,12,123456789,NULL,'01224202686','0.jpg','jpg','1980-02-02','2019-05-21 17:31:32'),(31,'Geromel Santos','Geromel','geromel@hotmail.com',NULL,12,123456789,NULL,'01224202686','0.jpg','jpg','1980-02-02','2019-05-21 18:13:08'),(32,'Lucio Moraes','Lucio','lucio@hotmail.com',NULL,31,123456789,NULL,'01224202686','0.jpg','jpg','1984-12-12','2019-05-21 19:59:50'),(33,'Cesar Mariano','Cesar','cesar@gmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-21 20:50:31'),(34,'Joao Cesar','Joao','joao@gmail.com',55,31,984050125,0,'01224202686','0.jpg','jpg','1970-02-02','2019-05-21 21:06:17');
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
  `iddiscount` int(11) DEFAULT NULL,
  `idcupom` int(11) DEFAULT NULL,
  `incupom` tinyint(4) DEFAULT '0',
  `indiscount` tinyint(4) DEFAULT '0',
  `insellercategory` tinyint(4) DEFAULT NULL,
  `inplancode` int(3) DEFAULT NULL,
  `inmigration` tinyint(4) DEFAULT NULL,
  `inperiod` tinyint(4) DEFAULT NULL,
  `desplan` varchar(128) DEFAULT NULL,
  `vlregularprice` decimal(10,2) DEFAULT NULL,
  `vlsaleprice` decimal(10,2) DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idplan`)
) ENGINE=InnoDB AUTO_INCREMENT=161 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_plans`
--

LOCK TABLES `tb_plans` WRITE;
/*!40000 ALTER TABLE `tb_plans` DISABLE KEYS */;
INSERT INTO `tb_plans` VALUES (121,24,NULL,NULL,NULL,0,0,0,0,12,NULL,39.99,NULL,'2019-05-14 02:37:18'),(137,26,NULL,NULL,NULL,0,0,0,0,9,NULL,299.99,NULL,'2019-05-14 13:03:05'),(140,27,NULL,NULL,NULL,0,0,0,0,4,NULL,49.99,NULL,'2019-05-15 00:58:30'),(141,28,NULL,NULL,NULL,0,0,0,0,6,NULL,39.99,NULL,'2019-05-15 01:11:21'),(142,35,NULL,NULL,0,0,10,203,0,3,'Plano ClÃ¡ssico',139.99,139.99,'2019-05-22 01:03:38'),(143,35,NULL,NULL,0,0,10,203,0,3,'Plano ClÃ¡ssico',139.99,139.99,'2019-05-22 01:04:15'),(144,35,NULL,NULL,0,0,10,203,0,3,'Plano ClÃ¡ssico',139.99,139.99,'2019-05-22 01:43:20'),(145,35,NULL,NULL,0,0,10,203,0,3,'Plano ClÃ¡ssico',139.99,139.99,'2019-05-22 01:43:46'),(146,35,NULL,NULL,0,0,10,203,0,3,'Plano ClÃ¡ssico',139.99,139.99,'2019-05-22 01:44:42'),(147,35,NULL,NULL,0,0,10,203,0,3,'Plano ClÃ¡ssico',139.99,139.99,'2019-05-22 01:45:04'),(148,35,NULL,NULL,0,0,10,203,0,3,'Plano ClÃ¡ssico',139.99,139.99,'2019-05-22 01:45:31'),(149,35,NULL,NULL,0,0,10,203,0,3,'Plano ClÃ¡ssico',139.99,139.99,'2019-05-22 01:45:53'),(150,35,NULL,NULL,0,0,10,203,0,3,'Plano ClÃ¡ssico',139.99,139.99,'2019-05-22 01:47:06'),(151,35,NULL,NULL,0,0,10,203,0,3,'Plano ClÃ¡ssico',139.99,139.99,'2019-05-22 01:47:31'),(152,35,NULL,NULL,0,0,10,203,0,3,'Plano ClÃ¡ssico',139.99,139.99,'2019-05-22 01:48:44'),(153,35,NULL,NULL,0,0,10,203,0,3,'Plano ClÃ¡ssico',139.99,139.99,'2019-05-22 01:49:23'),(154,35,NULL,NULL,0,0,10,203,0,3,'Plano ClÃ¡ssico',139.99,139.99,'2019-05-22 01:49:40'),(155,35,NULL,NULL,0,0,10,203,0,3,'Plano ClÃ¡ssico',139.99,139.99,'2019-05-22 01:53:59'),(156,35,NULL,NULL,0,0,10,203,0,3,'Plano ClÃ¡ssico',139.99,139.99,'2019-05-22 01:54:22'),(157,35,NULL,NULL,0,0,10,203,0,3,'Plano ClÃ¡ssico',139.99,139.99,'2019-05-22 01:56:13'),(158,35,NULL,NULL,0,0,10,203,0,3,'Plano ClÃ¡ssico',139.99,139.99,'2019-05-22 01:57:40'),(159,35,NULL,NULL,0,0,10,203,0,3,'Plano ClÃ¡ssico',139.99,139.99,'2019-05-22 01:58:33'),(160,35,NULL,NULL,0,0,10,203,0,3,'Plano ClÃ¡ssico',139.99,139.99,'2019-05-22 01:59:57');
/*!40000 ALTER TABLE `tb_plans` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=120 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_products`
--

LOCK TABLES `tb_products` WRITE;
/*!40000 ALTER TABLE `tb_products` DISABLE KEYS */;
INSERT INTO `tb_products` VALUES (101,13,NULL,11,'Tonel',900.00,NULL,NULL,NULL,NULL,'1311101.jpg','jpg','2019-05-05 02:54:21'),(102,13,NULL,11,'Licor',250.00,NULL,NULL,NULL,NULL,'1311102.jpg','jpg','2019-05-05 02:54:28'),(104,13,NULL,11,'Cacha?a Artesanal',200.00,NULL,NULL,NULL,NULL,'1311104.jpg','jpg','2019-05-07 00:58:36'),(105,11,NULL,11,'Espumante',500.00,NULL,NULL,NULL,NULL,'1111105.jpg','jpg','2019-05-11 04:23:10'),(106,11,NULL,16,'Passeio de helic?ptero',700.00,NULL,NULL,NULL,NULL,'1111106.jpg','jpg','2019-05-11 04:23:18'),(107,13,0,11,'Mestre Yoda',800.00,NULL,NULL,NULL,NULL,'1311107.jpg','jpg','2019-05-11 21:00:07'),(108,13,NULL,15,'Xbox 360 Arcade',1000.00,NULL,NULL,NULL,NULL,'1311108.jpg','jpg','2019-05-11 21:00:39'),(109,13,0,15,'Notebook para Devs',2000.00,NULL,NULL,NULL,NULL,'1311109.jpg','jpg','2019-05-11 21:00:54'),(110,11,0,11,'Mestre Yoda',500.50,NULL,NULL,NULL,NULL,'1111110.jpg','jpg','2019-05-11 21:02:26'),(111,11,NULL,16,'Viagem para Nova York',1800.00,NULL,NULL,NULL,NULL,'1111111.jpg','jpg','2019-05-11 21:02:51'),(112,11,0,16,'Uma semana de Cruzeiro maritimo',5000.00,NULL,NULL,NULL,NULL,'1111112.jpg','jpg','2019-05-11 21:03:23'),(113,26,NULL,11,'Adega',1000.00,NULL,NULL,NULL,NULL,'2611113.jpg','jpg','2019-05-14 17:15:24'),(114,26,0,11,'Meu Presente',1500.00,NULL,NULL,NULL,NULL,'2611114.jpg','jpg','2019-05-14 17:15:54'),(115,26,NULL,15,'TV 4K',1800.00,NULL,NULL,NULL,NULL,'2611115.jpg','jpg','2019-05-14 22:13:18'),(116,26,NULL,17,'Poltrona',300.00,NULL,NULL,NULL,NULL,'2611116.jpg','jpg','2019-05-14 22:13:27'),(117,26,NULL,16,'Viagem pela Amaz?nia',1200.00,NULL,NULL,NULL,NULL,'2611117.jpg','jpg','2019-05-14 22:25:05'),(118,26,0,11,'Meu Presente de Teste',1000.00,NULL,NULL,NULL,NULL,'2611118.jpg','jpg','2019-05-14 22:25:25'),(119,28,0,11,'Champagne da Vitória!!!!',700.00,NULL,NULL,NULL,NULL,'2811119.jpg','jpg','2019-05-15 14:29:59');
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
  `desguest` varchar(128) NOT NULL,
  `desemail` varchar(128) DEFAULT NULL,
  `nrphone` bigint(20) DEFAULT NULL,
  `inconfirmed` tinyint(4) DEFAULT NULL,
  `inmaxadults` int(3) DEFAULT NULL,
  `inadultsconfirmed` int(3) DEFAULT NULL,
  `inmaxchildren` int(3) DEFAULT NULL,
  `inchildrenconfirmed` int(3) DEFAULT NULL,
  `desguestaccompanies` text,
  `dtconfirmed` datetime DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idrsvp`),
  KEY `fk_rsvp_users_idx` (`iduser`),
  CONSTRAINT `fk_rsvp_users` FOREIGN KEY (`iduser`) REFERENCES `tb_users` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_rsvp`
--

LOCK TABLES `tb_rsvp` WRITE;
/*!40000 ALTER TABLE `tb_rsvp` DISABLE KEYS */;
INSERT INTO `tb_rsvp` VALUES (11,11,'24João24 Vicente Dornas','242424@hotmail.com',24998882424,0,24,NULL,24,NULL,NULL,NULL,'2019-04-27 14:45:32'),(12,11,'Mais um ','paulo@gmail.com',31984050129,0,1,NULL,10,NULL,NULL,NULL,'2019-04-27 15:00:55'),(13,11,'Maria do Rosário','rosario@rosario.com',29888887777,0,10,NULL,1,NULL,NULL,NULL,'2019-04-27 15:01:06'),(15,11,'55555555555555','55555555555555',12123451234,0,15,NULL,5,NULL,NULL,NULL,'2019-05-01 01:19:04'),(23,26,'Jose Paulo','jpcamb@gmail.com',31987452152,1,2,5,2,5,'Cinta, Gustavo','2019-05-17 00:00:00','2019-05-17 15:23:23'),(25,26,'Maria Aparecida','maria@gmail.com',31984050125,1,5,2,5,2,'JoÃ£o, Maria','2019-05-17 00:00:00','2019-05-17 18:07:55'),(26,26,'Paulo Roberto','paulornc@c.com',31984050125,1,10,1,5,1,'Joao Luiz, Maria Silvia','2019-05-17 00:00:00','2019-05-17 18:12:11');
/*!40000 ALTER TABLE `tb_rsvp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_rsvpconfig`
--

DROP TABLE IF EXISTS `tb_rsvpconfig`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_rsvpconfig` (
  `idrsvpconfig` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) NOT NULL,
  `inclosed` tinyint(4) DEFAULT '0',
  `innameconfirm` tinyint(4) DEFAULT '1',
  `inaccompaniesconfirm` tinyint(3) DEFAULT '1',
  `inmaxadultsconfig` int(3) DEFAULT '0',
  `inmaxchildrenconfig` int(3) DEFAULT '0',
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idrsvpconfig`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_rsvpconfig`
--

LOCK TABLES `tb_rsvpconfig` WRITE;
/*!40000 ALTER TABLE `tb_rsvpconfig` DISABLE KEYS */;
INSERT INTO `tb_rsvpconfig` VALUES (1,26,0,0,NULL,9,9,'2019-05-17 13:44:03');
/*!40000 ALTER TABLE `tb_rsvpconfig` ENABLE KEYS */;
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
-- Table structure for table `tb_transfers`
--

DROP TABLE IF EXISTS `tb_transfers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_transfers` (
  `idtransfer` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idstatus` int(11) DEFAULT NULL,
  `destransfercode` varchar(22) CHARACTER SET latin1 DEFAULT NULL,
  `destransferholdername` varchar(128) CHARACTER SET latin1 DEFAULT NULL,
  `desbanknumber` varchar(4) CHARACTER SET latin1 DEFAULT NULL,
  `desagencynumber` varchar(11) CHARACTER SET latin1 DEFAULT NULL,
  `desagencycheck` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `desaccounttype` varchar(22) CHARACTER SET latin1 DEFAULT NULL,
  `desaccountnumber` varchar(11) CHARACTER SET latin1 DEFAULT NULL,
  `desaccountcheck` varchar(2) CHARACTER SET latin1 DEFAULT NULL,
  `vlamount` decimal(10,2) DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idtransfer`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_transfers`
--

LOCK TABLES `tb_transfers` WRITE;
/*!40000 ALTER TABLE `tb_transfers` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_transfers` ENABLE KEYS */;
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
  `desdomain` varchar(128) DEFAULT NULL,
  `inadmin` tinyint(4) NOT NULL DEFAULT '0',
  `inseller` tinyint(4) DEFAULT '0',
  `instatus` tinyint(4) NOT NULL DEFAULT '0',
  `inplan` int(3) NOT NULL DEFAULT '0',
  `interms` tinyint(4) DEFAULT '0',
  `desipterms` varchar(22) DEFAULT NULL,
  `dtterms` datetime DEFAULT NULL,
  `dtplanbegin` date DEFAULT NULL,
  `dtplanend` date DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`iduser`),
  KEY `FK_users_persons_idx` (`idperson`),
  CONSTRAINT `fk_users_persons` FOREIGN KEY (`idperson`) REFERENCES `tb_persons` (`idperson`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_users`
--

LOCK TABLES `tb_users` WRITE;
/*!40000 ALTER TABLE `tb_users` DISABLE KEYS */;
INSERT INTO `tb_users` VALUES (11,11,'paulowebphp@gmail.com','$2y$12$jYbcHfoWsKGtdWfB7EVgnu73w/ophUt8xY3GpK.9X7KIEp108zdK.','paulowebphp',1,0,1,312,0,NULL,NULL,NULL,'0000-00-00','2019-04-24 17:00:33'),(13,12,'pwsecvendas@gmail.com','$2y$12$jYbcHfoWsKGtdWfB7EVgnu73w/ophUt8xY3GpK.9X7KIEp108zdK.','pwsecvendas',1,0,1,312,0,NULL,NULL,NULL,NULL,'2019-05-02 20:29:22'),(26,25,'macambraia@hotmail.com','$2y$12$aEaG275Y7/OKrFH5K7Pi4OzOBrwuB8jpQPIyKXDb4HT/3BNIScB1W','macambraia',0,1,1,209,0,NULL,NULL,'2019-05-14','2020-02-14','2019-05-14 12:33:16'),(27,26,'jpccambraia@gmail.com','$2y$12$mTJaqb1pw4aZE7jAdUjeMuqFwrosZ87tLu/eNqBD2HstDssGH1DVy',NULL,0,1,1,104,0,NULL,NULL,'2019-05-15','2019-09-15','2019-05-15 00:38:59'),(28,27,'paulornc@yahoo.com','$2y$12$KkdLbckLG93QhMRIiB63Bu6ApieRi0HQoKJ80Pmtjjifl7ajGB2q6','paulornc',0,1,1,306,0,NULL,NULL,'2019-05-15','2019-11-15','2019-05-15 01:10:41'),(29,28,'luiz@hotmail.com','$2y$12$WlOyWLIPAsLG7Yg77ybu7O7v6hGaFOw/Cyt.y6FplxBinrGgQkX72',NULL,0,1,0,103,0,NULL,NULL,NULL,NULL,'2019-05-21 13:05:12'),(30,29,'luiz@hotmail.com','$2y$12$VMxAXVQoV9n1Wl2gKZZgY.sb6EP0MvEutkbuZi3S.QksavvJkryc2',NULL,0,1,0,103,0,NULL,NULL,NULL,NULL,'2019-05-21 13:10:35'),(31,30,'maciel@gmail.com','$2y$12$qHto1uxDttv8WFkDpOR96uDfl3VzCGsuBudI2.sGuBBsPooz6Vgpa',NULL,0,1,0,203,0,NULL,NULL,NULL,NULL,'2019-05-21 17:31:32'),(32,31,'geromel@hotmail.com','$2y$12$5NwYPNwy4UZqTvnVINHc2uBQZHmMPvFjpI7VaPGuHY7iCgvQI82pq',NULL,0,1,0,306,0,NULL,NULL,NULL,NULL,'2019-05-21 18:13:08'),(33,32,'lucio@hotmail.com','$2y$12$K4ZPIf5JJyZK8LvMfsDOVuS/vSUur86oudlIrmEfYeX1OSxIANdFe',NULL,0,1,0,212,0,NULL,NULL,NULL,NULL,'2019-05-21 19:59:50'),(34,33,'cesar@gmail.com','$2y$12$HGr6LuuD8Ih6NexTTcQFuepEKsEOtcpAsd5sFbDcskPshB92fumgK',NULL,0,1,0,304,0,NULL,NULL,NULL,NULL,'2019-05-21 20:50:32'),(35,34,'joao@gmail.com','$2y$12$gbZ1MoENiR0vLqZ.AqiLPuDWNfg9upwaon0nxIGmw/tIvx/0mg71O',NULL,0,1,0,203,0,NULL,NULL,NULL,NULL,'2019-05-21 21:06:17');
/*!40000 ALTER TABLE `tb_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_usersaddresses`
--

DROP TABLE IF EXISTS `tb_usersaddresses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_usersaddresses` (
  `iduseraddress` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) NOT NULL,
  `deszipcode` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `desaddress` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `desnumber` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `descomplement` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `desdistrict` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `descity` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `desstate` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `descountry` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`iduseraddress`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_usersaddresses`
--

LOCK TABLES `tb_usersaddresses` WRITE;
/*!40000 ALTER TABLE `tb_usersaddresses` DISABLE KEYS */;
INSERT INTO `tb_usersaddresses` VALUES (1,33,'30160037','Rua Alvares Maciel','1756','123456','Luan','Belo Horizonte','MG','BRA','2019-05-21 20:08:06'),(2,33,'30160037','Rua Alvares Maciel','1756','123456','Luan','Belo Horizonte','MG','BRA','2019-05-21 20:08:43'),(3,33,'30160037','Rua Alvares Maciel','1756','123456','Luan','Belo Horizonte','MG','BRA','2019-05-21 20:09:00'),(4,33,'30160037','Rua Alvares Maciel','1756','123456','Luan','Belo Horizonte','MG','BRA','2019-05-21 20:09:27'),(5,35,'13465400','Rua Alvaro Ribeiro','1757','401','Major','Americana','SP','BRA','2019-05-21 21:30:06'),(6,35,'13465400','Rua Alvaro Ribeiro','1757','401','Major','Americana','SP','BRA','2019-05-21 21:30:38'),(7,35,'13465400','Rua Alvaro Ribeiro','1757','401','Major','Americana','SP','BRA','2019-05-21 21:31:31');
/*!40000 ALTER TABLE `tb_usersaddresses` ENABLE KEYS */;
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

-- Dump completed on 2019-05-21 23:14:51
