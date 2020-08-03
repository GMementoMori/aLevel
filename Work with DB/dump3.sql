-- MySQL dump 10.17  Distrib 10.3.22-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: hack_project
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
-- Table structure for table `course_teachers`
--

DROP TABLE IF EXISTS `course_teachers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `course_teachers` (
  `id_course` int(11) NOT NULL DEFAULT 0,
  `id_teacher` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course_teachers`
--

LOCK TABLES `course_teachers` WRITE;
/*!40000 ALTER TABLE `course_teachers` DISABLE KEYS */;
INSERT INTO `course_teachers` VALUES (7,1),(7,3),(1,1),(1,6),(2,3),(2,5),(2,4),(4,3),(4,4),(4,1),(5,5),(5,7),(5,2),(6,2),(6,4),(8,1),(8,7),(3,7),(3,6);
/*!40000 ALTER TABLE `course_teachers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL DEFAULT 'course',
  `info` text NOT NULL DEFAULT 'info',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `courses`
--

LOCK TABLES `courses` WRITE;
/*!40000 ALTER TABLE `courses` DISABLE KEYS */;
INSERT INTO `courses` VALUES (1,'Kali linux','Kali Linux is an open source project that is maintained and funded by Offensive Security, a provider of world-class information security training and penetration testing services. In addition to Kali Linux, Offensive Security also maintains the Exploit Database and the free online course, Metasploit Unleashed.'),(2,'White Hat Hacking','Learn all topics on ethical hacking. Learn what others teach you about ethical hacking charging you so much money. What you willl learn: Learn about cyber attacks, Ethical hackingNetwork, webportal assessment,Web related vulnerability testing,penetration testing'),(3,'Black Hat Hacking','The Black Hat Trainings offer attendees deeply technical hands-on courses on topics ranging from broader offensive security to the latest in penetration testing, infrastructure hacking, mobile application security, analyzing automotive electrical systems, and everything in between. Often designed exclusively for Black Hat, these hands-on attack and defense courses are led by some of the most sought after industry and subject matter experts from all over the world with the goal of defining and defending tomorrow’s information security landscape.'),(4,'Online Anonymity','The right to remain anonymous is a fundamental component of our right to free speech, and it applies every bit as much in the digital world as it does in the physical one. In the words of the U.S. Supreme Court in McIntyre v. Ohio Elections Commission, “Anonymity is a shield from the tyranny of the majority.” And in our courses you will lern how you can stay anonym.'),(5,'Сomplete Сybersecurity Сourses','As in many other technical specialties, in the information security specialist - one who has a significant technical background. Such a person should have solid experience in practical work with different technologies (which ones - we will talk below), but theoretical training should also be on top. Plus, and this is something that is not found in most other specialties - it should be well versed in compliance, i.e. know the legal norms and requirements of the field of information protection and information security in general. A good expert on cybersecurity is a practitioner who knows how roughly an attacker thinks and what tools a cybercriminal can use. Of all the techniques and attack vectors, about 80% are known to specialists, which makes it possible to successfully deal with them using existing defenses. 20% are zero-day vulnerabilities, newly invented hacking methods, etc. A professional should always be on the alert in order to react on time.'),(6,'Evil Coding','Evil coding training takes place in the Python language, during the course of the courses you will learn with the help of our specialists: create Trojans, viruses, exploits for various platforms. And just how wonderful this course is, besides the fact that you learn to write viruses according to the example of existing ones, so that all that you write will be your individual programs for hacking, wiretapping and so on, just for you.'),(7,'Tracking Theory','In this course, you will be told about the basic concepts and known facts about government projects for tracking people. Our specialist and teacher Edward Snowden, will tell you on what principles and with the help of which technologies you are being monitored. Many do not understand how important it is to understand and fight the intrusion of outsiders into our privacy. Remember, even if you have nothing to hide, you definitely have something to protect.'),(8,'Exploits,programs,trojans and virology','They wanted to enter the sphere of cyber security for a long time but did not know how? This course is especially for you, since in this course you will be taught how to use the main programs and exploits with frameworks, such as metasploit, nmap, sqlmap, jhon the ripper and with many anothers. This course will be good for any people, from students from technical universitys, for regular people who realy want enter the realm fo sybersecurity.');
/*!40000 ALTER TABLE `courses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teachers`
--

DROP TABLE IF EXISTS `teachers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teachers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT 'name',
  `info` text NOT NULL DEFAULT 'info',
  `index_photo` varchar(50) NOT NULL DEFAULT 'index',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teachers`
--

LOCK TABLES `teachers` WRITE;
/*!40000 ALTER TABLE `teachers` DISABLE KEYS */;
INSERT INTO `teachers` VALUES (1,'Edward Snowden','“I don’t want to live in a world where everything I say, everything I do, everything I talk to, every expression of creativity, love or friendship is recorded.”','1'),(2,'Kevin Mitnick','“There is no patch for human stupidity.”','2'),(3,'Linus Torvalds','„Intelligence is the ability to avoid doing work, but so that it is done.“','3'),(4,'Gary Mckinnon','McKinnon is a funny guy. He claims that the Hacker Handbook prompted him to hack.','4'),(5,'Jonathan James','“I do not believe in the justice system. Maybe my actions and this letter will illustrate this in the most convincing way. One way or another, I lost control of the situation, and for me this is the only way to get it back. ”','5'),(6,'Richard Price','“Now this is our world, the world of electrons and switches, the world of the beauty of bauds. We have no nationality, color or religious beliefs. You wage wars, kill, deceive us and want us to believe that you are virtues and we are criminals. Yes, I am a criminal, I am guilty of curiosity. You can catch me, but you cannot stop everyone. I am a hacker, and this is my manifest. ”','6'),(7,'Matthew Beavan','“For me it means - power belongs to people who can take it. This is not due to hard work, ambition or skill. Often all that is needed is the ability to take. ”','7');
/*!40000 ALTER TABLE `teachers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_questions`
--

DROP TABLE IF EXISTS `users_questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL DEFAULT 'question',
  `users_id` varchar(50) NOT NULL DEFAULT '0.0.0.0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_questions`
--

LOCK TABLES `users_questions` WRITE;
/*!40000 ALTER TABLE `users_questions` DISABLE KEYS */;
INSERT INTO `users_questions` VALUES (1,'Как себя обезопасить?',''),(2,'Как дела?','82.141.157.174'),(3,'А теперь где я?','45.130.146.9');
/*!40000 ALTER TABLE `users_questions` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-03-02  1:10:42
