# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.24)
# Database: insly_task
# Generation Time: 2019-01-26 10:50:26 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table user_info
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user_info`;

CREATE TABLE `user_info` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `birthdate` varchar(50) CHARACTER SET utf8 DEFAULT '',
  `email` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `is_emp` tinyint(1) DEFAULT NULL,
  `phone` int(15) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `id_code` int(20) DEFAULT NULL,
  `introduction_eng` text,
  `introduction_spenish` text,
  `introduction_french` text,
  `experience_eng` text,
  `experience_spenish` text,
  `experience_french` text,
  `education_eng` text,
  `education_spenish` text,
  `education_french` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `user_info` WRITE;
/*!40000 ALTER TABLE `user_info` DISABLE KEYS */;

INSERT INTO `user_info` (`id`, `name`, `birthdate`, `email`, `is_emp`, `phone`, `address`, `id_code`, `introduction_eng`, `introduction_spenish`, `introduction_french`, `experience_eng`, `experience_spenish`, `experience_french`, `education_eng`, `education_spenish`, `education_french`, `created_at`, `updated_at`)
VALUES
	(1,'anuj','09/10/1912','anuj@gmail.com',1,989789689,'mumbai india',7587568,'Software Engineer','Ingeniero de software','Ingénieur logiciel','Software Engineer','Ingeniero de software','Ingénieur logiciel','Software Engineer','Ingeniero de software','Ingénieur logiciel','2019-01-26 10:34:52','2019-01-26 10:37:21');

/*!40000 ALTER TABLE `user_info` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
