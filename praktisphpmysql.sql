-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for praktisphpmysql
CREATE DATABASE IF NOT EXISTS `praktisphpmysql` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `praktisphpmysql`;

-- Dumping structure for table praktisphpmysql.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `nama` varchar(254) DEFAULT NULL,
  `emel` varchar(254) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- Dumping data for table praktisphpmysql.users: ~1 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `nama`, `emel`, `created_at`, `updated_at`) VALUES
	(1, 'Burhan Razali', 'burhan@legoom.net', '2021-04-04 05:15:28', '2021-04-04 05:17:31'),
	(2, 'Azura Roslia', 'azura@legoom.net', '2021-04-04 05:17:06', '2021-04-04 05:17:06'),
	(3, 'Muaz Malek', 'muazmalek@legoom.net', '2021-04-04 05:17:53', '2021-04-04 05:17:53'),
	(4, 'Ramdan Rosli', 'rosli.ramdan@legoom.net', '2021-04-04 05:18:26', '2021-04-04 05:18:26'),
	(5, 'Avi Zetty', 'aviozet@legoom.com', '2021-04-04 05:18:57', '2021-04-04 05:18:57'),
	(8, 'TNOBOGivAc', 'sFaje8k2Ye@legoom.net', '2021-04-04 05:20:06', '2021-04-04 05:20:06'),
	(9, 'DzYyHrzJgP', 'iD4tLAO18o@legoom.net', '2021-04-04 05:20:09', '2021-04-04 05:20:09'),
	(10, 'DqCeaqstJD', '80gAOCItbF@legoom.net', '2021-04-04 05:20:12', '2021-04-04 05:20:12');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
