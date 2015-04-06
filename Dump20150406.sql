CREATE DATABASE  IF NOT EXISTS `researchbros` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `researchbros`;
-- MySQL dump 10.13  Distrib 5.6.13, for Win32 (x86)
--
-- Host: localhost    Database: researchbros
-- ------------------------------------------------------
-- Server version	5.6.17

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
-- Table structure for table `labs`
--

DROP TABLE IF EXISTS `labs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `labs` (
  `labID` int(11) NOT NULL DEFAULT '0',
  `universityID` int(11) NOT NULL,
  `admin` varchar(50) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `pincode` varchar(50) NOT NULL,
  `description` text,
  `sitelink` varchar(50) DEFAULT NULL,
  `hidden` binary(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`labID`),
  KEY `universityID` (`universityID`),
  KEY `labs_ibfk_2` (`admin`),
  CONSTRAINT `labs_ibfk_1` FOREIGN KEY (`universityID`) REFERENCES `university` (`universityID`),
  CONSTRAINT `labs_ibfk_2` FOREIGN KEY (`admin`) REFERENCES `user` (`emailID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `labs`
--

LOCK TABLES `labs` WRITE;
/*!40000 ALTER TABLE `labs` DISABLE KEYS */;
INSERT INTO `labs` VALUES (1,1,'ankitk94@yahoo.com','updatedService','lab','mech','ghaziabad','India','201007','jfdkjasdk','http//www.google.co.in','0'),(2,1,'ankitk94@yahoo.com','updatedService','lab 2','mech','ghaziabad','India','201007','adsadsadsa','http//www.google.co.in','1'),(3,1,'ankitk94@yahoo.com','updatedService','lab 3','mech','ghaziabad','India','201007','jdsklajsdk','http//www.google.co.in','1'),(4,1,'ankitk94@yahoo.com','updatedService','Ankit\'s lab ','mech','ghaziabad','India','201007','This is a very cool lab indeed','http//www.google.co.in','1'),(5,1,'ankitk94@yahoo.com','updatedService','lab 4','mech','ghaziabad','India','201007','This is lab 4','http//www.google.co.in','1'),(6,1,'ankitk94@yahoo.com','updatedService','lab 5','mech','ghaziabad','India','201007','Adding lab 5','http//www.google.co.in','1'),(7,1,'ankitk94@yahoo.com','updatedService','lab 6','mech','ghaziabad','India','201007','Lab 6 is added','http//www.google.co.in','1'),(8,1,'ankitk94@yahoo.com','updatedService','lab 7','mech','ghaziabad','India','201007','Now time for lab 7','http//www.google.co.in','1'),(9,1,'ankitk94@yahoo.com','updatedService','lab','mechanical','ghaziabad','India','201007','And','http//www.google.co.in','0'),(10,1,'ankitk94@yahoo.com','updatedService','lab 9','mech','ghaziabad','India','201007','This is the final testing. Did this worked???','http//www.google.co.in','0'),(11,1,'ankitk94@yahoo.com','updatedService','lab 10','mech','ghaziabad','India','201007','Lab 11 is not gonna needed','http//www.google.co.in','0'),(12,1,'ankitk94@yahoo.com','updatedService','lab 10','mech','ghaziabad','India','201007','Lab 11 is not gonna needed, and done','http//www.google.co.in','0'),(13,1,'ankitk94@yahoo.com','service 1','j','mech','jn','India','201007','jn','http//www.google.co.in','0'),(14,1,'ankitk94@yahoo.com','service 2','f2 ','mech','km','India','201007','d m','http//www.google.co.in','0'),(15,1,'ankitk94@yahoo.com','abc','n','mech','jn','India','201007','jnj','http//www.google.co.in','0'),(16,1,'ankitk94@yahoo.com','service','nbhbh','bh','bh','bh','bh','bh','kmkj','0'),(17,1,'ankitk94@yahoo.com','servicenew','badsvsg','bh','vfg','f','cfc','f','','0');
/*!40000 ALTER TABLE `labs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `superuser`
--

DROP TABLE IF EXISTS `superuser`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `superuser` (
  `emailID` varchar(45) NOT NULL,
  PRIMARY KEY (`emailID`),
  CONSTRAINT `fk_emailID` FOREIGN KEY (`emailID`) REFERENCES `user` (`emailID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `superuser`
--

LOCK TABLES `superuser` WRITE;
/*!40000 ALTER TABLE `superuser` DISABLE KEYS */;
/*!40000 ALTER TABLE `superuser` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `university`
--

DROP TABLE IF EXISTS `university`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `university` (
  `universityID` int(11) NOT NULL DEFAULT '0',
  `name` varchar(50) NOT NULL,
  `description` text,
  `admin` varchar(50) NOT NULL,
  `type` varchar(45) NOT NULL DEFAULT 'academic',
  `city` varchar(45) NOT NULL,
  `state` varchar(45) NOT NULL,
  `country` varchar(45) NOT NULL,
  PRIMARY KEY (`universityID`),
  KEY `admin` (`admin`),
  CONSTRAINT `admin` FOREIGN KEY (`admin`) REFERENCES `user` (`emailID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `university`
--

LOCK TABLES `university` WRITE;
/*!40000 ALTER TABLE `university` DISABLE KEYS */;
INSERT INTO `university` VALUES (1,'stanford','stanford descrition','ankitk94@yahoo.com','academic','','',''),(2,'IIT Ropar','nadsjn','ankitk94@yahoo.com','jdk','kk','mk','m');
/*!40000 ALTER TABLE `university` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `emailID` varchar(45) NOT NULL,
  `password` char(32) DEFAULT NULL,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `contact` varchar(15) NOT NULL,
  `job_title` varchar(45) NOT NULL,
  `university` varchar(45) NOT NULL,
  `address` varchar(50) DEFAULT NULL,
  `image` varchar(100) DEFAULT 'default.png',
  `labType` varchar(45) NOT NULL,
  PRIMARY KEY (`emailID`),
  UNIQUE KEY `emailID_UNIQUE` (`emailID`),
  KEY `fk_university_idx` (`university`),
  KEY `fk_user_university_idx` (`university`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES ('aniket.sachdeva@gmail.com','fd2cc6c54239c40495a0d3a93b6380eb','aniket',NULL,'9541421340','','1',NULL,'logos/Vista_Robot_high definition wallpaper.jpg',''),('ankitk94@yahoo.com','827ccb0eea8a706c4c34a16891f84e7b','Ankit Khokhar',NULL,'95414213','','1','my address','logos/Vista_Robot_high definition wallpaper.jpg',''),('ankitkhokhar@iitrpr.ac.in','a','a','a','a','a','IIT Ropar',NULL,'default.png','academic');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subscribed`
--

DROP TABLE IF EXISTS `subscribed`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subscribed` (
  `emailID` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `organisation` varchar(45) NOT NULL,
  PRIMARY KEY (`emailID`),
  UNIQUE KEY `emailID_UNIQUE` (`emailID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subscribed`
--

LOCK TABLES `subscribed` WRITE;
/*!40000 ALTER TABLE `subscribed` DISABLE KEYS */;
INSERT INTO `subscribed` VALUES ('ankitkhokhar@iitrpr.ac.in','Ankit','Organisation'),('jaideepst@iitrpr.ac.in','Jaideep Singh Takkar','IIT Ropar');
/*!40000 ALTER TABLE `subscribed` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-04-06 16:03:48
