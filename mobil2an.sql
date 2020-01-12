-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 12, 2020 at 12:12 PM
-- Server version: 5.7.26
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobil2an`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` varchar(8) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `komentar` varchar(500) NOT NULL,
  `waktu` varchar(20) NOT NULL,
  `suka` int(5) NOT NULL,
  `taksuka` int(5) NOT NULL,
  `lists_id` int(11) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `nama`, `judul`, `komentar`, `waktu`, `suka`, `taksuka`, `lists_id`) VALUES
('K0003', 'Mushab', 'Kurang.', 'Kurang enak untuk keluarga dengan mobil yang kelasnya', '12-01-2020 18:57:05', 1, 0, 3),
('K0002', 'Sahat Paiyan', 'Suspensi Baik!', 'Mobil ini memiliki suspensi yang terbaik di kelasnya!', '12-01-2020 18:56:17', 0, 2, 3),
('K0001', 'Ade Rohdiana', 'Bagus!', 'Sangat disarankan mobilnya karena seperti amphibi!', '12-01-2020 18:52:28', 2, 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `lists`
--

DROP TABLE IF EXISTS `lists`;
CREATE TABLE IF NOT EXISTS `lists` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `merek` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `bb` varchar(8) NOT NULL,
  `harga` int(50) NOT NULL,
  `file` varchar(100) NOT NULL,
  UNIQUE KEY `no` (`no`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lists`
--

INSERT INTO `lists` (`no`, `merek`, `model`, `bb`, `harga`, `file`) VALUES
(2, 'Honda', 'Brio', 'Bensin', 120000000, 'Mobil-City-Car-Murah-Honda.jpg'),
(3, 'Toyota', 'Alphard', 'Bensin', 300000000, 'Harga-Mobil-Toyota-Alphard-Terbaru-Feature-Image-1024x576.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
