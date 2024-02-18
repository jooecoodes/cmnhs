-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2024 at 10:10 AM
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
-- Database: `cmnhs`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(5) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `grd_lvl` varchar(50) NOT NULL,
  `strand` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL,
  `adviser` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `fname`, `lname`, `grd_lvl`, `strand`, `section`, `adviser`, `gender`, `date`) VALUES
(1, 'Harvey123', 'Clarito', '11', 'humss', 'A', 'Nick Clarito', '', '2023-12-18 14:35:28'),
(2, 'please nick', 'good', '12', 'stem', 'B', 'Maria Clarito', '', '2023-12-18 14:45:23'),
(18, 'John', 'Cena', '11', 'humss', 'A', 'Nick Clarito', '', '2024-01-09 23:32:30'),
(20, 'Tatum', 'Cleveland', '11', 'humss', 'A', 'Nick Clarito', '', '2024-01-30 11:54:23');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `LRN` char(12) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `minitial` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `section` varchar(50) NOT NULL,
  `strand` varchar(200) NOT NULL,
  `adviser` varchar(50) DEFAULT NULL,
  `grd_lvl` int(5) NOT NULL,
  `token` varchar(50) DEFAULT NULL,
  `profile` varchar(50) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `contact_no` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `LRN`, `fname`, `minitial`, `lname`, `section`, `strand`, `adviser`, `grd_lvl`, `token`, `profile`, `gender`, `age`, `birthdate`, `contact_no`) VALUES
(1, '743827487348', 'Tatum', 'Et est esse provid', 'Cleveland', 'A', '', 'Nick Clarito', 0, '658522e4525641.10604769', 'Cleveland659ba655d34176.02033393.jpg', 'other', 31, '1978-09-07', NULL),
(2, '657325873657', 'Barry', 'Blanditiis porro odi', 'Moon', 'A', '', 'Nick Clarito', 0, '658522e45b1da5.69709906', NULL, 'female', 98, '2007-04-08', NULL),
(3, '123123123123', 'Ok', 'kaayo', 'okkaayo', 'b', '', 'Joe Villacorta', 0, '659b582be618c5.24688719', 'okkaayo659b9526ad8685.64739761.jpg', 'male', 2, '2024-01-09', NULL),
(4, '2351166', 'Lol', 'Lmao', 'XD', 'b', '', 'Joe Villacorta', 0, '659b5891cf7ee6.82215892', NULL, 'female', 2, '2024-01-02', NULL),
(5, '55555555', 'John', 'Doe', 'Cena', 'A', '', 'Nick Clarito', 0, '659e4778dea0a3.19830798', 'Cena659e47b6d725f8.40119921.png', 'male', 21, '2024-01-05', NULL),
(6, '123123123', 'Kinshen', 'N.', 'Bahian', 'a', '', 'Jefel Villacorta', 0, '65b89d0b1e0006.41329003', 'Bahian65b89e464b8ba1.22368553.jpg', 'male', 17, '2024-01-08', NULL),
(7, '12345656645', 'Kinshen', 'Nob', 'Bahian', 'a', '', 'kinshen bahian', 0, '65ccb40c825051.80720136', 'Bahian65ccbcb3833de5.25033430.jpg', 'male', -17, '2006-07-21', NULL),
(8, '12345656645', 'Kinshen', 'Nob', 'Bahian', 'a', '', 'kinshen bahian', 0, '65ccb47277bfa1.58823222', NULL, 'male', -17, '2006-07-21', NULL),
(9, '123121333131', 'Nicklaus', 'Barbon', 'Macarampat', 'a', '', 'kinshen bahian', 0, '65ccb472a9b2e7.82691087', 'Macarampat65cd7106c747f4.94891234.jpg', 'male', -17, '2019-07-20', NULL),
(10, '', 'asd', 'asd', 'asd', 'asd', 'ict', 'asd', 0, NULL, 'asd65d1bd29b9c7d4.71944164.jpg', 'male', 23, NULL, NULL),
(11, '', 'Kinshen', 'Lotlot', 'Bahian', 'a', 'ict', 'Joe Villacorta', 0, NULL, 'Bahian65d1beeb9514f6.70507892.jpg', 'male', 23, NULL, NULL),
(12, '', 'James', 'Red', 'Smith', 'b', 'ict', 'Joe Villacorta', 0, NULL, 'Smith65d1c0532d6148.67140443.jpg', 'male', 23, NULL, NULL),
(13, '', 'Taylor', 'Smith', 'Swift', 'b', 'ict', 'Joe Villacorta', 0, '65d1c2743b5537.41634545', 'Swift65d1c2743b5729.44672215.jpg', 'female', 23, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(15) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `strand` varchar(255) NOT NULL,
  `section` char(2) NOT NULL,
  `grd_lvl` int(12) NOT NULL,
  `sem1_subjects` varchar(255) NOT NULL,
  `sem2_subjects` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `fname`, `lname`, `email`, `pwd`, `strand`, `section`, `grd_lvl`, `sem1_subjects`, `sem2_subjects`, `token`) VALUES
(66, 'Nick', 'Clarito', 'nickcharlesclarito@gmail.com', '123', 'humss', 'A', 11, 'Science,pr2', 'Dolore consectetur ,Reprehenderit veniam,Hic ex re', '986bcb997126bec18f36e09cb96ba298797133eb'),
(67, 'Maria', 'Clarito', 'Maria@gmail.com', '123', 'stem', 'B', 12, '', '', '7b602d003fae4fa9129eba1a06463284b2de7e1d'),
(68, 'Randy', 'Clarito', 'Randy@gmail.com', '123', 'humss', 'f', 12, '', '', 'efa06fde913a37d56de44784b5e1a9633c98c902'),
(70, 'Joe', 'Villacorta', 'Joe@gmail.com', '123', 'ict', 'b', 12, '', '', 'b2e4ca5aed0ea0985c98737ec73ade217868694c'),
(71, 'Jefel', 'Villacorta', 'jefeljoevillacorta@gmail.com', 'jefel123123', 'abm', 'a', 11, '', '', '94e367ec280c5a999036bd9486f6c3e41c0857c9'),
(72, 'Jefel', 'Villacorta', 'jefeljoevillacorta@gmail.com', 'jefel123', 'abm', 'a', 11, '', '', 'b81edf563c2c51c839e406cb7d8f38a320cb4b89'),
(73, 'kinshen', 'bahian', 'kinshen@gmail.com', '123123', 'abm', 'a', 11, '', '', '2967745b38458011778cfcc7ad96df38aa4037d4');

-- --------------------------------------------------------

--
-- Table structure for table `tokens`
--

CREATE TABLE `tokens` (
  `id` int(15) NOT NULL,
  `token` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tokens`
--

INSERT INTO `tokens` (`id`, `token`) VALUES
(93, '808da696b4cabd56be918ce2dab42215f94fc39e'),
(99, '57a7b20d615d7c030930482cc7eb9209156bdaed'),
(100, 'b36811b036803e88833a08031f99fb26e17a1b74');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
