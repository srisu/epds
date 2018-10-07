-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2018 at 11:47 AM
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
-- Table structure for table `card_colors`
--

CREATE TABLE `card_colors` (
  `id` int(11) NOT NULL,
  `name` varchar(10) DEFAULT NULL,
  `prod_desc` varchar(100) DEFAULT NULL,
  `riceq` int(11) DEFAULT NULL,
  `sugarq` int(11) DEFAULT NULL,
  `wheatq` int(11) DEFAULT NULL,
  `kerosene` int(11) DEFAULT NULL,
  `toorq` int(11) DEFAULT NULL,
  `uradq` int(11) DEFAULT NULL,
  `palmq` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `card_colors`
--

INSERT INTO `card_colors` (`id`, `name`, `prod_desc`, `riceq`, `sugarq`, `wheatq`, `kerosene`, `toorq`, `uradq`, `palmq`) VALUES
(1, 'green', 'Green Cards-All commodities', 20, 2, 10, 15, 1, 1, 1),
(2, 'white', 'white Cards-All commodities except rice', 0, 5, 10, 0, 1, 1, 1),
(3, 'khaki', 'Khaki Cards-All commodities(police cards)', 20, 2, 10, 0, 1, 1, 1),
(4, 'blue', 'Blue Cards-All commodities(Forest official cards)', 20, 2, 10, 0, 1, 1, 1),
(5, 'whitenc', 'White Cards-No commodities', 0, 0, 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `card_colors`
--
ALTER TABLE `card_colors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `card_colors`
--
ALTER TABLE `card_colors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
