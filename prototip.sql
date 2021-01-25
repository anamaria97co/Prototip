-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 25, 2021 at 09:14 PM
-- Server version: 8.0.21
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prototip`
--

-- --------------------------------------------------------

--
-- Table structure for table `karte`
--

DROP TABLE IF EXISTS `karte`;
CREATE TABLE IF NOT EXISTS `karte` (
  `vrsta` varchar(255) NOT NULL,
  `količina` int NOT NULL,
  `cijena` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `karte`
--

INSERT INTO `karte` (`vrsta`, `količina`, `cijena`) VALUES
('pretplatna', 0, 0),
('satna', 0, 0),
('tjedna', 0, 0),
('poludnevna', 0, 0),
('vikend', 0, 0),
('dnevna', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `kazne`
--

DROP TABLE IF EXISTS `kazne`;
CREATE TABLE IF NOT EXISTS `kazne` (
  `sifra` int NOT NULL,
  `nazivKazne` varchar(30) NOT NULL,
  `cijena` int NOT NULL,
  `opis` varchar(50) NOT NULL,
  `vrijemeUlaska` varchar(50) NOT NULL,
  `vrijemeIzlaska` varchar(50) NOT NULL,
  `page_id` int NOT NULL,
  PRIMARY KEY (`sifra`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kazne`
--

INSERT INTO `kazne` (`sifra`, `nazivKazne`, `cijena`, `opis`, `vrijemeUlaska`, `vrijemeIzlaska`, `page_id`) VALUES
(100, 'Kazna1', 250, 'Kazna na Gradcu, Dubrovnik.', '', '', 1),
(101, 'Kazna2', 80, 'Kazna na Gradcu, Dubrovnik.', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

DROP TABLE IF EXISTS `korisnici`;
CREATE TABLE IF NOT EXISTS `korisnici` (
  `id` int NOT NULL AUTO_INCREMENT,
  `korIme` varchar(255) NOT NULL,
  `lozinka` varchar(50) NOT NULL,
  `oznaka` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`id`, `korIme`, `lozinka`, `oznaka`) VALUES
(1, 'zaposlenik', '1234', 1);

-- --------------------------------------------------------

--
-- Table structure for table `parkingmjesto`
--

DROP TABLE IF EXISTS `parkingmjesto`;
CREATE TABLE IF NOT EXISTS `parkingmjesto` (
  `sifraParkiralista` int NOT NULL AUTO_INCREMENT,
  `oznakaMjesta` varchar(255) NOT NULL,
  `oznakaZauzeca` varchar(255) NOT NULL,
  `sifraKarte` int NOT NULL,
  `vrijemeUlaz` varchar(100) NOT NULL,
  `vrijemeIzlaz` varchar(100) NOT NULL,
  PRIMARY KEY (`sifraParkiralista`)
) ENGINE=MyISAM AUTO_INCREMENT=2556 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `parkingmjesto`
--

INSERT INTO `parkingmjesto` (`sifraParkiralista`, `oznakaMjesta`, `oznakaZauzeca`, `sifraKarte`, `vrijemeUlaz`, `vrijemeIzlaz`) VALUES
(2555, '', '', 0, '', ''),
(300, 'A12', 'zauzeto', 0, '13:21', '15:00'),
(1100, 'A20', 'zauzeto', 0, '08:20', '14:30'),
(1000, 'A12', 'zauzeto', 0, '13:33', '14:50');

-- --------------------------------------------------------

--
-- Table structure for table `parkiraliste`
--

DROP TABLE IF EXISTS `parkiraliste`;
CREATE TABLE IF NOT EXISTS `parkiraliste` (
  `sifraParkiralista` int NOT NULL,
  `nazivParkiralista` varchar(255) NOT NULL,
  `brojMjesta` int NOT NULL,
  PRIMARY KEY (`sifraParkiralista`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `parkiraliste`
--

INSERT INTO `parkiraliste` (`sifraParkiralista`, `nazivParkiralista`, `brojMjesta`) VALUES
(2501, 'Gavno parkiraliste Zagreb', 35),
(300, 'Javno parkiraliste', 35),
(1000, 'Javno parkiraliste', 35),
(1109, 'Lapadsko parkiraliste', 60),
(1112, 'Grusko parkiraliste', 120),
(1100, 'Gradac', 120);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
