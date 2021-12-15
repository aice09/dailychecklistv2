-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.17-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.0.0.6043
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for kfcp_healthcheck
DROP DATABASE IF EXISTS `kfcp_healthcheck`;
CREATE DATABASE IF NOT EXISTS `kfcp_healthcheck` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_bin */;
USE `kfcp_healthcheck`;

-- Dumping structure for table kfcp_healthcheck.dailysymptomchecklist
DROP TABLE IF EXISTS `dailysymptomchecklist`;
CREATE TABLE IF NOT EXISTS `dailysymptomchecklist` (
  `empinfo_id` int(11) NOT NULL AUTO_INCREMENT,
  `empinfo_empid` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `empinfo_name` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `empinfo_department` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `empinfo_position` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `empinfo_date` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `empinfo_fever` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `empinfo_temperature` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `empinfo_df` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `empinfo_cough` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `empinfo_diarrhea` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `empinfo_chills` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `empinfo_cas` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `empinfo_headache` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `empinfo_sorethroat` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `empinfo_bjp` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `empinfo_lots` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `empinfo_rwn` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `empinfo_dv` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `empinfo_ef` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `empinfo_anywhere` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `empinfo_where` text COLLATE utf8mb4_bin DEFAULT NULL,
  `empinfo_dtcreated` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `empinfo_createdby` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `empinfo_dtupdated` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `empinfo_updatedby` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `empinfo_status` enum('ACTIVE','DELETED') COLLATE utf8mb4_bin DEFAULT NULL,
  PRIMARY KEY (`empinfo_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Dumping data for table kfcp_healthcheck.dailysymptomchecklist: ~2 rows (approximately)
/*!40000 ALTER TABLE `dailysymptomchecklist` DISABLE KEYS */;
INSERT INTO `dailysymptomchecklist` (`empinfo_id`, `empinfo_empid`, `empinfo_name`, `empinfo_department`, `empinfo_position`, `empinfo_date`, `empinfo_fever`, `empinfo_temperature`, `empinfo_df`, `empinfo_cough`, `empinfo_diarrhea`, `empinfo_chills`, `empinfo_cas`, `empinfo_headache`, `empinfo_sorethroat`, `empinfo_bjp`, `empinfo_lots`, `empinfo_rwn`, `empinfo_dv`, `empinfo_ef`, `empinfo_anywhere`, `empinfo_where`, `empinfo_dtcreated`, `empinfo_createdby`, `empinfo_dtupdated`, `empinfo_updatedby`, `empinfo_status`) VALUES
	(16, 'EK-08-0001', 'Kimberly Joy R. Copioso', 'HR', 'Staff', '12/10/2021', 'No', '36.1', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', '12/10/2021 09:42 AM', 'EK-08-0001', ' ', ' ', 'ACTIVE'),
	(19, 'EL-11-0013', 'Carl Angelo P. Nievarez', 'HR', 'IT', '12/14/2021', 'No', '36', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', '12/14/2021 03:45 PM', 'EL-11-0013', ' ', ' ', 'ACTIVE');
/*!40000 ALTER TABLE `dailysymptomchecklist` ENABLE KEYS */;

-- Dumping structure for table kfcp_healthcheck.empinfo
DROP TABLE IF EXISTS `empinfo`;
CREATE TABLE IF NOT EXISTS `empinfo` (
  `empinfo_id` int(11) NOT NULL AUTO_INCREMENT,
  `empinfo_empid` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `empinfo_name` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `empinfo_department` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `empinfo_position` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `empinfo_date` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `empinfo_temperature` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `empinfo_cough` enum('Y','N') COLLATE utf8mb4_bin DEFAULT NULL,
  `empinfo_fever` enum('Y','N') COLLATE utf8mb4_bin DEFAULT NULL,
  `empinfo_df` enum('Y','N') COLLATE utf8mb4_bin DEFAULT NULL,
  `empinfo_diarrhea` enum('Y','N') COLLATE utf8mb4_bin DEFAULT NULL,
  `empinfo_chills` enum('Y','N') COLLATE utf8mb4_bin DEFAULT NULL,
  `empinfo_cas` enum('Y','N') COLLATE utf8mb4_bin DEFAULT NULL,
  `empinfo_headache` enum('Y','N') COLLATE utf8mb4_bin DEFAULT NULL,
  `empinfo_sorethroat` enum('Y','N') COLLATE utf8mb4_bin DEFAULT NULL,
  `empinfo_bjp` enum('Y','N') COLLATE utf8mb4_bin DEFAULT NULL,
  `empinfo_lots` enum('Y','N') COLLATE utf8mb4_bin DEFAULT NULL,
  `empinfo_rwn` enum('Y','N') COLLATE utf8mb4_bin DEFAULT NULL,
  `empinfo_dv` enum('Y','N') COLLATE utf8mb4_bin DEFAULT NULL,
  `empinfo_ef` enum('Y','N') COLLATE utf8mb4_bin DEFAULT NULL,
  `empinfo_anywhere` enum('Y','N') COLLATE utf8mb4_bin DEFAULT NULL,
  `empinfo_where` text COLLATE utf8mb4_bin DEFAULT NULL,
  `empinfo_dtcreated` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  PRIMARY KEY (`empinfo_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Dumping data for table kfcp_healthcheck.empinfo: ~24 rows (approximately)
/*!40000 ALTER TABLE `empinfo` DISABLE KEYS */;
INSERT INTO `empinfo` (`empinfo_id`, `empinfo_empid`, `empinfo_name`, `empinfo_department`, `empinfo_position`, `empinfo_date`, `empinfo_temperature`, `empinfo_cough`, `empinfo_fever`, `empinfo_df`, `empinfo_diarrhea`, `empinfo_chills`, `empinfo_cas`, `empinfo_headache`, `empinfo_sorethroat`, `empinfo_bjp`, `empinfo_lots`, `empinfo_rwn`, `empinfo_dv`, `empinfo_ef`, `empinfo_anywhere`, `empinfo_where`, `empinfo_dtcreated`) VALUES
	(1, 'EL-11-0013', 'Carl Angelo Nievarez', 'MIS', 'IT', '2021-09-23', '36.4', 'N', 'N', 'N', NULL, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', '', '09/09/2021 01:54 PM'),
	(2, 'EL-11-0013', 'Carl Angelo Nievarez', 'MIS', 'IT', '2021-09-23', '36.4', 'N', 'N', 'N', NULL, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', '', '09/09/2021 01:54 PM'),
	(3, 'EL-11-0013', 'Carl Angelo Nievarez', 'MIS', 'IT', '2021-09-23', '36.4', 'N', 'N', 'N', NULL, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'Y', 'test', '09/09/2021 01:59 PM'),
	(4, 'EL-11-0013', 'Carl Angelo Nievarez', 'MIS', 'IT', '2021-09-21', '36.3', 'N', 'N', 'N', NULL, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', '', '09/09/2021 02:36 PM'),
	(5, 'EL-11-0013', 'Carl Angelo Nievarez', 'MIS', 'IT', '2021-09-22', '36', 'N', 'N', 'N', NULL, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', '', '09/09/2021 02:37 PM'),
	(6, 'EL-11-0013', 'Carl Angelo Nievarez', 'MIS', 'IT', '2021-09-15', '36', 'N', 'N', 'N', NULL, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', '', '09/09/2021 02:46 PM'),
	(7, 'EK-08-0001', 'Kimberly Joy Copioso', 'HR', 'Staff', '2021-09-09', '36.1', 'N', 'N', 'N', NULL, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', '', '09/09/2021 02:52 PM'),
	(8, '21-07-0006', 'Jenus Roxas', 'HR', 'Staff', '09/09/21', '35.6', 'N', 'N', 'N', NULL, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', '', '09/09/2021 03:26 PM'),
	(9, 'ES-07-0016', 'Noralyn Pestaño', 'HR', 'Manager', '09/09/2021', '36.3', 'N', 'N', 'N', NULL, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', '', '09/09/2021 03:33 PM'),
	(10, 'EL-11-0013', 'Carl Angelo Nievarez', 'MIS', 'IT', '2021-09-09', '35', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'Y', 'mcdo', '09/09/2021 03:57 PM'),
	(11, 'EL-11-0013', 'Carl Angelo Nievarez', 'HR', 'IT', '', '', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', '', '09/09/2021 04:16 PM'),
	(12, 'EC-08-0017', 'Flordeliza Gaba', '<br /><b>Warning</b>:  Undefined array key ', '<br /><b>Warning</b>:  Undefined array key ', '2021-09-09', '36.4', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', '', '09/09/2021 04:44 PM'),
	(13, 'EE-01-0001', 'Jerraldin Mislang', '<br /><b>Warning</b>:  Undefined array key ', '<br /><b>Warning</b>:  Undefined array key ', '2021-09-10', '36.0', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', '', '09/10/2021 08:07 AM'),
	(14, 'EC-08-0017', 'Flordeliza Gaba', '<br /><b>Warning</b>:  Undefined array key ', '<br /><b>Warning</b>:  Undefined array key ', '2021-09-10', '35.3', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', '', '09/10/2021 10:32 AM'),
	(15, '21-07-0006', 'Jenus Roxas', 'HR', 'Staff', '2021-09-10', '36.2', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', '', '09/10/2021 11:13 AM'),
	(16, 'EF-06-0021', 'Julie Sol Aler', 'Sales', '<br /><b>Warning</b>:  Undefined array key ', '2021-09-10', '36.1', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', '', '09/10/2021 02:03 PM'),
	(17, 'EW-07-0060', 'Evsley Marie Lamqui', '<br /><b>Warning</b>:  Undefined array key ', '<br /><b>Warning</b>:  Undefined array key ', '2021-09-10', '36.4', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'No', '09/10/2021 05:05 PM'),
	(18, '21-07-0006', 'Jenus Roxas', 'HR', 'Staff', '2021-09-11', '36.5', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', '', '09/11/2021 09:24 AM'),
	(19, '21-07-0006', 'Jenus Roxas', 'HR', 'Staff', '2021-09-13', '36.2', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', '', '09/13/2021 08:27 AM'),
	(20, 'ES-07-0016', 'Noralyn Pestaño', 'HR', 'Manager', '09/13/2021', '36.4C', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'Y', 'Church (COG Premier Plaza Silang Cavite)', '09/13/2021 02:43 PM'),
	(21, '21-07-0006', 'Jenus Roxas', 'HR', 'Staff', '2021-09-14', '35.6', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', '', '09/14/2021 10:14 AM'),
	(22, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '09/14/2021 10:14 AM'),
	(23, 'EL-11-0013', 'Carl Angelo Nievarez', 'HR', 'IT', '', '35.6', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', '', '09/15/2021 08:52 AM'),
	(24, 'EL-11-0013', 'Carl Angelo Nievarez', 'HR', 'IT', '2021-09-15', '35.6', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', '', '09/15/2021 08:53 AM'),
	(25, '21-07-0006', 'Jenus Roxas', 'HR', 'Staff', '2021-09-21', '35.6', 'N', 'N', 'N', 'N', 'N', 'N', 'Y', 'N', 'N', 'N', 'N', 'N', 'N', 'N', '', '09/21/2021 07:56 AM');
/*!40000 ALTER TABLE `empinfo` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
