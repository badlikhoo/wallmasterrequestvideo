-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2023 at 06:46 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wallmaster`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `frequest` varchar(256) NOT NULL,
  `lcontent` varchar(256) NOT NULL,
  `lbrand` varchar(255) NOT NULL,
  `lvideotask` varchar(250) NOT NULL,
  `ldaterequest` varchar(259) NOT NULL,
  `lcontentobjectives` varchar(250) NOT NULL,
  `lvideostyles` varchar(250) NOT NULL,
  `lplatforms` varchar(250) NOT NULL,
  `lvideosize` varchar(250) NOT NULL,
  `ltalents` varchar(250) NOT NULL,
  `lstorylinecontent` varchar(255) NOT NULL,
  `lsubmissiondate` varchar(250) NOT NULL,
  `lpreparedbyname` varchar(250) NOT NULL,
  `lpreparedbydate` varchar(250) NOT NULL,
  `lapprovedbyname` varchar(250) NOT NULL,
  `lapprovedbydate` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `frequest`, `lcontent`, `lbrand`, `lvideotask`, `ldaterequest`, `lcontentobjectives`, `lvideostyles`, `lplatforms`, `lvideosize`, `ltalents`, `lstorylinecontent`, `lsubmissiondate`, `lpreparedbyname`, `lpreparedbydate`, `lapprovedbyname`, `lapprovedbydate`) VALUES
(3, 'sufi', '5', 'Nishida', 'doing backflip', '2023-12-05', 'Today ', 'dancing', 'saaca', '50GB', 'dora ', 'sdfsfs', '2023-11-27', 'Alex', '2023-11-28', 'ijat', '2023-12-27'),
(4, 'alip', '5', 'wallmaster', 'move it up', '2023-11-27', 'to show to her children', 'dancing', 'saaca', '50GB', 'dora ', 'content', '2023-12-13', 'fatin', '2023-11-28', 'Puan awin', '2023-12-18'),
(5, 'Azman', '1', 'Nishida', 'doing backflip', '2023-11-27', 'Today ', 'memjauh', 'drone', '5kb', 'Amirul', 'ewfwef', '2023-11-26', 'Alex', '2023-12-05', 'dadadadada', '2024-01-02'),
(6, 'Azman', '5', 'Nishida', 'drone', '2023-12-05', 'to show it', 'dancing', 'teams', '50GB', 'Amirul', 'xfhx', '2023-12-07', 'cik man', '2023-11-28', 'Puan Reen', '2023-12-06'),
(7, 'Azman', '1', 'Nishida', 'drone', '2023-12-05', 'Today ', 'horizontal', 'Smartphone', '50GB', 'Amirul', 'ftftft', '2023-12-20', 'Alex', '2023-12-04', 'the one and only', '2023-12-21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
