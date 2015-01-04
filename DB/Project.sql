CREATE DATABASE  IF NOT EXISTS `Project` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `Project`;
-- MySQL dump 10.13  Distrib 5.6.19, for osx10.7 (i386)
--
-- Host: 127.0.0.1    Database: Project
-- ------------------------------------------------------
-- Server version	5.6.21

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
-- Table structure for table `Comments`
--

DROP TABLE IF EXISTS `Comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Comments` (
  `Comments_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Text` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`Comments_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Comments`
--

LOCK TABLES `Comments` WRITE;
/*!40000 ALTER TABLE `Comments` DISABLE KEYS */;
/*!40000 ALTER TABLE `Comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Exam`
--

DROP TABLE IF EXISTS `Exam`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Exam` (
  `Exam_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Rating_ID` int(11) DEFAULT NULL,
  PRIMARY KEY (`Exam_ID`),
  KEY `Rating_ID` (`Rating_ID`),
  CONSTRAINT `exam_ibfk_1` FOREIGN KEY (`Rating_ID`) REFERENCES `Rating` (`Rating_ID`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Exam`
--

LOCK TABLES `Exam` WRITE;
/*!40000 ALTER TABLE `Exam` DISABLE KEYS */;
/*!40000 ALTER TABLE `Exam` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Lecture`
--

DROP TABLE IF EXISTS `Lecture`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Lecture` (
  `Lecture_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Rating_ID` int(11) DEFAULT NULL,
  PRIMARY KEY (`Lecture_ID`),
  KEY `Rating_ID` (`Rating_ID`),
  CONSTRAINT `lecture_ibfk_1` FOREIGN KEY (`Rating_ID`) REFERENCES `Rating` (`Rating_ID`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Lecture`
--

LOCK TABLES `Lecture` WRITE;
/*!40000 ALTER TABLE `Lecture` DISABLE KEYS */;
/*!40000 ALTER TABLE `Lecture` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Professor`
--

DROP TABLE IF EXISTS `Professor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Professor` (
  `Professor_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Rating_ID` int(11) DEFAULT NULL,
  `University_ID` int(11) DEFAULT NULL,
  `Name` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`Professor_ID`),
  KEY `Rating_ID` (`Rating_ID`),
  KEY `University_ID` (`University_ID`),
  CONSTRAINT `professor_ibfk_1` FOREIGN KEY (`Rating_ID`) REFERENCES `Rating` (`Rating_ID`) ON DELETE CASCADE,
  CONSTRAINT `professor_ibfk_2` FOREIGN KEY (`University_ID`) REFERENCES `University` (`University_ID`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Professor`
--

LOCK TABLES `Professor` WRITE;
/*!40000 ALTER TABLE `Professor` DISABLE KEYS */;
/*!40000 ALTER TABLE `Professor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Program`
--

DROP TABLE IF EXISTS `Program`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Program` (
  `id` int(11) NOT NULL,
  `Name` varchar(45) NOT NULL,
  `University` int(11) DEFAULT NULL,
  `Degree` varchar(45) DEFAULT NULL COMMENT 'For Bachelor, Master, Diploma, use:\nBachelor\nMaster\nDiploma\n\n',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Program`
--

LOCK TABLES `Program` WRITE;
/*!40000 ALTER TABLE `Program` DISABLE KEYS */;
INSERT INTO `Program` VALUES (1,'Computer Science',1,'Bachelor'),(2,'Computer Science',1,'Master'),(3,'Mechanical Engineering',1,'Bachelor'),(4,'Mechanical Engineering',1,'Bachelor'),(5,'Computer Science',2,'Bachelor'),(6,'Computer Science',3,'Bachelor');
/*!40000 ALTER TABLE `Program` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Rating`
--

DROP TABLE IF EXISTS `Rating`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Rating` (
  `Rating_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Interest` int(11) DEFAULT NULL,
  `Coverage` int(11) DEFAULT NULL,
  `Materials` int(11) DEFAULT NULL,
  `Support` int(11) DEFAULT NULL,
  `Workload` int(11) DEFAULT NULL,
  `Usefulness` int(11) DEFAULT NULL,
  `Difficulty` int(11) DEFAULT NULL,
  PRIMARY KEY (`Rating_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Rating`
--

LOCK TABLES `Rating` WRITE;
/*!40000 ALTER TABLE `Rating` DISABLE KEYS */;
/*!40000 ALTER TABLE `Rating` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `University`
--

DROP TABLE IF EXISTS `University`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `University` (
  `University_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`University_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `University`
--

LOCK TABLES `University` WRITE;
/*!40000 ALTER TABLE `University` DISABLE KEYS */;
INSERT INTO `University` VALUES (1,'RWTH Aachen'),(2,'TU Berlin'),(3,'TU Munich');
/*!40000 ALTER TABLE `University` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-01-04  9:58:39
