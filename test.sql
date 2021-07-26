-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2021 at 11:52 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `file_upload`
--

CREATE TABLE `file_upload` (
  `id` int(5) NOT NULL,
  `file_name` varchar(30) NOT NULL,
  `size` int(40) NOT NULL,
  `cover_page` text NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file_upload`
--

INSERT INTO `file_upload` (`id`, `file_name`, `size`, `cover_page`, `name`) VALUES
(1, 'HandBrake-1.3.3-x86_64-Win_GUI', 13534240, 'pexels-daian-gan-102127.jpg', 'third file'),
(2, 'Django-ToDo-App-with-PostgreSQ', 20089, 'python.jpg', 'new book'),
(3, 'Django-ToDo-App-with-PostgreSQ', 20089, 'python.jpg', 'new book'),
(4, 'Django-ToDo-App-with-PostgreSQ', 20089, 'python.jpg', 'new book'),
(5, 'f178084_f178048_section_E_A3.r', 64905, 'download1.png', 'nwe nwe'),
(6, 'm246_1_solutions.pdf', 3018363, 'r-python.png', '121'),
(7, 'm246_1_solutions.pdf', 3018363, 'r-python.png', '121'),
(8, 'm246_1_solutions.pdf', 3018363, 'r-python.png', '121'),
(9, 'm246_1_solutions.pdf', 3018363, 'r-python.png', '121'),
(10, 'm246_1_solutions.pdf', 3018363, 'r-python.png', '121'),
(11, 'm246_1_solutions.pdf', 3018363, 'r-python.png', '121'),
(12, 'm246_1_solutions.pdf', 3018363, 'r-python.png', '121'),
(13, 'm246_1_solutions.pdf', 3018363, 'r-python.png', '121'),
(14, 'm246_1_solutions.pdf', 3018363, 'r-python.png', '121'),
(15, 'm246_1_solutions.pdf', 3018363, 'r-python.png', '121'),
(16, 'm246_1_solutions.pdf', 3018363, 'r-python.png', '121'),
(17, 'm246_1_solutions.pdf', 3018363, 'r-python.png', '121'),
(18, 'm246_1_solutions.pdf', 3018363, 'r-python.png', '121'),
(19, 'm246_1_solutions.pdf', 3018363, 'r-python.png', '121'),
(20, 'm246_1_solutions.pdf', 3018363, 'r-python.png', '121'),
(21, 'm246_1_solutions.pdf', 3018363, 'r-python.png', '121');

-- --------------------------------------------------------

--
-- Table structure for table `testing`
--

CREATE TABLE `testing` (
  `id` int(10) NOT NULL,
  `fname` varchar(10) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `phone` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testing`
--

INSERT INTO `testing` (`id`, `fname`, `lname`, `email`, `pass`, `phone`) VALUES
(1, 'Muhammad', 'Arslan', 'hatevanisher123@gmai', '827ccb0eea8a706c4c34', 2147483647),
(2, 'Muhammad', 'Arslan', 'hatevanisher123@gmai', '827ccb0eea8a706c4c34', 2147483647),
(3, 'Muhammad', 'Arslan', 'hatevanisher123@gmai', '827ccb0eea8a706c4c34', 2147483647),
(4, 'Muhammad', 'Umer', 'hatevanisher@gmail.c', '25f9e794323b453885f5', 2147483647),
(5, 'Muhammad', 'Umer', 'hatevanisher@gmail.c', '6531401f9a6807306651', 2147483647),
(7, 'asd', 'df', 'asdf@gmail.com', 'e120ea280aa50693d556', 12345678),
(8, 'naveed', 'q', 'naveed.qadir@gmail.com', '1adbb3178591fd5bb0c2', 2147483647),
(9, 'hello', 'world', 'helloworld@gmail.com', 'b064a40df0455d40026e', 123456),
(12, 'abcd', 'efgh', 'abcd@gmail.com', '46040c38d1cbe8ffcd3d', 321654),
(15, 'm', 'umer', 'umer@gmail.com', 'c0cf0c6ff624bccc1c55', 321654),
(16, 'asdasd', 'sf', 'email@gmail.com', '1919bfc4fa95c7f6b231', 12345),
(17, 'ds', 'as', 'enter@gmail.com', '7de366b2b5f55f3cfa8b', 12345678),
(18, 'ad', 'er', 'hello@gmail.com', '53e6086284353cb73d49', 32165),
(19, 'naveed', 'qadir', 'naveed@gmail.com', '817695ff6eef77b08f0b', 123456);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `file_upload`
--
ALTER TABLE `file_upload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testing`
--
ALTER TABLE `testing`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `file_upload`
--
ALTER TABLE `file_upload`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `testing`
--
ALTER TABLE `testing`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
