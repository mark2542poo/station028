-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2020 at 11:11 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `station`
--

-- --------------------------------------------------------

--
-- Table structure for table `station28`
--

CREATE TABLE `station28` (
  `procession` int(50) NOT NULL,
  `station1` varchar(40) NOT NULL,
  `timeout` time NOT NULL,
  `to` time NOT NULL,
  `out` time NOT NULL,
  `station2` varchar(40) NOT NULL,
  `timein` time NOT NULL,
  `note` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `station28`
--

INSERT INTO `station28` (`procession`, `station1`, `timeout`, `to`, `out`, `station2`, `timein`, `note`) VALUES
(234, 'สุรินทร์', '05:20:00', '05:53:00', '05:54:00', 'กรุงเทพ', '14:15:00', 'รถธรรมดา'),
(234, 'สุรินทร์', '14:52:00', '14:52:00', '14:20:00', 'กรุงเทพ', '18:00:00', 'รถธรรมดา'),
(234, 'สุรินทร์', '14:52:00', '14:52:00', '14:20:00', 'กรุงเทพ', '18:00:00', 'รถธรรมดา'),
(234, 'สุรินทร์', '14:52:00', '14:52:00', '14:20:00', 'กรุงเทพ', '18:00:00', 'รถธรรมดา'),
(234, 'สุรินทร์', '14:52:00', '14:52:00', '14:20:00', 'กรุงเทพ', '18:00:00', 'รถธรรมดา'),
(234, 'สุรินทร์', '14:52:00', '14:52:00', '14:20:00', 'กรุงเทพ', '18:00:00', 'รถธรรมดา'),
(234, 'สุรินทร์', '14:52:00', '14:52:00', '14:20:00', 'กรุงเทพ', '18:00:00', 'รถธรรมดา'),
(234, 'สุรินทร์', '14:52:00', '14:52:00', '14:20:00', 'กรุงเทพ', '18:00:00', 'รถธรรมดา'),
(234, 'สุรินทร์', '14:52:00', '14:52:00', '14:20:00', 'กรุงเทพ', '18:00:00', 'รถธรรมดา'),
(234, 'สุรินทร์', '05:20:00', '05:53:00', '05:54:00', 'กรุงเทพ', '14:15:00', 'รถธรรมดา'),
(234, 'สุรินทร์', '05:20:00', '05:53:00', '05:54:00', 'กรุงเทพ', '14:15:00', 'รถธรรมดา'),
(234, 'สุรินทร์', '05:20:00', '05:53:00', '05:54:00', 'กรุงเทพ', '14:15:00', 'รถธรรมดา'),
(234, 'สุรินทร์', '05:20:00', '05:53:00', '05:54:00', 'กรุงเทพ', '14:15:00', 'รถธรรมดา'),
(234, 'สุรินทร์', '05:20:00', '05:53:00', '05:54:00', 'กรุงเทพ', '14:15:00', 'รถธรรมดา'),
(234, 'สุรินทร์', '05:20:00', '05:53:00', '05:54:00', 'กรุงเทพ', '14:15:00', 'รถธรรมดา');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
