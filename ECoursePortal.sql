-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.0.27-community-nt - MySQL Community Edition (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             8.0.0.4396
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for online_course_portal
DROP DATABASE IF EXISTS `online_course_portal`;
CREATE DATABASE IF NOT EXISTS `online_course_portal` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `online_course_portal`;


-- Dumping structure for table online_course_portal.course
DROP TABLE IF EXISTS `course`;
CREATE TABLE IF NOT EXISTS `course` (
  `id` int(10) NOT NULL auto_increment,
  `title` varchar(50) NOT NULL,
  `description` varchar(255) default NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `title` (`title`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table online_course_portal.course: ~2 rows (approximately)
/*!40000 ALTER TABLE `course` DISABLE KEYS */;
INSERT INTO `course` (`id`, `title`, `description`) VALUES
	(1, 'BS Computer Engineering', 'Computer Engineering'),
	(2, 'BS Computer Science', 'Computer Science');
/*!40000 ALTER TABLE `course` ENABLE KEYS */;


-- Dumping structure for table online_course_portal.personal_info
DROP TABLE IF EXISTS `personal_info`;
CREATE TABLE IF NOT EXISTS `personal_info` (
  `id` int(10) NOT NULL auto_increment,
  `gender` varchar(50) NOT NULL,
  `contact_number` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `user_id` int(10) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table online_course_portal.personal_info: ~1 rows (approximately)
/*!40000 ALTER TABLE `personal_info` DISABLE KEYS */;
INSERT INTO `personal_info` (`id`, `gender`, `contact_number`, `first_name`, `last_name`, `user_id`) VALUES
	(1, 'male', '1341234', 'Arya', 'Stark', 1);
/*!40000 ALTER TABLE `personal_info` ENABLE KEYS */;


-- Dumping structure for table online_course_portal.user
DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) NOT NULL auto_increment,
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `user_type_id` tinyint(4) NOT NULL,
  `course_id` int(10) default NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table online_course_portal.user: ~1 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `username`, `password`, `email`, `date_created`, `user_type_id`, `course_id`) VALUES
	(1, 'arya.stark', '08ecec4a808357f020db3f09076d438e', 'arya.stark@winterfell.com', '2013-10-12 07:19:51', 1, 1);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;


-- Dumping structure for table online_course_portal.user_type
DROP TABLE IF EXISTS `user_type`;
CREATE TABLE IF NOT EXISTS `user_type` (
  `id` tinyint(4) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table online_course_portal.user_type: ~3 rows (approximately)
/*!40000 ALTER TABLE `user_type` DISABLE KEYS */;
INSERT INTO `user_type` (`id`, `name`, `description`) VALUES
	(1, 'student', 'Student users'),
	(2, 'faculty', 'Faculty users'),
	(5, 'admin', 'Administrator');
/*!40000 ALTER TABLE `user_type` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
