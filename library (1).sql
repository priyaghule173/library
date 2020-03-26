-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2020 at 11:28 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(4) NOT NULL,
  `bookName` varchar(255) NOT NULL,
  `authorName` varchar(255) NOT NULL,
  `quantity` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `bookName`, `authorName`, `quantity`) VALUES
(1, 'A Smarter way to learn javascript', 'M Myers', 5),
(4, 'The Art of Electronics 2nd Edition', 'Winfield Hill', 5),
(10, 'Practical Electronics for Inventors', 'Simon Monk', 6),
(11, 'Learning Through Discovery', 'Charles Platt', 15),
(13, 'New Features and Good Practices', 'Josh Lockhart', 4),
(15, 'Engineering Mathematics', 'Christopher C. Tisdell', 8),
(16, 'Essential Engineering Mathematics', 'Michael Batty', 11),
(17, 'Automation and Robotics', 'Dr. Miltiadis A. Boboulos', 4),
(18, 'Control Engineering Problems with Solutions', 'Derek P. Atherton', 5),
(19, 'Electrical Power', 'W. J. R. H. Pooler', 12),
(21, 'Electronics: Learning Through Discovery', 'priyag', 13),
(41, 'Electronics: Learning Through Discovery', 'priyag', 13),
(46, 'My New Book ', 'wer', 1);

-- --------------------------------------------------------

--
-- Table structure for table `issuedbooks`
--

CREATE TABLE `issuedbooks` (
  `id` int(4) NOT NULL,
  `studentName` varchar(200) NOT NULL,
  `bookName` varchar(200) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `returnDate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issuedbooks`
--

INSERT INTO `issuedbooks` (`id`, `studentName`, `bookName`, `contact`, `returnDate`) VALUES
(45, 'Afzal Khan', 'My New Book', '03258546523', '02-dec-16'),
(47, 'abdullah', 'Practical Electronics for Inventors', '03432195645', '10-sep'),
(48, 'abdullah', 'New Features and Good Practices', '03432195645', '18-nov'),
(52, 'priya ghule', 'A Smarter way to learn javascript', '3443', '12'),
(53, 'priya ghule', 'A Smarter way to learn javascript', '3443', '3443');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(4) NOT NULL,
  `name` text NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `password`) VALUES
(1, 'priya', '123'),
(2, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(4) NOT NULL,
  `stuName` varchar(255) NOT NULL,
  `stuEmail` varchar(30) NOT NULL,
  `stuPass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `stuName`, `stuEmail`, `stuPass`) VALUES
(3, 'priya', 'priya@gmail.com', '123'),
(4, 'Kamran', 'kamran@gmail.com', 'kamran123'),
(7, 'apurva', 'apurva@hortnaill.com', 'karachi123'),
(9, 'Arbaz Khan', 'afzal@gmail.com', '789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issuedbooks`
--
ALTER TABLE `issuedbooks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `issuedbooks`
--
ALTER TABLE `issuedbooks`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
