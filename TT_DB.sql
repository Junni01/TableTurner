-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.30-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table tableturner.reservation
CREATE TABLE IF NOT EXISTS `reservation` (
  `ReservationID` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `time` int(11) NOT NULL,
  `details` varchar(100) NOT NULL,
  `userID` smallint(5) unsigned NOT NULL,
  PRIMARY KEY (`ReservationID`),
  KEY `FK_reservation_user` (`userID`),
  CONSTRAINT `FK_reservation_user` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Dumping data for table tableturner.reservation: ~6 rows (approximately)
/*!40000 ALTER TABLE `reservation` DISABLE KEYS */;
INSERT INTO `reservation` (`ReservationID`, `date`, `time`, `details`, `userID`) VALUES
	(1, '2018-03-01', 1, 'Moikka', 1),
	(2, '2018-03-01', 2, '', 4),
	(3, '2018-03-01', 1, '', 3),
	(4, '2018-03-01', 1, 'hei', 2),
	(5, '2018-03-01', 1, '', 7),
	(6, '2018-03-01', 3, 'KKKKKeeeeijjjoooo', 6);
/*!40000 ALTER TABLE `reservation` ENABLE KEYS */;

-- Dumping structure for table tableturner.user
CREATE TABLE IF NOT EXISTS `user` (
  `userID` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `firstName` varchar(16) NOT NULL,
  `lastName` varchar(16) NOT NULL,
  `email` varchar(64) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table tableturner.user: ~7 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`userID`, `firstName`, `lastName`, `email`, `password`) VALUES
	(1, 'Joonas', 'Eskonheimo', 'jee@hotmail.fi', ''),
	(2, 'Saku', 'Junni', 'armahtaja@gmail.com', ''),
	(3, 'Mikko', 'Makkonen', 'makkis@hotmail.com', ''),
	(4, 'Makko', 'Mikkonen', 'mikko@gmail.com', ''),
	(5, 'Hillo', 'Hallonen', 'HHH@hotmail.fi', ''),
	(6, 'Henri', 'Harrinen', 'Henri@gmail.com', ''),
	(7, 'Pokka', 'Pekkanen', 'Pekka@hotmail.fi', '');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
