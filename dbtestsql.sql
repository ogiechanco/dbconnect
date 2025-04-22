/*
SQLyog Ultimate v8.55 
MySQL - 5.0.45-community-nt : Database - dbtest
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`dbtest` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `dbtest`;

/*Table structure for table `about` */

DROP TABLE IF EXISTS `about`;

CREATE TABLE `about` (
  `aboutID` int(10) unsigned NOT NULL auto_increment,
  `atitle` varchar(125) NOT NULL,
  `acontent` text,
  PRIMARY KEY  (`aboutID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `about` */

insert  into `about`(`aboutID`,`atitle`,`acontent`) values (1,'CSTA','pogi'),(2,'Filipino','Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus rem iure cumque necessitatibus. Unde iusto dolorem accusamus quisquam, officiis nihil cupiditate explicabo aliquam recusandae ullam, eum delectus! Dolorem, explicabo! Dolorem!\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus rem iure cumque necessitatibus. Unde iusto dolorem accusamus quisquam, officiis nihil cupiditate explicabo aliquam recusandae ullam, eum delectus! Dolorem, explicabo! Dolorem!'),(3,'English','Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus rem iure cumque necessitatibus. Unde iusto dolorem accusamus quisquam, officiis nihil cupiditate explicabo aliquam recusandae ullam, eum delectus! Dolorem, explicabo! Dolorem!\r\nLorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus rem iure cumque necessitatibus. Unde iusto dolorem accusamus quisquam, officiis nihil cupiditate explicabo aliquam recusandae ullam, eum delectus! Dolorem, explicabo! Dolorem!'),(5,'Filipino','try\r\n');

/*Table structure for table `news` */

DROP TABLE IF EXISTS `news`;

CREATE TABLE `news` (
  `newsID` int(10) unsigned NOT NULL auto_increment,
  `title` varchar(255) default NULL,
  `author` varchar(255) default NULL,
  `datePosted` date default NULL,
  `story` text,
  `picture` text,
  PRIMARY KEY  (`newsID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `news` */

insert  into `news`(`newsID`,`title`,`author`,`datePosted`,`story`,`picture`) values (1,'b','b','2025-04-22','b',NULL),(2,'b','b','2025-04-22','b','2.jpeg'),(3,'sample about','sample lang','2025-04-22','hello news!','3.png'),(4,'sample','sample lang','2025-04-22','hello','4.png');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
