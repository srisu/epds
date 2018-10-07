-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2018 at 11:48 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epds`
--

-- --------------------------------------------------------

--
-- Table structure for table `prod_vs_type`
--

CREATE TABLE `prod_vs_type` (
  `pt_prodname` varchar(100) DEFAULT NULL,
  `gq` int(11) DEFAULT NULL,
  `wq` int(11) DEFAULT NULL,
  `kq` int(11) DEFAULT NULL,
  `bq` int(11) DEFAULT NULL,
  `wncq` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prod_vs_type`
--

INSERT INTO `prod_vs_type` (`pt_prodname`, `gq`, `wq`, `kq`, `bq`, `wncq`) VALUES
('rice', 20, 0, 20, 20, 0),
('sugar', 2, 5, 2, 2, 0),
('wheat', 10, 10, 10, 10, 0),
('kerosene', 15, 0, 0, 0, 0),
('toor dall', 1, 1, 1, 1, 0),
('urad dall', 1, 1, 1, 1, 0),
('palmolein oil', 1, 1, 1, 1, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
