-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2015 at 05:58 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manvo`
--

-- --------------------------------------------------------

--
-- Table structure for table `accepted_requests`
--

CREATE TABLE IF NOT EXISTS `accepted_requests` (
  `requestId` int(11) NOT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL,
  `category` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`) VALUES
(1, 'Vegeterian'),
(2, 'Non-Vegeterian'),
(3, 'Snacks'),
(4, 'Break-fast'),
(5, 'Lunch'),
(6, 'Dinner'),
(7, 'Sweets');

-- --------------------------------------------------------

--
-- Table structure for table `chefs`
--

CREATE TABLE IF NOT EXISTS `chefs` (
  `chefId` int(11) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chefs`
--

INSERT INTO `chefs` (`chefId`, `rating`) VALUES
(3, 5),
(6, 2),
(7, 4),
(5, 4);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL,
  `postId` int(11) NOT NULL,
  `commentedBy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cuisine`
--

CREATE TABLE IF NOT EXISTS `cuisine` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cuisine`
--

INSERT INTO `cuisine` (`id`, `name`) VALUES
(1, 'Bengali'),
(2, 'Punjabi'),
(3, 'Kashmiri'),
(4, 'Italian'),
(5, 'Chinese'),
(6, 'Rajasthani'),
(7, 'Gujarati'),
(8, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `ordered_posts`
--

CREATE TABLE IF NOT EXISTS `ordered_posts` (
  `postId` int(11) NOT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ordered_posts`
--

INSERT INTO `ordered_posts` (`postId`, `userId`) VALUES
(1, 1),
(4, 1),
(4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL,
  `cuisineId` int(11) NOT NULL,
  `categoryId` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `spiceLevel` int(1) NOT NULL,
  `description` text NOT NULL,
  `expiresIn` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `veg` int(1) NOT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `cuisineId`, `categoryId`, `name`, `spiceLevel`, `description`, `expiresIn`, `price`, `veg`, `userId`) VALUES
(1, 7, 5, 'Thepla', 2, 'Nice and Crunchy', 2147483647, 100, 1, 3),
(2, 2, 5, 'Naan', 0, 'Soft and fresh.', 2147483647, 10, 1, 4),
(3, 4, 2, 'White-Sauce Pasta', 0, 'White Sauce Penne Vodka', 2147483647, 150, 1, 5),
(4, 5, 3, 'Schezwan rice', 2, '', 2147483647, 75, 0, 6),
(5, 2, 4, 'Aloo Pronthe with Curd', 1, '', 2147483647, 30, 1, 7),
(6, 2, 7, 'Gulab jamun', 0, 'Tasty Home made delicious gulab jamun.', 2147483647, 20, 1, 7);

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE IF NOT EXISTS `requests` (
  `id` int(11) NOT NULL,
  `cuisineId` int(11) NOT NULL,
  `categoryId` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `spiceLevel` int(1) NOT NULL,
  `description` text NOT NULL,
  `needIn` int(11) NOT NULL,
  `proposedPrice` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `veg` int(1) NOT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `cuisineId`, `categoryId`, `name`, `spiceLevel`, `description`, `needIn`, `proposedPrice`, `quantity`, `veg`, `userId`) VALUES
(1, 1, 7, 'Rasgulla', 1, 'Not too sweet', 2147483647, 100, 10, 1, 1),
(2, 2, 5, 'Dal Makhni', 3, 'Not too oily', 2147483647, 250, 1, 1, 2),
(3, 4, 2, 'Italian Pasta', 2, 'White sauce pasta made with minimum veggies and a lot of cheese', 25675757, 200, 2, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `zipcode` int(6) NOT NULL,
  `role` int(1) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `address`, `city`, `state`, `zipcode`, `role`, `username`, `password`, `email`) VALUES
(1, 'Vaibhav', 'RamNagar123', 'Hyderabad', 'Andhra Pradesh', 500062, 1, 'vaibhav9225', 'b4af804009cb036a4ccdc33431ef9ac9', 'vaibhav9225@gmail.com'),
(2, 'Pritika', '123 Yolo', 'Chandigadh', 'Punjab', 41010, 1, 'pritika', 'b4af804009cb036a4ccdc33431ef9ac9', 'pritika@gmail.com'),
(3, 'Aamir', '123 Main road', 'Hyderabad', 'Andhra Pradesh', 500062, 0, 'aamir', 'b4af804009cb036a4ccdc33431ef9ac9', 'aamir@gmail.com'),
(4, 'Nikhil', '123 street', 'Chandigadh', 'Punjab', 41010, 0, 'nikhil', 'b4af804009cb036a4ccdc33431ef9ac9', 'nikhil@gmail.com'),
(5, 'Archana', '#240 sector 18', 'banglore', 'Andhra Pradesh', 500062, 0, 'archana', 'pass1234', 'archana@gmail.com'),
(6, 'priya', 'abc 40', 'banglore', 'Andhra ', 500062, 0, 'priya', 'pass1234', 'priya@1234'),
(7, 'sunita', '67 baag', 'banglore', 'andhra pradesh', 500062, 0, 'sunita', '1234', 'sunita@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cuisine`
--
ALTER TABLE `cuisine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cuisine`
--
ALTER TABLE `cuisine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
