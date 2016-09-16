-- MySQL dump 10.13  Distrib 5.6.17, for Win64 (x86_64)
--
-- Host: localhost    Database: project
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
-- Table structure for table `apple_details`
--

DROP TABLE IF EXISTS `apple_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `apple_details` (
  `name` varchar(30) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`username`),
  UNIQUE KEY `email_id` (`email_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `apple_details`
--

LOCK TABLES `apple_details` WRITE;
/*!40000 ALTER TABLE `apple_details` DISABLE KEYS */;
/*!40000 ALTER TABLE `apple_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bill`
--

DROP TABLE IF EXISTS `bill`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bill` (
  `Reference_Id` varchar(30) NOT NULL,
  `Delivery_date` date NOT NULL,
  `Payable_amount` float NOT NULL,
  PRIMARY KEY (`Reference_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bill`
--

LOCK TABLES `bill` WRITE;
/*!40000 ALTER TABLE `bill` DISABLE KEYS */;
/*!40000 ALTER TABLE `bill` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comp_hard_prob`
--

DROP TABLE IF EXISTS `comp_hard_prob`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comp_hard_prob` (
  `complaint_no` varchar(30) NOT NULL,
  `hardware_problems` varchar(50) NOT NULL,
  PRIMARY KEY (`complaint_no`,`hardware_problems`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comp_hard_prob`
--

LOCK TABLES `comp_hard_prob` WRITE;
/*!40000 ALTER TABLE `comp_hard_prob` DISABLE KEYS */;
/*!40000 ALTER TABLE `comp_hard_prob` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comp_soft_prob`
--

DROP TABLE IF EXISTS `comp_soft_prob`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comp_soft_prob` (
  `complaint_no` varchar(30) NOT NULL,
  `software_problems` varchar(50) NOT NULL,
  PRIMARY KEY (`complaint_no`,`software_problems`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comp_soft_prob`
--

LOCK TABLES `comp_soft_prob` WRITE;
/*!40000 ALTER TABLE `comp_soft_prob` DISABLE KEYS */;
/*!40000 ALTER TABLE `comp_soft_prob` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `complaint`
--

DROP TABLE IF EXISTS `complaint`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `complaint` (
  `complaint_no` varchar(30) NOT NULL,
  `lodge_date` date NOT NULL,
  `model_id` int(11) NOT NULL,
  PRIMARY KEY (`complaint_no`),
  UNIQUE KEY `model_id` (`model_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `complaint`
--

LOCK TABLES `complaint` WRITE;
/*!40000 ALTER TABLE `complaint` DISABLE KEYS */;
/*!40000 ALTER TABLE `complaint` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ipad`
--

DROP TABLE IF EXISTS `ipad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ipad` (
  `ipad_type` varchar(30) NOT NULL,
  `imei_no` int(11) NOT NULL,
  `purchase_date` date NOT NULL,
  `username` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  PRIMARY KEY (`imei_no`),
  KEY `purchase_date` (`purchase_date`),
  CONSTRAINT `ipad_ibfk_1` FOREIGN KEY (`purchase_date`) REFERENCES `ipad_warranty` (`purchase_date`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ipad`
--

LOCK TABLES `ipad` WRITE;
/*!40000 ALTER TABLE `ipad` DISABLE KEYS */;
/*!40000 ALTER TABLE `ipad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ipad_warranty`
--

DROP TABLE IF EXISTS `ipad_warranty`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ipad_warranty` (
  `purchase_date` date NOT NULL,
  `warranty` date NOT NULL,
  PRIMARY KEY (`purchase_date`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ipad_warranty`
--

LOCK TABLES `ipad_warranty` WRITE;
/*!40000 ALTER TABLE `ipad_warranty` DISABLE KEYS */;
/*!40000 ALTER TABLE `ipad_warranty` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `iphone`
--

DROP TABLE IF EXISTS `iphone`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `iphone` (
  `imei_no` int(11) NOT NULL,
  `iphone_model` varchar(30) NOT NULL,
  `purchase_date` date NOT NULL,
  `username` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  PRIMARY KEY (`imei_no`),
  KEY `purchase_date` (`purchase_date`),
  CONSTRAINT `iphone_ibfk_1` FOREIGN KEY (`purchase_date`) REFERENCES `iphone_warranty` (`purchase_date`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `iphone`
--

LOCK TABLES `iphone` WRITE;
/*!40000 ALTER TABLE `iphone` DISABLE KEYS */;
/*!40000 ALTER TABLE `iphone` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `iphone_warranty`
--

DROP TABLE IF EXISTS `iphone_warranty`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `iphone_warranty` (
  `purchase_date` date NOT NULL,
  `warranty` date NOT NULL,
  PRIMARY KEY (`purchase_date`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `iphone_warranty`
--

LOCK TABLES `iphone_warranty` WRITE;
/*!40000 ALTER TABLE `iphone_warranty` DISABLE KEYS */;
/*!40000 ALTER TABLE `iphone_warranty` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ipod`
--

DROP TABLE IF EXISTS `ipod`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ipod` (
  `ipod_type` varchar(30) NOT NULL,
  `udid_no` int(11) NOT NULL,
  `purchase_date` date NOT NULL,
  `username` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  PRIMARY KEY (`udid_no`),
  KEY `purchase_date` (`purchase_date`),
  CONSTRAINT `ipod_ibfk_1` FOREIGN KEY (`purchase_date`) REFERENCES `ipod_warranty` (`purchase_date`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ipod`
--

LOCK TABLES `ipod` WRITE;
/*!40000 ALTER TABLE `ipod` DISABLE KEYS */;
/*!40000 ALTER TABLE `ipod` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ipod_warranty`
--

DROP TABLE IF EXISTS `ipod_warranty`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ipod_warranty` (
  `purchase_date` date NOT NULL,
  `warranty` date NOT NULL,
  PRIMARY KEY (`purchase_date`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ipod_warranty`
--

LOCK TABLES `ipod_warranty` WRITE;
/*!40000 ALTER TABLE `ipod_warranty` DISABLE KEYS */;
/*!40000 ALTER TABLE `ipod_warranty` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mac_warranty`
--

DROP TABLE IF EXISTS `mac_warranty`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mac_warranty` (
  `purchase_date` date NOT NULL,
  `warranty` date NOT NULL,
  PRIMARY KEY (`purchase_date`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mac_warranty`
--

LOCK TABLES `mac_warranty` WRITE;
/*!40000 ALTER TABLE `mac_warranty` DISABLE KEYS */;
/*!40000 ALTER TABLE `mac_warranty` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `macbook`
--

DROP TABLE IF EXISTS `macbook`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `macbook` (
  `mackbook_type` varchar(30) NOT NULL,
  `mac_address` varchar(50) NOT NULL,
  `purchase_date` date NOT NULL,
  `username` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  PRIMARY KEY (`mac_address`),
  KEY `purchase_date` (`purchase_date`),
  CONSTRAINT `macbook_ibfk_1` FOREIGN KEY (`purchase_date`) REFERENCES `mac_warranty` (`purchase_date`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `macbook`
--

LOCK TABLES `macbook` WRITE;
/*!40000 ALTER TABLE `macbook` DISABLE KEYS */;
/*!40000 ALTER TABLE `macbook` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product` (
  `Apple_Product` varchar(30) NOT NULL,
  `Model_Name` varchar(30) NOT NULL,
  `Product_uniqueno` int(11) NOT NULL,
  `Price` float NOT NULL,
  PRIMARY KEY (`Product_uniqueno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES ('IPHONE','3',100000,15000),('IPHONE','3s',100001,18000),('IPHONE','4',100002,22000),('IPHONE','4s',100003,25000),('IPHONE','3',100004,15000),('IPHONE','3s',100005,18000),('IPHONE','4',100006,22000),('IPHONE','4s',100007,25000),('IPHONE','3',100008,15000),('IPHONE','3s',100009,18000),('IPAD','3G',200000,32000),('IPAD','Wi-Fi',200001,36000),('IPAD','Mini',200002,39000),('IPAD','Air',200003,44000),('IPAD','3G',200004,32000),('IPAD','Wi-Fi',200005,36000),('IPAD','Mini',200006,39000),('IPAD','Air',200007,44000),('IPAD','Mini',200008,39000),('IPAD','Air',200009,44000),('IPODS','Shuffle',300000,6000),('IPODS','Nano',300001,13000),('IPODS','Classic',300002,17500),('IPODS','Touch',300003,20500),('IPODS','Shuffle',300004,6000),('IPODS','Nano',300005,13000),('IPODS','Classic',300006,17500),('IPODS','Touch',300007,20500),('IPODS','Shuffle',300008,6000),('IPODS','Shuffle',300009,6000),('IPODS','Touch',300010,20500),('MACBOOK','IMAC',400000,50500),('MACBOOK','PRO',400001,57000),('MACBOOK','Air',400002,66000),('MACBOOK','Mini',400003,60500),('MACBOOK','IMAC',400004,50500),('MACBOOK','PRO',400005,57000),('MACBOOK','Air',400006,66000),('MACBOOK','Mini',400007,60500),('MACBOOK','IMAC',400008,50500),('MACBOOK','PRO',400009,57000),('MACBOOK','PRO',400010,57000),('MACBOOK','Mini',400011,60500);
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-11-21 10:17:04
