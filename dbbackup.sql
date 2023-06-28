/*
SQLyog Ultimate v12.5.0 (64 bit)
MySQL - 10.4.27-MariaDB : Database - callofduty
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`callofduty` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `callofduty`;

/*Table structure for table `players` */

DROP TABLE IF EXISTS `players`;

CREATE TABLE `players` (
  `player id` int(11) NOT NULL AUTO_INCREMENT,
  `pname` varchar(200) DEFAULT NULL,
  `positon` varchar(200) DEFAULT NULL,
  `pemail` varchar(200) DEFAULT NULL,
  `psalary` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`player id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `players` */

insert  into `players`(`player id`,`pname`,`positon`,`pemail`,`psalary`) values 
(1,'Tiger Nixon','sniper','(ti@gmail.com','20000'),
(2,'Garrett Winters','assault','qa@gmail.com','332324'),
(3,'Ashton Cox','scout','qa@gmail.com','398439'),
(4,'Cedric Kelly','rusher','qa@gmail.com','200003'),
(5,'Airi Satou','camper','qa@gmail.com','20454'),
(6,'Brielle Williamson','sniper','qa@gmail.com','398439'),
(7,'Herrod Chandler','lonewolf','qa@gmail.com','398439'),
(8,'Rhona Davidson','camper','qa@gmail.com','398439'),
(9,'Colleen Hurst','rush','qa@gmail.com','398439'),
(10,'Sonya Frost','sniper','qa@gmail.com','398439'),
(11,'Jena Gaines','sniper','qa@gmail.com','398439'),
(12,'Quinn Flynn','sniper','qa@gmail.com','398439'),
(16,'&lt;p&gt;ashishh&lt;/p&gt;',NULL,NULL,NULL),
(17,'&lt;p&gt;ashishh&lt;/p&gt;',NULL,NULL,NULL),
(18,'&lt;p&gt;ashishh&lt;/p&gt;',NULL,NULL,NULL),
(19,'&lt;p&gt;ashishh&lt;/p&gt;',NULL,NULL,NULL),
(20,'&lt;p&gt;&lt;span style=&quot;background-color: rgb(241, 196, 15);&quot;&gt;asif khan&lt;/span&gt;&lt;/p&gt;',NULL,NULL,NULL),
(21,'&lt;p&gt;&lt;span style=&quot;background-color: rgb(224, 62, 45);&quot;&gt;ashan raza&lt;/span&gt;&lt;/p&gt;',NULL,NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
