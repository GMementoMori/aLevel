-- MySQL dump 10.17  Distrib 10.3.22-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: shop
-- ------------------------------------------------------
-- Server version	10.3.22-MariaDB-1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `companies`
--

DROP TABLE IF EXISTS `companies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `companies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company` varchar(100) NOT NULL DEFAULT 'company',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `companies`
--

LOCK TABLES `companies` WRITE;
/*!40000 ALTER TABLE `companies` DISABLE KEYS */;
INSERT INTO `companies` VALUES (1,'SONY'),(2,'Apple'),(3,'Xiaomi'),(4,'Samsung'),(5,'ASUS'),(6,'Microsoft'),(7,'Huawei'),(8,'LG'),(9,'Lenovo'),(10,'ZTE'),(11,'Nokia');
/*!40000 ALTER TABLE `companies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company_noutebooks`
--

DROP TABLE IF EXISTS `company_noutebooks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `company_noutebooks` (
  `id_company` int(11) NOT NULL,
  `id_noutebook` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company_noutebooks`
--

LOCK TABLES `company_noutebooks` WRITE;
/*!40000 ALTER TABLE `company_noutebooks` DISABLE KEYS */;
INSERT INTO `company_noutebooks` VALUES (5,'1,2,3,4,5');
/*!40000 ALTER TABLE `company_noutebooks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company_phones`
--

DROP TABLE IF EXISTS `company_phones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `company_phones` (
  `id_company` int(11) NOT NULL,
  `id_phone` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company_phones`
--

LOCK TABLES `company_phones` WRITE;
/*!40000 ALTER TABLE `company_phones` DISABLE KEYS */;
INSERT INTO `company_phones` VALUES (1,'5,6,7'),(2,'8,9,10,11'),(3,'15,16,17'),(4,'1,2,3,4'),(6,'28,29'),(7,'18,19,20,21,22,23'),(8,'24,25,26,27'),(10,'12,13,14'),(11,'30,31,32,33,34');
/*!40000 ALTER TABLE `company_phones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `noutebooks`
--

DROP TABLE IF EXISTS `noutebooks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `noutebooks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `model` varchar(100) NOT NULL DEFAULT 'model',
  `id_company` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `noutebooks`
--

LOCK TABLES `noutebooks` WRITE;
/*!40000 ALTER TABLE `noutebooks` DISABLE KEYS */;
INSERT INTO `noutebooks` VALUES (1,'TUF FX505DD-AL352T',5),(2,'TUF FA506IV-AL031T',5),(3,'ASUSPRO B9450FA-BM0374R',5),(4,'VivoBook S S532FL-BQ118T',5),(5,'Laptop X540UA-DM3087T',5);
/*!40000 ALTER TABLE `noutebooks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phones`
--

DROP TABLE IF EXISTS `phones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `model` varchar(100) NOT NULL DEFAULT 'model',
  `id_company` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phones`
--

LOCK TABLES `phones` WRITE;
/*!40000 ALTER TABLE `phones` DISABLE KEYS */;
INSERT INTO `phones` VALUES (1,'Galaxy S10',4),(2,'Galaxy S20 Ultra',4),(3,'Galaxy A01',4),(4,'Galaxy A30s',4),(5,'Sony Xperia 10 I4113 Black',1),(6,'Sony Xperia 10 I4113 Navy',1),(7,'Sony Xperia 10 Plus I4213 Silver',1),(8,'APPLE IPHONE 11 128GB BLACK',2),(9,'APPLE IPHONE 11 PRO MAX 512GB SILVER',2),(10,'Apple iPhone 8 Plus 256Gb Space Gray',2),(11,'Apple iPhone Xs Max 256GB Gold (1 sim)',2),(12,'Tracfone Prepaid ZTE Blade T2 Lite (16GB) - Black',10),(13,'Consumer Cellular Postpaid ZTE Avid 559 (16GB) - Black',10),(14,'Tracfone Prepaid ZTE ZFive C LTE (16GB) Smartphone - Black',10),(15,'Xiaomi Mi 9T 6/128GB Carbon Black',3),(16,'Xiaomi Redmi 8 4/64 Sapphire Blue',3),(17,'Xiaomi Redmi Note 8T 4/128GB Starscape Blue',3),(18,'HUAWEI Mate Xs',7),(19,'HUAWEI P30 Pro',7),(20,'HUAWEI P smart 2019',7),(21,'HUAWEI P20 Pro',7),(22,'HUAWEI Y6s',7),(23,'HUAWEI Y6 Prime 2018',7),(24,'LG G6 G600L 4/64GB Platinum',8),(25,'LG G8 ThinQ 6/128GB Black',8),(26,'LG V40 6/64GB 1sim Black (V405UA)',8),(27,'LG G7 ThinQ G710ULM 4/64GB Black',8),(28,'Microsoft Lumia 650',6),(29,'Lumia 950',6),(30,'Nokia 3310 Blue',11),(31,'Nokia 3110 Classic',11),(32,'Nokia 300 Gold',11),(33,'Nokia 3710 Beige',11),(34,'Nokia 5230 Black',11);
/*!40000 ALTER TABLE `phones` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-02-26 12:15:27
