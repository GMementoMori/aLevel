-- MySQL dump 10.17  Distrib 10.3.22-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: test
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
-- Table structure for table `acts`
--

DROP TABLE IF EXISTS `acts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `acts` (
  `id_act` int(11) NOT NULL AUTO_INCREMENT,
  `act` text NOT NULL,
  PRIMARY KEY (`id_act`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acts`
--

LOCK TABLES `acts` WRITE;
/*!40000 ALTER TABLE `acts` DISABLE KEYS */;
INSERT INTO `acts` VALUES (1,' Галльская кампания'),(2,' пророк ислама'),(3,' физик-математик механик и астроном'),(4,' основатель христианства'),(5,' основатель буддизма'),(6,' основатель конфуцианства'),(7,' физик-теоретик'),(8,' первый президент Соединённых Штатов Америки'),(9,' фюрер Германии'),(10,' композитор и пианист');
/*!40000 ALTER TABLE `acts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `great_humans`
--

DROP TABLE IF EXISTS `great_humans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `great_humans` (
  `id_human` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id_human`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `great_humans`
--

LOCK TABLES `great_humans` WRITE;
/*!40000 ALTER TABLE `great_humans` DISABLE KEYS */;
INSERT INTO `great_humans` VALUES (1,' Гай Юлий Цезарь'),(2,' Мухаммад'),(3,' Исаак Ньютон'),(4,' Иисус Христос'),(5,' Будда Шакьямуни'),(6,' Конфуций'),(7,' Альберт Эйнштейн'),(8,' Джордж Вашингтон'),(9,' Адольф Гитлер'),(10,' Людвиг ван Бетховен'),(13,' Франц Шуберт'),(14,' Пётр Ильич Чайковский');
/*!40000 ALTER TABLE `great_humans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `humans_acts`
--

DROP TABLE IF EXISTS `humans_acts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `humans_acts` (
  `id_human` int(11) NOT NULL DEFAULT 69,
  `id_act` int(11) NOT NULL DEFAULT 666
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `humans_acts`
--

LOCK TABLES `humans_acts` WRITE;
/*!40000 ALTER TABLE `humans_acts` DISABLE KEYS */;
INSERT INTO `humans_acts` VALUES (1,1),(2,2),(3,3),(4,4),(5,5),(6,6),(7,7),(8,8),(9,9),(10,10),(13,10),(14,10);
/*!40000 ALTER TABLE `humans_acts` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-02-21 12:34:50
