-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2017 at 07:53 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `leave_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `appli`
--

CREATE TABLE `appli` (
  `id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `position` varchar(20) NOT NULL,
  `supervisor` varchar(20) NOT NULL DEFAULT '1st Line Manager',
  `subject` varchar(100) NOT NULL,
  `discription` varchar(100) NOT NULL,
  `sdate` date NOT NULL,
  `edate` date NOT NULL,
  `status` varchar(100) NOT NULL,
  `comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appli`
--

INSERT INTO `appli` (`id`, `p_id`, `first_name`, `last_name`, `position`, `supervisor`, `subject`, `discription`, `sdate`, `edate`, `status`, `comment`) VALUES
(1, 1, 'Ananna', 'Zoha', 'Employee', '1st Line Manager', 'app', 'tour', '2017-04-13', '2017-04-27', 'Approved', 'okkkkk!!!!!!!!!!!!!!');

-- --------------------------------------------------------

--
-- Table structure for table `ppl`
--

CREATE TABLE `ppl` (
  `id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `user_name` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `position` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ppl`
--

INSERT INTO `ppl` (`id`, `first_name`, `last_name`, `user_name`, `email`, `position`, `password`) VALUES
(1, 'Ananna', 'Zoha', 'ana', 'anannasangita07@gmail.com', 'Employee', '12345'),
(2, 'Ananna', 'Zoha', 'ana01', 'anannasangita07@gmail.com', '1st Line Manager', '1234'),
(3, 'Ananna', 'Zoha', 'ana02', 'anannasangita07@gmail.com', 'Employee', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appli`
--
ALTER TABLE `appli`
  ADD PRIMARY KEY (`id`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `ppl`
--
ALTER TABLE `ppl`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appli`
--
ALTER TABLE `appli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ppl`
--
ALTER TABLE `ppl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `appli`
--
ALTER TABLE `appli`
  ADD CONSTRAINT `appli_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `ppl` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
