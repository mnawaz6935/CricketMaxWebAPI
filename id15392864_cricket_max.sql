-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 13, 2021 at 09:39 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id15392864_cricket_max`
--

-- --------------------------------------------------------

--
-- Table structure for table `coins`
--

CREATE TABLE `coins` (
  `id` int(11) NOT NULL,
  `account_Id` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `account_accessToken` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `active` int(1) NOT NULL,
  `coins` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `coins`
--

INSERT INTO `coins` (`id`, `account_Id`, `account_accessToken`, `active`, `coins`) VALUES
(1, 'qwertyui', 'qwwewjrehfehfiuwehfuiwhf', 0, 25),
(2, 'qwertyui', 'qwwewjrehfehfiuwehfuiwhf', 0, 25),
(3, '2021-1855320000007119', '00000002232021185532000000', 0, 200),
(4, '2021-1855320000007119', '00000002232021185532000000', 0, 300),
(5, '2021-0831200000009550', '00000003132021083120000000', 0, 300),
(6, '2021-0830140000007823', '00000003132021083014000000', 0, 500),
(7, '2021-0207510000007873', '00000003132021083230000000', 0, 200);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coins`
--
ALTER TABLE `coins`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coins`
--
ALTER TABLE `coins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
