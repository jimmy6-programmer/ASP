-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2024 at 11:59 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voting_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `contestants`
--

CREATE TABLE `contestants` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `specialty` varchar(100) NOT NULL,
  `origin` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `points` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contestants`
--

INSERT INTO `contestants` (`id`, `name`, `age`, `specialty`, `origin`, `image`, `points`) VALUES
(1, 'Contestant 1', 25, 'Vocalist', 'Gasabo', 'img/bruce.jpg', 5),
(2, 'Contestant 2', 22, 'Guitarist', 'Kicukiro', 'img/kipa.jpg', 5),
(3, 'Contestant 3', 28, 'Drummer', 'Nyamirambo', 'img/ish.jpg', 20),
(4, 'Butera Knowless', 34, 'vocalist', 'Bugesera', 'img/knowless.jpg', 21),
(5, 'papa cyangwe', 20, 'vocalist', 'nyamata', 'img/papa-cyangwe.jpg', 0),
(6, 'Bruce Melody', 35, 'vocalist', 'nyarugenge', 'img/bruce_melody.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `id` int(11) NOT NULL,
  `contestant_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `telephone` int(20) NOT NULL,
  `vote_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`id`, `contestant_id`, `amount`, `telephone`, `vote_time`) VALUES
(1, 3, 1000, 790203316, '0000-00-00 00:00:00'),
(2, 2, 500, 567889345, '2024-08-15 14:57:29'),
(3, 4, 1000, 2147483647, '2024-08-16 07:27:41'),
(4, 4, 1000, 2147483647, '2024-08-16 07:28:27'),
(5, 4, 100, 2147483647, '2024-08-16 07:28:52'),
(6, 1, 500, 78878355, '2024-08-16 08:32:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contestants`
--
ALTER TABLE `contestants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contestant_id` (`contestant_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contestants`
--
ALTER TABLE `contestants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `votes`
--
ALTER TABLE `votes`
  ADD CONSTRAINT `votes_ibfk_1` FOREIGN KEY (`contestant_id`) REFERENCES `contestants` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
