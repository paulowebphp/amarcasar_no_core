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
) ENGINE=InnoDB AUTO_INCREMENT=125 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_accounts`
--

LOCK TABLES `tb_accounts` WRITE;
/*!40000 ALTER TABLE `tb_accounts` DISABLE KEYS */;
INSERT INTO `tb_accounts` VALUES (124,81,'MPA-5D5A58245E64','a77763ac23df43f8b2f0a94a84806f67_v2','APP-MSL2111M3D69','Jose Pedro','jpccambraia3@gmail.com',55,31,31313131,0,'01224202686','13465400','31','31','31','31','Acrelândia','AC','BRA','2000-10-11','2019-06-17 15:11:25');
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
  `deszipcode` char(8) DEFAULT NULL,
  `desaddress` varchar(128) DEFAULT NULL,
  `desnumber` varchar(16) DEFAULT NULL,
  `descomplement` varchar(32) DEFAULT NULL,
  `desdistrict` varchar(32) DEFAULT NULL,
  `descity` varchar(32) DEFAULT NULL,
  `desstate` varchar(32) DEFAULT NULL,
  `descountry` varchar(32) DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idaddress`)
) ENGINE=InnoDB AUTO_INCREMENT=538 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_addresses`
--

LOCK TABLES `tb_addresses` WRITE;
/*!40000 ALTER TABLE `tb_addresses` DISABLE KEYS */;
INSERT INTO `tb_addresses` VALUES (537,81,'13465400','31','31','31','31','Acrelândia','AC','BRA','2019-06-17 15:11:25');
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
  `inalbumstatus` tinyint(4) DEFAULT NULL,
  `inposition` tinyint(4) DEFAULT NULL,
  `inphotosize` int(11) DEFAULT NULL,
  `desalbum` varchar(128) DEFAULT NULL,
  `descategory` varchar(128) DEFAULT NULL,
  `desdescription` text,
  `desphoto` varchar(256) DEFAULT NULL,
  `desextension` varchar(4) DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idalbum`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_albuns`
--

LOCK TABLES `tb_albuns` WRITE;
/*!40000 ALTER TABLE `tb_albuns` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_banks`
--

LOCK TABLES `tb_banks` WRITE;
/*!40000 ALTER TABLE `tb_banks` DISABLE KEYS */;
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
  PRIMARY KEY (`idbestfriend`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_bestfriends`
--

LOCK TABLES `tb_bestfriends` WRITE;
/*!40000 ALTER TABLE `tb_bestfriends` DISABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=782 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_carts`
--

LOCK TABLES `tb_carts` WRITE;
/*!40000 ALTER TABLE `tb_carts` DISABLE KEYS */;
INSERT INTO `tb_carts` VALUES (777,'oloduar23jlejfl8obfab0hr5e',81,1,'2019-06-17 15:11:31'),(778,'oloduar23jlejfl8obfab0hr5e',81,1,'2019-06-17 15:13:49'),(779,'oloduar23jlejfl8obfab0hr5e',81,1,'2019-06-17 15:14:12'),(780,'oloduar23jlejfl8obfab0hr5e',81,1,'2019-06-17 15:14:41'),(781,'oloduar23jlejfl8obfab0hr5e',81,1,'2019-06-17 15:15:27');
/*!40000 ALTER TABLE `tb_carts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_cartsitems`
--

DROP TABLE IF EXISTS `tb_cartsitems`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_cartsitems` (
  `idcartitem` int(11) NOT NULL AUTO_INCREMENT,
  `idcart` int(11) NOT NULL,
  `iditem` int(11) NOT NULL,
  `initem` tinyint(4) NOT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idcartitem`)
) ENGINE=InnoDB AUTO_INCREMENT=306 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_cartsitems`
--

LOCK TABLES `tb_cartsitems` WRITE;
/*!40000 ALTER TABLE `tb_cartsitems` DISABLE KEYS */;
INSERT INTO `tb_cartsitems` VALUES (301,777,559,0,'2019-06-17 15:11:32'),(302,778,560,0,'2019-06-17 15:13:51'),(303,779,561,0,'2019-06-17 15:14:13'),(304,780,562,0,'2019-06-17 15:14:42'),(305,781,563,0,'2019-06-17 15:15:28');
/*!40000 ALTER TABLE `tb_cartsitems` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=500 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_cartsproducts`
--

LOCK TABLES `tb_cartsproducts` WRITE;
/*!40000 ALTER TABLE `tb_cartsproducts` DISABLE KEYS */;
INSERT INTO `tb_cartsproducts` VALUES (464,314,98,NULL,'2019-05-11 23:31:21'),(465,317,112,NULL,'2019-05-11 23:33:04'),(466,317,112,NULL,'2019-05-11 23:33:06'),(467,316,108,NULL,'2019-05-11 23:35:53'),(468,316,108,NULL,'2019-05-11 23:35:54'),(469,316,108,NULL,'2019-05-11 23:35:55'),(470,319,109,NULL,'2019-05-12 03:36:00'),(471,319,108,NULL,'2019-05-12 03:36:06'),(472,319,108,NULL,'2019-05-12 03:36:11'),(473,319,108,NULL,'2019-05-12 03:36:12'),(474,321,114,NULL,'2019-05-14 19:34:43'),(475,321,114,NULL,'2019-05-14 19:34:45'),(476,321,113,NULL,'2019-05-14 19:34:52'),(477,321,114,NULL,'2019-05-14 21:55:47'),(478,322,116,NULL,'2019-05-14 22:13:41'),(479,322,115,NULL,'2019-05-14 22:13:52'),(480,322,116,NULL,'2019-05-14 22:13:56'),(481,323,118,NULL,'2019-05-14 22:26:05'),(482,323,117,NULL,'2019-05-14 22:26:10'),(483,323,118,NULL,'2019-05-14 22:26:14'),(484,325,119,NULL,'2019-05-15 14:31:53'),(485,325,119,NULL,'2019-05-15 14:31:55'),(486,326,119,NULL,'2019-05-15 14:41:06'),(487,326,119,NULL,'2019-05-15 14:41:08'),(488,318,112,NULL,'2019-05-22 14:42:41'),(489,318,112,NULL,'2019-05-22 14:42:43'),(490,330,121,NULL,'2019-05-24 12:20:19'),(491,330,120,NULL,'2019-05-24 12:20:25'),(492,330,121,NULL,'2019-05-24 12:20:27'),(493,331,120,NULL,'2019-05-24 13:15:37'),(494,332,121,NULL,'2019-05-25 22:32:36'),(495,332,120,NULL,'2019-05-25 22:33:49'),(496,332,120,NULL,'2019-05-25 22:33:51'),(497,333,121,NULL,'2019-05-25 22:39:58'),(498,333,120,NULL,'2019-05-25 22:40:06'),(499,333,120,NULL,'2019-05-25 22:40:07');
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
-- Table structure for table `tb_cities`
--

DROP TABLE IF EXISTS `tb_cities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_cities` (
  `idcity` int(2) NOT NULL,
  `descity` varchar(64) DEFAULT NULL,
  `idstate` int(2) DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idcity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_cities`
--

LOCK TABLES `tb_cities` WRITE;
/*!40000 ALTER TABLE `tb_cities` DISABLE KEYS */;
INSERT INTO `tb_cities` VALUES (1,'Afonso Cláudio',8,'2019-06-12 15:10:11'),(2,'Água Doce do Norte',8,'2019-06-12 15:10:11'),(3,'Águia Branca',8,'2019-06-12 15:10:11'),(4,'Alegre',8,'2019-06-12 15:10:11'),(5,'Alfredo Chaves',8,'2019-06-12 15:10:11'),(6,'Alto Rio Novo',8,'2019-06-12 15:10:11'),(7,'Anchieta',8,'2019-06-12 15:10:11'),(8,'Apiacá',8,'2019-06-12 15:10:11'),(9,'Aracruz',8,'2019-06-12 15:10:11'),(10,'Atilio Vivacqua',8,'2019-06-12 15:10:11'),(11,'Baixo Guandu',8,'2019-06-12 15:10:11'),(12,'Barra de São Francisco',8,'2019-06-12 15:10:11'),(13,'Boa Esperança',8,'2019-06-12 15:10:11'),(14,'Bom Jesus do Norte',8,'2019-06-12 15:10:11'),(15,'Brejetuba',8,'2019-06-12 15:10:11'),(16,'Cachoeiro de Itapemirim',8,'2019-06-12 15:10:11'),(17,'Cariacica',8,'2019-06-12 15:10:11'),(18,'Castelo',8,'2019-06-12 15:10:11'),(19,'Colatina',8,'2019-06-12 15:10:11'),(20,'Conceição da Barra',8,'2019-06-12 15:10:11'),(21,'Conceição do Castelo',8,'2019-06-12 15:10:11'),(22,'Divino de São Lourenço',8,'2019-06-12 15:10:11'),(23,'Domingos Martins',8,'2019-06-12 15:10:11'),(24,'Dores do Rio Preto',8,'2019-06-12 15:10:11'),(25,'Ecoporanga',8,'2019-06-12 15:10:11'),(26,'Fundão',8,'2019-06-12 15:10:11'),(27,'Governador Lindenberg',8,'2019-06-12 15:10:11'),(28,'Guaçuí',8,'2019-06-12 15:10:11'),(29,'Guarapari',8,'2019-06-12 15:10:11'),(30,'Ibatiba',8,'2019-06-12 15:10:11'),(31,'Ibiraçu',8,'2019-06-12 15:10:11'),(32,'Ibitirama',8,'2019-06-12 15:10:11'),(33,'Iconha',8,'2019-06-12 15:10:11'),(34,'Irupi',8,'2019-06-12 15:10:11'),(35,'Itaguaçu',8,'2019-06-12 15:10:11'),(36,'Itapemirim',8,'2019-06-12 15:10:11'),(37,'Itarana',8,'2019-06-12 15:10:11'),(38,'Iúna',8,'2019-06-12 15:10:11'),(39,'Jaguaré',8,'2019-06-12 15:10:11'),(40,'Jerônimo Monteiro',8,'2019-06-12 15:10:11'),(41,'João Neiva',8,'2019-06-12 15:10:11'),(42,'Laranja da Terra',8,'2019-06-12 15:10:11'),(43,'Linhares',8,'2019-06-12 15:10:11'),(44,'Mantenópolis',8,'2019-06-12 15:10:11'),(45,'Marataízes',8,'2019-06-12 15:10:11'),(46,'Marechal Floriano',8,'2019-06-12 15:10:11'),(47,'Marilândia',8,'2019-06-12 15:10:11'),(48,'Mimoso do Sul',8,'2019-06-12 15:10:11'),(49,'Montanha',8,'2019-06-12 15:10:11'),(50,'Mucurici',8,'2019-06-12 15:10:11'),(51,'Muniz Freire',8,'2019-06-12 15:10:11'),(52,'Muqui',8,'2019-06-12 15:10:11'),(53,'Nova Venécia',8,'2019-06-12 15:10:11'),(54,'Pancas',8,'2019-06-12 15:10:11'),(55,'Pedro Canário',8,'2019-06-12 15:10:11'),(56,'Pinheiros',8,'2019-06-12 15:10:11'),(57,'Piúma',8,'2019-06-12 15:10:11'),(58,'Ponto Belo',8,'2019-06-12 15:10:11'),(59,'Presidente Kennedy',8,'2019-06-12 15:10:11'),(60,'Rio Bananal',8,'2019-06-12 15:10:11'),(61,'Rio Novo do Sul',8,'2019-06-12 15:10:11'),(62,'Santa Leopoldina',8,'2019-06-12 15:10:11'),(63,'Santa Maria de Jetibá',8,'2019-06-12 15:10:11'),(64,'Santa Teresa',8,'2019-06-12 15:10:11'),(65,'São Domingos do Norte',8,'2019-06-12 15:10:11'),(66,'São Gabriel da Palha',8,'2019-06-12 15:10:11'),(67,'São José do Calçado',8,'2019-06-12 15:10:11'),(68,'São Mateus',8,'2019-06-12 15:10:11'),(69,'São Roque do Canaã',8,'2019-06-12 15:10:11'),(70,'Serra',8,'2019-06-12 15:10:11'),(71,'Sooretama',8,'2019-06-12 15:10:11'),(72,'Vargem Alta',8,'2019-06-12 15:10:11'),(73,'Venda Nova do Imigrante',8,'2019-06-12 15:10:11'),(74,'Viana',8,'2019-06-12 15:10:11'),(75,'Vila Pavão',8,'2019-06-12 15:10:11'),(76,'Vila Valério',8,'2019-06-12 15:10:11'),(77,'Vila Velha',8,'2019-06-12 15:10:11'),(78,'Vitória',8,'2019-06-12 15:10:11'),(79,'Acrelândia',1,'2019-06-12 15:10:11'),(80,'Assis Brasil',1,'2019-06-12 15:10:11'),(81,'Brasiléia',1,'2019-06-12 15:10:11'),(82,'Bujari',1,'2019-06-12 15:10:11'),(83,'Capixaba',1,'2019-06-12 15:10:11'),(84,'Cruzeiro do Sul',1,'2019-06-12 15:10:11'),(85,'Epitaciolândia',1,'2019-06-12 15:10:11'),(86,'Feijó',1,'2019-06-12 15:10:11'),(87,'Jordão',1,'2019-06-12 15:10:11'),(88,'Mâncio Lima',1,'2019-06-12 15:10:11'),(89,'Manoel Urbano',1,'2019-06-12 15:10:11'),(90,'Marechal Thaumaturgo',1,'2019-06-12 15:10:11'),(91,'Plácido de Castro',1,'2019-06-12 15:10:11'),(92,'Porto Acre',1,'2019-06-12 15:10:11'),(93,'Porto Walter',1,'2019-06-12 15:10:11'),(94,'Rio Branco',1,'2019-06-12 15:10:11'),(95,'Rodrigues Alves',1,'2019-06-12 15:10:11'),(96,'Santa Rosa do Purus',1,'2019-06-12 15:10:11'),(97,'Sena Madureira',1,'2019-06-12 15:10:11'),(98,'Senador Guiomard',1,'2019-06-12 15:10:11'),(99,'Tarauacá',1,'2019-06-12 15:10:11'),(100,'Xapuri',1,'2019-06-12 15:10:11'),(101,'Água Branca',2,'2019-06-12 15:10:11'),(102,'Anadia',2,'2019-06-12 15:10:11'),(103,'Arapiraca',2,'2019-06-12 15:10:11'),(104,'Atalaia',2,'2019-06-12 15:10:11'),(105,'Barra de Santo Antônio',2,'2019-06-12 15:10:11'),(106,'Barra de São Miguel',2,'2019-06-12 15:10:11'),(107,'Batalha',2,'2019-06-12 15:10:11'),(108,'Belém',2,'2019-06-12 15:10:11'),(109,'Belo Monte',2,'2019-06-12 15:10:11'),(110,'Boca da Mata',2,'2019-06-12 15:10:11'),(111,'Branquinha',2,'2019-06-12 15:10:11'),(112,'Cacimbinhas',2,'2019-06-12 15:10:11'),(113,'Cajueiro',2,'2019-06-12 15:10:11'),(114,'Campestre',2,'2019-06-12 15:10:11'),(115,'Campo Alegre',2,'2019-06-12 15:10:11'),(116,'Campo Grande',2,'2019-06-12 15:10:11'),(117,'Canapi',2,'2019-06-12 15:10:11'),(118,'Capela',2,'2019-06-12 15:10:11'),(119,'Carneiros',2,'2019-06-12 15:10:11'),(120,'Chã Preta',2,'2019-06-12 15:10:11'),(121,'Coité do Nóia',2,'2019-06-12 15:10:11'),(122,'Colônia Leopoldina',2,'2019-06-12 15:10:11'),(123,'Coqueiro Seco',2,'2019-06-12 15:10:11'),(124,'Coruripe',2,'2019-06-12 15:10:11'),(125,'Craíbas',2,'2019-06-12 15:10:11'),(126,'Delmiro Gouveia',2,'2019-06-12 15:10:11'),(127,'Dois Riachos',2,'2019-06-12 15:10:11'),(128,'Estrela de Alagoas',2,'2019-06-12 15:10:11'),(129,'Feira Grande',2,'2019-06-12 15:10:11'),(130,'Feliz Deserto',2,'2019-06-12 15:10:11'),(131,'Flexeiras',2,'2019-06-12 15:10:11'),(132,'Girau do Ponciano',2,'2019-06-12 15:10:11'),(133,'Ibateguara',2,'2019-06-12 15:10:11'),(134,'Igaci',2,'2019-06-12 15:10:11'),(135,'Igreja Nova',2,'2019-06-12 15:10:11'),(136,'Inhapi',2,'2019-06-12 15:10:11'),(137,'Jacaré dos Homens',2,'2019-06-12 15:10:11'),(138,'Jacuípe',2,'2019-06-12 15:10:11'),(139,'Japaratinga',2,'2019-06-12 15:10:11'),(140,'Jaramataia',2,'2019-06-12 15:10:11'),(141,'Jequiá da Praia',2,'2019-06-12 15:10:11'),(142,'Joaquim Gomes',2,'2019-06-12 15:10:11'),(143,'Jundiá',2,'2019-06-12 15:10:11'),(144,'Junqueiro',2,'2019-06-12 15:10:11'),(145,'Lagoa da Canoa',2,'2019-06-12 15:10:11'),(146,'Limoeiro de Anadia',2,'2019-06-12 15:10:11'),(147,'Maceió',2,'2019-06-12 15:10:11'),(148,'Major Isidoro',2,'2019-06-12 15:10:11'),(149,'Mar Vermelho',2,'2019-06-12 15:10:11'),(150,'Maragogi',2,'2019-06-12 15:10:11'),(151,'Maravilha',2,'2019-06-12 15:10:11'),(152,'Marechal Deodoro',2,'2019-06-12 15:10:11'),(153,'Maribondo',2,'2019-06-12 15:10:11'),(154,'Mata Grande',2,'2019-06-12 15:10:11'),(155,'Matriz de Camaragibe',2,'2019-06-12 15:10:11'),(156,'Messias',2,'2019-06-12 15:10:11'),(157,'Minador do Negrão',2,'2019-06-12 15:10:11'),(158,'Monteirópolis',2,'2019-06-12 15:10:11'),(159,'Murici',2,'2019-06-12 15:10:11'),(160,'Novo Lino',2,'2019-06-12 15:10:11'),(161,'Olho d`Água das Flores',2,'2019-06-12 15:10:11'),(162,'Olho d`Água do Casado',2,'2019-06-12 15:10:11'),(163,'Olho d`Água Grande',2,'2019-06-12 15:10:11'),(164,'Olivença',2,'2019-06-12 15:10:11'),(165,'Ouro Branco',2,'2019-06-12 15:10:11'),(166,'Palestina',2,'2019-06-12 15:10:11'),(167,'Palmeira dos Índios',2,'2019-06-12 15:10:11'),(168,'Pão de Açúcar',2,'2019-06-12 15:10:11'),(169,'Pariconha',2,'2019-06-12 15:10:11'),(170,'Paripueira',2,'2019-06-12 15:10:11'),(171,'Passo de Camaragibe',2,'2019-06-12 15:10:11'),(172,'Paulo Jacinto',2,'2019-06-12 15:10:11'),(173,'Penedo',2,'2019-06-12 15:10:11'),(174,'Piaçabuçu',2,'2019-06-12 15:10:11'),(175,'Pilar',2,'2019-06-12 15:10:11'),(176,'Pindoba',2,'2019-06-12 15:10:11'),(177,'Piranhas',2,'2019-06-12 15:10:11'),(178,'Poço das Trincheiras',2,'2019-06-12 15:10:11'),(179,'Porto Calvo',2,'2019-06-12 15:10:11'),(180,'Porto de Pedras',2,'2019-06-12 15:10:11'),(181,'Porto Real do Colégio',2,'2019-06-12 15:10:11'),(182,'Quebrangulo',2,'2019-06-12 15:10:11'),(183,'Rio Largo',2,'2019-06-12 15:10:11'),(184,'Roteiro',2,'2019-06-12 15:10:11'),(185,'Santa Luzia do Norte',2,'2019-06-12 15:10:11'),(186,'Santana do Ipanema',2,'2019-06-12 15:10:11'),(187,'Santana do Mundaú',2,'2019-06-12 15:10:11'),(188,'São Brás',2,'2019-06-12 15:10:11'),(189,'São José da Laje',2,'2019-06-12 15:10:11'),(190,'São José da Tapera',2,'2019-06-12 15:10:11'),(191,'São Luís do Quitunde',2,'2019-06-12 15:10:11'),(192,'São Miguel dos Campos',2,'2019-06-12 15:10:11'),(193,'São Miguel dos Milagres',2,'2019-06-12 15:10:11'),(194,'São Sebastião',2,'2019-06-12 15:10:11'),(195,'Satuba',2,'2019-06-12 15:10:11'),(196,'Senador Rui Palmeira',2,'2019-06-12 15:10:11'),(197,'Tanque d`Arca',2,'2019-06-12 15:10:11'),(198,'Taquarana',2,'2019-06-12 15:10:11'),(199,'Teotônio Vilela',2,'2019-06-12 15:10:11'),(200,'Traipu',2,'2019-06-12 15:10:11'),(201,'União dos Palmares',2,'2019-06-12 15:10:11'),(202,'Viçosa',2,'2019-06-12 15:10:11'),(203,'Amapá',4,'2019-06-12 15:10:11'),(204,'Calçoene',4,'2019-06-12 15:10:11'),(205,'Cutias',4,'2019-06-12 15:10:11'),(206,'Ferreira Gomes',4,'2019-06-12 15:10:11'),(207,'Itaubal',4,'2019-06-12 15:10:11'),(208,'Laranjal do Jari',4,'2019-06-12 15:10:11'),(209,'Macapá',4,'2019-06-12 15:10:11'),(210,'Mazagão',4,'2019-06-12 15:10:11'),(211,'Oiapoque',4,'2019-06-12 15:10:11'),(212,'Pedra Branca do Amaparí',4,'2019-06-12 15:10:11'),(213,'Porto Grande',4,'2019-06-12 15:10:11'),(214,'Pracuúba',4,'2019-06-12 15:10:11'),(215,'Santana',4,'2019-06-12 15:10:11'),(216,'Serra do Navio',4,'2019-06-12 15:10:11'),(217,'Tartarugalzinho',4,'2019-06-12 15:10:11'),(218,'Vitória do Jari',4,'2019-06-12 15:10:11'),(219,'Alvarães',3,'2019-06-12 15:10:11'),(220,'Amaturá',3,'2019-06-12 15:10:11'),(221,'Anamã',3,'2019-06-12 15:10:11'),(222,'Anori',3,'2019-06-12 15:10:11'),(223,'Apuí',3,'2019-06-12 15:10:11'),(224,'Atalaia do Norte',3,'2019-06-12 15:10:11'),(225,'Autazes',3,'2019-06-12 15:10:11'),(226,'Barcelos',3,'2019-06-12 15:10:11'),(227,'Barreirinha',3,'2019-06-12 15:10:11'),(228,'Benjamin Constant',3,'2019-06-12 15:10:11'),(229,'Beruri',3,'2019-06-12 15:10:11'),(230,'Boa Vista do Ramos',3,'2019-06-12 15:10:11'),(231,'Boca do Acre',3,'2019-06-12 15:10:11'),(232,'Borba',3,'2019-06-12 15:10:11'),(233,'Caapiranga',3,'2019-06-12 15:10:11'),(234,'Canutama',3,'2019-06-12 15:10:11'),(235,'Carauari',3,'2019-06-12 15:10:11'),(236,'Careiro',3,'2019-06-12 15:10:11'),(237,'Careiro da Várzea',3,'2019-06-12 15:10:11'),(238,'Coari',3,'2019-06-12 15:10:11'),(239,'Codajás',3,'2019-06-12 15:10:11'),(240,'Eirunepé',3,'2019-06-12 15:10:11'),(241,'Envira',3,'2019-06-12 15:10:11'),(242,'Fonte Boa',3,'2019-06-12 15:10:11'),(243,'Guajará',3,'2019-06-12 15:10:11'),(244,'Humaitá',3,'2019-06-12 15:10:11'),(245,'Ipixuna',3,'2019-06-12 15:10:11'),(246,'Iranduba',3,'2019-06-12 15:10:11'),(247,'Itacoatiara',3,'2019-06-12 15:10:11'),(248,'Itamarati',3,'2019-06-12 15:10:11'),(249,'Itapiranga',3,'2019-06-12 15:10:11'),(250,'Japurá',3,'2019-06-12 15:10:11'),(251,'Juruá',3,'2019-06-12 15:10:11'),(252,'Jutaí',3,'2019-06-12 15:10:11'),(253,'Lábrea',3,'2019-06-12 15:10:11'),(254,'Manacapuru',3,'2019-06-12 15:10:11'),(255,'Manaquiri',3,'2019-06-12 15:10:11'),(256,'Manaus',3,'2019-06-12 15:10:11'),(257,'Manicoré',3,'2019-06-12 15:10:11'),(258,'Maraã',3,'2019-06-12 15:10:11'),(259,'Maués',3,'2019-06-12 15:10:11'),(260,'Nhamundá',3,'2019-06-12 15:10:11'),(261,'Nova Olinda do Norte',3,'2019-06-12 15:10:11'),(262,'Novo Airão',3,'2019-06-12 15:10:11'),(263,'Novo Aripuanã',3,'2019-06-12 15:10:11'),(264,'Parintins',3,'2019-06-12 15:10:11'),(265,'Pauini',3,'2019-06-12 15:10:11'),(266,'Presidente Figueiredo',3,'2019-06-12 15:10:11'),(267,'Rio Preto da Eva',3,'2019-06-12 15:10:11'),(268,'Santa Isabel do Rio Negro',3,'2019-06-12 15:10:11'),(269,'Santo Antônio do Içá',3,'2019-06-12 15:10:11'),(270,'São Gabriel da Cachoeira',3,'2019-06-12 15:10:11'),(271,'São Paulo de Olivença',3,'2019-06-12 15:10:11'),(272,'São Sebastião do Uatumã',3,'2019-06-12 15:10:11'),(273,'Silves',3,'2019-06-12 15:10:11'),(274,'Tabatinga',3,'2019-06-12 15:10:11'),(275,'Tapauá',3,'2019-06-12 15:10:11'),(276,'Tefé',3,'2019-06-12 15:10:11'),(277,'Tonantins',3,'2019-06-12 15:10:11'),(278,'Uarini',3,'2019-06-12 15:10:11'),(279,'Urucará',3,'2019-06-12 15:10:11'),(280,'Urucurituba',3,'2019-06-12 15:10:11'),(281,'Abaíra',5,'2019-06-12 15:10:11'),(282,'Abaré',5,'2019-06-12 15:10:11'),(283,'Acajutiba',5,'2019-06-12 15:10:11'),(284,'Adustina',5,'2019-06-12 15:10:11'),(285,'Água Fria',5,'2019-06-12 15:10:11'),(286,'Aiquara',5,'2019-06-12 15:10:11'),(287,'Alagoinhas',5,'2019-06-12 15:10:11'),(288,'Alcobaça',5,'2019-06-12 15:10:11'),(289,'Almadina',5,'2019-06-12 15:10:11'),(290,'Amargosa',5,'2019-06-12 15:10:11'),(291,'Amélia Rodrigues',5,'2019-06-12 15:10:11'),(292,'América Dourada',5,'2019-06-12 15:10:11'),(293,'Anagé',5,'2019-06-12 15:10:11'),(294,'Andaraí',5,'2019-06-12 15:10:11'),(295,'Andorinha',5,'2019-06-12 15:10:11'),(296,'Angical',5,'2019-06-12 15:10:11'),(297,'Anguera',5,'2019-06-12 15:10:11'),(298,'Antas',5,'2019-06-12 15:10:11'),(299,'Antônio Cardoso',5,'2019-06-12 15:10:11'),(300,'Antônio Gonçalves',5,'2019-06-12 15:10:11'),(301,'Aporá',5,'2019-06-12 15:10:11'),(302,'Apuarema',5,'2019-06-12 15:10:11'),(303,'Araças',5,'2019-06-12 15:10:11'),(304,'Aracatu',5,'2019-06-12 15:10:11'),(305,'Araci',5,'2019-06-12 15:10:11'),(306,'Aramari',5,'2019-06-12 15:10:11'),(307,'Arataca',5,'2019-06-12 15:10:11'),(308,'Aratuípe',5,'2019-06-12 15:10:11'),(309,'Aurelino Leal',5,'2019-06-12 15:10:11'),(310,'Baianópolis',5,'2019-06-12 15:10:11'),(311,'Baixa Grande',5,'2019-06-12 15:10:11'),(312,'Banzaê',5,'2019-06-12 15:10:11'),(313,'Barra',5,'2019-06-12 15:10:11'),(314,'Barra da Estiva',5,'2019-06-12 15:10:11'),(315,'Barra do Choça',5,'2019-06-12 15:10:11'),(316,'Barra do Mendes',5,'2019-06-12 15:10:11'),(317,'Barra do Rocha',5,'2019-06-12 15:10:11'),(318,'Barreiras',5,'2019-06-12 15:10:11'),(319,'Barro Alto',5,'2019-06-12 15:10:11'),(320,'Barro Preto',5,'2019-06-12 15:10:11'),(321,'Barrocas',5,'2019-06-12 15:10:11'),(322,'Belmonte',5,'2019-06-12 15:10:11'),(323,'Belo Campo',5,'2019-06-12 15:10:11'),(324,'Biritinga',5,'2019-06-12 15:10:11'),(325,'Boa Nova',5,'2019-06-12 15:10:11'),(326,'Boa Vista do Tupim',5,'2019-06-12 15:10:11'),(327,'Bom Jesus da Lapa',5,'2019-06-12 15:10:11'),(328,'Bom Jesus da Serra',5,'2019-06-12 15:10:11'),(329,'Boninal',5,'2019-06-12 15:10:11'),(330,'Bonito',5,'2019-06-12 15:10:11'),(331,'Boquira',5,'2019-06-12 15:10:11'),(332,'Botuporã',5,'2019-06-12 15:10:11'),(333,'Brejões',5,'2019-06-12 15:10:11'),(334,'Brejolândia',5,'2019-06-12 15:10:11'),(335,'Brotas de Macaúbas',5,'2019-06-12 15:10:11'),(336,'Brumado',5,'2019-06-12 15:10:11'),(337,'Buerarema',5,'2019-06-12 15:10:11'),(338,'Buritirama',5,'2019-06-12 15:10:11'),(339,'Caatiba',5,'2019-06-12 15:10:11'),(340,'Cabaceiras do Paraguaçu',5,'2019-06-12 15:10:11'),(341,'Cachoeira',5,'2019-06-12 15:10:11'),(342,'Caculé',5,'2019-06-12 15:10:11'),(343,'Caém',5,'2019-06-12 15:10:11'),(344,'Caetanos',5,'2019-06-12 15:10:11'),(345,'Caetité',5,'2019-06-12 15:10:11'),(346,'Cafarnaum',5,'2019-06-12 15:10:11'),(347,'Cairu',5,'2019-06-12 15:10:11'),(348,'Caldeirão Grande',5,'2019-06-12 15:10:11'),(349,'Camacan',5,'2019-06-12 15:10:11'),(350,'Camaçari',5,'2019-06-12 15:10:11'),(351,'Camamu',5,'2019-06-12 15:10:11'),(352,'Campo Alegre de Lourdes',5,'2019-06-12 15:10:11'),(353,'Campo Formoso',5,'2019-06-12 15:10:11'),(354,'Canápolis',5,'2019-06-12 15:10:11'),(355,'Canarana',5,'2019-06-12 15:10:11'),(356,'Canavieiras',5,'2019-06-12 15:10:11'),(357,'Candeal',5,'2019-06-12 15:10:11'),(358,'Candeias',5,'2019-06-12 15:10:11'),(359,'Candiba',5,'2019-06-12 15:10:11'),(360,'Cândido Sales',5,'2019-06-12 15:10:11'),(361,'Cansanção',5,'2019-06-12 15:10:11'),(362,'Canudos',5,'2019-06-12 15:10:11'),(363,'Capela do Alto Alegre',5,'2019-06-12 15:10:11'),(364,'Capim Grosso',5,'2019-06-12 15:10:11'),(365,'Caraíbas',5,'2019-06-12 15:10:11'),(366,'Caravelas',5,'2019-06-12 15:10:11'),(367,'Cardeal da Silva',5,'2019-06-12 15:10:11'),(368,'Carinhanha',5,'2019-06-12 15:10:11'),(369,'Casa Nova',5,'2019-06-12 15:10:11'),(370,'Castro Alves',5,'2019-06-12 15:10:11'),(371,'Catolândia',5,'2019-06-12 15:10:11'),(372,'Catu',5,'2019-06-12 15:10:11'),(373,'Caturama',5,'2019-06-12 15:10:11'),(374,'Central',5,'2019-06-12 15:10:11'),(375,'Chorrochó',5,'2019-06-12 15:10:11'),(376,'Cícero Dantas',5,'2019-06-12 15:10:11'),(377,'Cipó',5,'2019-06-12 15:10:11'),(378,'Coaraci',5,'2019-06-12 15:10:11'),(379,'Cocos',5,'2019-06-12 15:10:11'),(380,'Conceição da Feira',5,'2019-06-12 15:10:11'),(381,'Conceição do Almeida',5,'2019-06-12 15:10:11'),(382,'Conceição do Coité',5,'2019-06-12 15:10:11'),(383,'Conceição do Jacuípe',5,'2019-06-12 15:10:11'),(384,'Conde',5,'2019-06-12 15:10:11'),(385,'Condeúba',5,'2019-06-12 15:10:11'),(386,'Contendas do Sincorá',5,'2019-06-12 15:10:11'),(387,'Coração de Maria',5,'2019-06-12 15:10:11'),(388,'Cordeiros',5,'2019-06-12 15:10:11'),(389,'Coribe',5,'2019-06-12 15:10:11'),(390,'Coronel João Sá',5,'2019-06-12 15:10:11'),(391,'Correntina',5,'2019-06-12 15:10:11'),(392,'Cotegipe',5,'2019-06-12 15:10:11'),(393,'Cravolândia',5,'2019-06-12 15:10:11'),(394,'Crisópolis',5,'2019-06-12 15:10:11'),(395,'Cristópolis',5,'2019-06-12 15:10:11'),(396,'Cruz das Almas',5,'2019-06-12 15:10:11'),(397,'Curaçá',5,'2019-06-12 15:10:11'),(398,'Dário Meira',5,'2019-06-12 15:10:11'),(399,'Dias d`Ávila',5,'2019-06-12 15:10:11'),(400,'Dom Basílio',5,'2019-06-12 15:10:11'),(401,'Dom Macedo Costa',5,'2019-06-12 15:10:11'),(402,'Elísio Medrado',5,'2019-06-12 15:10:11'),(403,'Encruzilhada',5,'2019-06-12 15:10:11'),(404,'Entre Rios',5,'2019-06-12 15:10:11'),(405,'Érico Cardoso',5,'2019-06-12 15:10:11'),(406,'Esplanada',5,'2019-06-12 15:10:11'),(407,'Euclides da Cunha',5,'2019-06-12 15:10:11'),(408,'Eunápolis',5,'2019-06-12 15:10:11'),(409,'Fátima',5,'2019-06-12 15:10:11'),(410,'Feira da Mata',5,'2019-06-12 15:10:11'),(411,'Feira de Santana',5,'2019-06-12 15:10:11'),(412,'Filadélfia',5,'2019-06-12 15:10:11'),(413,'Firmino Alves',5,'2019-06-12 15:10:11'),(414,'Floresta Azul',5,'2019-06-12 15:10:11'),(415,'Formosa do Rio Preto',5,'2019-06-12 15:10:11'),(416,'Gandu',5,'2019-06-12 15:10:11'),(417,'Gavião',5,'2019-06-12 15:10:11'),(418,'Gentio do Ouro',5,'2019-06-12 15:10:11'),(419,'Glória',5,'2019-06-12 15:10:11'),(420,'Gongogi',5,'2019-06-12 15:10:11'),(421,'Governador Mangabeira',5,'2019-06-12 15:10:11'),(422,'Guajeru',5,'2019-06-12 15:10:11'),(423,'Guanambi',5,'2019-06-12 15:10:11'),(424,'Guaratinga',5,'2019-06-12 15:10:11'),(425,'Heliópolis',5,'2019-06-12 15:10:11'),(426,'Iaçu',5,'2019-06-12 15:10:11'),(427,'Ibiassucê',5,'2019-06-12 15:10:11'),(428,'Ibicaraí',5,'2019-06-12 15:10:11'),(429,'Ibicoara',5,'2019-06-12 15:10:11'),(430,'Ibicuí',5,'2019-06-12 15:10:11'),(431,'Ibipeba',5,'2019-06-12 15:10:11'),(432,'Ibipitanga',5,'2019-06-12 15:10:11'),(433,'Ibiquera',5,'2019-06-12 15:10:11'),(434,'Ibirapitanga',5,'2019-06-12 15:10:11'),(435,'Ibirapuã',5,'2019-06-12 15:10:11'),(436,'Ibirataia',5,'2019-06-12 15:10:11'),(437,'Ibitiara',5,'2019-06-12 15:10:11'),(438,'Ibititá',5,'2019-06-12 15:10:11'),(439,'Ibotirama',5,'2019-06-12 15:10:11'),(440,'Ichu',5,'2019-06-12 15:10:11'),(441,'Igaporã',5,'2019-06-12 15:10:11'),(442,'Igrapiúna',5,'2019-06-12 15:10:11'),(443,'Iguaí',5,'2019-06-12 15:10:11'),(444,'Ilhéus',5,'2019-06-12 15:10:11'),(445,'Inhambupe',5,'2019-06-12 15:10:11'),(446,'Ipecaetá',5,'2019-06-12 15:10:11'),(447,'Ipiaú',5,'2019-06-12 15:10:11'),(448,'Ipirá',5,'2019-06-12 15:10:11'),(449,'Ipupiara',5,'2019-06-12 15:10:11'),(450,'Irajuba',5,'2019-06-12 15:10:11'),(451,'Iramaia',5,'2019-06-12 15:10:11'),(452,'Iraquara',5,'2019-06-12 15:10:11'),(453,'Irará',5,'2019-06-12 15:10:11'),(454,'Irecê',5,'2019-06-12 15:10:11'),(455,'Itabela',5,'2019-06-12 15:10:11'),(456,'Itaberaba',5,'2019-06-12 15:10:11'),(457,'Itabuna',5,'2019-06-12 15:10:11'),(458,'Itacaré',5,'2019-06-12 15:10:11'),(459,'Itaeté',5,'2019-06-12 15:10:11'),(460,'Itagi',5,'2019-06-12 15:10:11'),(461,'Itagibá',5,'2019-06-12 15:10:11'),(462,'Itagimirim',5,'2019-06-12 15:10:11'),(463,'Itaguaçu da Bahia',5,'2019-06-12 15:10:11'),(464,'Itaju do Colônia',5,'2019-06-12 15:10:11'),(465,'Itajuípe',5,'2019-06-12 15:10:11'),(466,'Itamaraju',5,'2019-06-12 15:10:11'),(467,'Itamari',5,'2019-06-12 15:10:11'),(468,'Itambé',5,'2019-06-12 15:10:11'),(469,'Itanagra',5,'2019-06-12 15:10:11'),(470,'Itanhém',5,'2019-06-12 15:10:11'),(471,'Itaparica',5,'2019-06-12 15:10:11'),(472,'Itapé',5,'2019-06-12 15:10:11'),(473,'Itapebi',5,'2019-06-12 15:10:11'),(474,'Itapetinga',5,'2019-06-12 15:10:11'),(475,'Itapicuru',5,'2019-06-12 15:10:11'),(476,'Itapitanga',5,'2019-06-12 15:10:11'),(477,'Itaquara',5,'2019-06-12 15:10:11'),(478,'Itarantim',5,'2019-06-12 15:10:11'),(479,'Itatim',5,'2019-06-12 15:10:11'),(480,'Itiruçu',5,'2019-06-12 15:10:11'),(481,'Itiúba',5,'2019-06-12 15:10:11'),(482,'Itororó',5,'2019-06-12 15:10:11'),(483,'Ituaçu',5,'2019-06-12 15:10:11'),(484,'Ituberá',5,'2019-06-12 15:10:11'),(485,'Iuiú',5,'2019-06-12 15:10:11'),(486,'Jaborandi',5,'2019-06-12 15:10:11'),(487,'Jacaraci',5,'2019-06-12 15:10:11'),(488,'Jacobina',5,'2019-06-12 15:10:11'),(489,'Jaguaquara',5,'2019-06-12 15:10:11'),(490,'Jaguarari',5,'2019-06-12 15:10:11'),(491,'Jaguaripe',5,'2019-06-12 15:10:11'),(492,'Jandaíra',5,'2019-06-12 15:10:11'),(493,'Jequié',5,'2019-06-12 15:10:11'),(494,'Jeremoabo',5,'2019-06-12 15:10:11'),(495,'Jiquiriçá',5,'2019-06-12 15:10:11'),(496,'Jitaúna',5,'2019-06-12 15:10:11'),(497,'João Dourado',5,'2019-06-12 15:10:11'),(498,'Juazeiro',5,'2019-06-12 15:10:11'),(499,'Jucuruçu',5,'2019-06-12 15:10:11'),(500,'Jussara',5,'2019-06-12 15:10:11'),(501,'Jussari',5,'2019-06-12 15:10:11'),(502,'Jussiape',5,'2019-06-12 15:10:11'),(503,'Lafaiete Coutinho',5,'2019-06-12 15:10:11'),(504,'Lagoa Real',5,'2019-06-12 15:10:11'),(505,'Laje',5,'2019-06-12 15:10:11'),(506,'Lajedão',5,'2019-06-12 15:10:11'),(507,'Lajedinho',5,'2019-06-12 15:10:11'),(508,'Lajedo do Tabocal',5,'2019-06-12 15:10:11'),(509,'Lamarão',5,'2019-06-12 15:10:11'),(510,'Lapão',5,'2019-06-12 15:10:11'),(511,'Lauro de Freitas',5,'2019-06-12 15:10:11'),(512,'Lençóis',5,'2019-06-12 15:10:11'),(513,'Licínio de Almeida',5,'2019-06-12 15:10:11'),(514,'Livramento de Nossa Senhora',5,'2019-06-12 15:10:11'),(515,'Luís Eduardo Magalhães',5,'2019-06-12 15:10:11'),(516,'Macajuba',5,'2019-06-12 15:10:11'),(517,'Macarani',5,'2019-06-12 15:10:11'),(518,'Macaúbas',5,'2019-06-12 15:10:11'),(519,'Macururé',5,'2019-06-12 15:10:11'),(520,'Madre de Deus',5,'2019-06-12 15:10:11'),(521,'Maetinga',5,'2019-06-12 15:10:11'),(522,'Maiquinique',5,'2019-06-12 15:10:11'),(523,'Mairi',5,'2019-06-12 15:10:11'),(524,'Malhada',5,'2019-06-12 15:10:11'),(525,'Malhada de Pedras',5,'2019-06-12 15:10:11'),(526,'Manoel Vitorino',5,'2019-06-12 15:10:11'),(527,'Mansidão',5,'2019-06-12 15:10:11'),(528,'Maracás',5,'2019-06-12 15:10:11'),(529,'Maragogipe',5,'2019-06-12 15:10:11'),(530,'Maraú',5,'2019-06-12 15:10:11'),(531,'Marcionílio Souza',5,'2019-06-12 15:10:11'),(532,'Mascote',5,'2019-06-12 15:10:11'),(533,'Mata de São João',5,'2019-06-12 15:10:11'),(534,'Matina',5,'2019-06-12 15:10:11'),(535,'Medeiros Neto',5,'2019-06-12 15:10:11'),(536,'Miguel Calmon',5,'2019-06-12 15:10:11'),(537,'Milagres',5,'2019-06-12 15:10:11'),(538,'Mirangaba',5,'2019-06-12 15:10:11'),(539,'Mirante',5,'2019-06-12 15:10:11'),(540,'Monte Santo',5,'2019-06-12 15:10:11'),(541,'Morpará',5,'2019-06-12 15:10:11'),(542,'Morro do Chapéu',5,'2019-06-12 15:10:11'),(543,'Mortugaba',5,'2019-06-12 15:10:11'),(544,'Mucugê',5,'2019-06-12 15:10:11'),(545,'Mucuri',5,'2019-06-12 15:10:11'),(546,'Mulungu do Morro',5,'2019-06-12 15:10:11'),(547,'Mundo Novo',5,'2019-06-12 15:10:11'),(548,'Muniz Ferreira',5,'2019-06-12 15:10:11'),(549,'Muquém de São Francisco',5,'2019-06-12 15:10:11'),(550,'Muritiba',5,'2019-06-12 15:10:11'),(551,'Mutuípe',5,'2019-06-12 15:10:11'),(552,'Nazaré',5,'2019-06-12 15:10:11'),(553,'Nilo Peçanha',5,'2019-06-12 15:10:11'),(554,'Nordestina',5,'2019-06-12 15:10:11'),(555,'Nova Canaã',5,'2019-06-12 15:10:11'),(556,'Nova Fátima',5,'2019-06-12 15:10:11'),(557,'Nova Ibiá',5,'2019-06-12 15:10:11'),(558,'Nova Itarana',5,'2019-06-12 15:10:11'),(559,'Nova Redenção',5,'2019-06-12 15:10:11'),(560,'Nova Soure',5,'2019-06-12 15:10:11'),(561,'Nova Viçosa',5,'2019-06-12 15:10:11'),(562,'Novo Horizonte',5,'2019-06-12 15:10:11'),(563,'Novo Triunfo',5,'2019-06-12 15:10:11'),(564,'Olindina',5,'2019-06-12 15:10:11'),(565,'Oliveira dos Brejinhos',5,'2019-06-12 15:10:11'),(566,'Ouriçangas',5,'2019-06-12 15:10:11'),(567,'Ourolândia',5,'2019-06-12 15:10:11'),(568,'Palmas de Monte Alto',5,'2019-06-12 15:10:11'),(569,'Palmeiras',5,'2019-06-12 15:10:11'),(570,'Paramirim',5,'2019-06-12 15:10:11'),(571,'Paratinga',5,'2019-06-12 15:10:11'),(572,'Paripiranga',5,'2019-06-12 15:10:11'),(573,'Pau Brasil',5,'2019-06-12 15:10:11'),(574,'Paulo Afonso',5,'2019-06-12 15:10:11'),(575,'Pé de Serra',5,'2019-06-12 15:10:11'),(576,'Pedrão',5,'2019-06-12 15:10:11'),(577,'Pedro Alexandre',5,'2019-06-12 15:10:11'),(578,'Piatã',5,'2019-06-12 15:10:11'),(579,'Pilão Arcado',5,'2019-06-12 15:10:11'),(580,'Pindaí',5,'2019-06-12 15:10:11'),(581,'Pindobaçu',5,'2019-06-12 15:10:11'),(582,'Pintadas',5,'2019-06-12 15:10:11'),(583,'Piraí do Norte',5,'2019-06-12 15:10:11'),(584,'Piripá',5,'2019-06-12 15:10:11'),(585,'Piritiba',5,'2019-06-12 15:10:11'),(586,'Planaltino',5,'2019-06-12 15:10:11'),(587,'Planalto',5,'2019-06-12 15:10:11'),(588,'Poções',5,'2019-06-12 15:10:11'),(589,'Pojuca',5,'2019-06-12 15:10:11'),(590,'Ponto Novo',5,'2019-06-12 15:10:11'),(591,'Porto Seguro',5,'2019-06-12 15:10:11'),(592,'Potiraguá',5,'2019-06-12 15:10:11'),(593,'Prado',5,'2019-06-12 15:10:11'),(594,'Presidente Dutra',5,'2019-06-12 15:10:11'),(595,'Presidente Jânio Quadros',5,'2019-06-12 15:10:11'),(596,'Presidente Tancredo Neves',5,'2019-06-12 15:10:11'),(597,'Queimadas',5,'2019-06-12 15:10:11'),(598,'Quijingue',5,'2019-06-12 15:10:11'),(599,'Quixabeira',5,'2019-06-12 15:10:11'),(600,'Rafael Jambeiro',5,'2019-06-12 15:10:11'),(601,'Remanso',5,'2019-06-12 15:10:11'),(602,'Retirolândia',5,'2019-06-12 15:10:11'),(603,'Riachão das Neves',5,'2019-06-12 15:10:11'),(604,'Riachão do Jacuípe',5,'2019-06-12 15:10:11'),(605,'Riacho de Santana',5,'2019-06-12 15:10:11'),(606,'Ribeira do Amparo',5,'2019-06-12 15:10:11'),(607,'Ribeira do Pombal',5,'2019-06-12 15:10:11'),(608,'Ribeirão do Largo',5,'2019-06-12 15:10:11'),(609,'Rio de Contas',5,'2019-06-12 15:10:11'),(610,'Rio do Antônio',5,'2019-06-12 15:10:11'),(611,'Rio do Pires',5,'2019-06-12 15:10:11'),(612,'Rio Real',5,'2019-06-12 15:10:11'),(613,'Rodelas',5,'2019-06-12 15:10:11'),(614,'Ruy Barbosa',5,'2019-06-12 15:10:11'),(615,'Salinas da Margarida',5,'2019-06-12 15:10:11'),(616,'Salvador',5,'2019-06-12 15:10:11'),(617,'Santa Bárbara',5,'2019-06-12 15:10:11'),(618,'Santa Brígida',5,'2019-06-12 15:10:11'),(619,'Santa Cruz Cabrália',5,'2019-06-12 15:10:11'),(620,'Santa Cruz da Vitória',5,'2019-06-12 15:10:11'),(621,'Santa Inês',5,'2019-06-12 15:10:11'),(622,'Santa Luzia',5,'2019-06-12 15:10:11'),(623,'Santa Maria da Vitória',5,'2019-06-12 15:10:11'),(624,'Santa Rita de Cássia',5,'2019-06-12 15:10:11'),(625,'Santa Teresinha',5,'2019-06-12 15:10:11'),(626,'Santaluz',5,'2019-06-12 15:10:11'),(627,'Santana',5,'2019-06-12 15:10:11'),(628,'Santanópolis',5,'2019-06-12 15:10:11'),(629,'Santo Amaro',5,'2019-06-12 15:10:11'),(630,'Santo Antônio de Jesus',5,'2019-06-12 15:10:11'),(631,'Santo Estêvão',5,'2019-06-12 15:10:11'),(632,'São Desidério',5,'2019-06-12 15:10:11'),(633,'São Domingos',5,'2019-06-12 15:10:11'),(634,'São Felipe',5,'2019-06-12 15:10:11'),(635,'São Félix',5,'2019-06-12 15:10:11'),(636,'São Félix do Coribe',5,'2019-06-12 15:10:11'),(637,'São Francisco do Conde',5,'2019-06-12 15:10:11'),(638,'São Gabriel',5,'2019-06-12 15:10:11'),(639,'São Gonçalo dos Campos',5,'2019-06-12 15:10:11'),(640,'São José da Vitória',5,'2019-06-12 15:10:11'),(641,'São José do Jacuípe',5,'2019-06-12 15:10:11'),(642,'São Miguel das Matas',5,'2019-06-12 15:10:11'),(643,'São Sebastião do Passé',5,'2019-06-12 15:10:11'),(644,'Sapeaçu',5,'2019-06-12 15:10:11'),(645,'Sátiro Dias',5,'2019-06-12 15:10:11'),(646,'Saubara',5,'2019-06-12 15:10:11'),(647,'Saúde',5,'2019-06-12 15:10:11'),(648,'Seabra',5,'2019-06-12 15:10:11'),(649,'Sebastião Laranjeiras',5,'2019-06-12 15:10:11'),(650,'Senhor do Bonfim',5,'2019-06-12 15:10:11'),(651,'Sento Sé',5,'2019-06-12 15:10:11'),(652,'Serra do Ramalho',5,'2019-06-12 15:10:11'),(653,'Serra Dourada',5,'2019-06-12 15:10:11'),(654,'Serra Preta',5,'2019-06-12 15:10:11'),(655,'Serrinha',5,'2019-06-12 15:10:11'),(656,'Serrolândia',5,'2019-06-12 15:10:11'),(657,'Simões Filho',5,'2019-06-12 15:10:11'),(658,'Sítio do Mato',5,'2019-06-12 15:10:11'),(659,'Sítio do Quinto',5,'2019-06-12 15:10:11'),(660,'Sobradinho',5,'2019-06-12 15:10:11'),(661,'Souto Soares',5,'2019-06-12 15:10:11'),(662,'Tabocas do Brejo Velho',5,'2019-06-12 15:10:11'),(663,'Tanhaçu',5,'2019-06-12 15:10:11'),(664,'Tanque Novo',5,'2019-06-12 15:10:11'),(665,'Tanquinho',5,'2019-06-12 15:10:11'),(666,'Taperoá',5,'2019-06-12 15:10:11'),(667,'Tapiramutá',5,'2019-06-12 15:10:11'),(668,'Teixeira de Freitas',5,'2019-06-12 15:10:11'),(669,'Teodoro Sampaio',5,'2019-06-12 15:10:11'),(670,'Teofilândia',5,'2019-06-12 15:10:11'),(671,'Teolândia',5,'2019-06-12 15:10:11'),(672,'Terra Nova',5,'2019-06-12 15:10:11'),(673,'Tremedal',5,'2019-06-12 15:10:11'),(674,'Tucano',5,'2019-06-12 15:10:11'),(675,'Uauá',5,'2019-06-12 15:10:11'),(676,'Ubaíra',5,'2019-06-12 15:10:11'),(677,'Ubaitaba',5,'2019-06-12 15:10:11'),(678,'Ubatã',5,'2019-06-12 15:10:11'),(679,'Uibaí',5,'2019-06-12 15:10:11'),(680,'Umburanas',5,'2019-06-12 15:10:11'),(681,'Una',5,'2019-06-12 15:10:11'),(682,'Urandi',5,'2019-06-12 15:10:11'),(683,'Uruçuca',5,'2019-06-12 15:10:11'),(684,'Utinga',5,'2019-06-12 15:10:11'),(685,'Valença',5,'2019-06-12 15:10:11'),(686,'Valente',5,'2019-06-12 15:10:11'),(687,'Várzea da Roça',5,'2019-06-12 15:10:11'),(688,'Várzea do Poço',5,'2019-06-12 15:10:11'),(689,'Várzea Nova',5,'2019-06-12 15:10:11'),(690,'Varzedo',5,'2019-06-12 15:10:11'),(691,'Vera Cruz',5,'2019-06-12 15:10:11'),(692,'Vereda',5,'2019-06-12 15:10:11'),(693,'Vitória da Conquista',5,'2019-06-12 15:10:11'),(694,'Wagner',5,'2019-06-12 15:10:11'),(695,'Wanderley',5,'2019-06-12 15:10:11'),(696,'Wenceslau Guimarães',5,'2019-06-12 15:10:11'),(697,'Xique-Xique',5,'2019-06-12 15:10:11'),(698,'Abaiara',6,'2019-06-12 15:10:11'),(699,'Acarape',6,'2019-06-12 15:10:11'),(700,'Acaraú',6,'2019-06-12 15:10:11'),(701,'Acopiara',6,'2019-06-12 15:10:11'),(702,'Aiuaba',6,'2019-06-12 15:10:11'),(703,'Alcântaras',6,'2019-06-12 15:10:11'),(704,'Altaneira',6,'2019-06-12 15:10:11'),(705,'Alto Santo',6,'2019-06-12 15:10:11'),(706,'Amontada',6,'2019-06-12 15:10:11'),(707,'Antonina do Norte',6,'2019-06-12 15:10:11'),(708,'Apuiarés',6,'2019-06-12 15:10:11'),(709,'Aquiraz',6,'2019-06-12 15:10:11'),(710,'Aracati',6,'2019-06-12 15:10:11'),(711,'Aracoiaba',6,'2019-06-12 15:10:11'),(712,'Ararendá',6,'2019-06-12 15:10:11'),(713,'Araripe',6,'2019-06-12 15:10:11'),(714,'Aratuba',6,'2019-06-12 15:10:11'),(715,'Arneiroz',6,'2019-06-12 15:10:11'),(716,'Assaré',6,'2019-06-12 15:10:11'),(717,'Aurora',6,'2019-06-12 15:10:11'),(718,'Baixio',6,'2019-06-12 15:10:11'),(719,'Banabuiú',6,'2019-06-12 15:10:11'),(720,'Barbalha',6,'2019-06-12 15:10:11'),(721,'Barreira',6,'2019-06-12 15:10:11'),(722,'Barro',6,'2019-06-12 15:10:11'),(723,'Barroquinha',6,'2019-06-12 15:10:11'),(724,'Baturité',6,'2019-06-12 15:10:11'),(725,'Beberibe',6,'2019-06-12 15:10:11'),(726,'Bela Cruz',6,'2019-06-12 15:10:11'),(727,'Boa Viagem',6,'2019-06-12 15:10:11'),(728,'Brejo Santo',6,'2019-06-12 15:10:11'),(729,'Camocim',6,'2019-06-12 15:10:11'),(730,'Campos Sales',6,'2019-06-12 15:10:11'),(731,'Canindé',6,'2019-06-12 15:10:11'),(732,'Capistrano',6,'2019-06-12 15:10:11'),(733,'Caridade',6,'2019-06-12 15:10:11'),(734,'Cariré',6,'2019-06-12 15:10:11'),(735,'Caririaçu',6,'2019-06-12 15:10:11'),(736,'Cariús',6,'2019-06-12 15:10:11'),(737,'Carnaubal',6,'2019-06-12 15:10:11'),(738,'Cascavel',6,'2019-06-12 15:10:11'),(739,'Catarina',6,'2019-06-12 15:10:11'),(740,'Catunda',6,'2019-06-12 15:10:11'),(741,'Caucaia',6,'2019-06-12 15:10:11'),(742,'Cedro',6,'2019-06-12 15:10:11'),(743,'Chaval',6,'2019-06-12 15:10:11'),(744,'Choró',6,'2019-06-12 15:10:11'),(745,'Chorozinho',6,'2019-06-12 15:10:11'),(746,'Coreaú',6,'2019-06-12 15:10:11'),(747,'Crateús',6,'2019-06-12 15:10:11'),(748,'Crato',6,'2019-06-12 15:10:11'),(749,'Croatá',6,'2019-06-12 15:10:11'),(750,'Cruz',6,'2019-06-12 15:10:11'),(751,'Deputado Irapuan Pinheiro',6,'2019-06-12 15:10:11'),(752,'Ererê',6,'2019-06-12 15:10:11'),(753,'Eusébio',6,'2019-06-12 15:10:11'),(754,'Farias Brito',6,'2019-06-12 15:10:11'),(755,'Forquilha',6,'2019-06-12 15:10:11'),(756,'Fortaleza',6,'2019-06-12 15:10:11'),(757,'Fortim',6,'2019-06-12 15:10:11'),(758,'Frecheirinha',6,'2019-06-12 15:10:11'),(759,'General Sampaio',6,'2019-06-12 15:10:11'),(760,'Graça',6,'2019-06-12 15:10:11'),(761,'Granja',6,'2019-06-12 15:10:11'),(762,'Granjeiro',6,'2019-06-12 15:10:11'),(763,'Groaíras',6,'2019-06-12 15:10:11'),(764,'Guaiúba',6,'2019-06-12 15:10:11'),(765,'Guaraciaba do Norte',6,'2019-06-12 15:10:11'),(766,'Guaramiranga',6,'2019-06-12 15:10:11'),(767,'Hidrolândia',6,'2019-06-12 15:10:11'),(768,'Horizonte',6,'2019-06-12 15:10:11'),(769,'Ibaretama',6,'2019-06-12 15:10:11'),(770,'Ibiapina',6,'2019-06-12 15:10:11'),(771,'Ibicuitinga',6,'2019-06-12 15:10:11'),(772,'Icapuí',6,'2019-06-12 15:10:11'),(773,'Icó',6,'2019-06-12 15:10:11'),(774,'Iguatu',6,'2019-06-12 15:10:11'),(775,'Independência',6,'2019-06-12 15:10:11'),(776,'Ipaporanga',6,'2019-06-12 15:10:11'),(777,'Ipaumirim',6,'2019-06-12 15:10:11'),(778,'Ipu',6,'2019-06-12 15:10:11'),(779,'Ipueiras',6,'2019-06-12 15:10:11'),(780,'Iracema',6,'2019-06-12 15:10:11'),(781,'Irauçuba',6,'2019-06-12 15:10:11'),(782,'Itaiçaba',6,'2019-06-12 15:10:11'),(783,'Itaitinga',6,'2019-06-12 15:10:11'),(784,'Itapagé',6,'2019-06-12 15:10:11'),(785,'Itapipoca',6,'2019-06-12 15:10:11'),(786,'Itapiúna',6,'2019-06-12 15:10:11'),(787,'Itarema',6,'2019-06-12 15:10:11'),(788,'Itatira',6,'2019-06-12 15:10:11'),(789,'Jaguaretama',6,'2019-06-12 15:10:11'),(790,'Jaguaribara',6,'2019-06-12 15:10:11'),(791,'Jaguaribe',6,'2019-06-12 15:10:11'),(792,'Jaguaruana',6,'2019-06-12 15:10:11'),(793,'Jardim',6,'2019-06-12 15:10:11'),(794,'Jati',6,'2019-06-12 15:10:11'),(795,'Jijoca de Jericoacoara',6,'2019-06-12 15:10:11'),(796,'Juazeiro do Norte',6,'2019-06-12 15:10:11'),(797,'Jucás',6,'2019-06-12 15:10:11'),(798,'Lavras da Mangabeira',6,'2019-06-12 15:10:11'),(799,'Limoeiro do Norte',6,'2019-06-12 15:10:11'),(800,'Madalena',6,'2019-06-12 15:10:11'),(801,'Maracanaú',6,'2019-06-12 15:10:11'),(802,'Maranguape',6,'2019-06-12 15:10:11'),(803,'Marco',6,'2019-06-12 15:10:11'),(804,'Martinópole',6,'2019-06-12 15:10:11'),(805,'Massapê',6,'2019-06-12 15:10:11'),(806,'Mauriti',6,'2019-06-12 15:10:11'),(807,'Meruoca',6,'2019-06-12 15:10:11'),(808,'Milagres',6,'2019-06-12 15:10:11'),(809,'Milhã',6,'2019-06-12 15:10:11'),(810,'Miraíma',6,'2019-06-12 15:10:11'),(811,'Missão Velha',6,'2019-06-12 15:10:11'),(812,'Mombaça',6,'2019-06-12 15:10:11'),(813,'Monsenhor Tabosa',6,'2019-06-12 15:10:11'),(814,'Morada Nova',6,'2019-06-12 15:10:11'),(815,'Moraújo',6,'2019-06-12 15:10:11'),(816,'Morrinhos',6,'2019-06-12 15:10:11'),(817,'Mucambo',6,'2019-06-12 15:10:11'),(818,'Mulungu',6,'2019-06-12 15:10:11'),(819,'Nova Olinda',6,'2019-06-12 15:10:11'),(820,'Nova Russas',6,'2019-06-12 15:10:11'),(821,'Novo Oriente',6,'2019-06-12 15:10:11'),(822,'Ocara',6,'2019-06-12 15:10:11'),(823,'Orós',6,'2019-06-12 15:10:11'),(824,'Pacajus',6,'2019-06-12 15:10:11'),(825,'Pacatuba',6,'2019-06-12 15:10:11'),(826,'Pacoti',6,'2019-06-12 15:10:11'),(827,'Pacujá',6,'2019-06-12 15:10:11'),(828,'Palhano',6,'2019-06-12 15:10:11'),(829,'Palmácia',6,'2019-06-12 15:10:11'),(830,'Paracuru',6,'2019-06-12 15:10:11'),(831,'Paraipaba',6,'2019-06-12 15:10:11'),(832,'Parambu',6,'2019-06-12 15:10:11'),(833,'Paramoti',6,'2019-06-12 15:10:11'),(834,'Pedra Branca',6,'2019-06-12 15:10:11'),(835,'Penaforte',6,'2019-06-12 15:10:11'),(836,'Pentecoste',6,'2019-06-12 15:10:11'),(837,'Pereiro',6,'2019-06-12 15:10:11'),(838,'Pindoretama',6,'2019-06-12 15:10:11'),(839,'Piquet Carneiro',6,'2019-06-12 15:10:11'),(840,'Pires Ferreira',6,'2019-06-12 15:10:11'),(841,'Poranga',6,'2019-06-12 15:10:11'),(842,'Porteiras',6,'2019-06-12 15:10:11'),(843,'Potengi',6,'2019-06-12 15:10:11'),(844,'Potiretama',6,'2019-06-12 15:10:11'),(845,'Quiterianópolis',6,'2019-06-12 15:10:11'),(846,'Quixadá',6,'2019-06-12 15:10:11'),(847,'Quixelô',6,'2019-06-12 15:10:11'),(848,'Quixeramobim',6,'2019-06-12 15:10:11'),(849,'Quixeré',6,'2019-06-12 15:10:11'),(850,'Redenção',6,'2019-06-12 15:10:11'),(851,'Reriutaba',6,'2019-06-12 15:10:11'),(852,'Russas',6,'2019-06-12 15:10:11'),(853,'Saboeiro',6,'2019-06-12 15:10:11'),(854,'Salitre',6,'2019-06-12 15:10:11'),(855,'Santa Quitéria',6,'2019-06-12 15:10:11'),(856,'Santana do Acaraú',6,'2019-06-12 15:10:11'),(857,'Santana do Cariri',6,'2019-06-12 15:10:11'),(858,'São Benedito',6,'2019-06-12 15:10:11'),(859,'São Gonçalo do Amarante',6,'2019-06-12 15:10:11'),(860,'São João do Jaguaribe',6,'2019-06-12 15:10:11'),(861,'São Luís do Curu',6,'2019-06-12 15:10:11'),(862,'Senador Pompeu',6,'2019-06-12 15:10:11'),(863,'Senador Sá',6,'2019-06-12 15:10:11'),(864,'Sobral',6,'2019-06-12 15:10:11'),(865,'Solonópole',6,'2019-06-12 15:10:11'),(866,'Tabuleiro do Norte',6,'2019-06-12 15:10:11'),(867,'Tamboril',6,'2019-06-12 15:10:11'),(868,'Tarrafas',6,'2019-06-12 15:10:11'),(869,'Tauá',6,'2019-06-12 15:10:11'),(870,'Tejuçuoca',6,'2019-06-12 15:10:11'),(871,'Tianguá',6,'2019-06-12 15:10:11'),(872,'Trairi',6,'2019-06-12 15:10:11'),(873,'Tururu',6,'2019-06-12 15:10:11'),(874,'Ubajara',6,'2019-06-12 15:10:11'),(875,'Umari',6,'2019-06-12 15:10:11'),(876,'Umirim',6,'2019-06-12 15:10:11'),(877,'Uruburetama',6,'2019-06-12 15:10:11'),(878,'Uruoca',6,'2019-06-12 15:10:11'),(879,'Varjota',6,'2019-06-12 15:10:11'),(880,'Várzea Alegre',6,'2019-06-12 15:10:11'),(881,'Viçosa do Ceará',6,'2019-06-12 15:10:11'),(882,'Brasília',7,'2019-06-12 15:10:11'),(883,'Abadia de Goiás',9,'2019-06-12 15:10:11'),(884,'Abadiânia',9,'2019-06-12 15:10:11'),(885,'Acreúna',9,'2019-06-12 15:10:11'),(886,'Adelândia',9,'2019-06-12 15:10:11'),(887,'Água Fria de Goiás',9,'2019-06-12 15:10:11'),(888,'Água Limpa',9,'2019-06-12 15:10:11'),(889,'Águas Lindas de Goiás',9,'2019-06-12 15:10:11'),(890,'Alexânia',9,'2019-06-12 15:10:11'),(891,'Aloândia',9,'2019-06-12 15:10:11'),(892,'Alto Horizonte',9,'2019-06-12 15:10:11'),(893,'Alto Paraíso de Goiás',9,'2019-06-12 15:10:11'),(894,'Alvorada do Norte',9,'2019-06-12 15:10:11'),(895,'Amaralina',9,'2019-06-12 15:10:11'),(896,'Americano do Brasil',9,'2019-06-12 15:10:11'),(897,'Amorinópolis',9,'2019-06-12 15:10:11'),(898,'Anápolis',9,'2019-06-12 15:10:11'),(899,'Anhanguera',9,'2019-06-12 15:10:11'),(900,'Anicuns',9,'2019-06-12 15:10:11'),(901,'Aparecida de Goiânia',9,'2019-06-12 15:10:11'),(902,'Aparecida do Rio Doce',9,'2019-06-12 15:10:11'),(903,'Aporé',9,'2019-06-12 15:10:11'),(904,'Araçu',9,'2019-06-12 15:10:11'),(905,'Aragarças',9,'2019-06-12 15:10:11'),(906,'Aragoiânia',9,'2019-06-12 15:10:11'),(907,'Araguapaz',9,'2019-06-12 15:10:11'),(908,'Arenópolis',9,'2019-06-12 15:10:11'),(909,'Aruanã',9,'2019-06-12 15:10:11'),(910,'Aurilândia',9,'2019-06-12 15:10:11'),(911,'Avelinópolis',9,'2019-06-12 15:10:11'),(912,'Baliza',9,'2019-06-12 15:10:11'),(913,'Barro Alto',9,'2019-06-12 15:10:11'),(914,'Bela Vista de Goiás',9,'2019-06-12 15:10:11'),(915,'Bom Jardim de Goiás',9,'2019-06-12 15:10:11'),(916,'Bom Jesus de Goiás',9,'2019-06-12 15:10:11'),(917,'Bonfinópolis',9,'2019-06-12 15:10:11'),(918,'Bonópolis',9,'2019-06-12 15:10:11'),(919,'Brazabrantes',9,'2019-06-12 15:10:11'),(920,'Britânia',9,'2019-06-12 15:10:11'),(921,'Buriti Alegre',9,'2019-06-12 15:10:11'),(922,'Buriti de Goiás',9,'2019-06-12 15:10:11'),(923,'Buritinópolis',9,'2019-06-12 15:10:11'),(924,'Cabeceiras',9,'2019-06-12 15:10:11'),(925,'Cachoeira Alta',9,'2019-06-12 15:10:11'),(926,'Cachoeira de Goiás',9,'2019-06-12 15:10:11'),(927,'Cachoeira Dourada',9,'2019-06-12 15:10:11'),(928,'Caçu',9,'2019-06-12 15:10:11'),(929,'Caiapônia',9,'2019-06-12 15:10:11'),(930,'Caldas Novas',9,'2019-06-12 15:10:11'),(931,'Caldazinha',9,'2019-06-12 15:10:11'),(932,'Campestre de Goiás',9,'2019-06-12 15:10:11'),(933,'Campinaçu',9,'2019-06-12 15:10:11'),(934,'Campinorte',9,'2019-06-12 15:10:11'),(935,'Campo Alegre de Goiás',9,'2019-06-12 15:10:11'),(936,'Campo Limpo de Goiás',9,'2019-06-12 15:10:11'),(937,'Campos Belos',9,'2019-06-12 15:10:11'),(938,'Campos Verdes',9,'2019-06-12 15:10:11'),(939,'Carmo do Rio Verde',9,'2019-06-12 15:10:11'),(940,'Castelândia',9,'2019-06-12 15:10:11'),(941,'Catalão',9,'2019-06-12 15:10:11'),(942,'Caturaí',9,'2019-06-12 15:10:11'),(943,'Cavalcante',9,'2019-06-12 15:10:11'),(944,'Ceres',9,'2019-06-12 15:10:11'),(945,'Cezarina',9,'2019-06-12 15:10:11'),(946,'Chapadão do Céu',9,'2019-06-12 15:10:11'),(947,'Cidade Ocidental',9,'2019-06-12 15:10:11'),(948,'Cocalzinho de Goiás',9,'2019-06-12 15:10:11'),(949,'Colinas do Sul',9,'2019-06-12 15:10:11'),(950,'Córrego do Ouro',9,'2019-06-12 15:10:11'),(951,'Corumbá de Goiás',9,'2019-06-12 15:10:11'),(952,'Corumbaíba',9,'2019-06-12 15:10:11'),(953,'Cristalina',9,'2019-06-12 15:10:11'),(954,'Cristianópolis',9,'2019-06-12 15:10:11'),(955,'Crixás',9,'2019-06-12 15:10:11'),(956,'Cromínia',9,'2019-06-12 15:10:11'),(957,'Cumari',9,'2019-06-12 15:10:11'),(958,'Damianópolis',9,'2019-06-12 15:10:11'),(959,'Damolândia',9,'2019-06-12 15:10:11'),(960,'Davinópolis',9,'2019-06-12 15:10:11'),(961,'Diorama',9,'2019-06-12 15:10:11'),(962,'Divinópolis de Goiás',9,'2019-06-12 15:10:11'),(963,'Doverlândia',9,'2019-06-12 15:10:11'),(964,'Edealina',9,'2019-06-12 15:10:11'),(965,'Edéia',9,'2019-06-12 15:10:11'),(966,'Estrela do Norte',9,'2019-06-12 15:10:11'),(967,'Faina',9,'2019-06-12 15:10:11'),(968,'Fazenda Nova',9,'2019-06-12 15:10:11'),(969,'Firminópolis',9,'2019-06-12 15:10:11'),(970,'Flores de Goiás',9,'2019-06-12 15:10:11'),(971,'Formosa',9,'2019-06-12 15:10:11'),(972,'Formoso',9,'2019-06-12 15:10:11'),(973,'Gameleira de Goiás',9,'2019-06-12 15:10:11'),(974,'Goianápolis',9,'2019-06-12 15:10:11'),(975,'Goiandira',9,'2019-06-12 15:10:11'),(976,'Goianésia',9,'2019-06-12 15:10:11'),(977,'Goiânia',9,'2019-06-12 15:10:11'),(978,'Goianira',9,'2019-06-12 15:10:11'),(979,'Goiás',9,'2019-06-12 15:10:11'),(980,'Goiatuba',9,'2019-06-12 15:10:11'),(981,'Gouvelândia',9,'2019-06-12 15:10:11'),(982,'Guapó',9,'2019-06-12 15:10:11'),(983,'Guaraíta',9,'2019-06-12 15:10:11'),(984,'Guarani de Goiás',9,'2019-06-12 15:10:11'),(985,'Guarinos',9,'2019-06-12 15:10:11'),(986,'Heitoraí',9,'2019-06-12 15:10:11'),(987,'Hidrolândia',9,'2019-06-12 15:10:11'),(988,'Hidrolina',9,'2019-06-12 15:10:11'),(989,'Iaciara',9,'2019-06-12 15:10:11'),(990,'Inaciolândia',9,'2019-06-12 15:10:11'),(991,'Indiara',9,'2019-06-12 15:10:11'),(992,'Inhumas',9,'2019-06-12 15:10:11'),(993,'Ipameri',9,'2019-06-12 15:10:11'),(994,'Ipiranga de Goiás',9,'2019-06-12 15:10:11'),(995,'Iporá',9,'2019-06-12 15:10:11'),(996,'Israelândia',9,'2019-06-12 15:10:11'),(997,'Itaberaí',9,'2019-06-12 15:10:11'),(998,'Itaguari',9,'2019-06-12 15:10:11'),(999,'Itaguaru',9,'2019-06-12 15:10:11'),(1000,'Itajá',9,'2019-06-12 15:10:11'),(1001,'Itapaci',9,'2019-06-12 15:10:11'),(1002,'Itapirapuã',9,'2019-06-12 15:10:11'),(1003,'Itapuranga',9,'2019-06-12 15:10:11'),(1004,'Itarumã',9,'2019-06-12 15:10:11'),(1005,'Itauçu',9,'2019-06-12 15:10:11'),(1006,'Itumbiara',9,'2019-06-12 15:10:11'),(1007,'Ivolândia',9,'2019-06-12 15:10:11'),(1008,'Jandaia',9,'2019-06-12 15:10:11'),(1009,'Jaraguá',9,'2019-06-12 15:10:11'),(1010,'Jataí',9,'2019-06-12 15:10:11'),(1011,'Jaupaci',9,'2019-06-12 15:10:11'),(1012,'Jesúpolis',9,'2019-06-12 15:10:11'),(1013,'Joviânia',9,'2019-06-12 15:10:11'),(1014,'Jussara',9,'2019-06-12 15:10:11'),(1015,'Lagoa Santa',9,'2019-06-12 15:10:11'),(1016,'Leopoldo de Bulhões',9,'2019-06-12 15:10:11'),(1017,'Luziânia',9,'2019-06-12 15:10:11'),(1018,'Mairipotaba',9,'2019-06-12 15:10:11'),(1019,'Mambaí',9,'2019-06-12 15:10:11'),(1020,'Mara Rosa',9,'2019-06-12 15:10:11'),(1021,'Marzagão',9,'2019-06-12 15:10:11'),(1022,'Matrinchã',9,'2019-06-12 15:10:11'),(1023,'Maurilândia',9,'2019-06-12 15:10:11'),(1024,'Mimoso de Goiás',9,'2019-06-12 15:10:11'),(1025,'Minaçu',9,'2019-06-12 15:10:11'),(1026,'Mineiros',9,'2019-06-12 15:10:11'),(1027,'Moiporá',9,'2019-06-12 15:10:11'),(1028,'Monte Alegre de Goiás',9,'2019-06-12 15:10:11'),(1029,'Montes Claros de Goiás',9,'2019-06-12 15:10:11'),(1030,'Montividiu',9,'2019-06-12 15:10:11'),(1031,'Montividiu do Norte',9,'2019-06-12 15:10:11'),(1032,'Morrinhos',9,'2019-06-12 15:10:11'),(1033,'Morro Agudo de Goiás',9,'2019-06-12 15:10:11'),(1034,'Mossâmedes',9,'2019-06-12 15:10:11'),(1035,'Mozarlândia',9,'2019-06-12 15:10:11'),(1036,'Mundo Novo',9,'2019-06-12 15:10:11'),(1037,'Mutunópolis',9,'2019-06-12 15:10:11'),(1038,'Nazário',9,'2019-06-12 15:10:11'),(1039,'Nerópolis',9,'2019-06-12 15:10:11'),(1040,'Niquelândia',9,'2019-06-12 15:10:11'),(1041,'Nova América',9,'2019-06-12 15:10:11'),(1042,'Nova Aurora',9,'2019-06-12 15:10:11'),(1043,'Nova Crixás',9,'2019-06-12 15:10:11'),(1044,'Nova Glória',9,'2019-06-12 15:10:11'),(1045,'Nova Iguaçu de Goiás',9,'2019-06-12 15:10:11'),(1046,'Nova Roma',9,'2019-06-12 15:10:11'),(1047,'Nova Veneza',9,'2019-06-12 15:10:11'),(1048,'Novo Brasil',9,'2019-06-12 15:10:11'),(1049,'Novo Gama',9,'2019-06-12 15:10:11'),(1050,'Novo Planalto',9,'2019-06-12 15:10:11'),(1051,'Orizona',9,'2019-06-12 15:10:11'),(1052,'Ouro Verde de Goiás',9,'2019-06-12 15:10:11'),(1053,'Ouvidor',9,'2019-06-12 15:10:11'),(1054,'Padre Bernardo',9,'2019-06-12 15:10:11'),(1055,'Palestina de Goiás',9,'2019-06-12 15:10:11'),(1056,'Palmeiras de Goiás',9,'2019-06-12 15:10:11'),(1057,'Palmelo',9,'2019-06-12 15:10:11'),(1058,'Palminópolis',9,'2019-06-12 15:10:11'),(1059,'Panamá',9,'2019-06-12 15:10:11'),(1060,'Paranaiguara',9,'2019-06-12 15:10:11'),(1061,'Paraúna',9,'2019-06-12 15:10:11'),(1062,'Perolândia',9,'2019-06-12 15:10:11'),(1063,'Petrolina de Goiás',9,'2019-06-12 15:10:11'),(1064,'Pilar de Goiás',9,'2019-06-12 15:10:11'),(1065,'Piracanjuba',9,'2019-06-12 15:10:11'),(1066,'Piranhas',9,'2019-06-12 15:10:11'),(1067,'Pirenópolis',9,'2019-06-12 15:10:11'),(1068,'Pires do Rio',9,'2019-06-12 15:10:11'),(1069,'Planaltina',9,'2019-06-12 15:10:11'),(1070,'Pontalina',9,'2019-06-12 15:10:11'),(1071,'Porangatu',9,'2019-06-12 15:10:11'),(1072,'Porteirão',9,'2019-06-12 15:10:11'),(1073,'Portelândia',9,'2019-06-12 15:10:11'),(1074,'Posse',9,'2019-06-12 15:10:11'),(1075,'Professor Jamil',9,'2019-06-12 15:10:11'),(1076,'Quirinópolis',9,'2019-06-12 15:10:11'),(1077,'Rialma',9,'2019-06-12 15:10:11'),(1078,'Rianápolis',9,'2019-06-12 15:10:11'),(1079,'Rio Quente',9,'2019-06-12 15:10:11'),(1080,'Rio Verde',9,'2019-06-12 15:10:11'),(1081,'Rubiataba',9,'2019-06-12 15:10:11'),(1082,'Sanclerlândia',9,'2019-06-12 15:10:11'),(1083,'Santa Bárbara de Goiás',9,'2019-06-12 15:10:11'),(1084,'Santa Cruz de Goiás',9,'2019-06-12 15:10:11'),(1085,'Santa Fé de Goiás',9,'2019-06-12 15:10:11'),(1086,'Santa Helena de Goiás',9,'2019-06-12 15:10:11'),(1087,'Santa Isabel',9,'2019-06-12 15:10:11'),(1088,'Santa Rita do Araguaia',9,'2019-06-12 15:10:11'),(1089,'Santa Rita do Novo Destino',9,'2019-06-12 15:10:11'),(1090,'Santa Rosa de Goiás',9,'2019-06-12 15:10:11'),(1091,'Santa Tereza de Goiás',9,'2019-06-12 15:10:11'),(1092,'Santa Terezinha de Goiás',9,'2019-06-12 15:10:11'),(1093,'Santo Antônio da Barra',9,'2019-06-12 15:10:11'),(1094,'Santo Antônio de Goiás',9,'2019-06-12 15:10:11'),(1095,'Santo Antônio do Descoberto',9,'2019-06-12 15:10:11'),(1096,'São Domingos',9,'2019-06-12 15:10:11'),(1097,'São Francisco de Goiás',9,'2019-06-12 15:10:11'),(1098,'São João d`Aliança',9,'2019-06-12 15:10:11'),(1099,'São João da Paraúna',9,'2019-06-12 15:10:11'),(1100,'São Luís de Montes Belos',9,'2019-06-12 15:10:11'),(1101,'São Luíz do Norte',9,'2019-06-12 15:10:11'),(1102,'São Miguel do Araguaia',9,'2019-06-12 15:10:11'),(1103,'São Miguel do Passa Quatro',9,'2019-06-12 15:10:11'),(1104,'São Patrício',9,'2019-06-12 15:10:11'),(1105,'São Simão',9,'2019-06-12 15:10:11'),(1106,'Senador Canedo',9,'2019-06-12 15:10:11'),(1107,'Serranópolis',9,'2019-06-12 15:10:11'),(1108,'Silvânia',9,'2019-06-12 15:10:11'),(1109,'Simolândia',9,'2019-06-12 15:10:11'),(1110,'Sítio d`Abadia',9,'2019-06-12 15:10:11'),(1111,'Taquaral de Goiás',9,'2019-06-12 15:10:11'),(1112,'Teresina de Goiás',9,'2019-06-12 15:10:11'),(1113,'Terezópolis de Goiás',9,'2019-06-12 15:10:11'),(1114,'Três Ranchos',9,'2019-06-12 15:10:11'),(1115,'Trindade',9,'2019-06-12 15:10:11'),(1116,'Trombas',9,'2019-06-12 15:10:11'),(1117,'Turvânia',9,'2019-06-12 15:10:11'),(1118,'Turvelândia',9,'2019-06-12 15:10:11'),(1119,'Uirapuru',9,'2019-06-12 15:10:11'),(1120,'Uruaçu',9,'2019-06-12 15:10:11'),(1121,'Uruana',9,'2019-06-12 15:10:11'),(1122,'Urutaí',9,'2019-06-12 15:10:11'),(1123,'Valparaíso de Goiás',9,'2019-06-12 15:10:11'),(1124,'Varjão',9,'2019-06-12 15:10:11'),(1125,'Vianópolis',9,'2019-06-12 15:10:11'),(1126,'Vicentinópolis',9,'2019-06-12 15:10:11'),(1127,'Vila Boa',9,'2019-06-12 15:10:11'),(1128,'Vila Propício',9,'2019-06-12 15:10:11'),(1129,'Açailândia',10,'2019-06-12 15:10:11'),(1130,'Afonso Cunha',10,'2019-06-12 15:10:11'),(1131,'Água Doce do Maranhão',10,'2019-06-12 15:10:11'),(1132,'Alcântara',10,'2019-06-12 15:10:11'),(1133,'Aldeias Altas',10,'2019-06-12 15:10:11'),(1134,'Altamira do Maranhão',10,'2019-06-12 15:10:11'),(1135,'Alto Alegre do Maranhão',10,'2019-06-12 15:10:11'),(1136,'Alto Alegre do Pindaré',10,'2019-06-12 15:10:11'),(1137,'Alto Parnaíba',10,'2019-06-12 15:10:11'),(1138,'Amapá do Maranhão',10,'2019-06-12 15:10:11'),(1139,'Amarante do Maranhão',10,'2019-06-12 15:10:11'),(1140,'Anajatuba',10,'2019-06-12 15:10:11'),(1141,'Anapurus',10,'2019-06-12 15:10:11'),(1142,'Apicum-Açu',10,'2019-06-12 15:10:11'),(1143,'Araguanã',10,'2019-06-12 15:10:11'),(1144,'Araioses',10,'2019-06-12 15:10:11'),(1145,'Arame',10,'2019-06-12 15:10:11'),(1146,'Arari',10,'2019-06-12 15:10:11'),(1147,'Axixá',10,'2019-06-12 15:10:11'),(1148,'Bacabal',10,'2019-06-12 15:10:11'),(1149,'Bacabeira',10,'2019-06-12 15:10:11'),(1150,'Bacuri',10,'2019-06-12 15:10:11'),(1151,'Bacurituba',10,'2019-06-12 15:10:11'),(1152,'Balsas',10,'2019-06-12 15:10:11'),(1153,'Barão de Grajaú',10,'2019-06-12 15:10:11'),(1154,'Barra do Corda',10,'2019-06-12 15:10:11'),(1155,'Barreirinhas',10,'2019-06-12 15:10:11'),(1156,'Bela Vista do Maranhão',10,'2019-06-12 15:10:11'),(1157,'Belágua',10,'2019-06-12 15:10:11'),(1158,'Benedito Leite',10,'2019-06-12 15:10:11'),(1159,'Bequimão',10,'2019-06-12 15:10:11'),(1160,'Bernardo do Mearim',10,'2019-06-12 15:10:11'),(1161,'Boa Vista do Gurupi',10,'2019-06-12 15:10:11'),(1162,'Bom Jardim',10,'2019-06-12 15:10:11'),(1163,'Bom Jesus das Selvas',10,'2019-06-12 15:10:11'),(1164,'Bom Lugar',10,'2019-06-12 15:10:11'),(1165,'Brejo',10,'2019-06-12 15:10:11'),(1166,'Brejo de Areia',10,'2019-06-12 15:10:11'),(1167,'Buriti',10,'2019-06-12 15:10:11'),(1168,'Buriti Bravo',10,'2019-06-12 15:10:11'),(1169,'Buriticupu',10,'2019-06-12 15:10:11'),(1170,'Buritirana',10,'2019-06-12 15:10:11'),(1171,'Cachoeira Grande',10,'2019-06-12 15:10:11'),(1172,'Cajapió',10,'2019-06-12 15:10:11'),(1173,'Cajari',10,'2019-06-12 15:10:11'),(1174,'Campestre do Maranhão',10,'2019-06-12 15:10:11'),(1175,'Cândido Mendes',10,'2019-06-12 15:10:11'),(1176,'Cantanhede',10,'2019-06-12 15:10:11'),(1177,'Capinzal do Norte',10,'2019-06-12 15:10:11'),(1178,'Carolina',10,'2019-06-12 15:10:11'),(1179,'Carutapera',10,'2019-06-12 15:10:11'),(1180,'Caxias',10,'2019-06-12 15:10:11'),(1181,'Cedral',10,'2019-06-12 15:10:11'),(1182,'Central do Maranhão',10,'2019-06-12 15:10:11'),(1183,'Centro do Guilherme',10,'2019-06-12 15:10:11'),(1184,'Centro Novo do Maranhão',10,'2019-06-12 15:10:11'),(1185,'Chapadinha',10,'2019-06-12 15:10:11'),(1186,'Cidelândia',10,'2019-06-12 15:10:11'),(1187,'Codó',10,'2019-06-12 15:10:11'),(1188,'Coelho Neto',10,'2019-06-12 15:10:11'),(1189,'Colinas',10,'2019-06-12 15:10:11'),(1190,'Conceição do Lago-Açu',10,'2019-06-12 15:10:11'),(1191,'Coroatá',10,'2019-06-12 15:10:11'),(1192,'Cururupu',10,'2019-06-12 15:10:11'),(1193,'Davinópolis',10,'2019-06-12 15:10:11'),(1194,'Dom Pedro',10,'2019-06-12 15:10:11'),(1195,'Duque Bacelar',10,'2019-06-12 15:10:11'),(1196,'Esperantinópolis',10,'2019-06-12 15:10:11'),(1197,'Estreito',10,'2019-06-12 15:10:11'),(1198,'Feira Nova do Maranhão',10,'2019-06-12 15:10:11'),(1199,'Fernando Falcão',10,'2019-06-12 15:10:11'),(1200,'Formosa da Serra Negra',10,'2019-06-12 15:10:11'),(1201,'Fortaleza dos Nogueiras',10,'2019-06-12 15:10:11'),(1202,'Fortuna',10,'2019-06-12 15:10:11'),(1203,'Godofredo Viana',10,'2019-06-12 15:10:11'),(1204,'Gonçalves Dias',10,'2019-06-12 15:10:11'),(1205,'Governador Archer',10,'2019-06-12 15:10:11'),(1206,'Governador Edison Lobão',10,'2019-06-12 15:10:11'),(1207,'Governador Eugênio Barros',10,'2019-06-12 15:10:11'),(1208,'Governador Luiz Rocha',10,'2019-06-12 15:10:11'),(1209,'Governador Newton Bello',10,'2019-06-12 15:10:11'),(1210,'Governador Nunes Freire',10,'2019-06-12 15:10:11'),(1211,'Graça Aranha',10,'2019-06-12 15:10:11'),(1212,'Grajaú',10,'2019-06-12 15:10:11'),(1213,'Guimarães',10,'2019-06-12 15:10:11'),(1214,'Humberto de Campos',10,'2019-06-12 15:10:11'),(1215,'Icatu',10,'2019-06-12 15:10:11'),(1216,'Igarapé do Meio',10,'2019-06-12 15:10:11'),(1217,'Igarapé Grande',10,'2019-06-12 15:10:11'),(1218,'Imperatriz',10,'2019-06-12 15:10:11'),(1219,'Itaipava do Grajaú',10,'2019-06-12 15:10:11'),(1220,'Itapecuru Mirim',10,'2019-06-12 15:10:11'),(1221,'Itinga do Maranhão',10,'2019-06-12 15:10:11'),(1222,'Jatobá',10,'2019-06-12 15:10:11'),(1223,'Jenipapo dos Vieiras',10,'2019-06-12 15:10:11'),(1224,'João Lisboa',10,'2019-06-12 15:10:11'),(1225,'Joselândia',10,'2019-06-12 15:10:11'),(1226,'Junco do Maranhão',10,'2019-06-12 15:10:11'),(1227,'Lago da Pedra',10,'2019-06-12 15:10:11'),(1228,'Lago do Junco',10,'2019-06-12 15:10:11'),(1229,'Lago dos Rodrigues',10,'2019-06-12 15:10:11'),(1230,'Lago Verde',10,'2019-06-12 15:10:11'),(1231,'Lagoa do Mato',10,'2019-06-12 15:10:11'),(1232,'Lagoa Grande do Maranhão',10,'2019-06-12 15:10:11'),(1233,'Lajeado Novo',10,'2019-06-12 15:10:11'),(1234,'Lima Campos',10,'2019-06-12 15:10:11'),(1235,'Loreto',10,'2019-06-12 15:10:11'),(1236,'Luís Domingues',10,'2019-06-12 15:10:11'),(1237,'Magalhães de Almeida',10,'2019-06-12 15:10:11'),(1238,'Maracaçumé',10,'2019-06-12 15:10:11'),(1239,'Marajá do Sena',10,'2019-06-12 15:10:11'),(1240,'Maranhãozinho',10,'2019-06-12 15:10:11'),(1241,'Mata Roma',10,'2019-06-12 15:10:11'),(1242,'Matinha',10,'2019-06-12 15:10:11'),(1243,'Matões',10,'2019-06-12 15:10:11'),(1244,'Matões do Norte',10,'2019-06-12 15:10:11'),(1245,'Milagres do Maranhão',10,'2019-06-12 15:10:11'),(1246,'Mirador',10,'2019-06-12 15:10:11'),(1247,'Miranda do Norte',10,'2019-06-12 15:10:11'),(1248,'Mirinzal',10,'2019-06-12 15:10:11'),(1249,'Monção',10,'2019-06-12 15:10:11'),(1250,'Montes Altos',10,'2019-06-12 15:10:11'),(1251,'Morros',10,'2019-06-12 15:10:11'),(1252,'Nina Rodrigues',10,'2019-06-12 15:10:11'),(1253,'Nova Colinas',10,'2019-06-12 15:10:11'),(1254,'Nova Iorque',10,'2019-06-12 15:10:11'),(1255,'Nova Olinda do Maranhão',10,'2019-06-12 15:10:11'),(1256,'Olho d`Água das Cunhãs',10,'2019-06-12 15:10:11'),(1257,'Olinda Nova do Maranhão',10,'2019-06-12 15:10:11'),(1258,'Paço do Lumiar',10,'2019-06-12 15:10:11'),(1259,'Palmeirândia',10,'2019-06-12 15:10:11'),(1260,'Paraibano',10,'2019-06-12 15:10:11'),(1261,'Parnarama',10,'2019-06-12 15:10:11'),(1262,'Passagem Franca',10,'2019-06-12 15:10:11'),(1263,'Pastos Bons',10,'2019-06-12 15:10:11'),(1264,'Paulino Neves',10,'2019-06-12 15:10:11'),(1265,'Paulo Ramos',10,'2019-06-12 15:10:11'),(1266,'Pedreiras',10,'2019-06-12 15:10:11'),(1267,'Pedro do Rosário',10,'2019-06-12 15:10:11'),(1268,'Penalva',10,'2019-06-12 15:10:11'),(1269,'Peri Mirim',10,'2019-06-12 15:10:11'),(1270,'Peritoró',10,'2019-06-12 15:10:11'),(1271,'Pindaré-Mirim',10,'2019-06-12 15:10:11'),(1272,'Pinheiro',10,'2019-06-12 15:10:11'),(1273,'Pio XII',10,'2019-06-12 15:10:11'),(1274,'Pirapemas',10,'2019-06-12 15:10:11'),(1275,'Poção de Pedras',10,'2019-06-12 15:10:11'),(1276,'Porto Franco',10,'2019-06-12 15:10:11'),(1277,'Porto Rico do Maranhão',10,'2019-06-12 15:10:11'),(1278,'Presidente Dutra',10,'2019-06-12 15:10:11'),(1279,'Presidente Juscelino',10,'2019-06-12 15:10:11'),(1280,'Presidente Médici',10,'2019-06-12 15:10:11'),(1281,'Presidente Sarney',10,'2019-06-12 15:10:11'),(1282,'Presidente Vargas',10,'2019-06-12 15:10:11'),(1283,'Primeira Cruz',10,'2019-06-12 15:10:11'),(1284,'Raposa',10,'2019-06-12 15:10:11'),(1285,'Riachão',10,'2019-06-12 15:10:11'),(1286,'Ribamar Fiquene',10,'2019-06-12 15:10:11'),(1287,'Rosário',10,'2019-06-12 15:10:11'),(1288,'Sambaíba',10,'2019-06-12 15:10:11'),(1289,'Santa Filomena do Maranhão',10,'2019-06-12 15:10:11'),(1290,'Santa Helena',10,'2019-06-12 15:10:11'),(1291,'Santa Inês',10,'2019-06-12 15:10:11'),(1292,'Santa Luzia',10,'2019-06-12 15:10:11'),(1293,'Santa Luzia do Paruá',10,'2019-06-12 15:10:11'),(1294,'Santa Quitéria do Maranhão',10,'2019-06-12 15:10:11'),(1295,'Santa Rita',10,'2019-06-12 15:10:11'),(1296,'Santana do Maranhão',10,'2019-06-12 15:10:11'),(1297,'Santo Amaro do Maranhão',10,'2019-06-12 15:10:11'),(1298,'Santo Antônio dos Lopes',10,'2019-06-12 15:10:11'),(1299,'São Benedito do Rio Preto',10,'2019-06-12 15:10:11'),(1300,'São Bento',10,'2019-06-12 15:10:11'),(1301,'São Bernardo',10,'2019-06-12 15:10:11'),(1302,'São Domingos do Azeitão',10,'2019-06-12 15:10:11'),(1303,'São Domingos do Maranhão',10,'2019-06-12 15:10:11'),(1304,'São Félix de Balsas',10,'2019-06-12 15:10:11'),(1305,'São Francisco do Brejão',10,'2019-06-12 15:10:11'),(1306,'São Francisco do Maranhão',10,'2019-06-12 15:10:11'),(1307,'São João Batista',10,'2019-06-12 15:10:11'),(1308,'São João do Carú',10,'2019-06-12 15:10:11'),(1309,'São João do Paraíso',10,'2019-06-12 15:10:11'),(1310,'São João do Soter',10,'2019-06-12 15:10:11'),(1311,'São João dos Patos',10,'2019-06-12 15:10:11'),(1312,'São José de Ribamar',10,'2019-06-12 15:10:11'),(1313,'São José dos Basílios',10,'2019-06-12 15:10:11'),(1314,'São Luís',10,'2019-06-12 15:10:11'),(1315,'São Luís Gonzaga do Maranhão',10,'2019-06-12 15:10:11'),(1316,'São Mateus do Maranhão',10,'2019-06-12 15:10:11'),(1317,'São Pedro da Água Branca',10,'2019-06-12 15:10:11'),(1318,'São Pedro dos Crentes',10,'2019-06-12 15:10:11'),(1319,'São Raimundo das Mangabeiras',10,'2019-06-12 15:10:11'),(1320,'São Raimundo do Doca Bezerra',10,'2019-06-12 15:10:11'),(1321,'São Roberto',10,'2019-06-12 15:10:11'),(1322,'São Vicente Ferrer',10,'2019-06-12 15:10:11'),(1323,'Satubinha',10,'2019-06-12 15:10:11'),(1324,'Senador Alexandre Costa',10,'2019-06-12 15:10:11'),(1325,'Senador La Rocque',10,'2019-06-12 15:10:11'),(1326,'Serrano do Maranhão',10,'2019-06-12 15:10:11'),(1327,'Sítio Novo',10,'2019-06-12 15:10:11'),(1328,'Sucupira do Norte',10,'2019-06-12 15:10:11'),(1329,'Sucupira do Riachão',10,'2019-06-12 15:10:11'),(1330,'Tasso Fragoso',10,'2019-06-12 15:10:11'),(1331,'Timbiras',10,'2019-06-12 15:10:11'),(1332,'Timon',10,'2019-06-12 15:10:11'),(1333,'Trizidela do Vale',10,'2019-06-12 15:10:11'),(1334,'Tufilândia',10,'2019-06-12 15:10:11'),(1335,'Tuntum',10,'2019-06-12 15:10:11'),(1336,'Turiaçu',10,'2019-06-12 15:10:11'),(1337,'Turilândia',10,'2019-06-12 15:10:11'),(1338,'Tutóia',10,'2019-06-12 15:10:11'),(1339,'Urbano Santos',10,'2019-06-12 15:10:11'),(1340,'Vargem Grande',10,'2019-06-12 15:10:11'),(1341,'Viana',10,'2019-06-12 15:10:11'),(1342,'Vila Nova dos Martírios',10,'2019-06-12 15:10:11'),(1343,'Vitória do Mearim',10,'2019-06-12 15:10:11'),(1344,'Vitorino Freire',10,'2019-06-12 15:10:11'),(1345,'Zé Doca',10,'2019-06-12 15:10:11'),(1346,'Acorizal',13,'2019-06-12 15:10:11'),(1347,'Água Boa',13,'2019-06-12 15:10:11'),(1348,'Alta Floresta',13,'2019-06-12 15:10:11'),(1349,'Alto Araguaia',13,'2019-06-12 15:10:11'),(1350,'Alto Boa Vista',13,'2019-06-12 15:10:11'),(1351,'Alto Garças',13,'2019-06-12 15:10:11'),(1352,'Alto Paraguai',13,'2019-06-12 15:10:11'),(1353,'Alto Taquari',13,'2019-06-12 15:10:11'),(1354,'Apiacás',13,'2019-06-12 15:10:11'),(1355,'Araguaiana',13,'2019-06-12 15:10:11'),(1356,'Araguainha',13,'2019-06-12 15:10:11'),(1357,'Araputanga',13,'2019-06-12 15:10:11'),(1358,'Arenápolis',13,'2019-06-12 15:10:11'),(1359,'Aripuanã',13,'2019-06-12 15:10:11'),(1360,'Barão de Melgaço',13,'2019-06-12 15:10:11'),(1361,'Barra do Bugres',13,'2019-06-12 15:10:11'),(1362,'Barra do Garças',13,'2019-06-12 15:10:11'),(1363,'Bom Jesus do Araguaia',13,'2019-06-12 15:10:11'),(1364,'Brasnorte',13,'2019-06-12 15:10:11'),(1365,'Cáceres',13,'2019-06-12 15:10:11'),(1366,'Campinápolis',13,'2019-06-12 15:10:11'),(1367,'Campo Novo do Parecis',13,'2019-06-12 15:10:11'),(1368,'Campo Verde',13,'2019-06-12 15:10:11'),(1369,'Campos de Júlio',13,'2019-06-12 15:10:11'),(1370,'Canabrava do Norte',13,'2019-06-12 15:10:11'),(1371,'Canarana',13,'2019-06-12 15:10:11'),(1372,'Carlinda',13,'2019-06-12 15:10:11'),(1373,'Castanheira',13,'2019-06-12 15:10:11'),(1374,'Chapada dos Guimarães',13,'2019-06-12 15:10:11'),(1375,'Cláudia',13,'2019-06-12 15:10:11'),(1376,'Cocalinho',13,'2019-06-12 15:10:11'),(1377,'Colíder',13,'2019-06-12 15:10:11'),(1378,'Colniza',13,'2019-06-12 15:10:11'),(1379,'Comodoro',13,'2019-06-12 15:10:11'),(1380,'Confresa',13,'2019-06-12 15:10:11'),(1381,'Conquista d`Oeste',13,'2019-06-12 15:10:11'),(1382,'Cotriguaçu',13,'2019-06-12 15:10:11'),(1383,'Cuiabá',13,'2019-06-12 15:10:11'),(1384,'Curvelândia',13,'2019-06-12 15:10:11'),(1385,'Curvelândia',13,'2019-06-12 15:10:11'),(1386,'Denise',13,'2019-06-12 15:10:11'),(1387,'Diamantino',13,'2019-06-12 15:10:11'),(1388,'Dom Aquino',13,'2019-06-12 15:10:11'),(1389,'Feliz Natal',13,'2019-06-12 15:10:11'),(1390,'Figueirópolis d`Oeste',13,'2019-06-12 15:10:11'),(1391,'Gaúcha do Norte',13,'2019-06-12 15:10:11'),(1392,'General Carneiro',13,'2019-06-12 15:10:11'),(1393,'Glória d`Oeste',13,'2019-06-12 15:10:11'),(1394,'Guarantã do Norte',13,'2019-06-12 15:10:11'),(1395,'Guiratinga',13,'2019-06-12 15:10:11'),(1396,'Indiavaí',13,'2019-06-12 15:10:11'),(1397,'Ipiranga do Norte',13,'2019-06-12 15:10:11'),(1398,'Itanhangá',13,'2019-06-12 15:10:11'),(1399,'Itaúba',13,'2019-06-12 15:10:11'),(1400,'Itiquira',13,'2019-06-12 15:10:11'),(1401,'Jaciara',13,'2019-06-12 15:10:11'),(1402,'Jangada',13,'2019-06-12 15:10:11'),(1403,'Jauru',13,'2019-06-12 15:10:11'),(1404,'Juara',13,'2019-06-12 15:10:11'),(1405,'Juína',13,'2019-06-12 15:10:11'),(1406,'Juruena',13,'2019-06-12 15:10:11'),(1407,'Juscimeira',13,'2019-06-12 15:10:11'),(1408,'Lambari d`Oeste',13,'2019-06-12 15:10:11'),(1409,'Lucas do Rio Verde',13,'2019-06-12 15:10:11'),(1410,'Luciára',13,'2019-06-12 15:10:11'),(1411,'Marcelândia',13,'2019-06-12 15:10:11'),(1412,'Matupá',13,'2019-06-12 15:10:11'),(1413,'Mirassol d`Oeste',13,'2019-06-12 15:10:11'),(1414,'Nobres',13,'2019-06-12 15:10:11'),(1415,'Nortelândia',13,'2019-06-12 15:10:11'),(1416,'Nossa Senhora do Livramento',13,'2019-06-12 15:10:11'),(1417,'Nova Bandeirantes',13,'2019-06-12 15:10:11'),(1418,'Nova Brasilândia',13,'2019-06-12 15:10:11'),(1419,'Nova Canaã do Norte',13,'2019-06-12 15:10:11'),(1420,'Nova Guarita',13,'2019-06-12 15:10:11'),(1421,'Nova Lacerda',13,'2019-06-12 15:10:11'),(1422,'Nova Marilândia',13,'2019-06-12 15:10:11'),(1423,'Nova Maringá',13,'2019-06-12 15:10:11'),(1424,'Nova Monte verde',13,'2019-06-12 15:10:11'),(1425,'Nova Mutum',13,'2019-06-12 15:10:11'),(1426,'Nova Olímpia',13,'2019-06-12 15:10:11'),(1427,'Nova Santa Helena',13,'2019-06-12 15:10:11'),(1428,'Nova Ubiratã',13,'2019-06-12 15:10:11'),(1429,'Nova Xavantina',13,'2019-06-12 15:10:11'),(1430,'Novo Horizonte do Norte',13,'2019-06-12 15:10:11'),(1431,'Novo Mundo',13,'2019-06-12 15:10:11'),(1432,'Novo Santo Antônio',13,'2019-06-12 15:10:11'),(1433,'Novo São Joaquim',13,'2019-06-12 15:10:11'),(1434,'Paranaíta',13,'2019-06-12 15:10:11'),(1435,'Paranatinga',13,'2019-06-12 15:10:11'),(1436,'Pedra Preta',13,'2019-06-12 15:10:11'),(1437,'Peixoto de Azevedo',13,'2019-06-12 15:10:11'),(1438,'Planalto da Serra',13,'2019-06-12 15:10:11'),(1439,'Poconé',13,'2019-06-12 15:10:11'),(1440,'Pontal do Araguaia',13,'2019-06-12 15:10:11'),(1441,'Ponte Branca',13,'2019-06-12 15:10:11'),(1442,'Pontes e Lacerda',13,'2019-06-12 15:10:11'),(1443,'Porto Alegre do Norte',13,'2019-06-12 15:10:11'),(1444,'Porto dos Gaúchos',13,'2019-06-12 15:10:11'),(1445,'Porto Esperidião',13,'2019-06-12 15:10:11'),(1446,'Porto Estrela',13,'2019-06-12 15:10:11'),(1447,'Poxoréo',13,'2019-06-12 15:10:11'),(1448,'Primavera do Leste',13,'2019-06-12 15:10:11'),(1449,'Querência',13,'2019-06-12 15:10:11'),(1450,'Reserva do Cabaçal',13,'2019-06-12 15:10:11'),(1451,'Ribeirão Cascalheira',13,'2019-06-12 15:10:11'),(1452,'Ribeirãozinho',13,'2019-06-12 15:10:11'),(1453,'Rio Branco',13,'2019-06-12 15:10:11'),(1454,'Rondolândia',13,'2019-06-12 15:10:11'),(1455,'Rondonópolis',13,'2019-06-12 15:10:11'),(1456,'Rosário Oeste',13,'2019-06-12 15:10:11'),(1457,'Salto do Céu',13,'2019-06-12 15:10:11'),(1458,'Santa Carmem',13,'2019-06-12 15:10:11'),(1459,'Santa Cruz do Xingu',13,'2019-06-12 15:10:11'),(1460,'Santa Rita do Trivelato',13,'2019-06-12 15:10:11'),(1461,'Santa Terezinha',13,'2019-06-12 15:10:11'),(1462,'Santo Afonso',13,'2019-06-12 15:10:11'),(1463,'Santo Antônio do Leste',13,'2019-06-12 15:10:11'),(1464,'Santo Antônio do Leverger',13,'2019-06-12 15:10:11'),(1465,'São Félix do Araguaia',13,'2019-06-12 15:10:11'),(1466,'São José do Povo',13,'2019-06-12 15:10:11'),(1467,'São José do Rio Claro',13,'2019-06-12 15:10:11'),(1468,'São José do Xingu',13,'2019-06-12 15:10:11'),(1469,'São José dos Quatro Marcos',13,'2019-06-12 15:10:11'),(1470,'São Pedro da Cipa',13,'2019-06-12 15:10:11'),(1471,'Sapezal',13,'2019-06-12 15:10:11'),(1472,'Serra Nova Dourada',13,'2019-06-12 15:10:11'),(1473,'Sinop',13,'2019-06-12 15:10:11'),(1474,'Sorriso',13,'2019-06-12 15:10:11'),(1475,'Tabaporã',13,'2019-06-12 15:10:11'),(1476,'Tangará da Serra',13,'2019-06-12 15:10:11'),(1477,'Tapurah',13,'2019-06-12 15:10:11'),(1478,'Terra Nova do Norte',13,'2019-06-12 15:10:11'),(1479,'Tesouro',13,'2019-06-12 15:10:11'),(1480,'Torixoréu',13,'2019-06-12 15:10:11'),(1481,'União do Sul',13,'2019-06-12 15:10:11'),(1482,'Vale de São Domingos',13,'2019-06-12 15:10:11'),(1483,'Várzea Grande',13,'2019-06-12 15:10:11'),(1484,'Vera',13,'2019-06-12 15:10:11'),(1485,'Vila Bela da Santíssima Trindade',13,'2019-06-12 15:10:11'),(1486,'Vila Rica',13,'2019-06-12 15:10:11'),(1487,'Água Clara',12,'2019-06-12 15:10:11'),(1488,'Alcinópolis',12,'2019-06-12 15:10:11'),(1489,'Amambaí',12,'2019-06-12 15:10:11'),(1490,'Anastácio',12,'2019-06-12 15:10:11'),(1491,'Anaurilândia',12,'2019-06-12 15:10:11'),(1492,'Angélica',12,'2019-06-12 15:10:11'),(1493,'Antônio João',12,'2019-06-12 15:10:11'),(1494,'Aparecida do Taboado',12,'2019-06-12 15:10:11'),(1495,'Aquidauana',12,'2019-06-12 15:10:11'),(1496,'Aral Moreira',12,'2019-06-12 15:10:11'),(1497,'Bandeirantes',12,'2019-06-12 15:10:11'),(1498,'Bataguassu',12,'2019-06-12 15:10:11'),(1499,'Bataiporã',12,'2019-06-12 15:10:11'),(1500,'Bela Vista',12,'2019-06-12 15:10:11'),(1501,'Bodoquena',12,'2019-06-12 15:10:11'),(1502,'Bonito',12,'2019-06-12 15:10:11'),(1503,'Brasilândia',12,'2019-06-12 15:10:11'),(1504,'Caarapó',12,'2019-06-12 15:10:11'),(1505,'Camapuã',12,'2019-06-12 15:10:11'),(1506,'Campo Grande',12,'2019-06-12 15:10:11'),(1507,'Caracol',12,'2019-06-12 15:10:11'),(1508,'Cassilândia',12,'2019-06-12 15:10:11'),(1509,'Chapadão do Sul',12,'2019-06-12 15:10:11'),(1510,'Corguinho',12,'2019-06-12 15:10:11'),(1511,'Coronel Sapucaia',12,'2019-06-12 15:10:11'),(1512,'Corumbá',12,'2019-06-12 15:10:11'),(1513,'Costa Rica',12,'2019-06-12 15:10:11'),(1514,'Coxim',12,'2019-06-12 15:10:11'),(1515,'Deodápolis',12,'2019-06-12 15:10:11'),(1516,'Dois Irmãos do Buriti',12,'2019-06-12 15:10:11'),(1517,'Douradina',12,'2019-06-12 15:10:11'),(1518,'Dourados',12,'2019-06-12 15:10:11'),(1519,'Eldorado',12,'2019-06-12 15:10:11'),(1520,'Fátima do Sul',12,'2019-06-12 15:10:11'),(1521,'Figueirão',12,'2019-06-12 15:10:11'),(1522,'Glória de Dourados',12,'2019-06-12 15:10:11'),(1523,'Guia Lopes da Laguna',12,'2019-06-12 15:10:11'),(1524,'Iguatemi',12,'2019-06-12 15:10:11'),(1525,'Inocência',12,'2019-06-12 15:10:11'),(1526,'Itaporã',12,'2019-06-12 15:10:11'),(1527,'Itaquiraí',12,'2019-06-12 15:10:11'),(1528,'Ivinhema',12,'2019-06-12 15:10:11'),(1529,'Japorã',12,'2019-06-12 15:10:11'),(1530,'Jaraguari',12,'2019-06-12 15:10:11'),(1531,'Jardim',12,'2019-06-12 15:10:11'),(1532,'Jateí',12,'2019-06-12 15:10:11'),(1533,'Juti',12,'2019-06-12 15:10:11'),(1534,'Ladário',12,'2019-06-12 15:10:11'),(1535,'Laguna Carapã',12,'2019-06-12 15:10:11'),(1536,'Maracaju',12,'2019-06-12 15:10:11'),(1537,'Miranda',12,'2019-06-12 15:10:11'),(1538,'Mundo Novo',12,'2019-06-12 15:10:11'),(1539,'Naviraí',12,'2019-06-12 15:10:11'),(1540,'Nioaque',12,'2019-06-12 15:10:11'),(1541,'Nova Alvorada do Sul',12,'2019-06-12 15:10:11'),(1542,'Nova Andradina',12,'2019-06-12 15:10:11'),(1543,'Novo Horizonte do Sul',12,'2019-06-12 15:10:11'),(1544,'Paranaíba',12,'2019-06-12 15:10:11'),(1545,'Paranhos',12,'2019-06-12 15:10:11'),(1546,'Pedro Gomes',12,'2019-06-12 15:10:11'),(1547,'Ponta Porã',12,'2019-06-12 15:10:11'),(1548,'Porto Murtinho',12,'2019-06-12 15:10:11'),(1549,'Ribas do Rio Pardo',12,'2019-06-12 15:10:11'),(1550,'Rio Brilhante',12,'2019-06-12 15:10:11'),(1551,'Rio Negro',12,'2019-06-12 15:10:11'),(1552,'Rio Verde de Mato Grosso',12,'2019-06-12 15:10:11'),(1553,'Rochedo',12,'2019-06-12 15:10:11'),(1554,'Santa Rita do Pardo',12,'2019-06-12 15:10:11'),(1555,'São Gabriel do Oeste',12,'2019-06-12 15:10:11'),(1556,'Selvíria',12,'2019-06-12 15:10:11'),(1557,'Sete Quedas',12,'2019-06-12 15:10:11'),(1558,'Sidrolândia',12,'2019-06-12 15:10:11'),(1559,'Sonora',12,'2019-06-12 15:10:11'),(1560,'Tacuru',12,'2019-06-12 15:10:11'),(1561,'Taquarussu',12,'2019-06-12 15:10:11'),(1562,'Terenos',12,'2019-06-12 15:10:11'),(1563,'Três Lagoas',12,'2019-06-12 15:10:11'),(1564,'Vicentina',12,'2019-06-12 15:10:11'),(1565,'Abadia dos Dourados',11,'2019-06-12 15:10:11'),(1566,'Abaeté',11,'2019-06-12 15:10:11'),(1567,'Abre Campo',11,'2019-06-12 15:10:11'),(1568,'Acaiaca',11,'2019-06-12 15:10:11'),(1569,'Açucena',11,'2019-06-12 15:10:11'),(1570,'Água Boa',11,'2019-06-12 15:10:11'),(1571,'Água Comprida',11,'2019-06-12 15:10:11'),(1572,'Aguanil',11,'2019-06-12 15:10:11'),(1573,'Águas Formosas',11,'2019-06-12 15:10:11'),(1574,'Águas Vermelhas',11,'2019-06-12 15:10:11'),(1575,'Aimorés',11,'2019-06-12 15:10:11'),(1576,'Aiuruoca',11,'2019-06-12 15:10:11'),(1577,'Alagoa',11,'2019-06-12 15:10:11'),(1578,'Albertina',11,'2019-06-12 15:10:11'),(1579,'Além Paraíba',11,'2019-06-12 15:10:11'),(1580,'Alfenas',11,'2019-06-12 15:10:11'),(1581,'Alfredo Vasconcelos',11,'2019-06-12 15:10:11'),(1582,'Almenara',11,'2019-06-12 15:10:11'),(1583,'Alpercata',11,'2019-06-12 15:10:11'),(1584,'Alpinópolis',11,'2019-06-12 15:10:11'),(1585,'Alterosa',11,'2019-06-12 15:10:11'),(1586,'Alto Caparaó',11,'2019-06-12 15:10:11'),(1587,'Alto Jequitibá',11,'2019-06-12 15:10:11'),(1588,'Alto Rio Doce',11,'2019-06-12 15:10:11'),(1589,'Alvarenga',11,'2019-06-12 15:10:11'),(1590,'Alvinópolis',11,'2019-06-12 15:10:11'),(1591,'Alvorada de Minas',11,'2019-06-12 15:10:11'),(1592,'Amparo do Serra',11,'2019-06-12 15:10:11'),(1593,'Andradas',11,'2019-06-12 15:10:11'),(1594,'Andrelândia',11,'2019-06-12 15:10:11'),(1595,'Angelândia',11,'2019-06-12 15:10:11'),(1596,'Antônio Carlos',11,'2019-06-12 15:10:11'),(1597,'Antônio Dias',11,'2019-06-12 15:10:11'),(1598,'Antônio Prado de Minas',11,'2019-06-12 15:10:11'),(1599,'Araçaí',11,'2019-06-12 15:10:11'),(1600,'Aracitaba',11,'2019-06-12 15:10:11'),(1601,'Araçuaí',11,'2019-06-12 15:10:11'),(1602,'Araguari',11,'2019-06-12 15:10:11'),(1603,'Arantina',11,'2019-06-12 15:10:11'),(1604,'Araponga',11,'2019-06-12 15:10:11'),(1605,'Araporã',11,'2019-06-12 15:10:11'),(1606,'Arapuá',11,'2019-06-12 15:10:11'),(1607,'Araújos',11,'2019-06-12 15:10:11'),(1608,'Araxá',11,'2019-06-12 15:10:11'),(1609,'Arceburgo',11,'2019-06-12 15:10:11'),(1610,'Arcos',11,'2019-06-12 15:10:11'),(1611,'Areado',11,'2019-06-12 15:10:11'),(1612,'Argirita',11,'2019-06-12 15:10:11'),(1613,'Aricanduva',11,'2019-06-12 15:10:11'),(1614,'Arinos',11,'2019-06-12 15:10:11'),(1615,'Astolfo Dutra',11,'2019-06-12 15:10:11'),(1616,'Ataléia',11,'2019-06-12 15:10:11'),(1617,'Augusto de Lima',11,'2019-06-12 15:10:11'),(1618,'Baependi',11,'2019-06-12 15:10:11'),(1619,'Baldim',11,'2019-06-12 15:10:11'),(1620,'Bambuí',11,'2019-06-12 15:10:11'),(1621,'Bandeira',11,'2019-06-12 15:10:11'),(1622,'Bandeira do Sul',11,'2019-06-12 15:10:11'),(1623,'Barão de Cocais',11,'2019-06-12 15:10:11'),(1624,'Barão de Monte Alto',11,'2019-06-12 15:10:11'),(1625,'Barbacena',11,'2019-06-12 15:10:11'),(1626,'Barra Longa',11,'2019-06-12 15:10:11'),(1627,'Barroso',11,'2019-06-12 15:10:11'),(1628,'Bela Vista de Minas',11,'2019-06-12 15:10:11'),(1629,'Belmiro Braga',11,'2019-06-12 15:10:11'),(1630,'Belo Horizonte',11,'2019-06-12 15:10:11'),(1631,'Belo Oriente',11,'2019-06-12 15:10:11'),(1632,'Belo Vale',11,'2019-06-12 15:10:11'),(1633,'Berilo',11,'2019-06-12 15:10:11'),(1634,'Berizal',11,'2019-06-12 15:10:11'),(1635,'Bertópolis',11,'2019-06-12 15:10:11'),(1636,'Betim',11,'2019-06-12 15:10:11'),(1637,'Bias Fortes',11,'2019-06-12 15:10:11'),(1638,'Bicas',11,'2019-06-12 15:10:11'),(1639,'Biquinhas',11,'2019-06-12 15:10:11'),(1640,'Boa Esperança',11,'2019-06-12 15:10:11'),(1641,'Bocaina de Minas',11,'2019-06-12 15:10:11'),(1642,'Bocaiúva',11,'2019-06-12 15:10:11'),(1643,'Bom Despacho',11,'2019-06-12 15:10:11'),(1644,'Bom Jardim de Minas',11,'2019-06-12 15:10:11'),(1645,'Bom Jesus da Penha',11,'2019-06-12 15:10:11'),(1646,'Bom Jesus do Amparo',11,'2019-06-12 15:10:11'),(1647,'Bom Jesus do Galho',11,'2019-06-12 15:10:11'),(1648,'Bom Repouso',11,'2019-06-12 15:10:11'),(1649,'Bom Sucesso',11,'2019-06-12 15:10:11'),(1650,'Bonfim',11,'2019-06-12 15:10:11'),(1651,'Bonfinópolis de Minas',11,'2019-06-12 15:10:11'),(1652,'Bonito de Minas',11,'2019-06-12 15:10:11'),(1653,'Borda da Mata',11,'2019-06-12 15:10:11'),(1654,'Botelhos',11,'2019-06-12 15:10:11'),(1655,'Botumirim',11,'2019-06-12 15:10:11'),(1656,'Brás Pires',11,'2019-06-12 15:10:11'),(1657,'Brasilândia de Minas',11,'2019-06-12 15:10:11'),(1658,'Brasília de Minas',11,'2019-06-12 15:10:11'),(1659,'Brasópolis',11,'2019-06-12 15:10:11'),(1660,'Braúnas',11,'2019-06-12 15:10:11'),(1661,'Brumadinho',11,'2019-06-12 15:10:11'),(1662,'Bueno Brandão',11,'2019-06-12 15:10:11'),(1663,'Buenópolis',11,'2019-06-12 15:10:11'),(1664,'Bugre',11,'2019-06-12 15:10:11'),(1665,'Buritis',11,'2019-06-12 15:10:11'),(1666,'Buritizeiro',11,'2019-06-12 15:10:11'),(1667,'Cabeceira Grande',11,'2019-06-12 15:10:11'),(1668,'Cabo Verde',11,'2019-06-12 15:10:11'),(1669,'Cachoeira da Prata',11,'2019-06-12 15:10:11'),(1670,'Cachoeira de Minas',11,'2019-06-12 15:10:11'),(1671,'Cachoeira de Pajeú',11,'2019-06-12 15:10:11'),(1672,'Cachoeira Dourada',11,'2019-06-12 15:10:11'),(1673,'Caetanópolis',11,'2019-06-12 15:10:11'),(1674,'Caeté',11,'2019-06-12 15:10:11'),(1675,'Caiana',11,'2019-06-12 15:10:11'),(1676,'Cajuri',11,'2019-06-12 15:10:11'),(1677,'Caldas',11,'2019-06-12 15:10:11'),(1678,'Camacho',11,'2019-06-12 15:10:11'),(1679,'Camanducaia',11,'2019-06-12 15:10:11'),(1680,'Cambuí',11,'2019-06-12 15:10:11'),(1681,'Cambuquira',11,'2019-06-12 15:10:11'),(1682,'Campanário',11,'2019-06-12 15:10:11'),(1683,'Campanha',11,'2019-06-12 15:10:11'),(1684,'Campestre',11,'2019-06-12 15:10:11'),(1685,'Campina Verde',11,'2019-06-12 15:10:11'),(1686,'Campo Azul',11,'2019-06-12 15:10:11'),(1687,'Campo Belo',11,'2019-06-12 15:10:11'),(1688,'Campo do Meio',11,'2019-06-12 15:10:11'),(1689,'Campo Florido',11,'2019-06-12 15:10:11'),(1690,'Campos Altos',11,'2019-06-12 15:10:11'),(1691,'Campos Gerais',11,'2019-06-12 15:10:11'),(1692,'Cana Verde',11,'2019-06-12 15:10:11'),(1693,'Canaã',11,'2019-06-12 15:10:11'),(1694,'Canápolis',11,'2019-06-12 15:10:11'),(1695,'Candeias',11,'2019-06-12 15:10:11'),(1696,'Cantagalo',11,'2019-06-12 15:10:11'),(1697,'Caparaó',11,'2019-06-12 15:10:11'),(1698,'Capela Nova',11,'2019-06-12 15:10:11'),(1699,'Capelinha',11,'2019-06-12 15:10:11'),(1700,'Capetinga',11,'2019-06-12 15:10:11'),(1701,'Capim Branco',11,'2019-06-12 15:10:11'),(1702,'Capinópolis',11,'2019-06-12 15:10:11'),(1703,'Capitão Andrade',11,'2019-06-12 15:10:11'),(1704,'Capitão Enéas',11,'2019-06-12 15:10:11'),(1705,'Capitólio',11,'2019-06-12 15:10:11'),(1706,'Caputira',11,'2019-06-12 15:10:11'),(1707,'Caraí',11,'2019-06-12 15:10:11'),(1708,'Caranaíba',11,'2019-06-12 15:10:11'),(1709,'Carandaí',11,'2019-06-12 15:10:11'),(1710,'Carangola',11,'2019-06-12 15:10:11'),(1711,'Caratinga',11,'2019-06-12 15:10:11'),(1712,'Carbonita',11,'2019-06-12 15:10:11'),(1713,'Careaçu',11,'2019-06-12 15:10:11'),(1714,'Carlos Chagas',11,'2019-06-12 15:10:11'),(1715,'Carmésia',11,'2019-06-12 15:10:11'),(1716,'Carmo da Cachoeira',11,'2019-06-12 15:10:11'),(1717,'Carmo da Mata',11,'2019-06-12 15:10:11'),(1718,'Carmo de Minas',11,'2019-06-12 15:10:11'),(1719,'Carmo do Cajuru',11,'2019-06-12 15:10:11'),(1720,'Carmo do Paranaíba',11,'2019-06-12 15:10:11'),(1721,'Carmo do Rio Claro',11,'2019-06-12 15:10:11'),(1722,'Carmópolis de Minas',11,'2019-06-12 15:10:11'),(1723,'Carneirinho',11,'2019-06-12 15:10:11'),(1724,'Carrancas',11,'2019-06-12 15:10:11'),(1725,'Carvalhópolis',11,'2019-06-12 15:10:11'),(1726,'Carvalhos',11,'2019-06-12 15:10:11'),(1727,'Casa Grande',11,'2019-06-12 15:10:11'),(1728,'Cascalho Rico',11,'2019-06-12 15:10:11'),(1729,'Cássia',11,'2019-06-12 15:10:11'),(1730,'Cataguases',11,'2019-06-12 15:10:11'),(1731,'Catas Altas',11,'2019-06-12 15:10:11'),(1732,'Catas Altas da Noruega',11,'2019-06-12 15:10:11'),(1733,'Catuji',11,'2019-06-12 15:10:11'),(1734,'Catuti',11,'2019-06-12 15:10:11'),(1735,'Caxambu',11,'2019-06-12 15:10:11'),(1736,'Cedro do Abaeté',11,'2019-06-12 15:10:11'),(1737,'Central de Minas',11,'2019-06-12 15:10:11'),(1738,'Centralina',11,'2019-06-12 15:10:11'),(1739,'Chácara',11,'2019-06-12 15:10:11'),(1740,'Chalé',11,'2019-06-12 15:10:11'),(1741,'Chapada do Norte',11,'2019-06-12 15:10:11'),(1742,'Chapada Gaúcha',11,'2019-06-12 15:10:11'),(1743,'Chiador',11,'2019-06-12 15:10:11'),(1744,'Cipotânea',11,'2019-06-12 15:10:11'),(1745,'Claraval',11,'2019-06-12 15:10:11'),(1746,'Claro dos Poções',11,'2019-06-12 15:10:11'),(1747,'Cláudio',11,'2019-06-12 15:10:11'),(1748,'Coimbra',11,'2019-06-12 15:10:11'),(1749,'Coluna',11,'2019-06-12 15:10:11'),(1750,'Comendador Gomes',11,'2019-06-12 15:10:11'),(1751,'Comercinho',11,'2019-06-12 15:10:11'),(1752,'Conceição da Aparecida',11,'2019-06-12 15:10:11'),(1753,'Conceição da Barra de Minas',11,'2019-06-12 15:10:11'),(1754,'Conceição das Alagoas',11,'2019-06-12 15:10:11'),(1755,'Conceição das Pedras',11,'2019-06-12 15:10:11'),(1756,'Conceição de Ipanema',11,'2019-06-12 15:10:11'),(1757,'Conceição do Mato Dentro',11,'2019-06-12 15:10:11'),(1758,'Conceição do Pará',11,'2019-06-12 15:10:11'),(1759,'Conceição do Rio Verde',11,'2019-06-12 15:10:11'),(1760,'Conceição dos Ouros',11,'2019-06-12 15:10:11'),(1761,'Cônego Marinho',11,'2019-06-12 15:10:11'),(1762,'Confins',11,'2019-06-12 15:10:11'),(1763,'Congonhal',11,'2019-06-12 15:10:11'),(1764,'Congonhas',11,'2019-06-12 15:10:11'),(1765,'Congonhas do Norte',11,'2019-06-12 15:10:11'),(1766,'Conquista',11,'2019-06-12 15:10:11'),(1767,'Conselheiro Lafaiete',11,'2019-06-12 15:10:11'),(1768,'Conselheiro Pena',11,'2019-06-12 15:10:11'),(1769,'Consolação',11,'2019-06-12 15:10:11'),(1770,'Contagem',11,'2019-06-12 15:10:11'),(1771,'Coqueiral',11,'2019-06-12 15:10:11'),(1772,'Coração de Jesus',11,'2019-06-12 15:10:11'),(1773,'Cordisburgo',11,'2019-06-12 15:10:11'),(1774,'Cordislândia',11,'2019-06-12 15:10:11'),(1775,'Corinto',11,'2019-06-12 15:10:11'),(1776,'Coroaci',11,'2019-06-12 15:10:11'),(1777,'Coromandel',11,'2019-06-12 15:10:11'),(1778,'Coronel Fabriciano',11,'2019-06-12 15:10:11'),(1779,'Coronel Murta',11,'2019-06-12 15:10:11'),(1780,'Coronel Pacheco',11,'2019-06-12 15:10:11'),(1781,'Coronel Xavier Chaves',11,'2019-06-12 15:10:11'),(1782,'Córrego Danta',11,'2019-06-12 15:10:11'),(1783,'Córrego do Bom Jesus',11,'2019-06-12 15:10:11'),(1784,'Córrego Fundo',11,'2019-06-12 15:10:11'),(1785,'Córrego Novo',11,'2019-06-12 15:10:11'),(1786,'Couto de Magalhães de Minas',11,'2019-06-12 15:10:11'),(1787,'Crisólita',11,'2019-06-12 15:10:11'),(1788,'Cristais',11,'2019-06-12 15:10:11'),(1789,'Cristália',11,'2019-06-12 15:10:11'),(1790,'Cristiano Otoni',11,'2019-06-12 15:10:11'),(1791,'Cristina',11,'2019-06-12 15:10:11'),(1792,'Crucilândia',11,'2019-06-12 15:10:11'),(1793,'Cruzeiro da Fortaleza',11,'2019-06-12 15:10:11'),(1794,'Cruzília',11,'2019-06-12 15:10:11'),(1795,'Cuparaque',11,'2019-06-12 15:10:11'),(1796,'Curral de Dentro',11,'2019-06-12 15:10:11'),(1797,'Curvelo',11,'2019-06-12 15:10:11'),(1798,'Datas',11,'2019-06-12 15:10:11'),(1799,'Delfim Moreira',11,'2019-06-12 15:10:11'),(1800,'Delfinópolis',11,'2019-06-12 15:10:11'),(1801,'Delta',11,'2019-06-12 15:10:11'),(1802,'Descoberto',11,'2019-06-12 15:10:11'),(1803,'Desterro de Entre Rios',11,'2019-06-12 15:10:11'),(1804,'Desterro do Melo',11,'2019-06-12 15:10:11'),(1805,'Diamantina',11,'2019-06-12 15:10:11'),(1806,'Diogo de Vasconcelos',11,'2019-06-12 15:10:11'),(1807,'Dionísio',11,'2019-06-12 15:10:11'),(1808,'Divinésia',11,'2019-06-12 15:10:11'),(1809,'Divino',11,'2019-06-12 15:10:11'),(1810,'Divino das Laranjeiras',11,'2019-06-12 15:10:11'),(1811,'Divinolândia de Minas',11,'2019-06-12 15:10:11'),(1812,'Divinópolis',11,'2019-06-12 15:10:11'),(1813,'Divisa Alegre',11,'2019-06-12 15:10:11'),(1814,'Divisa Nova',11,'2019-06-12 15:10:11'),(1815,'Divisópolis',11,'2019-06-12 15:10:11'),(1816,'Dom Bosco',11,'2019-06-12 15:10:11'),(1817,'Dom Cavati',11,'2019-06-12 15:10:11'),(1818,'Dom Joaquim',11,'2019-06-12 15:10:11'),(1819,'Dom Silvério',11,'2019-06-12 15:10:11'),(1820,'Dom Viçoso',11,'2019-06-12 15:10:11'),(1821,'Dona Eusébia',11,'2019-06-12 15:10:11'),(1822,'Dores de Campos',11,'2019-06-12 15:10:11'),(1823,'Dores de Guanhães',11,'2019-06-12 15:10:11'),(1824,'Dores do Indaiá',11,'2019-06-12 15:10:11'),(1825,'Dores do Turvo',11,'2019-06-12 15:10:11'),(1826,'Doresópolis',11,'2019-06-12 15:10:11'),(1827,'Douradoquara',11,'2019-06-12 15:10:11'),(1828,'Durandé',11,'2019-06-12 15:10:11'),(1829,'Elói Mendes',11,'2019-06-12 15:10:11'),(1830,'Engenheiro Caldas',11,'2019-06-12 15:10:11'),(1831,'Engenheiro Navarro',11,'2019-06-12 15:10:11'),(1832,'Entre Folhas',11,'2019-06-12 15:10:11'),(1833,'Entre Rios de Minas',11,'2019-06-12 15:10:11'),(1834,'Ervália',11,'2019-06-12 15:10:11'),(1835,'Esmeraldas',11,'2019-06-12 15:10:11'),(1836,'Espera Feliz',11,'2019-06-12 15:10:11'),(1837,'Espinosa',11,'2019-06-12 15:10:11'),(1838,'Espírito Santo do Dourado',11,'2019-06-12 15:10:11'),(1839,'Estiva',11,'2019-06-12 15:10:11'),(1840,'Estrela Dalva',11,'2019-06-12 15:10:11'),(1841,'Estrela do Indaiá',11,'2019-06-12 15:10:11'),(1842,'Estrela do Sul',11,'2019-06-12 15:10:11'),(1843,'Eugenópolis',11,'2019-06-12 15:10:11'),(1844,'Ewbank da Câmara',11,'2019-06-12 15:10:11'),(1845,'Extrema',11,'2019-06-12 15:10:11'),(1846,'Fama',11,'2019-06-12 15:10:11'),(1847,'Faria Lemos',11,'2019-06-12 15:10:11'),(1848,'Felício dos Santos',11,'2019-06-12 15:10:11'),(1849,'Felisburgo',11,'2019-06-12 15:10:11'),(1850,'Felixlândia',11,'2019-06-12 15:10:11'),(1851,'Fernandes Tourinho',11,'2019-06-12 15:10:11'),(1852,'Ferros',11,'2019-06-12 15:10:11'),(1853,'Fervedouro',11,'2019-06-12 15:10:11'),(1854,'Florestal',11,'2019-06-12 15:10:11'),(1855,'Formiga',11,'2019-06-12 15:10:11'),(1856,'Formoso',11,'2019-06-12 15:10:11'),(1857,'Fortaleza de Minas',11,'2019-06-12 15:10:11'),(1858,'Fortuna de Minas',11,'2019-06-12 15:10:11'),(1859,'Francisco Badaró',11,'2019-06-12 15:10:11'),(1860,'Francisco Dumont',11,'2019-06-12 15:10:11'),(1861,'Francisco Sá',11,'2019-06-12 15:10:11'),(1862,'Franciscópolis',11,'2019-06-12 15:10:11'),(1863,'Frei Gaspar',11,'2019-06-12 15:10:11'),(1864,'Frei Inocêncio',11,'2019-06-12 15:10:11'),(1865,'Frei Lagonegro',11,'2019-06-12 15:10:11'),(1866,'Fronteira',11,'2019-06-12 15:10:11'),(1867,'Fronteira dos Vales',11,'2019-06-12 15:10:11'),(1868,'Fruta de Leite',11,'2019-06-12 15:10:11'),(1869,'Frutal',11,'2019-06-12 15:10:11'),(1870,'Funilândia',11,'2019-06-12 15:10:11'),(1871,'Galiléia',11,'2019-06-12 15:10:11'),(1872,'Gameleiras',11,'2019-06-12 15:10:11'),(1873,'Glaucilândia',11,'2019-06-12 15:10:11'),(1874,'Goiabeira',11,'2019-06-12 15:10:11'),(1875,'Goianá',11,'2019-06-12 15:10:11'),(1876,'Gonçalves',11,'2019-06-12 15:10:11'),(1877,'Gonzaga',11,'2019-06-12 15:10:11'),(1878,'Gouveia',11,'2019-06-12 15:10:11'),(1879,'Governador Valadares',11,'2019-06-12 15:10:11'),(1880,'Grão Mogol',11,'2019-06-12 15:10:11'),(1881,'Grupiara',11,'2019-06-12 15:10:11'),(1882,'Guanhães',11,'2019-06-12 15:10:11'),(1883,'Guapé',11,'2019-06-12 15:10:11'),(1884,'Guaraciaba',11,'2019-06-12 15:10:11'),(1885,'Guaraciama',11,'2019-06-12 15:10:11'),(1886,'Guaranésia',11,'2019-06-12 15:10:11'),(1887,'Guarani',11,'2019-06-12 15:10:11'),(1888,'Guarará',11,'2019-06-12 15:10:11'),(1889,'Guarda-Mor',11,'2019-06-12 15:10:11'),(1890,'Guaxupé',11,'2019-06-12 15:10:11'),(1891,'Guidoval',11,'2019-06-12 15:10:11'),(1892,'Guimarânia',11,'2019-06-12 15:10:11'),(1893,'Guiricema',11,'2019-06-12 15:10:11'),(1894,'Gurinhatã',11,'2019-06-12 15:10:11'),(1895,'Heliodora',11,'2019-06-12 15:10:11'),(1896,'Iapu',11,'2019-06-12 15:10:11'),(1897,'Ibertioga',11,'2019-06-12 15:10:11'),(1898,'Ibiá',11,'2019-06-12 15:10:11'),(1899,'Ibiaí',11,'2019-06-12 15:10:11'),(1900,'Ibiracatu',11,'2019-06-12 15:10:11'),(1901,'Ibiraci',11,'2019-06-12 15:10:11'),(1902,'Ibirité',11,'2019-06-12 15:10:11'),(1903,'Ibitiúra de Minas',11,'2019-06-12 15:10:11'),(1904,'Ibituruna',11,'2019-06-12 15:10:11'),(1905,'Icaraí de Minas',11,'2019-06-12 15:10:11'),(1906,'Igarapé',11,'2019-06-12 15:10:11'),(1907,'Igaratinga',11,'2019-06-12 15:10:11'),(1908,'Iguatama',11,'2019-06-12 15:10:11'),(1909,'Ijaci',11,'2019-06-12 15:10:11'),(1910,'Ilicínea',11,'2019-06-12 15:10:11'),(1911,'Imbé de Minas',11,'2019-06-12 15:10:11'),(1912,'Inconfidentes',11,'2019-06-12 15:10:11'),(1913,'Indaiabira',11,'2019-06-12 15:10:11'),(1914,'Indianópolis',11,'2019-06-12 15:10:11'),(1915,'Ingaí',11,'2019-06-12 15:10:11'),(1916,'Inhapim',11,'2019-06-12 15:10:11'),(1917,'Inhaúma',11,'2019-06-12 15:10:11'),(1918,'Inimutaba',11,'2019-06-12 15:10:11'),(1919,'Ipaba',11,'2019-06-12 15:10:11'),(1920,'Ipanema',11,'2019-06-12 15:10:11'),(1921,'Ipatinga',11,'2019-06-12 15:10:11'),(1922,'Ipiaçu',11,'2019-06-12 15:10:11'),(1923,'Ipuiúna',11,'2019-06-12 15:10:11'),(1924,'Iraí de Minas',11,'2019-06-12 15:10:11'),(1925,'Itabira',11,'2019-06-12 15:10:11'),(1926,'Itabirinha de Mantena',11,'2019-06-12 15:10:11'),(1927,'Itabirito',11,'2019-06-12 15:10:11'),(1928,'Itacambira',11,'2019-06-12 15:10:11'),(1929,'Itacarambi',11,'2019-06-12 15:10:11'),(1930,'Itaguara',11,'2019-06-12 15:10:11'),(1931,'Itaipé',11,'2019-06-12 15:10:11'),(1932,'Itajubá',11,'2019-06-12 15:10:11'),(1933,'Itamarandiba',11,'2019-06-12 15:10:11'),(1934,'Itamarati de Minas',11,'2019-06-12 15:10:11'),(1935,'Itambacuri',11,'2019-06-12 15:10:11'),(1936,'Itambé do Mato Dentro',11,'2019-06-12 15:10:11'),(1937,'Itamogi',11,'2019-06-12 15:10:11'),(1938,'Itamonte',11,'2019-06-12 15:10:11'),(1939,'Itanhandu',11,'2019-06-12 15:10:11'),(1940,'Itanhomi',11,'2019-06-12 15:10:11'),(1941,'Itaobim',11,'2019-06-12 15:10:11'),(1942,'Itapagipe',11,'2019-06-12 15:10:11'),(1943,'Itapecerica',11,'2019-06-12 15:10:11'),(1944,'Itapeva',11,'2019-06-12 15:10:11'),(1945,'Itatiaiuçu',11,'2019-06-12 15:10:11'),(1946,'Itaú de Minas',11,'2019-06-12 15:10:11'),(1947,'Itaúna',11,'2019-06-12 15:10:11'),(1948,'Itaverava',11,'2019-06-12 15:10:11'),(1949,'Itinga',11,'2019-06-12 15:10:11'),(1950,'Itueta',11,'2019-06-12 15:10:11'),(1951,'Ituiutaba',11,'2019-06-12 15:10:11'),(1952,'Itumirim',11,'2019-06-12 15:10:11'),(1953,'Iturama',11,'2019-06-12 15:10:11'),(1954,'Itutinga',11,'2019-06-12 15:10:11'),(1955,'Jaboticatubas',11,'2019-06-12 15:10:11'),(1956,'Jacinto',11,'2019-06-12 15:10:11'),(1957,'Jacuí',11,'2019-06-12 15:10:11'),(1958,'Jacutinga',11,'2019-06-12 15:10:11'),(1959,'Jaguaraçu',11,'2019-06-12 15:10:11'),(1960,'Jaíba',11,'2019-06-12 15:10:11'),(1961,'Jampruca',11,'2019-06-12 15:10:11'),(1962,'Janaúba',11,'2019-06-12 15:10:11'),(1963,'Januária',11,'2019-06-12 15:10:11'),(1964,'Japaraíba',11,'2019-06-12 15:10:11'),(1965,'Japonvar',11,'2019-06-12 15:10:11'),(1966,'Jeceaba',11,'2019-06-12 15:10:11'),(1967,'Jenipapo de Minas',11,'2019-06-12 15:10:11'),(1968,'Jequeri',11,'2019-06-12 15:10:11'),(1969,'Jequitaí',11,'2019-06-12 15:10:11'),(1970,'Jequitibá',11,'2019-06-12 15:10:11'),(1971,'Jequitinhonha',11,'2019-06-12 15:10:11'),(1972,'Jesuânia',11,'2019-06-12 15:10:11'),(1973,'Joaíma',11,'2019-06-12 15:10:11'),(1974,'Joanésia',11,'2019-06-12 15:10:11'),(1975,'João Monlevade',11,'2019-06-12 15:10:11'),(1976,'João Pinheiro',11,'2019-06-12 15:10:11'),(1977,'Joaquim Felício',11,'2019-06-12 15:10:11'),(1978,'Jordânia',11,'2019-06-12 15:10:11'),(1979,'José Gonçalves de Minas',11,'2019-06-12 15:10:11'),(1980,'José Raydan',11,'2019-06-12 15:10:11'),(1981,'Josenópolis',11,'2019-06-12 15:10:11'),(1982,'Juatuba',11,'2019-06-12 15:10:11'),(1983,'Juiz de Fora',11,'2019-06-12 15:10:11'),(1984,'Juramento',11,'2019-06-12 15:10:11'),(1985,'Juruaia',11,'2019-06-12 15:10:11'),(1986,'Juvenília',11,'2019-06-12 15:10:11'),(1987,'Ladainha',11,'2019-06-12 15:10:11'),(1988,'Lagamar',11,'2019-06-12 15:10:11'),(1989,'Lagoa da Prata',11,'2019-06-12 15:10:11'),(1990,'Lagoa dos Patos',11,'2019-06-12 15:10:11'),(1991,'Lagoa Dourada',11,'2019-06-12 15:10:11'),(1992,'Lagoa Formosa',11,'2019-06-12 15:10:11'),(1993,'Lagoa Grande',11,'2019-06-12 15:10:11'),(1994,'Lagoa Santa',11,'2019-06-12 15:10:11'),(1995,'Lajinha',11,'2019-06-12 15:10:11'),(1996,'Lambari',11,'2019-06-12 15:10:11'),(1997,'Lamim',11,'2019-06-12 15:10:11'),(1998,'Laranjal',11,'2019-06-12 15:10:11'),(1999,'Lassance',11,'2019-06-12 15:10:11'),(2000,'Lavras',11,'2019-06-12 15:10:11'),(2001,'Leandro Ferreira',11,'2019-06-12 15:10:11'),(2002,'Leme do Prado',11,'2019-06-12 15:10:11'),(2003,'Leopoldina',11,'2019-06-12 15:10:11'),(2004,'Liberdade',11,'2019-06-12 15:10:11'),(2005,'Lima Duarte',11,'2019-06-12 15:10:11'),(2006,'Limeira do Oeste',11,'2019-06-12 15:10:11'),(2007,'Lontra',11,'2019-06-12 15:10:11'),(2008,'Luisburgo',11,'2019-06-12 15:10:11'),(2009,'Luislândia',11,'2019-06-12 15:10:11'),(2010,'Luminárias',11,'2019-06-12 15:10:11'),(2011,'Luz',11,'2019-06-12 15:10:11'),(2012,'Machacalis',11,'2019-06-12 15:10:11'),(2013,'Machado',11,'2019-06-12 15:10:11'),(2014,'Madre de Deus de Minas',11,'2019-06-12 15:10:11'),(2015,'Malacacheta',11,'2019-06-12 15:10:11'),(2016,'Mamonas',11,'2019-06-12 15:10:11'),(2017,'Manga',11,'2019-06-12 15:10:11'),(2018,'Manhuaçu',11,'2019-06-12 15:10:11'),(2019,'Manhumirim',11,'2019-06-12 15:10:11'),(2020,'Mantena',11,'2019-06-12 15:10:11'),(2021,'Mar de Espanha',11,'2019-06-12 15:10:11'),(2022,'Maravilhas',11,'2019-06-12 15:10:11'),(2023,'Maria da Fé',11,'2019-06-12 15:10:11'),(2024,'Mariana',11,'2019-06-12 15:10:11'),(2025,'Marilac',11,'2019-06-12 15:10:11'),(2026,'Mário Campos',11,'2019-06-12 15:10:11'),(2027,'Maripá de Minas',11,'2019-06-12 15:10:11'),(2028,'Marliéria',11,'2019-06-12 15:10:11'),(2029,'Marmelópolis',11,'2019-06-12 15:10:11'),(2030,'Martinho Campos',11,'2019-06-12 15:10:11'),(2031,'Martins Soares',11,'2019-06-12 15:10:11'),(2032,'Mata Verde',11,'2019-06-12 15:10:11'),(2033,'Materlândia',11,'2019-06-12 15:10:11'),(2034,'Mateus Leme',11,'2019-06-12 15:10:11'),(2035,'Mathias Lobato',11,'2019-06-12 15:10:11'),(2036,'Matias Barbosa',11,'2019-06-12 15:10:11'),(2037,'Matias Cardoso',11,'2019-06-12 15:10:11'),(2038,'Matipó',11,'2019-06-12 15:10:11'),(2039,'Mato Verde',11,'2019-06-12 15:10:11'),(2040,'Matozinhos',11,'2019-06-12 15:10:11'),(2041,'Matutina',11,'2019-06-12 15:10:11'),(2042,'Medeiros',11,'2019-06-12 15:10:11'),(2043,'Medina',11,'2019-06-12 15:10:11'),(2044,'Mendes Pimentel',11,'2019-06-12 15:10:11'),(2045,'Mercês',11,'2019-06-12 15:10:11'),(2046,'Mesquita',11,'2019-06-12 15:10:11'),(2047,'Minas Novas',11,'2019-06-12 15:10:11'),(2048,'Minduri',11,'2019-06-12 15:10:11'),(2049,'Mirabela',11,'2019-06-12 15:10:11'),(2050,'Miradouro',11,'2019-06-12 15:10:11'),(2051,'Miraí',11,'2019-06-12 15:10:11'),(2052,'Miravânia',11,'2019-06-12 15:10:11'),(2053,'Moeda',11,'2019-06-12 15:10:11'),(2054,'Moema',11,'2019-06-12 15:10:11'),(2055,'Monjolos',11,'2019-06-12 15:10:11'),(2056,'Monsenhor Paulo',11,'2019-06-12 15:10:11'),(2057,'Montalvânia',11,'2019-06-12 15:10:11'),(2058,'Monte Alegre de Minas',11,'2019-06-12 15:10:11'),(2059,'Monte Azul',11,'2019-06-12 15:10:11'),(2060,'Monte Belo',11,'2019-06-12 15:10:11'),(2061,'Monte Carmelo',11,'2019-06-12 15:10:11'),(2062,'Monte Formoso',11,'2019-06-12 15:10:11'),(2063,'Monte Santo de Minas',11,'2019-06-12 15:10:11'),(2064,'Monte Sião',11,'2019-06-12 15:10:11'),(2065,'Montes Claros',11,'2019-06-12 15:10:11'),(2066,'Montezuma',11,'2019-06-12 15:10:11'),(2067,'Morada Nova de Minas',11,'2019-06-12 15:10:11'),(2068,'Morro da Garça',11,'2019-06-12 15:10:11'),(2069,'Morro do Pilar',11,'2019-06-12 15:10:11'),(2070,'Munhoz',11,'2019-06-12 15:10:11'),(2071,'Muriaé',11,'2019-06-12 15:10:11'),(2072,'Mutum',11,'2019-06-12 15:10:11'),(2073,'Muzambinho',11,'2019-06-12 15:10:11'),(2074,'Nacip Raydan',11,'2019-06-12 15:10:11'),(2075,'Nanuque',11,'2019-06-12 15:10:11'),(2076,'Naque',11,'2019-06-12 15:10:11'),(2077,'Natalândia',11,'2019-06-12 15:10:11'),(2078,'Natércia',11,'2019-06-12 15:10:11'),(2079,'Nazareno',11,'2019-06-12 15:10:11'),(2080,'Nepomuceno',11,'2019-06-12 15:10:11'),(2081,'Ninheira',11,'2019-06-12 15:10:11'),(2082,'Nova Belém',11,'2019-06-12 15:10:11'),(2083,'Nova Era',11,'2019-06-12 15:10:11'),(2084,'Nova Lima',11,'2019-06-12 15:10:11'),(2085,'Nova Módica',11,'2019-06-12 15:10:11'),(2086,'Nova Ponte',11,'2019-06-12 15:10:11'),(2087,'Nova Porteirinha',11,'2019-06-12 15:10:11'),(2088,'Nova Resende',11,'2019-06-12 15:10:11'),(2089,'Nova Serrana',11,'2019-06-12 15:10:11'),(2090,'Nova União',11,'2019-06-12 15:10:11'),(2091,'Novo Cruzeiro',11,'2019-06-12 15:10:11'),(2092,'Novo Oriente de Minas',11,'2019-06-12 15:10:11'),(2093,'Novorizonte',11,'2019-06-12 15:10:11'),(2094,'Olaria',11,'2019-06-12 15:10:11'),(2095,'Olhos-d`Água',11,'2019-06-12 15:10:11'),(2096,'Olímpio Noronha',11,'2019-06-12 15:10:11'),(2097,'Oliveira',11,'2019-06-12 15:10:11'),(2098,'Oliveira Fortes',11,'2019-06-12 15:10:11'),(2099,'Onça de Pitangui',11,'2019-06-12 15:10:11'),(2100,'Oratórios',11,'2019-06-12 15:10:11'),(2101,'Orizânia',11,'2019-06-12 15:10:11'),(2102,'Ouro Branco',11,'2019-06-12 15:10:11'),(2103,'Ouro Fino',11,'2019-06-12 15:10:11'),(2104,'Ouro Preto',11,'2019-06-12 15:10:11'),(2105,'Ouro Verde de Minas',11,'2019-06-12 15:10:11'),(2106,'Padre Carvalho',11,'2019-06-12 15:10:11'),(2107,'Padre Paraíso',11,'2019-06-12 15:10:11'),(2108,'Pai Pedro',11,'2019-06-12 15:10:11'),(2109,'Paineiras',11,'2019-06-12 15:10:11'),(2110,'Pains',11,'2019-06-12 15:10:11'),(2111,'Paiva',11,'2019-06-12 15:10:11'),(2112,'Palma',11,'2019-06-12 15:10:11'),(2113,'Palmópolis',11,'2019-06-12 15:10:11'),(2114,'Papagaios',11,'2019-06-12 15:10:11'),(2115,'Pará de Minas',11,'2019-06-12 15:10:11'),(2116,'Paracatu',11,'2019-06-12 15:10:11'),(2117,'Paraguaçu',11,'2019-06-12 15:10:11'),(2118,'Paraisópolis',11,'2019-06-12 15:10:11'),(2119,'Paraopeba',11,'2019-06-12 15:10:11'),(2120,'Passa Quatro',11,'2019-06-12 15:10:11'),(2121,'Passa Tempo',11,'2019-06-12 15:10:11'),(2122,'Passabém',11,'2019-06-12 15:10:11'),(2123,'Passa-Vinte',11,'2019-06-12 15:10:11'),(2124,'Passos',11,'2019-06-12 15:10:11'),(2125,'Patis',11,'2019-06-12 15:10:11'),(2126,'Patos de Minas',11,'2019-06-12 15:10:11'),(2127,'Patrocínio',11,'2019-06-12 15:10:11'),(2128,'Patrocínio do Muriaé',11,'2019-06-12 15:10:11'),(2129,'Paula Cândido',11,'2019-06-12 15:10:11'),(2130,'Paulistas',11,'2019-06-12 15:10:11'),(2131,'Pavão',11,'2019-06-12 15:10:11'),(2132,'Peçanha',11,'2019-06-12 15:10:11'),(2133,'Pedra Azul',11,'2019-06-12 15:10:11'),(2134,'Pedra Bonita',11,'2019-06-12 15:10:11'),(2135,'Pedra do Anta',11,'2019-06-12 15:10:11'),(2136,'Pedra do Indaiá',11,'2019-06-12 15:10:11'),(2137,'Pedra Dourada',11,'2019-06-12 15:10:11'),(2138,'Pedralva',11,'2019-06-12 15:10:11'),(2139,'Pedras de Maria da Cruz',11,'2019-06-12 15:10:11'),(2140,'Pedrinópolis',11,'2019-06-12 15:10:11'),(2141,'Pedro Leopoldo',11,'2019-06-12 15:10:11'),(2142,'Pedro Teixeira',11,'2019-06-12 15:10:11'),(2143,'Pequeri',11,'2019-06-12 15:10:11'),(2144,'Pequi',11,'2019-06-12 15:10:11'),(2145,'Perdigão',11,'2019-06-12 15:10:11'),(2146,'Perdizes',11,'2019-06-12 15:10:11'),(2147,'Perdões',11,'2019-06-12 15:10:11'),(2148,'Periquito',11,'2019-06-12 15:10:11'),(2149,'Pescador',11,'2019-06-12 15:10:11'),(2150,'Piau',11,'2019-06-12 15:10:11'),(2151,'Piedade de Caratinga',11,'2019-06-12 15:10:11'),(2152,'Piedade de Ponte Nova',11,'2019-06-12 15:10:11'),(2153,'Piedade do Rio Grande',11,'2019-06-12 15:10:11'),(2154,'Piedade dos Gerais',11,'2019-06-12 15:10:11'),(2155,'Pimenta',11,'2019-06-12 15:10:11'),(2156,'Pingo-d`Água',11,'2019-06-12 15:10:11'),(2157,'Pintópolis',11,'2019-06-12 15:10:11'),(2158,'Piracema',11,'2019-06-12 15:10:11'),(2159,'Pirajuba',11,'2019-06-12 15:10:11'),(2160,'Piranga',11,'2019-06-12 15:10:11'),(2161,'Piranguçu',11,'2019-06-12 15:10:11'),(2162,'Piranguinho',11,'2019-06-12 15:10:11'),(2163,'Pirapetinga',11,'2019-06-12 15:10:11'),(2164,'Pirapora',11,'2019-06-12 15:10:11'),(2165,'Piraúba',11,'2019-06-12 15:10:11'),(2166,'Pitangui',11,'2019-06-12 15:10:11'),(2167,'Piumhi',11,'2019-06-12 15:10:11'),(2168,'Planura',11,'2019-06-12 15:10:11'),(2169,'Poço Fundo',11,'2019-06-12 15:10:11'),(2170,'Poços de Caldas',11,'2019-06-12 15:10:11'),(2171,'Pocrane',11,'2019-06-12 15:10:11'),(2172,'Pompéu',11,'2019-06-12 15:10:11'),(2173,'Ponte Nova',11,'2019-06-12 15:10:11'),(2174,'Ponto Chique',11,'2019-06-12 15:10:11'),(2175,'Ponto dos Volantes',11,'2019-06-12 15:10:11'),(2176,'Porteirinha',11,'2019-06-12 15:10:11'),(2177,'Porto Firme',11,'2019-06-12 15:10:11'),(2178,'Poté',11,'2019-06-12 15:10:11'),(2179,'Pouso Alegre',11,'2019-06-12 15:10:11'),(2180,'Pouso Alto',11,'2019-06-12 15:10:11'),(2181,'Prados',11,'2019-06-12 15:10:11'),(2182,'Prata',11,'2019-06-12 15:10:11'),(2183,'Pratápolis',11,'2019-06-12 15:10:11'),(2184,'Pratinha',11,'2019-06-12 15:10:11'),(2185,'Presidente Bernardes',11,'2019-06-12 15:10:11'),(2186,'Presidente Juscelino',11,'2019-06-12 15:10:11'),(2187,'Presidente Kubitschek',11,'2019-06-12 15:10:11'),(2188,'Presidente Olegário',11,'2019-06-12 15:10:11'),(2189,'Prudente de Morais',11,'2019-06-12 15:10:11'),(2190,'Quartel Geral',11,'2019-06-12 15:10:11'),(2191,'Queluzito',11,'2019-06-12 15:10:11'),(2192,'Raposos',11,'2019-06-12 15:10:11'),(2193,'Raul Soares',11,'2019-06-12 15:10:11'),(2194,'Recreio',11,'2019-06-12 15:10:11'),(2195,'Reduto',11,'2019-06-12 15:10:11'),(2196,'Resende Costa',11,'2019-06-12 15:10:11'),(2197,'Resplendor',11,'2019-06-12 15:10:11'),(2198,'Ressaquinha',11,'2019-06-12 15:10:11'),(2199,'Riachinho',11,'2019-06-12 15:10:11'),(2200,'Riacho dos Machados',11,'2019-06-12 15:10:11'),(2201,'Ribeirão das Neves',11,'2019-06-12 15:10:11'),(2202,'Ribeirão Vermelho',11,'2019-06-12 15:10:11'),(2203,'Rio Acima',11,'2019-06-12 15:10:11'),(2204,'Rio Casca',11,'2019-06-12 15:10:11'),(2205,'Rio do Prado',11,'2019-06-12 15:10:11'),(2206,'Rio Doce',11,'2019-06-12 15:10:11'),(2207,'Rio Espera',11,'2019-06-12 15:10:11'),(2208,'Rio Manso',11,'2019-06-12 15:10:11'),(2209,'Rio Novo',11,'2019-06-12 15:10:11'),(2210,'Rio Paranaíba',11,'2019-06-12 15:10:11'),(2211,'Rio Pardo de Minas',11,'2019-06-12 15:10:11'),(2212,'Rio Piracicaba',11,'2019-06-12 15:10:11'),(2213,'Rio Pomba',11,'2019-06-12 15:10:11'),(2214,'Rio Preto',11,'2019-06-12 15:10:11'),(2215,'Rio Vermelho',11,'2019-06-12 15:10:11'),(2216,'Ritápolis',11,'2019-06-12 15:10:11'),(2217,'Rochedo de Minas',11,'2019-06-12 15:10:11'),(2218,'Rodeiro',11,'2019-06-12 15:10:11'),(2219,'Romaria',11,'2019-06-12 15:10:11'),(2220,'Rosário da Limeira',11,'2019-06-12 15:10:11'),(2221,'Rubelita',11,'2019-06-12 15:10:11'),(2222,'Rubim',11,'2019-06-12 15:10:11'),(2223,'Sabará',11,'2019-06-12 15:10:11'),(2224,'Sabinópolis',11,'2019-06-12 15:10:11'),(2225,'Sacramento',11,'2019-06-12 15:10:11'),(2226,'Salinas',11,'2019-06-12 15:10:11'),(2227,'Salto da Divisa',11,'2019-06-12 15:10:11'),(2228,'Santa Bárbara',11,'2019-06-12 15:10:11'),(2229,'Santa Bárbara do Leste',11,'2019-06-12 15:10:11'),(2230,'Santa Bárbara do Monte Verde',11,'2019-06-12 15:10:11'),(2231,'Santa Bárbara do Tugúrio',11,'2019-06-12 15:10:11'),(2232,'Santa Cruz de Minas',11,'2019-06-12 15:10:11'),(2233,'Santa Cruz de Salinas',11,'2019-06-12 15:10:11'),(2234,'Santa Cruz do Escalvado',11,'2019-06-12 15:10:11'),(2235,'Santa Efigênia de Minas',11,'2019-06-12 15:10:11'),(2236,'Santa Fé de Minas',11,'2019-06-12 15:10:11'),(2237,'Santa Helena de Minas',11,'2019-06-12 15:10:11'),(2238,'Santa Juliana',11,'2019-06-12 15:10:11'),(2239,'Santa Luzia',11,'2019-06-12 15:10:11'),(2240,'Santa Margarida',11,'2019-06-12 15:10:11'),(2241,'Santa Maria de Itabira',11,'2019-06-12 15:10:11'),(2242,'Santa Maria do Salto',11,'2019-06-12 15:10:11'),(2243,'Santa Maria do Suaçuí',11,'2019-06-12 15:10:11'),(2244,'Santa Rita de Caldas',11,'2019-06-12 15:10:11'),(2245,'Santa Rita de Ibitipoca',11,'2019-06-12 15:10:11'),(2246,'Santa Rita de Jacutinga',11,'2019-06-12 15:10:11'),(2247,'Santa Rita de Minas',11,'2019-06-12 15:10:11'),(2248,'Santa Rita do Itueto',11,'2019-06-12 15:10:11'),(2249,'Santa Rita do Sapucaí',11,'2019-06-12 15:10:11'),(2250,'Santa Rosa da Serra',11,'2019-06-12 15:10:11'),(2251,'Santa Vitória',11,'2019-06-12 15:10:11'),(2252,'Santana da Vargem',11,'2019-06-12 15:10:11'),(2253,'Santana de Cataguases',11,'2019-06-12 15:10:11'),(2254,'Santana de Pirapama',11,'2019-06-12 15:10:11'),(2255,'Santana do Deserto',11,'2019-06-12 15:10:11'),(2256,'Santana do Garambéu',11,'2019-06-12 15:10:11'),(2257,'Santana do Jacaré',11,'2019-06-12 15:10:11'),(2258,'Santana do Manhuaçu',11,'2019-06-12 15:10:11'),(2259,'Santana do Paraíso',11,'2019-06-12 15:10:11'),(2260,'Santana do Riacho',11,'2019-06-12 15:10:11'),(2261,'Santana dos Montes',11,'2019-06-12 15:10:11'),(2262,'Santo Antônio do Amparo',11,'2019-06-12 15:10:11'),(2263,'Santo Antônio do Aventureiro',11,'2019-06-12 15:10:11'),(2264,'Santo Antônio do Grama',11,'2019-06-12 15:10:11'),(2265,'Santo Antônio do Itambé',11,'2019-06-12 15:10:11'),(2266,'Santo Antônio do Jacinto',11,'2019-06-12 15:10:11'),(2267,'Santo Antônio do Monte',11,'2019-06-12 15:10:11'),(2268,'Santo Antônio do Retiro',11,'2019-06-12 15:10:11'),(2269,'Santo Antônio do Rio Abaixo',11,'2019-06-12 15:10:11'),(2270,'Santo Hipólito',11,'2019-06-12 15:10:11'),(2271,'Santos Dumont',11,'2019-06-12 15:10:11'),(2272,'São Bento Abade',11,'2019-06-12 15:10:11'),(2273,'São Brás do Suaçuí',11,'2019-06-12 15:10:11'),(2274,'São Domingos das Dores',11,'2019-06-12 15:10:11'),(2275,'São Domingos do Prata',11,'2019-06-12 15:10:11'),(2276,'São Félix de Minas',11,'2019-06-12 15:10:11'),(2277,'São Francisco',11,'2019-06-12 15:10:11'),(2278,'São Francisco de Paula',11,'2019-06-12 15:10:11'),(2279,'São Francisco de Sales',11,'2019-06-12 15:10:11'),(2280,'São Francisco do Glória',11,'2019-06-12 15:10:11'),(2281,'São Geraldo',11,'2019-06-12 15:10:11'),(2282,'São Geraldo da Piedade',11,'2019-06-12 15:10:11'),(2283,'São Geraldo do Baixio',11,'2019-06-12 15:10:11'),(2284,'São Gonçalo do Abaeté',11,'2019-06-12 15:10:11'),(2285,'São Gonçalo do Pará',11,'2019-06-12 15:10:11'),(2286,'São Gonçalo do Rio Abaixo',11,'2019-06-12 15:10:11'),(2287,'São Gonçalo do Rio Preto',11,'2019-06-12 15:10:11'),(2288,'São Gonçalo do Sapucaí',11,'2019-06-12 15:10:11'),(2289,'São Gotardo',11,'2019-06-12 15:10:11'),(2290,'São João Batista do Glória',11,'2019-06-12 15:10:11'),(2291,'São João da Lagoa',11,'2019-06-12 15:10:11'),(2292,'São João da Mata',11,'2019-06-12 15:10:11'),(2293,'São João da Ponte',11,'2019-06-12 15:10:11'),(2294,'São João das Missões',11,'2019-06-12 15:10:11'),(2295,'São João del Rei',11,'2019-06-12 15:10:11'),(2296,'São João do Manhuaçu',11,'2019-06-12 15:10:11'),(2297,'São João do Manteninha',11,'2019-06-12 15:10:11'),(2298,'São João do Oriente',11,'2019-06-12 15:10:11'),(2299,'São João do Pacuí',11,'2019-06-12 15:10:11'),(2300,'São João do Paraíso',11,'2019-06-12 15:10:11'),(2301,'São João Evangelista',11,'2019-06-12 15:10:11'),(2302,'São João Nepomuceno',11,'2019-06-12 15:10:11'),(2303,'São Joaquim de Bicas',11,'2019-06-12 15:10:11'),(2304,'São José da Barra',11,'2019-06-12 15:10:11'),(2305,'São José da Lapa',11,'2019-06-12 15:10:11'),(2306,'São José da Safira',11,'2019-06-12 15:10:11'),(2307,'São José da Varginha',11,'2019-06-12 15:10:11'),(2308,'São José do Alegre',11,'2019-06-12 15:10:11'),(2309,'São José do Divino',11,'2019-06-12 15:10:11'),(2310,'São José do Goiabal',11,'2019-06-12 15:10:11'),(2311,'São José do Jacuri',11,'2019-06-12 15:10:11'),(2312,'São José do Mantimento',11,'2019-06-12 15:10:11'),(2313,'São Lourenço',11,'2019-06-12 15:10:11'),(2314,'São Miguel do Anta',11,'2019-06-12 15:10:11'),(2315,'São Pedro da União',11,'2019-06-12 15:10:11'),(2316,'São Pedro do Suaçuí',11,'2019-06-12 15:10:11'),(2317,'São Pedro dos Ferros',11,'2019-06-12 15:10:11'),(2318,'São Romão',11,'2019-06-12 15:10:11'),(2319,'São Roque de Minas',11,'2019-06-12 15:10:11'),(2320,'São Sebastião da Bela Vista',11,'2019-06-12 15:10:11'),(2321,'São Sebastião da Vargem Alegre',11,'2019-06-12 15:10:11'),(2322,'São Sebastião do Anta',11,'2019-06-12 15:10:11'),(2323,'São Sebastião do Maranhão',11,'2019-06-12 15:10:11'),(2324,'São Sebastião do Oeste',11,'2019-06-12 15:10:11'),(2325,'São Sebastião do Paraíso',11,'2019-06-12 15:10:11'),(2326,'São Sebastião do Rio Preto',11,'2019-06-12 15:10:11'),(2327,'São Sebastião do Rio Verde',11,'2019-06-12 15:10:11'),(2328,'São Thomé das Letras',11,'2019-06-12 15:10:11'),(2329,'São Tiago',11,'2019-06-12 15:10:11'),(2330,'São Tomás de Aquino',11,'2019-06-12 15:10:11'),(2331,'São Vicente de Minas',11,'2019-06-12 15:10:11'),(2332,'Sapucaí-Mirim',11,'2019-06-12 15:10:11'),(2333,'Sardoá',11,'2019-06-12 15:10:11'),(2334,'Sarzedo',11,'2019-06-12 15:10:11'),(2335,'Sem-Peixe',11,'2019-06-12 15:10:11'),(2336,'Senador Amaral',11,'2019-06-12 15:10:11'),(2337,'Senador Cortes',11,'2019-06-12 15:10:11'),(2338,'Senador Firmino',11,'2019-06-12 15:10:11'),(2339,'Senador José Bento',11,'2019-06-12 15:10:11'),(2340,'Senador Modestino Gonçalves',11,'2019-06-12 15:10:11'),(2341,'Senhora de Oliveira',11,'2019-06-12 15:10:11'),(2342,'Senhora do Porto',11,'2019-06-12 15:10:11'),(2343,'Senhora dos Remédios',11,'2019-06-12 15:10:11'),(2344,'Sericita',11,'2019-06-12 15:10:11'),(2345,'Seritinga',11,'2019-06-12 15:10:11'),(2346,'Serra Azul de Minas',11,'2019-06-12 15:10:11'),(2347,'Serra da Saudade',11,'2019-06-12 15:10:11'),(2348,'Serra do Salitre',11,'2019-06-12 15:10:11'),(2349,'Serra dos Aimorés',11,'2019-06-12 15:10:11'),(2350,'Serrania',11,'2019-06-12 15:10:11'),(2351,'Serranópolis de Minas',11,'2019-06-12 15:10:11'),(2352,'Serranos',11,'2019-06-12 15:10:11'),(2353,'Serro',11,'2019-06-12 15:10:11'),(2354,'Sete Lagoas',11,'2019-06-12 15:10:11'),(2355,'Setubinha',11,'2019-06-12 15:10:11'),(2356,'Silveirânia',11,'2019-06-12 15:10:11'),(2357,'Silvianópolis',11,'2019-06-12 15:10:11'),(2358,'Simão Pereira',11,'2019-06-12 15:10:11'),(2359,'Simonésia',11,'2019-06-12 15:10:11'),(2360,'Sobrália',11,'2019-06-12 15:10:11'),(2361,'Soledade de Minas',11,'2019-06-12 15:10:11'),(2362,'Tabuleiro',11,'2019-06-12 15:10:11'),(2363,'Taiobeiras',11,'2019-06-12 15:10:11'),(2364,'Taparuba',11,'2019-06-12 15:10:11'),(2365,'Tapira',11,'2019-06-12 15:10:11'),(2366,'Tapiraí',11,'2019-06-12 15:10:11'),(2367,'Taquaraçu de Minas',11,'2019-06-12 15:10:11'),(2368,'Tarumirim',11,'2019-06-12 15:10:11'),(2369,'Teixeiras',11,'2019-06-12 15:10:11'),(2370,'Teófilo Otoni',11,'2019-06-12 15:10:11'),(2371,'Timóteo',11,'2019-06-12 15:10:11'),(2372,'Tiradentes',11,'2019-06-12 15:10:11'),(2373,'Tiros',11,'2019-06-12 15:10:11'),(2374,'Tocantins',11,'2019-06-12 15:10:11'),(2375,'Tocos do Moji',11,'2019-06-12 15:10:11'),(2376,'Toledo',11,'2019-06-12 15:10:11'),(2377,'Tombos',11,'2019-06-12 15:10:11'),(2378,'Três Corações',11,'2019-06-12 15:10:11'),(2379,'Três Marias',11,'2019-06-12 15:10:11'),(2380,'Três Pontas',11,'2019-06-12 15:10:11'),(2381,'Tumiritinga',11,'2019-06-12 15:10:11'),(2382,'Tupaciguara',11,'2019-06-12 15:10:11'),(2383,'Turmalina',11,'2019-06-12 15:10:11'),(2384,'Turvolândia',11,'2019-06-12 15:10:11'),(2385,'Ubá',11,'2019-06-12 15:10:11'),(2386,'Ubaí',11,'2019-06-12 15:10:11'),(2387,'Ubaporanga',11,'2019-06-12 15:10:11'),(2388,'Uberaba',11,'2019-06-12 15:10:11'),(2389,'Uberlândia',11,'2019-06-12 15:10:11'),(2390,'Umburatiba',11,'2019-06-12 15:10:11'),(2391,'Unaí',11,'2019-06-12 15:10:11'),(2392,'União de Minas',11,'2019-06-12 15:10:11'),(2393,'Uruana de Minas',11,'2019-06-12 15:10:11'),(2394,'Urucânia',11,'2019-06-12 15:10:11'),(2395,'Urucuia',11,'2019-06-12 15:10:11'),(2396,'Vargem Alegre',11,'2019-06-12 15:10:11'),(2397,'Vargem Bonita',11,'2019-06-12 15:10:11'),(2398,'Vargem Grande do Rio Pardo',11,'2019-06-12 15:10:11'),(2399,'Varginha',11,'2019-06-12 15:10:11'),(2400,'Varjão de Minas',11,'2019-06-12 15:10:11'),(2401,'Várzea da Palma',11,'2019-06-12 15:10:11'),(2402,'Varzelândia',11,'2019-06-12 15:10:11'),(2403,'Vazante',11,'2019-06-12 15:10:11'),(2404,'Verdelândia',11,'2019-06-12 15:10:11'),(2405,'Veredinha',11,'2019-06-12 15:10:11'),(2406,'Veríssimo',11,'2019-06-12 15:10:11'),(2407,'Vermelho Novo',11,'2019-06-12 15:10:11'),(2408,'Vespasiano',11,'2019-06-12 15:10:11'),(2409,'Viçosa',11,'2019-06-12 15:10:11'),(2410,'Vieiras',11,'2019-06-12 15:10:11'),(2411,'Virgem da Lapa',11,'2019-06-12 15:10:11'),(2412,'Virgínia',11,'2019-06-12 15:10:11'),(2413,'Virginópolis',11,'2019-06-12 15:10:11'),(2414,'Virgolândia',11,'2019-06-12 15:10:11'),(2415,'Visconde do Rio Branco',11,'2019-06-12 15:10:11'),(2416,'Volta Grande',11,'2019-06-12 15:10:11'),(2417,'Wenceslau Braz',11,'2019-06-12 15:10:11'),(2418,'Abaetetuba',14,'2019-06-12 15:10:11'),(2419,'Abel Figueiredo',14,'2019-06-12 15:10:11'),(2420,'Acará',14,'2019-06-12 15:10:11'),(2421,'Afuá',14,'2019-06-12 15:10:11'),(2422,'Água Azul do Norte',14,'2019-06-12 15:10:11'),(2423,'Alenquer',14,'2019-06-12 15:10:11'),(2424,'Almeirim',14,'2019-06-12 15:10:11'),(2425,'Altamira',14,'2019-06-12 15:10:11'),(2426,'Anajás',14,'2019-06-12 15:10:11'),(2427,'Ananindeua',14,'2019-06-12 15:10:11'),(2428,'Anapu',14,'2019-06-12 15:10:11'),(2429,'Augusto Corrêa',14,'2019-06-12 15:10:11'),(2430,'Aurora do Pará',14,'2019-06-12 15:10:11'),(2431,'Aveiro',14,'2019-06-12 15:10:11'),(2432,'Bagre',14,'2019-06-12 15:10:11'),(2433,'Baião',14,'2019-06-12 15:10:11'),(2434,'Bannach',14,'2019-06-12 15:10:11'),(2435,'Barcarena',14,'2019-06-12 15:10:11'),(2436,'Belém',14,'2019-06-12 15:10:11'),(2437,'Belterra',14,'2019-06-12 15:10:11'),(2438,'Benevides',14,'2019-06-12 15:10:11'),(2439,'Bom Jesus do Tocantins',14,'2019-06-12 15:10:11'),(2440,'Bonito',14,'2019-06-12 15:10:11'),(2441,'Bragança',14,'2019-06-12 15:10:11'),(2442,'Brasil Novo',14,'2019-06-12 15:10:11'),(2443,'Brejo Grande do Araguaia',14,'2019-06-12 15:10:11'),(2444,'Breu Branco',14,'2019-06-12 15:10:11'),(2445,'Breves',14,'2019-06-12 15:10:11'),(2446,'Bujaru',14,'2019-06-12 15:10:11'),(2447,'Cachoeira do Arari',14,'2019-06-12 15:10:11'),(2448,'Cachoeira do Piriá',14,'2019-06-12 15:10:11'),(2449,'Cametá',14,'2019-06-12 15:10:11'),(2450,'Canaã dos Carajás',14,'2019-06-12 15:10:11'),(2451,'Capanema',14,'2019-06-12 15:10:11'),(2452,'Capitão Poço',14,'2019-06-12 15:10:11'),(2453,'Castanhal',14,'2019-06-12 15:10:11'),(2454,'Chaves',14,'2019-06-12 15:10:11'),(2455,'Colares',14,'2019-06-12 15:10:11'),(2456,'Conceição do Araguaia',14,'2019-06-12 15:10:11'),(2457,'Concórdia do Pará',14,'2019-06-12 15:10:11'),(2458,'Cumaru do Norte',14,'2019-06-12 15:10:11'),(2459,'Curionópolis',14,'2019-06-12 15:10:11'),(2460,'Curralinho',14,'2019-06-12 15:10:11'),(2461,'Curuá',14,'2019-06-12 15:10:11'),(2462,'Curuçá',14,'2019-06-12 15:10:11'),(2463,'Dom Eliseu',14,'2019-06-12 15:10:11'),(2464,'Eldorado dos Carajás',14,'2019-06-12 15:10:11'),(2465,'Faro',14,'2019-06-12 15:10:11'),(2466,'Floresta do Araguaia',14,'2019-06-12 15:10:11'),(2467,'Garrafão do Norte',14,'2019-06-12 15:10:11'),(2468,'Goianésia do Pará',14,'2019-06-12 15:10:11'),(2469,'Gurupá',14,'2019-06-12 15:10:11'),(2470,'Igarapé-Açu',14,'2019-06-12 15:10:11'),(2471,'Igarapé-Miri',14,'2019-06-12 15:10:11'),(2472,'Inhangapi',14,'2019-06-12 15:10:11'),(2473,'Ipixuna do Pará',14,'2019-06-12 15:10:11'),(2474,'Irituia',14,'2019-06-12 15:10:11'),(2475,'Itaituba',14,'2019-06-12 15:10:11'),(2476,'Itupiranga',14,'2019-06-12 15:10:11'),(2477,'Jacareacanga',14,'2019-06-12 15:10:11'),(2478,'Jacundá',14,'2019-06-12 15:10:11'),(2479,'Juruti',14,'2019-06-12 15:10:11'),(2480,'Limoeiro do Ajuru',14,'2019-06-12 15:10:11'),(2481,'Mãe do Rio',14,'2019-06-12 15:10:11'),(2482,'Magalhães Barata',14,'2019-06-12 15:10:11'),(2483,'Marabá',14,'2019-06-12 15:10:11'),(2484,'Maracanã',14,'2019-06-12 15:10:11'),(2485,'Marapanim',14,'2019-06-12 15:10:11'),(2486,'Marituba',14,'2019-06-12 15:10:11'),(2487,'Medicilândia',14,'2019-06-12 15:10:11'),(2488,'Melgaço',14,'2019-06-12 15:10:11'),(2489,'Mocajuba',14,'2019-06-12 15:10:11'),(2490,'Moju',14,'2019-06-12 15:10:11'),(2491,'Monte Alegre',14,'2019-06-12 15:10:11'),(2492,'Muaná',14,'2019-06-12 15:10:11'),(2493,'Nova Esperança do Piriá',14,'2019-06-12 15:10:11'),(2494,'Nova Ipixuna',14,'2019-06-12 15:10:11'),(2495,'Nova Timboteua',14,'2019-06-12 15:10:11'),(2496,'Novo Progresso',14,'2019-06-12 15:10:11'),(2497,'Novo Repartimento',14,'2019-06-12 15:10:11'),(2498,'Óbidos',14,'2019-06-12 15:10:11'),(2499,'Oeiras do Pará',14,'2019-06-12 15:10:11'),(2500,'Oriximiná',14,'2019-06-12 15:10:11'),(2501,'Ourém',14,'2019-06-12 15:10:11'),(2502,'Ourilândia do Norte',14,'2019-06-12 15:10:11'),(2503,'Pacajá',14,'2019-06-12 15:10:11'),(2504,'Palestina do Pará',14,'2019-06-12 15:10:11'),(2505,'Paragominas',14,'2019-06-12 15:10:11'),(2506,'Parauapebas',14,'2019-06-12 15:10:11'),(2507,'Pau d`Arco',14,'2019-06-12 15:10:11'),(2508,'Peixe-Boi',14,'2019-06-12 15:10:11'),(2509,'Piçarra',14,'2019-06-12 15:10:11'),(2510,'Placas',14,'2019-06-12 15:10:11'),(2511,'Ponta de Pedras',14,'2019-06-12 15:10:11'),(2512,'Portel',14,'2019-06-12 15:10:11'),(2513,'Porto de Moz',14,'2019-06-12 15:10:11'),(2514,'Prainha',14,'2019-06-12 15:10:11'),(2515,'Primavera',14,'2019-06-12 15:10:11'),(2516,'Quatipuru',14,'2019-06-12 15:10:11'),(2517,'Redenção',14,'2019-06-12 15:10:11'),(2518,'Rio Maria',14,'2019-06-12 15:10:11'),(2519,'Rondon do Pará',14,'2019-06-12 15:10:11'),(2520,'Rurópolis',14,'2019-06-12 15:10:11'),(2521,'Salinópolis',14,'2019-06-12 15:10:11'),(2522,'Salvaterra',14,'2019-06-12 15:10:11'),(2523,'Santa Bárbara do Pará',14,'2019-06-12 15:10:11'),(2524,'Santa Cruz do Arari',14,'2019-06-12 15:10:11'),(2525,'Santa Isabel do Pará',14,'2019-06-12 15:10:11'),(2526,'Santa Luzia do Pará',14,'2019-06-12 15:10:11'),(2527,'Santa Maria das Barreiras',14,'2019-06-12 15:10:11'),(2528,'Santa Maria do Pará',14,'2019-06-12 15:10:11'),(2529,'Santana do Araguaia',14,'2019-06-12 15:10:11'),(2530,'Santarém',14,'2019-06-12 15:10:11'),(2531,'Santarém Novo',14,'2019-06-12 15:10:11'),(2532,'Santo Antônio do Tauá',14,'2019-06-12 15:10:11'),(2533,'São Caetano de Odivelas',14,'2019-06-12 15:10:11'),(2534,'São Domingos do Araguaia',14,'2019-06-12 15:10:11'),(2535,'São Domingos do Capim',14,'2019-06-12 15:10:11'),(2536,'São Félix do Xingu',14,'2019-06-12 15:10:11'),(2537,'São Francisco do Pará',14,'2019-06-12 15:10:11'),(2538,'São Geraldo do Araguaia',14,'2019-06-12 15:10:11'),(2539,'São João da Ponta',14,'2019-06-12 15:10:11'),(2540,'São João de Pirabas',14,'2019-06-12 15:10:11'),(2541,'São João do Araguaia',14,'2019-06-12 15:10:11'),(2542,'São Miguel do Guamá',14,'2019-06-12 15:10:11'),(2543,'São Sebastião da Boa Vista',14,'2019-06-12 15:10:11'),(2544,'Sapucaia',14,'2019-06-12 15:10:11'),(2545,'Senador José Porfírio',14,'2019-06-12 15:10:11'),(2546,'Soure',14,'2019-06-12 15:10:11'),(2547,'Tailândia',14,'2019-06-12 15:10:11'),(2548,'Terra Alta',14,'2019-06-12 15:10:11'),(2549,'Terra Santa',14,'2019-06-12 15:10:11'),(2550,'Tomé-Açu',14,'2019-06-12 15:10:11'),(2551,'Tracuateua',14,'2019-06-12 15:10:11'),(2552,'Trairão',14,'2019-06-12 15:10:11'),(2553,'Tucumã',14,'2019-06-12 15:10:11'),(2554,'Tucuruí',14,'2019-06-12 15:10:11'),(2555,'Ulianópolis',14,'2019-06-12 15:10:11'),(2556,'Uruará',14,'2019-06-12 15:10:11'),(2557,'Vigia',14,'2019-06-12 15:10:11'),(2558,'Viseu',14,'2019-06-12 15:10:11'),(2559,'Vitória do Xingu',14,'2019-06-12 15:10:11'),(2560,'Xinguara',14,'2019-06-12 15:10:11'),(2561,'Água Branca',15,'2019-06-12 15:10:11'),(2562,'Aguiar',15,'2019-06-12 15:10:11'),(2563,'Alagoa Grande',15,'2019-06-12 15:10:11'),(2564,'Alagoa Nova',15,'2019-06-12 15:10:11'),(2565,'Alagoinha',15,'2019-06-12 15:10:11'),(2566,'Alcantil',15,'2019-06-12 15:10:11'),(2567,'Algodão de Jandaíra',15,'2019-06-12 15:10:11'),(2568,'Alhandra',15,'2019-06-12 15:10:11'),(2569,'Amparo',15,'2019-06-12 15:10:11'),(2570,'Aparecida',15,'2019-06-12 15:10:11'),(2571,'Araçagi',15,'2019-06-12 15:10:11'),(2572,'Arara',15,'2019-06-12 15:10:11'),(2573,'Araruna',15,'2019-06-12 15:10:11'),(2574,'Areia',15,'2019-06-12 15:10:11'),(2575,'Areia de Baraúnas',15,'2019-06-12 15:10:11'),(2576,'Areial',15,'2019-06-12 15:10:11'),(2577,'Aroeiras',15,'2019-06-12 15:10:11'),(2578,'Assunção',15,'2019-06-12 15:10:11'),(2579,'Baía da Traição',15,'2019-06-12 15:10:11'),(2580,'Bananeiras',15,'2019-06-12 15:10:11'),(2581,'Baraúna',15,'2019-06-12 15:10:11'),(2582,'Barra de Santa Rosa',15,'2019-06-12 15:10:11'),(2583,'Barra de Santana',15,'2019-06-12 15:10:11'),(2584,'Barra de São Miguel',15,'2019-06-12 15:10:11'),(2585,'Bayeux',15,'2019-06-12 15:10:11'),(2586,'Belém',15,'2019-06-12 15:10:11'),(2587,'Belém do Brejo do Cruz',15,'2019-06-12 15:10:11'),(2588,'Bernardino Batista',15,'2019-06-12 15:10:11'),(2589,'Boa Ventura',15,'2019-06-12 15:10:11'),(2590,'Boa Vista',15,'2019-06-12 15:10:11'),(2591,'Bom Jesus',15,'2019-06-12 15:10:11'),(2592,'Bom Sucesso',15,'2019-06-12 15:10:11'),(2593,'Bonito de Santa Fé',15,'2019-06-12 15:10:11'),(2594,'Boqueirão',15,'2019-06-12 15:10:11'),(2595,'Borborema',15,'2019-06-12 15:10:11'),(2596,'Brejo do Cruz',15,'2019-06-12 15:10:11'),(2597,'Brejo dos Santos',15,'2019-06-12 15:10:11'),(2598,'Caaporã',15,'2019-06-12 15:10:11'),(2599,'Cabaceiras',15,'2019-06-12 15:10:11'),(2600,'Cabedelo',15,'2019-06-12 15:10:11'),(2601,'Cachoeira dos Índios',15,'2019-06-12 15:10:11'),(2602,'Cacimba de Areia',15,'2019-06-12 15:10:11'),(2603,'Cacimba de Dentro',15,'2019-06-12 15:10:11'),(2604,'Cacimbas',15,'2019-06-12 15:10:11'),(2605,'Caiçara',15,'2019-06-12 15:10:11'),(2606,'Cajazeiras',15,'2019-06-12 15:10:11'),(2607,'Cajazeirinhas',15,'2019-06-12 15:10:11'),(2608,'Caldas Brandão',15,'2019-06-12 15:10:11'),(2609,'Camalaú',15,'2019-06-12 15:10:11'),(2610,'Campina Grande',15,'2019-06-12 15:10:11'),(2611,'Campo de Santana',15,'2019-06-12 15:10:11'),(2612,'Capim',15,'2019-06-12 15:10:11'),(2613,'Caraúbas',15,'2019-06-12 15:10:11'),(2614,'Carrapateira',15,'2019-06-12 15:10:11'),(2615,'Casserengue',15,'2019-06-12 15:10:11'),(2616,'Catingueira',15,'2019-06-12 15:10:11'),(2617,'Catolé do Rocha',15,'2019-06-12 15:10:11'),(2618,'Caturité',15,'2019-06-12 15:10:11'),(2619,'Conceição',15,'2019-06-12 15:10:11'),(2620,'Condado',15,'2019-06-12 15:10:11'),(2621,'Conde',15,'2019-06-12 15:10:11'),(2622,'Congo',15,'2019-06-12 15:10:11'),(2623,'Coremas',15,'2019-06-12 15:10:11'),(2624,'Coxixola',15,'2019-06-12 15:10:11'),(2625,'Cruz do Espírito Santo',15,'2019-06-12 15:10:11'),(2626,'Cubati',15,'2019-06-12 15:10:11'),(2627,'Cuité',15,'2019-06-12 15:10:11'),(2628,'Cuité de Mamanguape',15,'2019-06-12 15:10:11'),(2629,'Cuitegi',15,'2019-06-12 15:10:11'),(2630,'Curral de Cima',15,'2019-06-12 15:10:11'),(2631,'Curral Velho',15,'2019-06-12 15:10:11'),(2632,'Damião',15,'2019-06-12 15:10:11'),(2633,'Desterro',15,'2019-06-12 15:10:11'),(2634,'Diamante',15,'2019-06-12 15:10:11'),(2635,'Dona Inês',15,'2019-06-12 15:10:11'),(2636,'Duas Estradas',15,'2019-06-12 15:10:11'),(2637,'Emas',15,'2019-06-12 15:10:11'),(2638,'Esperança',15,'2019-06-12 15:10:11'),(2639,'Fagundes',15,'2019-06-12 15:10:11'),(2640,'Frei Martinho',15,'2019-06-12 15:10:11'),(2641,'Gado Bravo',15,'2019-06-12 15:10:11'),(2642,'Guarabira',15,'2019-06-12 15:10:11'),(2643,'Gurinhém',15,'2019-06-12 15:10:11'),(2644,'Gurjão',15,'2019-06-12 15:10:11'),(2645,'Ibiara',15,'2019-06-12 15:10:11'),(2646,'Igaracy',15,'2019-06-12 15:10:11'),(2647,'Imaculada',15,'2019-06-12 15:10:11'),(2648,'Ingá',15,'2019-06-12 15:10:11'),(2649,'Itabaiana',15,'2019-06-12 15:10:11'),(2650,'Itaporanga',15,'2019-06-12 15:10:11'),(2651,'Itapororoca',15,'2019-06-12 15:10:11'),(2652,'Itatuba',15,'2019-06-12 15:10:11'),(2653,'Jacaraú',15,'2019-06-12 15:10:11'),(2654,'Jericó',15,'2019-06-12 15:10:11'),(2655,'João Pessoa',15,'2019-06-12 15:10:11'),(2656,'Juarez Távora',15,'2019-06-12 15:10:11'),(2657,'Juazeirinho',15,'2019-06-12 15:10:11'),(2658,'Junco do Seridó',15,'2019-06-12 15:10:11'),(2659,'Juripiranga',15,'2019-06-12 15:10:11'),(2660,'Juru',15,'2019-06-12 15:10:11'),(2661,'Lagoa',15,'2019-06-12 15:10:11'),(2662,'Lagoa de Dentro',15,'2019-06-12 15:10:11'),(2663,'Lagoa Seca',15,'2019-06-12 15:10:11'),(2664,'Lastro',15,'2019-06-12 15:10:11'),(2665,'Livramento',15,'2019-06-12 15:10:11'),(2666,'Logradouro',15,'2019-06-12 15:10:11'),(2667,'Lucena',15,'2019-06-12 15:10:11'),(2668,'Mãe d`Água',15,'2019-06-12 15:10:11'),(2669,'Malta',15,'2019-06-12 15:10:11'),(2670,'Mamanguape',15,'2019-06-12 15:10:11'),(2671,'Manaíra',15,'2019-06-12 15:10:11'),(2672,'Marcação',15,'2019-06-12 15:10:11'),(2673,'Mari',15,'2019-06-12 15:10:11'),(2674,'Marizópolis',15,'2019-06-12 15:10:11'),(2675,'Massaranduba',15,'2019-06-12 15:10:11'),(2676,'Mataraca',15,'2019-06-12 15:10:11'),(2677,'Matinhas',15,'2019-06-12 15:10:11'),(2678,'Mato Grosso',15,'2019-06-12 15:10:11'),(2679,'Maturéia',15,'2019-06-12 15:10:11'),(2680,'Mogeiro',15,'2019-06-12 15:10:11'),(2681,'Montadas',15,'2019-06-12 15:10:11'),(2682,'Monte Horebe',15,'2019-06-12 15:10:11'),(2683,'Monteiro',15,'2019-06-12 15:10:11'),(2684,'Mulungu',15,'2019-06-12 15:10:11'),(2685,'Natuba',15,'2019-06-12 15:10:11'),(2686,'Nazarezinho',15,'2019-06-12 15:10:11'),(2687,'Nova Floresta',15,'2019-06-12 15:10:11'),(2688,'Nova Olinda',15,'2019-06-12 15:10:11'),(2689,'Nova Palmeira',15,'2019-06-12 15:10:11'),(2690,'Olho d`Água',15,'2019-06-12 15:10:11'),(2691,'Olivedos',15,'2019-06-12 15:10:11'),(2692,'Ouro Velho',15,'2019-06-12 15:10:11'),(2693,'Parari',15,'2019-06-12 15:10:11'),(2694,'Passagem',15,'2019-06-12 15:10:11'),(2695,'Patos',15,'2019-06-12 15:10:11'),(2696,'Paulista',15,'2019-06-12 15:10:11'),(2697,'Pedra Branca',15,'2019-06-12 15:10:11'),(2698,'Pedra Lavrada',15,'2019-06-12 15:10:11'),(2699,'Pedras de Fogo',15,'2019-06-12 15:10:11'),(2700,'Pedro Régis',15,'2019-06-12 15:10:11'),(2701,'Piancó',15,'2019-06-12 15:10:11'),(2702,'Picuí',15,'2019-06-12 15:10:11'),(2703,'Pilar',15,'2019-06-12 15:10:11'),(2704,'Pilões',15,'2019-06-12 15:10:11'),(2705,'Pilõezinhos',15,'2019-06-12 15:10:11'),(2706,'Pirpirituba',15,'2019-06-12 15:10:11'),(2707,'Pitimbu',15,'2019-06-12 15:10:11'),(2708,'Pocinhos',15,'2019-06-12 15:10:11'),(2709,'Poço Dantas',15,'2019-06-12 15:10:11'),(2710,'Poço de José de Moura',15,'2019-06-12 15:10:11'),(2711,'Pombal',15,'2019-06-12 15:10:11'),(2712,'Prata',15,'2019-06-12 15:10:11'),(2713,'Princesa Isabel',15,'2019-06-12 15:10:11'),(2714,'Puxinanã',15,'2019-06-12 15:10:11'),(2715,'Queimadas',15,'2019-06-12 15:10:11'),(2716,'Quixabá',15,'2019-06-12 15:10:11'),(2717,'Remígio',15,'2019-06-12 15:10:11'),(2718,'Riachão',15,'2019-06-12 15:10:11'),(2719,'Riachão do Bacamarte',15,'2019-06-12 15:10:11'),(2720,'Riachão do Poço',15,'2019-06-12 15:10:11'),(2721,'Riacho de Santo Antônio',15,'2019-06-12 15:10:11'),(2722,'Riacho dos Cavalos',15,'2019-06-12 15:10:11'),(2723,'Rio Tinto',15,'2019-06-12 15:10:11'),(2724,'Salgadinho',15,'2019-06-12 15:10:11'),(2725,'Salgado de São Félix',15,'2019-06-12 15:10:11'),(2726,'Santa Cecília',15,'2019-06-12 15:10:11'),(2727,'Santa Cruz',15,'2019-06-12 15:10:11'),(2728,'Santa Helena',15,'2019-06-12 15:10:11'),(2729,'Santa Inês',15,'2019-06-12 15:10:11'),(2730,'Santa Luzia',15,'2019-06-12 15:10:11'),(2731,'Santa Rita',15,'2019-06-12 15:10:11'),(2732,'Santa Teresinha',15,'2019-06-12 15:10:11'),(2733,'Santana de Mangueira',15,'2019-06-12 15:10:11'),(2734,'Santana dos Garrotes',15,'2019-06-12 15:10:11'),(2735,'Santarém',15,'2019-06-12 15:10:11'),(2736,'Santo André',15,'2019-06-12 15:10:11'),(2737,'São Bentinho',15,'2019-06-12 15:10:11'),(2738,'São Bento',15,'2019-06-12 15:10:11'),(2739,'São Domingos de Pombal',15,'2019-06-12 15:10:11'),(2740,'São Domingos do Cariri',15,'2019-06-12 15:10:11'),(2741,'São Francisco',15,'2019-06-12 15:10:11'),(2742,'São João do Cariri',15,'2019-06-12 15:10:11'),(2743,'São João do Rio do Peixe',15,'2019-06-12 15:10:11'),(2744,'São João do Tigre',15,'2019-06-12 15:10:11'),(2745,'São José da Lagoa Tapada',15,'2019-06-12 15:10:11'),(2746,'São José de Caiana',15,'2019-06-12 15:10:11'),(2747,'São José de Espinharas',15,'2019-06-12 15:10:11'),(2748,'São José de Piranhas',15,'2019-06-12 15:10:11'),(2749,'São José de Princesa',15,'2019-06-12 15:10:11'),(2750,'São José do Bonfim',15,'2019-06-12 15:10:11'),(2751,'São José do Brejo do Cruz',15,'2019-06-12 15:10:11'),(2752,'São José do Sabugi',15,'2019-06-12 15:10:11'),(2753,'São José dos Cordeiros',15,'2019-06-12 15:10:11'),(2754,'São José dos Ramos',15,'2019-06-12 15:10:11'),(2755,'São Mamede',15,'2019-06-12 15:10:11'),(2756,'São Miguel de Taipu',15,'2019-06-12 15:10:11'),(2757,'São Sebastião de Lagoa de Roça',15,'2019-06-12 15:10:11'),(2758,'São Sebastião do Umbuzeiro',15,'2019-06-12 15:10:11'),(2759,'Sapé',15,'2019-06-12 15:10:11'),(2760,'Seridó',15,'2019-06-12 15:10:11'),(2761,'Serra Branca',15,'2019-06-12 15:10:11'),(2762,'Serra da Raiz',15,'2019-06-12 15:10:11'),(2763,'Serra Grande',15,'2019-06-12 15:10:11'),(2764,'Serra Redonda',15,'2019-06-12 15:10:11'),(2765,'Serraria',15,'2019-06-12 15:10:11'),(2766,'Sertãozinho',15,'2019-06-12 15:10:11'),(2767,'Sobrado',15,'2019-06-12 15:10:11'),(2768,'Solânea',15,'2019-06-12 15:10:11'),(2769,'Soledade',15,'2019-06-12 15:10:11'),(2770,'Sossêgo',15,'2019-06-12 15:10:11'),(2771,'Sousa',15,'2019-06-12 15:10:11'),(2772,'Sumé',15,'2019-06-12 15:10:11'),(2773,'Taperoá',15,'2019-06-12 15:10:11'),(2774,'Tavares',15,'2019-06-12 15:10:11'),(2775,'Teixeira',15,'2019-06-12 15:10:11'),(2776,'Tenório',15,'2019-06-12 15:10:11'),(2777,'Triunfo',15,'2019-06-12 15:10:11'),(2778,'Uiraúna',15,'2019-06-12 15:10:11'),(2779,'Umbuzeiro',15,'2019-06-12 15:10:11'),(2780,'Várzea',15,'2019-06-12 15:10:11'),(2781,'Vieirópolis',15,'2019-06-12 15:10:11'),(2782,'Vista Serrana',15,'2019-06-12 15:10:11'),(2783,'Zabelê',15,'2019-06-12 15:10:11'),(2784,'Abatiá',18,'2019-06-12 15:10:11'),(2785,'Adrianópolis',18,'2019-06-12 15:10:11'),(2786,'Agudos do Sul',18,'2019-06-12 15:10:11'),(2787,'Almirante Tamandaré',18,'2019-06-12 15:10:11'),(2788,'Altamira do Paraná',18,'2019-06-12 15:10:11'),(2789,'Alto Paraíso',18,'2019-06-12 15:10:11'),(2790,'Alto Paraná',18,'2019-06-12 15:10:11'),(2791,'Alto Piquiri',18,'2019-06-12 15:10:11'),(2792,'Altônia',18,'2019-06-12 15:10:11'),(2793,'Alvorada do Sul',18,'2019-06-12 15:10:11'),(2794,'Amaporã',18,'2019-06-12 15:10:11'),(2795,'Ampére',18,'2019-06-12 15:10:11'),(2796,'Anahy',18,'2019-06-12 15:10:11'),(2797,'Andirá',18,'2019-06-12 15:10:11'),(2798,'Ângulo',18,'2019-06-12 15:10:11'),(2799,'Antonina',18,'2019-06-12 15:10:11'),(2800,'Antônio Olinto',18,'2019-06-12 15:10:11'),(2801,'Apucarana',18,'2019-06-12 15:10:11'),(2802,'Arapongas',18,'2019-06-12 15:10:11'),(2803,'Arapoti',18,'2019-06-12 15:10:11'),(2804,'Arapuã',18,'2019-06-12 15:10:11'),(2805,'Araruna',18,'2019-06-12 15:10:11'),(2806,'Araucária',18,'2019-06-12 15:10:11'),(2807,'Ariranha do Ivaí',18,'2019-06-12 15:10:11'),(2808,'Assaí',18,'2019-06-12 15:10:11'),(2809,'Assis Chateaubriand',18,'2019-06-12 15:10:11'),(2810,'Astorga',18,'2019-06-12 15:10:11'),(2811,'Atalaia',18,'2019-06-12 15:10:11'),(2812,'Balsa Nova',18,'2019-06-12 15:10:11'),(2813,'Bandeirantes',18,'2019-06-12 15:10:11'),(2814,'Barbosa Ferraz',18,'2019-06-12 15:10:11'),(2815,'Barra do Jacaré',18,'2019-06-12 15:10:11'),(2816,'Barracão',18,'2019-06-12 15:10:11'),(2817,'Bela Vista da Caroba',18,'2019-06-12 15:10:11'),(2818,'Bela Vista do Paraíso',18,'2019-06-12 15:10:11'),(2819,'Bituruna',18,'2019-06-12 15:10:11'),(2820,'Boa Esperança',18,'2019-06-12 15:10:11'),(2821,'Boa Esperança do Iguaçu',18,'2019-06-12 15:10:11'),(2822,'Boa Ventura de São Roque',18,'2019-06-12 15:10:11'),(2823,'Boa Vista da Aparecida',18,'2019-06-12 15:10:11'),(2824,'Bocaiúva do Sul',18,'2019-06-12 15:10:11'),(2825,'Bom Jesus do Sul',18,'2019-06-12 15:10:11'),(2826,'Bom Sucesso',18,'2019-06-12 15:10:11'),(2827,'Bom Sucesso do Sul',18,'2019-06-12 15:10:11'),(2828,'Borrazópolis',18,'2019-06-12 15:10:11'),(2829,'Braganey',18,'2019-06-12 15:10:11'),(2830,'Brasilândia do Sul',18,'2019-06-12 15:10:11'),(2831,'Cafeara',18,'2019-06-12 15:10:11'),(2832,'Cafelândia',18,'2019-06-12 15:10:11'),(2833,'Cafezal do Sul',18,'2019-06-12 15:10:11'),(2834,'Califórnia',18,'2019-06-12 15:10:11'),(2835,'Cambará',18,'2019-06-12 15:10:11'),(2836,'Cambé',18,'2019-06-12 15:10:11'),(2837,'Cambira',18,'2019-06-12 15:10:11'),(2838,'Campina da Lagoa',18,'2019-06-12 15:10:11'),(2839,'Campina do Simão',18,'2019-06-12 15:10:11'),(2840,'Campina Grande do Sul',18,'2019-06-12 15:10:11'),(2841,'Campo Bonito',18,'2019-06-12 15:10:11'),(2842,'Campo do Tenente',18,'2019-06-12 15:10:11'),(2843,'Campo Largo',18,'2019-06-12 15:10:11'),(2844,'Campo Magro',18,'2019-06-12 15:10:11'),(2845,'Campo Mourão',18,'2019-06-12 15:10:11'),(2846,'Cândido de Abreu',18,'2019-06-12 15:10:11'),(2847,'Candói',18,'2019-06-12 15:10:11'),(2848,'Cantagalo',18,'2019-06-12 15:10:11'),(2849,'Capanema',18,'2019-06-12 15:10:11'),(2850,'Capitão Leônidas Marques',18,'2019-06-12 15:10:11'),(2851,'Carambeí',18,'2019-06-12 15:10:11'),(2852,'Carlópolis',18,'2019-06-12 15:10:11'),(2853,'Cascavel',18,'2019-06-12 15:10:11'),(2854,'Castro',18,'2019-06-12 15:10:11'),(2855,'Catanduvas',18,'2019-06-12 15:10:11'),(2856,'Centenário do Sul',18,'2019-06-12 15:10:11'),(2857,'Cerro Azul',18,'2019-06-12 15:10:11'),(2858,'Céu Azul',18,'2019-06-12 15:10:11'),(2859,'Chopinzinho',18,'2019-06-12 15:10:11'),(2860,'Cianorte',18,'2019-06-12 15:10:11'),(2861,'Cidade Gaúcha',18,'2019-06-12 15:10:11'),(2862,'Clevelândia',18,'2019-06-12 15:10:11'),(2863,'Colombo',18,'2019-06-12 15:10:11'),(2864,'Colorado',18,'2019-06-12 15:10:11'),(2865,'Congonhinhas',18,'2019-06-12 15:10:11'),(2866,'Conselheiro Mairinck',18,'2019-06-12 15:10:11'),(2867,'Contenda',18,'2019-06-12 15:10:11'),(2868,'Corbélia',18,'2019-06-12 15:10:11'),(2869,'Cornélio Procópio',18,'2019-06-12 15:10:11'),(2870,'Coronel Domingos Soares',18,'2019-06-12 15:10:11'),(2871,'Coronel Vivida',18,'2019-06-12 15:10:11'),(2872,'Corumbataí do Sul',18,'2019-06-12 15:10:11'),(2873,'Cruz Machado',18,'2019-06-12 15:10:11'),(2874,'Cruzeiro do Iguaçu',18,'2019-06-12 15:10:11'),(2875,'Cruzeiro do Oeste',18,'2019-06-12 15:10:11'),(2876,'Cruzeiro do Sul',18,'2019-06-12 15:10:11'),(2877,'Cruzmaltina',18,'2019-06-12 15:10:11'),(2878,'Curitiba',18,'2019-06-12 15:10:11'),(2879,'Curiúva',18,'2019-06-12 15:10:11'),(2880,'Diamante d`Oeste',18,'2019-06-12 15:10:11'),(2881,'Diamante do Norte',18,'2019-06-12 15:10:11'),(2882,'Diamante do Sul',18,'2019-06-12 15:10:11'),(2883,'Dois Vizinhos',18,'2019-06-12 15:10:11'),(2884,'Douradina',18,'2019-06-12 15:10:11'),(2885,'Doutor Camargo',18,'2019-06-12 15:10:11'),(2886,'Doutor Ulysses',18,'2019-06-12 15:10:11'),(2887,'Enéas Marques',18,'2019-06-12 15:10:11'),(2888,'Engenheiro Beltrão',18,'2019-06-12 15:10:11'),(2889,'Entre Rios do Oeste',18,'2019-06-12 15:10:11'),(2890,'Esperança Nova',18,'2019-06-12 15:10:11'),(2891,'Espigão Alto do Iguaçu',18,'2019-06-12 15:10:11'),(2892,'Farol',18,'2019-06-12 15:10:11'),(2893,'Faxinal',18,'2019-06-12 15:10:11'),(2894,'Fazenda Rio Grande',18,'2019-06-12 15:10:11'),(2895,'Fênix',18,'2019-06-12 15:10:11'),(2896,'Fernandes Pinheiro',18,'2019-06-12 15:10:11'),(2897,'Figueira',18,'2019-06-12 15:10:11'),(2898,'Flor da Serra do Sul',18,'2019-06-12 15:10:11'),(2899,'Floraí',18,'2019-06-12 15:10:11'),(2900,'Floresta',18,'2019-06-12 15:10:11'),(2901,'Florestópolis',18,'2019-06-12 15:10:11'),(2902,'Flórida',18,'2019-06-12 15:10:11'),(2903,'Formosa do Oeste',18,'2019-06-12 15:10:11'),(2904,'Foz do Iguaçu',18,'2019-06-12 15:10:11'),(2905,'Foz do Jordão',18,'2019-06-12 15:10:11'),(2906,'Francisco Alves',18,'2019-06-12 15:10:11'),(2907,'Francisco Beltrão',18,'2019-06-12 15:10:11'),(2908,'General Carneiro',18,'2019-06-12 15:10:11'),(2909,'Godoy Moreira',18,'2019-06-12 15:10:11'),(2910,'Goioerê',18,'2019-06-12 15:10:11'),(2911,'Goioxim',18,'2019-06-12 15:10:11'),(2912,'Grandes Rios',18,'2019-06-12 15:10:11'),(2913,'Guaíra',18,'2019-06-12 15:10:11'),(2914,'Guairaçá',18,'2019-06-12 15:10:11'),(2915,'Guamiranga',18,'2019-06-12 15:10:11'),(2916,'Guapirama',18,'2019-06-12 15:10:11'),(2917,'Guaporema',18,'2019-06-12 15:10:11'),(2918,'Guaraci',18,'2019-06-12 15:10:11'),(2919,'Guaraniaçu',18,'2019-06-12 15:10:11'),(2920,'Guarapuava',18,'2019-06-12 15:10:11'),(2921,'Guaraqueçaba',18,'2019-06-12 15:10:11'),(2922,'Guaratuba',18,'2019-06-12 15:10:11'),(2923,'Honório Serpa',18,'2019-06-12 15:10:11'),(2924,'Ibaiti',18,'2019-06-12 15:10:11'),(2925,'Ibema',18,'2019-06-12 15:10:11'),(2926,'Ibiporã',18,'2019-06-12 15:10:11'),(2927,'Icaraíma',18,'2019-06-12 15:10:11'),(2928,'Iguaraçu',18,'2019-06-12 15:10:11'),(2929,'Iguatu',18,'2019-06-12 15:10:11'),(2930,'Imbaú',18,'2019-06-12 15:10:11'),(2931,'Imbituva',18,'2019-06-12 15:10:11'),(2932,'Inácio Martins',18,'2019-06-12 15:10:11'),(2933,'Inajá',18,'2019-06-12 15:10:11'),(2934,'Indianópolis',18,'2019-06-12 15:10:11'),(2935,'Ipiranga',18,'2019-06-12 15:10:11'),(2936,'Iporã',18,'2019-06-12 15:10:11'),(2937,'Iracema do Oeste',18,'2019-06-12 15:10:11'),(2938,'Irati',18,'2019-06-12 15:10:11'),(2939,'Iretama',18,'2019-06-12 15:10:11'),(2940,'Itaguajé',18,'2019-06-12 15:10:11'),(2941,'Itaipulândia',18,'2019-06-12 15:10:11'),(2942,'Itambaracá',18,'2019-06-12 15:10:11'),(2943,'Itambé',18,'2019-06-12 15:10:11'),(2944,'Itapejara d`Oeste',18,'2019-06-12 15:10:11'),(2945,'Itaperuçu',18,'2019-06-12 15:10:11'),(2946,'Itaúna do Sul',18,'2019-06-12 15:10:11'),(2947,'Ivaí',18,'2019-06-12 15:10:11'),(2948,'Ivaiporã',18,'2019-06-12 15:10:11'),(2949,'Ivaté',18,'2019-06-12 15:10:11'),(2950,'Ivatuba',18,'2019-06-12 15:10:11'),(2951,'Jaboti',18,'2019-06-12 15:10:11'),(2952,'Jacarezinho',18,'2019-06-12 15:10:11'),(2953,'Jaguapitã',18,'2019-06-12 15:10:11'),(2954,'Jaguariaíva',18,'2019-06-12 15:10:11'),(2955,'Jandaia do Sul',18,'2019-06-12 15:10:11'),(2956,'Janiópolis',18,'2019-06-12 15:10:11'),(2957,'Japira',18,'2019-06-12 15:10:11'),(2958,'Japurá',18,'2019-06-12 15:10:11'),(2959,'Jardim Alegre',18,'2019-06-12 15:10:11'),(2960,'Jardim Olinda',18,'2019-06-12 15:10:11'),(2961,'Jataizinho',18,'2019-06-12 15:10:11'),(2962,'Jesuítas',18,'2019-06-12 15:10:11'),(2963,'Joaquim Távora',18,'2019-06-12 15:10:11'),(2964,'Jundiaí do Sul',18,'2019-06-12 15:10:11'),(2965,'Juranda',18,'2019-06-12 15:10:11'),(2966,'Jussara',18,'2019-06-12 15:10:11'),(2967,'Kaloré',18,'2019-06-12 15:10:11'),(2968,'Lapa',18,'2019-06-12 15:10:11'),(2969,'Laranjal',18,'2019-06-12 15:10:11'),(2970,'Laranjeiras do Sul',18,'2019-06-12 15:10:11'),(2971,'Leópolis',18,'2019-06-12 15:10:11'),(2972,'Lidianópolis',18,'2019-06-12 15:10:11'),(2973,'Lindoeste',18,'2019-06-12 15:10:11'),(2974,'Loanda',18,'2019-06-12 15:10:11'),(2975,'Lobato',18,'2019-06-12 15:10:11'),(2976,'Londrina',18,'2019-06-12 15:10:11'),(2977,'Luiziana',18,'2019-06-12 15:10:11'),(2978,'Lunardelli',18,'2019-06-12 15:10:11'),(2979,'Lupionópolis',18,'2019-06-12 15:10:11'),(2980,'Mallet',18,'2019-06-12 15:10:11'),(2981,'Mamborê',18,'2019-06-12 15:10:11'),(2982,'Mandaguaçu',18,'2019-06-12 15:10:11'),(2983,'Mandaguari',18,'2019-06-12 15:10:11'),(2984,'Mandirituba',18,'2019-06-12 15:10:11'),(2985,'Manfrinópolis',18,'2019-06-12 15:10:11'),(2986,'Mangueirinha',18,'2019-06-12 15:10:11'),(2987,'Manoel Ribas',18,'2019-06-12 15:10:11'),(2988,'Marechal Cândido Rondon',18,'2019-06-12 15:10:11'),(2989,'Maria Helena',18,'2019-06-12 15:10:11'),(2990,'Marialva',18,'2019-06-12 15:10:11'),(2991,'Marilândia do Sul',18,'2019-06-12 15:10:11'),(2992,'Marilena',18,'2019-06-12 15:10:11'),(2993,'Mariluz',18,'2019-06-12 15:10:11'),(2994,'Maringá',18,'2019-06-12 15:10:11'),(2995,'Mariópolis',18,'2019-06-12 15:10:11'),(2996,'Maripá',18,'2019-06-12 15:10:11'),(2997,'Marmeleiro',18,'2019-06-12 15:10:11'),(2998,'Marquinho',18,'2019-06-12 15:10:11'),(2999,'Marumbi',18,'2019-06-12 15:10:11'),(3000,'Matelândia',18,'2019-06-12 15:10:11'),(3001,'Matinhos',18,'2019-06-12 15:10:11'),(3002,'Mato Rico',18,'2019-06-12 15:10:11'),(3003,'Mauá da Serra',18,'2019-06-12 15:10:11'),(3004,'Medianeira',18,'2019-06-12 15:10:11'),(3005,'Mercedes',18,'2019-06-12 15:10:11'),(3006,'Mirador',18,'2019-06-12 15:10:11'),(3007,'Miraselva',18,'2019-06-12 15:10:11'),(3008,'Missal',18,'2019-06-12 15:10:11'),(3009,'Moreira Sales',18,'2019-06-12 15:10:11'),(3010,'Morretes',18,'2019-06-12 15:10:11'),(3011,'Munhoz de Melo',18,'2019-06-12 15:10:11'),(3012,'Nossa Senhora das Graças',18,'2019-06-12 15:10:11'),(3013,'Nova Aliança do Ivaí',18,'2019-06-12 15:10:11'),(3014,'Nova América da Colina',18,'2019-06-12 15:10:11'),(3015,'Nova Aurora',18,'2019-06-12 15:10:11'),(3016,'Nova Cantu',18,'2019-06-12 15:10:11'),(3017,'Nova Esperança',18,'2019-06-12 15:10:11'),(3018,'Nova Esperança do Sudoeste',18,'2019-06-12 15:10:11'),(3019,'Nova Fátima',18,'2019-06-12 15:10:11'),(3020,'Nova Laranjeiras',18,'2019-06-12 15:10:11'),(3021,'Nova Londrina',18,'2019-06-12 15:10:11'),(3022,'Nova Olímpia',18,'2019-06-12 15:10:11'),(3023,'Nova Prata do Iguaçu',18,'2019-06-12 15:10:11'),(3024,'Nova Santa Bárbara',18,'2019-06-12 15:10:11'),(3025,'Nova Santa Rosa',18,'2019-06-12 15:10:11'),(3026,'Nova Tebas',18,'2019-06-12 15:10:11'),(3027,'Novo Itacolomi',18,'2019-06-12 15:10:11'),(3028,'Ortigueira',18,'2019-06-12 15:10:11'),(3029,'Ourizona',18,'2019-06-12 15:10:11'),(3030,'Ouro Verde do Oeste',18,'2019-06-12 15:10:11'),(3031,'Paiçandu',18,'2019-06-12 15:10:11'),(3032,'Palmas',18,'2019-06-12 15:10:11'),(3033,'Palmeira',18,'2019-06-12 15:10:11'),(3034,'Palmital',18,'2019-06-12 15:10:11'),(3035,'Palotina',18,'2019-06-12 15:10:11'),(3036,'Paraíso do Norte',18,'2019-06-12 15:10:11'),(3037,'Paranacity',18,'2019-06-12 15:10:11'),(3038,'Paranaguá',18,'2019-06-12 15:10:11'),(3039,'Paranapoema',18,'2019-06-12 15:10:11'),(3040,'Paranavaí',18,'2019-06-12 15:10:11'),(3041,'Pato Bragado',18,'2019-06-12 15:10:11'),(3042,'Pato Branco',18,'2019-06-12 15:10:11'),(3043,'Paula Freitas',18,'2019-06-12 15:10:11'),(3044,'Paulo Frontin',18,'2019-06-12 15:10:11'),(3045,'Peabiru',18,'2019-06-12 15:10:11'),(3046,'Perobal',18,'2019-06-12 15:10:11'),(3047,'Pérola',18,'2019-06-12 15:10:11'),(3048,'Pérola d`Oeste',18,'2019-06-12 15:10:11'),(3049,'Piên',18,'2019-06-12 15:10:11'),(3050,'Pinhais',18,'2019-06-12 15:10:11'),(3051,'Pinhal de São Bento',18,'2019-06-12 15:10:11'),(3052,'Pinhalão',18,'2019-06-12 15:10:11'),(3053,'Pinhão',18,'2019-06-12 15:10:11'),(3054,'Piraí do Sul',18,'2019-06-12 15:10:11'),(3055,'Piraquara',18,'2019-06-12 15:10:11'),(3056,'Pitanga',18,'2019-06-12 15:10:11'),(3057,'Pitangueiras',18,'2019-06-12 15:10:11'),(3058,'Planaltina do Paraná',18,'2019-06-12 15:10:11'),(3059,'Planalto',18,'2019-06-12 15:10:11'),(3060,'Ponta Grossa',18,'2019-06-12 15:10:11'),(3061,'Pontal do Paraná',18,'2019-06-12 15:10:11'),(3062,'Porecatu',18,'2019-06-12 15:10:11'),(3063,'Porto Amazonas',18,'2019-06-12 15:10:11'),(3064,'Porto Barreiro',18,'2019-06-12 15:10:11'),(3065,'Porto Rico',18,'2019-06-12 15:10:11'),(3066,'Porto Vitória',18,'2019-06-12 15:10:11'),(3067,'Prado Ferreira',18,'2019-06-12 15:10:11'),(3068,'Pranchita',18,'2019-06-12 15:10:11'),(3069,'Presidente Castelo Branco',18,'2019-06-12 15:10:11'),(3070,'Primeiro de Maio',18,'2019-06-12 15:10:11'),(3071,'Prudentópolis',18,'2019-06-12 15:10:11'),(3072,'Quarto Centenário',18,'2019-06-12 15:10:11'),(3073,'Quatiguá',18,'2019-06-12 15:10:11'),(3074,'Quatro Barras',18,'2019-06-12 15:10:11'),(3075,'Quatro Pontes',18,'2019-06-12 15:10:11'),(3076,'Quedas do Iguaçu',18,'2019-06-12 15:10:11'),(3077,'Querência do Norte',18,'2019-06-12 15:10:11'),(3078,'Quinta do Sol',18,'2019-06-12 15:10:11'),(3079,'Quitandinha',18,'2019-06-12 15:10:11'),(3080,'Ramilândia',18,'2019-06-12 15:10:11'),(3081,'Rancho Alegre',18,'2019-06-12 15:10:11'),(3082,'Rancho Alegre d`Oeste',18,'2019-06-12 15:10:11'),(3083,'Realeza',18,'2019-06-12 15:10:11'),(3084,'Rebouças',18,'2019-06-12 15:10:11'),(3085,'Renascença',18,'2019-06-12 15:10:11'),(3086,'Reserva',18,'2019-06-12 15:10:11'),(3087,'Reserva do Iguaçu',18,'2019-06-12 15:10:11'),(3088,'Ribeirão Claro',18,'2019-06-12 15:10:11'),(3089,'Ribeirão do Pinhal',18,'2019-06-12 15:10:11'),(3090,'Rio Azul',18,'2019-06-12 15:10:11'),(3091,'Rio Bom',18,'2019-06-12 15:10:11'),(3092,'Rio Bonito do Iguaçu',18,'2019-06-12 15:10:11'),(3093,'Rio Branco do Ivaí',18,'2019-06-12 15:10:11'),(3094,'Rio Branco do Sul',18,'2019-06-12 15:10:11'),(3095,'Rio Negro',18,'2019-06-12 15:10:11'),(3096,'Rolândia',18,'2019-06-12 15:10:11'),(3097,'Roncador',18,'2019-06-12 15:10:11'),(3098,'Rondon',18,'2019-06-12 15:10:11'),(3099,'Rosário do Ivaí',18,'2019-06-12 15:10:11'),(3100,'Sabáudia',18,'2019-06-12 15:10:11'),(3101,'Salgado Filho',18,'2019-06-12 15:10:11'),(3102,'Salto do Itararé',18,'2019-06-12 15:10:11'),(3103,'Salto do Lontra',18,'2019-06-12 15:10:11'),(3104,'Santa Amélia',18,'2019-06-12 15:10:11'),(3105,'Santa Cecília do Pavão',18,'2019-06-12 15:10:11'),(3106,'Santa Cruz de Monte Castelo',18,'2019-06-12 15:10:11'),(3107,'Santa Fé',18,'2019-06-12 15:10:11'),(3108,'Santa Helena',18,'2019-06-12 15:10:11'),(3109,'Santa Inês',18,'2019-06-12 15:10:11'),(3110,'Santa Isabel do Ivaí',18,'2019-06-12 15:10:11'),(3111,'Santa Izabel do Oeste',18,'2019-06-12 15:10:11'),(3112,'Santa Lúcia',18,'2019-06-12 15:10:11'),(3113,'Santa Maria do Oeste',18,'2019-06-12 15:10:11'),(3114,'Santa Mariana',18,'2019-06-12 15:10:11'),(3115,'Santa Mônica',18,'2019-06-12 15:10:11'),(3116,'Santa Tereza do Oeste',18,'2019-06-12 15:10:11'),(3117,'Santa Terezinha de Itaipu',18,'2019-06-12 15:10:11'),(3118,'Santana do Itararé',18,'2019-06-12 15:10:11'),(3119,'Santo Antônio da Platina',18,'2019-06-12 15:10:11'),(3120,'Santo Antônio do Caiuá',18,'2019-06-12 15:10:11'),(3121,'Santo Antônio do Paraíso',18,'2019-06-12 15:10:11'),(3122,'Santo Antônio do Sudoeste',18,'2019-06-12 15:10:11'),(3123,'Santo Inácio',18,'2019-06-12 15:10:11'),(3124,'São Carlos do Ivaí',18,'2019-06-12 15:10:11'),(3125,'São Jerônimo da Serra',18,'2019-06-12 15:10:11'),(3126,'São João',18,'2019-06-12 15:10:11'),(3127,'São João do Caiuá',18,'2019-06-12 15:10:11'),(3128,'São João do Ivaí',18,'2019-06-12 15:10:11'),(3129,'São João do Triunfo',18,'2019-06-12 15:10:11'),(3130,'São Jorge d`Oeste',18,'2019-06-12 15:10:11'),(3131,'São Jorge do Ivaí',18,'2019-06-12 15:10:11'),(3132,'São Jorge do Patrocínio',18,'2019-06-12 15:10:11'),(3133,'São José da Boa Vista',18,'2019-06-12 15:10:11'),(3134,'São José das Palmeiras',18,'2019-06-12 15:10:11'),(3135,'São José dos Pinhais',18,'2019-06-12 15:10:11'),(3136,'São Manoel do Paraná',18,'2019-06-12 15:10:11'),(3137,'São Mateus do Sul',18,'2019-06-12 15:10:11'),(3138,'São Miguel do Iguaçu',18,'2019-06-12 15:10:11'),(3139,'São Pedro do Iguaçu',18,'2019-06-12 15:10:11'),(3140,'São Pedro do Ivaí',18,'2019-06-12 15:10:11'),(3141,'São Pedro do Paraná',18,'2019-06-12 15:10:11'),(3142,'São Sebastião da Amoreira',18,'2019-06-12 15:10:11'),(3143,'São Tomé',18,'2019-06-12 15:10:11'),(3144,'Sapopema',18,'2019-06-12 15:10:11'),(3145,'Sarandi',18,'2019-06-12 15:10:11'),(3146,'Saudade do Iguaçu',18,'2019-06-12 15:10:11'),(3147,'Sengés',18,'2019-06-12 15:10:11'),(3148,'Serranópolis do Iguaçu',18,'2019-06-12 15:10:11'),(3149,'Sertaneja',18,'2019-06-12 15:10:11'),(3150,'Sertanópolis',18,'2019-06-12 15:10:11'),(3151,'Siqueira Campos',18,'2019-06-12 15:10:11'),(3152,'Sulina',18,'2019-06-12 15:10:11'),(3153,'Tamarana',18,'2019-06-12 15:10:11'),(3154,'Tamboara',18,'2019-06-12 15:10:11'),(3155,'Tapejara',18,'2019-06-12 15:10:11'),(3156,'Tapira',18,'2019-06-12 15:10:11'),(3157,'Teixeira Soares',18,'2019-06-12 15:10:11'),(3158,'Telêmaco Borba',18,'2019-06-12 15:10:11'),(3159,'Terra Boa',18,'2019-06-12 15:10:11'),(3160,'Terra Rica',18,'2019-06-12 15:10:11'),(3161,'Terra Roxa',18,'2019-06-12 15:10:11'),(3162,'Tibagi',18,'2019-06-12 15:10:11'),(3163,'Tijucas do Sul',18,'2019-06-12 15:10:11'),(3164,'Toledo',18,'2019-06-12 15:10:11'),(3165,'Tomazina',18,'2019-06-12 15:10:11'),(3166,'Três Barras do Paraná',18,'2019-06-12 15:10:11'),(3167,'Tunas do Paraná',18,'2019-06-12 15:10:11'),(3168,'Tuneiras do Oeste',18,'2019-06-12 15:10:11'),(3169,'Tupãssi',18,'2019-06-12 15:10:11'),(3170,'Turvo',18,'2019-06-12 15:10:11'),(3171,'Ubiratã',18,'2019-06-12 15:10:11'),(3172,'Umuarama',18,'2019-06-12 15:10:11'),(3173,'União da Vitória',18,'2019-06-12 15:10:11'),(3174,'Uniflor',18,'2019-06-12 15:10:11'),(3175,'Uraí',18,'2019-06-12 15:10:11'),(3176,'Ventania',18,'2019-06-12 15:10:11'),(3177,'Vera Cruz do Oeste',18,'2019-06-12 15:10:11'),(3178,'Verê',18,'2019-06-12 15:10:11'),(3179,'Virmond',18,'2019-06-12 15:10:11'),(3180,'Vitorino',18,'2019-06-12 15:10:11'),(3181,'Wenceslau Braz',18,'2019-06-12 15:10:11'),(3182,'Xambrê',18,'2019-06-12 15:10:11'),(3183,'Abreu e Lima',16,'2019-06-12 15:10:11'),(3184,'Afogados da Ingazeira',16,'2019-06-12 15:10:11'),(3185,'Afrânio',16,'2019-06-12 15:10:11'),(3186,'Agrestina',16,'2019-06-12 15:10:11'),(3187,'Água Preta',16,'2019-06-12 15:10:11'),(3188,'Águas Belas',16,'2019-06-12 15:10:11'),(3189,'Alagoinha',16,'2019-06-12 15:10:11'),(3190,'Aliança',16,'2019-06-12 15:10:11'),(3191,'Altinho',16,'2019-06-12 15:10:11'),(3192,'Amaraji',16,'2019-06-12 15:10:11'),(3193,'Angelim',16,'2019-06-12 15:10:11'),(3194,'Araçoiaba',16,'2019-06-12 15:10:11'),(3195,'Araripina',16,'2019-06-12 15:10:11'),(3196,'Arcoverde',16,'2019-06-12 15:10:11'),(3197,'Barra de Guabiraba',16,'2019-06-12 15:10:11'),(3198,'Barreiros',16,'2019-06-12 15:10:11'),(3199,'Belém de Maria',16,'2019-06-12 15:10:11'),(3200,'Belém de São Francisco',16,'2019-06-12 15:10:11'),(3201,'Belo Jardim',16,'2019-06-12 15:10:11'),(3202,'Betânia',16,'2019-06-12 15:10:11'),(3203,'Bezerros',16,'2019-06-12 15:10:11'),(3204,'Bodocó',16,'2019-06-12 15:10:11'),(3205,'Bom Conselho',16,'2019-06-12 15:10:11'),(3206,'Bom Jardim',16,'2019-06-12 15:10:11'),(3207,'Bonito',16,'2019-06-12 15:10:11'),(3208,'Brejão',16,'2019-06-12 15:10:11'),(3209,'Brejinho',16,'2019-06-12 15:10:11'),(3210,'Brejo da Madre de Deus',16,'2019-06-12 15:10:11'),(3211,'Buenos Aires',16,'2019-06-12 15:10:11'),(3212,'Buíque',16,'2019-06-12 15:10:11'),(3213,'Cabo de Santo Agostinho',16,'2019-06-12 15:10:11'),(3214,'Cabrobó',16,'2019-06-12 15:10:11'),(3215,'Cachoeirinha',16,'2019-06-12 15:10:11'),(3216,'Caetés',16,'2019-06-12 15:10:11'),(3217,'Calçado',16,'2019-06-12 15:10:11'),(3218,'Calumbi',16,'2019-06-12 15:10:11'),(3219,'Camaragibe',16,'2019-06-12 15:10:11'),(3220,'Camocim de São Félix',16,'2019-06-12 15:10:11'),(3221,'Camutanga',16,'2019-06-12 15:10:11'),(3222,'Canhotinho',16,'2019-06-12 15:10:11'),(3223,'Capoeiras',16,'2019-06-12 15:10:11'),(3224,'Carnaíba',16,'2019-06-12 15:10:11'),(3225,'Carnaubeira da Penha',16,'2019-06-12 15:10:11'),(3226,'Carpina',16,'2019-06-12 15:10:11'),(3227,'Caruaru',16,'2019-06-12 15:10:11'),(3228,'Casinhas',16,'2019-06-12 15:10:11'),(3229,'Catende',16,'2019-06-12 15:10:11'),(3230,'Cedro',16,'2019-06-12 15:10:11'),(3231,'Chã de Alegria',16,'2019-06-12 15:10:11'),(3232,'Chã Grande',16,'2019-06-12 15:10:11'),(3233,'Condado',16,'2019-06-12 15:10:11'),(3234,'Correntes',16,'2019-06-12 15:10:11'),(3235,'Cortês',16,'2019-06-12 15:10:11'),(3236,'Cumaru',16,'2019-06-12 15:10:11'),(3237,'Cupira',16,'2019-06-12 15:10:11'),(3238,'Custódia',16,'2019-06-12 15:10:11'),(3239,'Dormentes',16,'2019-06-12 15:10:11'),(3240,'Escada',16,'2019-06-12 15:10:11'),(3241,'Exu',16,'2019-06-12 15:10:11'),(3242,'Feira Nova',16,'2019-06-12 15:10:11'),(3243,'Fernando de Noronha',16,'2019-06-12 15:10:11'),(3244,'Ferreiros',16,'2019-06-12 15:10:11'),(3245,'Flores',16,'2019-06-12 15:10:11'),(3246,'Floresta',16,'2019-06-12 15:10:11'),(3247,'Frei Miguelinho',16,'2019-06-12 15:10:11'),(3248,'Gameleira',16,'2019-06-12 15:10:11'),(3249,'Garanhuns',16,'2019-06-12 15:10:11'),(3250,'Glória do Goitá',16,'2019-06-12 15:10:11'),(3251,'Goiana',16,'2019-06-12 15:10:11'),(3252,'Granito',16,'2019-06-12 15:10:11'),(3253,'Gravatá',16,'2019-06-12 15:10:11'),(3254,'Iati',16,'2019-06-12 15:10:11'),(3255,'Ibimirim',16,'2019-06-12 15:10:11'),(3256,'Ibirajuba',16,'2019-06-12 15:10:11'),(3257,'Igarassu',16,'2019-06-12 15:10:11'),(3258,'Iguaraci',16,'2019-06-12 15:10:11'),(3259,'Ilha de Itamaracá',16,'2019-06-12 15:10:11'),(3260,'Inajá',16,'2019-06-12 15:10:11'),(3261,'Ingazeira',16,'2019-06-12 15:10:11'),(3262,'Ipojuca',16,'2019-06-12 15:10:11'),(3263,'Ipubi',16,'2019-06-12 15:10:11'),(3264,'Itacuruba',16,'2019-06-12 15:10:11'),(3265,'Itaíba',16,'2019-06-12 15:10:11'),(3266,'Itambé',16,'2019-06-12 15:10:11'),(3267,'Itapetim',16,'2019-06-12 15:10:11'),(3268,'Itapissuma',16,'2019-06-12 15:10:11'),(3269,'Itaquitinga',16,'2019-06-12 15:10:11'),(3270,'Jaboatão dos Guararapes',16,'2019-06-12 15:10:11'),(3271,'Jaqueira',16,'2019-06-12 15:10:11'),(3272,'Jataúba',16,'2019-06-12 15:10:11'),(3273,'Jatobá',16,'2019-06-12 15:10:11'),(3274,'João Alfredo',16,'2019-06-12 15:10:11'),(3275,'Joaquim Nabuco',16,'2019-06-12 15:10:11'),(3276,'Jucati',16,'2019-06-12 15:10:11'),(3277,'Jupi',16,'2019-06-12 15:10:11'),(3278,'Jurema',16,'2019-06-12 15:10:11'),(3279,'Lagoa do Carro',16,'2019-06-12 15:10:11'),(3280,'Lagoa do Itaenga',16,'2019-06-12 15:10:11'),(3281,'Lagoa do Ouro',16,'2019-06-12 15:10:11'),(3282,'Lagoa dos Gatos',16,'2019-06-12 15:10:11'),(3283,'Lagoa Grande',16,'2019-06-12 15:10:11'),(3284,'Lajedo',16,'2019-06-12 15:10:11'),(3285,'Limoeiro',16,'2019-06-12 15:10:11'),(3286,'Macaparana',16,'2019-06-12 15:10:11'),(3287,'Machados',16,'2019-06-12 15:10:11'),(3288,'Manari',16,'2019-06-12 15:10:11'),(3289,'Maraial',16,'2019-06-12 15:10:11'),(3290,'Mirandiba',16,'2019-06-12 15:10:11'),(3291,'Moreilândia',16,'2019-06-12 15:10:11'),(3292,'Moreno',16,'2019-06-12 15:10:11'),(3293,'Nazaré da Mata',16,'2019-06-12 15:10:11'),(3294,'Olinda',16,'2019-06-12 15:10:11'),(3295,'Orobó',16,'2019-06-12 15:10:11'),(3296,'Orocó',16,'2019-06-12 15:10:11'),(3297,'Ouricuri',16,'2019-06-12 15:10:11'),(3298,'Palmares',16,'2019-06-12 15:10:11'),(3299,'Palmeirina',16,'2019-06-12 15:10:11'),(3300,'Panelas',16,'2019-06-12 15:10:11'),(3301,'Paranatama',16,'2019-06-12 15:10:11'),(3302,'Parnamirim',16,'2019-06-12 15:10:11'),(3303,'Passira',16,'2019-06-12 15:10:11'),(3304,'Paudalho',16,'2019-06-12 15:10:11'),(3305,'Paulista',16,'2019-06-12 15:10:11'),(3306,'Pedra',16,'2019-06-12 15:10:11'),(3307,'Pesqueira',16,'2019-06-12 15:10:11'),(3308,'Petrolândia',16,'2019-06-12 15:10:11'),(3309,'Petrolina',16,'2019-06-12 15:10:11'),(3310,'Poção',16,'2019-06-12 15:10:11'),(3311,'Pombos',16,'2019-06-12 15:10:11'),(3312,'Primavera',16,'2019-06-12 15:10:11'),(3313,'Quipapá',16,'2019-06-12 15:10:11'),(3314,'Quixaba',16,'2019-06-12 15:10:11'),(3315,'Recife',16,'2019-06-12 15:10:11'),(3316,'Riacho das Almas',16,'2019-06-12 15:10:11'),(3317,'Ribeirão',16,'2019-06-12 15:10:11'),(3318,'Rio Formoso',16,'2019-06-12 15:10:11'),(3319,'Sairé',16,'2019-06-12 15:10:11'),(3320,'Salgadinho',16,'2019-06-12 15:10:11'),(3321,'Salgueiro',16,'2019-06-12 15:10:11'),(3322,'Saloá',16,'2019-06-12 15:10:11'),(3323,'Sanharó',16,'2019-06-12 15:10:11'),(3324,'Santa Cruz',16,'2019-06-12 15:10:11'),(3325,'Santa Cruz da Baixa Verde',16,'2019-06-12 15:10:11'),(3326,'Santa Cruz do Capibaribe',16,'2019-06-12 15:10:11'),(3327,'Santa Filomena',16,'2019-06-12 15:10:11'),(3328,'Santa Maria da Boa Vista',16,'2019-06-12 15:10:11'),(3329,'Santa Maria do Cambucá',16,'2019-06-12 15:10:11'),(3330,'Santa Terezinha',16,'2019-06-12 15:10:11'),(3331,'São Benedito do Sul',16,'2019-06-12 15:10:11'),(3332,'São Bento do Una',16,'2019-06-12 15:10:11'),(3333,'São Caitano',16,'2019-06-12 15:10:11'),(3334,'São João',16,'2019-06-12 15:10:11'),(3335,'São Joaquim do Monte',16,'2019-06-12 15:10:11'),(3336,'São José da Coroa Grande',16,'2019-06-12 15:10:11'),(3337,'São José do Belmonte',16,'2019-06-12 15:10:11'),(3338,'São José do Egito',16,'2019-06-12 15:10:11'),(3339,'São Lourenço da Mata',16,'2019-06-12 15:10:11'),(3340,'São Vicente Ferrer',16,'2019-06-12 15:10:11'),(3341,'Serra Talhada',16,'2019-06-12 15:10:11'),(3342,'Serrita',16,'2019-06-12 15:10:11'),(3343,'Sertânia',16,'2019-06-12 15:10:11'),(3344,'Sirinhaém',16,'2019-06-12 15:10:11'),(3345,'Solidão',16,'2019-06-12 15:10:11'),(3346,'Surubim',16,'2019-06-12 15:10:11'),(3347,'Tabira',16,'2019-06-12 15:10:11'),(3348,'Tacaimbó',16,'2019-06-12 15:10:11'),(3349,'Tacaratu',16,'2019-06-12 15:10:11'),(3350,'Tamandaré',16,'2019-06-12 15:10:11'),(3351,'Taquaritinga do Norte',16,'2019-06-12 15:10:11'),(3352,'Terezinha',16,'2019-06-12 15:10:11'),(3353,'Terra Nova',16,'2019-06-12 15:10:11'),(3354,'Timbaúba',16,'2019-06-12 15:10:11'),(3355,'Toritama',16,'2019-06-12 15:10:11'),(3356,'Tracunhaém',16,'2019-06-12 15:10:11'),(3357,'Trindade',16,'2019-06-12 15:10:11'),(3358,'Triunfo',16,'2019-06-12 15:10:11'),(3359,'Tupanatinga',16,'2019-06-12 15:10:11'),(3360,'Tuparetama',16,'2019-06-12 15:10:11'),(3361,'Venturosa',16,'2019-06-12 15:10:11'),(3362,'Verdejante',16,'2019-06-12 15:10:11'),(3363,'Vertente do Lério',16,'2019-06-12 15:10:11'),(3364,'Vertentes',16,'2019-06-12 15:10:11'),(3365,'Vicência',16,'2019-06-12 15:10:11'),(3366,'Vitória de Santo Antão',16,'2019-06-12 15:10:11'),(3367,'Xexéu',16,'2019-06-12 15:10:11'),(3368,'Acauã',17,'2019-06-12 15:10:11'),(3369,'Agricolândia',17,'2019-06-12 15:10:11'),(3370,'Água Branca',17,'2019-06-12 15:10:11'),(3371,'Alagoinha do Piauí',17,'2019-06-12 15:10:11'),(3372,'Alegrete do Piauí',17,'2019-06-12 15:10:11'),(3373,'Alto Longá',17,'2019-06-12 15:10:11'),(3374,'Altos',17,'2019-06-12 15:10:11'),(3375,'Alvorada do Gurguéia',17,'2019-06-12 15:10:11'),(3376,'Amarante',17,'2019-06-12 15:10:11'),(3377,'Angical do Piauí',17,'2019-06-12 15:10:11'),(3378,'Anísio de Abreu',17,'2019-06-12 15:10:11'),(3379,'Antônio Almeida',17,'2019-06-12 15:10:11'),(3380,'Aroazes',17,'2019-06-12 15:10:11'),(3381,'Aroeiras do Itaim',17,'2019-06-12 15:10:11'),(3382,'Arraial',17,'2019-06-12 15:10:11'),(3383,'Assunção do Piauí',17,'2019-06-12 15:10:11'),(3384,'Avelino Lopes',17,'2019-06-12 15:10:11'),(3385,'Baixa Grande do Ribeiro',17,'2019-06-12 15:10:11'),(3386,'Barra d`Alcântara',17,'2019-06-12 15:10:11'),(3387,'Barras',17,'2019-06-12 15:10:11'),(3388,'Barreiras do Piauí',17,'2019-06-12 15:10:11'),(3389,'Barro Duro',17,'2019-06-12 15:10:11'),(3390,'Batalha',17,'2019-06-12 15:10:11'),(3391,'Bela Vista do Piauí',17,'2019-06-12 15:10:11'),(3392,'Belém do Piauí',17,'2019-06-12 15:10:11'),(3393,'Beneditinos',17,'2019-06-12 15:10:11'),(3394,'Bertolínia',17,'2019-06-12 15:10:11'),(3395,'Betânia do Piauí',17,'2019-06-12 15:10:11'),(3396,'Boa Hora',17,'2019-06-12 15:10:11'),(3397,'Bocaina',17,'2019-06-12 15:10:11'),(3398,'Bom Jesus',17,'2019-06-12 15:10:11'),(3399,'Bom Princípio do Piauí',17,'2019-06-12 15:10:11'),(3400,'Bonfim do Piauí',17,'2019-06-12 15:10:11'),(3401,'Boqueirão do Piauí',17,'2019-06-12 15:10:11'),(3402,'Brasileira',17,'2019-06-12 15:10:11'),(3403,'Brejo do Piauí',17,'2019-06-12 15:10:11'),(3404,'Buriti dos Lopes',17,'2019-06-12 15:10:11'),(3405,'Buriti dos Montes',17,'2019-06-12 15:10:11'),(3406,'Cabeceiras do Piauí',17,'2019-06-12 15:10:11'),(3407,'Cajazeiras do Piauí',17,'2019-06-12 15:10:11'),(3408,'Cajueiro da Praia',17,'2019-06-12 15:10:11'),(3409,'Caldeirão Grande do Piauí',17,'2019-06-12 15:10:11'),(3410,'Campinas do Piauí',17,'2019-06-12 15:10:11'),(3411,'Campo Alegre do Fidalgo',17,'2019-06-12 15:10:11'),(3412,'Campo Grande do Piauí',17,'2019-06-12 15:10:11'),(3413,'Campo Largo do Piauí',17,'2019-06-12 15:10:11'),(3414,'Campo Maior',17,'2019-06-12 15:10:11'),(3415,'Canavieira',17,'2019-06-12 15:10:11'),(3416,'Canto do Buriti',17,'2019-06-12 15:10:11'),(3417,'Capitão de Campos',17,'2019-06-12 15:10:11'),(3418,'Capitão Gervásio Oliveira',17,'2019-06-12 15:10:11'),(3419,'Caracol',17,'2019-06-12 15:10:11'),(3420,'Caraúbas do Piauí',17,'2019-06-12 15:10:11'),(3421,'Caridade do Piauí',17,'2019-06-12 15:10:11'),(3422,'Castelo do Piauí',17,'2019-06-12 15:10:11'),(3423,'Caxingó',17,'2019-06-12 15:10:11'),(3424,'Cocal',17,'2019-06-12 15:10:11'),(3425,'Cocal de Telha',17,'2019-06-12 15:10:11'),(3426,'Cocal dos Alves',17,'2019-06-12 15:10:11'),(3427,'Coivaras',17,'2019-06-12 15:10:11'),(3428,'Colônia do Gurguéia',17,'2019-06-12 15:10:11'),(3429,'Colônia do Piauí',17,'2019-06-12 15:10:11'),(3430,'Conceição do Canindé',17,'2019-06-12 15:10:11'),(3431,'Coronel José Dias',17,'2019-06-12 15:10:11'),(3432,'Corrente',17,'2019-06-12 15:10:11'),(3433,'Cristalândia do Piauí',17,'2019-06-12 15:10:11'),(3434,'Cristino Castro',17,'2019-06-12 15:10:11'),(3435,'Curimatá',17,'2019-06-12 15:10:11'),(3436,'Currais',17,'2019-06-12 15:10:11'),(3437,'Curral Novo do Piauí',17,'2019-06-12 15:10:11'),(3438,'Curralinhos',17,'2019-06-12 15:10:11'),(3439,'Demerval Lobão',17,'2019-06-12 15:10:11'),(3440,'Dirceu Arcoverde',17,'2019-06-12 15:10:11'),(3441,'Dom Expedito Lopes',17,'2019-06-12 15:10:11'),(3442,'Dom Inocêncio',17,'2019-06-12 15:10:11'),(3443,'Domingos Mourão',17,'2019-06-12 15:10:11'),(3444,'Elesbão Veloso',17,'2019-06-12 15:10:11'),(3445,'Eliseu Martins',17,'2019-06-12 15:10:11'),(3446,'Esperantina',17,'2019-06-12 15:10:11'),(3447,'Fartura do Piauí',17,'2019-06-12 15:10:11'),(3448,'Flores do Piauí',17,'2019-06-12 15:10:11'),(3449,'Floresta do Piauí',17,'2019-06-12 15:10:11'),(3450,'Floriano',17,'2019-06-12 15:10:11'),(3451,'Francinópolis',17,'2019-06-12 15:10:11'),(3452,'Francisco Ayres',17,'2019-06-12 15:10:11'),(3453,'Francisco Macedo',17,'2019-06-12 15:10:11'),(3454,'Francisco Santos',17,'2019-06-12 15:10:11'),(3455,'Fronteiras',17,'2019-06-12 15:10:11'),(3456,'Geminiano',17,'2019-06-12 15:10:11'),(3457,'Gilbués',17,'2019-06-12 15:10:11'),(3458,'Guadalupe',17,'2019-06-12 15:10:11'),(3459,'Guaribas',17,'2019-06-12 15:10:11'),(3460,'Hugo Napoleão',17,'2019-06-12 15:10:11'),(3461,'Ilha Grande',17,'2019-06-12 15:10:11'),(3462,'Inhuma',17,'2019-06-12 15:10:11'),(3463,'Ipiranga do Piauí',17,'2019-06-12 15:10:11'),(3464,'Isaías Coelho',17,'2019-06-12 15:10:11'),(3465,'Itainópolis',17,'2019-06-12 15:10:11'),(3466,'Itaueira',17,'2019-06-12 15:10:11'),(3467,'Jacobina do Piauí',17,'2019-06-12 15:10:11'),(3468,'Jaicós',17,'2019-06-12 15:10:11'),(3469,'Jardim do Mulato',17,'2019-06-12 15:10:11'),(3470,'Jatobá do Piauí',17,'2019-06-12 15:10:11'),(3471,'Jerumenha',17,'2019-06-12 15:10:11'),(3472,'João Costa',17,'2019-06-12 15:10:11'),(3473,'Joaquim Pires',17,'2019-06-12 15:10:11'),(3474,'Joca Marques',17,'2019-06-12 15:10:11'),(3475,'José de Freitas',17,'2019-06-12 15:10:11'),(3476,'Juazeiro do Piauí',17,'2019-06-12 15:10:11'),(3477,'Júlio Borges',17,'2019-06-12 15:10:11'),(3478,'Jurema',17,'2019-06-12 15:10:11'),(3479,'Lagoa Alegre',17,'2019-06-12 15:10:11'),(3480,'Lagoa de São Francisco',17,'2019-06-12 15:10:11'),(3481,'Lagoa do Barro do Piauí',17,'2019-06-12 15:10:11'),(3482,'Lagoa do Piauí',17,'2019-06-12 15:10:11'),(3483,'Lagoa do Sítio',17,'2019-06-12 15:10:11'),(3484,'Lagoinha do Piauí',17,'2019-06-12 15:10:11'),(3485,'Landri Sales',17,'2019-06-12 15:10:11'),(3486,'Luís Correia',17,'2019-06-12 15:10:11'),(3487,'Luzilândia',17,'2019-06-12 15:10:11'),(3488,'Madeiro',17,'2019-06-12 15:10:11'),(3489,'Manoel Emídio',17,'2019-06-12 15:10:11'),(3490,'Marcolândia',17,'2019-06-12 15:10:11'),(3491,'Marcos Parente',17,'2019-06-12 15:10:11'),(3492,'Massapê do Piauí',17,'2019-06-12 15:10:11'),(3493,'Matias Olímpio',17,'2019-06-12 15:10:11'),(3494,'Miguel Alves',17,'2019-06-12 15:10:11'),(3495,'Miguel Leão',17,'2019-06-12 15:10:11'),(3496,'Milton Brandão',17,'2019-06-12 15:10:11'),(3497,'Monsenhor Gil',17,'2019-06-12 15:10:11'),(3498,'Monsenhor Hipólito',17,'2019-06-12 15:10:11'),(3499,'Monte Alegre do Piauí',17,'2019-06-12 15:10:11'),(3500,'Morro Cabeça no Tempo',17,'2019-06-12 15:10:11'),(3501,'Morro do Chapéu do Piauí',17,'2019-06-12 15:10:11'),(3502,'Murici dos Portelas',17,'2019-06-12 15:10:11'),(3503,'Nazaré do Piauí',17,'2019-06-12 15:10:11'),(3504,'Nossa Senhora de Nazaré',17,'2019-06-12 15:10:11'),(3505,'Nossa Senhora dos Remédios',17,'2019-06-12 15:10:11'),(3506,'Nova Santa Rita',17,'2019-06-12 15:10:11'),(3507,'Novo Oriente do Piauí',17,'2019-06-12 15:10:11'),(3508,'Novo Santo Antônio',17,'2019-06-12 15:10:11'),(3509,'Oeiras',17,'2019-06-12 15:10:11'),(3510,'Olho d`Água do Piauí',17,'2019-06-12 15:10:11'),(3511,'Padre Marcos',17,'2019-06-12 15:10:11'),(3512,'Paes Landim',17,'2019-06-12 15:10:11'),(3513,'Pajeú do Piauí',17,'2019-06-12 15:10:11'),(3514,'Palmeira do Piauí',17,'2019-06-12 15:10:11'),(3515,'Palmeirais',17,'2019-06-12 15:10:11'),(3516,'Paquetá',17,'2019-06-12 15:10:11'),(3517,'Parnaguá',17,'2019-06-12 15:10:11'),(3518,'Parnaíba',17,'2019-06-12 15:10:11'),(3519,'Passagem Franca do Piauí',17,'2019-06-12 15:10:11'),(3520,'Patos do Piauí',17,'2019-06-12 15:10:11'),(3521,'Pau d`Arco do Piauí',17,'2019-06-12 15:10:11'),(3522,'Paulistana',17,'2019-06-12 15:10:11'),(3523,'Pavussu',17,'2019-06-12 15:10:11'),(3524,'Pedro II',17,'2019-06-12 15:10:11'),(3525,'Pedro Laurentino',17,'2019-06-12 15:10:11'),(3526,'Picos',17,'2019-06-12 15:10:11'),(3527,'Pimenteiras',17,'2019-06-12 15:10:11'),(3528,'Pio IX',17,'2019-06-12 15:10:11'),(3529,'Piracuruca',17,'2019-06-12 15:10:11'),(3530,'Piripiri',17,'2019-06-12 15:10:11'),(3531,'Porto',17,'2019-06-12 15:10:11'),(3532,'Porto Alegre do Piauí',17,'2019-06-12 15:10:11'),(3533,'Prata do Piauí',17,'2019-06-12 15:10:11'),(3534,'Queimada Nova',17,'2019-06-12 15:10:11'),(3535,'Redenção do Gurguéia',17,'2019-06-12 15:10:11'),(3536,'Regeneração',17,'2019-06-12 15:10:11'),(3537,'Riacho Frio',17,'2019-06-12 15:10:11'),(3538,'Ribeira do Piauí',17,'2019-06-12 15:10:11'),(3539,'Ribeiro Gonçalves',17,'2019-06-12 15:10:11'),(3540,'Rio Grande do Piauí',17,'2019-06-12 15:10:11'),(3541,'Santa Cruz do Piauí',17,'2019-06-12 15:10:11'),(3542,'Santa Cruz dos Milagres',17,'2019-06-12 15:10:11'),(3543,'Santa Filomena',17,'2019-06-12 15:10:11'),(3544,'Santa Luz',17,'2019-06-12 15:10:11'),(3545,'Santa Rosa do Piauí',17,'2019-06-12 15:10:11'),(3546,'Santana do Piauí',17,'2019-06-12 15:10:11'),(3547,'Santo Antônio de Lisboa',17,'2019-06-12 15:10:11'),(3548,'Santo Antônio dos Milagres',17,'2019-06-12 15:10:11'),(3549,'Santo Inácio do Piauí',17,'2019-06-12 15:10:11'),(3550,'São Braz do Piauí',17,'2019-06-12 15:10:11'),(3551,'São Félix do Piauí',17,'2019-06-12 15:10:11'),(3552,'São Francisco de Assis do Piauí',17,'2019-06-12 15:10:11'),(3553,'São Francisco do Piauí',17,'2019-06-12 15:10:11'),(3554,'São Gonçalo do Gurguéia',17,'2019-06-12 15:10:11'),(3555,'São Gonçalo do Piauí',17,'2019-06-12 15:10:11'),(3556,'São João da Canabrava',17,'2019-06-12 15:10:11'),(3557,'São João da Fronteira',17,'2019-06-12 15:10:11'),(3558,'São João da Serra',17,'2019-06-12 15:10:11'),(3559,'São João da Varjota',17,'2019-06-12 15:10:11'),(3560,'São João do Arraial',17,'2019-06-12 15:10:11'),(3561,'São João do Piauí',17,'2019-06-12 15:10:11'),(3562,'São José do Divino',17,'2019-06-12 15:10:11'),(3563,'São José do Peixe',17,'2019-06-12 15:10:11'),(3564,'São José do Piauí',17,'2019-06-12 15:10:11'),(3565,'São Julião',17,'2019-06-12 15:10:11'),(3566,'São Lourenço do Piauí',17,'2019-06-12 15:10:11'),(3567,'São Luis do Piauí',17,'2019-06-12 15:10:11'),(3568,'São Miguel da Baixa Grande',17,'2019-06-12 15:10:11'),(3569,'São Miguel do Fidalgo',17,'2019-06-12 15:10:11'),(3570,'São Miguel do Tapuio',17,'2019-06-12 15:10:11'),(3571,'São Pedro do Piauí',17,'2019-06-12 15:10:11'),(3572,'São Raimundo Nonato',17,'2019-06-12 15:10:11'),(3573,'Sebastião Barros',17,'2019-06-12 15:10:11'),(3574,'Sebastião Leal',17,'2019-06-12 15:10:11'),(3575,'Sigefredo Pacheco',17,'2019-06-12 15:10:11'),(3576,'Simões',17,'2019-06-12 15:10:11'),(3577,'Simplício Mendes',17,'2019-06-12 15:10:11'),(3578,'Socorro do Piauí',17,'2019-06-12 15:10:11'),(3579,'Sussuapara',17,'2019-06-12 15:10:11'),(3580,'Tamboril do Piauí',17,'2019-06-12 15:10:11'),(3581,'Tanque do Piauí',17,'2019-06-12 15:10:11'),(3582,'Teresina',17,'2019-06-12 15:10:11'),(3583,'União',17,'2019-06-12 15:10:11'),(3584,'Uruçuí',17,'2019-06-12 15:10:11'),(3585,'Valença do Piauí',17,'2019-06-12 15:10:11'),(3586,'Várzea Branca',17,'2019-06-12 15:10:11'),(3587,'Várzea Grande',17,'2019-06-12 15:10:11'),(3588,'Vera Mendes',17,'2019-06-12 15:10:11'),(3589,'Vila Nova do Piauí',17,'2019-06-12 15:10:11'),(3590,'Wall Ferraz',17,'2019-06-12 15:10:11'),(3591,'Angra dos Reis',19,'2019-06-12 15:10:11'),(3592,'Aperibé',19,'2019-06-12 15:10:11'),(3593,'Araruama',19,'2019-06-12 15:10:11'),(3594,'Areal',19,'2019-06-12 15:10:11'),(3595,'Armação dos Búzios',19,'2019-06-12 15:10:11'),(3596,'Arraial do Cabo',19,'2019-06-12 15:10:11'),(3597,'Barra do Piraí',19,'2019-06-12 15:10:11'),(3598,'Barra Mansa',19,'2019-06-12 15:10:11'),(3599,'Belford Roxo',19,'2019-06-12 15:10:11'),(3600,'Bom Jardim',19,'2019-06-12 15:10:11'),(3601,'Bom Jesus do Itabapoana',19,'2019-06-12 15:10:11'),(3602,'Cabo Frio',19,'2019-06-12 15:10:11'),(3603,'Cachoeiras de Macacu',19,'2019-06-12 15:10:11'),(3604,'Cambuci',19,'2019-06-12 15:10:11'),(3605,'Campos dos Goytacazes',19,'2019-06-12 15:10:11'),(3606,'Cantagalo',19,'2019-06-12 15:10:11'),(3607,'Carapebus',19,'2019-06-12 15:10:11'),(3608,'Cardoso Moreira',19,'2019-06-12 15:10:11'),(3609,'Carmo',19,'2019-06-12 15:10:11'),(3610,'Casimiro de Abreu',19,'2019-06-12 15:10:11'),(3611,'Comendador Levy Gasparian',19,'2019-06-12 15:10:11'),(3612,'Conceição de Macabu',19,'2019-06-12 15:10:11'),(3613,'Cordeiro',19,'2019-06-12 15:10:11'),(3614,'Duas Barras',19,'2019-06-12 15:10:11'),(3615,'Duque de Caxias',19,'2019-06-12 15:10:11'),(3616,'Engenheiro Paulo de Frontin',19,'2019-06-12 15:10:11'),(3617,'Guapimirim',19,'2019-06-12 15:10:11'),(3618,'Iguaba Grande',19,'2019-06-12 15:10:11'),(3619,'Itaboraí',19,'2019-06-12 15:10:11'),(3620,'Itaguaí',19,'2019-06-12 15:10:11'),(3621,'Italva',19,'2019-06-12 15:10:11'),(3622,'Itaocara',19,'2019-06-12 15:10:11'),(3623,'Itaperuna',19,'2019-06-12 15:10:11'),(3624,'Itatiaia',19,'2019-06-12 15:10:11'),(3625,'Japeri',19,'2019-06-12 15:10:11'),(3626,'Laje do Muriaé',19,'2019-06-12 15:10:11'),(3627,'Macaé',19,'2019-06-12 15:10:11'),(3628,'Macuco',19,'2019-06-12 15:10:11'),(3629,'Magé',19,'2019-06-12 15:10:11'),(3630,'Mangaratiba',19,'2019-06-12 15:10:11'),(3631,'Maricá',19,'2019-06-12 15:10:11'),(3632,'Mendes',19,'2019-06-12 15:10:11'),(3633,'Mesquita',19,'2019-06-12 15:10:11'),(3634,'Miguel Pereira',19,'2019-06-12 15:10:11'),(3635,'Miracema',19,'2019-06-12 15:10:11'),(3636,'Natividade',19,'2019-06-12 15:10:11'),(3637,'Nilópolis',19,'2019-06-12 15:10:11'),(3638,'Niterói',19,'2019-06-12 15:10:11'),(3639,'Nova Friburgo',19,'2019-06-12 15:10:11'),(3640,'Nova Iguaçu',19,'2019-06-12 15:10:11'),(3641,'Paracambi',19,'2019-06-12 15:10:11'),(3642,'Paraíba do Sul',19,'2019-06-12 15:10:11'),(3643,'Parati',19,'2019-06-12 15:10:11'),(3644,'Paty do Alferes',19,'2019-06-12 15:10:11'),(3645,'Petrópolis',19,'2019-06-12 15:10:11'),(3646,'Pinheiral',19,'2019-06-12 15:10:11'),(3647,'Piraí',19,'2019-06-12 15:10:11'),(3648,'Porciúncula',19,'2019-06-12 15:10:11'),(3649,'Porto Real',19,'2019-06-12 15:10:11'),(3650,'Quatis',19,'2019-06-12 15:10:11'),(3651,'Queimados',19,'2019-06-12 15:10:11'),(3652,'Quissamã',19,'2019-06-12 15:10:11'),(3653,'Resende',19,'2019-06-12 15:10:11'),(3654,'Rio Bonito',19,'2019-06-12 15:10:11'),(3655,'Rio Claro',19,'2019-06-12 15:10:11'),(3656,'Rio das Flores',19,'2019-06-12 15:10:11'),(3657,'Rio das Ostras',19,'2019-06-12 15:10:11'),(3658,'Rio de Janeiro',19,'2019-06-12 15:10:11'),(3659,'Santa Maria Madalena',19,'2019-06-12 15:10:11'),(3660,'Santo Antônio de Pádua',19,'2019-06-12 15:10:11'),(3661,'São Fidélis',19,'2019-06-12 15:10:11'),(3662,'São Francisco de Itabapoana',19,'2019-06-12 15:10:11'),(3663,'São Gonçalo',19,'2019-06-12 15:10:11'),(3664,'São João da Barra',19,'2019-06-12 15:10:11'),(3665,'São João de Meriti',19,'2019-06-12 15:10:11'),(3666,'São José de Ubá',19,'2019-06-12 15:10:11'),(3667,'São José do Vale do Rio Pret',19,'2019-06-12 15:10:11'),(3668,'São Pedro da Aldeia',19,'2019-06-12 15:10:11'),(3669,'São Sebastião do Alto',19,'2019-06-12 15:10:11'),(3670,'Sapucaia',19,'2019-06-12 15:10:11'),(3671,'Saquarema',19,'2019-06-12 15:10:11'),(3672,'Seropédica',19,'2019-06-12 15:10:11'),(3673,'Silva Jardim',19,'2019-06-12 15:10:11'),(3674,'Sumidouro',19,'2019-06-12 15:10:11'),(3675,'Tanguá',19,'2019-06-12 15:10:11'),(3676,'Teresópolis',19,'2019-06-12 15:10:11'),(3677,'Trajano de Morais',19,'2019-06-12 15:10:11'),(3678,'Três Rios',19,'2019-06-12 15:10:11'),(3679,'Valença',19,'2019-06-12 15:10:11'),(3680,'Varre-Sai',19,'2019-06-12 15:10:11'),(3681,'Vassouras',19,'2019-06-12 15:10:11'),(3682,'Volta Redonda',19,'2019-06-12 15:10:11'),(3683,'Acari',20,'2019-06-12 15:10:11'),(3684,'Açu',20,'2019-06-12 15:10:11'),(3685,'Afonso Bezerra',20,'2019-06-12 15:10:11'),(3686,'Água Nova',20,'2019-06-12 15:10:11'),(3687,'Alexandria',20,'2019-06-12 15:10:11'),(3688,'Almino Afonso',20,'2019-06-12 15:10:11'),(3689,'Alto do Rodrigues',20,'2019-06-12 15:10:11'),(3690,'Angicos',20,'2019-06-12 15:10:11'),(3691,'Antônio Martins',20,'2019-06-12 15:10:11'),(3692,'Apodi',20,'2019-06-12 15:10:11'),(3693,'Areia Branca',20,'2019-06-12 15:10:11'),(3694,'Arês',20,'2019-06-12 15:10:11'),(3695,'Augusto Severo',20,'2019-06-12 15:10:11'),(3696,'Baía Formosa',20,'2019-06-12 15:10:11'),(3697,'Baraúna',20,'2019-06-12 15:10:11'),(3698,'Barcelona',20,'2019-06-12 15:10:11'),(3699,'Bento Fernandes',20,'2019-06-12 15:10:11'),(3700,'Bodó',20,'2019-06-12 15:10:11'),(3701,'Bom Jesus',20,'2019-06-12 15:10:11'),(3702,'Brejinho',20,'2019-06-12 15:10:11'),(3703,'Caiçara do Norte',20,'2019-06-12 15:10:11'),(3704,'Caiçara do Rio do Vento',20,'2019-06-12 15:10:11'),(3705,'Caicó',20,'2019-06-12 15:10:11'),(3706,'Campo Redondo',20,'2019-06-12 15:10:11'),(3707,'Canguaretama',20,'2019-06-12 15:10:11'),(3708,'Caraúbas',20,'2019-06-12 15:10:11'),(3709,'Carnaúba dos Dantas',20,'2019-06-12 15:10:11'),(3710,'Carnaubais',20,'2019-06-12 15:10:11'),(3711,'Ceará-Mirim',20,'2019-06-12 15:10:11'),(3712,'Cerro Corá',20,'2019-06-12 15:10:11'),(3713,'Coronel Ezequiel',20,'2019-06-12 15:10:11'),(3714,'Coronel João Pessoa',20,'2019-06-12 15:10:11'),(3715,'Cruzeta',20,'2019-06-12 15:10:11'),(3716,'Currais Novos',20,'2019-06-12 15:10:11'),(3717,'Doutor Severiano',20,'2019-06-12 15:10:11'),(3718,'Encanto',20,'2019-06-12 15:10:11'),(3719,'Equador',20,'2019-06-12 15:10:11'),(3720,'Espírito Santo',20,'2019-06-12 15:10:11'),(3721,'Extremoz',20,'2019-06-12 15:10:11'),(3722,'Felipe Guerra',20,'2019-06-12 15:10:11'),(3723,'Fernando Pedroza',20,'2019-06-12 15:10:11'),(3724,'Florânia',20,'2019-06-12 15:10:11'),(3725,'Francisco Dantas',20,'2019-06-12 15:10:11'),(3726,'Frutuoso Gomes',20,'2019-06-12 15:10:11'),(3727,'Galinhos',20,'2019-06-12 15:10:11'),(3728,'Goianinha',20,'2019-06-12 15:10:11'),(3729,'Governador Dix-Sept Rosado',20,'2019-06-12 15:10:11'),(3730,'Grossos',20,'2019-06-12 15:10:11'),(3731,'Guamaré',20,'2019-06-12 15:10:11'),(3732,'Ielmo Marinho',20,'2019-06-12 15:10:11'),(3733,'Ipanguaçu',20,'2019-06-12 15:10:11'),(3734,'Ipueira',20,'2019-06-12 15:10:11'),(3735,'Itajá',20,'2019-06-12 15:10:11'),(3736,'Itaú',20,'2019-06-12 15:10:11'),(3737,'Jaçanã',20,'2019-06-12 15:10:11'),(3738,'Jandaíra',20,'2019-06-12 15:10:11'),(3739,'Janduís',20,'2019-06-12 15:10:11'),(3740,'Januário Cicco',20,'2019-06-12 15:10:11'),(3741,'Japi',20,'2019-06-12 15:10:11'),(3742,'Jardim de Angicos',20,'2019-06-12 15:10:11'),(3743,'Jardim de Piranhas',20,'2019-06-12 15:10:11'),(3744,'Jardim do Seridó',20,'2019-06-12 15:10:11'),(3745,'João Câmara',20,'2019-06-12 15:10:11'),(3746,'João Dias',20,'2019-06-12 15:10:11'),(3747,'José da Penha',20,'2019-06-12 15:10:11'),(3748,'Jucurutu',20,'2019-06-12 15:10:11'),(3749,'Jundiá',20,'2019-06-12 15:10:11'),(3750,'Lagoa d`Anta',20,'2019-06-12 15:10:11'),(3751,'Lagoa de Pedras',20,'2019-06-12 15:10:11'),(3752,'Lagoa de Velhos',20,'2019-06-12 15:10:11'),(3753,'Lagoa Nova',20,'2019-06-12 15:10:11'),(3754,'Lagoa Salgada',20,'2019-06-12 15:10:11'),(3755,'Lajes',20,'2019-06-12 15:10:11'),(3756,'Lajes Pintadas',20,'2019-06-12 15:10:11'),(3757,'Lucrécia',20,'2019-06-12 15:10:11'),(3758,'Luís Gomes',20,'2019-06-12 15:10:11'),(3759,'Macaíba',20,'2019-06-12 15:10:11'),(3760,'Macau',20,'2019-06-12 15:10:11'),(3761,'Major Sales',20,'2019-06-12 15:10:11'),(3762,'Marcelino Vieira',20,'2019-06-12 15:10:11'),(3763,'Martins',20,'2019-06-12 15:10:11'),(3764,'Maxaranguape',20,'2019-06-12 15:10:11'),(3765,'Messias Targino',20,'2019-06-12 15:10:11'),(3766,'Montanhas',20,'2019-06-12 15:10:11'),(3767,'Monte Alegre',20,'2019-06-12 15:10:11'),(3768,'Monte das Gameleiras',20,'2019-06-12 15:10:11'),(3769,'Mossoró',20,'2019-06-12 15:10:11'),(3770,'Natal',20,'2019-06-12 15:10:11'),(3771,'Nísia Floresta',20,'2019-06-12 15:10:11'),(3772,'Nova Cruz',20,'2019-06-12 15:10:11'),(3773,'Olho-d`Água do Borges',20,'2019-06-12 15:10:11'),(3774,'Ouro Branco',20,'2019-06-12 15:10:11'),(3775,'Paraná',20,'2019-06-12 15:10:11'),(3776,'Paraú',20,'2019-06-12 15:10:11'),(3777,'Parazinho',20,'2019-06-12 15:10:11'),(3778,'Parelhas',20,'2019-06-12 15:10:11'),(3779,'Parnamirim',20,'2019-06-12 15:10:11'),(3780,'Passa e Fica',20,'2019-06-12 15:10:11'),(3781,'Passagem',20,'2019-06-12 15:10:11'),(3782,'Patu',20,'2019-06-12 15:10:11'),(3783,'Pau dos Ferros',20,'2019-06-12 15:10:11'),(3784,'Pedra Grande',20,'2019-06-12 15:10:11'),(3785,'Pedra Preta',20,'2019-06-12 15:10:11'),(3786,'Pedro Avelino',20,'2019-06-12 15:10:11'),(3787,'Pedro Velho',20,'2019-06-12 15:10:11'),(3788,'Pendências',20,'2019-06-12 15:10:11'),(3789,'Pilões',20,'2019-06-12 15:10:11'),(3790,'Poço Branco',20,'2019-06-12 15:10:11'),(3791,'Portalegre',20,'2019-06-12 15:10:11'),(3792,'Porto do Mangue',20,'2019-06-12 15:10:11'),(3793,'Presidente Juscelino',20,'2019-06-12 15:10:11'),(3794,'Pureza',20,'2019-06-12 15:10:11'),(3795,'Rafael Fernandes',20,'2019-06-12 15:10:11'),(3796,'Rafael Godeiro',20,'2019-06-12 15:10:11'),(3797,'Riacho da Cruz',20,'2019-06-12 15:10:11'),(3798,'Riacho de Santana',20,'2019-06-12 15:10:11'),(3799,'Riachuelo',20,'2019-06-12 15:10:11'),(3800,'Rio do Fogo',20,'2019-06-12 15:10:11'),(3801,'Rodolfo Fernandes',20,'2019-06-12 15:10:11'),(3802,'Ruy Barbosa',20,'2019-06-12 15:10:11'),(3803,'Santa Cruz',20,'2019-06-12 15:10:11'),(3804,'Santa Maria',20,'2019-06-12 15:10:11'),(3805,'Santana do Matos',20,'2019-06-12 15:10:11'),(3806,'Santana do Seridó',20,'2019-06-12 15:10:11'),(3807,'Santo Antônio',20,'2019-06-12 15:10:11'),(3808,'São Bento do Norte',20,'2019-06-12 15:10:11'),(3809,'São Bento do Trairí',20,'2019-06-12 15:10:11'),(3810,'São Fernando',20,'2019-06-12 15:10:11'),(3811,'São Francisco do Oeste',20,'2019-06-12 15:10:11'),(3812,'São Gonçalo do Amarante',20,'2019-06-12 15:10:11'),(3813,'São João do Sabugi',20,'2019-06-12 15:10:11'),(3814,'São José de Mipibu',20,'2019-06-12 15:10:11'),(3815,'São José do Campestre',20,'2019-06-12 15:10:11'),(3816,'São José do Seridó',20,'2019-06-12 15:10:11'),(3817,'São Miguel',20,'2019-06-12 15:10:11'),(3818,'São Miguel do Gostoso',20,'2019-06-12 15:10:11'),(3819,'São Paulo do Potengi',20,'2019-06-12 15:10:11'),(3820,'São Pedro',20,'2019-06-12 15:10:11'),(3821,'São Rafael',20,'2019-06-12 15:10:11'),(3822,'São Tomé',20,'2019-06-12 15:10:11'),(3823,'São Vicente',20,'2019-06-12 15:10:11'),(3824,'Senador Elói de Souza',20,'2019-06-12 15:10:11'),(3825,'Senador Georgino Avelino',20,'2019-06-12 15:10:11'),(3826,'Serra de São Bento',20,'2019-06-12 15:10:11'),(3827,'Serra do Mel',20,'2019-06-12 15:10:11'),(3828,'Serra Negra do Norte',20,'2019-06-12 15:10:11'),(3829,'Serrinha',20,'2019-06-12 15:10:11'),(3830,'Serrinha dos Pintos',20,'2019-06-12 15:10:11'),(3831,'Severiano Melo',20,'2019-06-12 15:10:11'),(3832,'Sítio Novo',20,'2019-06-12 15:10:11'),(3833,'Taboleiro Grande',20,'2019-06-12 15:10:11'),(3834,'Taipu',20,'2019-06-12 15:10:11'),(3835,'Tangará',20,'2019-06-12 15:10:11'),(3836,'Tenente Ananias',20,'2019-06-12 15:10:11'),(3837,'Tenente Laurentino Cruz',20,'2019-06-12 15:10:11'),(3838,'Tibau',20,'2019-06-12 15:10:11'),(3839,'Tibau do Sul',20,'2019-06-12 15:10:11'),(3840,'Timbaúba dos Batistas',20,'2019-06-12 15:10:11'),(3841,'Touros',20,'2019-06-12 15:10:11'),(3842,'Triunfo Potiguar',20,'2019-06-12 15:10:11'),(3843,'Umarizal',20,'2019-06-12 15:10:11'),(3844,'Upanema',20,'2019-06-12 15:10:11'),(3845,'Várzea',20,'2019-06-12 15:10:11'),(3846,'Venha-Ver',20,'2019-06-12 15:10:11'),(3847,'Vera Cruz',20,'2019-06-12 15:10:11'),(3848,'Viçosa',20,'2019-06-12 15:10:11'),(3849,'Vila Flor',20,'2019-06-12 15:10:11'),(3850,'Aceguá',23,'2019-06-12 15:10:11'),(3851,'Água Santa',23,'2019-06-12 15:10:11'),(3852,'Agudo',23,'2019-06-12 15:10:11'),(3853,'Ajuricaba',23,'2019-06-12 15:10:11'),(3854,'Alecrim',23,'2019-06-12 15:10:11'),(3855,'Alegrete',23,'2019-06-12 15:10:11'),(3856,'Alegria',23,'2019-06-12 15:10:11'),(3857,'Almirante Tamandaré do Sul',23,'2019-06-12 15:10:11'),(3858,'Alpestre',23,'2019-06-12 15:10:11'),(3859,'Alto Alegre',23,'2019-06-12 15:10:11'),(3860,'Alto Feliz',23,'2019-06-12 15:10:11'),(3861,'Alvorada',23,'2019-06-12 15:10:11'),(3862,'Amaral Ferrador',23,'2019-06-12 15:10:11'),(3863,'Ametista do Sul',23,'2019-06-12 15:10:11'),(3864,'André da Rocha',23,'2019-06-12 15:10:11'),(3865,'Anta Gorda',23,'2019-06-12 15:10:11'),(3866,'Antônio Prado',23,'2019-06-12 15:10:11'),(3867,'Arambaré',23,'2019-06-12 15:10:11'),(3868,'Araricá',23,'2019-06-12 15:10:11'),(3869,'Aratiba',23,'2019-06-12 15:10:11'),(3870,'Arroio do Meio',23,'2019-06-12 15:10:11'),(3871,'Arroio do Padre',23,'2019-06-12 15:10:11'),(3872,'Arroio do Sal',23,'2019-06-12 15:10:11'),(3873,'Arroio do Tigre',23,'2019-06-12 15:10:11'),(3874,'Arroio dos Ratos',23,'2019-06-12 15:10:11'),(3875,'Arroio Grande',23,'2019-06-12 15:10:11'),(3876,'Arvorezinha',23,'2019-06-12 15:10:11'),(3877,'Augusto Pestana',23,'2019-06-12 15:10:11'),(3878,'Áurea',23,'2019-06-12 15:10:11'),(3879,'Bagé',23,'2019-06-12 15:10:11'),(3880,'Balneário Pinhal',23,'2019-06-12 15:10:11'),(3881,'Barão',23,'2019-06-12 15:10:11'),(3882,'Barão de Cotegipe',23,'2019-06-12 15:10:11'),(3883,'Barão do Triunfo',23,'2019-06-12 15:10:11'),(3884,'Barra do Guarita',23,'2019-06-12 15:10:11'),(3885,'Barra do Quaraí',23,'2019-06-12 15:10:11'),(3886,'Barra do Ribeiro',23,'2019-06-12 15:10:11'),(3887,'Barra do Rio Azul',23,'2019-06-12 15:10:11'),(3888,'Barra Funda',23,'2019-06-12 15:10:11'),(3889,'Barracão',23,'2019-06-12 15:10:11'),(3890,'Barros Cassal',23,'2019-06-12 15:10:11'),(3891,'Benjamin Constant do Sul',23,'2019-06-12 15:10:11'),(3892,'Bento Gonçalves',23,'2019-06-12 15:10:11'),(3893,'Boa Vista das Missões',23,'2019-06-12 15:10:11'),(3894,'Boa Vista do Buricá',23,'2019-06-12 15:10:11'),(3895,'Boa Vista do Cadeado',23,'2019-06-12 15:10:11'),(3896,'Boa Vista do Incra',23,'2019-06-12 15:10:11'),(3897,'Boa Vista do Sul',23,'2019-06-12 15:10:11'),(3898,'Bom Jesus',23,'2019-06-12 15:10:11'),(3899,'Bom Princípio',23,'2019-06-12 15:10:11'),(3900,'Bom Progresso',23,'2019-06-12 15:10:11'),(3901,'Bom Retiro do Sul',23,'2019-06-12 15:10:11'),(3902,'Boqueirão do Leão',23,'2019-06-12 15:10:11'),(3903,'Bossoroca',23,'2019-06-12 15:10:11'),(3904,'Bozano',23,'2019-06-12 15:10:11'),(3905,'Braga',23,'2019-06-12 15:10:11'),(3906,'Brochier',23,'2019-06-12 15:10:11'),(3907,'Butiá',23,'2019-06-12 15:10:11'),(3908,'Caçapava do Sul',23,'2019-06-12 15:10:11'),(3909,'Cacequi',23,'2019-06-12 15:10:11'),(3910,'Cachoeira do Sul',23,'2019-06-12 15:10:11'),(3911,'Cachoeirinha',23,'2019-06-12 15:10:11'),(3912,'Cacique Doble',23,'2019-06-12 15:10:11'),(3913,'Caibaté',23,'2019-06-12 15:10:11'),(3914,'Caiçara',23,'2019-06-12 15:10:11'),(3915,'Camaquã',23,'2019-06-12 15:10:11'),(3916,'Camargo',23,'2019-06-12 15:10:11'),(3917,'Cambará do Sul',23,'2019-06-12 15:10:11'),(3918,'Campestre da Serra',23,'2019-06-12 15:10:11'),(3919,'Campina das Missões',23,'2019-06-12 15:10:11'),(3920,'Campinas do Sul',23,'2019-06-12 15:10:11'),(3921,'Campo Bom',23,'2019-06-12 15:10:11'),(3922,'Campo Novo',23,'2019-06-12 15:10:11'),(3923,'Campos Borges',23,'2019-06-12 15:10:11'),(3924,'Candelária',23,'2019-06-12 15:10:11'),(3925,'Cândido Godói',23,'2019-06-12 15:10:11'),(3926,'Candiota',23,'2019-06-12 15:10:11'),(3927,'Canela',23,'2019-06-12 15:10:11'),(3928,'Canguçu',23,'2019-06-12 15:10:11'),(3929,'Canoas',23,'2019-06-12 15:10:11'),(3930,'Canudos do Vale',23,'2019-06-12 15:10:11'),(3931,'Capão Bonito do Sul',23,'2019-06-12 15:10:11'),(3932,'Capão da Canoa',23,'2019-06-12 15:10:11'),(3933,'Capão do Cipó',23,'2019-06-12 15:10:11'),(3934,'Capão do Leão',23,'2019-06-12 15:10:11'),(3935,'Capela de Santana',23,'2019-06-12 15:10:11'),(3936,'Capitão',23,'2019-06-12 15:10:11'),(3937,'Capivari do Sul',23,'2019-06-12 15:10:11'),(3938,'Caraá',23,'2019-06-12 15:10:11'),(3939,'Carazinho',23,'2019-06-12 15:10:11'),(3940,'Carlos Barbosa',23,'2019-06-12 15:10:11'),(3941,'Carlos Gomes',23,'2019-06-12 15:10:11'),(3942,'Casca',23,'2019-06-12 15:10:11'),(3943,'Caseiros',23,'2019-06-12 15:10:11'),(3944,'Catuípe',23,'2019-06-12 15:10:11'),(3945,'Caxias do Sul',23,'2019-06-12 15:10:11'),(3946,'Centenário',23,'2019-06-12 15:10:11'),(3947,'Cerrito',23,'2019-06-12 15:10:11'),(3948,'Cerro Branco',23,'2019-06-12 15:10:11'),(3949,'Cerro Grande',23,'2019-06-12 15:10:11'),(3950,'Cerro Grande do Sul',23,'2019-06-12 15:10:11'),(3951,'Cerro Largo',23,'2019-06-12 15:10:11'),(3952,'Chapada',23,'2019-06-12 15:10:11'),(3953,'Charqueadas',23,'2019-06-12 15:10:11'),(3954,'Charrua',23,'2019-06-12 15:10:11'),(3955,'Chiapeta',23,'2019-06-12 15:10:11'),(3956,'Chuí',23,'2019-06-12 15:10:11'),(3957,'Chuvisca',23,'2019-06-12 15:10:11'),(3958,'Cidreira',23,'2019-06-12 15:10:11'),(3959,'Ciríaco',23,'2019-06-12 15:10:11'),(3960,'Colinas',23,'2019-06-12 15:10:11'),(3961,'Colorado',23,'2019-06-12 15:10:11'),(3962,'Condor',23,'2019-06-12 15:10:11'),(3963,'Constantina',23,'2019-06-12 15:10:11'),(3964,'Coqueiro Baixo',23,'2019-06-12 15:10:11'),(3965,'Coqueiros do Sul',23,'2019-06-12 15:10:11'),(3966,'Coronel Barros',23,'2019-06-12 15:10:11'),(3967,'Coronel Bicaco',23,'2019-06-12 15:10:11'),(3968,'Coronel Pilar',23,'2019-06-12 15:10:11'),(3969,'Cotiporã',23,'2019-06-12 15:10:11'),(3970,'Coxilha',23,'2019-06-12 15:10:11'),(3971,'Crissiumal',23,'2019-06-12 15:10:11'),(3972,'Cristal',23,'2019-06-12 15:10:11'),(3973,'Cristal do Sul',23,'2019-06-12 15:10:11'),(3974,'Cruz Alta',23,'2019-06-12 15:10:11'),(3975,'Cruzaltense',23,'2019-06-12 15:10:11'),(3976,'Cruzeiro do Sul',23,'2019-06-12 15:10:11'),(3977,'David Canabarro',23,'2019-06-12 15:10:11'),(3978,'Derrubadas',23,'2019-06-12 15:10:11'),(3979,'Dezesseis de Novembro',23,'2019-06-12 15:10:11'),(3980,'Dilermando de Aguiar',23,'2019-06-12 15:10:11'),(3981,'Dois Irmãos',23,'2019-06-12 15:10:11'),(3982,'Dois Irmãos das Missões',23,'2019-06-12 15:10:11'),(3983,'Dois Lajeados',23,'2019-06-12 15:10:11'),(3984,'Dom Feliciano',23,'2019-06-12 15:10:11'),(3985,'Dom Pedrito',23,'2019-06-12 15:10:11'),(3986,'Dom Pedro de Alcântara',23,'2019-06-12 15:10:11'),(3987,'Dona Francisca',23,'2019-06-12 15:10:11'),(3988,'Doutor Maurício Cardoso',23,'2019-06-12 15:10:11'),(3989,'Doutor Ricardo',23,'2019-06-12 15:10:11'),(3990,'Eldorado do Sul',23,'2019-06-12 15:10:11'),(3991,'Encantado',23,'2019-06-12 15:10:11'),(3992,'Encruzilhada do Sul',23,'2019-06-12 15:10:11'),(3993,'Engenho Velho',23,'2019-06-12 15:10:11'),(3994,'Entre Rios do Sul',23,'2019-06-12 15:10:11'),(3995,'Entre-Ijuís',23,'2019-06-12 15:10:11'),(3996,'Erebango',23,'2019-06-12 15:10:11'),(3997,'Erechim',23,'2019-06-12 15:10:11'),(3998,'Ernestina',23,'2019-06-12 15:10:11'),(3999,'Erval Grande',23,'2019-06-12 15:10:11'),(4000,'Erval Seco',23,'2019-06-12 15:10:11'),(4001,'Esmeralda',23,'2019-06-12 15:10:11'),(4002,'Esperança do Sul',23,'2019-06-12 15:10:11'),(4003,'Espumoso',23,'2019-06-12 15:10:11'),(4004,'Estação',23,'2019-06-12 15:10:11'),(4005,'Estância Velha',23,'2019-06-12 15:10:11'),(4006,'Esteio',23,'2019-06-12 15:10:11'),(4007,'Estrela',23,'2019-06-12 15:10:11'),(4008,'Estrela Velha',23,'2019-06-12 15:10:11'),(4009,'Eugênio de Castro',23,'2019-06-12 15:10:11'),(4010,'Fagundes Varela',23,'2019-06-12 15:10:11'),(4011,'Farroupilha',23,'2019-06-12 15:10:11'),(4012,'Faxinal do Soturno',23,'2019-06-12 15:10:11'),(4013,'Faxinalzinho',23,'2019-06-12 15:10:11'),(4014,'Fazenda Vilanova',23,'2019-06-12 15:10:11'),(4015,'Feliz',23,'2019-06-12 15:10:11'),(4016,'Flores da Cunha',23,'2019-06-12 15:10:11'),(4017,'Floriano Peixoto',23,'2019-06-12 15:10:11'),(4018,'Fontoura Xavier',23,'2019-06-12 15:10:11'),(4019,'Formigueiro',23,'2019-06-12 15:10:11'),(4020,'Forquetinha',23,'2019-06-12 15:10:11'),(4021,'Fortaleza dos Valos',23,'2019-06-12 15:10:11'),(4022,'Frederico Westphalen',23,'2019-06-12 15:10:11'),(4023,'Garibaldi',23,'2019-06-12 15:10:11'),(4024,'Garruchos',23,'2019-06-12 15:10:11'),(4025,'Gaurama',23,'2019-06-12 15:10:11'),(4026,'General Câmara',23,'2019-06-12 15:10:11'),(4027,'Gentil',23,'2019-06-12 15:10:11'),(4028,'Getúlio Vargas',23,'2019-06-12 15:10:11'),(4029,'Giruá',23,'2019-06-12 15:10:11'),(4030,'Glorinha',23,'2019-06-12 15:10:11'),(4031,'Gramado',23,'2019-06-12 15:10:11'),(4032,'Gramado dos Loureiros',23,'2019-06-12 15:10:11'),(4033,'Gramado Xavier',23,'2019-06-12 15:10:11'),(4034,'Gravataí',23,'2019-06-12 15:10:11'),(4035,'Guabiju',23,'2019-06-12 15:10:11'),(4036,'Guaíba',23,'2019-06-12 15:10:11'),(4037,'Guaporé',23,'2019-06-12 15:10:11'),(4038,'Guarani das Missões',23,'2019-06-12 15:10:11'),(4039,'Harmonia',23,'2019-06-12 15:10:11'),(4040,'Herval',23,'2019-06-12 15:10:11'),(4041,'Herveiras',23,'2019-06-12 15:10:11'),(4042,'Horizontina',23,'2019-06-12 15:10:11'),(4043,'Hulha Negra',23,'2019-06-12 15:10:11'),(4044,'Humaitá',23,'2019-06-12 15:10:11'),(4045,'Ibarama',23,'2019-06-12 15:10:11'),(4046,'Ibiaçá',23,'2019-06-12 15:10:11'),(4047,'Ibiraiaras',23,'2019-06-12 15:10:11'),(4048,'Ibirapuitã',23,'2019-06-12 15:10:11'),(4049,'Ibirubá',23,'2019-06-12 15:10:11'),(4050,'Igrejinha',23,'2019-06-12 15:10:11'),(4051,'Ijuí',23,'2019-06-12 15:10:11'),(4052,'Ilópolis',23,'2019-06-12 15:10:11'),(4053,'Imbé',23,'2019-06-12 15:10:11'),(4054,'Imigrante',23,'2019-06-12 15:10:11'),(4055,'Independência',23,'2019-06-12 15:10:11'),(4056,'Inhacorá',23,'2019-06-12 15:10:11'),(4057,'Ipê',23,'2019-06-12 15:10:11'),(4058,'Ipiranga do Sul',23,'2019-06-12 15:10:11'),(4059,'Iraí',23,'2019-06-12 15:10:11'),(4060,'Itaara',23,'2019-06-12 15:10:11'),(4061,'Itacurubi',23,'2019-06-12 15:10:11'),(4062,'Itapuca',23,'2019-06-12 15:10:11'),(4063,'Itaqui',23,'2019-06-12 15:10:11'),(4064,'Itati',23,'2019-06-12 15:10:11'),(4065,'Itatiba do Sul',23,'2019-06-12 15:10:11'),(4066,'Ivorá',23,'2019-06-12 15:10:11'),(4067,'Ivoti',23,'2019-06-12 15:10:11'),(4068,'Jaboticaba',23,'2019-06-12 15:10:11'),(4069,'Jacuizinho',23,'2019-06-12 15:10:11'),(4070,'Jacutinga',23,'2019-06-12 15:10:11'),(4071,'Jaguarão',23,'2019-06-12 15:10:11'),(4072,'Jaguari',23,'2019-06-12 15:10:11'),(4073,'Jaquirana',23,'2019-06-12 15:10:11'),(4074,'Jari',23,'2019-06-12 15:10:11'),(4075,'Jóia',23,'2019-06-12 15:10:11'),(4076,'Júlio de Castilhos',23,'2019-06-12 15:10:11'),(4077,'Lagoa Bonita do Sul',23,'2019-06-12 15:10:11'),(4078,'Lagoa dos Três Cantos',23,'2019-06-12 15:10:11'),(4079,'Lagoa Vermelha',23,'2019-06-12 15:10:11'),(4080,'Lagoão',23,'2019-06-12 15:10:11'),(4081,'Lajeado',23,'2019-06-12 15:10:11'),(4082,'Lajeado do Bugre',23,'2019-06-12 15:10:11'),(4083,'Lavras do Sul',23,'2019-06-12 15:10:11'),(4084,'Liberato Salzano',23,'2019-06-12 15:10:11'),(4085,'Lindolfo Collor',23,'2019-06-12 15:10:11'),(4086,'Linha Nova',23,'2019-06-12 15:10:11'),(4087,'Maçambara',23,'2019-06-12 15:10:11'),(4088,'Machadinho',23,'2019-06-12 15:10:11'),(4089,'Mampituba',23,'2019-06-12 15:10:11'),(4090,'Manoel Viana',23,'2019-06-12 15:10:11'),(4091,'Maquiné',23,'2019-06-12 15:10:11'),(4092,'Maratá',23,'2019-06-12 15:10:11'),(4093,'Marau',23,'2019-06-12 15:10:11'),(4094,'Marcelino Ramos',23,'2019-06-12 15:10:11'),(4095,'Mariana Pimentel',23,'2019-06-12 15:10:11'),(4096,'Mariano Moro',23,'2019-06-12 15:10:11'),(4097,'Marques de Souza',23,'2019-06-12 15:10:11'),(4098,'Mata',23,'2019-06-12 15:10:11'),(4099,'Mato Castelhano',23,'2019-06-12 15:10:11'),(4100,'Mato Leitão',23,'2019-06-12 15:10:11'),(4101,'Mato Queimado',23,'2019-06-12 15:10:11'),(4102,'Maximiliano de Almeida',23,'2019-06-12 15:10:11'),(4103,'Minas do Leão',23,'2019-06-12 15:10:11'),(4104,'Miraguaí',23,'2019-06-12 15:10:11'),(4105,'Montauri',23,'2019-06-12 15:10:11'),(4106,'Monte Alegre dos Campos',23,'2019-06-12 15:10:11'),(4107,'Monte Belo do Sul',23,'2019-06-12 15:10:11'),(4108,'Montenegro',23,'2019-06-12 15:10:11'),(4109,'Mormaço',23,'2019-06-12 15:10:11'),(4110,'Morrinhos do Sul',23,'2019-06-12 15:10:11'),(4111,'Morro Redondo',23,'2019-06-12 15:10:11'),(4112,'Morro Reuter',23,'2019-06-12 15:10:11'),(4113,'Mostardas',23,'2019-06-12 15:10:11'),(4114,'Muçum',23,'2019-06-12 15:10:11'),(4115,'Muitos Capões',23,'2019-06-12 15:10:11'),(4116,'Muliterno',23,'2019-06-12 15:10:11'),(4117,'Não-Me-Toque',23,'2019-06-12 15:10:11'),(4118,'Nicolau Vergueiro',23,'2019-06-12 15:10:11'),(4119,'Nonoai',23,'2019-06-12 15:10:11'),(4120,'Nova Alvorada',23,'2019-06-12 15:10:11'),(4121,'Nova Araçá',23,'2019-06-12 15:10:11'),(4122,'Nova Bassano',23,'2019-06-12 15:10:11'),(4123,'Nova Boa Vista',23,'2019-06-12 15:10:11'),(4124,'Nova Bréscia',23,'2019-06-12 15:10:11'),(4125,'Nova Candelária',23,'2019-06-12 15:10:11'),(4126,'Nova Esperança do Sul',23,'2019-06-12 15:10:11'),(4127,'Nova Hartz',23,'2019-06-12 15:10:11'),(4128,'Nova Pádua',23,'2019-06-12 15:10:11'),(4129,'Nova Palma',23,'2019-06-12 15:10:11'),(4130,'Nova Petrópolis',23,'2019-06-12 15:10:11'),(4131,'Nova Prata',23,'2019-06-12 15:10:11'),(4132,'Nova Ramada',23,'2019-06-12 15:10:11'),(4133,'Nova Roma do Sul',23,'2019-06-12 15:10:11'),(4134,'Nova Santa Rita',23,'2019-06-12 15:10:11'),(4135,'Novo Barreiro',23,'2019-06-12 15:10:11'),(4136,'Novo Cabrais',23,'2019-06-12 15:10:11'),(4137,'Novo Hamburgo',23,'2019-06-12 15:10:11'),(4138,'Novo Machado',23,'2019-06-12 15:10:11'),(4139,'Novo Tiradentes',23,'2019-06-12 15:10:11'),(4140,'Novo Xingu',23,'2019-06-12 15:10:11'),(4141,'Osório',23,'2019-06-12 15:10:11'),(4142,'Paim Filho',23,'2019-06-12 15:10:11'),(4143,'Palmares do Sul',23,'2019-06-12 15:10:11'),(4144,'Palmeira das Missões',23,'2019-06-12 15:10:11'),(4145,'Palmitinho',23,'2019-06-12 15:10:11'),(4146,'Panambi',23,'2019-06-12 15:10:11'),(4147,'Pantano Grande',23,'2019-06-12 15:10:11'),(4148,'Paraí',23,'2019-06-12 15:10:11'),(4149,'Paraíso do Sul',23,'2019-06-12 15:10:11'),(4150,'Pareci Novo',23,'2019-06-12 15:10:11'),(4151,'Parobé',23,'2019-06-12 15:10:11'),(4152,'Passa Sete',23,'2019-06-12 15:10:11'),(4153,'Passo do Sobrado',23,'2019-06-12 15:10:11'),(4154,'Passo Fundo',23,'2019-06-12 15:10:11'),(4155,'Paulo Bento',23,'2019-06-12 15:10:11'),(4156,'Paverama',23,'2019-06-12 15:10:11'),(4157,'Pedras Altas',23,'2019-06-12 15:10:11'),(4158,'Pedro Osório',23,'2019-06-12 15:10:11'),(4159,'Pejuçara',23,'2019-06-12 15:10:11'),(4160,'Pelotas',23,'2019-06-12 15:10:11'),(4161,'Picada Café',23,'2019-06-12 15:10:11'),(4162,'Pinhal',23,'2019-06-12 15:10:11'),(4163,'Pinhal da Serra',23,'2019-06-12 15:10:11'),(4164,'Pinhal Grande',23,'2019-06-12 15:10:11'),(4165,'Pinheirinho do Vale',23,'2019-06-12 15:10:11'),(4166,'Pinheiro Machado',23,'2019-06-12 15:10:11'),(4167,'Pirapó',23,'2019-06-12 15:10:11'),(4168,'Piratini',23,'2019-06-12 15:10:11'),(4169,'Planalto',23,'2019-06-12 15:10:11'),(4170,'Poço das Antas',23,'2019-06-12 15:10:11'),(4171,'Pontão',23,'2019-06-12 15:10:11'),(4172,'Ponte Preta',23,'2019-06-12 15:10:11'),(4173,'Portão',23,'2019-06-12 15:10:11'),(4174,'Porto Alegre',23,'2019-06-12 15:10:11'),(4175,'Porto Lucena',23,'2019-06-12 15:10:11'),(4176,'Porto Mauá',23,'2019-06-12 15:10:11'),(4177,'Porto Vera Cruz',23,'2019-06-12 15:10:11'),(4178,'Porto Xavier',23,'2019-06-12 15:10:11'),(4179,'Pouso Novo',23,'2019-06-12 15:10:11'),(4180,'Presidente Lucena',23,'2019-06-12 15:10:11'),(4181,'Progresso',23,'2019-06-12 15:10:11'),(4182,'Protásio Alves',23,'2019-06-12 15:10:11'),(4183,'Putinga',23,'2019-06-12 15:10:11'),(4184,'Quaraí',23,'2019-06-12 15:10:11'),(4185,'Quatro Irmãos',23,'2019-06-12 15:10:11'),(4186,'Quevedos',23,'2019-06-12 15:10:11'),(4187,'Quinze de Novembro',23,'2019-06-12 15:10:11'),(4188,'Redentora',23,'2019-06-12 15:10:11'),(4189,'Relvado',23,'2019-06-12 15:10:11'),(4190,'Restinga Seca',23,'2019-06-12 15:10:11'),(4191,'Rio dos Índios',23,'2019-06-12 15:10:11'),(4192,'Rio Grande',23,'2019-06-12 15:10:11'),(4193,'Rio Pardo',23,'2019-06-12 15:10:11'),(4194,'Riozinho',23,'2019-06-12 15:10:11'),(4195,'Roca Sales',23,'2019-06-12 15:10:11'),(4196,'Rodeio Bonito',23,'2019-06-12 15:10:11'),(4197,'Rolador',23,'2019-06-12 15:10:11'),(4198,'Rolante',23,'2019-06-12 15:10:11'),(4199,'Ronda Alta',23,'2019-06-12 15:10:11'),(4200,'Rondinha',23,'2019-06-12 15:10:11'),(4201,'Roque Gonzales',23,'2019-06-12 15:10:11'),(4202,'Rosário do Sul',23,'2019-06-12 15:10:11'),(4203,'Sagrada Família',23,'2019-06-12 15:10:11'),(4204,'Saldanha Marinho',23,'2019-06-12 15:10:11'),(4205,'Salto do Jacuí',23,'2019-06-12 15:10:11'),(4206,'Salvador das Missões',23,'2019-06-12 15:10:11'),(4207,'Salvador do Sul',23,'2019-06-12 15:10:11'),(4208,'Sananduva',23,'2019-06-12 15:10:11'),(4209,'Santa Bárbara do Sul',23,'2019-06-12 15:10:11'),(4210,'Santa Cecília do Sul',23,'2019-06-12 15:10:11'),(4211,'Santa Clara do Sul',23,'2019-06-12 15:10:11'),(4212,'Santa Cruz do Sul',23,'2019-06-12 15:10:11'),(4213,'Santa Margarida do Sul',23,'2019-06-12 15:10:11'),(4214,'Santa Maria',23,'2019-06-12 15:10:11'),(4215,'Santa Maria do Herval',23,'2019-06-12 15:10:11'),(4216,'Santa Rosa',23,'2019-06-12 15:10:11'),(4217,'Santa Tereza',23,'2019-06-12 15:10:11'),(4218,'Santa Vitória do Palmar',23,'2019-06-12 15:10:11'),(4219,'Santana da Boa Vista',23,'2019-06-12 15:10:11'),(4220,'Santana do Livramento',23,'2019-06-12 15:10:11'),(4221,'Santiago',23,'2019-06-12 15:10:11'),(4222,'Santo Ângelo',23,'2019-06-12 15:10:11'),(4223,'Santo Antônio da Patrulha',23,'2019-06-12 15:10:11'),(4224,'Santo Antônio das Missões',23,'2019-06-12 15:10:11'),(4225,'Santo Antônio do Palma',23,'2019-06-12 15:10:11'),(4226,'Santo Antônio do Planalto',23,'2019-06-12 15:10:11'),(4227,'Santo Augusto',23,'2019-06-12 15:10:11'),(4228,'Santo Cristo',23,'2019-06-12 15:10:11'),(4229,'Santo Expedito do Sul',23,'2019-06-12 15:10:11'),(4230,'São Borja',23,'2019-06-12 15:10:11'),(4231,'São Domingos do Sul',23,'2019-06-12 15:10:11'),(4232,'São Francisco de Assis',23,'2019-06-12 15:10:11'),(4233,'São Francisco de Paula',23,'2019-06-12 15:10:11'),(4234,'São Gabriel',23,'2019-06-12 15:10:11'),(4235,'São Jerônimo',23,'2019-06-12 15:10:11'),(4236,'São João da Urtiga',23,'2019-06-12 15:10:11'),(4237,'São João do Polêsine',23,'2019-06-12 15:10:11'),(4238,'São Jorge',23,'2019-06-12 15:10:11'),(4239,'São José das Missões',23,'2019-06-12 15:10:11'),(4240,'São José do Herval',23,'2019-06-12 15:10:11'),(4241,'São José do Hortêncio',23,'2019-06-12 15:10:11'),(4242,'São José do Inhacorá',23,'2019-06-12 15:10:11'),(4243,'São José do Norte',23,'2019-06-12 15:10:11'),(4244,'São José do Ouro',23,'2019-06-12 15:10:11'),(4245,'São José do Sul',23,'2019-06-12 15:10:11'),(4246,'São José dos Ausentes',23,'2019-06-12 15:10:11'),(4247,'São Leopoldo',23,'2019-06-12 15:10:11'),(4248,'São Lourenço do Sul',23,'2019-06-12 15:10:11'),(4249,'São Luiz Gonzaga',23,'2019-06-12 15:10:11'),(4250,'São Marcos',23,'2019-06-12 15:10:11'),(4251,'São Martinho',23,'2019-06-12 15:10:11'),(4252,'São Martinho da Serra',23,'2019-06-12 15:10:11'),(4253,'São Miguel das Missões',23,'2019-06-12 15:10:11'),(4254,'São Nicolau',23,'2019-06-12 15:10:11'),(4255,'São Paulo das Missões',23,'2019-06-12 15:10:11'),(4256,'São Pedro da Serra',23,'2019-06-12 15:10:11'),(4257,'São Pedro das Missões',23,'2019-06-12 15:10:11'),(4258,'São Pedro do Butiá',23,'2019-06-12 15:10:11'),(4259,'São Pedro do Sul',23,'2019-06-12 15:10:11'),(4260,'São Sebastião do Caí',23,'2019-06-12 15:10:11'),(4261,'São Sepé',23,'2019-06-12 15:10:11'),(4262,'São Valentim',23,'2019-06-12 15:10:11'),(4263,'São Valentim do Sul',23,'2019-06-12 15:10:11'),(4264,'São Valério do Sul',23,'2019-06-12 15:10:11'),(4265,'São Vendelino',23,'2019-06-12 15:10:11'),(4266,'São Vicente do Sul',23,'2019-06-12 15:10:11'),(4267,'Sapiranga',23,'2019-06-12 15:10:11'),(4268,'Sapucaia do Sul',23,'2019-06-12 15:10:11'),(4269,'Sarandi',23,'2019-06-12 15:10:11'),(4270,'Seberi',23,'2019-06-12 15:10:11'),(4271,'Sede Nova',23,'2019-06-12 15:10:11'),(4272,'Segredo',23,'2019-06-12 15:10:11'),(4273,'Selbach',23,'2019-06-12 15:10:11'),(4274,'Senador Salgado Filho',23,'2019-06-12 15:10:11'),(4275,'Sentinela do Sul',23,'2019-06-12 15:10:11'),(4276,'Serafina Corrêa',23,'2019-06-12 15:10:11'),(4277,'Sério',23,'2019-06-12 15:10:11'),(4278,'Sertão',23,'2019-06-12 15:10:11'),(4279,'Sertão Santana',23,'2019-06-12 15:10:11'),(4280,'Sete de Setembro',23,'2019-06-12 15:10:11'),(4281,'Severiano de Almeida',23,'2019-06-12 15:10:11'),(4282,'Silveira Martins',23,'2019-06-12 15:10:11'),(4283,'Sinimbu',23,'2019-06-12 15:10:11'),(4284,'Sobradinho',23,'2019-06-12 15:10:11'),(4285,'Soledade',23,'2019-06-12 15:10:11'),(4286,'Tabaí',23,'2019-06-12 15:10:11'),(4287,'Tapejara',23,'2019-06-12 15:10:11'),(4288,'Tapera',23,'2019-06-12 15:10:11'),(4289,'Tapes',23,'2019-06-12 15:10:11'),(4290,'Taquara',23,'2019-06-12 15:10:11'),(4291,'Taquari',23,'2019-06-12 15:10:11'),(4292,'Taquaruçu do Sul',23,'2019-06-12 15:10:11'),(4293,'Tavares',23,'2019-06-12 15:10:11'),(4294,'Tenente Portela',23,'2019-06-12 15:10:11'),(4295,'Terra de Areia',23,'2019-06-12 15:10:11'),(4296,'Teutônia',23,'2019-06-12 15:10:11'),(4297,'Tio Hugo',23,'2019-06-12 15:10:11'),(4298,'Tiradentes do Sul',23,'2019-06-12 15:10:11'),(4299,'Toropi',23,'2019-06-12 15:10:11'),(4300,'Torres',23,'2019-06-12 15:10:11'),(4301,'Tramandaí',23,'2019-06-12 15:10:11'),(4302,'Travesseiro',23,'2019-06-12 15:10:11'),(4303,'Três Arroios',23,'2019-06-12 15:10:11'),(4304,'Três Cachoeiras',23,'2019-06-12 15:10:11'),(4305,'Três Coroas',23,'2019-06-12 15:10:11'),(4306,'Três de Maio',23,'2019-06-12 15:10:11'),(4307,'Três Forquilhas',23,'2019-06-12 15:10:11'),(4308,'Três Palmeiras',23,'2019-06-12 15:10:11'),(4309,'Três Passos',23,'2019-06-12 15:10:11'),(4310,'Trindade do Sul',23,'2019-06-12 15:10:11'),(4311,'Triunfo',23,'2019-06-12 15:10:11'),(4312,'Tucunduva',23,'2019-06-12 15:10:11'),(4313,'Tunas',23,'2019-06-12 15:10:11'),(4314,'Tupanci do Sul',23,'2019-06-12 15:10:11'),(4315,'Tupanciretã',23,'2019-06-12 15:10:11'),(4316,'Tupandi',23,'2019-06-12 15:10:11'),(4317,'Tuparendi',23,'2019-06-12 15:10:11'),(4318,'Turuçu',23,'2019-06-12 15:10:11'),(4319,'Ubiretama',23,'2019-06-12 15:10:11'),(4320,'União da Serra',23,'2019-06-12 15:10:11'),(4321,'Unistalda',23,'2019-06-12 15:10:11'),(4322,'Uruguaiana',23,'2019-06-12 15:10:11'),(4323,'Vacaria',23,'2019-06-12 15:10:11'),(4324,'Vale do Sol',23,'2019-06-12 15:10:11'),(4325,'Vale Real',23,'2019-06-12 15:10:11'),(4326,'Vale Verde',23,'2019-06-12 15:10:11'),(4327,'Vanini',23,'2019-06-12 15:10:11'),(4328,'Venâncio Aires',23,'2019-06-12 15:10:11'),(4329,'Vera Cruz',23,'2019-06-12 15:10:11'),(4330,'Veranópolis',23,'2019-06-12 15:10:11'),(4331,'Vespasiano Correa',23,'2019-06-12 15:10:11'),(4332,'Viadutos',23,'2019-06-12 15:10:11'),(4333,'Viamão',23,'2019-06-12 15:10:11'),(4334,'Vicente Dutra',23,'2019-06-12 15:10:11'),(4335,'Victor Graeff',23,'2019-06-12 15:10:11'),(4336,'Vila Flores',23,'2019-06-12 15:10:11'),(4337,'Vila Lângaro',23,'2019-06-12 15:10:11'),(4338,'Vila Maria',23,'2019-06-12 15:10:11'),(4339,'Vila Nova do Sul',23,'2019-06-12 15:10:11'),(4340,'Vista Alegre',23,'2019-06-12 15:10:11'),(4341,'Vista Alegre do Prata',23,'2019-06-12 15:10:11'),(4342,'Vista Gaúcha',23,'2019-06-12 15:10:11'),(4343,'Vitória das Missões',23,'2019-06-12 15:10:11'),(4344,'Westfália',23,'2019-06-12 15:10:11'),(4345,'Xangri-lá',23,'2019-06-12 15:10:11'),(4346,'Alta Floresta d`Oeste',21,'2019-06-12 15:10:11'),(4347,'Alto Alegre dos Parecis',21,'2019-06-12 15:10:11'),(4348,'Alto Paraíso',21,'2019-06-12 15:10:11'),(4349,'Alvorada d`Oeste',21,'2019-06-12 15:10:11'),(4350,'Ariquemes',21,'2019-06-12 15:10:11'),(4351,'Buritis',21,'2019-06-12 15:10:11'),(4352,'Cabixi',21,'2019-06-12 15:10:11'),(4353,'Cacaulândia',21,'2019-06-12 15:10:11'),(4354,'Cacoal',21,'2019-06-12 15:10:11'),(4355,'Campo Novo de Rondônia',21,'2019-06-12 15:10:11'),(4356,'Candeias do Jamari',21,'2019-06-12 15:10:11'),(4357,'Castanheiras',21,'2019-06-12 15:10:11'),(4358,'Cerejeiras',21,'2019-06-12 15:10:11'),(4359,'Chupinguaia',21,'2019-06-12 15:10:11'),(4360,'Colorado do Oeste',21,'2019-06-12 15:10:11'),(4361,'Corumbiara',21,'2019-06-12 15:10:11'),(4362,'Costa Marques',21,'2019-06-12 15:10:11'),(4363,'Cujubim',21,'2019-06-12 15:10:11'),(4364,'Espigão d`Oeste',21,'2019-06-12 15:10:11'),(4365,'Governador Jorge Teixeira',21,'2019-06-12 15:10:11'),(4366,'Guajará-Mirim',21,'2019-06-12 15:10:11'),(4367,'Itapuã do Oeste',21,'2019-06-12 15:10:11'),(4368,'Jaru',21,'2019-06-12 15:10:11'),(4369,'Ji-Paraná',21,'2019-06-12 15:10:11'),(4370,'Machadinho d`Oeste',21,'2019-06-12 15:10:11'),(4371,'Ministro Andreazza',21,'2019-06-12 15:10:11'),(4372,'Mirante da Serra',21,'2019-06-12 15:10:11'),(4373,'Monte Negro',21,'2019-06-12 15:10:11'),(4374,'Nova Brasilândia d`Oeste',21,'2019-06-12 15:10:11'),(4375,'Nova Mamoré',21,'2019-06-12 15:10:11'),(4376,'Nova União',21,'2019-06-12 15:10:11'),(4377,'Novo Horizonte do Oeste',21,'2019-06-12 15:10:11'),(4378,'Ouro Preto do Oeste',21,'2019-06-12 15:10:11'),(4379,'Parecis',21,'2019-06-12 15:10:11'),(4380,'Pimenta Bueno',21,'2019-06-12 15:10:11'),(4381,'Pimenteiras do Oeste',21,'2019-06-12 15:10:11'),(4382,'Porto Velho',21,'2019-06-12 15:10:11'),(4383,'Presidente Médici',21,'2019-06-12 15:10:11'),(4384,'Primavera de Rondônia',21,'2019-06-12 15:10:11'),(4385,'Rio Crespo',21,'2019-06-12 15:10:11'),(4386,'Rolim de Moura',21,'2019-06-12 15:10:11'),(4387,'Santa Luzia d`Oeste',21,'2019-06-12 15:10:11'),(4388,'São Felipe d`Oeste',21,'2019-06-12 15:10:11'),(4389,'São Francisco do Guaporé',21,'2019-06-12 15:10:11'),(4390,'São Miguel do Guaporé',21,'2019-06-12 15:10:11'),(4391,'Seringueiras',21,'2019-06-12 15:10:11'),(4392,'Teixeirópolis',21,'2019-06-12 15:10:11'),(4393,'Theobroma',21,'2019-06-12 15:10:11'),(4394,'Urupá',21,'2019-06-12 15:10:11'),(4395,'Vale do Anari',21,'2019-06-12 15:10:11'),(4396,'Vale do Paraíso',21,'2019-06-12 15:10:11'),(4397,'Vilhena',21,'2019-06-12 15:10:11'),(4398,'Alto Alegre',22,'2019-06-12 15:10:11'),(4399,'Amajari',22,'2019-06-12 15:10:11'),(4400,'Boa Vista',22,'2019-06-12 15:10:11'),(4401,'Bonfim',22,'2019-06-12 15:10:11'),(4402,'Cantá',22,'2019-06-12 15:10:11'),(4403,'Caracaraí',22,'2019-06-12 15:10:11'),(4404,'Caroebe',22,'2019-06-12 15:10:11'),(4405,'Iracema',22,'2019-06-12 15:10:11'),(4406,'Mucajaí',22,'2019-06-12 15:10:11'),(4407,'Normandia',22,'2019-06-12 15:10:11'),(4408,'Pacaraima',22,'2019-06-12 15:10:11'),(4409,'Rorainópolis',22,'2019-06-12 15:10:11'),(4410,'São João da Baliza',22,'2019-06-12 15:10:11'),(4411,'São Luiz',22,'2019-06-12 15:10:11'),(4412,'Uiramutã',22,'2019-06-12 15:10:11'),(4413,'Abdon Batista',24,'2019-06-12 15:10:11'),(4414,'Abelardo Luz',24,'2019-06-12 15:10:11'),(4415,'Agrolândia',24,'2019-06-12 15:10:11'),(4416,'Agronômica',24,'2019-06-12 15:10:11'),(4417,'Água Doce',24,'2019-06-12 15:10:11'),(4418,'Águas de Chapecó',24,'2019-06-12 15:10:11'),(4419,'Águas Frias',24,'2019-06-12 15:10:11'),(4420,'Águas Mornas',24,'2019-06-12 15:10:11'),(4421,'Alfredo Wagner',24,'2019-06-12 15:10:11'),(4422,'Alto Bela Vista',24,'2019-06-12 15:10:11'),(4423,'Anchieta',24,'2019-06-12 15:10:11'),(4424,'Angelina',24,'2019-06-12 15:10:11'),(4425,'Anita Garibaldi',24,'2019-06-12 15:10:11'),(4426,'Anitápolis',24,'2019-06-12 15:10:11'),(4427,'Antônio Carlos',24,'2019-06-12 15:10:11'),(4428,'Apiúna',24,'2019-06-12 15:10:11'),(4429,'Arabutã',24,'2019-06-12 15:10:11'),(4430,'Araquari',24,'2019-06-12 15:10:11'),(4431,'Araranguá',24,'2019-06-12 15:10:11'),(4432,'Armazém',24,'2019-06-12 15:10:11'),(4433,'Arroio Trinta',24,'2019-06-12 15:10:11'),(4434,'Arvoredo',24,'2019-06-12 15:10:11'),(4435,'Ascurra',24,'2019-06-12 15:10:11'),(4436,'Atalanta',24,'2019-06-12 15:10:11'),(4437,'Aurora',24,'2019-06-12 15:10:11'),(4438,'Balneário Arroio do Silva',24,'2019-06-12 15:10:11'),(4439,'Balneário Barra do Sul',24,'2019-06-12 15:10:11'),(4440,'Balneário Camboriú',24,'2019-06-12 15:10:11'),(4441,'Balneário Gaivota',24,'2019-06-12 15:10:11'),(4442,'Bandeirante',24,'2019-06-12 15:10:11'),(4443,'Barra Bonita',24,'2019-06-12 15:10:11'),(4444,'Barra Velha',24,'2019-06-12 15:10:11'),(4445,'Bela Vista do Toldo',24,'2019-06-12 15:10:11'),(4446,'Belmonte',24,'2019-06-12 15:10:11'),(4447,'Benedito Novo',24,'2019-06-12 15:10:11'),(4448,'Biguaçu',24,'2019-06-12 15:10:11'),(4449,'Blumenau',24,'2019-06-12 15:10:11'),(4450,'Bocaina do Sul',24,'2019-06-12 15:10:11'),(4451,'Bom Jardim da Serra',24,'2019-06-12 15:10:11'),(4452,'Bom Jesus',24,'2019-06-12 15:10:11'),(4453,'Bom Jesus do Oeste',24,'2019-06-12 15:10:11'),(4454,'Bom Retiro',24,'2019-06-12 15:10:11'),(4455,'Bombinhas',24,'2019-06-12 15:10:11'),(4456,'Botuverá',24,'2019-06-12 15:10:11'),(4457,'Braço do Norte',24,'2019-06-12 15:10:11'),(4458,'Braço do Trombudo',24,'2019-06-12 15:10:11'),(4459,'Brunópolis',24,'2019-06-12 15:10:11'),(4460,'Brusque',24,'2019-06-12 15:10:11'),(4461,'Caçador',24,'2019-06-12 15:10:11'),(4462,'Caibi',24,'2019-06-12 15:10:11'),(4463,'Calmon',24,'2019-06-12 15:10:11'),(4464,'Camboriú',24,'2019-06-12 15:10:11'),(4465,'Campo Alegre',24,'2019-06-12 15:10:11'),(4466,'Campo Belo do Sul',24,'2019-06-12 15:10:11'),(4467,'Campo Erê',24,'2019-06-12 15:10:11'),(4468,'Campos Novos',24,'2019-06-12 15:10:11'),(4469,'Canelinha',24,'2019-06-12 15:10:11'),(4470,'Canoinhas',24,'2019-06-12 15:10:11'),(4471,'Capão Alto',24,'2019-06-12 15:10:11'),(4472,'Capinzal',24,'2019-06-12 15:10:11'),(4473,'Capivari de Baixo',24,'2019-06-12 15:10:11'),(4474,'Catanduvas',24,'2019-06-12 15:10:11'),(4475,'Caxambu do Sul',24,'2019-06-12 15:10:11'),(4476,'Celso Ramos',24,'2019-06-12 15:10:11'),(4477,'Cerro Negro',24,'2019-06-12 15:10:11'),(4478,'Chapadão do Lageado',24,'2019-06-12 15:10:11'),(4479,'Chapecó',24,'2019-06-12 15:10:11'),(4480,'Cocal do Sul',24,'2019-06-12 15:10:11'),(4481,'Concórdia',24,'2019-06-12 15:10:11'),(4482,'Cordilheira Alta',24,'2019-06-12 15:10:11'),(4483,'Coronel Freitas',24,'2019-06-12 15:10:11'),(4484,'Coronel Martins',24,'2019-06-12 15:10:11'),(4485,'Correia Pinto',24,'2019-06-12 15:10:11'),(4486,'Corupá',24,'2019-06-12 15:10:11'),(4487,'Criciúma',24,'2019-06-12 15:10:11'),(4488,'Cunha Porã',24,'2019-06-12 15:10:11'),(4489,'Cunhataí',24,'2019-06-12 15:10:11'),(4490,'Curitibanos',24,'2019-06-12 15:10:11'),(4491,'Descanso',24,'2019-06-12 15:10:11'),(4492,'Dionísio Cerqueira',24,'2019-06-12 15:10:11'),(4493,'Dona Emma',24,'2019-06-12 15:10:11'),(4494,'Doutor Pedrinho',24,'2019-06-12 15:10:11'),(4495,'Entre Rios',24,'2019-06-12 15:10:11'),(4496,'Ermo',24,'2019-06-12 15:10:11'),(4497,'Erval Velho',24,'2019-06-12 15:10:11'),(4498,'Faxinal dos Guedes',24,'2019-06-12 15:10:11'),(4499,'Flor do Sertão',24,'2019-06-12 15:10:11'),(4500,'Florianópolis',24,'2019-06-12 15:10:11'),(4501,'Formosa do Sul',24,'2019-06-12 15:10:11'),(4502,'Forquilhinha',24,'2019-06-12 15:10:11'),(4503,'Fraiburgo',24,'2019-06-12 15:10:11'),(4504,'Frei Rogério',24,'2019-06-12 15:10:11'),(4505,'Galvão',24,'2019-06-12 15:10:11'),(4506,'Garopaba',24,'2019-06-12 15:10:11'),(4507,'Garuva',24,'2019-06-12 15:10:11'),(4508,'Gaspar',24,'2019-06-12 15:10:11'),(4509,'Governador Celso Ramos',24,'2019-06-12 15:10:11'),(4510,'Grão Pará',24,'2019-06-12 15:10:11'),(4511,'Gravatal',24,'2019-06-12 15:10:11'),(4512,'Guabiruba',24,'2019-06-12 15:10:11'),(4513,'Guaraciaba',24,'2019-06-12 15:10:11'),(4514,'Guaramirim',24,'2019-06-12 15:10:11'),(4515,'Guarujá do Sul',24,'2019-06-12 15:10:11'),(4516,'Guatambú',24,'2019-06-12 15:10:11'),(4517,'Herval d`Oeste',24,'2019-06-12 15:10:11'),(4518,'Ibiam',24,'2019-06-12 15:10:11'),(4519,'Ibicaré',24,'2019-06-12 15:10:11'),(4520,'Ibirama',24,'2019-06-12 15:10:11'),(4521,'Içara',24,'2019-06-12 15:10:11'),(4522,'Ilhota',24,'2019-06-12 15:10:11'),(4523,'Imaruí',24,'2019-06-12 15:10:11'),(4524,'Imbituba',24,'2019-06-12 15:10:11'),(4525,'Imbuia',24,'2019-06-12 15:10:11'),(4526,'Indaial',24,'2019-06-12 15:10:11'),(4527,'Iomerê',24,'2019-06-12 15:10:11'),(4528,'Ipira',24,'2019-06-12 15:10:11'),(4529,'Iporã do Oeste',24,'2019-06-12 15:10:11'),(4530,'Ipuaçu',24,'2019-06-12 15:10:11'),(4531,'Ipumirim',24,'2019-06-12 15:10:11'),(4532,'Iraceminha',24,'2019-06-12 15:10:11'),(4533,'Irani',24,'2019-06-12 15:10:11'),(4534,'Irati',24,'2019-06-12 15:10:11'),(4535,'Irineópolis',24,'2019-06-12 15:10:11'),(4536,'Itá',24,'2019-06-12 15:10:11'),(4537,'Itaiópolis',24,'2019-06-12 15:10:11'),(4538,'Itajaí',24,'2019-06-12 15:10:11'),(4539,'Itapema',24,'2019-06-12 15:10:11'),(4540,'Itapiranga',24,'2019-06-12 15:10:11'),(4541,'Itapoá',24,'2019-06-12 15:10:11'),(4542,'Ituporanga',24,'2019-06-12 15:10:11'),(4543,'Jaborá',24,'2019-06-12 15:10:11'),(4544,'Jacinto Machado',24,'2019-06-12 15:10:11'),(4545,'Jaguaruna',24,'2019-06-12 15:10:11'),(4546,'Jaraguá do Sul',24,'2019-06-12 15:10:11'),(4547,'Jardinópolis',24,'2019-06-12 15:10:11'),(4548,'Joaçaba',24,'2019-06-12 15:10:11'),(4549,'Joinville',24,'2019-06-12 15:10:11'),(4550,'José Boiteux',24,'2019-06-12 15:10:11'),(4551,'Jupiá',24,'2019-06-12 15:10:11'),(4552,'Lacerdópolis',24,'2019-06-12 15:10:11'),(4553,'Lages',24,'2019-06-12 15:10:11'),(4554,'Laguna',24,'2019-06-12 15:10:11'),(4555,'Lajeado Grande',24,'2019-06-12 15:10:11'),(4556,'Laurentino',24,'2019-06-12 15:10:11'),(4557,'Lauro Muller',24,'2019-06-12 15:10:11'),(4558,'Lebon Régis',24,'2019-06-12 15:10:11'),(4559,'Leoberto Leal',24,'2019-06-12 15:10:11'),(4560,'Lindóia do Sul',24,'2019-06-12 15:10:11'),(4561,'Lontras',24,'2019-06-12 15:10:11'),(4562,'Luiz Alves',24,'2019-06-12 15:10:11'),(4563,'Luzerna',24,'2019-06-12 15:10:11'),(4564,'Macieira',24,'2019-06-12 15:10:11'),(4565,'Mafra',24,'2019-06-12 15:10:11'),(4566,'Major Gercino',24,'2019-06-12 15:10:11'),(4567,'Major Vieira',24,'2019-06-12 15:10:11'),(4568,'Maracajá',24,'2019-06-12 15:10:11'),(4569,'Maravilha',24,'2019-06-12 15:10:11'),(4570,'Marema',24,'2019-06-12 15:10:11'),(4571,'Massaranduba',24,'2019-06-12 15:10:11'),(4572,'Matos Costa',24,'2019-06-12 15:10:11'),(4573,'Meleiro',24,'2019-06-12 15:10:11'),(4574,'Mirim Doce',24,'2019-06-12 15:10:11'),(4575,'Modelo',24,'2019-06-12 15:10:11'),(4576,'Mondaí',24,'2019-06-12 15:10:11'),(4577,'Monte Carlo',24,'2019-06-12 15:10:11'),(4578,'Monte Castelo',24,'2019-06-12 15:10:11'),(4579,'Morro da Fumaça',24,'2019-06-12 15:10:11'),(4580,'Morro Grande',24,'2019-06-12 15:10:11'),(4581,'Navegantes',24,'2019-06-12 15:10:11'),(4582,'Nova Erechim',24,'2019-06-12 15:10:11'),(4583,'Nova Itaberaba',24,'2019-06-12 15:10:11'),(4584,'Nova Trento',24,'2019-06-12 15:10:11'),(4585,'Nova Veneza',24,'2019-06-12 15:10:11'),(4586,'Novo Horizonte',24,'2019-06-12 15:10:11'),(4587,'Orleans',24,'2019-06-12 15:10:11'),(4588,'Otacílio Costa',24,'2019-06-12 15:10:11'),(4589,'Ouro',24,'2019-06-12 15:10:11'),(4590,'Ouro Verde',24,'2019-06-12 15:10:11'),(4591,'Paial',24,'2019-06-12 15:10:11'),(4592,'Painel',24,'2019-06-12 15:10:11'),(4593,'Palhoça',24,'2019-06-12 15:10:11'),(4594,'Palma Sola',24,'2019-06-12 15:10:11'),(4595,'Palmeira',24,'2019-06-12 15:10:11'),(4596,'Palmitos',24,'2019-06-12 15:10:11'),(4597,'Papanduva',24,'2019-06-12 15:10:11'),(4598,'Paraíso',24,'2019-06-12 15:10:11'),(4599,'Passo de Torres',24,'2019-06-12 15:10:11'),(4600,'Passos Maia',24,'2019-06-12 15:10:11'),(4601,'Paulo Lopes',24,'2019-06-12 15:10:11'),(4602,'Pedras Grandes',24,'2019-06-12 15:10:11'),(4603,'Penha',24,'2019-06-12 15:10:11'),(4604,'Peritiba',24,'2019-06-12 15:10:11'),(4605,'Petrolândia',24,'2019-06-12 15:10:11'),(4606,'Piçarras',24,'2019-06-12 15:10:11'),(4607,'Pinhalzinho',24,'2019-06-12 15:10:11'),(4608,'Pinheiro Preto',24,'2019-06-12 15:10:11'),(4609,'Piratuba',24,'2019-06-12 15:10:11'),(4610,'Planalto Alegre',24,'2019-06-12 15:10:11'),(4611,'Pomerode',24,'2019-06-12 15:10:11'),(4612,'Ponte Alta',24,'2019-06-12 15:10:11'),(4613,'Ponte Alta do Norte',24,'2019-06-12 15:10:11'),(4614,'Ponte Serrada',24,'2019-06-12 15:10:11'),(4615,'Porto Belo',24,'2019-06-12 15:10:11'),(4616,'Porto União',24,'2019-06-12 15:10:11'),(4617,'Pouso Redondo',24,'2019-06-12 15:10:11'),(4618,'Praia Grande',24,'2019-06-12 15:10:11'),(4619,'Presidente Castelo Branco',24,'2019-06-12 15:10:11'),(4620,'Presidente Getúlio',24,'2019-06-12 15:10:11'),(4621,'Presidente Nereu',24,'2019-06-12 15:10:11'),(4622,'Princesa',24,'2019-06-12 15:10:11'),(4623,'Quilombo',24,'2019-06-12 15:10:11'),(4624,'Rancho Queimado',24,'2019-06-12 15:10:11'),(4625,'Rio das Antas',24,'2019-06-12 15:10:11'),(4626,'Rio do Campo',24,'2019-06-12 15:10:11'),(4627,'Rio do Oeste',24,'2019-06-12 15:10:11'),(4628,'Rio do Sul',24,'2019-06-12 15:10:11'),(4629,'Rio dos Cedros',24,'2019-06-12 15:10:11'),(4630,'Rio Fortuna',24,'2019-06-12 15:10:11'),(4631,'Rio Negrinho',24,'2019-06-12 15:10:11'),(4632,'Rio Rufino',24,'2019-06-12 15:10:11'),(4633,'Riqueza',24,'2019-06-12 15:10:11'),(4634,'Rodeio',24,'2019-06-12 15:10:11'),(4635,'Romelândia',24,'2019-06-12 15:10:11'),(4636,'Salete',24,'2019-06-12 15:10:11'),(4637,'Saltinho',24,'2019-06-12 15:10:11'),(4638,'Salto Veloso',24,'2019-06-12 15:10:11'),(4639,'Sangão',24,'2019-06-12 15:10:11'),(4640,'Santa Cecília',24,'2019-06-12 15:10:11'),(4641,'Santa Helena',24,'2019-06-12 15:10:11'),(4642,'Santa Rosa de Lima',24,'2019-06-12 15:10:11'),(4643,'Santa Rosa do Sul',24,'2019-06-12 15:10:11'),(4644,'Santa Terezinha',24,'2019-06-12 15:10:11'),(4645,'Santa Terezinha do Progresso',24,'2019-06-12 15:10:11'),(4646,'Santiago do Sul',24,'2019-06-12 15:10:11'),(4647,'Santo Amaro da Imperatriz',24,'2019-06-12 15:10:11'),(4648,'São Bento do Sul',24,'2019-06-12 15:10:11'),(4649,'São Bernardino',24,'2019-06-12 15:10:11'),(4650,'São Bonifácio',24,'2019-06-12 15:10:11'),(4651,'São Carlos',24,'2019-06-12 15:10:11'),(4652,'São Cristovão do Sul',24,'2019-06-12 15:10:11'),(4653,'São Domingos',24,'2019-06-12 15:10:11'),(4654,'São Francisco do Sul',24,'2019-06-12 15:10:11'),(4655,'São João Batista',24,'2019-06-12 15:10:11'),(4656,'São João do Itaperiú',24,'2019-06-12 15:10:11'),(4657,'São João do Oeste',24,'2019-06-12 15:10:11'),(4658,'São João do Sul',24,'2019-06-12 15:10:11'),(4659,'São Joaquim',24,'2019-06-12 15:10:11'),(4660,'São José',24,'2019-06-12 15:10:11'),(4661,'São José do Cedro',24,'2019-06-12 15:10:11'),(4662,'São José do Cerrito',24,'2019-06-12 15:10:11'),(4663,'São Lourenço do Oeste',24,'2019-06-12 15:10:11'),(4664,'São Ludgero',24,'2019-06-12 15:10:11'),(4665,'São Martinho',24,'2019-06-12 15:10:11'),(4666,'São Miguel da Boa Vista',24,'2019-06-12 15:10:11'),(4667,'São Miguel do Oeste',24,'2019-06-12 15:10:11'),(4668,'São Pedro de Alcântara',24,'2019-06-12 15:10:11'),(4669,'Saudades',24,'2019-06-12 15:10:11'),(4670,'Schroeder',24,'2019-06-12 15:10:11'),(4671,'Seara',24,'2019-06-12 15:10:11'),(4672,'Serra Alta',24,'2019-06-12 15:10:11'),(4673,'Siderópolis',24,'2019-06-12 15:10:11'),(4674,'Sombrio',24,'2019-06-12 15:10:11'),(4675,'Sul Brasil',24,'2019-06-12 15:10:11'),(4676,'Taió',24,'2019-06-12 15:10:11'),(4677,'Tangará',24,'2019-06-12 15:10:11'),(4678,'Tigrinhos',24,'2019-06-12 15:10:11'),(4679,'Tijucas',24,'2019-06-12 15:10:11'),(4680,'Timbé do Sul',24,'2019-06-12 15:10:11'),(4681,'Timbó',24,'2019-06-12 15:10:11'),(4682,'Timbó Grande',24,'2019-06-12 15:10:11'),(4683,'Três Barras',24,'2019-06-12 15:10:11'),(4684,'Treviso',24,'2019-06-12 15:10:11'),(4685,'Treze de Maio',24,'2019-06-12 15:10:11'),(4686,'Treze Tílias',24,'2019-06-12 15:10:11'),(4687,'Trombudo Central',24,'2019-06-12 15:10:11'),(4688,'Tubarão',24,'2019-06-12 15:10:11'),(4689,'Tunápolis',24,'2019-06-12 15:10:11'),(4690,'Turvo',24,'2019-06-12 15:10:11'),(4691,'União do Oeste',24,'2019-06-12 15:10:11'),(4692,'Urubici',24,'2019-06-12 15:10:11'),(4693,'Urupema',24,'2019-06-12 15:10:11'),(4694,'Urussanga',24,'2019-06-12 15:10:11'),(4695,'Vargeão',24,'2019-06-12 15:10:11'),(4696,'Vargem',24,'2019-06-12 15:10:11'),(4697,'Vargem Bonita',24,'2019-06-12 15:10:11'),(4698,'Vidal Ramos',24,'2019-06-12 15:10:11'),(4699,'Videira',24,'2019-06-12 15:10:11'),(4700,'Vitor Meireles',24,'2019-06-12 15:10:11'),(4701,'Witmarsum',24,'2019-06-12 15:10:11'),(4702,'Xanxerê',24,'2019-06-12 15:10:11'),(4703,'Xavantina',24,'2019-06-12 15:10:11'),(4704,'Xaxim',24,'2019-06-12 15:10:11'),(4705,'Zortéa',24,'2019-06-12 15:10:11'),(4706,'Adamantina',26,'2019-06-12 15:10:11'),(4707,'Adolfo',26,'2019-06-12 15:10:11'),(4708,'Aguaí',26,'2019-06-12 15:10:11'),(4709,'Águas da Prata',26,'2019-06-12 15:10:11'),(4710,'Águas de Lindóia',26,'2019-06-12 15:10:11'),(4711,'Águas de Santa Bárbara',26,'2019-06-12 15:10:11'),(4712,'Águas de São Pedro',26,'2019-06-12 15:10:11'),(4713,'Agudos',26,'2019-06-12 15:10:11'),(4714,'Alambari',26,'2019-06-12 15:10:11'),(4715,'Alfredo Marcondes',26,'2019-06-12 15:10:11'),(4716,'Altair',26,'2019-06-12 15:10:11'),(4717,'Altinópolis',26,'2019-06-12 15:10:11'),(4718,'Alto Alegre',26,'2019-06-12 15:10:11'),(4719,'Alumínio',26,'2019-06-12 15:10:11'),(4720,'Álvares Florence',26,'2019-06-12 15:10:11'),(4721,'Álvares Machado',26,'2019-06-12 15:10:11'),(4722,'Álvaro de Carvalho',26,'2019-06-12 15:10:11'),(4723,'Alvinlândia',26,'2019-06-12 15:10:11'),(4724,'Americana',26,'2019-06-12 15:10:11'),(4725,'Américo Brasiliense',26,'2019-06-12 15:10:11'),(4726,'Américo de Campos',26,'2019-06-12 15:10:11'),(4727,'Amparo',26,'2019-06-12 15:10:11'),(4728,'Analândia',26,'2019-06-12 15:10:11'),(4729,'Andradina',26,'2019-06-12 15:10:11'),(4730,'Angatuba',26,'2019-06-12 15:10:11'),(4731,'Anhembi',26,'2019-06-12 15:10:11'),(4732,'Anhumas',26,'2019-06-12 15:10:11'),(4733,'Aparecida',26,'2019-06-12 15:10:11'),(4734,'Aparecida d`Oeste',26,'2019-06-12 15:10:11'),(4735,'Apiaí',26,'2019-06-12 15:10:11'),(4736,'Araçariguama',26,'2019-06-12 15:10:11'),(4737,'Araçatuba',26,'2019-06-12 15:10:11'),(4738,'Araçoiaba da Serra',26,'2019-06-12 15:10:11'),(4739,'Aramina',26,'2019-06-12 15:10:11'),(4740,'Arandu',26,'2019-06-12 15:10:11'),(4741,'Arapeí',26,'2019-06-12 15:10:11'),(4742,'Araraquara',26,'2019-06-12 15:10:11'),(4743,'Araras',26,'2019-06-12 15:10:11'),(4744,'Arco-Íris',26,'2019-06-12 15:10:11'),(4745,'Arealva',26,'2019-06-12 15:10:11'),(4746,'Areias',26,'2019-06-12 15:10:11'),(4747,'Areiópolis',26,'2019-06-12 15:10:11'),(4748,'Ariranha',26,'2019-06-12 15:10:11'),(4749,'Artur Nogueira',26,'2019-06-12 15:10:11'),(4750,'Arujá',26,'2019-06-12 15:10:11'),(4751,'Aspásia',26,'2019-06-12 15:10:11'),(4752,'Assis',26,'2019-06-12 15:10:11'),(4753,'Atibaia',26,'2019-06-12 15:10:11'),(4754,'Auriflama',26,'2019-06-12 15:10:11'),(4755,'Avaí',26,'2019-06-12 15:10:11'),(4756,'Avanhandava',26,'2019-06-12 15:10:11'),(4757,'Avaré',26,'2019-06-12 15:10:11'),(4758,'Bady Bassitt',26,'2019-06-12 15:10:11'),(4759,'Balbinos',26,'2019-06-12 15:10:11'),(4760,'Bálsamo',26,'2019-06-12 15:10:11'),(4761,'Bananal',26,'2019-06-12 15:10:11'),(4762,'Barão de Antonina',26,'2019-06-12 15:10:11'),(4763,'Barbosa',26,'2019-06-12 15:10:11'),(4764,'Bariri',26,'2019-06-12 15:10:11'),(4765,'Barra Bonita',26,'2019-06-12 15:10:11'),(4766,'Barra do Chapéu',26,'2019-06-12 15:10:11'),(4767,'Barra do Turvo',26,'2019-06-12 15:10:11'),(4768,'Barretos',26,'2019-06-12 15:10:11'),(4769,'Barrinha',26,'2019-06-12 15:10:11'),(4770,'Barueri',26,'2019-06-12 15:10:11'),(4771,'Bastos',26,'2019-06-12 15:10:11'),(4772,'Batatais',26,'2019-06-12 15:10:11'),(4773,'Bauru',26,'2019-06-12 15:10:11'),(4774,'Bebedouro',26,'2019-06-12 15:10:11'),(4775,'Bento de Abreu',26,'2019-06-12 15:10:11'),(4776,'Bernardino de Campos',26,'2019-06-12 15:10:11'),(4777,'Bertioga',26,'2019-06-12 15:10:11'),(4778,'Bilac',26,'2019-06-12 15:10:11'),(4779,'Birigui',26,'2019-06-12 15:10:11'),(4780,'Biritiba-Mirim',26,'2019-06-12 15:10:11'),(4781,'Boa Esperança do Sul',26,'2019-06-12 15:10:11'),(4782,'Bocaina',26,'2019-06-12 15:10:11'),(4783,'Bofete',26,'2019-06-12 15:10:11'),(4784,'Boituva',26,'2019-06-12 15:10:11'),(4785,'Bom Jesus dos Perdões',26,'2019-06-12 15:10:11'),(4786,'Bom Sucesso de Itararé',26,'2019-06-12 15:10:11'),(4787,'Borá',26,'2019-06-12 15:10:11'),(4788,'Boracéia',26,'2019-06-12 15:10:11'),(4789,'Borborema',26,'2019-06-12 15:10:11'),(4790,'Borebi',26,'2019-06-12 15:10:11'),(4791,'Botucatu',26,'2019-06-12 15:10:11'),(4792,'Bragança Paulista',26,'2019-06-12 15:10:11'),(4793,'Braúna',26,'2019-06-12 15:10:11'),(4794,'Brejo Alegre',26,'2019-06-12 15:10:11'),(4795,'Brodowski',26,'2019-06-12 15:10:11'),(4796,'Brotas',26,'2019-06-12 15:10:11'),(4797,'Buri',26,'2019-06-12 15:10:11'),(4798,'Buritama',26,'2019-06-12 15:10:11'),(4799,'Buritizal',26,'2019-06-12 15:10:11'),(4800,'Cabrália Paulista',26,'2019-06-12 15:10:11'),(4801,'Cabreúva',26,'2019-06-12 15:10:11'),(4802,'Caçapava',26,'2019-06-12 15:10:11'),(4803,'Cachoeira Paulista',26,'2019-06-12 15:10:11'),(4804,'Caconde',26,'2019-06-12 15:10:11'),(4805,'Cafelândia',26,'2019-06-12 15:10:11'),(4806,'Caiabu',26,'2019-06-12 15:10:11'),(4807,'Caieiras',26,'2019-06-12 15:10:11'),(4808,'Caiuá',26,'2019-06-12 15:10:11'),(4809,'Cajamar',26,'2019-06-12 15:10:11'),(4810,'Cajati',26,'2019-06-12 15:10:11'),(4811,'Cajobi',26,'2019-06-12 15:10:11'),(4812,'Cajuru',26,'2019-06-12 15:10:11'),(4813,'Campina do Monte Alegre',26,'2019-06-12 15:10:11'),(4814,'Campinas',26,'2019-06-12 15:10:11'),(4815,'Campo Limpo Paulista',26,'2019-06-12 15:10:11'),(4816,'Campos do Jordão',26,'2019-06-12 15:10:11'),(4817,'Campos Novos Paulista',26,'2019-06-12 15:10:11'),(4818,'Cananéia',26,'2019-06-12 15:10:11'),(4819,'Canas',26,'2019-06-12 15:10:11'),(4820,'Cândido Mota',26,'2019-06-12 15:10:11'),(4821,'Cândido Rodrigues',26,'2019-06-12 15:10:11'),(4822,'Canitar',26,'2019-06-12 15:10:11'),(4823,'Capão Bonito',26,'2019-06-12 15:10:11'),(4824,'Capela do Alto',26,'2019-06-12 15:10:11'),(4825,'Capivari',26,'2019-06-12 15:10:11'),(4826,'Caraguatatuba',26,'2019-06-12 15:10:11'),(4827,'Carapicuíba',26,'2019-06-12 15:10:11'),(4828,'Cardoso',26,'2019-06-12 15:10:11'),(4829,'Casa Branca',26,'2019-06-12 15:10:11'),(4830,'Cássia dos Coqueiros',26,'2019-06-12 15:10:11'),(4831,'Castilho',26,'2019-06-12 15:10:11'),(4832,'Catanduva',26,'2019-06-12 15:10:11'),(4833,'Catiguá',26,'2019-06-12 15:10:11'),(4834,'Cedral',26,'2019-06-12 15:10:11'),(4835,'Cerqueira César',26,'2019-06-12 15:10:11'),(4836,'Cerquilho',26,'2019-06-12 15:10:11'),(4837,'Cesário Lange',26,'2019-06-12 15:10:11'),(4838,'Charqueada',26,'2019-06-12 15:10:11'),(4839,'Chavantes',26,'2019-06-12 15:10:11'),(4840,'Clementina',26,'2019-06-12 15:10:11'),(4841,'Colina',26,'2019-06-12 15:10:11'),(4842,'Colômbia',26,'2019-06-12 15:10:11'),(4843,'Conchal',26,'2019-06-12 15:10:11'),(4844,'Conchas',26,'2019-06-12 15:10:11'),(4845,'Cordeirópolis',26,'2019-06-12 15:10:11'),(4846,'Coroados',26,'2019-06-12 15:10:11'),(4847,'Coronel Macedo',26,'2019-06-12 15:10:11'),(4848,'Corumbataí',26,'2019-06-12 15:10:11'),(4849,'Cosmópolis',26,'2019-06-12 15:10:11'),(4850,'Cosmorama',26,'2019-06-12 15:10:11'),(4851,'Cotia',26,'2019-06-12 15:10:11'),(4852,'Cravinhos',26,'2019-06-12 15:10:11'),(4853,'Cristais Paulista',26,'2019-06-12 15:10:11'),(4854,'Cruzália',26,'2019-06-12 15:10:11'),(4855,'Cruzeiro',26,'2019-06-12 15:10:11'),(4856,'Cubatão',26,'2019-06-12 15:10:11'),(4857,'Cunha',26,'2019-06-12 15:10:11'),(4858,'Descalvado',26,'2019-06-12 15:10:11'),(4859,'Diadema',26,'2019-06-12 15:10:11'),(4860,'Dirce Reis',26,'2019-06-12 15:10:11'),(4861,'Divinolândia',26,'2019-06-12 15:10:11'),(4862,'Dobrada',26,'2019-06-12 15:10:11'),(4863,'Dois Córregos',26,'2019-06-12 15:10:11'),(4864,'Dolcinópolis',26,'2019-06-12 15:10:11'),(4865,'Dourado',26,'2019-06-12 15:10:11'),(4866,'Dracena',26,'2019-06-12 15:10:11'),(4867,'Duartina',26,'2019-06-12 15:10:11'),(4868,'Dumont',26,'2019-06-12 15:10:11'),(4869,'Echaporã',26,'2019-06-12 15:10:11'),(4870,'Eldorado',26,'2019-06-12 15:10:11'),(4871,'Elias Fausto',26,'2019-06-12 15:10:11'),(4872,'Elisiário',26,'2019-06-12 15:10:11'),(4873,'Embaúba',26,'2019-06-12 15:10:11'),(4874,'Embu',26,'2019-06-12 15:10:11'),(4875,'Embu-Guaçu',26,'2019-06-12 15:10:11'),(4876,'Emilianópolis',26,'2019-06-12 15:10:11'),(4877,'Engenheiro Coelho',26,'2019-06-12 15:10:11'),(4878,'Espírito Santo do Pinhal',26,'2019-06-12 15:10:11'),(4879,'Espírito Santo do Turvo',26,'2019-06-12 15:10:11'),(4880,'Estiva Gerbi',26,'2019-06-12 15:10:11'),(4881,'Estrela d`Oeste',26,'2019-06-12 15:10:11'),(4882,'Estrela do Norte',26,'2019-06-12 15:10:11'),(4883,'Euclides da Cunha Paulista',26,'2019-06-12 15:10:11'),(4884,'Fartura',26,'2019-06-12 15:10:11'),(4885,'Fernando Prestes',26,'2019-06-12 15:10:11'),(4886,'Fernandópolis',26,'2019-06-12 15:10:11'),(4887,'Fernão',26,'2019-06-12 15:10:11'),(4888,'Ferraz de Vasconcelos',26,'2019-06-12 15:10:11'),(4889,'Flora Rica',26,'2019-06-12 15:10:11'),(4890,'Floreal',26,'2019-06-12 15:10:11'),(4891,'Flórida Paulista',26,'2019-06-12 15:10:11'),(4892,'Florínia',26,'2019-06-12 15:10:11'),(4893,'Franca',26,'2019-06-12 15:10:11'),(4894,'Francisco Morato',26,'2019-06-12 15:10:11'),(4895,'Franco da Rocha',26,'2019-06-12 15:10:11'),(4896,'Gabriel Monteiro',26,'2019-06-12 15:10:11'),(4897,'Gália',26,'2019-06-12 15:10:11'),(4898,'Garça',26,'2019-06-12 15:10:11'),(4899,'Gastão Vidigal',26,'2019-06-12 15:10:11'),(4900,'Gavião Peixoto',26,'2019-06-12 15:10:11'),(4901,'General Salgado',26,'2019-06-12 15:10:11'),(4902,'Getulina',26,'2019-06-12 15:10:11'),(4903,'Glicério',26,'2019-06-12 15:10:11'),(4904,'Guaiçara',26,'2019-06-12 15:10:11'),(4905,'Guaimbê',26,'2019-06-12 15:10:11'),(4906,'Guaíra',26,'2019-06-12 15:10:11'),(4907,'Guapiaçu',26,'2019-06-12 15:10:11'),(4908,'Guapiara',26,'2019-06-12 15:10:11'),(4909,'Guará',26,'2019-06-12 15:10:11'),(4910,'Guaraçaí',26,'2019-06-12 15:10:11'),(4911,'Guaraci',26,'2019-06-12 15:10:11'),(4912,'Guarani d`Oeste',26,'2019-06-12 15:10:11'),(4913,'Guarantã',26,'2019-06-12 15:10:11'),(4914,'Guararapes',26,'2019-06-12 15:10:11'),(4915,'Guararema',26,'2019-06-12 15:10:11'),(4916,'Guaratinguetá',26,'2019-06-12 15:10:11'),(4917,'Guareí',26,'2019-06-12 15:10:11'),(4918,'Guariba',26,'2019-06-12 15:10:11'),(4919,'Guarujá',26,'2019-06-12 15:10:11'),(4920,'Guarulhos',26,'2019-06-12 15:10:11'),(4921,'Guatapará',26,'2019-06-12 15:10:11'),(4922,'Guzolândia',26,'2019-06-12 15:10:11'),(4923,'Herculândia',26,'2019-06-12 15:10:11'),(4924,'Holambra',26,'2019-06-12 15:10:11'),(4925,'Hortolândia',26,'2019-06-12 15:10:11'),(4926,'Iacanga',26,'2019-06-12 15:10:11'),(4927,'Iacri',26,'2019-06-12 15:10:11'),(4928,'Iaras',26,'2019-06-12 15:10:11'),(4929,'Ibaté',26,'2019-06-12 15:10:11'),(4930,'Ibirá',26,'2019-06-12 15:10:11'),(4931,'Ibirarema',26,'2019-06-12 15:10:11'),(4932,'Ibitinga',26,'2019-06-12 15:10:11'),(4933,'Ibiúna',26,'2019-06-12 15:10:11'),(4934,'Icém',26,'2019-06-12 15:10:11'),(4935,'Iepê',26,'2019-06-12 15:10:11'),(4936,'Igaraçu do Tietê',26,'2019-06-12 15:10:11'),(4937,'Igarapava',26,'2019-06-12 15:10:11'),(4938,'Igaratá',26,'2019-06-12 15:10:11'),(4939,'Iguape',26,'2019-06-12 15:10:11'),(4940,'Ilha Comprida',26,'2019-06-12 15:10:11'),(4941,'Ilha Solteira',26,'2019-06-12 15:10:11'),(4942,'Ilhabela',26,'2019-06-12 15:10:11'),(4943,'Indaiatuba',26,'2019-06-12 15:10:11'),(4944,'Indiana',26,'2019-06-12 15:10:11'),(4945,'Indiaporã',26,'2019-06-12 15:10:11'),(4946,'Inúbia Paulista',26,'2019-06-12 15:10:11'),(4947,'Ipaussu',26,'2019-06-12 15:10:11'),(4948,'Iperó',26,'2019-06-12 15:10:11'),(4949,'Ipeúna',26,'2019-06-12 15:10:11'),(4950,'Ipiguá',26,'2019-06-12 15:10:11'),(4951,'Iporanga',26,'2019-06-12 15:10:11'),(4952,'Ipuã',26,'2019-06-12 15:10:11'),(4953,'Iracemápolis',26,'2019-06-12 15:10:11'),(4954,'Irapuã',26,'2019-06-12 15:10:11'),(4955,'Irapuru',26,'2019-06-12 15:10:11'),(4956,'Itaberá',26,'2019-06-12 15:10:11'),(4957,'Itaí',26,'2019-06-12 15:10:11'),(4958,'Itajobi',26,'2019-06-12 15:10:11'),(4959,'Itaju',26,'2019-06-12 15:10:11'),(4960,'Itanhaém',26,'2019-06-12 15:10:11'),(4961,'Itaóca',26,'2019-06-12 15:10:11'),(4962,'Itapecerica da Serra',26,'2019-06-12 15:10:11'),(4963,'Itapetininga',26,'2019-06-12 15:10:11'),(4964,'Itapeva',26,'2019-06-12 15:10:11'),(4965,'Itapevi',26,'2019-06-12 15:10:11'),(4966,'Itapira',26,'2019-06-12 15:10:11'),(4967,'Itapirapuã Paulista',26,'2019-06-12 15:10:11'),(4968,'Itápolis',26,'2019-06-12 15:10:11'),(4969,'Itaporanga',26,'2019-06-12 15:10:11'),(4970,'Itapuí',26,'2019-06-12 15:10:11'),(4971,'Itapura',26,'2019-06-12 15:10:11'),(4972,'Itaquaquecetuba',26,'2019-06-12 15:10:11'),(4973,'Itararé',26,'2019-06-12 15:10:11'),(4974,'Itariri',26,'2019-06-12 15:10:11'),(4975,'Itatiba',26,'2019-06-12 15:10:11'),(4976,'Itatinga',26,'2019-06-12 15:10:11'),(4977,'Itirapina',26,'2019-06-12 15:10:11'),(4978,'Itirapuã',26,'2019-06-12 15:10:11'),(4979,'Itobi',26,'2019-06-12 15:10:11'),(4980,'Itu',26,'2019-06-12 15:10:11'),(4981,'Itupeva',26,'2019-06-12 15:10:11'),(4982,'Ituverava',26,'2019-06-12 15:10:11'),(4983,'Jaborandi',26,'2019-06-12 15:10:11'),(4984,'Jaboticabal',26,'2019-06-12 15:10:11'),(4985,'Jacareí',26,'2019-06-12 15:10:11'),(4986,'Jaci',26,'2019-06-12 15:10:11'),(4987,'Jacupiranga',26,'2019-06-12 15:10:11'),(4988,'Jaguariúna',26,'2019-06-12 15:10:11'),(4989,'Jales',26,'2019-06-12 15:10:11'),(4990,'Jambeiro',26,'2019-06-12 15:10:11'),(4991,'Jandira',26,'2019-06-12 15:10:11'),(4992,'Jardinópolis',26,'2019-06-12 15:10:11'),(4993,'Jarinu',26,'2019-06-12 15:10:11'),(4994,'Jaú',26,'2019-06-12 15:10:11'),(4995,'Jeriquara',26,'2019-06-12 15:10:11'),(4996,'Joanópolis',26,'2019-06-12 15:10:11'),(4997,'João Ramalho',26,'2019-06-12 15:10:11'),(4998,'José Bonifácio',26,'2019-06-12 15:10:11'),(4999,'Júlio Mesquita',26,'2019-06-12 15:10:11'),(5000,'Jumirim',26,'2019-06-12 15:10:11'),(5001,'Jundiaí',26,'2019-06-12 15:10:11'),(5002,'Junqueirópolis',26,'2019-06-12 15:10:11'),(5003,'Juquiá',26,'2019-06-12 15:10:11'),(5004,'Juquitiba',26,'2019-06-12 15:10:11'),(5005,'Lagoinha',26,'2019-06-12 15:10:11'),(5006,'Laranjal Paulista',26,'2019-06-12 15:10:11'),(5007,'Lavínia',26,'2019-06-12 15:10:11'),(5008,'Lavrinhas',26,'2019-06-12 15:10:11'),(5009,'Leme',26,'2019-06-12 15:10:11'),(5010,'Lençóis Paulista',26,'2019-06-12 15:10:11'),(5011,'Limeira',26,'2019-06-12 15:10:11'),(5012,'Lindóia',26,'2019-06-12 15:10:11'),(5013,'Lins',26,'2019-06-12 15:10:11'),(5014,'Lorena',26,'2019-06-12 15:10:11'),(5015,'Lourdes',26,'2019-06-12 15:10:11'),(5016,'Louveira',26,'2019-06-12 15:10:11'),(5017,'Lucélia',26,'2019-06-12 15:10:11'),(5018,'Lucianópolis',26,'2019-06-12 15:10:11'),(5019,'Luís Antônio',26,'2019-06-12 15:10:11'),(5020,'Luiziânia',26,'2019-06-12 15:10:11'),(5021,'Lupércio',26,'2019-06-12 15:10:11'),(5022,'Lutécia',26,'2019-06-12 15:10:11'),(5023,'Macatuba',26,'2019-06-12 15:10:11'),(5024,'Macaubal',26,'2019-06-12 15:10:11'),(5025,'Macedônia',26,'2019-06-12 15:10:11'),(5026,'Magda',26,'2019-06-12 15:10:11'),(5027,'Mairinque',26,'2019-06-12 15:10:11'),(5028,'Mairiporã',26,'2019-06-12 15:10:11'),(5029,'Manduri',26,'2019-06-12 15:10:11'),(5030,'Marabá Paulista',26,'2019-06-12 15:10:11'),(5031,'Maracaí',26,'2019-06-12 15:10:11'),(5032,'Marapoama',26,'2019-06-12 15:10:11'),(5033,'Mariápolis',26,'2019-06-12 15:10:11'),(5034,'Marília',26,'2019-06-12 15:10:11'),(5035,'Marinópolis',26,'2019-06-12 15:10:11'),(5036,'Martinópolis',26,'2019-06-12 15:10:11'),(5037,'Matão',26,'2019-06-12 15:10:11'),(5038,'Mauá',26,'2019-06-12 15:10:11'),(5039,'Mendonça',26,'2019-06-12 15:10:11'),(5040,'Meridiano',26,'2019-06-12 15:10:11'),(5041,'Mesópolis',26,'2019-06-12 15:10:11'),(5042,'Miguelópolis',26,'2019-06-12 15:10:11'),(5043,'Mineiros do Tietê',26,'2019-06-12 15:10:11'),(5044,'Mira Estrela',26,'2019-06-12 15:10:11'),(5045,'Miracatu',26,'2019-06-12 15:10:11'),(5046,'Mirandópolis',26,'2019-06-12 15:10:11'),(5047,'Mirante do Paranapanema',26,'2019-06-12 15:10:11'),(5048,'Mirassol',26,'2019-06-12 15:10:11'),(5049,'Mirassolândia',26,'2019-06-12 15:10:11'),(5050,'Mococa',26,'2019-06-12 15:10:11'),(5051,'Mogi das Cruzes',26,'2019-06-12 15:10:11'),(5052,'Mogi Guaçu',26,'2019-06-12 15:10:11'),(5053,'Moji Mirim',26,'2019-06-12 15:10:11'),(5054,'Mombuca',26,'2019-06-12 15:10:11'),(5055,'Monções',26,'2019-06-12 15:10:11'),(5056,'Mongaguá',26,'2019-06-12 15:10:11'),(5057,'Monte Alegre do Sul',26,'2019-06-12 15:10:11'),(5058,'Monte Alto',26,'2019-06-12 15:10:11'),(5059,'Monte Aprazível',26,'2019-06-12 15:10:11'),(5060,'Monte Azul Paulista',26,'2019-06-12 15:10:11'),(5061,'Monte Castelo',26,'2019-06-12 15:10:11'),(5062,'Monte Mor',26,'2019-06-12 15:10:11'),(5063,'Monteiro Lobato',26,'2019-06-12 15:10:11'),(5064,'Morro Agudo',26,'2019-06-12 15:10:11'),(5065,'Morungaba',26,'2019-06-12 15:10:11'),(5066,'Motuca',26,'2019-06-12 15:10:11'),(5067,'Murutinga do Sul',26,'2019-06-12 15:10:11'),(5068,'Nantes',26,'2019-06-12 15:10:11'),(5069,'Narandiba',26,'2019-06-12 15:10:11'),(5070,'Natividade da Serra',26,'2019-06-12 15:10:11'),(5071,'Nazaré Paulista',26,'2019-06-12 15:10:11'),(5072,'Neves Paulista',26,'2019-06-12 15:10:11'),(5073,'Nhandeara',26,'2019-06-12 15:10:11'),(5074,'Nipoã',26,'2019-06-12 15:10:11'),(5075,'Nova Aliança',26,'2019-06-12 15:10:11'),(5076,'Nova Campina',26,'2019-06-12 15:10:11'),(5077,'Nova Canaã Paulista',26,'2019-06-12 15:10:11'),(5078,'Nova Castilho',26,'2019-06-12 15:10:11'),(5079,'Nova Europa',26,'2019-06-12 15:10:11'),(5080,'Nova Granada',26,'2019-06-12 15:10:11'),(5081,'Nova Guataporanga',26,'2019-06-12 15:10:11'),(5082,'Nova Independência',26,'2019-06-12 15:10:11'),(5083,'Nova Luzitânia',26,'2019-06-12 15:10:11'),(5084,'Nova Odessa',26,'2019-06-12 15:10:11'),(5085,'Novais',26,'2019-06-12 15:10:11'),(5086,'Novo Horizonte',26,'2019-06-12 15:10:11'),(5087,'Nuporanga',26,'2019-06-12 15:10:11'),(5088,'Ocauçu',26,'2019-06-12 15:10:11'),(5089,'Óleo',26,'2019-06-12 15:10:11'),(5090,'Olímpia',26,'2019-06-12 15:10:11'),(5091,'Onda Verde',26,'2019-06-12 15:10:11'),(5092,'Oriente',26,'2019-06-12 15:10:11'),(5093,'Orindiúva',26,'2019-06-12 15:10:11'),(5094,'Orlândia',26,'2019-06-12 15:10:11'),(5095,'Osasco',26,'2019-06-12 15:10:11'),(5096,'Oscar Bressane',26,'2019-06-12 15:10:11'),(5097,'Osvaldo Cruz',26,'2019-06-12 15:10:11'),(5098,'Ourinhos',26,'2019-06-12 15:10:11'),(5099,'Ouro Verde',26,'2019-06-12 15:10:11'),(5100,'Ouroeste',26,'2019-06-12 15:10:11'),(5101,'Pacaembu',26,'2019-06-12 15:10:11'),(5102,'Palestina',26,'2019-06-12 15:10:11'),(5103,'Palmares Paulista',26,'2019-06-12 15:10:11'),(5104,'Palmeira d`Oeste',26,'2019-06-12 15:10:11'),(5105,'Palmital',26,'2019-06-12 15:10:11'),(5106,'Panorama',26,'2019-06-12 15:10:11'),(5107,'Paraguaçu Paulista',26,'2019-06-12 15:10:11'),(5108,'Paraibuna',26,'2019-06-12 15:10:11'),(5109,'Paraíso',26,'2019-06-12 15:10:11'),(5110,'Paranapanema',26,'2019-06-12 15:10:11'),(5111,'Paranapuã',26,'2019-06-12 15:10:11'),(5112,'Parapuã',26,'2019-06-12 15:10:11'),(5113,'Pardinho',26,'2019-06-12 15:10:11'),(5114,'Pariquera-Açu',26,'2019-06-12 15:10:11'),(5115,'Parisi',26,'2019-06-12 15:10:11'),(5116,'Patrocínio Paulista',26,'2019-06-12 15:10:11'),(5117,'Paulicéia',26,'2019-06-12 15:10:11'),(5118,'Paulínia',26,'2019-06-12 15:10:11'),(5119,'Paulistânia',26,'2019-06-12 15:10:11'),(5120,'Paulo de Faria',26,'2019-06-12 15:10:11'),(5121,'Pederneiras',26,'2019-06-12 15:10:11'),(5122,'Pedra Bela',26,'2019-06-12 15:10:11'),(5123,'Pedranópolis',26,'2019-06-12 15:10:11'),(5124,'Pedregulho',26,'2019-06-12 15:10:11'),(5125,'Pedreira',26,'2019-06-12 15:10:11'),(5126,'Pedrinhas Paulista',26,'2019-06-12 15:10:11'),(5127,'Pedro de Toledo',26,'2019-06-12 15:10:11'),(5128,'Penápolis',26,'2019-06-12 15:10:11'),(5129,'Pereira Barreto',26,'2019-06-12 15:10:11'),(5130,'Pereiras',26,'2019-06-12 15:10:11'),(5131,'Peruíbe',26,'2019-06-12 15:10:11'),(5132,'Piacatu',26,'2019-06-12 15:10:11'),(5133,'Piedade',26,'2019-06-12 15:10:11'),(5134,'Pilar do Sul',26,'2019-06-12 15:10:11'),(5135,'Pindamonhangaba',26,'2019-06-12 15:10:11'),(5136,'Pindorama',26,'2019-06-12 15:10:11'),(5137,'Pinhalzinho',26,'2019-06-12 15:10:11'),(5138,'Piquerobi',26,'2019-06-12 15:10:11'),(5139,'Piquete',26,'2019-06-12 15:10:11'),(5140,'Piracaia',26,'2019-06-12 15:10:11'),(5141,'Piracicaba',26,'2019-06-12 15:10:11'),(5142,'Piraju',26,'2019-06-12 15:10:11'),(5143,'Pirajuí',26,'2019-06-12 15:10:11'),(5144,'Pirangi',26,'2019-06-12 15:10:11'),(5145,'Pirapora do Bom Jesus',26,'2019-06-12 15:10:11'),(5146,'Pirapozinho',26,'2019-06-12 15:10:11'),(5147,'Pirassununga',26,'2019-06-12 15:10:11'),(5148,'Piratininga',26,'2019-06-12 15:10:11'),(5149,'Pitangueiras',26,'2019-06-12 15:10:11'),(5150,'Planalto',26,'2019-06-12 15:10:11'),(5151,'Platina',26,'2019-06-12 15:10:11'),(5152,'Poá',26,'2019-06-12 15:10:11'),(5153,'Poloni',26,'2019-06-12 15:10:11'),(5154,'Pompéia',26,'2019-06-12 15:10:11'),(5155,'Pongaí',26,'2019-06-12 15:10:11'),(5156,'Pontal',26,'2019-06-12 15:10:11'),(5157,'Pontalinda',26,'2019-06-12 15:10:11'),(5158,'Pontes Gestal',26,'2019-06-12 15:10:11'),(5159,'Populina',26,'2019-06-12 15:10:11'),(5160,'Porangaba',26,'2019-06-12 15:10:11'),(5161,'Porto Feliz',26,'2019-06-12 15:10:11'),(5162,'Porto Ferreira',26,'2019-06-12 15:10:11'),(5163,'Potim',26,'2019-06-12 15:10:11'),(5164,'Potirendaba',26,'2019-06-12 15:10:11'),(5165,'Pracinha',26,'2019-06-12 15:10:11'),(5166,'Pradópolis',26,'2019-06-12 15:10:11'),(5167,'Praia Grande',26,'2019-06-12 15:10:11'),(5168,'Pratânia',26,'2019-06-12 15:10:11'),(5169,'Presidente Alves',26,'2019-06-12 15:10:11'),(5170,'Presidente Bernardes',26,'2019-06-12 15:10:11'),(5171,'Presidente Epitácio',26,'2019-06-12 15:10:11'),(5172,'Presidente Prudente',26,'2019-06-12 15:10:11'),(5173,'Presidente Venceslau',26,'2019-06-12 15:10:11'),(5174,'Promissão',26,'2019-06-12 15:10:11'),(5175,'Quadra',26,'2019-06-12 15:10:11'),(5176,'Quatá',26,'2019-06-12 15:10:11'),(5177,'Queiroz',26,'2019-06-12 15:10:11'),(5178,'Queluz',26,'2019-06-12 15:10:11'),(5179,'Quintana',26,'2019-06-12 15:10:11'),(5180,'Rafard',26,'2019-06-12 15:10:11'),(5181,'Rancharia',26,'2019-06-12 15:10:11'),(5182,'Redenção da Serra',26,'2019-06-12 15:10:11'),(5183,'Regente Feijó',26,'2019-06-12 15:10:11'),(5184,'Reginópolis',26,'2019-06-12 15:10:11'),(5185,'Registro',26,'2019-06-12 15:10:11'),(5186,'Restinga',26,'2019-06-12 15:10:11'),(5187,'Ribeira',26,'2019-06-12 15:10:11'),(5188,'Ribeirão Bonito',26,'2019-06-12 15:10:11'),(5189,'Ribeirão Branco',26,'2019-06-12 15:10:11'),(5190,'Ribeirão Corrente',26,'2019-06-12 15:10:11'),(5191,'Ribeirão do Sul',26,'2019-06-12 15:10:11'),(5192,'Ribeirão dos Índios',26,'2019-06-12 15:10:11'),(5193,'Ribeirão Grande',26,'2019-06-12 15:10:11'),(5194,'Ribeirão Pires',26,'2019-06-12 15:10:11'),(5195,'Ribeirão Preto',26,'2019-06-12 15:10:11'),(5196,'Rifaina',26,'2019-06-12 15:10:11'),(5197,'Rincão',26,'2019-06-12 15:10:11'),(5198,'Rinópolis',26,'2019-06-12 15:10:11'),(5199,'Rio Claro',26,'2019-06-12 15:10:11'),(5200,'Rio das Pedras',26,'2019-06-12 15:10:11'),(5201,'Rio Grande da Serra',26,'2019-06-12 15:10:11'),(5202,'Riolândia',26,'2019-06-12 15:10:11'),(5203,'Riversul',26,'2019-06-12 15:10:11'),(5204,'Rosana',26,'2019-06-12 15:10:11'),(5205,'Roseira',26,'2019-06-12 15:10:11'),(5206,'Rubiácea',26,'2019-06-12 15:10:11'),(5207,'Rubinéia',26,'2019-06-12 15:10:11'),(5208,'Sabino',26,'2019-06-12 15:10:11'),(5209,'Sagres',26,'2019-06-12 15:10:11'),(5210,'Sales',26,'2019-06-12 15:10:11'),(5211,'Sales Oliveira',26,'2019-06-12 15:10:11'),(5212,'Salesópolis',26,'2019-06-12 15:10:11'),(5213,'Salmourão',26,'2019-06-12 15:10:11'),(5214,'Saltinho',26,'2019-06-12 15:10:11'),(5215,'Salto',26,'2019-06-12 15:10:11'),(5216,'Salto de Pirapora',26,'2019-06-12 15:10:11'),(5217,'Salto Grande',26,'2019-06-12 15:10:11'),(5218,'Sandovalina',26,'2019-06-12 15:10:11'),(5219,'Santa Adélia',26,'2019-06-12 15:10:11'),(5220,'Santa Albertina',26,'2019-06-12 15:10:11'),(5221,'Santa Bárbara d`Oeste',26,'2019-06-12 15:10:11'),(5222,'Santa Branca',26,'2019-06-12 15:10:11'),(5223,'Santa Clara d`Oeste',26,'2019-06-12 15:10:11'),(5224,'Santa Cruz da Conceição',26,'2019-06-12 15:10:11'),(5225,'Santa Cruz da Esperança',26,'2019-06-12 15:10:11'),(5226,'Santa Cruz das Palmeiras',26,'2019-06-12 15:10:11'),(5227,'Santa Cruz do Rio Pardo',26,'2019-06-12 15:10:11'),(5228,'Santa Ernestina',26,'2019-06-12 15:10:11'),(5229,'Santa Fé do Sul',26,'2019-06-12 15:10:11'),(5230,'Santa Gertrudes',26,'2019-06-12 15:10:11'),(5231,'Santa Isabel',26,'2019-06-12 15:10:11'),(5232,'Santa Lúcia',26,'2019-06-12 15:10:11'),(5233,'Santa Maria da Serra',26,'2019-06-12 15:10:11'),(5234,'Santa Mercedes',26,'2019-06-12 15:10:11'),(5235,'Santa Rita d`Oeste',26,'2019-06-12 15:10:11'),(5236,'Santa Rita do Passa Quatro',26,'2019-06-12 15:10:11'),(5237,'Santa Rosa de Viterbo',26,'2019-06-12 15:10:11'),(5238,'Santa Salete',26,'2019-06-12 15:10:11'),(5239,'Santana da Ponte Pensa',26,'2019-06-12 15:10:11'),(5240,'Santana de Parnaíba',26,'2019-06-12 15:10:11'),(5241,'Santo Anastácio',26,'2019-06-12 15:10:11'),(5242,'Santo André',26,'2019-06-12 15:10:11'),(5243,'Santo Antônio da Alegria',26,'2019-06-12 15:10:11'),(5244,'Santo Antônio de Posse',26,'2019-06-12 15:10:11'),(5245,'Santo Antônio do Aracanguá',26,'2019-06-12 15:10:11'),(5246,'Santo Antônio do Jardim',26,'2019-06-12 15:10:11'),(5247,'Santo Antônio do Pinhal',26,'2019-06-12 15:10:11'),(5248,'Santo Expedito',26,'2019-06-12 15:10:11'),(5249,'Santópolis do Aguapeí',26,'2019-06-12 15:10:11'),(5250,'Santos',26,'2019-06-12 15:10:11'),(5251,'São Bento do Sapucaí',26,'2019-06-12 15:10:11'),(5252,'São Bernardo do Campo',26,'2019-06-12 15:10:11'),(5253,'São Caetano do Sul',26,'2019-06-12 15:10:11'),(5254,'São Carlos',26,'2019-06-12 15:10:11'),(5255,'São Francisco',26,'2019-06-12 15:10:11'),(5256,'São João da Boa Vista',26,'2019-06-12 15:10:11'),(5257,'São João das Duas Pontes',26,'2019-06-12 15:10:11'),(5258,'São João de Iracema',26,'2019-06-12 15:10:11'),(5259,'São João do Pau d`Alho',26,'2019-06-12 15:10:11'),(5260,'São Joaquim da Barra',26,'2019-06-12 15:10:11'),(5261,'São José da Bela Vista',26,'2019-06-12 15:10:11'),(5262,'São José do Barreiro',26,'2019-06-12 15:10:11'),(5263,'São José do Rio Pardo',26,'2019-06-12 15:10:11'),(5264,'São José do Rio Preto',26,'2019-06-12 15:10:11'),(5265,'São José dos Campos',26,'2019-06-12 15:10:11'),(5266,'São Lourenço da Serra',26,'2019-06-12 15:10:11'),(5267,'São Luís do Paraitinga',26,'2019-06-12 15:10:11'),(5268,'São Manuel',26,'2019-06-12 15:10:11'),(5269,'São Miguel Arcanjo',26,'2019-06-12 15:10:11'),(5270,'São Paulo',26,'2019-06-12 15:10:11'),(5271,'São Pedro',26,'2019-06-12 15:10:11'),(5272,'São Pedro do Turvo',26,'2019-06-12 15:10:11'),(5273,'São Roque',26,'2019-06-12 15:10:11'),(5274,'São Sebastião',26,'2019-06-12 15:10:11'),(5275,'São Sebastião da Grama',26,'2019-06-12 15:10:11'),(5276,'São Simão',26,'2019-06-12 15:10:11'),(5277,'São Vicente',26,'2019-06-12 15:10:11'),(5278,'Sarapuí',26,'2019-06-12 15:10:11'),(5279,'Sarutaiá',26,'2019-06-12 15:10:11'),(5280,'Sebastianópolis do Sul',26,'2019-06-12 15:10:11'),(5281,'Serra Azul',26,'2019-06-12 15:10:11'),(5282,'Serra Negra',26,'2019-06-12 15:10:11'),(5283,'Serrana',26,'2019-06-12 15:10:11'),(5284,'Sertãozinho',26,'2019-06-12 15:10:11'),(5285,'Sete Barras',26,'2019-06-12 15:10:11'),(5286,'Severínia',26,'2019-06-12 15:10:11'),(5287,'Silveiras',26,'2019-06-12 15:10:11'),(5288,'Socorro',26,'2019-06-12 15:10:11'),(5289,'Sorocaba',26,'2019-06-12 15:10:11'),(5290,'Sud Mennucci',26,'2019-06-12 15:10:11'),(5291,'Sumaré',26,'2019-06-12 15:10:11'),(5292,'Suzanápolis',26,'2019-06-12 15:10:11'),(5293,'Suzano',26,'2019-06-12 15:10:11'),(5294,'Tabapuã',26,'2019-06-12 15:10:11'),(5295,'Tabatinga',26,'2019-06-12 15:10:11'),(5296,'Taboão da Serra',26,'2019-06-12 15:10:11'),(5297,'Taciba',26,'2019-06-12 15:10:11'),(5298,'Taguaí',26,'2019-06-12 15:10:11'),(5299,'Taiaçu',26,'2019-06-12 15:10:11'),(5300,'Taiúva',26,'2019-06-12 15:10:11'),(5301,'Tambaú',26,'2019-06-12 15:10:11'),(5302,'Tanabi',26,'2019-06-12 15:10:11'),(5303,'Tapiraí',26,'2019-06-12 15:10:11'),(5304,'Tapiratiba',26,'2019-06-12 15:10:11'),(5305,'Taquaral',26,'2019-06-12 15:10:11'),(5306,'Taquaritinga',26,'2019-06-12 15:10:11'),(5307,'Taquarituba',26,'2019-06-12 15:10:11'),(5308,'Taquarivaí',26,'2019-06-12 15:10:11'),(5309,'Tarabai',26,'2019-06-12 15:10:11'),(5310,'Tarumã',26,'2019-06-12 15:10:11'),(5311,'Tatuí',26,'2019-06-12 15:10:11'),(5312,'Taubaté',26,'2019-06-12 15:10:11'),(5313,'Tejupá',26,'2019-06-12 15:10:11'),(5314,'Teodoro Sampaio',26,'2019-06-12 15:10:11'),(5315,'Terra Roxa',26,'2019-06-12 15:10:11'),(5316,'Tietê',26,'2019-06-12 15:10:11'),(5317,'Timburi',26,'2019-06-12 15:10:11'),(5318,'Torre de Pedra',26,'2019-06-12 15:10:11'),(5319,'Torrinha',26,'2019-06-12 15:10:11'),(5320,'Trabiju',26,'2019-06-12 15:10:11'),(5321,'Tremembé',26,'2019-06-12 15:10:11'),(5322,'Três Fronteiras',26,'2019-06-12 15:10:11'),(5323,'Tuiuti',26,'2019-06-12 15:10:11'),(5324,'Tupã',26,'2019-06-12 15:10:11'),(5325,'Tupi Paulista',26,'2019-06-12 15:10:11'),(5326,'Turiúba',26,'2019-06-12 15:10:11'),(5327,'Turmalina',26,'2019-06-12 15:10:11'),(5328,'Ubarana',26,'2019-06-12 15:10:11'),(5329,'Ubatuba',26,'2019-06-12 15:10:11'),(5330,'Ubirajara',26,'2019-06-12 15:10:11'),(5331,'Uchoa',26,'2019-06-12 15:10:11'),(5332,'União Paulista',26,'2019-06-12 15:10:11'),(5333,'Urânia',26,'2019-06-12 15:10:11'),(5334,'Uru',26,'2019-06-12 15:10:11'),(5335,'Urupês',26,'2019-06-12 15:10:11'),(5336,'Valentim Gentil',26,'2019-06-12 15:10:11'),(5337,'Valinhos',26,'2019-06-12 15:10:11'),(5338,'Valparaíso',26,'2019-06-12 15:10:11'),(5339,'Vargem',26,'2019-06-12 15:10:11'),(5340,'Vargem Grande do Sul',26,'2019-06-12 15:10:11'),(5341,'Vargem Grande Paulista',26,'2019-06-12 15:10:11'),(5342,'Várzea Paulista',26,'2019-06-12 15:10:11'),(5343,'Vera Cruz',26,'2019-06-12 15:10:11'),(5344,'Vinhedo',26,'2019-06-12 15:10:11'),(5345,'Viradouro',26,'2019-06-12 15:10:11'),(5346,'Vista Alegre do Alto',26,'2019-06-12 15:10:11'),(5347,'Vitória Brasil',26,'2019-06-12 15:10:11'),(5348,'Votorantim',26,'2019-06-12 15:10:11'),(5349,'Votuporanga',26,'2019-06-12 15:10:11'),(5350,'Zacarias',26,'2019-06-12 15:10:11'),(5351,'Amparo de São Francisco',25,'2019-06-12 15:10:11'),(5352,'Aquidabã',25,'2019-06-12 15:10:11'),(5353,'Aracaju',25,'2019-06-12 15:10:11'),(5354,'Arauá',25,'2019-06-12 15:10:11'),(5355,'Areia Branca',25,'2019-06-12 15:10:11'),(5356,'Barra dos Coqueiros',25,'2019-06-12 15:10:11'),(5357,'Boquim',25,'2019-06-12 15:10:11'),(5358,'Brejo Grande',25,'2019-06-12 15:10:11'),(5359,'Campo do Brito',25,'2019-06-12 15:10:11'),(5360,'Canhoba',25,'2019-06-12 15:10:11'),(5361,'Canindé de São Francisco',25,'2019-06-12 15:10:11'),(5362,'Capela',25,'2019-06-12 15:10:11'),(5363,'Carira',25,'2019-06-12 15:10:11'),(5364,'Carmópolis',25,'2019-06-12 15:10:11'),(5365,'Cedro de São João',25,'2019-06-12 15:10:11'),(5366,'Cristinápolis',25,'2019-06-12 15:10:11'),(5367,'Cumbe',25,'2019-06-12 15:10:11'),(5368,'Divina Pastora',25,'2019-06-12 15:10:11'),(5369,'Estância',25,'2019-06-12 15:10:11'),(5370,'Feira Nova',25,'2019-06-12 15:10:11'),(5371,'Frei Paulo',25,'2019-06-12 15:10:11'),(5372,'Gararu',25,'2019-06-12 15:10:11'),(5373,'General Maynard',25,'2019-06-12 15:10:11'),(5374,'Gracho Cardoso',25,'2019-06-12 15:10:11'),(5375,'Ilha das Flores',25,'2019-06-12 15:10:11'),(5376,'Indiaroba',25,'2019-06-12 15:10:11'),(5377,'Itabaiana',25,'2019-06-12 15:10:11'),(5378,'Itabaianinha',25,'2019-06-12 15:10:11'),(5379,'Itabi',25,'2019-06-12 15:10:11'),(5380,'Itaporanga d`Ajuda',25,'2019-06-12 15:10:11'),(5381,'Japaratuba',25,'2019-06-12 15:10:11'),(5382,'Japoatã',25,'2019-06-12 15:10:11'),(5383,'Lagarto',25,'2019-06-12 15:10:11'),(5384,'Laranjeiras',25,'2019-06-12 15:10:11'),(5385,'Macambira',25,'2019-06-12 15:10:11'),(5386,'Malhada dos Bois',25,'2019-06-12 15:10:11'),(5387,'Malhador',25,'2019-06-12 15:10:11'),(5388,'Maruim',25,'2019-06-12 15:10:11'),(5389,'Moita Bonita',25,'2019-06-12 15:10:11'),(5390,'Monte Alegre de Sergipe',25,'2019-06-12 15:10:11'),(5391,'Muribeca',25,'2019-06-12 15:10:11'),(5392,'Neópolis',25,'2019-06-12 15:10:11'),(5393,'Nossa Senhora Aparecida',25,'2019-06-12 15:10:11'),(5394,'Nossa Senhora da Glória',25,'2019-06-12 15:10:11'),(5395,'Nossa Senhora das Dores',25,'2019-06-12 15:10:11'),(5396,'Nossa Senhora de Lourdes',25,'2019-06-12 15:10:11'),(5397,'Nossa Senhora do Socorro',25,'2019-06-12 15:10:11'),(5398,'Pacatuba',25,'2019-06-12 15:10:11'),(5399,'Pedra Mole',25,'2019-06-12 15:10:11'),(5400,'Pedrinhas',25,'2019-06-12 15:10:11'),(5401,'Pinhão',25,'2019-06-12 15:10:11'),(5402,'Pirambu',25,'2019-06-12 15:10:11'),(5403,'Poço Redondo',25,'2019-06-12 15:10:11'),(5404,'Poço Verde',25,'2019-06-12 15:10:11'),(5405,'Porto da Folha',25,'2019-06-12 15:10:11'),(5406,'Propriá',25,'2019-06-12 15:10:11'),(5407,'Riachão do Dantas',25,'2019-06-12 15:10:11'),(5408,'Riachuelo',25,'2019-06-12 15:10:11'),(5409,'Ribeirópolis',25,'2019-06-12 15:10:11'),(5410,'Rosário do Catete',25,'2019-06-12 15:10:11'),(5411,'Salgado',25,'2019-06-12 15:10:11'),(5412,'Santa Luzia do Itanhy',25,'2019-06-12 15:10:11'),(5413,'Santa Rosa de Lima',25,'2019-06-12 15:10:11'),(5414,'Santana do São Francisco',25,'2019-06-12 15:10:11'),(5415,'Santo Amaro das Brotas',25,'2019-06-12 15:10:11'),(5416,'São Cristóvão',25,'2019-06-12 15:10:11'),(5417,'São Domingos',25,'2019-06-12 15:10:11'),(5418,'São Francisco',25,'2019-06-12 15:10:11'),(5419,'São Miguel do Aleixo',25,'2019-06-12 15:10:11'),(5420,'Simão Dias',25,'2019-06-12 15:10:11'),(5421,'Siriri',25,'2019-06-12 15:10:11'),(5422,'Telha',25,'2019-06-12 15:10:11'),(5423,'Tobias Barreto',25,'2019-06-12 15:10:11'),(5424,'Tomar do Geru',25,'2019-06-12 15:10:11'),(5425,'Umbaúba',25,'2019-06-12 15:10:11'),(5426,'Abreulândia',27,'2019-06-12 15:10:11'),(5427,'Aguiarnópolis',27,'2019-06-12 15:10:11'),(5428,'Aliança do Tocantins',27,'2019-06-12 15:10:11'),(5429,'Almas',27,'2019-06-12 15:10:11'),(5430,'Alvorada',27,'2019-06-12 15:10:11'),(5431,'Ananás',27,'2019-06-12 15:10:11'),(5432,'Angico',27,'2019-06-12 15:10:11'),(5433,'Aparecida do Rio Negro',27,'2019-06-12 15:10:11'),(5434,'Aragominas',27,'2019-06-12 15:10:11'),(5435,'Araguacema',27,'2019-06-12 15:10:11'),(5436,'Araguaçu',27,'2019-06-12 15:10:11'),(5437,'Araguaína',27,'2019-06-12 15:10:11'),(5438,'Araguanã',27,'2019-06-12 15:10:11'),(5439,'Araguatins',27,'2019-06-12 15:10:11'),(5440,'Arapoema',27,'2019-06-12 15:10:11'),(5441,'Arraias',27,'2019-06-12 15:10:11'),(5442,'Augustinópolis',27,'2019-06-12 15:10:11'),(5443,'Aurora do Tocantins',27,'2019-06-12 15:10:11'),(5444,'Axixá do Tocantins',27,'2019-06-12 15:10:11'),(5445,'Babaçulândia',27,'2019-06-12 15:10:11'),(5446,'Bandeirantes do Tocantins',27,'2019-06-12 15:10:11'),(5447,'Barra do Ouro',27,'2019-06-12 15:10:11'),(5448,'Barrolândia',27,'2019-06-12 15:10:11'),(5449,'Bernardo Sayão',27,'2019-06-12 15:10:11'),(5450,'Bom Jesus do Tocantins',27,'2019-06-12 15:10:11'),(5451,'Brasilândia do Tocantins',27,'2019-06-12 15:10:11'),(5452,'Brejinho de Nazaré',27,'2019-06-12 15:10:11'),(5453,'Buriti do Tocantins',27,'2019-06-12 15:10:11'),(5454,'Cachoeirinha',27,'2019-06-12 15:10:11'),(5455,'Campos Lindos',27,'2019-06-12 15:10:11'),(5456,'Cariri do Tocantins',27,'2019-06-12 15:10:11'),(5457,'Carmolândia',27,'2019-06-12 15:10:11'),(5458,'Carrasco Bonito',27,'2019-06-12 15:10:11'),(5459,'Caseara',27,'2019-06-12 15:10:11'),(5460,'Centenário',27,'2019-06-12 15:10:11'),(5461,'Chapada da Natividade',27,'2019-06-12 15:10:11'),(5462,'Chapada de Areia',27,'2019-06-12 15:10:11'),(5463,'Colinas do Tocantins',27,'2019-06-12 15:10:11'),(5464,'Colméia',27,'2019-06-12 15:10:11'),(5465,'Combinado',27,'2019-06-12 15:10:11'),(5466,'Conceição do Tocantins',27,'2019-06-12 15:10:11'),(5467,'Couto de Magalhães',27,'2019-06-12 15:10:11'),(5468,'Cristalândia',27,'2019-06-12 15:10:11'),(5469,'Crixás do Tocantins',27,'2019-06-12 15:10:11'),(5470,'Darcinópolis',27,'2019-06-12 15:10:11'),(5471,'Dianópolis',27,'2019-06-12 15:10:11'),(5472,'Divinópolis do Tocantins',27,'2019-06-12 15:10:11'),(5473,'Dois Irmãos do Tocantins',27,'2019-06-12 15:10:11'),(5474,'Dueré',27,'2019-06-12 15:10:11'),(5475,'Esperantina',27,'2019-06-12 15:10:11'),(5476,'Fátima',27,'2019-06-12 15:10:11'),(5477,'Figueirópolis',27,'2019-06-12 15:10:11'),(5478,'Filadélfia',27,'2019-06-12 15:10:11'),(5479,'Formoso do Araguaia',27,'2019-06-12 15:10:11'),(5480,'Fortaleza do Tabocão',27,'2019-06-12 15:10:11'),(5481,'Goianorte',27,'2019-06-12 15:10:11'),(5482,'Goiatins',27,'2019-06-12 15:10:11'),(5483,'Guaraí',27,'2019-06-12 15:10:11'),(5484,'Gurupi',27,'2019-06-12 15:10:11'),(5485,'Ipueiras',27,'2019-06-12 15:10:11'),(5486,'Itacajá',27,'2019-06-12 15:10:11'),(5487,'Itaguatins',27,'2019-06-12 15:10:11'),(5488,'Itapiratins',27,'2019-06-12 15:10:11'),(5489,'Itaporã do Tocantins',27,'2019-06-12 15:10:11'),(5490,'Jaú do Tocantins',27,'2019-06-12 15:10:11'),(5491,'Juarina',27,'2019-06-12 15:10:11'),(5492,'Lagoa da Confusão',27,'2019-06-12 15:10:11'),(5493,'Lagoa do Tocantins',27,'2019-06-12 15:10:11'),(5494,'Lajeado',27,'2019-06-12 15:10:11'),(5495,'Lavandeira',27,'2019-06-12 15:10:11'),(5496,'Lizarda',27,'2019-06-12 15:10:11'),(5497,'Luzinópolis',27,'2019-06-12 15:10:11'),(5498,'Marianópolis do Tocantins',27,'2019-06-12 15:10:11'),(5499,'Mateiros',27,'2019-06-12 15:10:11'),(5500,'Maurilândia do Tocantins',27,'2019-06-12 15:10:11'),(5501,'Miracema do Tocantins',27,'2019-06-12 15:10:11'),(5502,'Miranorte',27,'2019-06-12 15:10:11'),(5503,'Monte do Carmo',27,'2019-06-12 15:10:11'),(5504,'Monte Santo do Tocantins',27,'2019-06-12 15:10:11'),(5505,'Muricilândia',27,'2019-06-12 15:10:11'),(5506,'Natividade',27,'2019-06-12 15:10:11'),(5507,'Nazaré',27,'2019-06-12 15:10:11'),(5508,'Nova Olinda',27,'2019-06-12 15:10:11'),(5509,'Nova Rosalândia',27,'2019-06-12 15:10:11'),(5510,'Novo Acordo',27,'2019-06-12 15:10:11'),(5511,'Novo Alegre',27,'2019-06-12 15:10:11'),(5512,'Novo Jardim',27,'2019-06-12 15:10:11'),(5513,'Oliveira de Fátima',27,'2019-06-12 15:10:11'),(5514,'Palmas',27,'2019-06-12 15:10:11'),(5515,'Palmeirante',27,'2019-06-12 15:10:11'),(5516,'Palmeiras do Tocantins',27,'2019-06-12 15:10:11'),(5517,'Palmeirópolis',27,'2019-06-12 15:10:11'),(5518,'Paraíso do Tocantins',27,'2019-06-12 15:10:11'),(5519,'Paranã',27,'2019-06-12 15:10:11'),(5520,'Pau d`Arco',27,'2019-06-12 15:10:11'),(5521,'Pedro Afonso',27,'2019-06-12 15:10:11'),(5522,'Peixe',27,'2019-06-12 15:10:11'),(5523,'Pequizeiro',27,'2019-06-12 15:10:11'),(5524,'Pindorama do Tocantins',27,'2019-06-12 15:10:11'),(5525,'Piraquê',27,'2019-06-12 15:10:11'),(5526,'Pium',27,'2019-06-12 15:10:11'),(5527,'Ponte Alta do Bom Jesus',27,'2019-06-12 15:10:11'),(5528,'Ponte Alta do Tocantins',27,'2019-06-12 15:10:11'),(5529,'Porto Alegre do Tocantins',27,'2019-06-12 15:10:11'),(5530,'Porto Nacional',27,'2019-06-12 15:10:11'),(5531,'Praia Norte',27,'2019-06-12 15:10:11'),(5532,'Presidente Kennedy',27,'2019-06-12 15:10:11'),(5533,'Pugmil',27,'2019-06-12 15:10:11'),(5534,'Recursolândia',27,'2019-06-12 15:10:11'),(5535,'Riachinho',27,'2019-06-12 15:10:11'),(5536,'Rio da Conceição',27,'2019-06-12 15:10:11'),(5537,'Rio dos Bois',27,'2019-06-12 15:10:11'),(5538,'Rio Sono',27,'2019-06-12 15:10:11'),(5539,'Sampaio',27,'2019-06-12 15:10:11'),(5540,'Sandolândia',27,'2019-06-12 15:10:11'),(5541,'Santa Fé do Araguaia',27,'2019-06-12 15:10:11'),(5542,'Santa Maria do Tocantins',27,'2019-06-12 15:10:11'),(5543,'Santa Rita do Tocantins',27,'2019-06-12 15:10:11'),(5544,'Santa Rosa do Tocantins',27,'2019-06-12 15:10:11'),(5545,'Santa Tereza do Tocantins',27,'2019-06-12 15:10:11'),(5546,'Santa Terezinha do Tocantins',27,'2019-06-12 15:10:11'),(5547,'São Bento do Tocantins',27,'2019-06-12 15:10:11'),(5548,'São Félix do Tocantins',27,'2019-06-12 15:10:11'),(5549,'São Miguel do Tocantins',27,'2019-06-12 15:10:11'),(5550,'São Salvador do Tocantins',27,'2019-06-12 15:10:11'),(5551,'São Sebastião do Tocantins',27,'2019-06-12 15:10:11'),(5552,'São Valério da Natividade',27,'2019-06-12 15:10:11'),(5553,'Silvanópolis',27,'2019-06-12 15:10:11'),(5554,'Sítio Novo do Tocantins',27,'2019-06-12 15:10:11'),(5555,'Sucupira',27,'2019-06-12 15:10:11'),(5556,'Taguatinga',27,'2019-06-12 15:10:11'),(5557,'Taipas do Tocantins',27,'2019-06-12 15:10:11'),(5558,'Talismã',27,'2019-06-12 15:10:11'),(5559,'Tocantínia',27,'2019-06-12 15:10:11'),(5560,'Tocantinópolis',27,'2019-06-12 15:10:11'),(5561,'Tupirama',27,'2019-06-12 15:10:11'),(5562,'Tupiratins',27,'2019-06-12 15:10:11'),(5563,'Wanderlândia',27,'2019-06-12 15:10:11'),(5564,'Xambioá',27,'2019-06-12 15:10:11');
/*!40000 ALTER TABLE `tb_cities` ENABLE KEYS */;
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
  `desconsort` varchar(128) CHARACTER SET latin1 DEFAULT NULL,
  `desemail` varchar(128) CHARACTER SET latin1 DEFAULT NULL,
  `desphoto` varchar(256) CHARACTER SET latin1 DEFAULT NULL,
  `desextension` varchar(4) CHARACTER SET latin1 DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idconsort`)
) ENGINE=InnoDB AUTO_INCREMENT=121 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_consorts`
--

LOCK TABLES `tb_consorts` WRITE;
/*!40000 ALTER TABLE `tb_consorts` DISABLE KEYS */;
INSERT INTO `tb_consorts` VALUES (1,11,'Ludmiila','mila@gmail.com','0.jpg','jpg','2019-05-11 15:40:52'),(2,13,'Ana Lucia','morganaluke@gmail.com','0.jpg','jpg','2019-05-11 16:51:16'),(120,81,'Meu Amor',NULL,NULL,NULL,'2019-06-17 15:11:03');
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
  `nrcountryarea` int(4) DEFAULT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=551 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_customers`
--

LOCK TABLES `tb_customers` WRITE;
/*!40000 ALTER TABLE `tb_customers` DISABLE KEYS */;
INSERT INTO `tb_customers` VALUES (546,81,'CUS-I6OELL8FD8MO','Jose Pedro','jpccambraia3@gmail.com',55,31,31313131,0,'01224202686','13465400','31','31','31','31','Acrelândia','AC','BRA',NULL,NULL,NULL,NULL,'2000-10-11','2019-06-17 15:11:32'),(547,81,'CUS-UT7GKOM4AECR','Jose Pedro','jpccambraia3@gmail.com',55,31,31313131,0,'01224202686','13465400','31','31','31','31','Acrelândia','AC','BRA',NULL,NULL,NULL,NULL,'2000-10-11','2019-06-17 15:13:51'),(548,81,'CUS-LWCXUJ8ELL37','Jose Pedro','jpccambraia3@gmail.com',55,31,31313131,0,'01224202686','13465400','31','31','31','31','Acrelândia','AC','BRA',NULL,NULL,NULL,NULL,'2000-10-11','2019-06-17 15:14:13'),(549,81,'CUS-LY21JXVFY7XX','Jose Pedro','jpccambraia3@gmail.com',55,31,31313131,0,'01224202686','13465400','31','31','31','31','Acrelândia','AC','BRA',NULL,NULL,NULL,NULL,'2000-10-11','2019-06-17 15:14:42'),(550,81,'CUS-PELJAG97PG9M','Jose Pedro','jpccambraia3@gmail.com',55,31,31313131,0,'01224202686','13465400','31','31','31','31','Acrelândia','AC','BRA',NULL,NULL,NULL,NULL,'2000-10-11','2019-06-17 15:15:28');
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
  `desbannerextension` varchar(4) DEFAULT NULL,
  `descolorheader` varchar(10) DEFAULT NULL,
  `descolorheadertext` varchar(10) DEFAULT NULL,
  `descolorheaderhover` varchar(10) DEFAULT NULL,
  `descolorfooter` varchar(10) DEFAULT NULL,
  `descolorfootertext` varchar(10) DEFAULT NULL,
  `descolorfooterhover` varchar(10) DEFAULT NULL,
  `descolorh1` varchar(10) DEFAULT NULL,
  `desfontfamilyh1` varchar(64) DEFAULT NULL,
  `desfontsizeh1` varchar(4) DEFAULT NULL,
  `descolorh2` varchar(10) DEFAULT NULL,
  `desfontfamilyh2` varchar(64) DEFAULT NULL,
  `desfontsizeh2` varchar(4) DEFAULT NULL,
  `descolorh3` varchar(10) DEFAULT NULL,
  `desfontfamilyh3` varchar(64) DEFAULT NULL,
  `desfontsizeh3` varchar(4) DEFAULT NULL,
  `descolorh4` varchar(10) DEFAULT NULL,
  `desfontfamilyh4` varchar(10) DEFAULT NULL,
  `desfontsizeh4` varchar(4) DEFAULT NULL,
  `descolortext` varchar(10) DEFAULT NULL,
  `descolortexthover` varchar(10) DEFAULT NULL,
  `desfontfamilytext` varchar(64) DEFAULT NULL,
  `desfontsizetext` varchar(4) DEFAULT NULL,
  `desroundbordersize` varchar(4) DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idcustomstyle`)
) ENGINE=InnoDB AUTO_INCREMENT=122 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_customstyle`
--

LOCK TABLES `tb_customstyle` WRITE;
/*!40000 ALTER TABLE `tb_customstyle` DISABLE KEYS */;
INSERT INTO `tb_customstyle` VALUES (14,11,1,'default.jpg','jpg','#666667','#666667','#666667','#666667','#666667','#666667','#666667','Arial2','32','#666667','Arial2','32','#666667','Arial2','32',NULL,NULL,NULL,'#666667',NULL,'Arial2','32',NULL,'2019-04-25 13:15:56'),(15,13,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-05-05 02:56:30'),(121,81,1,'default.jpg','jpg','#f6f6f6','#000000','#f6f6f6','#f6f6f6','#000000','#f6f6f6','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','#f6f6f6','Arial','14','6','2019-06-17 15:11:03');
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
  `ineventstatus` tinyint(4) DEFAULT NULL,
  `desevent` varchar(45) DEFAULT NULL,
  `desdescription` text,
  `nrcountryarea` int(4) DEFAULT NULL,
  `nrddd` int(2) DEFAULT NULL,
  `nrphone` bigint(20) DEFAULT NULL,
  `desaddress` varchar(128) DEFAULT NULL,
  `desnumber` varchar(16) DEFAULT NULL,
  `descomplement` varchar(32) DEFAULT NULL,
  `desdistrict` varchar(32) DEFAULT NULL,
  `descity` varchar(32) DEFAULT NULL,
  `desstate` varchar(32) DEFAULT NULL,
  `descountry` varchar(32) DEFAULT NULL,
  `desphoto` varchar(256) DEFAULT NULL,
  `desextension` varchar(4) DEFAULT NULL,
  `dtevent` datetime DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idevent`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_events`
--

LOCK TABLES `tb_events` WRITE;
/*!40000 ALTER TABLE `tb_events` DISABLE KEYS */;
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
  `inbestfriend` tinyint(4) DEFAULT NULL,
  `inalbum` tinyint(4) DEFAULT NULL,
  `invideo` tinyint(4) DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idinitialpage`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_initialpages`
--

LOCK TABLES `tb_initialpages` WRITE;
/*!40000 ALTER TABLE `tb_initialpages` DISABLE KEYS */;
INSERT INTO `tb_initialpages` VALUES (59,81,1,1,1,0,'2019-06-17 15:11:03');
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
  `inbestfriend` tinyint(4) DEFAULT NULL,
  `inrsvp` tinyint(4) DEFAULT NULL,
  `inmessage` tinyint(4) DEFAULT NULL,
  `instore` tinyint(4) DEFAULT NULL,
  `inevent` tinyint(4) DEFAULT NULL,
  `inalbum` tinyint(4) DEFAULT NULL,
  `invideo` tinyint(4) DEFAULT NULL,
  `instakeholder` tinyint(4) DEFAULT NULL,
  `inouterlist` tinyint(4) DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idmenu`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_menus`
--

LOCK TABLES `tb_menus` WRITE;
/*!40000 ALTER TABLE `tb_menus` DISABLE KEYS */;
INSERT INTO `tb_menus` VALUES (47,81,1,1,1,1,1,1,1,1,1,1,1,'2019-06-17 15:11:03');
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
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idmessage`),
  KEY `fk_messages_users_idx` (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_messages`
--

LOCK TABLES `tb_messages` WRITE;
/*!40000 ALTER TABLE `tb_messages` DISABLE KEYS */;
INSERT INTO `tb_messages` VALUES (13,11,0,'Pedro Coimbra','coimbra@gmail.com','Felicitações amigo! Tudo de bom','2019-04-27 16:25:56');
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
  `iduser` int(11) NOT NULL,
  `idcart` int(11) NOT NULL,
  `idcustomer` int(11) NOT NULL,
  `idpayment` int(11) NOT NULL,
  `desordercode` varchar(22) DEFAULT NULL,
  `vltotal` decimal(10,2) NOT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idorder`)
) ENGINE=InnoDB AUTO_INCREMENT=456 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_orders`
--

LOCK TABLES `tb_orders` WRITE;
/*!40000 ALTER TABLE `tb_orders` DISABLE KEYS */;
INSERT INTO `tb_orders` VALUES (451,81,777,546,325,'ORD-T0FXCRLKXJVF',50.99,'2019-06-17 15:11:35'),(452,81,778,547,326,'ORD-12J9RKFAJGWU',94.99,'2019-06-17 15:13:54'),(453,81,779,548,327,'ORD-U2EFI9F7B74L',105.99,'2019-06-17 15:14:16'),(454,81,780,549,328,'ORD-IN3BFTJ8T0TH',193.99,'2019-06-17 15:14:45'),(455,81,781,550,329,'ORD-0KBTQCXKMBN0',264.99,'2019-06-17 15:15:31');
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
-- Table structure for table `tb_outerlists`
--

DROP TABLE IF EXISTS `tb_outerlists`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_outerlists` (
  `idouterlist` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) NOT NULL,
  `instatus` tinyint(11) DEFAULT NULL,
  `inposition` tinyint(11) DEFAULT NULL,
  `desouterlist` varchar(128) DEFAULT NULL,
  `desdescription` text,
  `dessite` varchar(128) DEFAULT NULL,
  `deslocation` varchar(128) DEFAULT NULL,
  `nrcountryarea` int(4) DEFAULT NULL,
  `nrddd` int(2) DEFAULT NULL,
  `nrphone` bigint(20) DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idouterlist`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_outerlists`
--

LOCK TABLES `tb_outerlists` WRITE;
/*!40000 ALTER TABLE `tb_outerlists` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_outerlists` ENABLE KEYS */;
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
  `inpartystatus` tinyint(4) DEFAULT NULL,
  `desdescription` text CHARACTER SET latin1,
  `deslocation` varchar(128) CHARACTER SET latin1 DEFAULT NULL,
  `desphoto` varchar(256) CHARACTER SET latin1 DEFAULT NULL,
  `desextension` varchar(4) DEFAULT NULL,
  `dtparty` datetime DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idparty`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_parties`
--

LOCK TABLES `tb_parties` WRITE;
/*!40000 ALTER TABLE `tb_parties` DISABLE KEYS */;
INSERT INTO `tb_parties` VALUES (47,81,1,'Descrição do Festa','Local da Festa','0.jpg','jpg','2020-06-17 22:00:00','2019-06-17 15:11:03');
/*!40000 ALTER TABLE `tb_parties` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_payments`
--

DROP TABLE IF EXISTS `tb_payments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_payments` (
  `idpayment` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) NOT NULL,
  `despaymentcode` varchar(22) DEFAULT NULL,
  `inpaymentstatus` tinyint(4) DEFAULT NULL,
  `inpaymentmethod` tinyint(4) DEFAULT NULL,
  `nrinstallment` int(3) DEFAULT NULL,
  `deslinecode` varchar(128) DEFAULT NULL,
  `desprinthref` varchar(256) DEFAULT NULL,
  `desholdername` varchar(64) CHARACTER SET latin1 DEFAULT NULL,
  `nrholdercountryarea` int(4) DEFAULT NULL,
  `nrholderddd` int(2) DEFAULT NULL,
  `nrholderphone` bigint(20) DEFAULT NULL,
  `inholdertypedoc` tinyint(4) DEFAULT NULL,
  `desholderdocument` varchar(14) CHARACTER SET latin1 DEFAULT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=330 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_payments`
--

LOCK TABLES `tb_payments` WRITE;
/*!40000 ALTER TABLE `tb_payments` DISABLE KEYS */;
INSERT INTO `tb_payments` VALUES (325,81,'PAY-U9Y6S1BDFY53',1,0,1,'00190.00009 01014.051005 00000.787176 7 72370000001000','https://sandbox.moip.com.br/v2/boleto/BOL-UEUQYLAWCH1E/print','',55,NULL,NULL,NULL,NULL,NULL,'',NULL,'','','','',NULL,'2019-06-17 15:11:35'),(326,81,'PAY-2CZPG347RL0B',1,0,1,'00190.00009 01014.051005 00000.787176 7 72370000001000','https://sandbox.moip.com.br/v2/boleto/BOL-1L67VLRKC7FM/print','',55,NULL,NULL,NULL,NULL,NULL,'',NULL,'','','','',NULL,'2019-06-17 15:13:54'),(327,81,'PAY-6F6VRS02Z892',1,0,1,'00190.00009 01014.051005 00000.787176 7 72370000001000','https://sandbox.moip.com.br/v2/boleto/BOL-PWZQ7MEWNGUK/print','',55,NULL,NULL,NULL,NULL,NULL,'',NULL,'','','','',NULL,'2019-06-17 15:14:16'),(328,81,'PAY-PYGIOWEZ0CSX',1,0,1,'00190.00009 01014.051005 00000.787176 7 72370000001000','https://sandbox.moip.com.br/v2/boleto/BOL-LMXUM04H99TH/print','',55,NULL,NULL,NULL,NULL,NULL,'',NULL,'','','','',NULL,'2019-06-17 15:14:45'),(329,81,'PAY-K7QLLUK7V30Z',1,0,1,'00190.00009 01014.051005 00000.787176 7 72370000001000','https://sandbox.moip.com.br/v2/boleto/BOL-7ZMAWGIMSG3K/print','',55,NULL,NULL,NULL,NULL,NULL,'',NULL,'','','','',NULL,'2019-06-17 15:15:31');
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
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_persons`
--

LOCK TABLES `tb_persons` WRITE;
/*!40000 ALTER TABLE `tb_persons` DISABLE KEYS */;
INSERT INTO `tb_persons` VALUES (11,'Jose Paulo de Carvalho',NULL,'paulowebphp@gmail.com',NULL,NULL,31984050000,0,NULL,'0.jpg','jpg',NULL,'2019-04-24 16:59:04'),(12,'Paulo de Carvalho','','pwsecvendas@gmail.com',NULL,NULL,31984050125,0,NULL,'0.jpg','jpg',NULL,'2019-05-02 20:28:12'),(80,'Jose Pedro','Jose','jpccambraia3@gmail.com',55,31,31313131,0,'01224202686','0.jpg','jpg','2000-10-11','2019-06-17 15:11:03');
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
  `inplancode` int(3) DEFAULT NULL,
  `inmigration` tinyint(4) DEFAULT NULL,
  `inperiod` tinyint(4) DEFAULT NULL,
  `desplan` varchar(128) DEFAULT NULL,
  `vlregularprice` decimal(10,2) DEFAULT NULL,
  `vlsaleprice` decimal(10,2) DEFAULT NULL,
  `dtbegin` date DEFAULT NULL,
  `dtend` date DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idplan`)
) ENGINE=InnoDB AUTO_INCREMENT=564 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_plans`
--

LOCK TABLES `tb_plans` WRITE;
/*!40000 ALTER TABLE `tb_plans` DISABLE KEYS */;
INSERT INTO `tb_plans` VALUES (559,81,NULL,NULL,0,0,103,0,3,'Plano Básico',50.99,50.99,'2019-06-17','2019-09-17','2019-06-17 15:11:32'),(560,81,NULL,NULL,0,0,203,0,3,'Plano Clássico',94.99,94.99,'2019-06-17','2019-09-17','2019-06-17 15:13:51'),(561,81,NULL,NULL,0,0,204,0,4,'Plano Clássico',105.99,105.99,'2019-09-18','2020-01-18','2019-06-17 15:14:13'),(562,81,NULL,NULL,0,0,304,0,4,'Plano Gold',193.99,193.99,'2019-06-17','2020-01-18','2019-06-17 15:14:42'),(563,81,NULL,NULL,0,0,312,0,12,'Plano Gold',264.99,264.99,'2020-01-19','2021-01-19','2019-06-17 15:15:28');
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
  `desguest` varchar(128) NOT NULL,
  `desemail` varchar(128) DEFAULT NULL,
  `nrphone` bigint(20) DEFAULT NULL,
  `inconfirmed` tinyint(4) DEFAULT NULL,
  `inmaxadults` int(3) DEFAULT NULL,
  `inadultsconfirmed` int(3) DEFAULT NULL,
  `inmaxchildren` int(3) DEFAULT NULL,
  `inchildrenconfirmed` int(3) DEFAULT NULL,
  `desguestaccompanies` text,
  `dtconfirmed` date DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idrsvp`),
  KEY `fk_rsvp_users_idx` (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_rsvp`
--

LOCK TABLES `tb_rsvp` WRITE;
/*!40000 ALTER TABLE `tb_rsvp` DISABLE KEYS */;
INSERT INTO `tb_rsvp` VALUES (11,11,'24João24 Vicente Dornas','242424@hotmail.com',24998882424,0,24,NULL,24,NULL,NULL,NULL,'2019-04-27 14:45:32'),(12,11,'Mais um ','paulo@gmail.com',31984050129,0,1,NULL,10,NULL,NULL,NULL,'2019-04-27 15:00:55'),(13,11,'Maria do Rosário','rosario@rosario.com',29888887777,0,10,NULL,1,NULL,NULL,NULL,'2019-04-27 15:01:06'),(15,11,'55555555555555','55555555555555',12123451234,0,15,NULL,5,NULL,NULL,NULL,'2019-05-01 01:19:04');
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
  `inmaxadultsconfig` int(3) DEFAULT '0',
  `inmaxchildrenconfig` int(3) DEFAULT '0',
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idrsvpconfig`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_rsvpconfig`
--

LOCK TABLES `tb_rsvpconfig` WRITE;
/*!40000 ALTER TABLE `tb_rsvpconfig` DISABLE KEYS */;
INSERT INTO `tb_rsvpconfig` VALUES (40,81,0,10,10,'2019-06-17 15:11:03');
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
-- Table structure for table `tb_states`
--

DROP TABLE IF EXISTS `tb_states`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_states` (
  `idstate` int(2) NOT NULL,
  `desstate` varchar(20) DEFAULT NULL,
  `desstatecode` varchar(2) DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idstate`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_states`
--

LOCK TABLES `tb_states` WRITE;
/*!40000 ALTER TABLE `tb_states` DISABLE KEYS */;
INSERT INTO `tb_states` VALUES (1,'Acre','AC','2019-06-12 15:07:28'),(2,'Alagoas','AL','2019-06-12 15:07:28'),(3,'Amazonas','AM','2019-06-12 15:07:28'),(4,'Amapá','AP','2019-06-12 15:07:28'),(5,'Bahia','BA','2019-06-12 15:07:28'),(6,'Ceará','CE','2019-06-12 15:07:28'),(7,'Distrito Federal','DF','2019-06-12 15:07:28'),(8,'Espírito Santo','ES','2019-06-12 15:07:28'),(9,'Goiás','GO','2019-06-12 15:07:28'),(10,'Maranhão','MA','2019-06-12 15:07:28'),(11,'Minas Gerais','MG','2019-06-12 15:07:28'),(12,'Mato Grosso do Sul','MS','2019-06-12 15:07:28'),(13,'Mato Grosso','MT','2019-06-12 15:07:28'),(14,'Pará','PA','2019-06-12 15:07:28'),(15,'Paraíba','PB','2019-06-12 15:07:28'),(16,'Pernambuco','PE','2019-06-12 15:07:28'),(17,'Piauí','PI','2019-06-12 15:07:28'),(18,'Paraná','PR','2019-06-12 15:07:28'),(19,'Rio de Janeiro','RJ','2019-06-12 15:07:28'),(20,'Rio Grande do Norte','RN','2019-06-12 15:07:28'),(21,'Rondônia','RO','2019-06-12 15:07:28'),(22,'Roraima','RR','2019-06-12 15:07:28'),(23,'Rio Grande do Sul','RS','2019-06-12 15:07:28'),(24,'Santa Catarina','SC','2019-06-12 15:07:28'),(25,'Sergipe','SE','2019-06-12 15:07:28'),(26,'São Paulo','SP','2019-06-12 15:07:28'),(27,'Tocantins','TO','2019-06-12 15:07:28');
/*!40000 ALTER TABLE `tb_states` ENABLE KEYS */;
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
  `inadmin` tinyint(4) DEFAULT '0',
  `inseller` tinyint(4) DEFAULT '0',
  `instatus` tinyint(4) DEFAULT '0',
  `inaccount` tinyint(4) DEFAULT NULL,
  `inplancontext` tinyint(4) DEFAULT '0',
  `inplan` int(3) DEFAULT '0',
  `interms` tinyint(4) DEFAULT '0',
  `desipterms` varchar(22) DEFAULT NULL,
  `dtterms` datetime DEFAULT NULL,
  `dtplanbegin` date DEFAULT NULL,
  `dtplanend` date DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_users`
--

LOCK TABLES `tb_users` WRITE;
/*!40000 ALTER TABLE `tb_users` DISABLE KEYS */;
INSERT INTO `tb_users` VALUES (11,11,'paulowebphp@gmail.com','$2y$12$jYbcHfoWsKGtdWfB7EVgnu73w/ophUt8xY3GpK.9X7KIEp108zdK.','paulowebphp',1,0,1,NULL,0,312,0,NULL,NULL,NULL,'0000-00-00','2019-04-24 17:00:33'),(13,12,'pwsecvendas2@gmail.com','$2y$12$qqbxp3qNREn1tAOSIE.QT.paU43mRLeiLRsx/RzUVCFBtEN.f51ku','pwsecvendas2',1,0,1,NULL,0,312,0,NULL,NULL,NULL,NULL,'2019-05-02 20:29:22'),(81,80,'jpccambraia3@gmail.com','$2y$12$uEu6Sdcp5RYARFkUTOMKR.5AnuUco16RC5YTpcVYEofxucjIjobvq','',0,1,1,1,3,312,1,'127.0.0.1','2019-06-17 12:11:25','2019-06-17','2021-01-19','2019-06-17 15:11:03');
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
  KEY `fk_userspasswordsrecoveries_users_idx` (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_userspasswordsrecoveries`
--

LOCK TABLES `tb_userspasswordsrecoveries` WRITE;
/*!40000 ALTER TABLE `tb_userspasswordsrecoveries` DISABLE KEYS */;
INSERT INTO `tb_userspasswordsrecoveries` VALUES (1,13,'127.0.0.1',NULL,'2019-05-23 16:46:07'),(2,13,'127.0.0.1',NULL,'2019-05-23 16:48:06'),(3,13,'127.0.0.1',NULL,'2019-05-23 16:49:26'),(4,13,'127.0.0.1',NULL,'2019-05-23 16:51:14'),(5,13,'127.0.0.1',NULL,'2019-05-23 16:52:21'),(6,13,'127.0.0.1',NULL,'2019-05-23 16:53:25'),(7,13,'127.0.0.1',NULL,'2019-05-23 16:53:52'),(8,13,'127.0.0.1',NULL,'2019-05-23 16:56:05'),(9,13,'127.0.0.1',NULL,'2019-05-23 16:56:57'),(10,13,'127.0.0.1',NULL,'2019-05-23 16:57:12'),(11,13,'127.0.0.1',NULL,'2019-05-23 16:58:34'),(12,13,'127.0.0.1',NULL,'2019-05-23 17:18:41'),(13,13,'127.0.0.1',NULL,'2019-05-23 17:33:54'),(14,13,'127.0.0.1',NULL,'2019-05-23 19:20:23'),(15,13,'127.0.0.1',NULL,'2019-05-23 19:20:47'),(16,13,'127.0.0.1',NULL,'2019-05-23 19:21:03'),(17,13,'127.0.0.1',NULL,'2019-05-23 19:21:34'),(18,13,'127.0.0.1',NULL,'2019-05-23 19:21:58'),(19,13,'127.0.0.1',NULL,'2019-05-23 19:57:10'),(20,13,'127.0.0.1',NULL,'2019-05-23 20:03:23'),(21,13,'127.0.0.1',NULL,'2019-05-23 20:03:54'),(22,13,'127.0.0.1','2019-05-23 17:21:51','2019-05-23 20:09:21'),(23,11,'127.0.0.1',NULL,'2019-05-23 20:10:57'),(24,13,'127.0.0.1',NULL,'2019-05-23 21:32:49');
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
  `instatus` tinyint(4) DEFAULT NULL,
  `inposition` tinyint(4) DEFAULT NULL,
  `desvideo` varchar(128) DEFAULT NULL,
  `desdescription` text,
  `desphoto` varchar(256) DEFAULT NULL,
  `desextension` varchar(4) DEFAULT NULL,
  `desurl` varchar(128) DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idvideo`),
  KEY `fk_videos_users_idx` (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_videos`
--

LOCK TABLES `tb_videos` WRITE;
/*!40000 ALTER TABLE `tb_videos` DISABLE KEYS */;
INSERT INTO `tb_videos` VALUES (11,11,2,12,'Vide2o da despedida de solteiro','Vid2eo engraçadissimo sobre a despedida de solteiro que fizemos no Stadt Jever','',NULL,'http://www.yo2utube.com','2019-04-27 19:17:09'),(12,11,7,1,'Video 1111','video 1111 descr',NULL,NULL,'paulowebphp2','2019-05-01 01:18:43');
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
  `desdescription` text CHARACTER SET utf8,
  `deslocation` varchar(128) CHARACTER SET utf8 DEFAULT NULL,
  `desphoto` varchar(256) CHARACTER SET utf8 DEFAULT NULL,
  `desextension` varchar(4) CHARACTER SET utf8 DEFAULT NULL,
  `dtwedding` datetime DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idwedding`),
  KEY `fk_weddings_users_idx` (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=88 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_weddings`
--

LOCK TABLES `tb_weddings` WRITE;
/*!40000 ALTER TABLE `tb_weddings` DISABLE KEYS */;
INSERT INTO `tb_weddings` VALUES (11,11,'Casamento vai bombar','Igreja de Boa Lourdes',NULL,NULL,'2019-08-30 12:30:00','2019-04-24 18:53:59'),(87,81,'Descrição do Casamento','Local do Casamento','0.jpg','jpg','2020-06-17 20:00:00','2019-06-17 15:11:03');
/*!40000 ALTER TABLE `tb_weddings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'db_amarcasarv1'
--
/*!50003 DROP PROCEDURE IF EXISTS `sp_accounts_save` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_accounts_save`(`pidaccount` INT(11), 
`piduser` INT(11), 
`pdesaccountcode` VARCHAR(22),
`pdesaccesstoken` VARCHAR(128),
`pdeschannelid` VARCHAR(22),
`pdesname` VARCHAR(128),
`pdesemail` VARCHAR(128),
`pnrcountryarea` INT(4),
`pnrddd` INT(2),
`pnrphone` BIGINT(2),
`pintypedoc` TINYINT,
`pdesdocument` VARCHAR(14),
`pdeszipcode` CHAR(8), 
`pdesaddress` VARCHAR(128),
`pdesnumber` VARCHAR(16), 
`pdescomplement` VARCHAR(32), 
`pdesdistrict` VARCHAR(32), 
`pdescity` VARCHAR(32), 
`pdesstate` VARCHAR(32), 
`pdescountry` VARCHAR(32), 
`pdtbirth` DATE

)
BEGIN

	IF pidaccount > 0 THEN
		
		UPDATE tb_accounts
        SET

            desaccountcode = pdesaccountcode,
            desaccesstoken = pdesaccesstoken,
            deschannelid = pdeschannelid,
            desname = pdesname,
            desemail = pdesemail,
            nrcountryarea = pnrcountryarea,
            nrddd = pnrddd,
            nrphone = pnrphone,
            intypedoc = pintypedoc,
            desdocument = pdesdocument,
            deszipcode = pdeszipcode,
            desaddress = pdesaddress,
            desnumber = pdesnumber,
            descomplement = pdescomplement,
            desdistrict = pdesdistrict,
            descity = pdescity,
            desstate = pdesstate,
            descountry = pdescountry,
            dtbirth = pdtbirth

		WHERE idaccount = pidaccount;
        
    ELSE
		
		INSERT INTO tb_accounts (iduser, 
            desaccountcode,
            desaccesstoken,
            deschannelid,
            desname,
            desemail,
            nrcountryarea,
            nrddd,
            nrphone,
            intypedoc,
            desdocument,
            deszipcode, 
            desaddress,
            desnumber, 
            descomplement,
            desdistrict, 
            descity, 
            desstate, 
            descountry, 
            dtbirth)
        VALUES(piduser, 
            pdesaccountcode,
            pdesaccesstoken,
            pdeschannelid,
            pdesname,
            pdesemail,
            pnrcountryarea,
            pnrddd,
            pnrphone,
            pintypedoc,
            pdesdocument,
            pdeszipcode, 
            pdesaddress,
            pdesnumber, 
            pdescomplement,
            pdesdistrict, 
            pdescity, 
            pdesstate, 
            pdescountry, 
            pdtbirth);
        
        SET pidaccount = LAST_INSERT_ID();
        
    END IF;

    SELECT * 
    FROM tb_accounts a
    INNER JOIN tb_users d 
    ON d.iduser = a.iduser
    WHERE idaccount = pidaccount;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_addresses_update` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_addresses_update`(`pidaddress` INT(11), 
`piduser` INT(11), 
`pdeszipcode` CHAR(8), 
`pdesaddress` VARCHAR(128), 
`pdesnumber` VARCHAR(16), 
`pdescomplement` VARCHAR(32), 
`pdesdistrict` VARCHAR(32), 
`pdescity` VARCHAR(32), 
`pdesstate` VARCHAR(32), 
`pdescountry` VARCHAR(32)

)
BEGIN

    IF pidaddress > 0 THEN
        
        UPDATE tb_addresses
        SET

            deszipcode = pdeszipcode, 
            desaddress = pdesaddress,
            desnumber = pdesnumber,
            descomplement = pdescomplement,
            desdistrict = pdesdistrict,
            descity = pdescity,
            desstate = pdesstate,
            descountry = pdescountry
        WHERE idaddress = pidaddress;
        
    ELSE
        
        INSERT INTO tb_addresses (iduser, 
            deszipcode, 
            desaddress, 
            desnumber, 
            descomplement, 
            desdistrict,
            descity, 
            desstate, 
            descountry) 
        VALUES(piduser, 
            pdeszipcode, 
            pdesaddress, 
            pdesnumber, 
            pdescomplement,
            pdesdistrict, 
            pdescity, 
            pdesstate, 
            pdescountry);
        
        SET pidaddress = LAST_INSERT_ID();
        
    END IF;

    SELECT * 
    FROM tb_addresses a
    INNER JOIN tb_users d 
    ON d.iduser = a.iduser
    WHERE idaddress = pidaddress;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_albuns_update` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_albuns_update`(`pidalbum` INT(11), `piduser` INT(11), `pinalbumstatus` TINYINT, `pinposition` TINYINT, `pinphotosize` INT(11), `pdesalbum` VARCHAR(128), `pdesdescription` TEXT, `pdescategory` VARCHAR(128), `pdesphoto` VARCHAR(256), `pdesextension` VARCHAR(4))
BEGIN
    
    IF pidalbum > 0 THEN
        
        UPDATE tb_albuns
        SET           
            inalbumstatus = pinalbumstatus,
            inposition = pinposition,
            inphotosize = pinphotosize,
            desalbum = pdesalbum,
            desdescription = pdesdescription,
            descategory = pdescategory,
            desphoto = pdesphoto,
            desextension = pdesextension
        WHERE idalbum = pidalbum;
        
    ELSE
    
        INSERT INTO tb_albuns (iduser,
                inalbumstatus,
                inposition,
                inphotosize,
                desalbum,
                desdescription,
                descategory,
                desphoto,
                desextension)
        VALUES(piduser,
                pinalbumstatus,
                pinposition,
                pinphotosize,
                pdesalbum,
                pdesdescription,
                pdescategory,
                pdesphoto,
                pdesextension);
        
        SET pidalbum = LAST_INSERT_ID();
        
    END IF;
    
    SELECT * 
    FROM tb_albuns a
    INNER JOIN tb_users d 
    ON d.iduser = a.iduser
    WHERE idalbum = pidalbum;
    
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_banks_update` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_banks_update`(`pidbank` INT(11), 
`piduser` INT(11), 
`pdesbankcode` VARCHAR(22), 
`pdesbanknumber` VARCHAR(4), 
`pdesagencynumber` VARCHAR(11), 
`pdesagencycheck` VARCHAR(2), 
`pdesaccounttype` VARCHAR(11), 
`pdesaccountnumber` VARCHAR(11), 
`pdesaccountcheck` VARCHAR(2)
)
BEGIN

	IF pidbank > 0 THEN
		
		UPDATE tb_banks
        SET

            desbankcode = pdesbankcode,
            desbanknumber = pdesbanknumber,
            desagencynumber = pdesagencynumber,
            desagencycheck = pdesagencycheck,
            desaccounttype = pdesaccounttype,
            desaccountnumber = pdesaccountnumber,
            desaccountcheck = pdesaccountcheck
          
		WHERE idbank = pidbank;
        
    ELSE
		
		INSERT INTO tb_banks (iduser,
	            desbankcode,
	            desbanknumber,
	            desagencynumber,
	            desagencycheck,
	            desaccounttype,
	            desaccountnumber,
	            desaccountcheck)
        VALUES(piduser,
	            pdesbankcode,
	            pdesbanknumber,
	            pdesagencynumber,
	            pdesagencycheck,
	            pdesaccounttype,
	            pdesaccountnumber,
	            pdesaccountcheck);
        
        SET pidbank = LAST_INSERT_ID();
        
    END IF;

    SELECT * 
    FROM tb_banks a
    INNER JOIN tb_users d 
    ON d.iduser = a.iduser
    WHERE idbank = pidbank;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_bestfriends_update` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_bestfriends_update`(`pidbestfriend` INT(11), 
`piduser` INT(11), 
`pinstatus` TINYINT, 
`pinposition` TINYINT, 
`pdesbestfriend` VARCHAR(128), 
`pdesdescription` TEXT, 
`pdesphoto` VARCHAR(256), 
`pdesextension` VARCHAR(4)
)
BEGIN
	
	IF pidbestfriend > 0 THEN
		
		UPDATE tb_bestfriends
        SET           
			instatus = pinstatus,
			inposition = pinposition,
			desbestfriend = pdesbestfriend,
			desdescription = pdesdescription,
			desphoto = pdesphoto,
            desextension = pdesextension
		WHERE idbestfriend = pidbestfriend;
        
    ELSE
    
		INSERT INTO tb_bestfriends (iduser,
                instatus,
                inposition,
                desbestfriend,
                desdescription,
                desphoto,
                desextension)
        VALUES(piduser,
                pinstatus,
                pinposition,
                pdesbestfriend,
                pdesdescription,
                pdesphoto,
                pdesextension);
		
		SET pidbestfriend = LAST_INSERT_ID();
        
    END IF;
    
    SELECT * 
    FROM tb_bestfriends a
    INNER JOIN tb_users d 
    ON d.iduser = a.iduser
    WHERE idbestfriend = pidbestfriend;
    
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_carts_update` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_carts_update`(`pidcart` INT, `pdessessionid` VARCHAR(64), `piduser` INT, `pincartstatus` TINYINT(4))
BEGIN

	IF pidcart > 0 THEN
		
		UPDATE tb_carts
        SET
            incartstatus = pincartstatus
		WHERE idcart = pidcart;
        
    ELSE
		
		INSERT INTO tb_carts (dessessionid, iduser, incartstatus)
        VALUES(pdessessionid, piduser, pincartstatus);
        
        SET pidcart = LAST_INSERT_ID();
        
    END IF;
    
    SELECT * 
    FROM tb_carts a
    INNER JOIN tb_users d 
    ON d.iduser = a.iduser
    WHERE idcart = pidcart;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_categories_save` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_categories_save`(`pidcategory` INT, `pdescategory` VARCHAR(64))
BEGIN
	
	IF pidcategory > 0 THEN
		
		UPDATE tb_categories
        SET descategory = pdescategory
        WHERE idcategory = pidcategory;
        
    ELSE
		
		INSERT INTO tb_categories (descategory) VALUES(pdescategory);
        
        SET pidcategory = LAST_INSERT_ID();
        
    END IF;
    
    SELECT * FROM tb_categories WHERE idcategory = pidcategory;
    
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_consorts_update` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_consorts_update`(`pidconsort` INT(11), 
`piduser` INT(11), 
`pdesconsort` VARCHAR(128), 
`pdesemail` VARCHAR(128), 
`pdesphoto` VARCHAR(256), 
`pdesextension` VARCHAR(4)
)
BEGIN
	
	IF pidconsort > 0 THEN
		
		UPDATE tb_consorts
        SET           
			desconsort = pdesconsort,
			desemail = pdesemail,
			desphoto = pdesphoto,
            desextension = pdesextension
		WHERE idconsort = pidconsort;
        
    ELSE
    
		INSERT INTO tb_consorts (iduser,
                desconsort,
                desemail,
                desphoto,
                desextension)
        VALUES(piduser,
                pdesconsort,
                pdesemail,
                pdesphoto,
                pdesextension);
		
		SET pidconsort = LAST_INSERT_ID();
        
    END IF;
    
    SELECT * 
    FROM tb_consorts a
    INNER JOIN tb_users d 
    ON d.iduser = a.iduser
    WHERE idconsort = pidconsort;
    
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_customers_save` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_customers_save`(`pidcustomer` INT(11), 
`piduser` INT(11), 
`pdescustomercode` VARCHAR(22),
`pdesname` VARCHAR(128),
`pdesemail` VARCHAR(128),
`pnrcountryarea` INT(4),
`pnrddd` INT(2),
`pnrphone` BIGINT(2),
`pintypedoc` TINYINT,
`pdesdocument` VARCHAR(14),
`pdeszipcode` CHAR(8), 
`pdesaddress` VARCHAR(128),
`pdesnumber` VARCHAR(16), 
`pdescomplement` VARCHAR(32), 
`pdesdistrict` VARCHAR(32), 
`pdescity` VARCHAR(32), 
`pdesstate` VARCHAR(32), 
`pdescountry` VARCHAR(32),
`pdescardcode` VARCHAR(22),
`pdesbrand` VARCHAR(8),
`pinfirst6` INT(6),
`pinlast4` INT(4),
`pdtbirth` DATE

)
BEGIN

	IF pidcustomer > 0 THEN
		
		UPDATE tb_customers
        SET

            descustomercode = pdescustomercode,
            desname = pdesname,
            desemail = pdesemail,
            nrcountryarea = pnrcountryarea,
            nrddd = pnrddd,
            nrphone = pnrphone,
            intypedoc = pintypedoc,
            desdocument = pdesdocument,
            deszipcode = pdeszipcode,
            desaddress = pdesaddress,
            desnumber = pdesnumber,
            descomplement = pdescomplement,
            desdistrict = pdesdistrict,
            descity = pdescity,
            desstate = pdesstate,
            descountry = pdescountry,
            descardcode = pdescardcode,
            desbrand = pdesbrand,
            infirst6 = pinfirst6,
            inlast4 = pinlast4,
            dtbirth = pdtbirth

		WHERE idcustomer = pidcustomer;
        
    ELSE
		
		INSERT INTO tb_customers (iduser, 
            descustomercode,
            desname,
            desemail,
            nrcountryarea,
            nrddd,
            nrphone,
            intypedoc,
            desdocument,
            deszipcode, 
            desaddress,
            desnumber, 
            descomplement,
            desdistrict, 
            descity, 
            desstate, 
            descountry,
            descardcode,
            desbrand,
            infirst6,
            inlast4,
            dtbirth)
        VALUES(piduser, 
            pdescustomercode,
            pdesname,
            pdesemail,
            pnrcountryarea,
            pnrddd,
            pnrphone,
            pintypedoc,
            pdesdocument,
            pdeszipcode, 
            pdesaddress,
            pdesnumber, 
            pdescomplement,
            pdesdistrict, 
            pdescity, 
            pdesstate, 
            pdescountry,
            pdescardcode,
            pdesbrand,
            pinfirst6,
            pinlast4, 
            pdtbirth);
        
        SET pidcustomer = LAST_INSERT_ID();
        
    END IF;

    SELECT * 
    FROM tb_customers a
    INNER JOIN tb_users d 
    ON d.iduser = a.iduser
    WHERE idcustomer = pidcustomer;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_customstyle_update` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_customstyle_update`(`pidcustomstyle` INT(11), 
`piduser` INT(11), 
`pidtemplate` INT(11), 
`pdesbanner` VARCHAR(256), 
`pdesbannerextension` VARCHAR(4), 
`pdescolorheader` VARCHAR(10), 
`pdescolorheadertext` VARCHAR(10), 
`pdescolorheaderhover` VARCHAR(10), 
`pdescolorfooter` VARCHAR(10), 
`pdescolorfootertext` VARCHAR(10), 
`pdescolorfooterhover` VARCHAR(10), 
`pdescolorh1` VARCHAR(10), 
`pdesfontfamilyh1` VARCHAR(64), 
`pdesfontsizeh1` VARCHAR(4), 
`pdescolorh2` VARCHAR(10), 
`pdesfontfamilyh2` VARCHAR(64), 
`pdesfontsizeh2` VARCHAR(4), 
`pdescolorh3` VARCHAR(10), 
`pdesfontfamilyh3` VARCHAR(64), 
`pdesfontsizeh3` VARCHAR(4),
`pdescolorh4` VARCHAR(10), 
`pdesfontfamilyh4` VARCHAR(64), 
`pdesfontsizeh4` VARCHAR(4),
`pdescolortext` VARCHAR(10), 
`pdescolortexthover` VARCHAR(10), 
`pdesfontfamilytext` VARCHAR(64), 
`pdesfontsizetext` VARCHAR(4),
`pdesroundbordersize` VARCHAR(4)
)
BEGIN
    
    IF pidcustomstyle > 0 THEN
        
        UPDATE tb_customstyle
        SET
            idtemplate = pidtemplate,
            desbanner = pdesbanner,
            desbannerextension = pdesbannerextension,
            descolorheader = pdescolorheader,
            descolorheadertext = pdescolorheadertext,
            descolorheaderhover = pdescolorheaderhover,
            descolorfooter = pdescolorfooter,
            descolorfootertext = pdescolorfootertext,
            descolorfooterhover = pdescolorfooterhover,
            descolorh1 = pdescolorh1,
            desfontfamilyh1 = pdesfontfamilyh1,
            desfontsizeh1 = pdesfontsizeh1,
            descolorh2 = pdescolorh2,
            desfontfamilyh2 = pdesfontfamilyh2,
            desfontsizeh2 = pdesfontsizeh2,
            descolorh3 = pdescolorh3,
            desfontfamilyh3 = pdesfontfamilyh3,
            desfontsizeh3 = pdesfontsizeh3,
            descolorh4 = pdescolorh4,
            desfontfamilyh4 = pdesfontfamilyh4,
            desfontsizeh4 = pdesfontsizeh4,
            descolortext = pdescolortext,
            descolortexthover = pdescolortexthover,
            desfontfamilytext = pdesfontfamilytext,
            desfontsizetext = pdesfontsizetext,
            desroundbordersize = pdesroundbordersize
        WHERE iduser = piduser;
        
    ELSE
    
        INSERT INTO tb_customstyle (iduser,
                idtemplate,
                desbanner,
                desbannerextension,
                descolorheader,
                descolorheadertext,
                descolorheaderhover,
                descolorfooter,
                descolorfootertext,
                descolorfooterhover,
                descolorh1,
                desfontfamilyh1,
                desfontsizeh1,
                descolorh2,
                desfontfamilyh2,
                desfontsizeh2,
                descolorh3,
                desfontfamilyh3,
                desfontsizeh3,
                descolorh4,
                desfontfamilyh4,
                desfontsizeh4,
                descolortext,
                descolortexthover,
                desfontfamilytext,
                desfontsizetext,
                desroundbordersize)
        VALUES(piduser,
                pidtemplate,
                pdesbanner,
                pdesbannerextension,
                pdescolorheader,
                pdescolorheadertext,
                pdescolorheaderhover,
                pdescolorfooter,
                pdescolorfootertext,
                pdescolorfooterhover,
                pdescolorh1,
                pdesfontfamilyh1,
                pdesfontsizeh1,
                pdescolorh2,
                pdesfontfamilyh2,
                pdesfontsizeh2,
                pdescolorh3,
                pdesfontfamilyh3,
                pdesfontsizeh3,
                pdescolorh4,
                pdesfontfamilyh4,
                pdesfontsizeh4,
                pdescolortext,
                pdescolortexthover,
                pdesfontfamilytext,
                pdesfontsizetext,
                pdesroundbordersize);
        
        SET pidcustomstyle = LAST_INSERT_ID();
        
    END IF;
    
    SELECT * 
    FROM tb_customstyle a
    INNER JOIN tb_users d ON d.iduser = a.iduser
    WHERE idcustomstyle = pidcustomstyle;
    
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_events_update` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_events_update`(`pidevent` INT(11), 
`piduser` INT(11), 
`pineventstatus` TINYINT, 
`pdesevent` VARCHAR(128), 
`pdesdescription` TEXT, 
`pnrcountryarea` INT(4),
`pnrddd` INT(2),
`pnrphone` BIGINT(20), 
`pdesaddress` VARCHAR(128), 
`pdesnumber` VARCHAR(16), 
`pdescomplement` VARCHAR(32), 
`pdesdistrict` VARCHAR(32), 
`pdescity` VARCHAR(32), 
`pdesstate` VARCHAR(32), 
`pdescountry` VARCHAR(32), 
`pdesphoto` VARCHAR(256), 
`pdesextension` VARCHAR(4), 
`pdtevent` DATETIME
)
BEGIN
	
	IF pidevent > 0 THEN
		
		UPDATE tb_events
        SET           
			ineventstatus = pineventstatus,
			desevent = pdesevent,
			desdescription = pdesdescription,
			nrcountryarea = pnrcountryarea,
			nrddd = pnrddd,
            nrphone = pnrphone,
            desaddress = pdesaddress,
            desnumber = pdesnumber,
            descomplement = pdescomplement,
            desdistrict = pdesdistrict,
            descity = pdescity,
            desstate = pdesstate,
            descountry = pdescountry,
			desphoto = pdesphoto,
			desextension = pdesextension,
			dtevent = pdtevent
		WHERE idevent = pidevent;
        
    ELSE
    
		INSERT INTO tb_events (iduser,
			ineventstatus,
			desevent,
			desdescription,
			nrcountryarea,
			nrddd,
            nrphone,
            desaddress,
			desnumber,
			descomplement,
			desdistrict,
			descity,
			desstate,
			descountry,
			desphoto,
			desextension,
			dtevent)
        VALUES(piduser,
			pineventstatus,
			pdesevent,
			pdesdescription,
			pnrcountryarea,
			pnrddd,
            pnrphone,
            pdesaddress,
			pdesnumber,
			pdescomplement,
			pdesdistrict,
			pdescity,
			pdesstate,
			pdescountry,
			pdesphoto,
			pdesextension,
			pdtevent);
		
		SET pidevent = LAST_INSERT_ID();
        
    END IF;
    
    SELECT * 
    FROM tb_events a
    INNER JOIN tb_users d 
    ON d.iduser = a.iduser
    WHERE idevent = pidevent;
    
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_initialpages_update` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_initialpages_update`(`pidinitialpage` INT(11), 
`piduser` INT(11), 
`pinparty` TINYINT, 
`pinbestfriend` TINYINT, 
`pinalbum` TINYINT, 
`pinvideo` TINYINT
)
BEGIN
    
    IF pidinitialpage > 0 THEN
        
        UPDATE tb_initialpages
        SET
            inparty = pinparty,
            inbestfriend = pinbestfriend,
            inalbum = pinalbum,
            invideo = pinvideo
        WHERE iduser = piduser;
        
    ELSE
    
        INSERT INTO tb_initialpages (iduser,
                inparty,
                inbestfriend,
                inalbum,
                invideo)
        VALUES(piduser,
                pinparty,
                pinbestfriend,
                pinalbum,
                pinvideo);
        
        SET pidinitialpage = LAST_INSERT_ID();
        
    END IF;
    
    SELECT * 
    FROM tb_initialpages a
    INNER JOIN tb_users d ON d.iduser = a.iduser
    WHERE idinitialpage = pidinitialpage;
    
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_menus_update` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_menus_update`(`pidmenu` INT(11), 
`piduser` INT(11), 
`pinwedding` TINYINT, 
`pinparty` TINYINT, 
`pinbestfriend` TINYINT, 
`pinrsvp` TINYINT, 
`pinmessage` TINYINT, 
`pinstore` TINYINT, 
`pinevent` TINYINT, 
`pinalbum` TINYINT, 
`pinvideo` TINYINT, 
`pinstakeholder` TINYINT,
`pinouterlist` TINYINT
)
BEGIN
    
    IF pidmenu > 0 THEN
        
        UPDATE tb_menus
        SET
            inwedding = pinwedding,
            inparty = pinparty,
            inbestfriend = pinbestfriend,
            inrsvp = pinrsvp,
            inmessage = pinmessage,
            instore = pinstore,
            inevent = pinevent,
            inalbum = pinalbum,
            invideo = pinvideo,
            instakeholder = pinstakeholder,
            inouterlist = pinouterlist
        WHERE iduser = piduser;
        
    ELSE
    
        INSERT INTO tb_menus (iduser,
                inwedding,
                inparty,
                inbestfriend,
                inrsvp,
                inmessage,
                instore,
                inevent,
                inalbum,
                invideo,
                instakeholder,
                inouterlist)
        VALUES(piduser,
                pinwedding,
                pinparty,
                pinbestfriend,
                pinrsvp,
                pinmessage,
                pinstore,
                pinevent,
                pinalbum,
                pinvideo,
                pinstakeholder,
                pinouterlist);
        
        SET pidmenu = LAST_INSERT_ID();
        
    END IF;
    
    SELECT * 
    FROM tb_menus a
    INNER JOIN tb_users d ON d.iduser = a.iduser
    WHERE idmenu = pidmenu;
    
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_messages_update` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_messages_update`(`pidmessage` INT(11), 
`piduser` INT(11), 
`pinmessagestatus` TINYINT, 
`pdesmessage` VARCHAR(128), 
`pdesemail` VARCHAR(128), 
`pdesdescription` TEXT

)
BEGIN
    
    IF pidmessage > 0 THEN
        
        UPDATE tb_messages
        SET           
            inmessagestatus = pinmessagestatus,
            desmessage = pdesmessage,
            desemail = pdesemail,
            desdescription = pdesdescription
        WHERE idmessage = pidmessage;
        
    ELSE
    
        INSERT INTO tb_messages (iduser,
                inmessagestatus,
                desmessage,
                desemail,
                desdescription)
        VALUES(piduser,
                pinmessagestatus,
                pdesmessage,
                pdesemail,
                pdesdescription);
        
        SET pidmessage = LAST_INSERT_ID();
        
    END IF;
    
    SELECT * 
    FROM tb_messages a
    INNER JOIN tb_users d 
    ON d.iduser = a.iduser
    WHERE idmessage = pidmessage;
    
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_orders_save_backup` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_orders_save_backup`(`pidorder` INT(11), `pidcart` INT(11), `piduser` INT(11), `pidstatus` INT(11), `pidaddress` INT(11), `pvltotal` DECIMAL(10,2))
BEGIN
	
	IF pidorder > 0 THEN
		
		UPDATE tb_orders
        SET
            idstatus = pidstatus,
            idaddress = pidaddress,
            vltotal = pvltotal
		WHERE idorder = pidorder;
        
    ELSE
    
		INSERT INTO tb_orders (idcart, iduser, idstatus, idaddress, vltotal)
        VALUES(pidcart, piduser, pidstatus, pidaddress, pvltotal);
		
		SET pidorder = LAST_INSERT_ID();
        
    END IF;
    
    SELECT * 
    FROM tb_orders a
    INNER JOIN tb_ordersstatus b ON a.idstatus = b.idstatus
    INNER JOIN tb_carts c ON a.idcart = c.idcart
    INNER JOIN tb_users d ON a.iduser = d.iduser
    INNER JOIN tb_addresses e ON a.idaddress = e.idaddress
    WHERE a.idorder = pidorder;
    
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_orders_update` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_orders_update`(`pidorder` INT(11), 
`piduser` INT(11), 
`pidcart` INT(11), 
`pidcustomer` INT(11), 
`pidpayment` INT(11), 
`pdesordercode` VARCHAR(22),
`pvltotal` DECIMAL(10,2)


)
BEGIN
    
    IF pidorder > 0 THEN
        
        UPDATE tb_orders
        SET
            idcustomer = pidcustomer,
            idpayment = pidpayment,
            desordercode = pdesordercode,
            vltotal = pvltotal
        WHERE idorder = pidorder;
        
    ELSE
    
        INSERT INTO tb_orders (iduser, 
            idcart,
            idcustomer,
            idpayment,
            desordercode,
            vltotal)
        VALUES(piduser, 
            pidcart,
            pidcustomer,
            pidpayment,
            pdesordercode,
            pvltotal);
        
        SET pidorder = LAST_INSERT_ID();
        
    END IF;
    
    SELECT * 
    FROM tb_orders a
    INNER JOIN tb_users b ON a.iduser = b.iduser
    INNER JOIN tb_carts c ON a.idcart = c.idcart
    INNER JOIN tb_customers d ON a.idcustomer = d.idcustomer
    INNER JOIN tb_payments e ON a.idpayment = e.idpayment
    WHERE a.idorder = pidorder;
    
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_outerlists_update` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_outerlists_update`(`pidouterlist` INT(11), 
`piduser` INT(11), 
`pinstatus` TINYINT, 
`pinposition` TINYINT, 
`pdesouterlist` VARCHAR(128), 
`pdesdescription` TEXT, 
`pdessite` VARCHAR(128), 
`pdeslocation` VARCHAR(128), 
`pnrcountryarea` INT(4), 
`pnrddd` INT(2), 
`pnrphone` BIGINT(20)
)
BEGIN
    
    IF pidouterlist > 0 THEN
        
        UPDATE tb_outerlists
        SET           
            instatus = pinstatus,
            inposition = pinposition,
            desouterlist = pdesouterlist,
            desdescription = pdesdescription,
            dessite = pdessite,
            deslocation = pdeslocation,
            nrcountryarea = pnrcountryarea,
            nrddd = pnrddd,
            nrphone = pnrphone
        WHERE idouterlist = pidouterlist;
        
    ELSE
    
        INSERT INTO tb_outerlists (iduser,
                instatus,
                inposition,
                desouterlist,
                desdescription,
                dessite,
                deslocation,
                nrcountryarea,
                nrddd,
                nrphone)
        VALUES(piduser,
                pinstatus,
                pinposition,
                pdesouterlist,
                pdesdescription,
                pdessite,
                pdeslocation,
                pnrcountryarea,
                pnrddd,
                pnrphone);
        
        SET pidouterlist = LAST_INSERT_ID();
        
    END IF;
    
    SELECT * 
    FROM tb_outerlists a
    INNER JOIN tb_users d 
    ON d.iduser = a.iduser
    WHERE idouterlist = pidouterlist;
    
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_parties_update` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_parties_update`(`pidparty` INT(11), 
`piduser` INT(11), 
`pinpartystatus` TINYINT, 
`pdesdescription` TEXT, 
`pdeslocation` VARCHAR(128), 
`pdesphoto` VARCHAR(256), 
`pdesextension` VARCHAR(4), 
`pdtparty` DATETIME

)
BEGIN
    
    IF pidparty > 0 THEN
        
        UPDATE tb_parties
        SET
            inpartystatus = pinpartystatus,
            desdescription = pdesdescription,
            deslocation = pdeslocation,
            desphoto = pdesphoto,
            desextension = pdesextension,
            dtparty = pdtparty
        WHERE iduser = piduser;
        
    ELSE
    
        INSERT INTO tb_parties (iduser,
                inpartystatus,
                desdescription,
                deslocation,
                desphoto,
                desextension,
                dtparty)
        VALUES(piduser,
                pinpartystatus,
                pdesdescription,
                pdeslocation,
                pdesphoto,
                pdesextension,
                pdtparty);
        
        SET pidparty = LAST_INSERT_ID();
        
    END IF;
    
    SELECT * 
    FROM tb_parties a
    INNER JOIN tb_users d ON d.iduser = a.iduser
    WHERE idparty = pidparty;
    
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_payments_update` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_payments_update`(`pidpayment` INT(11), 
`piduser` INT(11), 
`pdespaymentcode` VARCHAR(22), 
`pinpaymentstatus` TINYINT,
`pinpaymentmethod` TINYINT(4), 
`pnrinstallment` INT(3), 
`pdeslinecode` VARCHAR(128), 
`pdesprinthref` VARCHAR(256),
`pdesholdername` VARCHAR(64), 
`pnrholdercountryarea` INT(4), 
`pnrholderddd` INT(2), 
`pnrholderphone` BIGINT(20),
`pinholdertypedoc` TINYINT,
`pdesholderdocument` VARCHAR(14), 
`pdesholderzipcode` CHAR(8), 
`pdesholderaddress` VARCHAR(128), 
`pdesholdernumber` VARCHAR(16), 
`pdesholdercomplement` VARCHAR(32), 
`pdesholderdistrict` VARCHAR(32), 
`pdesholdercity` VARCHAR(32), 
`pdesholderstate` VARCHAR(32), 
`pdtholderbirth` DATE

)
BEGIN

	IF pidpayment > 0 THEN
		
		UPDATE tb_payments
        SET

            despaymentcode = pdespaymentcode,
            inpaymentstatus = pinpaymentstatus,
            inpaymentmethod = pinpaymentmethod,
            nrinstallment = pnrinstallment,
            deslinecode = pdeslinecode,
            desprinthref = pdesprinthref,
            desholdername = pdesholdername,
            nrholdercountryarea = pnrholdercountryarea,
            nrholderddd = pnrholderddd,
            nrholderphone = pnrholderphone,
            inholdertypedoc = pinholdertypedoc,
            desholderdocument = pdesholderdocument,
            desholderzipcode = pdesholderzipcode,
            desholderaddress = pdesholderaddress,
            desholdernumber = pdesholdernumber,
            desholdercomplement = pdesholdercomplement,
            desholderdistrict = pdesholderdistrict,
            desholdercity = pdesholdercity,
            desholderstate = pdesholderstate,
            dtholderbirth = pdtholderbirth

		WHERE idpayment = pidpayment;
        
    ELSE
		
		INSERT INTO tb_payments (iduser,
	            despaymentcode,
				inpaymentstatus,
				inpaymentmethod,
				nrinstallment,
				deslinecode,
				desprinthref,
				desholdername,
				nrholdercountryarea,
				nrholderddd,
				nrholderphone,
				inholdertypedoc,
				desholderdocument,
				desholderzipcode,
				desholderaddress,
				desholdernumber,
				desholdercomplement,
				desholderdistrict,
				desholdercity,
				desholderstate,
				dtholderbirth)
        VALUES(piduser,
	            pdespaymentcode,
				pinpaymentstatus,
				pinpaymentmethod,
				pnrinstallment,
				pdeslinecode,
				pdesprinthref,
				pdesholdername,
				pnrholdercountryarea,
				pnrholderddd,
				pnrholderphone,
				pinholdertypedoc,
				pdesholderdocument,
				pdesholderzipcode,
				pdesholderaddress,
				pdesholdernumber,
				pdesholdercomplement,
				pdesholderdistrict,
				pdesholdercity,
				pdesholderstate,
				pdtholderbirth);
        
        SET pidpayment = LAST_INSERT_ID();
        
    END IF;

    SELECT * 
    FROM tb_payments a
    INNER JOIN tb_users d 
    ON d.iduser = a.iduser
    WHERE idpayment = pidpayment;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_plans_save` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_plans_save`(`pidplan` INT(11), 
`piduser` INT(11), 
`piddiscount` INT(11), 
`pidcupom` INT(11), 
`pincupom` TINYINT, 
`pindiscount` TINYINT, 
`pinplancode` INT(3), 
`pinmigration` TINYINT(4), 
`pinperiod` TINYINT(4), 
`pdesplan` VARCHAR(128), 
`pvlregularprice` DECIMAL(10,2),
`pvlsaleprice` DECIMAL(10,2),
`pdtbegin` DATE,
`pdtend` DATE

)
BEGIN
	
	IF pidplan > 0 THEN
		
		UPDATE tb_plans
        SET
            iddiscount = piddiscount,
            idcupom = pidcupom,
            incupom = pincupom,
            indiscount = pindiscount,
            inplancode = pinplancode,
            inmigration = pinmigration,
            inperiod = pinperiod,
            desplan = pdesplan,
            vlregularprice = pvlregularprice,
            vlsaleprice = pvlsaleprice,
            dtbegin = pdtbegin,
            dtend = pdtend
		WHERE idplan = pidplan;
        
    ELSE
    
		INSERT INTO tb_plans (iduser, 
            iddiscount,
            idcupom,
            incupom,
            indiscount,
            inplancode,
            inmigration,
            inperiod,
            desplan,
            vlregularprice,
            vlsaleprice,
            dtbegin,
            dtend)
        VALUES(piduser,
            piddiscount,
            pidcupom,
            pincupom,
            pindiscount,
            pinplancode,
            pinmigration,
            pinperiod,
            pdesplan,
            pvlregularprice,
            pvlsaleprice,
            pdtbegin,
            pdtend);
		
		SET pidplan = LAST_INSERT_ID();
        
    END IF;
    
    SELECT * 
    FROM tb_plans a
    INNER JOIN tb_users e ON a.iduser = e.iduser
    WHERE a.idplan = pidplan;
    
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_products_update` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_products_update`(`pidproduct` INT(11), `piduser` INT(11), `pinbought` TINYINT, `pincategory` TINYINT, `pdesproduct` VARCHAR(64), `pvlprice` DECIMAL(10,2), `pvlwidth` DECIMAL(10,2), `pvlheight` DECIMAL(10,2), `pvllength` DECIMAL(10,2), `pvlweight` DECIMAL(10,2), `pdesphoto` VARCHAR(256), `pdesextension` VARCHAR(4))
BEGIN
    
    IF pidproduct > 0 THEN
        
        UPDATE tb_products
        SET 
            inbought = pinbought,
            incategory = pincategory,
            desproduct = pdesproduct,
            vlprice = pvlprice,
            vlwidth = pvlwidth,
            vlheight = pvlheight,
            vllength = pvllength,
            vlweight = pvlweight,
            desphoto = pdesphoto,
            desextension = pdesextension
        WHERE idproduct = pidproduct;
        
    ELSE
        
        INSERT INTO tb_products (iduser, inbought, incategory, desproduct, vlprice, vlwidth, vlheight, vllength, vlweight, desphoto, desextension) 
        VALUES(piduser, pinbought, pincategory, pdesproduct, pvlprice, pvlwidth, pvlheight, pvllength, pvlweight, pdesphoto, pdesextension);
        
        SET pidproduct = LAST_INSERT_ID();
        
    END IF;
    
    SELECT * FROM tb_products a
    INNER JOIN tb_users d
    ON d.iduser = a.iduser
    WHERE idproduct = pidproduct;
    
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_rsvpconfig_update` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_rsvpconfig_update`(`pidrsvpconfig` INT(11), 
`piduser` INT(11), 
`pinclosed` TINYINT, 
`pinmaxadultsconfig` INT(3), 
`pinmaxchildrenconfig` INT(3) 
)
BEGIN
	
	IF pidrsvpconfig > 0 THEN
		
		UPDATE tb_rsvpconfig
        SET           
			inclosed = pinclosed,
			inmaxadultsconfig = pinmaxadultsconfig,
			inmaxchildrenconfig = pinmaxchildrenconfig
		WHERE idrsvpconfig = pidrsvpconfig;
        
    ELSE
    
		INSERT INTO tb_rsvpconfig (iduser,
                inclosed,
                inmaxadultsconfig,
                inmaxchildrenconfig)
        VALUES(piduser,
                pinclosed,
                pinmaxadultsconfig,
                pinmaxchildrenconfig);
		
		SET pidrsvpconfig = LAST_INSERT_ID();
        
    END IF;
    
    SELECT * 
    FROM tb_rsvpconfig a
    INNER JOIN tb_users d 
    ON d.iduser = a.iduser
    WHERE idrsvpconfig = pidrsvpconfig;
    
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_rsvp_update` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_rsvp_update`(`pidrsvp` INT(11), 
`piduser` INT(11), 
`pdesguest` VARCHAR(128), 
`pdesemail` VARCHAR(128), 
`pnrphone` BIGINT(20), 
`pinconfirmed` TINYINT, 
`pinmaxadults` TINYINT, 
`pinadultsconfirmed` TINYINT, 
`pinmaxchildren` TINYINT, 
`pinchildrenconfirmed` TINYINT, 
`pdesguestaccompanies` TEXT, 
`pdtconfirmed` DATE


)
BEGIN
	
	IF pidrsvp > 0 THEN
		
		UPDATE tb_rsvp
        SET           
			desguest = pdesguest,
			desemail = pdesemail,
			nrphone = pnrphone,
			inconfirmed = pinconfirmed,
			inmaxadults = pinmaxadults,
			inadultsconfirmed = pinadultsconfirmed,
			inmaxchildren = pinmaxchildren,
			inchildrenconfirmed = pinchildrenconfirmed,
            desguestaccompanies = pdesguestaccompanies,
			dtconfirmed = pdtconfirmed
		WHERE idrsvp = pidrsvp;
        
    ELSE
    
		INSERT INTO tb_rsvp (iduser,
                desguest,
                desemail,
                nrphone,
                inconfirmed,
                inmaxadults,
                inadultsconfirmed,
                inmaxchildren,
                inchildrenconfirmed,
                desguestaccompanies,
                dtconfirmed)
        VALUES(piduser,
                pdesguest,
                pdesemail,
                pnrphone,
                pinconfirmed,
                pinmaxadults,
                pinadultsconfirmed,
                pinmaxchildren,
                pinchildrenconfirmed,
                pdesguestaccompanies,
                pdtconfirmed);
		
		SET pidrsvp = LAST_INSERT_ID();
        
    END IF;
    
    SELECT * 
    FROM tb_rsvp a
    INNER JOIN tb_users d 
    ON d.iduser = a.iduser
    WHERE idrsvp = pidrsvp;
    
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_stakeholdersupdate_save` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_stakeholdersupdate_save`(`pidstakeholder` INT(11), `piduser` INT(11), `pinstatus` TINYINT, `pinposition` TINYINT, `pdesstakeholder` VARCHAR(128), `pdesdescription` TEXT, `pdescategory` VARCHAR(128), `pdeslocation` VARCHAR(128), `pdesemail` VARCHAR(128), `pdessite` VARCHAR(128), `pnrphone` BIGINT(20))
BEGIN
    
    IF pidstakeholder > 0 THEN
        
        UPDATE tb_stakeholders
        SET           
            instatus = pinstatus,
            inposition = pinposition,
            desstakeholder = pdesstakeholder,
            desdescription = pdesdescription,
            descategory = pdescategory,
            deslocation = pdeslocation,
            desemail = pdesemail,
            dessite = pdessite,
            nrphone = pnrphone
        WHERE idstakeholder = pidstakeholder;
        
    ELSE
    
        INSERT INTO tb_stakeholders (iduser,
                instatus,
                inposition,
                desstakeholder,
                desdescription,
                descategory,
                deslocation,
                desemail,
                dessite,
                nrphone)
        VALUES(piduser,
                pinstatus,
                pinposition,
                pdesstakeholder,
                pdesdescription,
                pdescategory,
                pdeslocation,
                pdesemail,
                pdessite,
                pnrphone);
        
        SET pidstakeholder = LAST_INSERT_ID();
        
    END IF;
    
    SELECT * 
    FROM tb_stakeholders a
    INNER JOIN tb_users d 
    ON d.iduser = a.iduser
    WHERE idstakeholder = pidstakeholder;
    
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_transfers_update` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_transfers_update`(`pidtransferbank` INT(11), 
`piduser` INT(11), 
`pidstatus` INT(11), 
`pdestransfercode` VARCHAR(22), 
`pdestransferholdername` VARCHAR(128), 
`pdesbanknumber` VARCHAR(4), 
`pdesagencynumber` VARCHAR(11), 
`pdesagencycheck` VARCHAR(2), 
`pdesaccounttype` VARCHAR(11), 
`pdesaccountnumber` VARCHAR(11), 
`pdesaccountcheck` VARCHAR(2),
`pvlamount` DECIMAL(10,2)

)
BEGIN

	IF pidtransferbank > 0 THEN
		
		UPDATE tb_banks
        SET
        	idstatus = Pidstatus,
            destransfercode = pdestransfercode,
            destransferholdername = pdestransferholdername,
            desbanknumber = pdesbanknumber,
            desagencynumber = pdesagencynumber,
            desagencycheck = pdesagencycheck,
            desaccounttype = pdesaccounttype,
            desaccountnumber = pdesaccountnumber,
            desaccountcheck = pdesaccountcheck,
            vlamount = pvlamount
          
		WHERE idtransferbank = pidtransferbank;
        
    ELSE
		
		INSERT INTO tb_banks (iduser,
				idstatus,
	            destransfercode,
	            destransferholdername,
	            desbanknumber,
	            desagencynumber,
	            desagencycheck,
	            desaccounttype,
	            desaccountnumber,
	            desaccountcheck,
	            vlamount)
        VALUES(piduser,
        		pidstatus,
	            pdestransfercode,
	            pdestransferholdername,
	            pdesbanknumber,
	            pdesagencynumber,
	            pdesagencycheck,
	            pdesaccounttype,
	            pdesaccountnumber,
	            pdesaccountcheck,
	            pvlamount);
        
        SET pidtransferbank = LAST_INSERT_ID();
        
    END IF;

    SELECT * 
    FROM tb_banks a
    INNER JOIN tb_users d 
    ON d.iduser = a.iduser
    WHERE idtransferbank = pidtransferbank;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_userspasswordsrecoveries_create` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_userspasswordsrecoveries_create`(`piduser` INT, `pdesip` VARCHAR(45))
BEGIN
	
	INSERT INTO tb_userspasswordsrecoveries (iduser, desip)
    VALUES(piduser, pdesip);
    
    SELECT * FROM tb_userspasswordsrecoveries
    WHERE idrecovery = LAST_INSERT_ID();
    
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_users_delete` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_users_delete`(`piduser` INT)
BEGIN
    
    DECLARE vidperson INT;
    
    SET FOREIGN_KEY_CHECKS = 0;
	
	SELECT idperson INTO vidperson
    FROM tb_users
    WHERE iduser = piduser;
	
    DELETE FROM tb_addresses WHERE idperson = vidperson;
    DELETE FROM tb_addresses WHERE idaddress IN(SELECT idaddress FROM tb_orders WHERE iduser = piduser);
	DELETE FROM tb_persons WHERE idperson = vidperson;
    
    DELETE FROM tb_userslogs WHERE iduser = piduser;
    DELETE FROM tb_userspasswordsrecoveries WHERE iduser = piduser;
    DELETE FROM tb_orders WHERE iduser = piduser;
    DELETE FROM tb_cartsproducts WHERE idcart IN(SELECT idcart FROM tb_carts WHERE iduser = piduser);
    DELETE FROM tb_carts WHERE iduser = piduser;
    DELETE FROM tb_users WHERE iduser = piduser;

    DELETE FROM tb_bestfriends WHERE iduser = piduser;
    DELETE FROM tb_customstyle WHERE iduser = piduser;
    DELETE FROM tb_events WHERE iduser = piduser;
    DELETE FROM tb_gifts WHERE iduser = piduser;
    DELETE FROM tb_images WHERE iduser = piduser;
    DELETE FROM tb_messages WHERE iduser = piduser;
    DELETE FROM tb_rsvp WHERE iduser = piduser;
    DELETE FROM tb_stakeholders WHERE iduser = piduser;
    DELETE FROM tb_stories WHERE iduser = piduser;
    DELETE FROM tb_videos WHERE iduser = piduser;
    DELETE FROM tb_albuns WHERE iduser = piduser;
    DELETE FROM tb_menus WHERE iduser = piduser;
    DELETE FROM tb_parties WHERE iduser = piduser;
    DELETE FROM tb_initialpages WHERE iduser = piduser;
    DELETE FROM tb_consorts WHERE iduser = piduser;
    DELETE FROM tb_weddings WHERE iduser = piduser;

    
    SET FOREIGN_KEY_CHECKS = 1;
    
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_users_save` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_users_save`(`pdeslogin` VARCHAR(64), 
`pdespassword` VARCHAR(256), 
`pdesdomain` VARCHAR(128), 
`pinadmin` TINYINT, 
`pinseller` TINYINT, 
`pinstatus` TINYINT, 
`pinaccount` TINYINT, 
`pinplancontext` TINYINT, 
`pinplan` INT, 
`pinterms` TINYINT,
`pdesipterms` VARCHAR(22),
`pdtterms` DATETIME,
`pdtplanbegin` DATE, 
`pdtplanend` DATE,
`pdesperson` VARCHAR(128), 
`pdesnick` VARCHAR(128), 
`pdesemail` VARCHAR(128), 
`pnrcountryarea` INT, 
`pnrddd` INT, 
`pnrphone` BIGINT, 
`pintypedoc` TINYINT, 
`pdesdocument` VARCHAR(14),
`pdesphoto` VARCHAR(256), 
`pdesextension` VARCHAR(4),
`pdtbirth` DATE 

)
BEGIN
    
    DECLARE vidperson INT;
    
    INSERT INTO tb_persons (desperson, 
        desnick,
        desemail,
        nrcountryarea,
        nrddd,
        nrphone,
        intypedoc, 
        desdocument,  
        desphoto, 
        desextension,
        dtbirth)
    VALUES(pdesperson, 
        pdesnick,
        pdesemail,
        pnrcountryarea,
        pnrddd,
        pnrphone,
        pintypedoc, 
        pdesdocument, 
        pdesphoto, 
        pdesextension,
        pdtbirth);
    
    SET vidperson = LAST_INSERT_ID();
    
    INSERT INTO tb_users (idperson, 
        deslogin, 
        despassword, 
        desdomain, 
        inadmin, 
        inseller, 
        instatus, 
        inaccount, 
        inplancontext,
        inplan, 
        interms,
        desipterms,
        dtterms,
        dtplanbegin, 
        dtplanend)
    VALUES(vidperson, 
        pdeslogin, 
        pdespassword, 
        pdesdomain, 
        pinadmin, 
        pinseller, 
        pinstatus, 
        pinaccount, 
        pinplancontext,
        pinplan,  
        pinterms,
        pdesipterms,
        pdtterms,
        pdtplanbegin, 
        pdtplanend);
    
    SELECT * FROM tb_users a INNER JOIN tb_persons b USING(idperson) WHERE a.iduser = LAST_INSERT_ID();
    
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_users_update` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_users_update`(`piduser` INT, 
`pdeslogin` VARCHAR(64), 
`pdespassword` VARCHAR(256), 
`pdesdomain` VARCHAR(128), 
`pinadmin` TINYINT, 
`pinseller` TINYINT, 
`pinstatus` TINYINT, 
`pinaccount` TINYINT, 
`pinplancontext` TINYINT, 
`pinplan` INT, 
`pinterms` TINYINT,
`pdesipterms` VARCHAR(22),
`pdtterms` DATETIME,
`pdtplanbegin` DATE, 
`pdtplanend` DATE,
`pdesperson` VARCHAR(128), 
`pdesnick` VARCHAR(128), 
`pdesemail` VARCHAR(128), 
`pnrcountryarea` INT, 
`pnrddd` INT, 
`pnrphone` BIGINT, 
`pintypedoc` TINYINT, 
`pdesdocument` VARCHAR(14),
`pdesphoto` VARCHAR(256), 
`pdesextension` VARCHAR(4),
`pdtbirth` DATE
)
BEGIN
    
    DECLARE vidperson INT;
    
    SELECT idperson INTO vidperson
    FROM tb_users
    WHERE iduser = piduser;
    
    UPDATE tb_persons
    SET 
        desperson = pdesperson,
        desnick = pdesnick,
        desemail = pdesemail,
        nrcountryarea = pnrcountryarea,
        nrddd = pnrddd,
        nrphone = pnrphone,
        intypedoc = pintypedoc, 
        desdocument = pdesdocument,
        desphoto = pdesphoto,
        desextension = pdesextension,
        dtbirth = pdtbirth
        
    WHERE idperson = vidperson;
    
    UPDATE tb_users
    SET
        deslogin = pdeslogin, 
        despassword = pdespassword, 
        desdomain = pdesdomain, 
        inadmin = pinadmin, 
        inseller = pinseller, 
        instatus = pinstatus,
        inaccount = pinaccount,
        inplancontext = pinplancontext,
        inplan = pinplan,  
        interms = pinterms,
        desipterms = pdesipterms,
        dtterms = pdtterms,
        dtplanbegin = pdtplanbegin, 
        dtplanend = pdtplanend
    
    WHERE iduser = piduser;
    
    SELECT * FROM tb_users a INNER JOIN tb_persons b ON a.idperson = b.idperson WHERE a.iduser = piduser;
    
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_videos_update` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_videos_update`(`pidvideo` INT(11), 
`piduser` INT(11), 
`pinstatus` TINYINT, 
`pinposition` TINYINT, 
`pdesvideo` VARCHAR(128), 
`pdesdescription` TEXT, 
`pdesphoto` VARCHAR(256), 
`pdesextension` VARCHAR(4), 
`pdesurl` VARCHAR(128)
)
BEGIN
	
	IF pidvideo > 0 THEN
		
		UPDATE tb_videos
        SET           
			instatus = pinstatus,
			inposition = pinposition,
			desvideo = pdesvideo,
			desdescription = pdesdescription,
			desphoto = pdesphoto,
            desextension = pdesextension,
			desurl = pdesurl
		WHERE idvideo = pidvideo;
        
    ELSE
    
		INSERT INTO tb_videos (iduser,
                instatus,
                inposition,
                desvideo,
                desdescription,
                desphoto,
                desextension,
                desurl)
        VALUES(piduser,
                pinstatus,
                pinposition,
                pdesvideo,
                pdesdescription,
                pdesphoto,
                pdesextension,
                pdesurl);
		
		SET pidvideo = LAST_INSERT_ID();
        
    END IF;
    
    SELECT * 
    FROM tb_videos a
    INNER JOIN tb_users d 
    ON d.iduser = a.iduser
    WHERE idvideo = pidvideo;
    
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_weddings_update` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_weddings_update`(`pidwedding` INT(11), 
`piduser` INT(11), 
`pdesdescription` TEXT, 
`pdeslocation` VARCHAR(128), 
`pdesphoto` VARCHAR(256), 
`pdesextension` VARCHAR(4), 
`pdtwedding` DATETIME
)
BEGIN
    
    IF pidwedding > 0 THEN
        
        UPDATE tb_weddings
        SET
            desdescription = pdesdescription,
            deslocation = pdeslocation,
            desphoto = pdesphoto,
            desextension = pdesextension,
            dtwedding = pdtwedding
        WHERE iduser = piduser;
        
    ELSE
    
        INSERT INTO tb_weddings (iduser,
                desdescription,
                deslocation,
                desphoto,
                desextension,
                dtwedding)
        VALUES(piduser,
                pdesdescription,
                pdeslocation,
                pdesphoto,
                pdesextension,
                pdtwedding);
        
        SET pidwedding = LAST_INSERT_ID();
        
    END IF;
    
    SELECT * 
    FROM tb_weddings a
    INNER JOIN tb_users d ON d.iduser = a.iduser
    WHERE idwedding = pidwedding;
    
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-06-17 12:18:22
