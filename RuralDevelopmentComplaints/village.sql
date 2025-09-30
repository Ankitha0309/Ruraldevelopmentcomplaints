-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.22-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for ruraldevelop_system
DROP DATABASE IF EXISTS `ruraldevelop_system`;
CREATE DATABASE IF NOT EXISTS `ruraldevelop_system` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `ruraldevelop_system`;

-- Dumping structure for table ruraldevelop_system.fund_release
DROP TABLE IF EXISTS `fund_release`;
CREATE TABLE IF NOT EXISTS `fund_release` (
  `slno` int(11) NOT NULL AUTO_INCREMENT,
  `complaint_id` varchar(250) NOT NULL,
  `pdo` varchar(250) NOT NULL,
  `funds` int(11) NOT NULL,
  `assigned_worker` varchar(250) NOT NULL,
  PRIMARY KEY (`slno`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table ruraldevelop_system.fund_release: ~1 rows (approximately)
DELETE FROM `fund_release`;
/*!40000 ALTER TABLE `fund_release` DISABLE KEYS */;
INSERT INTO `fund_release` (`slno`, `complaint_id`, `pdo`, `funds`, `assigned_worker`) VALUES
	(2, '20220001', '', 10000, 'WORKER');
/*!40000 ALTER TABLE `fund_release` ENABLE KEYS */;

-- Dumping structure for table ruraldevelop_system.gen_std_complaints
DROP TABLE IF EXISTS `gen_std_complaints`;
CREATE TABLE IF NOT EXISTS `gen_std_complaints` (
  `complaint_id` int(11) NOT NULL AUTO_INCREMENT,
  `village` varchar(250) NOT NULL,
  `ward_no` varchar(250) NOT NULL,
  `complaint_title` varchar(250) NOT NULL,
  `complaint_type` varchar(250) NOT NULL,
  `complaint_desc` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `complaints_status` varchar(250) NOT NULL,
  `assigned_supervisior` varchar(250) NOT NULL,
  `created_by` varchar(250) NOT NULL,
  `created_on` date NOT NULL,
  `created_at` time NOT NULL,
  `modified_by` varchar(250) NOT NULL,
  `modified_at` time NOT NULL,
  `modified_on` date NOT NULL,
  PRIMARY KEY (`complaint_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20220004 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table ruraldevelop_system.gen_std_complaints: ~3 rows (approximately)
DELETE FROM `gen_std_complaints`;
/*!40000 ALTER TABLE `gen_std_complaints` DISABLE KEYS */;
INSERT INTO `gen_std_complaints` (`complaint_id`, `village`, `ward_no`, `complaint_title`, `complaint_type`, `complaint_desc`, `image`, `complaints_status`, `assigned_supervisior`, `created_by`, `created_on`, `created_at`, `modified_by`, `modified_at`, `modified_on`) VALUES
	(20220001, 'Narasimharaja Mohalla', '570007', 'Road Contraction', 'Major', 'Road Contraction', 'images/Capture.PNG', 'Confirmed', 'SUPERVISOR', 'COMPLAINER ', '2022-01-15', '20:28:22', '', '00:00:00', '0000-00-00'),
	(20220002, 'Narasimharaja Mohalla', '570007', 'Test', 'Major', 'Test', 'images/Capture.PNG', '', '', 'COMPLAINER ', '2022-01-15', '21:01:08', '', '00:00:00', '0000-00-00'),
	(20220003, 'Nachanahalli Palya', '570008', 'Dummy', 'Description', 'Address', 'images/Capture.PNG', '', '', 'COMPLAINER ', '2022-01-16', '20:21:29', '', '00:00:00', '0000-00-00');
/*!40000 ALTER TABLE `gen_std_complaints` ENABLE KEYS */;

-- Dumping structure for table ruraldevelop_system.gen_std_users
DROP TABLE IF EXISTS `gen_std_users`;
CREATE TABLE IF NOT EXISTS `gen_std_users` (
  `slno` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `mobile_no` int(11) NOT NULL,
  `user_type` varchar(250) NOT NULL,
  `designation` varchar(250) NOT NULL,
  `ward_no` varchar(250) NOT NULL,
  PRIMARY KEY (`slno`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table ruraldevelop_system.gen_std_users: ~5 rows (approximately)
DELETE FROM `gen_std_users`;
/*!40000 ALTER TABLE `gen_std_users` DISABLE KEYS */;
INSERT INTO `gen_std_users` (`slno`, `name`, `user_name`, `password`, `mobile_no`, `user_type`, `designation`, `ward_no`) VALUES
	(10, 'admin', 'admin', '123', 2147483647, 'Admin', 'Admin', ''),
	(11, 'PDO', 'PDO', '57007', 2147483647, 'designation', 'PDO', '570007'),
	(12, 'SUPERVISOR', 'SUPERVISOR', '57007', 2147483647, 'designation', 'Supervisior', '570007'),
	(13, 'COMPLAINER', 'COMPLAINER', '57007', 2147483647, 'designation', 'Complainer', '570007'),
	(14, 'WORKER', 'WORKER', '123', 2147483647, 'designation', 'Worker', '570007');
/*!40000 ALTER TABLE `gen_std_users` ENABLE KEYS */;

-- Dumping structure for table ruraldevelop_system.gen_std_village
DROP TABLE IF EXISTS `gen_std_village`;
CREATE TABLE IF NOT EXISTS `gen_std_village` (
  `slno` int(11) NOT NULL AUTO_INCREMENT,
  `village` varchar(250) NOT NULL,
  `ward_no` varchar(250) NOT NULL,
  PRIMARY KEY (`slno`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table ruraldevelop_system.gen_std_village: ~2 rows (approximately)
DELETE FROM `gen_std_village`;
/*!40000 ALTER TABLE `gen_std_village` DISABLE KEYS */;
INSERT INTO `gen_std_village` (`slno`, `village`, `ward_no`) VALUES
	(11, 'Nachanahalli Palya', '570008'),
	(12, 'Narasimharaja Mohalla', '570007');
/*!40000 ALTER TABLE `gen_std_village` ENABLE KEYS */;

-- Dumping structure for function ruraldevelop_system.GetsumofFundsReleased
DROP FUNCTION IF EXISTS `GetsumofFundsReleased`;
DELIMITER //
CREATE FUNCTION `GetsumofFundsReleased`() RETURNS double
BEGIN
DECLARE `sum` integer;
SELECT SUM(funds) into `sum` FROM fund_release;
RETURN `sum`;
END//
DELIMITER ;

-- Dumping structure for table ruraldevelop_system.log_tracking
DROP TABLE IF EXISTS `log_tracking`;
CREATE TABLE IF NOT EXISTS `log_tracking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `complaint_summary` varchar(255) NOT NULL,
  `date_id` date NOT NULL DEFAULT curdate(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table ruraldevelop_system.log_tracking: ~2 rows (approximately)
DELETE FROM `log_tracking`;
/*!40000 ALTER TABLE `log_tracking` DISABLE KEYS */;
INSERT INTO `log_tracking` (`id`, `complaint_summary`, `date_id`) VALUES
	(1, 'Test-Test', '2022-01-15'),
	(2, 'Dummy-Address', '2022-01-16');
/*!40000 ALTER TABLE `log_tracking` ENABLE KEYS */;

-- Dumping structure for trigger ruraldevelop_system.log_tracking
DROP TRIGGER IF EXISTS `log_tracking`;
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER `log_tracking` AFTER INSERT ON `gen_std_complaints` FOR EACH ROW BEGIN
INSERT INTO log_tracking(complaint_summary) VALUES(CONCAT(NEW.complaint_title,'-',NEW.complaint_desc));
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
