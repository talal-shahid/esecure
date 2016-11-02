-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2016 at 11:25 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `esecure`
--

-- --------------------------------------------------------

--
-- Table structure for table `security_tokens`
--

CREATE TABLE `security_tokens` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL,
  `unique_id` varchar(10) NOT NULL,
  `ip` varchar(15) NOT NULL,
  `used` tinyint(1) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `security_tokens`
--

INSERT INTO `security_tokens` (`id`, `text`, `unique_id`, `ip`, `used`, `datetime`) VALUES
(20, 'dNyEZs6ym47LvxhCUYyhyTYeuN0I0nag+/O5RQW5X4A=', '81eafda66d', '::1', 0, '2016-11-02 02:11:54'),
(21, 'XYlpOR52bFacppArAeG+QItfdwa1MJX6dmpk+iewWxKSmaCkKlGo0TBDWmiZjeo9', 'fec9cd445e', '::1', 1, '2016-11-02 08:02:03'),
(22, '4xMwJj7wKeSHy6UFyMttb+N6HhCOSzCNB8+HHJFqxo0=', 'dce3805d28', '::1', 0, '2016-11-02 08:01:26'),
(23, 'pnXxAA7fq+rSriWuHahJ0FO+b732G27FEyfYRKCGSoM=', '83ca373f7b', '::1', 0, '2016-11-02 03:11:43'),
(24, 'bhGN/ZySOsB60CqkD/QmkkNPfi3X5a4ourGex+yFdSA=', 'e2b23f21d4', '::1', 0, '2016-11-02 03:11:44'),
(25, 'Qy1NzB41z0OTTPBdCnvW4xyawC27JnwzprUkUlq6krI=', '02126801ea', '::1', 0, '2016-11-02 03:11:52'),
(26, 'tzSHxzS5oWTsOav+KRmsv/MnqYcA0RLuTMg9Lx4Hzt8=', '1ce26fc5ae', '::1', 1, '2016-11-02 08:52:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `security_tokens`
--
ALTER TABLE `security_tokens`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `security_tokens`
--
ALTER TABLE `security_tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
