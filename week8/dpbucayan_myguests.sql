-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 08, 2024 at 06:01 AM
-- Server version: 8.0.36-0ubuntu0.22.04.1
-- PHP Version: 8.1.2-1ubuntu2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webprogss221`
--

-- --------------------------------------------------------

--
-- Table structure for table `apcemailid_myguests`
--

CREATE TABLE `dpbucayan_myguests` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `suggestion` varchar(50) NOT NULL DEFAULT 'NULL',
  `comment` text NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `dpbucayan_myguests`
--

INSERT INTO `dpbucayan_myguests` (`id`, `name`, `suggestion`, `comment`, `reg_date`) VALUES
(1, 'Daniel Bucayan', 'Testing', 'sample text', 'test', '2024-02-06 04:10:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apcemailid_myguests`
--
ALTER TABLE `dpbucayan_myguests`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apcemailid_myguests`
--
ALTER TABLE `dpbucayan_myguests`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
