-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.21-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table perang_coding.perang_coding_score
DROP TABLE IF EXISTS `perang_coding_score`;
CREATE TABLE IF NOT EXISTS `perang_coding_score` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `nomor_soal` int(11) NOT NULL DEFAULT 0,
  `jawaban` text COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `timestamp` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table perang_coding.perang_coding_score: ~0 rows (approximately)
DELETE FROM `perang_coding_score`;
/*!40000 ALTER TABLE `perang_coding_score` DISABLE KEYS */;
/*!40000 ALTER TABLE `perang_coding_score` ENABLE KEYS */;

-- Dumping structure for table perang_coding.perang_coding_user
DROP TABLE IF EXISTS `perang_coding_user`;
CREATE TABLE IF NOT EXISTS `perang_coding_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no_name',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table perang_coding.perang_coding_user: ~0 rows (approximately)
DELETE FROM `perang_coding_user`;
/*!40000 ALTER TABLE `perang_coding_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `perang_coding_user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
