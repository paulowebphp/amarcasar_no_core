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
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_accounts`
--

LOCK TABLES `tb_accounts` WRITE;
/*!40000 ALTER TABLE `tb_accounts` DISABLE KEYS */;
INSERT INTO `tb_accounts` VALUES (1,30,'MPA-A0ACF142CF4F','cc460510ee004a3e9568a3787de9167b_v2',NULL,'Luiz Cambraia','luiz@hotmail.com',NULL,31,984050125,0,'01224202686','30160037','Rua Espirito','1757','401','Lourdes','Belo Horizonte','MG','BRA','1980-02-23','2019-05-21 16:11:22'),(2,30,'MPA-44061B0ADA72','d5123210ee874aff8a60df703460616b_v2','APP-MSL2111M3D69','Luiz Cambraia','luiz@hotmail.com',NULL,31,984050125,0,'01224202686','30160037','Rua Espirito','1757','401','Lourdes','Belo Horizonte','MG','BRA','1980-02-23','2019-05-21 16:13:01'),(3,30,'MPA-305F49FF2BFB','2a586942b1b047ffa1cd73041cb20dac_v2','APP-MSL2111M3D69','Luiz Cambraia','luiz@hotmail.com',NULL,31,984050125,0,'01224202686','30160037','Rua Espirito','1757','401','Lourdes','Belo Horizonte','MG','BRA','1980-02-23','2019-05-21 16:14:02'),(4,30,'MPA-CC31F9A74785','9093b3828f0040089e113c88b36159a9_v2','APP-MSL2111M3D69','Luiz Cambraia','luiz@hotmail.com',NULL,31,984050125,0,'01224202686','30160037','Rua Espirito','1757','401','Lourdes','Belo Horizonte','MG','BRA','1980-02-23','2019-05-21 16:14:28'),(5,30,'MPA-8C52E57845B2','68ddd62f4ae843ce9827cfda5c3daca3_v2','APP-MSL2111M3D69','Luiz Cambraia','luiz@hotmail.com',NULL,31,984050125,0,'01224202686','30160037','Rua Espirito','1757','401','Lourdes','Belo Horizonte','MG','BRA','1980-02-23','2019-05-21 16:15:18'),(6,30,'MPA-E0D87E26C3BA','3839543a7bf442c9aac17fce5c314597_v2','APP-MSL2111M3D69','Luiz Cambraia','luiz@hotmail.com',NULL,31,984050125,0,'01224202686','30160037','Rua Espirito','1757','401','Lourdes','Belo Horizonte','MG','BRA','1980-02-23','2019-05-21 16:15:48'),(7,30,'MPA-DBC857C714B3','fa9bcba752854fe899cf4ce4b4e884ad_v2','APP-MSL2111M3D69','Luiz Cambraia','luiz@hotmail.com',NULL,31,984050125,0,'01224202686','30160037','Rua Espirito','1757','401','Lourdes','Belo Horizonte','MG','BRA','1980-02-23','2019-05-21 16:16:06'),(8,31,'MPA-E5EC221D875D','b7dfdc15eece491984537f81152a6b2f_v2','APP-MSL2111M3D69','Cesar Maciel','maciel@gmail.com',NULL,12,123456789,NULL,'01224202686','13465400','Rua Alvaro','401','54','Vila Rehder','Americana','SP','BRA','1980-02-02','2019-05-21 17:32:27'),(9,32,'MPA-867714CC0774','f8129d1b083444e6a7ae85f3b244f2cf_v2','APP-MSL2111M3D69','Geromel Santos','geromel@hotmail.com',NULL,12,123456789,NULL,'01224202686','30160037','Alvaro','500','41','Lourdes','Belo Horizonte','MG','BRA','1980-02-02','2019-05-21 18:16:37'),(10,33,'MPA-7CCA20DF5C05','67001a60c6f348e9a2af40ff271ce5a0_v2','APP-MSL2111M3D69','Lucio Moraes','lucio@hotmail.com',NULL,31,123456789,NULL,'01224202686','30160037','Rua Alvares Maciel','1756','123456','Luan','Belo Horizonte','MG','BRA','1984-12-12','2019-05-21 20:05:02'),(11,33,'MPA-E6E6D4A603CF','664fcb2bf44f4fe1b06d45945a7bdb48_v2','APP-MSL2111M3D69','Lucio Moraes','lucio@hotmail.com',NULL,31,123456789,NULL,'01224202686','30160037','Rua Alvares Maciel','1756','123456','Luan','Belo Horizonte','MG','BRA','1984-12-12','2019-05-21 20:05:32'),(12,33,'MPA-AAD979840C94','fb4cb6c4523c42bf89ecef84e45c6fb7_v2','APP-MSL2111M3D69','Lucio Moraes','lucio@hotmail.com',NULL,31,123456789,NULL,'01224202686','30160037','Rua Alvares Maciel','1756','123456','Luan','Belo Horizonte','MG','BRA','1984-12-12','2019-05-21 20:06:17'),(13,33,'MPA-6210039C305A','655673b4d61e48af8ac8127bce5252fa_v2','APP-MSL2111M3D69','Lucio Moraes','lucio@hotmail.com',NULL,31,123456789,NULL,'01224202686','30160037','Rua Alvares Maciel','1756','123456','Luan','Belo Horizonte','MG','BRA','1984-12-12','2019-05-21 20:06:47'),(14,33,'MPA-63DC035ED47E','b8ff08e7149443a8b82ca97956192b28_v2','APP-MSL2111M3D69','Lucio Moraes','lucio@hotmail.com',NULL,31,123456789,NULL,'01224202686','30160037','Rua Alvares Maciel','1756','123456','Luan','Belo Horizonte','MG','BRA','1984-12-12','2019-05-21 20:08:06'),(15,33,'MPA-504EEE246CAA','3aeb9a668cff456480d3d1ae48251344_v2','APP-MSL2111M3D69','Lucio Moraes','lucio@hotmail.com',NULL,31,123456789,NULL,'01224202686','30160037','Rua Alvares Maciel','1756','123456','Luan','Belo Horizonte','MG','BRA','1984-12-12','2019-05-21 20:08:43'),(16,33,'MPA-06068178AA45','9d303fc03e0347a6adad0da86719aae7_v2','APP-MSL2111M3D69','Lucio Moraes','lucio@hotmail.com',NULL,31,123456789,NULL,'01224202686','30160037','Rua Alvares Maciel','1756','123456','Luan','Belo Horizonte','MG','BRA','1984-12-12','2019-05-21 20:09:00'),(17,33,'MPA-FD1D3BF7FF7A','eb6e9bbc14114d1b902144a74be73cf4_v2','APP-MSL2111M3D69','Lucio Moraes','lucio@hotmail.com',NULL,31,123456789,NULL,'01224202686','30160037','Rua Alvares Maciel','1756','123456','Luan','Belo Horizonte','MG','BRA','1984-12-12','2019-05-21 20:09:27'),(18,35,'MPA-A50DBB885BAC','d136e7eb14604a71a80ccce3b07e147c_v2','APP-MSL2111M3D69','Joao Cesar','joao@gmail.com',55,31,984050125,0,'01224202686','13465400','Rua Alvaro Ribeiro','1757','401','Major','Americana','SP','BRA','1970-02-02','2019-05-21 21:26:42'),(19,35,'MPA-525227958980','e84f30d5e81746c29ff19ce5b50a9e18_v2','APP-MSL2111M3D69','Joao Cesar','joao@gmail.com',55,31,984050125,0,'01224202686','13465400','Rua Alvaro Ribeiro','1757','401','Major','Americana','SP','BRA','1970-02-02','2019-05-21 21:29:38'),(20,35,'MPA-BB095AA1129C','a09ca4b21e6145f99286a53c0d7ad090_v2','APP-MSL2111M3D69','Joao Cesar','joao@gmail.com',55,31,984050125,0,'01224202686','13465400','Rua Alvaro Ribeiro','1757','401','Major','Americana','SP','BRA','1970-02-02','2019-05-21 21:30:06'),(21,35,'MPA-4ACD92D66954','f3c520c56c1b49b6832125cf30fe8fd2_v2','APP-MSL2111M3D69','Joao Cesar','joao@gmail.com',55,31,984050125,0,'01224202686','13465400','Rua Alvaro Ribeiro','1757','401','Major','Americana','SP','BRA','1970-02-02','2019-05-21 21:30:38'),(22,35,'MPA-4131AD351BA1','ddf5d7ed8b404859b69673424311b3e2_v2','APP-MSL2111M3D69','Joao Cesar','joao@gmail.com',55,31,984050125,0,'01224202686','13465400','Rua Alvaro Ribeiro','1757','401','Major','Americana','SP','BRA','1970-02-02','2019-05-21 21:31:31'),(23,36,'MPA-79AD373CF5CA','4bd9af3d0bd1495fb71606c630f228a0_v2','APP-MSL2111M3D69','Joao Pastor','pastor@pastor.com',55,31,123456798,0,'01224202686','13465400','Rua Tal','100','11','Vila','Americana','SP','BRA','1945-01-01','2019-05-22 11:39:28'),(24,36,'MPA-9F0DA715492E','2ab668c599c14f13b2fef46fbec07c4b_v2','APP-MSL2111M3D69','Joao Pastor','pastor@pastor.com',55,31,123456798,0,'01224202686','13465400','Rua Tal','100','11','Vila','Americana','SP','BRA','1945-01-01','2019-05-22 11:41:03'),(25,36,'MPA-BF19DAA1108E','9609752fe0f54911a458cb56fa7e7b94_v2','APP-MSL2111M3D69','Joao Pastor','pastor@pastor.com',55,31,123456798,0,'01224202686','13465400','Rua Tal','100','11','Vila','Americana','SP','BRA','1945-01-01','2019-05-22 11:41:36'),(26,36,'MPA-6AC5BFFDDC1A','3e10e5c14aa74f41b2c16d9ac4927b08_v2','APP-MSL2111M3D69','Joao Pastor','pastor@pastor.com',55,31,123456798,0,'01224202686','13465400','Rua Tal','100','11','Vila','Americana','SP','BRA','1945-01-01','2019-05-22 11:41:58'),(27,36,'MPA-E148CB3DBA4B','8d7630c3cac74b41be826cdde5c5d60d_v2','APP-MSL2111M3D69','Joao Pastor','pastor@pastor.com',55,31,123456798,0,'01224202686','13465400','Rua Tal','100','11','Vila','Americana','SP','BRA','1945-01-01','2019-05-22 11:42:24'),(28,37,'MPA-C149BB9CD82F','cbe419a74c7444c68867c6f3785b2b6d_v2','APP-MSL2111M3D69','Ludmila Duarte','luduarte@hotmail.com',55,31,123456789,0,'01224202686','30160037','Praça do Papa','1000','1001','Serra','Belo Horizonte','MG','BRA','1990-11-11','2019-05-23 00:15:27'),(29,38,'MPA-A6AB262EDE33','c8226548cd9949dfbb7a77a173b9417d_v2','APP-MSL2111M3D69','Ludmila Santos','lusantos@hotmail.com',55,31,123456789,0,'01224202686','30160037','Praca do Papa','1000','1001','Serra','Belo Horizonte','MG','BRA','1999-09-09','2019-05-23 00:23:26'),(30,39,'MPA-A33268FCC655','f0a1cf0bb9da400f8427996b5700bcce_v2','APP-MSL2111M3D69','Luiz Felipe','luiz@gmail.com',55,31,123456789,0,'01224202686','13465400','Rua Alvaro Ribeiro','401','1700','Major','Americana','SP','BRA','1987-01-01','2019-05-23 03:10:04'),(31,40,'MPA-B40D19C0DE8A','cc318111bc17468fb22e7e224e27eb6a_v2','APP-MSL2111M3D69','Mario Lucio','mariolucio@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Cesar','147','147','Cesar','Belo Horizonte','MG','BRA','1980-02-02','2019-05-23 03:27:49'),(32,41,'MPA-E97348F36DE4','293fcc17c8924da8bb5a887107e56de2_v2','APP-MSL2111M3D69','Marina Silva','marina@gmail.com',55,31,123456789,0,'01224202686','13465400','Rua Lougra','123','132','Logra','Americana','SP','BRA','1954-01-04','2019-05-23 03:48:24'),(33,42,'MPA-F1C25B957670','914b116e22954cd099777c6e6f116ce2_v2','APP-MSL2111M3D69','Lucio Mauro','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Espirito','1700','100','Lourdes','Belo Horizonte','MG','BRA','1999-09-09','2019-05-26 02:19:06'),(34,43,'MPA-58CB74DE616B','dffe2fd849ef43409624a94ce2b08a8b_v2','APP-MSL2111M3D69','Galo Pereira','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1500','15','Lourdes','Belo Horizonte','MG','BRA','1950-01-01','2019-05-26 12:08:03'),(35,43,'MPA-DA389A2478DA','454b9fbd5929415ab243d10b1ae2a68a_v2','APP-MSL2111M3D69','Galo Pereira','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1500','15','Lourdes','Belo Horizonte','MG','BRA','1950-01-01','2019-05-26 12:09:39'),(36,43,'MPA-5762D849348E','2364be8ea9434f9ab8ae7259addedbc1_v2','APP-MSL2111M3D69','Galo Pereira','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1500','15','Lourdes','Belo Horizonte','MG','BRA','1950-01-01','2019-05-26 12:14:07'),(37,43,'MPA-0AF8E0A31B46','bfab86e42c274c27a3a17656c2caa070_v2','APP-MSL2111M3D69','Galo Pereira','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1500','15','Lourdes','Belo Horizonte','MG','BRA','1950-01-01','2019-05-26 12:14:59'),(38,67,'MPA-74829217E848','670751ca79424fc893f7bc8ac370d27e_v2','APP-MSL2111M3D69','Ronaldinho Gaucho','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','31','31','Lourdes','Belo Horizonte','MG','BRA','1980-02-02','2019-05-26 16:14:19'),(39,67,'MPA-0B824DB247C6','c32f23c46b17448a815aa919015b5484_v2','APP-MSL2111M3D69','Ronaldinho Gaucho','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','31','31','Lourdes','Belo Horizonte','MG','BRA','1980-02-02','2019-05-26 16:14:55'),(40,67,'MPA-0AEF4EBBF2D3','a2e21277f0434c8e9aad948f0dd02b18_v2','APP-MSL2111M3D69','Ronaldinho Gaucho','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','31','31','Lourdes','Belo Horizonte','MG','BRA','1980-02-02','2019-05-26 16:15:52'),(41,67,'MPA-BF048A996659','84a155f59cbe480cbb51a623720d45c4_v2','APP-MSL2111M3D69','Ronaldinho Gaucho','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','31','31','Lourdes','Belo Horizonte','MG','BRA','1980-02-02','2019-05-26 16:18:19'),(42,67,'MPA-BF2AE3AE4E60','72a6b097264a43c1bc288217ccb07df2_v2','APP-MSL2111M3D69','Ronaldinho Gaucho','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','31','31','Lourdes','Belo Horizonte','MG','BRA','1980-02-02','2019-05-26 16:20:27'),(43,67,'MPA-23FD16DEB136','8238ada4aae14154b68a5350a75e0b60_v2','APP-MSL2111M3D69','Ronaldinho Gaucho','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','31','31','Lourdes','Belo Horizonte','MG','BRA','1980-02-02','2019-05-26 16:21:43'),(44,67,'MPA-4BCE39281609','db71468b75ef4724935eb3f9dfa48677_v2','APP-MSL2111M3D69','Ronaldinho Gaucho','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','31','31','Lourdes','Belo Horizonte','MG','BRA','1980-02-02','2019-05-26 16:22:53'),(45,67,'MPA-1E966D00F1AB','358bcfd1ad4941478d8c14c4423eae36_v2','APP-MSL2111M3D69','Ronaldinho Gaucho','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','31','31','Lourdes','Belo Horizonte','MG','BRA','1980-02-02','2019-05-26 16:23:34'),(46,67,'MPA-885BBE9A2308','2b8e4d9b33294644984fc873c86b878f_v2','APP-MSL2111M3D69','Ronaldinho Gaucho','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','31','31','Lourdes','Belo Horizonte','MG','BRA','1980-02-02','2019-05-26 16:23:48'),(47,107,'MPA-E460BE21D80B','0ec4ac6078f94bc59ca7205d10b0117b_v2','APP-MSL2111M3D69','Diego Tardeli','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Logradouro User','1800','12','Lourdes','Belo Horizonte','MG','BRA','1990-05-05','2019-05-28 02:14:37'),(48,107,'MPA-C2E787C732A3','7f437a309ef24f6ca4fe9142fdf8b2da_v2','APP-MSL2111M3D69','Diego Tardeli','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Logradouro User','1800','12','Lourdes','Belo Horizonte','MG','BRA','1990-05-05','2019-05-28 02:15:33'),(49,107,'MPA-7E35F8EC30D7','e246b3acb72741ebb15bc262e864b9bb_v2','APP-MSL2111M3D69','Diego Tardeli','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Logradouro User','1800','12','Lourdes','Belo Horizonte','MG','BRA','1990-05-05','2019-05-28 02:15:45'),(50,107,'MPA-C012B1ACEEC1','35a5d37bab624490840c1c3cc1391ccc_v2','APP-MSL2111M3D69','Diego Tardeli','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Logradouro User','1800','12','Lourdes','Belo Horizonte','MG','BRA','1990-05-05','2019-05-28 02:17:08'),(51,107,'MPA-BF6E268CD3F6','607f7e8a4c1943acb72e2a07f9d5cee8_v2','APP-MSL2111M3D69','Diego Tardeli','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Logradouro User','1800','12','Lourdes','Belo Horizonte','MG','BRA','1990-05-05','2019-05-28 02:19:54'),(52,107,'MPA-D9AA736E3041','27c17c77a4334f1d88b7a489075fb1d6_v2','APP-MSL2111M3D69','Diego Tardeli','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Logradouro User','1800','12','Lourdes','Belo Horizonte','MG','BRA','1990-05-05','2019-05-28 02:20:37'),(53,107,'MPA-E905EAD4F735','e6538a55dcb24b97ba1e9f8028b44cdb_v2','APP-MSL2111M3D69','Diego Tardeli','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Logradouro User','1800','12','Lourdes','Belo Horizonte','MG','BRA','1990-05-05','2019-05-28 02:21:43'),(54,111,'MPA-64E645B89F7B','3e86695bced04b84968c3772506383e7_v2','APP-MSL2111M3D69','Jorge Santana','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','500','5','Lourdes','Belo Horizonte','MG','BRA','1989-02-02','2019-05-28 02:28:04'),(55,111,'MPA-FF191536A372','216577a117ed44b0a1543f37c541d8f9_v2','APP-MSL2111M3D69','Jorge Santana','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','500','5','Lourdes','Belo Horizonte','MG','BRA','1989-02-02','2019-05-28 02:28:30'),(56,111,'MPA-498B6A121AE0','8df04e878a194ef9aecda98a38da2fb4_v2','APP-MSL2111M3D69','Jorge Santana','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','500','5','Lourdes','Belo Horizonte','MG','BRA','1989-02-02','2019-05-28 02:28:48'),(57,111,'MPA-27E91CBBA0AE','7d46714b03ed47b486f953e685d0897f_v2','APP-MSL2111M3D69','Jorge Santana','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','500','5','Lourdes','Belo Horizonte','MG','BRA','1989-02-02','2019-05-28 02:28:58'),(58,111,'MPA-C8D051916A3C','d5afe73c41e3499690dec02268335932_v2','APP-MSL2111M3D69','Jorge Santana','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','500','5','Lourdes','Belo Horizonte','MG','BRA','1989-02-02','2019-05-28 02:29:09'),(59,112,'MPA-3AB5A756651A','93429a68f0f14c1188dd532066c0b925_v2','APP-MSL2111M3D69','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','1980-01-12','2019-05-28 03:24:41');
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
) ENGINE=InnoDB AUTO_INCREMENT=487 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_addresses`
--

LOCK TABLES `tb_addresses` WRITE;
/*!40000 ALTER TABLE `tb_addresses` DISABLE KEYS */;
INSERT INTO `tb_addresses` VALUES (11,0,'30160037','Rua Espirito Santo','1757','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-04-24 17:04:00'),(12,0,'30160037','Rua Espirito Santo','1757','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-08 16:47:27'),(13,0,'30160037','Rua Espirito Santo','1757','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-08 16:49:38'),(14,0,'30160037','Rua Espirito Santo','1757','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-08 16:50:42'),(15,0,'30160037','Rua Espirito Santo','1757','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-08 16:51:40'),(16,0,'30160037','Rua Espirito Santo','1757','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-08 16:52:25'),(17,0,'30160037','Rua Espirito Santo','1757','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-08 16:52:41'),(18,0,'30160037','Rua Espirito Santo','1757','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-08 17:39:42'),(19,0,'30160037','Rua Espirito Santo','1757','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-08 17:40:11'),(20,0,'30160037','Rua Espirito Santo','1757','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-08 18:03:47'),(21,0,'30160037','Rua Espirito Santo','1757','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-08 18:03:58'),(22,0,'30160037','Rua Espirito Santo','1757','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-08 18:07:15'),(23,0,'30160037','Rua Espirito Santo','1757','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-08 18:07:34'),(24,0,'30160037','Rua Espirito Santo','1757','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-08 18:07:54'),(25,0,'30160037','Rua Espirito Santo','1757','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-08 18:09:46'),(26,0,'30160037','Rua Espirito Santo','1757','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-08 18:11:29'),(27,0,'30160037','Rua Espirito Santo','1757','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-08 18:11:56'),(28,0,'30160037','Rua Espirito Santo','1757','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-08 18:12:23'),(29,0,'30160037','Rua Espirito Santo','1757','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-08 18:12:37'),(30,0,'13465400','Rua Alvaro Ribeiro','41','','Vila Rehder','Americana','São Paulo','Brasil','2019-05-08 19:21:10'),(37,0,'13465400','Rua Alvaro Ribeiro','401','','Vila Rehder','Americana','São Paulo','Brasil','2019-05-08 19:28:40'),(40,0,'13465400','Rua Alvaro Ribeiro','41','','Vila Rehder','Americana','São Paulo','Brasil','2019-05-08 19:36:26'),(43,0,'30160037','Rua Espirito Santo','1758','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-08 19:43:38'),(45,0,'30160037','Rua Espirito Santo','1759','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-08 19:44:45'),(47,0,'30160037','Rua Espirito Santo','1759','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-08 19:49:16'),(48,11,'30160037','Rua Espirito Santo','1759','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-08 20:03:32'),(49,13,'13465400','Rua Alvaro Ribeiro','401','','Vila Rehder','Americana','SP','Brasil','2019-05-08 20:03:49'),(50,13,'13465400','Rua Alvaro Ribeiro','401','','Vila Rehder','Americana','SP','Brasil','2019-05-08 20:06:07'),(51,13,'13465400','Rua Alvaro Ribeiro','401','','Vila Rehder','Americana','SP','Brasil','2019-05-08 20:06:38'),(52,11,'30160037','Rua Espirito Santo','1757','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-08 20:17:50'),(53,11,'30160037','Rua Espirito Santo','1757','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-08 20:20:00'),(54,11,'30160037','Rua Espirito Santo','1757','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-08 20:22:55'),(55,11,'30160037','Rua Espirito Santo','1757','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-08 20:23:35'),(56,11,'30160037','Rua Espirito Santo','1757','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-08 20:23:57'),(57,11,'30160037','Rua Espirito Santo','1757','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-08 20:25:45'),(58,11,'30160037','Rua Espirito Santo','17598','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-08 20:33:41'),(59,11,'13465400','Rua Alvaro Ribeiro','500','','Vila Rehder','Americana','SP','Brasil','2019-05-08 20:36:59'),(60,11,'13465400','Rua Alvaro Ribeiro','400','','Vila Rehder','Americana','SP','Brasil','2019-05-08 20:40:17'),(61,11,'13465500','Rua Trinta de Julho','455','','Centro','Americana','SP','Brasil','2019-05-08 20:42:13'),(62,11,'13465100','Avenida de Cillo','100','até 701/702','Vila Pavan','Americana','SP','Brasil','2019-05-08 20:45:06'),(63,11,'30160037','Rua Espirito Santo','1700','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-08 20:46:39'),(64,11,'30160037','Rua Espirito Santo','1757','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-08 20:47:59'),(65,11,'30160037','Rua Espirito Santo','500','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-08 21:33:12'),(66,11,'30160037','Rua Espirito Santo','500','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-08 21:36:09'),(67,11,'30160037','Rua Espirito Santo','500','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-08 21:37:30'),(68,11,'30160037','Rua Espirito Santo','500','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-08 21:38:35'),(69,11,'30160037','Rua Espirito Santo','500','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-08 21:43:53'),(70,11,'13465400','Rua Alvaro Ribeiro','51','','Vila Rehder','Americana','SP','Brasil','2019-05-08 22:06:10'),(71,11,'30160037','Rua Espirito Santo','200','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-08 22:37:49'),(72,11,'13465400','Rua Alvaro Ribeiro','400','','Vila Rehder','Americana','SP','Brasil','2019-05-08 22:40:40'),(73,11,'13465400','Rua Alvaro Ribeiro','400','','Vila Rehder','Americana','SP','Brasil','2019-05-08 22:41:06'),(74,11,'13465400','Rua Alvaro Ribeiro','400','','Vila Rehder','Americana','SP','Brasil','2019-05-08 22:41:49'),(75,11,'13465400','Rua Alvaro Ribeiro','400','','Vila Rehder','Americana','SP','Brasil','2019-05-08 22:41:57'),(76,11,'13465400','Rua Alvaro Ribeiro','400','','Vila Rehder','Americana','SP','Brasil','2019-05-08 22:44:14'),(77,11,'13465400','Rua Alvaro Ribeiro','400','','Vila Rehder','Americana','SP','Brasil','2019-05-08 22:44:41'),(78,11,'13465400','Rua Alvaro Ribeiro','400','','Vila Rehder','Americana','SP','Brasil','2019-05-08 22:44:56'),(79,11,'13465400','Rua Alvaro Ribeiro','400','','Vila Rehder','Americana','SP','Brasil','2019-05-08 22:45:36'),(80,11,'13465400','Rua Alvaro Ribeiro','400','','Vila Rehder','Americana','SP','Brasil','2019-05-08 22:45:47'),(81,11,'13465400','Rua Alvaro Ribeiro','400','','Vila Rehder','Americana','SP','Brasil','2019-05-08 22:45:59'),(82,11,'13465400','Rua Alvaro Ribeiro','400','','Vila Rehder','Americana','SP','Brasil','2019-05-08 22:47:15'),(83,11,'13465400','Rua Alvaro Ribeiro','400','','Vila Rehder','Americana','SP','Brasil','2019-05-08 22:47:49'),(84,11,'13465400','Rua Alvaro Ribeiro','400','','Vila Rehder','Americana','SP','Brasil','2019-05-08 22:48:17'),(85,11,'13465400','Rua Alvaro Ribeiro','465','','Vila Rehder','Americana','SP','Brasil','2019-05-08 22:50:45'),(86,11,'30160037','Rua Espirito Santo','1800','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-08 22:53:52'),(87,11,'13465400','Rua Alvaro Ribeiro','400','','Vila Rehder','Americana','SP','Brasil','2019-05-08 22:56:42'),(88,11,'13465400','Rua Alvaro Ribeiro','400','','Vila Rehder','Americana','SP','Brasil','2019-05-08 22:58:28'),(89,11,'13465400','Rua Alvaro Ribeiro','400','','Vila Rehder','Americana','SP','Brasil','2019-05-08 23:00:09'),(90,11,'13465400','Rua Alvaro Ribeiro','800','','Vila Rehder','Americana','SP','Brasil','2019-05-08 23:04:50'),(91,11,'13465400','Rua Alvaro Ribeiro','400','','Vila Rehder','Americana','SP','Brasil','2019-05-08 23:07:14'),(92,11,'13465400','Rua Alvaro Ribeiro','400','','Vila Rehder','Americana','SP','Brasil','2019-05-08 23:07:35'),(93,11,'13465400','Rua Alvaro Ribeiro','400','','Vila Rehder','Americana','SP','Brasil','2019-05-08 23:07:49'),(94,11,'13465400','Rua Alvaro Ribeiro','400','','Vila Rehder','Americana','SP','Brasil','2019-05-08 23:08:14'),(95,11,'13465400','Rua Alvaro Ribeiro','400','','Vila Rehder','Americana','SP','Brasil','2019-05-08 23:08:46'),(96,11,'13465400','Rua Alvaro Ribeiro','400','','Vila Rehder','Americana','SP','Brasil','2019-05-08 23:09:14'),(97,11,'13465400','Rua Alvaro Ribeiro','400','','Vila Rehder','Americana','SP','Brasil','2019-05-08 23:09:49'),(98,11,'13465400','Rua Alvaro Ribeiro','400','','Vila Rehder','Americana','SP','Brasil','2019-05-08 23:10:37'),(99,11,'13465400','Rua Alvaro Ribeiro','800','','Vila Rehder','Americana','SP','Brasil','2019-05-08 23:31:45'),(100,11,'13465400','Rua Alvaro Ribeiro','100','','Vila Rehder','Americana','SP','Brasil','2019-05-08 23:35:35'),(101,11,'13465500','Rua Trinta de Julho','31','','Centro','Americana','SP','Brasil','2019-05-08 23:37:03'),(102,11,'30160031','Rua Espirito Santo','1677','de 421/422 a 699/700','Centro','Belo Horizonte','MG','Brasil','2019-05-08 23:46:22'),(103,11,'13465400','Rua Alvaro Ribeiro','50000','','Vila Rehder','Americana','SP','Brasil','2019-05-08 23:50:11'),(104,11,'13465400','Rua Alvaro Ribeiro','400','','Vila Rehder','Americana','SP','Brasil','2019-05-08 23:52:17'),(105,11,'13465400','Rua Alvaro Ribeiro','500','','Vila Rehder','Americana','SP','Brasil','2019-05-08 23:53:26'),(106,11,'13465400','Rua Alvaro Ribeiro','1000','','Vila Rehder','Americana','SP','Brasil','2019-05-08 23:56:57'),(107,11,'13465400','Rua Alvaro Ribeiro','400','','Vila Rehder','Americana','SP','Brasil','2019-05-09 00:07:01'),(108,11,'13465400','Rua Alvaro Ribeiro','400','','Vila Rehder','Americana','SP','Brasil','2019-05-09 00:08:38'),(109,11,'13465400','Rua Alvaro Ribeiro','2','','Vila Rehder','Americana','SP','Brasil','2019-05-09 00:10:06'),(110,11,'13465400','Rua Alvaro Ribeiro','400','','Vila Rehder','Americana','SP','Brasil','2019-05-09 00:16:56'),(111,11,'13465400','Rua Alvaro Ribeiro','800','','Vila Rehder','Americana','SP','Brasil','2019-05-09 00:17:41'),(112,11,'13465400','Rua Alvaro Ribeiro','800','','Vila Rehder','Americana','SP','Brasil','2019-05-09 00:18:47'),(113,11,'13465400','Rua Alvaro Ribeiro','400','','Vila Rehder','Americana','SP','Brasil','2019-05-09 00:19:19'),(114,11,'13465400','Rua Alvaro Ribeiro','400','','Vila Rehder','Americana','SP','Brasil','2019-05-09 00:19:51'),(115,11,'13465400','Rua Alvaro Ribeiro','800','','Vila Rehder','Americana','SP','Brasil','2019-05-09 00:20:40'),(116,11,'13465400','Rua Alvaro Ribeiro','800','','Vila Rehder','Americana','SP','Brasil','2019-05-09 00:21:10'),(117,11,'13465400','Rua Alvaro Ribeiro','400','','Vila Rehder','Americana','SP','Brasil','2019-05-09 00:36:53'),(118,11,'13465400','Rua Alvaro Ribeiro','400','','Vila Rehder','Americana','SP','Brasil','2019-05-09 00:39:47'),(119,11,'13465400','Rua Alvaro Ribeiro','400','','Vila Rehder','Americana','SP','Brasil','2019-05-09 00:43:38'),(120,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 00:45:32'),(121,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 00:46:55'),(122,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 00:48:02'),(123,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 00:49:38'),(124,11,'13465400','Rua Alvaro Ribeiro','8','','Vila Rehder','Americana','SP','Brasil','2019-05-09 00:50:31'),(125,11,'13465400','Rua Alvaro Ribeiro','8','','Vila Rehder','Americana','SP','Brasil','2019-05-09 00:50:59'),(126,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 00:52:43'),(127,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 00:53:38'),(128,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 00:58:08'),(129,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 00:59:01'),(130,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 01:02:22'),(131,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 01:02:45'),(132,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 01:04:13'),(133,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 01:05:21'),(134,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 01:05:38'),(135,11,'30160037','Rua Espirito Santo','100','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-09 02:18:44'),(136,11,'13465400','Rua Alvaro Ribeiro','1000','','Vila Rehder','Americana','SP','Brasil','2019-05-09 02:19:52'),(137,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 02:21:31'),(138,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 02:23:55'),(139,11,'13465400','Rua Alvaro Ribeiro','100','','Vila Rehder','Americana','SP','Brasil','2019-05-09 02:30:14'),(140,11,'13465400','Rua Alvaro Ribeiro','400','','Vila Rehder','Americana','SP','Brasil','2019-05-09 02:31:22'),(141,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 02:31:56'),(142,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 02:32:23'),(143,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 02:33:52'),(144,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 02:38:52'),(145,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 02:41:30'),(146,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 02:41:43'),(147,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 02:42:03'),(148,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 02:43:05'),(149,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 02:44:09'),(150,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 03:17:27'),(151,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 03:19:02'),(152,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 03:19:50'),(153,11,'13465400','Rua Alvaro Ribeiro','13465400','','Vila Rehder','Americana','SP','Brasil','2019-05-09 03:29:27'),(154,11,'13465400','Rua Alvaro Ribeiro','400','','Vila Rehder','Americana','SP','Brasil','2019-05-09 03:33:39'),(155,11,'13465400','Rua Alvaro Ribeiro','10','','Vila Rehder','Americana','SP','Brasil','2019-05-09 03:41:28'),(156,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 03:42:30'),(157,11,'13465400','Rua Alvaro Ribeiro','100','','Vila Rehder','Americana','SP','Brasil','2019-05-09 04:03:27'),(158,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 04:05:04'),(159,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 04:07:41'),(160,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 04:09:02'),(161,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 04:10:08'),(162,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 04:12:14'),(163,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 04:13:50'),(164,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 04:14:31'),(165,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 04:16:32'),(166,11,'30160037','Rua Espirito Santo','1','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-09 04:17:25'),(167,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 04:23:45'),(168,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 04:26:07'),(169,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 04:26:58'),(170,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 04:36:57'),(171,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 04:39:31'),(172,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 04:40:20'),(173,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 04:44:20'),(174,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 04:45:05'),(175,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 04:46:07'),(176,11,'13465400','Rua Alvaro Ribeiro','100','','Vila Rehder','Americana','SP','Brasil','2019-05-09 04:46:30'),(177,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 04:47:06'),(178,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 04:48:13'),(179,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 04:49:13'),(180,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 04:50:31'),(181,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 04:56:25'),(182,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 05:38:13'),(183,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 05:39:04'),(184,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 05:41:32'),(185,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 05:42:41'),(186,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 05:43:26'),(187,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 05:45:41'),(188,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 05:46:39'),(189,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 05:48:10'),(190,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 05:53:28'),(191,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 05:54:17'),(192,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 05:56:27'),(193,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 05:57:10'),(194,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 05:59:06'),(195,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 05:59:46'),(196,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 06:03:50'),(197,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 14:31:22'),(198,11,'13465400','Rua Alvaro Ribeiro','400','','Vila Rehder','Americana','SP','Brasil','2019-05-09 14:43:02'),(199,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 14:49:30'),(200,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 14:50:36'),(201,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 14:57:59'),(202,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 14:59:20'),(203,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 15:00:03'),(204,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 15:01:23'),(205,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 19:14:02'),(206,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 19:14:35'),(207,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 19:15:12'),(208,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 19:15:39'),(209,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 19:16:30'),(210,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 19:20:34'),(211,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 19:20:58'),(212,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 19:21:46'),(213,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 19:23:33'),(214,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 19:24:09'),(215,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 19:25:07'),(216,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 19:25:42'),(217,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 19:26:30'),(218,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 19:27:26'),(219,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 19:28:28'),(220,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 19:29:21'),(221,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 19:30:37'),(222,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 19:32:44'),(223,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 19:35:34'),(224,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 19:37:22'),(225,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 19:38:19'),(226,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 20:49:54'),(227,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 20:51:08'),(228,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-09 20:51:37'),(229,11,'13465400','Rua Alvaro Ribeiro','13465400','','Vila Rehder','Americana','SP','Brasil','2019-05-09 21:54:15'),(230,11,'30160037','Rua Espirito Santo','1','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-10 13:23:44'),(231,11,'30160037','Rua Espirito Santo','1','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-10 13:24:07'),(232,11,'30160037','Rua Espirito Santo','1','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-10 13:24:23'),(233,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 15:10:22'),(234,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 15:12:42'),(235,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 15:15:24'),(236,11,'30160037','Rua Espirito Santo','51','','Lourdes','BH','MG','Brasil','2019-05-10 17:53:25'),(237,11,'30160037','Rua Espirito Santo','51','','Lourdes','BH','MG','Brasil','2019-05-10 17:57:09'),(238,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 17:59:47'),(239,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 18:01:42'),(240,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 18:04:06'),(241,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 18:05:31'),(242,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 18:09:19'),(243,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 18:32:12'),(244,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 18:35:03'),(245,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 18:52:10'),(246,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 18:53:22'),(247,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 18:54:39'),(248,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 18:55:56'),(249,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 18:58:15'),(250,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 18:59:16'),(251,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 19:00:07'),(252,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 19:01:17'),(253,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 19:02:11'),(254,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 19:03:31'),(255,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 19:04:21'),(256,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 19:05:07'),(257,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 19:06:55'),(258,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 19:07:54'),(259,11,'13465400','Rua Alvaro Ribeiro','11','','Vila Rehder','Americana','SP','Brasil','2019-05-10 19:39:36'),(260,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 19:41:57'),(261,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 19:52:00'),(262,11,'13465400','Rua Alvaro Ribeiro','31','','Vila Rehder','Americana','SP','Brasil','2019-05-10 20:01:43'),(263,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 20:11:29'),(264,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 20:12:40'),(265,11,'13465400','Rua Alvaro Ribeiro','22','','Vila Rehder','Americana','SP','Brasil','2019-05-10 20:19:15'),(266,11,'13465400','Rua Alvaro Ribeiro','22','','Vila Rehder','Americana','SP','Brasil','2019-05-10 20:20:28'),(267,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 20:22:53'),(268,11,'13465400','Rua Alvaro Ribeiro','11','','Vila Rehder','Americana','SP','Brasil','2019-05-10 20:25:36'),(269,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 20:27:25'),(270,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 21:12:08'),(271,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 21:16:41'),(272,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 21:21:13'),(273,11,'13465400','Rua Alvaro Ribeiro','321','','Vila Rehder','Americana','SP','Brasil','2019-05-10 21:22:58'),(274,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 21:51:57'),(275,11,'13465400','Rua Alvaro Ribeiro','22','','Vila Rehder','Americana','SP','Brasil','2019-05-10 21:53:09'),(276,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 22:03:35'),(277,11,'13456400','Rua Juscelino Kubitschek de Oliveira','111','até 234/235','Jardim AmÃ©lia','Santa Bárbara D\'Oeste','SP','Brasil','2019-05-10 22:06:00'),(278,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 22:09:30'),(279,11,'13465400','Rua Alvaro Ribeiro','12121','','Vila Rehder','Americana','SP','Brasil','2019-05-10 22:27:11'),(280,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 22:29:26'),(281,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 22:32:25'),(282,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 22:35:53'),(283,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 22:37:32'),(284,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 22:38:25'),(285,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 22:39:35'),(286,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 22:41:13'),(287,11,'13465400','Rua Alvaro Ribeiro','22','','Vila Rehder','Americana','SP','Brasil','2019-05-10 22:43:41'),(288,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 22:49:23'),(289,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 22:52:21'),(290,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 22:55:03'),(291,11,'13465400','Rua Alvaro Ribeiro','111','','Vila Rehder','Americana','SP','Brasil','2019-05-10 22:58:33'),(292,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 23:01:42'),(293,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 23:04:59'),(294,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 23:06:34'),(295,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 23:08:38'),(296,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 23:23:56'),(297,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-10 23:26:26'),(298,11,'13465400','Rua Alvaro Ribeiro','11111','','Vila Rehder','Americana','SP','Brasil','2019-05-10 23:28:06'),(299,11,'13465400','Rua Alvaro Ribeiro','11111','','Vila Rehder','Americana','SP','Brasil','2019-05-10 23:29:05'),(300,11,'13465400','Rua Alvaro Ribeiro','11111','','Vila Rehder','Americana','SP','Brasil','2019-05-11 00:29:16'),(301,11,'13465400','Rua Alvaro Ribeiro','11111','','Vila Rehder','Americana','SP','Brasil','2019-05-11 00:32:51'),(302,11,'13465400','Rua Alvaro Ribeiro','11111','','Vila Rehder','Americana','SP','Brasil','2019-05-11 00:33:03'),(303,11,'13465400','Rua Alvaro Ribeiro','11111','','Vila Rehder','Americana','SP','Brasil','2019-05-11 00:33:31'),(304,11,'13465400','Rua Alvaro Ribeiro','11111','','Vila Rehder','Americana','SP','Brasil','2019-05-11 00:35:30'),(305,11,'13465400','Rua Alvaro Ribeiro','11111','','Vila Rehder','Americana','SP','Brasil','2019-05-11 00:36:46'),(306,11,'13465400','Rua Alvaro Ribeiro','11111','','Vila Rehder','Americana','SP','Brasil','2019-05-11 00:39:04'),(307,11,'13465400','Rua Alvaro Ribeiro','11111','','Vila Rehder','Americana','SP','Brasil','2019-05-11 01:05:47'),(308,11,'13465400','Rua Alvaro Ribeiro','11111','','Vila Rehder','Americana','SP','Brasil','2019-05-11 01:10:34'),(309,11,'13465400','Rua Alvaro Ribeiro','11111','','Vila Rehder','Americana','SP','Brasil','2019-05-11 01:11:03'),(310,11,'13465400','Rua Alvaro Ribeiro','11111','','Vila Rehder','Americana','SP','Brasil','2019-05-11 01:11:18'),(311,11,'13465400','Rua Alvaro Ribeiro','11111','','Vila Rehder','Americana','SP','Brasil','2019-05-11 01:11:38'),(312,11,'13465400','Rua Alvaro Ribeiro','11111','','Vila Rehder','Americana','SP','Brasil','2019-05-11 01:12:19'),(313,11,'13465400','Rua Alvaro Ribeiro','12121','','Vila Rehder','Americana','SP','Brasil','2019-05-11 01:18:56'),(314,11,'13465400','Rua Alvaro Ribeiro','12121','','Vila Rehder','Americana','SP','Brasil','2019-05-11 01:36:18'),(315,11,'13465400','Rua Alvaro Ribeiro','12121','','Vila Rehder','Americana','SP','Brasil','2019-05-11 01:36:39'),(316,11,'13465400','Rua Alvaro Ribeiro','12121','','Vila Rehder','Americana','SP','Brasil','2019-05-11 01:36:52'),(317,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 01:38:13'),(318,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 01:38:26'),(319,11,'13465400','Rua Alvaro Ribeiro','1111','','Vila Rehder','Americana','SP','Brasil','2019-05-11 01:39:27'),(320,11,'13465400','Rua Alvaro Ribeiro','1111','','Vila Rehder','Americana','SP','Brasil','2019-05-11 01:40:13'),(321,11,'13465400','Rua Alvaro Ribeiro','1111','','Vila Rehder','Americana','SP','Brasil','2019-05-11 01:42:36'),(322,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 01:46:59'),(323,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 01:50:22'),(324,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 01:50:32'),(325,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 01:50:55'),(326,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 01:51:52'),(327,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 01:53:22'),(328,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 01:55:58'),(329,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 01:58:38'),(330,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 02:02:56'),(331,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 02:05:55'),(332,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 02:08:10'),(333,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 02:10:32'),(334,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 02:11:01'),(335,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 02:11:45'),(336,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 02:11:46'),(337,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 02:12:08'),(338,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 02:12:40'),(339,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 02:12:58'),(340,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 02:14:17'),(341,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 02:29:17'),(342,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 02:30:43'),(343,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 02:31:26'),(344,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 02:35:04'),(345,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 02:38:00'),(346,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 02:39:11'),(347,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 02:47:48'),(348,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 02:54:10'),(349,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 02:56:06'),(350,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 03:04:07'),(351,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 03:05:04'),(352,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 03:06:53'),(353,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 03:07:22'),(354,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 03:14:20'),(355,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 03:16:52'),(356,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 03:17:29'),(357,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 03:20:52'),(358,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 03:21:23'),(359,11,'13465400','Rua Alvaro Ribeiro','1111','','Vila Rehder','Americana','SP','Brasil','2019-05-11 03:23:20'),(360,11,'13465400','Rua Alvaro Ribeiro','1111','','Vila Rehder','Americana','SP','Brasil','2019-05-11 03:25:44'),(361,11,'13465400','Rua Alvaro Ribeiro','1111','','Vila Rehder','Americana','SP','Brasil','2019-05-11 03:26:51'),(362,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 04:03:19'),(363,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 04:04:02'),(364,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 04:04:33'),(365,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 04:14:15'),(366,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 04:25:14'),(367,11,'13465400','Rua Alvaro Ribeiro','1321','','Vila Rehder','Americana','SP','Brasil','2019-05-11 04:27:49'),(368,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 04:29:35'),(369,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 04:29:55'),(370,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 04:30:58'),(371,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 04:31:30'),(372,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 04:31:41'),(373,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 04:31:57'),(374,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 04:33:29'),(375,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 04:33:34'),(376,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 04:34:21'),(377,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 04:35:36'),(378,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 04:37:52'),(379,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 04:38:08'),(380,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 04:42:49'),(381,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 04:47:50'),(382,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 04:48:15'),(383,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 04:50:46'),(384,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 04:51:48'),(385,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 04:52:28'),(386,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 04:52:46'),(387,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 04:53:25'),(388,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 04:55:35'),(389,11,'13465400','Rua Alvaro Ribeiro','1111','','Vila Rehder','Americana','SP','Brasil','2019-05-11 04:56:17'),(390,11,'13465400','Rua Alvaro Ribeiro','3800','','Vila Rehder','Americana','SP','Brasil','2019-05-11 05:00:28'),(391,11,'13465400','Rua Alvaro Ribeiro','11111','','Vila Rehder','Americana','SP','Brasil','2019-05-11 15:22:23'),(392,11,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 15:30:31'),(393,11,'13465400','Rua Alvaro Ribeiro','111111','','Vila Rehder','Americana','SP','Brasil','2019-05-11 16:15:09'),(394,13,'30160037','Rua Espirito Santo','1','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-11 16:49:16'),(395,11,'30160031','Rua Espirito Santo','11111111','de 421/422 a 699/700','Centro','Belo Horizonte','MG','Brasil','2019-05-11 21:06:38'),(396,11,'30160037','Rua Espirito Santo','10000','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','Brasil','2019-05-11 23:34:03'),(397,13,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','Brasil','2019-05-11 23:36:45'),(398,13,'13465400','Rua Alvaro Ribeiro','11111','','Vila Rehder','Americana','SP','Brasil','2019-05-12 03:36:57'),(399,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 19:36:10'),(400,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 19:36:48'),(401,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 19:37:16'),(402,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 19:38:03'),(403,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 19:40:43'),(404,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 19:41:01'),(405,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 19:46:38'),(406,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 19:46:49'),(407,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 19:46:59'),(408,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 19:50:31'),(409,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 19:52:53'),(410,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 19:53:36'),(411,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 19:57:07'),(412,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 19:58:12'),(413,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 20:00:03'),(414,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 20:00:17'),(415,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 20:00:27'),(416,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 20:33:34'),(417,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 20:34:05'),(418,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 20:34:38'),(419,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 20:35:45'),(420,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 20:36:23'),(421,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 20:44:34'),(422,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 20:44:43'),(423,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 20:44:59'),(424,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 20:45:38'),(425,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 20:46:04'),(426,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 20:46:55'),(427,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 20:47:13'),(428,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 20:47:39'),(429,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 20:47:54'),(430,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 20:48:02'),(431,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 20:48:14'),(432,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 20:48:27'),(433,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 20:48:52'),(434,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 20:49:02'),(435,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 20:56:41'),(436,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 20:57:48'),(437,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 20:59:41'),(438,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 21:00:19'),(439,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 21:01:46'),(440,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 21:01:59'),(441,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 21:02:23'),(442,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 21:04:05'),(443,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 21:05:51'),(444,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 21:06:21'),(445,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 21:07:26'),(446,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 21:07:55'),(447,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 21:09:00'),(448,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 21:09:39'),(449,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 21:11:43'),(450,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 21:12:09'),(451,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 21:14:10'),(452,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 21:14:53'),(453,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 21:15:08'),(454,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 21:15:44'),(455,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 21:39:17'),(456,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 21:43:30'),(457,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 21:48:21'),(458,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 21:48:48'),(459,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 21:50:11'),(460,26,'13465400','Rua Alvaro Ribeiro','1','','Vila Rehder','Americana','SP','BRA','2019-05-14 21:53:08'),(461,26,'13465400','Rua Alvaro Ribeiro','111111','','Vila Rehder','Americana','SP','BRA','2019-05-14 21:56:33'),(462,26,'30160037','Rua Espirito Santo','1757','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','BRA','2019-05-14 22:15:15'),(463,26,'13465400','Rua Alvaro Ribeiro','1000','','Vila Rehder','Americana','SP','BRA','2019-05-14 22:27:50'),(464,28,'30160037','Rua Espirito Santo','111111111','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','BRA','2019-05-15 14:32:37'),(465,28,'30160037','Rua Espirito Santo','11111','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','BRA','2019-05-15 14:41:46'),(466,43,'30160037','Rua Alvaro','1500','15','Lourdes','Belo Horizonte','MG','BRA','2019-05-26 12:14:07'),(467,43,'30160037','Rua Alvaro','1500','15','Lourdes','Belo Horizonte','MG','BRA','2019-05-26 12:14:59'),(468,67,'30160037','Rua Alvaro','31','31','Lourdes','Belo Horizonte','MG','BRA','2019-05-26 16:14:55'),(469,67,'30160037','Rua Alvaro','31','31','Lourdes','Belo Horizonte','MG','BRA','2019-05-26 16:15:52'),(470,67,'30160037','Rua Alvaro','31','31','Lourdes','Belo Horizonte','MG','BRA','2019-05-26 16:18:19'),(471,67,'30160037','Rua Alvaro','31','31','Lourdes','Belo Horizonte','MG','BRA','2019-05-26 16:20:27'),(472,67,'30160037','Rua Alvaro','31','31','Lourdes','Belo Horizonte','MG','BRA','2019-05-26 16:21:43'),(473,67,'30160037','Rua Alvaro','31','31','Lourdes','Belo Horizonte','MG','BRA','2019-05-26 16:22:53'),(474,67,'30160037','Rua Alvaro','31','31','Lourdes','Belo Horizonte','MG','BRA','2019-05-26 16:23:34'),(475,67,'30160037','Rua Alvaro','31','31','Lourdes','Belo Horizonte','MG','BRA','2019-05-26 16:23:48'),(476,107,'30160037','Logradouro User','1800','12','Lourdes','Belo Horizonte','MG','BRA','2019-05-28 02:15:45'),(477,107,'30160037','Logradouro User','1800','12','Lourdes','Belo Horizonte','MG','BRA','2019-05-28 02:17:08'),(478,107,'30160037','Logradouro User','1800','12','Lourdes','Belo Horizonte','MG','BRA','2019-05-28 02:19:54'),(479,107,'30160037','Logradouro User','1800','12','Lourdes','Belo Horizonte','MG','BRA','2019-05-28 02:20:37'),(480,107,'30160037','Logradouro User','1800','12','Lourdes','Belo Horizonte','MG','BRA','2019-05-28 02:21:43'),(481,111,'30160037','Rua Alvaro','500','5','Lourdes','Belo Horizonte','MG','BRA','2019-05-28 02:28:04'),(482,111,'30160037','Rua Alvaro','500','5','Lourdes','Belo Horizonte','MG','BRA','2019-05-28 02:28:30'),(483,111,'30160037','Rua Alvaro','500','5','Lourdes','Belo Horizonte','MG','BRA','2019-05-28 02:28:48'),(484,111,'30160037','Rua Alvaro','500','5','Lourdes','Belo Horizonte','MG','BRA','2019-05-28 02:28:58'),(485,111,'30160037','Rua Alvaro','500','5','Lourdes','Belo Horizonte','MG','BRA','2019-05-28 02:29:09'),(486,112,'30160037','Rua Alvaro Ribeiro 9','407','57','Major Nove','Belo Horizonte','MG','BRA','2019-05-28 03:24:41');
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_banks`
--

LOCK TABLES `tb_banks` WRITE;
/*!40000 ALTER TABLE `tb_banks` DISABLE KEYS */;
INSERT INTO `tb_banks` VALUES (1,26,'BKA-KKANWJ3D58E4','027','123456','5','CHECKING','123146','6','2019-05-15 19:29:41'),(2,36,'BKA-79BCZ1V64HGO','025','4567','4','CHECKING','456789','4','2019-05-24 13:29:13');
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
) ENGINE=InnoDB AUTO_INCREMENT=425 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_bestfriends`
--

LOCK TABLES `tb_bestfriends` WRITE;
/*!40000 ALTER TABLE `tb_bestfriends` DISABLE KEYS */;
INSERT INTO `tb_bestfriends` VALUES (422,11,1,2,'MAIS UM','Nos2 conhecemos h? 2 anos enos apaixonamos e hoje finalmente chegou o grande dia de consumar a uni?o','1122422.png','png','2019-05-04 21:47:23'),(423,26,1,1,'Silvia Seabra','Minha irmã querida',NULL,NULL,'2019-05-23 14:34:55'),(424,26,1,1,'Silvia Seabra','Minha irm? querida','2622424.jpg','jpg','2019-05-23 14:38:29');
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
) ENGINE=InnoDB AUTO_INCREMENT=515 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_carts`
--

LOCK TABLES `tb_carts` WRITE;
/*!40000 ALTER TABLE `tb_carts` DISABLE KEYS */;
INSERT INTO `tb_carts` VALUES (314,'vfh3cas5jr4utmt8hs9pofu1p5',11,1,'2019-05-11 16:15:13'),(315,'vfh3cas5jr4utmt8hs9pofu1p5',13,1,'2019-05-11 16:36:00'),(316,'vfh3cas5jr4utmt8hs9pofu1p5',13,1,'2019-05-11 16:50:23'),(317,'vfh3cas5jr4utmt8hs9pofu1p5',11,1,'2019-05-11 21:06:43'),(318,'vfh3cas5jr4utmt8hs9pofu1p5',11,1,'2019-05-11 23:34:07'),(319,'vfh3cas5jr4utmt8hs9pofu1p5',13,1,'2019-05-11 23:36:49'),(320,'vfh3cas5jr4utmt8hs9pofu1p5',13,0,'2019-05-12 03:37:02'),(321,'vfh3cas5jr4utmt8hs9pofu1p5',26,1,'2019-05-14 17:18:18'),(322,'vfh3cas5jr4utmt8hs9pofu1p5',26,1,'2019-05-14 21:56:37'),(323,'vfh3cas5jr4utmt8hs9pofu1p5',26,1,'2019-05-14 22:15:19'),(324,'vfh3cas5jr4utmt8hs9pofu1p5',26,0,'2019-05-14 22:27:55'),(325,'vfh3cas5jr4utmt8hs9pofu1p5',28,1,'2019-05-15 14:31:45'),(326,'vfh3cas5jr4utmt8hs9pofu1p5',28,0,'2019-05-15 14:32:42'),(327,'qokfr6alq9ah4omseooi3e4k3c',11,0,'2019-05-16 00:58:12'),(328,'vfh3cas5jr4utmt8hs9pofu1p5',11,0,'2019-05-22 18:37:23'),(364,'td2fu80s17mjrtpsqa8r004dbl',67,1,'2019-05-26 18:22:35'),(365,'td2fu80s17mjrtpsqa8r004dbl',67,1,'2019-05-26 18:23:04'),(366,'td2fu80s17mjrtpsqa8r004dbl',67,1,'2019-05-26 18:23:22'),(367,'td2fu80s17mjrtpsqa8r004dbl',67,1,'2019-05-26 18:28:52'),(368,'td2fu80s17mjrtpsqa8r004dbl',67,1,'2019-05-26 18:30:57'),(369,'td2fu80s17mjrtpsqa8r004dbl',67,1,'2019-05-26 18:31:36'),(370,'td2fu80s17mjrtpsqa8r004dbl',67,1,'2019-05-26 18:33:11'),(371,'td2fu80s17mjrtpsqa8r004dbl',67,1,'2019-05-26 18:34:37'),(372,'td2fu80s17mjrtpsqa8r004dbl',67,1,'2019-05-26 18:35:11'),(373,'td2fu80s17mjrtpsqa8r004dbl',67,1,'2019-05-26 18:35:36'),(374,'td2fu80s17mjrtpsqa8r004dbl',67,1,'2019-05-26 18:36:27'),(375,'td2fu80s17mjrtpsqa8r004dbl',67,0,'2019-05-26 20:01:20'),(376,'jiduobirdpok0ai8eu1jh5qibe',67,1,'2019-05-26 20:17:47'),(377,'jiduobirdpok0ai8eu1jh5qibe',67,1,'2019-05-26 20:38:06'),(378,'jiduobirdpok0ai8eu1jh5qibe',67,1,'2019-05-27 13:52:21'),(379,'jiduobirdpok0ai8eu1jh5qibe',67,1,'2019-05-27 13:55:18'),(380,'jiduobirdpok0ai8eu1jh5qibe',67,1,'2019-05-27 14:08:49'),(381,'jiduobirdpok0ai8eu1jh5qibe',67,1,'2019-05-27 19:09:16'),(382,'jiduobirdpok0ai8eu1jh5qibe',67,1,'2019-05-27 19:18:05'),(383,'jiduobirdpok0ai8eu1jh5qibe',67,1,'2019-05-27 20:44:08'),(384,'jiduobirdpok0ai8eu1jh5qibe',67,0,'2019-05-27 20:51:17'),(385,'jiduobirdpok0ai8eu1jh5qibe',111,0,'2019-05-28 02:48:06'),(386,'jiduobirdpok0ai8eu1jh5qibe',111,0,'2019-05-28 02:49:13'),(387,'jiduobirdpok0ai8eu1jh5qibe',111,0,'2019-05-28 02:50:08'),(388,'jiduobirdpok0ai8eu1jh5qibe',111,0,'2019-05-28 02:51:21'),(389,'jiduobirdpok0ai8eu1jh5qibe',111,0,'2019-05-28 02:53:34'),(390,'jiduobirdpok0ai8eu1jh5qibe',111,0,'2019-05-28 02:56:17'),(391,'jiduobirdpok0ai8eu1jh5qibe',111,0,'2019-05-28 03:04:56'),(392,'jiduobirdpok0ai8eu1jh5qibe',111,0,'2019-05-28 03:05:22'),(393,'jiduobirdpok0ai8eu1jh5qibe',111,0,'2019-05-28 03:05:36'),(394,'jiduobirdpok0ai8eu1jh5qibe',111,0,'2019-05-28 03:11:23'),(395,'jiduobirdpok0ai8eu1jh5qibe',111,0,'2019-05-28 03:12:14'),(396,'jiduobirdpok0ai8eu1jh5qibe',111,0,'2019-05-28 03:13:08'),(397,'jiduobirdpok0ai8eu1jh5qibe',111,0,'2019-05-28 03:14:30'),(398,'jiduobirdpok0ai8eu1jh5qibe',111,0,'2019-05-28 03:16:14'),(399,'jiduobirdpok0ai8eu1jh5qibe',111,0,'2019-05-28 03:18:06'),(400,'jiduobirdpok0ai8eu1jh5qibe',111,0,'2019-05-28 03:20:34'),(401,'jiduobirdpok0ai8eu1jh5qibe',111,0,'2019-05-28 03:22:28'),(402,'jiduobirdpok0ai8eu1jh5qibe',112,0,'2019-05-28 03:26:31'),(403,'jiduobirdpok0ai8eu1jh5qibe',112,0,'2019-05-28 03:26:53'),(404,'jiduobirdpok0ai8eu1jh5qibe',112,0,'2019-05-28 03:27:41'),(405,'jiduobirdpok0ai8eu1jh5qibe',112,0,'2019-05-28 03:28:47'),(406,'jiduobirdpok0ai8eu1jh5qibe',112,0,'2019-05-28 03:30:06'),(407,'jiduobirdpok0ai8eu1jh5qibe',112,0,'2019-05-28 03:30:52'),(408,'jiduobirdpok0ai8eu1jh5qibe',112,0,'2019-05-28 03:31:14'),(409,'jiduobirdpok0ai8eu1jh5qibe',112,0,'2019-05-28 03:37:34'),(410,'jiduobirdpok0ai8eu1jh5qibe',112,0,'2019-05-28 03:50:25'),(411,'jiduobirdpok0ai8eu1jh5qibe',112,0,'2019-05-28 03:50:45'),(412,'jiduobirdpok0ai8eu1jh5qibe',112,0,'2019-05-28 03:51:58'),(413,'jiduobirdpok0ai8eu1jh5qibe',112,0,'2019-05-28 03:52:52'),(414,'jiduobirdpok0ai8eu1jh5qibe',112,1,'2019-05-28 03:54:49'),(415,'jiduobirdpok0ai8eu1jh5qibe',112,1,'2019-05-28 03:55:51'),(416,'rp38jdgr2ivu2o9iti4vpl8v4p',67,1,'2019-05-28 12:41:44'),(417,'rp38jdgr2ivu2o9iti4vpl8v4p',67,0,'2019-05-28 14:05:27'),(418,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 14:34:18'),(419,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 14:35:03'),(420,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 14:36:53'),(421,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 14:43:08'),(422,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 14:43:56'),(423,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 14:44:01'),(424,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 14:44:21'),(425,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 14:45:47'),(426,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 14:47:31'),(427,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 14:47:51'),(428,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 14:48:16'),(429,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 14:49:13'),(430,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 14:49:30'),(431,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 14:49:43'),(432,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 14:49:50'),(433,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 14:50:09'),(434,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 14:50:33'),(435,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 14:50:51'),(436,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 14:55:47'),(437,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 14:56:16'),(438,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 14:56:43'),(439,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 14:57:09'),(440,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 14:57:48'),(441,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 14:58:27'),(442,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 14:59:28'),(443,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 15:02:31'),(444,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 15:02:58'),(445,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 15:03:41'),(446,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 15:04:01'),(447,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 15:04:55'),(448,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 15:05:45'),(449,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 15:06:03'),(450,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 15:06:31'),(451,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 15:06:58'),(452,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 15:08:48'),(453,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 15:09:01'),(454,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 15:10:07'),(455,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 15:11:08'),(456,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 15:11:31'),(457,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 15:15:22'),(458,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 15:22:08'),(459,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 15:22:34'),(460,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 15:22:43'),(461,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 15:23:21'),(462,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 15:24:33'),(463,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 15:25:05'),(464,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 15:26:01'),(465,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 15:28:42'),(466,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 15:28:57'),(467,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 15:29:40'),(468,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 15:30:09'),(469,'rp38jdgr2ivu2o9iti4vpl8v4p',112,1,'2019-05-28 15:31:23'),(470,'rp38jdgr2ivu2o9iti4vpl8v4p',112,1,'2019-05-28 15:32:29'),(471,'rp38jdgr2ivu2o9iti4vpl8v4p',112,1,'2019-05-28 15:33:20'),(472,'rp38jdgr2ivu2o9iti4vpl8v4p',112,1,'2019-05-28 15:34:51'),(473,'rp38jdgr2ivu2o9iti4vpl8v4p',112,1,'2019-05-28 15:35:35'),(474,'rp38jdgr2ivu2o9iti4vpl8v4p',112,1,'2019-05-28 15:36:16'),(475,'rp38jdgr2ivu2o9iti4vpl8v4p',112,1,'2019-05-28 15:39:19'),(476,'rp38jdgr2ivu2o9iti4vpl8v4p',112,1,'2019-05-28 15:44:38'),(477,'rp38jdgr2ivu2o9iti4vpl8v4p',112,1,'2019-05-28 15:45:52'),(478,'rp38jdgr2ivu2o9iti4vpl8v4p',112,1,'2019-05-28 15:46:28'),(479,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 18:09:49'),(480,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 18:10:26'),(481,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 18:10:36'),(482,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 18:11:09'),(483,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 18:13:08'),(484,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 18:14:59'),(485,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 18:15:15'),(486,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 18:21:13'),(487,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 18:21:30'),(488,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 18:21:49'),(489,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 18:22:15'),(490,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 18:22:46'),(491,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 18:24:28'),(492,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 18:25:18'),(493,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 18:26:00'),(494,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 18:26:07'),(495,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 18:26:38'),(496,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 18:28:02'),(497,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 18:28:58'),(498,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 18:29:16'),(499,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 18:29:56'),(500,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 18:33:50'),(501,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 18:34:57'),(502,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 18:35:18'),(503,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 18:35:34'),(504,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 18:35:49'),(505,'rp38jdgr2ivu2o9iti4vpl8v4p',112,0,'2019-05-28 18:36:53'),(506,'rp38jdgr2ivu2o9iti4vpl8v4p',112,1,'2019-05-28 18:39:46'),(507,'rp38jdgr2ivu2o9iti4vpl8v4p',112,1,'2019-05-28 18:40:16'),(508,'rp38jdgr2ivu2o9iti4vpl8v4p',112,1,'2019-05-28 18:42:01'),(509,'rp38jdgr2ivu2o9iti4vpl8v4p',112,1,'2019-05-28 18:42:49'),(510,'rp38jdgr2ivu2o9iti4vpl8v4p',112,1,'2019-05-28 18:43:08'),(511,'rp38jdgr2ivu2o9iti4vpl8v4p',112,1,'2019-05-28 18:43:41'),(512,'rp38jdgr2ivu2o9iti4vpl8v4p',112,1,'2019-05-28 18:49:17'),(513,'rp38jdgr2ivu2o9iti4vpl8v4p',112,1,'2019-05-28 18:51:03'),(514,'rp38jdgr2ivu2o9iti4vpl8v4p',112,1,'2019-05-28 18:51:48');
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
) ENGINE=InnoDB AUTO_INCREMENT=113 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_cartsitems`
--

LOCK TABLES `tb_cartsitems` WRITE;
/*!40000 ALTER TABLE `tb_cartsitems` DISABLE KEYS */;
INSERT INTO `tb_cartsitems` VALUES (1,336,249,0,'2019-05-26 12:22:08'),(2,337,337,127,'2019-05-26 14:06:10'),(3,344,344,127,'2019-05-26 16:41:23'),(4,345,253,0,'2019-05-26 16:42:40'),(5,346,254,0,'2019-05-26 17:49:51'),(6,347,255,0,'2019-05-26 17:50:48'),(7,348,256,0,'2019-05-26 17:52:14'),(8,349,257,0,'2019-05-26 17:54:01'),(9,350,258,0,'2019-05-26 17:55:07'),(10,351,259,0,'2019-05-26 17:55:48'),(11,352,260,0,'2019-05-26 17:59:45'),(12,353,261,0,'2019-05-26 18:00:28'),(13,354,262,0,'2019-05-26 18:01:39'),(14,355,263,0,'2019-05-26 18:02:01'),(15,356,264,0,'2019-05-26 18:07:27'),(16,357,265,0,'2019-05-26 18:08:12'),(17,358,266,0,'2019-05-26 18:08:56'),(18,359,267,0,'2019-05-26 18:12:40'),(19,360,268,0,'2019-05-26 18:14:17'),(20,361,269,0,'2019-05-26 18:15:14'),(21,362,270,0,'2019-05-26 18:15:38'),(22,364,275,0,'2019-05-26 18:22:37'),(23,365,276,0,'2019-05-26 18:23:06'),(24,366,277,0,'2019-05-26 18:23:24'),(25,367,278,0,'2019-05-26 18:28:54'),(26,368,279,0,'2019-05-26 18:31:00'),(27,369,280,0,'2019-05-26 18:31:38'),(28,370,281,0,'2019-05-26 18:33:14'),(29,371,282,0,'2019-05-26 18:34:40'),(30,372,283,0,'2019-05-26 18:35:13'),(31,373,284,0,'2019-05-26 18:35:38'),(32,374,285,0,'2019-05-26 18:36:29'),(33,338,123,1,'2019-05-26 19:52:56'),(34,338,123,1,'2019-05-26 19:53:32'),(38,375,123,1,'2019-05-26 20:03:15'),(39,375,123,1,'2019-05-26 20:06:01'),(40,375,123,1,'2019-05-26 20:06:22'),(41,375,123,1,'2019-05-26 20:06:30'),(42,375,123,1,'2019-05-26 20:16:54'),(43,376,123,1,'2019-05-26 20:17:51'),(44,376,123,1,'2019-05-26 20:18:01'),(45,376,123,1,'2019-05-26 20:18:10'),(46,376,122,1,'2019-05-26 20:18:15'),(47,377,123,1,'2019-05-27 13:38:10'),(48,378,122,1,'2019-05-27 13:54:24'),(49,379,123,1,'2019-05-27 14:07:07'),(50,380,122,1,'2019-05-27 14:09:12'),(51,380,122,1,'2019-05-27 14:09:13'),(52,381,123,1,'2019-05-27 19:17:15'),(53,382,123,1,'2019-05-27 20:43:14'),(54,383,123,1,'2019-05-27 20:50:17'),(55,399,288,0,'2019-05-28 03:18:08'),(56,400,289,0,'2019-05-28 03:20:37'),(57,401,290,0,'2019-05-28 03:22:30'),(58,404,291,0,'2019-05-28 03:27:43'),(59,405,292,0,'2019-05-28 03:28:49'),(60,406,293,0,'2019-05-28 03:30:08'),(61,407,294,0,'2019-05-28 03:30:54'),(62,408,295,0,'2019-05-28 03:31:16'),(63,409,296,0,'2019-05-28 03:37:36'),(64,410,297,0,'2019-05-28 03:50:27'),(65,411,298,0,'2019-05-28 03:50:47'),(66,412,299,0,'2019-05-28 03:52:01'),(67,413,300,0,'2019-05-28 03:52:54'),(68,414,301,0,'2019-05-28 03:54:51'),(69,415,302,0,'2019-05-28 03:55:53'),(70,384,123,1,'2019-05-28 12:40:47'),(71,384,123,1,'2019-05-28 12:40:49'),(72,384,123,1,'2019-05-28 12:40:52'),(73,384,122,1,'2019-05-28 12:40:57'),(75,416,123,1,'2019-05-28 12:42:24'),(81,416,123,1,'2019-05-28 12:43:40'),(82,464,305,0,'2019-05-28 15:26:03'),(83,465,306,0,'2019-05-28 15:28:44'),(84,466,307,0,'2019-05-28 15:28:59'),(85,467,308,0,'2019-05-28 15:29:42'),(86,468,309,0,'2019-05-28 15:30:11'),(87,469,310,0,'2019-05-28 15:31:25'),(88,470,311,0,'2019-05-28 15:32:31'),(89,471,312,0,'2019-05-28 15:33:22'),(90,472,313,0,'2019-05-28 15:34:53'),(91,473,314,0,'2019-05-28 15:35:37'),(92,474,315,0,'2019-05-28 15:36:18'),(93,475,316,0,'2019-05-28 15:39:21'),(94,476,317,0,'2019-05-28 15:44:40'),(95,477,318,0,'2019-05-28 15:45:54'),(96,478,319,0,'2019-05-28 15:46:30'),(97,499,321,0,'2019-05-28 18:29:58'),(98,500,322,0,'2019-05-28 18:33:52'),(99,501,323,0,'2019-05-28 18:34:59'),(100,502,324,0,'2019-05-28 18:35:20'),(101,503,325,0,'2019-05-28 18:35:36'),(102,504,326,0,'2019-05-28 18:35:51'),(103,505,327,0,'2019-05-28 18:36:55'),(104,506,328,0,'2019-05-28 18:39:48'),(105,507,329,0,'2019-05-28 18:40:18'),(106,508,330,0,'2019-05-28 18:42:03'),(107,509,331,0,'2019-05-28 18:42:51'),(108,510,332,0,'2019-05-28 18:43:09'),(109,511,333,0,'2019-05-28 18:43:43'),(110,512,334,0,'2019-05-28 18:49:19'),(111,513,335,0,'2019-05-28 18:51:05'),(112,514,336,0,'2019-05-28 18:51:50');
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
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_consorts`
--

LOCK TABLES `tb_consorts` WRITE;
/*!40000 ALTER TABLE `tb_consorts` DISABLE KEYS */;
INSERT INTO `tb_consorts` VALUES (1,11,'Ludmiila','mila@gmail.com','0.jpg','jpg','2019-05-11 15:40:52'),(2,13,'Ana Lucia','morganaluke@gmail.com','0.jpg','jpg','2019-05-11 16:51:16'),(3,26,'Jose Paulo','jpccambraia@gmail.com','0.jpg','jpg','2019-05-14 22:01:12'),(4,28,'Maria','maria@gmail.com','0.jpg','jpg','2019-05-15 14:33:07'),(5,36,'Ana Lucia','lucia@gmail.com','0.jpg','jpg','2019-05-24 12:47:01'),(6,47,'Meu Amor',NULL,'0.jpg',NULL,'2019-05-26 15:14:22'),(7,48,'Meu Amor',NULL,'0.jpg','jpg','2019-05-26 15:16:34'),(8,49,'Meu Amor',NULL,'0.jpg','jpg','2019-05-26 15:17:14'),(9,50,'Meu Amor',NULL,'0.jpg','jpg','2019-05-26 15:17:36'),(10,51,'Meu Amor',NULL,'0.jpg','jpg','2019-05-26 15:18:08'),(11,52,'Meu Amor',NULL,'0.jpg','jpg','2019-05-26 15:18:39'),(12,53,'Meu Amor',NULL,'0.jpg','jpg','2019-05-26 15:18:52'),(13,54,'Meu Amor',NULL,'0.jpg','jpg','2019-05-26 15:20:37'),(14,55,'Meu Amor',NULL,'0.jpg','jpg','2019-05-26 15:27:16'),(15,56,'Meu Amor',NULL,'0.jpg','jpg','2019-05-26 15:28:03'),(16,57,'Meu Amor',NULL,'0.jpg','jpg','2019-05-26 15:30:01'),(17,58,'Meu Amor',NULL,'0.jpg','jpg','2019-05-26 15:36:02'),(18,59,'Meu Amor',NULL,'0.jpg','jpg','2019-05-26 15:37:06'),(19,60,'Meu Amor',NULL,'0.jpg','jpg','2019-05-26 15:37:52'),(20,61,'Meu Amor',NULL,'0.jpg','jpg','2019-05-26 15:40:50'),(21,62,'Meu Amor',NULL,'0.jpg','jpg','2019-05-26 15:55:13'),(22,63,'Meu Amor',NULL,'0.jpg','jpg','2019-05-26 15:55:46'),(23,64,'Meu Amor',NULL,'0.jpg','jpg','2019-05-26 15:56:40'),(24,65,'Meu Amor',NULL,'0.jpg','jpg','2019-05-26 15:59:02'),(25,66,'Meu Amor',NULL,'0.jpg','jpg','2019-05-26 15:59:29'),(26,67,'Meu Amor',NULL,'0.jpg','jpg','2019-05-26 16:00:17'),(27,74,'Meu Amor',NULL,'0.jpg','jpg','2019-05-28 01:02:59'),(28,75,'Meu Amor',NULL,'0.jpg','jpg','2019-05-28 01:04:45'),(29,76,'Meu Amor',NULL,'0.jpg','jpg','2019-05-28 01:14:00'),(30,77,'Meu Amor',NULL,'0.jpg','jpg','2019-05-28 01:14:50'),(31,78,'Meu Amor',NULL,'0.jpg','jpg','2019-05-28 01:15:45'),(32,79,'Meu Amor',NULL,'0.jpg','jpg','2019-05-28 01:17:16'),(33,80,'Meu Amor',NULL,'0.jpg','jpg','2019-05-28 01:17:36'),(34,81,'Meu Amor',NULL,'0.jpg','jpg','2019-05-28 01:17:54'),(35,82,'Meu Amor',NULL,'0.jpg','jpg','2019-05-28 01:20:54'),(36,83,'Meu Amor',NULL,'0.jpg','jpg','2019-05-28 01:21:09'),(37,84,'Meu Amor',NULL,'0.jpg','jpg','2019-05-28 01:21:51'),(38,85,'Meu Amor',NULL,'0.jpg','jpg','2019-05-28 01:22:17'),(39,86,'Meu Amor',NULL,'0.jpg','jpg','2019-05-28 01:22:40'),(40,87,'Meu Amor',NULL,'0.jpg','jpg','2019-05-28 01:23:00'),(41,88,'Meu Amor',NULL,'0.jpg','jpg','2019-05-28 01:23:07'),(42,89,'Meu Amor',NULL,'0.jpg','jpg','2019-05-28 01:23:13'),(43,90,'Meu Amor',NULL,'0.jpg','jpg','2019-05-28 01:23:32'),(44,91,'Meu Amor',NULL,'0.jpg','jpg','2019-05-28 01:23:50'),(45,92,'Meu Amor',NULL,'0.jpg','jpg','2019-05-28 01:24:14'),(46,93,'Meu Amor',NULL,'0.jpg','jpg','2019-05-28 01:25:10'),(47,94,'Meu Amor',NULL,'0.jpg','jpg','2019-05-28 01:25:54'),(48,95,'Meu Amor',NULL,'0.jpg','jpg','2019-05-28 01:26:08'),(49,96,'Meu Amor',NULL,'0.jpg','jpg','2019-05-28 01:26:19'),(50,97,'Meu Amor',NULL,'0.jpg','jpg','2019-05-28 01:27:11'),(51,98,'Meu Amor',NULL,'0.jpg','jpg','2019-05-28 01:27:53'),(52,99,'Meu Amor',NULL,'0.jpg','jpg','2019-05-28 01:28:09'),(53,100,'Meu Amor',NULL,'0.jpg','jpg','2019-05-28 02:00:58'),(54,101,'Meu Amor',NULL,'0.jpg','jpg','2019-05-28 02:01:14'),(55,102,'Meu Amor',NULL,'0.jpg','jpg','2019-05-28 02:02:57'),(56,103,'Meu Amor',NULL,'0.jpg','jpg','2019-05-28 02:03:10'),(57,104,'Meu Amor',NULL,'0.jpg','jpg','2019-05-28 02:03:23'),(58,105,'Meu Amor',NULL,'0.jpg','jpg','2019-05-28 02:03:56'),(59,106,'Meu Amor',NULL,'0.jpg','jpg','2019-05-28 02:04:07'),(60,107,'Meu Amor',NULL,'0.jpg','jpg','2019-05-28 02:04:33'),(61,108,'Meu Amor',NULL,'0.jpg','jpg','2019-05-28 02:23:41'),(62,109,'Meu Amor',NULL,'0.jpg','jpg','2019-05-28 02:24:22'),(63,110,'Meu Amor',NULL,'0.jpg','jpg','2019-05-28 02:24:46'),(64,111,'Meu Amor',NULL,'0.jpg','jpg','2019-05-28 02:26:46'),(65,112,'Ludmila Senna','','1125565.jpg','jpg','2019-05-28 03:23:58');
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
) ENGINE=InnoDB AUTO_INCREMENT=334 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_customers`
--

LOCK TABLES `tb_customers` WRITE;
/*!40000 ALTER TABLE `tb_customers` DISABLE KEYS */;
INSERT INTO `tb_customers` VALUES (1,35,'CUS-7XG8M9SYKMJ9','Joao Cesar','joao@gmail.com',NULL,31,984050125,0,'01224202686','13465400','Rua Alvaro Ribeiro','1757','401','Major','Americana','SP','BRA','CRC-SBIMKU7Z4JUG','VISA','411111','1111','1970-02-02','2019-05-21 23:07:57'),(2,35,'CUS-BY0J4LGEYF71','Joao Cesar','joao@gmail.com',NULL,31,984050125,0,'01224202686','13465400','Rua Alvaro Ribeiro','1757','401','Major','Americana','SP','BRA','CRC-5SY18LDZ1DX7','VISA','411111','1111','1970-02-02','2019-05-21 23:09:05'),(3,35,'CUS-VGCYYE27CQ9F','Joao Cesar','joao@gmail.com',NULL,31,984050125,0,'01224202686','13465400','Rua Alvaro Ribeiro','1757','401','Major','Americana','SP','BRA','CRC-XN5E697G2DNP','VISA','411111','1111','1970-02-02','2019-05-22 01:01:49'),(4,35,'CUS-HCSO04GY4TU7','Joao Cesar','joao@gmail.com',NULL,31,984050125,0,'01224202686','13465400','Rua Alvaro Ribeiro','1757','401','Major','Americana','SP','BRA','CRC-854UCELWQ2XV','VISA','411111','1111','1970-02-02','2019-05-22 01:02:05'),(5,35,'CUS-16KLOCDWVDQ1','Joao Cesar','joao@gmail.com',NULL,31,984050125,0,'01224202686','13465400','Rua Alvaro Ribeiro','1757','401','Major','Americana','SP','BRA','CRC-5P725EK2HR8X','VISA','411111','1111','1970-02-02','2019-05-22 01:02:37'),(6,35,'CUS-E30R0KVN2C6M','Joao Cesar','joao@gmail.com',NULL,31,984050125,0,'01224202686','13465400','Rua Alvaro Ribeiro','1757','401','Major','Americana','SP','BRA','CRC-PZFEXETRT7AX','VISA','411111','1111','1970-02-02','2019-05-22 01:02:57'),(7,35,'CUS-8ZSSQBNQ1MPN','Joao Cesar','joao@gmail.com',NULL,31,984050125,0,'01224202686','13465400','Rua Alvaro Ribeiro','1757','401','Major','Americana','SP','BRA','CRC-DN9R31MUQ72V','VISA','411111','1111','1970-02-02','2019-05-22 01:03:38'),(8,35,'CUS-TY4C88XMTNE7','Joao Cesar','joao@gmail.com',NULL,31,984050125,0,'01224202686','13465400','Rua Alvaro Ribeiro','1757','401','Major','Americana','SP','BRA','CRC-1THZYDDDTDE3','VISA','411111','1111','1970-02-02','2019-05-22 01:04:15'),(9,35,'CUS-S2IUHP1VH5TX','Joao Cesar','joao@gmail.com',NULL,31,984050125,0,'01224202686','13465400','Rua Alvaro Ribeiro','1757','401','Major','Americana','SP','BRA','CRC-EN5T7491OK4H','VISA','411111','1111','1970-02-02','2019-05-22 01:43:20'),(10,35,'CUS-NDCF1BPDJ8YJ','Joao Cesar','joao@gmail.com',NULL,31,984050125,0,'01224202686','13465400','Rua Alvaro Ribeiro','1757','401','Major','Americana','SP','BRA','CRC-B2SI0BERS2JL','VISA','411111','1111','1970-02-02','2019-05-22 01:43:46'),(11,35,'CUS-54W1V4JZ8UGU','Joao Cesar','joao@gmail.com',NULL,31,984050125,0,'01224202686','13465400','Rua Alvaro Ribeiro','1757','401','Major','Americana','SP','BRA','CRC-1L45E847R74B','VISA','411111','1111','1970-02-02','2019-05-22 01:44:42'),(12,35,'CUS-392ALWJ5QCCR','Joao Cesar','joao@gmail.com',NULL,31,984050125,0,'01224202686','13465400','Rua Alvaro Ribeiro','1757','401','Major','Americana','SP','BRA','CRC-GLSJO0E0SLOP','VISA','411111','1111','1970-02-02','2019-05-22 01:45:04'),(13,35,'CUS-SJ74MRBUMRF3','Joao Cesar','joao@gmail.com',NULL,31,984050125,0,'01224202686','13465400','Rua Alvaro Ribeiro','1757','401','Major','Americana','SP','BRA','CRC-CH11MC9QAUDI','VISA','411111','1111','1970-02-02','2019-05-22 01:45:31'),(14,35,'CUS-EMRVG6HYFL7M','Joao Cesar','joao@gmail.com',NULL,31,984050125,0,'01224202686','13465400','Rua Alvaro Ribeiro','1757','401','Major','Americana','SP','BRA','CRC-DIVPZY8R6E3Q','VISA','411111','1111','1970-02-02','2019-05-22 01:45:53'),(15,35,'CUS-RBBRPITZ7XPP','Joao Cesar','joao@gmail.com',NULL,31,984050125,0,'01224202686','13465400','Rua Alvaro Ribeiro','1757','401','Major','Americana','SP','BRA','CRC-UDZ8QN8AF0HG','VISA','411111','1111','1970-02-02','2019-05-22 01:47:06'),(16,35,'CUS-LS8PEJ3TH2TH','Joao Cesar','joao@gmail.com',NULL,31,984050125,0,'01224202686','13465400','Rua Alvaro Ribeiro','1757','401','Major','Americana','SP','BRA','CRC-JTBWN2GL9UMZ','VISA','411111','1111','1970-02-02','2019-05-22 01:47:31'),(17,35,'CUS-YTYGLNM2KM1K','Joao Cesar','joao@gmail.com',NULL,31,984050125,0,'01224202686','13465400','Rua Alvaro Ribeiro','1757','401','Major','Americana','SP','BRA','CRC-BUO9BNO5ZDKW','VISA','411111','1111','1970-02-02','2019-05-22 01:48:44'),(18,35,'CUS-EEH8EL9L13VQ','Joao Cesar','joao@gmail.com',NULL,31,984050125,0,'01224202686','13465400','Rua Alvaro Ribeiro','1757','401','Major','Americana','SP','BRA','CRC-XLJQ7RK3WOWH','VISA','411111','1111','1970-02-02','2019-05-22 01:49:23'),(19,35,'CUS-E65SMRS9Q4OS','Joao Cesar','joao@gmail.com',NULL,31,984050125,0,'01224202686','13465400','Rua Alvaro Ribeiro','1757','401','Major','Americana','SP','BRA','CRC-0E5L0LQCUQG7','VISA','411111','1111','1970-02-02','2019-05-22 01:49:40'),(20,35,'CUS-MVNKXK0GA99K','Joao Cesar','joao@gmail.com',NULL,31,984050125,0,'01224202686','13465400','Rua Alvaro Ribeiro','1757','401','Major','Americana','SP','BRA','CRC-RD41Z3LJ6BP1','VISA','411111','1111','1970-02-02','2019-05-22 01:53:59'),(21,35,'CUS-0T6B5U7MW97Q','Joao Cesar','joao@gmail.com',NULL,31,984050125,0,'01224202686','13465400','Rua Alvaro Ribeiro','1757','401','Major','Americana','SP','BRA','CRC-Z1AS69W80CQL','VISA','411111','1111','1970-02-02','2019-05-22 01:54:22'),(22,35,'CUS-TXPQ3VW4LJ13','Joao Cesar','joao@gmail.com',NULL,31,984050125,0,'01224202686','13465400','Rua Alvaro Ribeiro','1757','401','Major','Americana','SP','BRA','CRC-VTJKP69JZ6O7','VISA','411111','1111','1970-02-02','2019-05-22 01:56:13'),(23,35,'CUS-M7C3BBILQM0J','Joao Cesar','joao@gmail.com',NULL,31,984050125,0,'01224202686','13465400','Rua Alvaro Ribeiro','1757','401','Major','Americana','SP','BRA','CRC-D8LZP6Y5WOA4','VISA','411111','1111','1970-02-02','2019-05-22 01:57:40'),(24,35,'CUS-XBDBVAQ1SO72','Joao Cesar','joao@gmail.com',NULL,31,984050125,0,'01224202686','13465400','Rua Alvaro Ribeiro','1757','401','Major','Americana','SP','BRA','CRC-THYU22W28NRC','VISA','411111','1111','1970-02-02','2019-05-22 01:58:33'),(25,35,'CUS-54WA7HYMZHDF','Joao Cesar','joao@gmail.com',NULL,31,984050125,0,'01224202686','13465400','Rua Alvaro Ribeiro','1757','401','Major','Americana','SP','BRA','CRC-QVZL91C9EAO5','VISA','411111','1111','1970-02-02','2019-05-22 01:59:57'),(26,36,'CUS-8FKNI03YZU0Z','Joao Pastor','pastor@pastor.com',NULL,31,123456798,0,'01224202686','13465400','Rua Tal','100','11','Vila','Americana','SP','BRA','CRC-GAK0TV93RWZ3','VISA','411111','1111','1945-01-01','2019-05-22 11:54:49'),(27,36,'CUS-R53IRUH6PB0O','Joao Pastor','pastor@pastor.com',NULL,31,123456798,0,'01224202686','13465400','Rua Tal','100','11','Vila','Americana','SP','BRA','CRC-YTHPQXFJLEFG','VISA','411111','1111','1945-01-01','2019-05-22 11:55:53'),(28,36,'CUS-PYNVL3XKAY1B','Joao Pastor','pastor@pastor.com',NULL,31,123456798,0,'01224202686','13465400','Rua Tal','100','11','Vila','Americana','SP','BRA','CRC-WXV0XH11DNCM','VISA','411111','1111','1945-01-01','2019-05-22 11:56:07'),(29,36,'CUS-QHM6AY1EFGDT','Joao Pastor','pastor@pastor.com',NULL,31,123456798,0,'01224202686','13465400','Rua Tal','100','11','Vila','Americana','SP','BRA','CRC-GDBXLK6MV10Z','VISA','411111','1111','1945-01-01','2019-05-22 12:09:29'),(30,36,'CUS-FQJRVFEF3VWA','Joao Pastor','pastor@pastor.com',NULL,31,123456798,0,'01224202686','13465400','Rua Tal','100','11','Vila','Americana','SP','BRA','CRC-O06QRH033GC5','VISA','411111','1111','1945-01-01','2019-05-22 12:09:58'),(31,36,'CUS-UEFPMKFK1YZ2','Joao Pastor','pastor@pastor.com',NULL,31,123456798,0,'01224202686','13465400','Rua Tal','100','11','Vila','Americana','SP','BRA','CRC-24HECH1KD9EG','VISA','411111','1111','1945-01-01','2019-05-22 12:10:48'),(32,36,'CUS-GMX5SKGCTM1G','Joao Pastor','pastor@pastor.com',NULL,31,123456798,0,'01224202686','13465400','Rua Tal','100','11','Vila','Americana','SP','BRA','CRC-387EWTUD54QM','VISA','411111','1111','1945-01-01','2019-05-22 12:11:27'),(33,36,'CUS-691T6VK0PZM3','Joao Pastor','pastor@pastor.com',NULL,31,123456798,0,'01224202686','13465400','Rua Tal','100','11','Vila','Americana','SP','BRA','CRC-6MVZRU6WS06B','VISA','411111','1111','1945-01-01','2019-05-22 12:12:21'),(34,36,'CUS-03ATSLNI6MQE','Joao Pastor','pastor@pastor.com',NULL,31,123456798,0,'01224202686','13465400','Rua Tal','100','11','Vila','Americana','SP','BRA','CRC-KZ40H22I260C','VISA','411111','1111','1945-01-01','2019-05-22 12:16:40'),(35,36,'CUS-6PDEQOLJWXYT','Joao Pastor','pastor@pastor.com',NULL,31,123456798,0,'01224202686','13465400','Rua Tal','100','11','Vila','Americana','SP','BRA','CRC-11TRUI9JJP59','VISA','411111','1111','1945-01-01','2019-05-22 12:18:14'),(36,36,'CUS-MWRB1ZE3HUY0','Joao Pastor','pastor@pastor.com',NULL,31,123456798,0,'01224202686','13465400','Rua Tal','100','11','Vila','Americana','SP','BRA','CRC-NBN4EL7YCHWU','VISA','411111','1111','1945-01-01','2019-05-22 12:45:00'),(37,36,'CUS-WNSJM311F5K6','Joao Pastor','pastor@pastor.com',NULL,31,123456798,0,'01224202686','13465400','Rua Tal','100','11','Vila','Americana','SP','BRA','CRC-7F7T09D70XIP','VISA','411111','1111','1945-01-01','2019-05-22 12:52:23'),(38,36,'CUS-5UG6K21WXOLP','Joao Pastor','pastor@pastor.com',NULL,31,123456798,0,'01224202686','13465400','Rua Tal','100','11','Vila','Americana','SP','BRA','CRC-6W4GL599H4KK','VISA','411111','1111','1945-01-01','2019-05-22 12:54:44'),(39,36,'CUS-KROE2TL6QK13','Joao Pastor','pastor@pastor.com',NULL,31,123456798,0,'01224202686','13465400','Rua Tal','100','11','Vila','Americana','SP','BRA','CRC-E958PQR40SZ0','VISA','411111','1111','1945-01-01','2019-05-22 12:58:39'),(40,36,'CUS-RKQ5CKKCPO2J','Joao Pastor','pastor@pastor.com',NULL,31,123456798,0,'01224202686','13465400','Rua Tal','100','11','Vila','Americana','SP','BRA','CRC-EMHZ6B2XD3VK','VISA','411111','1111','1945-01-01','2019-05-22 13:00:31'),(41,36,'CUS-RRQ8HISK7A2L','Joao Pastor','pastor@pastor.com',NULL,31,123456798,0,'01224202686','13465400','Rua Tal','100','11','Vila','Americana','SP','BRA','CRC-AZEFR8VVMU8D','VISA','411111','1111','1945-01-01','2019-05-22 13:02:06'),(42,36,'CUS-PJI5DRB7X16Q','Joao Pastor','pastor@pastor.com',NULL,31,123456798,0,'01224202686','13465400','Rua Tal','100','11','Vila','Americana','SP','BRA','CRC-5Q3REN8A2EA2','VISA','411111','1111','1945-01-01','2019-05-22 13:02:59'),(43,36,'CUS-LVLYXTTXBV7U','Joao Pastor','pastor@pastor.com',NULL,31,123456798,0,'01224202686','13465400','Rua Tal','100','11','Vila','Americana','SP','BRA','CRC-V6290NZVNE32','VISA','411111','1111','1945-01-01','2019-05-22 13:03:59'),(44,36,'CUS-UO7NWN4UY4UB','Joao Pastor','pastor@pastor.com',NULL,31,123456798,0,'01224202686','13465400','Rua Tal','100','11','Vila','Americana','SP','BRA','CRC-OBBZF4DZY4KQ','VISA','411111','1111','1945-01-01','2019-05-22 13:31:59'),(45,36,'CUS-NDFHKYV5QLCC','Joao Pastor','pastor@pastor.com',NULL,31,123456798,0,'01224202686','13465400','Rua Tal','100','11','Vila','Americana','SP','BRA','CRC-IN7BQEKUMGLF','VISA','411111','1111','1945-01-01','2019-05-22 13:48:42'),(46,36,'CUS-2UMCF368O8EL','Joao Pastor','pastor@pastor.com',NULL,31,123456798,0,'01224202686','13465400','Rua Tal','100','11','Vila','Americana','SP','BRA','CRC-Z09RCSG7ZO1V','VISA','411111','1111','1945-01-01','2019-05-22 13:49:30'),(47,36,'CUS-125HHFRK36D0','Joao Pastor','pastor@pastor.com',NULL,31,123456798,0,'01224202686','13465400','Rua Tal','100','11','Vila','Americana','SP','BRA','CRC-CSGWPTBI2YKJ','VISA','411111','1111','1945-01-01','2019-05-22 13:50:35'),(48,36,'CUS-RNG3MWNW5QHX','Joao Pastor','pastor@pastor.com',NULL,31,123456798,0,'01224202686','13465400','Rua Tal','100','11','Vila','Americana','SP','BRA','CRC-VBSMMS0M102Y','VISA','411111','1111','1945-01-01','2019-05-22 13:51:27'),(49,36,'CUS-AARJ8U6ZKYE5','Joao Pastor','pastor@pastor.com',NULL,31,123456798,0,'01224202686','13465400','Rua Tal','100','11','Vila','Americana','SP','BRA','CRC-SFU2E8HLPFAZ','VISA','411111','1111','1945-01-01','2019-05-22 13:56:17'),(50,36,'CUS-5K7ZDHP1DNOR','Joao Pastor','pastor@pastor.com',NULL,31,123456798,0,'01224202686','13465400','Rua Tal','100','11','Vila','Americana','SP','BRA','CRC-GRYHX49B5SUS','VISA','411111','1111','1945-01-01','2019-05-22 13:56:33'),(51,36,'CUS-NVKPB5FPED9H','Joao Pastor','pastor@pastor.com',NULL,31,123456798,0,'01224202686','13465400','Rua Tal','100','11','Vila','Americana','SP','BRA','CRC-8KHVV41W4L0Q','VISA','411111','1111','1945-01-01','2019-05-22 13:57:17'),(52,36,'CUS-U6YD4C2ZLURH','Joao Pastor','pastor@pastor.com',NULL,31,123456798,0,'01224202686','13465400','Rua Tal','100','11','Vila','Americana','SP','BRA','CRC-9W27SAMEZD08','VISA','411111','1111','1945-01-01','2019-05-22 13:58:11'),(53,11,'CUS-IJJ9JOBHQU1E','Paulo Roberto','paulo@gmail.com',NULL,31,123456789,0,'01224202686','13465400','Rua Alvaro Ribeiro','1324','','Vila Rehder','Americana','SP','BRA','CRC-Z3H6BM10ZUEL','VISA','411111','1111','1951-01-01','2019-05-22 15:32:52'),(54,11,'CUS-GOCI1GN1A9I0','Paulo Roberto','paulo@gmail.com',NULL,31,123456789,0,'01224202686','13465400','Rua Alvaro Ribeiro','1324','','Vila Rehder','Americana','SP','BRA','CRC-1TH9JLDHI7WG','VISA','411111','1111','1951-01-01','2019-05-22 17:22:44'),(55,11,'CUS-TKZ68ALCBKWI','Paulo Roberto','paulo@gmail.com',NULL,31,123456789,0,'01224202686','13465400','Rua Alvaro Ribeiro','1324','','Vila Rehder','Americana','SP','BRA','CRC-Z1AL5RXZ0BXU','VISA','411111','1111','1951-01-01','2019-05-22 17:24:56'),(56,11,'CUS-23OE1FDWAMZL','Paulo Roberto','paulo@gmail.com',NULL,31,123456789,0,'01224202686','13465400','Rua Alvaro Ribeiro','1324','','Vila Rehder','Americana','SP','BRA','CRC-HW1C8T6AYOJ2','VISA','411111','1111','1951-01-01','2019-05-22 17:38:34'),(57,11,'CUS-S1IYOTOP3M92','Paulo Roberto','paulo@gmail.com',NULL,31,123456789,0,'01224202686','13465400','Rua Alvaro Ribeiro','1324','','Vila Rehder','Americana','SP','BRA','CRC-JM6DDHW7KH7A','VISA','411111','1111','1951-01-01','2019-05-22 17:38:58'),(58,11,'CUS-UTBG7EOHLVQM','Paulo Roberto','paulo@gmail.com',NULL,31,123456789,0,'01224202686','13465400','Rua Alvaro Ribeiro','1324','','Vila Rehder','Americana','SP','BRA','CRC-KRY48XJG1L9J','VISA','411111','1111','1951-01-01','2019-05-22 17:39:23'),(59,11,'CUS-LE4O3ANB4KPA','Paulo Roberto','paulo@gmail.com',NULL,31,123456789,0,'01224202686','13465400','Rua Alvaro Ribeiro','1324','','Vila Rehder','Americana','SP','BRA','CRC-SA8L9NYYZR56','VISA','411111','1111','1951-01-01','2019-05-22 17:42:28'),(60,11,'CUS-H45U0MH0G2LW','Paulo Roberto','paulo@gmail.com',NULL,31,123456789,0,'01224202686','13465400','Rua Alvaro Ribeiro','1324','','Vila Rehder','Americana','SP','BRA','CRC-WAUH3SPXNZMS','VISA','411111','1111','1951-01-01','2019-05-22 17:43:06'),(61,11,'CUS-THIX0W8RH3HL','Paulo Roberto','paulo@gmail.com',NULL,31,123456789,0,'01224202686','13465400','Rua Alvaro Ribeiro','1324','','Vila Rehder','Americana','SP','BRA','CRC-PZ2WU0ADV8FW','VISA','411111','1111','1951-01-01','2019-05-22 17:43:30'),(62,11,'CUS-NRUURLD37DGA','Paulo Roberto','paulo@gmail.com',NULL,31,123456789,0,'01224202686','13465400','Rua Alvaro Ribeiro','1324','','Vila Rehder','Americana','SP','BRA','CRC-CL3X70ZGLTIM','VISA','411111','1111','1951-01-01','2019-05-22 17:45:12'),(63,11,'CUS-72ZM8SOC5U06','Paulo Roberto','paulo@gmail.com',NULL,31,123456789,0,'01224202686','13465400','Rua Alvaro Ribeiro','1324','','Vila Rehder','Americana','SP','BRA','CRC-VCS20GDUEUAO','VISA','411111','1111','1951-01-01','2019-05-22 17:47:38'),(64,11,'CUS-83B1DIWLPBXL','Paulo Roberto','paulo@gmail.com',NULL,31,123456789,0,'01224202686','13465400','Rua Alvaro Ribeiro','1324','','Vila Rehder','Americana','SP','BRA','CRC-0AUTCX0EED4X','VISA','411111','1111','1951-01-01','2019-05-22 17:49:04'),(65,11,'CUS-P130FUHD4O0C','Paulo Roberto','paulo@gmail.com',NULL,31,123456789,0,'01224202686','13465400','Rua Alvaro Ribeiro','1324','','Vila Rehder','Americana','SP','BRA','CRC-MBTKA8LRUS1X','VISA','411111','1111','1951-01-01','2019-05-22 17:49:46'),(66,11,'CUS-O4W4T8I8YK2N','Paulo Roberto','paulo@gmail.com',NULL,31,123456789,0,'01224202686','13465400','Rua Alvaro Ribeiro','1324','','Vila Rehder','Americana','SP','BRA','CRC-UFJ3CRLLWMLE','VISA','411111','1111','1951-01-01','2019-05-22 17:50:34'),(67,11,'CUS-HRNZNYYZZV3M','Paulo Roberto','paulo@gmail.com',NULL,31,123456789,0,'01224202686','13465400','Rua Alvaro Ribeiro','1324','','Vila Rehder','Americana','SP','BRA','CRC-2TYKKFLBR5CD','VISA','411111','1111','1951-01-01','2019-05-22 17:51:25'),(68,11,'CUS-14PAKX8DXDVF','Paulo Roberto','paulo@gmail.com',NULL,31,123456789,0,'01224202686','13465400','Rua Alvaro Ribeiro','1324','','Vila Rehder','Americana','SP','BRA','CRC-4WCHJM1O0NYN','VISA','411111','1111','1951-01-01','2019-05-22 17:52:14'),(69,11,'CUS-ECB7MVVG4RAQ','Paulo Roberto','paulo@gmail.com',NULL,31,123456789,0,'01224202686','13465400','Rua Alvaro Ribeiro','1324','','Vila Rehder','Americana','SP','BRA','CRC-AS5LGXFKCTN8','VISA','411111','1111','1951-01-01','2019-05-22 17:53:55'),(70,11,'CUS-RIGPSH8LD8GY','Paulo Roberto','paulo@gmail.com',NULL,31,123456789,0,'01224202686','13465400','Rua Alvaro Ribeiro','1324','','Vila Rehder','Americana','SP','BRA','CRC-TSV36E67OABC','VISA','411111','1111','1951-01-01','2019-05-22 17:55:16'),(71,11,'CUS-L1A76LO0R4KT','Paulo Roberto','paulo@gmail.com',NULL,31,123456789,0,'01224202686','13465400','Rua Alvaro Ribeiro','1324','','Vila Rehder','Americana','SP','BRA','CRC-Z28KF004QDZ8','VISA','411111','1111','1951-01-01','2019-05-22 17:58:05'),(72,11,'CUS-VO41IQ04CRC2','Paulo Roberto','paulo@gmail.com',NULL,31,123456789,0,'01224202686','13465400','Rua Alvaro Ribeiro','1324','','Vila Rehder','Americana','SP','BRA','CRC-JYX86MXD2F94','VISA','411111','1111','1951-01-01','2019-05-22 18:05:26'),(73,11,'CUS-86Y0V9AUPFNA','Paulo Roberto','paulo@gmail.com',NULL,31,123456789,0,'01224202686','13465400','Rua Alvaro Ribeiro','1324','','Vila Rehder','Americana','SP','BRA','CRC-6EXWMSZON4JR','VISA','411111','1111','1951-01-01','2019-05-22 18:05:52'),(74,11,'CUS-GT4BSQUMZE9D','Paulo Roberto','paulo@gmail.com',NULL,31,123456789,0,'01224202686','13465400','Rua Alvaro Ribeiro','1324','','Vila Rehder','Americana','SP','BRA','CRC-HJ2LFC1SZKUJ','VISA','411111','1111','1951-01-01','2019-05-22 18:07:05'),(75,11,'CUS-12UDYKVEVI5S','Paulo Roberto','paulo@gmail.com',NULL,31,123456789,0,'01224202686','13465400','Rua Alvaro Ribeiro','1324','','Vila Rehder','Americana','SP','BRA','CRC-O2LXWQ9ZT73X','VISA','411111','1111','1951-01-01','2019-05-22 18:19:10'),(76,11,'CUS-KHOKIG2E2Z0B','Paulo Roberto','paulo@gmail.com',NULL,31,123456789,0,'01224202686','13465400','Rua Alvaro Ribeiro','1324','','Vila Rehder','Americana','SP','BRA','CRC-C3I3I88AE9LN','VISA','411111','1111','1951-01-01','2019-05-22 18:29:01'),(77,11,'CUS-LNKGFY08U1FR','Paulo Roberto','paulo@gmail.com',NULL,31,123456789,0,'01224202686','13465400','Rua Alvaro Ribeiro','1324','','Vila Rehder','Americana','SP','BRA','CRC-AKC6DF2IAV2W','VISA','411111','1111','1951-01-01','2019-05-22 18:30:09'),(78,11,'CUS-LXFZPKNAVN9Z','Paulo Roberto','paulo@gmail.com',NULL,31,123456789,0,'01224202686','13465400','Rua Alvaro Ribeiro','1324','','Vila Rehder','Americana','SP','BRA','CRC-TMBI3ETOMQ0Z','VISA','411111','1111','1951-01-01','2019-05-22 18:30:29'),(79,11,'CUS-DIARC9L73B6N','Paulo Roberto','paulo@gmail.com',NULL,31,123456789,0,'01224202686','13465400','Rua Alvaro Ribeiro','1324','','Vila Rehder','Americana','SP','BRA','CRC-CJ2Z48PJY71T','VISA','411111','1111','1951-01-01','2019-05-22 18:31:44'),(80,11,'CUS-J116BJI59X1J','Paulo Roberto','paulo@gmail.com',NULL,31,123456789,0,'01224202686','13465400','Rua Alvaro Ribeiro','1324','','Vila Rehder','Americana','SP','BRA','CRC-V6AT4LW6SVH6','VISA','411111','1111','1951-01-01','2019-05-22 18:32:01'),(81,11,'CUS-H0Q9AFBL2SNU','Paulo Roberto','paulo@gmail.com',NULL,31,123456789,0,'01224202686','13465400','Rua Alvaro Ribeiro','1324','','Vila Rehder','Americana','SP','BRA','CRC-NB87Z7EQW8ST','VISA','411111','1111','1951-01-01','2019-05-22 18:32:15'),(82,11,'CUS-7KT2AIQRRV7U','Paulo Roberto','paulo@gmail.com',NULL,31,123456789,0,'01224202686','13465400','Rua Alvaro Ribeiro','1324','','Vila Rehder','Americana','SP','BRA','CRC-FG8X3GCIU7Z3','VISA','411111','1111','1951-01-01','2019-05-22 18:37:25'),(83,36,'CUS-GDFH409VVAHL','STATUTIRICARADO DD M','statuti@hotmail.com',55,13,0,127,'01224202686','30160037','Rua Alvaro','1500','31321','Lourdes','Belo Horizonte','MG','BRA','CRC-AKMPOFUIAB6Z','VISA','411111','1111','1968-05-05','2019-05-22 20:06:38'),(84,36,'CUS-W4KCEJQJPA70','STATUTIRICARADO DD M','statuti@hotmail.com',55,13,0,127,'01224202686','30160037','Rua Alvaro','1500','31321','Lourdes','Belo Horizonte','MG','BRA','CRC-COW54CX18U7D','VISA','411111','1111','1968-05-05','2019-05-22 20:07:54'),(85,36,'CUS-8QWQC8LPJPF8','STATUTIRICARADO DD M','statuti@hotmail.com',55,13,0,127,'01224202686','30160037','Rua Alvaro','1500','31321','Lourdes','Belo Horizonte','MG','BRA','CRC-82ZI408KKQE6','VISA','411111','1111','1968-05-05','2019-05-22 20:09:18'),(86,36,'CUS-KZJ1DF4QBN76','STATUTIRICARADO DD M','statuti@hotmail.com',55,13,0,127,'01224202686','30160037','Rua Alvaro','1500','31321','Lourdes','Belo Horizonte','MG','BRA','CRC-739K1FNOL5DO','VISA','411111','1111','1968-05-05','2019-05-22 20:10:02'),(87,36,'CUS-04EAHJC22WO6','STATUTIRICARADO DD M','statuti@hotmail.com',55,13,0,127,'01224202686','30160037','Rua Alvaro','1500','31321','Lourdes','Belo Horizonte','MG','BRA','CRC-679787H4PCJ8','VISA','411111','1111','1968-05-05','2019-05-22 20:10:54'),(88,36,'CUS-95O05CJ0PZBL','STATUTIRICARADO DD M','statuti@hotmail.com',55,13,0,127,'01224202686','30160037','Rua Alvaro','1500','31321','Lourdes','Belo Horizonte','MG','BRA','CRC-OLWJDH9BKUE5','VISA','411111','1111','1968-05-05','2019-05-22 20:12:23'),(89,36,'CUS-YTSF28GI68J3','STATUTIRICARADO DD M','statuti@hotmail.com',55,13,0,127,'01224202686','30160037','Rua Alvaro','1500','31321','Lourdes','Belo Horizonte','MG','BRA','CRC-52QXRZ8TUXUS','VISA','411111','1111','1968-05-05','2019-05-22 20:13:39'),(90,36,'CUS-SQ1AD1YCBYEM','STATUTIRICARADO DD M','statuti@hotmail.com',55,13,0,127,'01224202686','30160037','Rua Alvaro','1500','31321','Lourdes','Belo Horizonte','MG','BRA','CRC-D8P8PJ3WH1FX','VISA','411111','1111','1968-05-05','2019-05-22 20:14:19'),(91,36,'CUS-RASCTSLI4V6T','STATUTIRICARADO DD M','statuti@hotmail.com',55,13,0,127,'01224202686','30160037','Rua Alvaro','1500','31321','Lourdes','Belo Horizonte','MG','BRA','CRC-V516BDCS49O8','VISA','411111','1111','1968-05-05','2019-05-22 20:14:43'),(92,36,'CUS-0HMRO5R2O021','STATUTIRICARADO DD M','statuti@hotmail.com',55,13,0,127,'01224202686','30160037','Rua Alvaro','1500','31321','Lourdes','Belo Horizonte','MG','BRA','CRC-DDWITKIRB99D','VISA','411111','1111','1968-05-05','2019-05-22 20:15:29'),(93,36,'CUS-LYRSLG9CR9VR','STATUTIRICARADO DD M','statuti@hotmail.com',55,13,0,127,'01224202686','30160037','Rua Alvaro','1500','31321','Lourdes','Belo Horizonte','MG','BRA','CRC-TKY3DGF2S3GQ','VISA','411111','1111','1968-05-05','2019-05-22 20:15:41'),(94,36,'CUS-BLBSZX0G5VF9','STATUTIRICARADO DD M','statuti@hotmail.com',55,13,0,127,'01224202686','30160037','Rua Alvaro','1500','31321','Lourdes','Belo Horizonte','MG','BRA','CRC-NDPW1Z1T5P5L','VISA','411111','1111','1968-05-05','2019-05-22 20:16:12'),(95,36,'CUS-9J5PZWG2CMVA','STATUTIRICARADO DD M','statuti@hotmail.com',55,13,0,127,'01224202686','30160037','Rua Alvaro','1500','31321','Lourdes','Belo Horizonte','MG','BRA','CRC-H9GIS3CJ7WY0','VISA','411111','1111','1968-05-05','2019-05-22 20:16:30'),(96,36,'CUS-X30JMWRMTQHM','STATUTIRICARADO DD M','statuti@hotmail.com',55,13,0,127,'01224202686','30160037','Rua Alvaro','1500','31321','Lourdes','Belo Horizonte','MG','BRA','CRC-TYQUSEEF63X9','VISA','411111','1111','1968-05-05','2019-05-22 20:49:07'),(97,36,'CUS-BU5DZ4YQW2YO','STATUTIRICARADO DD M','statuti@hotmail.com',55,13,0,127,'01224202686','30160037','Rua Alvaro','1500','31321','Lourdes','Belo Horizonte','MG','BRA','CRC-JX8QUD32KCF7','VISA','411111','1111','1968-05-05','2019-05-22 20:49:38'),(98,36,'CUS-R84W4HEWINPZ','STATUTIRICARADO DD M','statuti@hotmail.com',55,13,0,127,'01224202686','30160037','Rua Alvaro','1500','31321','Lourdes','Belo Horizonte','MG','BRA','CRC-ERBGE2HGQ10U','VISA','411111','1111','1968-05-05','2019-05-22 20:50:03'),(99,36,'CUS-X55W0QVYIJ49','STATUTIRICARADO DD M','statuti@hotmail.com',55,13,0,127,'01224202686','30160037','Rua Alvaro','1500','31321','Lourdes','Belo Horizonte','MG','BRA','CRC-9A5BR1899TEU','VISA','411111','1111','1968-05-05','2019-05-22 20:50:45'),(100,36,'CUS-LYHNRVBLBPLF','STATUTIRICARADO DD M','statuti@hotmail.com',55,13,0,127,'01224202686','30160037','Rua Alvaro','1500','31321','Lourdes','Belo Horizonte','MG','BRA','CRC-N3K89NZWHMO7','VISA','411111','1111','1968-05-05','2019-05-22 20:52:09'),(101,36,'CUS-1TUOJ7Q69YVR','STATUTIRICARADO DD M','statuti@hotmail.com',55,13,0,127,'01224202686','30160037','Rua Alvaro','1500','31321','Lourdes','Belo Horizonte','MG','BRA','CRC-QKXF7KKPV464','VISA','411111','1111','1968-05-05','2019-05-22 20:52:39'),(102,36,'CUS-N2IVWY65KG0L','STATUTIRICARADO DD M','statuti@hotmail.com',55,13,0,127,'01224202686','30160037','Rua Alvaro','1500','31321','Lourdes','Belo Horizonte','MG','BRA','CRC-DIW0TSXHASHB','VISA','411111','1111','1968-05-05','2019-05-22 20:53:45'),(103,36,'CUS-HXXJ8B0XIOD3','STATUTIRICARADO DD M','statuti@hotmail.com',55,13,0,127,'01224202686','30160037','Rua Alvaro','1500','31321','Lourdes','Belo Horizonte','MG','BRA','CRC-L4EJY1QTGSHD','VISA','411111','1111','1968-05-05','2019-05-22 20:54:00'),(104,36,'CUS-8LOT961JMPJ2','STATUTIRICARADO DD M','statuti@hotmail.com',55,13,0,127,'01224202686','30160037','Rua Alvaro','1500','31321','Lourdes','Belo Horizonte','MG','BRA','CRC-FQAX6K7TXHIE','VISA','411111','1111','1968-05-05','2019-05-22 20:54:23'),(105,36,'CUS-9C654QWRBVU5','STATUTIRICARADO DD M','statuti@hotmail.com',55,13,0,127,'01224202686','30160037','Rua Alvaro','1500','31321','Lourdes','Belo Horizonte','MG','BRA','CRC-YFEHU55O0GSY','VISA','411111','1111','1968-05-05','2019-05-22 20:55:53'),(106,36,'CUS-I7H0BJ0RW21V','STATUTIRICARADO DD M','statuti@hotmail.com',55,13,0,127,'01224202686','30160037','Rua Alvaro','1500','31321','Lourdes','Belo Horizonte','MG','BRA','CRC-OVKLXK8E2T81','VISA','411111','1111','1968-05-05','2019-05-22 20:57:41'),(107,36,'CUS-8RPP9YXBQAO0','STATUTIRICARADO DD M','statuti@hotmail.com',55,13,0,127,'01224202686','30160037','Rua Alvaro','1500','31321','Lourdes','Belo Horizonte','MG','BRA','CRC-IBFWR3UFZ1GK','VISA','411111','1111','1968-05-05','2019-05-22 20:58:18'),(108,36,'CUS-W041H413RL5W','STATUTIRICARADO DD M','statuti@hotmail.com',55,13,0,127,'01224202686','30160037','Rua Alvaro','1500','31321','Lourdes','Belo Horizonte','MG','BRA','CRC-VYG1YKC1ABRM','VISA','411111','1111','1968-05-05','2019-05-22 20:58:46'),(109,36,'CUS-Q07I9HKTFRUN','STATUTIRICARADO DD M','statuti@hotmail.com',55,13,0,127,'01224202686','30160037','Rua Alvaro','1500','31321','Lourdes','Belo Horizonte','MG','BRA','CRC-UPT3BFVY1CWD','VISA','411111','1111','1968-05-05','2019-05-22 21:06:52'),(110,36,'CUS-PUHPWVLO01F3','STATUTIRICARADO DD M','statuti@hotmail.com',55,13,0,127,'01224202686','30160037','Rua Alvaro','1500','31321','Lourdes','Belo Horizonte','MG','BRA','CRC-D6JAITM0SKQL','VISA','411111','1111','1968-05-05','2019-05-22 21:07:19'),(111,36,'CUS-42KV1MO5YGN1','MAUR AUR','maur@hotmail.com',55,31,0,127,'01224202686','30160037','Rua Al','500','11','Lour','Belo Horizonte','MG','BRA','CRC-XL6ANRPXYF1S','VISA','411111','1111','1985-12-12','2019-05-22 21:09:47'),(112,36,'CUS-EWI7B3BL3Y9A','MARIO SAN','san@maio.com',55,13,0,127,'01224202686','13465400','Rua Alvaro','1757','1212121','Vila','Americana','SP','BRA','CRC-51KPJ917TFZR','VISA','411111','1111','1980-02-02','2019-05-22 21:18:26'),(113,36,'CUS-ASQDRFR8CV1Q','MARIO SAN','san@maio.com',55,13,0,127,'01224202686','13465400','Rua Alvaro','1757','1212121','Vila','Americana','SP','BRA','CRC-AR84HB7VVGPA','VISA','411111','1111','1980-02-02','2019-05-22 21:21:42'),(114,36,'CUS-F8USBUP1AJGC','MARIO SAN','san@maio.com',55,13,0,127,'01224202686','13465400','Rua Alvaro','1757','1212121','Vila','Americana','SP','BRA','CRC-64N0AHN58J5K','VISA','411111','1111','1980-02-02','2019-05-22 21:23:00'),(115,36,'CUS-6SJJSTU0ONK8','MARIO SAN','san@maio.com',55,13,0,127,'01224202686','13465400','Rua Alvaro','1757','1212121','Vila','Americana','SP','BRA','CRC-7NRJKZWPC09B','VISA','411111','1111','1980-02-02','2019-05-22 21:23:59'),(116,36,'CUS-OMETPCPSBKR4','PAULO RNC LARA','lara@lara.com',55,31,0,127,'01224202686','13465400','Rua Al','123','123','Luca','Americana','SP','BRA','CRC-9VQ1EMHVMSI3','VISA','411111','1111','1980-01-01','2019-05-22 21:26:09'),(117,36,'CUS-YDYVELVSNBHE','PAULO RNC LARA','lara@lara.com',55,31,0,127,'01224202686','13465400','Rua Al','123','123','Luca','Americana','SP','BRA','CRC-L18Z6BWSGFA7','VISA','411111','1111','1980-01-01','2019-05-22 21:27:28'),(118,36,'CUS-82VNEN5DHY3M','PAULO RNC LARA','lara@lara.com',55,31,0,127,'01224202686','13465400','Rua Al','123','123','Luca','Americana','SP','BRA','CRC-ONTVI1MZGZH9','VISA','411111','1111','1980-01-01','2019-05-22 21:27:55'),(119,36,'CUS-6XUDUHYR5IJU','LAUR ASC','lare@hotmail.com',55,31,0,127,'01224202686','13465400','Alvaro','123','1','Lour','Americana','SP','BRA','CRC-JNG3TJ12YMNS','VISA','411111','1111','1987-07-07','2019-05-22 21:30:49'),(120,36,'CUS-90AVC5HKIYKX','LAUR ASC','lare@hotmail.com',55,31,0,127,'01224202686','13465400','Alvaro','123','1','Lour','Americana','SP','BRA','CRC-HMYJ2E4T8W94','VISA','411111','1111','1987-07-07','2019-05-22 21:31:55'),(121,36,'CUS-ZC51GWK8T9WZ','LAUR ASC','lare@hotmail.com',55,31,0,127,'01224202686','13465400','Alvaro','123','1','Lour','Americana','SP','BRA','CRC-R6TYDV5GICGF','VISA','411111','1111','1987-07-07','2019-05-22 21:32:20'),(122,36,'CUS-BY0EOUHX59XC','LAUR ASC','lare@hotmail.com',55,31,0,127,'01224202686','13465400','Alvaro','123','1','Lour','Americana','SP','BRA','CRC-LRGMKNRTW9OA','VISA','411111','1111','1987-07-07','2019-05-22 21:32:38'),(123,36,'CUS-CR0VYOZBR0LC','LOURO LOURO','louro@hotmail.com',55,13,0,127,'01224202686','13465400','Avenida Louro','123','123','Louro','Americana','SP','BRA','CRC-8DIXS7U3XGWM','VISA','411111','1111','1945-05-05','2019-05-22 21:34:12'),(124,36,'CUS-IT67LK6FFZNA','LOURO LOURO','louro@hotmail.com',55,13,0,127,'01224202686','13465400','Avenida Louro','123','123','Louro','Americana','SP','BRA','CRC-T28PR14XQM4B','VISA','411111','1111','1945-05-05','2019-05-22 21:36:56'),(125,36,'CUS-V62LOPKV3LQ8','FRANDCISCO S','fran@gmail.com',55,31,0,127,'01224202686','13465400','Rua Sao Francisco','123','123','Francisco','Americana','SP','BRA','CRC-I7YRGVSR3RE7','VISA','411111','1111','1950-01-01','2019-05-22 21:42:57'),(126,36,'CUS-RYUZQFHFBPX3','ALVARO ALVA','alv@gmail.com',55,31,0,127,'01224202686','13465400','Alvaro','123','123','Alvaro','Americana','SP','BRA','CRC-45K1LYM7CXGJ','VISA','411111','1111','1990-09-09','2019-05-22 21:44:17'),(127,36,'CUS-1Z07X36B0RFR','PAULO TESTE','pauloteste@teste.com',55,31,0,127,'01224202686','13465400','Rua Teste','321','321','Teste','Americana','SP','BRA','CRC-3X9INKMK8SDE','VISA','411111','1111','1950-05-05','2019-05-22 21:55:00'),(128,38,'CUS-2Y3F9VCZLYFH','Ludmila Santos','lusantos@hotmail.com',55,31,123456789,0,'01224202686','30160037','Praca do Papa','1000','1001','Serra','Belo Horizonte','MG','BRA','CRC-CMAXOJCF0502','VISA','411111','1111','1999-09-09','2019-05-23 00:24:49'),(129,38,'CUS-ZX24FRTLZ0LN','Ludmila Santos','lusantos@hotmail.com',55,31,123456789,0,'01224202686','30160037','Praca do Papa','1000','1001','Serra','Belo Horizonte','MG','BRA','CRC-VLQ014E9JD1K','VISA','411111','1111','1999-09-09','2019-05-23 00:25:58'),(130,38,'CUS-XC2FXR4Z3SRP','Ludmila Santos','lusantos@hotmail.com',55,31,123456789,0,'01224202686','30160037','Praca do Papa','1000','1001','Serra','Belo Horizonte','MG','BRA','CRC-D55ZTQL6B1BO','VISA','411111','1111','1999-09-09','2019-05-23 00:26:51'),(131,38,'CUS-4F7SB34PT66E','Ludmila Santos','lusantos@hotmail.com',55,31,123456789,0,'01224202686','30160037','Praca do Papa','1000','1001','Serra','Belo Horizonte','MG','BRA','CRC-5MKXPMQOGIJT','VISA','411111','1111','1999-09-09','2019-05-23 00:27:31'),(132,38,'CUS-66226RTH571Z','Ludmila Santos','lusantos@hotmail.com',55,31,123456789,0,'01224202686','30160037','Praca do Papa','1000','1001','Serra','Belo Horizonte','MG','BRA','CRC-C9SWH4F4FQTS','VISA','411111','1111','1999-09-09','2019-05-23 00:29:34'),(133,38,'CUS-G3PA03IU6RZ4','Ludmila Santos','lusantos@hotmail.com',55,31,123456789,0,'01224202686','30160037','Praca do Papa','1000','1001','Serra','Belo Horizonte','MG','BRA','CRC-7DDPEYBVQWFL','VISA','411111','1111','1999-09-09','2019-05-23 00:31:29'),(134,38,'CUS-C777THDF78KQ','LUDMILA Z','lusantos@hotmail.com',55,31,0,127,'01224202686','13465400','Rua Alvaro','1500','1500','Kalil','Americana','SP','BRA','CRC-V3U97CG2SNHQ','VISA','411111','1111','1999-09-09','2019-05-23 00:41:03'),(135,38,'CUS-G33I6Y653IJT','LUDMILA Z','lusantos@hotmail.com',55,31,0,127,'01224202686','13465400','Rua Alvaro','1500','1500','Kalil','Americana','SP','BRA','CRC-06C6EWG8AXV7','VISA','411111','1111','1999-09-09','2019-05-23 00:43:36'),(136,38,'CUS-QFOI5Q5A8RX8','LUDMILA Z','lusantos@hotmail.com',55,31,0,127,'01224202686','13465400','Rua Alvaro','1500','1500','Kalil','Americana','SP','BRA','CRC-ARKA4KA06T0R','VISA','411111','1111','1999-09-09','2019-05-23 00:44:41'),(137,38,'CUS-X54HYBSJGMEP','LUDMILA Z','lusantos@hotmail.com',55,31,0,127,'01224202686','13465400','Rua Alvaro','1500','1500','Kalil','Americana','SP','BRA','CRC-PTZZPFJ3UCNM','VISA','411111','1111','1999-09-09','2019-05-23 00:45:01'),(138,38,'CUS-OQIF47GU6ULK','LUDMILA Z','lusantos@hotmail.com',55,31,0,127,'01224202686','13465400','Rua Alvaro','1500','1500','Kalil','Americana','SP','BRA','CRC-5GI05U0Z16K4','VISA','411111','1111','1999-09-09','2019-05-23 00:45:30'),(139,38,'CUS-19EOPKYI1VUA','LUDMILA SA','lusantos@hotmail.com',55,31,0,127,'01224202686','13465400','Alvaro','21321','321321','Floresta','Americana','SP','BRA','CRC-QPHY1V51FR3O','VISA','411111','1111','1999-09-09','2019-05-23 00:47:14'),(140,38,'CUS-D1KF9Z5ZJQJT','LOUCA CKA','graca@gmail.com',55,31,0,127,'01224202686','13465400','Alvaro Motya','2321','123','Louka','Americana','SP','BRA','CRC-30T245PU5R02','VISA','411111','1111','1999-09-01','2019-05-23 03:03:05'),(141,38,'CUS-T3MLCM3MXL5E','JOSE P','ojose@gmail.com',55,31,0,127,'01224202686','30160037','Rua Espirito','500','13','Lourdes','Belo Horizonte','MG','BRA','CRC-H1J3CIA8LOTV','VISA','411111','1111','1980-02-23','2019-05-23 03:05:30'),(142,39,'CUS-LO94LOSX3655','Luiz Felipe','luiz@gmail.com',55,31,123456789,0,'01224202686','13465400','Rua Alvaro Ribeiro','401','1700','Major','Americana','SP','BRA','CRC-7CW36MJU6JRE','VISA','411111','1111','1987-01-01','2019-05-23 03:11:00'),(143,39,'CUS-S3O8D0ZZY1YF','LOYOLA LO','loyola@gmail.com',55,31,0,127,'01224202686','13465400','Inacio Loyola','100','102','Inacio','Americana','SP','BRA','CRC-M2X9G5XW9G67','VISA','411111','1111','1954-01-01','2019-05-23 03:14:54'),(144,39,'CUS-N5GRGVW9YT8C','LOYOLA LO','loyola@gmail.com',55,31,0,127,'01224202686','13465400','Inacio Loyola','100','102','Inacio','Americana','SP','BRA','CRC-0S8J9UBZRC73','VISA','411111','1111','1954-01-01','2019-05-23 03:15:48'),(145,39,'CUS-L9B1GSNR5KY1','LUCIO MO','lu@lu.com',55,31,0,127,'01224202686','13465400','Alvaro Rib','200','2','Lourdes','Americana','SP','BRA','CRC-OU3TJ4NYWJ2P','VISA','411111','1111','1987-07-07','2019-05-23 03:21:21'),(146,39,'CUS-KBVZEYP7PV4N','LUCIO MO','lu@lu.com',55,31,0,127,'01224202686','13465400','Alvaro Rib','200','2','Lourdes','Americana','SP','BRA','CRC-071BSQY5NMZL','VISA','411111','1111','1987-07-07','2019-05-23 03:21:45'),(147,39,'CUS-5QER7R0QP9PI','LUCIO MO','lu@lu.com',55,31,0,127,'01224202686','13465400','Alvaro Rib','200','2','Lourdes','Americana','SP','BRA','CRC-5E4MCHYR24OI','VISA','411111','1111','1987-07-07','2019-05-23 03:22:19'),(148,39,'CUS-4EZK6RVS03RG','LUCIO MO','lu@lu.com',55,31,0,127,'01224202686','13465400','Alvaro Rib','200','2','Lourdes','Americana','SP','BRA','CRC-8R4K973PKNV8','VISA','411111','1111','1987-07-07','2019-05-23 03:22:57'),(149,39,'CUS-WB34EW9O11UI','LUCIO MO','lu@lu.com',55,31,0,127,'01224202686','13465400','Alvaro Rib','200','2','Lourdes','Americana','SP','BRA','CRC-BDOSRMGMC7VD','VISA','411111','1111','1987-07-07','2019-05-23 03:24:16'),(150,40,'CUS-XEP1QB7SIWWH','Mario Lucio','mariolucio@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Cesar','147','147','Cesar','Belo Horizonte','MG','BRA','CRC-J8T2W6RMGS45','VISA','411111','1111','1980-02-02','2019-05-23 03:28:52'),(151,40,'CUS-N93DETW72Q5M','LUCIO MOR','lucio@gmail.com',55,31,0,127,'01224202686','13465400','Rua Lucio Moraes','132','321','Lucio','Americana','SP','BRA','CRC-GNLEHROSRHEC','VISA','411111','1111','1954-10-10','2019-05-23 03:31:21'),(152,40,'CUS-C0SDO2PRBGYA','RIB RIB','rib@rib.com',55,31,0,127,'01224202686','13465400','Rua Alvaro Rib','1234','321','Rib','Americana','SP','BRA','CRC-R1J2AHJ1XI06','VISA','411111','1111','1954-01-03','2019-05-23 03:33:11'),(153,40,'CUS-17F3CTR4VTRE','KILL BILL','killbill@bill.com',55,31,0,127,'01224202686','13465400','Rua Alvaro Lucio','1234','31','Americo','Americana','SP','BRA','CRC-XI0RSQTH5HXM','VISA','411111','1111','1954-10-10','2019-05-23 03:34:44'),(154,41,'CUS-50TNDT3FW93B','Marina Silva','marina@gmail.com',55,31,123456789,0,'01224202686','13465400','Rua Lougra','123','132','Logra','Americana','SP','BRA','CRC-8ECW4K68L32U','VISA','411111','1111','1954-01-04','2019-05-23 03:49:30'),(155,41,'CUS-2OFFL7EKACRY','LOGRA LOGRA','paulo@p.com',55,31,0,127,'01224202686','13465400','Rua Logra','123','321','Logra','Americana','SP','BRA','CRC-1AS5M3CQGBGM','VISA','411111','1111','1950-05-05','2019-05-23 03:54:56'),(156,41,'CUS-ELHD9ZSZMF1I','LOGRA LO','logra@gmail.com',55,31,0,127,'01224202686','13456400','Rua Logra Logra','123','321','Logra','Americana','SP','BRA','CRC-U624BINEIX16','VISA','411111','1111','1980-02-22','2019-05-23 03:57:10'),(157,36,'CUS-M1M5NACDHELY','Aluisio Nunes','aluision@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Espirito Santo','100','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','BRA','CRC-US6BD38DXUG4','VISA','411111','1111','1980-01-01','2019-05-24 12:33:37'),(158,36,'CUS-3VEJ40RZ6GOJ','Aluisio Nunes','aluision@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Espirito Santo','100','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','BRA','CRC-Z88RSBRVGURN','VISA','411111','1111','1980-01-01','2019-05-24 12:36:23'),(159,36,'CUS-TN5U42F2N62Z','Aluisio Nunes','aluision@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Espirito Santo','100','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','BRA','CRC-UX6II1B9QE5S','VISA','411111','1111','1980-01-01','2019-05-24 12:38:53'),(160,36,'CUS-7UG015VVXOCU','Aluisio Nunes','aluision@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Espirito Santo','100','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','BRA','CRC-GDAX4ILCVCQ6','VISA','411111','1111','1980-01-01','2019-05-24 12:45:49'),(161,36,'CUS-R6K7AHWTZIXZ','Aluisio Nunes','aluision@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Espirito Santo','100','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','BRA','CRC-CYSUPCBL775Y','VISA','411111','1111','1980-01-01','2019-05-24 12:46:23'),(162,36,'CUS-SAH2MUIEPLJZ','Ricciardo Santana','santana@hotmail.com',55,31,123456789,0,'01224202686','13465400','Rua Alvaro Ribeiro','100','1000','Vila Rehder','Americana','SP','BRA','CRC-YAXTTJLSKGP2','VISA','411111','1111','1987-07-07','2019-05-24 13:16:28'),(163,36,'CUS-258FZ2ODAJ02','Dyer Kanker','yer@yer.com',55,31,123456789,0,'01224202686','13465400','Rua Alvaro Ribeiro','400','41','Vila Rehder','Americana','SP','BRA','CRC-BN0O54AEYQ0E','VISA','411111','1111','1980-01-01','2019-05-25 22:34:42'),(164,36,'CUS-4S6WKDBA3AV9','Dyer Kanker','yer@yer.com',55,31,123456789,0,'01224202686','13465400','Rua Alvaro Ribeiro','400','41','Vila Rehder','Americana','SP','BRA','CRC-646VVEQHRTNK','VISA','411111','1111','1980-01-01','2019-05-25 22:35:58'),(165,36,'CUS-5ZJ2KSHUYI3U','Dyer Kanker','yer@yer.com',55,31,123456789,0,'01224202686','13465400','Rua Alvaro Ribeiro','400','41','Vila Rehder','Americana','SP','BRA','CRC-UC2BBUE3W3NN','VISA','411111','1111','1980-01-01','2019-05-25 22:38:10'),(166,36,'CUS-PPQP72OG8GRO','Jose Pires','paulowebphp@gmail.com',55,31,123456789,0,'01224202686','13465400','Rua Alvaro Ribeiro','10000','1','Vila Rehder','Americana','SP','BRA','CRC-Q32P8FHO9H7W','VISA','411111','1111','1980-04-01','2019-05-25 22:41:01'),(167,36,'CUS-GWCZONSKDP8U','EU SOU EU','paulowebphp@gmail.com',55,31,0,127,'01224202686','13465400','Rua Alvaro','123','123','Americana','Americana','SP','BRA','CRC-RIFVHWQJ6OHU','VISA','411111','1111','1980-02-02','2019-05-25 23:09:38'),(168,36,'CUS-R1LHKL90CW65','EU SOU EU','paulowebphp@gmail.com',55,31,0,127,'01224202686','13465400','Rua Alvaro','123','123','Americana','Americana','SP','BRA','CRC-9DT08Z98FQNN','VISA','411111','1111','1980-02-02','2019-05-25 23:11:30'),(169,43,'CUS-7EKESJX9VLF6','Galo Pereira','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1500','15','Lourdes','Belo Horizonte','MG','BRA','CRC-JYGNUUTCC8S8','VISA','411111','1111','1950-01-01','2019-05-26 12:22:08'),(170,43,'CUS-1KB6C7HAGRRL','Galo Pereira','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1500','15','Lourdes','Belo Horizonte','MG','BRA','CRC-QW94TV1OZB6X','VISA','411111','1111','1950-01-01','2019-05-26 14:06:10'),(171,67,'CUS-Z9CO3NJWWB54','Ronaldinho Gaucho','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','31','31','Lourdes','Belo Horizonte','MG','BRA','CRC-CAFTE82XIOIU','VISA','411111','1111','1980-02-02','2019-05-26 16:35:43'),(172,67,'CUS-OOAWPXYC4DBS','Ronaldinho Gaucho','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','31','31','Lourdes','Belo Horizonte','MG','BRA','CRC-NEWVOFMZJ5UH','VISA','411111','1111','1980-02-02','2019-05-26 16:37:24'),(173,67,'CUS-XKOEZ7ZT47G3','Ronaldinho Gaucho','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','31','31','Lourdes','Belo Horizonte','MG','BRA','CRC-WQMMMJZJWQ2W','VISA','411111','1111','1980-02-02','2019-05-26 16:37:47'),(174,67,'CUS-8OU7K27FH45O','Ronaldinho Gaucho','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','31','31','Lourdes','Belo Horizonte','MG','BRA','CRC-I3GGSXB6O65F','VISA','411111','1111','1980-02-02','2019-05-26 16:41:23'),(175,67,'CUS-ZZN5A7S4D7QR','Ronaldinho Gaucho','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','31','31','Lourdes','Belo Horizonte','MG','BRA','CRC-78H9UEAPN7N1','VISA','411111','1111','1980-02-02','2019-05-26 16:42:40'),(176,67,'CUS-SR1WSDGA37A6','Ronaldinho Gaucho','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','31','31','Lourdes','Belo Horizonte','MG','BRA','CRC-OZAWI07S2889','VISA','411111','1111','1980-02-02','2019-05-26 17:49:51'),(177,67,'CUS-QPOR3EY4Y0V4','Ronaldinho Gaucho','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','31','31','Lourdes','Belo Horizonte','MG','BRA','CRC-F31AO32DEVWV','VISA','411111','1111','1980-02-02','2019-05-26 17:50:48'),(178,67,'CUS-91F5J1P9AU4K','Ronaldinho Gaucho','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','31','31','Lourdes','Belo Horizonte','MG','BRA','CRC-OVXC51TLLK0D','VISA','411111','1111','1980-02-02','2019-05-26 17:52:14'),(179,67,'CUS-6JCL8HX5QW9I','Ronaldinho Gaucho','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','31','31','Lourdes','Belo Horizonte','MG','BRA','CRC-VT2S3GCD5LGM','VISA','411111','1111','1980-02-02','2019-05-26 17:54:01'),(180,67,'CUS-RGWFVAT9OLTL','Ronaldinho Gaucho','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','31','31','Lourdes','Belo Horizonte','MG','BRA','CRC-6JPG0VA39SBG','VISA','411111','1111','1980-02-02','2019-05-26 17:55:07'),(181,67,'CUS-ON9T7QSBRDAB','Ronaldinho Gaucho','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','31','31','Lourdes','Belo Horizonte','MG','BRA','CRC-538WYHF88PE0','VISA','411111','1111','1980-02-02','2019-05-26 17:55:48'),(182,67,'CUS-GX70F2T2ME97','Ronaldinho Gaucho','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','31','31','Lourdes','Belo Horizonte','MG','BRA','CRC-ZO4U3OYID633','VISA','411111','1111','1980-02-02','2019-05-26 17:59:44'),(183,67,'CUS-5J8LTCMCQGF1','Ronaldinho Gaucho','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','31','31','Lourdes','Belo Horizonte','MG','BRA','CRC-2VLVNWFHHJRC','VISA','411111','1111','1980-02-02','2019-05-26 18:00:28'),(184,67,'CUS-A1F6IAJOKHNQ','Ronaldinho Gaucho','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','31','31','Lourdes','Belo Horizonte','MG','BRA','CRC-GCB637YUJIRV','VISA','411111','1111','1980-02-02','2019-05-26 18:01:39'),(185,67,'CUS-FEVR0PVH9EL9','Ronaldinho Gaucho','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','31','31','Lourdes','Belo Horizonte','MG','BRA','CRC-IO9CWEC8ZC0I','VISA','411111','1111','1980-02-02','2019-05-26 18:02:01'),(186,67,'CUS-WPDGGW34J4FG','Ronaldinho Gaucho','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','31','31','Lourdes','Belo Horizonte','MG','BRA','CRC-UKB214LV8MGD','VISA','411111','1111','1980-02-02','2019-05-26 18:07:27'),(187,67,'CUS-SB0961EA73V8','Ronaldinho Gaucho','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','31','31','Lourdes','Belo Horizonte','MG','BRA','CRC-55GGS89BCACA','VISA','411111','1111','1980-02-02','2019-05-26 18:08:12'),(188,67,'CUS-FVZY41OR7UXG','Ronaldinho Gaucho','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','31','31','Lourdes','Belo Horizonte','MG','BRA','CRC-CWC83XBEYGR9','VISA','411111','1111','1980-02-02','2019-05-26 18:08:56'),(189,67,'CUS-XG64C518F00Q','Ronaldinho Gaucho','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','31','31','Lourdes','Belo Horizonte','MG','BRA','CRC-ZT99F0U5YH0K','VISA','411111','1111','1980-02-02','2019-05-26 18:12:40'),(190,67,'CUS-1VNM8AME1P28','Ronaldinho Gaucho','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','31','31','Lourdes','Belo Horizonte','MG','BRA','CRC-OVB35XSVIGPX','VISA','411111','1111','1980-02-02','2019-05-26 18:14:17'),(191,67,'CUS-SU41DA8FC9VH','Ronaldinho Gaucho','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','31','31','Lourdes','Belo Horizonte','MG','BRA','CRC-HSGV5UJYA8AR','VISA','411111','1111','1980-02-02','2019-05-26 18:15:14'),(192,67,'CUS-8KQA23TDFGMV','Ronaldinho Gaucho','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','31','31','Lourdes','Belo Horizonte','MG','BRA','CRC-7JIXQ4IFOEYT','VISA','411111','1111','1980-02-02','2019-05-26 18:15:38'),(193,67,'CUS-9038FHUY892T','Ronaldinho Gaucho','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','31','31','Lourdes','Belo Horizonte','MG','BRA','CRC-ZAYE0Y72IVB6','VISA','411111','1111','1980-02-02','2019-05-26 18:17:08'),(194,67,'CUS-G79NPNIH2N65','Ronaldinho Gaucho','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','31','31','Lourdes','Belo Horizonte','MG','BRA','CRC-GRLG586GE6FF','VISA','411111','1111','1980-02-02','2019-05-26 18:17:52'),(195,67,'CUS-4QXQOWB4ITP4','Ronaldinho Gaucho','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','31','31','Lourdes','Belo Horizonte','MG','BRA','CRC-YISJJWPTAXJD','VISA','411111','1111','1980-02-02','2019-05-26 18:19:05'),(196,67,'CUS-0DVIX918IDLI','Ronaldinho Gaucho','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','31','31','Lourdes','Belo Horizonte','MG','BRA','CRC-KT3U66BWSCU3','VISA','411111','1111','1980-02-02','2019-05-26 18:20:02'),(197,67,'CUS-1FP7MA2GP38U','Ronaldinho Gaucho','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','31','31','Lourdes','Belo Horizonte','MG','BRA','CRC-JWY05XCZ153N','VISA','411111','1111','1980-02-02','2019-05-26 18:22:37'),(198,67,'CUS-GS2KFW1Q76DS','Ronaldinho Gaucho','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','31','31','Lourdes','Belo Horizonte','MG','BRA','CRC-L8V8W6KD14H7','VISA','411111','1111','1980-02-02','2019-05-26 18:23:06'),(199,67,'CUS-QA0AP2QTTNAN','Ronaldinho Gaucho','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','31','31','Lourdes','Belo Horizonte','MG','BRA','CRC-B1F1RHY9MJ53','VISA','411111','1111','1980-02-02','2019-05-26 18:23:24'),(200,67,'CUS-JWI58GRFDC6B','Ronaldinho Gaucho','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','31','31','Lourdes','Belo Horizonte','MG','BRA','CRC-CYZMC1MWVPNB','VISA','411111','1111','1980-02-02','2019-05-26 18:28:54'),(201,67,'CUS-YY9OPECYZ43E','Ronaldinho Gaucho','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','31','31','Lourdes','Belo Horizonte','MG','BRA','CRC-4AUMIERC4JPJ','VISA','411111','1111','1980-02-02','2019-05-26 18:31:00'),(202,67,'CUS-63L6327SV501','Ronaldinho Gaucho','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','31','31','Lourdes','Belo Horizonte','MG','BRA','CRC-P5DWFD9T7NSF','VISA','411111','1111','1980-02-02','2019-05-26 18:31:38'),(203,67,'CUS-8X6QTFQ5NKO2','Ronaldinho Gaucho','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','31','31','Lourdes','Belo Horizonte','MG','BRA','CRC-6FCESWATBWBS','VISA','411111','1111','1980-02-02','2019-05-26 18:33:13'),(204,67,'CUS-45ZFQ2Z9BSIE','Ronaldinho Gaucho','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','31','31','Lourdes','Belo Horizonte','MG','BRA','CRC-Y4ZV2MZLSIKK','VISA','411111','1111','1980-02-02','2019-05-26 18:34:39'),(205,67,'CUS-4XDOTUH4763F','Ronaldinho Gaucho','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','31','31','Lourdes','Belo Horizonte','MG','BRA','CRC-40WMZ1FSJFCI','VISA','411111','1111','1980-02-02','2019-05-26 18:35:13'),(206,67,'CUS-3JRU02WBT2IH','Ronaldinho Gaucho','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','31','31','Lourdes','Belo Horizonte','MG','BRA','CRC-LYPIM4WSXY6F','VISA','411111','1111','1980-02-02','2019-05-26 18:35:38'),(207,67,'CUS-EMIGD3EAP9KR','Ronaldinho Gaucho','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','31','31','Lourdes','Belo Horizonte','MG','BRA','CRC-4P0VXH7ED3JV','VISA','411111','1111','1980-02-02','2019-05-26 18:36:29'),(208,67,'CUS-J17BM2ZJGUPH','Jose Paulo','paulowebphp@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Espirito Santo','1000','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','BRA','CRC-ZB88DGHPN277','VISA','411111','1111','1987-01-02','2019-05-26 20:21:16'),(209,67,'CUS-BZOWEPI37AQH','Jose Paulo','paulowebphp@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Espirito Santo','1000','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','BRA','CRC-TK2406UYXDTB','VISA','411111','1111','1987-01-02','2019-05-26 20:27:16'),(210,67,'CUS-B9MPNZC6WN4Q','Jose Paulo','paulowebphp@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Espirito Santo','1000','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','BRA','CRC-JKSPYE84BGA6','VISA','411111','1111','1987-01-02','2019-05-26 20:27:47'),(211,67,'CUS-HOT8XBYH8FVX','Jose Paulo','paulowebphp@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Espirito Santo','1000','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','BRA','CRC-AJC5OS6BR5SL','VISA','411111','1111','1987-01-02','2019-05-26 20:28:04'),(212,67,'CUS-5XAPT80OYA75','Jose Paulo','paulowebphp@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Espirito Santo','1000','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','BRA','CRC-B5PWW5C7S82J','VISA','411111','1111','1987-01-02','2019-05-26 20:28:40'),(213,67,'CUS-H2QAJ00OTV7C','Jose Paulo','paulowebphp@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Espirito Santo','1000','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','BRA','CRC-V2OM68X7IO50','VISA','411111','1111','1987-01-02','2019-05-26 20:31:41'),(214,67,'CUS-KLNIY0O5BRQH','Jose Paulo','paulowebphp@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Espirito Santo','1000','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','BRA','CRC-KCJPGR1V2CSR','VISA','411111','1111','1987-01-02','2019-05-26 20:32:15'),(215,67,'CUS-CT2I0VGBBXDG','Jose Paulo','paulowebphp@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Espirito Santo','1000','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','BRA','CRC-GUKNQ0WT7MOV','VISA','411111','1111','1987-01-02','2019-05-26 20:36:04'),(216,67,'CUS-4HN01U8VXF59','Jose Paulo','paulowebphp@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Espirito Santo','1000','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','BRA','CRC-N5KEJ4J0GHXM','VISA','411111','1111','1987-01-02','2019-05-26 20:36:30'),(217,67,'CUS-JFFVZVWIUWEY','Jose Paulo','paulowebphp@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Espirito Santo','1000','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','BRA','CRC-FO18ZUE92KXX','VISA','411111','1111','1987-01-02','2019-05-26 20:37:53'),(218,67,'CUS-3NF81WKZ4JTG','JOSE P','paulowebphp@gmail.com',55,31,123456789,0,'01224202686','13465400','Rua Alvaro Ribeiro','100','10','Vila Rehder','Americana','SP','BRA','CRC-5NC7OMW96A5Q','VISA','411111','1111','1980-01-01','2019-05-27 13:50:08'),(219,67,'CUS-11KPLJYO0WIR','JOSE P','paulowebphp@gmail.com',55,31,123456789,0,'01224202686','13465400','Rua Alvaro Ribeiro','100','10','Vila Rehder','Americana','SP','BRA','CRC-BAUO6IYZJQS9','VISA','411111','1111','1980-01-01','2019-05-27 13:50:33'),(220,67,'CUS-0A51M2M1I3FY','JOSE P','paulowebphp@gmail.com',55,31,123456789,0,'01224202686','13465400','Rua Alvaro Ribeiro','100','10','Vila Rehder','Americana','SP','BRA','CRC-7JM0O3IJD2KI','VISA','411111','1111','1980-01-01','2019-05-27 13:50:48'),(221,67,'CUS-QOP743JEBZ7U','JOSE P','paulowebphp@gmail.com',55,31,123456789,0,'01224202686','13465400','Rua Alvaro Ribeiro','100','10','Vila Rehder','Americana','SP','BRA','CRC-LB588DUDTHU0','VISA','411111','1111','1980-01-01','2019-05-27 13:51:07'),(222,67,'CUS-1TN2MWR37555','JOSE P','paulowebphp@gmail.com',55,31,123456789,0,'01224202686','13465400','Rua Alvaro Ribeiro','100','10','Vila Rehder','Americana','SP','BRA','CRC-UEMXMXJLSIHL','VISA','411111','1111','1980-01-01','2019-05-27 13:51:30'),(223,67,'CUS-2VDFJH6RKK2P','JOSE P','paulowebphp@gmail.com',55,31,123456789,0,'01224202686','13465400','Rua Alvaro Ribeiro','100','10','Vila Rehder','Americana','SP','BRA','CRC-N4T19HTTY9YB','VISA','411111','1111','1980-01-01','2019-05-27 13:52:10'),(224,67,'CUS-YZBRB91SCH16','OUTRO COMPRADOR','paulowebphp@gmail.com',55,31,123456789,0,'01224202686','13465400','Rua Alvaro Ribeiro','100','1','Vila Rehder','Americana','SP','BRA','CRC-OR290TLWGJAY','VISA','411111','1111','1999-09-09','2019-05-27 13:55:07'),(225,67,'CUS-H7NZRKU3WI04','JHOSE PC','pÃ¡ulowebphp@gmail.com',55,31,312456789,0,'02124202386','30160037','Rua Espirito Santo','1000','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','BRA','CRC-P4VKHS5JL1Q4','VISA','411111','1111','1980-02-02','2019-05-27 14:08:43'),(226,67,'CUS-WH55AVBILERL','JOS PAULO','paulowebphp@gmail.com',55,31,123456789,0,'01224202686','13465400','Rua Alvaro Ribeiro','144','14','Vila Rehder','Americana','SP','BRA','CRC-4EBO5XL1EBFT','VISA','411111','1111','1980-01-01','2019-05-27 19:05:35'),(227,67,'CUS-CGYTZVAJMEOX','JOSE PC','paulowebphp@gmail.com',55,31,123123123,0,'01224202686','13465400','Rua Alvaro Ribeiro','100','1','Vila Rehder','Americana','SP','BRA','CRC-ASMWH5JSB624','VISA','411111','1111','1980-01-01','2019-05-27 19:07:51'),(228,67,'CUS-RC10FB8DI9NS','JOSE PC','paulowebphp@gmail.com',55,31,123456789,0,'01224202686','13465400','Rua Alvaro Ribeiro','1000','1','Vila Rehder','Americana','SP','BRA','CRC-DPTMJ888HPA7','VISA','411111','1111','1980-01-01','2019-05-27 19:09:05'),(229,67,'CUS-4CX21RLUTPB6','RON G','paulowebphp@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Espirito Santo','100','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','BRA','CRC-BW9XA9R4KSYO','VISA','411111','1111','1980-01-01','2019-05-27 19:17:55'),(230,67,'CUS-JTEKT619LUMI','Jose CP','paulowebphp@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Espirito Santo','1111','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','BRA','CRC-4EDS9FFVC4QX','VISA','411111','1111','1980-01-01','2019-05-27 20:43:57'),(231,67,'CUS-XGZTIZXO92D4','PAULO RC','paulowebphp@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Espirito Santo','1400','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','BRA','CRC-01NV0JSAFVG4','VISA','411111','1111','1980-01-01','2019-05-27 20:51:03'),(232,111,'CUS-20AWBZBOF9GI','Jorge Santana','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','500','5','Lourdes','Belo Horizonte','MG','BRA','CRC-93J5XBEOF4OS','VISA','411111','1111','1989-02-02','2019-05-28 03:05:38'),(233,111,'CUS-AF45T4J3QH3U','Jorge Santana','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','500','5','Lourdes','Belo Horizonte','MG','BRA','CRC-QO4ZB3Q78GI1','VISA','411111','1111','1989-02-02','2019-05-28 03:11:26'),(234,111,'CUS-T5W82GS7X6NK','Jorge Santana','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','500','5','Lourdes','Belo Horizonte','MG','BRA','CRC-T7ZOOOCZ5HV7','VISA','411111','1111','1989-02-02','2019-05-28 03:12:15'),(235,111,'CUS-5UYG1WO5Y3LT','Jorge Santana','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','500','5','Lourdes','Belo Horizonte','MG','BRA','CRC-XWXH7BBZVDA7','VISA','411111','1111','1989-02-02','2019-05-28 03:13:10'),(236,111,'CUS-XR1ORKR3SUCJ','Jorge Santana','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','500','5','Lourdes','Belo Horizonte','MG','BRA','CRC-C8WZK87J3BQZ','VISA','411111','1111','1989-02-02','2019-05-28 03:14:32'),(237,111,'CUS-W0JAUHB1ZJKR','Jorge Santana','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','500','5','Lourdes','Belo Horizonte','MG','BRA','CRC-CYPVO8CDZ7ZP','VISA','411111','1111','1989-02-02','2019-05-28 03:16:16'),(238,111,'CUS-SJ20YCC4DALP','Jorge Santana','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','500','5','Lourdes','Belo Horizonte','MG','BRA','CRC-99QMZOR758RU','VISA','411111','1111','1989-02-02','2019-05-28 03:18:08'),(239,111,'CUS-BSENAPOU537J','Jorge Santana','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','500','5','Lourdes','Belo Horizonte','MG','BRA','CRC-65VOCKSZIUJW','VISA','411111','1111','1989-02-02','2019-05-28 03:20:37'),(240,111,'CUS-F2W22AIGLO2I','Jorge Santana','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','500','5','Lourdes','Belo Horizonte','MG','BRA','CRC-NHF24OGXTG38','VISA','411111','1111','1989-02-02','2019-05-28 03:22:30'),(241,112,'CUS-K80YWYEAK0WP','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-G0KUXA45GCSR','VISA','411111','1111','1980-01-12','2019-05-28 03:26:55'),(242,112,'CUS-D668U4NBLFX0','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-4WCE1LGSQKV0','VISA','411111','1111','1980-01-12','2019-05-28 03:27:43'),(243,112,'CUS-KTQO4336E8YQ','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-WD01OME8VMQA','VISA','411111','1111','1980-01-12','2019-05-28 03:28:49'),(244,112,'CUS-RU3KS4V2GGSJ','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-35Q1GHXQEEWN','VISA','411111','1111','1980-01-12','2019-05-28 03:30:08'),(245,112,'CUS-XRH7F4VHJ9F6','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-OLJYQYTMCLXP','VISA','411111','1111','1980-01-12','2019-05-28 03:30:54'),(246,112,'CUS-0493FEABPGIJ','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-34H4KFDY84MS','VISA','411111','1111','1980-01-12','2019-05-28 03:31:16'),(247,112,'CUS-O783ZLCOHXG1','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-NF77KLHH3YRN','VISA','411111','1111','1980-01-12','2019-05-28 03:37:36'),(248,112,'CUS-WD13U5064S1G','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-5AZ173F4LFJQ','VISA','411111','1111','1980-01-12','2019-05-28 03:50:27'),(249,112,'CUS-VLWPDJGDS6WF','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-XN5LXRSS8W09','VISA','411111','1111','1980-01-12','2019-05-28 03:50:47'),(250,112,'CUS-OX6F5JTUUFF9','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-XX6UZPQ3V1SR','VISA','411111','1111','1980-01-12','2019-05-28 03:52:01'),(251,112,'CUS-IS3JDMVASQ3V','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-347966X00GX5','VISA','411111','1111','1980-01-12','2019-05-28 03:52:54'),(252,112,'CUS-MSZ8UZ4L8QGP','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-TD08AX932I3L','VISA','411111','1111','1980-01-12','2019-05-28 03:54:51'),(253,112,'CUS-U6O7B356C32S','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-8WHH43O2NBBE','VISA','411111','1111','1980-01-12','2019-05-28 03:55:53'),(254,67,'CUS-CPHHO2D5WSO6','Comprador compras','paulowebphp@gmail.com',55,31,123456789,0,'01224202686','13465400','Rua Alvaro','400','1','Major','São Paulo','SP','BRA','CRC-77LXNHNOQYCH','VISA','411111','1111','1980-01-01','2019-05-28 13:29:29'),(255,67,'CUS-UAGDWD59TNXX','Comprador compras','paulowebphp@gmail.com',55,31,123456789,0,'01224202686','13465400','Rua Alvaro','400','1','Major','São Paulo','SP','BRA','CRC-RC4CTXOVG9CG','VISA','411111','1111','1980-01-01','2019-05-28 13:30:44'),(256,67,'CUS-8ZT2T3T4P8ER','Comprador compras','paulowebphp@gmail.com',55,31,123456789,0,'01224202686','13465400','Rua Alvaro','400','1','Major','São Paulo','SP','BRA','CRC-3522P12S3721','VISA','411111','1111','1980-01-01','2019-05-28 13:36:41'),(257,67,'CUS-6R1A8PGIA53S','Comprador compras','paulowebphp@gmail.com',55,31,123456789,0,'01224202686','13465400','Rua Alvaro','400','1','Major','São Paulo','SP','BRA','CRC-ZU59GNW4L486','VISA','411111','1111','1980-01-01','2019-05-28 13:44:49'),(258,67,'CUS-3P2ND74GTU0Q','Comprador compras','paulowebphp@gmail.com',55,31,123456789,0,'01224202686','13465400','Rua Alvaro','400','1','Major','São Paulo','SP','BRA','CRC-AQXXR1BGCQ4P','VISA','411111','1111','1980-01-01','2019-05-28 13:45:12'),(259,67,'CUS-F6SA5GLNFBK3','Comprador compras','paulowebphp@gmail.com',55,31,123456789,0,'01224202686','13465400','Rua Alvaro','400','1','Major','São Paulo','SP','BRA','CRC-3LHM30TQB5AN','VISA','411111','1111','1980-01-01','2019-05-28 13:58:20'),(260,67,'CUS-ODJKP4UGNVOJ','Comprador compras','paulowebphp@gmail.com',55,31,123456789,0,'01224202686','13465400','Rua Alvaro','400','1','Major','São Paulo','SP','BRA','CRC-ZEPPP51BWGVW','VISA','411111','1111','1980-01-01','2019-05-28 13:59:08'),(261,67,'CUS-7EYARTHBGIMH','Comprador compras','paulowebphp@gmail.com',55,31,123456789,0,'01224202686','13465400','Rua Alvaro','400','1','Major','São Paulo','SP','BRA','CRC-ZU4D7H6CIJQV','VISA','411111','1111','1980-01-01','2019-05-28 13:59:43'),(262,67,'CUS-SMD7N1U1BS75','Comprador compras','paulowebphp@gmail.com',55,31,123456789,0,'01224202686','13465400','Rua Alvaro','400','1','Major','São Paulo','SP','BRA','CRC-ULMRQPA1ITXM','VISA','411111','1111','1980-01-01','2019-05-28 14:02:25'),(263,67,'CUS-E14UBYTVITRC','Comprador compras','paulowebphp@gmail.com',55,31,123456789,0,'01224202686','13465400','Rua Alvaro','400','1','Major','São Paulo','SP','BRA','CRC-ID25PGQ926OB','VISA','411111','1111','1980-01-01','2019-05-28 14:02:54'),(264,67,'CUS-QEO0B9R9WJHW','Comprador compras','paulowebphp@gmail.com',55,31,123456789,0,'01224202686','13465400','Rua Alvaro','400','1','Major','São Paulo','SP','BRA','CRC-YM46D3UYTUGS','VISA','411111','1111','1980-01-01','2019-05-28 14:03:43'),(265,112,'CUS-YHA9EWGACZ29','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-FW2LN8G2OGGK','VISA','411111','1111','1980-01-12','2019-05-28 14:50:53'),(266,112,'CUS-NHDWUWCBPID4','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-48DPBYD2ZD97','VISA','411111','1111','1980-01-12','2019-05-28 14:55:49'),(267,112,'CUS-2212ANQSHBOT','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-URPY74945YY1','VISA','411111','1111','1980-01-12','2019-05-28 14:56:18'),(268,112,'CUS-6TPEZ0IGQO7I','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-O3MQRI65JBZ0','VISA','411111','1111','1980-01-12','2019-05-28 14:56:45'),(269,112,'CUS-AWTKXGWQTCYQ','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-RUCJFO5OI5JD','VISA','411111','1111','1980-01-12','2019-05-28 14:57:11'),(270,112,'CUS-CN2RQYINT3TG','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-P2PHFCXUWDGJ','VISA','411111','1111','1980-01-12','2019-05-28 14:57:51'),(271,112,'CUS-MJ9G10Q865JI','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-KM5U3CT1SQ8L','VISA','411111','1111','1980-01-12','2019-05-28 14:58:29'),(272,112,'CUS-NQE2W78O0H9W','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-ND4IRXDMK9QZ','VISA','411111','1111','1980-01-12','2019-05-28 14:59:30'),(273,112,'CUS-WRNJPZ8ARR5C','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-NM4B4XJBI4AV','VISA','411111','1111','1980-01-12','2019-05-28 15:02:33'),(274,112,'CUS-DV2QBARZFXR5','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-2LC1ITP651XP','VISA','411111','1111','1980-01-12','2019-05-28 15:03:00'),(275,112,'CUS-IYX74U73UHUS','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-K00QURL6X7ZR','VISA','411111','1111','1980-01-12','2019-05-28 15:03:43'),(276,112,'CUS-5WDHOXN0D82O','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-0Y15B5YERH0R','VISA','411111','1111','1980-01-12','2019-05-28 15:04:03'),(277,112,'CUS-MMBV7DDNTC87','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-4HCXSQOQ9IK5','VISA','411111','1111','1980-01-12','2019-05-28 15:04:58'),(278,112,'CUS-Y3BFIIVTMPCQ','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-INL305PR0DZZ','VISA','411111','1111','1980-01-12','2019-05-28 15:05:47'),(279,112,'CUS-9Y05X4U10NOG','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-G9PAFQCHEZNB','VISA','411111','1111','1980-01-12','2019-05-28 15:06:06'),(280,112,'CUS-DKXH62PFHO4B','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-Y3RZC4V7U667','VISA','411111','1111','1980-01-12','2019-05-28 15:06:33'),(281,112,'CUS-YFSIS26UZVDD','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-SAHO1S9DCHK6','VISA','411111','1111','1980-01-12','2019-05-28 15:07:00'),(282,112,'CUS-HZTX7UVCA5MG','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-33M2AKSU24J9','VISA','411111','1111','1980-01-12','2019-05-28 15:08:50'),(283,112,'CUS-EFF0X17UYQ6F','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-DN8D2XAB8IEG','VISA','411111','1111','1980-01-12','2019-05-28 15:09:03'),(284,112,'CUS-V4WKBRUPFL7Y','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-5YK16O9LFAIR','VISA','411111','1111','1980-01-12','2019-05-28 15:10:09'),(285,112,'CUS-LP98H7OH9JND','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-6WCNUIGH9XGO','VISA','411111','1111','1980-01-12','2019-05-28 15:11:10'),(286,112,'CUS-D5EOGS4GCD0C','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-689WZLM32MJC','VISA','411111','1111','1980-01-12','2019-05-28 15:11:33'),(287,112,'CUS-3TBJAO5KT2Y5','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-HP33K8XXB36J','VISA','411111','1111','1980-01-12','2019-05-28 15:15:24'),(288,112,'CUS-OS7BGRXP8S7E','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-K48QDSVMJW6P','VISA','411111','1111','1980-01-12','2019-05-28 15:22:10'),(289,112,'CUS-F694PBXJG7SN','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-QZW8OHUWMRU6','VISA','411111','1111','1980-01-12','2019-05-28 15:22:36'),(290,112,'CUS-U8MFZUBAUMLH','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-EVKCBR6F473N','VISA','411111','1111','1980-01-12','2019-05-28 15:22:45'),(291,112,'CUS-9UVI3CHL6A8D','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-SFRISFQE37N0','VISA','411111','1111','1980-01-12','2019-05-28 15:23:24'),(292,112,'CUS-A19ZME7X4CF2','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-1D5WJ1K9LZED','VISA','411111','1111','1980-01-12','2019-05-28 15:24:35'),(293,112,'CUS-G11OM7OMD6ZI','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-L9N914C91Z6Y','VISA','411111','1111','1980-01-12','2019-05-28 15:25:07'),(294,112,'CUS-XS2U22YHQ8XZ','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-7S676ZZS4IJ2','VISA','411111','1111','1980-01-12','2019-05-28 15:26:03'),(295,112,'CUS-YYQYWEK1DF8M','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-TVQL56L6NWQZ','VISA','411111','1111','1980-01-12','2019-05-28 15:28:44'),(296,112,'CUS-JLIKSOCATR7B','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-CDHU30K7J093','VISA','411111','1111','1980-01-12','2019-05-28 15:28:59'),(297,112,'CUS-JBN5TPM7OMP4','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-CUK1FIQPOUZX','VISA','411111','1111','1980-01-12','2019-05-28 15:29:42'),(298,112,'CUS-KELNTJ1IC3RJ','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-LF3Q0JI87QTI','VISA','411111','1111','1980-01-12','2019-05-28 15:30:11'),(299,112,'CUS-97INL03A3DZ3','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-BN0IT8AUGPU8','VISA','411111','1111','1980-01-12','2019-05-28 15:31:25'),(300,112,'CUS-9N9SEYUH1CHD','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-H08OWU5I2L4Y','VISA','411111','1111','1980-01-12','2019-05-28 15:32:31'),(301,112,'CUS-9NCWTQVN23TP','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-G5T77K1NR5UU','VISA','411111','1111','1980-01-12','2019-05-28 15:33:22'),(302,112,'CUS-BMYQBVLUA11F','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-5FW9M0LWI0DW','VISA','411111','1111','1980-01-12','2019-05-28 15:34:53'),(303,112,'CUS-OICJN680LGDG','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-EVWYVJKRN1WY','VISA','411111','1111','1980-01-12','2019-05-28 15:35:37'),(304,112,'CUS-Q9Z58MW4MOID','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-YPU0AMVMFD4S','VISA','411111','1111','1980-01-12','2019-05-28 15:36:18'),(305,112,'CUS-K4GWB3LXL5DK','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-I1K02H9BABN7','VISA','411111','1111','1980-01-12','2019-05-28 15:39:21'),(306,112,'CUS-6KDCXBZ05KC4','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-BPTO29TB5A58','VISA','411111','1111','1980-01-12','2019-05-28 15:44:40'),(307,112,'CUS-MTP19QGYUPYR','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-6MT7KD7OUBAB','VISA','411111','1111','1980-01-12','2019-05-28 15:45:54'),(308,112,'CUS-VPK4I4BQ9WTQ','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-7GHTMECIAS3U','VISA','411111','1111','1980-01-12','2019-05-28 15:46:30'),(309,112,'CUS-O32BBALB5JFO','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-N7WJSGX5LUGD','VISA','411111','1111','1980-01-12','2019-05-28 18:22:48'),(310,112,'CUS-2G4YEWNWV719','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-L9VCB0FHQRAE','VISA','411111','1111','1980-01-12','2019-05-28 18:24:30'),(311,112,'CUS-SMUWSA7YB8JO','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-RLB2RKRF1GRX','VISA','411111','1111','1980-01-12','2019-05-28 18:25:20'),(312,112,'CUS-032I3861NR9T','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-J04NIK2OUVX8','VISA','411111','1111','1980-01-12','2019-05-28 18:26:01'),(313,112,'CUS-Z0SD4PMI1A6K','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-TS848RWFA5V4','VISA','411111','1111','1980-01-12','2019-05-28 18:26:09'),(314,112,'CUS-4S58POL70W8N','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-DY6YTUQRKT6W','VISA','411111','1111','1980-01-12','2019-05-28 18:26:40'),(315,112,'CUS-6A18XVCK58AK','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-3713C38HNJWB','VISA','411111','1111','1980-01-12','2019-05-28 18:28:03'),(316,112,'CUS-IYPI3JHB4DVF','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-DOZ36TYLPJ25','VISA','411111','1111','1980-01-12','2019-05-28 18:29:00'),(317,112,'CUS-AS8M91WVYFKW','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-BS38CAMPFCQP','VISA','411111','1111','1980-01-12','2019-05-28 18:29:18'),(318,112,'CUS-CC0T9NB291NX','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-2ZYFSOTFQYFP','VISA','411111','1111','1980-01-12','2019-05-28 18:29:58'),(319,112,'CUS-NORZT134Z5GO','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-L5XCGCAW8XQ9','VISA','411111','1111','1980-01-12','2019-05-28 18:33:52'),(320,112,'CUS-TQPSJ22GRQR2','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-1YPLXPDR3E9F','VISA','411111','1111','1980-01-12','2019-05-28 18:34:59'),(321,112,'CUS-PQFX3BK5MJQ4','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-JKM9AULMHNPM','VISA','411111','1111','1980-01-12','2019-05-28 18:35:20'),(322,112,'CUS-1YWIU0CJOSNC','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-9WXFLMZVPMYO','VISA','411111','1111','1980-01-12','2019-05-28 18:35:36'),(323,112,'CUS-L59TVEOHM8YA','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-VROCVOSAT67U','VISA','411111','1111','1980-01-12','2019-05-28 18:35:51'),(324,112,'CUS-VYG8WG1QNIHI','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-V5L41TH4WZJN','VISA','411111','1111','1980-01-12','2019-05-28 18:36:55'),(325,112,'CUS-VQNOGFJ6CBNP','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-EX9C1MDJC5GX','VISA','411111','1111','1980-01-12','2019-05-28 18:39:48'),(326,112,'CUS-VZ8U9ZQSV6M4','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-8SYUJAL1O2FX','VISA','411111','1111','1980-01-12','2019-05-28 18:40:18'),(327,112,'CUS-OSYSJQA3256Q','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-C5MVHIBMYQUG','VISA','411111','1111','1980-01-12','2019-05-28 18:42:03'),(328,112,'CUS-4RHI387LB7UX','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-WXJCI4U76PA9','VISA','411111','1111','1980-01-12','2019-05-28 18:42:51'),(329,112,'CUS-8LS2QSXZB23Q','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-ZJU3DOFYAU62','VISA','411111','1111','1980-01-12','2019-05-28 18:43:09'),(330,112,'CUS-S7ODWITVODDF','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-05DB3SIGUSSJ','VISA','411111','1111','1980-01-12','2019-05-28 18:43:43'),(331,112,'CUS-21JNNEZMQVEW','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-ZTCL6JS7RO7K','VISA','411111','1111','1980-01-12','2019-05-28 18:49:19'),(332,112,'CUS-978AOPNC8HWG','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-50K4JAWYPOQW','VISA','411111','1111','1980-01-12','2019-05-28 18:51:05'),(333,112,'CUS-ZFVNXMX09GHL','Luiz Jonas','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1750','100','Lourdes','Belo Horizonte','MG','BRA','CRC-XEXH24ZWRCHS','VISA','411111','1111','1980-01-12','2019-05-28 18:51:49');
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
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_customstyle`
--

LOCK TABLES `tb_customstyle` WRITE;
/*!40000 ALTER TABLE `tb_customstyle` DISABLE KEYS */;
INSERT INTO `tb_customstyle` VALUES (14,11,1,'default.jpg','jpg','#666667','#666667','#666667','#666667','#666667','#666667','#666667','Arial2','32','#666667','Arial2','32','#666667','Arial2','32',NULL,NULL,NULL,'#666667',NULL,'Arial2','32',NULL,'2019-04-25 13:15:56'),(15,13,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-05-05 02:56:30'),(16,26,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-05-14 17:18:13'),(17,28,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-05-15 14:31:41'),(18,35,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-05-24 12:19:36'),(19,36,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-05-24 12:19:47'),(20,67,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2019-05-26 19:52:31'),(21,72,1,'default.jpg','jpg','#f6f6f6','#000000','#f6f6f6','#f6f6f6','#000000','#f6f6f6','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','#f6f6f6','Arial','14','6','2019-05-28 01:01:01'),(22,73,1,'default.jpg','jpg','#f6f6f6','#000000','#f6f6f6','#f6f6f6','#000000','#f6f6f6','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','#f6f6f6','Arial','14','6','2019-05-28 01:02:40'),(23,74,1,'default.jpg','jpg','#f6f6f6','#000000','#f6f6f6','#f6f6f6','#000000','#f6f6f6','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','#f6f6f6','Arial','14','6','2019-05-28 01:02:59'),(24,75,1,'default.jpg','jpg','#f6f6f6','#000000','#f6f6f6','#f6f6f6','#000000','#f6f6f6','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','#f6f6f6','Arial','14','6','2019-05-28 01:04:45'),(25,76,1,'default.jpg','jpg','#f6f6f6','#000000','#f6f6f6','#f6f6f6','#000000','#f6f6f6','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','#f6f6f6','Arial','14','6','2019-05-28 01:14:00'),(26,77,1,'default.jpg','jpg','#f6f6f6','#000000','#f6f6f6','#f6f6f6','#000000','#f6f6f6','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','#f6f6f6','Arial','14','6','2019-05-28 01:14:49'),(27,78,1,'default.jpg','jpg','#f6f6f6','#000000','#f6f6f6','#f6f6f6','#000000','#f6f6f6','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','#f6f6f6','Arial','14','6','2019-05-28 01:15:45'),(28,79,1,'default.jpg','jpg','#f6f6f6','#000000','#f6f6f6','#f6f6f6','#000000','#f6f6f6','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','#f6f6f6','Arial','14','6','2019-05-28 01:17:16'),(29,80,1,'default.jpg','jpg','#f6f6f6','#000000','#f6f6f6','#f6f6f6','#000000','#f6f6f6','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','#f6f6f6','Arial','14','6','2019-05-28 01:17:36'),(30,81,1,'default.jpg','jpg','#f6f6f6','#000000','#f6f6f6','#f6f6f6','#000000','#f6f6f6','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','#f6f6f6','Arial','14','6','2019-05-28 01:17:54'),(31,82,1,'default.jpg','jpg','#f6f6f6','#000000','#f6f6f6','#f6f6f6','#000000','#f6f6f6','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','#f6f6f6','Arial','14','6','2019-05-28 01:20:54'),(32,83,1,'default.jpg','jpg','#f6f6f6','#000000','#f6f6f6','#f6f6f6','#000000','#f6f6f6','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','#f6f6f6','Arial','14','6','2019-05-28 01:21:09'),(33,84,1,'default.jpg','jpg','#f6f6f6','#000000','#f6f6f6','#f6f6f6','#000000','#f6f6f6','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','#f6f6f6','Arial','14','6','2019-05-28 01:21:51'),(34,85,1,'default.jpg','jpg','#f6f6f6','#000000','#f6f6f6','#f6f6f6','#000000','#f6f6f6','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','#f6f6f6','Arial','14','6','2019-05-28 01:22:17'),(35,86,1,'default.jpg','jpg','#f6f6f6','#000000','#f6f6f6','#f6f6f6','#000000','#f6f6f6','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','#f6f6f6','Arial','14','6','2019-05-28 01:22:39'),(36,87,1,'default.jpg','jpg','#f6f6f6','#000000','#f6f6f6','#f6f6f6','#000000','#f6f6f6','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','#f6f6f6','Arial','14','6','2019-05-28 01:22:59'),(37,88,1,'default.jpg','jpg','#f6f6f6','#000000','#f6f6f6','#f6f6f6','#000000','#f6f6f6','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','#f6f6f6','Arial','14','6','2019-05-28 01:23:07'),(38,89,1,'default.jpg','jpg','#f6f6f6','#000000','#f6f6f6','#f6f6f6','#000000','#f6f6f6','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','#f6f6f6','Arial','14','6','2019-05-28 01:23:13'),(39,90,1,'default.jpg','jpg','#f6f6f6','#000000','#f6f6f6','#f6f6f6','#000000','#f6f6f6','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','#f6f6f6','Arial','14','6','2019-05-28 01:23:32'),(40,91,1,'default.jpg','jpg','#f6f6f6','#000000','#f6f6f6','#f6f6f6','#000000','#f6f6f6','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','#f6f6f6','Arial','14','6','2019-05-28 01:23:50'),(41,92,1,'default.jpg','jpg','#f6f6f6','#000000','#f6f6f6','#f6f6f6','#000000','#f6f6f6','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','#f6f6f6','Arial','14','6','2019-05-28 01:24:14'),(42,93,1,'default.jpg','jpg','#f6f6f6','#000000','#f6f6f6','#f6f6f6','#000000','#f6f6f6','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','#f6f6f6','Arial','14','6','2019-05-28 01:25:10'),(43,94,1,'default.jpg','jpg','#f6f6f6','#000000','#f6f6f6','#f6f6f6','#000000','#f6f6f6','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','#f6f6f6','Arial','14','6','2019-05-28 01:25:54'),(44,95,1,'default.jpg','jpg','#f6f6f6','#000000','#f6f6f6','#f6f6f6','#000000','#f6f6f6','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','#f6f6f6','Arial','14','6','2019-05-28 01:26:08'),(45,96,1,'default.jpg','jpg','#f6f6f6','#000000','#f6f6f6','#f6f6f6','#000000','#f6f6f6','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','#f6f6f6','Arial','14','6','2019-05-28 01:26:19'),(46,97,1,'default.jpg','jpg','#f6f6f6','#000000','#f6f6f6','#f6f6f6','#000000','#f6f6f6','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','#f6f6f6','Arial','14','6','2019-05-28 01:27:11'),(47,98,1,'default.jpg','jpg','#f6f6f6','#000000','#f6f6f6','#f6f6f6','#000000','#f6f6f6','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','#f6f6f6','Arial','14','6','2019-05-28 01:27:53'),(48,99,1,'default.jpg','jpg','#f6f6f6','#000000','#f6f6f6','#f6f6f6','#000000','#f6f6f6','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','#f6f6f6','Arial','14','6','2019-05-28 01:28:09'),(49,100,1,'default.jpg','jpg','#f6f6f6','#000000','#f6f6f6','#f6f6f6','#000000','#f6f6f6','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','#f6f6f6','Arial','14','6','2019-05-28 02:00:58'),(50,101,1,'default.jpg','jpg','#f6f6f6','#000000','#f6f6f6','#f6f6f6','#000000','#f6f6f6','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','#f6f6f6','Arial','14','6','2019-05-28 02:01:14'),(51,102,1,'default.jpg','jpg','#f6f6f6','#000000','#f6f6f6','#f6f6f6','#000000','#f6f6f6','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','#f6f6f6','Arial','14','6','2019-05-28 02:02:57'),(52,103,1,'default.jpg','jpg','#f6f6f6','#000000','#f6f6f6','#f6f6f6','#000000','#f6f6f6','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','#f6f6f6','Arial','14','6','2019-05-28 02:03:10'),(53,104,1,'default.jpg','jpg','#f6f6f6','#000000','#f6f6f6','#f6f6f6','#000000','#f6f6f6','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','#f6f6f6','Arial','14','6','2019-05-28 02:03:23'),(54,105,1,'default.jpg','jpg','#f6f6f6','#000000','#f6f6f6','#f6f6f6','#000000','#f6f6f6','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','#f6f6f6','Arial','14','6','2019-05-28 02:03:56'),(55,106,1,'default.jpg','jpg','#f6f6f6','#000000','#f6f6f6','#f6f6f6','#000000','#f6f6f6','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','#f6f6f6','Arial','14','6','2019-05-28 02:04:07'),(56,107,1,'default.jpg','jpg','#f6f6f6','#000000','#f6f6f6','#f6f6f6','#000000','#f6f6f6','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','#f6f6f6','Arial','14','6','2019-05-28 02:04:33'),(57,108,1,'default.jpg','jpg','#f6f6f6','#000000','#f6f6f6','#f6f6f6','#000000','#f6f6f6','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','#f6f6f6','Arial','14','6','2019-05-28 02:23:41'),(58,109,1,'default.jpg','jpg','#f6f6f6','#000000','#f6f6f6','#f6f6f6','#000000','#f6f6f6','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','#f6f6f6','Arial','14','6','2019-05-28 02:24:22'),(59,110,1,'default.jpg','jpg','#f6f6f6','#000000','#f6f6f6','#f6f6f6','#000000','#f6f6f6','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','#f6f6f6','Arial','14','6','2019-05-28 02:24:46'),(60,111,1,'default.jpg','jpg','#f6f6f6','#000000','#f6f6f6','#f6f6f6','#000000','#f6f6f6','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','Arial','22','#000000','#f6f6f6','Arial','14','6','2019-05-28 02:26:46'),(61,112,1,'default.jpg','jpg','#f6f6f8','#f6f6f7','#f6f6f8','#f6f6f8','#f6f6f7','#f6f6f7','#f6f6f8','Arial','22','#f6f6f8','Arial','22','#f6f6f8','Arial','22','#f6f6f7','Arial','22','#f6f6f8','#f6f6f8','Arial','22','8','2019-05-28 03:23:58');
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
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_events`
--

LOCK TABLES `tb_events` WRITE;
/*!40000 ALTER TABLE `tb_events` DISABLE KEYS */;
INSERT INTO `tb_events` VALUES (22,112,0,'Chá','Meu',55,31,123456789,'Rua','157','1','Major','Americana','SP','BRA','22.jpg','jpg','2021-01-01 22:15:00','2019-05-30 01:36:49'),(23,112,1,'Chá','Venham',55,31,123456789,'Rua','159','Esquina','Taquaral','Americana','SP','BRA','23.jpg','jpg','2020-05-05 19:00:00','2019-05-30 01:38:36'),(24,112,1,'Chá Bar','Venham no meu Chá Bar',55,31,456456456,'Rua Gonçalves Dias','1300','','Lourdes','Belo Horizonte','MG','BRA','24.jpg','jpg','2020-02-02 14:00:00','2019-05-30 02:30:33');
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
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_initialpages`
--

LOCK TABLES `tb_initialpages` WRITE;
/*!40000 ALTER TABLE `tb_initialpages` DISABLE KEYS */;
INSERT INTO `tb_initialpages` VALUES (1,58,1,NULL,1,0,'2019-05-26 15:36:02'),(2,59,1,1,1,0,'2019-05-26 15:37:07'),(3,60,1,1,1,0,'2019-05-26 15:37:52'),(4,61,1,1,1,0,'2019-05-26 15:40:50'),(5,62,1,1,1,0,'2019-05-26 15:55:13'),(6,63,1,1,1,0,'2019-05-26 15:55:46'),(7,64,1,1,1,0,'2019-05-26 15:56:40'),(8,65,1,1,1,0,'2019-05-26 15:59:02'),(9,66,1,1,1,0,'2019-05-26 15:59:29'),(10,67,1,1,1,0,'2019-05-26 16:00:17'),(11,101,1,1,1,0,'2019-05-28 02:01:14'),(12,102,1,1,1,0,'2019-05-28 02:02:57'),(13,103,1,1,1,0,'2019-05-28 02:03:10'),(14,104,1,1,1,0,'2019-05-28 02:03:23'),(15,105,1,1,1,0,'2019-05-28 02:03:56'),(16,106,1,1,1,0,'2019-05-28 02:04:07'),(17,107,1,1,1,0,'2019-05-28 02:04:33'),(18,110,1,1,1,0,'2019-05-28 02:24:46'),(19,111,1,1,1,0,'2019-05-28 02:26:46'),(20,112,1,1,0,1,'2019-05-28 03:23:58');
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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_menus`
--

LOCK TABLES `tb_menus` WRITE;
/*!40000 ALTER TABLE `tb_menus` DISABLE KEYS */;
INSERT INTO `tb_menus` VALUES (1,62,1,1,1,1,1,1,1,1,1,1,NULL,'2019-05-26 15:55:13'),(2,63,1,1,1,1,1,1,1,1,1,1,NULL,'2019-05-26 15:55:46'),(3,64,1,1,1,1,1,1,1,1,1,1,NULL,'2019-05-26 15:56:40'),(4,65,1,1,1,1,1,1,1,1,1,1,NULL,'2019-05-26 15:59:02'),(5,66,1,1,1,1,1,1,1,1,1,1,NULL,'2019-05-26 15:59:29'),(6,67,1,1,1,1,1,1,1,1,1,1,NULL,'2019-05-26 16:00:17'),(7,104,1,1,1,1,1,1,1,1,1,1,NULL,'2019-05-28 02:03:23'),(8,105,1,1,1,1,1,1,1,1,1,1,NULL,'2019-05-28 02:03:56'),(9,106,1,1,1,1,1,1,1,1,1,1,NULL,'2019-05-28 02:04:07'),(10,107,1,1,1,1,1,1,1,1,1,1,NULL,'2019-05-28 02:04:33'),(11,110,1,1,1,1,1,1,1,1,1,1,NULL,'2019-05-28 02:24:46'),(12,111,1,1,1,1,1,1,1,1,1,1,NULL,'2019-05-28 02:26:46'),(13,112,1,1,1,1,1,1,1,1,1,1,1,'2019-05-28 03:23:58');
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
  KEY `fk_messages_users_idx` (`iduser`),
  CONSTRAINT `fk_messages_users` FOREIGN KEY (`iduser`) REFERENCES `tb_users` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_messages`
--

LOCK TABLES `tb_messages` WRITE;
/*!40000 ALTER TABLE `tb_messages` DISABLE KEYS */;
INSERT INTO `tb_messages` VALUES (13,11,0,'Pedro Coimbra','coimbra@gmail.com','Felicitações amigo! Tudo de bom','2019-04-27 16:25:56'),(15,26,0,'Jose Paulo','jpccambraia@gmail.com','Parabens e felicidade aos noivos!','2019-05-17 20:30:32'),(16,36,1,'Joao Luiz','paulowebphp@gmail.com','Felicitacoes!!cumpadre','2019-05-25 17:09:11'),(17,36,0,'Joao Luiz','paulowebphp@gmail.com','Felicitacoes!!cumpadre','2019-05-25 17:09:28'),(18,36,0,'Joao Luiz','paulowebphp@gmail.com','Felicitacoes!!cumpadre','2019-05-25 17:10:42'),(19,36,0,'Joao Luiz','paulowebphp@gmail.com','Felicitacoes parte 2!! Sempre','2019-05-25 17:11:12');
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
) ENGINE=InnoDB AUTO_INCREMENT=427 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_orders`
--

LOCK TABLES `tb_orders` WRITE;
/*!40000 ALTER TABLE `tb_orders` DISABLE KEYS */;
INSERT INTO `tb_orders` VALUES (308,13,315,1,394,NULL,2500.00,'2019-05-11 16:49:16'),(309,11,314,1,395,NULL,10801.50,'2019-05-11 21:06:38'),(310,11,317,1,396,NULL,10000.00,'2019-05-11 23:34:03'),(311,13,316,1,397,NULL,3000.00,'2019-05-11 23:36:45'),(312,13,319,1,398,NULL,5000.00,'2019-05-12 03:36:57'),(313,26,321,1,399,NULL,4000.00,'2019-05-14 19:36:10'),(314,26,321,1,400,NULL,4000.00,'2019-05-14 19:36:48'),(315,26,321,1,401,NULL,4000.00,'2019-05-14 19:37:16'),(316,26,321,1,402,NULL,4000.00,'2019-05-14 19:38:03'),(317,26,321,1,403,NULL,4000.00,'2019-05-14 19:40:43'),(318,26,321,1,404,NULL,4000.00,'2019-05-14 19:41:01'),(319,26,321,1,405,NULL,4000.00,'2019-05-14 19:46:38'),(320,26,321,1,406,NULL,4000.00,'2019-05-14 19:46:49'),(321,26,321,1,407,NULL,4000.00,'2019-05-14 19:46:59'),(322,26,321,1,408,NULL,4000.00,'2019-05-14 19:50:31'),(323,26,321,1,409,NULL,4000.00,'2019-05-14 19:52:53'),(324,26,321,1,410,NULL,4000.00,'2019-05-14 19:53:36'),(325,26,321,1,411,NULL,4000.00,'2019-05-14 19:57:07'),(326,26,321,1,412,NULL,4000.00,'2019-05-14 19:58:12'),(327,26,321,1,413,NULL,4000.00,'2019-05-14 20:00:03'),(328,26,321,1,414,NULL,4000.00,'2019-05-14 20:00:17'),(329,26,321,1,415,NULL,4000.00,'2019-05-14 20:00:27'),(330,26,321,1,416,NULL,4000.00,'2019-05-14 20:33:34'),(331,26,321,1,417,NULL,4000.00,'2019-05-14 20:34:05'),(332,26,321,1,418,NULL,4000.00,'2019-05-14 20:34:39'),(333,26,321,1,419,NULL,4000.00,'2019-05-14 20:35:45'),(334,26,321,1,420,NULL,4000.00,'2019-05-14 20:36:23'),(335,26,321,1,421,NULL,4000.00,'2019-05-14 20:44:34'),(336,26,321,1,422,NULL,4000.00,'2019-05-14 20:44:43'),(337,26,321,1,423,NULL,4000.00,'2019-05-14 20:44:59'),(338,26,321,1,424,NULL,4000.00,'2019-05-14 20:45:38'),(339,26,321,1,425,NULL,4000.00,'2019-05-14 20:46:04'),(340,26,321,1,426,NULL,4000.00,'2019-05-14 20:46:55'),(341,26,321,1,427,NULL,4000.00,'2019-05-14 20:47:13'),(342,26,321,1,428,NULL,4000.00,'2019-05-14 20:47:39'),(343,26,321,1,429,NULL,4000.00,'2019-05-14 20:47:54'),(344,26,321,1,430,NULL,4000.00,'2019-05-14 20:48:02'),(345,26,321,1,431,NULL,4000.00,'2019-05-14 20:48:14'),(346,26,321,1,432,NULL,4000.00,'2019-05-14 20:48:27'),(347,26,321,1,433,NULL,4000.00,'2019-05-14 20:48:52'),(348,26,321,1,434,NULL,4000.00,'2019-05-14 20:49:02'),(349,26,321,1,435,NULL,4000.00,'2019-05-14 20:56:41'),(350,26,321,1,436,NULL,4000.00,'2019-05-14 20:57:48'),(351,26,321,1,437,NULL,4000.00,'2019-05-14 20:59:41'),(352,26,321,1,438,NULL,4000.00,'2019-05-14 21:00:19'),(353,26,321,1,439,NULL,4000.00,'2019-05-14 21:01:46'),(354,26,321,1,440,NULL,4000.00,'2019-05-14 21:01:59'),(355,26,321,1,441,NULL,4000.00,'2019-05-14 21:02:23'),(356,26,321,1,442,NULL,4000.00,'2019-05-14 21:04:05'),(357,26,321,1,443,NULL,4000.00,'2019-05-14 21:05:52'),(358,26,321,1,444,NULL,4000.00,'2019-05-14 21:06:21'),(359,26,321,1,445,NULL,4000.00,'2019-05-14 21:07:26'),(360,26,321,1,446,NULL,4000.00,'2019-05-14 21:07:55'),(361,26,321,1,447,NULL,4000.00,'2019-05-14 21:09:00'),(362,26,321,1,448,NULL,4000.00,'2019-05-14 21:09:39'),(363,26,321,1,449,NULL,4000.00,'2019-05-14 21:11:43'),(364,26,321,1,450,NULL,4000.00,'2019-05-14 21:12:09'),(365,26,321,1,451,NULL,4000.00,'2019-05-14 21:14:10'),(366,26,321,1,452,NULL,4000.00,'2019-05-14 21:14:53'),(367,26,321,1,453,NULL,4000.00,'2019-05-14 21:15:08'),(368,26,321,1,454,NULL,4000.00,'2019-05-14 21:15:44'),(369,26,321,1,455,NULL,4000.00,'2019-05-14 21:39:17'),(370,26,321,1,456,NULL,4000.00,'2019-05-14 21:43:30'),(371,26,321,1,457,NULL,4000.00,'2019-05-14 21:48:21'),(372,26,321,1,458,NULL,4000.00,'2019-05-14 21:48:48'),(373,26,321,1,459,NULL,4000.00,'2019-05-14 21:50:11'),(374,26,321,1,460,NULL,4000.00,'2019-05-14 21:53:08'),(375,26,321,1,461,NULL,5500.00,'2019-05-14 21:56:33'),(376,26,322,1,462,NULL,2400.00,'2019-05-14 22:15:15'),(377,26,323,1,463,NULL,3200.00,'2019-05-14 22:27:51'),(378,28,325,1,464,NULL,1400.00,'2019-05-15 14:32:37'),(379,28,326,1,465,NULL,1400.00,'2019-05-15 14:41:46'),(380,11,318,76,163,'ORD-U5CCM9VN4PWF',10000.00,'2019-05-22 18:29:04'),(381,11,318,78,165,'ORD-MGC44ETB04XJ',10000.00,'2019-05-22 18:30:32'),(382,11,318,79,166,'ORD-YIZR6P69L814',10000.00,'2019-05-22 18:31:47'),(383,11,318,80,167,'ORD-CC4JOA9IBEHP',10000.00,'2019-05-22 18:32:04'),(384,11,318,81,168,'ORD-M68V83V0GRQS',10000.00,'2019-05-22 18:32:18'),(385,36,330,161,219,'ORD-K0ZPARFFZWSC',900.00,'2019-05-24 12:46:26'),(386,36,331,162,220,'ORD-CPML2PG0VFON',700.00,'2019-05-24 13:16:31'),(387,36,332,163,221,'ORD-UN0K7XG7I9W3',1500.00,'2019-05-25 22:34:45'),(388,36,332,164,222,'ORD-J5DIOYKYI80A',1500.00,'2019-05-25 22:36:01'),(389,36,332,165,223,'ORD-4XGC7Q1PCH11',1500.00,'2019-05-25 22:38:13'),(390,36,333,166,224,'ORD-DHVS1RV8FC4L',1500.00,'2019-05-25 22:41:04'),(391,67,367,200,235,'ORD-4UHSBAKDSWNC',50.99,'2019-05-26 18:28:57'),(392,67,368,201,236,'ORD-AFMMRO1F4O2I',50.99,'2019-05-26 18:31:03'),(393,67,369,202,237,'ORD-VZYNTP7DJVK9',50.99,'2019-05-26 18:31:41'),(394,67,370,203,238,'ORD-5TQ54GJQFV4R',50.99,'2019-05-26 18:33:17'),(395,67,371,204,239,'ORD-LQXOFTTVPBLP',50.99,'2019-05-26 18:34:43'),(396,67,372,205,240,'ORD-87QL4UOI2HL7',50.99,'2019-05-26 18:35:16'),(397,67,373,206,241,'ORD-G3IOX79ZVCFT',50.99,'2019-05-26 18:35:41'),(398,67,374,207,242,'ORD-5I05QE5U6BEC',50.99,'2019-05-26 18:36:32'),(399,67,376,215,245,'ORD-IJB9WRQ4W6FZ',2750.00,'2019-05-26 20:36:07'),(400,67,376,216,246,'ORD-1VCJX9RAKKIN',2750.00,'2019-05-26 20:36:33'),(401,67,376,217,247,'ORD-AP7E73DVRHV8',2750.00,'2019-05-26 20:37:57'),(402,67,377,222,249,'ORD-KVMCR2YTO82A',250.00,'2019-05-27 13:51:34'),(403,67,377,223,250,'ORD-QYHS5XY3453T',250.00,'2019-05-27 13:52:14'),(404,67,378,224,251,'ORD-FOS03XDW15PP',2000.00,'2019-05-27 13:55:10'),(405,67,379,225,252,'ORD-QSJ049EG7SUA',250.00,'2019-05-27 14:08:46'),(406,67,380,228,253,'ORD-GEHOGVJVHKOC',4000.00,'2019-05-27 19:09:08'),(407,67,381,229,254,'ORD-9WYJ8OOCX5S7',250.00,'2019-05-27 19:17:58'),(408,67,382,230,255,'ORD-H4LT4RP5U0X3',250.00,'2019-05-27 20:44:01'),(409,67,383,231,256,'ORD-RI00U14DVLAD',250.00,'2019-05-27 20:51:06'),(410,112,415,253,259,'ORD-ZH3X2RRE7OVP',50.99,'2019-05-28 03:55:57'),(411,67,416,261,263,'ORD-KI1EMZWJLFD6',500.00,'2019-05-28 13:59:47'),(412,67,416,262,264,'ORD-XVMMKXUJS461',500.00,'2019-05-28 14:02:28'),(413,67,416,263,265,'ORD-4A5L9C47B4RW',500.00,'2019-05-28 14:02:58'),(414,67,416,264,266,'ORD-O0MGQ8NC68P8',500.00,'2019-05-28 14:03:46'),(415,112,471,301,270,'ORD-0KUKYZGBXYUM',50.99,'2019-05-28 15:33:25'),(416,112,472,302,271,'ORD-WKJFC6FRA3Z7',50.99,'2019-05-28 15:34:57'),(417,112,473,303,272,'ORD-HWZ98K87T0P6',50.99,'2019-05-28 15:35:40'),(418,112,474,304,273,'ORD-NYZWMJ3R9EW3',50.99,'2019-05-28 15:36:22'),(419,112,475,305,274,'ORD-5CZ2SJW911X3',50.99,'2019-05-28 15:39:24'),(420,112,476,306,275,'ORD-OROC47JJCAM8',50.99,'2019-05-28 15:44:43'),(421,112,477,307,276,'ORD-JTVGUUDS8JLA',50.99,'2019-05-28 15:45:57'),(422,112,478,308,277,'ORD-VRJGBFAOUQYV',50.99,'2019-05-28 15:46:34'),(423,112,511,330,284,'ORD-8OSEC3D0ORBO',94.99,'2019-05-28 18:43:47'),(424,112,512,331,285,'ORD-EM1H1AA5642Z',94.99,'2019-05-28 18:49:23'),(425,112,513,332,286,'ORD-B4J5NLMIJMGS',94.99,'2019-05-28 18:51:08'),(426,112,514,333,287,'ORD-CI54ZCQRII8S',94.99,'2019-05-28 18:51:53');
/*!40000 ALTER TABLE `tb_orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_ordersplans`
--

DROP TABLE IF EXISTS `tb_ordersplans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_ordersplans` (
  `idorderplan` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) NOT NULL,
  `idplan` int(11) NOT NULL,
  `idcustomer` int(11) NOT NULL,
  `idpayment` int(11) NOT NULL,
  `inorderplanstatus` tinyint(4) DEFAULT NULL,
  `desordercode` varchar(22) CHARACTER SET latin1 DEFAULT NULL,
  `vltotal` decimal(10,2) NOT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idorderplan`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_ordersplans`
--

LOCK TABLES `tb_ordersplans` WRITE;
/*!40000 ALTER TABLE `tb_ordersplans` DISABLE KEYS */;
INSERT INTO `tb_ordersplans` VALUES (1,36,183,48,156,NULL,'ORD-VQVXVAOUVALO',239.99,'2019-05-22 13:51:30'),(2,36,184,49,157,NULL,'ORD-6PBD7A1BH943',239.99,'2019-05-22 13:56:20'),(3,36,185,50,158,NULL,'ORD-J5ZPH122E0VZ',239.99,'2019-05-22 13:56:36'),(4,36,186,51,159,NULL,'ORD-2ZXM3YBYIIM6',239.99,'2019-05-22 13:57:21'),(5,36,187,52,160,NULL,'ORD-FBKUS31WN7BU',239.99,'2019-05-22 13:58:14'),(6,36,198,95,173,NULL,'ORD-7XPNSXS5N33N',239.99,'2019-05-22 20:16:34'),(7,36,200,105,174,NULL,'ORD-G82CQL1DMMWG',239.99,'2019-05-22 20:55:56'),(8,36,201,106,175,NULL,'ORD-L0RP9890KB2J',239.99,'2019-05-22 20:57:44'),(9,36,202,107,176,NULL,'ORD-VKB8J4RVB81Q',239.99,'2019-05-22 20:58:21'),(10,36,203,108,177,NULL,'ORD-855R8KC0RG0W',239.99,'2019-05-22 20:58:49'),(11,36,204,109,178,NULL,'ORD-T0PB90KDU0J7',239.99,'2019-05-22 21:06:55'),(12,36,205,110,179,NULL,'ORD-Z807O00S0TJ5',239.99,'2019-05-22 21:07:22'),(13,36,206,111,180,NULL,'ORD-ZKTCUCEO5WEL',249.99,'2019-05-22 21:09:50'),(14,36,207,115,181,NULL,'ORD-MW5I2X83LRSP',219.99,'2019-05-22 21:24:03'),(15,36,208,116,182,NULL,'ORD-3C3LZW8Q2NTI',239.99,'2019-05-22 21:26:12'),(16,36,209,117,183,NULL,'ORD-RVCAQQGCC71T',239.99,'2019-05-22 21:27:31'),(17,36,210,118,184,NULL,'ORD-AOCVXZ6KAXI6',239.99,'2019-05-22 21:27:58'),(18,36,211,119,185,NULL,'ORD-5CYJ1GW5L9Z3',219.99,'2019-05-22 21:30:52'),(19,36,212,120,186,NULL,'ORD-7VBH1MTNGUBV',219.99,'2019-05-22 21:31:58'),(20,36,213,121,187,NULL,'ORD-L7B0ZV0RCF6I',219.99,'2019-05-22 21:32:24'),(21,36,214,122,188,NULL,'ORD-OOHQDEXLT5G9',219.99,'2019-05-22 21:32:41'),(22,36,215,123,189,NULL,'ORD-60KY055XQ4TM',269.99,'2019-05-22 21:34:15'),(23,36,216,124,190,NULL,'ORD-03YQXYMOXAE5',269.99,'2019-05-22 21:37:00'),(24,36,217,125,191,NULL,'ORD-SX24W4H5F7HG',219.99,'2019-05-22 21:43:00'),(25,36,218,126,192,NULL,'ORD-90PPVZ6CW3T1',249.99,'2019-05-22 21:44:20'),(26,36,219,127,193,NULL,'ORD-JZ1WA1PB4DKT',269.99,'2019-05-22 21:55:03'),(27,38,221,130,194,NULL,'ORD-720TUK0KK24H',69.99,'2019-05-23 00:26:54'),(28,38,222,131,195,NULL,'ORD-439ZCIAU50YL',69.99,'2019-05-23 00:27:35'),(29,38,223,132,196,NULL,'ORD-M8A2WM8N9M8U',69.99,'2019-05-23 00:29:38'),(30,38,224,133,197,NULL,'ORD-OH7XEYHHUG0T',69.99,'2019-05-23 00:31:33'),(31,38,225,134,198,NULL,'ORD-VWDHO0YJ0TXN',129.99,'2019-05-23 00:41:06'),(32,38,226,135,199,NULL,'ORD-XYGWRNWX4LNQ',129.99,'2019-05-23 00:43:39'),(33,38,227,136,200,NULL,'ORD-T3LERFSX1M8O',129.99,'2019-05-23 00:44:45'),(34,38,228,137,201,NULL,'ORD-93L33FHMDIT2',129.99,'2019-05-23 00:45:04'),(35,38,229,138,202,NULL,'ORD-KEOQ1OT57BBB',129.99,'2019-05-23 00:45:33'),(36,38,230,139,203,NULL,'ORD-DMHAHMP6UJB8',19.99,'2019-05-23 00:47:17'),(37,38,231,140,204,NULL,'ORD-XBCUO1MVODA9',79.99,'2019-05-23 03:03:09'),(38,38,232,141,205,NULL,'ORD-GO9WSUBZP37R',149.99,'2019-05-23 03:05:33'),(39,39,233,142,206,NULL,'ORD-CIXAFVQT3RW3',85.99,'2019-05-23 03:11:03'),(40,39,234,144,207,NULL,'ORD-T7HGWXP21DSH',129.99,'2019-05-23 03:15:51'),(41,39,237,147,209,NULL,'ORD-4DFU1BFL387G',217.99,'2019-05-23 03:22:22'),(42,39,238,148,210,NULL,'ORD-KY1PX50OM42F',217.99,'2019-05-23 03:23:01'),(43,39,239,149,211,NULL,'ORD-SP2HMQGAKCHW',217.99,'2019-05-23 03:24:19'),(44,40,240,150,212,NULL,'ORD-1BYXM0CIC4V6',108.99,'2019-05-23 03:28:55'),(45,40,241,151,213,NULL,'ORD-R1WX13Z08TIW',152.99,'2019-05-23 03:31:25'),(46,40,242,152,214,NULL,'ORD-D0GRPRE7V9IO',129.99,'2019-05-23 03:33:14'),(47,40,243,153,215,NULL,'ORD-E8G2DKYCZFGS',217.99,'2019-05-23 03:34:47'),(48,41,244,154,216,NULL,'ORD-RO7HNVXM5ET9',50.99,'2019-05-23 03:49:33'),(49,41,245,155,217,NULL,'ORD-KY7OG8WR2D18',108.99,'2019-05-23 03:54:59'),(50,41,246,156,218,NULL,'ORD-96Y4BME7VYA4',152.99,'2019-05-23 03:57:14'),(51,36,247,167,225,NULL,'ORD-CYOEWYXNLGAM',50.99,'2019-05-25 23:09:41'),(52,36,248,168,226,NULL,'ORD-XJ58II1PPDO0',50.99,'2019-05-25 23:11:34');
/*!40000 ALTER TABLE `tb_ordersplans` ENABLE KEYS */;
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
  `inpartystatus` tinyint(4) DEFAULT NULL,
  `desdescription` text CHARACTER SET latin1,
  `deslocation` varchar(128) CHARACTER SET latin1 DEFAULT NULL,
  `desphoto` varchar(256) CHARACTER SET latin1 DEFAULT NULL,
  `desextension` varchar(4) DEFAULT NULL,
  `dtparty` datetime DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idparty`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_parties`
--

LOCK TABLES `tb_parties` WRITE;
/*!40000 ALTER TABLE `tb_parties` DISABLE KEYS */;
INSERT INTO `tb_parties` VALUES (1,112,1,'Descrição 1','Descrição Local 1','112661.jpg','jpg','2021-01-01 22:41:00','2019-05-29 14:16:34');
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
) ENGINE=InnoDB AUTO_INCREMENT=288 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_payments`
--

LOCK TABLES `tb_payments` WRITE;
/*!40000 ALTER TABLE `tb_payments` DISABLE KEYS */;
INSERT INTO `tb_payments` VALUES (1,36,'0',0,'PAULO PEDOR',55,31,987411234,0,'01224202686',NULL,'Rua Espirito','1700','12121','Lourdes','Belo Horizonte','MG','1980-02-02','2019-05-22 12:45:03'),(128,24,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,'13465400','Rua Alvaro Ribeiro','401','','Vila Rehder','Americana','SP',NULL,'2019-05-14 02:37:18'),(144,26,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,'30160037','Rua Espirito Santo','1757','401','Lourdes','Belo Horizonte','MG',NULL,'2019-05-14 13:03:05'),(147,27,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,'13465400','Rua Alvaro','401','','Rehder','Americana','SP',NULL,'2019-05-15 00:58:30'),(148,28,NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,'13465400','Rua Alvaro','400','','Rehder','Americana','SP',NULL,'2019-05-15 01:11:21'),(149,36,'0',0,'PAULO PEDOR',55,31,987411234,0,'01224202686','30160037','Rua Espirito','401','111','Vila','Americana','SP','1980-02-02','2019-05-22 13:02:52'),(150,36,'0',0,'PAULO PEDOR',55,31,987411234,0,'01224202686','30160037','Rua Espirito','1700','12121','Lourdes','Belo Horizonte','MG','1980-02-02','2019-05-22 13:03:02'),(151,36,'0',0,'PAULO PEDOR',55,31,987411234,0,'01224202686','30160037','Rua Espirito','1700','12121','Lourdes','Belo Horizonte','MG','1980-02-02','2019-05-22 13:04:02'),(152,36,'0',0,'PAULO PEDOR',55,31,987411234,0,'01224202686','30160037','Rua Espirito','1700','12121','Lourdes','Belo Horizonte','MG','1980-02-02','2019-05-22 13:32:02'),(153,36,'0',0,'PAULO PEDOR',55,31,987411234,0,'01224202686','30160037','Rua Espirito','1700','12121','Lourdes','Belo Horizonte','MG','1980-02-02','2019-05-22 13:48:45'),(154,36,'0',0,'PAULO PEDOR',55,31,987411234,0,'01224202686','30160037','Rua Espirito','1700','12121','Lourdes','Belo Horizonte','MG','1980-02-02','2019-05-22 13:49:33'),(155,36,'0',0,'PAULO PEDOR',55,31,987411234,0,'01224202686','30160037','Rua Espirito','1700','12121','Lourdes','Belo Horizonte','MG','1980-02-02','2019-05-22 13:50:38'),(156,36,'0',0,'PAULO PEDOR',55,31,987411234,0,'01224202686','30160037','Rua Espirito','1700','12121','Lourdes','Belo Horizonte','MG','1980-02-02','2019-05-22 13:51:30'),(157,36,'0',0,'PAULO PEDOR',55,31,987411234,0,'01224202686','30160037','Rua Espirito','1700','12121','Lourdes','Belo Horizonte','MG','1980-02-02','2019-05-22 13:56:20'),(158,36,'0',0,'PAULO PEDOR',55,31,987411234,0,'01224202686','30160037','Rua Espirito','1700','12121','Lourdes','Belo Horizonte','MG','1980-02-02','2019-05-22 13:56:36'),(159,36,'0',0,'PAULO PEDOR',55,31,987411234,0,'01224202686','30160037','Rua Espirito','1700','12121','Lourdes','Belo Horizonte','MG','1980-02-02','2019-05-22 13:57:21'),(160,36,'0',0,'PAULO PEDOR',55,31,987411234,0,'01224202686','30160037','Rua Espirito','1700','12121','Lourdes','Belo Horizonte','MG','1980-02-02','2019-05-22 13:58:14'),(161,11,'0',0,'Paulo Roberto',55,31,123456789,0,'01224202686','13465400','Rua Alvaro Ribeiro','1324','','Vila Rehder','Americana','SP','1951-01-01','2019-05-22 18:07:09'),(162,11,'0',0,'Paulo Roberto',55,31,123456789,0,'01224202686','13465400','Rua Alvaro Ribeiro','1324','','Vila Rehder','Americana','SP','1951-01-01','2019-05-22 18:19:14'),(163,11,'0',0,'Paulo Roberto',55,31,123456789,0,'01224202686','13465400','Rua Alvaro Ribeiro','1324','','Vila Rehder','Americana','SP','1951-01-01','2019-05-22 18:29:04'),(164,11,'0',0,'Paulo Roberto',55,31,123456789,0,'01224202686','13465400','Rua Alvaro Ribeiro','1324','','Vila Rehder','Americana','SP','1951-01-01','2019-05-22 18:30:13'),(165,11,'0',0,'Paulo Roberto',55,31,123456789,0,'01224202686','13465400','Rua Alvaro Ribeiro','1324','','Vila Rehder','Americana','SP','1951-01-01','2019-05-22 18:30:32'),(166,11,'0',0,'Paulo Roberto',55,31,123456789,0,'01224202686','13465400','Rua Alvaro Ribeiro','1324','','Vila Rehder','Americana','SP','1951-01-01','2019-05-22 18:31:47'),(167,11,'0',0,'Paulo Roberto',55,31,123456789,0,'01224202686','13465400','Rua Alvaro Ribeiro','1324','','Vila Rehder','Americana','SP','1951-01-01','2019-05-22 18:32:04'),(168,11,'0',0,'Paulo Roberto',55,31,123456789,0,'01224202686','13465400','Rua Alvaro Ribeiro','1324','','Vila Rehder','Americana','SP','1951-01-01','2019-05-22 18:32:18'),(169,36,'0',0,'STATUTIRICARADO DD M',55,13,123456789,0,'01224202686','30160037','Rua Alvaro','1500','31321','Lourdes','Belo Horizonte','MG','1968-05-05','2019-05-22 20:14:47'),(170,36,'0',0,'STATUTIRICARADO DD M',55,13,123456789,0,'01224202686','30160037','Rua Alvaro','1500','31321','Lourdes','Belo Horizonte','MG','1968-05-05','2019-05-22 20:15:32'),(171,36,'0',0,'STATUTIRICARADO DD M',55,13,123456789,0,'01224202686','30160037','Rua Alvaro','1500','31321','Lourdes','Belo Horizonte','MG','1968-05-05','2019-05-22 20:15:44'),(172,36,'0',0,'STATUTIRICARADO DD M',55,13,123456789,0,'01224202686','30160037','Rua Alvaro','1500','31321','Lourdes','Belo Horizonte','MG','1968-05-05','2019-05-22 20:16:15'),(173,36,'0',0,'STATUTIRICARADO DD M',55,13,123456789,0,'01224202686','30160037','Rua Alvaro','1500','31321','Lourdes','Belo Horizonte','MG','1968-05-05','2019-05-22 20:16:34'),(174,36,'0',0,'STATUTIRICARADO DD M',55,13,123456789,0,'01224202686','30160037','Rua Alvaro','1500','31321','Lourdes','Belo Horizonte','MG','1968-05-05','2019-05-22 20:55:56'),(175,36,'0',0,'STATUTIRICARADO DD M',55,13,123456789,0,'01224202686','30160037','Rua Alvaro','1500','31321','Lourdes','Belo Horizonte','MG','1968-05-05','2019-05-22 20:57:44'),(176,36,'0',0,'STATUTIRICARADO DD M',55,13,123456789,0,'01224202686','30160037','Rua Alvaro','1500','31321','Lourdes','Belo Horizonte','MG','1968-05-05','2019-05-22 20:58:21'),(177,36,'0',0,'STATUTIRICARADO DD M',55,13,123456789,0,'01224202686','30160037','Rua Alvaro','1500','31321','Lourdes','Belo Horizonte','MG','1968-05-05','2019-05-22 20:58:49'),(178,36,'0',0,'STATUTIRICARADO DD M',55,13,123456789,0,'01224202686','30160037','Rua Alvaro','1500','31321','Lourdes','Belo Horizonte','MG','1968-05-05','2019-05-22 21:06:55'),(179,36,'0',0,'STATUTIRICARADO DD M',55,13,123456789,0,'01224202686','30160037','Rua Alvaro','1500','31321','Lourdes','Belo Horizonte','MG','1968-05-05','2019-05-22 21:07:22'),(180,36,'0',0,'MAUR AUR',55,31,123456789,0,'01224202686','30160037','Rua Al','500','11','Lour','Belo Horizonte','MG','1985-12-12','2019-05-22 21:09:50'),(181,36,'0',0,'MARIO SAN',55,13,123456789,0,'01224202686','13465400','Rua Alvaro','1757','1212121','Vila','Americana','SP','1980-02-02','2019-05-22 21:24:03'),(182,36,'0',0,'PAULO RNC LARA',55,31,123456789,0,'01224202686','13465400','Rua Al','123','123','Luca','Americana','SP','1980-01-01','2019-05-22 21:26:12'),(183,36,'0',0,'PAULO RNC LARA',55,31,123456789,0,'01224202686','13465400','Rua Al','123','123','Luca','Americana','SP','1980-01-01','2019-05-22 21:27:31'),(184,36,'0',0,'PAULO RNC LARA',55,31,123456789,0,'01224202686','13465400','Rua Al','123','123','Luca','Americana','SP','1980-01-01','2019-05-22 21:27:58'),(185,36,'0',0,'LAUR ASC',55,31,123456789,0,'01224202686','13465400','Alvaro','123','1','Lour','Americana','SP','1987-07-07','2019-05-22 21:30:52'),(186,36,'0',0,'LAUR ASC',55,31,123456789,0,'01224202686','13465400','Alvaro','123','1','Lour','Americana','SP','1987-07-07','2019-05-22 21:31:58'),(187,36,'0',0,'LAUR ASC',55,31,123456789,0,'01224202686','13465400','Alvaro','123','1','Lour','Americana','SP','1987-07-07','2019-05-22 21:32:24'),(188,36,'0',0,'LAUR ASC',55,31,123456789,0,'01224202686','13465400','Alvaro','123','1','Lour','Americana','SP','1987-07-07','2019-05-22 21:32:41'),(189,36,'0',0,'LOURO LOURO',55,13,123456789,0,'01224202686','13465400','Avenida Louro','123','123','Louro','Americana','SP','1945-05-05','2019-05-22 21:34:15'),(190,36,'0',0,'LOURO LOURO',55,13,123456789,0,'01224202686','13465400','Avenida Louro','123','123','Louro','Americana','SP','1945-05-05','2019-05-22 21:37:00'),(191,36,'0',0,'FRANDCISCO S',55,31,123456789,0,'01224202686','13465400','Rua Sao Francisco','123','123','Francisco','Americana','SP','1950-01-01','2019-05-22 21:43:00'),(192,36,'0',0,'ALVARO ALVA',55,31,123456789,0,'01224202686','13465400','Alvaro','123','123','Alvaro','Americana','SP','1990-09-09','2019-05-22 21:44:20'),(193,36,'0',0,'PAULO TESTE',55,31,123456789,0,'01224202686','13465400','Rua Teste','321','321','Teste','Americana','SP','1950-05-05','2019-05-22 21:55:03'),(194,38,'0',0,'MAE DA LUD',55,19,999311234,0,'01224202686','13465400','Alvaro Mac','2000','2002','Major','Americana','SP','1950-01-01','2019-05-23 00:26:54'),(195,38,'0',0,'MAE DA LUD',55,19,999311234,0,'01224202686','13465400','Alvaro Mac','2000','2002','Major','Americana','SP','1950-01-01','2019-05-23 00:27:35'),(196,38,'0',0,'MAE DA LUD',55,19,999311234,0,'01224202686','13465400','Alvaro Mac','2000','2002','Major','Americana','SP','1950-01-01','2019-05-23 00:29:38'),(197,38,'0',0,'MAE DA LUD',55,19,999311234,0,'01224202686','13465400','Alvaro Mac','2000','2002','Major','Americana','SP','1950-01-01','2019-05-23 00:31:33'),(198,38,'0',0,'LUDMILA Z',55,31,123456789,0,'01224202686','13465400','Rua Alvaro','1500','1500','Kalil','Americana','SP','1999-09-09','2019-05-23 00:41:06'),(199,38,'0',0,'LUDMILA Z',55,31,123456789,0,'01224202686','13465400','Rua Alvaro','1500','1500','Kalil','Americana','SP','1999-09-09','2019-05-23 00:43:39'),(200,38,'0',0,'LUDMILA Z',55,31,123456789,0,'01224202686','13465400','Rua Alvaro','1500','1500','Kalil','Americana','SP','1999-09-09','2019-05-23 00:44:45'),(201,38,'0',0,'LUDMILA Z',55,31,123456789,0,'01224202686','13465400','Rua Alvaro','1500','1500','Kalil','Americana','SP','1999-09-09','2019-05-23 00:45:04'),(202,38,'0',0,'LUDMILA Z',55,31,123456789,0,'01224202686','13465400','Rua Alvaro','1500','1500','Kalil','Americana','SP','1999-09-09','2019-05-23 00:45:33'),(203,38,'0',0,'LUDMILA SA',55,31,123456789,0,'01224202686','13465400','Alvaro','21321','321321','Floresta','Americana','SP','1999-09-09','2019-05-23 00:47:17'),(204,38,'0',0,'LOUCA CKA',55,31,123456789,0,'01224202686','13465400','Alvaro Motya','2321','123','Louka','Americana','SP','1999-09-01','2019-05-23 03:03:09'),(205,38,'0',0,'JOSE P',55,31,123456798,0,'01224202686','30160037','Rua Espirito','500','13','Lourdes','Belo Horizonte','MG','1980-02-23','2019-05-23 03:05:33'),(206,39,'0',0,'MAE NOIVA',55,31,123456789,0,'01224202686','30160037','Logradouro Misterio','2','200','Lourdes','Belo Horizonte','MG','1980-02-02','2019-05-23 03:11:03'),(207,39,'0',0,'LOYOLA LO',55,31,123456789,0,'01224202686','13465400','Inacio Loyola','100','102','Inacio','Americana','SP','1954-01-01','2019-05-23 03:15:51'),(208,39,'0',0,'LUCIO MO',55,31,123456789,0,'01224202686','13465400','Alvaro Rib','200','2','Lourdes','Americana','SP','1987-07-07','2019-05-23 03:21:49'),(209,39,'0',0,'LUCIO MO',55,31,123456789,0,'01224202686','13465400','Alvaro Rib','200','2','Lourdes','Americana','SP','1987-07-07','2019-05-23 03:22:22'),(210,39,'0',0,'LUCIO MO',55,31,123456789,0,'01224202686','13465400','Alvaro Rib','200','2','Lourdes','Americana','SP','1987-07-07','2019-05-23 03:23:01'),(211,39,'0',0,'LUCIO MO',55,31,123456789,0,'01224202686','13465400','Alvaro Rib','200','2','Lourdes','Americana','SP','1987-07-07','2019-05-23 03:24:19'),(212,40,'0',0,'CESAR CI',55,31,123456789,0,'01224202686','13465400','Cesar Ci','654','132','Ci','Americana','SP','1945-05-04','2019-05-23 03:28:55'),(213,40,'0',0,'LUCIO MOR',55,31,123456789,0,'01224202686','13465400','Rua Lucio Moraes','132','321','Lucio','Americana','SP','1954-10-10','2019-05-23 03:31:25'),(214,40,'0',0,'RIB RIB',55,31,321321321,0,'01224202686','13465400','Rua Alvaro Rib','1234','321','Rib','Americana','SP','1954-01-03','2019-05-23 03:33:14'),(215,40,'0',0,'KILL BILL',55,31,321321321,0,'01224202686','13465400','Rua Alvaro Lucio','1234','31','Americo','Americana','SP','1954-10-10','2019-05-23 03:34:47'),(216,41,'0',0,'LOUIR LOI',55,31,123456789,0,'01224202686','13465400','Rua Logra','123','1','Lourd','Americana','SP','1987-07-12','2019-05-23 03:49:33'),(217,41,'0',0,'LOGRA LOGRA',55,31,123123456,0,'01224202686','13465400','Rua Logra','123','321','Logra','Americana','SP','1950-05-05','2019-05-23 03:54:59'),(218,41,'0',0,'LOGRA LO',55,31,123456123,0,'01224202686','13456400','Rua Logra Logra','123','321','Logra','Americana','SP','1980-02-22','2019-05-23 03:57:14'),(219,36,'0',0,'Aluisio Nunes',55,31,123456789,0,'01224202686','30160037','Rua Espirito Santo','100','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','1980-01-01','2019-05-24 12:46:26'),(220,36,'0',0,'Ricciardo Santana',55,31,123456789,0,'01224202686','13465400','Rua Alvaro Ribeiro','100','1000','Vila Rehder','Americana','SP','1987-07-07','2019-05-24 13:16:31'),(221,36,'0',0,'Dyer Kanker',55,31,123456789,0,'01224202686','13465400','Rua Alvaro Ribeiro','400','41','Vila Rehder','Americana','SP','1980-01-01','2019-05-25 22:34:45'),(222,36,'0',0,'Dyer Kanker',55,31,123456789,0,'01224202686','13465400','Rua Alvaro Ribeiro','400','41','Vila Rehder','Americana','SP','1980-01-01','2019-05-25 22:36:01'),(223,36,'0',0,'Dyer Kanker',55,31,123456789,0,'01224202686','13465400','Rua Alvaro Ribeiro','400','41','Vila Rehder','Americana','SP','1980-01-01','2019-05-25 22:38:13'),(224,36,'0',0,'Jose Pires',55,31,123456789,0,'01224202686','13465400','Rua Alvaro Ribeiro','10000','1','Vila Rehder','Americana','SP','1980-04-01','2019-05-25 22:41:04'),(225,36,'0',0,'EU SOU EU',55,31,123456789,0,'01224202686','13465400','Rua Alvaro','123','123','Americana','Americana','SP','1980-02-02','2019-05-25 23:09:41'),(226,36,'0',0,'EU SOU EU',55,31,123456789,0,'01224202686','13465400','Rua Alvaro','123','123','Americana','Americana','SP','1980-02-02','2019-05-25 23:11:34'),(227,67,'0',0,'ALVAR RIB',55,31,123456789,0,'01224202686','13465400','Rua Alvaro','1000','10','Major','Americana','SP','1980-05-02','2019-05-26 18:00:31'),(228,67,'0',0,'ALVAR RIB',55,31,123456789,0,'01224202686','13465400','Rua Alvaro','1000','10','Major','Americana','SP','1980-05-02','2019-05-26 18:12:43'),(229,67,'0',0,'ALVAR RIB',55,31,123456789,0,'01224202686','13465400','Rua Alvaro','1000','10','Major','Americana','SP','1980-05-02','2019-05-26 18:14:20'),(230,67,'0',0,'ALVAR RIB',55,31,123456789,0,'01224202686','13465400','Rua Alvaro','1000','10','Major','Americana','SP','1980-05-02','2019-05-26 18:15:17'),(231,67,'0',0,'ALVAR RIB',55,31,123456789,0,'01224202686','13465400','Rua Alvaro','1000','10','Major','Americana','SP','1980-05-02','2019-05-26 18:15:42'),(232,67,'0',0,'ALVAR RIB',55,31,123456789,0,'01224202686','13465400','Rua Alvaro','1000','10','Major','Americana','SP','1980-05-02','2019-05-26 18:22:40'),(233,67,'0',0,'ALVAR RIB',55,31,123456789,0,'01224202686','13465400','Rua Alvaro','1000','10','Major','Americana','SP','1980-05-02','2019-05-26 18:23:09'),(234,67,'0',0,'ALVAR RIB',55,31,123456789,0,'01224202686','13465400','Rua Alvaro','1000','10','Major','Americana','SP','1980-05-02','2019-05-26 18:23:27'),(235,67,'0',0,'ALVAR RIB',55,31,123456789,0,'01224202686','13465400','Rua Alvaro','1000','10','Major','Americana','SP','1980-05-02','2019-05-26 18:28:57'),(236,67,'0',0,'ALVAR RIB',55,31,123456789,0,'01224202686','13465400','Rua Alvaro','1000','10','Major','Americana','SP','1980-05-02','2019-05-26 18:31:03'),(237,67,'0',0,'ALVAR RIB',55,31,123456789,0,'01224202686','13465400','Rua Alvaro','1000','10','Major','Americana','SP','1980-05-02','2019-05-26 18:31:41'),(238,67,'0',0,'ALVAR RIB',55,31,123456789,0,'01224202686','13465400','Rua Alvaro','1000','10','Major','Americana','SP','1980-05-02','2019-05-26 18:33:17'),(239,67,'0',0,'ALVAR RIB',55,31,123456789,0,'01224202686','13465400','Rua Alvaro','1000','10','Major','Americana','SP','1980-05-02','2019-05-26 18:34:43'),(240,67,'0',0,'ALVAR RIB',55,31,123456789,0,'01224202686','13465400','Rua Alvaro','1000','10','Major','Americana','SP','1980-05-02','2019-05-26 18:35:16'),(241,67,'0',0,'ALVAR RIB',55,31,123456789,0,'01224202686','13465400','Rua Alvaro','1000','10','Major','Americana','SP','1980-05-02','2019-05-26 18:35:41'),(242,67,'0',0,'ALVAR RIB',55,31,123456789,0,'01224202686','13465400','Rua Alvaro','1000','10','Major','Americana','SP','1980-05-02','2019-05-26 18:36:32'),(243,67,NULL,NULL,'Jose Paulo',55,31,123456789,0,'01224202686','30160037','Rua Espirito Santo','1000','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','1987-01-02','2019-05-26 20:27:47'),(244,67,'0',0,'Jose Paulo',55,31,123456789,0,'01224202686','30160037','Rua Espirito Santo','1000','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','1987-01-02','2019-05-26 20:32:19'),(245,67,'0',0,'Jose Paulo',55,31,123456789,0,'01224202686','30160037','Rua Espirito Santo','1000','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','1987-01-02','2019-05-26 20:36:07'),(246,67,'0',0,'Jose Paulo',55,31,123456789,0,'01224202686','30160037','Rua Espirito Santo','1000','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','1987-01-02','2019-05-26 20:36:33'),(247,67,'0',0,'Jose Paulo',55,31,123456789,0,'01224202686','30160037','Rua Espirito Santo','1000','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','1987-01-02','2019-05-26 20:37:56'),(248,67,'0',0,'JOSE P',55,31,123456789,0,'01224202686','13465400','Rua Alvaro Ribeiro','100','10','Vila Rehder','Americana','SP','1980-01-01','2019-05-27 13:51:11'),(249,67,'0',0,'JOSE P',55,31,123456789,0,'01224202686','13465400','Rua Alvaro Ribeiro','100','10','Vila Rehder','Americana','SP','1980-01-01','2019-05-27 13:51:34'),(250,67,'0',0,'JOSE P',55,31,123456789,0,'01224202686','13465400','Rua Alvaro Ribeiro','100','10','Vila Rehder','Americana','SP','1980-01-01','2019-05-27 13:52:13'),(251,67,'0',0,'OUTRO COMPRADOR',55,31,123456789,0,'01224202686','13465400','Rua Alvaro Ribeiro','100','1','Vila Rehder','Americana','SP','1999-09-09','2019-05-27 13:55:10'),(252,67,'0',0,'JHOSE PC',55,31,312456789,0,'02124202386','30160037','Rua Espirito Santo','1000','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','1980-02-02','2019-05-27 14:08:46'),(253,67,'0',0,'JOSE PC',55,31,123456789,0,'01224202686','13465400','Rua Alvaro Ribeiro','1000','1','Vila Rehder','Americana','SP','1980-01-01','2019-05-27 19:09:08'),(254,67,'0',0,'RON G',55,31,123456789,0,'01224202686','30160037','Rua Espirito Santo','100','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','1980-01-01','2019-05-27 19:17:58'),(255,67,'0',0,'Jose CP',55,31,123456789,0,'01224202686','30160037','Rua Espirito Santo','1111','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','1980-01-01','2019-05-27 20:44:01'),(256,67,'0',0,'PAULO RC',55,31,123456789,0,'01224202686','30160037','Rua Espirito Santo','1400','de 1641/1642 a 1829/1830','Lourdes','Belo Horizonte','MG','1980-01-01','2019-05-27 20:51:06'),(257,112,'PAY-OQ2LW2HLOA6W',1,'LOURO JOTA',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1757','38','Lourde','Americana','SP','1980-07-07','2019-05-28 03:52:57'),(258,112,'PAY-7H9M0OJPZ4ZB',1,'LOURO JOTA',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1757','38','Lourde','Americana','SP','1980-07-07','2019-05-28 03:54:55'),(259,112,'PAY-J5STVAX4IOZ4',1,'LOURO JOTA',55,31,123456789,0,'01224202686','30160037','Rua Alvaro','1757','38','Lourde','Americana','SP','1980-07-07','2019-05-28 03:55:57'),(260,67,'PAY-L7PL5XG2GMYN',1,'Comprador compras',55,31,123456789,0,'01224202686','13465400','Rua Alvaro','400','1','Major','SÃ£o Paulo','SP','1980-01-01','2019-05-28 13:45:15'),(261,67,'PAY-XQ6D0VOY4023',1,'Comprador compras',55,31,123456789,0,'01224202686','13465400','Rua Alvaro','400','1','Major','SÃ£o Paulo','SP','1980-01-01','2019-05-28 13:58:24'),(262,67,'PAY-MMVBZAR1T63Y',1,'Comprador compras',55,31,123456789,0,'01224202686','13465400','Rua Alvaro','400','1','Major','SÃ£o Paulo','SP','1980-01-01','2019-05-28 13:59:11'),(263,67,'PAY-ORT9C84PFR4W',1,'Comprador compras',55,31,123456789,0,'01224202686','13465400','Rua Alvaro','400','1','Major','SÃ£o Paulo','SP','1980-01-01','2019-05-28 13:59:47'),(264,67,'PAY-G7SBTRYGITA1',1,'Comprador compras',55,31,123456789,0,'01224202686','13465400','Rua Alvaro','400','1','Major','SÃ£o Paulo','SP','1980-01-01','2019-05-28 14:02:28'),(265,67,'PAY-1RCWPAWI15TV',1,'Comprador compras',55,31,123456789,0,'01224202686','13465400','Rua Alvaro','400','1','Major','SÃ£o Paulo','SP','1980-01-01','2019-05-28 14:02:58'),(266,67,'PAY-CP7L5XVLZ5EK',1,'Comprador compras',55,31,123456789,0,'01224202686','13465400','Rua Alvaro','400','1','Major','SÃ£o Paulo','SP','1980-01-01','2019-05-28 14:03:46'),(267,112,'PAY-RK7JVTN6FM0C',1,'COMPRADO COMPRA',55,31,123456789,0,'01224202686','13465400','Rua Alvaro','170','10','Major','Americana','SP','1980-01-10','2019-05-28 15:30:14'),(268,112,'PAY-LYE6VDBM4XUN',1,'COMPRADO COMPRA',55,31,123456789,0,'01224202686','13465400','Rua Alvaro','170','10','Major','Americana','SP','1980-01-10','2019-05-28 15:31:28'),(269,112,'PAY-5MJ5WSKE4B42',1,'COMPRADO COMPRA',55,31,123456789,0,'01224202686','13465400','Rua Alvaro','170','10','Major','Americana','SP','1980-01-10','2019-05-28 15:32:34'),(270,112,'PAY-LI639QTTYKXM',1,'COMPRADO COMPRA',55,31,123456789,0,'01224202686','13465400','Rua Alvaro','170','10','Major','Americana','SP','1980-01-10','2019-05-28 15:33:25'),(271,112,'PAY-K0QFXUJH5X5D',1,'COMPRADO COMPRA',55,31,123456789,0,'01224202686','13465400','Rua Alvaro','170','10','Major','Americana','SP','1980-01-10','2019-05-28 15:34:57'),(272,112,'PAY-1RB106HDOEWR',1,'COMPRADO COMPRA',55,31,123456789,0,'01224202686','13465400','Rua Alvaro','170','10','Major','Americana','SP','1980-01-10','2019-05-28 15:35:40'),(273,112,'PAY-NKE54NYUOO2O',1,'COMPRADO COMPRA',55,31,123456789,0,'01224202686','13465400','Rua Alvaro','170','10','Major','Americana','SP','1980-01-10','2019-05-28 15:36:22'),(274,112,'PAY-KRCQFYJ7DHBD',1,'COMPRADO COMPRA',55,31,123456789,0,'01224202686','13465400','Rua Alvaro','170','10','Major','Americana','SP','1980-01-10','2019-05-28 15:39:24'),(275,112,'PAY-DC2VXKUBHI8V',1,'COMPRADO COMPRA',55,31,123456789,0,'01224202686','13465400','Rua Alvaro','170','10','Major','Americana','SP','1980-01-10','2019-05-28 15:44:43'),(276,112,'PAY-JQE9ZYXT8TW6',1,'COMPRADO COMPRA',55,31,123456789,0,'01224202686','13465400','Rua Alvaro','170','10','Major','Americana','SP','1980-01-10','2019-05-28 15:45:57'),(277,112,'PAY-0HJLRX8B63J5',1,'COMPRADO COMPRA',55,31,123456789,0,'01224202686','13465400','Rua Alvaro','170','10','Major','Americana','SP','1980-01-10','2019-05-28 15:46:34'),(278,112,'PAY-WEZ5OOVEFL8T',1,'JOSE PC',55,31,123456789,0,'01224202686','13465400','Rua Alvaro','401','10','Lourdes','Americana','SP','1980-01-01','2019-05-28 18:36:59'),(279,112,'PAY-UPKC4PXLQFZB',1,'JOSE PC',55,31,123456789,0,'01224202686','13465400','Rua Alvaro','401','10','Lourdes','Americana','SP','1980-01-01','2019-05-28 18:39:51'),(280,112,'PAY-X13QOZSROYU9',1,'JOSE PC',55,31,123456789,0,'01224202686','13465400','Rua Alvaro','401','10','Lourdes','Americana','SP','1980-01-01','2019-05-28 18:40:21'),(281,112,'PAY-N4FNX97VSEFI',1,'JOSE PC',55,31,123456789,0,'01224202686','13465400','Rua Alvaro','401','10','Lourdes','Americana','SP','1980-01-01','2019-05-28 18:42:06'),(282,112,'PAY-ZYDVLO7ITJC0',1,'JOSE PC',55,31,123456789,0,'01224202686','13465400','Rua Alvaro','401','10','Lourdes','Americana','SP','1980-01-01','2019-05-28 18:42:54'),(283,112,'PAY-BXZUJWJYET60',1,'JOSE PC',55,31,123456789,0,'01224202686','13465400','Rua Alvaro','401','10','Lourdes','Americana','SP','1980-01-01','2019-05-28 18:43:13'),(284,112,'PAY-84H1XWOWC418',1,'JOSE PC',55,31,123456789,0,'01224202686','13465400','Rua Alvaro','401','10','Lourdes','Americana','SP','1980-01-01','2019-05-28 18:43:47'),(285,112,'PAY-MO0LO164DVPP',1,'JOSE PC',55,31,123456789,0,'01224202686','13465400','Rua Alvaro','401','10','Lourdes','Americana','SP','1980-01-01','2019-05-28 18:49:23'),(286,112,'PAY-KEORXTNBSCYG',1,'JOSE PC',55,31,123456789,0,'01224202686','13465400','Rua Alvaro','401','10','Lourdes','Americana','SP','1980-01-01','2019-05-28 18:51:08'),(287,112,'PAY-UBNEMFUHOV2K',1,'JOSE PC',55,31,123456789,0,'01224202686','13465400','Rua Alvaro','401','10','Lourdes','Americana','SP','1980-01-01','2019-05-28 18:51:53');
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
) ENGINE=InnoDB AUTO_INCREMENT=112 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_persons`
--

LOCK TABLES `tb_persons` WRITE;
/*!40000 ALTER TABLE `tb_persons` DISABLE KEYS */;
INSERT INTO `tb_persons` VALUES (11,'Jose Paulo de Carvalho',NULL,'paulowebphp@gmail.com',NULL,NULL,31984050000,0,NULL,'0.jpg','jpg',NULL,'2019-04-24 16:59:04'),(12,'Paulo de Carvalho','','pwsecvendas@gmail.com',NULL,NULL,31984050125,0,NULL,'0.jpg','jpg',NULL,'2019-05-02 20:28:12'),(13,'Maria Aparecida',NULL,'macambraia@hotmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-12 22:43:30'),(14,'Maria Aparecida',NULL,'macambraia@hotmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-12 22:46:23'),(15,'Maria Aparecida',NULL,'macambraia@hotmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-12 22:47:32'),(16,'Maria Aparecida',NULL,'macambraia@hotmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-12 22:50:19'),(17,'Maria Aparecida',NULL,'macambraia@hotmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-12 23:20:09'),(18,'Maria Apa',NULL,'macambraia@hotmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-12 23:21:09'),(19,'Maria Ap',NULL,'macambraia@hotmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-12 23:22:26'),(20,'Maria Aparecida',NULL,'macambraia@hotmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-12 23:23:12'),(21,'Maria Aparecida',NULL,'macambraia@hotmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-12 23:24:11'),(22,'Maria Ap',NULL,'macambraia@hotmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-12 23:31:24'),(23,'Maria Aparecida',NULL,'macambraia@hotmail.com',NULL,NULL,31123451234,0,NULL,'0.jpg','jpg',NULL,'2019-05-13 13:00:45'),(24,'Maria Aparecida Seabra',NULL,'macambraia@hotmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-14 12:33:05'),(25,'Maria Aparecida Seabra',NULL,'macambraia@hotmail.com',NULL,NULL,31123451234,0,NULL,'0.jpg','jpg',NULL,'2019-05-14 12:33:16'),(26,'Jose Cambraia',NULL,'jpccambraia@gmail.com',NULL,NULL,31123451234,0,NULL,'0.jpg','jpg',NULL,'2019-05-15 00:38:59'),(27,'Paulo Roberto',NULL,'paulornc@yahoo.com',NULL,NULL,31123451324,0,NULL,'0.jpg','jpg',NULL,'2019-05-15 01:10:41'),(28,'Luiz Cambraia','Luiz Cambraia','luiz@hotmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-21 13:05:12'),(29,'Luiz Cambraia','Luiz','luiz@hotmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-21 13:10:35'),(30,'Cesar Maciel','Cesar','maciel@gmail.com',NULL,12,123456789,NULL,'01224202686','0.jpg','jpg','1980-02-02','2019-05-21 17:31:32'),(31,'Geromel Santos','Geromel','geromel@hotmail.com',NULL,12,123456789,NULL,'01224202686','0.jpg','jpg','1980-02-02','2019-05-21 18:13:08'),(32,'Lucio Moraes','Lucio','lucio@hotmail.com',NULL,31,123456789,NULL,'01224202686','0.jpg','jpg','1984-12-12','2019-05-21 19:59:50'),(33,'Cesar Mariano','Cesar','cesar@gmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-21 20:50:31'),(34,'Joao Cesar','Joao','joao@gmail.com',55,31,984050125,0,'01224202686','0.jpg','jpg','1970-02-02','2019-05-21 21:06:17'),(35,'Joao Pastor','Joao','pwsecvendas@gmail.com',55,31,123456798,0,'01224202686','0.jpg','jpg','1945-01-01','2019-05-22 11:31:36'),(36,'Ludmila Duarte','Ludmila','luduarte@hotmail.com',55,31,123456789,0,'01224202686','0.jpg','jpg','1990-11-11','2019-05-23 00:14:39'),(37,'Ludmila Santos','Ludmila','lusantos@hotmail.com',55,31,123456789,0,'01224202686','0.jpg','jpg','1999-09-09','2019-05-23 00:22:44'),(38,'Luiz Felipe','Luiz','luiz@gmail.com',55,31,123456789,0,'01224202686','0.jpg','jpg','1987-01-01','2019-05-23 03:09:26'),(39,'Mario Lucio','Mario','mariolucio@gmail.com',55,31,123456789,0,'01224202686','0.jpg','jpg','1980-02-02','2019-05-23 03:27:16'),(40,'Marina Silva','Marina','marina@gmail.com',55,31,123456789,0,'01224202686','0.jpg','jpg','1954-01-04','2019-05-23 03:47:43'),(41,'Lucio Mauro','Lucio','jpccambraia2@gmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-26 02:18:03'),(42,'Galo Pereira','Galo','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','0.jpg','jpg','1950-01-01','2019-05-26 12:07:28'),(43,'Ronaldinho Gaucho','Ronaldinho','jpccambraia2@gmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-26 14:09:12'),(44,'Ronaldinho Gaucho','Ronaldinho','jpccambraia2@gmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-26 14:09:29'),(45,'Ronaldinho Gaucho','Ronaldinho','jpccambraia2@gmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-26 15:13:34'),(46,'Ronaldinho Gaucho','Ronaldinho','jpccambraia2@gmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-26 15:14:22'),(47,'Ronaldinho Gaucho','Ronaldinho','jpccambraia2@gmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-26 15:16:34'),(48,'Ronaldinho Gaucho','Ronaldinho','jpccambraia2@gmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-26 15:17:14'),(49,'Ronaldinho Gaucho','Ronaldinho','jpccambraia2@gmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-26 15:17:36'),(50,'Ronaldinho Gaucho','Ronaldinho','jpccambraia2@gmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-26 15:18:08'),(51,'Ronaldinho Gaucho','Ronaldinho','jpccambraia2@gmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-26 15:18:39'),(52,'Ronaldinho Gaucho','Ronaldinho','jpccambraia2@gmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-26 15:18:52'),(53,'Ronaldinho Gaucho','Ronaldinho','jpccambraia2@gmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-26 15:20:36'),(54,'Ronaldinho Gaucho','Ronaldinho','jpccambraia2@gmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-26 15:27:16'),(55,'Ronaldinho Gaucho','Ronaldinho','jpccambraia2@gmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-26 15:28:03'),(56,'Ronaldinho Gaucho','Ronaldinho','jpccambraia2@gmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-26 15:30:01'),(57,'Ronaldinho Gaucho','Ronaldinho','jpccambraia2@gmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-26 15:36:02'),(58,'Ronaldinho Gaucho','Ronaldinho','jpccambraia2@gmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-26 15:37:06'),(59,'Ronaldinho Gaucho','Ronaldinho','jpccambraia2@gmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-26 15:37:52'),(60,'Ronaldinho Gaucho','Ronaldinho','jpccambraia2@gmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-26 15:40:50'),(61,'Ronaldinho Gaucho','Ronaldinho','jpccambraia2@gmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-26 15:55:13'),(62,'Ronaldinho Gaucho','Ronaldinho','jpccambraia2@gmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-26 15:55:46'),(63,'Ronaldinho Gaucho','Ronaldinho','jpccambraia2@gmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-26 15:56:40'),(64,'Ronaldinho Gaucho','Ronaldinho','jpccambraia2@gmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-26 15:59:02'),(65,'Ronaldinho Gaucho','Ronaldinho','jpccambraia2@gmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-26 15:59:29'),(66,'Ronaldinho Gaucho','Ronaldinho','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','0.jpg','jpg','1980-02-02','2019-05-26 16:00:17'),(67,'Diego Tardeli','Diego','jpccambraia2@gmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-28 00:52:16'),(68,'Diego Tardeli','Diego','jpccambraia2@gmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-28 00:54:37'),(69,'Diego Tardeli','Diego','jpccambraia2@gmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-28 00:55:28'),(70,'Diego Tardeli','Diego','jpccambraia2@gmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-28 00:56:10'),(71,'Diego Tardeli','Diego','jpccambraia2@gmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-28 01:01:00'),(72,'Diego Tardeli','Diego','jpccambraia2@gmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-28 01:02:40'),(73,'Diego Tardeli','Diego','jpccambraia2@gmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-28 01:02:59'),(74,'Diego Tardeli','Diego','jpccambraia2@gmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-28 01:04:45'),(75,'Diego Tardeli','Diego','jpccambraia2@gmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-28 01:14:00'),(76,'Diego Tardeli','Diego','jpccambraia2@gmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-28 01:14:49'),(77,'Diego Tardeli','Diego','jpccambraia2@gmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-28 01:15:45'),(78,'Diego Tardeli','Diego','jpccambraia2@gmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-28 01:17:16'),(79,'Diego Tardeli','Diego','jpccambraia2@gmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-28 01:17:36'),(80,'Diego Tardeli','Diego','jpccambraia2@gmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-28 01:17:54'),(81,'Diego Tardeli','Diego','jpccambraia2@gmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-28 01:20:54'),(82,'Diego Tardeli','Diego','jpccambraia2@gmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-28 01:21:09'),(83,'Diego Tardeli','Diego','jpccambraia2@gmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-28 01:21:51'),(84,'Diego Tardeli','Diego','jpccambraia2@gmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-28 01:22:17'),(85,'Diego Tardeli','Diego','jpccambraia2@gmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-28 01:22:39'),(86,'Diego Tardeli','Diego','jpccambraia2@gmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-28 01:22:59'),(87,'Diego Tardeli','Diego','jpccambraia2@gmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-28 01:23:07'),(88,'Diego Tardeli','Diego','jpccambraia2@gmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-28 01:23:13'),(89,'Diego Tardeli','Diego','jpccambraia2@gmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-28 01:23:32'),(90,'Diego Tardeli','Diego','jpccambraia2@gmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-28 01:23:50'),(91,'Diego Tardeli','Diego','jpccambraia2@gmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-28 01:24:14'),(92,'Diego Tardeli','Diego','jpccambraia2@gmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-28 01:25:10'),(93,'Diego Tardeli','Diego','jpccambraia2@gmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-28 01:25:54'),(94,'Diego Tardeli','Diego','jpccambraia2@gmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-28 01:26:08'),(95,'Diego Tardeli','Diego','jpccambraia2@gmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-28 01:26:19'),(96,'Diego Tardeli','Diego','jpccambraia2@gmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-28 01:27:11'),(97,'Diego Tardeli','Diego','jpccambraia2@gmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-28 01:27:53'),(98,'Diego Tardeli','Diego','jpccambraia2@gmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-28 01:28:09'),(99,'Diego Tardeli','Diego','jpccambraia2@gmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-28 02:00:58'),(100,'Diego Tardeli','Diego','jpccambraia2@gmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-28 02:01:14'),(101,'Diego Tardeli','Diego','jpccambraia2@gmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-28 02:02:57'),(102,'Diego Tardeli','Diego','jpccambraia2@gmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-28 02:03:10'),(103,'Diego Tardeli','Diego','jpccambraia2@gmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-28 02:03:23'),(104,'Diego Tardeli','Diego','jpccambraia2@gmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-28 02:03:56'),(105,'Diego Tardeli','Diego','jpccambraia2@gmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-28 02:04:07'),(106,'Diego Tardeli','Diego','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','0.jpg','jpg','1990-05-05','2019-05-28 02:04:33'),(107,'Sao Vitor','Sao','jpccambraia2@gmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-28 02:23:41'),(108,'Sao Vitor','Sao','jpccambraia2@gmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-28 02:24:22'),(109,'Sao Vitor','Sao','jpccambraia2@gmail.com',NULL,NULL,NULL,0,NULL,'0.jpg','jpg',NULL,'2019-05-28 02:24:46'),(110,'Jorge Santana','Jorge','jpccambraia2@gmail.com',55,31,123456789,0,'01224202686','0.jpg','jpg','1989-02-02','2019-05-28 02:26:46'),(111,'Luiz Jonas Carvalho 9','Luiz','jpccambraia2@gmail.com',55,39,123456789,0,'01224202686','0.jpg','jpg','1980-01-12','2019-05-28 03:23:58');
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
) ENGINE=InnoDB AUTO_INCREMENT=337 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_plans`
--

LOCK TABLES `tb_plans` WRITE;
/*!40000 ALTER TABLE `tb_plans` DISABLE KEYS */;
INSERT INTO `tb_plans` VALUES (121,24,NULL,NULL,NULL,0,0,0,12,NULL,39.99,NULL,NULL,NULL,'2019-05-14 02:37:18'),(137,26,NULL,NULL,NULL,0,0,0,9,NULL,299.99,NULL,NULL,NULL,'2019-05-14 13:03:05'),(140,27,NULL,NULL,NULL,0,0,0,4,NULL,49.99,NULL,NULL,NULL,'2019-05-15 00:58:30'),(141,28,NULL,NULL,NULL,0,0,0,6,NULL,39.99,NULL,NULL,NULL,'2019-05-15 01:11:21'),(142,35,NULL,NULL,0,0,203,0,3,'Plano ClÃ¡ssico',139.99,139.99,NULL,NULL,'2019-05-22 01:03:38'),(143,35,NULL,NULL,0,0,203,0,3,'Plano ClÃ¡ssico',139.99,139.99,NULL,NULL,'2019-05-22 01:04:15'),(144,35,NULL,NULL,0,0,203,0,3,'Plano ClÃ¡ssico',139.99,139.99,NULL,NULL,'2019-05-22 01:43:20'),(145,35,NULL,NULL,0,0,203,0,3,'Plano ClÃ¡ssico',139.99,139.99,NULL,NULL,'2019-05-22 01:43:46'),(146,35,NULL,NULL,0,0,203,0,3,'Plano ClÃ¡ssico',139.99,139.99,NULL,NULL,'2019-05-22 01:44:42'),(147,35,NULL,NULL,0,0,203,0,3,'Plano ClÃ¡ssico',139.99,139.99,NULL,NULL,'2019-05-22 01:45:04'),(148,35,NULL,NULL,0,0,203,0,3,'Plano ClÃ¡ssico',139.99,139.99,NULL,NULL,'2019-05-22 01:45:31'),(149,35,NULL,NULL,0,0,203,0,3,'Plano ClÃ¡ssico',139.99,139.99,NULL,NULL,'2019-05-22 01:45:53'),(150,35,NULL,NULL,0,0,203,0,3,'Plano ClÃ¡ssico',139.99,139.99,NULL,NULL,'2019-05-22 01:47:06'),(151,35,NULL,NULL,0,0,203,0,3,'Plano ClÃ¡ssico',139.99,139.99,NULL,NULL,'2019-05-22 01:47:31'),(152,35,NULL,NULL,0,0,203,0,3,'Plano ClÃ¡ssico',139.99,139.99,NULL,NULL,'2019-05-22 01:48:44'),(153,35,NULL,NULL,0,0,203,0,3,'Plano ClÃ¡ssico',139.99,139.99,NULL,NULL,'2019-05-22 01:49:23'),(154,35,NULL,NULL,0,0,203,0,3,'Plano ClÃ¡ssico',139.99,139.99,NULL,NULL,'2019-05-22 01:49:40'),(155,35,NULL,NULL,0,0,203,0,3,'Plano ClÃ¡ssico',139.99,139.99,NULL,NULL,'2019-05-22 01:53:59'),(156,35,NULL,NULL,0,0,203,0,3,'Plano ClÃ¡ssico',139.99,139.99,NULL,NULL,'2019-05-22 01:54:22'),(157,35,NULL,NULL,0,0,203,0,3,'Plano ClÃ¡ssico',139.99,139.99,NULL,NULL,'2019-05-22 01:56:13'),(158,35,NULL,NULL,0,0,203,0,3,'Plano ClÃ¡ssico',139.99,139.99,NULL,NULL,'2019-05-22 01:57:40'),(159,35,NULL,NULL,0,0,203,0,3,'Plano ClÃ¡ssico',139.99,139.99,NULL,NULL,'2019-05-22 01:58:33'),(160,35,NULL,NULL,0,0,203,0,3,'Plano ClÃ¡ssico',139.99,139.99,NULL,NULL,'2019-05-22 01:59:57'),(161,36,NULL,NULL,0,0,303,0,3,'Plano Gold',239.99,239.99,NULL,NULL,'2019-05-22 11:54:49'),(162,36,NULL,NULL,0,0,303,0,3,'Plano Gold',239.99,239.99,NULL,NULL,'2019-05-22 11:55:53'),(163,36,NULL,NULL,0,0,303,0,3,'Plano Gold',239.99,239.99,NULL,NULL,'2019-05-22 11:56:07'),(164,36,NULL,NULL,0,0,303,0,3,'Plano Gold',239.99,239.99,NULL,NULL,'2019-05-22 12:09:29'),(165,36,NULL,NULL,0,0,303,0,3,'Plano Gold',239.99,239.99,NULL,NULL,'2019-05-22 12:09:58'),(166,36,NULL,NULL,0,0,303,0,3,'Plano Gold',239.99,239.99,NULL,NULL,'2019-05-22 12:10:48'),(167,36,NULL,NULL,0,0,303,0,3,'Plano Gold',239.99,239.99,NULL,NULL,'2019-05-22 12:11:27'),(168,36,NULL,NULL,0,0,303,0,3,'Plano Gold',239.99,239.99,NULL,NULL,'2019-05-22 12:12:21'),(169,36,NULL,NULL,0,0,303,0,3,'Plano Gold',239.99,239.99,NULL,NULL,'2019-05-22 12:16:40'),(170,36,NULL,NULL,0,0,303,0,3,'Plano Gold',239.99,239.99,NULL,NULL,'2019-05-22 12:18:14'),(171,36,NULL,NULL,0,0,303,0,3,'Plano Gold',239.99,239.99,NULL,NULL,'2019-05-22 12:45:00'),(172,36,NULL,NULL,0,0,303,0,3,'Plano Gold',239.99,239.99,NULL,NULL,'2019-05-22 12:52:23'),(173,36,NULL,NULL,0,0,303,0,3,'Plano Gold',239.99,239.99,NULL,NULL,'2019-05-22 12:54:44'),(174,36,NULL,NULL,0,0,303,0,3,'Plano Gold',239.99,239.99,NULL,NULL,'2019-05-22 12:58:39'),(175,36,NULL,NULL,0,0,303,0,3,'Plano Gold',239.99,239.99,NULL,NULL,'2019-05-22 13:00:31'),(176,36,NULL,NULL,0,0,303,0,3,'Plano Gold',239.99,239.99,NULL,NULL,'2019-05-22 13:02:06'),(177,36,NULL,NULL,0,0,303,0,3,'Plano Gold',239.99,239.99,NULL,NULL,'2019-05-22 13:02:59'),(178,36,NULL,NULL,0,0,303,0,3,'Plano Gold',239.99,239.99,NULL,NULL,'2019-05-22 13:03:59'),(179,36,NULL,NULL,0,0,303,0,3,'Plano Gold',239.99,239.99,NULL,NULL,'2019-05-22 13:31:59'),(180,36,NULL,NULL,0,0,303,0,3,'Plano Gold',239.99,239.99,NULL,NULL,'2019-05-22 13:48:42'),(181,36,NULL,NULL,0,0,303,0,3,'Plano Gold',239.99,239.99,NULL,NULL,'2019-05-22 13:49:30'),(182,36,NULL,NULL,0,0,303,0,3,'Plano Gold',239.99,239.99,NULL,NULL,'2019-05-22 13:50:35'),(183,36,NULL,NULL,0,0,303,0,3,'Plano Gold',239.99,239.99,NULL,NULL,'2019-05-22 13:51:27'),(184,36,NULL,NULL,0,0,303,0,3,'Plano Gold',239.99,239.99,NULL,NULL,'2019-05-22 13:56:17'),(185,36,NULL,NULL,0,0,303,0,3,'Plano Gold',239.99,239.99,NULL,NULL,'2019-05-22 13:56:33'),(186,36,NULL,NULL,0,0,303,0,3,'Plano Gold',239.99,239.99,NULL,NULL,'2019-05-22 13:57:17'),(187,36,NULL,NULL,0,0,303,0,3,'Plano Gold',239.99,239.99,NULL,NULL,'2019-05-22 13:58:11'),(188,36,NULL,NULL,0,0,303,0,3,'Plano Gold',239.99,239.99,NULL,NULL,'2019-05-22 20:09:18'),(189,36,NULL,NULL,0,0,303,0,3,'Plano Gold',239.99,239.99,NULL,NULL,'2019-05-22 20:10:02'),(190,36,NULL,NULL,0,0,303,0,3,'Plano Gold',239.99,239.99,NULL,NULL,'2019-05-22 20:10:54'),(191,36,NULL,NULL,0,0,303,0,3,'Plano Gold',239.99,239.99,NULL,NULL,'2019-05-22 20:12:23'),(192,36,NULL,NULL,0,0,303,0,3,'Plano Gold',239.99,239.99,NULL,NULL,'2019-05-22 20:13:39'),(193,36,NULL,NULL,0,0,303,0,3,'Plano Gold',239.99,239.99,NULL,NULL,'2019-05-22 20:14:19'),(194,36,NULL,NULL,0,0,303,0,3,'Plano Gold',239.99,239.99,NULL,NULL,'2019-05-22 20:14:43'),(195,36,NULL,NULL,0,0,303,0,3,'Plano Gold',239.99,239.99,NULL,NULL,'2019-05-22 20:15:29'),(196,36,NULL,NULL,0,0,303,0,3,'Plano Gold',239.99,239.99,NULL,NULL,'2019-05-22 20:15:41'),(197,36,NULL,NULL,0,0,303,0,3,'Plano Gold',239.99,239.99,NULL,NULL,'2019-05-22 20:16:12'),(198,36,NULL,NULL,0,0,303,0,3,'Plano Gold',239.99,239.99,NULL,NULL,'2019-05-22 20:16:30'),(199,36,NULL,NULL,0,0,303,0,3,'Plano Gold',239.99,239.99,'2019-08-23','2019-11-23','2019-05-22 20:54:23'),(200,36,NULL,NULL,0,0,303,0,3,'Plano Gold',239.99,239.99,'2019-08-23','2019-11-23','2019-05-22 20:55:53'),(201,36,NULL,NULL,0,0,303,0,3,'Plano Gold',239.99,239.99,'2019-08-23','2019-11-23','2019-05-22 20:57:41'),(202,36,NULL,NULL,0,0,303,0,3,'Plano Gold',239.99,239.99,'2019-08-23','2019-11-23','2019-05-22 20:58:18'),(203,36,NULL,NULL,0,0,303,0,3,'Plano Gold',239.99,239.99,'2019-08-23','2019-11-23','2019-05-22 20:58:46'),(204,36,NULL,NULL,0,0,303,0,3,'Plano Gold',239.99,239.99,'2019-08-23','2019-11-23','2019-05-22 21:06:52'),(205,36,NULL,NULL,0,0,303,0,3,'Plano Gold',239.99,239.99,'2019-08-23','2019-11-23','2019-05-22 21:07:19'),(206,36,NULL,NULL,0,0,304,0,4,'Plano Gold',249.99,249.99,'2019-08-23','2019-12-23','2019-05-22 21:09:47'),(207,36,NULL,NULL,0,0,301,0,1,'Plano Gold',219.99,219.99,'2019-12-24','2020-01-24','2019-05-22 21:24:00'),(208,36,NULL,NULL,0,0,303,0,3,'Plano Gold',239.99,239.99,'2020-01-25','2020-04-25','2019-05-22 21:26:09'),(209,36,NULL,NULL,0,0,303,0,3,'Plano Gold',239.99,239.99,'2020-04-26','2020-07-26','2019-05-22 21:27:28'),(210,36,NULL,NULL,0,0,303,0,3,'Plano Gold',239.99,239.99,'2020-07-27','2020-10-27','2019-05-22 21:27:55'),(211,36,NULL,NULL,0,0,301,0,1,'Plano Gold',219.99,219.99,'2020-10-28','2020-11-28','2019-05-22 21:30:49'),(212,36,NULL,NULL,0,0,301,0,1,'Plano Gold',219.99,219.99,'2020-11-29','2020-12-29','2019-05-22 21:31:55'),(213,36,NULL,NULL,0,0,301,0,1,'Plano Gold',219.99,219.99,'2020-12-30','2021-01-30','2019-05-22 21:32:21'),(214,36,NULL,NULL,0,0,301,0,1,'Plano Gold',219.99,219.99,'2021-01-31','2021-03-03','2019-05-22 21:32:38'),(215,36,NULL,NULL,0,0,306,0,6,'Plano Gold',269.99,269.99,'2021-03-04','2021-09-04','2019-05-22 21:34:12'),(216,36,NULL,NULL,0,0,306,0,6,'Plano Gold',269.99,269.99,'2021-09-05','2022-03-05','2019-05-22 21:36:56'),(217,36,NULL,NULL,0,0,301,0,1,'Plano Gold',219.99,219.99,'2022-03-06','2022-04-06','2019-05-22 21:42:57'),(218,36,NULL,NULL,0,0,304,0,4,'Plano Gold',249.99,249.99,'2022-04-07','2022-08-07','2019-05-22 21:44:17'),(219,36,NULL,NULL,0,0,306,0,6,'Plano Gold',269.99,269.99,'2022-08-08','2023-02-08','2019-05-22 21:55:00'),(220,38,NULL,NULL,0,0,106,0,6,'Plano BÃ¡sico',69.99,69.99,'2019-05-23','2019-11-23','2019-05-23 00:25:58'),(224,38,NULL,NULL,0,0,106,0,6,'Plano BÃ¡sico',69.99,69.99,'2019-05-23','2019-11-23','2019-05-23 00:31:29'),(225,38,NULL,NULL,0,0,112,0,12,'Plano BÃ¡sico',129.99,129.99,'2019-11-24','2020-11-24','2019-05-23 00:41:03'),(226,38,NULL,NULL,0,0,112,0,12,'Plano BÃ¡sico',129.99,129.99,'2020-11-25','2021-11-25','2019-05-23 00:43:36'),(227,38,NULL,NULL,0,0,112,0,12,'Plano BÃ¡sico',129.99,129.99,'2021-11-26','2022-11-26','2019-05-23 00:44:41'),(228,38,NULL,NULL,0,0,112,0,12,'Plano BÃ¡sico',129.99,129.99,'2022-11-27','2023-11-27','2019-05-23 00:45:01'),(229,38,NULL,NULL,0,0,112,0,12,'Plano BÃ¡sico',129.99,129.99,'2023-11-28','2024-11-28','2019-05-23 00:45:30'),(230,38,NULL,NULL,0,0,101,0,1,'Plano BÃ¡sico',19.99,19.99,'2024-11-29','2024-12-29','2019-05-23 00:47:14'),(231,38,NULL,NULL,0,0,201,0,1,'Plano ClÃ¡ssico',79.99,79.99,'2024-12-30','2025-01-30','2019-05-23 03:03:05'),(232,38,NULL,NULL,0,0,301,0,1,'Plano Gold',149.99,149.99,'2025-01-31','2025-03-03','2019-05-23 03:05:30'),(233,39,NULL,NULL,0,0,106,0,6,'Plano BÃ¡sico',85.99,85.99,'2019-05-23','2019-11-23','2019-05-23 03:11:00'),(234,39,NULL,NULL,0,0,206,0,6,'Plano ClÃ¡ssico',129.99,129.99,'2019-05-23','2019-11-23','2019-05-23 03:15:48'),(235,39,NULL,NULL,0,0,306,0,6,'Plano Gold',217.99,217.99,'2019-05-23','2019-11-23','2019-05-23 03:21:21'),(236,39,NULL,NULL,0,0,306,0,6,'Plano Gold',217.99,217.99,'2019-05-23','2019-11-23','2019-05-23 03:21:46'),(237,39,NULL,NULL,0,0,306,0,6,'Plano Gold',217.99,217.99,'2019-05-23','2019-11-23','2019-05-23 03:22:19'),(238,39,NULL,NULL,0,0,306,0,6,'Plano Gold',217.99,217.99,'2019-05-23','2019-11-23','2019-05-23 03:22:57'),(239,39,NULL,NULL,0,0,306,0,6,'Plano Gold',217.99,217.99,'2019-05-23','2019-11-23','2019-05-23 03:24:16'),(240,40,NULL,NULL,0,0,109,0,9,'Plano BÃ¡sico',108.99,108.99,'2019-05-23','2020-02-23','2019-05-23 03:28:52'),(241,40,NULL,NULL,0,0,209,0,9,'Plano ClÃ¡ssico',152.99,152.99,'2019-05-23','2020-02-23','2019-05-23 03:31:21'),(242,40,NULL,NULL,0,0,206,0,6,'Plano ClÃ¡ssico',129.99,129.99,'2020-02-24','2020-08-24','2019-05-23 03:33:11'),(243,40,NULL,NULL,0,0,306,0,6,'Plano Gold',217.99,217.99,'2019-05-23','2020-08-24','2019-05-23 03:34:44'),(244,41,NULL,NULL,0,0,103,0,3,'Plano BÃ¡sico',50.99,50.99,'2019-05-23','2019-08-23','2019-05-23 03:49:30'),(245,41,NULL,NULL,0,0,109,0,9,'Plano BÃ¡sico',108.99,108.99,'2019-08-24','2020-05-24','2019-05-23 03:54:56'),(246,41,NULL,NULL,0,0,209,0,9,'Plano ClÃ¡ssico',152.99,152.99,'2019-05-23','2020-05-24','2019-05-23 03:57:10'),(247,36,NULL,NULL,0,0,103,0,3,'Plano BÃ¡sico',50.99,50.99,'2023-02-09','2023-05-09','2019-05-25 23:09:38'),(248,36,NULL,NULL,0,0,103,0,3,'Plano BÃ¡sico',50.99,50.99,'2023-05-10','2023-08-10','2019-05-25 23:11:30'),(249,43,NULL,NULL,0,0,103,0,3,'Plano BÃ¡sico',50.99,50.99,'2019-05-26','2019-08-26','2019-05-26 12:22:08'),(250,43,NULL,NULL,0,0,103,0,3,'Plano BÃ¡sico',50.99,50.99,'2019-05-26','2019-08-26','2019-05-26 14:06:10'),(251,67,NULL,NULL,0,0,103,0,3,'Plano BÃ¡sico',50.99,50.99,'2019-05-26','2019-08-26','2019-05-26 16:37:47'),(252,67,NULL,NULL,0,0,103,0,3,'Plano BÃ¡sico',50.99,50.99,'2019-05-26','2019-08-26','2019-05-26 16:41:23'),(253,67,NULL,NULL,0,0,103,0,3,'Plano BÃ¡sico',50.99,50.99,'2019-05-26','2019-08-26','2019-05-26 16:42:40'),(254,67,NULL,NULL,0,0,103,0,3,'Plano BÃ¡sico',50.99,50.99,'2019-05-26','2019-08-26','2019-05-26 17:49:51'),(255,67,NULL,NULL,0,0,103,0,3,'Plano BÃ¡sico',50.99,50.99,'2019-05-26','2019-08-26','2019-05-26 17:50:48'),(256,67,NULL,NULL,0,0,103,0,3,'Plano BÃ¡sico',50.99,50.99,'2019-05-26','2019-08-26','2019-05-26 17:52:14'),(257,67,NULL,NULL,0,0,103,0,3,'Plano BÃ¡sico',50.99,50.99,'2019-05-26','2019-08-26','2019-05-26 17:54:01'),(258,67,NULL,NULL,0,0,103,0,3,'Plano BÃ¡sico',50.99,50.99,'2019-05-26','2019-08-26','2019-05-26 17:55:07'),(259,67,NULL,NULL,0,0,103,0,3,'Plano BÃ¡sico',50.99,50.99,'2019-05-26','2019-08-26','2019-05-26 17:55:48'),(260,67,NULL,NULL,0,0,103,0,3,'Plano BÃ¡sico',50.99,50.99,'2019-05-26','2019-08-26','2019-05-26 17:59:45'),(261,67,NULL,NULL,0,0,103,0,3,'Plano BÃ¡sico',50.99,50.99,'2019-05-26','2019-08-26','2019-05-26 18:00:28'),(262,67,NULL,NULL,0,0,103,0,3,'Plano BÃ¡sico',50.99,50.99,'2019-05-26','2019-08-26','2019-05-26 18:01:39'),(263,67,NULL,NULL,0,0,103,0,3,'Plano BÃ¡sico',50.99,50.99,'2019-05-26','2019-08-26','2019-05-26 18:02:01'),(264,67,NULL,NULL,0,0,103,0,3,'Plano BÃ¡sico',50.99,50.99,'2019-05-26','2019-08-26','2019-05-26 18:07:27'),(265,67,NULL,NULL,0,0,103,0,3,'Plano BÃ¡sico',50.99,50.99,'2019-05-26','2019-08-26','2019-05-26 18:08:12'),(266,67,NULL,NULL,0,0,103,0,3,'Plano BÃ¡sico',50.99,50.99,'2019-05-26','2019-08-26','2019-05-26 18:08:56'),(267,67,NULL,NULL,0,0,103,0,3,'Plano BÃ¡sico',50.99,50.99,'2019-05-26','2019-08-26','2019-05-26 18:12:40'),(268,67,NULL,NULL,0,0,103,0,3,'Plano BÃ¡sico',50.99,50.99,'2019-05-26','2019-08-26','2019-05-26 18:14:17'),(269,67,NULL,NULL,0,0,103,0,3,'Plano BÃ¡sico',50.99,50.99,'2019-05-26','2019-08-26','2019-05-26 18:15:14'),(270,67,NULL,NULL,0,0,103,0,3,'Plano BÃ¡sico',50.99,50.99,'2019-05-26','2019-08-26','2019-05-26 18:15:38'),(271,67,NULL,NULL,0,0,103,0,3,'Plano BÃ¡sico',50.99,50.99,'2019-05-26','2019-08-26','2019-05-26 18:17:08'),(272,67,NULL,NULL,0,0,103,0,3,'Plano BÃ¡sico',50.99,50.99,'2019-05-26','2019-08-26','2019-05-26 18:17:52'),(273,67,NULL,NULL,0,0,103,0,3,'Plano BÃ¡sico',50.99,50.99,'2019-05-26','2019-08-26','2019-05-26 18:19:06'),(274,67,NULL,NULL,0,0,103,0,3,'Plano BÃ¡sico',50.99,50.99,'2019-05-26','2019-08-26','2019-05-26 18:20:02'),(275,67,NULL,NULL,0,0,103,0,3,'Plano BÃ¡sico',50.99,50.99,'2019-05-26','2019-08-26','2019-05-26 18:22:37'),(276,67,NULL,NULL,0,0,103,0,3,'Plano BÃ¡sico',50.99,50.99,'2019-05-26','2019-08-26','2019-05-26 18:23:06'),(277,67,NULL,NULL,0,0,103,0,3,'Plano BÃ¡sico',50.99,50.99,'2019-05-26','2019-08-26','2019-05-26 18:23:24'),(278,67,NULL,NULL,0,0,103,0,3,'Plano BÃ¡sico',50.99,50.99,'2019-05-26','2019-08-26','2019-05-26 18:28:54'),(279,67,NULL,NULL,0,0,103,0,3,'Plano BÃ¡sico',50.99,50.99,'2019-05-26','2019-08-26','2019-05-26 18:31:00'),(280,67,NULL,NULL,0,0,103,0,3,'Plano BÃ¡sico',50.99,50.99,'2019-05-26','2019-08-26','2019-05-26 18:31:38'),(281,67,NULL,NULL,0,0,103,0,3,'Plano BÃ¡sico',50.99,50.99,'2019-05-26','2019-08-26','2019-05-26 18:33:13'),(282,67,NULL,NULL,0,0,103,0,3,'Plano BÃ¡sico',50.99,50.99,'2019-05-26','2019-08-26','2019-05-26 18:34:39'),(283,67,NULL,NULL,0,0,103,0,3,'Plano BÃ¡sico',50.99,50.99,'2019-05-26','2019-08-26','2019-05-26 18:35:13'),(284,67,NULL,NULL,0,0,103,0,3,'Plano BÃ¡sico',50.99,50.99,'2019-05-26','2019-08-26','2019-05-26 18:35:38'),(285,67,NULL,NULL,0,0,103,0,3,'Plano BÃ¡sico',50.99,50.99,'2019-05-26','2019-08-26','2019-05-26 18:36:29'),(286,111,NULL,NULL,0,0,103,0,3,'Plano BÃ¡sico',50.99,50.99,'2019-05-28','2019-08-28','2019-05-28 03:14:32'),(287,111,NULL,NULL,0,0,103,0,3,'Plano Básico',50.99,50.99,'2019-05-28','2019-08-28','2019-05-28 03:16:16'),(288,111,NULL,NULL,0,0,103,0,3,'Plano Básico',50.99,50.99,'2019-05-28','2019-08-28','2019-05-28 03:18:08'),(289,111,NULL,NULL,0,0,103,0,3,'Plano Básico',50.99,50.99,'2019-05-28','2019-08-28','2019-05-28 03:20:37'),(290,111,NULL,NULL,0,0,103,0,3,'Plano Básico',50.99,50.99,'2019-05-28','2019-08-28','2019-05-28 03:22:30'),(291,112,NULL,NULL,0,0,103,0,3,'Plano Básico',50.99,50.99,'2019-05-28','2019-08-28','2019-05-28 03:27:43'),(292,112,NULL,NULL,0,0,103,0,3,'Plano Básico',50.99,50.99,'2019-05-28','2019-08-28','2019-05-28 03:28:49'),(293,112,NULL,NULL,0,0,103,0,3,'Plano Básico',50.99,50.99,'2019-05-28','2019-08-28','2019-05-28 03:30:08'),(294,112,NULL,NULL,0,0,103,0,3,'Plano Básico',50.99,50.99,'2019-05-28','2019-08-28','2019-05-28 03:30:54'),(295,112,NULL,NULL,0,0,103,0,3,'Plano Básico',50.99,50.99,'2019-05-28','2019-08-28','2019-05-28 03:31:16'),(296,112,NULL,NULL,0,0,103,0,3,'Plano Básico',50.99,50.99,'2019-05-28','2019-08-28','2019-05-28 03:37:36'),(297,112,NULL,NULL,0,0,103,0,3,'Plano Básico',50.99,50.99,'2019-05-28','2019-08-28','2019-05-28 03:50:27'),(298,112,NULL,NULL,0,0,103,0,3,'Plano Básico',50.99,50.99,'2019-05-28','2019-08-28','2019-05-28 03:50:47'),(299,112,NULL,NULL,0,0,103,0,3,'Plano Básico',50.99,50.99,'2019-05-28','2019-08-28','2019-05-28 03:52:01'),(300,112,NULL,NULL,0,0,103,0,3,'Plano Básico',50.99,50.99,'2019-05-28','2019-08-28','2019-05-28 03:52:54'),(301,112,NULL,NULL,0,0,103,0,3,'Plano Básico',50.99,50.99,'2019-05-28','2019-08-28','2019-05-28 03:54:51'),(302,112,NULL,NULL,0,0,103,0,3,'Plano Básico',50.99,50.99,'2019-05-28','2019-08-28','2019-05-28 03:55:53'),(303,112,NULL,NULL,0,0,103,0,3,'Plano BÃ¡sico',50.99,50.99,'2019-08-29','2019-11-29','2019-05-28 15:24:35'),(304,112,NULL,NULL,0,0,103,0,3,'Plano Básico',50.99,50.99,'2019-11-30','2020-03-01','2019-05-28 15:25:07'),(305,112,NULL,NULL,0,0,103,0,3,'Plano Básico',50.99,50.99,'2020-03-02','2020-06-02','2019-05-28 15:26:03'),(306,112,NULL,NULL,0,0,103,0,3,'Plano Básico',50.99,50.99,'2020-06-03','2020-09-03','2019-05-28 15:28:44'),(307,112,NULL,NULL,0,0,103,0,3,'Plano Básico',50.99,50.99,'2020-09-04','2020-12-04','2019-05-28 15:28:59'),(308,112,NULL,NULL,0,0,103,0,3,'Plano Básico',50.99,50.99,'2020-12-05','2021-03-05','2019-05-28 15:29:42'),(309,112,NULL,NULL,0,0,103,0,3,'Plano Básico',50.99,50.99,'2021-03-06','2021-06-06','2019-05-28 15:30:11'),(310,112,NULL,NULL,0,0,103,0,3,'Plano Básico',50.99,50.99,'2021-06-07','2021-09-07','2019-05-28 15:31:25'),(311,112,NULL,NULL,0,0,103,0,3,'Plano Básico',50.99,50.99,'2021-09-08','2021-12-08','2019-05-28 15:32:31'),(312,112,NULL,NULL,0,0,103,0,3,'Plano Básico',50.99,50.99,'2021-12-09','2022-03-09','2019-05-28 15:33:22'),(313,112,NULL,NULL,0,0,103,0,3,'Plano Básico',50.99,50.99,'2022-03-10','2022-06-10','2019-05-28 15:34:53'),(314,112,NULL,NULL,0,0,103,0,3,'Plano Básico',50.99,50.99,'2022-06-11','2022-09-11','2019-05-28 15:35:37'),(315,112,NULL,NULL,0,0,103,0,3,'Plano Básico',50.99,50.99,'2022-09-12','2022-12-12','2019-05-28 15:36:18'),(316,112,NULL,NULL,0,0,103,0,3,'Plano Básico',50.99,50.99,'2022-12-13','2023-03-13','2019-05-28 15:39:21'),(317,112,NULL,NULL,0,0,103,0,3,'Plano Básico',50.99,50.99,'2023-03-14','2023-06-14','2019-05-28 15:44:40'),(318,112,NULL,NULL,0,0,103,0,3,'Plano Básico',50.99,50.99,'2023-06-15','2023-09-15','2019-05-28 15:45:54'),(319,112,NULL,NULL,0,0,103,0,3,'Plano Básico',50.99,50.99,'2023-09-16','2023-12-16','2019-05-28 15:46:30'),(320,112,NULL,NULL,0,0,203,0,3,'Plano Clássico',94.99,94.99,'2019-05-28','2023-12-16','2019-05-28 18:29:18'),(321,112,NULL,NULL,0,0,203,0,3,'Plano Clássico',94.99,94.99,'2019-05-28','2023-12-16','2019-05-28 18:29:58'),(322,112,NULL,NULL,0,0,203,0,3,'Plano Clássico',94.99,94.99,'2019-05-28','2023-12-16','2019-05-28 18:33:52'),(323,112,NULL,NULL,0,0,203,0,3,'Plano Clássico',94.99,94.99,'2019-05-28','2023-12-16','2019-05-28 18:34:59'),(324,112,NULL,NULL,0,0,203,0,3,'Plano Clássico',94.99,94.99,'2019-05-28','2023-12-16','2019-05-28 18:35:20'),(325,112,NULL,NULL,0,0,203,0,3,'Plano Clássico',94.99,94.99,'2019-05-28','2023-12-16','2019-05-28 18:35:36'),(326,112,NULL,NULL,0,0,203,0,3,'Plano Clássico',94.99,94.99,'2019-05-28','2023-12-16','2019-05-28 18:35:51'),(327,112,NULL,NULL,0,0,203,0,3,'Plano Clássico',94.99,94.99,'2019-05-28','2023-12-16','2019-05-28 18:36:55'),(328,112,NULL,NULL,0,0,203,0,3,'Plano Clássico',94.99,94.99,'2019-05-28','2023-12-16','2019-05-28 18:39:48'),(329,112,NULL,NULL,0,0,203,0,3,'Plano Clássico',94.99,94.99,'2019-05-28','2023-12-16','2019-05-28 18:40:18'),(330,112,NULL,NULL,0,0,203,0,3,'Plano Clássico',94.99,94.99,'2019-05-28','2023-12-16','2019-05-28 18:42:03'),(331,112,NULL,NULL,0,0,203,0,3,'Plano Clássico',94.99,94.99,'2019-05-28','2023-12-16','2019-05-28 18:42:51'),(332,112,NULL,NULL,0,0,203,0,3,'Plano Clássico',94.99,94.99,'2019-05-28','2023-12-16','2019-05-28 18:43:09'),(333,112,NULL,NULL,0,0,203,0,3,'Plano Clássico',94.99,94.99,'2019-05-28','2023-12-16','2019-05-28 18:43:43'),(334,112,NULL,NULL,0,0,203,0,3,'Plano Clássico',94.99,94.99,'2019-05-28','2023-12-16','2019-05-28 18:49:19'),(335,112,NULL,NULL,0,0,203,0,3,'Plano Clássico',94.99,94.99,'2019-05-28','2023-12-16','2019-05-28 18:51:05'),(336,112,NULL,NULL,0,0,203,0,3,'Plano Clássico',94.99,94.99,'2019-05-28','2023-12-16','2019-05-28 18:51:50');
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
) ENGINE=InnoDB AUTO_INCREMENT=124 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_products`
--

LOCK TABLES `tb_products` WRITE;
/*!40000 ALTER TABLE `tb_products` DISABLE KEYS */;
INSERT INTO `tb_products` VALUES (101,13,NULL,11,'Tonel',900.00,NULL,NULL,NULL,NULL,'1311101.jpg','jpg','2019-05-05 02:54:21'),(102,13,NULL,11,'Licor',250.00,NULL,NULL,NULL,NULL,'1311102.jpg','jpg','2019-05-05 02:54:28'),(104,13,NULL,11,'Cacha?a Artesanal',200.00,NULL,NULL,NULL,NULL,'1311104.jpg','jpg','2019-05-07 00:58:36'),(105,11,NULL,11,'Espumante',500.00,NULL,NULL,NULL,NULL,'1111105.jpg','jpg','2019-05-11 04:23:10'),(106,11,NULL,16,'Passeio de helic?ptero',700.00,NULL,NULL,NULL,NULL,'1111106.jpg','jpg','2019-05-11 04:23:18'),(107,13,0,11,'Mestre Yoda',800.00,NULL,NULL,NULL,NULL,'1311107.jpg','jpg','2019-05-11 21:00:07'),(108,13,NULL,15,'Xbox 360 Arcade',1000.00,NULL,NULL,NULL,NULL,'1311108.jpg','jpg','2019-05-11 21:00:39'),(109,13,0,15,'Notebook para Devs',2000.00,NULL,NULL,NULL,NULL,'1311109.jpg','jpg','2019-05-11 21:00:54'),(110,11,0,11,'Mestre Yoda',500.50,NULL,NULL,NULL,NULL,'1111110.jpg','jpg','2019-05-11 21:02:26'),(111,11,NULL,16,'Viagem para Nova York',1800.00,NULL,NULL,NULL,NULL,'1111111.jpg','jpg','2019-05-11 21:02:51'),(112,11,0,16,'Uma semana de Cruzeiro maritimo',5000.00,NULL,NULL,NULL,NULL,'1111112.jpg','jpg','2019-05-11 21:03:23'),(113,26,NULL,11,'Adega',1000.00,NULL,NULL,NULL,NULL,'2611113.jpg','jpg','2019-05-14 17:15:24'),(114,26,0,11,'Meu Presente',1500.00,NULL,NULL,NULL,NULL,'2611114.jpg','jpg','2019-05-14 17:15:54'),(115,26,NULL,15,'TV 4K',1800.00,NULL,NULL,NULL,NULL,'2611115.jpg','jpg','2019-05-14 22:13:18'),(116,26,NULL,17,'Poltrona',300.00,NULL,NULL,NULL,NULL,'2611116.jpg','jpg','2019-05-14 22:13:27'),(117,26,NULL,16,'Viagem pela Amaz?nia',1200.00,NULL,NULL,NULL,NULL,'2611117.jpg','jpg','2019-05-14 22:25:05'),(118,26,0,11,'Meu Presente de Teste',1000.00,NULL,NULL,NULL,NULL,'2611118.jpg','jpg','2019-05-14 22:25:25'),(119,28,0,11,'Champagne da Vitória!!!!',700.00,NULL,NULL,NULL,NULL,'2811119.jpg','jpg','2019-05-15 14:29:59'),(120,36,NULL,11,'Champagne',700.00,NULL,NULL,NULL,NULL,'3611120.jpg','jpg','2019-05-24 12:17:18'),(121,36,NULL,11,'Kit Caipirinha',100.00,NULL,NULL,NULL,NULL,'3611121.jpg','jpg','2019-05-24 12:17:30'),(122,67,NULL,11,'Adega climatizada',2000.00,NULL,NULL,NULL,NULL,'6711122.jpg','jpg','2019-05-26 19:51:30'),(123,67,NULL,11,'Licor',250.00,NULL,NULL,NULL,NULL,'6711123.jpg','jpg','2019-05-26 19:51:35');
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
  KEY `fk_rsvp_users_idx` (`iduser`),
  CONSTRAINT `fk_rsvp_users` FOREIGN KEY (`iduser`) REFERENCES `tb_users` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_rsvp`
--

LOCK TABLES `tb_rsvp` WRITE;
/*!40000 ALTER TABLE `tb_rsvp` DISABLE KEYS */;
INSERT INTO `tb_rsvp` VALUES (11,11,'24João24 Vicente Dornas','242424@hotmail.com',24998882424,0,24,NULL,24,NULL,NULL,NULL,'2019-04-27 14:45:32'),(12,11,'Mais um ','paulo@gmail.com',31984050129,0,1,NULL,10,NULL,NULL,NULL,'2019-04-27 15:00:55'),(13,11,'Maria do Rosário','rosario@rosario.com',29888887777,0,10,NULL,1,NULL,NULL,NULL,'2019-04-27 15:01:06'),(15,11,'55555555555555','55555555555555',12123451234,0,15,NULL,5,NULL,NULL,NULL,'2019-05-01 01:19:04'),(23,26,'Jose Paulo','jpcamb@gmail.com',31987452152,1,2,5,2,5,'Cinta, Gustavo','2019-05-17','2019-05-17 15:23:23'),(25,26,'Maria Aparecida','maria@gmail.com',31984050125,1,5,2,5,2,'JoÃ£o, Maria','2019-05-17','2019-05-17 18:07:55'),(26,26,'Paulo Roberto','paulornc@c.com',31984050125,1,10,1,5,1,'Joao Luiz, Maria Silvia','2019-05-17','2019-05-17 18:12:11'),(27,36,'Joao Goncalves','paulowebphp@gmail.com',31123456789,1,10,5,10,5,'Jose, Ludmila','2019-05-25','2019-05-25 16:15:49');
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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_rsvpconfig`
--

LOCK TABLES `tb_rsvpconfig` WRITE;
/*!40000 ALTER TABLE `tb_rsvpconfig` DISABLE KEYS */;
INSERT INTO `tb_rsvpconfig` VALUES (1,26,0,9,9,'2019-05-17 13:44:03'),(2,65,0,10,10,'2019-05-26 15:59:02'),(3,66,0,10,10,'2019-05-26 15:59:29'),(4,67,0,10,10,'2019-05-26 16:00:17'),(5,106,0,10,10,'2019-05-28 02:04:07'),(6,107,0,10,10,'2019-05-28 02:04:33'),(7,110,0,10,10,'2019-05-28 02:24:46'),(8,111,0,10,10,'2019-05-28 02:26:46'),(9,112,0,10,10,'2019-05-28 03:23:58');
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
  `inadmin` tinyint(4) DEFAULT '0',
  `inseller` tinyint(4) DEFAULT '0',
  `instatus` tinyint(4) DEFAULT '0',
  `inplancontext` tinyint(4) DEFAULT '0',
  `inplan` int(3) DEFAULT '0',
  `interms` tinyint(4) DEFAULT '0',
  `desipterms` varchar(22) DEFAULT NULL,
  `dtterms` datetime DEFAULT NULL,
  `dtplanbegin` date DEFAULT NULL,
  `dtplanend` date DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`iduser`),
  KEY `FK_users_persons_idx` (`idperson`),
  CONSTRAINT `fk_users_persons` FOREIGN KEY (`idperson`) REFERENCES `tb_persons` (`idperson`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=113 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_users`
--

LOCK TABLES `tb_users` WRITE;
/*!40000 ALTER TABLE `tb_users` DISABLE KEYS */;
INSERT INTO `tb_users` VALUES (11,11,'paulowebphp@gmail.com','$2y$12$jYbcHfoWsKGtdWfB7EVgnu73w/ophUt8xY3GpK.9X7KIEp108zdK.','paulowebphp',1,0,1,0,312,0,NULL,NULL,NULL,'0000-00-00','2019-04-24 17:00:33'),(13,12,'pwsecvendas2@gmail.com','$2y$12$qqbxp3qNREn1tAOSIE.QT.paU43mRLeiLRsx/RzUVCFBtEN.f51ku','pwsecvendas2',1,0,1,0,312,0,NULL,NULL,NULL,NULL,'2019-05-02 20:29:22'),(26,25,'macambraia@hotmail.com','$2y$12$aEaG275Y7/OKrFH5K7Pi4OzOBrwuB8jpQPIyKXDb4HT/3BNIScB1W','macambraia',0,1,1,0,209,0,NULL,NULL,'2019-05-14','2020-02-14','2019-05-14 12:33:16'),(27,26,'jpccambraia@gmail.com','$2y$12$mTJaqb1pw4aZE7jAdUjeMuqFwrosZ87tLu/eNqBD2HstDssGH1DVy',NULL,0,1,1,0,104,0,NULL,NULL,'2019-05-15','2019-09-15','2019-05-15 00:38:59'),(28,27,'paulornc@yahoo.com','$2y$12$KkdLbckLG93QhMRIiB63Bu6ApieRi0HQoKJ80Pmtjjifl7ajGB2q6','paulornc',0,1,1,0,306,0,NULL,NULL,'2019-05-15','2019-11-15','2019-05-15 01:10:41'),(29,28,'luiz@hotmail.com','$2y$12$WlOyWLIPAsLG7Yg77ybu7O7v6hGaFOw/Cyt.y6FplxBinrGgQkX72',NULL,0,1,0,0,103,0,NULL,NULL,NULL,NULL,'2019-05-21 13:05:12'),(30,29,'luiz@hotmail.com','$2y$12$VMxAXVQoV9n1Wl2gKZZgY.sb6EP0MvEutkbuZi3S.QksavvJkryc2',NULL,0,1,0,0,103,0,NULL,NULL,NULL,NULL,'2019-05-21 13:10:35'),(31,30,'maciel@gmail.com','$2y$12$qHto1uxDttv8WFkDpOR96uDfl3VzCGsuBudI2.sGuBBsPooz6Vgpa',NULL,0,1,0,0,203,0,NULL,NULL,NULL,NULL,'2019-05-21 17:31:32'),(32,31,'geromel@hotmail.com','$2y$12$5NwYPNwy4UZqTvnVINHc2uBQZHmMPvFjpI7VaPGuHY7iCgvQI82pq',NULL,0,1,0,0,306,0,NULL,NULL,NULL,NULL,'2019-05-21 18:13:08'),(33,32,'lucio@hotmail.com','$2y$12$K4ZPIf5JJyZK8LvMfsDOVuS/vSUur86oudlIrmEfYeX1OSxIANdFe',NULL,0,1,0,0,212,0,NULL,NULL,NULL,NULL,'2019-05-21 19:59:50'),(34,33,'cesar@gmail.com','$2y$12$HGr6LuuD8Ih6NexTTcQFuepEKsEOtcpAsd5sFbDcskPshB92fumgK',NULL,0,1,0,0,304,0,NULL,NULL,NULL,NULL,'2019-05-21 20:50:32'),(35,34,'joao@gmail.com','$2y$12$gbZ1MoENiR0vLqZ.AqiLPuDWNfg9upwaon0nxIGmw/tIvx/0mg71O',NULL,0,1,0,0,203,0,NULL,NULL,NULL,NULL,'2019-05-21 21:06:17'),(36,35,'pwsecvendas@gmail.com','$2y$12$zLr8TyZMjN/wbBeoAX1RdObv4dZTf8DGyY7YOY4hkvTwAzyLfdl.W','pwsecvendas',0,1,1,0,103,1,'127.0.0.1','2019-05-22 13:42:24','2019-05-22','2023-08-10','2019-05-22 11:31:36'),(37,36,'luduarte@hotmail.com','$2y$12$IvvT9h3ASDKkwexU7N0l1OCnbU0OCBtyXIeFFrxeUu/JlnKHmjHZa',NULL,0,1,0,0,104,1,'127.0.0.1','2019-05-23 02:15:27',NULL,NULL,'2019-05-23 00:14:39'),(38,37,'lusantos@hotmail.com','$2y$12$c8ID32.2WaZt5wqN/aaR2e0n8BPVnzYAlcaTY/.6VsvApZktRhXZa',NULL,0,1,1,0,301,1,'127.0.0.1','2019-05-23 02:23:27','2019-05-23','2025-03-03','2019-05-23 00:22:44'),(39,38,'luiz@gmail.com','$2y$12$G6Ll5ju8Zbm5RqdVAfSSj.BGHj06Y77aiwgDs05IpVG35iAApdkzi',NULL,0,1,1,0,306,1,'127.0.0.1','2019-05-23 05:10:04','2019-05-23','2019-11-23','2019-05-23 03:09:26'),(40,39,'mariolucio@gmail.com','$2y$12$A00sX8DgggLRG6LPtQcofuCG/8BpthCpVkmAOsEdKAvrb3txYw5ky',NULL,0,1,1,0,306,1,'127.0.0.1','2019-05-23 05:27:49','2019-05-23','2020-08-24','2019-05-23 03:27:16'),(41,40,'marina@gmail.com','$2y$12$b2cWL.NXmbk8LkVe0vw9UORJwcOGESRDtibnOrWcckm7VZAWHz9Ze',NULL,0,1,1,0,209,1,'127.0.0.1','2019-05-23 05:48:24','2019-05-23','2020-05-24','2019-05-23 03:47:44'),(42,41,'jpccambraia2@gmail.com','$2y$12$xlAhDa4gpjOjy.e9IxhKEeMPc402EO/WyQSCjByiGAeHsxbQd0uFu',NULL,0,1,0,0,104,0,NULL,NULL,NULL,NULL,'2019-05-26 02:18:03'),(43,42,'jpccambraia2@gmail.com','$2y$12$wm154rE1Hh2Tww1qmL6aKOUx0yYdgNywn31FBJJdInpGWQwhWFoam',NULL,0,1,0,0,103,1,'127.0.0.1','2019-05-26 14:14:59',NULL,NULL,'2019-05-26 12:07:29'),(44,43,'jpccambraia2@gmail.com','$2y$12$wyvCmcZ7yRBAYQH8xdnUOORSAV05WmvFPDK/F/E03D07rQjwNo3t2',NULL,0,1,0,1,103,0,NULL,NULL,NULL,NULL,'2019-05-26 14:09:12'),(45,44,'jpccambraia2@gmail.com','$2y$12$TwDlRjJkqKQjsAjfohbpsemqEsd/mvJawfjzBMSlSMrqylamUsKNO',NULL,0,1,0,1,103,0,NULL,NULL,NULL,NULL,'2019-05-26 14:09:29'),(46,45,'jpccambraia2@gmail.com','$2y$12$ta95ddG/7HXbybClAkuobecov2tEkDYodayojCF2BiBOiqm4gpVqa',NULL,0,1,0,1,103,0,NULL,NULL,NULL,NULL,'2019-05-26 15:13:34'),(47,46,'jpccambraia2@gmail.com','$2y$12$zmJL3XMaXOxckRb3BOrvUeyU4/vJhZ7v.M6t6qpXB08v5VY4u70Gq',NULL,0,1,0,1,103,0,NULL,NULL,NULL,NULL,'2019-05-26 15:14:22'),(48,47,'jpccambraia2@gmail.com','$2y$12$qUXiencrO1hvL6VkMaRCFubN179tln8mMXwZCsSzxo56vSOwFzBNO',NULL,0,1,0,1,103,0,NULL,NULL,NULL,NULL,'2019-05-26 15:16:34'),(49,48,'jpccambraia2@gmail.com','$2y$12$vqqEJA9m1Kbng5OE3Weh0ujixIXmHKFTj4IsDBV5297EpwU6HDzCK',NULL,0,1,0,1,103,0,NULL,NULL,NULL,NULL,'2019-05-26 15:17:14'),(50,49,'jpccambraia2@gmail.com','$2y$12$H4OdSOkjLLQGeC3WvNJp5ez5Oz3SN4lmhPBGZW/P0wQNkT6f6JUni',NULL,0,1,0,1,103,0,NULL,NULL,NULL,NULL,'2019-05-26 15:17:36'),(51,50,'jpccambraia2@gmail.com','$2y$12$QP8Xrzn0Z3067jo6J92UQu4/tntKKKT/xXOmT7TEgogd2j0yRGS.m',NULL,0,1,0,1,103,0,NULL,NULL,NULL,NULL,'2019-05-26 15:18:08'),(52,51,'jpccambraia2@gmail.com','$2y$12$RaVYtWiO6r.L0KJYBgblBOceExPMNHEdM7a0t.pndLFSZFBDF/1iq',NULL,0,1,0,1,103,0,NULL,NULL,NULL,NULL,'2019-05-26 15:18:39'),(53,52,'jpccambraia2@gmail.com','$2y$12$z4JXrqSo5D3MQZs9GBdo9u30AVEZRNaxvMgBin9Rjh1Yi07BVANyq',NULL,0,1,0,1,103,0,NULL,NULL,NULL,NULL,'2019-05-26 15:18:52'),(54,53,'jpccambraia2@gmail.com','$2y$12$mup0wPbh6J2jyrKOIri/qOL5uRtro0/G2JReA.yrm3gyYkbJwV81C',NULL,0,1,0,1,103,0,NULL,NULL,NULL,NULL,'2019-05-26 15:20:37'),(55,54,'jpccambraia2@gmail.com','$2y$12$n144XbQNFzse1VzY7YSzHOiOPIvN.hDFZNlSKdu99qD0d0OkRjLYu',NULL,0,1,0,1,103,0,NULL,NULL,NULL,NULL,'2019-05-26 15:27:16'),(56,55,'jpccambraia2@gmail.com','$2y$12$3HEYjXk4HuBNPaZxgrx5..n1w9j4xEfYe5YX1WP6J/FbzNRG.fjb.',NULL,0,1,0,1,103,0,NULL,NULL,NULL,NULL,'2019-05-26 15:28:03'),(57,56,'jpccambraia2@gmail.com','$2y$12$1/QwQ4fgL0/bYauK8QqtJOAdHt74MqwE9gE7MQs9.yAj4dOYOd3qm',NULL,0,1,0,1,103,0,NULL,NULL,NULL,NULL,'2019-05-26 15:30:01'),(58,57,'jpccambraia2@gmail.com','$2y$12$OB9x/NyPICSPPDT8Jl68K.Crsk16kS1U.9IoPkJg.6Zc7SYYDI4vW',NULL,0,1,0,1,103,0,NULL,NULL,NULL,NULL,'2019-05-26 15:36:02'),(59,58,'jpccambraia2@gmail.com','$2y$12$ksbL6NgqZHRRlG31ptWtquGo0W0OZCASLia1RZnh6VUHTsxZ.B4Qa',NULL,0,1,0,1,103,0,NULL,NULL,NULL,NULL,'2019-05-26 15:37:06'),(60,59,'jpccambraia2@gmail.com','$2y$12$ujWImXBMi7mIelenMrqNPu6aZ8guttjniBHyBq4qBaFnjyjxg3pYG',NULL,0,1,0,1,103,0,NULL,NULL,NULL,NULL,'2019-05-26 15:37:52'),(61,60,'jpccambraia2@gmail.com','$2y$12$2SrLJUtxJkeAVvnUPaTvfeeuitqxrSZF52mUN..i.7u8MFUWgxkXG',NULL,0,1,0,1,103,0,NULL,NULL,NULL,NULL,'2019-05-26 15:40:50'),(62,61,'jpccambraia2@gmail.com','$2y$12$kORxczx1JeUbf/VG17NyyuSxBd7.qWXCZ4Nif3cZkSfZw4I7xzsXC',NULL,0,1,0,1,103,0,NULL,NULL,NULL,NULL,'2019-05-26 15:55:13'),(63,62,'jpccambraia2@gmail.com','$2y$12$VNcBTw809LFs3fuVFKeEu.ogZWSOFUpxOIiy2jUIj9SKyb1.c7CzO',NULL,0,1,0,1,103,0,NULL,NULL,NULL,NULL,'2019-05-26 15:55:46'),(64,63,'jpccambraia2@gmail.com','$2y$12$xif/8PtuvTYd.J1Fv4s.fuS09Y.FyhCPiRPdLFKxIe8EipFeNoFLi',NULL,0,1,0,1,103,0,NULL,NULL,NULL,NULL,'2019-05-26 15:56:40'),(65,64,'jpccambraia2@gmail.com','$2y$12$Wxup5j23hhvEx2BGRv/YNe1sAD3Mq2T27mQlHzkw9uM2a0EZWE1um',NULL,0,1,0,1,103,0,NULL,NULL,NULL,NULL,'2019-05-26 15:59:02'),(66,65,'jpccambraia2@gmail.com','$2y$12$OUk/iAwDAV8Uwf2QCt/6c.oVAxcr3y6glGlZwTP7A8W8VC/u2pgL.',NULL,0,1,0,1,103,0,NULL,NULL,NULL,NULL,'2019-05-26 15:59:29'),(67,66,'jpccambraia2@gmail.com','$2y$12$jYbcHfoWsKGtdWfB7EVgnu73w/ophUt8xY3GpK.9X7KIEp108zdK.','r10',0,1,1,1,103,1,'127.0.0.1','2019-05-26 18:23:48','2019-05-26','2019-08-26','2019-05-26 16:00:17'),(68,67,'jpccambraia2@gmail.com','39Xjozepx',NULL,0,1,0,1,109,0,NULL,NULL,NULL,NULL,'2019-05-28 00:52:16'),(69,68,'jpccambraia2@gmail.com','$2y$12$d6ry5QiYLuCGT75qvMb50.rqVUOYWVg8J8UgkUlVeFPW.bYEe29nK',NULL,0,1,0,1,109,0,NULL,NULL,NULL,NULL,'2019-05-28 00:54:37'),(70,69,'jpccambraia2@gmail.com','$2y$12$.F6ircitetrCOnVrbVDbVuUQoRUat4FNZ3E1VFPJv3EP95gcOwKlq',NULL,0,1,0,1,109,0,NULL,NULL,NULL,NULL,'2019-05-28 00:55:28'),(71,70,'jpccambraia2@gmail.com','$2y$12$nLbG4WgkxuovPrCqebYPbumq6PrEHqD1QoTVyemo.7I5EdS0YgU4W',NULL,0,1,0,1,109,0,NULL,NULL,NULL,NULL,'2019-05-28 00:56:10'),(72,71,'jpccambraia2@gmail.com','$2y$12$ciu.BULLybxGL86.8rqA5.x.3lwq.UjFP2QQ.s6RB0yEsXgxuAMp.',NULL,0,1,0,1,109,0,NULL,NULL,NULL,NULL,'2019-05-28 01:01:01'),(73,72,'jpccambraia2@gmail.com','$2y$12$bI7i5S48BoIxd2ekiy.VWujyFI0GGZikjXM9timRM8GdfTCKztXlu',NULL,0,1,0,1,109,0,NULL,NULL,NULL,NULL,'2019-05-28 01:02:40'),(74,73,'jpccambraia2@gmail.com','$2y$12$NObh/374BxTz1a2YGeBhr.3uBx6y0sO2Fn07PibadO90I0HZG6TrW',NULL,0,1,0,1,109,0,NULL,NULL,NULL,NULL,'2019-05-28 01:02:59'),(75,74,'jpccambraia2@gmail.com','$2y$12$/Nc7JRa4WJpLeAGQLn0.rOHDGIp7aoyt.aBkMh6SpI6sLO.DoqYqO',NULL,0,1,0,1,109,0,NULL,NULL,NULL,NULL,'2019-05-28 01:04:45'),(76,75,'jpccambraia2@gmail.com','$2y$12$ySVHCYfXBMrxumb3uFWfTufyBGBADMaMnBfaZ.UrTcqWbhL0F7B2e',NULL,0,1,0,1,109,0,NULL,NULL,NULL,NULL,'2019-05-28 01:14:00'),(77,76,'jpccambraia2@gmail.com','$2y$12$kQ33G6hcNWghhLK0/8T5dewGFKAoa.HJZ/KQczOlo9SZsxioD0FUa',NULL,0,1,0,1,109,0,NULL,NULL,NULL,NULL,'2019-05-28 01:14:49'),(78,77,'jpccambraia2@gmail.com','$2y$12$tmIpOVTbRoEe2bVDGRenfO40fcz7Mu9AgtRqPlRsFciPbQJBfM9vG',NULL,0,1,0,1,109,0,NULL,NULL,NULL,NULL,'2019-05-28 01:15:45'),(79,78,'jpccambraia2@gmail.com','$2y$12$qhZ1j/bs2ubVd8JYXlxGuu/enIFA9oSuI7i/3M3t1J7Xg025Sv8vO',NULL,0,1,0,1,109,0,NULL,NULL,NULL,NULL,'2019-05-28 01:17:16'),(80,79,'jpccambraia2@gmail.com','$2y$12$V1Use1ye7ISI.QIhiC43U.pLi9Pmbl60sA33HCaElBlCCVqnOCP3O',NULL,0,1,0,1,109,0,NULL,NULL,NULL,NULL,'2019-05-28 01:17:36'),(81,80,'jpccambraia2@gmail.com','$2y$12$5NsP8i63lO2d1yOjXJxu/OUhDxkcEv4JDSrCv.E.rPEZsx1NBP9d2',NULL,0,1,0,1,109,0,NULL,NULL,NULL,NULL,'2019-05-28 01:17:54'),(82,81,'jpccambraia2@gmail.com','$2y$12$N72Urzdjg6yJMMt0e4mIK.tzsxny4lEkxmQ4.yX6k4FWYXSoOKsm.',NULL,0,1,0,1,109,0,NULL,NULL,NULL,NULL,'2019-05-28 01:20:54'),(83,82,'jpccambraia2@gmail.com','$2y$12$Th7B2CeRXVSH/3/0acRrY.ZtamNc1xHP81Y3CVxd6V9H87RJIBXVW',NULL,0,1,0,1,109,0,NULL,NULL,NULL,NULL,'2019-05-28 01:21:09'),(84,83,'jpccambraia2@gmail.com','$2y$12$2iRszgo4pc2ss4Ct76UXMuNgf0G0q7D550Fb6FBgd0XbcGTfDNRs.',NULL,0,1,0,1,109,0,NULL,NULL,NULL,NULL,'2019-05-28 01:21:51'),(85,84,'jpccambraia2@gmail.com','$2y$12$09aKBKKk0s.872UmyhRdF.nlDRPesFxa98Y9xjRMcEH4.09/yOEb2',NULL,0,1,0,1,109,0,NULL,NULL,NULL,NULL,'2019-05-28 01:22:17'),(86,85,'jpccambraia2@gmail.com','$2y$12$.odtqUS/iHM7qXYugSMyUuxMZGDh6eR2U1XFqN02IvzvP9vYaHf4G',NULL,0,1,0,1,109,0,NULL,NULL,NULL,NULL,'2019-05-28 01:22:39'),(87,86,'jpccambraia2@gmail.com','$2y$12$y6X2bBWywm0jxs7onuXk6uYMYjsaMMcPKZEvwqZmVjBYKko00cRPi',NULL,0,1,0,1,109,0,NULL,NULL,NULL,NULL,'2019-05-28 01:22:59'),(88,87,'jpccambraia2@gmail.com','$2y$12$OU/F2VXqYyJGBiJt9WIUzODWK77GAPZaVVJcDy6ndlx5g.xTXrSk.',NULL,0,1,0,1,109,0,NULL,NULL,NULL,NULL,'2019-05-28 01:23:07'),(89,88,'jpccambraia2@gmail.com','$2y$12$UTr3m7oqAwe7GF15SRwA0u8D9uwaucFAD0JO7jcExCfxM0h645ogi',NULL,0,1,0,1,109,0,NULL,NULL,NULL,NULL,'2019-05-28 01:23:13'),(90,89,'jpccambraia2@gmail.com','$2y$12$sxE2kpYjFjNSooua3SKSou77Xaz6yHHxf3QIh47nOLlNSH.vj7yL6',NULL,0,1,0,1,109,0,NULL,NULL,NULL,NULL,'2019-05-28 01:23:32'),(91,90,'jpccambraia2@gmail.com','$2y$12$gf0VC1DUnBSeyMPy3TmDi.AhBL/3WyIAI4T6TsQIVunivU3cCVbhO',NULL,0,1,0,1,109,0,NULL,NULL,NULL,NULL,'2019-05-28 01:23:50'),(92,91,'jpccambraia2@gmail.com','$2y$12$XQoSawFK9qDK30T/7cjsCeOP8D6XUTGfFHFC33fb8yo//4kPk2zBW',NULL,0,1,0,1,109,0,NULL,NULL,NULL,NULL,'2019-05-28 01:24:14'),(93,92,'jpccambraia2@gmail.com','$2y$12$RUX7/Fn7Qu2/CNOOXxBP8OmCYTY5ZSXRltTzFvnnyIH.LDFbkFHY.',NULL,0,1,0,1,109,0,NULL,NULL,NULL,NULL,'2019-05-28 01:25:10'),(94,93,'jpccambraia2@gmail.com','$2y$12$sU5T/f64JRb0UfMLEgGxA.Ry4/G0aVWPlBB35VLeVKIW7J/B7X0ca',NULL,0,1,0,1,109,0,NULL,NULL,NULL,NULL,'2019-05-28 01:25:54'),(95,94,'jpccambraia2@gmail.com','$2y$12$EZYSY093qEisTxg9ie5WgOhhu1EDsq4TfpDu.EhQ9agtYA46P9.2i',NULL,0,1,0,1,109,0,NULL,NULL,NULL,NULL,'2019-05-28 01:26:08'),(96,95,'jpccambraia2@gmail.com','$2y$12$s79NxHGTiMq0shso4UbAhedMZ5eE6ejYzH95Oy6uR5IZbwQYhXv5W',NULL,0,1,0,1,109,0,NULL,NULL,NULL,NULL,'2019-05-28 01:26:19'),(97,96,'jpccambraia2@gmail.com','$2y$12$SOU7GhV7enntywaRRMm6T.QSEnUhfiXR4wxaUZ/MlY9BnJMUwyUyO',NULL,0,1,0,1,109,0,NULL,NULL,NULL,NULL,'2019-05-28 01:27:11'),(98,97,'jpccambraia2@gmail.com','$2y$12$qHhS4HEdcrJiAxUriG.U8udpvIMUxofVzs6MV.eTsOSAX.QlVx9wy',NULL,0,1,0,1,109,0,NULL,NULL,NULL,NULL,'2019-05-28 01:27:53'),(99,98,'jpccambraia2@gmail.com','$2y$12$eo8n5vP1Wt.koPLGJW2dR.AGQhExthFkGgPs.GvkHPDY2h8L1dkQ.',NULL,0,1,0,1,109,0,NULL,NULL,NULL,NULL,'2019-05-28 01:28:09'),(100,99,'jpccambraia2@gmail.com','$2y$12$rG9.3OfFGDPQya3cglFRtu9yFksjB9mDY3i0L1zfPHxvo4HtGbnt2',NULL,0,1,0,1,109,0,NULL,NULL,NULL,NULL,'2019-05-28 02:00:58'),(101,100,'jpccambraia2@gmail.com','$2y$12$65eFyETLnVzoppppRyXxF.y2niLz9/3sDfsoHowZmyqvBNbokzdwy',NULL,0,1,0,1,109,0,NULL,NULL,NULL,NULL,'2019-05-28 02:01:14'),(102,101,'jpccambraia2@gmail.com','$2y$12$rLhmXBSpqfbttTbHZNgTOOvIMMgwB2UaKTtn.gtP2S.VaO2M.qoAK',NULL,0,1,0,1,109,0,NULL,NULL,NULL,NULL,'2019-05-28 02:02:57'),(103,102,'jpccambraia2@gmail.com','$2y$12$zzmqr9ntsYHJI9i4GJDI5uOe2gVPS9rPKoL/BTUMrSZYnaG3jA0vW',NULL,0,1,0,1,109,0,NULL,NULL,NULL,NULL,'2019-05-28 02:03:10'),(104,103,'jpccambraia2@gmail.com','$2y$12$S3A7YtFkGdQycn5T/amtb.rvVfvIvSXtoeKRVagK6bLKrIwUQZhI.',NULL,0,1,0,1,109,0,NULL,NULL,NULL,NULL,'2019-05-28 02:03:23'),(105,104,'jpccambraia2@gmail.com','$2y$12$I7MBNt3esUiRIrPOaFXz9espVI1npJdJJXs4nOQ5RHGJWDRlyyfBG',NULL,0,1,0,1,109,0,NULL,NULL,NULL,NULL,'2019-05-28 02:03:56'),(106,105,'jpccambraia2@gmail.com','$2y$12$kW1uXW4FlEmJKcCKEkP3lulLMY/xjdpTdeafmPht3hMcwNB0GypB6',NULL,0,1,0,1,109,0,NULL,NULL,NULL,NULL,'2019-05-28 02:04:07'),(107,106,'jpccambraia2@gmail.com','$2y$12$UZ/xpb2Xs8ikwTg7aXbzbeVR9RcI/wvMBQsN7XVFt2VBXgTzkmFTm',NULL,0,1,0,1,109,1,'127.0.0.1','2019-05-27 23:21:43',NULL,NULL,'2019-05-28 02:04:33'),(108,107,'jpccambraia2@gmail.com','$2y$12$FcIhxdirHa81vSidfvQETunDXZUcZtDDbML0J3dVBKWN9pAqy23Sq',NULL,0,1,0,1,106,0,NULL,NULL,NULL,NULL,'2019-05-28 02:23:41'),(109,108,'jpccambraia2@gmail.com','$2y$12$ym6kqfcIsK6usIeUqrgG4.7d/sVPSRcqaxsyruIcyKpFLmYKcfqxy',NULL,0,1,0,1,106,0,NULL,NULL,NULL,NULL,'2019-05-28 02:24:22'),(110,109,'jpccambraia2@gmail.com','$2y$12$nrA1QBHj8TIdVdEiwBmdBu.CkQWP35spItvhK41M6BXn.yovyB7Be',NULL,0,1,0,1,106,0,NULL,NULL,NULL,NULL,'2019-05-28 02:24:46'),(111,110,'jpccambraia2@gmail.com','$2y$12$iLiInbRZX7LU7qiY/rPWFeH8OaEqMSUGwQZ5YDy6MlfMZrSJdaQlO',NULL,0,1,0,1,103,1,'127.0.0.1','2019-05-27 23:29:09',NULL,NULL,'2019-05-28 02:26:46'),(112,111,'jpccambraia2@gmail.com','$2y$12$WFWPLysGy8yGkofw42px7uRqRtQWFSZOp1/sbznP9Nge1yzrs5eIe','teste',0,1,1,2,203,1,'127.0.0.1','2019-05-28 00:24:41','2019-05-28','2023-12-16','2019-05-28 03:23:58');
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
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_usersaddresses`
--

LOCK TABLES `tb_usersaddresses` WRITE;
/*!40000 ALTER TABLE `tb_usersaddresses` DISABLE KEYS */;
INSERT INTO `tb_usersaddresses` VALUES (1,33,'30160037','Rua Alvares Maciel','1756','123456','Luan','Belo Horizonte','MG','BRA','2019-05-21 20:08:06'),(2,33,'30160037','Rua Alvares Maciel','1756','123456','Luan','Belo Horizonte','MG','BRA','2019-05-21 20:08:43'),(3,33,'30160037','Rua Alvares Maciel','1756','123456','Luan','Belo Horizonte','MG','BRA','2019-05-21 20:09:00'),(4,33,'30160037','Rua Alvares Maciel','1756','123456','Luan','Belo Horizonte','MG','BRA','2019-05-21 20:09:27'),(5,35,'13465400','Rua Alvaro Ribeiro','1757','401','Major','Americana','SP','BRA','2019-05-21 21:30:06'),(6,35,'13465400','Rua Alvaro Ribeiro','1757','401','Major','Americana','SP','BRA','2019-05-21 21:30:38'),(7,35,'13465400','Rua Alvaro Ribeiro','1757','401','Major','Americana','SP','BRA','2019-05-21 21:31:31'),(8,36,'13465400','Rua Tal','100','11','Vila','Americana','SP','BRA','2019-05-22 11:39:28'),(9,36,'13465400','Rua Tal','100','11','Vila','Americana','SP','BRA','2019-05-22 11:41:03'),(10,36,'13465400','Rua Tal','100','11','Vila','Americana','SP','BRA','2019-05-22 11:41:36'),(11,36,'13465400','Rua Tal','100','11','Vila','Americana','SP','BRA','2019-05-22 11:41:58'),(12,36,'13465400','Rua Tal','100','11','Vila','Americana','SP','BRA','2019-05-22 11:42:24'),(13,37,'30160037','Praca do Papa','1000','1001','Serra','Belo Horizonte','MG','BRA','2019-05-23 00:15:27'),(14,38,'30160037','Praca do Papa','1000','1001','Serra','Belo Horizonte','MG','BRA','2019-05-23 00:23:26'),(15,39,'13465400','Rua Alvaro Ribeiro','401','1700','Major','Americana','SP','BRA','2019-05-23 03:10:04'),(16,40,'30160037','Rua Cesar','147','147','Cesar','Belo Horizonte','MG','BRA','2019-05-23 03:27:49'),(17,41,'13465400','Rua Lougra','123','132','Logra','Americana','SP','BRA','2019-05-23 03:48:24');
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
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_userspasswordsrecoveries`
--

LOCK TABLES `tb_userspasswordsrecoveries` WRITE;
/*!40000 ALTER TABLE `tb_userspasswordsrecoveries` DISABLE KEYS */;
INSERT INTO `tb_userspasswordsrecoveries` VALUES (1,13,'127.0.0.1',NULL,'2019-05-23 16:46:07'),(2,13,'127.0.0.1',NULL,'2019-05-23 16:48:06'),(3,13,'127.0.0.1',NULL,'2019-05-23 16:49:26'),(4,13,'127.0.0.1',NULL,'2019-05-23 16:51:14'),(5,13,'127.0.0.1',NULL,'2019-05-23 16:52:21'),(6,13,'127.0.0.1',NULL,'2019-05-23 16:53:25'),(7,13,'127.0.0.1',NULL,'2019-05-23 16:53:52'),(8,13,'127.0.0.1',NULL,'2019-05-23 16:56:05'),(9,13,'127.0.0.1',NULL,'2019-05-23 16:56:57'),(10,13,'127.0.0.1',NULL,'2019-05-23 16:57:12'),(11,13,'127.0.0.1',NULL,'2019-05-23 16:58:34'),(12,13,'127.0.0.1',NULL,'2019-05-23 17:18:41'),(13,13,'127.0.0.1',NULL,'2019-05-23 17:33:54'),(14,13,'127.0.0.1',NULL,'2019-05-23 19:20:23'),(15,13,'127.0.0.1',NULL,'2019-05-23 19:20:47'),(16,13,'127.0.0.1',NULL,'2019-05-23 19:21:03'),(17,13,'127.0.0.1',NULL,'2019-05-23 19:21:34'),(18,13,'127.0.0.1',NULL,'2019-05-23 19:21:58'),(19,13,'127.0.0.1',NULL,'2019-05-23 19:57:10'),(20,13,'127.0.0.1',NULL,'2019-05-23 20:03:23'),(21,13,'127.0.0.1',NULL,'2019-05-23 20:03:54'),(22,13,'127.0.0.1','2019-05-23 17:21:51','2019-05-23 20:09:21'),(23,11,'127.0.0.1',NULL,'2019-05-23 20:10:57'),(24,13,'127.0.0.1',NULL,'2019-05-23 21:32:49'),(25,36,'127.0.0.1',NULL,'2019-05-25 22:43:59'),(26,36,'127.0.0.1',NULL,'2019-05-25 22:50:52'),(27,36,'127.0.0.1',NULL,'2019-05-25 22:51:20'),(28,36,'127.0.0.1',NULL,'2019-05-25 22:51:31'),(29,36,'127.0.0.1',NULL,'2019-05-25 22:51:42'),(30,36,'127.0.0.1',NULL,'2019-05-25 22:52:36'),(31,36,'127.0.0.1',NULL,'2019-05-25 22:57:55'),(32,36,'127.0.0.1',NULL,'2019-05-25 22:58:41'),(33,36,'127.0.0.1','2019-05-25 20:06:58','2019-05-25 23:04:47');
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
  `desdescription` text CHARACTER SET utf8,
  `deslocation` varchar(128) CHARACTER SET utf8 DEFAULT NULL,
  `desphoto` varchar(256) CHARACTER SET utf8 DEFAULT NULL,
  `desextension` varchar(4) CHARACTER SET utf8 DEFAULT NULL,
  `dtwedding` datetime DEFAULT NULL,
  `dtregister` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idwedding`),
  KEY `fk_weddings_users_idx` (`iduser`),
  CONSTRAINT `fk_weddings_users` FOREIGN KEY (`iduser`) REFERENCES `tb_users` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_weddings`
--

LOCK TABLES `tb_weddings` WRITE;
/*!40000 ALTER TABLE `tb_weddings` DISABLE KEYS */;
INSERT INTO `tb_weddings` VALUES (11,11,'Casamento vai bombar','Igreja de Boa Lourdes',NULL,NULL,'2019-08-30 12:30:00','2019-04-24 18:53:59'),(12,55,'Descrição do Casamento','Local do Casamento','0.jpg','jpg','2020-05-26 20:00:00','2019-05-26 15:27:16'),(13,56,'Descrição do Casamento','Local do Casamento','0.jpg','jpg','2020-05-26 20:00:00','2019-05-26 15:28:03'),(14,57,'Descrição do Casamento','Local do Casamento','0.jpg','jpg','2020-05-26 20:00:00','2019-05-26 15:30:01'),(15,58,'Descrição do Casamento','Local do Casamento','0.jpg','jpg','2020-05-26 20:00:00','2019-05-26 15:36:02'),(16,59,'Descrição do Casamento','Local do Casamento','0.jpg','jpg','2020-05-26 20:00:00','2019-05-26 15:37:07'),(17,60,'Descrição do Casamento','Local do Casamento','0.jpg','jpg','2020-05-26 20:00:00','2019-05-26 15:37:52'),(18,61,'Descrição do Casamento','Local do Casamento','0.jpg','jpg','2020-05-26 20:00:00','2019-05-26 15:40:50'),(19,62,'Descrição do Casamento','Local do Casamento','0.jpg','jpg','2020-05-26 20:00:00','2019-05-26 15:55:13'),(20,63,'Descrição do Casamento','Local do Casamento','0.jpg','jpg','2020-05-26 20:00:00','2019-05-26 15:55:46'),(21,64,'Descrição do Casamento','Local do Casamento','0.jpg','jpg','2020-05-26 20:00:00','2019-05-26 15:56:40'),(22,65,'Descrição do Casamento','Local do Casamento','0.jpg','jpg','2020-05-26 20:00:00','2019-05-26 15:59:02'),(23,66,'Descrição do Casamento','Local do Casamento','0.jpg','jpg','2020-05-26 20:00:00','2019-05-26 15:59:29'),(24,67,'Descrição do Casamento','Local do Casamento','0.jpg','jpg','2020-05-26 20:00:00','2019-05-26 16:00:17'),(25,99,'Descrição do Casamento','Local do Casamento','0.jpg','jpg','2020-05-27 20:00:00','2019-05-28 01:28:09'),(26,100,'Descrição do Casamento','Local do Casamento','0.jpg','jpg','2020-05-27 20:00:00','2019-05-28 02:00:58'),(27,101,'Descrição do Casamento','Local do Casamento','0.jpg','jpg','2020-05-27 20:00:00','2019-05-28 02:01:14'),(28,102,'Descrição do Casamento','Local do Casamento','0.jpg','jpg','2020-05-27 20:00:00','2019-05-28 02:02:57'),(29,103,'Descrição do Casamento','Local do Casamento','0.jpg','jpg','2020-05-27 20:00:00','2019-05-28 02:03:10'),(30,104,'Descrição do Casamento','Local do Casamento','0.jpg','jpg','2020-05-27 20:00:00','2019-05-28 02:03:23'),(31,105,'Descrição do Casamento','Local do Casamento','0.jpg','jpg','2020-05-27 20:00:00','2019-05-28 02:03:56'),(32,106,'Descrição do Casamento','Local do Casamento','0.jpg','jpg','2020-05-27 20:00:00','2019-05-28 02:04:07'),(33,107,'Descrição do Casamento','Local do Casamento','0.jpg','jpg','2020-05-27 20:00:00','2019-05-28 02:04:33'),(34,110,'Descrição do Casamento','Local do Casamento','0.jpg','jpg','2020-05-27 20:00:00','2019-05-28 02:24:46'),(35,111,'Descrição do Casamento','Local do Casamento','0.jpg','jpg','2020-05-27 20:00:00','2019-05-28 02:26:46'),(36,112,'Descrição té cê téq','Até quê cê cíq','36.jpg','jpg','2021-11-21 21:40:00','2019-05-28 03:23:58');
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
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_albuns_update`(`pidalbum` INT(11), `piduser` INT(11), `pinstatus` TINYINT, `pinposition` TINYINT, `pinphotosize` INT(11), `pdesalbum` VARCHAR(128), `pdesdescription` TEXT, `pdescategory` VARCHAR(128), `pdesphoto` VARCHAR(256), `pdesextension` VARCHAR(4))
BEGIN
    
    IF pidalbum > 0 THEN
        
        UPDATE tb_albuns
        SET           
            instatus = pinstatus,
            inposition = pinposition,
            inphotosize = pinphotosize,
            desalbum = pdesalbum,
            desdescription = pdesdescription,
            descategory = pdescategory,
            desphoto = pdesphoto,
            dextension = pdextension
        WHERE idalbum = pidalbum;
        
    ELSE
    
        INSERT INTO tb_albuns (iduser,
                instatus,
                inposition,
                inphotosize,
                desalbum,
                desdescription,
                descategory,
                desphoto,
                desextension)
        VALUES(piduser,
                pinstatus,
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
/*!50003 DROP PROCEDURE IF EXISTS `sp_ordersplans_save` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_ordersplans_save`(`pidorderplan` INT(11), 
`piduser` INT(11), 
`pidplan` INT(11), 
`pidcustomer` INT(11), 
`pidpayment` INT(11), 
`pinorderplanstatus` TINYINT, 
`pdesordercode` VARCHAR(22), 
`pvltotal` DECIMAL(10,2)

)
BEGIN
	
	IF pidorderplan > 0 THEN
		
		UPDATE tb_ordersplans
        SET
			idcustomer = pidcustomer,
            idpayment = pidpayment,
            inorderplanstatus = pinorderplanstatus,
            desordercode = pdesordercode,
            vltotal = pvltotal
		WHERE idorderplan = pidorderplan;
        
    ELSE
    
		INSERT INTO tb_ordersplans (iduser, 
            idplan, 
            idcustomer, 
            idpayment,
            inorderplanstatus,
            desordercode, 
            vltotal)
        VALUES(piduser, 
            pidplan, 
            pidcustomer, 
            pidpayment,
            pinorderplanstatus,
            pdesordercode, 
            pvltotal);
		
		SET pidorderplan = LAST_INSERT_ID();
        
    END IF;
    
    SELECT * 
    FROM tb_ordersplans a
    INNER JOIN tb_users b ON a.iduser = b.iduser
    INNER JOIN tb_plans c ON a.idplan = c.idplan
    INNER JOIN tb_customers d ON a.idcustomer = d.idcustomer
    INNER JOIN tb_payments e ON a.idpayment = e.idpayment
    WHERE a.idorderplan = pidorderplan;
    
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
/*!50003 DROP PROCEDURE IF EXISTS `sp_transfersbanks_save` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_transfersbanks_save`(`pidtransferbank` INT(11), 
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
/*!50003 DROP PROCEDURE IF EXISTS `sp_usersaddresses_update` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_usersaddresses_update`(`piduseraddress` INT(11), 
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

	IF piduseraddress > 0 THEN
		
		UPDATE tb_usersaddresses
        SET

            deszipcode = pdeszipcode, 
            desaddress = pdesaddress,
            desnumber = pdesnumber,
            descomplement = pdescomplement,
            desdistrict = pdesdistrict,
            descity = pdescity,
            desstate = pdesstate,
            descountry = pdescountry
		WHERE iduseraddress = piduseraddress;
        
    ELSE
		
		INSERT INTO tb_usersaddresses (iduser, 
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
        
        SET piduseraddress = LAST_INSERT_ID();
        
    END IF;

    SELECT * 
    FROM tb_usersaddresses a
    INNER JOIN tb_users d 
    ON d.iduser = a.iduser
    WHERE iduseraddress = piduseraddress;

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
/*!50003 DROP PROCEDURE IF EXISTS `sp_videosupdate_save` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_videosupdate_save`(`pidvideo` INT(11), `piduser` INT(11), `pinstatus` TINYINT, `pinposition` TINYINT, `pdesvideo` VARCHAR(128), `pdesdescription` TEXT, `pdesthumbnail` VARCHAR(256), `pdesurl` VARCHAR(128))
BEGIN
	
	IF pidvideo > 0 THEN
		
		UPDATE tb_videos
        SET           
			instatus = pinstatus,
			inposition = pinposition,
			desvideo = pdesvideo,
			desdescription = pdesdescription,
			desthumbnail = pdesthumbnail,
			desurl = pdesurl
		WHERE idvideo = pidvideo;
        
    ELSE
    
		INSERT INTO tb_videos (iduser,
                instatus,
                inposition,
                desvideo,
                desdescription,
                desthumbnail,
                desurl)
        VALUES(piduser,
                pinstatus,
                pinposition,
                pdesvideo,
                pdesdescription,
                pdesthumbnail,
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

-- Dump completed on 2019-05-29 23:34:38
